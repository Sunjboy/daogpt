<?php /* Smarty version 2.6.25, created on 2017-12-16 06:29:59
         compiled from h5/suanming/cg.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './h5/header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script>stepMenu();</script>

<div id="path">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './h5/public/path.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>

<h1 class="title"><?php echo $this->_tpl_vars['cookies']['xingming']['xing']; ?>
<?php echo $this->_tpl_vars['cookies']['xingming']['ming']; ?>
的<?php echo $this->_tpl_vars['sseo']['name']; ?>
算命结果</h1>

<div class="detail">

<dl>

	<dd>以下是您的生辰八字称骨算命的结果：</dd>

	<h2>您的生日：</h2>

	<div class="h2_content">公历生日为：<?php echo $this->_tpl_vars['cookies']['nianling']['y']; ?>
年<?php echo $this->_tpl_vars['cookies']['nianling']['m']; ?>
月<?php echo $this->_tpl_vars['cookies']['nianling']['d']; ?>
日<?php echo $this->_tpl_vars['cookies']['nianling']['h']; ?>
时<?php echo $this->_tpl_vars['cookies']['nianling']['i']; ?>
分 &nbsp; 今年<?php echo $this->_tpl_vars['cookies']['nianling']['nl']; ?>
岁</div>

	<h2>您的骨重：</h2>

	<div class="h2_content">经测算，您的骨重为：<strong><?php echo $this->_tpl_vars['gu']['all10']; ?>
&nbsp;两</strong></div>

	<h2>称骨歌：</h2> 

	<div class="h2_content"><?php echo $this->_tpl_vars['gu']['info']['content']; ?>
</div>

	<h2>称骨歌释义：</h2> 

	<div class="h2_content"><?php echo $this->_tpl_vars['gu']['info']['intro']; ?>
</div>

	<div align="center">

		<div class="bdlikebutton"></div>

	</div>

</dd>

</dl>

</div>

<div>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './h5/public/more_nav.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './h5/public/news.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<!-- 将此代码放在适当的位置，建议在body结束前 -->

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
