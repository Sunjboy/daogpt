<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gb2312');
E_D("DROP TABLE IF EXISTS `sm_qlpdbh`;");
E_C("CREATE TABLE `sm_qlpdbh` (
  `id` int(11) NOT NULL,
  `bihua` varchar(255) DEFAULT NULL,
  `intro` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gb2312");
E_D("replace into `sm_qlpdbh` values('1','1,16,56,61,85','两人有默契\r\n　　');");
E_D("replace into `sm_qlpdbh` values('2','2,17,57,86','他非常关心你\r\n　　');");
E_D("replace into `sm_qlpdbh` values('3','3,18,62,87','你和他只能做朋友\r\n　　');");
E_D("replace into `sm_qlpdbh` values('4','4,19,32,58,88','兴趣不合\r\n　　');");
E_D("replace into `sm_qlpdbh` values('5','5,35,63,89','男生主动\r\n　　');");
E_D("replace into `sm_qlpdbh` values('6','6,41,59,90','第三者介入\r\n　　');");
E_D("replace into `sm_qlpdbh` values('7','7,33,64,91','他非常讨厌你\r\n　　');");
E_D("replace into `sm_qlpdbh` values('8','8,43,60,92','早点分手比较好\r\n　　');");
E_D("replace into `sm_qlpdbh` values('9','9,47,66,70,93','他有一堆女朋友\r\n　　');");
E_D("replace into `sm_qlpdbh` values('10','10,34,10,65,94','两情相悦\r\n　　');");
E_D("replace into `sm_qlpdbh` values('11','11,46,73,11','他对你献真情\r\n　　');");
E_D("replace into `sm_qlpdbh` values('12','12,42,55,74,96','他已有心上人\r\n　　');");
E_D("replace into `sm_qlpdbh` values('13','13,36,49,69,97','此情不渝\r\n　　');");
E_D("replace into `sm_qlpdbh` values('14','14,48,71,98','他时常暗中注意你\r\n　　');");
E_D("replace into `sm_qlpdbh` values('15','15,37,72,99','他有企图要小心\r\n　　');");
E_D("replace into `sm_qlpdbh` values('16','20,67,100','他会爱你\r\n　　');");
E_D("replace into `sm_qlpdbh` values('17','17,21,38,75','他非常在乎你\r\n　　');");
E_D("replace into `sm_qlpdbh` values('18','18,22,76','女方主动\r\n　　');");
E_D("replace into `sm_qlpdbh` values('19','24,16,77','也有人暗中注意你\r\n　　');");
E_D("replace into `sm_qlpdbh` values('20','25,40,78','女方单恋\r\n　　');");
E_D("replace into `sm_qlpdbh` values('21','26,44,80','不能长相厮守\r\n　　');");
E_D("replace into `sm_qlpdbh` values('22','27,50,81','他会喜欢你\r\n　　');");
E_D("replace into `sm_qlpdbh` values('23','28,51,68,79','要长期交往\r\n　　');");
E_D("replace into `sm_qlpdbh` values('24','29,52,82','他早就爱上你\r\n　　');");
E_D("replace into `sm_qlpdbh` values('25','30,53,83','他会抛弃你\r\n　　');");
E_D("replace into `sm_qlpdbh` values('26','31,54,84','要多互相沟通<br />\r\n	');");

require("../../inc/footer.php");
?>