<?php /* Smarty version 2.6.25, created on 2017-12-09 22:49:29
         compiled from h5/zgjm_search.tpl */ ?>
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

<h1 class="title">【<?php echo $this->_tpl_vars['q']; ?>
 - 解梦】</h1>

<div class="detail">

    <div class="suanmingDetail_item">

        <div class="subs">
            <div class="subs_title">※ 关于<?php echo $this->_tpl_vars['q']; ?>
的热门梦境</div>
            <div class="cont">
                <div class="content">
                    <ul class="dl-col2">

                        <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
                            <li><a href="/zgjm/show-<?php echo $this->_tpl_vars['v']['id']; ?>
.html" target="_blank"><?php echo $this->_tpl_vars['v']['title']; ?>
</a></li>
                        <?php endforeach; endif; unset($_from); ?>

                    </ul>

                    <div class="page">
                        <?php echo $this->_tpl_vars['pageStr']; ?>

                    </div>

                </div>
            </div>


            <div class="dream_other">
                <div class="dream_other_title">分类导航</div>
                <div class="dream_other_a">
                    <a href="/zgjm/renwu.html">人物</a>
                    <a href="/zgjm/dongwu.html">动物</a>
                    <a href="/zgjm/wupin.html">物品</a>
                    <a href="/zgjm/zhiwu.html">植物</a>
                    <a href="/zgjm/guishen.html">鬼神</a>
                    <a href="/zgjm/shenghuo.html">生活</a>
                    <a href="/zgjm/qita.html">其他</a>
                </div>
            </div>

        </div>

    </div>

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