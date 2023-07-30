<{include file='./h5/header.tpl'}>
<script>stepMenu();</script>
<div style="padding-top:55px">
    <form name=form1 action="/index.php" method="post">
    <input type="hidden" name="ct" value="h5_zgjm" />
    <input type="hidden" name="ac" value="search" />
        <div id="se_wrap">
            <div id="se_inner">
                <input type="text" name="q" maxLength=32 class="se-input" onBlur="if (value==''){value='请输入梦见了什么'}" onFocus="if (value=='请输入梦见了什么') {value=''}" value="请输入梦见了什么">
                <div id="cross"></div>
            </div>
            <input id="se_bn" type="submit" name="submit1" value="解梦">
        </div>
    </form>
</div>
<div id="navi">


	<{foreach from=$public_hand_data.class_array item=v key=k}>
    <dl class="mod_dl">
        <dt><a href="<{$v.extra}>"><{$v.name}></a></dt>
        <dd>
            <ul class="clearfix">
            	<{foreach from=$v.son item=vs}>
					<li><a href="/<{$vs.extra}>" title="<{$vs.name}>"><{if $vs.shownames!=''}><{$vs.shownames}><{else}><{$vs.name}><{/if}></a></li>
				<{/foreach}>
            </ul>
        </dd>
    </dl>
    <{/foreach}>
    <div class="clear"></div>
</div>

<div class="detail">
    <h3><a href="/xingzuo/">12星座今日运势：</a></h3>
    <dl>
        <li>
            <a href="xingzuo/baiyang/" title="白羊座今日运势">白羊</a> &nbsp;
            <a href="xingzuo/jinniu/" title="金牛座今日运势">金牛</a> &nbsp;
            <a href="xingzuo/shuangzi/" title="双子座今日运势">双子</a> &nbsp;
            <a href="xingzuo/juxie/" title="巨蟹座今日运势">巨蟹</a> &nbsp;
            <a href="xingzuo/shizi/" title="狮子座今日运势">狮子</a> &nbsp;
            <a href="xingzuo/chunv/" title="处女座今日运势">处女</a></li>
        <li>
            <a href="xingzuo/tiancheng/" title="天秤座今日运势">天秤</a> &nbsp;
            <a href="xingzuo/tianxie/" title="天蝎座今日运势">天蝎</a> &nbsp;
            <a href="xingzuo/sheshou/" title="射手座今日运势">射手</a> &nbsp;
            <a href="xingzuo/mojie/" title="魔羯座今日运势">魔羯</a> &nbsp;
            <a href="xingzuo/shuiping/" title="水瓶座今日运势">水瓶</a> &nbsp;
            <a href="xingzuo/shuangyu/" title="双鱼座今日运势">双鱼</a></dd>
        </li>
</div>
<div class="detail">
    <h3><a href="/zgjm/">今日网友梦境：</a></h3>
    <dl>
        <{foreach from=$zgjm_new_data item=v}>
        <li><a href="/zgjm/show-<{$v.id}>.html" class="inlink"><{$v.title}></a></li>
        <{/foreach}>
    </dl>
</div>
<div class="detail">
    <h3>姓名测试打分：</h3>
    <dl>
        <form name="form1" action="/index.php"  method="post">
        <input type="hidden" name="ac" value="xmfx" />
        <input type="hidden" name="ct" value="h5_xingming" />
        <input type="hidden" value="371" name="tid">
            <dd class="form">
                <strong>姓名</strong>：<input class="ipt" type="text" name="name" id="wd" maxLength=32 onBlur="if (value==''){value='请输入姓名'}" onFocus="if (value=='请输入姓名') {value=''}" value="请输入姓名">
            </dd>
            <dd>
                <div align="center">
                    <input type="submit" name="submit" class="button" value="马上测试" />
                    <input type="hidden" name="action" value="jieguo">
                </div>
            </dd>
    </dl>
</div>
<{include file='./h5/public/news.tpl'}>

<{include file='./h5/footer.tpl'}>