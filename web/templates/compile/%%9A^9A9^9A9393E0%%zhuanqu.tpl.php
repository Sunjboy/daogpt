<?php /* Smarty version 2.6.25, created on 2017-12-04 02:23:57
         compiled from h5/xingzuo/zhuanqu.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'h5/xingzuo/zhuanqu.tpl', 302, false),)), $this); ?>
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
    width: 120px;
    float: left;
}

.albAdd dl dd {
    margin-left: 120px;
}

.albAdd dl strong.fc1 {
    margin-top:5px;
    display: block;
    text-align: center;
}

.albAdd dl span.fc2 {
    font-size: 12px;
    text-align: center;
    display: block;
    margin-top: 3px;
}

.albAdd dl dt img {
    width:120px;
    height:120px;
    margin-top:10px;
    border-radius: 50%;
    overflow: hidden;
    display: block;
}
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

			<div class="xz_nav sss sss1" style="display: block; height:auto;">

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
	<div id="schannel2">
		<h3>十二星座最新文章</h3>
		<div class="alb albAdd">
			<dl class="a1_1">
				<dt><a target="_blank" href="/list-345-1.html"><img alt="白羊座" src="http://www.ss230.com/static/xingzuo/static/images/astro_bimg/img_Aries_120.gif"></a><strong class="fc1"><a target="_blank" href="/list-345-1.html">白羊座</a></strong><span class="fc2">3月21日-4月20日</span></dt>
				<dd>
					<ul>
						<?php $_from = $this->_tpl_vars['xz_content']['0']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
						<li>·<a href="<?php echo $this->_tpl_vars['v']['url']; ?>
" title="<?php echo $this->_tpl_vars['v']['title']; ?>
" target="_blank"><?php echo $this->_tpl_vars['v']['title']; ?>
</a></li>
						<?php endforeach; endif; unset($_from); ?>
					</ul>
				</dd>
			</dl>
			<dl class="a1_2">
				<dt><a target="_blank" href="/list-345-2.html"><img alt="金牛座" src="http://www.ss230.com/static/xingzuo/static/images/astro_bimg/img_Taurus_120.gif"></a><strong class="fc1"><a target="_blank" href="/list-345-2.html">金牛座</a></strong><span class="fc2">4月21日-5月21日</span></dt>
				<dd>
					<ul>
						<?php $_from = $this->_tpl_vars['xz_content']['1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
						<li>·<a href="<?php echo $this->_tpl_vars['v']['url']; ?>
" title="<?php echo $this->_tpl_vars['v']['title']; ?>
" target="_blank"><?php echo $this->_tpl_vars['v']['title']; ?>
</a></li>
						<?php endforeach; endif; unset($_from); ?>
					</ul>
				</dd>
			</dl>
			<dl class="a1_0">
				<dt><a target="_blank" href="/list-345-3.html"><img alt="双子座" src="http://www.ss230.com/static/xingzuo/static/images/astro_bimg/img_Gemini_120.gif"></a><strong class="fc1"><a target="_blank" href="/list-345-3.html">双子座</a></strong><span class="fc2">5月22日-6月21日</span></dt>
				<dd>
					<ul>
						<?php $_from = $this->_tpl_vars['xz_content']['2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
						<li>·<a href="<?php echo $this->_tpl_vars['v']['url']; ?>
" title="<?php echo $this->_tpl_vars['v']['title']; ?>
" target="_blank"><?php echo $this->_tpl_vars['v']['title']; ?>
</a></li>
						<?php endforeach; endif; unset($_from); ?>
					</ul>
				</dd>
			</dl>
		</div>
		<div class="alb alb_3 albAdd">
			<dl class="a1_1">
				<dt><a target="_blank" href="/list-345-4.html"><img alt="巨蟹座" src="http://www.ss230.com/static/xingzuo/static/images/astro_bimg/img_Cancer_120.gif"></a><strong class="fc1"><a target="_blank" href="/list-345-4.html">巨蟹座</a></strong><span class="fc2">6月22日-7月22日</span></dt>
				<dd>
					<ul>
						<?php $_from = $this->_tpl_vars['xz_content']['3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
						<li>·<a href="<?php echo $this->_tpl_vars['v']['url']; ?>
" title="<?php echo $this->_tpl_vars['v']['title']; ?>
" target="_blank"><?php echo $this->_tpl_vars['v']['title']; ?>
</a></li>
						<?php endforeach; endif; unset($_from); ?>
					</ul>
				</dd>
			</dl>
			<dl class="a1_2">
				<dt><a target="_blank" href="/list-345-5.html"><img alt="狮子座" src="http://www.ss230.com/static/xingzuo/static/images/astro_bimg/img_Leo_120.gif"></a><strong class="fc1"><a target="_blank" href="/list-345-5.html">狮子座</a></strong><span class="fc2">7月23日-8月22日</span></dt>
				<dd>
					<ul>
						<?php $_from = $this->_tpl_vars['xz_content']['4']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
						<li>·<a href="<?php echo $this->_tpl_vars['v']['url']; ?>
" title="<?php echo $this->_tpl_vars['v']['title']; ?>
" target="_blank"><?php echo $this->_tpl_vars['v']['title']; ?>
</a></li>
						<?php endforeach; endif; unset($_from); ?>
					</ul>
				</dd>
			</dl>
			<dl class="a1_0">
				<dt><a target="_blank" href="/list-345-6.html"><img alt="处女座" src="http://www.ss230.com/static/xingzuo/static/images/astro_bimg/img_Virgo_120.gif"></a><strong class="fc1"><a target="_blank" href="/list-345-6.html">处女座</a></strong><span class="fc2">8月23日-9月23日</span></dt>
				<dd>
					<ul>
						<?php $_from = $this->_tpl_vars['xz_content']['5']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
						<li>·<a href="<?php echo $this->_tpl_vars['v']['url']; ?>
" title="<?php echo $this->_tpl_vars['v']['title']; ?>
" target="_blank"><?php echo $this->_tpl_vars['v']['title']; ?>
</a></li>
						<?php endforeach; endif; unset($_from); ?>
					</ul>
				</dd>
			</dl>
		</div>
		<div class="alb alb_6 albAdd">
			<dl class="a1_1">
				<dt><a target="_blank" href="/list-345-7.html"><img alt="天秤座" src="http://www.ss230.com/static/xingzuo/static/images/astro_bimg/img_Libra_120.gif"></a><strong class="fc1"><a target="_blank" href="/list-345-7.html">天秤座</a></strong><span class="fc2">9月24日-10月23日</span></dt>
				<dd>
					<ul>
						<?php $_from = $this->_tpl_vars['xz_content']['6']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
						<li>·<a href="<?php echo $this->_tpl_vars['v']['url']; ?>
" title="<?php echo $this->_tpl_vars['v']['title']; ?>
" target="_blank"><?php echo $this->_tpl_vars['v']['title']; ?>
</a></li>
						<?php endforeach; endif; unset($_from); ?>
					</ul>
				</dd>
			</dl>
			<dl class="a1_2">
				<dt><a target="_blank" href="/list-345-8.html"><img alt="天蝎座" src="http://www.ss230.com/static/xingzuo/static/images/astro_bimg/img_Scorpio_120.gif"></a><strong class="fc1"><a target="_blank" href="/list-345-8.html">天蝎座</a></strong><span class="fc2">10月24日-11月22日</span></dt>
				<dd>
					<ul>
						<?php $_from = $this->_tpl_vars['xz_content']['7']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
						<li>·<a href="<?php echo $this->_tpl_vars['v']['url']; ?>
" title="<?php echo $this->_tpl_vars['v']['title']; ?>
" target="_blank"><?php echo $this->_tpl_vars['v']['title']; ?>
</a></li>
						<?php endforeach; endif; unset($_from); ?>
					</ul>
				</dd>
			</dl>
			<dl class="a1_0">
				<dt><a target="_blank" href="/list-345-9.html"><img alt="射手座" src="http://www.ss230.com/static/xingzuo/static/images/astro_bimg/img_Sagittarius_120.gif"></a><strong class="fc1"><a target="_blank" href="/list-345-9.html">射手座</a></strong><span class="fc2">11月23日-12月21日</span></dt>
				<dd>
					<ul>
						<?php $_from = $this->_tpl_vars['xz_content']['8']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
						<li>·<a href="<?php echo $this->_tpl_vars['v']['url']; ?>
" title="<?php echo $this->_tpl_vars['v']['title']; ?>
" target="_blank"><?php echo $this->_tpl_vars['v']['title']; ?>
</a></li>
						<?php endforeach; endif; unset($_from); ?>
					</ul>
				</dd>
			</dl>
		</div>
		<div class="alb alb_9 albAdd">
			<dl class="a1_1">
				<dt><a target="_blank" href="/list-345-10.html"><img alt="摩羯座" src="http://www.ss230.com/static/xingzuo/static/images/astro_bimg/img_Capricorn_120.gif"></a><strong class="fc1"><a target="_blank" href="/list-345-10.html">摩羯座</a></strong><span class="fc2">12月22日-1月20日</span></dt>
				<dd>
					<ul>
						<?php $_from = $this->_tpl_vars['xz_content']['9']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
						<li>·<a href="<?php echo $this->_tpl_vars['v']['url']; ?>
" title="<?php echo $this->_tpl_vars['v']['title']; ?>
" target="_blank"><?php echo $this->_tpl_vars['v']['title']; ?>
</a></li>
						<?php endforeach; endif; unset($_from); ?>
					</ul>
				</dd>
			</dl>
			<dl class="a1_2">
				<dt><a target="_blank" href="/list-345-11.html"><img alt="水瓶座" src="http://www.ss230.com/static/xingzuo/static/images/astro_bimg/img_Aquarius_120.gif"></a><strong class="fc1"><a target="_blank" href="/list-345-11.html">水瓶座</a></strong><span class="fc2">1月21日-2月19日</span></dt>
				<dd>
					<ul>
						<?php $_from = $this->_tpl_vars['xz_content']['10']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
						<li>·<a href="<?php echo $this->_tpl_vars['v']['url']; ?>
" title="<?php echo $this->_tpl_vars['v']['title']; ?>
" target="_blank"><?php echo $this->_tpl_vars['v']['title']; ?>
</a></li>
						<?php endforeach; endif; unset($_from); ?>
					</ul>
				</dd>
			</dl>
			<dl class="a1_0">
				<dt><a target="_blank" href="/list-345-12.html"><img alt="双鱼座" src="http://www.ss230.com/static/xingzuo/static/images/astro_bimg/img_Pisces_120.gif"></a><strong class="fc1"><a target="_blank" href="/list-345-12.html">双鱼座</a></strong><span class="fc2">2月20日-3月20日</span></dt>
				<dd>
					<ul>
						<?php $_from = $this->_tpl_vars['xz_content']['11']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
						<li>·<a href="<?php echo $this->_tpl_vars['v']['url']; ?>
" title="<?php echo $this->_tpl_vars['v']['title']; ?>
" target="_blank"><?php echo $this->_tpl_vars['v']['title']; ?>
</a></li>
						<?php endforeach; endif; unset($_from); ?>
					</ul>
				</dd>
			</dl>

		</div>
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
<div class="detail">

	<h3><a href="/list-345-<?php echo $this->_tpl_vars['category']; ?>
.html"><?php echo $this->_tpl_vars['date']['title']; ?>
话题：</a></h3>

	<?php if ($this->_tpl_vars['img_data']['0']['img']): ?>
	<a href="<?php echo $this->_tpl_vars['img_data']['0']['url']; ?>
" title="<?php echo $this->_tpl_vars['img_data']['0']['title']; ?>
" class="xingzuo_topic_img"><img src="http://www.ss230.com<?php echo $this->_tpl_vars['img_data']['0']['img']; ?>
" width="120" height="90" alt="<?php echo $this->_tpl_vars['img_data']['0']['title']; ?>
"></a>
	<div class="xingzuo_topic_words">
		<h2><a href="<?php echo $this->_tpl_vars['img_data']['0']['url']; ?>
" title="<?php echo $this->_tpl_vars['img_data']['0']['title']; ?>
" class="ffyh"><?php echo $this->_tpl_vars['img_data']['0']['title']; ?>
</a></h2>
		<div class="xingzuo_topic_read">
			<p><?php echo ((is_array($_tmp=$this->_tpl_vars['img_data']['0']['shorttxt'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 120) : smarty_modifier_truncate($_tmp, 120)); ?>
<a href="<?php echo $this->_tpl_vars['img_data']['0']['url']; ?>
">[详细]</a></p>
		</div>
	</div>
	<?php endif; ?>

	<dl>
		<?php $_from = $this->_tpl_vars['list_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
		<li><a href="<?php echo $this->_tpl_vars['v']['url']; ?>
" title="<?php echo $this->_tpl_vars['v']['title']; ?>
">·<?php echo ((is_array($_tmp=$this->_tpl_vars['v']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 16) : smarty_modifier_truncate($_tmp, 16)); ?>
</a></li>
		<?php endforeach; endif; unset($_from); ?>

	</dl>

</div>

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