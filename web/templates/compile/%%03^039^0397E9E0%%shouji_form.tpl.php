<?php /* Smarty version 2.6.25, created on 2017-12-03 17:45:37
         compiled from h5/haoma/shouji_form.tpl */ ?>
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
<h1 class="title"><?php echo $this->_tpl_vars['arr']['h1']; ?>
</h1>


<?php if ($this->_tpl_vars['word'] != ''): ?>

    <h1 class="title">手机号码<?php echo $this->_tpl_vars['word22']; ?>
的测试结果</h1>

    <div class="detail">

        <dl>

            <h2>所查号码：</h2>

            <div class="h2_content"><?php echo $this->_tpl_vars['word22']; ?>
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
        <dd class="form">人们经常随身携带的符号则具有特定的吉凶暗示力。我们的生活几乎不离号码，如电话号码、手机号码。手机号码吉凶预测，<a href="http://www.bazi5.com/fengshui/10895.html" title="号令天下手机号码吉凶查询">号令天下手机号码吉凶查询</a>其实包含有一定的吉凶数理，电话号码测吉凶看结果就像姓名会影响运势命运的意义是一样的。</p><p>手机号码吉凶：手机号码与您的生活息息相关，也是您与很多人沟通的桥梁！所以就像风水、阳宅会影响运势命运一样，手机号码吉与凶可能会有一定的影响，不可轻视！手机吉凶，号令天下手机号码测吉凶的预测结果仅供参考！</dd>
        <form name="form1" action="/index.php"  method="post">
            <input type="hidden" name="ac" value="shouji">
            <input type="hidden" name="ct" value="h5_haoma">
            <dd class="form">
                请输入: <input type="text" name="word" maxLength=32 class="ipt" onBlur="if (value==''){value='11位手机号码'}" onFocus="if (value=='11位手机号码') {value=''}" value="11位手机号码" onKeyUp="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,''">
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
