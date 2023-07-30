<?php /* Smarty version 2.6.25, created on 2017-12-02 09:44:27
         compiled from h5/xingzuo/page.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'h5/xingzuo/page.tpl', 312, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './h5/header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<style>
.cbst ul li{float:left;}
</style>
<script>stepMenu();</script>
<div id="path">
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './h5/public/path.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>

<h1 class="title"><?php echo $this->_tpl_vars['seo']['name']; ?>
</h1>
<form name=form1 action="/index.php" method="post">
	<input type="hidden" name="ct" value="h5_zgjm">
	<input type="hidden" name="ac" value="search">

	<div id="se_wrap">

		<div id="se_inner">

			<input type="text" name="q" maxLength=32 class="se-input" onBlur="if (value==''){value='请输入梦见了什么'}" onFocus="if (value=='请输入梦见了什么') {value=''}" value="请输入梦见了什么">

			<div id="cross"></div>

		</div>

		<input id="se_bn" type="submit" name="submit1" value="解梦">

	</div>

</form>


<div class="detail">

	<h3 class="suanmingDetail_title"><?php echo $this->_tpl_vars['data']['title']; ?>
 ：今日运势-<?=date('Y年m月d日',time())?></h3>

	<div class="mainBox">

		<div class="suanmingDetail_info">

			<div class="xz_nav sss sss1" style="display: block; height:auto;">

				<ul class="clearbox">

					<li><a class="x1" href="/xingzuo/baiyang/"><img src="/static/img/xingzuo/1.png" alt="白羊座"></a><span>白羊座</span></li>

					<li><a class="x2" href="/xingzuo/jinniu/"><img src="/static/img/xingzuo/2.png" alt="金牛座"></a><span>金牛座</span></li>

					<li><a class="x3" href="/xingzuo/shuangzi/"><img src="/static/img/xingzuo/3.png" alt="双子座"></a><span>双子座</span></li>

					<li><a class="x4" href="/xingzuo/juxie/"><img src="/static/img/xingzuo/4.png" alt="巨蟹座"></a><span>巨蟹座</span></li>

					<li><a class="x5" href="/xingzuo/shizi/"><img src="/static/img/xingzuo/5.png" alt="狮子座"></a><span>狮子座</span></li>

					<li><a class="x6" href="/xingzuo/chunv/"><img src="/static/img/xingzuo/6.png" alt="处女座"></a><span>处女座</span></li>

					<li><a class="x7" href="/xingzuo/tiancheng/"><img src="/static/img/xingzuo/7.png" alt="天秤座"></a><span>天秤座</span></li>

					<li><a class="x8" href="/xingzuo/tianxie/"><img src="/static/img/xingzuo/8.png" alt="天蝎座"></a><span>天蝎座</span></li>

					<li><a class="x9" href="/xingzuo/sheshou/"><img src="/static/img/xingzuo/9.png" alt="射手座"></a><span>射手座</span></li>

					<li><a class="x10" href="/xingzuo/mojie/"><img src="/static/img/xingzuo/10.png" alt="摩羯座"></a><span>摩羯座</span></li>

					<li><a class="x11" href="/xingzuo/shuiping/"><img src="/static/img/xingzuo/11.png" alt="水瓶座"></a><span>水瓶座</span></li>

					<li><a class="x12" href="/xingzuo/shuangyu/"><img src="/static/img/xingzuo/12.png" alt="双鱼座"></a><span>双鱼座</span></li>

				</ul>

			</div>

		</div>

	</div>


	<div class="cbst">
		<ul class="clearbox">

			<li <?php if ($this->_tpl_vars['nid'] == 1): ?>class="on"<?php endif; ?>><a href="/<?php echo $this->_tpl_vars['seo']['extra']; ?>
today/">今日运势</a></li>
			<li <?php if ($this->_tpl_vars['nid'] == 2): ?>class="on"<?php endif; ?>><a href="/<?php echo $this->_tpl_vars['seo']['extra']; ?>
tomorrow/">明日运势</a></li>
			<li <?php if ($this->_tpl_vars['nid'] == 3): ?>class="on"<?php endif; ?>><a href="/<?php echo $this->_tpl_vars['seo']['extra']; ?>
week/">本周运势</a></li>
			<li <?php if ($this->_tpl_vars['nid'] == 4): ?>class="on"<?php endif; ?>><a href="/<?php echo $this->_tpl_vars['seo']['extra']; ?>
month/">本月运势</a></li>
			<li <?php if ($this->_tpl_vars['nid'] == 5): ?>class="on"<?php endif; ?>><a href="/<?php echo $this->_tpl_vars['seo']['extra']; ?>
year/">年度运势</a></li>
			<li <?php if ($this->_tpl_vars['nid'] == 6): ?>class="on"<?php endif; ?>><a href="/<?php echo $this->_tpl_vars['seo']['extra']; ?>
love/">爱情运势</a></li>

		</ul>
	</div>

	<div class="suanmingDetail_item">

		<div class="c">
			<dl class="bmt">
				<dt>
					<img src="<?php echo $this->_tpl_vars['web_url']; ?>
static/bazi/images/xingzuo/v2/1.gif" width="116" height="140" alt="">
				</dt>
				<dd>
					<h4><?php echo $this->_tpl_vars['data']['title']; ?>
</h4>
					<span>有效期限：<?=date('Y-m-d',time())?></span>
				</dd>
			</dl>

			<div class="mcz">
				<?php if ($this->_tpl_vars['nid'] != 6): ?>
				<ul class="clearfix">
					<li>
						<label>综合运势：</label>
						<em>
										<span class="star_b">
											<span class="star_f" style="width:<?php if ($this->_tpl_vars['nid'] < 3): ?><?php echo $this->_tpl_vars['list']['index']['zonghe']; ?>
<?php else: ?><?php echo $this->_tpl_vars['list']['index']['0']['star']*14; ?>
<?php endif; ?>px;"></span>
										</span>
						</em>
					</li>
					<li>
						<label>爱情运势：</label>
						<em>
										<span class="star_b">
											<span class="star_f" style="width:<?php if ($this->_tpl_vars['nid'] < 3): ?><?php echo $this->_tpl_vars['list']['index']['aiqing']; ?>
<?php else: ?><?php echo $this->_tpl_vars['list']['index']['1']['star']*14; ?>
<?php endif; ?>px;"></span>
										</span>
						</em>
					</li>
					<li>
						<label>工作状况：</label>
						<em>
										<span class="star_b">
											<span class="star_f" style="width:<?php if ($this->_tpl_vars['nid'] < 3): ?><?php echo $this->_tpl_vars['list']['index']['gongzuo']; ?>
<?php else: ?><?php echo $this->_tpl_vars['list']['index']['2']['star']*14; ?>
<?php endif; ?>px;"></span>
										</span>
						</em>
					</li>
					<li>
						<label>理财投资：</label>
						<em>
										<span class="star_b">
											<span class="star_f" style="width:<?php if ($this->_tpl_vars['nid'] < 3): ?><?php echo $this->_tpl_vars['list']['index']['caiyun']; ?>
<?php else: ?><?php echo $this->_tpl_vars['list']['index']['3']['star']*14; ?>
<?php endif; ?>px;"></span>
										</span>
						</em>
					</li>

					<?php if ($this->_tpl_vars['nid'] < 3): ?>

					<li>
						<label>健康指数：</label>
						<em><?php echo $this->_tpl_vars['list']['index']['jiankang']; ?>
%</em>
					</li>
					<li>
						<label>幸运颜色：</label>
						<em><?php echo $this->_tpl_vars['list']['index']['yanse']; ?>
</em>
					</li>
					<li>
						<label>幸运数字：</label>
						<em><?php echo $this->_tpl_vars['list']['index']['xingyunshuzi']; ?>
</em>
					</li>
					<li>
						<label>开运方位：</label>
						<em><?php echo $this->_tpl_vars['list']['index']['kaiyunfangwei']; ?>
</em>
					</li>

					<?php endif; ?>

				</ul>
				<?php endif; ?>

				<div class="teams">
					<div class="left"><img src="<?php echo $this->_tpl_vars['web_url']; ?>
static/bazi/images/pic_all.gif" border="0"></div>
					<div class="right">
						<h4>整体概况</h4>
						<p><?php echo $this->_tpl_vars['list']['content']; ?>
</p>
					</div>
					<div class="clear"></div>
				</div>

				<?php if ($this->_tpl_vars['nid'] == 5): ?><!--年度-->

				<!-- Group start -->
				<div class="teams bg">
					<div class="left"><img src="<?php echo $this->_tpl_vars['web_url']; ?>
static/bazi/images/pic_all.gif" width="55" height="60" border="0"></div>
					<div class="right">
						<h4>健康指数</h4>
						<p><?php echo $this->_tpl_vars['data']['nian']['jiankang']; ?>
</p>
					</div>
					<div class="clear"></div>
				</div>
				<!-- Group end -->

				<!-- Group start -->
				<div class="teams">
					<div class="left"><img src="<?php echo $this->_tpl_vars['web_url']; ?>
static/bazi/images/pic_job.gif" width="55" height="60" border="0"></div>
					<div class="right">
						<h4>工作职场</h4>
						<p><?php echo $this->_tpl_vars['data']['nian']['shiye']; ?>
</p>
					</div>
					<div class="clear"></div>
				</div>
				<!-- Group end -->

				<!-- Group start -->
				<div class="teams bg">
					<div class="left"><img src="<?php echo $this->_tpl_vars['web_url']; ?>
static/bazi/images/pic_money.gif" width="55" height="60" border="0"></div>
					<div class="right">
						<h4>金钱理财</h4>
						<p><?php echo $this->_tpl_vars['data']['nian']['caifu']; ?>
</p>
					</div>
					<div class="clear"></div>
				</div>
				<!-- Group end -->

				<!-- Group start -->
				<div class="teams">
					<div class="left"><img src="<?php echo $this->_tpl_vars['web_url']; ?>
static/bazi/images/pic_marry.gif" width="55" height="60" border="0"></div>
					<div class="right">
						<h4>恋爱婚姻</h4>
						<p><?php echo $this->_tpl_vars['data']['nian']['aiqing']; ?>
</p>
					</div>
					<div class="clear"></div>
				</div>
				<!-- Group end -->
				<?php endif; ?>


			</div>

			<div class="mcb">

				<?php if ($this->_tpl_vars['nid'] == 6): ?>
				<dl>
					<dt class="fcolor"><strong>总体爱情运势</strong></dt>
					<dd><?php echo $this->_tpl_vars['data']['love']['zh']; ?>
</dd>
				</dl>
				<dl>
					<dt class="fcolor"><strong>女生</strong></dt>
					<dd><?php echo $this->_tpl_vars['data']['love']['nv']; ?>
</dd>
				</dl>
				<dl>
					<dt class="fcolor"><strong>男生</strong></dt>
					<dd><?php echo $this->_tpl_vars['data']['love']['nan']; ?>
</dd>
				</dl>
				<?php endif; ?>

				<div class="arcbox">
					<h4>
						<strong>★<?php echo $this->_tpl_vars['data']['title']; ?>
的相关文章</strong>
						<small><a href="/list-345-<?php echo $this->_tpl_vars['category']; ?>
.html">更多&gt;&gt;</a></small>
					</h4>
					<ul class="litext">
						<?php $_from = $this->_tpl_vars['hot_content']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
						<li>·<a href="<?php echo $this->_tpl_vars['v']['url']; ?>
" target="_blank" title="<?php echo $this->_tpl_vars['v']['title']; ?>
"><?php echo $this->_tpl_vars['v']['title']; ?>
</a></li>
						<?php endforeach; endif; unset($_from); ?>
					</ul>
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

<div class="detail">

	<h3><a href="/xingzuo/yunshi/">12星座明日运势：</a></h3>

	<dl>

		<li>

			<a href="/xingzuo/baiyang/tomorrow/" title="白羊座明日运势">白羊</a> &nbsp;

			<a href="/xingzuo/jinniu/tomorrow/" title="金牛座明日运势">金牛</a> &nbsp;

			<a href="/xingzuo/shuangzi/tomorrow/" title="双子座明日运势">双子</a> &nbsp;

			<a href="/xingzuo/juxie/tomorrow/" title="巨蟹座明日运势">巨蟹</a> &nbsp;

			<a href="/xingzuo/shizi/tomorrow/" title="狮子座明日运势">狮子</a> &nbsp;

			<a href="/xingzuo/chunv/tomorrow/" title="处女座明日运势">处女</a></li>

		<li>

			<a href="/xingzuo/tiancheng/tomorrow/" title="天秤座明日运势">天秤</a> &nbsp;

			<a href="/xingzuo/tianxie/tomorrow/" title="天蝎座明日运势">天蝎</a> &nbsp;

			<a href="/xingzuo/sheshou/tomorrow/" title="射手座明日运势">射手</a> &nbsp;

			<a href="/xingzuo/mojie/tomorrow/" title="魔羯座明日运势">魔羯</a> &nbsp;

			<a href="/xingzuo/shuiping/tomorrow/" title="水瓶座明日运势">水瓶</a> &nbsp;

			<a href="/xingzuo/shuangyu/tomorrow/" title="双鱼座明日运势">双鱼</a></dd>

		</li>
        
        </dl>

</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './h5/public/news.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="detail">

	<h3><a href="/list-345-<?php echo $this->_tpl_vars['category']; ?>
.html"><?php echo $this->_tpl_vars['date']['title']; ?>
话题：</a></h3>

	<?php if ($this->_tpl_vars['img_data']['0']['img']): ?>
	<a href="<?php echo $this->_tpl_vars['img_data']['0']['url']; ?>
" title="<?php echo $this->_tpl_vars['img_data']['0']['title']; ?>
" class="xingzuo_topic_img"><img src="<?php echo $this->_tpl_vars['img_data']['0']['img']; ?>
" width="120" height="90" alt="<?php echo $this->_tpl_vars['img_data']['0']['title']; ?>
"></a>
	<div class="xingzuo_topic_words">
		<h2><a href="<?php echo $this->_tpl_vars['img_data']['0']['url']; ?>
" title="<?php echo $this->_tpl_vars['img_data']['0']['title']; ?>
" class="ffyh"><?php echo $this->_tpl_vars['img_data']['0']['title']; ?>
</a></h2>
		<div class="xingzuo_topic_read">
			<p><?php echo ((is_array($_tmp=$this->_tpl_vars['img_data']['0']['shorttxt'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 120) : smarty_modifier_truncate($_tmp, 120)); ?>
<a href="<?php echo $this->_tpl_vars['img_data']['0']['url']; ?>
">[详细]</a></p>
		</div>
	</div>
	<?php endif; ?>

	<dl>
		<?php $_from = $this->_tpl_vars['list_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
		<li><a href="<?php echo $this->_tpl_vars['v']['url']; ?>
" title="<?php echo $this->_tpl_vars['v']['title']; ?>
">·<?php echo ((is_array($_tmp=$this->_tpl_vars['v']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 16) : smarty_modifier_truncate($_tmp, 16)); ?>
</a></li>
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