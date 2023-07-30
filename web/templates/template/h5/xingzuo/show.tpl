<{include file='./h5/header.tpl'}>
<script>stepMenu();</script>
<div id="path">
	<{include file='./h5/public/path.tpl'}>
</div>

<h1 class="title"><{$seo.name}></h1>
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

	<h3 class="suanmingDetail_title"><{$data.title}> ：今日运势-<?=date('Y年m月d日',time())?></h3>

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

	<div class="suanmingDetail_item">

		<table cellpadding="0" cellspacing="0" border="0" class="dataTable table">

			<tbody>



			<tr>

				<th>综合指数</th>

				<td><p><{$data.jintian.index.zonghe}>%</p></td>

			</tr>

			<tr>

				<th>爱情指数</th>

				<td><{$data.jintian.index.aiqing}>%</td>

			</tr>

			<tr>

				<th>工作指数</th>

				<td><{$data.jintian.index.gongzuo}>%</td>

			</tr>

			<tr>

				<th>财运指数</th>

				<td><{$data.jintian.index.caiyun}>%</td>

			</tr>

			<tr>

				<th>健康指数</th>

				<td><{$data.jintian.index.jiankang}>%</td>

			</tr>

			<tr>

				<th>幸运颜色</th>

				<td><{$data.jintian.index.yanse}></td>

			</tr>

			<tr>

				<th>幸运数字</th>

				<td><{$data.jintian.index.xingyunshuzi}></td>

			</tr>

			<tr>

				<th>开运方位</th>

				<td><{$data.jintian.index.kaiyunfangwei}></td>

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
						<{$data.jintian.content}>
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

						<{$data.dsc}>

					</p>

					<ul id="myTab0">
						<li class="active" onClick="nTabs(this,0);">今日运势</li>
						<li class="normal" onClick="nTabs(this,1);">明日运势</li>
						<li class="normal"><a href="/<{$seo.extra}>week/" target="_blank">本周运势</a></li>
						<li class="normal"><a href="/<{$seo.extra}>month/" target="_blank">本月运势</a></li>
						<li class="normal last"><a href="/<{$seo.extra}>year/" target="_blank">本年运势</a></li>
					</ul>
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
<{include file='./h5/public/news.tpl'}>
<div class="detail">

	<h3><a href="/list-345-<{$category}>.html"><{$date.title}>话题：</a></h3>
    

	<{if $img_data.0.img}>
	<a href="<{$img_data.0.url}>" title="<{$img_data.0.title}>" class="xingzuo_topic_img"><img src="http://www.ss230.com<{$img_data.0.img}>" class="xzshow_img" width="120" height="90" alt="<{$img_data.0.title}>"></a>
	<div class="xingzuo_topic_words">
		<h2><a href="<{$img_data.0.url}>" title="<{$img_data.0.title}>" class="ffyh"><{$img_data.0.title}></a></h2>
		<div class="xingzuo_topic_read">
			<p><{$img_data.0.shorttxt|truncate:120}><a href="<{$img_data.0.url}>">[详细]</a></p>
		</div>
	</div>
	<{/if}>

	<dl>
		<{foreach from=$list_data item=v}>
		<li><a href="<{$v.url}>" title="<{$v.title}>">·<{$v.title|truncate:16}></a></li>
		<{/foreach}>

	</dl>

</div>

<div id="navi">
	<{include file='./h5/public/h5_nav.tpl'}>
</div>
<{include file='./h5/footer.tpl'}>