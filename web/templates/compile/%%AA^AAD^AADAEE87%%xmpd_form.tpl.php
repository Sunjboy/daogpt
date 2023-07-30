<?php /* Smarty version 2.6.25, created on 2017-11-30 20:25:22
         compiled from index/xingming/xmpd_form.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['web_url']; ?>
static/bazi/css/suanming/v2/xmfx.css"/>
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
<div class="mod_box_t1 fn_part fn_peidui">
					<div class="hd">
						<h1>姓名配对</h1>
					</div>
					<div class="bd">
						<div class="intro_area">
							注：根据《易经》的"象"、"数"理论，依据姓名的笔画数和一定规则建立起来天格、地格、人格、总格、外格等五格数理关系，并运用阴阳五行相生相克理论，来推算的各方面运势。
						</div>
						<div class="mod_box_t3 fn_box">
							<div class="box_con">
								<div class="mod_form">
									<form id="company_submit"  target="_blank" method="post" action="<?php echo $this->_tpl_vars['web_url']; ?>
index.php" onSubmit="return chk_submit();">
                                        <input type="hidden" value="375" name="tid">
                                        <input type="hidden" value="xmpd" name="ac" />
                                        <input type="hidden" value="xingming" name="ct" />
									<div class="form_item">
										<span><img src="<?php echo $this->_tpl_vars['web_url']; ?>
static/bazi/img/suanming/v2/boy_icon.png" alt="男人" width="10" class="item_imgIcon">男方姓名：</span>
										<input class="ipt_text" name="name1" id="manname" type="text" />
                                  		&nbsp;
                                        <select size="1" name="xing1">
                                        <option value="1">单姓</option>
                                        <option value="2">复姓</option>
                                        </select>
                                        &nbsp;
                                        <select size="1" name="sex1">
                                        <option value="男">男性</option>
                                        <option value="女">女性</option>
                                        </select>
									</div>
									<div class="form_line"></div>
									<div class="form_item">
										<span><img src="<?php echo $this->_tpl_vars['web_url']; ?>
static/bazi/img/suanming/v2/girl_icon.png" alt="女人" width="10" class="item_imgIcon">女方姓名：</span>
										<input class="ipt_text" name="name2" id="wmname" type="text" />
                                        &nbsp;
                                        <select size="1" name="xing2">
                                        <option value="1">单姓</option>
                                        <option value="2">复姓</option>
                                        </select>
                                        &nbsp;
                                        <select size="1" name="sex2">
                                        <option value="男">男性</option>
                                        <option value="女">女性</option>
                                        </select>
									</div>
                                    
									<div class="form_item btn_item">
										<button class="btn_orange2" type="submit" id="btn_begincs2">配对</button>
									</div>
									</form>
								</div>
								<div class="help_area">
                                <span class="help_tit"><i></i>相关帮助：</span>
                               [<a target="_blank" href="<?php echo $this->_tpl_vars['web_url']; ?>
xingming/xmpd/">姓名配对关系</a>]
                                </div>
							</div>
							<i class="flag_tl_t3"></i><i class="flag_tr_t3"></i><i class="flag_bl_t3"></i><i class="flag_br_t3"></i>
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
         <?php   include('templates/public/footer.tpl.php'); ?>  

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
