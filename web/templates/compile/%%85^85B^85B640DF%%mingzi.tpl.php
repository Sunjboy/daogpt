<?php /* Smarty version 2.6.25, created on 2017-12-03 21:51:32
         compiled from h5/peidui/mingzi.tpl */ ?>
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

<?php if ($this->_tpl_vars['xm1']): ?>
<div class="detail">
    <h3>姓名配对-情缘类型：</h3>
    <dl>
        <dt>双方姓名：<strong class="cRed"><?php echo $this->_tpl_vars['xm1']; ?>
：<strong class="cRed"><?php echo $this->_tpl_vars['xm2']; ?>
</strong></dt>
        <dd>关系揭密：<?php echo $this->_tpl_vars['xxxy']['intro']; ?>
</dd>
    </dl>
</div>

<?php endif; ?>

<div class="detail">
    <h3>姓名配对：</h3>

    <dl>

        <form name="s" action="/index.php" method="post">
            <input type="hidden" name="ac" value="mingzi" />
            <input type="hidden" name="ct" value="h5_peidui" />
            <input type="hidden" name="tid" value="387" />

            <dd class="form">姓名配对是根据姓名天格、地格、人格、总格、外格等五格数理关系，神算网爱情测试姓名配对是依据《易经》的姓名三才五格理论爱情测试姓名配对关系高达80%准确，输入双方的姓名通过缘分测试打分并运用阴阳五行相生相克理论，来测试您和对方的爱情测试指数、姓名配对缘分测试、通过姓名笔划数看看你和爱人的关系究竟怎样</dd>

            <dd class="form">男生：<input class="ipt" type="text" id="wd1" name="xm1" maxlength="10" placeholder="男生" value=""></dd>

            <dd class="form">女生：<input class="ipt" type="text" id="wd2" name="xm2" maxlength="10" placeholder="女生" value=""></dd>

            <dd class="form"><center>

                    <button id="vote_vote" class="button" type="submit">开始配对</button>

                    <input type="hidden" name="action" value="test">  </center>

            </dd>

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