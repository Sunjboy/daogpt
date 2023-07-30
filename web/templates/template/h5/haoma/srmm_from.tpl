<{include file='./h5/header.tpl'}>
<script>stepMenu();</script>
<div id="path">
    <{include file='./h5/public/path.tpl'}>
</div>

<div class="detail">
    <h3>生日密码：</h3>
    <dl>
        <form name="sm" action="/index.php" method="post">
            <input type="hidden" name="ct" value="h5_haoma" />
            <input type="hidden" name="ac" value="shengrimima" />
            <input type="hidden" name="tid" value="394" />
            <dd class="form">

                出生日期（公历）&nbsp;

                <select name="m" class="select" id="m">
                    <?php for($i=1;$i<13;$i++){ ?>
                    <?php if($i==date('m',time())){$se='selected';}else{$se='';} ?>
                    <option value="<?=$i?>" <?=$se?>><?=$i?></option>
                    <?php }?>
                </select> 月

                <select name="d" class="select" id="d">
                    <?php for($i=1;$i<32;$i++){ ?>
                    <?php if($i==date('d',time())){$se='selected';}else{$se='';} ?>
                    <option value="<?=$i?>" <?=$se?>><?=$i?></option>
                    <?php }?>
                </select> 日

            </dd>
            <div align="center"><input type="submit" name="submit" class="button" value="生日密码"/></div>
        </form>
    </dl>
</div>
<div>
    <{include file='./h5/public/more_nav.tpl'}>
</div>

<div class="detail">
    <h3>星座配对简介：</h3>
    <dl>
        <dd><strong>「生日密码」</strong><p>每个人的生日都是个迷，星相命理给我们生命的启示，不同的生日都会有不同的命运，生日总有神奇的暗示，凭出生日期的数字测出内在性格和潜在力量， 让我们来帮你揭开"生日密码"的神秘面纱，从另一个方面来看你我他/她，让这一切变 得不再神秘，你我他/她的生日密码尽在其中……</p>
            <p>完整的生日密码解析，带你全面了解自己的个性潜质，预测你未来的运势发展！</p>
            <p>生日密码与占星术有着很大的联系。了解占星术后，会了解生日密码的。但无论如何，命运掌握在自己手上，需要有则改之，无则加勉。</p>
            <p>因为生日密码和星座这些都是从外国传入中国的，而阴历是中国特有得纪元法，因此生日密码和星座等所指的都是阳历。</p></dd>
    </dl>
</div>
<{include file='./h5/public/news.tpl'}>

<div id="navi">
    <{include file='./h5/public/h5_nav.tpl'}>
</div>

<{include file='./h5/footer.tpl'}>