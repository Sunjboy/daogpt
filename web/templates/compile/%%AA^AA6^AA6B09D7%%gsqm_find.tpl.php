<?php /* Smarty version 2.6.25, created on 2018-03-07 11:03:09
         compiled from h5/xingming/gsqm_find.tpl */ ?>
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
<h1 class="title"><?php echo $this->_tpl_vars['ming']; ?>
名称评分</h1>
<div class="detail">
    <div class="remark center"><?php echo $this->_tpl_vars['ming']; ?>
</strong>的名字分析结果如下 &nbsp; 来源：神算网</div>

    <div class="gsqm_detail_table">
        <table>
            <tr class="tr_th">
                <th><span>简体</span></th>
                <th><span>繁体</span></th>
                <th><span>拼音</span></th>
                <th><span>五行</span></th>
                <th><span>笔画</span></th>

            </tr>
            <?php if ($this->_tpl_vars['a1arr']['a1'] != ''): ?>
            <tr>
                <td><?php echo $this->_tpl_vars['a1arr']['a1']; ?>
</td>
                <td><?php echo $this->_tpl_vars['a1arr']['a1gb']; ?>
</td>
                <td class="py"><?php echo $this->_tpl_vars['a1arr']['a1py']; ?>
</td>
                <td><?php echo $this->_tpl_vars['a1arr']['hzwh1']; ?>
</td>
                <td><?php echo $this->_tpl_vars['a1arr']['bihua1']; ?>
</td>
            </tr>
            <?php endif; ?>

            <?php if ($this->_tpl_vars['a2arr']['a2'] != ''): ?>
            <tr>
                <td><?php echo $this->_tpl_vars['a2arr']['a2']; ?>
</td>
                <td><?php echo $this->_tpl_vars['a2arr']['a2gb']; ?>
</td>
                <td class="py"><?php echo $this->_tpl_vars['a2arr']['a2py']; ?>
</td>
                <td><?php echo $this->_tpl_vars['a2arr']['hzwh2']; ?>
</td>
                <td><?php echo $this->_tpl_vars['a2arr']['bihua2']; ?>
</td>
            </tr>
            <?php endif; ?>

            <?php if ($this->_tpl_vars['a3arr']['a3'] != ''): ?>
            <tr>
                <td><?php echo $this->_tpl_vars['a3arr']['a3']; ?>
</td>
                <td><?php echo $this->_tpl_vars['a3arr']['a3gb']; ?>
</td>
                <td class="py"><?php echo $this->_tpl_vars['a3arr']['a3py']; ?>
</td>
                <td><?php echo $this->_tpl_vars['a3arr']['hzwh3']; ?>
</td>
                <td><?php echo $this->_tpl_vars['a3arr']['bihua3']; ?>
</td>
            </tr>
            <?php endif; ?>

            <?php if ($this->_tpl_vars['a4arr']['a4'] != ''): ?>
            <tr>
                <td><?php echo $this->_tpl_vars['a4arr']['a4']; ?>
</td>
                <td><?php echo $this->_tpl_vars['a4arr']['a4gb']; ?>
</td>
                <td class="py"><?php echo $this->_tpl_vars['a4arr']['a4py']; ?>
</td>
                <td><?php echo $this->_tpl_vars['a4arr']['hzwh4']; ?>
</td>
                <td><?php echo $this->_tpl_vars['a4arr']['bihua4']; ?>
</td>
            </tr>
            <?php endif; ?>

            <?php if ($this->_tpl_vars['a5arr']['a5'] != ''): ?>
            <tr>
                <td><?php echo $this->_tpl_vars['a5arr']['a5']; ?>
</td>
                <td><?php echo $this->_tpl_vars['a5arr']['a5gb']; ?>
</td>
                <td class="py"><?php echo $this->_tpl_vars['a5arr']['a5py']; ?>
</td>
                <td><?php echo $this->_tpl_vars['a5arr']['hzwh5']; ?>
</td>
                <td><?php echo $this->_tpl_vars['a5arr']['bihua5']; ?>
</td>
            </tr>
            <?php endif; ?>

            <?php if ($this->_tpl_vars['a6arr']['a6'] != ''): ?>
            <tr>
                <td><?php echo $this->_tpl_vars['a6arr']['a6']; ?>
</td>
                <td><?php echo $this->_tpl_vars['a6arr']['a6gb']; ?>
</td>
                <td class="py"><?php echo $this->_tpl_vars['a6arr']['a6py']; ?>
</td>
                <td><?php echo $this->_tpl_vars['a6arr']['hzwh6']; ?>
</td>
                <td><?php echo $this->_tpl_vars['a6arr']['bihua6']; ?>
</td>
            </tr>
            <?php endif; ?>
        </table>
    </div>



    <h2>1. 数 理：</h2>
    <div class="h2_content"><?php echo $this->_tpl_vars['allbihua']; ?>
</div>
    <div align="center" style="padding-top:10px"><div class="bdlikebutton"></div></div>
    <h2>2. 吉 凶：</h2>
    <div class="h2_content">
        <?php echo $this->_tpl_vars['company']['t1']; ?>
<em class="red"><?php echo $this->_tpl_vars['company']['j1']; ?>
</em>
    </div>
    <h2>3. 诗 解：</h2>
    <div class="h2_content"><?php echo $this->_tpl_vars['company']['c1']; ?>
</div>
    <h2>4. 含 义：</h2>
    <div class="h2_content"><?php echo $this->_tpl_vars['company']['t2']; ?>
<br><?php echo $this->_tpl_vars['company']['c2']; ?>
</div>
</div>

<div class="detail">
    <h3>公司名称评分：</h3>
    <dl>
        <form name="qiming" action="/index.php"  method="post" id="qiming" onSubmit="javascript:return validateForm();">
            <input type="hidden" value="374" name="tid">
            <input type="hidden" value="gsqm" name="ac" />
            <input type="hidden" value="h5_xingming" name="ct" />
            <dd class="form">
                <strong>公司名称</strong>：<input class="ipt" type="text" name="name" maxLength=32 onBlur="if (value==''){value='请输入公司名称'}" onFocus="if (value=='请输入公司名称') {value=''}" value="吉祥三宝">
            </dd>

            <dd>
                <div align="center"><input type="submit" class="button" name="submit1" value="马上起名">
                    <input type="hidden" name="action" value="jieguo"></div>
            </dd>
            <script language="javascript">
                function validateForm()
                {
                    if (qiming.name.value=="吉祥三宝" || qiming.name.value=="")
                    {
                        alert("请输入公司名称！");
                        qiming.name.value="";
                        qiming.name.focus();
                        return false;
                    }
                }
            </script>
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
$this->_smarty_include(array('smarty_include_tpl_file' => './index/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>