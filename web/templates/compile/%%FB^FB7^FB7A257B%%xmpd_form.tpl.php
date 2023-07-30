<?php /* Smarty version 2.6.25, created on 2017-12-03 23:03:25
         compiled from h5/xingming/xmpd_form.tpl */ ?>
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

<div class="detail">
    <h3>姓名配对：</h3>
    <dl>
        <form name="qiming" action="/index.php"  method="post" id="qiming" onSubmit="javascript:return validateForm();">
            <input type="hidden" value="375" name="tid">
            <input type="hidden" value="xmpd" name="ac" />
            <input type="hidden" value="h5_xingming" name="ct" />

            <dd class="form">
                <strong><img src="<?php echo $this->_tpl_vars['web_url']; ?>
static/bazi/img/suanming/v2/boy_icon.png" alt="男人" width="10" class="item_imgIcon">男方姓名</strong>：<input class="ipt" type="text" name="name1" maxLength=32 onBlur="if (value==''){value='请输入姓氏'}" onFocus="if (value=='请输入姓氏') {value=''}" value="请输入姓氏">
            </dd>
            <dd class="form"><strong>性别</strong>：<input type="radio" name="sex1" id="sex1" value="男" checked/><label for="sex1">&nbsp;男</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="sex0" name="sex1" value="女" /><label for="sex0">&nbsp;女</label>
            </dd>
            <dd class="form">
                <strong>名字</strong>：<input type="radio" name="xing1" id="num1" value="1" >
                <label for="num1">单字</label>
                <input name="num" type="radio" id="num2" value="2" checked>
                <label for="num2">双字</label>
                <input type="radio" name="num" id="num0" value="1" >
                <label for="num0">不限</label>
            </dd>


            <dd class="form">
                <strong><img src="<?php echo $this->_tpl_vars['web_url']; ?>
static/bazi/img/suanming/v2/girl_icon.png" alt="女人" width="10" class="item_imgIcon">女方姓名</strong>：<input class="ipt" type="text" name="name2" maxLength=32 onBlur="if (value==''){value='请输入姓氏'}" onFocus="if (value=='请输入姓氏') {value=''}" value="请输入姓氏">
            </dd>
            <dd class="form"><strong>性别</strong>：<input type="radio" name="sex2" id="sex2" value="男" checked/><label for="sex1">&nbsp;男</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="sex0" name="sex2" value="女" /><label for="sex0">&nbsp;女</label>
            </dd>
            <dd class="form">
                <strong>名字</strong>：<input type="radio" name="xing2" id="xing2" value="1" >
                <label for="num1">单字</label>
                <input name="num" type="radio" id="num2" value="2" checked>
                <label for="num2">双字</label>
                <input type="radio" name="num" id="num0" value="1" >
                <label for="num0">不限</label>
            </dd>

            <dd>
                <div align="center"><input type="submit" class="button" name="submit1" value="名字五格配对">
                    <input type="hidden" name="action" value="jieguo"></div>
            </dd>
            <script language="javascript">
                function validateForm()
                {
                    if (qiming.surname.value=="请输入姓氏" || qiming.surname.value=="")
                    {
                        alert("请输入姓氏！");
                        qiming.surname.value="";
                        qiming.surname.focus();
                        return false;
                    }
                    var reg=/[^\u4E00-\u9FA5]/g;
                    if(reg.test(qiming.surname.value))
                    {
                        alert("请您输入汉字！");
                        qiming.surname.focus();
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
<div class="detail">
    <h3>姓名配对简介：</h3>
    <dl>
        <dd>
            注：根据《易经》的"象"、"数"理论，依据姓名的笔画数和一定规则建立起来天格、地格、人格、总格、外格等五格数理关系，并运用阴阳五行相生相克理论，来推算的各方面运势。
        </dd>
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