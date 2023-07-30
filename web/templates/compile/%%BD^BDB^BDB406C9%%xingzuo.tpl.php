<?php /* Smarty version 2.6.25, created on 2017-12-10 04:52:49
         compiled from index/peidui/xingzuo.tpl */ ?>
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
                        <div class="mod_box_t1 fn_part fn_xingzuo">
                            <div class="hd">
                                <h1>星座配对</h1>
                            </div>
                            <div class="bd">	
                            <div class="intro_area">
							<p>每个人的出生，都有一个代表自己的星座，不同的星座者有着不同的性格特征与运势，想知道你与他能否成为合拍的星座恋人吗？那就星座配对一下查看两人的星座配对指数，提前知晓。可通过星座配对查询得到12星座配对指数结果，星座配对是占卜师、阴阳师根据天象运行分析每个星座的不同性格，从而判断聚在一起。</p>
                                </div>				

                                <div class="mod_box_t3 fn_box">
                                    <div class="box_con">
                                        <div class="mod_form">
                                            <form method="post" action="<?php echo $this->_tpl_vars['web_url']; ?>
index.php">
                                            
                                            <input type="hidden" name="ac" value="xingzuo" />
                                            <input type="hidden" name="ct" value="peidui" />
                                            <input type="hidden" name="tid" value="385" />
                                            
                                                <div class="form_item">
                                                    <div class="st_outer"><div class="st_inner"><select name="xz1">
                                                                <option selected="" value="白羊座">白羊座</option>
                                                                <option value="金牛座">金牛座</option>

                                                                <option value="双子座">双子座</option>

                                                                <option value="巨蟹座">巨蟹座</option>

                                                                <option value="狮子座">狮子座</option>

                                                                <option value="处女座">处女座</option>

                                                                <option value="天秤座">天秤座</option>

                                                                <option value="天蝎座">天蝎座</option>

                                                                <option value="射手座">射手座</option>

                                                                <option value="摩羯座">摩羯座</option>

                                                                <option value="水瓶座">水瓶座</option>

                                                                <option value="双鱼座">双鱼座</option>

                                                            </select></div></div>

                                                    <span class="vs">VS</span>

                                                    <div class="st_outer"><div class="st_inner"><select name="xz2">

                                                                <option selected="" value="白羊座">白羊座</option>

                                                                <option value="金牛座">金牛座</option>

                                                                <option value="双子座">双子座</option>

                                                                <option value="巨蟹座">巨蟹座</option>

                                                                <option value="狮子座">狮子座</option>

                                                                <option value="处女座">处女座</option>

                                                                <option value="天秤座">天秤座</option>

                                                                <option value="天蝎座">天蝎座</option>

                                                                <option value="射手座">射手座</option>

                                                                <option value="摩羯座">摩羯座</option>

                                                                <option value="水瓶座">水瓶座</option>

                                                                <option value="双鱼座">双鱼座</option>

                                                            </select></div></div>

                                                </div>	
                                                
                                                <div class="form_item btn_item">
                                                    <button class="btn_orange2" type="submit" id="btn_begincs2">配对指数</button>

                                                   <span class="match_tips"><a target="_blank" href="/xingzuo/">查看星座运势</a></span>

                                                </div>
                                            </form>

                                        </div>

                                    </div>

                                    <i class="flag_tl_t3"></i><i class="flag_tr_t3"></i><i class="flag_bl_t3"></i><i class="flag_br_t3"></i>

                                </div>
                                
                                <?php if ($this->_tpl_vars['xz1'] != ''): ?>

                                <div class="match_result">

                                <dl class="clearfix">

                                <dt class="spec">双方星座：<strong><?php echo $this->_tpl_vars['xz1']; ?>
</strong>：<strong><?php echo $this->_tpl_vars['xz2']; ?>
</strong></dt>

                               <p>
									<?php echo $this->_tpl_vars['xz']['shorttxt']; ?>

                               </p>

                                </dl>

                                <ul>

                                <li><?php echo $this->_tpl_vars['xz']['content']; ?>
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
