<{include file='./h5/header.tpl'}>
<script>stepMenu();</script>
<div id="path">
    <{include file='./h5/public/path.tpl'}>
</div>

<div class="detail">
    <h3>六壬排盘：</h3>
    <dl>
        <form name="sm" action="/index.php" method="post">
            <input type="hidden" name="ac" value="liuren" />
            <input type="hidden" name="ct" value="h5_paipan" />
            <div align="center">

                <dd class="form">
                    <strong>输入姓名</strong>：<input class="ipt" type="text" name="name" id="wd" maxlength="32" onblur="if (value==''){value='请输入姓名'}" onfocus="if (value=='请输入姓名') {value=''}" value="王小丫"><br><br>
                    <strong> 占事 </strong>：<input type="text" maxlength="14" name="zhanshi" id="area" value="" class="ipt" style="width: 64px;" />
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
                    <SELECT name="d" id="date" class="select">
                        <?php for($i=1;$i<32;$i++){ ?>
                        <?php if($i==date('d',time())){$se='selected';}else{$se='';} ?>
                        <option value="<?=$i?>" <?=$se?>><?=$i?></option>
                        <?php }?>
                    </SELECT>日
                </dd>

                <dd class="form"><strong>时辰</strong>：<select size="1" name="h" id="hh" class="select">
                        <option value="0" >子&nbsp;0</option><option value="1" >丑&nbsp;1</option><option value="2"  >丑&nbsp;2</option><option value="3"  >寅&nbsp;3</option><option value="4" >寅&nbsp;4</option><option value="5"  >卯&nbsp;5</option><option value="6" >卯&nbsp;6</option><option value="7" >辰&nbsp;7</option><option value="8" >辰&nbsp;8</option><option value="9"  >巳&nbsp;9</option><option value="10"  >巳&nbsp;10</option><option value="11"  >午&nbsp;11</option><option value="12"  >午&nbsp;12</option><option value="13"  >未&nbsp;13</option><option value="14"  >未&nbsp;14</option><option value="15"  >申&nbsp;15</option><option value="16"  >申&nbsp;16</option><option value="17"  >酉&nbsp;17</option><option value="18"  >酉&nbsp;18</option><option value="19"  >戌&nbsp;19</option><option value="20"  >戌&nbsp;20</option><option value="21"  >亥&nbsp;21</option><option value="22"  >亥&nbsp;22</option><option value="23"  >子&nbsp;23</option>
                    </select>

                    <select class="select" name="min" id="minute">
                        <option value="0">未知</option>
                        <?php for($i=0;$i<60;$i++){ ?>
                        <option value="<?=$i?>"><?=$i?></option>
                        <?php }?>
                    </select>分钟
                </dd>

                <dd class="form">

                    <input id=gs1 name="guishen" type="radio" value="1" checked="" />
                    <label for="gs1" style="cursor:hand;" >甲戊庚牛羊</label>　　　　
                    <input id=gs2 type="radio" name="guishen" value="0" >
                    <label for="gs2" style="cursor:hand;" >甲羊戊庚牛</label><br><br>

                    <input id="gs11" name="scpf" type="radio" value="1">
                    <label for="gs11" style="cursor:hand;" >时旬遁干</label>　
                    <input id="gs22" name="scpf" type="radio" value="0" checked>
                    <label for="gs22" style="cursor:hand;" >日旬遁干</label><br><br>


                    <strong>贵人运行</strong>：<input
                            checked name=zhouye type=radio value=2>
                    自动
                    <input name=zhouye type=radio value=1>
                    昼
                    <input name=zhouye type=radio value=0>
                    夜


                    <input type="hidden" name="cgp" value="1">
                    <input type="hidden" name="lnp" value="1">
                    <input type="hidden" name="qyp" value="1">
                    <input type="hidden" name="ssp" value="1">
                    <input type="hidden" name="nyp" value="1">
                    <input type="hidden" name="shenshap" value="1">
                    <input type="hidden" name="mgp" value="1">
                    <input type="hidden" name="csp" value="1">
                    <input type="hidden" name="xyp" value="1">
                </dd>

            </div>
            <div align="center"><input type="submit" name="submit" class="button" value="八字排盘"/></div>
        </form>
    </dl>
</div>


<div>
    <{include file='./h5/public/more_nav.tpl'}>
</div>

<div class="detail">
    <h3>六壬排盘简介：</h3>
    <dl>
        <dd>
            <strong>「六壬排盘」</strong>六壬是用阴阳五行占卜吉凶的一种术数。六壬与遁甲、太乙合称三式。五行以水为首，十天干中，壬、癸分别为阳水、阴水。舍阴取阳，六十甲子中壬有六个（壬申、壬午、壬辰、壬寅、壬子、壬戌），称为六壬。六壬有六十四课，以刻有干支的天盘、地盘相叠，转动天盘后得出所值的干支及时辰，判明吉凶。 　　六壬是我国古典数术之一，与奇门、太乙并称为三式，因土为万物之母，水为万物之源，五行以水为一，且六十花甲子中六个壬故称为六壬。 其法以月将加时辰，立四课，排三传，观阴阳，辩生克，以决吉凶成败。
        </dd>
    </dl>
</div>
<{include file='./h5/public/news.tpl'}>
<div id="navi">
    <{include file='./h5/public/h5_nav.tpl'}>
</div>
<{include file='./h5/footer.tpl'}>