<?php /* Smarty version 2.6.25, created on 2018-03-23 10:38:41
         compiled from index/suanming/rglm.tpl */ ?>
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

<div class="fn_part fn_rg fn_rg_result mod_box_t1">
<div class="hd">
<h1><?php echo $this->_tpl_vars['cookies']['xingming']['xing']; ?>
<?php echo $this->_tpl_vars['cookies']['xingming']['ming']; ?>
日干论命</h1>
</div>
<div class="bd">
<div class="cur_info">
<h6>当前算命者信息</h6>
<p class="info_prop">
<span>姓名：<strong><?php echo $this->_tpl_vars['cookies']['xingming']['xing']; ?>
<?php echo $this->_tpl_vars['cookies']['xingming']['ming']; ?>
</strong></span>

<span>性别：<strong><?php echo $this->_tpl_vars['cookies']['sex']; ?>
</strong></span>

<span>出生时间：<strong><?php echo $this->_tpl_vars['cookies']['nianling']['y']; ?>
年<?php echo $this->_tpl_vars['cookies']['nianling']['m']; ?>
月<?php echo $this->_tpl_vars['cookies']['nianling']['d']; ?>
日<?php echo $this->_tpl_vars['cookies']['nianling']['h']; ?>
时<?php echo $this->_tpl_vars['cookies']['nianling']['i']; ?>
分</strong></span>

<span>今年：<strong><?php echo $this->_tpl_vars['cookies']['nianling']['nl']; ?>
岁</strong></span>

<span>属相：<strong><?php echo $this->_tpl_vars['cookies']['sx']; ?>
</strong></span>

</p>

<a class="a_retest" href="<?php echo $this->_tpl_vars['web_url']; ?>
suanming/clear/">重新测算</a>

</div>

<div class="relateLinks">

<?php $_from = $this->_tpl_vars['topic_arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
    <a <?php if ($this->_tpl_vars['tid'] == $this->_tpl_vars['v']['id']): ?>class="current"<?php endif; ?> title="<?php echo $this->_tpl_vars['v']['name']; ?>
" href="<?php echo $this->_tpl_vars['web_url']; ?>
<?php echo $this->_tpl_vars['v']['extra']; ?>
"><?php echo $this->_tpl_vars['v']['name']; ?>
</a>
<?php endforeach; endif; unset($_from); ?>                     

</div>



<div class="mod_box_t3 fn_box">

<div class="box_con ret_con">

<table border="0" cellpadding="0" cellspacing="0" class="info_table info_table_col8" width="100%">

<tbody>

<tr>

<th class="sort_1st" rowspan="5">

<?php echo $this->_tpl_vars['cookies']['xingming']['xing']; ?>
<?php echo $this->_tpl_vars['cookies']['xingming']['ming']; ?>


</th>

<td class="sort_2nd" rowspan="2">

出生时间:

</td>

<td class="sort_3rd">

(公历)

</td>

<td class="sort_4th">

<?php echo $this->_tpl_vars['cookies']['nianling']['y']; ?>
年

</td>

<td class="sort_5th">

<?php echo $this->_tpl_vars['cookies']['nianling']['m']; ?>
月

</td>

<td class="sort_6th">

<?php echo $this->_tpl_vars['cookies']['nianling']['d']; ?>
日

</td>

<td class="sort_7th">

<?php echo $this->_tpl_vars['cookies']['nianling']['h']; ?>
点

</td>

<td class="sort_8th" rowspan="5">

<p>

本命属<?php echo $this->_tpl_vars['cookies']['sx']; ?>
，<?php echo $this->_tpl_vars['nayin']['0']['layin']; ?>
命。<?php echo $this->_tpl_vars['wang']['wang']; ?>
<?php echo $this->_tpl_vars['wang']['que']; ?>
；日主天干为<?php echo $this->_tpl_vars['nayin']['0']['layin']; ?>
<?php echo $this->_tpl_vars['wang']['wang']; ?>
<?php echo $this->_tpl_vars['wang']['que']; ?>
<?php echo $this->_tpl_vars['cookies']['bazi']['4']; ?>
，生于<?php echo $this->_tpl_vars['cookies']['siji']; ?>
季。

</p>

<p class="tc">

（同类<?php echo $this->_tpl_vars['tywh']['tnwh']; ?>
；异类<?php echo $this->_tpl_vars['tywh']['ynwh']; ?>
。）

</p>

<p>

<em>重要说明：本结果为系统自动分析，仅供参考，八字缺什么与补什么无关，具体应由专业老师分析！　</em>

</p>

</td>

</tr>

<tr>

<td class="sort_3rd">

(阴历)

</td>

<td>

<?php echo $this->_tpl_vars['cookies']['jiuli']['y']; ?>
年

</td>

<td>

<?php echo $this->_tpl_vars['cookies']['jiuli']['m']; ?>
月

</td>

<td>

<?php echo $this->_tpl_vars['cookies']['jiuli']['d']; ?>
日

</td>

<td>

<?php echo $this->_tpl_vars['cookies']['jiuli']['h']; ?>
时

</td>

</tr>

<tr>

<td colspan="2">

八 字:

</td>

<td>
<?php echo $this->_tpl_vars['cookies']['bazi']['0']; ?>

<?php echo $this->_tpl_vars['cookies']['bazi']['1']; ?>

</td>

<td>
<?php echo $this->_tpl_vars['cookies']['bazi']['2']; ?>

<?php echo $this->_tpl_vars['cookies']['bazi']['3']; ?>

</td>

<td>
<?php echo $this->_tpl_vars['cookies']['bazi']['4']; ?>

<?php echo $this->_tpl_vars['cookies']['bazi']['5']; ?>

</td>

<td>
<?php echo $this->_tpl_vars['cookies']['bazi']['6']; ?>

<?php echo $this->_tpl_vars['cookies']['bazi']['7']; ?>

</td>

</tr>

<tr>

<td colspan="2">

五 行:

</td>

<td>
<?php echo $this->_tpl_vars['cookies']['wh']['0']; ?>

<?php echo $this->_tpl_vars['cookies']['wh']['1']; ?>


</td>

<td>

<?php echo $this->_tpl_vars['cookies']['wh']['2']; ?>

<?php echo $this->_tpl_vars['cookies']['wh']['3']; ?>


</td>

<td>

<?php echo $this->_tpl_vars['cookies']['wh']['4']; ?>

<?php echo $this->_tpl_vars['cookies']['wh']['5']; ?>


</td>

<td>

<?php echo $this->_tpl_vars['cookies']['wh']['6']; ?>

<?php echo $this->_tpl_vars['cookies']['wh']['7']; ?>


</td>

</tr>

<tr>

<td colspan="2">

纳 音:

</td>

<td>

<?php echo $this->_tpl_vars['nayin']['0']['layin']; ?>


</td>

<td>
<?php echo $this->_tpl_vars['nayin']['1']['layin']; ?>


</td>

<td>

<?php echo $this->_tpl_vars['nayin']['2']['layin']; ?>


</td>

<td>

<?php echo $this->_tpl_vars['nayin']['3']['layin']; ?>


</td>

</tr>

</tbody>

</table>

</div>

<i class="flag_tl_t3"></i>

<i class="flag_tr_t3"></i>

<i class="flag_bl_t3"></i>

<i class="flag_br_t3"></i>

</div>


<!--rglm-->
<div class="mod_box_t3 fn_box">

<div class="box_con ret_con">

<table border="0" cellpadding="0" cellspacing="0" class="info_table info_table_col2" width="100%">

<tbody>

<tr>

<th>

<span>性格分析</span>

</th>

<td>

<ul class="info_table_list">

<li>

<?php echo $this->_tpl_vars['rglm']['xgfx']; ?>


</li>

</ul>

</td>

</tr>

</tbody>

</table>

</div>

<i class="flag_tl_t3"></i>

<i class="flag_tr_t3"></i>

<i class="flag_bl_t3"></i>

<i class="flag_br_t3"></i>

</div>

<div class="mod_box_t3 fn_box">

<div class="box_con ret_con">

<table border="0" cellpadding="0" cellspacing="0" class="info_table info_table_col2" width="100%">

<tbody>

<tr>

<th>

<span>爱情分析</span>

</th>

<td>

<ul class="info_table_list">

<li>

<?php echo $this->_tpl_vars['rglm']['aqfx']; ?>


</li>

</ul>

</td>

</tr>

</tbody>

</table>

</div>

<i class="flag_tl_t3"></i>

<i class="flag_tr_t3"></i>

<i class="flag_bl_t3"></i>

<i class="flag_br_t3"></i>

</div>

<div class="mod_box_t3 fn_box">

<div class="box_con ret_con">

<table border="0" cellpadding="0" cellspacing="0" class="info_table info_table_col2" width="100%">

<tbody>

<tr>

<th>

<span>事业分析</span>

</th>

<td>

<ul class="info_table_list">

<li>

<?php echo $this->_tpl_vars['rglm']['syfx']; ?>


</li>

</ul>

</td>

</tr>

</tbody>

</table>

</div>

<i class="flag_tl_t3"></i>

<i class="flag_tr_t3"></i>

<i class="flag_bl_t3"></i>

<i class="flag_br_t3"></i>

</div>

<div class="mod_box_t3 fn_box">

<div class="box_con ret_con">

<table border="0" cellpadding="0" cellspacing="0" class="info_table info_table_col2" width="100%">

<tbody>

<tr>

<th>

<span>财运分析</span>

</th>

<td>

<ul class="info_table_list">

<li>

<?php echo $this->_tpl_vars['rglm']['cyfx']; ?>


</li>

</ul>

</td>

</tr>

</tbody>

</table>

</div>

<i class="flag_tl_t3"></i>

<i class="flag_tr_t3"></i>

<i class="flag_bl_t3"></i>

<i class="flag_br_t3"></i>

</div>
<!--rglm-->

<div class="btn_tool_retest">

<a class="btn_orange_1" href="<?php echo $this->_tpl_vars['web_url']; ?>
suanming/clear/">重新测算</a>

</div>

<div class="tips_area">

本算命系统来源于中国民俗学的一些测算方法，并非科学研究成果，仅供休闲娱乐，请勿迷信，按此操作一切后果自负！

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

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
