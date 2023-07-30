<?php /* Smarty version 2.6.25, created on 2017-12-04 05:55:21
         compiled from h5/xingming/dzqm_form.tpl */ ?>
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
    <h3>定字起名：</h3>
    <dl>
        <form name="qiming" action="/index.php"  method="post" id="qiming" onSubmit="javascript:return validateForm();">
            <input type="hidden" value="373" name="tid">
            <input type="hidden" value="dzqm" name="ac" />
            <input type="hidden" value="h5_xingming" name="ct" />
            <dd class="form">
                <strong>姓氏</strong>：<input class="ipt" type="text" name="xing" maxLength=32 onBlur="if (value==''){value='请输入姓氏'}" onFocus="if (value=='请输入姓氏') {value=''}" value="王">
            </dd>
            <dd class="form"><strong>性别</strong>：<input type="radio" name="sex" id="sex1" value="1" /><label for="sex1">&nbsp;男</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="sex0" name="sex" value="0" checked/><label for="sex0">&nbsp;女</label>
            </dd>
            <dd class="form">
                <strong>定字</strong>：<input type="text" class="ipt" name="ming" id="ding" value="">
            </dd>
            <dd class="form">
                <strong>位置</strong>：<select name="dingzi" class="select">
                    <option value="1">中间字</option>
                    <option value="2">末尾字</option>
                </SELECT>
            </dd>
            <dd>
                <div align="center"><input type="submit" class="button" name="submit1" value="马上起名">
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
    <h3>免费起名简介：</h3>
    <dl>
        <dd>
            <strong>「定字起名」</strong>起名字既有一定的原则和方法，又有一些禁忌和容易陷入的误区，一个人的姓和名字都是没有的，从宝宝出来就要起名，姓是已经定好的，如果已经确定了一个字的情况，定第一个字起名，定第二个字起名，神算网为你推荐起名字大全，例如王姓家庭中已经确定了家谱中的一个中间字【星】，需要起【伍星星】【伍星月】【伍星鹏】这样的名字，或者已经确定了末尾字【轩】，需要起【伍星轩】【伍伍轩】【伍慧轩】这样的名字。
        </dd>
    </dl>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './h5/public/news.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="detail qmlist">
    <h3>中国姓名大全2016年最新版：</h3>
    <dl>
        <ul class="xsdq">

            <?php $_from = $this->_tpl_vars['xinglist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
            <?php if ($this->_tpl_vars['k'] == 0): ?>
            <li>
            <?php endif; ?>
            <a href="/xingming/qiming/list-<?php echo $this->_tpl_vars['v']['id']; ?>
-0-0-1.html"><?php echo $this->_tpl_vars['v']['xing']; ?>
</a>
            <?php if (( $this->_tpl_vars['k']+1 ) % 4 == 0 && $this->_tpl_vars['k'] != 195 && $this->_tpl_vars['k'] != 0): ?>
            </li><li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['k'] == 195): ?>
            </li>
            <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>
        </ul>
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
$this->_smarty_include(array('smarty_include_tpl_file' => './index/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>