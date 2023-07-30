<{include file='./h5/header.tpl'}>
<script>stepMenu();</script>
<div id="path">
    <{include file='./h5/public/path.tpl'}>
</div>

<h1 class="title"><{$data.title}></h1>

<div class="detail">

    <dl>

        <dd class="sosuo_content">
            <div class="newsinfo mb10">时间：<{$data.uptime}> &nbsp; 来源：开运网 &nbsp; 关键词：<{$data.contentKeyword}></div>

            <{$data.content}>

        </dd>

        <div class="getpage">

            <div class="pager">
                <{$pageStr}>
            </div>

        </div>

    </dl>

</div>

<div>
    <{include file='./h5/public/more_nav.tpl'}>
</div>

<div class="detail">

    <h3><a href="/xingzuo/yunshi/">12星座明日运势：</a></h3>

    <dl>

        <li>

            <a href="/xingzuo/baiyang" title="白羊座运势">白羊</a> &nbsp;

            <a href="/xingzuo/jinniu" title="金牛座运势">金牛</a> &nbsp;

            <a href="/xingzuo/shuangzi" title="双子座运势">双子</a> &nbsp;

            <a href="/xingzuo/juxie" title="巨蟹座运势">巨蟹</a> &nbsp;

            <a href="/xingzuo/shizi" title="狮子座运势">狮子</a> &nbsp;

            <a href="/xingzuo/chunv" title="处女座运势">处女</a></li>

        <li>

            <a href="/xingzuo/tiancheng" title="天秤座运势">天秤</a> &nbsp;

            <a href="/xingzuo/tianxie" title="天蝎座运势">天蝎</a> &nbsp;

            <a href="/xingzuo/sheshou" title="射手座运势">射手</a> &nbsp;

            <a href="/xingzuo/mojie" title="魔羯座运势">魔羯</a> &nbsp;

            <a href="/xingzuo/shuiping" title="水瓶座运势">水瓶</a> &nbsp;

            <a href="/xingzuo/shuangyu" title="双鱼座运势">双鱼</a></dd>

        </li>

</div>

<{include file='./h5/public/news.tpl'}>

<div class="detail">

    <h3>你可能感兴趣的：</h3>

    <dl>
        <{foreach from=$hot_data item=v}>
        <li>
            <a href="show-<{$v.id}>.html" target="_blank"><{$v.title}></a>
        </li>
        <{/foreach}>
    </dl>

</div>
<div id="navi">
    <{include file='./h5/public/h5_nav.tpl'}>
</div>
<{include file='./h5/footer.tpl'}>