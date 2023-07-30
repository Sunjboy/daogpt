<{include file='./h5/header.tpl'}>
<script>stepMenu();</script>
<div id="path">
    <{include file='./h5/public/path.tpl'}>
</div>
<{if $word==''}>
    <h1 class="title">QQ号码吉凶</h1>
<{/if}>

<{if $word!=''}>

    <h1 class="title">QQ号码<{$word}>的测试结果</h1>

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
        <dd class="form">
            QQ号码吉凶：QQ已经成为网民们必不可少的通讯工具，号码测吉凶，查看你的QQ号给你带来的性格暗示和影响，对你的QQ号码评估！
            人们经常随身携带的符号则具有特定的吉凶暗示力。我们的生活几乎不离号码，QQ号码、Q号码凶吉预测其实包含有一定的吉凶数理，电话号码测吉凶看结果就像姓名会影响运势命运的意义是一样的
        </dd>
        <form name="form1" action="/index.php"  method="post">
            <input type="hidden" name="ac" value="qq">
            <input type="hidden" name="ct" value="h5_haoma">
            <dd class="form">
                请输入: <input type="text" name="word" maxLength=32 class="ipt" onBlur="if (value==''){value='qq号码'}" onFocus="if (value=='qq号码') {value=''}" value="qq号码">
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