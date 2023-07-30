<?php /* Smarty version 2.6.25, created on 2017-11-30 21:21:45
         compiled from ffsm/hehun.tpl */ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8"/>
<title>八字合婚-神算网</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta content="yes" name="apple-mobile-web-app-capable"/>
<meta content="black" name="apple-mobile-web-app-status-bar-style"/>
<meta content="telephone=no" name="format-detection"/>
<link rel="shortcut icon" href="/statics/ffsm/favicon.ico"/>
<link href="/statics/ffsm/public/wap.min.css" rel="stylesheet" type="text/css"/>
<link href="/statics/ffsm/bazihehun/1/bazihehun.min.css" rel="stylesheet" type="text/css"/>
<script src="https://apps.bdimg.com/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>
<header class="public_header">
<h1 class="public_h_con">八字合婚</h1>
<a class="public_h_home" href="/"></a><a href="/?ac=history" class="public_h_menu">我的测算</a></header>
<div class="public_banner">
	<img src="/statics/ffsm/bazihehun/1/images/img_banner.jpg" alt="八字合婚"/>
</div>
<div class="public_tab_item J_testFixedShow">
	<div class="master_introduction">
		<img src="/statics/ffsm/bazihehun/1/images/dashi.jpg" alt="">
	</div>
	<form class="J_ajaxForm" action="/?ac=hehun" method="post">
		<div class="public_form_wrap">
			<div class="sub_left left">
				<span><img src="/statics/ffsm/bazihehun/1/images/icon_man.png" alt="男方资料"/></span>男方资料
			</div>
			<ul>
				<li>
				<div class="left">
					男方姓名
				</div>
				<div class="auto">
					<input type="text" class="bg_no" id="username" name="username" value="" placeholder="请输入姓名"/>
				</div>
				</li>
				<li>
				<div class="left">
					出生日期
				</div>
				<div class="auto">
					<select name="year" id="year" class="select_new">
		<option value="1945">1945</option><option value="1946">1946</option><option value="1947">1947</option><option value="1948">1948</option><option value="1949">1949</option><option value="1950">1950</option><option value="1951">1951</option><option value="1952">1952</option><option value="1953">1953</option><option value="1954">1954</option><option value="1955">1955</option><option value="1956">1956</option><option value="1957">1957</option><option value="1958">1958</option><option value="1959">1959</option><option value="1960">1960</option><option value="1961">1961</option><option value="1962">1962</option><option value="1963">1963</option><option value="1964">1964</option><option value="1965">1965</option><option value="1966">1966</option><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985" selected="">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option>
  </select> 年<select name="month" id="month" class="select_new">
<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8" selected="">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option>
  </select> 月
<select name="day" id="day" class="select_new">
    <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15" selected="">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
  </select> 日
				</div>
				</li>
				<li>
				<div class="left">
					出生时辰
				</div>
				<div class="auto">
					<select class="sel" name="hour">
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
				</div>
				</li>
			</ul>
		</div>
		<div class="public_form_wrap">
			<div class="sub_left left">
				<span><img src="/statics/ffsm/bazihehun/1/images/icon_woman.png" alt="女方资料"/></span>女方资料
			</div>
			<ul>
				<li>
				<div class="left">
					女方姓名
				</div>
				<div class="auto">
					<input type="text" class="bg_no" id="girl_username" name="girl_username" value="" placeholder="请输入姓名"/>
				</div>
				</li>
				<li>
				<div class="left">
					出生日期
				</div>
				<div class="auto">
					<select name="girl_year" id="girl_year" class="select_new">
		<option value="1945">1945</option><option value="1946">1946</option><option value="1947">1947</option><option value="1948">1948</option><option value="1949">1949</option><option value="1950">1950</option><option value="1951">1951</option><option value="1952">1952</option><option value="1953">1953</option><option value="1954">1954</option><option value="1955">1955</option><option value="1956">1956</option><option value="1957">1957</option><option value="1958">1958</option><option value="1959">1959</option><option value="1960">1960</option><option value="1961">1961</option><option value="1962">1962</option><option value="1963">1963</option><option value="1964">1964</option><option value="1965">1965</option><option value="1966">1966</option><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985" selected="">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option>
  </select> 年<select name="girl_month" id="girl_month" class="select_new">
<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8" selected="">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option>
  </select> 月
<select name="girl_day" id="girl_day" class="select_new">
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
					<select class="sel" name="girl_hour">
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
			</ul>
		</div>
		<div class="public_agreement">
			<input type="checkbox" checked="checked" id="agreeInput">同意<a href="javascript:;" id="protocolShowBtn">个人隐私协议</a>
		</div>
		<div class="public_btn_s">
        	<input type="submit" class="btn-submit J_ajax_submit_btnsub" value="马上测算">
		</div>
	</form>
	<div class="test_count ">
		<span>已有<font>13856706</font>人测算</span><a href="../inquiry/history.html" class="btn_link">我的测算</a>
	</div>
	<div class="public_bg_color">
		<div class="public_bzhh_title">
			<span class="left"></span><span class="right"></span><span class="center">你是否在困扰这些问题？</span>
		</div>
		<p class="pic">
			<img src="/statics/ffsm/bazihehun/1/images/img_problem.jpg" alt="你是否在困扰这些问题？"/>
		</p>
	</div>
	<div class="public_bg_color">
		<div class="public_bzhh_title">
			<span class="left"></span><span class="right"></span><span class="center">通过八字合婚您将获得以下内容</span>
		</div>
		<p class="words">
			掌握命运和方法，轻松实现愿望
		</p>
		<p class="pic">
			<img src="/statics/ffsm/bazihehun/1/images/img_get.jpg" alt="#"/>
		</p>
	</div>
	<div class="public_bg_color">
		<div class="public_bzhh_title">
			<span class="left"></span><span class="right"></span><span class="center">大师箴言，趋吉避凶</span>
		</div>
		<p>
			<img src="/statics/ffsm/bazihehun/1/images/img_zhenyan.jpg" alt="#"/>
		</p>
	</div>
	<div class="box_scroll">
		<div class="public_bzhh_title">
			<span class="left"></span><span class="right"></span><span class="center">用户反馈</span>
		</div>
		<div class="bs_ui" id="con2_qhd_3">
			<ul>
				<li><span class="red">林先生 138****3216</span>
				<p>
					不错，老师建议很中肯，希望能得到女朋友父母的认同。
				</p>
				</li>
				<li><span class="red">秦小姐 150****5978</span>
				<p>
					一直被家里催婚，自己又在两个追求者中犹豫，现在终于能确定了。
				</p>
				</li>
				<li><span class="red">龚先生 186****6649</span>
				<p>
					女儿和对象处了7年了，还没有打算结婚，做家长挺着急的，通过测算才知道她们适合晚婚，我这才放心。
				</p>
				</li>
				<li><span class="red">余先生 150****9257</span>
				<p>
					测算的太准了，我现在婚姻情况就是浑浑噩噩的，希望今年能有所改善。
				</p>
				</li>
				<li><span class="red">李先生 180****1769</span>
				<p>
					按照老师的建议，和妻子的感情真的有所起色。
				</p>
				</li>
				<li><span class="red">文女士 138****8721</span>
				<p>
					很犹豫是不是要和对象结婚，测算过后豁然开朗。
				</p>
				</li>
				<li><span class="red">王先生 180****5042</span>
				<p>
					哈哈，老师怎么知道我们夫妻虽然经常争吵但是感情很好。
				</p>
				</li>
				<li><span class="red">韩先生 138****2787</span>
				<p>
					希望用老师的方法能说服家人接受我的女朋友。
				</p>
				</li>
				<li><span class="red">严女士 150****7571</span>
				<p>
					测算内容挺有参考性的，按照里面的建议确实和男朋友和好了。
				</p>
				</li>
				<li><span class="red">胡先生 186****6377</span>
				<p>
					太准了，最近确实和老婆有些矛盾，正愁无法解决呢。
				</p>
				</li>
				<li><span class="red">郑先生 133****2917</span>
				<p>
					对婚姻和人生的发展迷茫，测算之后终于有了方向。
				</p>
				</li>
				<li><span class="red">何女士 138****8154</span>
				<p>
					当初就觉得女儿和他不合适，唉，后悔没有早点来测算。
				</p>
				</li>
				<li><span class="red">洪女士 180****3483</span>
				<p>
					准备和男朋友结婚，特地来测算一次，希望能如结果所说，婚后生活幸福。
				</p>
				</li>
				<li><span class="red">陈女士 150****9130</span>
				<p>
					遵循老师的建议，和老公又重燃了婚姻激情，谢谢老师。
				</p>
				</li>
				<li><span class="red">张女士 150****7687</span>
				<p>
					看来儿子是真的找到自己的真命天女啦，开心！
				</p>
				</li>
			</ul>
		</div>
	</div>
	<div class="public_test_fixed" id="testFixedBtn">
		<span>立即测算</span>
	</div>
	<script>
    //测算底部悬浮
    (function(){
    	var topShow=$(".J_testFixedShow");
    	if(topShow.length){
            var topShow=topShow.offset().top;
    		var topNum=$(".J_testFixedTop").length>0?($(".J_testFixedTop").offset().top-20):200;
    		var testBtn=$("#testFixedBtn");
    		$(window).scroll(function(){
                var wt=$(window).scrollTop();
                wt>topShow?(testBtn.fadeIn(),$('.public_footer_servers').css('padding-bottom','50px')):(testBtn.fadeOut(),$('.public_footer_servers').css('padding-bottom','20px'));
            });
            testBtn.add('.J_testScrollTop').on('click',function(){$('html,body').scrollTop(topNum)})
    	}
    })()
	</script>
</div>
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
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './ffsm/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script type="text/javascript">        function AutoScroll(obj) {
            $(obj).find("ul:first").animate({
                marginTop: "-115px"
            }, 4000, function () {
                $(this).css({ marginTop: "0px" }).find("li:first").appendTo(this);
            });
        }
        $(function () {
            var myar = setInterval('AutoScroll("#con2_qhd_3")', 500);
        });
    </script>
</body>
</html>