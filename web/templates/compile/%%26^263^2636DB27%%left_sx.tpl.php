<?php /* Smarty version 2.6.25, created on 2018-03-25 16:46:42
         compiled from ./index/public/left_sx.tpl */ ?>
<div class="mod_box_t2 box_knowledge clearAll mt10">
                    <div class="hd">
                        <h3>百科小知识</h3>
                        <i class="flag_l_t2"></i>
                        <i class="flag_r_t2"></i>
                    </div>
                    <div class="bd">
                            <div class="knowledge_list clearfix">
                            <div class="know_row">
<script type="text/javascript" src="http://www.03ky.com/api.php?mod=js&bid=79"></script>
                            </div>
                        </div>
                    </div>
                </div>
<div class="mod_box_t2">
</div>
<div class="mod_box_t2 suanming-tools mt10">
	<div class="hd hd_s1">
		<h3>实用工具大全</h3>
		<i class="flag_l_t2"></i>
		<i class="flag_r_t2"></i>
	</div>
	<div class="morenav">
    <?php $_from = $this->_tpl_vars['public_hand_data']['class_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
    		<div class="<?php if ($this->_tpl_vars['k'] != 11): ?>bor_bom<?php endif; ?> more_d">
			<h4><a href="<?php echo $this->_tpl_vars['web_url']; ?>
<?php echo $this->_tpl_vars['v']['extra']; ?>
"><?php echo $this->_tpl_vars['v']['name']; ?>
</a></h4>
            <?php $_from = $this->_tpl_vars['v']['son']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['vs']):
?>
				<a href="<?php echo $this->_tpl_vars['web_url']; ?>
<?php echo $this->_tpl_vars['vs']['extra']; ?>
" title="<?php echo $this->_tpl_vars['vs']['name']; ?>
"><?php if ($this->_tpl_vars['vs']['shownames'] != ''): ?><?php echo $this->_tpl_vars['vs']['shownames']; ?>
<?php else: ?><?php echo $this->_tpl_vars['vs']['name']; ?>
<?php endif; ?></a>
			<?php endforeach; endif; unset($_from); ?>
            </div>
     <?php endforeach; endif; unset($_from); ?>  
		<!-- ad start-->

		<!-- ad end-->
	</div>
</div>