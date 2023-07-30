<?php /* Smarty version 2.6.25, created on 2017-12-04 01:11:24
         compiled from h5/xingzuo/yunshi.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'h5/xingzuo/yunshi.tpl', 129, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './h5/header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<style>
.albAdd dl {
overflow: hidden;
    margin-bottom: 15px;
}
.albAdd dl dt {
    width: 98px;
    float: left;
}

.albAdd dl dd {
    margin-left: 110px;
}

.albAdd dl strong.fcolor {
    margin-top:5px;
    display: block;
    text-align: center;
    color:#935422;
    font-weight:normal;
}

.albAdd dl span.fc2 {
    font-size: 12px;
    text-align: center;
    display: block;
    margin-top: 3px;
}

.albAdd dl dt img {
    width:98px;
    height:98px;
    margin-top:10px;
    border-radius: 50%;
    overflow: hidden;
    display: block;
    margin-bottom:5px;
}
.albAdd .desc{
    font-size:14px;
    line-height:24px;
    padding:0 6px;
}
.albAdd .m ul li{display:inline-block; border:0;}
.albAdd dd ul li em{display: inline-block; width:70px;}
.albAdd .star_b{display: inline-block; height:13px; position:relative; background:url(http://www.ss230.com/static/bazi/images/xingzuo/v2/icon_star.png) no-repeat 0 0; background-size:cover;}
.albAdd .star_f{position:absolute; top:0; left:0; height:13px; background:url(http://www.ss230.com/static/bazi/images/xingzuo/v2/icon_star.png) no-repeat -70px 0; background-size:cover;}
</style>
<script>stepMenu();</script>
<div id="path">
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './h5/public/path.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>

<h1 class="title"><?php echo $this->_tpl_vars['seo']['name']; ?>
-解梦</h1>
<form name=form1 action="/index.php" method="post">
	<input type="hidden" name="ct" value="h5_zgjm">
	<input type="hidden" name="ac" value="search">

	<div id="se_wrap">

		<div id="se_inner">

			<input type="text" name="q" maxLength=32 class="se-input" onBlur="if (value==''){value='请输入梦见了什么'}" onFocus="if (value=='请输入梦见了什么') {value=''}" value="请输入梦见了什么">

			<div id="cross"></div>

		</div>

		<input id="se_bn" type="submit" name="submit1" value="解梦">

	</div>

</form>


<div class="detail">

	<h3 class="suanmingDetail_title">十二星座最新文章</h3>

	<div class="mainBox">

		<div class="suanmingDetail_info">

			<div class="xz_nav sss sss1" style="display: block;  height:auto;">

				<ul class="clearbox">

					<li><a class="x1" href="/xingzuo/baiyang/"><img src="/static/img/xingzuo/1.png" alt="白羊座"></a><span>白羊座</span></li>

					<li><a class="x2" href="/xingzuo/jinniu/"><img src="/static/img/xingzuo/2.png" alt="金牛座"></a><span>金牛座</span></li>

					<li><a class="x3" href="/xingzuo/shuangzi/"><img src="/static/img/xingzuo/3.png" alt="双子座"></a><span>双子座</span></li>

					<li><a class="x4" href="/xingzuo/juxie/"><img src="/static/img/xingzuo/4.png" alt="巨蟹座"></a><span>巨蟹座</span></li>

					<li><a class="x5" href="/xingzuo/shizi/"><img src="/static/img/xingzuo/5.png" alt="狮子座"></a><span>狮子座</span></li>

					<li><a class="x6" href="/xingzuo/chunv/"><img src="/static/img/xingzuo/6.png" alt="处女座"></a><span>处女座</span></li>

					<li><a class="x7" href="/xingzuo/tiancheng/"><img src="/static/img/xingzuo/7.png" alt="天秤座"></a><span>天秤座</span></li>

					<li><a class="x8" href="/xingzuo/tianxie/"><img src="/static/img/xingzuo/8.png" alt="天蝎座"></a><span>天蝎座</span></li>

					<li><a class="x9" href="/xingzuo/sheshou/"><img src="/static/img/xingzuo/9.png" alt="射手座"></a><span>射手座</span></li>

					<li><a class="x10" href="/xingzuo/mojie/"><img src="/static/img/xingzuo/10.png" alt="摩羯座"></a><span>摩羯座</span></li>

					<li><a class="x11" href="/xingzuo/shuiping/"><img src="/static/img/xingzuo/11.png" alt="水瓶座"></a><span>水瓶座</span></li>

					<li><a class="x12" href="/xingzuo/shuangyu/"><img src="/static/img/xingzuo/12.png" alt="双鱼座"></a><span>双鱼座</span></li>

				</ul>

			</div>

		</div>

	</div>


	<!---->
	<div id="list">
		<h1 class="fc1">十二星座今日运势 <small class="fc2"><?php echo date('Y年-m月-d日',time()); ?></small></h1>
		<div class="alb albAdd">
			<div class="al al1">
				<h3><strong class="fl"><a href="/xingzuo/baiyang/">白羊座运势</a></strong><span class="fr"><a href="/xingzuo/baiyang/" target="_blank">特点</a><a href="/list-345-1.html" target="_blank">专区</a></span></h3>
				<dl><dt><a href="/xingzuo/baiyang/"><img src="http://www.ss230.com/static/xingzuo/static/images/astro_simg/1.gif" alt="白羊座"></a><strong class="fcolor">3.21-4.20</strong></dt>
					<dd><ul><li><label>整体运势：</label><em><span class="star_b"><span class="star_f" style="width:<?php echo $this->_tpl_vars['xz_yunshi']['401']['content']['gongzuo']; ?>
px;"></span></span></em></li><li><label>爱情运势：</label><em><span class="star_b"><span class="star_f" style="width:<?php echo $this->_tpl_vars['xz_yunshi']['401']['content']['gongzuo']; ?>
px;"></span></span></em></li><li><label>事业学业：</label><em><span class="star_b"><span class="star_f" style="width:<?php echo $this->_tpl_vars['xz_yunshi']['401']['content']['gongzuo']; ?>
px;"></span></span></em></li><li><label>财富运势：</label><em><span class="star_b"><span class="star_f" style="width:<?php echo $this->_tpl_vars['xz_yunshi']['401']['content']['caiyun']; ?>
px;"></span></span></em></li></ul></dd></dl><div class="desc"><?php echo ((is_array($_tmp=$this->_tpl_vars['xz_yunshi']['401']['des'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 68) : smarty_modifier_truncate($_tmp, 68)); ?>
[<a href="/xingzuo/baiyang/">详细</a>]</div>
				<div class="m"><ul>
						<li><a href="/xingzuo/baiyang/today/" title="白羊座今日运势">今日</a></li>
						<li><a href="/xingzuo/baiyang/tomorrow/" title="白羊座明日运势">明日</a></li>
						<li><a href="/xingzuo/baiyang/week" title="白羊座本周运势">本周</a></li>
						<li><a href="/xingzuo/baiyang/month" title="白羊座本月运势">本月</a></li>
						<li><a href="/xingzuo/baiyang/year" title="白羊座今年运势">今年</a></li>
						<li><a href="/xingzuo/baiyang/love" title="白羊座爱情运势">爱情</a></li>
						<li><a href="/xingzuo/baiyang/" title="白羊座运势走势">走势</a></li>
					</ul></div>
			</div>
			<div class="al al2">
				<h3><strong class="fl"><a href="/xingzuo/jinniu/">金牛座运势</a></strong><span class="fr"><a href="/xingzuo/jinniu/" target="_blank">特点</a><a href="/list-345-2.html" target="_blank">专区</a></span></h3>
				<dl><dt><a href="/xingzuo/jinniu"><img src="http://www.ss230.com/static/xingzuo/static/images/astro_simg/2.gif" alt="金牛座"></a><strong class="fcolor">4.21-5.21</strong></dt>
					<dd><ul><li><label>整体运势：</label><em><span class="star_b"><span class="star_f" style="width:<?php echo $this->_tpl_vars['xz_yunshi']['402']['content']['zonghe']; ?>
px;"></span></span></em></li><li><label>爱情运势：</label><em><span class="star_b"><span class="star_f" style="width:<?php echo $this->_tpl_vars['xz_yunshi']['402']['content']['aiqing']; ?>
px;"></span></span></em></li><li><label>事业学业：</label><em><span class="star_b"><span class="star_f" style="width:<?php echo $this->_tpl_vars['xz_yunshi']['402']['content']['gongzuo']; ?>
px;"></span></span></em></li><li><label>财富运势：</label><em><span class="star_b"><span class="star_f" style="width:<?php echo $this->_tpl_vars['xz_yunshi']['402']['content']['caiyun']; ?>
px;"></span></span></em></li></ul></dd></dl><div class="desc"><?php echo ((is_array($_tmp=$this->_tpl_vars['xz_yunshi']['402']['des'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 68) : smarty_modifier_truncate($_tmp, 68)); ?>
[<a href="/xingzuo/jinniu/">详细</a>]</div>
				<div class="m"><ul>
						<li><a href="/xingzuo/jinniu/today/" title="金牛座今日运势">今日</a></li>
						<li><a href="/xingzuo/jinniu/tomorrow/" title="金牛座明日运势">明日</a></li>
						<li><a href="/xingzuo/jinniu/week" title="金牛座本周运势">本周</a></li>
						<li><a href="/xingzuo/jinniu/month" title="金牛座本月运势">本月</a></li>
						<li><a href="/xingzuo/jinniu/year" title="金牛座今年运势">今年</a></li>
						<li><a href="/xingzuo/jinniu/love" title="金牛座爱情运势">爱情</a></li>
						<li><a href="/xingzuo/jinniu/" title="金牛座运势走势">走势</a></li>
					</ul></div>
			</div>
			<div class="al al0">
				<h3><strong class="fl"><a href="/xingzuo/shuangzi/">双子座运势</a></strong><span class="fr"><a href="/xingzuo/shuangzi/" target="_blank">特点</a><a href="/list-345-3.html" target="_blank">专区</a></span></h3>
				<dl><dt><a href="/xingzuo/shuangzi"><img src="http://www.ss230.com/static/xingzuo/static/images/astro_simg/3.gif" alt="双子座"></a><strong class="fcolor">5.22-6.21</strong></dt>
					<dd><ul><li><label>整体运势：</label><em><span class="star_b"><span class="star_f" style="width:<?php echo $this->_tpl_vars['xz_yunshi']['403']['content']['zonghe']; ?>
px;"></span></span></em></li><li><label>爱情运势：</label><em><span class="star_b"><span class="star_f" style="width:<?php echo $this->_tpl_vars['xz_yunshi']['403']['content']['aiqing']; ?>
px;"></span></span></em></li><li><label>事业学业：</label><em><span class="star_b"><span class="star_f" style="width:<?php echo $this->_tpl_vars['xz_yunshi']['403']['content']['gongzuo']; ?>
px;"></span></span></em></li><li><label>财富运势：</label><em><span class="star_b"><span class="star_f" style="width:<?php echo $this->_tpl_vars['xz_yunshi']['403']['content']['caiyun']; ?>
px;"></span></span></em></li></ul></dd></dl><div class="desc"><?php echo ((is_array($_tmp=$this->_tpl_vars['xz_yunshi']['403']['des'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 68) : smarty_modifier_truncate($_tmp, 68)); ?>
[<a href="/xingzuo/shuangzi/">详细</a>]</div>
				<div class="m"><ul>
						<li><a href="/xingzuo/shuangzi/today/" title="双子座今日运势">今日</a></li>
						<li><a href="/xingzuo/shuangzi/tomorrow/" title="双子座明日运势">明日</a></li>
						<li><a href="/xingzuo/shuangzi/week" title="双子座本周运势">本周</a></li>
						<li><a href="/xingzuo/shuangzi/month" title="双子座本月运势">本月</a></li>
						<li><a href="/xingzuo/shuangzi/year" title="双子座今年运势">今年</a></li>
						<li><a href="/xingzuo/shuangzi/love" title="双子座爱情运势">爱情</a></li>
						<li><a href="/xingzuo/shuangzi/" title="双子座运势走势">走势</a></li>
					</ul></div>
			</div>
			<div class="al al1">
				<h3><strong class="fl"><a href="/xingzuo/juxie/">巨蟹座运势</a></strong><span class="fr"><a href="/xingzuo/juxie/" target="_blank">特点</a><a href="/list-345-4.html" target="_blank">专区</a></span></h3>
				<dl><dt><a href="/xingzuo/juxie"><img src="http://www.ss230.com/static/xingzuo/static/images/astro_simg/4.gif" alt="巨蟹座"></a><strong class="fcolor">6.22-7.22</strong></dt>
					<dd><ul><li><label>整体运势：</label><em><span class="star_b"><span class="star_f" style="width:<?php echo $this->_tpl_vars['xz_yunshi']['404']['content']['zonghe']; ?>
px;"></span></span></em></li><li><label>爱情运势：</label><em><span class="star_b"><span class="star_f" style="width:<?php echo $this->_tpl_vars['xz_yunshi']['404']['content']['aiqing']; ?>
px;"></span></span></em></li><li><label>事业学业：</label><em><span class="star_b"><span class="star_f" style="width:<?php echo $this->_tpl_vars['xz_yunshi']['404']['content']['gongzuo']; ?>
px;"></span></span></em></li><li><label>财富运势：</label><em><span class="star_b"><span class="star_f" style="width:<?php echo $this->_tpl_vars['xz_yunshi']['404']['content']['caiyun']; ?>
px;"></span></span></em></li></ul></dd></dl><div class="desc"><?php echo ((is_array($_tmp=$this->_tpl_vars['xz_yunshi']['404']['des'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 68) : smarty_modifier_truncate($_tmp, 68)); ?>
[<a href="/xingzuo/juxie/">详细</a>]</div>
				<div class="m"><ul>
						<li><a href="/xingzuo/juxie/today/" title="巨蟹座今日运势">今日</a></li>
						<li><a href="/xingzuo/juxie/tomorrow/" title="巨蟹座明日运势">明日</a></li>
						<li><a href="/xingzuo/juxie/week" title="巨蟹座本周运势">本周</a></li>
						<li><a href="/xingzuo/juxie/month" title="巨蟹座本月运势">本月</a></li>
						<li><a href="/xingzuo/juxie/year" title="巨蟹座今年运势">今年</a></li>
						<li><a href="/xingzuo/juxie/love" title="巨蟹座爱情运势">爱情</a></li>
						<li><a href="/xingzuo/juxie/" title="巨蟹座运势走势">走势</a></li>
					</ul></div>
			</div>
			<div class="al al2">
				<h3><strong class="fl"><a href="/xingzuo/shizi/">狮子座运势</a></strong><span class="fr"><a href="/xingzuo/shizi/" target="_blank">特点</a><a href="/list-345-5.html" target="_blank">专区</a></span></h3>
				<dl><dt><a href="/xingzuo/shizi"><img src="http://www.ss230.com/static/xingzuo/static/images/astro_simg/5.gif" alt="狮子座"></a><strong class="fcolor">7.23-8.22</strong></dt>
					<dd><ul><li><label>整体运势：</label><em><span class="star_b"><span class="star_f" style="width:<?php echo $this->_tpl_vars['xz_yunshi']['405']['content']['zonghe']; ?>
px;"></span></span></em></li><li><label>爱情运势：</label><em><span class="star_b"><span class="star_f" style="width:<?php echo $this->_tpl_vars['xz_yunshi']['405']['content']['aiqing']; ?>
px;"></span></span></em></li><li><label>事业学业：</label><em><span class="star_b"><span class="star_f" style="width:<?php echo $this->_tpl_vars['xz_yunshi']['405']['content']['gongzuo']; ?>
px;"></span></span></em></li><li><label>财富运势：</label><em><span class="star_b"><span class="star_f" style="width:<?php echo $this->_tpl_vars['xz_yunshi']['405']['content']['caiyun']; ?>
px;"></span></span></em></li></ul></dd></dl><div class="desc"><?php echo ((is_array($_tmp=$this->_tpl_vars['xz_yunshi']['405']['des'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 68) : smarty_modifier_truncate($_tmp, 68)); ?>
[<a href="/xingzuo/shizi/">详细</a>]</div>
				<div class="m"><ul>
						<li><a href="/xingzuo/shizi/today/" title="狮子座今日运势">今日</a></li>
						<li><a href="/xingzuo/shizi/tomorrow/" title="狮子座明日运势">明日</a></li>
						<li><a href="/xingzuo/shizi/week" title="狮子座本周运势">本周</a></li>
						<li><a href="/xingzuo/shizi/month" title="狮子座本月运势">本月</a></li>
						<li><a href="/xingzuo/shizi/year" title="狮子座今年运势">今年</a></li>
						<li><a href="/xingzuo/shizi/love" title="狮子座爱情运势">爱情</a></li>
						<li><a href="/xingzuo/shizi/" title="狮子座运势走势">走势</a></li>
					</ul></div>
			</div>
			<div class="al al0">
				<h3><strong class="fl"><a href="/xingzuo/chunv/">处女座运势</a></strong><span class="fr"><a href="/xingzuo/chunv/" target="_blank">特点</a><a href="/list-345-6.html" target="_blank">专区</a></span></h3>
				<dl><dt><a href="/xingzuo/chunv"><img src="http://www.ss230.com/static/xingzuo/static/images/astro_simg/6.gif" alt="处女座"></a><strong class="fcolor">8.23-9.23</strong></dt>
					<dd><ul><li><label>整体运势：</label><em><span class="star_b"><span class="star_f" style="width:<?php echo $this->_tpl_vars['xz_yunshi']['406']['content']['zonghe']; ?>
px;"></span></span></em></li><li><label>爱情运势：</label><em><span class="star_b"><span class="star_f" style="width:<?php echo $this->_tpl_vars['xz_yunshi']['406']['content']['aiqing']; ?>
px;"></span></span></em></li><li><label>事业学业：</label><em><span class="star_b"><span class="star_f" style="width:<?php echo $this->_tpl_vars['xz_yunshi']['406']['content']['gongzuo']; ?>
px;"></span></span></em></li><li><label>财富运势：</label><em><span class="star_b"><span class="star_f" style="width:<?php echo $this->_tpl_vars['xz_yunshi']['406']['content']['caiyun']; ?>
px;"></span></span></em></li></ul></dd></dl><div class="desc"><?php echo ((is_array($_tmp=$this->_tpl_vars['xz_yunshi']['406']['des'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 68) : smarty_modifier_truncate($_tmp, 68)); ?>
[<a href="/xingzuo/chunv/">详细</a>]</div>
				<div class="m"><ul>
						<li><a href="/xingzuo/chunv/today/" title="处女座今日运势">今日</a></li>
						<li><a href="/xingzuo/chunv/tomorrow/" title="处女座明日运势">明日</a></li>
						<li><a href="/xingzuo/chunv/week" title="处女座本周运势">本周</a></li>
						<li><a href="/xingzuo/chunv/month" title="处女座本月运势">本月</a></li>
						<li><a href="/xingzuo/chunv/year" title="处女座今年运势">今年</a></li>
						<li><a href="/xingzuo/chunv/love" title="处女座爱情运势">爱情</a></li>
						<li><a href="/xingzuo/chunv/" title="处女座运势走势">走势</a></li>
					</ul></div>
			</div>
			<div class="al al1">
				<h3><strong class="fl"><a href="/xingzuo/tiancheng/">天秤座运势</a></strong><span class="fr"><a href="/xingzuo/tiancheng/" target="_blank">特点</a><a href="/list-345-7.html" target="_blank">专区</a></span></h3>
				<dl><dt><a href="/xingzuo/tiancheng"><img src="http://www.ss230.com/static/xingzuo/static/images/astro_simg/7.gif" alt="天秤座"></a><strong class="fcolor">9.24-10.23</strong></dt>
					<dd><ul><li><label>整体运势：</label><em><span class="star_b"><span class="star_f" style="width:<?php echo $this->_tpl_vars['xz_yunshi']['407']['content']['zonghe']; ?>
px;"></span></span></em></li><li><label>爱情运势：</label><em><span class="star_b"><span class="star_f" style="width:<?php echo $this->_tpl_vars['xz_yunshi']['407']['content']['aiqing']; ?>
px;"></span></span></em></li><li><label>事业学业：</label><em><span class="star_b"><span class="star_f" style="width:<?php echo $this->_tpl_vars['xz_yunshi']['407']['content']['gongzuo']; ?>
px;"></span></span></em></li><li><label>财富运势：</label><em><span class="star_b"><span class="star_f" style="width:<?php echo $this->_tpl_vars['xz_yunshi']['407']['content']['caiyun']; ?>
px;"></span></span></em></li></ul></dd></dl><div class="desc"><?php echo ((is_array($_tmp=$this->_tpl_vars['xz_yunshi']['407']['des'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 68) : smarty_modifier_truncate($_tmp, 68)); ?>
[<a href="/xingzuo/tiancheng/">详细</a>]</div>
				<div class="m"><ul>
						<li><a href="/xingzuo/tiancheng/today/" title="天秤座今日运势">今日</a></li>
						<li><a href="/xingzuo/tiancheng/tomorrow/" title="天秤座明日运势">明日</a></li>
						<li><a href="/xingzuo/tiancheng/week" title="天秤座本周运势">本周</a></li>
						<li><a href="/xingzuo/tiancheng/month" title="天秤座本月运势">本月</a></li>
						<li><a href="/xingzuo/tiancheng/year" title="天秤座今年运势">今年</a></li>
						<li><a href="/xingzuo/tiancheng/love" title="天秤座爱情运势">爱情</a></li>
						<li><a href="/xingzuo/tiancheng/" title="天秤座运势走势">走势</a></li>
					</ul></div>
			</div>
			<div class="al al2">
				<h3><strong class="fl"><a href="/xingzuo/tianxie/">天蝎座运势</a></strong><span class="fr"><a href="/xingzuo/tianxie/" target="_blank">特点</a><a href="/list-345-8.html" target="_blank">专区</a></span></h3>
				<dl><dt><a href="/xingzuo/tianxie"><img src="http://www.ss230.com/static/xingzuo/static/images/astro_simg/8.gif" alt="天蝎座"></a><strong class="fcolor">10.24-11.22</strong></dt>
					<dd><ul><li><label>整体运势：</label><em><span class="star_b"><span class="star_f" style="width:<?php echo $this->_tpl_vars['xz_yunshi']['408']['content']['zonghe']; ?>
px;"></span></span></em></li><li><label>爱情运势：</label><em><span class="star_b"><span class="star_f" style="width:<?php echo $this->_tpl_vars['xz_yunshi']['408']['content']['aiqing']; ?>
px;"></span></span></em></li><li><label>事业学业：</label><em><span class="star_b"><span class="star_f" style="width:<?php echo $this->_tpl_vars['xz_yunshi']['408']['content']['gongzuo']; ?>
px;"></span></span></em></li><li><label>财富运势：</label><em><span class="star_b"><span class="star_f" style="width:<?php echo $this->_tpl_vars['xz_yunshi']['408']['content']['caiyun']; ?>
px;"></span></span></em></li></ul></dd></dl><div class="desc"><?php echo ((is_array($_tmp=$this->_tpl_vars['xz_yunshi']['408']['des'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 68) : smarty_modifier_truncate($_tmp, 68)); ?>
[<a href="/xingzuo/tianxie/">详细</a>]</div>
				<div class="m"><ul>
						<li><a href="/xingzuo/tianxie/today/" title="天蝎座今日运势">今日</a></li>
						<li><a href="/xingzuo/tianxie/tomorrow/" title="天蝎座明日运势">明日</a></li>
						<li><a href="/xingzuo/tianxie/week" title="天蝎座本周运势">本周</a></li>
						<li><a href="/xingzuo/tianxie/month" title="天蝎座本月运势">本月</a></li>
						<li><a href="/xingzuo/tianxie/year" title="天蝎座今年运势">今年</a></li>
						<li><a href="/xingzuo/tianxie/love" title="天蝎座爱情运势">爱情</a></li>
						<li><a href="/xingzuo/tianxie/" title="天蝎座运势走势">走势</a></li>
					</ul></div>
			</div>
			<div class="al al0">
				<h3><strong class="fl"><a href="/xingzuo/sheshou/">射手座运势</a></strong><span class="fr"><a href="/xingzuo/sheshou/" target="_blank">特点</a><a href="/list-345-9.html" target="_blank">专区</a></span></h3>
				<dl><dt><a href="/xingzuo/sheshou"><img src="http://www.ss230.com/static/xingzuo/static/images/astro_simg/9.gif" alt="射手座"></a><strong class="fcolor">11.23-12.21</strong></dt>
					<dd><ul><li><label>整体运势：</label><em><span class="star_b"><span class="star_f" style="width:<?php echo $this->_tpl_vars['xz_yunshi']['409']['content']['zonghe']; ?>
px;"></span></span></em></li><li><label>爱情运势：</label><em><span class="star_b"><span class="star_f" style="width:<?php echo $this->_tpl_vars['xz_yunshi']['409']['content']['aiqing']; ?>
px;"></span></span></em></li><li><label>事业学业：</label><em><span class="star_b"><span class="star_f" style="width:<?php echo $this->_tpl_vars['xz_yunshi']['409']['content']['gongzuo']; ?>
px;"></span></span></em></li><li><label>财富运势：</label><em><span class="star_b"><span class="star_f" style="width:<?php echo $this->_tpl_vars['xz_yunshi']['409']['content']['caiyun']; ?>
px;"></span></span></em></li></ul></dd></dl><div class="desc"><?php echo ((is_array($_tmp=$this->_tpl_vars['xz_yunshi']['409']['des'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 68) : smarty_modifier_truncate($_tmp, 68)); ?>
[<a href="/xingzuo/sheshou/">详细</a>]</div>
				<div class="m"><ul>
						<li><a href="/xingzuo/sheshou/today/" title="射手座今日运势">今日</a></li>
						<li><a href="/xingzuo/sheshou/tomorrow/" title="射手座明日运势">明日</a></li>
						<li><a href="/xingzuo/sheshou/week" title="射手座本周运势">本周</a></li>
						<li><a href="/xingzuo/sheshou/month" title="射手座本月运势">本月</a></li>
						<li><a href="/xingzuo/sheshou/year" title="射手座今年运势">今年</a></li>
						<li><a href="/xingzuo/sheshou/love" title="射手座爱情运势">爱情</a></li>
						<li><a href="/xingzuo/sheshou/" title="射手座运势走势">走势</a></li>
					</ul></div>
			</div>
			<div class="al al1">
				<h3><strong class="fl"><a href="/xingzuo/mojie/">摩羯座运势</a></strong><span class="fr"><a href="/xingzuo/mojie/" target="_blank">特点</a><a href="/list-345-10.html" target="_blank">专区</a></span></h3>
				<dl><dt><a href="/xingzuo/mojie"><img src="http://www.ss230.com/static/xingzuo/static/images/astro_simg/10.gif" alt="摩羯座"></a><strong class="fcolor">12.22-1.20</strong></dt>
					<dd><ul><li><label>整体运势：</label><em><span class="star_b"><span class="star_f" style="width:<?php echo $this->_tpl_vars['xz_yunshi']['410']['content']['zonghe']; ?>
px;"></span></span></em></li><li><label>爱情运势：</label><em><span class="star_b"><span class="star_f" style="width:<?php echo $this->_tpl_vars['xz_yunshi']['410']['content']['aiqing']; ?>
px;"></span></span></em></li><li><label>事业学业：</label><em><span class="star_b"><span class="star_f" style="width:<?php echo $this->_tpl_vars['xz_yunshi']['410']['content']['gongzuo']; ?>
px;"></span></span></em></li><li><label>财富运势：</label><em><span class="star_b"><span class="star_f" style="width:<?php echo $this->_tpl_vars['xz_yunshi']['410']['content']['caiyun']; ?>
px;"></span></span></em></li></ul></dd></dl><div class="desc"><?php echo ((is_array($_tmp=$this->_tpl_vars['xz_yunshi']['410']['des'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 68) : smarty_modifier_truncate($_tmp, 68)); ?>
[<a href="/xingzuo/mojie/">详细</a>]</div>
				<div class="m"><ul>
						<li><a href="/xingzuo/mojie/today/" title="摩羯座今日运势">今日</a></li>
						<li><a href="/xingzuo/mojie/tomorrow/" title="摩羯座明日运势">明日</a></li>
						<li><a href="/xingzuo/mojie/week" title="摩羯座本周运势">本周</a></li>
						<li><a href="/xingzuo/mojie/month" title="摩羯座本月运势">本月</a></li>
						<li><a href="/xingzuo/mojie/year" title="摩羯座今年运势">今年</a></li>
						<li><a href="/xingzuo/mojie/love" title="摩羯座爱情运势">爱情</a></li>
						<li><a href="/xingzuo/mojie/" title="摩羯座运势走势">走势</a></li>
					</ul></div>
			</div>
			<div class="al al2">
				<h3><strong class="fl"><a href="/xingzuo/shuiping/">水瓶座运势</a></strong><span class="fr"><a href="/xingzuo/shuiping/" target="_blank">特点</a><a href="/list-345-11.html" target="_blank">专区</a></span></h3>
				<dl><dt><a href="/xingzuo/shuiping"><img src="http://www.ss230.com/static/xingzuo/static/images/astro_simg/11.gif" alt="水瓶座"></a><strong class="fcolor">1.21-2.19</strong></dt>
					<dd><ul><li><label>整体运势：</label><em><span class="star_b"><span class="star_f" style="width:<?php echo $this->_tpl_vars['xz_yunshi']['411']['content']['zonghe']; ?>
px;"></span></span></em></li><li><label>爱情运势：</label><em><span class="star_b"><span class="star_f" style="width:<?php echo $this->_tpl_vars['xz_yunshi']['411']['content']['aiqing']; ?>
px;"></span></span></em></li><li><label>事业学业：</label><em><span class="star_b"><span class="star_f" style="width:<?php echo $this->_tpl_vars['xz_yunshi']['411']['content']['gongzuo']; ?>
px;"></span></span></em></li><li><label>财富运势：</label><em><span class="star_b"><span class="star_f" style="width:<?php echo $this->_tpl_vars['xz_yunshi']['411']['content']['caiyun']; ?>
px;"></span></span></em></li></ul></dd></dl><div class="desc"><?php echo ((is_array($_tmp=$this->_tpl_vars['xz_yunshi']['411']['des'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 68) : smarty_modifier_truncate($_tmp, 68)); ?>
[<a href="/xingzuo/shuiping/">详细</a>]</div>
				<div class="m"><ul>
						<li><a href="/xingzuo/shuiping/today/" title="水瓶座今日运势">今日</a></li>
						<li><a href="/xingzuo/shuiping/tomorrow/" title="水瓶座明日运势">明日</a></li>
						<li><a href="/xingzuo/shuiping/week" title="水瓶座本周运势">本周</a></li>
						<li><a href="/xingzuo/shuiping/month" title="水瓶座本月运势">本月</a></li>
						<li><a href="/xingzuo/shuiping/year" title="水瓶座今年运势">今年</a></li>
						<li><a href="/xingzuo/shuiping/love" title="水瓶座爱情运势">爱情</a></li>
						<li><a href="/xingzuo/shuiping/" title="水瓶座运势走势">走势</a></li>
					</ul></div>
			</div>
			<div class="al al0">
				<h3><strong class="fl"><a href="/xingzuo/shuangyu/">双鱼座运势</a></strong><span class="fr"><a href="/xingzuo/shuangyu/" target="_blank">特点</a><a href="/list-345-12.html" target="_blank">专区</a></span></h3>
				<dl><dt><a href="/xingzuo/shuangyu"><img src="http://www.ss230.com/static/xingzuo/static/images/astro_simg/12.gif" alt="双鱼座"></a><strong class="fcolor">2.20-3.20</strong></dt>
					<dd><ul><li><label>整体运势：</label><em><span class="star_b"><span class="star_f" style="width:<?php echo $this->_tpl_vars['xz_yunshi']['412']['content']['zonghe']; ?>
px;"></span></span></em></li><li><label>爱情运势：</label><em><span class="star_b"><span class="star_f" style="width:<?php echo $this->_tpl_vars['xz_yunshi']['412']['content']['aiqing']; ?>
px;"></span></span></em></li><li><label>事业学业：</label><em><span class="star_b"><span class="star_f" style="width:<?php echo $this->_tpl_vars['xz_yunshi']['412']['content']['gongzuo']; ?>
px;"></span></span></em></li><li><label>财富运势：</label><em><span class="star_b"><span class="star_f" style="width:<?php echo $this->_tpl_vars['xz_yunshi']['412']['content']['caiyun']; ?>
px;"></span></span></em></li></ul></dd></dl><div class="desc"><?php echo ((is_array($_tmp=$this->_tpl_vars['xz_yunshi']['412']['des'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 68) : smarty_modifier_truncate($_tmp, 68)); ?>
[<a href="/xingzuo/shuangyu/">详细</a>]</div>
				<div class="m"><ul>
						<li><a href="/xingzuo/shuangyu/today/" title="双鱼座今日运势">今日</a></li>
						<li><a href="/xingzuo/shuangyu/tomorrow/" title="双鱼座明日运势">明日</a></li>
						<li><a href="/xingzuo/shuangyu/week" title="双鱼座本周运势">本周</a></li>
						<li><a href="/xingzuo/shuangyu/month" title="双鱼座本月运势">本月</a></li>
						<li><a href="/xingzuo/shuangyu/year" title="双鱼座今年运势">今年</a></li>
						<li><a href="/xingzuo/shuangyu/love" title="双鱼座爱情运势">爱情</a></li>
						<li><a href="/xingzuo/shuangyu/" title="双鱼座运势走势">走势</a></li>
					</ul></div>
			</div>
		</div>
		<div class="z"></div>
	</div>
	<!---->

</div>

<div>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './h5/public/more_nav.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>



<div class="detail">

	<h3><a href="/xingzuo/yunshi/">12星座明日运势：</a></h3>

	<dl>

		<li>

			<a href="/xingzuo/baiyang/tomorrow/" title="白羊座明日运势">白羊</a> &nbsp;

			<a href="/xingzuo/jinniu/tomorrow/" title="金牛座明日运势">金牛</a> &nbsp;

			<a href="/xingzuo/shuangzi/tomorrow/" title="双子座明日运势">双子</a> &nbsp;

			<a href="/xingzuo/juxie/tomorrow/" title="巨蟹座明日运势">巨蟹</a> &nbsp;

			<a href="/xingzuo/shizi/tomorrow/" title="狮子座明日运势">狮子</a> &nbsp;

			<a href="/xingzuo/chunv/tomorrow/" title="处女座明日运势">处女</a></li>

		<li>

			<a href="/xingzuo/tiancheng/tomorrow/" title="天秤座明日运势">天秤</a> &nbsp;

			<a href="/xingzuo/tianxie/tomorrow/" title="天蝎座明日运势">天蝎</a> &nbsp;

			<a href="/xingzuo/sheshou/tomorrow/" title="射手座明日运势">射手</a> &nbsp;

			<a href="/xingzuo/mojie/tomorrow/" title="魔羯座明日运势">魔羯</a> &nbsp;

			<a href="/xingzuo/shuiping/tomorrow/" title="水瓶座明日运势">水瓶</a> &nbsp;

			<a href="/xingzuo/shuangyu/tomorrow/" title="双鱼座明日运势">双鱼</a></dd>

		</li>

	</dl>

</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './h5/public/news.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div id="navi">
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './h5/public/h5_nav.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './h5/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>