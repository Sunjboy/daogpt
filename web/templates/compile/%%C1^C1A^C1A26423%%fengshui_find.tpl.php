<?php /* Smarty version 2.6.25, created on 2018-03-24 12:52:15
         compiled from index/suanming/fengshui_find.tpl */ ?>
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
                <div class="mod_box_t1 fn_part fn_fengshui">
					<div class="hd">
						<h1><?php echo $this->_tpl_vars['haomajx']['nianfen']; ?>
年出生,<?php echo $this->_tpl_vars['haomajx']['xingbie']; ?>
,大门朝向:<?php echo $this->_tpl_vars['haomajx']['chaoxiang']; ?>
风水测算</h1>
					</div>
					<div class="bd">
						
						<div class="fengshui_result">
                        	<h2 class="tit">风水-<?php echo $this->_tpl_vars['haomajx']['nianfen']; ?>
年出生,<?php echo $this->_tpl_vars['haomajx']['xingbie']; ?>
,大门朝向:<?php echo $this->_tpl_vars['haomajx']['chaoxiang']; ?>
</h2>
                            <p>通过你输入的年份，朝向，性别，<a href="<?php echo $this->_tpl_vars['web_url']; ?>
">神算网</a>为你测算结果为：</p>
                            <dl>
                            	<?php echo $this->_tpl_vars['haomajx']['xiangjie']; ?>

                            </dl>
                            <span class="sTips"><?php echo $this->_tpl_vars['haomajx']['beizhu']; ?>
</span>
                            <a href="/suanming/fscs/" class="btn_orange_1">重新测算</a>
										<i class="flag_tl_t3"></i>
                                        <i class="flag_tr_t3"></i>
                                        <i class="flag_bl_t3"></i>
                                        <i class="flag_br_t3"></i>
                                        </div><!-- 热词 begin-->
                                        </div>
                                        <i class="flag_tl_t1"></i>
                                        <i class="flag_tr_t1"></i>
                        </div>
                                        
                                        
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/public/left_hotnav.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>                        
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
    <script type="text/javascript" src="/static/bazi/js/suanming.js"></script>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
