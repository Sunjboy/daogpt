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

<!--head end-->

<div class="detail">

    <h3>最多人查询的解梦：</h3>

    <dl>

        <li><{foreach from=$m.zgjm_hot_tag item=v}><a <{if $v.blank==1}>target="_blank"<{/if}> href="<{$v.url}>" <{if $v.color==1}>class="cRed"<{elseif $v.color==2}>class="cGreen"<{elseif $v.color==3}>class="cBlue"<{/if}> title="<{$v.title}>"><{$v.name}></a><{/foreach}></li> </dl>

</div>

<div class="detail">

    <h3>八字百科按分类：</h3>

    <dl>

        <{foreach from=$self_tid item=v key=k}>

        <h4>【<{$v.name}>】<div class="fright"><a href="/list-<{$v.id}>.html">更多&gt;&gt;</a></div></h4>
        <div class="h4_content">
            <{section loop=$v.data_list.list name=news start=0 max=10}>
                <a href="<{$v.data_list.list[news].url}>" target="_blank"><{$v.data_list.list[news].title}></a>
            <{/section}>
        </div>
        <div class="line"></div>

        <{/foreach}>


    </dl>

</div>



<div class="detail">

    <h3>今日热门周公解梦：</h3>

    <dl>

        <{foreach from=$zgjm_new_data item=v}>
        <li><a href="/zgjm/show-<{$v.id}>.html" class="inlink"><{$v.title}></a></li>
<{/foreach}>



    </dl>

</div>

<div id="navi">
    <{include file='./h5/public/h5_nav.tpl'}>
</div>
<{include file='./h5/footer.tpl'}>