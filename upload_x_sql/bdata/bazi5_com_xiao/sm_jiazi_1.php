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
E_D("replace into `sm_jiazi` values('1','����','���н�');");
E_D("replace into `sm_jiazi` values('2','�ҳ�','���н�');");
E_D("replace into `sm_jiazi` values('3','����','¯�л�');");
E_D("replace into `sm_jiazi` values('4','��î','¯�л�');");
E_D("replace into `sm_jiazi` values('5','�쳽','����ľ');");
E_D("replace into `sm_jiazi` values('6','����','����ľ');");
E_D("replace into `sm_jiazi` values('7','����','·����');");
E_D("replace into `sm_jiazi` values('8','��δ','·����');");
E_D("replace into `sm_jiazi` values('9','����','�����');");
E_D("replace into `sm_jiazi` values('10','����','�����');");
E_D("replace into `sm_jiazi` values('11','����','ɽͷ��');");
E_D("replace into `sm_jiazi` values('12','�Һ�','ɽͷ��');");
E_D("replace into `sm_jiazi` values('13','����','����ˮ');");
E_D("replace into `sm_jiazi` values('14','����','����ˮ');");
E_D("replace into `sm_jiazi` values('15','����','��ǽ��');");
E_D("replace into `sm_jiazi` values('16','��î','��ǽ��');");
E_D("replace into `sm_jiazi` values('17','����','������');");
E_D("replace into `sm_jiazi` values('18','����','������');");
E_D("replace into `sm_jiazi` values('19','����','����ľ');");
E_D("replace into `sm_jiazi` values('20','��δ','����ľ');");
E_D("replace into `sm_jiazi` values('21','����','Ȫ��ˮ');");
E_D("replace into `sm_jiazi` values('22','����','Ȫ��ˮ');");
E_D("replace into `sm_jiazi` values('23','����','������');");
E_D("replace into `sm_jiazi` values('24','����','������');");
E_D("replace into `sm_jiazi` values('25','����','���׻�');");
E_D("replace into `sm_jiazi` values('26','����','���׻�');");
E_D("replace into `sm_jiazi` values('27','����','�ɰ�ľ');");
E_D("replace into `sm_jiazi` values('28','��î','�ɰ�ľ');");
E_D("replace into `sm_jiazi` values('29','�ɳ�','����ˮ');");
E_D("replace into `sm_jiazi` values('30','����','����ˮ');");
E_D("replace into `sm_jiazi` values('31','����','ɳ�н�');");
E_D("replace into `sm_jiazi` values('32','��δ','ɳ�н�');");
E_D("replace into `sm_jiazi` values('33','����','ɽ�»�');");
E_D("replace into `sm_jiazi` values('34','����','ɽ�»�');");
E_D("replace into `sm_jiazi` values('35','����','ƽ��ľ');");
E_D("replace into `sm_jiazi` values('36','����','ƽ��ľ');");
E_D("replace into `sm_jiazi` values('37','����','������');");
E_D("replace into `sm_jiazi` values('38','����','������');");
E_D("replace into `sm_jiazi` values('39','����','�𲭽�');");
E_D("replace into `sm_jiazi` values('40','��î','�𲭽�');");
E_D("replace into `sm_jiazi` values('41','�׳�','��ƻ�');");
E_D("replace into `sm_jiazi` values('42','����','��ƻ�');");
E_D("replace into `sm_jiazi` values('43','����','���ˮ');");
E_D("replace into `sm_jiazi` values('44','��δ','���ˮ');");
E_D("replace into `sm_jiazi` values('45','����','������');");
E_D("replace into `sm_jiazi` values('46','����','������');");
E_D("replace into `sm_jiazi` values('47','����','���˽�');");
E_D("replace into `sm_jiazi` values('48','����','���˽�');");
E_D("replace into `sm_jiazi` values('49','����','ɣ��ľ');");
E_D("replace into `sm_jiazi` values('50','���','ɣ��ľ');");
E_D("replace into `sm_jiazi` values('51','����','��Ϫˮ');");
E_D("replace into `sm_jiazi` values('52','��î','��Ϫˮ');");
E_D("replace into `sm_jiazi` values('53','����','ɳ����');");
E_D("replace into `sm_jiazi` values('54','����','ɳ����');");
E_D("replace into `sm_jiazi` values('55','����','���ϻ�');");
E_D("replace into `sm_jiazi` values('56','��δ','���ϻ�');");
E_D("replace into `sm_jiazi` values('57','����','ʯ��ľ');");
E_D("replace into `sm_jiazi` values('58','����','ʯ��ľ');");
E_D("replace into `sm_jiazi` values('59','����','��ˮ');");
E_D("replace into `sm_jiazi` values('60','�ﺥ','��ˮ');");

require("../../inc/footer.php");
?>