<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gb2312');
E_D("DROP TABLE IF EXISTS `sm_chenggu2`;");
E_C("CREATE TABLE `sm_chenggu2` (
  `month` varchar(50) DEFAULT NULL,
  `weight` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=gb2312");
E_D("replace into `sm_chenggu2` values('正','0.6');");
E_D("replace into `sm_chenggu2` values('二','0.7');");
E_D("replace into `sm_chenggu2` values('三','1.8');");
E_D("replace into `sm_chenggu2` values('四','0.9');");
E_D("replace into `sm_chenggu2` values('五','0.5');");
E_D("replace into `sm_chenggu2` values('六','1.6');");
E_D("replace into `sm_chenggu2` values('七','0.9');");
E_D("replace into `sm_chenggu2` values('八','1.5');");
E_D("replace into `sm_chenggu2` values('九','1.8');");
E_D("replace into `sm_chenggu2` values('十','0.8');");
E_D("replace into `sm_chenggu2` values('十一','0.9');");
E_D("replace into `sm_chenggu2` values('腊','0.5');");

require("../../inc/footer.php");
?>