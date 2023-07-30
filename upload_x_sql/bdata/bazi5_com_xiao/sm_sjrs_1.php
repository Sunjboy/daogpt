<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gb2312');
E_D("DROP TABLE IF EXISTS `sm_sjrs`;");
E_C("CREATE TABLE `sm_sjrs` (
  `id` int(11) NOT NULL,
  `wh` varchar(50) DEFAULT NULL,
  `sj` varchar(50) DEFAULT NULL,
  `sjrs` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gb2312");
E_D("replace into `sm_sjrs` values('1','水','秋','必须有金相助，忌土、金、水多，喜木、火');");
E_D("replace into `sm_sjrs` values('2','金','冬','必须有火、土相助，忌无火、土反而有金、水，忌木多而无火');");
E_D("replace into `sm_sjrs` values('3','金','春','喜有土、火，最忌没有土、金');");
E_D("replace into `sm_sjrs` values('4','金','夏','必须有水相助，忌木多');");
E_D("replace into `sm_sjrs` values('5','金','秋','喜有木、火，忌土多');");
E_D("replace into `sm_sjrs` values('6','土','秋','喜有火，有木，忌金、水多');");
E_D("replace into `sm_sjrs` values('7','木','秋','必须有金相助，但忌金太多，须有土、火才好，但忌水多');");
E_D("replace into `sm_sjrs` values('8','火','秋','喜有木，忌水、土多');");
E_D("replace into `sm_sjrs` values('9','火','春','此时必为丙火或丁火，大都不错，但忌木多、土多');");
E_D("replace into `sm_sjrs` values('10','土','春','喜有火、木，喜有金而少，忌金多、木多');");
E_D("replace into `sm_sjrs` values('11','水','春','必须有土相助，若有火，金，但忌金多');");
E_D("replace into `sm_sjrs` values('12','木','春','必须有火助，有水更好，但忌水太多，也忌土太多');");
E_D("replace into `sm_sjrs` values('13','木','冬','必须有火相助，最好有土、水');");
E_D("replace into `sm_sjrs` values('14','火','冬','必须有木相助，忌有水与金多，喜有土、水、木');");
E_D("replace into `sm_sjrs` values('15','土','冬','喜有火，更喜有火又有金，喜有土、木');");
E_D("replace into `sm_sjrs` values('16','水','冬','必须有火相助，喜水多，但忌金多');");
E_D("replace into `sm_sjrs` values('17','水','夏','必须有金相助，忌木多');");
E_D("replace into `sm_sjrs` values('18','火','夏','必须有水相助，最喜有金');");
E_D("replace into `sm_sjrs` values('19','木','夏','必须有水相助，忌土太多，也忌木太多');");
E_D("replace into `sm_sjrs` values('20','土','夏','喜有水、金，忌有木');");

require("../../inc/footer.php");
?>