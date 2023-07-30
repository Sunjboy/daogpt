<?php /* Smarty version 2.6.25, created on 2018-04-24 02:21:18
         compiled from index/paipan/xkfx_find.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['web_url']; ?>
static/bazi/css/paipan/smcss.css"/>
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
<div class="fn_bz4 fn_bz_result fn_part mod_box_t1">
<div class="hd">
<h1>玄空飞星</h1>
</div>
<div class="bd">
<div class="cur_info">
<h6>玄空飞星在线排盘</h6>
</div>

<?php 
 include('cache/gg/sm_bottom_586x30.php');
?>
<div class="box_con ret_con">


<div class="sm_box" id="Layerurl" style="width:600px">

<table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" id="paipanTable">
    <tbody>
      <tr>
        <td align="center" class="new"><strong><font color=blue><?php echo $this->_tpl_vars['xkfx_Array']['dayun']; ?>
</font><font color="#009393"><?php echo $this->_tpl_vars['xkfx_Array']['sxname']; ?>
<br></font><font color=red>
<?php echo $this->_tpl_vars['xkfx_Array']['gm']; ?>
</font></strong>
<br>
<table width="200" border="0" cellspacing="0" cellpadding="0" bordercolor="#333333" class="xk_table" >
  <tr>
    <td class="tdx"><?php echo $this->_tpl_vars['xkfx_Array']['sp']['8']; ?>
<?php echo $this->_tpl_vars['xkfx_Array']['xp']['8']; ?>
<br><?php echo $this->_tpl_vars['xkfx_Array']['yp']['8']; ?>
</td>
    <td class="tdx"><?php echo $this->_tpl_vars['xkfx_Array']['sp']['4']; ?>
<?php echo $this->_tpl_vars['xkfx_Array']['xp']['4']; ?>
<br><?php echo $this->_tpl_vars['xkfx_Array']['yp']['4']; ?>
</td>
    <td class="tdx"><?php echo $this->_tpl_vars['xkfx_Array']['sp']['6']; ?>
<?php echo $this->_tpl_vars['xkfx_Array']['xp']['4']; ?>
<br><?php echo $this->_tpl_vars['xkfx_Array']['yp']['6']; ?>
</td>
  </tr>
  <tr>
    <td class="tdx"><?php echo $this->_tpl_vars['xkfx_Array']['sp']['7']; ?>
<?php echo $this->_tpl_vars['xkfx_Array']['xp']['7']; ?>
<br><?php echo $this->_tpl_vars['xkfx_Array']['yp']['7']; ?>
</td>
    <td class="tdx"><?php echo $this->_tpl_vars['xkfx_Array']['sp']['0']; ?>
<?php echo $this->_tpl_vars['xkfx_Array']['xp']['0']; ?>
<br><?php echo $this->_tpl_vars['xkfx_Array']['yp']['0']; ?>
</td>
    <td class="tdx"><?php echo $this->_tpl_vars['xkfx_Array']['sp']['2']; ?>
<?php echo $this->_tpl_vars['xkfx_Array']['xp']['2']; ?>
<br><?php echo $this->_tpl_vars['xkfx_Array']['yp']['2']; ?>
</td>
  </tr>
  <tr>
    <td class="tdx"><?php echo $this->_tpl_vars['xkfx_Array']['sp']['3']; ?>
<?php echo $this->_tpl_vars['xkfx_Array']['xp']['3']; ?>
<br><?php echo $this->_tpl_vars['xkfx_Array']['yp']['3']; ?>
</td>
    <td class="tdx"><?php echo $this->_tpl_vars['xkfx_Array']['sp']['5']; ?>
<?php echo $this->_tpl_vars['xkfx_Array']['xp']['5']; ?>
<br><?php echo $this->_tpl_vars['xkfx_Array']['yp']['5']; ?>
</td>
    <td class="tdx"><?php echo $this->_tpl_vars['xkfx_Array']['sp']['1']; ?>
<?php echo $this->_tpl_vars['xkfx_Array']['xp']['1']; ?>
<br><?php echo $this->_tpl_vars['xkfx_Array']['yp']['1']; ?>
</td>
  </tr>
</table>
<br>
<br>　　<?php echo $this->_tpl_vars['xkfx_Array']['shan']; ?>
山:
<?php if ($this->_tpl_vars['xkfx_Array']['tixing'] == 1): ?>
  <font color="#009393">宜出煞，楼门或大门宜开畅。而不宜收敛。开门宜大，或门旁边有较多玻璃窗，于室内于门处不宜有所阻拦，如设屏风等。且门外地势宜略低。</font> 
<?php else: ?>
	  <font color="#009393">宜收山，住宅形势须保守，而不宜开畅，于开门不宜过大，且于门处宜设屏风以遮掩，用以藏气。屋门外形势不宜过低，低则收山不尽 </font>
<?php endif; ?><br>

<?php if ($this->_tpl_vars['plj']): ?>
<br>　<font color="#009393"><b>排龙诀</b></font><p></p>
<?php echo $this->_tpl_vars['plj']; ?>

<?php endif; ?>
<br>

<?php if ($this->_tpl_vars['minggua']): ?>
<br>　<strong><font color=red>命卦</font>、<font color=green>流年</font>、<font color=blue>流月</font></strong><p></p>
<?php echo $this->_tpl_vars['minggua']; ?>

</td></tr></table>
<?php endif; ?>
</td></tr></tbody></table>

</div>

<?php include('templates/public/morenav.php');?>

<i class="flag_tl_t3"></i>
<i class="flag_tr_t3"></i>
<i class="flag_bl_t3"></i>
<i class="flag_br_t3"></i>
</div>
<div class="btn_tool_retest">
<a class="btn_orange_1" href="<?php echo $this->_tpl_vars['web_url']; ?>
paipan/xuankongfeixing/">重新测算</a>
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
