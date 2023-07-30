<{include file='./h5/header.tpl'}>
<script>stepMenu();</script>
<div id="path">
    <{include file='./h5/public/path.tpl'}>
</div>
<form name=form1 action="/index.php" method="post">
    <input type="hidden" name="ct" value="h5_zgjm">
    <input type="hidden" name="ac" value="search">

    <div id="se_wrap">

        <div id="se_inner">

            <input type="text" name="q" maxLength=32 class="se-input" onBlur="if (value==''){value='请输入梦见了什么'}" onFocus="if (value=='请输入梦见了什么') {value=''}" value="请输入梦见了什么">

            <div id="cross"></div>

        </div>

        <input id="se_bn" type="submit" name="submit1" value="解梦">

    </div>

</form>
<h1 class="title"><{$data.title}></h1>
<div class="detail">

    <div class="bd">
        <div class="mod_zodiac_txt">
            <div class="list">

                <{foreach from=$s_tid item=v}>
                <a href="<{$web_url}><{$v.extra}>" class="<{if $v.id==$seo.id}>current<{/if}>"><{$v.name}></a>
                <{/foreach}>

            </div>
        </div>

        <{$data.content}>
    </div>

</div>

<{include file='./h5/public/news.tpl'}>
<div id="navi">
    <{include file='./h5/public/h5_nav.tpl'}>
</div>
<{include file='./h5/footer.tpl'}>
