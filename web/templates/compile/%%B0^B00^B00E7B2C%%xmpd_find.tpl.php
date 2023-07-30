<?php /* Smarty version 2.6.25, created on 2018-03-28 16:28:25
         compiled from index/xingming/xmpd_find.tpl */ ?>
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
<div class="fn_part fn_xms fn_xm_result mod_box_t1">
<div class="hd">
<h1>姓名配对</h1>
</div>
<div class="bd">
<div class="mod_box_t3">
<div>
<table border="0" cellpadding="0" cellspacing="0" class="info_table info_table_col3" width="100%">
<tbody>
<tr>
<th class="sort_1st">
<ul class="clearfix">
<li>&nbsp;</li>
<li class="cGrey">繁体</li>
<li class="cGrey">拼音</li>
<li class="cGrey">康熙笔画</li>
<li class="cGrey">字意五行</li>

<li><strong><?php echo $this->_tpl_vars['x1arr']['nxing1']; ?>
</strong></li>
<li><?php echo $this->_tpl_vars['x1arr']['n1gb']; ?>
</li>
<li><?php echo $this->_tpl_vars['x1arr']['n1py']; ?>
</li>
<li><?php echo $this->_tpl_vars['x1arr']['bihua1']; ?>
</li>
<li><?php echo $this->_tpl_vars['x1arr']['n1wh']; ?>
</li>

<?php if ($this->_tpl_vars['x2arr']['nxing2'] != ''): ?>
<li><strong><?php echo $this->_tpl_vars['x2arr']['nxing2']; ?>
</strong></li>
<li><?php echo $this->_tpl_vars['x2arr']['n2gb']; ?>
</li>
<li><?php echo $this->_tpl_vars['x2arr']['n2py']; ?>
</li>
<li><?php echo $this->_tpl_vars['x2arr']['bihua2']; ?>
</li>
<li><?php echo $this->_tpl_vars['x2arr']['n2wh']; ?>
</li>
<?php endif; ?>

<?php if ($this->_tpl_vars['m1arr']['nming1'] != ''): ?>
<li><strong><?php echo $this->_tpl_vars['m1arr']['nming1']; ?>
</strong></li>
<li><?php echo $this->_tpl_vars['m1arr']['m1gb']; ?>
</li>
<li><?php echo $this->_tpl_vars['m1arr']['m1py']; ?>
</li>
<li><?php echo $this->_tpl_vars['m1arr']['bihua3']; ?>
</li>
<li><?php echo $this->_tpl_vars['m1arr']['m1wh']; ?>
</li>
<?php endif; ?>

<?php if ($this->_tpl_vars['m2arr']['nming2'] != ''): ?>
<li><strong><?php echo $this->_tpl_vars['m2arr']['nming2']; ?>
</strong></li>
<li><?php echo $this->_tpl_vars['m2arr']['m2gb']; ?>
</li>
<li><?php echo $this->_tpl_vars['m2arr']['m2py']; ?>
</li>
<li><?php echo $this->_tpl_vars['m2arr']['bihua4']; ?>
</li>
<li><?php echo $this->_tpl_vars['m2arr']['m2wh']; ?>
</li>
<?php endif; ?>

</ul>
</th>
<td class="sort_2nd">天格 >> <?php echo $this->_tpl_vars['tdrh_ge_arr']['tiange1']; ?>
 (<?php echo $this->_tpl_vars['tdrh_ge_arr']['tgsancai']; ?>
)<br />
人格 >> <?php echo $this->_tpl_vars['tdrh_ge_arr']['renge1']; ?>
 (<?php echo $this->_tpl_vars['tdrh_ge_arr']['renge1_sancai133']; ?>
)<br />
地格 >><?php echo $this->_tpl_vars['tdrh_ge_arr']['dige1']; ?>
 (<?php echo $this->_tpl_vars['tdrh_ge_arr']['dige1_sancai133']; ?>
)</td>
<td class="sort_3rd">外格 >><?php echo $this->_tpl_vars['tdrh_ge_arr']['waige1']; ?>
 (<?php echo $this->_tpl_vars['tdrh_ge_arr']['waige1_sancai133']; ?>
)<br />总格 >> <?php echo $this->_tpl_vars['tdrh_ge_arr']['zhongge1']; ?>
 (<?php echo $this->_tpl_vars['tdrh_ge_arr']['zhongge1_sancai133']; ?>
)</td>
</tr>
</tbody>
</table>
</div>
<i class="flag_tl_t3"></i>
<i class="flag_tr_t3"></i>
<i class="flag_bl_t3"></i>
<i class="flag_br_t3"></i>
</div>


<div class="mod_box_t3 summary">
<div class="box_con">
<!---->
<h4 class="cut_tit">性格分析</h4>
<h3><strong>姓名：<?php echo $this->_tpl_vars['one_arr']['name1']; ?>
  性别：<?php echo $this->_tpl_vars['one_arr']['sex1']; ?>
</strong></h3>
<?php echo $this->_tpl_vars['one_arr']['xg1']; ?>


</div>
<i class="flag_tl_t3"></i>
<i class="flag_tr_t3"></i>
<i class="flag_bl_t3"></i>
<i class="flag_br_t3"></i>
</div>

<div class="mod_box_t3">
<div>
<table border="0" cellpadding="0" cellspacing="0" class="info_table info_table_col3" width="100%">
<tbody>
<tr>
<th class="sort_1st">
<ul class="clearfix">
<li>&nbsp;</li>
<li class="cGrey">繁体</li>
<li class="cGrey">拼音</li>
<li class="cGrey">康熙笔画</li>
<li class="cGrey">字意五行</li>

<li><strong><?php echo $this->_tpl_vars['n2x1arr']['n2xing1']; ?>
</strong></li>
<li><?php echo $this->_tpl_vars['n2x1arr']['n2x1gb']; ?>
</li>
<li><?php echo $this->_tpl_vars['n2x1arr']['n2x1py']; ?>
</li>
<li><?php echo $this->_tpl_vars['n2x1arr']['nbihua1']; ?>
</li>
<li><?php echo $this->_tpl_vars['n2x1arr']['n2x1wh']; ?>
</li>

<?php if ($this->_tpl_vars['n2x2arr']['n2xing2'] != ''): ?>
<li><strong><?php echo $this->_tpl_vars['n2x2arr']['n2xing2']; ?>
</strong></li>
<li><?php echo $this->_tpl_vars['n2x2arr']['n2x2gb']; ?>
</li>
<li><?php echo $this->_tpl_vars['n2x2arr']['n2x2py']; ?>
</li>
<li><?php echo $this->_tpl_vars['n2x2arr']['nbihua2']; ?>
</li>
<li><?php echo $this->_tpl_vars['n2x2arr']['n2x2wh']; ?>
</li>
<?php endif; ?>



<li><strong><?php echo $this->_tpl_vars['n2m1arr']['n2ming1']; ?>
</strong></li>
<li><?php echo $this->_tpl_vars['n2m1arr']['n2m1gb']; ?>
</li>
<li><?php echo $this->_tpl_vars['n2m1arr']['n2m1py']; ?>
</li>
<li><?php echo $this->_tpl_vars['n2m1arr']['nbihua3']; ?>
</li>
<li><?php echo $this->_tpl_vars['n2m1arr']['n2m1wh']; ?>
</li>


<?php if ($this->_tpl_vars['n2m2arr']['n2ming2'] != ''): ?>
<li><strong><?php echo $this->_tpl_vars['n2m2arr']['n2ming2']; ?>
</strong></li>
<li><?php echo $this->_tpl_vars['n2m2arr']['n2m2gb']; ?>
</li>
<li><?php echo $this->_tpl_vars['n2m2arr']['n2m2py']; ?>
</li>
<li><?php echo $this->_tpl_vars['n2m2arr']['nbihua4']; ?>
</li>
<li><?php echo $this->_tpl_vars['n2m2arr']['n2m2wh']; ?>
</li>
<?php endif; ?>
</ul>
</th>
<td class="sort_2nd">天格 >> <?php echo $this->_tpl_vars['tdrh2_ge_arr']['ntiange1']; ?>
 (<?php echo $this->_tpl_vars['tdrh2_ge_arr']['tg2sancai']; ?>
)<br />
人格 >> <?php echo $this->_tpl_vars['tdrh2_ge_arr']['nrenge1']; ?>
 (<?php echo $this->_tpl_vars['tdrh2_ge_arr']['nrenge1_sancai133']; ?>
)<br />
地格 >><?php echo $this->_tpl_vars['tdrh2_ge_arr']['ndige1']; ?>
 (<?php echo $this->_tpl_vars['tdrh2_ge_arr']['ndige1_sancai133']; ?>
)</td>
<td class="sort_3rd">外格 >><?php echo $this->_tpl_vars['tdrh2_ge_arr']['nwaige1']; ?>
 (<?php echo $this->_tpl_vars['tdrh2_ge_arr']['nwaige1_sancai133']; ?>
)<br />总格 >> <?php echo $this->_tpl_vars['tdrh2_ge_arr']['nzhongge1']; ?>
 (<?php echo $this->_tpl_vars['tdrh2_ge_arr']['nzhongge1_sancai133']; ?>
)</td>
</tr>
</tbody>
</table>
</div>
<i class="flag_tl_t3"></i>
<i class="flag_tr_t3"></i>
<i class="flag_bl_t3"></i>
<i class="flag_br_t3"></i>
</div>

<div class="mod_box_t3 summary">
<div class="box_con">
<!---->
<h4 class="cut_tit">性格分析</h4>
<h3><strong>姓名：<?php echo $this->_tpl_vars['two_arr']['name2']; ?>
  性别：<?php echo $this->_tpl_vars['two_arr']['sex2']; ?>
</strong></h3>
<?php echo $this->_tpl_vars['two_arr']['xg1xx']; ?>


</div>
<i class="flag_tl_t3"></i>
<i class="flag_tr_t3"></i>
<i class="flag_bl_t3"></i>
<i class="flag_br_t3"></i>
</div>

<div class="mod_box_t3 summary">
<div class="box_con">


<h4 class="cut_tit">配对指数</h4>
<h3><strong>经过分析，[<?php echo $this->_tpl_vars['one_arr']['name1']; ?>
]和[<?php echo $this->_tpl_vars['two_arr']['name2']; ?>
]的姓名配对评分如下：</strong><span class="cRed"><?php echo $this->_tpl_vars['two_arr']['zf']; ?>
分</span></h3>

<?php if ($this->_tpl_vars['one_arr']['sex1'] == $this->_tpl_vars['two']['sex2']): ?>

		<font color=red>本站是按中国民俗学的一些测算方法来计算的，暂时不支持同性缘份的测试</font>
		<?php else: ?>
		<font color=green>
        	<?php if ($this->_tpl_vars['two_arr']['zf'] < 60): ?>
				你们的姓名五格可能不是太合，不过八字配合所起的作用更大，另外彼此的努力也会让你们改善关系，记住：事在人为！
			<?php elseif ($this->_tpl_vars['two_arr']['zf'] > 60 && $this->_tpl_vars['two_arr']['zf'] < 70): ?>
 				你们的姓名五格相合程度马马虎虎，不过八字配合所起的作用更大，继续努力改善关系，会对你们的关系有帮助的！
 			<?php elseif ($this->_tpl_vars['two_arr']['zf'] > 70 && $this->_tpl_vars['two_arr']['zf'] < 80): ?>
				你们的姓名五格相合程度还不错哟！
			<?php elseif ($this->_tpl_vars['two_arr']['zf'] > 80 && $this->_tpl_vars['two_arr']['zf'] < 90): ?>
				你们的姓名五格相合程度相当棒！
   			<?php else: ?>
				你们的姓名五格相合程度太棒了！！恭喜！
            <?php endif; ?>
            </font>
			<?php if ($this->_tpl_vars['one_arr']['name1'] == $this->_tpl_vars['two_arr']['name2']): ?> 
 				<br /><font color=#0000ff>^_^ 你们俩同名同姓嘛，真巧哟！</font>
        	<?php endif; ?>
<?php endif; ?>
<p><a href="/xingming/qiming/" style="color:red;">若想改名,查看起名大全>></a></p>
</div>
<i class="flag_tl_t3"></i>
<i class="flag_tr_t3"></i>
<i class="flag_bl_t3"></i>
<i class="flag_br_t3"></i>
</div>

<div class="btn_tool_retest">
<a class="btn_orange_1" href="/xingming/xmpd/">重新测算</a>
</div>
<div class="tips_area">本算命系统来源于中国民俗学的一些测算方法，并非科学研究成果，仅供休闲娱乐，请勿迷信，按此操作一切后果自负！</div>
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
