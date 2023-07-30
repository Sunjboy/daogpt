<?php /* Smarty version 2.6.25, created on 2017-12-04 06:33:15
         compiled from h5/haoma/shenfenzheng_form.tpl */ ?>
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
<?php if ($this->_tpl_vars['xian'] == ''): ?>
    <h1 class="title">身份证号码吉凶</h1>
<?php endif; ?>

<?php if ($this->_tpl_vars['xian'] != '' && $this->_tpl_vars['sfz']['DQ'] != ''): ?>
    <h1 class="title">身份证<?php echo $this->_tpl_vars['xian']; ?>
的测试结果</h1>

    <div class="detail">

        <dl>

            <h2>所查号码：</h2>

            <div class="h2_content"><?php echo $this->_tpl_vars['xian']; ?>
</div>

            <div class="h2_content">

                <p>原户籍地：<?php echo $this->_tpl_vars['sfz']['DQ']; ?>
</p>

            </div>

            <div class="h2_content">

                <p>性别：<?php echo $this->_tpl_vars['xb']; ?>
</p>

            </div>

            <div align="center">

                <div class="bdlikebutton"></div>

            </div>

            <h2>主人个性：</h2>

            <div class="h2_content"><?php echo $this->_tpl_vars['sfzjie']['content']; ?>
 </div>

        </dl>

    </div>
    <?php endif; ?>


<div class="detail">
    <dl>
        <dd class="form">
            身份证号码吉凶：身份证号码中隐藏着许多不为人知的命运密码，通过合理地解读查看身份证号码好不好，输入身份证查归属地，可以从中了解一个人的性格、事业、财运等一切与命运有关的信息。
            人们经常随身携带的符号则具有特定的吉凶暗示力。我们的生活几乎不离号码，如身份证号码、身份证号码凶吉预测其实包含有一定的吉凶数理，电话号码测吉凶看结果就像姓名会影响运势命运的意义是一样的
        </dd>
        <form name="form1" action="/index.php"  method="post">
            <input type="hidden" name="ac" value="shenfenzheng">
            <input type="hidden" name="ct" value="h5_haoma">
            <dd class="form">
                请输入: <input type="text" name="xian" maxLength=32 class="ipt" onBlur="if (value==''){value='身份证号码'}" onFocus="if (value=='身份证号码') {value=''}" value="身份证号码">
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