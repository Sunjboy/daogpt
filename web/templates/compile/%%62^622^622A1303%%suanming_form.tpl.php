<?php /* Smarty version 2.6.25, created on 2017-11-30 20:25:23
         compiled from index/suanming/suanming_form.tpl */ ?>
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
                <div class="<?php echo $this->_tpl_vars['arr']['titleclass']; ?>
 fn_part mod_box_t1">
                    <div class="hd">
                        <h1><?php echo $this->_tpl_vars['arr']['h1']; ?>
</h1>
                    </div>
                    <div class="bd">
                        <div class="intro_area"><?php echo $this->_tpl_vars['arr']['jianjie']; ?>
</div>
                        <div class="mod_box_t3 fn_box">
                            <div class="box_con">
                                <form action="/index.php" name="login" method="post" onSubmit="return checkForm();">
                                    <div class="mod_form">
                                        <div class="form_item">
                                            姓：<input type="text" name="xing" id="xing" value="" class="ipt_text" />
                                            名：<input type="text" name="name" id="ming" value="" class="ipt_text" />
                                            &nbsp;<input type="radio" checked="checked" value="0" id="male" class="ipt_radio" name="sex"><label for="male">男</label>
                                            &nbsp;<input type="radio" value="1" id="female" class="ipt_radio" name="sex"><label for="female">女</label>
                                        </div>

                                        <div class="form_item">
                                            出生日期（公历）&nbsp;
                                            <select class="select" name="y" id="gl_year" onChange="chage_day('gl');">
                                                <?php for($i=1910;$i<2017;$i++){ ?>
                                                <?php if($i==1988){$se='selected';}else{$se='';} ?>
                                                <option value="<?=$i?>" <?=$se?>><?=$i?></option>
                                                <?php }?>
                                            </select> 年
                                            <select class="select" name="m" id="gl_month">
                                                <?php for($i=1;$i<13;$i++){ ?>
                                                <?php if($i==date('m',time())){$se='selected';}else{$se='';} ?>
                                                <option value="<?=$i?>" <?=$se?>><?=$i?></option>
                                                <?php }?>
                                            </select> 月
                                            <select class="select" name="d" id="gl_day">
                                                <?php for($i=1;$i<32;$i++){ ?>
                                                <?php if($i==date('d',time())){$se='selected';}else{$se='';} ?>
                                                <option value="<?=$i?>" <?=$se?>><?=$i?></option>
                                                <?php }?>
                                            </select> 日
                                            <select class="select" name="h" id="hour">
                                                <option value="0">0&nbsp;子</option>
                                                <option value="1">1&nbsp;丑</option>
                                                <option value="2">2&nbsp;丑</option>
                                                <option value="3">3&nbsp;寅</option>
                                                <option value="4">4&nbsp;寅</option>
                                                <option value="5">5&nbsp;卯</option>
                                                <option value="6">6&nbsp;卯</option>
                                                <option value="7">7&nbsp;辰</option>
                                                <option value="8">8&nbsp;辰</option>
                                                <option value="9">9&nbsp;巳</option>
                                                <option value="10">10&nbsp;巳</option>
                                                <option value="11">11&nbsp;午</option>
                                                <option value="12">12&nbsp;午</option>
                                                <option value="13">13&nbsp;未</option>
                                                <option value="14">14&nbsp;未</option>
                                                <option value="15">15&nbsp;申</option>
                                                <option value="16">16&nbsp;申</option>
                                                <option value="17">17&nbsp;酉</option>
                                                <option value="18">18&nbsp;酉</option>
                                                <option value="19">19&nbsp;戌</option>
                                                <option value="20">20&nbsp;戌</option>
                                                <option value="21">21&nbsp;亥</option>
                                                <option value="22">22&nbsp;亥</option>
                                                <option value="23">23&nbsp;子</option>
                                            </select> 时
                                            <select class="select" name="i" id="minute">
                                                <option value="0">未知</option>
                                                <?php for($i=0;$i<60;$i++){ ?>
                                                <option value="<?=$i?>"><?=$i?></option>
                                                <?php }?>
                                            </select> 分
                                        </div>
                                        <input type="hidden" name=ct  value="suanming">
                                        <input type="hidden" name=ac  value="sm_form">
                                        <input type="hidden" name=cY  value="">
                                        <input type="hidden" name=cM  value="">
                                        <input type="hidden" name=cD  value="">
                                        <input type="hidden" name=cH  value="">
                                        <input type="hidden" name=term1  value="">
                                        <input type="hidden" name=term2  value="">
                                        <input type="hidden" name=start_term  value="">
                                        <input type="hidden" name=end_term  value="">
                                        <input type="hidden" name=start_term1  value="">
                                        <input type="hidden" name=end_term1  value="">
                                        <input type="hidden" name=lDate  value="">
                                        <input type="hidden" name="base" value="<?php echo $this->_tpl_vars['arr']['postbase']; ?>
">

                                        <div class="form_item btn_item">
                                            <button class="btn_orange2" type="submit" id="btn_begincs2">算命</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="help_area">
                                    <span class="help_tit"><i></i>相关帮助：</span>
                                    [<a href="/show-4845.html">真太阳时</a>]
                                    [<a href="<?php echo $this->_tpl_vars['web_url']; ?>
hdjr/yinyangli/" target="_blank">阴阳历转换</a>]
                                </div>
                            </div>
                            <i class="flag_tl_t3"></i><i class="flag_tr_t3"></i><i class="flag_bl_t3"></i><i class="flag_br_t3"></i>
                        </div>
                        <div class="relateLinks">
                        
                            <?php $_from = $this->_tpl_vars['topic_arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                                <a <?php if ($this->_tpl_vars['tid'] == $this->_tpl_vars['v']['id']): ?>class="current"<?php endif; ?> href="<?php echo $this->_tpl_vars['web_url']; ?>
<?php echo $this->_tpl_vars['v']['extra']; ?>
"><?php echo $this->_tpl_vars['v']['name']; ?>
</a>
                            <?php endforeach; endif; unset($_from); ?>    
                            
                        </div>
                    </div>
                    <i class="flag_tl_t1"></i><i class="flag_tr_t1"></i><i class="flag_bl_t1"></i><i class="flag_br_t1"></i>
                </div>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/public/left_sx.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/public/left_news.tpl', 'smarty_include_vars' => array()));
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
