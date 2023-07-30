<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `zhuanti_template_column`;");
E_C("CREATE TABLE `zhuanti_template_column` (
  `tplc_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `tpl_id` smallint(4) unsigned NOT NULL COMMENT '专题模板id',
  `tplc_name` varchar(100) NOT NULL COMMENT '专题模板列名称',
  `tplc_code` varchar(32) NOT NULL DEFAULT '0' COMMENT '对应模板上的英文标识',
  `tplc_havetitle` tinyint(4) NOT NULL DEFAULT '0' COMMENT '有标题',
  `tplc_haveurl` tinyint(4) NOT NULL DEFAULT '0' COMMENT '有url',
  `tplc_havemediaurl` tinyint(4) NOT NULL DEFAULT '0' COMMENT '有多媒体url',
  `tplc_havesmallimg` tinyint(4) NOT NULL DEFAULT '0' COMMENT '有小图',
  `tplc_havebigimg` tinyint(4) NOT NULL DEFAULT '0' COMMENT '有大图',
  `tplc_havedescript` tinyint(4) NOT NULL DEFAULT '0' COMMENT '有描述',
  `tplc_havedate` tinyint(4) NOT NULL DEFAULT '0' COMMENT '有日期',
  `tplc_uptime` timestamp NULL DEFAULT NULL COMMENT '更新时间',
  `tplc_addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '添加时间',
  PRIMARY KEY (`tplc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8");
E_D("replace into `zhuanti_template_column` values('1','1','顶部大图','topimg','0','0','0','0','1','0','0','2015-12-24 16:09:02','2015-12-24 16:09:02');");
E_D("replace into `zhuanti_template_column` values('2','1','第一栏顶部图','list1_top','1','1','0','1','0','1','0','2015-12-24 16:15:26','2015-12-24 16:15:26');");
E_D("replace into `zhuanti_template_column` values('3','1','第一栏第一列','list1_col1','1','1','0','1','0','1','0','2015-12-24 16:21:31','2015-12-24 16:21:31');");
E_D("replace into `zhuanti_template_column` values('4','1','第一栏第二列','list1_col2','1','1','0','1','0','1','0','2015-12-24 16:27:30','2015-12-24 16:27:30');");
E_D("replace into `zhuanti_template_column` values('5','1','第一栏第三列','list1_col3','1','1','0','1','0','1','0','2015-12-24 16:28:03','2015-12-24 16:28:03');");
E_D("replace into `zhuanti_template_column` values('6','1','第一栏第四列','list1_col4','1','1','0','1','0','1','0','2015-12-24 16:28:35','2015-12-24 16:28:35');");
E_D("replace into `zhuanti_template_column` values('7','1','第一栏第五列','list1_col5','1','1','0','1','0','1','0','2015-12-24 16:28:59','2015-12-24 16:28:59');");
E_D("replace into `zhuanti_template_column` values('8','1','第二栏第一列','list2_col1','1','1','0','1','0','1','0','2015-12-24 16:29:40','2015-12-24 16:29:40');");
E_D("replace into `zhuanti_template_column` values('9','1','第二栏第二列','list2_col2','1','1','0','1','0','1','0','2015-12-24 16:30:09','2015-12-24 16:30:09');");
E_D("replace into `zhuanti_template_column` values('10','1','第二栏第三列','list2_col3','1','1','0','1','0','1','0','2015-12-24 16:30:53','2015-12-24 16:30:53');");
E_D("replace into `zhuanti_template_column` values('11','1','第二栏第四列','list2_col4','1','1','0','1','0','1','0','2015-12-24 16:31:21','2015-12-24 16:31:21');");
E_D("replace into `zhuanti_template_column` values('12','1','第二栏第五列','list2_col5','1','1','0','1','0','1','0','2015-12-24 16:36:42','2015-12-24 16:36:42');");
E_D("replace into `zhuanti_template_column` values('13','1','第三栏第一列','list3_col1','1','1','0','1','0','1','0','2015-12-24 16:36:42','2015-12-24 16:36:42');");
E_D("replace into `zhuanti_template_column` values('14','1','第三栏第二列','list3_col2','1','1','0','1','0','1','0','2015-12-24 16:36:42','2015-12-24 16:36:42');");
E_D("replace into `zhuanti_template_column` values('15','1','第三栏第三列','list3_col3','1','1','0','1','0','1','0','2015-12-24 16:36:42','2015-12-24 16:36:42');");
E_D("replace into `zhuanti_template_column` values('16','1','第三栏第四列','list3_col4','1','1','0','1','0','1','0','2015-12-24 16:36:42','2015-12-24 16:36:42');");
E_D("replace into `zhuanti_template_column` values('17','1','第三栏第五列','list3_col5','1','1','0','1','0','1','0','2015-12-24 16:36:42','2015-12-24 16:36:42');");
E_D("replace into `zhuanti_template_column` values('18','1','第四栏第一列','list4_col1','1','1','0','1','0','1','0','2015-12-24 16:36:42','2015-12-24 16:36:42');");
E_D("replace into `zhuanti_template_column` values('19','1','第四栏第二列','list4_col2','1','1','0','1','0','1','0','2015-12-24 16:36:42','2015-12-24 16:36:42');");
E_D("replace into `zhuanti_template_column` values('20','1','第四栏第三列','list4_col3','1','1','0','1','0','1','0','2015-12-24 16:36:42','2015-12-24 16:36:42');");
E_D("replace into `zhuanti_template_column` values('21','1','第四栏第四列','list4_col4','1','1','0','1','0','1','0','2015-12-24 16:36:42','2015-12-24 16:36:42');");
E_D("replace into `zhuanti_template_column` values('22','1','第四栏第五列','list4_col5','1','1','0','1','0','1','0','2015-12-24 16:36:42','2015-12-24 16:36:42');");
E_D("replace into `zhuanti_template_column` values('23','1','第二栏顶部图','list2_top','1','1','0','1','0','1','0','2015-12-24 17:55:01','2015-12-24 17:55:01');");
E_D("replace into `zhuanti_template_column` values('24','1','第三栏顶部图','list3_top','1','1','0','1','0','1','0','2015-12-24 17:55:01','2015-12-24 17:55:01');");
E_D("replace into `zhuanti_template_column` values('25','1','第四栏顶部图','list4_top','1','1','0','1','0','1','0','2015-12-24 17:55:01','2015-12-24 17:55:01');");
E_D("replace into `zhuanti_template_column` values('26','1','小编寄语','bottom_editor','0','0','0','0','0','1','0','2015-12-24 18:31:07','2015-12-24 18:31:07');");
E_D("replace into `zhuanti_template_column` values('27','1','星友热文1','hotarticle1','1','1','0','0','0','0','0',NULL,'2015-12-30 18:31:26');");
E_D("replace into `zhuanti_template_column` values('28','1','星友热文2','hotarticle2','1','1','0','0','0','0','0',NULL,'2015-12-30 18:31:44');");
E_D("replace into `zhuanti_template_column` values('29','1','星友热文3','hotarticle3','1','1','0','0','0','0','0',NULL,'2015-12-30 18:35:28');");
E_D("replace into `zhuanti_template_column` values('30','1','星友热文4','hotarticle4','1','1','0','0','0','0','0',NULL,'2015-12-30 18:35:46');");
E_D("replace into `zhuanti_template_column` values('31','1','星友热文5','hotarticle5','1','1','0','0','0','0','0',NULL,'2015-12-30 18:36:14');");
E_D("replace into `zhuanti_template_column` values('32','1','星友热文6','hotarticle6','1','1','0','0','0','0','0',NULL,'2015-12-30 18:36:38');");
E_D("replace into `zhuanti_template_column` values('33','1','星友热文7','hotarticle7','1','1','0','0','0','0','0',NULL,'2015-12-30 18:37:09');");
E_D("replace into `zhuanti_template_column` values('34','1','星友热文8','hotarticle8','1','1','0','0','0','0','0',NULL,'2015-12-30 18:37:38');");
E_D("replace into `zhuanti_template_column` values('35','1','星友热文9','hotarticle9','1','1','0','0','0','0','0',NULL,'2015-12-30 18:38:01');");
E_D("replace into `zhuanti_template_column` values('36','1','星友热文10','hotarticle10','1','1','0','0','0','0','0',NULL,'2015-12-30 18:38:24');");
E_D("replace into `zhuanti_template_column` values('37','1','星友热文11','hotarticle11','1','1','0','0','0','0','0',NULL,'2015-12-30 18:38:53');");
E_D("replace into `zhuanti_template_column` values('38','1','本期热点1','benhot1','1','1','0','0','0','0','0',NULL,'2015-12-30 18:52:42');");
E_D("replace into `zhuanti_template_column` values('39','1','本期热点2','benhot2','1','1','0','0','0','0','0',NULL,'2015-12-30 18:53:03');");
E_D("replace into `zhuanti_template_column` values('40','1','本期热点3','benhot3','1','1','0','0','0','0','0',NULL,'2015-12-30 18:53:27');");
E_D("replace into `zhuanti_template_column` values('41','1','本期热点4','benhot4','1','1','0','0','0','0','0',NULL,'2015-12-30 18:53:52');");
E_D("replace into `zhuanti_template_column` values('42','1','本期热点5','benhot5','1','1','0','0','0','0','0',NULL,'2015-12-30 18:54:16');");

require("../../inc/footer.php");
?>