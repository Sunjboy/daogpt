<{include file='./h5/header.tpl'}>
<script>stepMenu();</script>

<div id="path">
    <{include file='./h5/public/path.tpl'}>
</div>

<h1 class="title">星盘测试（神算网）系统</h1>

<div class="detail">

    <h2><{$info.name}>的六壬排盘分析：</h2>

    <div class="h2_content">

        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" id="paipanTable">
            <tbody>

            <tr>
                <td class="new" style="text-align:center;"><strong>姓名：</strong><{$name}> <strong>出生年:</strong><{$birthyear}><strong> 性别：</strong><{$sex}> </td>
            </tr>

            <tr>
                <td class="new"><b style="text-align:center;"><{$data.title}>：</b>
                    <BR>
                    <{$data.content}>
                    <br>
                </td>
            </tr>

        </table>


    </div>

</div>

<div align="center">
    <a class="button" href="/paipan/xingpan/">重新测算</a>
</div>

<div>
    <{include file='./h5/public/more_nav.tpl'}>
</div>

<{include file='./h5/public/news.tpl'}>

<div id="navi">
    <{include file='./h5/public/h5_nav.tpl'}>
</div>

<{include file='./h5/footer.tpl'}>