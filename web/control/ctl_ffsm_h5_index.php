<?php
if( !defined('CORE') ) exit('Request Error!');
/**
 * 首页控制器
 *
 * @version 2013.07.05
 */
class ctl_ffsm_h5_index
{

	public static $userinfo;
	public static $control;
	public $cache_enable = true;//缓存开关,调试时可设为false
	public $cachetime    = 7200;//缓存时间,秒(注意:内容页缓存是单独的在video_view中设置)
	public $cache_prefix = 'm.ss230.com';
	public $cache_key    = 'h5_index/index';
	public $str_where_ext = '`status`!=9';

	public function __construct()
	{
		if (empty($this->items))
		{
			$this->items = new items();
		}

		tpl::assign('web_url',URL);

		$pid = mod_topic::get_p_id();//获取一级栏目
		tpl::assign('pid',$pid);

		//获取广告
		//$this->getAd();
		$public_hand_data_cache = cache::get($this->cache_prefix,'public_hand_data');
		if($public_hand_data_cache==''){
			$public_hand_data = mod_index::get_public_hand();//获取公用部分手动数据
			cache::set($this->cache_prefix,'public_hand_data',$public_hand_data,$this->cachetime); //写缓存
		}else{
			$public_hand_data = $public_hand_data_cache;//获取公用部分手动数据
		}
		
		tpl::assign('public_hand_data',$public_hand_data);
		if(isset($_SERVER['REQUEST_URI']) && false !== stripos($_SERVER['REQUEST_URI'],'clearcache')){
			$this->cache_enable = false;
		}

	}



    public function bazi2(){
                
                $tpl     = 'ffsm/bazi3.tpl';
                        
                        $content = tpl::fetch($tpl);
                        exit($content);
    }


    public function xmfx2(){
                $tpl     = 'ffsm/xmfx2.tpl';
                        $content = tpl::fetch($tpl);
                        exit($content);
    }


	/**
	 *首页
	 */
	public function index()
	{
		$content      = array();
		if($this->cache_enable)
		{
			$content = cache::get($this->cache_prefix,'index');
		}
        
        $content = '';
		if(empty($content))
		{
			$hand_type_arr = array('index_test');//手动数据
			$handtype_arr = $this->items->getHandTypeId($hand_type_arr);
			$mixdata = $this->items->get_attay_hand_data($handtype_arr);
			tpl::assign('m', $mixdata);//<--END 手动数据

			$zgjm_new_data = mod_index::get_data('zgjm_data','',1,18);
			tpl::assign('zgjm_new_data',$zgjm_new_data);

			$seo['title'] = '神算网：最全最准的算命网站';
			$seo['keywords'] = '神算网：最全最准的算命网站';
			$seo['description'] = '神算网：最全最准的算命网站';
			tpl::assign('seo',$seo);
			$tpl     = 'ffsm/index.tpl';
			$content = tpl::fetch($tpl);
			//cache::set($this->cache_prefix,'index',$content,$this->cachetime); //写缓存
			//cache::set_cache_list($this->cache_prefix,'index');

		}
		exit($content);
	}


    public function bazi(){
        $username = req::item('username');
        $gender = req::item('gender');
        $y = req::item('y');
        $m = req::item('m');
        $d = req::item('d');
        $h = req::item('h');
        $i = req::item('i');
        $cY = req::item('cY');
        $cM = req::item('cM');
        $cD = req::item('cD');
        $cH = req::item('cH');
        $term1 = req::item('term1');
        $term2 = req::item('term2');
        $start_term = req::item('start_term');
        $end_term = req::item('end_term');
        $start_term1 = req::item('start_term1');
        $end_term1 = req::item('end_term1');
        $lDate = req::item('lDate');
		
		$moneys = $GLOBALS['config']['money']['bazi'];
		tpl::assign('money',$moneys);

        $oid = req::item('oid');
        $token = req::item('token');
		
        if($username!=''){
			
            $oid = date('YmdGis').time();
			
            $des = $username.'的八字精批';
            $data = array('username'=>$username,'gender'=>$gender,'y'=>$y,'m'=>$m,'d'=>$d,'h'=>$h,'i'=>$i,'cY'=>$cY,'cM'=>$cM,'cD'=>$cD,'cH'=>$cH,'term1'=>$term1
            ,'term2'=>$term2,'start_term'=>$start_term,'end_term'=>$end_term,'start_term1'=>$start_term1,'end_term1'=>$end_term1,'lDate'=>$lDate);
            $datas = array('data'=>urlencode(json_encode($data)),'oid'=>$oid,'createtime'=>time(),'type'=>1,'ip'=>util::get_client_ip(),'des'=>$des,'money'=>$moneys);
            mod_order::add_order($datas);
            mod_order::set_history($oid);
            tpl::assign('oid',$oid);
            tpl::assign('des',$des);
            tpl::assign('names',$data);
			
            $tpl     = 'ffsm/bazi_order.tpl';
        }elseif($oid!=''){
            if($token==base64_encode(md5($oid))){
                $row = mod_order::get_order($oid);
                if($row['status']!=1){
                    tpl::assign('oid',$row['oid']);
                    tpl::assign('des',$row['des']);
                    tpl::assign('data',json_decode(urldecode($row['data']),true));
                    $tpl     = 'ffsm/bazi_order.tpl';
                }else{

                    $return = mod_ffsm_bazi::bazi($row);
                    $yuefen = mod_ffsm_bazi::yuefen($return['user']['sx']);
                    $return['sx']['yf'] = $yuefen;

                    tpl::assign('return',$return);
                    $pp = mod_ffsm_bazi::bazipp($row);
                    tpl::assign('pp',$pp);
                    $row['data'] = json_decode(urldecode($row['data']),true);
                    tpl::assign('data',$row);
                    $tpl     = 'ffsm/bazi_find.tpl';
                }
            }else{
                die('验证失败!');
            }

        }else{
            $tpl     = 'ffsm/bazi3.tpl';
        }
        $content = tpl::fetch($tpl);
        exit($content);
    }

//八字综合分析
    public function bazizh(){
        $username = req::item('username');
        $gender = req::item('gender');
        $y = req::item('y');
        $m = req::item('m');
        $d = req::item('d');
        $h = req::item('h');
        $i = req::item('i');
        $cY = req::item('cY');
        $cM = req::item('cM');
        $cD = req::item('cD');
        $cH = req::item('cH');
        $term1 = req::item('term1');
        $term2 = req::item('term2');
        $start_term = req::item('start_term');
        $end_term = req::item('end_term');
        $start_term1 = req::item('start_term1');
        $end_term1 = req::item('end_term1');
        $lDate = req::item('lDate');
		
		$moneys = $GLOBALS['config']['money']['bazizh'];
		tpl::assign('money',$moneys);
		
		

        $oid = req::item('oid');
        $token = req::item('token');
        if($username!=''){
            $oid = date('YmdGis').time();
            $des = $username.'的八字精批';
            $data = array('username'=>$username,'gender'=>$gender,'y'=>$y,'m'=>$m,'d'=>$d,'h'=>$h,'i'=>$i,'cY'=>$cY,'cM'=>$cM,'cD'=>$cD,'cH'=>$cH,'term1'=>$term1
            ,'term2'=>$term2,'start_term'=>$start_term,'end_term'=>$end_term,'start_term1'=>$start_term1,'end_term1'=>$end_term1,'lDate'=>$lDate);
            $datas = array('data'=>urlencode(json_encode($data)),'oid'=>$oid,'createtime'=>time(),'type'=>6,'ip'=>util::get_client_ip(),'des'=>$des,'money'=>$moneys);
            mod_order::add_order($datas);
            mod_order::set_history($oid);
			
            tpl::assign('oid',$oid);
            tpl::assign('des',$des);
            tpl::assign('names',$data);
            $tpl     = 'ffsm/bazizh_order.tpl';
        }elseif($oid!=''){
            if($token==base64_encode(md5($oid))){
                $row = mod_order::get_order($oid);
				
				
				
                if($row['status']!=1){
                    tpl::assign('oid',$row['oid']);
                    tpl::assign('des',$row['des']);
                    tpl::assign('data',json_decode(urldecode($row['data']),true));
                    $tpl     = 'ffsm/bazizh_order.tpl';
                }else{

                    $return = mod_ffsm_bazizh::bazizh($row);
                    $yuefen = mod_ffsm_bazizh::yuefen($return['user']['sx']);
                    $return['sx']['yf'] = $yuefen;

                    tpl::assign('return',$return);
                    $pp = mod_ffsm_bazizh::bazipp($row);
                    tpl::assign('pp',$pp);
                    $row['data'] = json_decode(urldecode($row['data']),true);
                    tpl::assign('data',$row);
                    $tpl     = 'ffsm/bazizh_find.tpl';
                }
            }else{
                die('验证失败!');
            }

        }else{
            $tpl     = 'ffsm/bazizh.tpl';
        }
        $content = tpl::fetch($tpl);
        exit($content);
    }
	
//姻缘测试
    public function yinyuancs(){
        $username = req::item('username');
        $gender = req::item('gender');
        $y = req::item('y');
        $m = req::item('m');
        $d = req::item('d');
        $h = req::item('h');
        $i = req::item('i');
        $cY = req::item('cY');
        $cM = req::item('cM');
        $cD = req::item('cD');
        $cH = req::item('cH');
        $term1 = req::item('term1');
        $term2 = req::item('term2');
        $start_term = req::item('start_term');
        $end_term = req::item('end_term');
        $start_term1 = req::item('start_term1');
        $end_term1 = req::item('end_term1');
        $lDate = req::item('lDate');
		
		$moneys = $GLOBALS['config']['money']['yinyuancs'];
		tpl::assign('money',$moneys);
		
		

        $oid = req::item('oid');
        $token = req::item('token');
        if($username!=''){
            $oid = date('YmdGis').time();
            $des = $username.'的八字精批';
            $data = array('username'=>$username,'gender'=>$gender,'y'=>$y,'m'=>$m,'d'=>$d,'h'=>$h,'i'=>$i,'cY'=>$cY,'cM'=>$cM,'cD'=>$cD,'cH'=>$cH,'term1'=>$term1
            ,'term2'=>$term2,'start_term'=>$start_term,'end_term'=>$end_term,'start_term1'=>$start_term1,'end_term1'=>$end_term1,'lDate'=>$lDate);
            $datas = array('data'=>urlencode(json_encode($data)),'oid'=>$oid,'createtime'=>time(),'type'=>7,'ip'=>util::get_client_ip(),'des'=>$des,'money'=>$moneys);
            mod_order::add_order($datas);
            mod_order::set_history($oid);
			
            tpl::assign('oid',$oid);
            tpl::assign('des',$des);
            tpl::assign('names',$data);
            $tpl     = 'ffsm/yinyuancs_order.tpl';
        }elseif($oid!=''){
            if($token==base64_encode(md5($oid))){
                $row = mod_order::get_order($oid);
				
				
				
                if($row['status']!=1){
                    tpl::assign('oid',$row['oid']);
                    tpl::assign('des',$row['des']);
                    tpl::assign('data',json_decode(urldecode($row['data']),true));
                    $tpl     = 'ffsm/yinyuancs_order.tpl';
                }else{

                    $return = mod_ffsm_yinyuancs::yinyuancs($row);
                    $yuefen = mod_ffsm_yinyuancs::yuefen($return['user']['sx']);
                    $return['sx']['yf'] = $yuefen;

                    tpl::assign('return',$return);
                    $pp = mod_ffsm_bazi::bazipp($row);
                    tpl::assign('pp',$pp);
                    $row['data'] = json_decode(urldecode($row['data']),true);
                    tpl::assign('data',$row);
                    $tpl     = 'ffsm/yinyuancs_find.tpl';
                }
            }else{
                die('验证失败!');
            }

        }else{
            $tpl     = 'ffsm/yinyuancs.tpl';
        }
        $content = tpl::fetch($tpl);
        exit($content);
    }

    public function hehun(){

        $username = req::item('username');
        $year = req::item('year');
        $month = req::item('month');
        $day = req::item('day');
        $hour = req::item('hour','0');
        $girl_username = req::item('girl_username');
        $girl_year = req::item('girl_year');
        $girl_month = req::item('girl_month');
        $girl_day = req::item('girl_day');
        $girl_hour = req::item('girl_hour','0');
        $oid = req::item('oid');
        $token = req::item('token');

        if($username){
            $oid = date('YmdGis').time();
            $des = $username.'与'.$girl_username.'的八字合婚';
            $data = array('username'=>$username,'year'=>$year,'month'=>$month,'day'=>$day,'hour'=>$hour,'girl_username'=>$girl_username,'girl_year'=>$girl_year,'girl_month'=>$girl_month,'girl_day'=>$girl_day,'girl_hour'=>$girl_hour);
            $datas = array('data'=>urlencode(json_encode($data)),'oid'=>$oid,'createtime'=>time(),'type'=>2,'ip'=>util::get_client_ip(),'des'=>$des,'money'=>'88');

            mod_order::add_order($datas);
            mod_order::set_history($oid);
            tpl::assign('oid',$oid);
            tpl::assign('des',$des);
            tpl::assign('data',$data);
            $tpl     = 'ffsm/hehun_order.tpl';
        }elseif($oid!=''){
            //验证付款
            if($token==base64_encode(md5($oid))){

                $row = mod_order::get_order($oid);
                $row['data'] = json_decode(urldecode($row['data']),true);

                if($row['status']!=1){
                    tpl::assign('oid',$row['oid']);
                    tpl::assign('des',$row['des']);
                    tpl::assign('data',$row['data']);
                    $tpl     = 'ffsm/hehun_order.tpl';
                }else{
                    $data = mod_ffsm_peidui::hehun($row['data']);

                    print_r($data);

                    tpl::assign('data',$data);
                    $tpl     = 'ffsm/hehun_find.tpl';
                }
            }else{
                die('验证失败!');
            }

        }else{
            $tpl     = 'ffsm/hehun.tpl';
        }

        $content = tpl::fetch($tpl);
        exit($content);
    }

    public function xmfx(){
        $xing = req::item('xing');
        $username = req::item('username');
        $gender = req::item('gender');

        $y = req::item('y');
        $m = req::item('m');
        $d = req::item('d');
        $h = req::item('h');

        $cY = req::item('cY');
        $cM = req::item('cM');
        $cD = req::item('cD');
        $cH = req::item('cH');
        $term1 = req::item('term1');
        $term2 = req::item('term2');
        $start_term = req::item('start_term');
        $end_term = req::item('end_term');
        $start_term1 = req::item('start_term1');
        $end_term1 = req::item('end_term1');
        $lDate = req::item('lDate');
		
		$moneys = $GLOBALS['config']['money']['xmfx'];
		tpl::assign('money',$moneys);

        $oid = req::item('oid');
        $token = req::item('token');
        if($username){
			
            $oid = date('YmdGis').time();
            $des = $xing.$username.'的姓名详解';
            $data = array('xing'=>$xing,'username'=>$username,'gender'=>$gender,'y'=>$y,'m'=>$m,'d'=>$d,'h'=>$h,'i'=>'','cY'=>$cY,'cM'=>$cM,'cD'=>$cD,'cH'=>$cH,'term1'=>$term1
            ,'term2'=>$term2,'start_term'=>$start_term,'end_term'=>$end_term,'start_term1'=>$start_term1,'end_term1'=>$end_term1,'lDate'=>$lDate);
            $datas = array('data'=>urlencode(json_encode($data)),'oid'=>$oid,'createtime'=>time(),'type'=>3,'ip'=>util::get_client_ip(),'des'=>$des,'money'=>$moneys);
            mod_order::add_order($datas);
            mod_order::set_history($oid);

            $info = mod_ffsm_xingming::xmfx($data);
            tpl::assign('return',$info);
            tpl::assign('oid',$oid);
            tpl::assign('des',$des);
            tpl::assign('data',$data);
			
            $tpl     = 'ffsm/xmfx_order.tpl';
        }elseif($oid!=''){
            //验证付款
            if($token==base64_encode(md5($oid))){
                $row = mod_order::get_order($oid);
                $row['data']=json_decode(urldecode($row['data']),true);
                $info = mod_ffsm_xingming::xmfx($row['data']);
                if($row['status']!=1){
                    tpl::assign('return',$info);
                    tpl::assign('oid',$row['oid']);
                    tpl::assign('des',$row['des']);
                    tpl::assign('data',$row['data']);
                    $tpl     = 'ffsm/xmfx_order.tpl';
                }else{

                    tpl::assign('return',$info);
                    tpl::assign('oid',$row['oid']);
                    tpl::assign('des',$row['des']);
                    tpl::assign('data',$row['data']);
                    $tpl     = 'ffsm/xmfx_find.tpl';
                }
            }else{
                die('验证失败!');
            }

        }else{
            $tpl     = 'ffsm/xmfx.tpl';
        }

        $content = tpl::fetch($tpl);
        exit($content);
    }

    public function xmpd(){
        $malexing = req::item('malexing');
        $malename = req::item('malename');
        $femalexing = req::item('femalexing');
        $femalename = req::item('femalename');
        $oid = req::item('oid');
        $token = req::item('token');
		$moneys = $GLOBALS['config']['money']['xmpd'];
		
		tpl::assign('money',$moneys);
        if($malexing){
			
			
			
            $oid = date('YmdGis').time();
            $des = $malexing.$malename.'与'.$femalexing.$femalename.'的姓名配对';
            $data = array('malexing'=>$malexing,'malename'=>$malename,'femalexing'=>$femalexing,'femalename'=>$femalename);
            $datas = array('data'=>urlencode(json_encode($data)),'oid'=>$oid,'createtime'=>time(),'type'=>4,'ip'=>util::get_client_ip(),'des'=>$des,'money'=>$moneys);
            mod_order::add_order($datas);
            mod_order::set_history($oid);
            tpl::assign('oid',$oid);
            tpl::assign('des',$des);
            tpl::assign('data',$data);
			tpl::assign('wx','111');
			if ( strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false ) {//微信内
					tpl::assign('wx','0');
            }
            $tpl     = 'ffsm/xmpd_order.tpl';
        }elseif($oid!=''){
            //验证付款

            if($token==base64_encode(md5($oid))){
                $row = mod_order::get_order($oid);

                if($row['status']!=1){
                    tpl::assign('oid',$row['oid']);
                    tpl::assign('des',$row['des']);

                    tpl::assign('data',json_decode(urldecode($row['data']),true));
                    $tpl     = 'ffsm/xmpd_order.tpl';
                }else{

                    $return = mod_ffsm::xmfx($row);

                    tpl::assign('return',$return);
                    $row['data'] = json_decode(urldecode($row['data']),true);
                    tpl::assign('data',$row);
                    $tpl     = 'ffsm/xmpd_find.tpl';
                }
            }else{
                die('验证失败!');
            }

        }else{
            $tpl     = 'ffsm/xmpd.tpl';
        }
        $content = tpl::fetch($tpl);
        exit($content);
    }
//八字分析免费
    public function bazimf(){
        $username = req::item('username');
        $gender = req::item('gender');
        $y = req::item('y');
        $m = req::item('m');
        $d = req::item('d');
        $h = req::item('h');
        $i = req::item('i');
        $cY = req::item('cY');
        $cM = req::item('cM');
        $cD = req::item('cD');
        $cH = req::item('cH');
        $term1 = req::item('term1');
        $term2 = req::item('term2');
        $start_term = req::item('start_term');
        $end_term = req::item('end_term');
        $start_term1 = req::item('start_term1');
        $end_term1 = req::item('end_term1');
        $lDate = req::item('lDate');
		
		$moneys = $GLOBALS['config']['money']['bazimf'];
		tpl::assign('money',$moneys);
		
		

        $oid = req::item('oid');
        $token = req::item('token');
        if($username!=''){
            $oid = date('YmdGis').time();
            $des = $username.'的八字精批';
            $data = array('username'=>$username,'gender'=>$gender,'y'=>$y,'m'=>$m,'d'=>$d,'h'=>$h,'i'=>$i,'cY'=>$cY,'cM'=>$cM,'cD'=>$cD,'cH'=>$cH,'term1'=>$term1
            ,'term2'=>$term2,'start_term'=>$start_term,'end_term'=>$end_term,'start_term1'=>$start_term1,'end_term1'=>$end_term1,'lDate'=>$lDate);
            $datas = array('data'=>urlencode(json_encode($data)),'oid'=>$oid,'createtime'=>time(),'type'=>8,'ip'=>util::get_client_ip(),'des'=>$des,'money'=>$moneys);
            mod_order::add_order($datas);
            mod_order::set_history($oid);
			
            tpl::assign('oid',$oid);
            tpl::assign('des',$des);
            tpl::assign('names',$data);
            $tpl     = 'ffsm/bazimf_order.tpl';
        }elseif($oid!=''){
            if($token==base64_encode(md5($oid))){
                $row = mod_order::get_order($oid);
				
				
				
                if($row['status']!=1){
                    tpl::assign('oid',$row['oid']);
                    tpl::assign('des',$row['des']);
                    tpl::assign('data',json_decode(urldecode($row['data']),true));
                    $tpl     = 'ffsm/bazimf_order.tpl';
                }else{

                    $return = mod_ffsm_bazimf::bazimf($row);
                    $yuefen = mod_ffsm_bazimf::yuefen($return['user']['sx']);
                    $return['sx']['yf'] = $yuefen;

                    tpl::assign('return',$return);
                    $pp = mod_ffsm_bazimf::bazipp($row);
                    tpl::assign('pp',$pp);
                    $row['data'] = json_decode(urldecode($row['data']),true);
                    tpl::assign('data',$row);
                    $tpl     = 'ffsm/bazimf_find.tpl';
                }
            }else{
                die('验证失败!');
            }

        }else{
            $tpl     = 'ffsm/bazimf.tpl';
        }
        $content = tpl::fetch($tpl);
        exit($content);
    }
//八字综合分析微信
    public function baziwx(){
        $username = req::item('username');
        $gender = req::item('gender');
        $y = req::item('y');
        $m = req::item('m');
        $d = req::item('d');
        $h = req::item('h');
        $i = req::item('i');
        $cY = req::item('cY');
        $cM = req::item('cM');
        $cD = req::item('cD');
        $cH = req::item('cH');
        $term1 = req::item('term1');
        $term2 = req::item('term2');
        $start_term = req::item('start_term');
        $end_term = req::item('end_term');
        $start_term1 = req::item('start_term1');
        $end_term1 = req::item('end_term1');
        $lDate = req::item('lDate');
		
		$moneys = $GLOBALS['config']['money']['baziwx'];
		tpl::assign('money',$moneys);
		
		

        $oid = req::item('oid');
        $token = req::item('token');
        if($username!=''){
            $oid = date('YmdGis').time();
            $des = $username.'的八字精批';
            $data = array('username'=>$username,'gender'=>$gender,'y'=>$y,'m'=>$m,'d'=>$d,'h'=>$h,'i'=>$i,'cY'=>$cY,'cM'=>$cM,'cD'=>$cD,'cH'=>$cH,'term1'=>$term1
            ,'term2'=>$term2,'start_term'=>$start_term,'end_term'=>$end_term,'start_term1'=>$start_term1,'end_term1'=>$end_term1,'lDate'=>$lDate);
            $datas = array('data'=>urlencode(json_encode($data)),'oid'=>$oid,'createtime'=>time(),'type'=>9,'ip'=>util::get_client_ip(),'des'=>$des,'money'=>$moneys);
            mod_order::add_order($datas);
            mod_order::set_history($oid);
			
            tpl::assign('oid',$oid);
            tpl::assign('des',$des);
            tpl::assign('names',$data);
            $tpl     = 'ffsm/baziwx_order.tpl';
        }elseif($oid!=''){
            if($token==base64_encode(md5($oid))){
                $row = mod_order::get_order($oid);
				
				
				
                if($row['status']!=1){
                    tpl::assign('oid',$row['oid']);
                    tpl::assign('des',$row['des']);
                    tpl::assign('data',json_decode(urldecode($row['data']),true));
                    $tpl     = 'ffsm/baziwx_order.tpl';
                }else{

                    $return = mod_ffsm_baziwx::baziwx($row);
                    $yuefen = mod_ffsm_baziwx::yuefen($return['user']['sx']);
                    $return['sx']['yf'] = $yuefen;

                    tpl::assign('return',$return);
                    $pp = mod_ffsm_baziwx::bazipp($row);
                    tpl::assign('pp',$pp);
                    $row['data'] = json_decode(urldecode($row['data']),true);
                    tpl::assign('data',$row);
                    $tpl     = 'ffsm/baziwx_find.tpl';
                }
            }else{
                die('验证失败!');
            }

        }else{
            $tpl     = 'ffsm/baziwx.tpl';
        }
        $content = tpl::fetch($tpl);
        exit($content);
    }

    public function ziwei(){
        $username = req::item('username');
        $gender = req::item('gender');
        $y = req::item('y');
        $m = req::item('m');
        $d = req::item('d');
        $h = req::item('h');
        $oid = req::item('oid');
        $token = req::item('token');

        $cY = req::item('cY');
        $cM = req::item('cM');
        $cD = req::item('cD');
        $cH = req::item('cH');
        $term1 = req::item('term1');
        $term2 = req::item('term2');
        $start_term = req::item('start_term');
        $end_term = req::item('end_term');
        $start_term1 = req::item('start_term1');
        $end_term1 = req::item('end_term1');
        $lDate = req::item('lDate');

        if($username){
            $oid = date('YmdGis').time();
            $des = $username.'的紫薇排盘';
            $data = array('username'=>$username,'gender'=>$gender,'y'=>$y,'m'=>$m,'d'=>$d,'h'=>$h,'cY'=>$cY,'cM'=>$cM,'cD'=>$cD,'cH'=>$cH,'term1'=>$term1
            ,'term2'=>$term2,'start_term'=>$start_term,'end_term'=>$end_term,'start_term1'=>$start_term1,'end_term1'=>$end_term1,'lDate'=>$lDate);
            $datas = array('data'=>urlencode(json_encode($data)),'oid'=>$oid,'createtime'=>time(),'type'=>5,'ip'=>util::get_client_ip(),'des'=>$des,'money'=>'128');
            $return = mod_ffsm_ziwei::ziwei($data);
            tpl::assign('return',$return);


            mod_order::add_order($datas);
            mod_order::set_history($oid);
            tpl::assign('oid',$oid);
            tpl::assign('des',$des);
            tpl::assign('data',$data);
            $tpl     = 'ffsm/ziwei_order.tpl';
        }elseif($oid!=''){
            //验证付款
            if($token==base64_encode(md5($oid))){
                $row = mod_order::get_order($oid);
                $row['data']=json_decode(urldecode($row['data']),true);
                $return = mod_ffsm_ziwei::ziwei($row['data']);

                if($row['status']!=1){
                    tpl::assign('return',$return);
                    tpl::assign('oid',$row['oid']);
                    tpl::assign('des',$row['des']);

                    tpl::assign('data',($row['data']));
                    $tpl     = 'ffsm/ziwei_order.tpl';
                }else{
                    $tpl     = 'ffsm/ziwei_find.tpl';
                }
            }else{
                die('验证失败!');
            }

        }else{
            $tpl     = 'ffsm/ziwei.tpl';
        }

        $content = tpl::fetch($tpl);
        exit($content);
    }

    public function select_orders(){
        $oid = req::item('oid');
        $row = mod_order::get_order($oid);

        if($row==''){
            header("Content-type:text/html;charset=utf-8");
            die("没有该订单!");
            //die("<script> alert('请输入关键字');</script>");
        }else{
            $ac=mod_order::typetochannel($row['type']);
            $url = "/?ac=".$ac."&oid=".$row['oid']."&token=".base64_encode(md5($row['oid']));
            header('Location:'.$url);
            exit;
        }
    }

    public function history(){
        $orders= mod_order::get_history();

        foreach($orders as $k=>$v){
            $orders_arr = mod_order::get_order($v);
            $data[] = $orders_arr;

            $ac=mod_order::typetochannel($orders_arr['type']);
            $data[$k]['url'] = "/?ac=".$ac."&oid=".$orders_arr['oid']."&token=".base64_encode(md5($orders_arr['oid']));

        }

        tpl::assign('data',$data);
        $tpl     = 'ffsm/history.tpl';
        $content = tpl::fetch($tpl);
        exit($content);
    }


    public function feedback(){

        $data['username'] = req::item('username');
                $data['payment_time'] = req::item('payment_time');
                $data['typeid'] = req::item('typeid');
                        $data['contact_type'] = req::item('contact_type');
                        $data['contact_wx'] = req::item('contact_wx');
                                $data['contact_email'] = req::item('contact_email');
                                $data['contact_phone'] = req::item('contact_phone');

                                        if($data['username']){
                                                       //$falg = mod_order::add_feedback($data);
                                                                   if($falg){
                                                                                       die("<script> alert('已经收到您的反馈,我们会第一时间跟进处理!');parent.location.href='/'; </script>");
                                                                                                   }
                                                               }
        
        $tpl     = 'ffsm/feedback.tpl';
        $content = tpl::fetch($tpl);
        exit($content);
    }


    public function about(){
        $tpl     = 'ffsm/about.tpl';
        $content = tpl::fetch($tpl);
        exit($content);
    }


    public function contact(){
        $tpl     = 'ffsm/contact.tpl';
        $content = tpl::fetch($tpl);
        exit($content);
    }


    public function send_test(){

        $post_data = array('Sex'=>1,'Solar'=>1,'Year'=>'1988','Month'=>1,'Day'=>'2','Hour'=>'1','Leap'=>'0','FUNC'=>'Basic');
        $msg = send("https://fate.windada.com/cgi-bin/predict", $post_data);
        print_r($msg);

    }




}
