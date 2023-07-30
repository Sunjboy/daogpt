<{include file='./h5/header.tpl'}>
<script>stepMenu();</script>

<div id="path">
<{include file='./h5/public/path.tpl'}>
</div>

<h1 class="title"><{$cookies.xingming.xing}><{$cookies.xingming.ming}>的八字测名算命结果</h1>

<div class="detail">

    <dl>

        <dd></dd>

        <h2>当前算命者信息</h2>

        <div class="h2_content">

            <p><span>姓名：<strong><{$cookies.xingming.xing}><{$cookies.xingming.ming}></strong> 年龄：<strong><{$cookies.nianling.nl}>岁</strong> 出生时间：<strong><{$cookies.nianling.y}>年<{$cookies.nianling.m}>月<{$cookies.nianling.d}>日<{$cookies.nianling.h}>时<{$cookies.nianling.i}>分</strong> 生肖：<strong><{$cookies.sx}></strong></span></p>

        </div>

        <h2><{$cookies.xingming.xing}><{$cookies.xingming.ming}>的五行八字分析：</h2>

        <div class="h2_content">

            <table width="100%" border="0" cellpadding="1" cellspacing="1" bgcolor="#ddd" style="margin-top:10px;">

                <tbody>

                <tr>

                    <td  width="100" align="center" bgcolor="#F5F8FD" class="suanming"><strong>公历生辰</strong></td>

                    <td  width="65" bgcolor="#F5F8FD" class="suanming"><{$cookies.nianling.y}>年</td>

                    <td  width="65" bgcolor="#F5F8FD" class="suanming"><{$cookies.nianling.m}>月</td>

                    <td  width="65" bgcolor="#F5F8FD" class="suanming"><{$cookies.nianling.d}>日</td>

                    <td  width="70" bgcolor="#F5F8FD" class="suanming"><{$cookies.nianling.h}>点</td>

                </tr>

                <tr>

                    <td align="center" bgcolor="#F5F8FD" class="suanming"><strong>农历生辰</strong></td>

                    <td bgcolor="#F5F8FD" class="suanming" ><{$cookies.jiuli.y}>年</td>

                    <td bgcolor="#F5F8FD" class="suanming" ><{$cookies.jiuli.m}>月</td>

                    <td bgcolor="#F5F8FD" class="suanming" ><{$cookies.jiuli.d}>日</td>

                    <td bgcolor="#F5F8FD" class="suanming" ><{$cookies.jiuli.h}>时</td>

                </tr>

                <tr>

                    <td align="center" bgcolor="#F5F8FD" class="suanming"><strong>八字：</strong></td>

                    <td bgcolor="#F5F8FD" class="suanming" ><{$cookies.bazi.0}><{$cookies.bazi.1}>　</td>

                    <td bgcolor="#F5F8FD" class="suanming" ><{$cookies.bazi.2}><{$cookies.bazi.3}>　</td>

                    <td bgcolor="#F5F8FD" class="suanming" ><{$cookies.bazi.4}><{$cookies.bazi.5}>　</td>

                    <td bgcolor="#F5F8FD" class="suanming" ><{$cookies.bazi.6}><{$cookies.bazi.7}>　</td>

                </tr>

                <tr>

                    <td align="center" bgcolor="#F5F8FD" class="suanming"><strong>五行：</strong></td>

                    <td bgcolor="#F5F8FD" class="suanming" ><{$cookies.wh.0}><{$cookies.wh.1}></td>

                    <td bgcolor="#F5F8FD" class="suanming" ><{$cookies.wh.2}><{$cookies.wh.3}></td>

                    <td bgcolor="#F5F8FD" class="suanming" ><{$cookies.wh.4}><{$cookies.wh.5}></td>

                    <td bgcolor="#F5F8FD" class="suanming" ><{$cookies.wh.6}><{$cookies.wh.7}></td>

                </tr>

                <tr>

                    <td align="center" bgcolor="#F5F8FD" class="suanming"><strong>纳音：</strong></td>

                    <td bgcolor="#F5F8FD" class="suanming" ><{$nayin.0.layin}></td>

                    <td bgcolor="#F5F8FD" class="suanming" ><{$nayin.1.layin}></td>

                    <td bgcolor="#F5F8FD" class="suanming" ><{$nayin.2.layin}></td>

                    <td bgcolor="#F5F8FD" class="suanming" ><{$nayin.3.layin}></td>

                </tr>

                </tbody>

            </table>

            <p><strong>八字五行个数</strong> : <{$jmsh.jin}>个金，<{$jmsh.mu}>个木，<{$jmsh.shui}>个水，<{$jmsh.huo}>个火，<{$jmsh.tu}>个土</p>

            <p><strong>四季用神参考</strong> 日主天干<{$cookies.wh.4}>生于<{$cookies.siji}>季,<{$sjrs.sjrs}></p>

            <p><strong>穷通宝鉴调候用神参考 <{$cookies.bazi.4}><{$cookies.wh.4}>生于<{$cookies.bazi.3}>月，<{$qtbj.content}></strong></p>

            <p>本命属<{$cookies.sx}>，<{$nayin.0.layin}>命。<{$wang.wang}><{$wang.que}>；日主天干为<{$nayin.0.layin}><{$wang.wang}><{$wang.que}><{$cookies.bazi.4}>，生于<{$cookies.siji}>季。 </p>

        </div>

        <h2>性格分析：</h2>

        <div class="h2_content">

            <p>
                <{$rglm.xgfx}>
            </p>

        </div>


        <h2>爱情分析：</h2>

        <div class="h2_content">

            <p><{$rglm.aqfx}></p>

        </div>

        <h2>事业分析：</h2>

        <div class="h2_content">

            <p><{$rglm.syfx}></p>

        </div>

        <h2>财运分析：</h2>

        <div class="h2_content">

            <p><{$rglm.cyfx}></p>

        </div>

</div>
<div>
    <{include file='./h5/public/more_nav.tpl'}>
</div>

<{include file='./h5/public/news.tpl'}>

<!-- 将此代码放在适当的位置，建议在body结束前 -->

<div id="navi">
    <{include file='./h5/public/h5_nav.tpl'}>
</div>

<{include file='./h5/footer.tpl'}>
