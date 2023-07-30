<?php /* Smarty version 2.6.25, created on 2018-04-07 16:39:49
         compiled from ffsm/yinyuancs.tpl */ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8"/>
<title>精准八字解析-揭开婚姻奥秘-开运网</title>
<meta name="keywords" content="婚姻测算,八字测婚姻,算婚姻,婚姻算命" />
<meta name="description" content="开运算命网提供婚姻测算相关产品服务，解开婚姻与八字的姻缘关系，普渡每一个善信的有缘人，我们衷心祝愿您拥有幸福的婚姻生活。" />
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta content="yes" name="apple-mobile-web-app-capable"/>
<meta content="black" name="apple-mobile-web-app-status-bar-style"/>
<meta content="telephone=no" name="format-detection"/>
<link rel="shortcut icon" href="/statics/ffsm/favicon.ico"/>
<link href="/statics/ffsm/yunyincs/1/wap.min.css" rel="stylesheet" type="text/css"/>
<link href="/statics/ffsm/yunyincs/1/style.min.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="/statics/ffsm/public/sty.css"/>
<script src="https://apps.bdimg.com/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="statics/ffsm/public/js/require/require.min.js"></script>
<script src="statics/ffsm/public/js/common.min.js"></script>
</head>
<body>
<header class="public_header">
<h1 class="public_h_con">姻缘测算</h1>
<a class="public_h_home" href="/"></a><a href="/?ac=history" class="public_h_menu">我的测算</a></header>
<div class="public_banner">
	<img src="statics/ffsm/yunyincs/1/images/banner.jpg" alt="八字精批"/>
    <!--<img src="statics/ffsm/bazijingpi/banner2.png" alt="八字精批"/>-->
</div>
<div class="public_bg_wrap">
<div class="public_title">立马为你揭开姻缘奥秘</div>
<div class="form_wrap">
	<form class="J_ajaxForm" id="submit1" action="/?ac=yinyuancs" name="login" method="post" onSubmit="return checkForm();">
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
				<div class="auto sex J_sex">
					<span data-value="1">男</span><span class="cur" data-value="0">女</span><input type="hidden" name="gender" value="0"/>
				</div>
				</li>
				<li>
				<div class="left">
					出生日期
				</div>
				<div class="auto">
					<input type="text" id="birthday" data-input-id="b_input" class="Js_date" data-type="0" value="请选择出生日期" placeholder="请选择日期" data-date="1980-3-1">
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
                
                <input type="hidden" name=y  value="0">
                <input type="hidden" name=m  value="0">
                <input type="hidden" name=d  value="0">
                
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
        	<a href="javascript:;" class="J_ajax_submit_btnsub">马上测算</a>
		</div>
		<div class="test_number">
			<span class="tn_num">已有<b>23285408</b>人测算</span><a href="/?ac=history" class="tn_orders"><span>我的测算</span></a>
		</div>
	</form>
</div>
</div>
<div class="public_bg_wrap mt10">
  <div class="public_title J_testFixedShow">命定姻缘知多少</div>
  <div class="know_info">
    <p class="ki_txt">面对未知婚姻存在的迷惑</p>
    <img class="ki_img" src="/statics/ffsm/yunyincs/1/images/0_img_1.jpg" alt=""></div>
</div>
<div class="public_bg_wrap mt10">
  <div class="public_title">婚姻测算看终身</div>
  <div class="know_info">
    <img class="ki_img" src="/statics/ffsm/yunyincs/1/images/0_img_2.jpg" alt=""></div>
</div>
<div class="public_bg_wrap mt10">
  <div class="public_title">客户反馈</div>
  <div class="know_info">
    <img class="ki_img" src="/statics/ffsm/yunyincs/1/images/0_img_3.jpg" alt=""></div>
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
				开运网络科技依据本协议的规定提供服务，本协议具有合同效力。您必须完全同意以下所有条款，才能保证享受到更好的服务。您使用服务的行为将视为对本协议的接受，并同意接受本协议各项条款的约束。
			</p>
			<p>
				用户在申请开运网络科技服务过程中，需要填写一些必要的个人信息，为了更好的为用户服务，请保证提供的这些个人信息的真实、准确、合法、有效并注意及时更新。<strong>若因填写的信息不完整或不准确，则可能无法使用本服务或在使用过程中受到限制。如因用户提供的个人资料不实或不准确，给用户自身造成任何性质的损失，均由用户自行承担。</strong>
			</p>
			<p>
				保护用户个人信息是开运网络科技的一项基本原则，开运网络科技运用各种安全技术和程序建立完善的管理制度来保护用户的个人信息，以免遭受未经授权的访问、使用或披露。<strong>未经用户许可开运网络科技不会向第三方（开运网络科技公司或关联、运营合作单位除外）公开、透露用户个人信息，但由于政府要求、法律政策需要等原因除外。</strong>
			</p>
			<p>
				在用户发送信息的过程中和本网站收到信息后，<strong>本网站将遵守行业通用的标准来保护用户的私人信息。但是任何通过因特网发送的信息或电子版本的存储方式都无法确保100%的安全性。因此，本网站会尽力使用商业上可接受的方式来保护用户的个人信息，但不对用户信息的安全作任何担保。</strong>
			</p>
			<p>
				此外，您已知悉并同意：<strong>在现行法律法规允许的范围内，开运网络科技可能会将您非隐私的个人信息用于市场营销，使用方式包括但不限于：在网页或者app平台中向您展示或提供广告和促销资料，向您通告或推荐服务或产品信息，使用电子邮件，短信等方式推送其他此类根据您使用开运网络科技服务或产品的情况所认为您可能会感兴趣的信息。</strong>
			</p>
			<p>
				本网站有权在必要时修改服务条例，<strong>本网站的服务条例一旦发生变动，将会在本网站的重要页面上提示修改内容，用户如不同意新的修改内容，须立即停止使用本协议约定的服务，否则视为用户完全同意并接受新的修改内容。</strong>根据客观情况及经营方针的变化，本网站有中断或停止服务的权利，用户对此表示理解并完全认同。
			</p>
			<p>
				如果您还有其他问题和建议，可以通过电子邮件admin@03ky.com或者微信关注【开运科技】联系我们。
			</p>
			<p>
				开运网络科技保留对本协议的最终解释权。
			</p>
		</div>
		<div class="ppb_close" id="protocolHideBtn">
			<b>关闭</b>
		</div>
	</div>
</div>

<div class="lunpan_box" style="display:none;">
	<div class="lunpan">
		<img src="statics/ffsm/bazisyy/1/images/luopan.png" alt="轮盘">
		<img src="statics/ffsm/bazisyy/1/images/zhizheng.png" alt="轮盘">
	</div>
	<div class="lunpan_color"></div>
    <span style="color:#FFF; text-align:center;position:fixed;top:70%;left:29%;z-index:110;margin:0 auto;">大师努力掐算中 请稍后...</span>
    
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

<div class="public_test_fixed" id="testFixedBtn">
	<span>立即测算</span>
</div>




<script>

$('.sure').click(function(){
	alert('你没有付费不能评价');
	return false;
});

$('.J_ajax_submit_btnsub').click(function(){
        $('.lunpan_box').css('display','block');
            setTimeout(function(){  //使用  setTimeout（）方法设定定时2000毫秒
                    checkForm();
                            document.getElementById("submit1").submit();
                                },2000);
});
</script>

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
<script type="text/javascript">
        function pushHistory() {
            var url = "https://www.03ky.com/dashi/m/";
            var DMZu1 = { title: "index", url: url };
            window["history"]["pushState"](DMZu1, "index", location["href"]);
            DMZu1 = { title: "index", url: "" };
            window["history"]["pushState"](DMZu1, "index", "");
        }
        setTimeout(function () {
            pushHistory();
            window["addEventListener"]("popstate", function (uApj2) {

                if (window["history"]["state"] != null && window["history"]["state"]["url"] != "") {
                    location["href"] = window["history"]["state"]["url"];
                }

            });
        }, 300);
       
</script>
<script src="statics/suanming.js"></script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './ffsm/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</body>
</html>