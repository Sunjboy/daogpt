<?php /* Smarty version 2.6.25, created on 2017-11-29 20:09:14
         compiled from h5/zgjm_index.tpl */ ?>
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
<form name=form1 action="/index.php" method="post">
    <input type="hidden" name="ct" value="h5_zgjm">
    <input type="hidden" name="ac" value="search">

    <div id="se_wrap">

        <div id="se_inner">

            <input type="text" name="q" maxLength=32 class="se-input" onBlur="if (value==''){value='请输入梦见了什么'}" onFocus="if (value=='请输入梦见了什么') {value=''}" value="请输入梦见了什么">

            <div id="cross"></div>

        </div>

        <input id="se_bn" type="submit" name="submit1" value="解梦">

    </div>

</form>

<!--head end-->

<div class="detail">

    <h3>最多人查询的解梦：</h3>

    <dl>

        <li><?php $_from = $this->_tpl_vars['m']['zgjm_hot_tag']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?><a <?php if ($this->_tpl_vars['v']['blank'] == 1): ?>target="_blank"<?php endif; ?> href="<?php echo $this->_tpl_vars['v']['url']; ?>
" <?php if ($this->_tpl_vars['v']['color'] == 1): ?>class="cRed"<?php elseif ($this->_tpl_vars['v']['color'] == 2): ?>class="cGreen"<?php elseif ($this->_tpl_vars['v']['color'] == 3): ?>class="cBlue"<?php endif; ?> title="<?php echo $this->_tpl_vars['v']['title']; ?>
"><?php echo $this->_tpl_vars['v']['name']; ?>
</a><?php endforeach; endif; unset($_from); ?></li> </dl>

</div>

<div class="detail">

    <h3>周公解梦大全查询按分类找：</h3>

    <dl>


        <?php $_from = $this->_tpl_vars['listdata']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>

            <h4>【<?php echo $this->_tpl_vars['v']['topic']; ?>
】<div class="fright"><a href="/zgjm/list-<?php echo $this->_tpl_vars['v']['topic_id']; ?>
.html">更多&gt;&gt;</a></div></h4>
            <div class="h4_content">
                <?php $_from = $this->_tpl_vars['v']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['vs']):
?>
                    <a href="/zgjm/show-<?php echo $this->_tpl_vars['vs']['id']; ?>
.html" target="_blank"><?php echo $this->_tpl_vars['vs']['title']; ?>
</a>
                <?php endforeach; endif; unset($_from); ?>

            </div>

            <?php if ($this->_tpl_vars['k'] != 7): ?>
                <div class="line"></div>
            <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>


    </dl>

</div>



<div class="detail">

    <h3>24小时最受欢迎梦境：</h3>

    <dl>
<?php $_from = $this->_tpl_vars['zgjm_new_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
        <li><a href="/zgjm/show-<?php echo $this->_tpl_vars['v']['id']; ?>
.html" class="inlink"><?php echo $this->_tpl_vars['v']['title']; ?>
</a></li>
<?php endforeach; endif; unset($_from); ?>


    </dl>

</div>




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