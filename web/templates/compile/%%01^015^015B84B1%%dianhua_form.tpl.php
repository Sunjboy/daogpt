<?php /* Smarty version 2.6.25, created on 2017-12-03 19:50:28
         compiled from h5/haoma/dianhua_form.tpl */ ?>
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
        <h1 class="title">电话号码吉凶</h1>
    <?php endif; ?>

    <?php if ($this->_tpl_vars['word'] != ''): ?>
        <h1 class="title">电话号码<?php echo $this->_tpl_vars['word']; ?>
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
        <dd class="form">人们经常随身携带的符号则具有特定的吉凶暗示力。我们的生活几乎不离号码，如电话号码、手机号码。手机号码吉凶预测其实包含有一定的吉凶数理，电话号码测吉凶看结果就像姓名会影响运势命运的意义是一样的。电话号码吉凶：气有旺衰之气，数亦有吉凶之数。电话号码吉凶预测，是根据周易数理预测之原理，来测试电话号码对主人的运势影响。</dd>
        <form name="form1" action="/index.php"  method="post">
            <input type="hidden" name="ac" value="dianhua">
            <input type="hidden" name="ct" value="h5_haoma">
            <dd class="form">
                请输入: <input type="text" name="word" maxLength=32 class="ipt" onBlur="if (value==''){value='电话号码,不需要加区号'}" onFocus="if (value=='电话号码,不需要加区号') {value=''}" value="电话号码,不需要加区号">
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