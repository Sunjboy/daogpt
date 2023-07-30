<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `sm_class`;");
E_C("CREATE TABLE `sm_class` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `parentid` int(10) NOT NULL DEFAULT '0',
  `listorder` int(10) NOT NULL DEFAULT '0',
  `title` varchar(200) NOT NULL,
  `keywords` text NOT NULL,
  `description` text NOT NULL,
  `extra` varchar(250) NOT NULL COMMENT '扩展信息',
  `model` varchar(30) NOT NULL COMMENT '所在模型',
  `status` int(1) NOT NULL COMMENT '是否隐藏',
  `f_ct` varchar(250) NOT NULL COMMENT '控制器',
  `f_ac` varchar(250) NOT NULL COMMENT '方法',
  `mid` int(3) NOT NULL COMMENT '1=算命,2=文章,3=单页,4=解梦,5=星座运势,6=生肖',
  PRIMARY KEY (`id`),
  KEY `parentid` (`parentid`)
) ENGINE=InnoDB AUTO_INCREMENT=477 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC");
E_D("replace into `sm_class` values('344','百科','0','10','百科知识，星座分析，生肖属相','百科知识，星座分析，生肖属相','百科知识，星座分析，生肖属相','baike/','video','0','','','1');");
E_D("replace into `sm_class` values('345','星座分析','344','99','星座分析，12星座分析，星座是按阴历还是阳历 ','星座分析，12星座分析，星座是按阴历还是阳历','星座是按阴历还是阳历,星座分析，12星座分析,星座配对指数','','video','0','','','2');");
E_D("replace into `sm_class` values('346','心理测试','344','99','心理测试大全,超准的心理测试,心理测试题及答案','心理测试大全,超准的心理测试,心理测试题及答案','心理测试大全，超准的心理测试，将人的某些心理特征数量化，来衡量个体心理因素水平和个体心理差..','','video','0','','','2');");
E_D("replace into `sm_class` values('347','风水命理','344','99','风水学，风水学入门，家居 办公风水，风水布局','风水学，风水学入门，家居 办公风水，风水布局','风水学，风水学入门，家居 办公风水，风水布局','','video','0','','','2');");
E_D("replace into `sm_class` values('348','八字百科','344','99','八字百科，百科小知识，八字算命','八字百科，百科小知识，八字算命','八字百科，百科小知识，八字算命','','video','0','','','2');");
E_D("replace into `sm_class` values('349','解梦','0','8','周公解梦，免费周公解梦破解，周公在线解梦，周公解梦破解大全-最全最准的周公解梦网站','周公解梦,免费周公解梦破解,周公在线解梦,周公解梦破解大全','周公解梦，免费周公解梦破解，周公解梦大全查询系统，翻译了最权威的原版周公解梦资料，拥有最全面的现代周公解梦数据，供广大网友进行解梦查询。同时有在线解梦平台为网友解答梦境','zgjm/','video','0','','','1');");
E_D("replace into `sm_class` values('350','人物','349','99','人物解梦，关于人物的梦，免费周公解梦破解-最全最准的周公解梦网站','人物篇,关于人物的梦,免费周公解梦破解','人物解梦，关于人物的梦，周公解梦，免费周公解梦破解，周公解梦在线解梦，周公解梦官方网站，周公解梦大全查询系统，翻译了最权威的原版周公解梦资料，拥有最全面的现代周公解梦数据，供广大网友进行解梦查询。同时有在线解梦平台为网友解答梦境','','video','0','','','4');");
E_D("replace into `sm_class` values('351','动物','349','99','动物解梦，关于动物的梦，免费周公解梦破解-最全最准的周公解梦网站','动物篇,关于动物的梦,免费周公解梦破解','动物解梦，关于动物的梦，周公解梦，免费周公解梦破解，周公解梦在线解梦，周公解梦官方网站，周公解梦大全查询系统，翻译了最权威的原版周公解梦资料，拥有最全面的现代周公解梦数据，供广大网友进行解梦查询。同时有在线解梦平台为网友解答梦境','','video','0','','','4');");
E_D("replace into `sm_class` values('352','物品','349','99','物品解梦，关于物品的梦，免费周公解梦破解-最全最准的周公解梦网站','物品篇,关于物品的梦,免费周公解梦破解','物品解梦，关于物品的梦，周公解梦，免费周公解梦破解，周公解梦在线解梦，周公解梦官方网站，周公解梦大全查询系统，翻译了最权威的原版周公解梦资料，拥有最全面的现代周公解梦数据，供广大网友进行解梦查询。同时有在线解梦平台为网友解答梦境','','video','0','','','4');");
E_D("replace into `sm_class` values('353','植物','349','99','植物解梦，关于植物的梦，免费周公解梦破解-最全最准的周公解梦网站','植物篇,关于植物的梦,免费周公解梦破解','植物解梦，关于植物的梦，周公解梦，免费周公解梦破解，周公解梦在线解梦，周公解梦官方网站，周公解梦大全查询系统，翻译了最权威的原版周公解梦资料，拥有最全面的现代周公解梦数据，供广大网友进行解梦查询。同时有在线解梦平台为网友解答梦境','','video','0','','','4');");
E_D("replace into `sm_class` values('354','鬼神','349','99','鬼神解梦，关于鬼神的梦，免费周公解梦破解-最全最准的周公解梦网站','鬼神篇,关于鬼神的梦,免费周公解梦破解','鬼神解梦，关于鬼神的梦，周公解梦，免费周公解梦破解，周公解梦在线解梦，周公解梦官方网站，周公解梦大全查询系统，翻译了最权威的原版周公解梦资料，拥有最全面的现代周公解梦数据，供广大网友进行解梦查询。同时有在线解梦平台为网友解答梦境','','video','0','','','4');");
E_D("replace into `sm_class` values('355','生活','349','99','生活解梦，关于生活的梦，免费周公解梦破解-最全最准的周公解梦网站','生活篇,关于生活的梦,免费周公解梦破解','生活解梦，关于生活的梦，周公解梦，免费周公解梦破解，周公解梦在线解梦，周公解梦官方网站，周公解梦大全查询系统，翻译了最权威的原版周公解梦资料，拥有最全面的现代周公解梦数据，供广大网友进行解梦查询。同时有在线解梦平台为网友解答梦境','','video','0','','','4');");
E_D("replace into `sm_class` values('356','其他','349','99','孕妇，建筑，自然，活动解梦，关于孕妇，建筑，自然，活动的梦，免费周公解梦破解-最全最准的周公解梦网站','孕妇，建筑，自然，活动篇,关于孕妇，建筑，自然，活动的梦,免费周公解梦破解','孕妇，建筑，自然，活动解梦，关于孕妇，建筑，自然，活动的梦，周公解梦，免费周公解梦破解，周公解梦在线解梦，周公解梦官方网站，周公解梦大全查询系统，翻译了最权威的原版周公解梦资料，拥有最全面的现代周公解梦数据，供广大网友进行解梦查询。同时有在线解梦平台为网友解答梦境','','video','0','','','4');");
E_D("replace into `sm_class` values('357','算命','0','1','生辰八字算命，四柱八字算命，免费算命','四柱八字算命算命,免费算命,生辰八字算命,在线起名字,名字测试打分','四柱八字算命,千古不传的秘密,流落民间的八字知识秘籍,改运转运,算命最准的网站,根据周易算命的方法,为您进行最准的免费测八字算命','suanming/scbz/','video','0','','','1');");
E_D("replace into `sm_class` values('358','姓名','0','2','姓名算命，名字测试打分，姓名测试爱情，生辰八字测名字打分','姓名算命，名字测试打分，姓名测试爱情，生辰八字测名字打分','姓名算命，姓名测试爱情，生辰八字测名字打分，姓名分析','xingming/xmfx/','video','0','','','1');");
E_D("replace into `sm_class` values('359','排盘','0','3','八字在线排盘，八字排盘，四柱八字排盘','八字在线排盘，八字排盘，四柱八字排盘','谁都想知道自己一生中的事业、财运、婚姻、功名、健康、性格、流年运程将是怎样,通过八字排盘，四柱八字排盘会有你想知道的答案。一个人出生的年月时天干地支的排列组合（即八字）就是命。不过仅凭干干巴巴的八个干支，没法推算贵 贱吉凶...','paipan/bazi/','video','0','','','1');");
E_D("replace into `sm_class` values('360','配对','0','4','配对、合婚、八字','配对、合婚、八字','神算网配对栏目提供八字合婚、十二星座配对、十二生肖配对、名字配对、血型配对等配对指数等,告诉你两人互动的元素和相互的影响,了解更多对方信息。','peidui/hehun/','video','0','','','1');");
E_D("replace into `sm_class` values('361','号码','0','5','号码吉凶，号码吉凶查询，手机，电话，身份证，QQ号码吉凶查询-','QQ号码吉凶,手机,身份证号码吉凶,算命,免费算命,生辰八字算命','QQ号码吉凶，手机，身份证号码吉凶，欢迎您来到神算网在线免费算命网站，本站测算内容包括：生辰八字算命，称骨算命，抽签算命，测字算命，在线取名字，名字测试打分，生肖运程等内容','haoma/','video','0','','','1');");
E_D("replace into `sm_class` values('362','灵签','0','6','抽签算命，诸葛神算，观音灵签抽签，黄大仙灵签','抽签算命，诸葛神算，观音灵签抽签，黄大仙灵签','抽签占卜、抽签算命预测是什么？抽签占卜是我国民间一个具有重要意义的预测俗成方法，抽签占卜方法在我国民间具有广泛的信仰民众，八字网抽签算命要求抽签人诚心祈祷','chouqian/','video','0','','','1');");
E_D("replace into `sm_class` values('363','黄历','0','7','今日黄历，择日，老黄历，财神方位，吉神方位','今日黄历，择日，老黄历，财神方位，吉神方位','今日黄历，择日，老黄历，财神方位，吉神方位','hdjr/','video','0','','','1');");
E_D("replace into `sm_class` values('364','星座','0','9','12星座，十二星座配对表，星座查询，星座运势','星座,星座查询,星座运势,十二星座,星座配对','八字网专业星座运程预测网，提供星座、个性、开运方法、运势、配对、解梦以及心理测试、血型、生肖、塔罗牌、算命、风水等星相命理信息','xingzuo/','video','0','','','1');");
E_D("replace into `sm_class` values('365','生辰八字','357','99','生辰八字算命，四柱八字算命，免费算命','四柱八字算命算命,免费算命,生辰八字算命,在线起名字,名字测试打分','四柱八字算命,千古不传的秘密,流落民间的八字知识秘籍,改运转运,算命最准的网站,根据周易算命的方法,为您进行最准的免费测八字算命！。','suanming/scbz/','video','0','suanming','suanming','1');");
E_D("replace into `sm_class` values('366','日干论命','357','99','日干论命，四柱推断，周易算命，免费算命','日干论命,四柱推断算命,免费算命,生辰八字算命,在线起名字,名字测试打分','日干论命,四柱推断,千古不传的秘密,流落民间的八字知识秘籍,改运转运,算命最准的网站,根据周易算命的方法,为您进行最准的免费测八字算命\r\n','suanming/rglm/','video','0','suanming','rglm','1');");
E_D("replace into `sm_class` values('367','称骨论命','357','99','称骨论命，袁天罡称骨，周易算命，免费算命 ','称骨论命,袁天罡称骨算命,免费算命,生辰八字算命,在线起名字,名字测试打分','称骨论命,袁天罡称骨,千古不传的秘密,流落民间的八字知识秘籍,改运转运,算命最准的网站,根据周易算命的方法,为您进行最准的免费测八字算命\r\n','suanming/cglm/','video','0','suanming','cg','1');");
E_D("replace into `sm_class` values('368','三世财运','357','99','三世财运测算，一年运势，周易算命，免费算命，前世因，今世果 - 八字网','三世财运,一年运势,三世书,前世因，今世果算命,免费算命,生辰八字算命,在线起名字,名字测试打分','三世财运,一年运势,三世书,前世因，今世果,千古不传的秘密,流落民间的八字知识秘籍,改运转运,算命最准的网站,根据周易算命的方法,为您进行最准的免费测八字算命\r\n','suanming/sscy/','video','0','suanming','bzsm','1');");
E_D("replace into `sm_class` values('369','八字测算','357','99','八字测算，生辰八字测算，免费算命生辰八字测算','八字测算,生辰八字测算,免费算命生辰八字测算算命,免费算命,生辰八字算命,在线起名字,名字测试打分','八字测算,生辰八字测算,免费算命生辰八字测算,千古不传的秘密,流落民间的八字知识秘籍,改运转运,算命最准的网站,根据周易算命的方法,为您进行最准的免费测八字算命\r\n','suanming/bzcs/','video','0','suanming','bzcs','1');");
E_D("replace into `sm_class` values('370','风水测算','357','99','风水测算，住宅风水，年份朝向风水测算','风水测算,住宅风水,年份朝向风水测','风水，本为相地之术，即临场校察地理的方法，也叫地相、古称堪舆术。相传风水的创始人是九天玄女，比较完善的风水学问起源于战国时代。风水的核心思想是人与大自然的和谐，早期的风水主要关乎宫殿、住宅、村落、墓地的选址、座向、建设等方法及原则\r\n','suanming/fscs/','video','0','suanming','fscs','1');");
E_D("replace into `sm_class` values('371','名字分析','358','99','姓名算命，名字测试打分，姓名测试爱情，生辰八字测名字打分','姓名算命,姓名测试爱情,生辰八字测名字打分','姓名算命，姓名测试爱情，生辰八字测名字打分，姓名分析','xingming/xmfx/','video','0','','','1');");
E_D("replace into `sm_class` values('372','在线起名','358','99','免费在线起名，蛇宝宝起名大全，宝宝起名字测试打分','在线起名,起名字测试打分,起名字大全,宝宝起名大全,取名字大全,算命,免费算命,生辰八字算命','在线起名，起名字测试打分，起名字大全，宝宝起名大全，取名字大全，欢迎您来到八字网在线免费算命网站，本站测算内容包括：生辰八字算命，称骨算命，抽签算命，测字算命，在线取名字，名字测试打分，生肖运程等内容\r\n','xingming/qiming/','video','0','','','1');");
E_D("replace into `sm_class` values('373','定字起名','358','99','定字起名，在线起名，宝宝起名大全','宝宝定字起名,在线起名,宝宝起名大全,起名字大全,算命,免费算命,生辰八字算命','宝宝定字起名，在线起名，宝宝起名大全，起名字大全，欢迎您来到八字网在线免费算命网站，本站测算内容包括：生辰八字算命，称骨算命，抽签算命，测字算命，在线取名字，名字测试打分，生肖运程等内容','xingming/dzqiming/','video','0','','','1');");
E_D("replace into `sm_class` values('374','公司起名','358','99','公司名称评分，公司企业起名，公司企业名称测试打分，公司名字好坏','公司名称评分,公司企业起名,公司企业名称测试打分,公司名字好坏','公司名称评分，公司企业起名，公司企业名称测试打分，公司名字好坏，名字测试打分，名字还须要配合个人八字五行匹配，名字评分信则灵不在线','xingming/gsqm/','video','0','','','1');");
E_D("replace into `sm_class` values('375','名字配对','358','99','姓名配对，姓名五格配对，姓名算命','名配对,姓名五格配对,姓名算命','姓名配对，姓名五格配对，姓名算命','xingming/xmpd/','video','0','','','1');");
E_D("replace into `sm_class` values('376','八字排盘','359','99','字在线排盘，八字排盘，四柱八字排盘','八字在线排盘,八字排盘,四柱八字排盘','谁都想知道自己一生中的事业、财运、婚姻、功名、健康、性格、流年运程将是怎样,通过八字排盘，四柱八字排盘会有你想知道的答案。一个人出生的年月时天干地支的排列组合（即八字）就是命。不过仅凭干干巴巴的八个干支，没法推算贵 贱吉凶...\r\n','paipan/bazi/','video','0','','','1');");
E_D("replace into `sm_class` values('377','六壬排盘','359','99','六壬排盘，六壬在线排盘','六壬排盘，六壬在线排盘','六壬是用阴阳五行占卜吉凶的一种术数。六壬与遁甲、太乙合称三式。五行以水为首，十天干中，壬、癸分别为阳水、阴水。舍阴取阳，六十甲子中壬有六个（壬申、壬午、壬辰、壬寅、壬子、壬戌），称为六壬。六壬有六十四课，以刻有干支的天盘、地盘相叠，转动天盘后得出所值的干支及时辰，判明吉凶','paipan/liuren/','video','0','','','1');");
E_D("replace into `sm_class` values('378','玄空飞星','359','99','玄空飞星，玄空飞星风水，玄空飞星排盘','玄空飞星，玄空飞星风水，玄空飞星排盘','玄就是时间，空就是空间，玄空学就是一门研究时间和空间为人造福的学问。玄空学由三大体系构成：河图，洛书，八卦','paipan/xuankongfeixing/','video','0','','','1');");
E_D("replace into `sm_class` values('379','六爻起卦','359','99','六爻占卜，六爻排盘，六爻起卦 ','六爻占卜，六爻排盘，六爻起卦 ','周易六十四卦，每一卦有六爻，通过分析六爻之间的生克关系，来判断所求测之事的吉凶，称为六爻预测。\r\n⒉ 公历即是阳历，农历即是阴历。请按日期类型选择起卦的时间是阳历还是阴历。\r\n⒊ 六爻起卦，最好用三枚铜钱自己摇卦，然后手工指定卦象，最为准确。电脑摇卦次之。自动起卦最次之','paipan/liuyao/','video','0','','','1');");
E_D("replace into `sm_class` values('380','奇门遁甲','359','99','奇门遁甲在线排盘，奇门遁甲，奇门遁甲入门 ','奇门遁甲在线排盘，奇门遁甲，奇门遁甲入门 ','奇门遁甲在线排盘-奇门遁甲，原来是中国古老的一本书，但它往往被认为是一本占卜用的书，但有的说法是说《奇门遁甲》是我国古代人民在同大自然作斗争中，经过长期观察、反复验证，总结出来的一门传统珍贵文化遗产。还有的说''奇门遁甲''是修真的功法','paipan/qimendunjia/','video','0','','','1');");
E_D("replace into `sm_class` values('381','紫薇排盘','359','99','紫微斗数，紫微斗数在线排盘，紫微斗数算命','紫微斗数，紫微斗数在线排盘，紫微斗数算命','紫微斗数就是和生肖星座一样，主星有十四颗，代表自己的有一个或两个主星，副星和小星加起来有上百颗，把人的生辰分为十二个宫，就像正方形的命盘一样，顺时针或逆时针的围绕这个盘转，当天当月当年走到哪个宫位，里面的星星就代表不同的含义\r\n','paipan/ziwei/','video','0','','','1');");
E_D("replace into `sm_class` values('382','星盘测试','359','99','星盘测试，星盘落入星座测试，个人星盘查询 ','星盘测试，星辰落入星座测试，个人星盘查询','专业的在线星盘分析,详细的在线个人星盘解说.你知道什么是星盘吗?你知道你的星盘蕴藏什么吗?你知道你的星盘是否注定了你的一生?快来获取你的星盘,让我们为你解读你的星盘人生','paipan/xingpan/','video','0','','','1');");
E_D("replace into `sm_class` values('383','八字合婚','360','99','合婚，免费八字合婚，八字合婚免费算命，合婚算命 ',' 合婚,免费八字合婚,八字合婚免费算命,合婚算命','合婚又称“合年命”、“合八字”，古称“卜吉”。八字合婚是中国传统婚配预测方法之一，有着悠久的历史文化渊源；依据传统的八字合婚算命命理，用生辰八字对两人进行八字合婚\r\n','peidui/hehun/','video','0','','','1');");
E_D("replace into `sm_class` values('384','QQ配对','360','99','QQ配对，QQ配对测试，QQ配对查询','QQ配对，QQ配对测试，QQ配对查询','根据QQ配对查询，可测算出两人的关系，恋爱成功指数分析。','peidui/qq/','video','0','','','1');");
E_D("replace into `sm_class` values('385','星座配对','360','99','星座配对、十二星座、星座速配','星座配对、十二星座、星座速配','星座配对查询得到十二星座配对指数结果，星座配对是占卜师、阴阳师根据天象运行分析每个星座的不同性格，从而判断聚在一起。','peidui/xingzuo/','video','0','','','1');");
E_D("replace into `sm_class` values('386','生肖配对','360','99','生肖配对、属相配对','生肖配对、属相配对','生肖配对是依据古籍中的生肖五行理论衍生而来，属相有鼠、牛、虎、兔、龙、蛇、马、羊、猴、鸡、狗、猪十二种生肖，属相又都是由五行来区分的，生肖五行之间相生相克是如何分配属相配对的呢','peidui/shengxiao/','video','0','','','1');");
E_D("replace into `sm_class` values('387','名字配对','360','99','名字配对，姓名配对，名字配对测试','名字配对，姓名配对，名字配对测试','名字配对，姓名配对，名字配对测试','peidui/mingzi/','video','0','','','1');");
E_D("replace into `sm_class` values('388','血型配对','360','99','血型配对，血型测试，血型配对表','血型配对，血型测试，血型配对表','血型配对，血型测试，血型配对表','peidui/xuexing/','video','0','','','1');");
E_D("replace into `sm_class` values('389','手机号码','361','99','手机号码吉凶预测，号令天下手机号码测吉凶，测手机号码吉凶，电话号码测吉凶','手机号码吉凶预测,号令天下手机号码测吉凶,测手机号码吉凶,电话号码测吉凶','人们经常随身携带的符号则具有特定的吉凶暗示力。我们的生活几乎不离号码，如电话号码、手机号码。手机号码吉凶预测其实包含有一定的吉凶数理 - 神算网','haoma/shouji/','video','0','','','1');");
E_D("replace into `sm_class` values('390','电话号码','361','99','电话号码测吉凶，测手机号码吉凶，手机号码吉凶预测-八字网','电话号码测吉凶,测手机号码吉凶,手机号码吉凶预测','人们经常随身携带的符号则具有特定的吉凶暗示力。我们的生活几乎不离号码，如电话号码、手机号码。手机号码吉凶预测其实包含有一定的吉凶数理 ','haoma/dianhua/','video','0','','','1');");
E_D("replace into `sm_class` values('391','身份证号码','361','99','身份证号码测吉凶，身份证号码好不好，身份证号码归属地查询-','身份证号码测吉凶,身份证号码好不好,身份证号码归属地查询,算命,免费算命,生辰八字算命','人们经常随身携带的符号则具有特定的吉凶暗示力。我们的生活几乎不离号码，如身份证号码、身份证号码凶吉预测其实包含有一定的吉凶数理，电话号码测吉凶看结果就像姓名会影响运势命运的意义是一样的','haoma/shenfenzheng/','video','0','','','1');");
E_D("replace into `sm_class` values('392','QQ号码','361','99','Q号码测吉凶，QQ号码测试，QQ号码评估','QQ号码吉凶,QQ号码测试,QQ号码评估','QQ号码吉凶：QQ已经成为网民们必不可少的通讯工具，号码测吉凶，查看你的QQ号给你带来的性格暗示和影响，对你的QQ号码评估','haoma/qq/','video','0','','','1');");
E_D("replace into `sm_class` values('393','车牌号码','361','99','车牌号码吉凶预测，测车牌号码吉凶，车牌号码测吉凶','车牌号码吉凶预测,测车牌号码吉凶,车牌号码测吉凶算命,免费算命,生辰八字算命','车牌号码吉凶预测，测车牌号码吉凶，车牌号码测吉凶欢迎您来到八字网在线免费算命网站，本站测算内容包括：生辰八字算命，称骨算命，抽签算命，测字算命，在线取名字，名字测试打分，生肖运程等内容','haoma/chepai/','video','0','','','1');");
E_D("replace into `sm_class` values('394','生日密码','361','99','生日密码，生日花语，历史上今天','生日密码，生日花语，历史上今天','生日密码，生日花语，历史上今天','haoma/shengrimima/','video','0','','','1');");
E_D("replace into `sm_class` values('395','观音灵签','362','99','观音灵签，观音灵签抽签，观音灵签解签，抽签算命','观音灵签，观音灵签抽签，观音灵签解签，抽签算命','专业版观音灵签有100签，观音灵签为您提供解签，三种签的签文自古至今流传久远，各地观音灵签抽签略有不同。也有少数佛寺院使用这种签种观音灵签解签，首先要有一棵真诚的心态，闭上眼睛请求指点的事情。如婚姻、事业、运程、流年、工作、财运......所谓的心诚则灵啊，之后才开始','chouqian/guanyin/','video','0','','','1');");
E_D("replace into `sm_class` values('396','吕祖灵签','362','99','吕祖灵签，吕祖灵签解签，吕祖善，抽签算命','吕祖灵签，吕祖灵签解签，吕祖善，抽签算命','专业版吕祖灵签有100签，吕祖灵签为您提供解签，三种签的签文自古至今流传久远，各地吕祖善抽签略有不同。也有少数佛寺院使用这种签种吕祖灵签解签，首先要有一棵真诚的心态，闭上眼睛请求指点的事情。如婚姻、事业、运程、流年、工作、财运.....','chouqian/lvzu/','video','0','','','1');");
E_D("replace into `sm_class` values('397','黄大仙灵签','362','99','黄大仙灵签，黄大仙灵签解签，黄大仙算命，黄大仙求签','黄大仙灵签,黄大仙灵签解签,黄大仙算命,黄大仙求签,算命,免费算命,生辰八字算命','专业版黄大仙灵签有100签，黄大仙算命为您提供解签，三种签的签文自古至今流传久远，各地吕祖善抽签略有不同。也有少数佛寺院使用这种签种黄大仙灵签解签，首先要有一棵真诚的心态，闭上眼睛请求指点的事情。如婚姻、事业、运程、流年、工作、财运......所谓的心诚则灵啊，之后才开始','chouqian/huangdaxian/','video','0','','','1');");
E_D("replace into `sm_class` values('398','关帝灵签','362','99','关帝灵签，关公灵签，关帝灵签解签，抽签算命','关帝灵签，关公灵签，关帝灵签解签，抽签算命','专业版关帝灵签有100签，关公灵签为您提供解签，三种签的签文自古至今流传久远，各地吕祖善抽签略有不同。也有少数佛寺院使用这种签种关帝灵签解签，首先要有一棵真诚的心态，闭上眼睛请求指点的事情。如婚姻、事业、运程、流年、工作、财运......所谓的心诚则灵啊，之后才开始','chouqian/guandi/','video','0','','','1');");
E_D("replace into `sm_class` values('399','天后灵签','362','99','妈祖灵签，天后灵签，妈祖灵签解签，抽签算命','妈祖灵签，天后灵签，妈祖灵签解签，抽签算命','专业版妈祖灵签有100签，天后灵签为您提供解签，三种签的签文自古至今流传久远，各地吕祖善抽签略有不同。也有少数佛寺院使用这种签种妈祖灵签解签，首先要有一棵真诚的心态，闭上眼睛请求指点的事情。如婚姻、事业、运程、流年、工作、财运...所谓的心诚则灵啊，之后才开始','chouqian/tianhou/','video','0','','','1');");
E_D("replace into `sm_class` values('400','诸葛测字','362','100','诸葛测字，诸葛神算，诸葛测字算命，诸葛神数','诸葛测字,诸葛神算,诸葛测字算命,诸葛神数算命,免费算命,生辰八字算命','诸葛亮（181－234），字孔明、号卧龙（也作伏龙）。 根据历史记载，诸葛亮上懂天文，下晓地理，料事如神犹如诸葛神数，用兵用人，皆恰到好处,杰出的政治家、军事家、散文家、发明家、书法家。 诸葛亮每遇难题，必暗自用一种独到的占卜法-诸葛神算','chouqian/zhugeliang/','video','0','','','1');");
E_D("replace into `sm_class` values('401','白羊座','364','99','白羊座爱情指数，今日星座运势，今日星座运程，今日星座运势查询','白羊座，今日星座运势，今日星座运程，今日星座运势查询','白羊座，今日星座运势，今日星座运程，今日星座运势查询','xingzuo/baiyang/','video','0','','','5');");
E_D("replace into `sm_class` values('402','金牛座','364','99','金牛座爱情指数，今日星座运势，今日星座运程，今日星座运势查询','金牛座爱情指数，今日星座运势，今日星座运程，今日星座运势查询','金牛座爱情指数，今日星座运势，今日星座运程，今日星座运势查询','xingzuo/jinniu/','video','0','','','5');");
E_D("replace into `sm_class` values('403','双子座','364','99','双子座爱情指数，今日星座运势，今日星座运程，今日星座运势查询','双子座爱情指数，今日星座运势，今日星座运程，今日星座运势查询','双子座爱情指数，今日星座运势，今日星座运程，今日星座运势查询','xingzuo/shuangzi/','video','0','','','5');");
E_D("replace into `sm_class` values('404','巨蟹座','364','99','巨蟹座爱情指数，今日星座运势，今日星座运程，今日星座运势查询','巨蟹座今日星座运势,今日星座运程,今日星座运势查询','巨蟹座今日星座运势,今日星座运程,今日星座运势查询\" ','xingzuo/juxie/','video','0','','','5');");
E_D("replace into `sm_class` values('405','狮子座','364','99','子座爱情指数，今日星座运势，今日星座运程，今日星座运势查询 ','狮子座今日星座运势,今日星座运程,今日星座运势查询','狮子座今日星座运势,今日星座运程,今日星座运势查询','xingzuo/shizi/','video','0','','','5');");
E_D("replace into `sm_class` values('406','处女座','364','99','处女座爱情指数，今日星座运势，今日星座运程，今日星座运势查询','处女座今日星座运势,今日星座运程,今日星座运势查询','处女座今日星座运势,今日星座运程,今日星座运势查询','xingzuo/chunv/','video','0','','','5');");
E_D("replace into `sm_class` values('407','天秤座','364','99','天秤座爱情指数，今日星座运势，今日星座运程，今日星座运势查询','天秤座今日星座运势,今日星座运程,今日星座运势查询','天秤座今日星座运势,今日星座运程,今日星座运势查询','xingzuo/tiancheng/','video','0','','','5');");
E_D("replace into `sm_class` values('408','天蝎座','364','99','天蝎座爱情指数，今日星座运势，今日星座运程，今日星座运势查询','天蝎座今日星座运势,今日星座运程,今日星座运势查询','天蝎座今日星座运势,今日星座运程,今日星座运势查询','xingzuo/tianxie/','video','0','','','5');");
E_D("replace into `sm_class` values('409','射手座','364','99','射手座爱情指数，今日星座运势，今日星座运程，今日星座运势查询','射手座今日星座运势,今日星座运程,今日星座运势查询','射手座今日星座运势，今日星座运程，今日星座运势查询','xingzuo/sheshou/','video','0','','','5');");
E_D("replace into `sm_class` values('410','摩羯座','364','99','摩羯座爱情指数，今日星座运势，今日星座运程，今日星座运势查询','摩羯座今日星座运势,今日星座运程,今日星座运势查询','摩羯座今日星座运势,今日星座运程,今日星座运势查询','xingzuo/mojie/','video','0','','','5');");
E_D("replace into `sm_class` values('411','水瓶座','364','99','水瓶座爱情指数，今日星座运势，今日星座运程，今日星座运势查询 ','水瓶座今日星座运势,今日星座运程,今日星座运势查询','水瓶座今日星座运势,今日星座运程,今日星座运势查询','xingzuo/shuiping/','video','0','','','5');");
E_D("replace into `sm_class` values('412','双鱼座','364','99','双鱼座爱情指数，今日星座运势，今日星座运程，今日星座运势查询','双鱼座今日星座运势,今日星座运程,今日星座运势查询','双鱼座今日星座运势，今日星座运程，今日星座运势查询','xingzuo/shuangyu/','video','0','','','5');");
E_D("replace into `sm_class` values('413','2016运势','417','100','2016运势，运势查询，十二生肖运势','2016运势，运势查询，十二生肖运势','2016运势，运势查询，十二生肖运势','2016/','video','0','','','6');");
E_D("replace into `sm_class` values('417','生肖','0','99','生肖性格，生肖查询，生肖婚配','生肖性格，生肖查询，生肖婚配','生肖性格，生肖查询，生肖婚配','shengxiao/','video','0','','','2');");
E_D("replace into `sm_class` values('418','鼠','417','99','属鼠，属鼠运势，属鼠婚配','属鼠，属鼠运势，属鼠婚配','属鼠，属鼠运势，属鼠婚配','shengxiao/shu/','video','0','','','6');");
E_D("replace into `sm_class` values('419','牛','417','99','属牛，属牛性格，属牛婚配，属牛运程','属牛，属牛性格，属牛婚配，属牛运程','属牛，属牛性格，属牛婚配，属牛运程','shengxiao/niu/','video','0','','','6');");
E_D("replace into `sm_class` values('420','虎','417','99','属虎，属虎性格，属虎婚配，属虎运程','属虎，属虎性格，属虎婚配，属虎运程','属虎，属虎性格，属虎婚配，属虎运程','shengxiao/hu/','video','0','','','6');");
E_D("replace into `sm_class` values('421','兔','417','99','属兔，属兔性格，属兔婚配，属兔运程','属兔，属兔性格，属兔婚配，属兔运程','属兔，属兔性格，属兔婚配，属兔运程','shengxiao/tu/','video','0','','','6');");
E_D("replace into `sm_class` values('422','龙','417','99','属龙，属龙性格，属龙婚配，属龙运程','属龙，属龙性格，属龙婚配，属龙运程','属龙，属龙性格，属龙婚配，属龙运程','shengxiao/long/','video','0','','','6');");
E_D("replace into `sm_class` values('423','蛇','417','99','属蛇，属蛇性格，属蛇婚配，属蛇运程','属蛇，属蛇性格，属蛇婚配，属蛇运程','属蛇，属蛇性格，属蛇婚配，属蛇运程','shengxiao/she/','video','0','','','6');");
E_D("replace into `sm_class` values('424','马','417','99','属马，属马性格，属马婚配，属马运程','属马，属马性格，属马婚配，属马运程','属马，属马性格，属马婚配，属马运程','shengxiao/ma/','video','0','','','6');");
E_D("replace into `sm_class` values('425','羊','417','99','属羊，属羊性格，属羊婚配，属羊运程','属羊，属羊性格，属羊婚配，属羊运程','属羊，属羊性格，属羊婚配，属羊运程','shengxiao/yang/','video','0','','','6');");
E_D("replace into `sm_class` values('426','猴','417','99','属猴，属猴性格，属猴婚配，属猴运程','属猴，属猴性格，属猴婚配，属猴运程','属猴，属猴性格，属猴婚配，属猴运程','shengxiao/hou/','video','0','','','6');");
E_D("replace into `sm_class` values('427','鸡','417','99','属鸡，属鸡性格，属鸡婚配，属鸡运程','属鸡，属鸡性格，属鸡婚配，属鸡运程','属鸡，属鸡性格，属鸡婚配，属鸡运程','shengxiao/ji/','video','0','','','6');");
E_D("replace into `sm_class` values('428','狗','417','99','属狗，属狗性格，属狗婚配，属狗运程','属狗，属狗性格，属狗婚配，属狗运程','属狗，属狗性格，属狗婚配，属狗运程','shengxiao/gou/','video','0','','','6');");
E_D("replace into `sm_class` values('429','猪','417','99','属猪，属猪性格，属猪婚配，属猪运程','属猪，属猪性格，属猪婚配，属猪运程','属猪，属猪性格，属猪婚配，属猪运程','shengxiao/zhu/','video','0','','','6');");
E_D("replace into `sm_class` values('430','月老灵签','362','99','月老灵签，月老解签，月老抽签','月老灵签，月老解签，月老抽签','月老灵签，月老在线抽签,为您解签，测算你的桃花,婚姻,爱情等。','chouqian/yuelao/','video','0','','','1');");
E_D("replace into `sm_class` values('431','民间','0','99','民间测试，指纹算命，手相查询，痣相图解','民间测试，指纹算命，手相查询，痣相图解','民间测试，指纹算命，手相查询，痣相图解','minjian/zhiwen/','video','0','','','1');");
E_D("replace into `sm_class` values('432','指纹算命','431','99','指纹算命，指纹算命图解，指纹算命查询','指纹算命，指纹算命图解，指纹算命查询','指纹算命，指纹算命图解，指纹算命查询','minjian/zhiwen/','video','0','','','3');");
E_D("replace into `sm_class` values('433','手相查询','431','99','手相查询，手相算命，手相图解','手相查询，手相算命，手相图解','手相查询，手相算命，手相图解','minjian/shouxiang/ganqingxian/','video','0','','','3');");
E_D("replace into `sm_class` values('434','痣相图解','431','99','痣相图解，痣相图解大全，痣相分析','痣相图解，痣相图解大全，痣相分析','痣相图解，痣相图解大全，痣相分析','minjian/zhixiang/','video','0','','','3');");
E_D("replace into `sm_class` values('435','生男生女预测','431','99','生男生女预测，生男生女预测表，清宫表','生男生女预测，生男生女预测表，清宫表','生男生女预测，生男生女预测表，清宫表','minjian/snsn','video','0','','','3');");
E_D("replace into `sm_class` values('436','眼跳测吉凶','431','99','眼跳测吉凶，眼皮跳测吉凶，左眼皮跳，右眼皮跳','眼跳测吉凶，眼皮跳测吉凶，左眼皮跳，右眼皮跳','眼跳测吉凶，眼皮跳测吉凶，左眼皮跳，右眼皮跳','minjian/yantiao/','video','0','','','3');");
E_D("replace into `sm_class` values('437','打喷嚏测吉凶','431','99','打喷嚏测吉凶，打喷嚏测吉凶大全，喷嚏预测','打喷嚏测吉凶，打喷嚏测吉凶大全，喷嚏预测','打喷嚏测吉凶，打喷嚏测吉凶大全，喷嚏预测','minjian/dapenti/','video','0','','','3');");
E_D("replace into `sm_class` values('438','六爻占卜','431','99','六爻占卜，占卜算卦，占卜预测','六爻占卜，占卜算卦，占卜预测','六爻占卜，占卜算卦，占卜预测','minjian/liuyao/','video','0','','','3');");
E_D("replace into `sm_class` values('442','孕妇解梦','349','99','孕妇解梦，解梦大全，周公解梦','孕妇解梦，解梦大全，周公解梦','孕妇解梦，解梦大全，周公解梦','','video','0','','','4');");
E_D("replace into `sm_class` values('455','感情线','433','99','感情线，感情线图解，感情线分析','感情线，感情线图解，感情线分析','感情线，感情线图解，感情线分析','minjian/shouxiang/ganqingxian/','video','0','','','3');");
E_D("replace into `sm_class` values('456','婚姻线','433','99','婚姻线，婚姻线图解，婚姻线分析','婚姻线，婚姻线图解，婚姻线分析','婚姻线，婚姻线图解，婚姻线分析','minjian/shouxiang/hunyinxian/','video','0','','','3');");
E_D("replace into `sm_class` values('457','智慧线','433','99','智慧线','智慧线','智慧线','minjian/shouxiang/zhihuixian/','video','0','','','3');");
E_D("replace into `sm_class` values('458','事业线','433','99','事业线，事业线图解，事业线分析','事业线，事业线图解，事业线分析','事业线，事业线图解，事业线分析','minjian/shouxiang/shiyexian/','video','0','','','3');");
E_D("replace into `sm_class` values('459','生命线','433','99','生命线，生命线图解，生命线分析','生命线，生命线图解，生命线分析','生命线，生命线图解，生命线分析','minjian/shouxiang/shengmingxian/','video','0','','','3');");
E_D("replace into `sm_class` values('461','星座血型','360','99','星座血型配对、 配对表','星座血型配对、 配对表','星座血型配对是指根据自己的血型（星座）和恋人的星座（血型）来大致分析下双方的性格特征，并给出两人的速配指数以及性格方面的相关建议和提醒。','peidui/xingzuoxuexing/','video','0','','','1');");
E_D("replace into `sm_class` values('462','生肖血型','360','99','生肖血型、血型配对、生肖血型配对','生肖血型、血型配对、生肖血型配对','生肖血型配对是指根据自己的生肖（血型）和恋人的血型（生肖）来大致分析下双方的性格特征，并给出两人的速配指数以及性格方面的相关建议和提醒。','peidui/shengxiaoxuexing/','video','0','','','1');");
E_D("replace into `sm_class` values('463','星座生肖','360','99','星座生肖、十二星座配对、十二生肖配对','星座生肖、十二星座配对、十二生肖配对','星座于生肖，相信大家一定不会陌生。每个星座、每个生肖都有属于自己的特性，所以我们并不是与所有的星座生肖组合般配，星座与生肖之间又有着怎么样的关系呢？','peidui/xingzuoshengxiao/','video','0','','','1');");
E_D("replace into `sm_class` values('464','生日书','361','99','生日书，生日书查询，生日书分析','生日书，生日书查询，生日书分析','生日书，生日书查询，生日书分析','haoma/shengrishu/','video','0','','','1');");
E_D("replace into `sm_class` values('465','生日花','361','99','生日花、生辰花，生日话查询','生日花、生辰花，生日话查询','任意一天的生辰日，都有对应的生日花，每一朵生日花都有它自己花语及含义,像每一个人的出生都有它的意义。','haoma/shengrihua/','video','0','','','1');");
E_D("replace into `sm_class` values('466','出生日','361','99','出生日，出生日查询，出生日分析','出生日，出生日查询，出生日分析','出生日是指自己的出生日期，根据出生日来分析你具有什么样的自己，拥有的优点及缺点。','haoma/chushengri/','video','0','','','1');");
E_D("replace into `sm_class` values('467','黄历名词解释','363','99','黄历名词解释，黄历查询，今日黄历','黄历名词解释，黄历查询，今日黄历','黄历名词解释，为您提供老黄历用语的解释，包括今日宜忌、今日诸神、今日冲煞、今日吉日等名词解释。','hdjr/huanglijieshi/','video','0','','','3');");
E_D("replace into `sm_class` values('468','历史上的今天','363','99','今日黄历，黄历查询，历史上的今天','今日黄历，黄历查询，历史上的今天','今日黄历，黄历查询，历史上的今天，回顾历史的长河,查看历史上的今天发生了什么。','hdjr/lishi/','video','0','','','3');");
E_D("replace into `sm_class` values('469','择日','363','100','择日，吉日查询，黄道吉日查询','择日，吉日查询，黄道吉日查询','神算网为您提供权威可靠的黄道吉日查询，包括结婚择日、搬家择日、开业择日，搬家择日等。','hdjr/zeri/','video','0','','','1');");
E_D("replace into `sm_class` values('470','阴阳历转换','363','99','阴阳历转换，阳历查询，阴历查询，公历查询','阴阳历转换，阳历查询，阴历查询，公历查询','提供阴阳历转换的服务，让您在只知其一的情况下进行转换。','hdjr/yinyangli/','video','0','','','1');");
E_D("replace into `sm_class` values('471','生肖属相','344','99','生肖属相，十二生肖，十二属相','生肖属相，十二生肖，十二属相','生肖属相，十二生肖，十二属相','','video','0','','','2');");
E_D("replace into `sm_class` values('472','上升星座','364','99','上升星座，上升星座查询表，在线查上升星座','上升星座是什么意思，上升星座怎么算，上升星座查询','网上升星座查询,什么是上升星座?上升星座是什么意思?出生时在东方地平线上第一个升起的星座即上升星座,上升星座代表一个人的外在表现,通过本站上升星座查询表就可以看出属于你的上升星座.','xingzuo/shangshengxingzuo/','video','0','','','1');");
E_D("replace into `sm_class` values('473','车公灵签','362','99','车公灵签，车公抽签，车公灵签解签','车公灵签，车公抽签，车公灵签解签','车公灵签，车公抽签，车公灵签解签','chouqian/chegong/','video','0','','','1');");
E_D("replace into `sm_class` values('474','王公灵签','362','99','王公灵签，王公祖仔灵签，王公灵签抽签，王公灵签解签','王公灵签，王公祖仔灵签，王公灵签抽签，王公灵签解签','王公灵签，王公祖仔灵签，王公灵签抽签，王公灵签解签','chouqian/wanggong','video','0','','','1');");
E_D("replace into `sm_class` values('475','星座专区','364','99','12星座专区，十二星座配对表，星座查询','12星座专区,十二星座配对表,星座查询','专业星座运程预测网，提供星座、个性、开运方法、运势、配对、解梦以及心理测试、血型、生肖、塔罗牌、算命、风水等星相命理信息','xingzuo/zhuanqu/','video','0','','','5');");
E_D("replace into `sm_class` values('476','星座运势','364','99','12星座，星座运势查询，每日星座运势','十二星座运势，星座每日、每周、每月、每年运势','十二星座运势，星座每日、每周、每月、每年运势','xingzuo/yunshi/','video','0','','','5');");

require("../../inc/footer.php");
?>