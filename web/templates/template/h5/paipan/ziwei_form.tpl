<{include file='./h5/header.tpl'}>
<script>stepMenu();</script>
<div id="path">
    <{include file='./h5/public/path.tpl'}>
</div>

<div class="detail">
    <h3>紫微斗数：</h3>
    <dl>
        <form name="sm" action="/index.php" method="post">
            <input type="hidden" name="ac" value="ziwei" />
            <input type="hidden" name="ct" value="h5_paipan" />
            <input type="hidden" name="tid" value="381" />
            <input name="DateType" type="hidden" value="1" >
            <div align="center">

                <dd class="form">
                    <strong>输入姓名</strong>：<input class="ipt" type="text" name="name" id="wd" maxlength="32" onblur="if (value==''){value='请输入姓名'}" onfocus="if (value=='请输入姓名') {value=''}" value="王小丫"><br><br>

                </dd>

                <dd class="form"><strong>性别</strong>：<input type="radio" name="sex" id="mingtype1" value="1" checked>
                    <label for="mingtype1">男</label>
                    <input name="sex" type="radio" id="mingtype2" value="0" >
                    <label for="mingtype2">女</label>
                </dd>

                <dd class="form">
                    <strong>生日(公历)</strong>：
                    <select name="year" id="nian" class="select">
                        <?php for($i=1910;$i<2017;$i++){ ?>
                        <?php if($i==1988){$se='selected';}else{$se='';} ?>
                        <option value="<?=$i?>" <?=$se?>><?=$i?></option>
                        <?php }?>
                    </select>年
                    <SELECT name="month" id="yue" class="select">
                        <?php for($i=1;$i<13;$i++){ ?>
                        <?php if($i==date('m',time())){$se='selected';}else{$se='';} ?>
                        <option value="<?=$i?>" <?=$se?>><?=$i?></option>
                        <?php }?>
                    </SELECT>月
                    <SELECT name="date" id="date" class="select">
                        <?php for($i=1;$i<32;$i++){ ?>
                        <?php if($i==date('d',time())){$se='selected';}else{$se='';} ?>
                        <option value="<?=$i?>" <?=$se?>><?=$i?></option>
                        <?php }?>
                    </SELECT>日
                </dd>

                <dd class="form"><strong>时辰</strong>：<select size="1" name="hour" id="hh" class="select">
                        <option value="0" >子&nbsp;0</option><option value="1" >丑&nbsp;1</option><option value="2"  >丑&nbsp;2</option><option value="3"  >寅&nbsp;3</option><option value="4" >寅&nbsp;4</option><option value="5"  >卯&nbsp;5</option><option value="6" >卯&nbsp;6</option><option value="7" >辰&nbsp;7</option><option value="8" >辰&nbsp;8</option><option value="9"  >巳&nbsp;9</option><option value="10"  >巳&nbsp;10</option><option value="11"  >午&nbsp;11</option><option value="12"  >午&nbsp;12</option><option value="13"  >未&nbsp;13</option><option value="14"  >未&nbsp;14</option><option value="15"  >申&nbsp;15</option><option value="16"  >申&nbsp;16</option><option value="17"  >酉&nbsp;17</option><option value="18"  >酉&nbsp;18</option><option value="19"  >戌&nbsp;19</option><option value="20"  >戌&nbsp;20</option><option value="21"  >亥&nbsp;21</option><option value="22"  >亥&nbsp;22</option><option value="23"  >子&nbsp;23</option>
                    </select>

                    <select class="select" name="minute" id="minute">
                        <option value="0">未知</option>
                        <?php for($i=0;$i<60;$i++){ ?>
                        <option value="<?=$i?>"><?=$i?></option>
                        <?php }?>
                    </select>分钟
                </dd>

                <dd class="form">
                    阴历闰月否:<input name="other" type="radio" value="0" checked="">&nbsp;&nbsp;&nbsp;&nbsp;是<input name="other" type="radio" value="1"><br><br>
                    闰月分界:作下月<input name="runfen" type="radio" value="1" checked>&nbsp;&nbsp;&nbsp;&nbsp;月中分界<input name="runfen" type="radio" value="0" >
                </dd>

            </div>
            <div align="center"><input type="submit" name="submit" class="button" value="八字排盘"/></div>
        </form>
    </dl>
</div>
<div>
    <dl class="mod_dl">
        <dd>
            <ul class="clearfix">
                <li><a href="/vip/hh/">八字合婚</a></li>
                <li><a href="/peidui/"><span class="red">姓名配对</span></a></li>
                <li><a href="/xingzuo/peidui/">星座配对</a></li>
                <li><a href="/shengxiao/peidui/">生肖配对</a></li>
                <li><a href="/xuexing/peidui/">血型配对</a></li>
                <li><a href="/qq/peidui/">QQ号配对</a></li>
            </ul>
        </dd>
    </dl>
    <div class="clear"></div>
</div>

<div class="detail">
    <h3>六壬排盘简介：</h3>
    <dl>
        <dd>
            <strong>「紫微斗数」</strong>紫微斗数就是和生肖星座一样，主星有十四颗，代表自己的有一个或两个主星，副星和小星加起来有上百颗，把人的生辰分为十二个宫，就像正方形的命盘一样，顺时针或逆时针的围绕这个盘转，当天当月当年走到哪个宫位，里面的星星就代表不同的含义！
        </dd>
    </dl>
</div>

<div>
    <{include file='./h5/public/more_nav.tpl'}>
</div>

<{include file='./h5/public/news.tpl'}>

<div id="navi">
    <{include file='./h5/public/h5_nav.tpl'}>
</div>
<{include file='./h5/footer.tpl'}>