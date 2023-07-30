<?php /* Smarty version 2.6.25, created on 2017-12-18 15:16:24
         compiled from ffsm/bazizh_find.tpl */ ?>
﻿<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8"/>
	<title>八字综合详批-开运网</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<meta content="yes" name="apple-mobile-web-app-capable"/>
	<meta content="black" name="apple-mobile-web-app-status-bar-style"/>
	<meta content="telephone=no" name="format-detection"/>
	<link rel="shortcut icon" href="/statics/ffsm/favicon.ico"/>
	<link href="/statics/ffsm/bazizh/wap.min.css?v=0817" rel="stylesheet" type="text/css"/>
	<link href="/statics/ffsm/bazizh/style.min.css" rel="stylesheet" type="text/css"/>
	<script src="http://apps.bdimg.com/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>
<header class="public_header">
	<h1 class="public_h_con">八字综合详批</h1>
	<a class="public_h_home" href="/"></a><a href="/?ac=history" class="public_h_menu">我的测算</a></header>
<div class="public_banner">
	<img src="/statics/ffsm/bazizh/images/img_banner.jpg" alt="八字精批"/>
</div>
<div class="order_box_pay">
	<div class="obp_nun">
		订单编号:<?php echo $this->_tpl_vars['data']['oid']; ?>

	</div>
</div>
<script>
	(function(){
		var num=['【开运科技】'];
		var rNum=parseInt(Math.random()*num.length,10);
		document.write('<div style="text-align: center;margin:10px 0 0;padding:0 0 10px;overflow: hidden;"><p style="font-size: 16px;">关注微信号领取赠品或预约大师:</p><p style="color:#FF6632;padding:6px 0;font-size: 18px">'+num[rNum]+'</p><div style="width: 240px;text-align: left;margin:0 auto;line-height: 24px;"><p style="position: relative;padding-left:24px;"><i style="font-style: normal;position: absolute;width: 20px;height:20px;line-height: 20px;left:2px;top:2px;line-height: 20px;color: #fff;background: #000;text-align: center;border-radius: 50%">1</i>【长按上方微信号即可复制】</p><a href="weixin://" style="position: relative;padding-left:24px;color: #FF6632;display: block;text-decoration: none;"><i style="font-style: normal;position: absolute;width: 20px;height:20px;line-height: 20px;left:2px;top:2px;line-height: 20px;color: #fff;background: #000;text-align: center;border-radius: 50%"">2</i>【点我打开微信】</a></div></div>');
	})();
</script>
<div style='text-align:center;>
<span style='color:#ff0000'>关注微信后回复：面相教程、即可领取赠品</span>
</div>
<!--ads:550-->
<div id="showList">
	<div class="sl_box">
		<p class="public_words_title J_listTit">
			<i class="on"></i> 您的八字命盘
		</p>
		<div class="J_listCon result_list_content" style="display: block;">
			<div class="base_info">
				<p>
					<span>姓名:</span><?php echo $this->_tpl_vars['data']['data']['username']; ?>

				</p>
				<p>
					<span>性别:</span><?php if ($this->_tpl_vars['data']['data']['username'] == 1): ?>男<?php else: ?>女<?php endif; ?>
				</p>
				<p>
					<span>公历:</span><?php echo $this->_tpl_vars['data']['data']['y']; ?>
年<?php echo $this->_tpl_vars['data']['data']['m']; ?>
月<?php echo $this->_tpl_vars['data']['data']['d']; ?>
日 <?php echo $this->_tpl_vars['data']['data']['h']; ?>
时
				</p>
				<p>
					<span>农历:</span><?php echo $this->_tpl_vars['data']['data']['lDate']; ?>

				</p>
			</div>
			<ul class="detail_info">
				<li><span class="info_head info_heads info_ts">&nbsp;</span><span class="info_head info_heads">年柱</span><span class="info_head info_heads">月柱</span><span class="info_head info_heads">日柱</span><span class="info_head info_heads">时柱</span></li>
				<li><span class="info_head">十神</span><span><?php echo $this->_tpl_vars['pp']['shishen1']; ?>
</span><span><?php echo $this->_tpl_vars['pp']['shishen2']; ?>
</span><span><?php echo $this->_tpl_vars['pp']['shishen3']; ?>
</span><span><?php echo $this->_tpl_vars['pp']['shishen4']; ?>
</span></li>
				<li><span class="info_head">&nbsp; 八</span><span><?php echo $this->_tpl_vars['return']['user']['bazi']['0']; ?>
</span><span><?php echo $this->_tpl_vars['return']['user']['bazi']['2']; ?>
</span><span><?php echo $this->_tpl_vars['return']['user']['bazi']['4']; ?>
</span><span><?php echo $this->_tpl_vars['return']['user']['bazi']['6']; ?>
</span></li>
				<li><span class="info_head">&nbsp; 字</span><span><?php echo $this->_tpl_vars['return']['user']['bazi']['1']; ?>
</span><span><?php echo $this->_tpl_vars['return']['user']['bazi']['3']; ?>
</span><span><?php echo $this->_tpl_vars['return']['user']['bazi']['5']; ?>
</span><span><?php echo $this->_tpl_vars['return']['user']['bazi']['7']; ?>
</span></li>
				<li><span class="info_head">藏干</span><span><?php echo $this->_tpl_vars['pp']['zanggan1']; ?>
</span><span><?php echo $this->_tpl_vars['pp']['zanggan2']; ?>
</span><span><?php echo $this->_tpl_vars['pp']['zanggan3']; ?>
</span><span><?php echo $this->_tpl_vars['pp']['zanggan4']; ?>
</span></li>
				<li><span class="info_head">纳音</span><span><?php echo $this->_tpl_vars['pp']['nayin1']; ?>
</span><span><?php echo $this->_tpl_vars['pp']['nayin2']; ?>
</span><span><?php echo $this->_tpl_vars['pp']['nayin3']; ?>
</span><span><?php echo $this->_tpl_vars['pp']['nayin4']; ?>
</span></li>

			</ul>
			<div class="main_info">
				<ul>
					<!--<li>
						<div class="m_w_bai">
							<span>旺相休囚死: </span>金水土火木
						</div>
					</li>-->
					<li>
						<div class="ts m_w_80">
							<span>喜用神:</span><?php echo $this->_tpl_vars['return']['data']['xiyongshen']['data']['xishen']; ?>

						</div>
					</li>
					<li>
						<div class="clear">
							<span>胎元:</span><?php echo $this->_tpl_vars['pp']['taiyuan']; ?>

						</div>
						<div class="tss">
							<span>命宫:</span><?php echo $this->_tpl_vars['pp']['minggong']; ?>

						</div>
					</li>
					<li>
						<div class="ts_a">
							<span>起大运:</span><?php echo $this->_tpl_vars['return']['data']['xiyongshen']['data']['dayun']; ?>

						</div>
					</li>
				</ul>
				<dl>
					<dt>大运</dt>
					<dd>
						<div class="num">
							<span><?php echo $this->_tpl_vars['return']['data']['xiyongshen']['data']['nnnn']; ?>
</span><span><?php echo $this->_tpl_vars['return']['data']['xiyongshen']['data']['nnnn']+10; ?>
</span><span><?php echo $this->_tpl_vars['return']['data']['xiyongshen']['data']['nnnn']+20; ?>
</span><span><?php echo $this->_tpl_vars['return']['data']['xiyongshen']['data']['nnnn']+30; ?>
</span><span><?php echo $this->_tpl_vars['return']['data']['xiyongshen']['data']['nnnn']+40; ?>
</span><span><?php echo $this->_tpl_vars['return']['data']['xiyongshen']['data']['nnnn']+50; ?>
</span><span><?php echo $this->_tpl_vars['return']['data']['xiyongshen']['data']['nnnn']+60; ?>
</span><span>73</span>
						</div>
						<div class="word">
							<span><?php echo $this->_tpl_vars['return']['data']['xiyongshen']['data']['yq_text']['0']; ?>
</span><span><?php echo $this->_tpl_vars['return']['data']['xiyongshen']['data']['yq_text']['1']; ?>
</span><span><?php echo $this->_tpl_vars['return']['data']['xiyongshen']['data']['yq_text']['2']; ?>
</span><span><?php echo $this->_tpl_vars['return']['data']['xiyongshen']['data']['yq_text']['3']; ?>
</span><span><?php echo $this->_tpl_vars['return']['data']['xiyongshen']['data']['yq_text']['4']; ?>
</span><span><?php echo $this->_tpl_vars['return']['data']['xiyongshen']['data']['yq_text']['5']; ?>
</span><span><?php echo $this->_tpl_vars['return']['data']['xiyongshen']['data']['yq_text']['6']; ?>
</span><span><?php echo $this->_tpl_vars['return']['data']['xiyongshen']['data']['yq_text']['7']; ?>
</span>
						</div>
					</dd>
				</dl>
			</div>
		</div>
	</div>
	<div class="sl_box">
		<p class="public_words_title J_listTit">
			<i></i> 您的性格分析
		</p>
		<div class="J_listCon result_list_content">
			<p class="infos">
				您出生于农历<?php echo $this->_tpl_vars['return']['user']['lDate']; ?>
，五行生肖为:<?php echo $this->_tpl_vars['return']['user']['sx']; ?>

			</p>
			<div class="public_con_word">
				<?php echo $this->_tpl_vars['return']['info']['sxgx']['sxgx']; ?>

			</div>
			<p class="public_title">
				性格优缺点
			</p>
			<div class="public_con_word">
				<p>
					<font color="#ff4632">优点</font>:<?php if ($this->_tpl_vars['return']['data']['zonghe']['yx']): ?><?php echo $this->_tpl_vars['return']['data']['zonghe']['yx']; ?>
<?php else: ?>才智高且具优秀的头脑，行动活泼好动且伶俐。好竞争，手腕敏捷有侠义心情，反应快，能见机行事。社交手腕高明善解人意，很快与人打成一片，但不喜欢被人控制，喜爱追求新鲜事务。聪明、机智、创新有才华，能言善道，有极强的自我表现欲。非常适合演艺和推销工作猴年生的男性精力充沛身体健壮，常表现达观机智勇敢，对环境变化有很强的适应能力生性顽强不服输，拥有多项才能而能居主导地位。求知欲很强，记忆力超人，头脑灵活很有创造力。善于把握机会扩大发展，造成时势，成为大企业家。<?php endif; ?>
				</p>
				<p>
					<font color="#ff4632">缺点</font>:<?php if ($this->_tpl_vars['return']['data']['zonghe']['qd']): ?><?php echo $this->_tpl_vars['return']['data']['zonghe']['qd']; ?>
<?php else: ?>平常爱说大话，有时有反对人之意见虚语或伪诈行为。忽略必需遵守社会全体规范，有点不脚踏实地。生性爱玩缺乏耐心毅力，眼光看得不远，犯有今朝有酒今朝醉的毛病。依赖心很重，好夸张和爱慕虚荣且喜新厌旧，不管做任何事都不会持续太久。狡滑伪善，无耐心不忠实狂妄自大，过份乐观，自负心强喜投机。为了达成目的喜爱说谎骗人，尽管才智出众八面玲珑，却不能以德服人，是典型的机会主义者。猴年生人无论说话做事一定要诚实踏实，否则会一塌糊涂。有自以为是急就章的毛病，所以常导致错误失败。<?php endif; ?>
				</p>
			</div>
		</div>
	</div>
	<div class="sl_box">
		<p class="public_words_title J_listTit">
			<i></i>您的财运分析
		</p>
		<div class="J_listCon result_list_content">
			<p class="public_title">
				流年财运
			</p>
			<div class="public_con_word">
				<p>
					<?php if ($this->_tpl_vars['return']['data']['zonghe']['lncy']): ?><?php echo $this->_tpl_vars['return']['data']['zonghe']['lncy']; ?>
<?php else: ?>你今年的财运浮沉反复，故此不宜大量投资及赌博，以免焦头烂额!幸而正财收入尚算稳定，故此若能量入为出，经济便不会出现赤字问题。此外，必须慎防受骗破财。今年的财运低沉的月份，是农历正月、五月、六月、九月及十二月，必须尽量减少不必要开支。财运较佳的月份，是农历一月、八月及十一月。<?php endif; ?>
				</p>
			</div>
			<p class="public_title">
				先天财运
			</p>
			<div class="public_con_word">
				<p>
					<?php if ($this->_tpl_vars['return']['data']['zonghe']['xtcy']): ?><?php echo $this->_tpl_vars['return']['data']['zonghe']['xtcy']; ?>
<?php else: ?>本命财运，你的财运上从总体上来说是相当不错的。你拥有着让人艳羡的终生不用为钱烦恼的运气。然而由于做人积极且个性外向，是个天生的乐天派的马大哈性格，大都没有储蓄的习惯，手头充裕的时候，常不会做有效的运用，反而是挥霍无度。然而，他们打进了中年以后，却很有可能获得意外之财。如果在理财上如何趋利避害，关键便在于运用、开发好自己的大脑一般都会是大富大贵之人。<?php endif; ?>
				</p>
			</div>
			<p class="public_title">
				注意事项
			</p>
			<div class="public_con_word">
				<p>
					<?php if ($this->_tpl_vars['return']['data']['zonghe']['zhuyi']): ?><?php echo $this->_tpl_vars['return']['data']['zonghe']['zhuyi']; ?>
<?php else: ?>建议主动帮长辈定期做身体检查，一则避免亲人有突发的重大疾病而意外破财，二则主动消费对财运有帮助。易有意料之外的小财运，但难以保存，最好购置保值物品或小投资的方式留财。外地走动财运更好，特别是外出业务合作、表演。<?php endif; ?>
				</p>
			</div>
		</div>
	</div>
	<div class="sl_box">
		<p class="public_words_title J_listTit">
			<i></i>您的爱情恋爱建议
		</p>
		<div class="J_listCon result_list_content">
			<p class="public_title">
				爱情分析
			</p>
			<div class="public_con_word">
				<p>
					<?php if ($this->_tpl_vars['return']['data']['zonghe']['aqfx']): ?><?php echo $this->_tpl_vars['return']['data']['zonghe']['aqfx']; ?>
<?php else: ?>这种类型的<?php if ($this->_tpl_vars['data']['data']['username'] == 1): ?>男<?php else: ?>女<?php endif; ?>性有知性的魅力，稍带忧郁的气质很受异性的欢迎。凡是追求的异性，一概来者不拒，一个星期可能和七个人约会。此外，因他具有果敢的行动力，所以也常会主动邀约他人。壬日男性很擅长“一夜风流”，从吃饭、饮酒到饭店这一个过程视以知性的背景，制造了绝妙的气氛，使他们无往不利。由于自由的恋爱观，使他们甚少有从一异性而终的心态。<?php endif; ?>
				</p>
			</div>
			<p class="public_title">
				命带多少桃花运
			</p>
			<div class="public_con_word">
				<p>
					您命中有:红艳桃花<?php if ($this->_tpl_vars['return']['data']['zonghe']['th']): ?><?php echo $this->_tpl_vars['return']['data']['zonghe']['th']; ?>
<?php else: ?>1<?php endif; ?>朵
				</p>
			</div>
			<div class="list">
				<dl>
					<dd><img src="/statics/ffsm/bazijingpi/1/images/587dbda116fc0.png" alt="红艳桃花" class="list_pic"/>
						<p class="list_t">
							红艳桃花
						</p>
						<p>
							高雅优美追求者众
						</p>
						<p>
							顾名思义，红艳给人感受如同花开美好又灿烂，主众人见你心喜，本人气质出众，有特殊的魅力与好人缘，以至于本人在爱情追求上如虎添翼。红艳桃花，全名红艳桃花煞。命带红艳桃花，象征当事人外缘极佳，感情世界丰富。除了吸引异性欣赏，命带红艳桃花者，本身性情亦属浪漫多情，面对追求者示爱，很容易动情而接受对方。在你的八字格局里有红艳桃花，象征你发生一见锺情的机率很高，往往会在电石火光间遇到了那个对的人与恋人的发展关系往往是激情四射，当然这样的感情来得快也去得快。因为命带红艳桃花，象征本人异性缘佳，且生性多情。即使身旁已有交往对象，仍会吸引其他异性追求，若本身意志不坚，很容易就风流韵事不断，造成爱情运势不稳、感情容易生变。
						</p>
					</dd>
				</dl>
			</div>
		</div>
	</div>
	<div class="sl_box">
		<p class="public_words_title J_listTit">
			<i></i>您的健康建议
		</p>
		<div class="J_listCon result_list_content">
			<div class="public_con_word">
				<p>
					从中医养生上来说，您基本上是<font color="#ff4632"><?php echo $this->_tpl_vars['return']['info']['wharr']['wang']; ?>
</font>型人。
				</p>
			</div>
			<ul class="bazi_pic">
				<li><a href="javascript:;"><img src="/statics/ffsm/bazijingpi/1/images/587c34d949d33.png" alt="images" width="65%"/></a>
					<p>
						金
					</p>
				</li>
				<li><a href="javascript:;"><img src="/statics/ffsm/bazijingpi/1/images/587c34f569f63.png" alt="images" width="75%"/></a>
					<p>
						木
					</p>
				</li>
				<li><a href="javascript:;"><img src="/statics/ffsm/bazijingpi/1/images/587c3506773e3.png" alt="images"/></a>
					<p>
						水
					</p>
				</li>
				<li><a href="javascript:;"><img src="/statics/ffsm/bazijingpi/1/images/587c3516d9b1d.png" alt="images" width="60%"/></a>
					<p>
						火
					</p>
				</li>
				<li><a href="javascript:;"><img src="/statics/ffsm/bazijingpi/1/images/587c35274db39.png" alt="images" width="80%"/></a>
					<p>
						土
					</p>
				</li>
			</ul>
			<div class="public_con_word">
				<p>
					<?php echo $this->_tpl_vars['return']['data']['rgxx']['jkfx']; ?>

				</p>
				<p>
					易患疾病:<?php echo $this->_tpl_vars['return']['info']['wharr']['whjk']['jb']; ?>

				</p>
				<p>
					易发症状:<?php echo $this->_tpl_vars['return']['info']['wharr']['whjk']['zz']; ?>

				</p>
			</div>
			<p class="public_title">
				养生要点
			</p>
			<div class="public_con_word">
				<p>
					养生要点:<?php echo $this->_tpl_vars['return']['info']['wharr']['whjk']['yd']; ?>

				</p>
			</div>
			<p class="public_title">
				生活起居
			</p>
			<div class="public_con_word">
				<p>
					生活起居:<?php echo $this->_tpl_vars['return']['info']['wharr']['whjk']['sh']; ?>

				</p>
			</div>
			<p class="public_title">
				饮食调节
			</p>
			<div class="public_con_word">
				<p>
					饮食调养:<?php echo $this->_tpl_vars['return']['info']['wharr']['whjk']['ys']; ?>

				</p>
			</div>
			<p class="public_title">
				保健膳食
			</p>
			<div class="public_con_word">
				<p>

				</p>保健膳食:<?php echo $this->_tpl_vars['return']['info']['wharr']['whjk']['bj']; ?>

			</div>
		</div>
	</div>
	<div class="sl_box">
		<p class="public_words_title J_listTit">
			<i></i>您的事业成就
		</p>
		<div class="J_listCon result_list_content">
			<p class="public_title">
				事业分析
			</p>
			<div class="public_con_word">
				<span>您的八字喜用神为<?php echo $this->_tpl_vars['return']['data']['xiyongshen']['data']['xishen']; ?>
，从事属<?php echo $this->_tpl_vars['return']['data']['xiyongshen']['data']['xishen']; ?>
行业较有利于您的事业发展</span>
			</div>
			<p class="public_title">
				有利事业的方向以及概要说明
			</p>
			<div class="public_con_word">
				<p>
					<?php echo $this->_tpl_vars['return']['data']['xiyongshen']['shiye']; ?>

				</p>
			</div>
			<p class="public_title">
				三合贵人
			</p>
			<div class="public_con_word">
				<p>
					与三合贵人共事或者得到三合贵人的帮助有利于你的事业的发展，有利于你的三合生肖是:
				</p>
			</div>
			<ul class="zodiac_pic">
				<li><a href="#"><img src="/statics/img/<?php echo $this->_tpl_vars['return']['data']['xiyongshen']['sanhe']['sanhetu']['0']; ?>
.png" alt="<?php echo $this->_tpl_vars['return']['data']['xiyongshen']['sanhe']['sanhe']['0']; ?>
"/>
						<p>
							<?php echo $this->_tpl_vars['return']['data']['xiyongshen']['sanhe']['sanhe']['0']; ?>

						</p>
					</a></li>
				<li class="zodiac_pic_center ">
					三合
				</li>
				<li class="zodiac_img_fs "><a href="#"><img src="/statics/img/<?php echo $this->_tpl_vars['return']['data']['xiyongshen']['sanhe']['sanhetu']['1']; ?>
.png" alt="<?php echo $this->_tpl_vars['return']['data']['xiyongshen']['sanhe']['sanhe']['1']; ?>
"/>
						<p>
							<?php echo $this->_tpl_vars['return']['data']['xiyongshen']['sanhe']['sanhe']['1']; ?>

						</p>
					</a></li>
				<li class="zodiac_img_fs "><a href="#"><img src="/statics/img/<?php echo $this->_tpl_vars['return']['data']['xiyongshen']['sanhe']['sanhetu']['2']; ?>
.png" alt="<?php echo $this->_tpl_vars['return']['data']['xiyongshen']['sanhe']['sanhe']['2']; ?>
"/>
						<p>
							<?php echo $this->_tpl_vars['return']['data']['xiyongshen']['sanhe']['sanhe']['2']; ?>

						</p>
					</a></li>
			</ul>
		</div>
	</div>
	<div class="sl_box">
		<p class="public_words_title J_listTit">
			<i></i>您的2018年流月运程
		</p>
		<div class="J_listCon result_list_content">
			<p class="public_title">
				流月吉凶
			</p>
			<div class="public_con_word">
				<p>
					本年运势较低落的月份是农历一月、二月、八月、九月、十月在这段时期必须谨言慎行，不投机。较为顺利的月份是农历三月、四月、七月、十一月、十二月积极努力，必有收获。
				</p>
			</div>
			<?php $_from = $this->_tpl_vars['return']['sx']['yf']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
			<p class="public_title">
				<?php echo $this->_tpl_vars['v']['m']; ?>
月<?php echo $this->_tpl_vars['v']['title']; ?>

			</p>
			<div class="public_con_word">
				<p>
					<?php echo $this->_tpl_vars['v']['content']; ?>

				</p>
			</div>
			<?php endforeach; endif; unset($_from); ?>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(function(){
		//展开收缩
		var showList = $('#showList');
		showList.find('.J_listTit').on('click', function() {
			var thisI = $(this).children('i');
			if (!thisI.hasClass('on')) {
				showList.find('.J_listTit').children('i').removeClass('on');
				showList.find('.J_listCon').hide();
				thisI.addClass('on');
				$("html,body").scrollTop(thisI.offset().top - 10);
				$(this).siblings('.J_listCon').show();
			} else {
				thisI.removeClass('on');
				$(this).siblings('.J_listCon').hide();
			}
		});
	});
</script>
<div class="public_fyd_fengqing">
	<div class="public_ff_title">
		关注微信公众号还可以免费测
	</div>
	<div class="public_ff_goods">
		<img src="https://www.03ky.com/m/tu/weixin.jpg" alt="">
		<p>
			<span>微信号（kaiyunkj）</span>
		</p>
	</div>
	<div class="public_ff_text">
<p>
	开运网汇聚易学精英，微信关注《开运科技》可以随时随地与权威命理大师一对一问答式服务。更有免费真人在线测试服务，详情敬请关注我们的微信公众号
</p>
<p style="text-align:center;">
	（kaiyunky）
</p>
<p style="text-align:center;">
	长按复制
</p>
<p>
	开运网你身边值得信赖的命理顾问专家，生活中遇到不顺心事不妨到我们公众号内找找命理方面的专家为你解惑。
</p>
	</div>
	<div class="public_ff_btn">
		<a style="color:#fff;" href="weixin://">复制上方微信号点此打开微信</a>
	</div>
</div>
<script>
	(function(){
		var num=['yuzejiangheng','1033600860','13382031152'];
		var rNum=parseInt(Math.random()*num.length,10);
		document.write('<div style="text-align: center;margin:10px 0 0;padding:0 0 10px;overflow: hidden;"><p style="font-size: 16px;">更多详细测算，请咨询大师微信号:</p><p style="color:#FF6632;padding:6px 0;font-size: 18px">'+num[rNum]+'</p><div style="width: 240px;text-align: left;margin:0 auto;line-height: 24px;"><p style="position: relative;padding-left:24px;"><i style="font-style: normal;position: absolute;width: 20px;height:20px;line-height: 20px;left:2px;top:2px;line-height: 20px;color: #fff;background: #000;text-align: center;border-radius: 50%">1</i>【长按上方数字复制微信号】</p><a href="weixin://" style="position: relative;padding-left:24px;color: #FF6632;display: block;text-decoration: none;"><i style="font-style: normal;position: absolute;width: 20px;height:20px;line-height: 20px;left:2px;top:2px;line-height: 20px;color: #fff;background: #000;text-align: center;border-radius: 50%"">2</i>【点我打开微信】</a></div></div>');
	})();
</script>
<!--ads:500-->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './ffsm/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

</body>
</html>