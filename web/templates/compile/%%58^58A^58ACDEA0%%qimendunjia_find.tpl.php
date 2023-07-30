<?php /* Smarty version 2.6.25, created on 2018-03-28 16:27:09
         compiled from index/paipan/qimendunjia_find.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
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

<div class="fn_bz5 fn_bz_result fn_part mod_box_t1">
<div class="hd">
<h1>奇门遁甲</h1>
</div>
<div class="bd">
<div class="cur_info">
<h6>奇门遁甲在线排盘系统</h6>
</div>

<div class="box_con ret_con">


<div class="qm_box" id="Layerurl">

<table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1 qm_table" id="paipanTable">
    <tbody>
      
      <tr>
        <td class="new"><strong>姓名：</strong><?php echo $this->_tpl_vars['info']['name']; ?>
 <strong>出生年:</strong><?php echo $this->_tpl_vars['info']['birthyear']; ?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong> 性别：</strong>
          <?php if ($this->_tpl_vars['info']['sex'] == 1): ?>男<?php else: ?>女<?php endif; ?>
          <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;占事：</strong><?php echo $this->_tpl_vars['info']['zhanshi']; ?>
</td>
        </tr>
      <tr>
        <td class="new"><strong>
        <?php if ($this->_tpl_vars['info']['jutang'] == 0): ?>
		公历时间</strong>：<?php echo $this->_tpl_vars['data']['timed']; ?>
　　<strong>农历时间：</strong><?php echo $this->_tpl_vars['data']['nongn']; ?>

        <br><strong>节气</strong><?php echo $this->_tpl_vars['data']['jieqq']; ?>
<?php echo $this->_tpl_vars['data']['yuan']; ?>
<br>
        <?php endif; ?>
        
<strong>干支：</strong><?php echo $this->_tpl_vars['data']['ygz']; ?>
<?php echo $this->_tpl_vars['data']['mgz']; ?>
<?php echo $this->_tpl_vars['data']['dgz']; ?>
<?php echo $this->_tpl_vars['data']['tgz']; ?>

<br><strong>当日旬空</strong>：<?php echo $this->_tpl_vars['data']['yxunk']; ?>
</strong>(年)&nbsp;<?php echo $this->_tpl_vars['data']['mxunk']; ?>
(月)&nbsp;<?php echo $this->_tpl_vars['data']['rxunk']; ?>
(日)&nbsp;<?php echo $this->_tpl_vars['data']['txunk']; ?>
(时)
<br>&nbsp;
<br>此局为<font color="#999933"><?php echo $this->_tpl_vars['data']['dunju']; ?>
</font>&nbsp;&nbsp;直符<font color="#999933">:<?php echo $this->_tpl_vars['data']['zhifu']; ?>
</font>&nbsp;&nbsp;直使<font color="#999933">:<?php echo $this->_tpl_vars['data']['zhishi']; ?>
</font>
</td>      </tr>
      <tr>
        <td align="center" class="new">
        
<?php if ($this->_tpl_vars['data']['zhuanf'] == 'zp'): ?>
 <table width="318" border="1" cellspacing="0" cellpadding="0" align="center" class="qm_table2" bordercolor="#e8e8e8">
  <tr>
    <td height="96" width="106"><?php echo $this->_tpl_vars['data']['qmdj']['3']; ?>
</td>
    <td width="106"><?php echo $this->_tpl_vars['data']['qmdj']['4']; ?>
</td>
    <td width="106"><?php echo $this->_tpl_vars['data']['qmdj']['5']; ?>
</td>
  </tr>
  <tr>
    <td height="96"><?php echo $this->_tpl_vars['data']['qmdj']['2']; ?>
</td>
    <td align="center" valign="middle" bgcolor="#ffd9b3">[中宫]<?php echo $this->_tpl_vars['data']['sqly']['4']; ?>
</td>
    <td><?php echo $this->_tpl_vars['data']['qmdj']['6']; ?>
</td>
  </tr>
  <tr>
    <td height="96"><?php echo $this->_tpl_vars['data']['qmdj']['1']; ?>
</td>
    <td><?php echo $this->_tpl_vars['data']['qmdj']['0']; ?>
</td>
    <td><?php echo $this->_tpl_vars['data']['qmdj']['7']; ?>
</td>
  </tr>
</table>
<?php else: ?>
 
  
 <table width="300" border="0" cellspacing="2" cellpadding="0" align="center" bgcolor="#FFDF55">
  <tr>
    <td height="96"><?php echo $this->_tpl_vars['data']['qmdj']['3']; ?>
</td>
    <td><?php echo $this->_tpl_vars['data']['qmdj']['8']; ?>
</td>
    <td><?php echo $this->_tpl_vars['data']['qmdj']['1']; ?>
</td>
  </tr>
  <tr>
    <td height="96"><?php echo $this->_tpl_vars['data']['qmdj']['2']; ?>
</td>
    <td align="center" valign="middle" bgcolor="#D4BF55"><?php echo $this->_tpl_vars['data']['qmdj']['4']; ?>
</td>
    <td><?php echo $this->_tpl_vars['data']['qmdj']['6']; ?>
</td>
  </tr>
  <tr>
    <td height="96"><?php echo $this->_tpl_vars['data']['qmdj']['7']; ?>
</td>
    <td><?php echo $this->_tpl_vars['data']['qmdj']['0']; ?>
</td>
    <td><?php echo $this->_tpl_vars['data']['qmdj']['5']; ?>
</td>
  </tr>
</table>   
  <?php endif; ?>
  </td>

      </tr>
	  
    </table>

</div>

<?php include('templates/public/morenav.php');?>
<i class="flag_tl_t3"></i>
<i class="flag_tr_t3"></i>
<i class="flag_bl_t3"></i>
<i class="flag_br_t3"></i>
</div>
<div class="btn_tool_retest">
<a class="btn_orange_1" href="<?php echo $this->_tpl_vars['web_url']; ?>
paipan/qimendunjia/">重新测算</a>
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
         <?php   include('templates/public/footer.tpl.php'); ?>  

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
