<{include file='./h5/header.tpl'}>
<script>stepMenu();</script>
<div id="path">
    <{include file='./h5/public/path.tpl'}>
</div>

<div class="detail">
    <h3>玄空飞星：</h3>
    <dl>
        <form name="sm" action="/index.php" method="post">
            <input type="hidden" name="ac" value="xuankongfeixing" />
            <input type="hidden" name="ct" value="h5_paipan" />
            <input type="hidden" name="tid" value="378" />
            <div align="center">

                <dd class="form">
                    出生时间：
                    <select name="nian" class="select">
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
                    <input name="feixing" type="checkbox" id="feixing" value="checkbox" checked>
                    飞星盘&nbsp;&nbsp;卦名：
                    <select id = select5 class="select" name=gm style="WIDTH: 80px">
                        <option value = "挨星下卦" selected >挨星下卦</option>
                        <option value = "挨星替卦" >挨星替卦</option>
                    </select>
                </dd>

                <dd class="form">
                    大运：
                    <select id = select6 class="select" name=dy style="WIDTH: 55px">
                        <option value = 0 >一运</option>
                        <option value = 1 >二运</option>
                        <option value = 2 >三运</option>
                        <option value = 3 >四运</option>
                        <option value = 4 >五运</option>
                        <option value = 5 >六运</option>
                        <option value = 6 selected >七运</option>
                        <option value = 7 >八运</option>
                        <option value = 8 >九运</option>
                    </select>
                </dd>

                <dd class="form">
                    山向：
                    <select id=select7 name=sx class="select" style="WIDTH: 80px">
                        <option value = 0壬山丙向 selected>壬山丙向</option>
                        <option value = 1子山午向 >子山午向</option>
                        <option value = 2癸山丁向 >癸山丁向</option>
                        <option value = 3丑山未向 >丑山未向</option>
                        <option value = 4艮山坤向 >艮山坤向</option>
                        <option value = 5寅山申向 >寅山申向</option>
                        <option value = 6甲山庚向 >甲山庚向</option>
                        <option value = 7卯山酉向 >卯山酉向</option>
                        <option value = 8乙山辛向 >乙山辛向</option>
                        <option value = 9辰山戌向 >辰山戌向</option>
                        <option value = 10巽山乾向 >巽山乾向</option>
                        <option value = 11已山亥向 >已山亥向</option>
                        <option value = 12丙山壬向 >丙山壬向</option>
                        <option value = 13午山子向 >午山子向</option>
                        <option value = 14丁山癸向 >丁山癸向</option>
                        <option value = 15未山丑向 >未山丑向</option>
                        <option value = 16坤山艮向 >坤山艮向</option>
                        <option value = 17申山寅向 >申山寅向</option>
                        <option value = 18庚山甲向 >庚山甲向</option>
                        <option value = 19酉山卯向 >酉山卯向</option>
                        <option value = 20辛山乙向 >辛山乙向</option>
                        <option value = 21戌山辰向 >戌山辰山</option>
                        <option value = 22乾山巽向 >乾山巽向</option>
                        <option value = 23亥山已向 >亥山已向</option>
                    </select>
                </dd>

                <dd class="form">
                    选择
                    <input name="pailong" type="checkbox" id="pailong" value="1">
                    排龙诀&nbsp;&nbsp;水口在：
                    <select id=pljsx class="select" name=pljsx style="WIDTH:40px">
                        <option value = 0壬山丙向 selected>壬</option>
                        <option value = 1子山午向 >子</option>
                        <option value = 2癸山丁向 >癸</option>
                        <option value = 3丑山未向 >丑</option>
                        <option value = 4艮山坤向 >艮</option>
                        <option value = 5寅山申向 >寅</option>
                        <option value = 6甲山庚向 >甲</option>
                        <option value = 7卯山酉向 >卯</option>
                        <option value = 8乙山辛向 >乙</option>
                        <option value = 9辰山戌向 >辰</option>
                        <option value = 10巽山乾向 >巽</option>
                        <option value = 11已山亥向 >已</option>
                        <option value = 12丙山壬向 >丙</option>
                        <option value = 13午山子向 >午</option>
                        <option value = 14丁山癸向 >丁</option>
                        <option value = 15未山丑向 >未</option>
                        <option value = 16坤山艮向 >坤</option>
                        <option value = 17申山寅向 >申</option>
                        <option value = 18庚山甲向 >庚</option>
                        <option value = 19酉山卯向 >酉</option>
                        <option value = 20辛山乙向 >辛</option>
                        <option value = 21戌山辰向 >戌</option>
                        <option value = 22乾山巽向 >乾</option>
                        <option value = 23亥山已向 >亥</option>
                    </select>
                </dd>

                <dd class="form">

                    选择
                    <input name="mingua" type="checkbox" id="mingua" value="1">
                    流年、流月、命卦&nbsp;&nbsp;流年
                    <select name="year" class="select" id="year">
                        <?php $yea=date("Y");
                                            for($i=0;$i<=100;$i++){
                                            echo "<option value=".($yea-$i).">".($yea-$i)."</option>";
                        }?></select>
                    流月：
                    <select class="select" name="month" id="month">

                        <?php
                                            $dz=array("子","丑","寅","卯","辰","巳","午","未","申","酉","戌","亥");
                                            for($i=1 ;$i<=12;$i++){
                                            $j=($i+1)% 12;
                                            echo "<option value=".$i.">".$dz[$j]."月</option>";
                        }?></select>

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
    <h3>玄空飞星简介：</h3>
    <dl>
        <dd>
            <strong>「玄空飞星」</strong>玄就是时间，空就是空间，玄空学就是一门研究时间和空间为人造福的学问。
            　　 玄空学由三大体系构成：河图，洛书，八卦。
            　　 河图必须要记忆的是：一六为水，二七为火，三八为木，四九为金，五十为土。河图为先天。
            　　 洛书必须要记忆的是：戴九履一，左三右七，二四为肩，六八为足。洛书为后天。
            　　 八卦有先天八卦，有后天八卦，先天配河图，后天配洛书。先后天八卦的方位一定要记牢。
            　　 关于河图洛书八卦的内容很多书籍都有了，我就不多说了，但大家要记住的是，这些是最重要的基础，一定要充分了解，否则后面的东西就很难掌握了。
            　　 在玄空风水中要用到的是：坎水为一居正北，坤土为二居西南，震木为三居正东，巽木为四居东南，五为土居正中，乾金为六居西北，艮土为八居东北，离火为九居正南。
            　　 玄空风水学在实践运用中的四的步骤是：一，排龙；二，安星；三，析局；四，调整。
            　　 玄空风水的最大关键是：形理兼察。重理气也重峦头（在平洋主要是水法）。
            　　 往后我们就直接进入玄空之门，易学基础不够的学友，马上把河图、洛书、八卦的基本知识掌握，因为到后面就是这些东西的运用了。
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