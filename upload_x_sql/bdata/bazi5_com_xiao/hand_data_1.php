<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hand_data`;");
E_C("CREATE TABLE `hand_data` (
  `yh_id` int(11) NOT NULL AUTO_INCREMENT,
  `yh_name` text NOT NULL COMMENT '标题',
  `yh_url` text NOT NULL COMMENT '链接',
  `yh_imgurl` varchar(200) NOT NULL COMMENT '图片',
  `yh_info` text NOT NULL COMMENT '描述',
  `yh_type_id` int(11) NOT NULL COMMENT '分类id',
  `yh_ord` int(11) NOT NULL COMMENT '排序(1在前面)',
  `yh_uptime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态（1.正常 -1.删除）',
  `color` int(2) NOT NULL COMMENT '颜色(1红色.2绿色.3蓝色)',
  `blank` int(2) NOT NULL COMMENT '0默认,1新窗口',
  PRIMARY KEY (`yh_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1092 DEFAULT CHARSET=utf8");
E_D("replace into `hand_data` values('946','耳朵','/zgjm/sech-耳朵-1.html','','','179','0','2016-11-08 16:39:45','1','0','0');");
E_D("replace into `hand_data` values('947','新郎','/zgjm/sech-新郎-1.html','','','179','0','2016-11-08 16:40:01','1','0','0');");
E_D("replace into `hand_data` values('948','砂石','/zgjm/sech-砂石-1.html','','','179','0','2016-11-08 16:41:36','1','0','0');");
E_D("replace into `hand_data` values('949','救护车','/zgjm/sech-救护车-1.html','','','179','0','2016-11-08 16:41:50','1','0','0');");
E_D("replace into `hand_data` values('971','白菜','/zgjm/sech-白菜-1.html','','','179','0','2016-11-08 16:42:02','1','0','0');");
E_D("replace into `hand_data` values('972','闹鬼','/zgjm/sech-闹鬼-1.html','','','179','0','2016-11-08 16:42:20','1','0','0');");
E_D("replace into `hand_data` values('973','骂人','/zgjm/sech-骂人-1.html','','','179','0','2016-11-08 16:42:32','1','0','0');");
E_D("replace into `hand_data` values('1057','2016运势','/2016/','','','193','0','2016-11-13 10:42:37','1','1','1');");
E_D("replace into `hand_data` values('1058','生辰八字','/suanming/scbz/','','','193','0','2016-10-26 11:25:45','1','2','0');");
E_D("replace into `hand_data` values('1059','八字测算','/suanming/bzcs/','','','193','0','2016-10-26 11:26:29','1','0','0');");
E_D("replace into `hand_data` values('1060','名字分析','/xingming/xmfx/','','','193','0','2016-10-26 11:27:02','1','0','0');");
E_D("replace into `hand_data` values('1061','在线起名','/xingming/qiming/','','','193','0','2016-10-26 11:27:24','1','0','0');");
E_D("replace into `hand_data` values('1062','八字排盘','/paipan/bazi/','','','193','0','2016-10-26 11:27:48','1','0','0');");
E_D("replace into `hand_data` values('1063','十二星座','/xingzuo/','','','193','0','2016-11-02 14:42:33','1','3','0');");
E_D("replace into `hand_data` values('1064','周公解梦','/zgjm/','','','193','0','2016-10-26 11:42:58','1','0','0');");
E_D("replace into `hand_data` values('1065','十二生肖','/shengxiao/','','','193','0','2016-10-26 11:43:34','1','0','0');");
E_D("replace into `hand_data` values('1066','黄道吉日','/hdjr/','','','193','0','2016-10-26 11:44:15','1','2','0');");
E_D("replace into `hand_data` values('1067','八字合婚','/peidui/hehun/','','','193','0','2016-10-26 11:45:01','1','0','0');");
E_D("replace into `hand_data` values('1068','号码吉凶','/haoma/dianhua/','','','193','0','2016-10-26 11:45:52','1','0','0');");
E_D("replace into `hand_data` values('1069','月老灵签','/chouqian/yuelao/','','','193','0','2016-10-26 11:48:07','1','0','0');");
E_D("replace into `hand_data` values('1070','紫薇排盘','/paipan/ziwei/','','','193','0','2016-10-26 11:47:11','1','0','0');");
E_D("replace into `hand_data` values('1071','吕祖灵签','/chouqian/lvzu/','','','193','0','2016-10-26 14:06:28','1','2','0');");
E_D("replace into `hand_data` values('1072','星座配对','/peidui/xingzuo/','','','193','0','2016-10-26 11:48:55','1','0','0');");
E_D("replace into `hand_data` values('1073','公司起名','/xingming/gsqm/','','','193','0','2016-10-26 11:49:15','1','0','0');");
E_D("replace into `hand_data` values('1074','风水测算','/suanming/fscs/','','','193','0','2016-10-26 11:49:32','1','0','0');");
E_D("replace into `hand_data` values('1075','六爻占卜','/paipan/liuyao/','/img/up_img/201611/147859207372475.png','','194','0','2016-11-08 16:01:13','1','0','0');");
E_D("replace into `hand_data` values('1076','诸葛测字','/chouqian/zhugeliang/','/img/up_img/201611/147859163879590.png','','194','0','2016-11-08 15:53:58','1','0','0');");
E_D("replace into `hand_data` values('1077','八字排盘','/paipan/bazi/','/img/up_img/201611/147859361517029.png','','194','0','2016-11-08 16:26:55','1','0','0');");
E_D("replace into `hand_data` values('1078','生日算命','/haoma/shengrimima/','/img/up_img/201611/147859209573525.png','','194','0','2016-11-08 16:01:35','1','0','0');");
E_D("replace into `hand_data` values('1079','周易算命','/suanming/scbz/','/img/up_img/201611/147859211094499.png','','194','0','2016-11-08 16:01:50','1','0','0');");
E_D("replace into `hand_data` values('1080','号码吉凶','/haoma/','/img/up_img/201611/147859212412234.png','','194','0','2016-11-08 16:02:04','1','0','0');");
E_D("replace into `hand_data` values('1081','十二星座','/xingzuo/','','','195','0','2016-10-31 13:48:12','1','1','0');");
E_D("replace into `hand_data` values('1082','姓名分析','/xingming/xmfx/','','','195','0','2016-10-31 13:49:38','1','0','0');");
E_D("replace into `hand_data` values('1083','生肖运势','/shengxiao/2016','','','195','0','2016-10-31 13:49:47','1','0','0');");
E_D("replace into `hand_data` values('1084','月老灵签','/chouqian/yuelao/','','','195','0','2016-10-31 13:51:52','1','0','0');");
E_D("replace into `hand_data` values('1085','八字合婚','/peidui/hehun/','','','195','0','2016-10-31 13:52:19','1','0','0');");
E_D("replace into `hand_data` values('1086','名字分析','/xingming/xmfx/','','','195','0','2016-10-31 13:52:57','1','0','0');");
E_D("replace into `hand_data` values('1087','周公解梦','/zgjm/','','','195','0','2016-10-31 13:53:16','1','0','0');");
E_D("replace into `hand_data` values('1088','风水测算','/suanming/fscs/','','','195','0','2016-10-31 13:53:48','1','0','0');");
E_D("replace into `hand_data` values('1089','吉日查询','/hdjr/zeri/','','','195','0','2016-10-31 13:55:17','1','0','0');");
E_D("replace into `hand_data` values('1090','八字百科','/list-348.html','','','0','0','2016-10-31 13:55:41','1','0','0');");
E_D("replace into `hand_data` values('1091','五格配对','/xingming/xmpd/','','','195','0','2016-10-31 14:14:51','1','2','0');");

require("../../inc/footer.php");
?>