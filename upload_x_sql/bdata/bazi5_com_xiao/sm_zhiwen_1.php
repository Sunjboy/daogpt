<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gb2312');
E_D("DROP TABLE IF EXISTS `sm_zhiwen`;");
E_C("CREATE TABLE `sm_zhiwen` (
  `id` int(11) NOT NULL,
  `zhiwen` varchar(50) DEFAULT NULL,
  `jiexi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gb2312");
E_D("replace into `sm_zhiwen` values('1','xxxxx','��˳���������Ը����أ�����ֱ����˼���ö������ܽ����ã��������š�');");
E_D("replace into `sm_zhiwen` values('2','xxxxo','������������������ ���ƻ�����ɫ��һ���Ǽ��ˡ�');");
E_D("replace into `sm_zhiwen` values('3','xxxox','���ɴ������������Բ����顣');");
E_D("replace into `sm_zhiwen` values('4','xxxoo','���𣬸���Ϊ�أ����ã�������ѡ�');");
E_D("replace into `sm_zhiwen` values('5','xxoxx','�����أ�˵��̫�࣬���������档 ��ִ�������������ۡ�');");
E_D("replace into `sm_zhiwen` values('6','xxoxo','���Դ�³���ô󴵴��ޣ�������ȡ�');");
E_D("replace into `sm_zhiwen` values('7','xxoox','�����е��Ը񣬶���ƸС�');");
E_D("replace into `sm_zhiwen` values('8','xxooo','����ḻ���мƻ����л���������������˼����');");
E_D("replace into `sm_zhiwen` values('9','xoxxx','��������˳����ʵ����������������');");
E_D("replace into `sm_zhiwen` values('10','xoxxo','������飬�л��������������顣');");
E_D("replace into `sm_zhiwen` values('11','xoxox','�мƻ���ͨ������л���������³��ס�');");
E_D("replace into `sm_zhiwen` values('12','xoxoo','���أ��л����������ʮ�㣬����ɫ�顣');");
E_D("replace into `sm_zhiwen` values('13','xooxx','���˽������飬ȴ�����ʣ�����Ƿ˼����');");
E_D("replace into `sm_zhiwen` values('14','xooxo','�������գ���˳�󷽣��������棬��������ԥ�������������գ���˳�󷽣��������棬��������ԥ������');");
E_D("replace into `sm_zhiwen` values('15','xooox','����ǿ�һ����������������ģ��ܸɣ�����Э����ȫ��');");
E_D("replace into `sm_zhiwen` values('16','xoooo','��˵�ܸɣ��������أ�������ǿ��');");
E_D("replace into `sm_zhiwen` values('17','oxxxx','�����ºͣ��������ˣ�Ϊ�����飬��ִ������');");
E_D("replace into `sm_zhiwen` values('18','oxxxo','��磬��ţ��ã�����Ϊ�ǣ���������Ȱ�档');");
E_D("replace into `sm_zhiwen` values('19','oxxox','�ױ����ã�������̣��������£��������ô�á�');");
E_D("replace into `sm_zhiwen` values('20','oxxoo','��������ǿ���ö����飬��Ը����Ϊ�֡�');");
E_D("replace into `sm_zhiwen` values('21','oxoxx','����Ư����ȴ���鲻����������ɫ�鿼�顣');");
E_D("replace into `sm_zhiwen` values('22','oxoxo','����ḻ���л�������������£����Լ���');");
E_D("replace into `sm_zhiwen` values('23','oxoox','����ö��������У����ǹ��ˣ�ͨ�����');");
E_D("replace into `sm_zhiwen` values('24','oxooo','������ǿ������ǿ�������á�');");
E_D("replace into `sm_zhiwen` values('25','ooxxx','��֪����ǿ������Э�������ź��档');");
E_D("replace into `sm_zhiwen` values('26','ooxxo','��˽�����������Ȱ�棬�ƸУ�����ۡ�');");
E_D("replace into `sm_zhiwen` values('27','ooxox','���ն��ѣ�����������鿪�ɡ�');");
E_D("replace into `sm_zhiwen` values('28','ooxoo','���ɣ��л����������࣬�������У�ʵ�����ĸ��ӡ�');");
E_D("replace into `sm_zhiwen` values('29','oooxx','�����ǿ���������ʵ�������û���������»�ͷ��β�����ܹ��ϣ������ס�');");
E_D("replace into `sm_zhiwen` values('30','oooxo','��ᾭ��ḻ���Ը��ɣ����л������');");
E_D("replace into `sm_zhiwen` values('31','oooox','���������ţ���������������Ѳ���������á�');");
E_D("replace into `sm_zhiwen` values('32','ooooo','��������»�������Ŭ�����ܴ��죬����������������׳���������������');");

require("../../inc/footer.php");
?>