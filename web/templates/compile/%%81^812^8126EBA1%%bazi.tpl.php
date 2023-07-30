<?php /* Smarty version 2.6.25, created on 2017-12-15 11:27:38
         compiled from ffsm/bazi.tpl */ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8"/>
<title>八字精批-神算网</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta content="yes" name="apple-mobile-web-app-capable"/>
<meta content="black" name="apple-mobile-web-app-status-bar-style"/>
<meta content="telephone=no" name="format-detection"/>
<link rel="shortcut icon" href="/statics/ffsm/favicon.ico"/>
<link href="/statics/ffsm/public/wap.min-v=0817.css" rel="stylesheet" type="text/css"/>
<link href="/statics/ffsm/bazijingpi/1/style.min.css" rel="stylesheet" type="text/css"/>
<script src="https://apps.bdimg.com/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="/statics/ffsm/public/js/require/require.min.js" data-main="/statics/ffsm/public/js/common.min.js?v=0817"></script>
</head>
<body>
<header class="public_header">
<h1 class="public_h_con">八字精批</h1>
<a class="public_h_home" href="/"></a><a href="/?ac=history" class="public_h_menu">我的测算</a></header>
<div class="public_banner">
	<img src="/statics/ffsm/bazijingpi/1/images/0.jpg" alt="八字精批"/>
</div>
<div class="public_bg_color">
	<div class="public_border_tit">
		<div class="public_bt_top">
			<span></span>
		</div>
		<div class="public_bt_body">
			<span>八字命运精批</span>
		</div>
		<div class="public_bt_down">
			<span></span>
		</div>
	</div>
	<div class="master_intro">
		 八字算命是传统文化中最古老而又最准确的算命方法，通过将一个人的出生年月日时进行八字排盘变成由天干、地支所组成的八个字，再对这八个字的五行相生、十神关系等进行分析，能准确预算出人一生的财运、婚姻、事业、健康等等。
	</div>
	<div class="form_top_title">
		立即揭开八字奥秘
	</div>
	<form class="J_ajaxForm J_testFixedTop" action="/?ac=bazi" name="login" method="post" onSubmit="return checkForm();">
		<div class="public_form_wrap" id="miaodian">
			<ul>
				<li>
				<div class="left">
					您的姓名
				</div>
				<div class="auto">
					<input type="text" class="bg_no" id="username" name="username" placeholder="请输入名字（必须汉字）" value=""/>
				</div>
				</li>
				<li>
				<div class="left">
					您的性别
				</div>
				<div class="auto sex sex J_sex">
					<span data-value="1"><i></i><font>男</font></span><span class="cur" data-value="0"><i></i><font>女</font></span><input type="hidden" name="gender" value="0"/>
				</div>
				</li>
				<li>
				<div class="left">
					出生日期
				</div>
				<div class="auto">
					<select name="y" id="y" class="select_new">
		<option value="1945">1945</option><option value="1946">1946</option><option value="1947">1947</option><option value="1948">1948</option><option value="1949">1949</option><option value="1950">1950</option><option value="1951">1951</option><option value="1952">1952</option><option value="1953">1953</option><option value="1954">1954</option><option value="1955">1955</option><option value="1956">1956</option><option value="1957">1957</option><option value="1958">1958</option><option value="1959">1959</option><option value="1960">1960</option><option value="1961">1961</option><option value="1962">1962</option><option value="1963">1963</option><option value="1964">1964</option><option value="1965">1965</option><option value="1966">1966</option><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985" selected="">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option>
  </select> 年<select name="m" id="m" class="select_new">
<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8" selected="">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option>
  </select> 月
<select name="d" id="d" class="select_new">
    <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15" selected="">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
  </select> 日
				</div>
				</li>
                <li>
				<div class="left">
					出生时辰
				</div>
				<div class="auto">
					<span class="auto input J-time">
					<select class="sel" name="h">
						<option value="" selected>时辰不清楚</option>
						<option value="0">子时 0点</option>
						<option value="1">丑时 1点</option>
						<option value="2">丑时 2点</option>
						<option value="3">寅时 3点</option>
						<option value="4">寅时 4点</option>
						<option value="5">卯时 5点</option>
						<option value="6">卯时 6点</option>
						<option value="7">辰时 7点</option>
						<option value="8">辰时 8点</option>
						<option value="9">巳时 9点</option>
						<option value="10">巳时 10点</option>
						<option value="11">午时 11点</option>
						<option value="12">午时 12点</option>
						<option value="13">未时 13点</option>
						<option value="14">未时 14点</option>
						<option value="15">申时 15点</option>
						<option value="16">申时 16点</option>
						<option value="17">酉时 17点</option>
						<option value="18">酉时 18点</option>
						<option value="19">戌时 19点</option>
						<option value="20">戌时 20点</option>
						<option value="21">亥时 21点</option>
						<option value="22">亥时 22点</option>
						<option value="23">子时 23点</option>
					</select>
					</span>
				</div>
				</li>
                <input type="hidden" name=i  value="0">
                <input type="hidden" name=cY  value="">
                <input type="hidden" name=cM  value="">
                <input type="hidden" name=cD  value="">
                <input type="hidden" name=cH  value="">
                <input type="hidden" name=term1  value="">
                <input type="hidden" name=term2  value="">
                <input type="hidden" name=start_term  value="">
                <input type="hidden" name=end_term  value="">
                <input type="hidden" name=start_term1  value="">
                <input type="hidden" name=end_term1  value="">
                <input type="hidden" name=lDate  value="">
                
			</ul>
		</div>
		<div class="public_agreement">
			<input type="checkbox" checked="checked" id="agreeInput">同意<a href="javascript:;" id="protocolShowBtn">个人隐私协议</a>
		</div>
		<div class="public_btn_s">
        	<input type="submit" value="立即测算" class="J_ajax_submit_btnsub">
		</div>
		<div class="form_bottom_txt J_testFixedShow">
			<span>已有<b>23285408</b>人测算</span><a href="/?ac=history"><span>我的测算</span></a>
		</div>
	</form>
</div>
<div class="public_bg_color J_testFixedShow">
	<div class="public_border_tit">
		<div class="public_bt_top">
			<span></span>
		</div>
		<div class="public_bt_body">
			<span>测算内容对您有什么帮助</span>
		</div>
		<div class="public_bt_down">
			<span></span>
		</div>
	</div>
	<div class="know_img">
		<img src="/statics/ffsm/bazijingpi/1/images/0_img_1.jpg" alt="测算内容对您有什么帮助"/>
	</div>
</div>
<div class="public_bg_color">
	<div class="public_border_tit">
		<div class="public_bt_top">
			<span></span>
		</div>
		<div class="public_bt_body">
			<span>测算后您将知道以下信息</span>
		</div>
		<div class="public_bt_down">
			<span></span>
		</div>
	</div>
	<div class="know_img">
		<img src="/statics/ffsm/bazijingpi/1/images/0_img_2.jpg" alt="测算后您将知道以下信息"/>
	</div>
</div>
<div class="public_bg_color">
	<div class="public_border_tit">
		<div class="public_bt_top">
			<span></span>
		</div>
		<div class="public_bt_body">
			<span>服务对比</span>
		</div>
		<div class="public_bt_down">
			<span></span>
		</div>
	</div>
	<div class="know_img">
		<img src="/statics/ffsm/bazijingpi/1/images/0_img_3.jpg" alt="服务对比"/>
	</div>
</div>
<div class="public_bg_color">
	<div class="public_border_tit">
		<div class="public_bt_top">
			<span></span>
		</div>
		<div class="public_bt_body">
			<span>测后用户真实反馈</span>
		</div>
		<div class="public_bt_down">
			<span></span>
		</div>
	</div>
	<div class="user_feedback">
		<div class="uf_top">
			<p>
				<b>98.6%</b>的用户通过测算
			</p>
			<p>
				明确了自己的人生方向
			</p>
		</div>
		<div class="uf_ul_wrap" id="feedbackScroll">
			<ul class="uf_ul">
				<li><strong>陈先生 150****1027</strong>
				<p>
					最近非常的烦躁，迷茫。按照老师建议做了改变，生活、工作渐渐有起色。
				</p>
				</li>
				<li><strong>林女士 186****4950</strong>
				<p>
					通过八字精批知道自己转运就明年此时，重新燃起对未来的希望。
				</p>
				</li>
				<li><strong>何女士 180****6084</strong>
				<p>
					事业和感情方面都分析的很对，希望明年能够顺利结婚！
				</p>
				</li>
				<li><strong>秦先生 186****8082</strong>
				<p>
					我之前对考公有些抗拒，测算后发现自己更适合事业单位，现在已经入职啦。
				</p>
				</li>
				<li><strong>李先生 138****7761</strong>
				<p>
					正财有利，偏财则不理想。看来要好好经营店铺了！
				</p>
				</li>
				<li><strong>张女士 150****9251</strong>
				<p>
					婚后天天吵架，日子过的不顺心，经过老师开解，运势有了极大改善。
				</p>
				</li>
				<li><strong>孙先生 186****7645</strong>
				<p>
					爱情部分说的很准，自已已经单身很多年了，希望早日告别单身狗行列！
				</p>
				</li>
				<li><strong>黄先生 133****2107</strong>
				<p>
					我的性格和测算中说的一模一样，自己在事业上老师犹豫不决，还好有老师的建议。谢谢老师！
				</p>
				</li>
				<li><strong>周女士 180****6723</strong>
				<p>
					这个真的好准，如老师所说今年确实因为意外耗费了一大笔钱财。
				</p>
				</li>
				<li><strong>尤先生 138****3772</strong>
				<p>
					听人说房屋朝向最好是能根据自己的八字五行来选择，特地请教了老师。
				</p>
				</li>
				<li><strong>邹小姐 150****5358</strong>
				<p>
					原来我是做行政工作的，工作并不顺心。希望能如测算结果所说通过跳槽改善自己的事业运势。
				</p>
				</li>
				<li><strong>任先生 186****1311</strong>
				<p>
					通过该测算得知自己最近3个月的运势不佳，赶紧按照老师建议调整自己的床头方向，佩戴吉祥物等。运势有了很大的改观，生活，工作渐渐有起色。
				</p>
				</li>
				<li><strong>薛女士 138****8501</strong>
				<p>
					开了个中档次的服装店生意一直不好。听从老师建议以后对店铺进行了装修改造，现在生意真是越来越火爆！
				</p>
				</li>
				<li><strong>姚女士 150****7699</strong>
				<p>
					和相处了2年的男朋友分手之后很沮丧，后来听了老师的解析，了解了自己的姻缘运势，现在只想沉下心来好好工作，希望能像老师说的早日碰到适合自己的另一半。
				</p>
				</li>
			</ul>
		</div>
	</div>
</div>
<script>
        $(function(){
            // 服务轮播
            var scrollTop=0;
            var scrollUl=$('#feedbackScroll').children('ul');
            function scrollTip(){
                var top=scrollUl.children('li').eq(0).outerHeight();
                if(Math.abs(scrollTop)==Math.abs(top)){
                    scrollUl.children('li').eq(0).appendTo(scrollUl);
                    scrollUl.css("top",0);
                    scrollTop=0;
                }else{
                    scrollTop--;
                    scrollUl.css("top",scrollTop);
                }
            }
            setInterval(scrollTip,50);
        })
    </script>
<div class="protocol_pop_box" id="protocolPopBox">
	<div class="ppb_content">
		<div class="ppb_title">
			个人隐私协议
		</div>
		<div class="ppb_text">
			<p>
				尊敬的用户，欢迎阅读本协议：
			</p>
			<p>
				汇丰科技依据本协议的规定提供服务，本协议具有合同效力。您必须完全同意以下所有条款，才能保证享受到更好的汇丰科技服务。您使用服务的行为将视为对本协议的接受，并同意接受本协议各项条款的约束。
			</p>
			<p>
				用户在申请汇丰科技服务过程中，需要填写一些必要的个人信息，为了更好的为用户服务，请保证提供的这些个人信息的真实、准确、合法、有效并注意及时更新。<strong>若因填写的信息不完整或不准确，则可能无法使用本服务或在使用过程中受到限制。如因用户提供的个人资料不实或不准确，给用户自身造成任何性质的损失，均由用户自行承担。</strong>
			</p>
			<p>
				保护用户个人信息是汇丰科技的一项基本原则，汇丰科技运用各种安全技术和程序建立完善的管理制度来保护用户的个人信息，以免遭受未经授权的访问、使用或披露。<strong>未经用户许可汇丰科技不会向第三方（汇丰科技控股或关联、运营合作单位除外）公开、透露用户个人信息，但由于政府要求、法律政策需要等原因除外。</strong>
			</p>
			<p>
				在用户发送信息的过程中和本网站收到信息后，<strong>本网站将遵守行业通用的标准来保护用户的私人信息。但是任何通过因特网发送的信息或电子版本的存储方式都无法确保100%的安全性。因此，本网站会尽力使用商业上可接受的方式来保护用户的个人信息，但不对用户信息的安全作任何担保。</strong>
			</p>
			<p>
				此外，您已知悉并同意：<strong>在现行法律法规允许的范围内，汇丰科技可能会将您非隐私的个人信息用于市场营销，使用方式包括但不限于：在网页或者app平台中向您展示或提供广告和促销资料，向您通告或推荐服务或产品信息，使用电子邮件，短信等方式推送其他此类根据您使用汇丰科技服务或产品的情况所认为您可能会感兴趣的信息。</strong>
			</p>
			<p>
				本网站有权在必要时修改服务条例，<strong>本网站的服务条例一旦发生变动，将会在本网站的重要页面上提示修改内容，用户如不同意新的修改内容，须立即停止使用本协议约定的服务，否则视为用户完全同意并接受新的修改内容。</strong>根据客观情况及经营方针的变化，本网站有中断或停止服务的权利，用户对此表示理解并完全认同。
			</p>
			<p>
				如果您还有其他问题和建议，可以通过电子邮件52623867@qq.com或者电话000-0000000联系我们。
			</p>
			<p>
				汇丰科技保留对本协议的最终解释权。
			</p>
		</div>
		<div class="ppb_close" id="protocolHideBtn">
			<b>关闭</b>
		</div>
	</div>
</div>
<div class="public_test_fixed" id="testFixedBtn">
	<span>立即测算</span>
</div>


</body>
</html>