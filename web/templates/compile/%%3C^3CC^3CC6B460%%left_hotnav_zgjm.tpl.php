<?php /* Smarty version 2.6.25, created on 2017-11-28 19:31:01
         compiled from ./index/public/left_hotnav_zgjm.tpl */ ?>
<div class="mod_box_t2">
    <div class="hd">
        <h3>最新梦境</h3>
        <i class="flag_l_t2"></i>
        <i class="flag_r_t2"></i>
    </div>
    <div class="bd indexlist">
       <ul class="clearfix">
       		<?php $_from = $this->_tpl_vars['zgjm_new_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
            	<li><a href="/zgjm/show-<?php echo $this->_tpl_vars['v']['id']; ?>
.html" target="_blank"><?php echo $this->_tpl_vars['v']['title']; ?>
</a></li>	
            <?php endforeach; endif; unset($_from); ?>
        </ul>
    </div>
</div>