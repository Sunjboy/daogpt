<?php /* Smarty version 2.6.25, created on 2017-11-28 19:31:52
         compiled from ./index/public/path.tpl */ ?>
<div class="path clearfix">

<div class="path_l">
当前位置：<a href="<?php echo $this->_tpl_vars['web_url']; ?>
">开运算命网</a> &gt; 
<?php if ($this->_tpl_vars['path']['baba']['name'] != ''): ?><a href="<?php echo $this->_tpl_vars['web_url']; ?>
<?php echo $this->_tpl_vars['path']['baba']['extra']; ?>
" title="<?php echo $this->_tpl_vars['path']['baba']['name']; ?>
"><?php echo $this->_tpl_vars['path']['baba']['name']; ?>
</a> &gt; <?php endif; ?> 
<?php if ($this->_tpl_vars['path']['parent_arr']['name'] != ''): ?><a href="<?php echo $this->_tpl_vars['web_url']; ?>
<?php echo $this->_tpl_vars['path']['parent_arr']['extra']; ?>
" title="<?php echo $this->_tpl_vars['path']['parent_arr']['name']; ?>
"><?php echo $this->_tpl_vars['path']['parent_arr']['name']; ?>
</a> &gt; <?php endif; ?>
<?php if ($this->_tpl_vars['path']['name'] != ''): ?><a href="<?php echo $this->_tpl_vars['web_url']; ?>
<?php echo $this->_tpl_vars['path']['extra']; ?>
" title="<?php echo $this->_tpl_vars['path']['name']; ?>
"><?php echo $this->_tpl_vars['path']['name']; ?>
</a><?php endif; ?>
<?php if ($this->_tpl_vars['path']['show_info'] != ''): ?> &gt; <?php echo $this->_tpl_vars['path']['show_info']; ?>
<?php endif; ?>
<?php if ($this->_tpl_vars['q'] != ''): ?> &gt; <?php echo $this->_tpl_vars['q']; ?>
<?php endif; ?>
</div>

<div class="path_r">
 <form action="<?php echo $this->_tpl_vars['web_url']; ?>
index.php" method="post" target="_blank" _lpchecked="1">
    <span class="input"><input type="text" size="32" id="s-wd" name="q" value="请输入关键字搜索" onfocus="if(this.value=='请输入关键字搜索'){this.value='';}" onblur="if(this.value==''){this.value='请输入关键字搜索';}" class="ipt_text"></span> 
    <input type="submit" class="ipt_sub" value="搜索 ">
    <input type="hidden" name="ac" value="search">
    <input type="hidden" name="ct" value="news"> 
</form>
</div>

 </div>
 
 