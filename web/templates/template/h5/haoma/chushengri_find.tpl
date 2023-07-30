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
    <h3>出生日：</h3>
    <p><strong>「出生日」</strong>命理分析是以一个人出生的日期来分析其一生的成就、姻缘、运势等。出生日期如何看你的天赋？出生日期如何透露你一生姻缘？神算网查看并解答你的出生日！</p>
    <dl>
        <form name="sm" action="/index.php" method="post">
            <input type="hidden" name="ct" value="h5_haoma" />
            <input type="hidden" name="ac" value="chushengri" />
            <dd class="form">

                出生日 &nbsp;

                <select name="d" class="select" id="d">
                    <?php for($i=1;$i<32;$i++){ ?>
                    <?php if($i==date('d',time())){$se='selected';}else{$se='';} ?>
                    <option value="<?=$i?>" <?=$se?>><?=$i?></option>
                    <?php }?>
                </select> 日

            </dd>
            <div align="center"><input type="submit" name="submit" class="button" value="出生日"/></div>
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