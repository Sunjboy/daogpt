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
E_D("replace into `sm_sjrs` values('1','ˮ','��','�����н���������������ˮ�࣬ϲľ����');");
E_D("replace into `sm_sjrs` values('2','��','��','�����л������������޻��������н�ˮ����ľ����޻�');");
E_D("replace into `sm_sjrs` values('3','��','��','ϲ�����������û��������');");
E_D("replace into `sm_sjrs` values('4','��','��','������ˮ��������ľ��');");
E_D("replace into `sm_sjrs` values('5','��','��','ϲ��ľ���𣬼�����');");
E_D("replace into `sm_sjrs` values('6','��','��','ϲ�л���ľ���ɽ�ˮ��');");
E_D("replace into `sm_sjrs` values('7','ľ','��','�����н����������ɽ�̫�࣬����������źã�����ˮ��');");
E_D("replace into `sm_sjrs` values('8','��','��','ϲ��ľ����ˮ������');");
E_D("replace into `sm_sjrs` values('9','��','��','��ʱ��Ϊ����򶡻𣬴󶼲�������ľ�ࡢ����');");
E_D("replace into `sm_sjrs` values('10','��','��','ϲ�л�ľ��ϲ�н���٣��ɽ�ࡢľ��');");
E_D("replace into `sm_sjrs` values('11','ˮ','��','�����������������л𣬽𣬵��ɽ��');");
E_D("replace into `sm_sjrs` values('12','ľ','��','�����л�������ˮ���ã�����ˮ̫�࣬Ҳ����̫��');");
E_D("replace into `sm_sjrs` values('13','ľ','��','�����л����������������ˮ');");
E_D("replace into `sm_sjrs` values('14','��','��','������ľ����������ˮ���࣬ϲ������ˮ��ľ');");
E_D("replace into `sm_sjrs` values('15','��','��','ϲ�л𣬸�ϲ�л����н�ϲ������ľ');");
E_D("replace into `sm_sjrs` values('16','ˮ','��','�����л�������ϲˮ�࣬���ɽ��');");
E_D("replace into `sm_sjrs` values('17','ˮ','��','�����н���������ľ��');");
E_D("replace into `sm_sjrs` values('18','��','��','������ˮ��������ϲ�н�');");
E_D("replace into `sm_sjrs` values('19','ľ','��','������ˮ����������̫�࣬Ҳ��ľ̫��');");
E_D("replace into `sm_sjrs` values('20','��','��','ϲ��ˮ���𣬼���ľ');");

require("../../inc/footer.php");
?>