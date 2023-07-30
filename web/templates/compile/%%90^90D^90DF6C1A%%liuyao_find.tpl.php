<?php /* Smarty version 2.6.25, created on 2018-03-28 16:26:36
         compiled from index/paipan/liuyao_find.tpl */ ?>
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
<?php 
 include('cache/gg/12sx_top_730x15.php');
?>
<div class="fn_bz1 fn_bz_result fn_part mod_box_t1">
<div class="hd">
<h1>六爻占卜</h1>
</div>
<div class="bd">
<div class="cur_info">
<h6>六爻起卦（六爻排盘）系统</h6>
</div>


<div class="box_con ret_con">


<div class="sm_box" id="Layerurl" style="width:600px">

<table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" id="paipanTable">
    <tbody>
     
      <tr>
        <td class="new"><strong>姓名：</strong><?php echo $this->_tpl_vars['info']['name']; ?>
 <strong>出生年:</strong><?php echo $this->_tpl_vars['info']['birthyear']; ?>
<strong> 性别：</strong><?php echo $this->_tpl_vars['info']['sex']; ?>
<strong>&nbsp;占事：</strong><?php echo $this->_tpl_vars['info']['reason']; ?>
</td>
        </tr>
      <tr>
        <td class="new"><strong>起卦方式：</strong><?php echo $this->_tpl_vars['info']['qiguafangfa']; ?>
</b>
        <?php if ($this->_tpl_vars['info']['auto'] == 5): ?>
        <?php echo $this->_tpl_vars['info']['bsnums_up']; ?>
,<?php echo $this->_tpl_vars['info']['bsnums_down']; ?>

        <?php elseif ($this->_tpl_vars['info']['addhour'] == 1): ?>
        动爻加时辰
        <?php else: ?>
        动爻不加时辰
        <?php endif; ?>
</td>
      </tr>
      <tr>
        <td class="new"><b>公历时间：</B><font color="#ff0000"><?php echo $this->_tpl_vars['data']['gongli']; ?>
</font> 
        <?php if ($this->_tpl_vars['info']['taiyang'] == 1): ?>
        真太阳时:$Truedate
        <?php endif; ?>
&nbsp;&nbsp;&nbsp;<b>农历时间：</B><font color="#0000ff"><?php echo $this->_tpl_vars['data']['nonglistr']; ?>
 </font>
      <BR>
      <b>干　　支：</B><?php echo $this->_tpl_vars['data']['ygz']; ?>
年<?php echo $this->_tpl_vars['data']['mgz']; ?>
月<?php echo $this->_tpl_vars['data']['dgz']; ?>
日<?php echo $this->_tpl_vars['data']['tgz']; ?>
时
	  　<br>
 <B>旬　　空：</B><?php echo $this->_tpl_vars['data']['xunkong']; ?>
&nbsp;&nbsp;　<br>
 <B>神　　煞：</B>驿马─<?php echo $this->_tpl_vars['yuma']; ?>
　桃花─<?php echo $this->_tpl_vars['taohua']; ?>
　日禄─<?php echo $this->_tpl_vars['rilu']; ?>
　贵人─<?php echo $this->_tpl_vars['guiren']; ?>
<BR>
<br><br>
<?php echo $this->_tpl_vars['data']['tplhtml']; ?>

<?php echo $this->_tpl_vars['data']['top2html']; ?>

  <br>
<?php echo $this->_tpl_vars['data']['top3html']; ?>
 
<?php echo $this->_tpl_vars['data']['top4html']; ?>
  
<br>
<?php echo $this->_tpl_vars['data']['last']; ?>

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
<a class="btn_orange_1" href="/paipan/liuyao/">重新测算</a>
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
