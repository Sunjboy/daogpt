<{include file='./h5/header.tpl'}>
<script>stepMenu();</script>
<div id="path">
    <{include file='./h5/public/path.tpl'}>
</div>


<{if $sx1}>

    <div class="detail">
        <h2><{$sx1}>和<{$sx2}>的缘分：</h2>
        <p><{$sx.shorttxt}></p>
        <p><{$sx.content}></p>
    </div>

    <{/if}>

<div class="detail">
    <h3>生肖配对：</h3>
    <dl>
        <dd class="form">十二生肖配对是依据古籍中的生肖五行理论衍生而来，生肖五行之间相生相克。生肖相生的属相配对自然一路花好月圆，属相相克的配对组合就需要披荆斩棘结伴而行。希望了解一下你们的爱情姻缘路？输入你们的生肖属相信息在线速配一下吧。</dd>
        <form name="sm" action="/index.php" method="post">
            <input type="hidden" name="ac" value="shengxiao" />
            <input type="hidden" name="ct" value="h5_peidui" />
            <input type="hidden" name="tid" value="386" />
            <dd class="form">
                男生属相：<select id="sx1" name="sx1" class="select">
                    <option value="鼠">鼠 (1960、1972、1984)</option>
                    <option value="牛">牛 (1961、1973、1985)</option>
                    <option value="虎">虎 (1962、1974、1986)</option>
                    <option value="兔">兔 (1963、1975、1987)</option>
                    <option value="龙">龙 (1964、1976、1988)</option>
                    <option value="蛇">蛇 (1965、1977、1989)</option>
                    <option value="马">马 (1966、1978、1990)</option>
                    <option value="羊">羊 (1967、1979、1991)</option>
                    <option value="猴">猴 (1968、1980、1992)</option>
                    <option value="鸡">鸡 (1969、1981、1993)</option>
                    <option value="狗">狗 (1970、1982、1994)</option>
                    <option value="猪">猪 (1971、1983、1995)</option></select> </dd>
            <dd class="form">
                女生属相：<select id="sx2" name="sx2" class="select">
                    <option value="鼠">鼠 (1960、1972、1984)</option>
                    <option value="牛">牛 (1961、1973、1985)</option>
                    <option value="虎">虎 (1962、1974、1986)</option>
                    <option value="兔">兔 (1963、1975、1987)</option>
                    <option value="龙">龙 (1964、1976、1988)</option>
                    <option value="蛇">蛇 (1965、1977、1989)</option>
                    <option value="马">马 (1966、1978、1990)</option>
                    <option value="羊">羊 (1967、1979、1991)</option>
                    <option value="猴">猴 (1968、1980、1992)</option>
                    <option value="鸡">鸡 (1969、1981、1993)</option>
                    <option value="狗">狗 (1970、1982、1994)</option>
                    <option value="猪">猪 (1971、1983、1995)</option></select></dd>
            <div align="center"><input type="submit" name="submit" class="button" value="马上配对"/></div>
        </form>
    </dl>
</div>
<div>
    <{include file='./h5/public/more_nav.tpl'}>
</div>

<div class="detail">
    <h3>男鼠(1960、1972、1984)</h3>
    <dl><li>
            <a href="/shengxiao/peidui-shu-shu.html">女鼠</a>&nbsp; <a href="/shengxiao/peidui-shu-niu.html">女牛</a>&nbsp; <a href="/shengxiao/peidui-shu-hu.html">女虎</a>&nbsp; <a href="/shengxiao/peidui-shu-tu.html">女兔</a>&nbsp; <a href="/shengxiao/peidui-shu-long.html">女龙</a>&nbsp; <a href="/shengxiao/peidui-shu-she.html">女蛇</a></li><li> <a href="/shengxiao/peidui-shu-ma.html">女马</a>&nbsp; <a href="/shengxiao/peidui-shu-yang.html">女羊</a>&nbsp; <a href="/shengxiao/peidui-shu-hou.html">女猴</a>&nbsp; <a href="/shengxiao/peidui-shu-ji.html">女鸡</a>&nbsp; <a href="/shengxiao/peidui-shu-gou.html">女狗</a>&nbsp; <a href="/shengxiao/peidui-shu-zhu.html">女猪</a>&nbsp; </li></dl></div>
<div class="detail">
    <h3>男牛(1961、1973、1985)</h3>
    <dl><li>
            <a href="/shengxiao/peidui-niu-shu.html">女鼠</a>&nbsp; <a href="/shengxiao/peidui-niu-niu.html">女牛</a>&nbsp; <a href="/shengxiao/peidui-niu-hu.html">女虎</a>&nbsp; <a href="/shengxiao/peidui-niu-tu.html">女兔</a>&nbsp; <a href="/shengxiao/peidui-niu-long.html">女龙</a>&nbsp; <a href="/shengxiao/peidui-niu-she.html">女蛇</a></li><li> <a href="/shengxiao/peidui-niu-ma.html">女马</a>&nbsp; <a href="/shengxiao/peidui-niu-yang.html">女羊</a>&nbsp; <a href="/shengxiao/peidui-niu-hou.html">女猴</a>&nbsp; <a href="/shengxiao/peidui-niu-ji.html">女鸡</a>&nbsp; <a href="/shengxiao/peidui-niu-gou.html">女狗</a>&nbsp; <a href="/shengxiao/peidui-niu-zhu.html">女猪</a>&nbsp; </li></dl></div>
<div class="detail">
    <h3>男虎(1962、1974、1986)</h3>
    <dl><li>
            <a href="/shengxiao/peidui-hu-shu.html">女鼠</a>&nbsp; <a href="/shengxiao/peidui-hu-niu.html">女牛</a>&nbsp; <a href="/shengxiao/peidui-hu-hu.html">女虎</a>&nbsp; <a href="/shengxiao/peidui-hu-tu.html">女兔</a>&nbsp; <a href="/shengxiao/peidui-hu-long.html">女龙</a>&nbsp; <a href="/shengxiao/peidui-hu-she.html">女蛇</a></li><li> <a href="/shengxiao/peidui-hu-ma.html">女马</a>&nbsp; <a href="/shengxiao/peidui-hu-yang.html">女羊</a>&nbsp; <a href="/shengxiao/peidui-hu-hou.html">女猴</a>&nbsp; <a href="/shengxiao/peidui-hu-ji.html">女鸡</a>&nbsp; <a href="/shengxiao/peidui-hu-gou.html">女狗</a>&nbsp; <a href="/shengxiao/peidui-hu-zhu.html">女猪</a>&nbsp; </li></dl></div>
<div class="detail">
    <h3>男兔(1963、1975、1987)</h3>
    <dl><li>
            <a href="/shengxiao/peidui-tu-shu.html">女鼠</a>&nbsp; <a href="/shengxiao/peidui-tu-niu.html">女牛</a>&nbsp; <a href="/shengxiao/peidui-tu-hu.html">女虎</a>&nbsp; <a href="/shengxiao/peidui-tu-tu.html">女兔</a>&nbsp; <a href="/shengxiao/peidui-tu-long.html">女龙</a>&nbsp; <a href="/shengxiao/peidui-tu-she.html">女蛇</a></li><li> <a href="/shengxiao/peidui-tu-ma.html">女马</a>&nbsp; <a href="/shengxiao/peidui-tu-yang.html">女羊</a>&nbsp; <a href="/shengxiao/peidui-tu-hou.html">女猴</a>&nbsp; <a href="/shengxiao/peidui-tu-ji.html">女鸡</a>&nbsp; <a href="/shengxiao/peidui-tu-gou.html">女狗</a>&nbsp; <a href="/shengxiao/peidui-tu-zhu.html">女猪</a>&nbsp; </li></dl></div>
<div class="detail">
    <h3>男龙(1964、1976、1988)</h3>
    <dl><li>
            <a href="/shengxiao/peidui-long-shu.html">女鼠</a>&nbsp; <a href="/shengxiao/peidui-long-niu.html">女牛</a>&nbsp; <a href="/shengxiao/peidui-long-hu.html">女虎</a>&nbsp; <a href="/shengxiao/peidui-long-tu.html">女兔</a>&nbsp; <a href="/shengxiao/peidui-long-long.html">女龙</a>&nbsp; <a href="/shengxiao/peidui-long-she.html">女蛇</a></li><li> <a href="/shengxiao/peidui-long-ma.html">女马</a>&nbsp; <a href="/shengxiao/peidui-long-yang.html">女羊</a>&nbsp; <a href="/shengxiao/peidui-long-hou.html">女猴</a>&nbsp; <a href="/shengxiao/peidui-long-ji.html">女鸡</a>&nbsp; <a href="/shengxiao/peidui-long-gou.html">女狗</a>&nbsp; <a href="/shengxiao/peidui-long-zhu.html">女猪</a>&nbsp; </li></dl></div>
<div class="detail">
    <h3>男蛇(1965、1977、1989)</h3>
    <dl><li>
            <a href="/shengxiao/peidui-she-shu.html">女鼠</a>&nbsp; <a href="/shengxiao/peidui-she-niu.html">女牛</a>&nbsp; <a href="/shengxiao/peidui-she-hu.html">女虎</a>&nbsp; <a href="/shengxiao/peidui-she-tu.html">女兔</a>&nbsp; <a href="/shengxiao/peidui-she-long.html">女龙</a>&nbsp; <a href="/shengxiao/peidui-she-she.html">女蛇</a></li><li> <a href="/shengxiao/peidui-she-ma.html">女马</a>&nbsp; <a href="/shengxiao/peidui-she-yang.html">女羊</a>&nbsp; <a href="/shengxiao/peidui-she-hou.html">女猴</a>&nbsp; <a href="/shengxiao/peidui-she-ji.html">女鸡</a>&nbsp; <a href="/shengxiao/peidui-she-gou.html">女狗</a>&nbsp; <a href="/shengxiao/peidui-she-zhu.html">女猪</a>&nbsp; </li></dl></div>
<div class="detail">
    <h3>男马(1966、1978、1990)</h3>
    <dl><li>
            <a href="/shengxiao/peidui-ma-shu.html">女鼠</a>&nbsp; <a href="/shengxiao/peidui-ma-niu.html">女牛</a>&nbsp; <a href="/shengxiao/peidui-ma-hu.html">女虎</a>&nbsp; <a href="/shengxiao/peidui-ma-tu.html">女兔</a>&nbsp; <a href="/shengxiao/peidui-ma-long.html">女龙</a>&nbsp; <a href="/shengxiao/peidui-ma-she.html">女蛇</a></li><li> <a href="/shengxiao/peidui-ma-ma.html">女马</a>&nbsp; <a href="/shengxiao/peidui-ma-yang.html">女羊</a>&nbsp; <a href="/shengxiao/peidui-ma-hou.html">女猴</a>&nbsp; <a href="/shengxiao/peidui-ma-ji.html">女鸡</a>&nbsp; <a href="/shengxiao/peidui-ma-gou.html">女狗</a>&nbsp; <a href="/shengxiao/peidui-ma-zhu.html">女猪</a>&nbsp; </li></dl></div>
<div class="detail">
    <h3>男羊(1967、1979、1991)</h3>
    <dl><li>
            <a href="/shengxiao/peidui-yang-shu.html">女鼠</a>&nbsp; <a href="/shengxiao/peidui-yang-niu.html">女牛</a>&nbsp; <a href="/shengxiao/peidui-yang-hu.html">女虎</a>&nbsp; <a href="/shengxiao/peidui-yang-tu.html">女兔</a>&nbsp; <a href="/shengxiao/peidui-yang-long.html">女龙</a>&nbsp; <a href="/shengxiao/peidui-yang-she.html">女蛇</a></li><li> <a href="/shengxiao/peidui-yang-ma.html">女马</a>&nbsp; <a href="/shengxiao/peidui-yang-yang.html">女羊</a>&nbsp; <a href="/shengxiao/peidui-yang-hou.html">女猴</a>&nbsp; <a href="/shengxiao/peidui-yang-ji.html">女鸡</a>&nbsp; <a href="/shengxiao/peidui-yang-gou.html">女狗</a>&nbsp; <a href="/shengxiao/peidui-yang-zhu.html">女猪</a>&nbsp; </li></dl></div>
<div class="detail">
    <h3>男猴(1968、1980、1992)</h3>
    <dl><li>
            <a href="/shengxiao/peidui-hou-shu.html">女鼠</a>&nbsp; <a href="/shengxiao/peidui-hou-niu.html">女牛</a>&nbsp; <a href="/shengxiao/peidui-hou-hu.html">女虎</a>&nbsp; <a href="/shengxiao/peidui-hou-tu.html">女兔</a>&nbsp; <a href="/shengxiao/peidui-hou-long.html">女龙</a>&nbsp; <a href="/shengxiao/peidui-hou-she.html">女蛇</a></li><li> <a href="/shengxiao/peidui-hou-ma.html">女马</a>&nbsp; <a href="/shengxiao/peidui-hou-yang.html">女羊</a>&nbsp; <a href="/shengxiao/peidui-hou-hou.html">女猴</a>&nbsp; <a href="/shengxiao/peidui-hou-ji.html">女鸡</a>&nbsp; <a href="/shengxiao/peidui-hou-gou.html">女狗</a>&nbsp; <a href="/shengxiao/peidui-hou-zhu.html">女猪</a>&nbsp; </li></dl></div>
<div class="detail">
    <h3>男鸡(1969、1981、1993)</h3>
    <dl><li>
            <a href="/shengxiao/peidui-ji-shu.html">女鼠</a>&nbsp; <a href="/shengxiao/peidui-ji-niu.html">女牛</a>&nbsp; <a href="/shengxiao/peidui-ji-hu.html">女虎</a>&nbsp; <a href="/shengxiao/peidui-ji-tu.html">女兔</a>&nbsp; <a href="/shengxiao/peidui-ji-long.html">女龙</a>&nbsp; <a href="/shengxiao/peidui-ji-she.html">女蛇</a></li><li> <a href="/shengxiao/peidui-ji-ma.html">女马</a>&nbsp; <a href="/shengxiao/peidui-ji-yang.html">女羊</a>&nbsp; <a href="/shengxiao/peidui-ji-hou.html">女猴</a>&nbsp; <a href="/shengxiao/peidui-ji-ji.html">女鸡</a>&nbsp; <a href="/shengxiao/peidui-ji-gou.html">女狗</a>&nbsp; <a href="/shengxiao/peidui-ji-zhu.html">女猪</a>&nbsp; </li></dl></div>
<div class="detail">
    <h3>男狗(1970、1982、1994)</h3>
    <dl><li>
            <a href="/shengxiao/peidui-gou-shu.html">女鼠</a>&nbsp; <a href="/shengxiao/peidui-gou-niu.html">女牛</a>&nbsp; <a href="/shengxiao/peidui-gou-hu.html">女虎</a>&nbsp; <a href="/shengxiao/peidui-gou-tu.html">女兔</a>&nbsp; <a href="/shengxiao/peidui-gou-long.html">女龙</a>&nbsp; <a href="/shengxiao/peidui-gou-she.html">女蛇</a></li><li> <a href="/shengxiao/peidui-gou-ma.html">女马</a>&nbsp; <a href="/shengxiao/peidui-gou-yang.html">女羊</a>&nbsp; <a href="/shengxiao/peidui-gou-hou.html">女猴</a>&nbsp; <a href="/shengxiao/peidui-gou-ji.html">女鸡</a>&nbsp; <a href="/shengxiao/peidui-gou-gou.html">女狗</a>&nbsp; <a href="/shengxiao/peidui-gou-zhu.html">女猪</a>&nbsp; </li></dl>
</div>
<div class="detail">
    <h3>男猪(1971、1983、1995)</h3>
    <dl><li>
            <a href="/shengxiao/peidui-zhu-shu.html">女鼠</a>&nbsp; <a href="/shengxiao/peidui-zhu-niu.html">女牛</a>&nbsp; <a href="/shengxiao/peidui-zhu-hu.html">女虎</a>&nbsp; <a href="/shengxiao/peidui-zhu-tu.html">女兔</a>&nbsp; <a href="/shengxiao/peidui-zhu-long.html">女龙</a>&nbsp; <a href="/shengxiao/peidui-zhu-she.html">女蛇</a></li><li> <a href="/shengxiao/peidui-zhu-ma.html">女马</a>&nbsp; <a href="/shengxiao/peidui-zhu-yang.html">女羊</a>&nbsp; <a href="/shengxiao/peidui-zhu-hou.html">女猴</a>&nbsp; <a href="/shengxiao/peidui-zhu-ji.html">女鸡</a>&nbsp; <a href="/shengxiao/peidui-zhu-gou.html">女狗</a>&nbsp; <a href="/shengxiao/peidui-zhu-zhu.html">女猪</a>&nbsp; </tr>
        </li></dl>
</div>
<{include file='./h5/public/news.tpl'}>

<div id="navi">
    <{include file='./h5/public/h5_nav.tpl'}>
</div>

<{include file='./h5/footer.tpl'}>