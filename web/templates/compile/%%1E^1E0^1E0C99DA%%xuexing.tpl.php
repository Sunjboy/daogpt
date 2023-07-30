<?php /* Smarty version 2.6.25, created on 2017-12-04 01:00:42
         compiled from h5/peidui/xuexing.tpl */ ?>
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

<?php if ($this->_tpl_vars['xx']['shorttxt'] != ''): ?>
    <div class="detail">
        <h2><?php echo $this->_tpl_vars['xx1']; ?>
男生和<?php echo $this->_tpl_vars['xx2']; ?>
女生的缘分：</h2>
        <p><?php echo $this->_tpl_vars['xx']['shorttxt']; ?>
</p>
        <p><?php echo $this->_tpl_vars['xx']['content']; ?>
</p>
    </div>

    <?php endif; ?>

<div class="detail">
    <h3>血型配对：</h3>
    <dl>
        <dd class="form">不同的血型不同的性格,聚在一起,必然会产生不同的化学反应。你与他(她)的配对会如何?会是只羡鸳鸯不羡仙,是欢喜怨家,还是如何的一对组合呢?</dd>
        <form name="sm" action="/index.php" method="post">
            <input type="hidden" name="ac" value="xuexing" />
            <input type="hidden" name="ct" value="h5_peidui" />
            <input type="hidden" name="tid" value="388" />
            <dd class="form">
                男生血型： <select id="xx1" name="xx1" class="select"><option value="A">男A型血</option><option value="B">男B型血</option><option value="O">男O型血</option><option value="AB">男AB型血</option></select>  </dd>
            <dd class="form">
                女生血型： <select id="xx2" name="xx2" class="select"> <option value="A">女A型血</option><option value="B">女B型血</option><option value="O">女O型血</option><option value="AB">女AB型血</option></select>
            </dd>
            <div align="center"><input type="submit" name="submit" class="button" value="马上配对" /></div>
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
    <h3>血型配对简介：</h3>
    <dl>
        <dd>从现代医学角度来看，血型遗传来自父母亲，血型一般常分A、B、AB和O四种。血型和人本身的性格特质有相当大的关系，不同血型间的情侣会产生不同的恋爱结果。神算网算命网血型配对栏目通过分析这四种血型人的性格特质、五行八字，考量男女情侣间的搭配能否激荡出更加炙热的爱情火花。</dd>
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