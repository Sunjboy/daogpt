<?php /* Smarty version 2.6.25, created on 2017-12-04 04:28:47
         compiled from h5/chouqian/chegong.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './h5/header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script>stepMenu();</script>
<div id="path">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './h5/public/path.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>

<?php if ($this->_tpl_vars['qid']): ?>
    <h1 class="title">您抽中了【第<span><?php echo $this->_tpl_vars['qian']['qid']; ?>
</span>签】<?php echo $this->_tpl_vars['qian']['qianming']; ?>
</h1>
    <?php else: ?>
    <h1 class="title">车公灵签</h1>
    <?php endif; ?>

<div class="detail">
    <dl>

        <?php if ($this->_tpl_vars['qid'] != ''): ?>

        <!---->
        <h2>吉凶：</h2>

        <div class="h2_content"><?php echo $this->_tpl_vars['qian']['jx']; ?>
签</div>

        <div class="fright p10"><img border="0" alt="车公灵签第<?php echo $this->_tpl_vars['qian']['qid']; ?>
签" src="<?php echo $this->_tpl_vars['web_url']; ?>
<?php echo $this->_tpl_vars['qian']['img']; ?>
" width="160"/></div>


        <h2>解曰：</h2>

        <div class="h2_content"><?php echo $this->_tpl_vars['qian']['jie']; ?>
</div>

        <h2>签语：</h2>

        <div class="h2_content"><?php echo $this->_tpl_vars['qian']['qy']; ?>
</div>

        <h2>释义：</h2>

        <div class="h2_content"><?php echo $this->_tpl_vars['qian']['shiyi']; ?>
</div>

        <h2>详解：</h2>

        <div class="h2_content"><?php echo $this->_tpl_vars['qian']['xiangjie']; ?>
</div>

        <div class="center mt10"><a href="/chouqian/"><img src="/static/img/shouye.gif" border="0"></a> &nbsp; <a href="/chouqian/guanyin/"><img src="/static/img/chongchou.gif" border="0"></a></div>
        <!---->
        <?php endif; ?>

        <?php if ($this->_tpl_vars['rand'] != ''): ?>
        <div style="clear:both;text-align:center;">
            <span class="green">您刚抽了第 <strong class="cRed"><?php echo $this->_tpl_vars['rand']; ?>
</strong> 签！<br>请求指点的问题！再进行下一步...</span>

            <?php if ($this->_tpl_vars['gysmile'] != '4' && $this->_tpl_vars['clicknum'] < 3): ?>

            <?php if ($this->_tpl_vars['clicknum'] == 2): ?>

        <img src="<?php echo $this->_tpl_vars['web_url']; ?>
static/bazi/img/suanming/good_cup.gif" />
            <?php else: ?>
            <a href="/chouqian/chegong/<?php echo $this->_tpl_vars['clicknum']+2; ?>
/<?php echo $this->_tpl_vars['rand']; ?>
"><img src="<?php echo $this->_tpl_vars['web_url']; ?>
static/bazi/img/suanming/good_cup.gif" /></a>
            <?php endif; ?>

            <p><span class="green">您掷出<?php echo $this->_tpl_vars['clicknum']+1; ?>
次圣杯，请点击上图再次掷出！</span></p>


            <?php if ($this->_tpl_vars['clicknum'] == 2): ?>
            <p><span class="green">恭喜，您连续掷出了三次圣杯，<a href="/chouqian/chegong/4/<?php echo $this->_tpl_vars['rand']; ?>
">请点这里察看签词！</a></span></p>
            <p><a href="/chouqian/chegong/4/<?php echo $this->_tpl_vars['rand']; ?>
"><img src="/static/img/chakan.gif" width="94" height="31" alt="查看签词" /></a></p>
            <?php else: ?>
            <p class="last">需连续掷出三次圣杯，才是灵签！目前，您已经掷出<strong class="cRed"><?php echo $this->_tpl_vars['clicknum']+1; ?>
</strong>次</p>
            <p><a href="/chouqian/chegong/<?php echo $this->_tpl_vars['clicknum']+2; ?>
/<?php echo $this->_tpl_vars['rand']; ?>
"> <img src="/static/img/qiuqian.gif" width="94" height="31" alt="开始抽签" /></a></p>
            <?php endif; ?>

            <?php else: ?>

            <p><a href="/chouqian/chegong/"><img src="<?php echo $this->_tpl_vars['web_url']; ?>
static/bazi/img/suanming/bad_cup.gif" alt="重新抽签" /></a></p><br />
        需连续掷出三次圣杯后，此签才算是灵签！<br />
            <span class="red">您掷出了笑杯，该签不灵，请重新抽签。</span><br /><br />
            <a href="/chouqian/chegong/"><img src="/static/img/chongchou.gif" width="94" height="31" alt="重新抽签" /></a>
        <br /><br />
            <?php endif; ?>
            </dov>

            <?php endif; ?>

            <?php if ($this->_tpl_vars['qid'] == '' && $this->_tpl_vars['rand'] == ''): ?>
            <div class="h2_content"><p>车公原名车卫（公元960年至1279年），籍贯江西南昌五福，南宋末年一员猛将，因勘平江南之乱有功，被封为大元帅。当时广东一带瘟疫蔓延，不少居民染上恶疾，由于车公精通医术，协助村民消灾解困，令瘟疫尽除。所到之处，疫症亦立刻停止，因此村民请人塑了车大元帅的塑像，并建车公庙供奉，以镇压疫症。。</p></div>
            <center>
                <a href="/chouqian/chegong/1"><img id="lingqian" src="<?php echo $this->_tpl_vars['web_url']; ?>
static/bazi/img/suanming/v2/qian.gif" width="86" /></a><br />
                <a href="/chouqian/chegong/1"> <img src="/static/img/qiuqian.gif" width="94" height="31" alt="开始抽签" /></a>
                <br/>
            </center>
            <ul>
                <li>1. 抽签须虔诚认真，秉除杂念，不可玩笑试之。不可随意抽签，要遵守“无事不占卜”的规则，心诚则灵。</li>
                <li>2. 净身（就是洗澡），如无条件洗澡的，也必须把双手洗干净。</li>
                <li>3. 签的时间：中午十二点左右和晚上十一点前或者后，晚上十一点是阴阳相接之时，最适宜抽签，抽签的信息也最准确；房事后和打雷下大雨时不要抽签，因为此时信息不准。</li>
                <li>4. 事先确定要占的事情，如婚姻、事业、运程、流年、工作、财运......等。</li>
                <li>5. 默念自己姓名、出生时辰、年龄、现在居住地址。</li>
                <li>6. 点击上面的签筒开始抽签。抽签完毕，需要掷出三次圣杯才算灵签，否则需要重新抽签。</li>
                <li>7. 每天只能针对某一件事情进行一次抽签占卜，请勿多求，否则不灵。</li>
            </ul>
            <?php endif; ?>

    </dl>


    <div>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './h5/public/more_nav.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>

</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './h5/public/news.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="detail">
    <h3>车工灵签 共90签：</h3>
    <dl>
        <ul class="lingqian">
            <li><a href="/chouqian/chegong/4/1/">第1签</a></li><li><a href="/chouqian/chegong/4/2/">第2签</a></li><li><a href="/chouqian/chegong/4/3/">第3签</a></li><li><a href="/chouqian/chegong/4/4/">第4签</a></li><li><a href="/chouqian/chegong/4/5/">第5签</a></li><li><a href="/chouqian/chegong/4/6/">第6签</a></li><li><a href="/chouqian/chegong/4/7/">第7签</a></li><li><a href="/chouqian/chegong/4/8/">第8签</a></li><li><a href="/chouqian/chegong/4/9/">第9签</a></li><li><a href="/chouqian/chegong/4/10/">第10签</a></li><li><a href="/chouqian/chegong/4/11/">第11签</a></li><li><a href="/chouqian/chegong/4/12/">第12签</a></li><li><a href="/chouqian/chegong/4/13/">第13签</a></li><li><a href="/chouqian/chegong/4/14/">第14签</a></li><li><a href="/chouqian/chegong/4/15/">第15签</a></li><li><a href="/chouqian/chegong/4/16/">第16签</a></li><li><a href="/chouqian/chegong/4/17/">第17签</a></li><li><a href="/chouqian/chegong/4/18/">第18签</a></li><li><a href="/chouqian/chegong/4/19/">第19签</a></li><li><a href="/chouqian/chegong/4/20/">第20签</a></li><li><a href="/chouqian/chegong/4/21/">第21签</a></li><li><a href="/chouqian/chegong/4/22/">第22签</a></li><li><a href="/chouqian/chegong/4/23/">第23签</a></li><li><a href="/chouqian/chegong/4/24/">第24签</a></li><li><a href="/chouqian/chegong/4/25/">第25签</a></li><li><a href="/chouqian/chegong/4/26/">第26签</a></li><li><a href="/chouqian/chegong/4/27/">第27签</a></li><li><a href="/chouqian/chegong/4/28/">第28签</a></li><li><a href="/chouqian/chegong/4/29/">第29签</a></li><li><a href="/chouqian/chegong/4/30/">第30签</a></li><li><a href="/chouqian/chegong/4/31/">第31签</a></li><li><a href="/chouqian/chegong/4/32/">第32签</a></li><li><a href="/chouqian/chegong/4/33/">第33签</a></li><li><a href="/chouqian/chegong/4/34/">第34签</a></li><li><a href="/chouqian/chegong/4/35/">第35签</a></li><li><a href="/chouqian/chegong/4/36/">第36签</a></li><li><a href="/chouqian/chegong/4/37/">第37签</a></li><li><a href="/chouqian/chegong/4/38/">第38签</a></li><li><a href="/chouqian/chegong/4/39/">第39签</a></li><li><a href="/chouqian/chegong/4/40/">第40签</a></li><li><a href="/chouqian/chegong/4/41/">第41签</a></li><li><a href="/chouqian/chegong/4/42/">第42签</a></li><li><a href="/chouqian/chegong/4/43/">第43签</a></li><li><a href="/chouqian/chegong/4/44/">第44签</a></li><li><a href="/chouqian/chegong/4/45/">第45签</a></li><li><a href="/chouqian/chegong/4/46/">第46签</a></li><li><a href="/chouqian/chegong/4/47/">第47签</a></li><li><a href="/chouqian/chegong/4/48/">第48签</a></li><li><a href="/chouqian/chegong/4/49/">第49签</a></li><li><a href="/chouqian/chegong/4/50/">第50签</a></li><li><a href="/chouqian/chegong/4/51/">第51签</a></li><li><a href="/chouqian/chegong/4/52/">第52签</a></li><li><a href="/chouqian/chegong/4/53/">第53签</a></li><li><a href="/chouqian/chegong/4/54/">第54签</a></li><li><a href="/chouqian/chegong/4/55/">第55签</a></li><li><a href="/chouqian/chegong/4/56/">第56签</a></li><li><a href="/chouqian/chegong/4/57/">第57签</a></li><li><a href="/chouqian/chegong/4/58/">第58签</a></li><li><a href="/chouqian/chegong/4/59/">第59签</a></li><li><a href="/chouqian/chegong/4/60/">第60签</a></li><li><a href="/chouqian/chegong/4/61/">第61签</a></li><li><a href="/chouqian/chegong/4/62/">第62签</a></li><li><a href="/chouqian/chegong/4/63/">第63签</a></li><li><a href="/chouqian/chegong/4/64/">第64签</a></li><li><a href="/chouqian/chegong/4/65/">第65签</a></li><li><a href="/chouqian/chegong/4/66/">第66签</a></li><li><a href="/chouqian/chegong/4/67/">第67签</a></li><li><a href="/chouqian/chegong/4/68/">第68签</a></li><li><a href="/chouqian/chegong/4/69/">第69签</a></li><li><a href="/chouqian/chegong/4/70/">第70签</a></li><li><a href="/chouqian/chegong/4/71/">第71签</a></li><li><a href="/chouqian/chegong/4/72/">第72签</a></li><li><a href="/chouqian/chegong/4/73/">第73签</a></li><li><a href="/chouqian/chegong/4/74/">第74签</a></li><li><a href="/chouqian/chegong/4/75/">第75签</a></li><li><a href="/chouqian/chegong/4/76/">第76签</a></li><li><a href="/chouqian/chegong/4/77/">第77签</a></li><li><a href="/chouqian/chegong/4/78/">第78签</a></li><li><a href="/chouqian/chegong/4/79/">第79签</a></li><li><a href="/chouqian/chegong/4/80/">第80签</a></li><li><a href="/chouqian/chegong/4/81/">第81签</a></li><li><a href="/chouqian/chegong/4/82/">第82签</a></li><li><a href="/chouqian/chegong/4/83/">第83签</a></li><li><a href="/chouqian/chegong/4/84/">第84签</a></li><li><a href="/chouqian/chegong/4/85/">第85签</a></li><li><a href="/chouqian/chegong/4/86/">第86签</a></li><li><a href="/chouqian/chegong/4/87/">第87签</a></li><li><a href="/chouqian/chegong/4/88/">第88签</a></li><li><a href="/chouqian/chegong/4/89/">第89签</a></li><li><a href="/chouqian/chegong/4/90/">第90签</a></li>
        </ul>
    </dl>
</div>
<div id="navi">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './h5/public/h5_nav.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>