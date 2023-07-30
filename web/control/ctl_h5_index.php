<?php
if( !defined('CORE') ) exit('Request Error!');
/**
 * 首页控制器
 *
 * @version 2013.07.05
 */
class ctl_h5_index
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

	/**
	 * 获取广告
	 */
	private function getAd()
	{
		$ad = cache::get($this->cache_prefix,'public_ad');
		if(empty($ad)){
			//后台广告,根据页面获得

			$ad = $this->items->getAdCodeTypeArr(array('common'));
			cache::set($this->cache_prefix,'public_ad',$ad,$this->cachetime); //写缓存
		}
		tpl::assign('ad', $ad);
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
			$tpl     = 'h5/index.tpl';
			$content = tpl::fetch($tpl);
			//cache::set($this->cache_prefix,'index',$content,$this->cachetime); //写缓存
			//cache::set_cache_list($this->cache_prefix,'index');

		}

		exit($content);
	}

	public function html404(){
		$tpl     = 'index/404.tpl';
		$content = tpl::fetch($tpl);
		exit($content);
	}




}