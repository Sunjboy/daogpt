<{include file='./h5/header.tpl'}>
<script>stepMenu();</script>
<div id="path">
    <{include file='./h5/public/path.tpl'}>
</div>

<div class="detail">
    <h3>奇门遁甲排盘：</h3>
    <dl>
        <form name="sm" action="/index.php" method="post">
            <input type="hidden" name="ac" value="qimendunjia" />
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
                    <select name="yea" id="nian" class="select">
                        <?php for($i=1910;$i<2017;$i++){ ?>
                        <?php if($i==1988){$se='selected';}else{$se='';} ?>
                        <option value="<?=$i?>" <?=$se?>><?=$i?></option>
                        <?php }?>
                    </select>年
                    <SELECT name="mont" id="yue" class="select">
                        <?php for($i=1;$i<13;$i++){ ?>
                        <?php if($i==date('m',time())){$se='selected';}else{$se='';} ?>
                        <option value="<?=$i?>" <?=$se?>><?=$i?></option>
                        <?php }?>
                    </SELECT>月
                    <SELECT name="dat" id="date" class="select">
                        <?php for($i=1;$i<32;$i++){ ?>
                        <?php if($i==date('d',time())){$se='selected';}else{$se='';} ?>
                        <option value="<?=$i?>" <?=$se?>><?=$i?></option>
                        <?php }?>
                    </SELECT>日
                </dd>

                <dd class="form"><strong>时辰</strong>：<select size="1" name="hou" id="hh" class="select">
                        <option value="0" >子&nbsp;0</option><option value="1" >丑&nbsp;1</option><option value="2"  >丑&nbsp;2</option><option value="3"  >寅&nbsp;3</option><option value="4" >寅&nbsp;4</option><option value="5"  >卯&nbsp;5</option><option value="6" >卯&nbsp;6</option><option value="7" >辰&nbsp;7</option><option value="8" >辰&nbsp;8</option><option value="9"  >巳&nbsp;9</option><option value="10"  >巳&nbsp;10</option><option value="11"  >午&nbsp;11</option><option value="12"  >午&nbsp;12</option><option value="13"  >未&nbsp;13</option><option value="14"  >未&nbsp;14</option><option value="15"  >申&nbsp;15</option><option value="16"  >申&nbsp;16</option><option value="17"  >酉&nbsp;17</option><option value="18"  >酉&nbsp;18</option><option value="19"  >戌&nbsp;19</option><option value="20"  >戌&nbsp;20</option><option value="21"  >亥&nbsp;21</option><option value="22"  >亥&nbsp;22</option><option value="23"  >子&nbsp;23</option>
                    </select>

                    <select class="select" name="minut" id="minute">
                        <option value="0">未知</option>
                        <?php for($i=0;$i<60;$i++){ ?>
                        <option value="<?=$i?>"><?=$i?></option>
                        <?php }?>
                    </select>分钟
                </dd>

                <dd class="form">

                    <input type="hidden" name="jutag" value="0" />
                    <input id=zp type="radio" name="R1" value="zp" checked="" onClick="javacript:fs4.style.display='none';" //>
                    <label for="zp"style="cursor:hand;" >转盘奇门</label>　　　　
                    <input id=fg type="radio" name="R1" value="fg" onClick="javacript:fs4.style.display='block';" />
                    <label for="fg"style="cursor:hand;" >飞盘奇门</label>
                    <div id="fs4" style="display:none">
                        <input name="order" id=yx type="radio" value="1" checked="" />
                        <label for="yx"style="cursor:hand;" > 阳顺阴逆</label>　　　　
                        <input type="radio" id=qbx name="order" value="0" />
                        <label for="qbx"style="cursor:hand;" >全部顺排</label>
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
            <strong>「奇门遁甲」</strong>奇门遁甲，原来是中国古老的一本书，但它往往被认为是一本占卜用的书，但有的说法是说《奇门遁甲》是我国古代人民在同大自然作斗争中，经过长期观察、反复验证，总结出来的一门传统珍贵文化遗产。还有的说"奇门遁甲"是修真的功法。
            "奇门遁甲"的含义是什么呢？就是由"奇"，"门"，"遁甲"三个概组成。"奇"就是乙，丙，丁三奇；"门"就是休，生，伤，杜，景，死，惊，开八门；"遁"是隐藏的意思，"甲"指六甲，即甲子，甲戌，甲申，甲午，甲辰，甲寅，"遁甲"是在十干中最为尊贵，它藏而不现，隐遁于六仪之下。"六仪"就是戊，己，庚，辛，壬，癸。隐遁原则是甲子同六戊，甲戌同六己，甲申同六庚，甲午同六辛，甲辰同六壬，甲寅同六癸。另外还配合蓬，任，冲，辅，英，芮，柱，心，禽九星。奇门遁的占测主要分为天，门，地三盘，象征三才。天盘的九宫有九星，中盘的八宫（中宫寄二宫）布八门，地盘的八宫代表八个方位，静止不动，同时天盘地盘上，每宫都分配着特定的奇（乙，丙，丁）仪（戊，己，庚，辛，壬，癸六仪）。这样，根据具体时日，以六仪，三奇，八门，九星排局，以占测事物关系，性状，动向，选择吉时吉方，就构成了中国神秘文化中一个特有的门类----奇门遁甲。
        </dd>
    </dl>
</div>
<{include file='./h5/public/news.tpl'}>
<div id="navi">
    <{include file='./h5/public/h5_nav.tpl'}>
</div>
<{include file='./h5/footer.tpl'}>