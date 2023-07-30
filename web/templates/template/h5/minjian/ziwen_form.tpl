<{include file='./h5/header.tpl'}>
<script>stepMenu();</script>
<div id="path">
	<{include file='./h5/public/path.tpl'}>
</div>

<div class="detail">

	<h3>指纹算命：</h3>
	<{if $data.jiexi==''}>
	<dl>

		<form action="/index.php" method="post">
			<input type="hidden" name="ct" value="h5_minjian">
			<input type="hidden" name="ac" value="zhiwen">

			<dd class="form">

				簸箕是流纹，斗是涡纹，请按照下列手指顺序选择！注意一点哦，男士看左手，女士看右手。

			</dd>

			<div align="center"><img src="/static/img/zhiwen.png" border="0"></div>

			<dd class="form">

				大拇指:

				<input type="radio" checked="checked" id="f1_1" name="a" value="o">

				<label for="f1_1">涡纹（斗）</label>

				<input type="radio" id="f1_2" name="a" value="x">

				<label for="f1_2">流纹（簸箕）</label>

			</dd>

			<dd class="form">

				食指:

				<input type="radio" checked="checked" id="f2_1" name="b" value="o">

				<label for="f2_1">涡纹（斗）</label>

				<input type="radio" id="f2_2" name="b" value="x">

				<label for="f2_2">流纹（簸箕）</label>

			</dd>

			<dd class="form">

				中指:

				<input type="radio" checked="checked" id="f3_1" name="c" value="o">

				<label for="f3_1">涡纹（斗）</label>

				<input type="radio" id="f3_2" name="c" value="x">

				<label for="f3_2">流纹（簸箕）</label>

			</dd>

			<dd class="form">

				无名指:

				<input type="radio" checked="checked" id="f4_1" name="d" value="o">

				<label for="f4_1">涡纹（斗）</label>

				<input type="radio" id="f4_2" name="d" value="x">

				<label for="f4_2">流纹（簸箕）</label>

			</dd>

			<dd class="form">

				小指:

				<input type="radio" checked="checked" id="f5_1" name="e" value="o">

				<label for="f5_1">涡纹（斗）</label>

				<input type="radio" id="f5_2" name="e" value="x">

				<label for="f5_2">流纹（簸箕）</label>

			</dd>

			<div align="center"><input type="submit" name="submit" class="button" value="开始算命"></div>

		</form>

	</dl>
	<{else}>
		<div class="detail">
			<p class="first">性格解析：<strong class="red"><{$data.jiexi}></strong></p>
		</div>
	<{/if}>

</div>

<div class="detail">

	<h3>指纹算命简介：</h3>

	<dl>

		<dd>
			指纹算命是一种根据掌纹的「涡」、「流」状两种不同的手指纹进行判断人的性格和命运倾向。手指纹算命的依据易理所分解
			阴、阳的兴致而来，阴为「流形」、阳为「涡形」。指纹算命的基本概念：据研究报告发现，人的性格是与生俱来的，而人的指纹
			确是终生不变的。指纹，大致可分为"涡纹"（又叫斗或叫箩）和"流纹"（又叫簸箕）两种。随着形状的不同，其性格和命运也
			不相同。根据指纹算命图解，如五指全为涡形，称为「乾纹」，若五指全为「流」形，称为「坤纹」。指纹算命应"男为左手，女
			为右手"为准。「涡纹」即指纹整体纹路，呈现似旋涡状，纹路由内一圈一圈向外。「流紋」意指其指纹之纹路是无法成为似旋涡
			状的纹路，其指纹纹路呈现似外流的现象。
		</dd>

	</dl>

</div>

<script language="javascript">

	function showzhiwen(){

		var page = '';

		for(var i=1;i<6;i++){

			if(document.getElementById('f'+i+'_1').checked == true){

				page += document.getElementById('f'+i+'_1').value;

			}else{

				page += document.getElementById('f'+i+'_2').value;

			}

		}

		location.href='/progress/zhiwen/'+page+'.html';

		return false;

	}

</SCRIPT>

<div>
	<{include file='./h5/public/more_nav.tpl'}>
</div>

<{include file='./h5/public/news.tpl'}>
<div id="navi">
	<{include file='./h5/public/h5_nav.tpl'}>
</div>
<{include file='./h5/footer.tpl'}>