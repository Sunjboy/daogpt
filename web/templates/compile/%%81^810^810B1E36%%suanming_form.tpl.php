<?php /* Smarty version 2.6.25, created on 2017-12-03 18:42:22
         compiled from h5/suanming/suanming_form.tpl */ ?>
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
<h1 class="title"><?php echo $this->_tpl_vars['arr']['h1']; ?>
</h1>
<div class="detail">
    <dl>
        <dd class="form"><?php echo $this->_tpl_vars['arr']['jianjie']; ?>
</dd>
        <form id="sm" action="/index.php"  method="post" onSubmit="return checkbz();">

            <dd class="form">
            	
                <strong>姓</strong>：<input class="ipt" type="text" name="xing" id="word" maxLength=14 onBlur="if (value==''){value='请输入姓'}" onFocus="if (value=='请输入姓') {value=''}" value="请输入姓"><br /><br />
                <strong>名</strong>：<input class="ipt" type="text" name="name" id="word2" maxLength=18 onBlur="if (value==''){value='请输入名'}" onFocus="if (value=='请输入名') {value=''}" value="请输入名">
            </dd>
            <dd class="form">
                <strong>生日(公历)</strong>：
                <select name="y" id="nian" class="select">
                    <?php for($i=1910;$i<2017;$i++){ ?>
                    <?php if($i==1988){$se='selected';}else{$se='';} ?>
                    <option value="<?=$i?>" <?=$se?>><?=$i?></option>
                    <?php }?>
                </select>年
                <SELECT name="m" id="yue" class="select">
                    <?php for($i=1;$i<13;$i++){ ?>
                    <?php if($i==date('m',time())){$se='selected';}else{$se='';} ?>
                    <option value="<?=$i?>" <?=$se?>><?=$i?></option>
                    <?php }?>
                </SELECT>月
                <SELECT name="d" id="ri" class="select">
                    <?php for($i=1;$i<32;$i++){ ?>
                    <?php if($i==date('d',time())){$se='selected';}else{$se='';} ?>
                    <option value="<?=$i?>" <?=$se?>><?=$i?></option>
                    <?php }?>
                </SELECT>日
            </dd>
            <dd class="form"><strong>时辰</strong>：<select size="1" name="h" id="hh" class="select">
                    <option value="0" >子&nbsp;0</option><option value="1" >丑&nbsp;1</option><option value="2"  >丑&nbsp;2</option><option value="3"  >寅&nbsp;3</option><option value="4" >寅&nbsp;4</option><option value="5"  >卯&nbsp;5</option><option value="6" >卯&nbsp;6</option><option value="7" >辰&nbsp;7</option><option value="8" >辰&nbsp;8</option><option value="9"  >巳&nbsp;9</option><option value="10"  >巳&nbsp;10</option><option value="11"  >午&nbsp;11</option><option value="12"  >午&nbsp;12</option><option value="13"  >未&nbsp;13</option><option value="14"  >未&nbsp;14</option><option value="15"  >申&nbsp;15</option><option value="16"  >申&nbsp;16</option><option value="17"  >酉&nbsp;17</option><option value="18"  >酉&nbsp;18</option><option value="19"  >戌&nbsp;19</option><option value="20"  >戌&nbsp;20</option><option value="21"  >亥&nbsp;21</option><option value="22"  >亥&nbsp;22</option><option value="23"  >子&nbsp;23</option>
                </select>
                
                <select class="select" name="i" id="minute">
                                                <option value="0">未知</option>
                                                <?php for($i=0;$i<60;$i++){ ?>
                                                <option value="<?=$i?>"><?=$i?></option>
                                                <?php }?>
                                            </select>分钟
            </dd>
            
            <dd class="form"><strong>性别</strong>：<input type="radio" name="sex" id="mingtype1" value="0" checked>
                <label for="mingtype1">男</label>
                <input name="sex" type="radio" id="mingtype2" value="1" >
                <label for="mingtype2">女</label>
            </dd>
            <dd>
                <div align="center">
                    <input type="hidden" name=ct  value="h5_suanming">
                    <input type="hidden" name=ac  value="sm_form">
                    <input type="hidden" name=cY  value="">
                    <input type="hidden" name=cM  value="">
                    <input type="hidden" name=cD  value="">
                    <input type="hidden" name=cH  value="">
                    <input type="hidden" name=term1  value="">
                    <input type="hidden" name=term2  value="">
                    <input type="hidden" name=start_term  value="">
                    <input type="hidden" name=end_term  value="">
                    <input type="hidden" name=start_term1  value="">
                    <input type="hidden" name=end_term1  value="">
                    <input type="hidden" name=lDate  value="">
                    <input type="hidden" name="base" value="<?php echo $this->_tpl_vars['arr']['postbase']; ?>
">
                    <input type="submit" name="submit" class="button" value="马上算命" />
                    <input type="hidden" name="action" value="post">
                    <input type="hidden" name="st" value="2"></div>
            </dd>
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
<script language="JavaScript">
    <!--
    function checkbz()
    {
        if (sm.word.value=="请输入姓名" || sm.word.value=="")
        {
            alert("请输入姓名！");
            sm.word.value="";
            sm.word.focus();
            return false;
        }
        if (sm.word.value.length<2)
        {
           // alert("请输入全名！");
           // sm.word.focus();
           // return false;
        }
        var reg=/[^\u4E00-\u9FA5]/g;
        if(reg.test(sm.word.value))
        {
            alert("请您输入汉字！");
            sm.word.focus();
            return false;
        }

        var year=document.sm.nian.value;
        var month=document.sm.yue.value;
        var day=document.sm.ri.value;
        var now=new Date();
        var nowyear=now.getYear();
        var nowmonth=now.getMonth();
        if (year=='')
        {
            alert('请选择出生年份！');
            document.sm.nian.focus()
            return false;
        }
//if (year>nowyear || year <=nowyear-10 || isNaN(year))
        if (year=='')
        {
            alert('请输入正确的出生年份！');
            document.sm.nian.focus()
            return false;
        }
        if ( month=='' || month>12 )
        {
            alert('请输入正确的出生月份！');
            document.sm.yue.focus()
            return false;
        }
        if (day=='')
        {
            alert('请输入正确的出生日期！');
            document.sm.ri.focus()
            return false;
        }
        if ((month==2 && day>29) || ((month==1 || month==3 || month==5 || month==7 || month==8 || month==10|| month==12) && day>31) || ((month==4 || month==6 || month==9 || month==11 ) && day>30))
        {
            alert('请输入正确的出生日期！');
            document.sm.ri.focus()
            return false;
        }
    }
    //-->
</script>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './h5/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
