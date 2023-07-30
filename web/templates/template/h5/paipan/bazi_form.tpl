<{include file='./h5/header.tpl'}>
<script>stepMenu();</script>
<div id="path">
    <{include file='./h5/public/path.tpl'}>
</div>

<div class="detail">
    <h3>八字在线排盘：</h3>
    <dl>
        <dd class="form">八字在线排盘</dd>
        <form name="sm" action="/index.php" method="post">
            <input type="hidden" name="ac" value="bazi" />
            <input type="hidden" name="ct" value="h5_paipan" />
            <input type="hidden" name="tid" value="376" />
            <div align="center">

                <dd class="form">
                    <strong>输入姓名</strong>：<input class="ipt" type="text" name="name" id="wd" maxlength="32" onblur="if (value==''){value='请输入姓名'}" onfocus="if (value=='请输入姓名') {value=''}" value="王小丫"><br><br>
                    <strong> 出生地 </strong>：<input type="text" name="area" id="area" value="" class="ipt" />
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

                    <strong>夜子时处理</strong>：<input type="radio" name="yezis" id="mingtype1" value="1" checked>
                    <label for="mingtype1">夜子时日干向前遁一天算第二天</label>
                    <input name="yezis" type="radio" id="mingtype2" value="0" >
                    <label for="mingtype2">日干保持不变</label>

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
    <h3>八字排盘简介：</h3>
    <dl>
        <dd><strong>「八字在线排盘」</strong>谁都想知道自己一生中的事业、财运、婚姻、功名、健康、性格、流年运程将是怎样,通过八字排盘，四柱八字排盘会有你想知道的答案。一个人出生的年月时天干地支的排列组合（即八字）就是命。不过仅凭干干巴巴的八个干支，没法推算贵 贱吉凶。 于是和阴阳五行纳配，使天干地支具有了阴阳五行的属性，具备了相生、相克的关系，生克关系又代称为正印、偏印，伤官、食神，正官、偏官，正财、偏财，比肩、劫财十种，统称"十神"八字算命术的另一个重要概念是运。命侧重于论贫富贵*之类相对稳定的人生内容，运则侧重于讲吉凶福祸之类动态的人生问题，即通常所说的命运。运包括大运、小运和流年。... ...</dd>
    </dl>
</div>
<{include file='./h5/public/news.tpl'}>
<div id="navi">
    <{include file='./h5/public/h5_nav.tpl'}>
</div>
<{include file='./h5/footer.tpl'}>