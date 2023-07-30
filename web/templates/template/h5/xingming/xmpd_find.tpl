<{include file='./h5/header.tpl'}>
<script>stepMenu();</script>
<div id="path">
    <{include file='./h5/public/path.tpl'}>
</div>
<h1 class="title"><{$ming}>名称评分</h1>
<div class="detail">
    <div class="remark center">配对指数 &nbsp; 来源：神算网</div>

    <dd>
        <strong><p><strong>经过分析，[<{$one_arr.name1}>]和[<{$two_arr.name2}>]的姓名配对评分如下：</strong><span class="cRed"><{$two_arr.zf}>分</span> &nbsp;</p>
        <{if $one_arr.sex1==$two.sex2}>
        <font color=red>本站是按中国民俗学的一些测算方法来计算的，暂时不支持同性缘份的测试</font>
        <{else}>
            <p class="green">
            <{if $two_arr.zf<60}>
            你们的姓名五格可能不是太合，不过八字配合所起的作用更大，另外彼此的努力也会让你们改善关系，记住：事在人为！
            <{elseif $two_arr.zf>60 && $two_arr.zf<70}>
            你们的姓名五格相合程度马马虎虎，不过八字配合所起的作用更大，继续努力改善关系，会对你们的关系有帮助的！
            <{elseif $two_arr.zf>70 && $two_arr.zf<80}>
            你们的姓名五格相合程度还不错哟！
            <{elseif $two_arr.zf>80 && $two_arr.zf<90}>
            你们的姓名五格相合程度相当棒！
            <{else}>
            你们的姓名五格相合程度太棒了！！恭喜！
            <{/if}>
            <{if $one_arr.name1==$two_arr.name2}>
                <br /><font color=#0000ff>^_^ 你们俩同名同姓嘛，真巧哟！</font>
            <{/if}>
            </p>
        <{/if}>
        <p><a href="/xingming/qiming/" style="color:red;">若想改名,查看起名大全>></a></p>

    </dd>



    <h2><{$x1arr.nxing1}><{$x1arr.nxing2}><{$x1arr.ming1}><{$x1arr.ming2}>的信息:</h2>


    <div class="h2_content">

        <table width="100%" border="0" cellpadding="1" cellspacing="1" bgcolor="#ddd" style="margin-top:10px;">

            <tbody>


            <tr>

                <td align="center" bgcolor="#F5F8FD" class="suanming"><strong>五格：</strong></td>

                <td bgcolor="#F5F8FD" class="suanming" >天格:<{$tdrh_ge_arr.tiange1}> (<{$tdrh_ge_arr.tgsancai}>)</td>

                <td bgcolor="#F5F8FD" class="suanming" >人格:<{$tdrh_ge_arr.renge1}> (<{$tdrh_ge_arr.renge1_sancai133}>)</td>

                <td bgcolor="#F5F8FD" class="suanming" >地格:<{$tdrh_ge_arr.dige1}> (<{$tdrh_ge_arr.dige1_sancai133}>) </td>

                <td bgcolor="#F5F8FD" class="suanming" >外格:<{$tdrh_ge_arr.waige1}> (<{$tdrh_ge_arr.waige1_sancai133}>)<br />总格 >> <{$tdrh_ge_arr.zhongge1}> (<{$tdrh_ge_arr.zhongge1_sancai133}>) &nbsp;</td>

            </tr>

            </tbody>

        </table>

    </div>


    <h2><{$one_arr.name1}>的性格分析：</h2>

    <div class="h2_content">
        <span class="brown"><strong>姓名：<{$one_arr.name1}>  性别：<{$one_arr.sex1}>:</strong></span>
        <p><{$one_arr.xg1}></p>

    </div>


    <hr>


    <h2><{$two_arr.name2}>的信息:</h2>


    <div class="h2_content">

        <table width="100%" border="0" cellpadding="1" cellspacing="1" bgcolor="#ddd" style="margin-top:10px;">

            <tbody>


            <tr>

                <td align="center" bgcolor="#F5F8FD" class="suanming"><strong>五格：</strong></td>

                <td bgcolor="#F5F8FD" class="suanming" >天格:<{$tdrh2_ge_arr.ntiange1}> (<{$tdrh2_ge_arr.tg2sancai}>)</td>

                <td bgcolor="#F5F8FD" class="suanming" >人格:<{$tdrh2_ge_arr.nrenge1}> (<{$tdrh2_ge_arr.nrenge1_sancai133}>)</td>

                <td bgcolor="#F5F8FD" class="suanming" >地格:<{$tdrh2_ge_arr.ndige1}> (<{$tdrh2_ge_arr.ndige1_sancai133}>) </td>

                <td bgcolor="#F5F8FD" class="suanming" >外格:<{$tdrh2_ge_arr.nwaige1}> (<{$tdrh2_ge_arr.nwaige1_sancai133}>)<br />总格 >> <{$tdrh2_ge_arr.nzhongge1}> (<{$tdrh2_ge_arr.nzhongge1_sancai133}>) &nbsp;</td>

            </tr>

            </tbody>

        </table>

    </div>


    <h2><{$one_arr.name1}>的性格分析：</h2>

    <div class="h2_content">
        <span class="brown"><strong>姓名：<{$two_arr.name2}>  性别：<{$two_arr.sex2}>:</strong></span>
        <p><{$two_arr.xg1xx}></p>

    </div>


    <h2>八字姓名详批</h2>
    <div style="display: block;" id="fenxi">
        <div class="h2_content">
            <form name="qiming" action="/index.php"  method="post" id="qiming" onSubmit="javascript:return validateForm();">
                <input type="hidden" value="375" name="tid">
                <input type="hidden" value="xmpd" name="ac" />
                <input type="hidden" value="h5_xingming" name="ct" />

                <dd class="form">
                    <strong><img src="<{$web_url}>static/bazi/img/suanming/v2/boy_icon.png" alt="男人" width="10" class="item_imgIcon">男方姓名</strong>：<input class="ipt" type="text" name="name1" maxLength=32 onBlur="if (value==''){value='请输入姓氏'}" onFocus="if (value=='请输入姓氏') {value=''}" value="请输入姓氏">
                </dd>
                <dd class="form"><strong>性别</strong>：<input type="radio" name="sex1" id="sex1" value="男" checked/><label for="sex1">&nbsp;男</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="sex0" name="sex1" value="女" /><label for="sex0">&nbsp;女</label>
                </dd>
                <dd class="form">
                    <strong>名字</strong>：<input type="radio" name="xing1" id="num1" value="1" >
                    <label for="num1">单字</label>
                    <input name="num" type="radio" id="num2" value="2" checked>
                    <label for="num2">双字</label>
                    <input type="radio" name="num" id="num0" value="1" >
                    <label for="num0">不限</label>
                </dd>


                <dd class="form">
                    <strong><img src="<{$web_url}>static/bazi/img/suanming/v2/girl_icon.png" alt="女人" width="10" class="item_imgIcon">女方姓名</strong>：<input class="ipt" type="text" name="name2" maxLength=32 onBlur="if (value==''){value='请输入姓氏'}" onFocus="if (value=='请输入姓氏') {value=''}" value="请输入姓氏">
                </dd>
                <dd class="form"><strong>性别</strong>：<input type="radio" name="sex2" id="sex2" value="男" checked/><label for="sex1">&nbsp;男</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="sex0" name="sex2" value="女" /><label for="sex0">&nbsp;女</label>
                </dd>
                <dd class="form">
                    <strong>名字</strong>：<input type="radio" name="xing2" id="xing2" value="1" >
                    <label for="num1">单字</label>
                    <input name="num" type="radio" id="num2" value="2" checked>
                    <label for="num2">双字</label>
                    <input type="radio" name="num" id="num0" value="1" >
                    <label for="num0">不限</label>
                </dd>

                <dd>
                    <div align="center"><input type="submit" class="button" name="submit1" value="名字五格配对">
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
        </div>
    </div>

    <div>
        <{include file='./h5/public/more_nav.tpl'}>
    </div>


</div>

<{include file='./h5/public/news.tpl'}>

<div id="navi">
    <{include file='./h5/public/h5_nav.tpl'}>
</div>
<{include file='./h5/footer.tpl'}>