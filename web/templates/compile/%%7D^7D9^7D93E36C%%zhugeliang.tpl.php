<?php /* Smarty version 2.6.25, created on 2017-12-04 07:19:02
         compiled from h5/chouqian/zhugeliang.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './h5/header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script>stepMenu();</script>
<div id="path">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './h5/public/path.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>
<?php if ($this->_tpl_vars['word'] == ''): ?>
    <h1 class="title">诸葛测字</h1>
    <?php endif; ?>

<?php if ($this->_tpl_vars['word'] != ''): ?>

    <h1 class="title">车牌<?php echo $this->_tpl_vars['word']; ?>
的测试结果</h1>

    <div class="detail">

        <dl>

            <h2>所查号码：</h2>

            <div class="h2_content"><?php echo $this->_tpl_vars['word']; ?>
</div>

            <div class="h2_content">

                <p>吉凶分析：<?php echo $this->_tpl_vars['haomajx']['title']; ?>
 <span class="red"><strong>(<?php echo $this->_tpl_vars['haomajx']['jx']; ?>
)</strong></span></p>

            </div>

            <div align="center">

                <div class="bdlikebutton"></div>

            </div>

            <h2>主人个性：</h2>

            <div class="h2_content"><?php echo $this->_tpl_vars['haomajx']['content']; ?>
 </div>

        </dl>

    </div>
    <?php endif; ?>


<div class="detail">
    <dl>
        <dd class="form">
            传说中，数字是一种符号，人们经常随身携带的符号则具有特定的暗示力。我们的生活几乎离不号码，如电话号码、手机号码、车牌号码等。其实号码也包含有一定的吉凶数理，这就像姓名会影响运势命运的意义是一样的。
            车牌号码吉凶：车牌号码可以自己选择了，这标志着社会的进步，车牌号码都愿意选个吉利号，好的号码象征着人的身份，但实际的好与坏，得要看更深一层的涵义！
        </dd>
        <form name="form1" action="/index.php"  method="post">
            <input type="hidden" name="ac" value="qq">
            <input type="hidden" name="ct" value="h5_haoma">

            <dd class="form">

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
                <div class="divine_com" align="center">
                    <p class="tips">请输入三个简体汉字抽签占卜：</p>
                    <div class="divine_test clearfix">
                        <form name="form" action="" method="post" onSubmit="if(this.name1.value.search(/^[\u4e00-\u9fa5]{3,}$/) == -1){alert('请输入三个简体汉字');return false;}return true;">
                            <input type="hidden" name="ct" value="chouqian" />
                            <input type="hidden" name="ac" value="zhugeliang" />
                            <input type="hidden" name="tid" value="400" />
                            <input type="text" name="name1" id="zg_name" value="" class="ipt">
                            <input type="submit" value="开始测算" class="button" />
                            &nbsp;(多输入只取前三个)
                        </form></div>
                    <div style="font-size:14px; padding-bottom:8px;"><a href="/chouqian/zhugeliang/诸葛测" target="_blank">诸葛测字心得</a> | <a href="/chouqian/zhugeliang/葛测字" target="_blank">诸葛测字</a> | <a href="/chouqian/zhugeliang/孔明" target="_blank">字孔明</a> | <a href="/chouqian/zhugeliang/诸葛亮" target="_blank">诸葛亮</a></div>
                    <h4>诸葛亮神算:</h4>
                    <p class="indent">诸葛亮（181－234），字孔明、号卧龙（也作伏龙）。 根据历史记载，诸葛亮上懂天文，下晓地理，料事如神犹如诸葛神数，用兵用人，皆恰到好处,杰出的政治家、军事家、散文家、发明家、书法家。 诸葛亮每遇难题，必暗自用一种独到的占卜法-诸葛神算。心要诚，手要净，焚香向天祷告，然后，在纸上写三个字。这三个字，即是天灵与人心灵交流，也就是说通过神算网诸葛测字算命，你的心事已得上天了解，而上天会对你作出指示。所以万万不可存"玩一玩"的心态。 诸葛神数，共三百八十四爻，谶语句法，长短不一，寓意深远，对占卜者的思路，有很大的启发作用，特别是那些正陷于彷徨迷惘中的人，更有一种拨开云雾，重见天日的豁然开朗感觉。因此这是可以作为判断吉凶，决定进退，是选择趋吉避凶的指南针。</p>
                </div>
                <?php endif; ?>
            </dd>

            <dd><center><input type="submit" name="submit" class="button" value="马上测试" />
                    <input type="hidden" value="test" name="action">  </center></dd>
        </form>
    </dl>
</div>
<div>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './h5/public/more_nav.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './h5/public/news.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


<div id="navi">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './h5/public/h5_nav.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './h5/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>