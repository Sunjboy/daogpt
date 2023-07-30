<?php /* Smarty version 2.6.25, created on 2017-11-29 23:59:29
         compiled from h5/xingming/xingming_list.tpl */ ?>
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

<h1 class="title">陈姓取名，陈姓姓名大全2015年最新版</h1>

<div class="detail">

	<dl>

		<div class="h2_content">

			<p>
				<strong>「在线起名」</strong>起名是人类的文化行为之一。作为父母，随着孩子的降临人生，首先要给宝宝起一个好名字，神算网为你免费在线起名，以寄托美好愿望，希望孩子将来成就一番事业。古语云"宁可生错命，不可起错名"，一个好的名字，不仅给别人印象深刻，而且还关系到人一生的事业、婚姻、健康和人际关系。蛇宝宝起名大全名字笔画五行不要和命谱四柱五行相联系，它本身五格部象的五行相生相克是其本身独立一格的五行，与命谱五行没有联系的，无须考虑笔画五行来选名字，但名字的笔画五行在五格剖象中要五行相生，不能相克。
				本站基于以上原则和自动生成算法，只需要输入你的姓氏可以免费为你推荐目前较为优秀的名字，并自动评为你的宝宝起名字测试打分及作出详细的命理、运程、吉凶解析。
			</p>

		</div>

		<h2><?php echo $this->_tpl_vars['xing']; ?>
姓<?php echo $this->_tpl_vars['xingbie_s']; ?>
<?php echo $this->_tpl_vars['huashu_s']; ?>
名字大全：</h2>

		<?php if ($this->_tpl_vars['list'] == ''): ?>
			<ul class="xsdq">
				<strong>真遗憾！您的姓氏暂时不在我们的起名推荐中，如想得到更多姓名大全，可向我们反馈，我们会适时添加。</strong>
				<a href="/xingming/qiming/">重新测试</a>
			</ul>
		<?php else: ?>


			<div class="qiming_nav">
				<ul class="clearfix">
					<li class="first">
					<a <?php if ($this->_tpl_vars['opt_Array']['sex'] == '0'): ?>class="current"<?php endif; ?> href="/xingming/qiming/list-<?php echo $this->_tpl_vars['opt_Array']['xid']; ?>
-0-<?php echo $this->_tpl_vars['opt_Array']['hs']; ?>
-<?php echo $this->_tpl_vars['opt_Array']['page']; ?>
.html"><?php echo $this->_tpl_vars['opt_Array']['xing']; ?>
姓名字大全</a>
					</li>
					<li>
					<a <?php if ($this->_tpl_vars['opt_Array']['sex'] == '1'): ?>class="current"<?php endif; ?> href="/xingming/qiming/list-<?php echo $this->_tpl_vars['opt_Array']['xid']; ?>
-1-<?php echo $this->_tpl_vars['opt_Array']['hs']; ?>
-<?php echo $this->_tpl_vars['opt_Array']['page']; ?>
.html"><?php echo $this->_tpl_vars['opt_Array']['xing']; ?>
姓男孩名字大全</a>
					</li>
					<li>
					<a <?php if ($this->_tpl_vars['opt_Array']['sex'] == '2'): ?>class="current"<?php endif; ?> href="/xingming/qiming/list-<?php echo $this->_tpl_vars['opt_Array']['xid']; ?>
-2-<?php echo $this->_tpl_vars['opt_Array']['hs']; ?>
-<?php echo $this->_tpl_vars['opt_Array']['page']; ?>
.html"><?php echo $this->_tpl_vars['opt_Array']['xing']; ?>
姓女孩名字大全</a>
					</li>
				</ul>
			</div>

			<div class="fn_subtab">
				<a <?php if ($this->_tpl_vars['opt_Array']['hs'] == '0'): ?>class="current"<?php endif; ?> href="/xingming/qiming/list-<?php echo $this->_tpl_vars['opt_Array']['xid']; ?>
-<?php echo $this->_tpl_vars['opt_Array']['sex']; ?>
-0-<?php echo $this->_tpl_vars['opt_Array']['page']; ?>
.html">不限</a>
				<a <?php if ($this->_tpl_vars['opt_Array']['hs'] == '2'): ?>class="current"<?php endif; ?> href="/xingming/qiming/list-<?php echo $this->_tpl_vars['opt_Array']['xid']; ?>
-<?php echo $this->_tpl_vars['opt_Array']['sex']; ?>
-2-<?php echo $this->_tpl_vars['opt_Array']['page']; ?>
.html">二字</a>
				<a <?php if ($this->_tpl_vars['opt_Array']['hs'] == '3'): ?>class="current"<?php endif; ?> href="/xingming/qiming/list-<?php echo $this->_tpl_vars['opt_Array']['xid']; ?>
-<?php echo $this->_tpl_vars['opt_Array']['sex']; ?>
-3-<?php echo $this->_tpl_vars['opt_Array']['page']; ?>
.html">三字</a>
			</div>


			<div class="namelist">
				<ul class="xsdq">
					<?php $_from = $this->_tpl_vars['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
						<li><a href="/xingming/xmfx/<?php echo $this->_tpl_vars['v']['name']; ?>
" target="_blank"><?php echo $this->_tpl_vars['v']['name']; ?>
</a></li>
					<?php endforeach; endif; unset($_from); ?>
				</ul>
			</div>
			<div class="clear"></div>

			<div class="page mt10">
				<?php echo $this->_tpl_vars['pageStr']; ?>

			</div>
		<?php endif; ?>

		<div class="clear"></div>

		<div class="h2_content">

			<p>由于篇幅有限，在此只列表这么多陈姓名字，如果你觉得还是不够的话，您还可以使用：强大的<a href="/qiming/" target="_blank" class="red"><strong>免费起名</strong></a>、浪漫的<a href="/tangshi/" target="_blank" class="blue"><strong>唐诗起名</strong></a>、好听的<a href="/diangu/" target="_blank" class="blue"><strong>成语典故起名</strong></a>、精准的<a href="/name/" class="red" target="_blank"><strong>姓名测试</strong></a>等等。</p>

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
$this->_smarty_include(array('smarty_include_tpl_file' => './index/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>