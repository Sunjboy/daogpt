<?php /* Smarty version 2.6.25, created on 2017-12-06 15:24:40
         compiled from h5/xingzuo/xingzuoyunshi.tpl */ ?>
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

	<h3 class="suanmingDetail_title"><?php echo $this->_tpl_vars['data']['shorttxt']; ?>
</h3>

	<div class="mainBox">

		<div class="suanmingDetail_info">

			<div class="xz_nav sss sss1" style="display: block;">

				<ul>

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


</div>


<div class="detail">
	<div class="remark center">时间：<?php echo $this->_tpl_vars['data']['uptime']; ?>
 &nbsp; 来源：神算网 &nbsp; 关键词：<?php echo $this->_tpl_vars['data']['title']; ?>
</div>

	<h2><?php echo $this->_tpl_vars['data']['title']; ?>
今日指数：</h2>
	<div class="h2_content">
		<p>综合：<?php echo $this->_tpl_vars['data']['content']['zonghe']; ?>
%; 爱情：<?php echo $this->_tpl_vars['data']['content']['aiqing']; ?>
%; 工作：<?php echo $this->_tpl_vars['data']['content']['gongzuo']; ?>
%;</p>

		<p>财富：<?php echo $this->_tpl_vars['data']['content']['caiyun']; ?>
%; 健康：<?php echo $this->_tpl_vars['data']['content']['jiankang']; ?>
; 开运方位：<?php echo $this->_tpl_vars['data']['content']['kaiyunfangwei']; ?>
</p>

		<p>幸运数字：<?php echo $this->_tpl_vars['data']['content']['xingyunshuzi']; ?>
; 幸运颜色：<?php echo $this->_tpl_vars['data']['content']['yanse']; ?>
</p>
	</div>

	<h2><?php echo $this->_tpl_vars['data']['title']; ?>
今日建议：</h2>
	<div class="h2_content">
		<?php echo $this->_tpl_vars['data']['des']; ?>

	</div>

	<h2><?php echo $this->_tpl_vars['data']['title']; ?>
宜忌：</h2>
	<div class="h2_content">
		<p>宜：<?php echo $this->_tpl_vars['data']['yi']; ?>
</p>
		<p>忌：<?php echo $this->_tpl_vars['data']['ji']; ?>
</p>
	</div>

	<h2><?php echo $this->_tpl_vars['data']['title']; ?>
图解：</h2>
	<div class="h2_content">
		<img src="<?php echo $this->_tpl_vars['web_url']; ?>
<?php echo $this->_tpl_vars['data']['img']; ?>
" width="100%" style="border:0;" />
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


	<h3>你可能感兴趣的：</h3>

	<dl>
		<li>
			<?php $_from = $this->_tpl_vars['hot_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
		<li>
			<a href="<?php echo $this->_tpl_vars['v']['url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['v']['title']; ?>
</a>
		</li>
		<?php endforeach; endif; unset($_from); ?>
		</li>
	</dl>

</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './h5/public/news.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

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