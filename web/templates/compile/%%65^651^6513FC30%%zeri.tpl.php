<?php /* Smarty version 2.6.25, created on 2017-12-03 15:25:30
         compiled from h5/huangli/zeri.tpl */ ?>
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


<?php if ($this->_tpl_vars['nums']): ?>

	<h1 class="title">宜<strong><?php echo $this->_tpl_vars['lmanacCond']; ?>
</strong>的日子一共有<span><?php echo $this->_tpl_vars['nums']; ?>
</span>天</h1>

	<div class="detail">
		<dl>
			<ul>
				<?php $_from = $this->_tpl_vars['datalist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
				<li><a class="inlink" href="/hdjr/<?php echo $this->_tpl_vars['v']['date']; ?>
"><span class="blue"><?php echo $this->_tpl_vars['v']['gongli']; ?>
 </span> <?php echo $this->_tpl_vars['v']['nongli']; ?>
</a></li>
				<?php endforeach; endif; unset($_from); ?>
			</ul>
		</dl>
	</div>

	<?php endif; ?>

<div class="detail">
	<h3>吉日查询：</h3>
	<dl>
		<dd class="form">为您提供权威可靠的黄道吉日查询，包括结婚吉日、搬家吉日、开业吉日等。</dd>
		<form name="sm" action="/index.php" method="post">
			<input type="hidden" value="h5_hdjr" name="ct" />
			<input type="hidden" value="zeri" name="ac" />

			<dd class="form">
				<select name="s_year" id="nian" class="select">
					<option value="2010">2010</option>
					<option value="2011">2011</option>
					<option value="2012">2012</option>
					<option value="2013">2013</option>
					<option value="2014">2014</option>
					<option value="2015">2015</option>
					<option value="2016" selected="selected">2016</option>
					<option value="2017">2017</option>
					<option value="2018">2018</option>
				</select>年

				<select name="s_month" id="yue" class="select">
					<?php for($i=1;$i<13;$i++){ ?>
					<?php if($i==date('m',time())){$se='selected';}else{$se='';} ?>
					<option value="<?=$i?>" <?=$se?>><?=$i?></option>
					<?php }?>
				</select>月

				<select name="s_day" id="ri" class="select">
					<?php for($i=1;$i<32;$i++){ ?>
					<?php if($i==date('d',time())){$se='selected';}else{$se='';} ?>
					<option value="<?=$i?>" <?=$se?>><?=$i?></option>
					<?php }?>
				</select>日

			</dd><strong class="fl">到</strong>
			<dd class="form">
				<select name="e_year" id="nian" class="select">
					<option value="2010">2010</option>
					<option value="2011">2011</option>
					<option value="2012">2012</option>
					<option value="2013">2013</option>
					<option value="2014">2014</option>
					<option value="2015">2015</option>
					<option value="2016">2016</option>
					<option value="2017" selected>2017</option>
					<option value="2018">2018</option>
				</select>年

				<select name="e_month" id="yue" class="select">
					<?php for($i=1;$i<13;$i++){ ?>
					<?php if($i==date('m',time())){$se='selected';}else{$se='';} ?>
					<option value="<?=$i?>" <?=$se?>><?=$i?></option>
					<?php }?>
				</select>月

				<select name="e_day" id="ri" class="select">
					<?php for($i=1;$i<32;$i++){ ?>
					<?php if($i==date('d',time())){$se='selected';}else{$se='';} ?>
					<option value="<?=$i?>" <?=$se?>><?=$i?></option>
					<?php }?>
				</select>日

			</dd>

			<dd class="form">
				<input checked="" class="radio" id="lmanacLuck" name="lmanacType" value="1" type="radio"><label for="lmanacLuck">宜</label>
				<input class="radio" id="lmanacBad" name="lmanacType" value="2" type="radio"><label for="lmanacBad">忌</label>
				<select id="lmanacCond" name="lmanacCond" class="select">
					<option value="嫁娶" selected="selected">嫁娶</option>
					<option value="祭祀">祭祀</option>
					<option value="动土">动土</option>
					<option value="开市">开市</option>
					<option value="开光">开光</option>
					<option value="祈福">祈福</option>
					<option value="求嗣">求嗣</option>
					<option value="出行">出行</option>
					<option value="移徙">移徙</option>
					<option value="安床">安床</option>
					<option value="拆卸">拆卸</option>
					<option value="修造">修造</option>
					<option value="安门">安门</option>
					<option value="挂匾">挂匾</option>
					<option value="纳财">纳财</option>
					<option value="扫舍">扫舍</option>
					<option value="入宅">入宅</option>
					<option value="安葬">安葬</option>
				</select>

			</dd>

			<div align="center"><input type="submit" name="submit" class="button" value="查询吉日"/></div>
		</form>
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
	<h3>生肖血型配对简介：</h3>
	<dl>
		<dd>星座于生肖，相信大家一定不会陌生。每个星座、每个生肖都有属于自己的特性，所以我们并不是与所有的星座生肖组合般配，星座与生肖之间又有着怎么样的关系呢？</dd>
	</dl>
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