<?php /* Smarty version 2.6.25, created on 2018-03-25 16:58:55
         compiled from index/news_show.tpl */ ?>
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
        <div class="cont">

			<div class="col_left">

				<div class="mod_box_t1 fn_part fn_zhgjm">

					<div class="hd">
                    
                    <h1><?php echo $this->_tpl_vars['data']['title']; ?>
</h1>
                    
                    </div>
                    
						<div class="bd dream_result">
                        
							<div class="newsinfo mb10">时间：<?php echo $this->_tpl_vars['data']['uptime']; ?>
 &nbsp; 来源：神算网 &nbsp; 关键词：<?php echo $this->_tpl_vars['data']['contentKeyword']; ?>
</div>	
                        
                        
							<div class="dream_detail mb10">
									<?php echo $this->_tpl_vars['data']['content']; ?>

                                    
                                    
                                    <div class="page">
                                    <?php echo $this->_tpl_vars['pageStr']; ?>

                                    </div>
							</div>	
                            

							<div class="dream_other">

								<p>你可能感兴趣的</p>
                                
								<div class="dream_other_a mt10 adbox_con" id="astro_re">
                               <ul class="astro_re">
                               <?php $_from = $this->_tpl_vars['hot_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                                   <li>
                                   <a href="show-<?php echo $this->_tpl_vars['v']['id']; ?>
.html" target="_blank"><?php echo $this->_tpl_vars['v']['title']; ?>
</a>
                                   </li>
                               <?php endforeach; endif; unset($_from); ?>    
                               </ul>
							   
									<div class="adbox2">
									</div>
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
