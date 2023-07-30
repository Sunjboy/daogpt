<?php /* Smarty version 2.6.25, created on 2017-12-09 23:04:56
         compiled from index/xingming/dzqm_form.tpl */ ?>
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
            <div class="fn_dzqm fn_part mod_box_t1">
              <div class="hd">
                <h1>定字起名</h1>
              </div>
              <div class="bd">
              <div class="intro_area">
                  <strong>「定字起名」</strong>起名字既有一定的原则和方法，又有一些禁忌和容易陷入的误区，一个人的姓和名字都是没有的，从宝宝出来就要起名，姓是已经定好的，如果已经确定了一个字的情况，定第一个字起名，定第二个字起名，神算网为你推荐起名字大全，例如王姓家庭中已经确定了家谱中的一个中间字【星】，需要起【伍星星】【伍星月】【伍星鹏】这样的名字，或者已经确定了末尾字【轩】，需要起【伍星轩】【伍伍轩】【伍慧轩】这样的名字。
 </div>
           <div class="mod_box_t3 fn_box" id="dingzi_step1">

                <form action="<?php echo $this->_tpl_vars['web_url']; ?>
index.php" method="post" onSubmit="return dingzi_next();">
						<input type="hidden" value="373" name="tid">
                        <input type="hidden" value="dzqm" name="ac" />
                        <input type="hidden" value="xingming" name="ct" />
                <input type="hidden" value="3" name="type">

                  <div class="box_con">

                    <h3 class="btitle">请输入起名基本信息</h3>

                    

                    <div class="mod_form">

                      <div class="form_item">宝宝姓氏：<input name="xing" id="dingzi_xing" class="ipt_text w112" type="text" value="" /><span class="prompt">（请输入简体汉字，最多两个字）</span></div>

                      <div class="form_item"><select id="dingzi_type" name="dingzi" class="select"><option value="1">定第一个字</option><option value="2">定第二个字</option></select><input class="ipt_text ml10" name="ming" id="dingzi_name" type="text" value="" /><span class="prompt">（请输入需固定的简体汉字）</span></div>

                    </div>

                    

                     <div class=" btn_item">

                     <input type="submit" id="btn_begincs2" class="btn_orange2" value="起名">
                      </div>
			 <div class="help_area">
                <span class="help_tit"><i></i>相关帮助：</span>
                    [<a target="_blank" href="<?php echo $this->_tpl_vars['web_url']; ?>
xingming/xmpd/">姓名配对关系</a>]
                </div>
                       <?php include('cache/gg/sm_bottom_586x30.php'); ?>
                  </div>
                  </form>
               
                
                  <i class="flag_tl_t3"></i>

                  <i class="flag_tr_t3"></i>

                  <i class="flag_bl_t3"></i>

                  <i class="flag_br_t3"></i>

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
         <?php   include('templates/public/footer.tpl.php'); ?>  

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
