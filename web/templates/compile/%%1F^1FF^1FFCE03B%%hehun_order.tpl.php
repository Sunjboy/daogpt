<?php /* Smarty version 2.6.25, created on 2017-12-14 11:11:01
         compiled from ffsm/hehun_order.tpl */ ?>
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
<script src="//apps.bdimg.com/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="/statics/ffsm/public/js/require/require.min.js" data-main="/statics/ffsm/public/js/common.min.js"></script>
</head>
<body>
<header class="public_header">
<h1 class="public_h_con">八字合婚</h1>
<a class="public_h_home" href="/"></a><a href="/?ac=history" class="public_h_menu">我的测算</a></header>
<div class="public_banner">
	<img src="/statics/ffsm/bazihehun/1/images/img_banner.jpg" alt="八字合婚"/>
</div>
<div class="order_wrapper">
	<div class="order_code">
		订单编号：<?php echo $this->_tpl_vars['oid']; ?>

	</div>
	<div class="user_info">
		<div class="user_info_box left">
			<p class="tit">
				<?php echo $this->_tpl_vars['data']['username']; ?>

			</p>
			<p>
				<img src="/statics/ffsm/bazihehun/1/images/big_man.jpg" alt="先生"/>
			</p>
			<p>
				<?php echo $this->_tpl_vars['data']['year']; ?>
年<?php echo $this->_tpl_vars['data']['month']; ?>
月<?php echo $this->_tpl_vars['data']['day']; ?>
日 <?php echo $this->_tpl_vars['data']['hour']; ?>
时
			</p>
			
		</div>
		<span class="icon_center"><img src="/statics/ffsm/bazihehun/1/images/icon_hehun.png" alt="#"/></span>
		<div class="user_info_box right">
			<p class="tit">
				<?php echo $this->_tpl_vars['data']['girl_username']; ?>

			</p>
			<p>
				<img src="/statics/ffsm/bazihehun/1/images/big_woman.jpg" alt="小姐"/>
			</p>
			<p>
				<?php echo $this->_tpl_vars['data']['girl_year']; ?>
年<?php echo $this->_tpl_vars['data']['girl_month']; ?>
月<?php echo $this->_tpl_vars['data']['girl_day']; ?>
日 <?php echo $this->_tpl_vars['data']['girl_hour']; ?>
时
			</p>
			
		</div>
	</div>
	<div class="price_box">
		<p class="original_price">
			原价：￥168
		</p>
		<p>
			优惠价：<span class="red">￥<?php echo $this->_tpl_vars['money']; ?>
</span>
		</p>
		<p class="gray_words">
			请选择喜欢的付款方式
		</p>
	</div>
	<div class="public_pay_box">
		<a class="weixin" target="_self" href="/?ct=pay&ac=go&oid=<?php echo $this->_tpl_vars['oid']; ?>
&type=1">微信安全支付</a>
        <a class="alipay" target="_self" href="/?ct=pay&ac=go&oid=<?php echo $this->_tpl_vars['oid']; ?>
&type=2">支付宝安全支付</a>
	</div>
	<div class="txt">
		已有<span class="red">13863760</span>人进行了测试分析，帮助他们找到<span class="red">美满恋爱婚姻，98.9%</span>的用户认为测算结果对他们的婚姻生活产生了巨大帮助。
	</div>
</div>
<div class="pay_item">
	<div class="words">
		<span>支付完成后，将为您解锁其余八项重要内容：</span>
	</div>
	<a href="javascript:;" class="public_bzhh_title J_payPopupShow"><span class="left"></span><span class="right"></span><span class="center">第一：<?php echo $this->_tpl_vars['data']['girl_username']; ?>
小姐的命格</span><i></i></a><a href="javascript:;" class="public_bzhh_title J_payPopupShow"><span class="left"></span><span class="right"></span><span class="center">第二：<?php echo $this->_tpl_vars['data']['username']; ?>
先生的命格</span><i></i></a>
	<div class="public_bzhh_title J_payPopupShow">
		<span class="left"></span><span class="right"></span><span class="center">第三：（配偶）名师点评</span><i></i>
	</div>
	<div class="public_lock_content">
		<div class="list left">
			<p>
				你们一生的婚姻究竟会是怎样呢？
			</p>
			<p>
				相比与其他人来说，是好还是坏？
			</p>
			<p>
				综合命理纲要给你一个圆满答案。
			</p>
		</div>
		<div class="right J_payPopupShow">
			<img src="/statics/ffsm/bazihehun/1/images/icon_suo.png" alt="解锁"/>
			<p>
				解锁查看
			</p>
		</div>
	</div>
	<div class="public_bzhh_title J_payPopupShow">
		<span class="left"></span><span class="right"></span><span class="center">第四：（配偶）命运合盘</span><i></i>
	</div>
	<div class="public_lock_content">
		<div class="list left">
			<p>
				你们的八字命盘是否相合？
			</p>
			<p>
				你们的幸福指数是多少？
			</p>
			<p>
				什么方位最能促进你们婚姻和谐？
			</p>
		</div>
		<div class="right J_payPopupShow">
			<img src="/statics/ffsm/bazihehun/1/images/icon_suo.png" alt="解锁"/>
			<p>
				解锁查看
			</p>
		</div>
	</div>
	<div class="public_bzhh_title J_payPopupShow">
		<span class="left"></span><span class="right"></span><span class="center">第五：（配偶）命中注定</span><i></i>
	</div>
	<div class="public_lock_content">
		<div class="list left">
			<p>
				你们是否是天生一对？
			</p>
			<p>
				在别人眼中你们的婚姻是怎样的？
			</p>
			<p>
				生活中你们是怎样和谐相处？
			</p>
		</div>
		<div class="right J_payPopupShow">
			<img src="/statics/ffsm/bazihehun/1/images/icon_suo.png" alt="解锁"/>
			<p>
				解锁查看
			</p>
		</div>
	</div>
	<div class="public_bzhh_title J_payPopupShow">
		<span class="left"></span><span class="right"></span><span class="center">第六：（配偶）心有灵犀</span><i></i>
	</div>
	<div class="public_lock_content">
		<div class="list left">
			<p>
				对方会是个温柔体贴的人吗？
			</p>
			<p>
				会屈就于你还是你只有听从的份？
			</p>
			<p>
				相处之中你们是否更具默契？
			</p>
		</div>
		<div class="right J_payPopupShow">
			<img src="/statics/ffsm/bazihehun/1/images/icon_suo.png" alt="解锁"/>
			<p>
				解锁查看
			</p>
		</div>
	</div>
	<div class="public_bzhh_title J_payPopupShow">
		<span class="left"></span><span class="right"></span><span class="center">第七：（配偶）相扶相旺</span><i></i>
	</div>
	<div class="public_lock_content">
		<div class="list left">
			<p>
				配偶是得力助手还是对方的累赘？
			</p>
			<p>
				你对配偶是助旺还是助衰呢？
			</p>
			<p>
				你们能互相助旺、优势互补吗？
			</p>
		</div>
		<div class="right J_payPopupShow">
			<img src="/statics/ffsm/bazihehun/1/images/icon_suo.png" alt="解锁"/>
			<p>
				解锁查看
			</p>
		</div>
	</div>
	<div class="public_bzhh_title J_payPopupShow">
		<span class="left"></span><span class="right"></span><span class="center">第八：（配偶）吉凶几何</span><i></i>
	</div>
	<div class="public_lock_content">
		<div class="list left">
			<p>
				你们的婚后生活稳定吗？
			</p>
			<p>
				婚姻生活中会遇到哪些危机？
			</p>
			<p>
				有什么方法可以趋吉避凶？
			</p>
		</div>
		<div class="right J_payPopupShow">
			<img src="/statics/ffsm/bazihehun/1/images/icon_suo.png" alt="解锁"/>
			<p>
				解锁查看
			</p>
		</div>
	</div>
	<div class="public_bzhh_title J_payPopupShow">
		<span class="left"></span><span class="right"></span><span class="center">第九：（配偶）魅力相吸</span><i></i>
	</div>
	<div class="public_lock_content">
		<div class="list left">
			<p>
				你们的婚姻保质期有多久？
			</p>
			<p>
				另一半是否有出轨倾向？
			</p>
			<p>
				针对你们的爱情保鲜秘籍是什么？
			</p>
		</div>
		<div class="right J_payPopupShow">
			<img src="/statics/ffsm/bazihehun/1/images/icon_suo.png" alt="解锁"/>
			<p>
				解锁查看
			</p>
		</div>
	</div>
	<div class="public_bzhh_title J_payPopupShow">
		<span class="left"></span><span class="right"></span><span class="center">第十：（配偶）子女同步</span><i></i>
	</div>
	<div class="public_lock_content">
		<div class="list left">
			<p>
				命里你们是否会儿孙满堂？
			</p>
			<p>
				孩子能让你们开心还是疲惫？
			</p>
			<p>
				孩子的到来会让婚姻变得更加稳定?
			</p>
		</div>
		<div class="right J_payPopupShow">
			<img src="/statics/ffsm/bazihehun/1/images/icon_suo.png" alt="解锁"/>
			<p>
				解锁查看
			</p>
		</div>
	</div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './ffsm/footers.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="public_pay_popup" id="publicPayPopup">
	<div class="public_pp_box">
		<div class="public_pp_close" id="publicPPClose">
			X
		</div>
		<div class="public_pp_tit">
			解锁查看所有测算结果
		</div>
		<div class="public_pp_price">
			<span>统一鉴定价：</span><strong>￥<?php echo $this->_tpl_vars['money']; ?>
元</strong>
		</div>
		<div class="public_pay_box">
			<a class="weixin" target="_self" href="/?ct=pay&ac=go&oid=<?php echo $this->_tpl_vars['oid']; ?>
&type=1">微信安全支付</a>
            <a class="alipay" target="_self" href="/?ct=pay&ac=go&oid=<?php echo $this->_tpl_vars['oid']; ?>
&type=2">支付宝安全支付</a>
		</div>
	</div>
</div>
<div style=" height: 25px;">
</div>
<div class="public_pay_bottom" id="publicPayBottom">
	<span><i></i>付费解锁所有项</span>
</div>
<script>
    //底部悬浮
    ;(function($){
        $.fn.publicPopup=function(opt){
            var pp=$('#publicPayPopup');
            var ppClose=$('#publicPPClose');
            var topShow=$(".J_payBottomShow").length>0?$(".J_payBottomShow").offset().top:200;
            var ppShow=$(".J_payPopupShow").length>0?$(".J_payPopupShow"):'';
            return this.each(function(){
                var $this=$(this);
                $(window).scroll(function(){
                    var wt=$(window).scrollTop();
                    wt>topShow?$this.fadeIn():$this.fadeOut();
                });
                $this.on('click',function(){
                    pp.show();
                });
                ppClose.on('click',function(){
                    pp.hide();
                })
                ppShow?ppShow.on('click',function(){pp.show()}):'';
            });
        };
    })(jQuery);
    $("#publicPayBottom").publicPopup();
</script>
</body>
</html>