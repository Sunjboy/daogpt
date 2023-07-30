<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `users`;");
E_C("CREATE TABLE `users` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) DEFAULT NULL,
  `userpwd` char(32) DEFAULT NULL,
  `email` varchar(50) NOT NULL COMMENT '邮箱',
  `pools` varchar(20) DEFAULT NULL,
  `groups` varchar(100) NOT NULL,
  `regtime` int(11) NOT NULL,
  `regip` varchar(15) NOT NULL,
  `sta` smallint(6) NOT NULL,
  `logintime` int(10) unsigned NOT NULL,
  `loginip` varchar(15) NOT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `userid` (`user_name`) USING BTREE,
  KEY `sta` (`sta`) USING BTREE,
  KEY `pools` (`pools`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `users` values('1','admin','c2f5830a7169208fb13d8972cc1e29d6','','admin','admin_admin','0','','0','1475484886','127.0.0.1');");
E_D("replace into `users` values('2','wxihua','c2f5830a7169208fb13d8972cc1e29d6','','admin','admin_admin','0','','0','1478656722','127.0.0.1');");

require("../../inc/footer.php");
?>