<?php /* Smarty version 2.6.25, created on 2018-04-03 15:47:39
         compiled from h5/paipan/bazi_find.tpl */ ?>
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

<h1 class="title"><?php echo $this->_tpl_vars['cookies']['xingming']['xing']; ?>
<?php echo $this->_tpl_vars['cookies']['xingming']['ming']; ?>
的八字测名算命结果</h1>

<div class="detail">

    <dl>

        <dd></dd>

        <h2>当前算命者信息</h2>

        <div class="h2_content">

            <p>
                <span>姓名：<strong><?php echo $this->_tpl_vars['info']['bzname']; ?>
</strong></span>
                <span>性别：<strong><?php if ($this->_tpl_vars['info']['sex'] == 1): ?>男<?php else: ?>女<?php endif; ?></strong></span>
                <span>出生地：<strong><?php echo $this->_tpl_vars['info']['area']; ?>
<?php if ($this->_tpl_vars['info']['taiyang'] == 1): ?>(经度：<?php echo $jd1?>度<?php echo $jd2?>分)<?php endif; ?></strong></span><br/>
                <span>排盘方式：<strong>公历排盘</strong></span><br/>
                <span>公历：<strong><?php echo $this->_tpl_vars['data']['bzdate']; ?>
</strong></span><br/>
                <span>农历：<strong><?php echo $this->_tpl_vars['data']['nongdate']; ?>
</strong></span>
            </p>

        </div>

        <h2><?php echo $this->_tpl_vars['info']['bzname']; ?>
的五行八字分析：</h2>

        <div class="h2_content">

            <div class="pp_box" id="Layerurl">

                <?php if ($this->_tpl_vars['data']['taiyang'] == 1): ?>
                &nbsp;&nbsp;&nbsp;&nbsp;出生钟点时：".date("Y年m月d日H时i分",$notydate)."<br>";
            &nbsp;&nbsp;&nbsp;&nbsp;实际太阳时：".date("Y年m月d日H时i分",$bzdate)."<br>";
                <?php endif; ?>

                <span class='jiachu'>胎元： &nbsp;&nbsp;&nbsp;</span><?php echo $this->_tpl_vars['data']['taiyuan']; ?>
<span class=sm_lv>[<?php echo $this->_tpl_vars['data']['nayintaiyuan']; ?>
]</span>  &nbsp;&nbsp;<span class='jiachu'>命宫：</span><?php echo $this->_tpl_vars['data']['minggong']; ?>
<span class=sm_lv>[<?php echo $this->_tpl_vars['data']['nayinminggong']; ?>
]</span><br>


                <span class="jiachu">起运： &nbsp;&nbsp;&nbsp;</span>命主于出生后<span class="sm_lv"><?php echo $this->_tpl_vars['data']['qysj']; ?>
</span>开始起运<br>
                <span class="jiachu">交运： &nbsp;&nbsp;&nbsp;</span>命主于公历<span class="sm_hong"><?php echo $this->_tpl_vars['data']['zysj']; ?>
</span>交运，以后每逢尾数带<span class="sm_hong"><?php echo $this->_tpl_vars['data']['sub_zysj']; ?>
</span>的年份交脱运<br>
                <span class="jiachu">八字： &nbsp;&nbsp;&nbsp;</span>乾造<br />

<div class="sm_kuang2 jiachu">十神:</div>
<div class="sm_kuang2"><?php echo $this->_tpl_vars['data']['shishen1']; ?>
</div>
<div class="sm_kuang2"><?php echo $this->_tpl_vars['data']['shishen2']; ?>
</div>
<div class="sm_kuang2">日元</div>
<div class="sm_kuang2"><?php echo $this->_tpl_vars['data']['riyuan']; ?>
</div>
<div class="clear"></div>

<div class="sm_kuang2 jiachu">四柱:</div>
<div class="sm_kuang2 sm_hong"><?php echo $this->_tpl_vars['data']['ygz']; ?>
</div>
<div class="sm_kuang2 sm_hong"><?php echo $this->_tpl_vars['data']['mgz']; ?>
</div>
<div class="sm_kuang2 sm_hong"><?php echo $this->_tpl_vars['data']['rgz']; ?>
</div>
<div class="sm_kuang2 sm_hong"><?php echo $this->_tpl_vars['data']['hgz']; ?>
</div>
<div class="sm_kuang2">空(<?php echo $this->_tpl_vars['data']['xkrgz']; ?>
)</div>
<div class="clear"></div>

<div class="sm_kuang2 jiachu">藏干:</div>
<div class="sm_kuang4 sm_lan"><?php echo $this->_tpl_vars['data']['zanggan1']; ?>
</div>
<div class="sm_kuang4 sm_lan"><?php echo $this->_tpl_vars['data']['zanggan2']; ?>
</div>
<div class="sm_kuang4 sm_lan"><?php echo $this->_tpl_vars['data']['zanggan3']; ?>
</div>
<div class="sm_kuang4 sm_lan"><?php echo $this->_tpl_vars['data']['zanggan4']; ?>
</div>
<div class="clear"></div>

<div class="sm_kuang2 jiachu">纳音:</div>
<div class="sm_kuang2 sm_kuang5 sm_lv"><?php echo $this->_tpl_vars['data']['nayin1']; ?>
</div>
<div class="sm_kuang2 sm_kuang5 sm_lv"><?php echo $this->_tpl_vars['data']['nayin2']; ?>
</div>
<div class="sm_kuang2 sm_kuang5 sm_lv"><?php echo $this->_tpl_vars['data']['nayin3']; ?>
</div>
<div class="sm_kuang2 sm_kuang5 sm_lv"><?php echo $this->_tpl_vars['data']['nayin4']; ?>
</div>
<div class="clear"></div>

<div class="sm_kuang2 jiachu">节气：</div>

<div class="sm_kuang3"><?php echo $this->_tpl_vars['data']['jqstr']; ?>
</div>

<div class="clear"></div>
<div class="sm_kuang2 jiachu">大运:</div>
<div class="fl">
<?php echo $this->_tpl_vars['data']['dayunhtml']; ?>

</div>
<div class="clear" style="float:left;"></div>
<div class="sm_kuang2 jiachu">岁次：</div>
<?php echo $this->_tpl_vars['data']['suicihtml']; ?>


<div class="clear"></div>
<div class="sm_kuang2 jiachu">始于：</div>
<?php echo $this->_tpl_vars['data']['liunianhtml']; ?>

<div class="clear"></div>
<div class="sm_kuang2 jiachu">流年：</div>
<div style="float:left">
<?php echo $this->_tpl_vars['data']['liunian2html']; ?>

</div>
<div class="clear"></div>
<div class="sm_kuang2 jiachu">止于：</div>
<?php echo $this->_tpl_vars['data']['liunian3html']; ?>

<div class="clear"></div>


</div>


        </div>

</div>

<div align="center">
<a class="button" href="/paipan/bazi/">重新测算</a>
</div>

<div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './h5/public/more_nav.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './h5/public/news.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div id="navi">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './h5/public/h5_nav.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './h5/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>