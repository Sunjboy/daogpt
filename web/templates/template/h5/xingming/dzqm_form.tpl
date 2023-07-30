<{include file='./h5/header.tpl'}>
<script>stepMenu();</script>
<div id="path">
    <{include file='./h5/public/path.tpl'}>
</div>

<div class="detail">
    <h3>定字起名：</h3>
    <dl>
        <form name="qiming" action="/index.php"  method="post" id="qiming" onSubmit="javascript:return validateForm();">
            <input type="hidden" value="373" name="tid">
            <input type="hidden" value="dzqm" name="ac" />
            <input type="hidden" value="h5_xingming" name="ct" />
            <dd class="form">
                <strong>姓氏</strong>：<input class="ipt" type="text" name="xing" maxLength=32 onBlur="if (value==''){value='请输入姓氏'}" onFocus="if (value=='请输入姓氏') {value=''}" value="王">
            </dd>
            <dd class="form"><strong>性别</strong>：<input type="radio" name="sex" id="sex1" value="1" /><label for="sex1">&nbsp;男</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="sex0" name="sex" value="0" checked/><label for="sex0">&nbsp;女</label>
            </dd>
            <dd class="form">
                <strong>定字</strong>：<input type="text" class="ipt" name="ming" id="ding" value="">
            </dd>
            <dd class="form">
                <strong>位置</strong>：<select name="dingzi" class="select">
                    <option value="1">中间字</option>
                    <option value="2">末尾字</option>
                </SELECT>
            </dd>
            <dd>
                <div align="center"><input type="submit" class="button" name="submit1" value="马上起名">
                    <input type="hidden" name="action" value="jieguo"></div>
            </dd>
            <script language="javascript">
                function validateForm()
                {
                    if (qiming.surname.value=="请输入姓氏" || qiming.surname.value=="")
                    {
                        alert("请输入姓氏！");
                        qiming.surname.value="";
                        qiming.surname.focus();
                        return false;
                    }
                    var reg=/[^\u4E00-\u9FA5]/g;
                    if(reg.test(qiming.surname.value))
                    {
                        alert("请您输入汉字！");
                        qiming.surname.focus();
                        return false;
                    }
                }
            </script>
        </form>
    </dl>
</div>
<div>
    <{include file='./h5/public/more_nav.tpl'}>
</div>
<div class="detail">
    <h3>免费起名简介：</h3>
    <dl>
        <dd>
            <strong>「定字起名」</strong>起名字既有一定的原则和方法，又有一些禁忌和容易陷入的误区，一个人的姓和名字都是没有的，从宝宝出来就要起名，姓是已经定好的，如果已经确定了一个字的情况，定第一个字起名，定第二个字起名，神算网为你推荐起名字大全，例如王姓家庭中已经确定了家谱中的一个中间字【星】，需要起【伍星星】【伍星月】【伍星鹏】这样的名字，或者已经确定了末尾字【轩】，需要起【伍星轩】【伍伍轩】【伍慧轩】这样的名字。
        </dd>
    </dl>
</div>

<{include file='./h5/public/news.tpl'}>

<div class="detail qmlist">
    <h3>中国姓名大全2016年最新版：</h3>
    <dl>
        <ul class="xsdq">

            <{foreach from=$xinglist item=v key=k}>
            <{if $k==0}>
            <li>
            <{/if}>
            <a href="/xingming/qiming/list-<{$v.id}>-0-0-1.html"><{$v.xing}></a>
            <{if ($k+1)%4==0 && $k!=195 && $k!=0}>
            </li><li>
            <{/if}>
            <{if $k==195}>
            </li>
            <{/if}>
            <{/foreach}>
        </ul>
    </dl>
</div>

<div id="navi">
    <{include file='./h5/public/h5_nav.tpl'}>
</div>
<{include file='./index/footer.tpl'}>