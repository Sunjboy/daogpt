<?php /* Smarty version 2.6.25, created on 2017-12-04 01:15:50
         compiled from h5/peidui/xingzuo.tpl */ ?>
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

<?php if ($this->_tpl_vars['xz1'] != ''): ?>
    <div class="detail">
        <h2>女生的缘分：</h2>
        <p><?php echo $this->_tpl_vars['xz']['shorttxt']; ?>
</p>
        <p><?php echo $this->_tpl_vars['xz']['content']; ?>
</p>
    </div>

    <?php endif; ?>

<div class="detail">
    <h3>星座配对：</h3>
    <dl>
        <dd class="form">每个人的出生，都有一个代表自己的星座，不同的星座者有着不同的性格特征与运势，星座配对是占卜师、阴阳师根据天象运行分析每个星座的不同性格，从而判断聚在一起。</dd>
        <form name="sm" action="/index.php" method="post">
            <input type="hidden" name="ac" value="xingzuo" />
            <input type="hidden" name="ct" value="h5_peidui" />
            <input type="hidden" name="tid" value="385" />
            <div align="center">
                <select id="xz1" name="xz1" class="select">
                    <option selected="" value="白羊座">白羊座</option>
                    <option value="金牛座">金牛座</option>

                    <option value="双子座">双子座</option>

                    <option value="巨蟹座">巨蟹座</option>

                    <option value="狮子座">狮子座</option>

                    <option value="处女座">处女座</option>

                    <option value="天秤座">天秤座</option>

                    <option value="天蝎座">天蝎座</option>

                    <option value="射手座">射手座</option>

                    <option value="摩羯座">摩羯座</option>

                    <option value="水瓶座">水瓶座</option>

                    <option value="双鱼座">双鱼座</option>
                </select>
                配 <select id="xz2" name="xz2" class="select">
                    <option selected="" value="白羊座">白羊座</option>

                    <option value="金牛座">金牛座</option>

                    <option value="双子座">双子座</option>

                    <option value="巨蟹座">巨蟹座</option>

                    <option value="狮子座">狮子座</option>

                    <option value="处女座">处女座</option>

                    <option value="天秤座">天秤座</option>

                    <option value="天蝎座">天蝎座</option>

                    <option value="射手座">射手座</option>

                    <option value="摩羯座">摩羯座</option>

                    <option value="水瓶座">水瓶座</option>

                    <option value="双鱼座">双鱼座</option>
                </select></div>
            <div align="center"><input type="submit" name="submit" class="button" value="马上配对"/></div>
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

<div class="detail">
    <h3>星座配对简介：</h3>
    <dl>
        <dd>12星座中，谁是你的真命天子？谁是你心灵的归属？爱情是一种感觉，但是爱情光靠感觉是不能有好的结果的。女人/男人必须冷静地、理性地去识别和判断，才会知道面前这个人是不是真的爱自己。你也只有找到自己真正爱的和真正爱自己的那个TA，在婚姻这棵大树上，爱情的花才会结出甜蜜的果实。</dd>
        <dd>神算网算命网特意为你准备了星座配对栏目，你可以通过星座配对来测试TA是否是你的红颜知己又或是MR.right。在感情中，与其一再听任感性，不如看看星座配对栏目的理性分析。在这里，我们提供给你通过占星大师算出的星座爱情配对结果，让你清楚地知道对方是否是个可以长久依托的对象。</dd>
    </dl>
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