<?php /* Smarty version 2.6.25, created on 2017-11-29 20:02:23
         compiled from ./h5/public/more_nav.tpl */ ?>
<?php if ($this->_tpl_vars['topic']['0']): ?>
<dl class="mod_dl">
		<dd>
			<ul class="clearfix">
				<?php $_from = $this->_tpl_vars['topic']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
					<li><a href="http://wp.xingyunyun.cn/<?php echo $this->_tpl_vars['v']['extra']; ?>
"><?php echo $this->_tpl_vars['v']['name']; ?>
</a></li>
				<?php endforeach; endif; unset($_from); ?>
			</ul>
		</dd>
	</dl>
	<div class="clear"></div>
<?php endif; ?>