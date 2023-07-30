<{include file='./h5/header.tpl'}>
<script>stepMenu();</script>
<div id="path">
	<{include file='./h5/public/path.tpl'}>
</div>
<h1 class="title">八字合婚</h1>
<div class="detail">
	<div class="remark center">配对指数 &nbsp; 来源：神算网</div>

	<dd>
		<strong><p><strong>经过分析，[<{$one_arr.name1}>]和[<{$two_arr.name2}>]的姓名配对评分如下：</strong><span class="cRed"><{$two_arr.zf}>分</span> &nbsp;</p>
			<{if $one_arr.sex1==$two.sex2}>
			<font color=red>本站是按中国民俗学的一些测算方法来计算的，暂时不支持同性缘份的测试</font>
			<{else}>
			<p class="green">
				<{if $two_arr.zf<60}>
				你们的姓名五格可能不是太合，不过八字配合所起的作用更大，另外彼此的努力也会让你们改善关系，记住：事在人为！
				<{elseif $two_arr.zf>60 && $two_arr.zf<70}>
				你们的姓名五格相合程度马马虎虎，不过八字配合所起的作用更大，继续努力改善关系，会对你们的关系有帮助的！
				<{elseif $two_arr.zf>70 && $two_arr.zf<80}>
				你们的姓名五格相合程度还不错哟！
				<{elseif $two_arr.zf>80 && $two_arr.zf<90}>
				你们的姓名五格相合程度相当棒！
				<{else}>
				你们的姓名五格相合程度太棒了！！恭喜！
				<{/if}>
				<{if $one_arr.name1==$two_arr.name2}>
			<br /><font color=#0000ff>^_^ 你们俩同名同姓嘛，真巧哟！</font>
				<{/if}>
			</p>
			<{/if}>
			<p><a href="/xingming/qiming/" style="color:red;">若想改名,查看起名大全>></a></p>

	</dd>



	<h2>男命解析:</h2>

	<div class="h2_content">
		<span class="brown">
			<strong>姓名：<{$data.name}>  </strong><br>
			<strong>出生时间（公历）：<{$data.gongli1}></strong><br>
			<strong> 生肖:<{$data.shengxiao1}>(运势)</strong><br>
		</span>
		<span class="brown">
			命宫为：<strong><{$data.m_n}></strong><br>
			头胎为：<strong><{$data.erzi}></strong>
		</span>

	</div>


	<div class="h2_content">

		<table width="100%" border="0" cellpadding="1" cellspacing="1" bgcolor="#ddd" style="margin-top:10px;">

			<tbody>


			<tr>

				<th width="100" rowspan="3" class="cBrown">旬空：</th>

				<td width="101" class="cBlue">十神：</td>

				<td class="cBlue"><{$data.shishen1}></td>

				<td class="cBlue"><{$data.shishen2}></td>

				<td class="cBlue">日主：</td>

				<td class="cBlue"><{$data.rizhu1}></td>
			</tr>

			<tr>

				<td class="cRed">乾造：</td>

				<{$data.qianzao1}>

			</tr>

			<tr>

				<td>支十神：</td>

				<{$data.zhishishen1}>

			</tr>

			</tbody>

		</table>

		<table class="tableB">

			<tbody>

			<tr>

				<th width="100">十神：</th>

				<{$data.shishen_for1}>

			</tr>



			</tbody>

			<tfoot>

			<tr>

				<td colspan="9"> 您属于：<{$data.m_na}>四命，宜住<{$data.m_na}>四宅的房子为最佳，<br>最佳坐向：<{$data.m_nfw}></td>

			</tr>

			</tfoot>

		</table>

	</div>

	<div class="line"></div>

	<h2>女命解析:</h2>

	<div class="h2_content">
		<span class="brown">
			<strong>姓名：<{$data.name_a}>  </strong><br>
			<strong>出生时间（公历）：<{$data.gongli2}></strong><br>
			<strong> 生肖:<{$data.shengxiao2}>(运势)</strong><br>
		</span>
		<span class="brown">
			命宫为：<strong><{$data.m_v}></strong><br>
			头胎为：<strong><{$data.erzi_a}></strong>
		</span>

	</div>


	<div class="h2_content">

		<table width="100%" border="0" cellpadding="1" cellspacing="1" bgcolor="#ddd" style="margin-top:10px;">

			<tbody>


			<tr>

				<th width="100" rowspan="3" class="cBrown">旬空：</th>

				<td width="101" class="cBlue">十神：</td>

				<td class="cBlue"><{$data.shishenb1}></td>

				<td class="cBlue"><{$data.shishenb2}></td>

				<td class="cBlue">日主：</td>

				<td class="cBlue"><{$data.rizhu2}></td>
			</tr>

			<tr>

				<td class="cRed">坤造：</td>

				<{$data.qianzao2}>

			</tr>

			<tr>

				<td>支十神：</td>

				<{$data.zhishishen2}>

			</tr>

			</tbody>

		</table>

		<table class="tableB">

			<tbody>

			<tr>

				<th width="100">十神：</th>

				<{$data.shishen_for2}>

			</tr>



			</tbody>

			<tfoot>

			<tr>

				<td colspan="9">您属于： <{$data.m_va}>四命，宜住<{$data.m_va}>四宅的房子为最佳，最佳坐向：<{$data.m_vfw}></td>

			</tr>

			</tfoot>

		</table>

	</div>

	<div class="line"></div>


	<h2>八字合婚结果如下:</h2>

	<div class="h2_content">
		<span class="brown">
			<strong>命宫：<{$data.bb}>分  </strong>
			<p>此项为30分 说明：以东四命与西四命之说来合，如果相合，那么在购房时，应买与自己命宫相合的房子。</p>

			<strong>年支同气：<{$data.c}> 分</strong>
			<p>此项为20分 说明：如寅卯辰会东方木气，虎兔龙结合的机缘就大于其它属相；巳午未会南方火气，蛇马羊结合的机缘就大于其它属相；申酉戌会西方金气，猴鸡狗结合的机缘就大于其它属相；亥子丑会北方水气，猪鼠牛结合的机缘就大于其它属相。</p>

			<strong> 月令合：<{$data.yh}> 分</strong>
			<p>此项为5分 说明：男女生月相同者互相间也是很有缘份的。</p>

			<strong> 日干相合：<{$data.rrh}> 分</strong>
			<p>此项为25分 说明：谓日干舒配得所？日干五行相同，一阴一阳的组合男女结合的机缘最大，如甲日干逢乙日干，庚日干逢辛日干之类。</p>

			<strong> 天干五合：<{$data.rh}> 分</strong>
			<p>此项为5分 说明：其次是天干五合，如甲日干逢己日干，庚日干逢乙日干之类。再次则是比和或相生。</p>

			<strong> 子女同步：<{$data.ez}> 分</strong>
			<p>此项为15分 说明：何谓子女同步？西方的科学家在探索男女结合的奥秘时提出了 " 性染色体论 " ，我们东方人在四柱预测中看头胎子女的性别，男女双方的八字中头胎子女的性别必须一致。</p>

			<p><strong class="red">总分：<{$data.zongfen}> 分</strong></p>

		</span>
		<span class="brown">
			命宫为：<strong><{$data.m_v}></strong><br>
			头胎为：<strong><{$data.erzi_a}></strong>
		</span>

	</div>

	<div align="center">
		<a class="button" href="/peidui/hehun/">重新测试</a>
	</div>






	<h2>八字姓名详批</h2>
	<div style="display: block;" id="fenxi">
		<div class="h2_content">
			<form name="qiming" action="/index.php"  method="post" id="qiming" onSubmit="javascript:return validateForm();">
				<input type="hidden" value="375" name="tid">
				<input type="hidden" value="xmpd" name="ac" />
				<input type="hidden" value="h5_xingming" name="ct" />

				<dd class="form">
					<strong><img src="<{$web_url}>static/bazi/img/suanming/v2/boy_icon.png" alt="男人" width="10" class="item_imgIcon">男方姓名</strong>：<input class="ipt" type="text" name="name1" maxLength=32 onBlur="if (value==''){value='请输入姓氏'}" onFocus="if (value=='请输入姓氏') {value=''}" value="请输入姓氏">
				</dd>
				<dd class="form"><strong>性别</strong>：<input type="radio" name="sex1" id="sex1" value="男" checked/><label for="sex1">&nbsp;男</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="sex0" name="sex1" value="女" /><label for="sex0">&nbsp;女</label>
				</dd>
				<dd class="form">
					<strong>名字</strong>：<input type="radio" name="xing1" id="num1" value="1" >
					<label for="num1">单字</label>
					<input name="num" type="radio" id="num2" value="2" checked>
					<label for="num2">双字</label>
					<input type="radio" name="num" id="num0" value="1" >
					<label for="num0">不限</label>
				</dd>


				<dd class="form">
					<strong><img src="<{$web_url}>static/bazi/img/suanming/v2/girl_icon.png" alt="女人" width="10" class="item_imgIcon">女方姓名</strong>：<input class="ipt" type="text" name="name2" maxLength=32 onBlur="if (value==''){value='请输入姓氏'}" onFocus="if (value=='请输入姓氏') {value=''}" value="请输入姓氏">
				</dd>
				<dd class="form"><strong>性别</strong>：<input type="radio" name="sex2" id="sex2" value="男" checked/><label for="sex1">&nbsp;男</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="sex0" name="sex2" value="女" /><label for="sex0">&nbsp;女</label>
				</dd>
				<dd class="form">
					<strong>名字</strong>：<input type="radio" name="xing2" id="xing2" value="1" >
					<label for="num1">单字</label>
					<input name="num" type="radio" id="num2" value="2" checked>
					<label for="num2">双字</label>
					<input type="radio" name="num" id="num0" value="1" >
					<label for="num0">不限</label>
				</dd>

				<dd>
					<div align="center"><input type="submit" class="button" name="submit1" value="名字五格配对">
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
		</div>
	</div>

	<div>
		<{include file='./h5/public/more_nav.tpl'}>
	</div>

	<{include file='./h5/public/news.tpl'}>


</div>
<div id="navi">
	<{include file='./h5/public/h5_nav.tpl'}>
</div>
<{include file='./h5/footer.tpl'}>