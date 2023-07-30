<?php /* Smarty version 2.6.25, created on 2017-11-28 19:30:51
         compiled from admin/ad.list.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="contents">

    <dl class="search-class">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/base/filter.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <a href='?ct=<?php echo $this->_tpl_vars['ct']; ?>
&ac=<?php echo $this->_tpl_vars['ac']; ?>
_add' id='list_add'><input type="button" value="增加" id="add" /></a> 
    <?php if (! empty ( $this->_tpl_vars['tp'] )): ?>所有3天内过期的广告如下: <a href="?ct=hand&ac=ad">返回</a><?php else: ?><?php if (! empty ( $this->_tpl_vars['due'] )): ?>3天内将到期的ID为 : <?php $_from = $this->_tpl_vars['due']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['i']):
?><?php echo $this->_tpl_vars['i']; ?>
,<?php endforeach; endif; unset($_from); ?> 到期将使用备用广告.<a href="?ct=hand&ac=ad&tp=due">点击查看</a>全部3天内到期的广告.<?php endif; ?><?php endif; ?>
    </dl>

    <form name="form1" action="?ct=<?php echo $this->_tpl_vars['ct']; ?>
&ac=<?php echo $this->_tpl_vars['ac']; ?>
_do" method="POST">
        <input type='hidden' name='tb' value='sorting' />
        <input type="hidden" name="sub" value="del" />
        <table class="table-sort table-operate">
            <tr>
                <td>全选<input type='checkbox' id='allid' value='' /></td>
                <td>ID</td>
                <?php if (! empty ( $this->_tpl_vars['self_opt']['opt_button'] )): ?>
                    <?php $_from = $this->_tpl_vars['self_opt']['opt_button']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['b_key'] => $this->_tpl_vars['b_item']):
?>
                        <td><strong><?php echo $this->_tpl_vars['b_key']; ?>
</strong></td>
                    <?php endforeach; endif; unset($_from); ?>
                <?php endif; ?>
                <?php if (! empty ( $this->_tpl_vars['self_opt'] )): ?>
                    <?php $_from = $this->_tpl_vars['self_opt']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['so_key'] => $this->_tpl_vars['so_item']):
?>
                        <?php if (! empty ( $this->_tpl_vars['tb_column'][$this->_tpl_vars['so_key']] ) && $this->_tpl_vars['so_item']['0'] == 'show'): ?>
                            <td><strong><?php echo $this->_tpl_vars['tb_column'][$this->_tpl_vars['so_key']]; ?>
</strong></td>
                        <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
                <?php endif; ?>
            </tr>
            <?php $_from = $this->_tpl_vars['array_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
                <tr>
                    <td><input type='checkbox' name='ids[]' value='<?php echo $this->_tpl_vars['v']['id']; ?>
' class='f'/></td>
                    <td><?php echo $this->_tpl_vars['v']['id']; ?>
</td>
                    <td>[<a style="color:brown;" href="javascript:show_data('?ct=hand&ac=ad_edit&id=<?php echo $this->_tpl_vars['v']['id']; ?>
');">修改</a>]</td>
                    <td><?php if ($this->_tpl_vars['v']['mark'] == 'after'): ?>[过期] <?php endif; ?><input type="text" class="" name="title[<?php echo $this->_tpl_vars['v']['id']; ?>
]" value="<?php echo $this->_tpl_vars['v']['title']; ?>
"/></td>
                    <td><input type="text" class="text" name="endtime[<?php echo $this->_tpl_vars['v']['id']; ?>
]" value="<?php echo $this->_tpl_vars['v']['endtime']; ?>
"/></td>
                    <td><?php if ($this->_tpl_vars['v']['mark'] == 'front'): ?>[未用] <?php endif; ?><input type="text" class="" name="titlere[<?php echo $this->_tpl_vars['v']['id']; ?>
]" value="<?php echo $this->_tpl_vars['v']['titlere']; ?>
"/></td>
                    <td><select name="type[<?php echo $this->_tpl_vars['v']['id']; ?>
]">
                            <?php $_from = $this->_tpl_vars['type_ad_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['i']):
?>
                                <option value="<?php echo $this->_tpl_vars['k']; ?>
" <?php if ($this->_tpl_vars['k'] == $this->_tpl_vars['v']['type']): ?>selected='selected'<?php endif; ?>><?php echo $this->_tpl_vars['i']; ?>
</option>
                            <?php endforeach; endif; unset($_from); ?>
                        </select></td>
                </tr>
            <?php endforeach; endif; unset($_from); ?>

        </table>
    </form>
</div>
<div id="bottom">
    <div class="fl">
        <?php if (empty ( $this->_tpl_vars['self_opt']['SUBMIT'] )): ?>
            <button type="button" onclick="do_pl('upd');">批量修改</button>
            <button type="button" onclick="do_delete();">删除选中记录</button>
        <?php else: ?>
            <?php $_from = $this->_tpl_vars['self_opt']['SUBMIT']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k_s'] => $this->_tpl_vars['i_s']):
?>
                <?php if ($this->_tpl_vars['k_s'] == 'pl'): ?>
                    <button type="button" onclick="do_pl('<?php echo $this->_tpl_vars['i_s']['1']; ?>
');"><?php echo $this->_tpl_vars['i_s']['0']; ?>
</button>
                <?php elseif ($this->_tpl_vars['k_s'] == 'del'): ?>
                    <button type="button" onclick="do_delete();"><?php echo $this->_tpl_vars['i_s']['0']; ?>
</button>
                <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>
        <?php endif; ?>
    </div>
    <div class="pages">
        <?php echo $this->_tpl_vars['pagination']; ?>

    </div>
</div>
<script lang='javascript'>
    function do_delete()
    {
        var msg = "你确定要删除选中的记录？！";
        msg += "<br/><a href='javascript:tb_remove();'>&lt;&lt;点错了</a> &nbsp;|&nbsp; <a href='javascript:document.form1.submit();'>确定要删除&gt;&gt;</a>";
        tb_showmsg(msg);
    }
    function do_pl(type)
    {
        document.form1.sub.value = type;
        var msg = " 确定批量执行？！";
        msg += "<br/><a href='javascript:tb_remove();'>&lt;&lt;点错了</a> &nbsp;|&nbsp; <a href='javascript:document.form1.submit();'>确定执行&gt;&gt;</a>";
        tb_showmsg(msg);
    }
    function show_data(nid)
    {
        tb_show('浏览/编辑记录', nid + '&TB_iframe=true&height=600&width=1000', true);
    }
    $("#allid").click(function () {
        $this = $(this);
        if ($this.attr("checked") == true)
        {
            $(".f").attr("checked", 'true');
        } else {
            $(".f").removeAttr("checked");
        }
    });

</script>



</body>
</html>