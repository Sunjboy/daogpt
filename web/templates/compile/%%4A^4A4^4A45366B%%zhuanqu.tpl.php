<?php /* Smarty version 2.6.25, created on 2017-12-06 08:16:35
         compiled from index/xingzuo/zhuanqu.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'base64_decode', 'index/xingzuo/zhuanqu.tpl', 69, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['web_url']; ?>
static/bazi/css/style.css">
<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['web_url']; ?>
static/bazi/css/yunshi.css">
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
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/public/path.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>         
        
        <div class="star_con">
	<a href="<?php echo $this->_tpl_vars['web_url']; ?>
xingzuo/baiyang/" class="star_icon star1 <?php if ($this->_tpl_vars['seo']['id'] == 401): ?>star_current<?php endif; ?>">
		<span class="star_name">白羊座</span>
		<span class="star_date">(3.21-4.19)</span>
	</a>
	<a href="<?php echo $this->_tpl_vars['web_url']; ?>
xingzuo/jinniu/" class="star_icon star2 <?php if ($this->_tpl_vars['seo']['id'] == 402): ?>star_current<?php endif; ?>">
		<span class="star_name">金牛座</span>
		<span class="star_date">(4.20-5.20)</span>
	</a>
	<a href="<?php echo $this->_tpl_vars['web_url']; ?>
xingzuo/shuangzi/" class="star_icon star3 <?php if ($this->_tpl_vars['seo']['id'] == 403): ?>star_current<?php endif; ?>">
		<span class="star_name">双子座</span>
		<span class="star_date">(5.21-6.21)</span>
	</a>
	<a href="<?php echo $this->_tpl_vars['web_url']; ?>
xingzuo/juxie/" class="star_icon star4 <?php if ($this->_tpl_vars['seo']['id'] == 404): ?>star_current<?php endif; ?>">
		<span class="star_name">巨蟹座</span>
		<span class="star_date">(6.22-7.22)</span>
	</a>
	<a href="<?php echo $this->_tpl_vars['web_url']; ?>
xingzuo/shizi/" class="star_icon star5 <?php if ($this->_tpl_vars['seo']['id'] == 405): ?>star_current<?php endif; ?>">
		<span class="star_name">狮子座</span>
		<span class="star_date">(7.23-8.22)</span>
	</a>
	<a href="<?php echo $this->_tpl_vars['web_url']; ?>
xingzuo/chunv/" class="star_icon star6 <?php if ($this->_tpl_vars['seo']['id'] == 406): ?>star_current<?php endif; ?>">
		<span class="star_name">处女座</span>
		<span class="star_date">(8.23-9.22)</span>
	</a>
	<a href="<?php echo $this->_tpl_vars['web_url']; ?>
xingzuo/tiancheng/" class="star_icon star7 <?php if ($this->_tpl_vars['seo']['id'] == 407): ?>star_current<?php endif; ?>">
		<span class="star_name">天秤座</span>
		<span class="star_date">(9.23-10.23)</span>
	</a>
	<a href="<?php echo $this->_tpl_vars['web_url']; ?>
xingzuo/tianxie/" class="star_icon star8 <?php if ($this->_tpl_vars['seo']['id'] == 408): ?>star_current<?php endif; ?>">
		<span class="star_name">天蝎座</span>
		<span class="star_date">(10.24-11.22)</span>
	</a>
	<a href="<?php echo $this->_tpl_vars['web_url']; ?>
xingzuo/sheshou/" class="star_icon star9 <?php if ($this->_tpl_vars['seo']['id'] == 409): ?>star_current<?php endif; ?>">
		<span class="star_name">射手座</span>
		<span class="star_date">(11.23-12.21)</span>
	</a>
	<a href="<?php echo $this->_tpl_vars['web_url']; ?>
xingzuo/mojie/" class="star_icon star10 <?php if ($this->_tpl_vars['seo']['id'] == 410): ?>star_current<?php endif; ?>">
		<span class="star_name">摩羯座</span>
		<span class="star_date">(12.22-1.19)</span>
	</a>
	<a href="<?php echo $this->_tpl_vars['web_url']; ?>
xingzuo/shuiping/" class="star_icon star11 <?php if ($this->_tpl_vars['seo']['id'] == 411): ?>star_current<?php endif; ?>">
		<span class="star_name">水瓶座</span>
		<span class="star_date">(1.20-2.18)</span>
	</a>
	<a href="<?php echo $this->_tpl_vars['web_url']; ?>
xingzuo/shuangyu/" class="star_icon star12 <?php if ($this->_tpl_vars['seo']['id'] == 412): ?>star_current<?php endif; ?>">
		<span class="star_name">双鱼座</span>
		<span class="star_date">(2.19-3.20)</span>
	</a>
</div>

        

<div class="bd_ad990">
<?php echo ((is_array($_tmp=$this->_tpl_vars['ad']['51'])) ? $this->_run_mod_handler('base64_decode', true, $_tmp) : base64_decode($_tmp)); ?>

</div>


<!--zhuanqu-->
<div id="schannel2">
	 <h3>十二星座最新文章</h3>
	 <div class="alb"> 
	<dl class="a1_1">
		<dt><a target="_blank" href="/list-345-1.html"><img alt="白羊座" src="/static/xingzuo/static/images/astro_bimg/img_Aries_120.gif"></a><strong class="fc1"><a target="_blank" href="/list-345-1.html">白羊座</a></strong><span class="fc2">3月21日-4月20日</span></dt>
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
		<dt><a target="_blank" href="/list-345-2.html"><img alt="金牛座" src="/static/xingzuo/static/images/astro_bimg/img_Taurus_120.gif"></a><strong class="fc1"><a target="_blank" href="/list-345-2.html">金牛座</a></strong><span class="fc2">4月21日-5月21日</span></dt>
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
		<dt><a target="_blank" href="/list-345-3.html"><img alt="双子座" src="/static/xingzuo/static/images/astro_bimg/img_Gemini_120.gif"></a><strong class="fc1"><a target="_blank" href="/list-345-3.html">双子座</a></strong><span class="fc2">5月22日-6月21日</span></dt>
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
	</div><div class="alb alb_3"><dl class="a1_1">
		<dt><a target="_blank" href="/list-345-4.html"><img alt="巨蟹座" src="/static/xingzuo/static/images/astro_bimg/img_Cancer_120.gif"></a><strong class="fc1"><a target="_blank" href="/list-345-4.html">巨蟹座</a></strong><span class="fc2">6月22日-7月22日</span></dt>
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
		<dt><a target="_blank" href="/list-345-5.html"><img alt="狮子座" src="/static/xingzuo/static/images/astro_bimg/img_Leo_120.gif"></a><strong class="fc1"><a target="_blank" href="/list-345-5.html">狮子座</a></strong><span class="fc2">7月23日-8月22日</span></dt>
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
		<dt><a target="_blank" href="/list-345-6.html"><img alt="处女座" src="/static/xingzuo/static/images/astro_bimg/img_Virgo_120.gif"></a><strong class="fc1"><a target="_blank" href="/list-345-6.html">处女座</a></strong><span class="fc2">8月23日-9月23日</span></dt>
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
	</div><div class="alb alb_6"><dl class="a1_1">
		<dt><a target="_blank" href="/list-345-7.html"><img alt="天秤座" src="/static/xingzuo/static/images/astro_bimg/img_Libra_120.gif"></a><strong class="fc1"><a target="_blank" href="/list-345-7.html">天秤座</a></strong><span class="fc2">9月24日-10月23日</span></dt>
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
		<dt><a target="_blank" href="/list-345-8.html"><img alt="天蝎座" src="/static/xingzuo/static/images/astro_bimg/img_Scorpio_120.gif"></a><strong class="fc1"><a target="_blank" href="/list-345-8.html">天蝎座</a></strong><span class="fc2">10月24日-11月22日</span></dt>
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
		<dt><a target="_blank" href="/list-345-9.html"><img alt="射手座" src="/static/xingzuo/static/images/astro_bimg/img_Sagittarius_120.gif"></a><strong class="fc1"><a target="_blank" href="/list-345-9.html">射手座</a></strong><span class="fc2">11月23日-12月21日</span></dt>
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
	</div><div class="alb alb_9"><dl class="a1_1">
		<dt><a target="_blank" href="/list-345-10.html"><img alt="摩羯座" src="/static/xingzuo/static/images/astro_bimg/img_Capricorn_120.gif"></a><strong class="fc1"><a target="_blank" href="/list-345-10.html">摩羯座</a></strong><span class="fc2">12月22日-1月20日</span></dt>
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
		<dt><a target="_blank" href="/list-345-11.html"><img alt="水瓶座" src="/static/xingzuo/static/images/astro_bimg/img_Aquarius_120.gif"></a><strong class="fc1"><a target="_blank" href="/list-345-11.html">水瓶座</a></strong><span class="fc2">1月21日-2月19日</span></dt>
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
		<dt><a target="_blank" href="/list-345-12.html"><img alt="双鱼座" src="/static/xingzuo/static/images/astro_bimg/img_Pisces_120.gif"></a><strong class="fc1"><a target="_blank" href="/list-345-12.html">双鱼座</a></strong><span class="fc2">2月20日-3月20日</span></dt>
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
<!--index-->

</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
