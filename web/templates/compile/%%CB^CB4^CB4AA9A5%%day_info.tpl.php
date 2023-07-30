<?php /* Smarty version 2.6.25, created on 2017-11-29 20:02:23
         compiled from h5/huangli/day_info.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', 'h5/huangli/day_info.tpl', 12, false),)), $this); ?>
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

<div class="detail">
	<h2><?php echo $this->_tpl_vars['data']['title']; ?>
</h2>

	<div class="remark center">&nbsp; 来源：神算网 &nbsp; 关键词：<?php echo $this->_tpl_vars['data']['keyword']; ?>
</div>
	<div class="h2_content">
		<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['content'])) ? $this->_run_mod_handler('replace', true, $_tmp, "/upload/", "http://www.ss230.com/up_img/lishi/upload/") : smarty_modifier_replace($_tmp, "/upload/", "http://www.ss230.com/up_img/lishi/upload/")); ?>

	</div>

</div>


<div class="detail">
	<h3>《神算网》历史上的今天 — <span class="cYellow" id="date_select"><?php echo date('m月-d日',time());?></span>：</h3>
	<dl>
		<dd class="form">以史为鉴,可以知兴衰。回顾历史的今天，了解历史的这一天发生的事件。</dd>
		<form name="sm" action="/index.php" method="post">
			<input type="hidden" value="h5_hdjr" name="ct" />
			<input type="hidden" value="lishi" name="ac" />

			<dd class="form">
				<select name="m" id="nian" class="select">
					<option value="01">1</option>
					<option value="02">2</option>
					<option value="03">3</option>
					<option value="04">4</option>
					<option value="05">5</option>
					<option value="06">6</option>
					<option value="07">7</option>
					<option value="08">8</option>
					<option value="09">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
				</select>月

				<select name="d" id="ri" class="select">
					<option value="01">1</option><option value="02">2</option><option value="03">3</option><option value="04">4</option><option value="05">5</option><option value="06">6</option><option value="07">7</option><option value="08">8</option><option value="09">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
				</select>日

			</dd>

			<div align="center"><input type="submit" name="submit" class="button" value="历史上的今天"/></div>
		</form>
	</dl>
</div>


<div class="detail">
	<h2>历史上的今天</h2>
	<dl>
		<ul>
			<?php $_from = $this->_tpl_vars['lishidata']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
			<li><a class="inlink" href="/hdjr/lishi/<?php echo $this->_tpl_vars['v']['id']; ?>
"><?php echo $this->_tpl_vars['k']+1; ?>
.<?php echo $this->_tpl_vars['v']['title']; ?>
</a></li>
			<?php endforeach; endif; unset($_from); ?>
		</ul>
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