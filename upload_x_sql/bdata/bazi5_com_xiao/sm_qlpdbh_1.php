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
E_D("replace into `sm_qlpdbh` values('1','1,16,56,61,85','������Ĭ��\r\n����');");
E_D("replace into `sm_qlpdbh` values('2','2,17,57,86','���ǳ�������\r\n����');");
E_D("replace into `sm_qlpdbh` values('3','3,18,62,87','�����ֻ��������\r\n����');");
E_D("replace into `sm_qlpdbh` values('4','4,19,32,58,88','��Ȥ����\r\n����');");
E_D("replace into `sm_qlpdbh` values('5','5,35,63,89','��������\r\n����');");
E_D("replace into `sm_qlpdbh` values('6','6,41,59,90','�����߽���\r\n����');");
E_D("replace into `sm_qlpdbh` values('7','7,33,64,91','���ǳ�������\r\n����');");
E_D("replace into `sm_qlpdbh` values('8','8,43,60,92','�����ֱȽϺ�\r\n����');");
E_D("replace into `sm_qlpdbh` values('9','9,47,66,70,93','����һ��Ů����\r\n����');");
E_D("replace into `sm_qlpdbh` values('10','10,34,10,65,94','��������\r\n����');");
E_D("replace into `sm_qlpdbh` values('11','11,46,73,11','������������\r\n����');");
E_D("replace into `sm_qlpdbh` values('12','12,42,55,74,96','������������\r\n����');");
E_D("replace into `sm_qlpdbh` values('13','13,36,49,69,97','���鲻��\r\n����');");
E_D("replace into `sm_qlpdbh` values('14','14,48,71,98','��ʱ������ע����\r\n����');");
E_D("replace into `sm_qlpdbh` values('15','15,37,72,99','������ͼҪС��\r\n����');");
E_D("replace into `sm_qlpdbh` values('16','20,67,100','���ᰮ��\r\n����');");
E_D("replace into `sm_qlpdbh` values('17','17,21,38,75','���ǳ��ں���\r\n����');");
E_D("replace into `sm_qlpdbh` values('18','18,22,76','Ů������\r\n����');");
E_D("replace into `sm_qlpdbh` values('19','24,16,77','Ҳ���˰���ע����\r\n����');");
E_D("replace into `sm_qlpdbh` values('20','25,40,78','Ů������\r\n����');");
E_D("replace into `sm_qlpdbh` values('21','26,44,80','���ܳ�������\r\n����');");
E_D("replace into `sm_qlpdbh` values('22','27,50,81','����ϲ����\r\n����');");
E_D("replace into `sm_qlpdbh` values('23','28,51,68,79','Ҫ���ڽ���\r\n����');");
E_D("replace into `sm_qlpdbh` values('24','29,52,82','����Ͱ�����\r\n����');");
E_D("replace into `sm_qlpdbh` values('25','30,53,83','����������\r\n����');");
E_D("replace into `sm_qlpdbh` values('26','31,54,84','Ҫ�໥�๵ͨ<br />\r\n	');");

require("../../inc/footer.php");
?>