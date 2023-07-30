<?php /* Smarty version 2.6.25, created on 2018-04-04 15:40:17
         compiled from h5/news_show.tpl */ ?>
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

<h1 class="title"><?php echo $this->_tpl_vars['data']['title']; ?>
</h1>

<div class="detail">

    <dl>

        <dd class="sosuo_content">
            <div class="newsinfo mb10">时间：<?php echo $this->_tpl_vars['data']['uptime']; ?>
 &nbsp; 来源：开运网 &nbsp; 关键词：<?php echo $this->_tpl_vars['data']['contentKeyword']; ?>
</div>

            <?php echo $this->_tpl_vars['data']['content']; ?>


        </dd>

        <div class="getpage">

            <div class="pager">
                <?php echo $this->_tpl_vars['pageStr']; ?>

            </div>

        </div>

    </dl>

</div>

<div>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './h5/public/more_nav.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>

<div class="detail">

    <h3><a href="/xingzuo/yunshi/">12星座明日运势：</a></h3>

    <dl>

        <li>

            <a href="/xingzuo/baiyang" title="白羊座运势">白羊</a> &nbsp;

            <a href="/xingzuo/jinniu" title="金牛座运势">金牛</a> &nbsp;

            <a href="/xingzuo/shuangzi" title="双子座运势">双子</a> &nbsp;

            <a href="/xingzuo/juxie" title="巨蟹座运势">巨蟹</a> &nbsp;

            <a href="/xingzuo/shizi" title="狮子座运势">狮子</a> &nbsp;

            <a href="/xingzuo/chunv" title="处女座运势">处女</a></li>

        <li>

            <a href="/xingzuo/tiancheng" title="天秤座运势">天秤</a> &nbsp;

            <a href="/xingzuo/tianxie" title="天蝎座运势">天蝎</a> &nbsp;

            <a href="/xingzuo/sheshou" title="射手座运势">射手</a> &nbsp;

            <a href="/xingzuo/mojie" title="魔羯座运势">魔羯</a> &nbsp;

            <a href="/xingzuo/shuiping" title="水瓶座运势">水瓶</a> &nbsp;

            <a href="/xingzuo/shuangyu" title="双鱼座运势">双鱼</a></dd>

        </li>

</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './h5/public/news.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="detail">

    <h3>你可能感兴趣的：</h3>

    <dl>
        <?php $_from = $this->_tpl_vars['hot_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
        <li>
            <a href="show-<?php echo $this->_tpl_vars['v']['id']; ?>
.html" target="_blank"><?php echo $this->_tpl_vars['v']['title']; ?>
</a>
        </li>
        <?php endforeach; endif; unset($_from); ?>
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
$this->_smarty_include(array('smarty_include_tpl_file' => './h5/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>