<{include file='./h5/header.tpl'}>
<script>stepMenu();</script>
<div id="path">
    <{include file='./h5/public/path.tpl'}>
</div>


<h1 class="title"><{$data.title}></h1>
<div class="detail">

    <h2><{$data.title}>详解：</h2>
    <div class="h2_content">
        <{$data.content}>
    </div>
</div>

<div class="detail">
    <h3>生日花：</h3>
    <dl>
        <form name="sm" action="/index.php" method="post">
            <input type="hidden" name="ct" value="h5_haoma" />
            <input type="hidden" name="ac" value="shengrihua" />
            <dd class="form">

                出生日期（公历）&nbsp;

                <select name="m" class="select" id="m">
                    <?php for($i=1;$i<13;$i++){ ?>
                    <?php if($i==date('m',time())){$se='selected';}else{$se='';} ?>
                    <option value="<{if $i<10}>0<{/if}><?=$i?>" <?=$se?>><?=$i?></option>
                    <?php }?>
                </select> 月

                <select name="d" class="select" id="d">
                    <?php for($i=1;$i<32;$i++){ ?>
                    <?php if($i==date('d',time())){$se='selected';}else{$se='';} ?>
                    <option value="<{if $i<10}>0<{/if}><?=$i?>" <?=$se?>><?=$i?></option>
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
<{include file='./h5/public/news.tpl'}>
<div id="navi">
    <{include file='./h5/public/h5_nav.tpl'}>
</div>
<{include file='./h5/footer.tpl'}>
