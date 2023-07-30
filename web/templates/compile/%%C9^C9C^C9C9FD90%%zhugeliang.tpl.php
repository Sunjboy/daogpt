<?php /* Smarty version 2.6.25, created on 2017-11-29 21:03:13
         compiled from index/chouqian/zhugeliang.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['web_url']; ?>
static/bazi/css/suanming/v2/divine.css"/>
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
			  <div class="mod_box_t1 fn_part fn_zg">
					<div class="hd">
						<h1><img src="<?php echo $this->_tpl_vars['web_url']; ?>
static/bazi/images/suanming/tit/chouqian.png">诸葛测字</h1>
					</div>
					<div class="bd">
                    <div class="divine_special">
                    <?php if ($this->_tpl_vars['rszhuge']['title']): ?>
                        <div class="divine_com">
                        <p class="tips">您输入的三个汉字为： <strong class="cRed"><?php echo $this->_tpl_vars['onehanzi']; ?>
<?php echo $this->_tpl_vars['twohanzi']; ?>
<?php echo $this->_tpl_vars['threehanzi']; ?>
</strong></p>
                        <div class="divine_test clearfix">
                        <span>诗曰：</span>
                        <strong><?php echo $this->_tpl_vars['rszhuge']['title']; ?>
</strong>
                        </div>
                        
                        <h4>孔明测字:</h4>
                        <p class="indent"><?php echo $this->_tpl_vars['rszhuge']['content']; ?>
</p>
                        </div>
                        <a href="<?php echo $this->_tpl_vars['web_url']; ?>
chouqian/zhugeliang/" class="btn_orange_1">重新抽签</a>
                    <?php else: ?>
                        <div class="divine_com">
                            <p class="tips">请输入三个简体汉字抽签占卜：</p>
                            <div class="divine_test clearfix">
      <form name="form" action="" method="post" onSubmit="if(this.name1.value.search(/^[\u4e00-\u9fa5]{3,}$/) == -1){alert('请输入三个简体汉字');return false;}return true;">
        <input type="hidden" name="ct" value="chouqian" />
        <input type="hidden" name="ac" value="zhugeliang" />
        <input type="hidden" name="tid" value="400" />
        <input type="text" name="name1" id="zg_name" value="" class="divine_txt">
        <input type="submit" value="开始测算" class="btn_orange_1" />
        &nbsp;(多输入只取前三个)
       </form></div>
       <div style="font-size:14px; padding-bottom:8px;"><a href="/chouqian/zhugeliang/诸葛测" target="_blank">诸葛测字心得</a> | <a href="/chouqian/zhugeliang/葛测字" target="_blank">诸葛测字</a> | <a href="/chouqian/zhugeliang/孔明" target="_blank">字孔明</a> | <a href="/chouqian/zhugeliang/诸葛亮" target="_blank">诸葛亮</a></div>
       <h4>诸葛亮神算:</h4>
      <p class="indent">诸葛亮（181－234），字孔明、号卧龙（也作伏龙）。 根据历史记载，诸葛亮上懂天文，下晓地理，料事如神犹如诸葛神数，用兵用人，皆恰到好处,杰出的政治家、军事家、散文家、发明家、书法家。 诸葛亮每遇难题，必暗自用一种独到的占卜法-诸葛神算。心要诚，手要净，焚香向天祷告，然后，在纸上写三个字。这三个字，即是天灵与人心灵交流，也就是说通过神算网诸葛测字算命，你的心事已得上天了解，而上天会对你作出指示。所以万万不可存"玩一玩"的心态。 诸葛神数，共三百八十四爻，谶语句法，长短不一，寓意深远，对占卜者的思路，有很大的启发作用，特别是那些正陷于彷徨迷惘中的人，更有一种拨开云雾，重见天日的豁然开朗感觉。因此这是可以作为判断吉凶，决定进退，是选择趋吉避凶的指南针。</p>
                        </div>
                    <?php endif; ?>
                    </div>
                    
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

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
