<?php /* Smarty version 2.6.25, created on 2017-12-04 23:29:28
         compiled from index/zgjm_list.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link href="<?php echo $this->_tpl_vars['web_url']; ?>
static/bazi/css/suanming/v2/dream.css" rel="stylesheet" type="text/css">

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

    <div class="mod_box_t1 fn_box fn_zgjm_search">
    
        <div class="dream_search">
    
            <img src="<?php echo $this->_tpl_vars['web_url']; ?>
static/bazi/images/suanming/v2/title-pic.jpg" alt="2345周公解梦大全查询" class="title-pic">
    
            <div class="dream_sc clearfix">
    
                <form id="fm" method="post" action="<?php echo $this->_tpl_vars['web_url']; ?>
index.php">
                    <input type="hidden" name="ct" value="zgjm">
                    <input type="hidden" name="ac" value="search">
                    <div class="search-text">
    
                        <span>梦见</span>
    
                        <input type="text" class="dream_txt" autocomplete="off" name="q" id="word" value="女人">
    
                    </div>
    
                    <input type="submit" class="btn_search" onmouseout="this.className='btn_search'" onmouseover="this.className='btn_search btn_search_hover'" name="search_submit" value="开始解梦" />
    
                </form>
    
            </div>
    
            <p>
                常见的梦：<?php $_from = $this->_tpl_vars['m']['zgjm_hot_tag']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?><a <?php if ($this->_tpl_vars['v']['blank'] == 1): ?>target="_blank"<?php endif; ?> href="<?php echo $this->_tpl_vars['v']['url']; ?>
" <?php if ($this->_tpl_vars['v']['color'] == 1): ?>class="cRed"<?php elseif ($this->_tpl_vars['v']['color'] == 2): ?>class="cGreen"<?php elseif ($this->_tpl_vars['v']['color'] == 3): ?>class="cBlue"<?php endif; ?> title="<?php echo $this->_tpl_vars['v']['title']; ?>
"><?php echo $this->_tpl_vars['v']['name']; ?>
</a><?php endforeach; endif; unset($_from); ?>
            </p>
    
        </div>
    
        <i class="flag_tl_t1"></i><i class="flag_tr_t1"></i><i class="flag_bl_t1"></i><i class="flag_br_t1"></i>
    
    </div>
        
        <div class="cont">

			<div class="col_left">

				<!--周公解梦 begin-->

				<div class="mod_box_t1 nomt">
                
                	<div class="hd">
                		<h3 class="art_title">【 <?php echo $this->_tpl_vars['seo']['name']; ?>
 - 解梦 】</h3>
					</div>
					<div class="bd">			

						
                        
						<div class="intro_tab_cont">

                            <ul class="clearfix mt10 nobt">
                            
                            <?php $_from = $this->_tpl_vars['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
									<li><a href="show-<?php echo $this->_tpl_vars['v']['id']; ?>
.html" target="_blank"><?php echo $this->_tpl_vars['v']['title']; ?>
</a></li>
							<?php endforeach; endif; unset($_from); ?>

                            </ul>

                            <div class="page"><?php echo $this->_tpl_vars['pageStr']; ?>
</div>

						</div>

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