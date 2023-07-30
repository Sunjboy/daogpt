<{include file='./h5/header.tpl'}>
<style>
.zodiacList .zodiacList_title {
    margin: 10px 0;
    height: 28px;
    line-height: 28px;
    font-size: 15px;
}

.zodiacList span.ranking {
    float: right;
    font-weight: normal;
    font-size: 12px;
}

.zodiacList  ul li {
    margin: 0;
}

.zodiacList {
    padding: 0 10px;
}

.zodiacList .zodiacList_icon {
    float: left;
    width: 140px;
    margin-right: 20px;
    margin-top: 10px;
}
.zodiacList_star{margin-left:160px; line-height: 24px;}
.zodiacList_star p {
	white-space:nowrap; text-overflow:ellipsis; overflow:hidden;
}

.zodiacList_info {
    overflow: hidden;
    margin-bottom: 10px;
}
</style>
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

	<h3 class="suanmingDetail_title">十二生肖</h3>




	<!---->
	<div class="zodiacList">
		<ul >
			<li>
				<h2 class="zodiacList_title"><span class="name">属鼠生肖性格</span><span class="ranking"><a href="/shengxiao/shu/">更多>></a></span></h2>
				<div class="zodiacList_info clearbox">
					<div class="zodiacList_icon">
						<a href="/shengxiao/shu/" title="属鼠"><img src="<{$web_url}>static/bazi/images/shengxiao1.png" class="png"  width="140" height="100" alt="属鼠运势"></a>
					</div>
					<div class="zodiacList_star">

						<{foreach from=$sx.0 item=v}>
						<p><a href="<{$v.url}>"><{$v.title}></a></p>
						<{/foreach}>

					</div>
				</div>
				<div class="zodiacList_about">
					&nbsp;&nbsp;&nbsp;&nbsp;属鼠人接连度过冲太岁的马年和害太岁的羊年，进入2016年丙申猴年，申猴属金生子鼠之水，又生肖与岁支申猴呈"申子半合"之象，预示着获太岁眷顾，得贵人扶助，对属鼠人2016年运...<a href="/shengxiao/shu/" title="属鼠运势">[详细]</a>
				</div>
				<div class="zodiacList_link">
					<a href="/shengxiao/shu/" title="属鼠运势">1948年</a>
					<a href="/shengxiao/shu/" title="属鼠运势">1960年</a>
					<a href="/shengxiao/shu/" title="属鼠运势">1972年</a>
					<a href="/shengxiao/shu/" title="属鼠运势">1984年</a>
					<a href="/shengxiao/shu/" title="属鼠运势">1996年</a>
				</div>
			</li>
			<li>
				<h2 class="zodiacList_title"><span class="name">属牛生肖性格</span><span class="ranking"><a href="/shengxiao/niu/">更多>></a></span></h2>
				<div class="zodiacList_info clearbox">
					<div class="zodiacList_icon">
						<a href="/shengxiao/niu/" title="属牛"><img src="<{$web_url}>static/bazi/images/shengxiao2.png" class="png"  width="140" height="100" alt="属牛运势"></a>
					</div>
					<div class="zodiacList_star">

						<{foreach from=$sx.1 item=v}>
						<p><a href="<{$v.url}>"><{$v.title}></a></p>
						<{/foreach}>

					</div>
				</div>
				<div class="zodiacList_about">
					&nbsp;&nbsp;&nbsp;&nbsp;属牛人度过冲太岁的2015年，进入2016年丙申猴年，在多颗与事业发展有关的贵人星相助下，可望获得不少有发展潜能的机会，无奈仍会受到凶星的牵动，发展过程中出现不...<a href="/shengxiao/niu/" title="属牛运势">[详细]</a>
				</div>
				<div class="zodiacList_link">
					<a href="/shengxiao/niu/" title="属牛运势">1949年</a>
					<a href="/shengxiao/niu/" title="属牛运势">1961年</a>
					<a href="/shengxiao/niu/" title="属牛运势">1973年</a>
					<a href="/shengxiao/niu/" title="属牛运势">1985年</a>
					<a href="/shengxiao/niu/" title="属牛运势">1997年</a>
				</div>
			</li>
			<li>
				<h2 class="zodiacList_title"><span class="name">属虎生肖性格</span><span class="ranking"><a href="/shengxiao/hu/">更多>></a></span></h2>
				<div class="zodiacList_info clearbox">
					<div class="zodiacList_icon">
						<a href="/shengxiao/hu/" title="属虎"><img src="<{$web_url}>static/bazi/images/shengxiao3.png" class="png"  width="140" height="100" alt="属虎运势"></a>
					</div>
					<div class="zodiacList_star">
						<{foreach from=$sx.2 item=v}>
						<p><a href="<{$v.url}>"><{$v.title}></a></p>
						<{/foreach}>
					</div>
				</div>
				<div class="zodiacList_about">
					&nbsp;&nbsp;&nbsp;&nbsp;属 虎人进入2016年丙申猴年，与太岁寅申相冲，虽然老虎并不怕猴子，但无疑现在时机不对，六冲力量是犯太岁中最严重的一种，加之又有四大凶星云集，属虎人 可...<a href="/shengxiao/hu/" title="属虎运势">[详细]</a>
				</div>
				<div class="zodiacList_link">
					<a href="/shengxiao/hu/" title="属虎运势">1950年</a>
					<a href="/shengxiao/hu/" title="属虎运势">1962年</a>
					<a href="/shengxiao/hu/" title="属虎运势">1974年</a>
					<a href="/shengxiao/hu/" title="属虎运势">1986年</a>
					<a href="/shengxiao/hu/" title="属虎运势">1998年</a>
				</div>
			</li>
			<li>
				<h2 class="zodiacList_title"><span class="name">属兔生肖性格</span><span class="ranking"><a href="/shengxiao/tu/">更多>></a></span></h2>
				<div class="zodiacList_info clearbox">
					<div class="zodiacList_icon">
						<a href="/shengxiao/tu/" title="属兔"><img src="<{$web_url}>static/bazi/images/shengxiao4.png" class="png"  width="140" height="100" alt="属兔运势"></a>
					</div>
					<div class="zodiacList_star">
						<{foreach from=$sx.3 item=v}>
						<p><a href="<{$v.url}>"><{$v.title}></a></p>
						<{/foreach}>
					</div>
				</div>
				<div class="zodiacList_about">
					&nbsp;&nbsp;&nbsp;&nbsp;属兔人进入2016年丙申猴年，属木的卯兔是申猴的钱财，因此在猴年，属兔人会有较多的发展机会，八字喜金者运势会更旺。且年逢有"月德"及"地解" 二...<a href="/shengxiao/tu/" title="属兔运势">[详细]</a>
				</div>
				<div class="zodiacList_link">
					<a href="/shengxiao/tu/" title="属兔运势">1951年</a>
					<a href="/shengxiao/tu/" title="属兔运势">1963年</a>
					<a href="/shengxiao/tu/" title="属兔运势">1975年</a>
					<a href="/shengxiao/tu/" title="属兔运势">1987年</a>
					<a href="/shengxiao/tu/" title="属兔运势">1999年</a>
				</div>
			</li>
			<li>
				<h2 class="zodiacList_title"><span class="name">属龙生肖性格</span><span class="ranking"><a href="/shengxiao/long/">更多>></a></span></h2>
				<div class="zodiacList_info clearbox">
					<div class="zodiacList_icon">
						<a href="/shengxiao/long/" title="属龙"><img src="<{$web_url}>static/bazi/images/shengxiao5.png" class="png"  width="140" height="100" alt="属龙运势"></a>
					</div>
					<div class="zodiacList_star">
						<{foreach from=$sx.4 item=v}>
						<p><a href="<{$v.url}>"><{$v.title}></a></p>
						<{/foreach}>
					</div>
				</div>
				<div class="zodiacList_about">
					&nbsp;&nbsp;&nbsp;&nbsp;属龙人进入2016年丙申猴年，由于流年与出生年支（生肖）申辰相合，今年运势相对会比较稳定。再加上年逢"三台"星的扶持，只要自己努力用心，工作上较易得到领导的认同及赏识，具有...<a href="/shengxiao/long/" title="属龙运势">[详细]</a>
				</div>
				<div class="zodiacList_link">
					<a href="/shengxiao/long/" title="属龙运势">1952年</a>
					<a href="/shengxiao/long/" title="属龙运势">1964年</a>
					<a href="/shengxiao/long/" title="属龙运势">1976年</a>
					<a href="/shengxiao/long/" title="属龙运势">1988年</a>
					<a href="/shengxiao/long/" title="属龙运势">2000年</a>
				</div>
			</li>
			<li>
				<h2 class="zodiacList_title"><span class="name">属蛇生肖性格</span><span class="ranking"><a href="/shengxiao/she/">更多>></a></span></h2>
				<div class="zodiacList_info clearbox">
					<div class="zodiacList_icon">
						<a href="/shengxiao/she/" title="属蛇"><img src="<{$web_url}>static/bazi/images/shengxiao6.png" class="png"  width="140" height="100" alt="属蛇运势"></a>
					</div>
					<div class="zodiacList_star">
						<{foreach from=$sx.5 item=v}>
						<p><a href="<{$v.url}>"><{$v.title}></a></p>
						<{/foreach}>
					</div>
				</div>
				<div class="zodiacList_about">
					&nbsp;&nbsp;&nbsp;&nbsp;属 蛇人进入2016丙申猴年，生肖与流年地支形成了"巳申刑合"之势，这种既相刑又相合的复杂关系将导致属蛇人的运势有...<a href="/shengxiao/she/" title="2016年属蛇运势">[详细]</a>
				</div>
				<div class="zodiacList_link">
					<a href="/shengxiao/she/" title="属蛇运势">1953年</a>
					<a href="/shengxiao/she/" title="属蛇运势">1965年</a>
					<a href="/shengxiao/she/" title="属蛇运势">1977年</a>
					<a href="/shengxiao/she/" title="属蛇运势">1989年</a>
					<a href="/shengxiao/she/" title="属蛇运势">2001年</a>
				</div>
			</li>
			<li>
				<h2 class="zodiacList_title"><span class="name">属马生肖性格</span><span class="ranking"><a href="/shengxiao/ma/">更多>></a></span></h2>
				<div class="zodiacList_info clearbox">
					<div class="zodiacList_icon">
						<a href="/shengxiao/ma/" title="属马"><img src="<{$web_url}>static/bazi/images/shengxiao7.png" class="png"  width="140" height="100" alt="属马运势"></a>
					</div>
					<div class="zodiacList_star">
						<{foreach from=$sx.6 item=v}>
						<p><a href="<{$v.url}>"><{$v.title}></a></p>
						<{/foreach}>
					</div>
				</div>
				<div class="zodiacList_about">
					&nbsp;&nbsp;&nbsp;&nbsp;属马人度过与太岁相合的2015年，可能是有人欢喜有人忧，而进入2016丙申猴年，运势表现则较为平淡。午火克申金，火可以融化金属，但必须要极高的温度，这意味...<a href="/shengxiao/ma/" title="属马运势">[详细]</a>
				</div>
				<div class="zodiacList_link">
					<a href="/shengxiao/ma/" title="属马运势">1954年</a>
					<a href="/shengxiao/ma/" title="属马运势">1966年</a>
					<a href="/shengxiao/ma/" title="属马运势">1978年</a>
					<a href="/shengxiao/ma/" title="属马运势">1990年</a>
					<a href="/shengxiao/ma/" title="属马运势">2002年</a>
				</div>
			</li>
			<li>
				<h2 class="zodiacList_title"><span class="name">属羊生肖性格</span><span class="ranking"><a href="/shengxiao/yang/">更多>></a></span></h2>
				<div class="zodiacList_info clearbox">
					<div class="zodiacList_icon">
						<a href="/shengxiao/yang/" title="属羊"><img src="<{$web_url}>static/bazi/images/shengxiao8.png" class="png"  width="140" height="100" alt="属羊运势"></a>
					</div>
					<div class="zodiacList_star">
						<{foreach from=$sx.7 item=v}>
						<p><a href="<{$v.url}>"><{$v.title}></a></p>
						<{/foreach}>
					</div>
				</div>
				<div class="zodiacList_about">
					&nbsp;&nbsp;&nbsp;&nbsp;属羊人终于度过值太岁的本命年，进入2016丙申猴年，今年一扫阴霾，运势可谓不错。依据八字五行原理，未羊属土，申猴属金，土生金，土为...<a href="/shengxiao/yang/" title="属羊运势">[详细]</a>
				</div>
				<div class="zodiacList_link">
					<a href="/shengxiao/yang/" title="属羊运势">1955年</a>
					<a href="/shengxiao/yang/" title="属羊运势">1967年</a>
					<a href="/shengxiao/yang/" title="属羊运势">1979年</a>
					<a href="/shengxiao/yang/" title="属羊运势">1991年</a>
					<a href="/shengxiao/yang/" title="属羊运势">2003年</a>
				</div>
			</li>
			<li>
				<h2 class="zodiacList_title"><span class="name">属猴生肖性格</span><span class="ranking"><a href="/shengxiao/hou/">更多>></a></span></h2>
				<div class="zodiacList_info clearbox">
					<div class="zodiacList_icon">
						<a href="/shengxiao/hou/" title="属猴"><img src="<{$web_url}>static/bazi/images/shengxiao9.png" class="png"  width="140" height="100" alt="属猴运势"></a>
					</div>
					<div class="zodiacList_star">
						<{foreach from=$sx.8 item=v}>
						<p><a href="<{$v.url}>"><{$v.title}></a></p>
						<{/foreach}>
					</div>
				</div>
				<div class="zodiacList_about">
					&nbsp;&nbsp;&nbsp;&nbsp;属 猴人进入2016丙申猴年，正处于值太岁的"本命年"，此乃"犯太岁"的一种。所谓"太岁当头坐，无喜恐有祸"，"犯太...<a href="/shengxiao/hou/" title="2016年属猴运势">[详细]</a>
				</div>
				<div class="zodiacList_link">
					<a href="/shengxiao/hou/" title="属猴运势">1956年</a>
					<a href="/shengxiao/hou/" title="属猴运势">1968年</a>
					<a href="/shengxiao/hou/" title="属猴运势">1980年</a>
					<a href="/shengxiao/hou/" title="属猴运势">1992年</a>
					<a href="/shengxiao/hou/" title="属猴运势">2004年</a>
				</div>
			</li>
			<li>
				<h2 class="zodiacList_title"><span class="name">属鸡生肖性格</span><span class="ranking"><a href="/shengxiao/ji/">更多>></a></span></h2>
				<div class="zodiacList_info clearbox">
					<div class="zodiacList_icon">
						<a href="/shengxiao/ji/" title="属鸡"><img src="<{$web_url}>static/bazi/images/shengxiao10.png" class="png"  width="140" height="100" alt="属鸡运势"></a>
					</div>
					<div class="zodiacList_star">
						<{foreach from=$sx.9 item=v}>
						<p><a href="<{$v.url}>"><{$v.title}></a></p>
						<{/foreach}>
					</div>
				</div>
				<div class="zodiacList_about">
					&nbsp;&nbsp;&nbsp;&nbsp;属鸡人进入2016丙申猴年，今年的运势较为低迷。酉鸡和申猴都属金，但却有着显然不同的个性，各自追求不同的生活方式。对属鸡人来说，猴年基本意味着压 力...<a href="/shengxiao/ji/" title="属鸡运势">[详细]</a>
				</div>
				<div class="zodiacList_link">
					<a href="/shengxiao/ji/" title="属鸡运势">1957年</a>
					<a href="/shengxiao/ji/" title="属鸡运势">1969年</a>
					<a href="/shengxiao/ji/" title="属鸡运势">1981年</a>
					<a href="/shengxiao/ji/" title="属鸡运势">1993年</a>
					<a href="/shengxiao/ji/" title="属鸡运势">2005年</a>
				</div>
			</li>
			<li>
				<h2 class="zodiacList_title"><span class="name">属狗生肖性格</span><span class="ranking"><a href="/shengxiao/gou/">更多>></a></span></h2>
				<div class="zodiacList_info clearbox">
					<div class="zodiacList_icon">
						<a href="/shengxiao/gou/" title="属狗"><img src="<{$web_url}>static/bazi/images/shengxiao11.png" class="png"  width="140" height="100" alt="属狗运势"></a>
					</div>
					<div class="zodiacList_star">
						<{foreach from=$sx.10 item=v}>
						<p><a href="<{$v.url}>"><{$v.title}></a></p>
						<{/foreach}>
					</div>
				</div>
				<div class="zodiacList_about">
					&nbsp;&nbsp;&nbsp;&nbsp;属狗人进入2016丙申猴年，由于今年并无半颗吉星驾临，因此，运势并不是太理想，要提前做好迎接挑战的心理准备。好在从五行角度来看...<a href="/shengxiao/gou/" title="属鼠狗势">[详细]</a>
				</div>
				<div class="zodiacList_link">
					<a href="/shengxiao/gou/" title="属狗运势">1958年</a>
					<a href="/shengxiao/gou/" title="属狗运势">1970年</a>
					<a href="/shengxiao/gou/" title="属狗运势">1982年</a>
					<a href="/shengxiao/gou/" title="属狗运势">1994年</a>
					<a href="/shengxiao/gou/" title="属狗运势">2006年</a>
				</div>
			</li>
			<li>
				<h2 class="zodiacList_title"><span class="name">属猪生肖性格</span><span class="ranking"><a href="/shengxiao/zhu/">更多>></a></span></h2>
				<div class="zodiacList_info clearbox">
					<div class="zodiacList_icon">
						<a href="/shengxiao/zhu/" title="属猪"><img src="<{$web_url}>static/bazi/images/shengxiao12.png" class="png"  width="140" height="100" alt="属猪运势"></a>
					</div>
					<div class="zodiacList_star">
						<{foreach from=$sx.11 item=v}>
						<p><a href="<{$v.url}>"><{$v.title}></a></p>
						<{/foreach}>
					</div>
				</div>
				<div class="zodiacList_about">
					&nbsp;&nbsp;&nbsp;&nbsp;属猪人进入2016丙申猴年，生肖与流年地支形成"申亥相害"之局，"害太岁"也是犯太岁的一种，代表将...<a href="/shengxiao/zhu/" title="属猪运势">[详细]</a>
				</div>
				<div class="zodiacList_link">
					<a href="/shengxiao/zhu/" title="属猪运势">1959年</a>
					<a href="/shengxiao/zhu/" title="属猪运势">1971年</a>
					<a href="/shengxiao/zhu/" title="属猪运势">1983年</a>
					<a href="/shengxiao/zhu/" title="属猪运势">1995年</a>
					<a href="/shengxiao/zhu/" title="属猪运势">2007年</a>
				</div>
			</li>
		</ul>
	</div>
	<!---->

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
	<a href="<{$img_data.0.url}>" title="<{$img_data.0.title}>" class="xingzuo_topic_img"><img src="http://www.ss230.com<{$img_data.0.img}>" width="120" height="90" alt="<{$img_data.0.title}>"></a>
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