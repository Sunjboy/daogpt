<{include file='./h5/header.tpl'}>
<script>stepMenu();</script>
<div id="path">
    <{include file='./h5/public/path.tpl'}>
</div>

<{if $t1!=''}>
    <div class="detail">
        <h2>生肖<{$t1}>男生和<{$t2}>女生的缘分：</h2>
        <p><{$info.shorttxt}></p>
        <p><{$info.content}></p>
    </div>

    <{/if}>

<div class="detail">
    <h3>生肖血型配对：</h3>
    <dl>
        <dd class="form">生肖血型配对是指根据自己的生肖（血型）和恋人的血型（生肖）来大致分析下双方的性格特征，并给出两人的速配指数以及性格方面的相关建议和提醒。</dd>
        <form name="sm" action="/index.php" method="post">
            <input type="hidden" name="ac" value="shengxiaoxuexing" />
            <input type="hidden" name="ct" value="h5_peidui" />
            <input type="hidden" name="tid" value="462" />
            <div align="center">
                <select id="xz1" name="t1" class="select">
                    <option selected="" value="鼠">鼠</option>

                    <option value="牛">牛</option>

                    <option value="虎">虎</option>

                    <option value="兔">兔</option>

                    <option value="龙">龙</option>

                    <option value="蛇">蛇</option>

                    <option value="马">马</option>

                    <option value="羊">羊</option>

                    <option value="猴">猴</option>

                    <option value="鸡">鸡</option>

                    <option value="狗">狗</option>

                    <option value="猪">猪</option>
                </select>
                配 <select id="xz2" name="t2" class="select">
                    <option value="AB型">AB型</option>

                    <option value="A型">A型</option>

                    <option value="B型">B型</option>

                    <option value="O型">O型</option>
                </select></div>
            <div align="center"><input type="submit" name="submit" class="button" value="马上配对"/></div>
        </form>
    </dl>
</div>
<div>
    <{include file='./h5/public/more_nav.tpl'}>
</div>

<div class="detail">
    <h3>生肖血型配对简介：</h3>
    <dl>
        <dd>星座于生肖，相信大家一定不会陌生。每个星座、每个生肖都有属于自己的特性，所以我们并不是与所有的星座生肖组合般配，星座与生肖之间又有着怎么样的关系呢？</dd>
    </dl>
</div>
<{include file='./h5/public/news.tpl'}>

<div id="navi">
    <{include file='./h5/public/h5_nav.tpl'}>
</div>

<{include file='./h5/footer.tpl'}>