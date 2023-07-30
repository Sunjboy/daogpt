<{include file='./h5/header.tpl'}>
<script>stepMenu();</script>
<div id="path">
    <{include file='./h5/public/path.tpl'}>
</div>

<{if $qid}>
    <h1 class="title"><{$qian.qianming}></h1>
    <{else}>
    <h1 class="title">月老灵签</h1>
    <{/if}>

<div class="detail">
    <dl>

        <{if $qid!=''}>

        <!---->
        <h2>吉凶：</h2>

        <div class="h2_content"><{$qian.jx}>签</div>

        <div class="fright p10"><img border="0" alt="月老灵签第<{$qian.qid}>签" src="<{$web_url}><{$qian.img}>" width="160"/></div>

        <h2>解曰：</h2>

        <div class="h2_content"><{$qian.jie}></div>

        <h2>签语：</h2>

        <div class="h2_content"><{$qian.qy}></div>

        <div class="center mt10"><a href="/chouqian/"><img src="/static/img/shouye.gif" border="0"></a> &nbsp; <a href="/chouqian/yuelao/"><img src="/static/img/chongchou.gif" border="0"></a></div>
        <!---->
        <{/if}>

        <{if $rand!=''}>
        <div style="clear:both;text-align:center;">
            <span class="green">您刚抽了第 <strong class="cRed"><{$rand}></strong> 签！<br>请求指点的问题！再进行下一步...</span>

            <{if $gysmile!='4' && $clicknum<3}>

            <{if $clicknum==2}>

        <img src="<{$web_url}>static/bazi/img/suanming/good_cup.gif" />
            <{else}>
            <a href="/chouqian/yuelao/<{$clicknum+2}>/<{$rand}>"><img src="<{$web_url}>static/bazi/img/suanming/good_cup.gif" /></a>
            <{/if}>

            <p><span class="green">您掷出<{$clicknum+1}>次圣杯，请点击上图再次掷出！</span></p>


            <{if $clicknum==2}>
            <p><span class="green">恭喜，您连续掷出了三次圣杯，<a href="/chouqian/yuelao/4/<{$rand}>">请点这里察看签词！</a></span></p>
            <p><a href="/chouqian/yuelao/4/<{$rand}>"><img src="/static/img/chakan.gif" width="94" height="31" alt="查看签词" /></a></p>
            <{else}>
            <p class="last">需连续掷出三次圣杯，才是灵签！目前，您已经掷出<strong class="cRed"><{$clicknum+1}></strong>次</p>
            <p><a href="/chouqian/yuelao/<{$clicknum+2}>/<{$rand}>"> <img src="/static/img/qiuqian.gif" width="94" height="31" alt="开始抽签" /></a></p>
            <{/if}>

            <{else}>

            <p><a href="/chouqian/yuelao/"><img src="<{$web_url}>static/bazi/img/suanming/bad_cup.gif" alt="重新抽签" /></a></p><br />
        需连续掷出三次圣杯后，此签才算是灵签！<br />
            <span class="red">您掷出了笑杯，该签不灵，请重新抽签。</span><br /><br />
            <a href="/chouqian/yuelao/"><img src="/static/img/chongchou.gif" width="94" height="31" alt="重新抽签" /></a>
        <br /><br />
            <{/if}>
            </dov>

            <{/if}>

            <{if $qid=='' && $rand==''}>
            <div class="h2_content"><p>专业版月老灵签有100签，月老灵签为您提供解签，三种签的签文自古至今流传久远，各地观音灵签抽签略有不同。也有少数佛寺院使用这种签种观音灵签解签，首先要有一棵真诚的心态，闭上眼睛请求指点的爱情。如婚姻......所谓的心诚则灵啊，之后才开始。</p></div>
            <center>
                <a href="/chouqian/yuelao/1"><img id="lingqian" src="<{$web_url}>static/bazi/img/suanming/v2/qian.gif" width="86" /></a><br />
                <a href="/chouqian/yuelao/1"> <img src="/static/img/qiuqian.gif" width="94" height="31" alt="开始抽签" /></a>
                <br/>
                <span class="red"><b>试试：摇一摇手机</b></span>
            </center>
            <ul>
                <li>1. 抽签前先合手默念“月老灵签，指点迷经”三遍。</li>
                <li>2. 默念自己姓名、出生日期，年龄、现在居住地址。</li>
                <li>3. 请求指点事情，如：婚姻、爱情，恋人，流年，婚配，桃花运势……等。</li>
                <li>4. 点上面的签筒开始月老在线抽签！</li>
            </ul>
            <{/if}>

    </dl>


    <div>
        <{include file='./h5/public/more_nav.tpl'}>
    </div>

</div>
<{include file='./h5/public/news.tpl'}>
<div class="detail">
    <h3>月老灵签 共100签：</h3>
    <dl>
        <ul class="lingqian">
            <li><a href="/chouqian/yuelao/4/1/">第1签</a></li><li><a href="/chouqian/yuelao/4/2/">第2签</a></li><li><a href="/chouqian/yuelao/4/3/">第3签</a></li><li><a href="/chouqian/yuelao/4/4/">第4签</a></li><li><a href="/chouqian/yuelao/4/5/">第5签</a></li><li><a href="/chouqian/yuelao/4/6/">第6签</a></li><li><a href="/chouqian/yuelao/4/7/">第7签</a></li><li><a href="/chouqian/yuelao/4/8/">第8签</a></li><li><a href="/chouqian/yuelao/4/9/">第9签</a></li><li><a href="/chouqian/yuelao/4/10/">第10签</a></li><li><a href="/chouqian/yuelao/4/11/">第11签</a></li><li><a href="/chouqian/yuelao/4/12/">第12签</a></li><li><a href="/chouqian/yuelao/4/13/">第13签</a></li><li><a href="/chouqian/yuelao/4/14/">第14签</a></li><li><a href="/chouqian/yuelao/4/15/">第15签</a></li><li><a href="/chouqian/yuelao/4/16/">第16签</a></li><li><a href="/chouqian/yuelao/4/17/">第17签</a></li><li><a href="/chouqian/yuelao/4/18/">第18签</a></li><li><a href="/chouqian/yuelao/4/19/">第19签</a></li><li><a href="/chouqian/yuelao/4/20/">第20签</a></li><li><a href="/chouqian/yuelao/4/21/">第21签</a></li><li><a href="/chouqian/yuelao/4/22/">第22签</a></li><li><a href="/chouqian/yuelao/4/23/">第23签</a></li><li><a href="/chouqian/yuelao/4/24/">第24签</a></li><li><a href="/chouqian/yuelao/4/25/">第25签</a></li><li><a href="/chouqian/yuelao/4/26/">第26签</a></li><li><a href="/chouqian/yuelao/4/27/">第27签</a></li><li><a href="/chouqian/yuelao/4/28/">第28签</a></li><li><a href="/chouqian/yuelao/4/29/">第29签</a></li><li><a href="/chouqian/yuelao/4/30/">第30签</a></li><li><a href="/chouqian/yuelao/4/31/">第31签</a></li><li><a href="/chouqian/yuelao/4/32/">第32签</a></li><li><a href="/chouqian/yuelao/4/33/">第33签</a></li><li><a href="/chouqian/yuelao/4/34/">第34签</a></li><li><a href="/chouqian/yuelao/4/35/">第35签</a></li><li><a href="/chouqian/yuelao/4/36/">第36签</a></li><li><a href="/chouqian/yuelao/4/37/">第37签</a></li><li><a href="/chouqian/yuelao/4/38/">第38签</a></li><li><a href="/chouqian/yuelao/4/39/">第39签</a></li><li><a href="/chouqian/yuelao/4/40/">第40签</a></li><li><a href="/chouqian/yuelao/4/41/">第41签</a></li><li><a href="/chouqian/yuelao/4/42/">第42签</a></li><li><a href="/chouqian/yuelao/4/43/">第43签</a></li><li><a href="/chouqian/yuelao/4/44/">第44签</a></li><li><a href="/chouqian/yuelao/4/45/">第45签</a></li><li><a href="/chouqian/yuelao/4/46/">第46签</a></li><li><a href="/chouqian/yuelao/4/47/">第47签</a></li><li><a href="/chouqian/yuelao/4/48/">第48签</a></li><li><a href="/chouqian/yuelao/4/49/">第49签</a></li><li><a href="/chouqian/yuelao/4/50/">第50签</a></li><li><a href="/chouqian/yuelao/4/51/">第51签</a></li><li><a href="/chouqian/yuelao/4/52/">第52签</a></li><li><a href="/chouqian/yuelao/4/53/">第53签</a></li><li><a href="/chouqian/yuelao/4/54/">第54签</a></li><li><a href="/chouqian/yuelao/4/55/">第55签</a></li><li><a href="/chouqian/yuelao/4/56/">第56签</a></li><li><a href="/chouqian/yuelao/4/57/">第57签</a></li><li><a href="/chouqian/yuelao/4/58/">第58签</a></li><li><a href="/chouqian/yuelao/4/59/">第59签</a></li><li><a href="/chouqian/yuelao/4/60/">第60签</a></li><li><a href="/chouqian/yuelao/4/61/">第61签</a></li><li><a href="/chouqian/yuelao/4/62/">第62签</a></li><li><a href="/chouqian/yuelao/4/63/">第63签</a></li><li><a href="/chouqian/yuelao/4/64/">第64签</a></li><li><a href="/chouqian/yuelao/4/65/">第65签</a></li><li><a href="/chouqian/yuelao/4/66/">第66签</a></li><li><a href="/chouqian/yuelao/4/67/">第67签</a></li><li><a href="/chouqian/yuelao/4/68/">第68签</a></li><li><a href="/chouqian/yuelao/4/69/">第69签</a></li><li><a href="/chouqian/yuelao/4/70/">第70签</a></li><li><a href="/chouqian/yuelao/4/71/">第71签</a></li><li><a href="/chouqian/yuelao/4/72/">第72签</a></li><li><a href="/chouqian/yuelao/4/73/">第73签</a></li><li><a href="/chouqian/yuelao/4/74/">第74签</a></li><li><a href="/chouqian/yuelao/4/75/">第75签</a></li><li><a href="/chouqian/yuelao/4/76/">第76签</a></li><li><a href="/chouqian/yuelao/4/77/">第77签</a></li><li><a href="/chouqian/yuelao/4/78/">第78签</a></li><li><a href="/chouqian/yuelao/4/79/">第79签</a></li><li><a href="/chouqian/yuelao/4/80/">第80签</a></li><li><a href="/chouqian/yuelao/4/81/">第81签</a></li><li><a href="/chouqian/yuelao/4/82/">第82签</a></li><li><a href="/chouqian/yuelao/4/83/">第83签</a></li><li><a href="/chouqian/yuelao/4/84/">第84签</a></li><li><a href="/chouqian/yuelao/4/85/">第85签</a></li><li><a href="/chouqian/yuelao/4/86/">第86签</a></li><li><a href="/chouqian/yuelao/4/87/">第87签</a></li><li><a href="/chouqian/yuelao/4/88/">第88签</a></li><li><a href="/chouqian/yuelao/4/89/">第89签</a></li><li><a href="/chouqian/yuelao/4/90/">第90签</a></li><li><a href="/chouqian/yuelao/4/91/">第91签</a></li><li><a href="/chouqian/yuelao/4/92/">第92签</a></li><li><a href="/chouqian/yuelao/4/93/">第93签</a></li><li><a href="/chouqian/yuelao/4/94/">第94签</a></li><li><a href="/chouqian/yuelao/4/95/">第95签</a></li><li><a href="/chouqian/yuelao/4/96/">第96签</a></li><li><a href="/chouqian/yuelao/4/97/">第97签</a></li><li><a href="/chouqian/yuelao/4/98/">第98签</a></li><li><a href="/chouqian/yuelao/4/99/">第99签</a></li><li><a href="/chouqian/yuelao/4/100/">第100签</a></li>
        </ul>
    </dl>
</div>
<div id="navi">
    <{include file='./h5/public/h5_nav.tpl'}>
</div>

<{include file='./index/footer.tpl'}>