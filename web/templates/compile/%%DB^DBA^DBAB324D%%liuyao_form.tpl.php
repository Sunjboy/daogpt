<?php /* Smarty version 2.6.25, created on 2017-12-03 22:06:02
         compiled from h5/paipan/liuyao_form.tpl */ ?>
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
    <h3>六爻排盘：</h3>
    <dl>
        <form name="sm" action="/index.php" method="post">
            <input type="hidden" name="ac" value="liuyao" />
            <input type="hidden" name="ct" value="h5_paipan" />
            <input type="hidden" name="tid" value="379" />
            <div align="center">

                <dd class="form">
                    <strong>输入姓名</strong>：<input class="ipt" type="text" name="name" id="wd" maxlength="32" onblur="if (value==''){value='请输入姓名'}" onfocus="if (value=='请输入姓名') {value=''}" value="王小丫"><br><br>
                    <strong> 占事 </strong>：<input type="text" maxlength="14" name="reason" id="area" value="" class="ipt" style="width: 64px;" />
                    出生时间：
                    <select name="birthyear" class="select">
                        <?
                                        for($i=1922;$i<=date("Y");$i++)
                                        {
                                        echo "<option value=".$i;
                                        if ($i==1980)
                                        {
                                        echo " selected";
                                        }
                                        echo ">".$i."</option>";
                        }
                        ?>
                    </select>
                </dd>

                <dd class="form"><strong>性别</strong>：<input type="radio" name="sex" id="mingtype1" value="1" checked>
                    <label for="mingtype1">男</label>
                    <input name="sex" type="radio" id="mingtype2" value="0" >
                    <label for="mingtype2">女</label>
                </dd>

                <dd class="form">
                    <strong>地区经度</strong>：
                    <input name=jd1 type="text" value="120" size="10" maxlength="4" />
                    度
                    <input name=jd2 type="text" value="0" size="10" maxlength="4" />
                    分  &nbsp;&nbsp;<input name="taiyang" type="checkbox" value="1" unchecked>考虑真太阳时
                </dd>

                <dd class="form">
                    <strong>生日(公历)</strong>：
                    <select name="sely" id="nian" class="select">
                        <?php for($i=1910;$i<2017;$i++){ ?>
                        <?php if($i==1988){$se='selected';}else{$se='';} ?>
                        <option value="<?=$i?>" <?=$se?>><?=$i?></option>
                        <?php }?>
                    </select>年
                    <SELECT name="selmo" id="yue" class="select">
                        <?php for($i=1;$i<13;$i++){ ?>
                        <?php if($i==date('m',time())){$se='selected';}else{$se='';} ?>
                        <option value="<?=$i?>" <?=$se?>><?=$i?></option>
                        <?php }?>
                    </SELECT>月
                    <SELECT name="seld" id="date" class="select">
                        <?php for($i=1;$i<32;$i++){ ?>
                        <?php if($i==date('d',time())){$se='selected';}else{$se='';} ?>
                        <option value="<?=$i?>" <?=$se?>><?=$i?></option>
                        <?php }?>
                    </SELECT>日
                </dd>

                <dd class="form"><strong>时辰</strong>：<select size="1" name="selh" id="hh" class="select">
                        <option value="0" >子&nbsp;0</option><option value="1" >丑&nbsp;1</option><option value="2"  >丑&nbsp;2</option><option value="3"  >寅&nbsp;3</option><option value="4" >寅&nbsp;4</option><option value="5"  >卯&nbsp;5</option><option value="6" >卯&nbsp;6</option><option value="7" >辰&nbsp;7</option><option value="8" >辰&nbsp;8</option><option value="9"  >巳&nbsp;9</option><option value="10"  >巳&nbsp;10</option><option value="11"  >午&nbsp;11</option><option value="12"  >午&nbsp;12</option><option value="13"  >未&nbsp;13</option><option value="14"  >未&nbsp;14</option><option value="15"  >申&nbsp;15</option><option value="16"  >申&nbsp;16</option><option value="17"  >酉&nbsp;17</option><option value="18"  >酉&nbsp;18</option><option value="19"  >戌&nbsp;19</option><option value="20"  >戌&nbsp;20</option><option value="21"  >亥&nbsp;21</option><option value="22"  >亥&nbsp;22</option><option value="23"  >子&nbsp;23</option>
                    </select>

                    <select class="select" name="selm" id="minute">
                        <option value="0">未知</option>
                        <?php for($i=0;$i<60;$i++){ ?>
                        <option value="<?=$i?>"><?=$i?></option>
                        <?php }?>
                    </select>分钟
                </dd>

                <dd class="form">

                    <input type="hidden" name="auto" value="1" />

                    <div class="form_item" id="yg3" style="display: none; text-align:center;">
                        上卦数： <INPUT maxLength="8" size="10" name="bsnums_up">
                        下卦数： <INPUT maxLength="8" size="10" name="bsnums_down">
                        <INPUT type="checkbox" CHECKED value="1" name="addhour">动爻加时辰
                    </div>

                </dd>

            </div>
            <div align="center"><input type="submit" name="submit" class="button" value="八字排盘"/></div>
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
    <h3>六壬排盘简介：</h3>
    <dl>
        <dd>
            <strong>「六爻排盘」</strong>⒈ 周易六十四卦，每一卦有六爻，通过分析六爻之间的生克关系，来判断所求测之事的吉凶，称为六爻预测。
            ⒉ 公历即是阳历，农历即是阴历。请按日期类型选择起卦的时间是阳历还是阴历。
            ⒊ 六爻起卦，最好用三枚铜钱自己摇卦，然后手工指定卦象，最为准确。电脑摇卦次之。自动起卦最次之。
            ⒋ 若电脑摇卦，请静心默想所测之事一分钟，然后专心摇卦六次，得出卦象，可贴到各算命论坛求测。
            ⒌ 如起终身卦，请选[时间起卦-以地支起终身卦]。起卦时间选择不必精确到分钟，对应以下时辰输入即可。
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