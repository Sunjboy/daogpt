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
E_D("replace into `sm_chenggu3` values('��һ','0.5');");
E_D("replace into `sm_chenggu3` values('����','1');");
E_D("replace into `sm_chenggu3` values('����','0.8');");
E_D("replace into `sm_chenggu3` values('����','1.5');");
E_D("replace into `sm_chenggu3` values('����','1.6');");
E_D("replace into `sm_chenggu3` values('����','1.5');");
E_D("replace into `sm_chenggu3` values('����','0.8');");
E_D("replace into `sm_chenggu3` values('����','1.6');");
E_D("replace into `sm_chenggu3` values('����','0.8');");
E_D("replace into `sm_chenggu3` values('��ʮ','1.6');");
E_D("replace into `sm_chenggu3` values('ʮһ','0.9');");
E_D("replace into `sm_chenggu3` values('ʮ��','1.7');");
E_D("replace into `sm_chenggu3` values('ʮ��','0.8');");
E_D("replace into `sm_chenggu3` values('ʮ��','1.7');");
E_D("replace into `sm_chenggu3` values('ʮ��','1');");
E_D("replace into `sm_chenggu3` values('ʮ��','0.8');");
E_D("replace into `sm_chenggu3` values('ʮ��','0.9');");
E_D("replace into `sm_chenggu3` values('ʮ��','1.8');");
E_D("replace into `sm_chenggu3` values('ʮ��','0.5');");
E_D("replace into `sm_chenggu3` values('��ʮ','1.5');");
E_D("replace into `sm_chenggu3` values('إһ','1');");
E_D("replace into `sm_chenggu3` values('إ��','0.9');");
E_D("replace into `sm_chenggu3` values('إ��','0.8');");
E_D("replace into `sm_chenggu3` values('إ��','0.9');");
E_D("replace into `sm_chenggu3` values('إ��','1.5');");
E_D("replace into `sm_chenggu3` values('إ��','1.8');");
E_D("replace into `sm_chenggu3` values('إ��','0.7');");
E_D("replace into `sm_chenggu3` values('إ��','0.8');");
E_D("replace into `sm_chenggu3` values('إ��','1.6');");
E_D("replace into `sm_chenggu3` values('��ʮ','0.6');");

require("../../inc/footer.php");
?>