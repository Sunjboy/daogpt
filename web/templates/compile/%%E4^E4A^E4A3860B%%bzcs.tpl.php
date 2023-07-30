<?php /* Smarty version 2.6.25, created on 2018-02-12 22:04:52
         compiled from index/suanming/bzcs.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['web_url']; ?>
static/bazi/css/suanming/v2/fortune.css"/>
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
        <div class="submenu">
            <?php echo $this->_tpl_vars['topic']; ?>

        </div>
        
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/public/path.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>         
        <div class="cont">
<div class="col_left">

<div class="mod_box_t1 fn_part fn_cs">
<div class="hd">
<h1><?php echo $this->_tpl_vars['cookies']['xingming']['xing']; ?>
<?php echo $this->_tpl_vars['cookies']['xingming']['ming']; ?>
八字测算</h1>
</div>
<div class="bd">
<div class="cur_info">
<h6>当前算命者信息</h6>
<p class="info_prop">
<span>姓名：<strong><?php echo $this->_tpl_vars['cookies']['xingming']['xing']; ?>
<?php echo $this->_tpl_vars['cookies']['xingming']['ming']; ?>
</strong></span>

<span>性别：<strong><?php echo $this->_tpl_vars['cookies']['sex']; ?>
</strong></span>

<span>出生时间：<strong><?php echo $this->_tpl_vars['cookies']['nianling']['y']; ?>
年<?php echo $this->_tpl_vars['cookies']['nianling']['m']; ?>
月<?php echo $this->_tpl_vars['cookies']['nianling']['d']; ?>
日<?php echo $this->_tpl_vars['cookies']['nianling']['h']; ?>
时<?php echo $this->_tpl_vars['cookies']['nianling']['i']; ?>
分</strong></span>

<span>今年：<strong><?php echo $this->_tpl_vars['cookies']['nianling']['nl']; ?>
岁</strong></span>

<span>属相：<strong><?php echo $this->_tpl_vars['cookies']['sx']; ?>
</strong></span>

</p>

<a class="a_retest" href="<?php echo $this->_tpl_vars['web_url']; ?>
suanming/clear/">重新测算</a>

</div>

<div class="relateLinks">

<?php $_from = $this->_tpl_vars['topic_arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
    <a <?php if ($this->_tpl_vars['tid'] == $this->_tpl_vars['v']['id']): ?>class="current"<?php endif; ?> title="<?php echo $this->_tpl_vars['v']['name']; ?>
" href="<?php echo $this->_tpl_vars['web_url']; ?>
<?php echo $this->_tpl_vars['v']['extra']; ?>
"><?php echo $this->_tpl_vars['v']['name']; ?>
</a>
<?php endforeach; endif; unset($_from); ?>                       

</div>



<div class="mod_box_t3 fn_box">
<div class="box_con ret_con">
<h5 class="guw">乾造： <?php echo $this->_tpl_vars['sexqk']; ?>
</h5>
<h5 class="guw">大运：<?php echo $this->_tpl_vars['dayun']; ?>
</h5>
<h4 class="cut_tit">性格分析</h4>
<p><?php echo $this->_tpl_vars['xgfx']; ?>
</p>
<h4 class="cut_tit">命造简批</h4>
<p><?php echo $this->_tpl_vars['mzjp']; ?>
</p>
</div>
<i class="flag_tl_t3"></i><i class="flag_tr_t3"></i><i class="flag_bl_t3"></i><i class="flag_br_t3"></i>
</div>

<div class="btn_tool_retest">

<a class="btn_orange_1" href="<?php echo $this->_tpl_vars['web_url']; ?>
suanming/clear/">重新测算</a>

</div>

<div class="tips_area">

本算命系统来源于中国民俗学的一些测算方法，并非科学研究成果，仅供休闲娱乐，请勿迷信，按此操作一切后果自负！

</div>

</div>

<i class="flag_tl_t1"></i>

<i class="flag_tr_t1"></i>

<i class="flag_bl_t1"></i>

<i class="flag_br_t1"></i>


</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/public/left_sx.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


</div>

<div id="col_right" class="col_right">

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/public/right.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>  

</div>

</div>

</div>

</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
