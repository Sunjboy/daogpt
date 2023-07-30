<{include file='./h5/header.tpl'}>
<script>stepMenu();</script>
<div id="path">
	<{include file='./h5/public/path.tpl'}>
</div>

<h1 class="title">陈姓取名，陈姓姓名大全2017年最新版</h1>

<div class="detail">

	<dl>

		<div class="h2_content">

			<p>
				<strong>「在线起名」</strong>起名是人类的文化行为之一。作为父母，随着孩子的降临人生，首先要给宝宝起一个好名字，神算网为你免费在线起名，以寄托美好愿望，希望孩子将来成就一番事业。古语云"宁可生错命，不可起错名"，一个好的名字，不仅给别人印象深刻，而且还关系到人一生的事业、婚姻、健康和人际关系。蛇宝宝起名大全名字笔画五行不要和命谱四柱五行相联系，它本身五格部象的五行相生相克是其本身独立一格的五行，与命谱五行没有联系的，无须考虑笔画五行来选名字，但名字的笔画五行在五格剖象中要五行相生，不能相克。
				本站基于以上原则和自动生成算法，只需要输入你的姓氏可以免费为你推荐目前较为优秀的名字，并自动评为你的宝宝起名字测试打分及作出详细的命理、运程、吉凶解析。
			</p>

		</div>

		<h2><{$xing}>姓<{$xingbie_s}><{$huashu_s}>名字大全：</h2>

        <{if $notcontent!=''}>
        <{$notcontent}>
        <{else}>
			<div class="namelist">
				<ul class="xsdq">
					<{foreach from=$list item=v key=k}>
						<li><a href="/xingming/xmfx/<{$v.name}>" target="_blank"><{$v.name}></a></li>
					<{/foreach}>
				</ul>
			</div>
			<div class="clear"></div>

		<{/if}>

		<div class="clear"></div>

		<div class="h2_content">

			<p>由于篇幅有限，在此只列表这么多陈姓名字，如果你觉得还是不够的话，您还可以使用：强大的<a href="/qiming/" target="_blank" class="red"><strong>免费起名</strong></a>、浪漫的<a href="/tangshi/" target="_blank" class="blue"><strong>唐诗起名</strong></a>、好听的<a href="/diangu/" target="_blank" class="blue"><strong>成语典故起名</strong></a>、精准的<a href="/name/" class="red" target="_blank"><strong>姓名测试</strong></a>等等。</p>

		</div>

	</dl>

</div>
<div>
	<{include file='./h5/public/more_nav.tpl'}>
</div>
<{include file='./h5/public/news.tpl'}>

<div id="navi">
	<{include file='./h5/public/h5_nav.tpl'}>
</div>
<{include file='./index/footer.tpl'}>