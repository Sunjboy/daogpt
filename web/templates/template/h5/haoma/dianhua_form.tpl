<{include file='./h5/header.tpl'}>
<script>stepMenu();</script>
<div id="path">
    <{include file='./h5/public/path.tpl'}>
</div>
    <{if $word==''}>
        <h1 class="title">电话号码吉凶</h1>
    <{/if}>

    <{if $word!=''}>
        <h1 class="title">电话号码<{$word}>的测试结果</h1>

        <div class="detail">

            <dl>

                <h2>所查号码：</h2>

                <div class="h2_content"><{$word}></div>

                <div class="h2_content">

                    <p>吉凶分析：<{$haomajx.title}> <span class="red"><strong>(<{$haomajx.jx}>)</strong></span></p>

                </div>

                <div align="center">

                    <div class="bdlikebutton"></div>

                </div>

                <h2>主人个性：</h2>

                <div class="h2_content"><{$haomajx.content}> </div>

            </dl>

        </div>
    <{/if}>


<div class="detail">
    <dl>
        <dd class="form">人们经常随身携带的符号则具有特定的吉凶暗示力。我们的生活几乎不离号码，如电话号码、手机号码。手机号码吉凶预测其实包含有一定的吉凶数理，电话号码测吉凶看结果就像姓名会影响运势命运的意义是一样的。电话号码吉凶：气有旺衰之气，数亦有吉凶之数。电话号码吉凶预测，是根据周易数理预测之原理，来测试电话号码对主人的运势影响。</dd>
        <form name="form1" action="/index.php"  method="post">
            <input type="hidden" name="ac" value="dianhua">
            <input type="hidden" name="ct" value="h5_haoma">
            <dd class="form">
                请输入: <input type="text" name="word" maxLength=32 class="ipt" onBlur="if (value==''){value='电话号码,不需要加区号'}" onFocus="if (value=='电话号码,不需要加区号') {value=''}" value="电话号码,不需要加区号">
            </dd>
            <dd><center><input type="submit" name="submit" class="button" value="马上测试" />
                    <input type="hidden" value="test" name="action">  </center></dd>
        </form>
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