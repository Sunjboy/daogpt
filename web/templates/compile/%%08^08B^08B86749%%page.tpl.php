<?php /* Smarty version 2.6.25, created on 2017-11-30 00:36:43
         compiled from index/page.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link href="<?php echo $this->_tpl_vars['web_url']; ?>
static/bazi/css/suanming/v2/test.css" rel="stylesheet" type="text/css">

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
				<div class="mod_box_t1 fn_part <?php if ($this->_tpl_vars['data']['d'] != ''): ?><?php echo $this->_tpl_vars['data']['d']; ?>
<?php elseif ($this->_tpl_vars['seo']['id'] == 432): ?>fn_suanming_zw<?php elseif ($this->_tpl_vars['seo']['id'] == 433): ?>fn_shouxiang<?php elseif ($this->_tpl_vars['seo']['id'] == 434): ?>fn_zhi<?php elseif ($this->_tpl_vars['seo']['id'] == 435): ?>fn_sasvyc<?php elseif ($this->_tpl_vars['seo']['id'] == 436): ?>fn_yanpi<?php elseif ($this->_tpl_vars['seo']['id'] == 437): ?>fn_penti<?php elseif ($this->_tpl_vars['seo']['id'] == 438): ?>fn_zhi2<?php else: ?>fn_suanming_zw<?php endif; ?>">
					<div class="hd">
                    
                    	<h1><?php echo $this->_tpl_vars['data']['t']; ?>
</h1>
					</div>
                    
                    <div class="bd">
                    	
                        <?php echo $this->_tpl_vars['data']['content']; ?>

                        
                    </div>
                    
					<i class="flag_tl_t1"></i><i class="flag_tr_t1"></i><i class="flag_bl_t1"></i><i class="flag_br_t1"></i>
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
