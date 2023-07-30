<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gb2312');
E_D("DROP TABLE IF EXISTS `sm_chenggu4`;");
E_C("CREATE TABLE `sm_chenggu4` (
  `time` varchar(50) DEFAULT NULL,
  `weight` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=gb2312");
E_D("replace into `sm_chenggu4` values('0','1.6');");
E_D("replace into `sm_chenggu4` values('1','0.6');");
E_D("replace into `sm_chenggu4` values('2','0.6');");
E_D("replace into `sm_chenggu4` values('3','0.7');");
E_D("replace into `sm_chenggu4` values('4','0.7');");
E_D("replace into `sm_chenggu4` values('5','1');");
E_D("replace into `sm_chenggu4` values('6','1');");
E_D("replace into `sm_chenggu4` values('7','0.9');");
E_D("replace into `sm_chenggu4` values('8','0.9');");
E_D("replace into `sm_chenggu4` values('9','1.6');");
E_D("replace into `sm_chenggu4` values('10','1.6');");
E_D("replace into `sm_chenggu4` values('11','1');");
E_D("replace into `sm_chenggu4` values('12','1');");
E_D("replace into `sm_chenggu4` values('13','0.8');");
E_D("replace into `sm_chenggu4` values('14','0.8');");
E_D("replace into `sm_chenggu4` values('15','0.8');");
E_D("replace into `sm_chenggu4` values('16','0.8');");
E_D("replace into `sm_chenggu4` values('17','0.9');");
E_D("replace into `sm_chenggu4` values('18','0.9');");
E_D("replace into `sm_chenggu4` values('19','0.6');");
E_D("replace into `sm_chenggu4` values('20','0.6');");
E_D("replace into `sm_chenggu4` values('21','0.6');");
E_D("replace into `sm_chenggu4` values('22','0.6');");
E_D("replace into `sm_chenggu4` values('23','1.6');");

require("../../inc/footer.php");
?>