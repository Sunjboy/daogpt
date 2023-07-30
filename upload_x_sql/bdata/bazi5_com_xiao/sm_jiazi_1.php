<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gb2312');
E_D("DROP TABLE IF EXISTS `sm_jiazi`;");
E_C("CREATE TABLE `sm_jiazi` (
  `id` int(11) NOT NULL,
  `jiazi` varchar(50) DEFAULT NULL,
  `layin` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gb2312");
E_D("replace into `sm_jiazi` values('1','甲子','海中金');");
E_D("replace into `sm_jiazi` values('2','乙丑','海中金');");
E_D("replace into `sm_jiazi` values('3','丙寅','炉中火');");
E_D("replace into `sm_jiazi` values('4','丁卯','炉中火');");
E_D("replace into `sm_jiazi` values('5','戊辰','大林木');");
E_D("replace into `sm_jiazi` values('6','己巳','大林木');");
E_D("replace into `sm_jiazi` values('7','庚午','路旁土');");
E_D("replace into `sm_jiazi` values('8','辛未','路旁土');");
E_D("replace into `sm_jiazi` values('9','壬申','剑锋金');");
E_D("replace into `sm_jiazi` values('10','癸酉','剑锋金');");
E_D("replace into `sm_jiazi` values('11','甲戌','山头火');");
E_D("replace into `sm_jiazi` values('12','乙亥','山头火');");
E_D("replace into `sm_jiazi` values('13','丙子','洞下水');");
E_D("replace into `sm_jiazi` values('14','丁丑','洞下水');");
E_D("replace into `sm_jiazi` values('15','戊寅','城墙土');");
E_D("replace into `sm_jiazi` values('16','己卯','城墙土');");
E_D("replace into `sm_jiazi` values('17','庚辰','白腊金');");
E_D("replace into `sm_jiazi` values('18','辛巳','白腊金');");
E_D("replace into `sm_jiazi` values('19','壬午','杨柳木');");
E_D("replace into `sm_jiazi` values('20','癸未','杨柳木');");
E_D("replace into `sm_jiazi` values('21','甲申','泉中水');");
E_D("replace into `sm_jiazi` values('22','乙酉','泉中水');");
E_D("replace into `sm_jiazi` values('23','丙戌','屋上土');");
E_D("replace into `sm_jiazi` values('24','丁亥','屋上土');");
E_D("replace into `sm_jiazi` values('25','戊子','霹雷火');");
E_D("replace into `sm_jiazi` values('26','己丑','霹雷火');");
E_D("replace into `sm_jiazi` values('27','庚寅','松柏木');");
E_D("replace into `sm_jiazi` values('28','辛卯','松柏木');");
E_D("replace into `sm_jiazi` values('29','壬辰','常流水');");
E_D("replace into `sm_jiazi` values('30','癸巳','常流水');");
E_D("replace into `sm_jiazi` values('31','甲午','沙中金');");
E_D("replace into `sm_jiazi` values('32','乙未','沙中金');");
E_D("replace into `sm_jiazi` values('33','丙申','山下火');");
E_D("replace into `sm_jiazi` values('34','丁酉','山下火');");
E_D("replace into `sm_jiazi` values('35','戊戌','平地木');");
E_D("replace into `sm_jiazi` values('36','己亥','平地木');");
E_D("replace into `sm_jiazi` values('37','庚子','壁上土');");
E_D("replace into `sm_jiazi` values('38','辛丑','壁上土');");
E_D("replace into `sm_jiazi` values('39','壬寅','金箔金');");
E_D("replace into `sm_jiazi` values('40','癸卯','金箔金');");
E_D("replace into `sm_jiazi` values('41','甲辰','佛灯火');");
E_D("replace into `sm_jiazi` values('42','乙巳','佛灯火');");
E_D("replace into `sm_jiazi` values('43','丙午','天河水');");
E_D("replace into `sm_jiazi` values('44','丁未','天河水');");
E_D("replace into `sm_jiazi` values('45','戊申','大驿土');");
E_D("replace into `sm_jiazi` values('46','己酉','大驿土');");
E_D("replace into `sm_jiazi` values('47','庚戌','钗钏金');");
E_D("replace into `sm_jiazi` values('48','辛亥','钗钏金');");
E_D("replace into `sm_jiazi` values('49','壬子','桑松木');");
E_D("replace into `sm_jiazi` values('50','癸丑','桑松木');");
E_D("replace into `sm_jiazi` values('51','甲寅','大溪水');");
E_D("replace into `sm_jiazi` values('52','乙卯','大溪水');");
E_D("replace into `sm_jiazi` values('53','丙辰','沙中土');");
E_D("replace into `sm_jiazi` values('54','丁巳','沙中土');");
E_D("replace into `sm_jiazi` values('55','戊午','天上火');");
E_D("replace into `sm_jiazi` values('56','己未','天上火');");
E_D("replace into `sm_jiazi` values('57','庚申','石榴木');");
E_D("replace into `sm_jiazi` values('58','辛酉','石榴木');");
E_D("replace into `sm_jiazi` values('59','壬戌','大海水');");
E_D("replace into `sm_jiazi` values('60','癸亥','大海水');");

require("../../inc/footer.php");
?>