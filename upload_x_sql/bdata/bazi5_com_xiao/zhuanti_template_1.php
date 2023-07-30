<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `zhuanti_template`;");
E_C("CREATE TABLE `zhuanti_template` (
  `tpl_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `tpl_name` varchar(100) NOT NULL COMMENT '模板名称',
  `tpl_filename` varchar(100) NOT NULL DEFAULT '' COMMENT '模板文件名称',
  `tpl_struct` mediumtext NOT NULL COMMENT '专题模板栏目概览',
  `tpl_addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '添加时间',
  PRIMARY KEY (`tpl_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `zhuanti_template` values('1','星座模板','zhuanti_show.tpl','','2015-12-29 17:13:04');");

require("../../inc/footer.php");
?>