<{include file='./h5/header.tpl'}>
<script>stepMenu();</script>
<div id="path">
	<{include file='./h5/public/path.tpl'}>
</div>

<div class="detail">
	<h3>在线起名：</h3>
	<dl>
		<form name="qiming" action="/index.php"  method="post" id="qiming" onSubmit="javascript:return validateForm();">
			<input type="hidden" name="ac" value="qiming" />
			<input type="hidden" name="ct" value="h5_xingming" />
			<dd class="form">
				<strong>姓氏</strong>：<input class="ipt" type="text" name="xing" maxLength=32 onBlur="if (value==''){value='请输入姓氏'}" onFocus="if (value=='请输入姓氏') {value=''}" value="请输入姓氏">
			</dd>
			<dd class="form">
				<strong>生日</strong>：<select name="y" class="select">
					<option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016" selected>2016</option>
				</SELECT>年
				<SELECT name="m" class="select">
					<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11" selected>11</option><option value="12">12</option>
				</SELECT>月
				<SELECT name="d" class="select">
					<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17" selected>17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
				</SELECT>日
			</dd>
			<dd class="form"><strong>时辰</strong>：<select size="1" name="hh" class="select">
					<option value="0" >子&nbsp;0</option><option value="1" >丑&nbsp;1</option><option value="2"  >丑&nbsp;2</option><option value="3"  >寅&nbsp;3</option><option value="4" >寅&nbsp;4</option><option value="5"  >卯&nbsp;5</option><option value="6" >卯&nbsp;6</option><option value="7" >辰&nbsp;7</option><option value="8" >辰&nbsp;8</option><option value="9"  >巳&nbsp;9</option><option value="10"  >巳&nbsp;10</option><option value="11"  >午&nbsp;11</option><option value="12"  >午&nbsp;12</option><option value="13"  >未&nbsp;13</option><option value="14"  >未&nbsp;14</option><option value="15"  >申&nbsp;15</option><option value="16"  >申&nbsp;16</option><option value="17"  >酉&nbsp;17</option><option value="18"  >酉&nbsp;18</option><option value="19"  >戌&nbsp;19</option><option value="20"  >戌&nbsp;20</option><option value="21"  >亥&nbsp;21</option><option value="22"  >亥&nbsp;22</option><option value="23"  >子&nbsp;23</option>
				</select>
			</dd>
			<dd class="form"><strong>性别</strong>：<input type="radio" name="sex" id="sex1" value="1" checked/><label for="sex1">&nbsp;男</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="sex0" name="sex" value="0" /><label for="sex0">&nbsp;女</label>
			</dd>
			<dd class="form">
				<strong>名字</strong>：<input type="radio" name="num" id="num1" value="1" >
				<label for="num1">单字</label>
				<input name="num" type="radio" id="num2" value="2" checked>
				<label for="num2">双字</label>
				<input type="radio" name="num" id="num0" value="0" >
				<label for="num0">不限</label>
			</dd>
			<dd>
				<div align="center"><input type="submit" class="button" name="submit1" value="马上起名">
					<input type="hidden" name="action" value="jieguo"></div>
			</dd>
			<script language="javascript">
				function validateForm()
				{
					if (qiming.surname.value=="请输入姓氏" || qiming.surname.value=="")
					{
						alert("请输入姓氏！");
						qiming.surname.value="";
						qiming.surname.focus();
						return false;
					}
					var reg=/[^\u4E00-\u9FA5]/g;
					if(reg.test(qiming.surname.value))
					{
						alert("请您输入汉字！");
						qiming.surname.focus();
						return false;
					}
				}
			</script>
		</form>
	</dl>
</div>
<div>

</div>
<div class="detail">
	<h3>免费起名简介：</h3>
	<dl>
		<dd>
			<strong>「在线起名」</strong>起名是人类的文化行为之一。作为父母，随着孩子的降临人生，首先要给宝宝起一个好名字，神算网为你免费在线起名，以寄托美好愿望，希望孩子将来成就一番事业。古语云"宁可生错命，不可起错名"，一个好的名字，不仅给别人印象深刻，而且还关系到人一生的事业、婚姻、健康和人际关系。蛇宝宝起名大全名字笔画五行不要和命谱四柱五行相联系，它本身五格部象的五行相生相克是其本身独立一格的五行，与命谱五行没有联系的，无须考虑笔画五行来选名字，但名字的笔画五行在五格剖象中要五行相生，不能相克。
			本站基于以上原则和自动生成算法，只需要输入你的姓氏可以免费为你推荐目前较为优秀的名字，并自动评为你的宝宝起名字测试打分及作出详细的命理、运程、吉凶解析。
		</dd>
	</dl>
</div>

<div>
	<{include file='./h5/public/more_nav.tpl'}>
</div>
<div class="detail qmlist">
	<h3>中国姓名大全2016年最新版：</h3>
	<dl>
		<ul class="xsdq">

			<{foreach from=$xinglist item=v key=k}>

				<{if $k==0}>
					<li>
				<{/if}>
					<a href="/xingming/qiming/list-<{$v.id}>-0-0-1.html"><{$v.xing}></a>
				<{if ($k+1)%4==0 && $k!=195 && $k!=0}>
					</li><li>
				<{/if}>
				<{if $k==195}>
					</li>
				<{/if}>
			<{/foreach}>
		</ul>
	</dl>
</div>
<{include file='./h5/public/news.tpl'}>

<div id="navi">
	<{include file='./h5/public/h5_nav.tpl'}>
</div>
<{include file='./index/footer.tpl'}>