<?php /* Smarty version 2.6.25, created on 2017-12-01 23:55:54
         compiled from index/peidui/xuexing.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['web_url']; ?>
static/bazi/css/suanming/v2/match.css"/>
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
                        <div class="mod_box_t1 fn_part fn_xuexing">

                            <div class="hd">

                                <h1>血型配对</h1>

                            </div>

                            <div class="bd">	
                            
                            <div class="intro_area">

                                    <p>血型配对，血型会造就情人，不同的血型不同的性格搭配，往往奇妙激荡同一电波；频道相同，当然就极易迸裂爱的火花了。根据有关血型配对的实际调查发现，B型男孩看O型女孩最对眼，A型男孩最容易对B型女孩萌生爱意，而同是O型者，较难产生爱的火焰，通过测试血型配对表查看究竟那个星座血型和你的最配对……</p>

                                </div>					

                                <div class="mod_box_t3 fn_box">

                                    <div class="box_con">

                                        <div class="mod_form">

                                            <form method="post" action="<?php echo $this->_tpl_vars['web_url']; ?>
index.php">
                                            
                                            <input type="hidden" name="ac" value="xuexing" />
                                            <input type="hidden" name="ct" value="peidui" />
                                            <input type="hidden" name="tid" value="388" />

                                                <div class="form_item">

                                                    <div class="st_outer"><div class="st_inner"><select name="xx1">

                                                                <option value="AB">AB型</option>

                                                                <option value="A">A型</option>

                                                                <option value="B">B型</option>

                                                                <option value="O">O型</option>

                                                            </select></div></div>

                                                    <span class="vs">VS</span>

                                                    <div class="st_outer"><div class="st_inner"><select name="xx2">

                                                                <option value="AB">AB型</option>

                                                                <option value="A">A型</option>

                                                                <option value="B">B型</option>

                                                                <option value="O">O型</option>

                                                            </select></div></div>

                                                </div>	
                                                

                                                <div class="form_item btn_item">

                                                    <button class="btn_orange2" type="submit" id="btn_begincs2">血型配对</button>

                                                </div>

                                            </form>

                                        </div>

                                    </div>

                                    <i class="flag_tl_t3"></i><i class="flag_tr_t3"></i><i class="flag_bl_t3"></i><i class="flag_br_t3"></i>

                                </div>

								<?php if ($this->_tpl_vars['xx']['shorttxt'] != ''): ?>

                                <!---->

                                 <div class="match_result">

                                    <dl class="clearfix">

                                        <dt>双方血型：<strong><?php echo $this->_tpl_vars['xx1']; ?>
</strong>：<strong><?php echo $this->_tpl_vars['xx2']; ?>
</strong></dt>
                                    </dl>

                                    <ul>

                                        <li><?php echo $this->_tpl_vars['xx']['shorttxt']; ?>
</li>

                                        <li><?php echo $this->_tpl_vars['xx']['shorttxt']; ?>
</li>

                                    </ul>

                                </div>

                                 <?php endif; ?>
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
