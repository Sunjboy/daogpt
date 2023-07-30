<?php /* Smarty version 2.6.25, created on 2017-11-28 19:31:01
         compiled from index/index.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link type="text/css" rel="stylesheet" href="/static/bazi/css/suanming/v2/fortune.css"/>
<script>
    var txt = document.getElementById("chat_txt").value;
    var form = document.getElementById("chat_form");
    form.addEventListener("submit", chatResponse);
    function chatResponse() 
    {
        if txt.length == 0: return;
        appendMessage(msg)
        // appendMessage()
    }
    function appendMessage(msg)
    {
        var elem_li = document.createElement('li').setAttribute('bot_output'); // 生成一个 li元素
        elem_li.innerHTML = msg; // 设置元素的内容
        document.getElementById('chat_list').appendChild(elem_li);
    }
</script>
<div class="wrapper">
    <div class="main">
        <div class="menu_xy">
            <div class="menu_xy_inner">
                <ul class="clearfix">
                   <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/public/top_nav.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </ul>
            </div>
        </div>
        <!--<div class="menu">
            <div class="menu_con clearfix">
                <dl class="menuNav1">
                    <dt>算命大全</dt>
                    <dd>
                        <ul class="clearfix">
                            <li><a href="/suanming/scbz/" title="生辰八字">生辰八字</a></li>
                            <li><a href="/suanming/rglm/" title="日干论命">日干论命</a></li>
                            <li><a href="/suanming/cglm/" title="称骨论命">称骨论命</a></li>
                            <li><a href="/suanming/bzcs/" title="八字测算">八字测算</a></li>
                            <li><a href="/suanming/sscy/" title="三世财运">三世财运</a></li>
                            <li><a href="/paipan/bazi/" title="八字排盘">八字排盘</a></li>
                            <li><a href="/paipan/liuren/" title="六壬排盘">六壬排盘</a></li>
                            <li><a href="/paipan/liuyao/" title="六爻起卦">六爻起卦</a></li>
                            <li><a href="/paipan/ziwei/" title="紫微斗数">紫微斗数</a></li>
                            <li><a href="/paipan/qimen/" title="奇门遁甲">奇门遁甲</a></li>
                            <li><a href="/paipan/xuankong/" title="玄空飞星">玄空飞星</a></li>
                            <li><a href="/xingming/xmfx/" title="名字算命">名字算命</a></li>

                        </ul>
                    </dd>
                </dl>
                <dl class="menuNav2">
                    <dt>情侣配对</dt>
                    <dd>
                        <ul class="clearfix">
                            <li><a href="/peidui/hehun/" title="八字合婚">八字合婚</a></li>
                            <li><a href="/peidui/xingzuo/" title="星座配对">星座配对</a></li>
                            <li><a href="/peidui/shengxiao/" title="生肖配对">生肖配对</a></li>
                            <li><a href="/xingming/xmpd/" title="姓名配对">姓名配对</a></li>
                            <li><a href="/peidui/xuexing/" title="血型配对">血型配对</a></li>
                            <li><a href="/peidui/qq/" title="QQ配对">Q Q配对</a></li>
                            <li><a style="color:#F00" href="/2016/" title="2016运程">2023运</a></li>
                            <li><a style="color:#F00" href="/suanming/fscs/" title="风水测算">风水测算</a></li>
                        </ul>
                    </dd>
                </dl>
                <dl class="menuNav3">
                    <dt>号码吉凶</dt>
                    <dd>
                        <ul class="clearfix">
                            <li><a href="/haoma/shouji/" title="手机测吉凶">手机测吉凶</a></li>
                            <li><a href="/haoma/dianhua/" title="电话测吉凶">电话测吉凶</a></li>
                            <li><a href="/haoma/qq/" title="QQ测吉凶">Q Q测吉凶</a></li>
                            <li><a href="/haoma/chepai/" title="车牌测吉凶">车牌测吉凶</a></li>
                        </ul>
                    </dd>
                </dl>
                <dl class="menuNav4">
                    <dt>抽签占卜</dt>
                    <dd>
                        <ul class="clearfix">
                            <li><a href="/chouqian/guanyin/" title="观音灵签">观音灵签</a></li>
                            <li><a href="/chouqian/lvzu/" title="吕祖灵签">吕祖灵签</a></li>
                            <li><a href="/chouqian/huangdaxian/" title="黄大仙灵签">大仙灵签</a></li>
                            <li><a href="/chouqian/guandi/" title="关帝灵签">关帝灵签</a></li>
                            <li><a href="/chouqian/tianhou/" title="天后灵签">天后灵签</a></li>
                            <li><a href="/chouqian/zhugeliang/" title="诸葛测字">诸葛测字</a></li>
                            <li><a href="/haoma/shengrimima/" title="生日密码">生日密码</a></li>
                            <li><a href="/hdjr/" title="黄道吉日">黄道吉日</a></li>
                        </ul>
                    </dd>
                </dl>
                <dl class="menuNav5">
                    <dt>民间测算</dt>
                    <dd>
                        <ul class="clearfix">
                            <li><a href="/minjian/zhiwen/" title="指纹算命">指纹算命</a></li>
                            <li><a href="/minjian/shouxiang/ganqingxian/" title="手相查询">手相查询</a></li>
                            <li><a href="/minjian/zhixiang/" title="痣相图解">痣相图解</a></li>
                            <li><a href="/minjian/snsn/" title="生男生女预测">生男生女</a></li>
                            <li><a href="/minjian/yantiao/" title="眼皮跳吉凶">眼跳吉凶</a></li>
                            <li><a href="/minjian/dapenti/" title="打喷嚏吉凶">喷嚏吉凶</a></li>
                            <li><a href="/xingming/qiming/" title="在线起名">在线起名</a></li>
                            <li><a href="/xingming/dzqiming/" title="定字起名">定字起名</a></li>
                        </ul>
                    </dd>
                </dl>
                <dl class="menuNav6">
                    <dt>其他</dt>
                    <dd>
                        <ul class="clearfix">
                            <li><a href="/zgjm/" title="周公解梦">周公解梦</a></li>
                            <li><a href="/xingzuo/" title="十二星座">十二星座</a></li>
                            <li><a href="/xingming/gsqm/" style="color:#F00" title="公司起名">公司起名</a></li>
                            <li><a href="/shengxiao/" title="生肖性格">生肖性格</a></li>
                            <li><a href="/list-345.html" title="星座分析">星座分析</a></li>
                            <li><a href="/list-346.html" title="心理测试大全">心理测试</a></li>
                            <li><a href="/list-347.html" title="风水学">风水命理</a></li>
                            <li><a href="/list-471.html" title="生肖分析">生肖分析</a></li>
                        </ul>
                    </dd>
                </dl>
            </div>
        </div>
	-->
        <div class="cont">

            <div class="col_left">
                <div class="fn_cs fn_part mod_box_t1">
                    <div class="hd">
                        <h1>算命大全</h1>
                    </div>
                    <div class="bd">
                        <div class="intro_area"><strong>「生辰八字算命」</strong>八字完全是由人的出生时间所确定，是指人出生年月日时的干支表示，又有年柱、月柱、日柱、时柱之分，而且每柱有2字，一共有八个字，所以称为"八字"，又叫「四柱八字」！
                        </div>
                        <div class="mod_box_t3 fn_box">

                            <div class="box_con">

                                <form action="<?php echo $this->_tpl_vars['web_url']; ?>
index.php" name="login" method="post" onSubmit="return checkForm();">

                                    <div class="mod_form">

                                        <div class="form_item">

                                            姓：<input type="text" name="xing" id="xing" value="" class="ipt_text" />

                                            名：<input type="text" name="name" id="ming" value="" class="ipt_text" />

                                            &nbsp;<input type="radio" checked="checked" value="0" id="male" class="ipt_radio" name="sex"><label for="male">男</label>

                                            &nbsp;<input type="radio" value="1" id="female" class="ipt_radio" name="sex"><label for="female">女</label>



                                        </div>

                                        <div class="form_item">

                                            出生日期（公历）&nbsp;

                                            <select class="select" name="y" id="gl_year">
                                            <?php $datetime = date('Y',time()); for($i=1910;$i<$datetime;$i++){ ?>
                                            <?php if($i==1988){$se='selected';}else{$se='';} ?>
                                            <option value="<?=$i?>" <?=$se?>><?=$i?></option>
                                            <?php }?>
                                            </select> 年

                                            <select class="select" name="m" id="gl_month">
												<option value="1" >1</option><option value="2" >2</option><option value="3" >3</option><option value="4" >4</option><option value="5" >5</option><option value="6" >6</option><option value="7" >7</option><option value="8" >8</option><option value="9" >9</option><option value="10" >10</option><option value="11" >11</option><option value="12" selected>12</option>
                                            </select> 月

                                            <select class="select" name="d" id="gl_day">
                                                <?php for($i=1;$i<32;$i++){ ?>
                                                <?php if($i==date('d',time())){$se='selected';}else{$se='';} ?>
                                                <option value="<?=$i?>" <?=$se?>><?=$i?></option>
                                                <?php }?>
                                            </select> 日
                                            <select class="select" name="h" id="hour">
                                                <option value="0">0&nbsp;子</option>
                                                <option value="1">1&nbsp;丑</option>
                                                <option value="2">2&nbsp;丑</option>
                                                <option value="3">3&nbsp;寅</option>
                                                <option value="4">4&nbsp;寅</option>
                                                <option value="5">5&nbsp;卯</option>
                                                <option value="6">6&nbsp;卯</option>
                                                <option value="7">7&nbsp;辰</option>
                                                <option value="8">8&nbsp;辰</option>
                                                <option value="9">9&nbsp;巳</option>
                                                <option value="10">10&nbsp;巳</option>
                                                <option value="11">11&nbsp;午</option>
                                                <option value="12">12&nbsp;午</option>
                                                <option value="13">13&nbsp;未</option>
                                                <option value="14">14&nbsp;未</option>
                                                <option value="15">15&nbsp;申</option>
                                                <option value="16">16&nbsp;申</option>
                                                <option value="17">17&nbsp;酉</option>
                                                <option value="18">18&nbsp;酉</option>
                                                <option value="19">19&nbsp;戌</option>
                                                <option value="20">20&nbsp;戌</option>
                                                <option value="21">21&nbsp;亥</option>
                                                <option value="22">22&nbsp;亥</option>
                                                <option value="23">23&nbsp;子</option>
                                            </select> 时
                                        </div>

										<input type="hidden" name=ct  value="suanming">
                                        <input type="hidden" name=ac  value="sm_form">
                                        <input type="hidden" name=cY  value="">
                                        <input type="hidden" name=cM  value="">
                                        <input type="hidden" name=cD  value="">
                                        <input type="hidden" name=cH  value="">
                                        <input type="hidden" name=term1  value="">
                                        <input type="hidden" name=term2  value="">
                                        <input type="hidden" name=start_term  value="">
                                        <input type="hidden" name=end_term  value="">
                                        <input type="hidden" name=start_term1  value="">
                                        <input type="hidden" name=end_term1  value="">
                                        <input type="hidden" name=lDate  value="">

                                        <div class="btn_item">

                                            <button class="btn_orange" type="submit" id="btn_begincs">开始算命</button>

                                        </div>
                                    </div>
                                </form>
                                
                                <div class="help_area">
                                    <span class="help_tit"><i></i>相关帮助：</span>
                                    [<a href="<?php echo $this->_tpl_vars['web_url']; ?>
hdjr/yinyangli/" target="_blank">阴阳历转换</a>]
                                </div>

                            </div>

                            <i class="flag_tl_t3"></i><i class="flag_tr_t3"></i><i class="flag_bl_t3"></i><i class="flag_br_t3"></i>

                        </div>
                        
                        <div class="relateLinks">
                            <a href="/suanming/scbz/">生辰八字</a>
                            <a href="/suanming/rglm/">日干论命</a>
                            <a href="/suanming/cglm/">称骨论命</a>
                            <a href="/suanming/sscy/">三世财运</a>
                            <a href="/suanming/bzcs/">八字测算</a>
                        </div>
<!-- 			<div class="mod_box_t3 fn_box">
				<div class="box_con">
					<form action="/chat.php" method="post">
						<label for="chat_input">请输入你的问题：</label>
						<input type="text" id="chat_input" placeholder="处女座性格特点">
						<input class="btn_orange_1" type="submit" value=" 发送">
						
					</form>
				</div>
			</div> -->
            <div class="mod_box_t3 fn_box">
                <ul class="chat_list" id='chat_list'>
                    <li class='bot_output'>吾乃神算子，施主有何疑问？</li>
                </ul>
                <div class="box_con">
                    <form action="" method="post" id='chat_form'>
                        <input class="txt_input" id='chat_txt' type="text"  placeholder="处女座性格特点">
                        <input class="btn_orange_1" id='chat_submit' type="submit" value="发送">                        
                    </form>
                </div>
            </div>


                        <div class="in_haoma clearfix">
                            <div class="intro_area"><strong><a href="/xingming/xmfx/">「姓名算命」</a></strong>千古不传的秘密,流落民间的八字知识秘籍,姓名学的五格就是，天格、人格、地格、外格、总格。三才配置天格、地格、人格，五行配置所发生的凶吉影响力...来给你的名字测试打分吧！</div>
                            <div class="intro_area"><strong><a href="/xingming/qiming/">「在线起名」</a></strong>古语云"宁可生错命，不可起错名"，一个好的名字，不仅给别人印象深刻，而且还关系到人一生的事业、婚姻、健康和人际关系
                            </div>
                            <div class="form_item mod_box_t3 form_sj">
                                <form name="from1" action="<?php echo $this->_tpl_vars['web_url']; ?>
index.php" method="post" onSubmit="return chkfrom_xm();">
                                    <h3>名字算命</h3>
                                    <span class="form_name">姓：</span><input type="text" name="xing" id="shouji_haoma_num" class="ipt_text ipt_textx"/>
                                    <span class="form_name">名：</span><input type="text" name="ming" id="shouji_haoma_num2" class="ipt_text ipt_textm"/>
                                    <input type="hidden" name="ac" value="xmfx">
                                    <input type="hidden" name="ct" value="xingming">
                                    <input class="btn_orange_1" type="submit" value="姓名算命">

                                    <i class="flag_tl_t3"></i>
                                    <i class="flag_tr_t3"></i>
                                    <i class="flag_bl_t3"></i>
                                    <i class="flag_br_t3"></i>
                                </form>
                            </div>
                            <div class="form_item mod_box_t3 form_dh">
                                <form action="<?php echo $this->_tpl_vars['web_url']; ?>
index.php" method="post" onSubmit="return chkfrom_qm();">
                                    <h3>在线起名</h3>
                                    <span class="form_name">姓：</span><input type="text" id="qmxing" name="xing" class="ipt_text ipt_textm"/>
                                    <input type="hidden" name="ac" value="qiming" />
                                	<input type="hidden" name="ct" value="xingming" />
                                    <input class="btn_orange_1" type="submit" value="在线起名">
                                    <i class="flag_tl_t3"></i>
                                    <i class="flag_tr_t3"></i>
                                    <i class="flag_bl_t3"></i>
                                    <i class="flag_br_t3"></i>
                                </form>
                            </div>
                        </div>

                    </div>
                    <i class="flag_tl_t1"></i><i class="flag_tr_t1"></i><i class="flag_bl_t1"></i><i class="flag_br_t1"></i>
                </div>
                <?php /*$_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/public/left_hotnav_zgjm.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
		 */?>
                <?php/* $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/public/left_index.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
		 */?>
                
                <!--<div class="mod_box_t2">
				<div class="hd">
					<h3>开运网 - 最全最准的算命网站</h3>
					<i class="flag_l_t2"></i>
					<i class="flag_r_t2"></i>
				</div>              
				<div class="bd">
					<div class="info_area ss_xz_txt">
                        <h4>关于开运网</h4>
                        <p>开运网免费是依据测算者提供的信息综合天干地支五行八卦综合分析为你指点解惑，最全最准的免费算命网站。</p>
                        <h4>实用的应用</h4>
						<p class="info_areaLogo"><img alt="开运网网" src="/static/bazi/images/logo.png" height="66"></p>
                        <p>开运网（www.03ky.com）算命最全最准的免费网站提供专业的周易生辰八字、日干论命、称骨论命、三世财运、八字测算、风水测算、等免费算命大全，提供个人名字分析、宝宝在线起名、定字起名、企业公司起名算命大全，提供每天星座运势、每周每年星座爱情运势、上升星座、每日生日花、生日密码、生日书查询等星座解读，在线抽签包括观音灵签、黄大仙灵签、关帝灵签、吕祖灵签、月老灵签、车公灵签，诸葛神算等测试，每年最新生肖运势、历史上的今天、最全黄历、吉日宜忌、择日、阴阳历查询等功能...<br />
                        
                        <p class="red">分享正能量让更多的朋友知道<strong>开运网</strong>第一时间看运势、财运、命理！
                        阴阳平衡，五行相生，如何提升健康、财运、感情、事业、学业五大运势！风水、家居、开运，秘而不宣的改运秘诀;每天分享星座分析、心理测试、风水命理、生肖详解等八字百科知识。
                        </p>
                        <div class="clear"></div>
					</div>
				</div>
			</div>-->
			
            </div>
		
            <!--<div id="col_right" class="col_right">
				<?php /*$_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/public/right.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
				 */ ?>
            </div>-->
	
        </div>

    </div>

    <script type="text/javascript" src="/static/bazi/js/suanming.js"></script>

</div>

<!--<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>-->

