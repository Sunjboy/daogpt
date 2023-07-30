<?php /* Smarty version 2.6.25, created on 2017-12-04 07:53:05
         compiled from h5/peidui/xingzuoxuexing.tpl */ ?>
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

<?php if ($this->_tpl_vars['t1'] != ''): ?>
    <div class="detail">
        <h2><?php echo $this->_tpl_vars['t1']; ?>
男生和<?php echo $this->_tpl_vars['t2']; ?>
女生的缘分：</h2>
        <p><?php echo $this->_tpl_vars['info']['shorttxt']; ?>
</p>
        <p><?php echo $this->_tpl_vars['info']['content']; ?>
</p>
    </div>

    <?php endif; ?>

<div class="detail">
    <h3>星座血型配对：</h3>
    <dl>
        <dd class="form">星座血型配对是指根据自己的血型（星座）和恋人的星座（血型）来大致分析下双方的性格特征，并给出两人的速配指数以及性格方面的相关建议和提醒。</dd>
        <form name="sm" action="/index.php" method="post">
            <input type="hidden" name="ac" value="xingzuoxuexing" />
            <input type="hidden" name="ct" value="h5_peidui" />
            <input type="hidden" name="tid" value="461" />
            <div align="center">
                <select id="xz1" name="t1" class="select">
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
                配 <select id="xz2" name="t2" class="select">
                    <option value="AB型">AB型</option>

                    <option value="A型">A型</option>

                    <option value="B型">B型</option>

                    <option value="O型">O型</option>
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
    <h3>星座血型配对简介：</h3>
    <dl>
        <dd>星座血型配对是指根据自己的血型（星座）和恋人的星座（血型）来大致分析下双方的性格特征，并给出两人的速配指数以及性格方面的相关建议和提醒。</dd>
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