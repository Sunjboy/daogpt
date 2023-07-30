<{include file='./h5/header.tpl'}>
<script>stepMenu();</script>
<div id="path">
    <{include file='./h5/public/path.tpl'}>
</div>

<div class="detail">
    <h3>生日书：</h3>
    <dl>
        <form name="sm" action="/index.php" method="post">
            <input type="hidden" name="ct" value="h5_haoma" />
            <input type="hidden" name="ac" value="shengrishu" />
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
            <div align="center"><input type="submit" name="submit" class="button" value="生日花"/></div>
        </form>
    </dl>
</div>
<div>
    <{include file='./h5/public/more_nav.tpl'}>
</div>

<div class="detail">
    <h3>生日书简介：</h3>
    <dl>
        <dd>
            <strong>「生日书」</strong>每个人的生日都是个迷，星相命理给我们生命的启示，不同的生日都会有不同的命运，生日总有神奇的暗示，凭出生日期的数字测出内在性格和潜在力量， 生日书是依据西洋星座分析写出来的。每个人的诞生，都是上天特别量身订制的，每个人的生日都是一种喜悦的经典。与此同时，每个人的生日都是个迷，星相命理给我们生命的启示，不同的生日都会有不同的命运。生日总有神奇的暗示，凭出生日期的数字测出内在性格和潜在力量。
        </dd>
    </dl>
</div>
<{include file='./h5/public/news.tpl'}>

<div id="navi">
    <{include file='./h5/public/h5_nav.tpl'}>
</div>

<{include file='./h5/footer.tpl'}>