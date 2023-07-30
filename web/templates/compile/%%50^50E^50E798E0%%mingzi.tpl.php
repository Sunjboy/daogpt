<?php /* Smarty version 2.6.25, created on 2017-12-11 20:07:32
         compiled from index/peidui/mingzi.tpl */ ?>
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
                        <div class="mod_box_t1 fn_part fn_xingming">
                            <div class="hd">
                                <h1>姓名配对关系</h1>
                            </div>

                            <div class="bd">	
                            
                            <div class="intro_area">
                                    <p>姓名配对是根据姓名天格、地格、人格、总格、外格等五格数理关系，神算网爱情测试姓名配对是依据《易经》的姓名三才五格理论爱情测试姓名配对关系高达80%准确，输入双方的姓名通过缘分测试打分并运用阴阳五行相生相克理论，来测试您和对方的爱情测试指数、姓名配对缘分测试、\通过姓名笔划数看看你和爱人的关系究竟怎样</p>

                                </div>					

                                <div class="mod_box_t3 fn_box">

                                    <div class="box_con">

                                        <div class="mod_form">

                                            <form method="post" action="<?php echo $this->_tpl_vars['web_url']; ?>
index.php">
                                            <input type="hidden" name="ac" value="mingzi" />
                                            <input type="hidden" name="ct" value="peidui" />
                                            <input type="hidden" name="tid" value="387" />

                                                <div class="form_item">

                                                    <input name="xm1" id="pd_num1" value="" class="txt" type="text">

                                                    <span class="vs">VS</span>

                                                    <input name="xm2" id="pd_num2" value="" class="txt" type="text">

                                                </div>	

                                                <div class="form_item btn_item">

                                                    <button class="btn_orange2" type="submit" id="btn_begincs2">姓名配对</button>

                                                   <span class="match_tips"><a target="_blank" href="/peidui/mingzi/">名字分析</a></span>

                                                </div>

                                            </form>

                                        </div>

                                    </div>

                                    <i class="flag_tl_t3"></i><i class="flag_tr_t3"></i><i class="flag_bl_t3"></i><i class="flag_br_t3"></i>

                                </div>
                                
                                 <?php if ($this->_tpl_vars['xm1']): ?>

                                  <div class="match_result">

                                    <dl class="clearfix">

                                        <dt>双方姓名：<strong class="cRed"><?php echo $this->_tpl_vars['xm1']; ?>
：<strong class="cRed"><?php echo $this->_tpl_vars['xm2']; ?>
</strong></dt>																													

                                    </dl>

                                    <ul>

                                        <li>关系揭密：<?php echo $this->_tpl_vars['xxxy']['intro']; ?>
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
