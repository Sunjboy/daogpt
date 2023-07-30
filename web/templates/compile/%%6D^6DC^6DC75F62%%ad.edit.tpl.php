<?php /* Smarty version 2.6.25, created on 2017-12-22 20:17:16
         compiled from admin/ad.edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'base64_decode', 'admin/ad.edit.tpl', 30, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div style="width:96%;margin:auto;padding:auto">
    <form name="form1" action="?ct=hand&ac=ad_do&do=upd" method="POST" enctype="multipart/form-data">
        <?php if (! empty ( $this->_tpl_vars['data_array']['id'] )): ?><input type='hidden' name='id' value="<?php echo $this->_tpl_vars['data_array']['id']; ?>
" /><?php endif; ?>
        <table class="form">
            <tr>
                <td class='title'>所属页面 : </td>
                <td class='fitem'>
            <dd>
                <select name="type">
                            <?php $_from = $this->_tpl_vars['type_ad_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['i']):
?>
                                <option value="<?php echo $this->_tpl_vars['k']; ?>
" <?php if ($this->_tpl_vars['k'] == $this->_tpl_vars['data_array']['type']): ?>selected='selected'<?php endif; ?>><?php echo $this->_tpl_vars['i']; ?>
</option>
                            <?php endforeach; endif; unset($_from); ?>
                </select>
            </dd>
            </td>	
            </tr>
            <tr>
                <td class='title'>标题 : </td>
                <td class='fitem'>
            <dd>
                <input type='text' name='title' class='' value='<?php if (! empty ( $this->_tpl_vars['data_array']['title'] )): ?><?php echo $this->_tpl_vars['data_array']['title']; ?>
<?php endif; ?>'/>
            </dd>
            </td>	
            </tr>
            <tr>
                <td class='title'>内容 : </td>
                <td class='fitem'>
            <dd>
                <textarea name='content' class='l' ><?php if (! empty ( $this->_tpl_vars['data_array']['content'] )): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data_array']['content'])) ? $this->_run_mod_handler('base64_decode', true, $_tmp) : base64_decode($_tmp)); ?>
<?php endif; ?></textarea><br />
            </dd>
            </td>	
            </tr>
            <tr>
                <td class='title'>结束时间 : </td>
                <td class='fitem'>
            <dd>
                <input type='text' name='endtime'  jstype="cal"  value='<?php if (! empty ( $this->_tpl_vars['data_array']['endtime'] )): ?><?php echo $this->_tpl_vars['data_array']['endtime']; ?>
<?php endif; ?>'/>
            </dd>
            </td>	
            </tr>
            <tr>
                <td class='title'>替换后标题 : </td>
                <td class='fitem'>
            <dd>
                <input type='text' name='titlere' class='' value='<?php if (! empty ( $this->_tpl_vars['data_array']['titlere'] )): ?><?php echo $this->_tpl_vars['data_array']['titlere']; ?>
<?php endif; ?>'/>
            </dd>
            </td>	
            </tr>
            <tr>
                <td class='title'>结束后内容 : </td>
                <td class='fitem'>
            <dd>
                <textarea name='reserve' class='l' ><?php if (! empty ( $this->_tpl_vars['data_array']['reserve'] )): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data_array']['reserve'])) ? $this->_run_mod_handler('base64_decode', true, $_tmp) : base64_decode($_tmp)); ?>
<?php endif; ?></textarea><br />
            </dd>
            </td>	
            </tr>
            <tr>
                <td colspan='2' align='center' height='60'>
                    <input type="hidden" name="do" value="edit"/>
                    <button type="submit" name="sub" value="upd">修改后保存</button> &nbsp;&nbsp;&nbsp;
                    <button type="button" id="clean" >清空重填</button> &nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;<a class="button" href="?ct=hand&ac=ad">返回列表</a>
                </td>
            </tr>

            <script type="text/javascript">
                $("#clean").click(function () {
                    $("input").val('');
                });
            </script>

        </table>
    </form>
</div>

</body>
</html>