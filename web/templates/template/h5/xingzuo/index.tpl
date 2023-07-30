<{include file='./h5/header.tpl'}>
<script>stepMenu();</script>
<div id="path">
	<{include file='./h5/public/path.tpl'}>
</div>

<h1 class="title"><{$seo.name}>-解梦</h1>
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

	<h3 class="suanmingDetail_title">白羊座 ：今日运势</h3>

	<div class="mainBox">

		<div class="suanmingDetail_info">

			<div class="xz_nav sss sss1" style="display: block;">

				<ul>

					<li><a class="x1" href="/xingzuo/baiyang/"><img src="/static/img/xingzuo/1.gif" alt="白羊座"></a><span>白羊座</span></li>

					<li><a class="x2" href="/xingzuo/jinniu/"><img src="/static/img/xingzuo/2.gif" alt="金牛座"></a><span>金牛座</span></li>

					<li><a class="x3" href="/xingzuo/shuangzi/"><img src="/static/img/xingzuo/3.gif" alt="双子座"></a><span>双子座</span></li>

					<li><a class="x4" href="/xingzuo/juxie/"><img src="/static/img/xingzuo/4.gif" alt="巨蟹座"></a><span>巨蟹座</span></li>

					<li><a class="x5" href="/xingzuo/shizi/"><img src="/static/img/xingzuo/5.gif" alt="狮子座"></a><span>狮子座</span></li>

					<li><a class="x6" href="/xingzuo/chunv/"><img src="/static/img/xingzuo/6.gif" alt="处女座"></a><span>处女座</span></li>

					<li><a class="x7" href="/xingzuo/tiancheng/"><img src="/static/img/xingzuo/7.gif" alt="天秤座"></a><span>天秤座</span></li>

					<li><a class="x8" href="/xingzuo/tianxie/"><img src="/static/img/xingzuo/8.gif" alt="天蝎座"></a><span>天蝎座</span></li>

					<li><a class="x9" href="/xingzuo/sheshou/"><img src="/static/img/xingzuo/9.gif" alt="射手座"></a><span>射手座</span></li>

					<li><a class="x10" href="/xingzuo/mojie/"><img src="/static/img/xingzuo/10.gif" alt="摩羯座"></a><span>摩羯座</span></li>

					<li><a class="x11" href="/xingzuo/shuiping/"><img src="/static/img/xingzuo/11.gif" alt="水瓶座"></a><span>水瓶座</span></li>

					<li><a class="x12" href="/xingzuo/shuangyu/"><img src="/static/img/xingzuo/12.gif" alt="双鱼座"></a><span>双鱼座</span></li>

				</ul>

			</div>

		</div>

	</div>

	<div class="suanmingDetail_item">

		<table cellpadding="0" cellspacing="0" border="0" class="dataTable table">

			<tbody>



			<tr>

				<th>综合指数</th>

				<td><p><{$xz_yunshi_baiyang.jintian.index.zonghe}>%</p></td>

			</tr>

			<tr>

				<th>爱情指数</th>

				<td><{$xz_yunshi_baiyang.jintian.index.aiqing}>%</td>

			</tr>

			<tr>

				<th>工作指数</th>

				<td><{$xz_yunshi_baiyang.jintian.index.gongzuo}>%</td>

			</tr>

			<tr>

				<th>财运指数</th>

				<td><{$xz_yunshi_baiyang.jintian.index.caiyun}>%</td>

			</tr>

			<tr>

				<th>健康指数</th>

				<td><{$xz_yunshi_baiyang.jintian.index.jiankang}>%</td>

			</tr>

			<tr>

				<th>幸运颜色</th>

				<td><{$xz_yunshi_baiyang.jintian.index.yanse}></td>

			</tr>

			<tr>

				<th>幸运数字</th>

				<td><{$xz_yunshi_baiyang.jintian.index.xingyunshuzi}></td>

			</tr>

			<tr>

				<th>开运方位</th>

				<td><{$xz_yunshi_baiyang.jintian.index.kaiyunfangwei}></td>

			</tr>

			</tbody>

		</table>

	</div>

	<div class="suanmingDetail_item">

		<table cellpadding="0" cellspacing="0" border="0" class="dataTable table">

			<tbody>

			<thead>

			<th>【今日提醒】</th>

			</thead>

			<tr>

				<td>

					<p>
						<{$xz_yunshi_baiyang.jintian.content}>
					</p>

				</td>

			</tr>

			</tbody>

		</table>

	</div>

	<div class="suanmingDetail_item">

		<table cellpadding="0" cellspacing="0" border="0" class="dataTable table">

			<tbody>

			<thead>

			<th>【简介】</th>

			</thead>

			<tr>

				<td>

					<p>

						<{$xz_yunshi_baiyang.dsc}>

					</p>

				</td>

			</tr>

			</tbody>

		</table>

	</div>

</div>

<div>
	<{include file='./h5/public/more_nav.tpl'}>
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

<div class="detail">

	<h3><a href="/xinli/">星座运势专栏：</a></h3>

	<dl>
		<{foreach from=$hot_content item=v key=k}>
			<li><a href="<{$v.url}>" class="inlink"  title="<{$v.title}>"><{$v.title|truncate:16}></a></li>
		<{/foreach}>

	</dl>

</div>

<div id="navi">
	<{include file='./h5/public/h5_nav.tpl'}>
</div>
<{include file='./h5/footer.tpl'}>