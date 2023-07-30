<{include file='./h5/header.tpl'}>
<script>stepMenu();</script>
<div id="path">
    <{include file='./h5/public/path.tpl'}>
</div>

<{if $qq.qq1}>
<div class="detail">
    <h3>QQ配对-情缘类型：</h3>
    <dl>
        <dt>双方QQ：<strong><{$qq.qq1}></strong>：<strong><{$qq.qq2}></strong></dt>
        <dd>关系揭密：<{$qqqy.intro}></dd>
    </dl>
</div>

<{/if}>

<div class="detail">
    <h3>QQ号码配对：</h3>

    <dl>

        <form name="s" action="/index.php" method="post">
            <input type="hidden" name="ac" value="qq" />
            <input type="hidden" name="ct" value="h5_peidui" />
            <input type="hidden" name="tid" value="384" />

            <dd class="form">QQ号码究竟赋予了我们不一样样的命运，输入QQ号码测试缘分，QQ号码缘分配对两个人又会擦出什么样的火花呢？想知道QQ好友跟我的关系？马上进行这个趣味小测试吧提前揭晓....QQ配对查询，可测算出两人的关系哦。准得有点儿邪哦，快来试试吧。传说中最准的爱情测试，准确率最高达98%，不信您可以试试！</dd>

            <dd class="form">男生QQ：<input class="ipt" type="text" id="wd1" name="qq1" maxlength="10" placeholder="男生QQ号码" value=""></dd>

            <dd class="form">女生QQ：<input class="ipt" type="text" id="wd2" name="qq2" maxlength="10" placeholder="女生QQ号码" value=""></dd>

            <dd class="form"><center>

                    <button id="vote_vote" class="button" type="submit">开始配对</button>

                    <input type="hidden" name="action" value="test">  </center>

            </dd>

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