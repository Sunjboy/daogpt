<?php /* Smarty version 2.6.25, created on 2018-02-01 16:16:55
         compiled from ffsm/bazimf_order.tpl */ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8"/>
<title>八字综合详批-开运网</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta content="yes" name="apple-mobile-web-app-capable"/>
<meta content="black" name="apple-mobile-web-app-status-bar-style"/>
<meta content="telephone=no" name="format-detection"/>
<link rel="shortcut icon" href="/sm/ffsm/statics/ffsm/favicon.ico"/>
<link href="/statics/ffsm/bazizh/wap.min.css?v=0817" rel="stylesheet" type="text/css"/>
<link href="/statics/ffsm/bazizh/style.min.css" rel="stylesheet" type="text/css"/>
<script src="//apps.bdimg.com/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="statics/ffsm/public/js/require/require.min.js" data-main="/statics/ffsm/public/js/common.min.js?v=0817"></script>
</head>
<body>
<header class="public_header">
<h1 class="public_h_con">八字综合详批</h1>
<a class="public_h_home" href="/"></a><a href="/?ac=history" class="public_h_menu">我的测算</a></header>
<div class="order_box_pay">
	<div class="obp_user">
		<img src="/statics/ffsm/bazizh/images/1_img_1.png" alt="大师"/>
		<div class="obp_txt">
			<p class="obp_left">
				<b>郭易申先生</b>
				<span>知名命理学专家</span>
			</p>
			<p class="obp_right">
				<b><?php echo $this->_tpl_vars['names']['username']; ?>
(<?php if ($this->_tpl_vars['names']['gender'] == 1): ?>男<?php else: ?>女<?php endif; ?>)</b>
				<span><?php echo $this->_tpl_vars['names']['y']; ?>
年<?php echo $this->_tpl_vars['names']['m']; ?>
月<?php echo $this->_tpl_vars['names']['d']; ?>
日<?php if ($this->_tpl_vars['names']['h']): ?><?php echo $this->_tpl_vars['names']['h']; ?>
<?php else: ?>未知<?php endif; ?>时</span>
			</p>
		</div>
	</div>
	<div class="obp_pirce">
		<del>原价：￥168</del><em>&nbsp; &nbsp;&nbsp;<strong>限时免费：<span style="color:#ff0000;">￥<?php echo $this->_tpl_vars['money']; ?>
</span></strong></em>
		<div class="time-item"><span style='color:#0D8000'>请支付0.1元调出测算结果</span></div>
		<div class="public_pay_box">
			<a class="weixin" target="_self" href="/?ct=pay&ac=go&oid=<?php echo $this->_tpl_vars['oid']; ?>
&type=1">微信安全支付</a>
            <a class="alipay" target="_self" href="/?ct=pay&ac=go&oid=<?php echo $this->_tpl_vars['oid']; ?>
&type=2">支付宝安全支付</a>
		</div>
	</div>
	<div style='text-align:center;font-size:14px !important'>
	<span style='color:#ff0000'>付款成功后赠送高级面相教程一套</span><br/>
	<span style='color:#0D8000'>免费声明</span><br/>
	<span style='color:#0D8000'>用户需要支付0.1才能调出测算结果</span>

	<p>订单编号：<?php echo $this->_tpl_vars['oid']; ?>
</p>
	<div class="obp_tip">
		已有<span>23302574</span>人进行了测算知晓了自己<span>事业财运、婚姻情感</span>的情况，并根据老师建议做出调整，产生显著效果，<span>98.6%</span>用户觉得本测算有帮助！
	</div>
</div>

<div class="box_lock J_payPopupShow"><p class="public_title1"><i></i>八字排盘</p><p><img src="/statics/ffsm/bazizh/images/img_lock01.jpg" alt="八字排盘" /></p></div>
<div class="box_lock J_payPopupShow"><p class="public_title1"><i></i>命格命卦</p><p><img src="/statics/ffsm/bazizh/images/img_lock02.jpg" alt="八字排盘" /></p></div>
<div class="box_lock J_payPopupShow"><p class="public_title1"><i></i>个性分析</p><p><img src="/statics/ffsm/bazizh/images/img_lock03.jpg" alt="八字排盘" /></p></div>
<div class="box_lock J_payPopupShow"><p class="public_title1"><i></i>爱情分析</p><p><img src="/statics/ffsm/bazizh/images/img_lock04.jpg" alt="八字排盘" /></p></div>
<div class="box_lock J_payPopupShow"><p class="public_title1"><i></i>事业分析</p><p><img src="/statics/ffsm/bazizh/images/img_lock05.jpg" alt="八字排盘" /></p></div>
<div class="box_lock J_payPopupShow"><p class="public_title1"><i></i>财运分析</p><p><img src="/statics/ffsm/bazizh/images/img_lock06.jpg" alt="八字排盘" /></p></div>
<div class="box_lock J_payPopupShow"><p class="public_title1"><i></i>健康分析</p><p><img src="/statics/ffsm/bazizh/images/img_lock07.jpg" alt="八字排盘" /></p></div>
<div class="box_lock J_payPopupShow"><p class="public_title1"><i></i>生活宝典</p><p><img src="/statics/ffsm/bazizh/images/img_lock08.jpg" alt="八字排盘" /></p></div>
<br/>
<img style="width:99%; height:auto; margin:0 auto; display:block;" src="statics/ffsm/bazizh/images/img_service.jpg" alt="八字排盘" />
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