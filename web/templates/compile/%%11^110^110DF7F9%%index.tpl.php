<?php /* Smarty version 2.6.25, created on 2017-11-28 23:09:55
         compiled from h5/index.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './h5/header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script>stepMenu();</script>
<div style="padding-top:55px">
    <form name=form1 action="/index.php" method="post">
    <input type="hidden" name="ct" value="h5_zgjm" />
    <input type="hidden" name="ac" value="search" />
        <div id="se_wrap">
            <div id="se_inner">
                <input type="text" name="q" maxLength=32 class="se-input" onBlur="if (value==''){value='请输入梦见了什么'}" onFocus="if (value=='请输入梦见了什么') {value=''}" value="请输入梦见了什么">
                <div id="cross"></div>
            </div>
            <input id="se_bn" type="submit" name="submit1" value="解梦">
        </div>
    </form>
</div>
<div id="navi">


	<?php $_from = $this->_tpl_vars['public_hand_data']['class_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
    <dl class="mod_dl">
        <dt><a href="<?php echo $this->_tpl_vars['v']['extra']; ?>
"><?php echo $this->_tpl_vars['v']['name']; ?>
</a></dt>
        <dd>
            <ul class="clearfix">
            	<?php $_from = $this->_tpl_vars['v']['son']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['vs']):
?>
					<li><a href="/<?php echo $this->_tpl_vars['vs']['extra']; ?>
" title="<?php echo $this->_tpl_vars['vs']['name']; ?>
"><?php if ($this->_tpl_vars['vs']['shownames'] != ''): ?><?php echo $this->_tpl_vars['vs']['shownames']; ?>
<?php else: ?><?php echo $this->_tpl_vars['vs']['name']; ?>
<?php endif; ?></a></li>
				<?php endforeach; endif; unset($_from); ?>
            </ul>
        </dd>
    </dl>
    <?php endforeach; endif; unset($_from); ?>
    <div class="clear"></div>
</div>

<div class="detail">
    <h3><a href="/xingzuo/">12星座今日运势：</a></h3>
    <dl>
        <li>
            <a href="xingzuo/baiyang/" title="白羊座今日运势">白羊</a> &nbsp;
            <a href="xingzuo/jinniu/" title="金牛座今日运势">金牛</a> &nbsp;
            <a href="xingzuo/shuangzi/" title="双子座今日运势">双子</a> &nbsp;
            <a href="xingzuo/juxie/" title="巨蟹座今日运势">巨蟹</a> &nbsp;
            <a href="xingzuo/shizi/" title="狮子座今日运势">狮子</a> &nbsp;
            <a href="xingzuo/chunv/" title="处女座今日运势">处女</a></li>
        <li>
            <a href="xingzuo/tiancheng/" title="天秤座今日运势">天秤</a> &nbsp;
            <a href="xingzuo/tianxie/" title="天蝎座今日运势">天蝎</a> &nbsp;
            <a href="xingzuo/sheshou/" title="射手座今日运势">射手</a> &nbsp;
            <a href="xingzuo/mojie/" title="魔羯座今日运势">魔羯</a> &nbsp;
            <a href="xingzuo/shuiping/" title="水瓶座今日运势">水瓶</a> &nbsp;
            <a href="xingzuo/shuangyu/" title="双鱼座今日运势">双鱼</a></dd>
        </li>
</div>
<div class="detail">
    <h3><a href="/zgjm/">今日网友梦境：</a></h3>
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
<div class="detail">
    <h3>姓名测试打分：</h3>
    <dl>
        <form name="form1" action="/index.php"  method="post">
        <input type="hidden" name="ac" value="xmfx" />
        <input type="hidden" name="ct" value="h5_xingming" />
        <input type="hidden" value="371" name="tid">
            <dd class="form">
                <strong>姓名</strong>：<input class="ipt" type="text" name="name" id="wd" maxLength=32 onBlur="if (value==''){value='请输入姓名'}" onFocus="if (value=='请输入姓名') {value=''}" value="请输入姓名">
            </dd>
            <dd>
                <div align="center">
                    <input type="submit" name="submit" class="button" value="马上测试" />
                    <input type="hidden" name="action" value="jieguo">
                </div>
            </dd>
    </dl>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './h5/public/news.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './h5/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>