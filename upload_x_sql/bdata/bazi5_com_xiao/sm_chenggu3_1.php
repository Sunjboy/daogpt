<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gb2312');
E_D("DROP TABLE IF EXISTS `sm_chenggu3`;");
E_C("CREATE TABLE `sm_chenggu3` (
  `day` varchar(50) DEFAULT NULL,
  `weight` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=gb2312");
E_D("replace into `sm_chenggu3` values('初一','0.5');");
E_D("replace into `sm_chenggu3` values('初二','1');");
E_D("replace into `sm_chenggu3` values('初三','0.8');");
E_D("replace into `sm_chenggu3` values('初四','1.5');");
E_D("replace into `sm_chenggu3` values('初五','1.6');");
E_D("replace into `sm_chenggu3` values('初六','1.5');");
E_D("replace into `sm_chenggu3` values('初七','0.8');");
E_D("replace into `sm_chenggu3` values('初八','1.6');");
E_D("replace into `sm_chenggu3` values('初九','0.8');");
E_D("replace into `sm_chenggu3` values('初十','1.6');");
E_D("replace into `sm_chenggu3` values('十一','0.9');");
E_D("replace into `sm_chenggu3` values('十二','1.7');");
E_D("replace into `sm_chenggu3` values('十三','0.8');");
E_D("replace into `sm_chenggu3` values('十四','1.7');");
E_D("replace into `sm_chenggu3` values('十五','1');");
E_D("replace into `sm_chenggu3` values('十六','0.8');");
E_D("replace into `sm_chenggu3` values('十七','0.9');");
E_D("replace into `sm_chenggu3` values('十八','1.8');");
E_D("replace into `sm_chenggu3` values('十九','0.5');");
E_D("replace into `sm_chenggu3` values('二十','1.5');");
E_D("replace into `sm_chenggu3` values('廿一','1');");
E_D("replace into `sm_chenggu3` values('廿二','0.9');");
E_D("replace into `sm_chenggu3` values('廿三','0.8');");
E_D("replace into `sm_chenggu3` values('廿四','0.9');");
E_D("replace into `sm_chenggu3` values('廿五','1.5');");
E_D("replace into `sm_chenggu3` values('廿六','1.8');");
E_D("replace into `sm_chenggu3` values('廿七','0.7');");
E_D("replace into `sm_chenggu3` values('廿八','0.8');");
E_D("replace into `sm_chenggu3` values('廿九','1.6');");
E_D("replace into `sm_chenggu3` values('三十','0.6');");

require("../../inc/footer.php");
?>