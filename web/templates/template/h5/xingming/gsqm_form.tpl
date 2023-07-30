<{include file='./h5/header.tpl'}>
<script>stepMenu();</script>
<div id="path">
    <{include file='./h5/public/path.tpl'}>
</div>

<div class="detail">
    <h3>公司名称评分：</h3>
    <dl>
        <form name="qiming" action="/index.php"  method="post" id="qiming" onSubmit="javascript:return validateForm();">
            <input type="hidden" value="374" name="tid">
            <input type="hidden" value="gsqm" name="ac" />
            <input type="hidden" value="h5_xingming" name="ct" />
            <dd class="form">
                <strong>公司名称</strong>：<input class="ipt" type="text" name="name" maxLength=32 onBlur="if (value==''){value='请输入公司名称'}" onFocus="if (value=='请输入公司名称') {value=''}" value="吉祥三宝">
            </dd>

            <dd>
                <div align="center"><input type="submit" class="button" name="submit1" value="马上起名">
                    <input type="hidden" name="action" value="jieguo"></div>
            </dd>
            <script language="javascript">
                function validateForm()
                {
                    if (qiming.name.value=="吉祥三宝" || qiming.name.value=="")
                    {
                        alert("请输入公司名称！");
                        qiming.name.value="";
                        qiming.name.focus();
                        return false;
                    }
                }
            </script>
        </form>
    </dl>
</div>

<div class="namelist">
    <ul id="complay_list" class="xsdq clearfix">
        <li><a href="/xingming/gsqm/祥宝/" >祥宝</a></li>
        <li><a href="/xingming/gsqm/康圣/" >康圣</a></li>
        <li><a href="/xingming/gsqm/多进/" >多进</a></li>
        <li><a href="/xingming/gsqm/兴万/" >兴万</a></li>
        <li><a href="/xingming/gsqm/本干/" >本干</a></li>
        <li><a href="/xingming/gsqm/成盈/" >成盈</a></li>
        <li><a href="/xingming/gsqm/晶祥/" >晶祥</a></li>
        <li><a href="/xingming/gsqm/干复/" >干复</a></li>
        <li><a href="/xingming/gsqm/大本/" >大本</a></li>
        <li><a href="/xingming/gsqm/皇和/" >皇和</a></li>
        <li><a href="/xingming/gsqm/欣亚/" >欣亚</a></li>
        <li><a href="/xingming/gsqm/高大/" >高大</a></li>
        <li><a href="/xingming/gsqm/安进/" >安进</a></li>
        <li><a href="/xingming/gsqm/协长/" >协长</a></li>
        <li><a href="/xingming/gsqm/盛公/" >盛公</a></li>
        <li><a href="/xingming/gsqm/信多/" >信多</a></li>
        <li><a href="/xingming/gsqm/皇满/" >皇满</a></li>
        <li><a href="/xingming/gsqm/多茂/" >多茂</a></li>
        <li><a href="/xingming/gsqm/兴义/" >兴义</a></li>
        <li><a href="/xingming/gsqm/万安/" >万安</a></li>
        <li><a href="/xingming/gsqm/成恒/" >成恒</a></li>
        <li><a href="/xingming/gsqm/金谦/" >金谦</a></li>
        <li><a href="/xingming/gsqm/宝祥/" >宝祥</a></li>
        <li><a href="/xingming/gsqm/欣满/" >欣满</a></li>
        <li><a href="/xingming/gsqm/圣旺/" >圣旺</a></li>
        <li><a href="/xingming/gsqm/吉亨弘/" >吉亨弘</a></li>
        <li><a href="/xingming/gsqm/辉公贵/" >辉公贵</a></li>
        <li><a href="/xingming/gsqm/本复兴/" >本复兴</a></li>
        <li><a href="/xingming/gsqm/仁巨厚/" >仁巨厚</a></li>
        <li><a href="/xingming/gsqm/新大谦/" >新大谦</a></li>
        <li><a href="/xingming/gsqm/禄千裕/" >禄千裕</a></li>
        <li><a href="/xingming/gsqm/吉浩辉/" >吉浩辉</a></li>
        <li><a href="/xingming/gsqm/盈长亚/" >盈长亚</a></li>
        <li><a href="/xingming/gsqm/全千寿/" >全千寿</a></li>
        <li><a href="/xingming/gsqm/安吉美/" >安吉美</a></li>
        <li><a href="/xingming/gsqm/兴润本/" >兴润本</a></li>
        <li><a href="/xingming/gsqm/中本长/" >中本长</a></li>
        <li><a href="/xingming/gsqm/凯裕聚/" >凯裕聚</a></li>
        <li><a href="/xingming/gsqm/弘耀宏/" >弘耀宏</a></li>
        <li><a href="/xingming/gsqm/凯辉宝/" >凯辉宝</a></li>
        <li><a href="/xingming/gsqm/巨汇伟/" >巨汇伟</a></li>
        <li><a href="/xingming/gsqm/高高辉/" >高高辉</a></li>
    </ul>

</div>
<div>
    <{include file='./h5/public/more_nav.tpl'}>
</div>
<div class="detail">
    <h3>免费起名简介：</h3>
    <dl>
        <dd>
            <strong>「<a href="/xingming/xmfx/">神算网名称测试</a>」</strong>为您的企业、公司名称评分。名字是一个符号不假，但它却是一个非常特别、极其重要的符号。详细名字评分分析还须要配合个人八字五行匹配，名字评分信则灵不信则不灵。请在下面输入你要测试的名称进行<a href="/xingming/xmfx/">评分测试</a>吧！
        </dd>
    </dl>
</div>
<{include file='./h5/public/news.tpl'}>

<div id="navi">
    <{include file='./h5/public/h5_nav.tpl'}>
</div>
<{include file='./index/footer.tpl'}>