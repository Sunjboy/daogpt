<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gb2312');
E_D("DROP TABLE IF EXISTS `sm_qtbj`;");
E_C("CREATE TABLE `sm_qtbj` (
  `id` int(11) NOT NULL,
  `tg` varchar(50) DEFAULT NULL,
  `dz` varchar(50) DEFAULT NULL,
  `content` longtext,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gb2312");
E_D("replace into `sm_qtbj` values('121','��','��','ľ������,���ȸ���,����Ϊ��,����֧������,��Ϊ���');");
E_D("replace into `sm_qtbj` values('122','��','��','��ľ����,ר�ñ���,�ɼ���ˮ��');");
E_D("replace into `sm_qtbj` values('123','��','��','��������,�������и�ǿ,������ˮ,ȡ����֮,�����ü���');");
E_D("replace into `sm_qtbj` values('124','��','��','������������,��ľΪ��,����Ϊ�������Ȩ��ȡ�á�');");
E_D("replace into `sm_qtbj` values('125','��','��','����Ϊ��,��ľΪ����');");
E_D("replace into `sm_qtbj` values('126','��','��','��������,�Ǳ�ů��������ˮ̫��,ȡ������֮,����,ȡ��ľ��֮��');");
E_D("replace into `sm_qtbj` values('127','��','��','��ȡ����,��ȡ������ů,��������������δ��֧,��Ϊ������һ�ɽ�ˮ,����\r\n��ů֮��,��ƶ��');");
E_D("replace into `sm_qtbj` values('128','��','��','��������,����ȱ������ů,������á�');");
E_D("replace into `sm_qtbj` values('129','��','��','ˮ������,�����˱�,���������á�');");
E_D("replace into `sm_qtbj` values('130','��','��','����ⶳ,�����̷���');");
E_D("replace into `sm_qtbj` values('131','��','��','����ز�����,ͨ������,��ľΪ��,�ø�����������');");
E_D("replace into `sm_qtbj` values('132','��','��','���Ȼش�,ר�ñ���');");
E_D("replace into `sm_qtbj` values('133','��','��','ϲ��Ϊ��,���಻���ټס�');");
E_D("replace into `sm_qtbj` values('134','��','��','������������,��ľΪ��,����Ϊ�������Ȩ��ȡ�á�');");
E_D("replace into `sm_qtbj` values('135','��','��','����Ϊ��,��ľΪ����');");
E_D("replace into `sm_qtbj` values('136','��','��','��������,�Ǳ�ů��������ˮ̫��,ȡ������֮,����,ȡ��ľ��֮��');");
E_D("replace into `sm_qtbj` values('137','��','��','��ȡ����,��ȡ������ů,��������������δ��֧,��Ϊ������һ�ɽ�ˮ,����\r\n��ů֮��,��ƶ��');");
E_D("replace into `sm_qtbj` values('138','��','��','��������,����ȱ������ů,�����ɺ�,�켺��֮,��֮���𲻿���Ҳ��');");
E_D("replace into `sm_qtbj` values('139','��','��','�ϰ���ר�ñ���,�°����ñ�,��ľΪ����');");
E_D("replace into `sm_qtbj` values('140','��','��','����ⶳ,ͨ��������δ�緽�֧�ɽ��,Ҫ��͸�õء�֧�ɻ��,�����ø�����');");
E_D("replace into `sm_qtbj` values('141','��','��','��������ΪҪ,����Ϊ��,��ˮΪ����');");
E_D("replace into `sm_qtbj` values('142','��','��','ȡ����⺮,��ȡ��ˮΪ����,����������');");
E_D("replace into `sm_qtbj` values('143','��','��','��ˮΪ��,����ˮ֮ԴΪ����');");
E_D("replace into `sm_qtbj` values('144','��','��','�ø�������������');");
E_D("replace into `sm_qtbj` values('145','��','��','�ޱ���ů,��������,�޼�����,��������,�޹�����,�����������ȱ����μס�\r\n�ι');");
E_D("replace into `sm_qtbj` values('146','��','��','ȡ���⺮,�ɼ���ˮ,��ˮ��,������Ϊ���������ü�,�׶��ø���');");
E_D("replace into `sm_qtbj` values('147','��','��','�ñ�ů����,���������,�����й���������,֧�ɻ�����ɡ�');");
E_D("replace into `sm_qtbj` values('148','��','��','����ʧ��,ȡ����Ϊ����֮��,����������,ȫ����ˮ֮�����ɼ�����,�Ը�Ϊ\r\n����');");
E_D("replace into `sm_qtbj` values('149','��','��','�ޱȽ�,��������,ר�ø���,����Ϊ����');");
E_D("replace into `sm_qtbj` values('150','��','��','��������ˮΪԴ,�����ø����������١�');");
E_D("replace into `sm_qtbj` values('151','��','î','���м�ɱ,ר�ø���,���켺��ɱΪ�����޸�,�ñ���й��,��ȡ��ɱ��');");
E_D("replace into `sm_qtbj` values('152','��','î','�Թ���ľ,�ñ�й��,���˼���');");
E_D("replace into `sm_qtbj` values('153','��','î','ר����ˮ,ˮ��������֮,������ӡ��֮��');");
E_D("replace into `sm_qtbj` values('154','��','î','�Ը�ȥ��,�Լ�������');");
E_D("replace into `sm_qtbj` values('155','��','î','�ޱ���ů,��������,�޼�����,��������,�޹�����,�����������ȱ����μס�\r\n�ι');");
E_D("replace into `sm_qtbj` values('156','��','î','�ü׼��뼺���ϻ�,���ù�ˮ��֮��');");
E_D("replace into `sm_qtbj` values('157','��','î','����ǿ,ר�ö���,�������,�ø����ס��޶��ñ���');");
E_D("replace into `sm_qtbj` values('158','��','î','��ˮΪ��,���켺Ϊ��,����Ʒ���');");
E_D("replace into `sm_qtbj` values('159','��','î','������ˮ����,ȡ������ˮ֮Դ,ˮ�����졣');");
E_D("replace into `sm_qtbj` values('160','��','î','��ľ˾��,ר�ø���,����Ϊ�Ρ�');");
E_D("replace into `sm_qtbj` values('161','��','��','�ý���붡����֮,Ϊ�˹���ɱ���޸����ɡ�');");
E_D("replace into `sm_qtbj` values('162','��','��','��֧��ˮ��,ȡ��Ϊ����');");
E_D("replace into `sm_qtbj` values('163','��','��','ר����ˮ,�����Լ�Ϊ����');");
E_D("replace into `sm_qtbj` values('164','��','��','�Լ�ľ��������,�ο�����ľʢ�ø�,ˮʢ���졣');");
E_D("replace into `sm_qtbj` values('165','��','��','����˾��,���ü���,�α����ι');");
E_D("replace into `sm_qtbj` values('166','��','��','�ȱ����,��ů����,���ü��衣');");
E_D("replace into `sm_qtbj` values('167','��','��','����˶�,�����ü�,���ø�����֧���˹�,�ɻ����ɡ�');");
E_D("replace into `sm_qtbj` values('168','��','��','�����������,���й��Ʊ���֧��������,Ϊ��');");
E_D("replace into `sm_qtbj` values('169','��','��','���輾��,��ȡ�����Է�ˮԴ,��������֮Ϊ�');");
E_D("replace into `sm_qtbj` values('170','��','��','�ϰ���ר�ñ���,�°������ñ���,����Ϊ����');");
E_D("replace into `sm_qtbj` values('171','��','��','��������,��ˮΪ����ԭ������,����Ϊ�á�');");
E_D("replace into `sm_qtbj` values('172','��','��','��������»,ר�ù�ˮ,����Ϊ����');");
E_D("replace into `sm_qtbj` values('173','��','��','�Ը�Ϊ��,�������ɡ�');");
E_D("replace into `sm_qtbj` values('174','��','��','ȡ������,�׶���ȡ��Ϊ�ȡ�');");
E_D("replace into `sm_qtbj` values('175','��','��','������»,���ü�����,��ȡ���');");
E_D("replace into `sm_qtbj` values('176','��','��','�������޹�,�������ޱ���');");
E_D("replace into `sm_qtbj` values('177','��','��','�����۽�,Ωϲ���ơ���ȡ����,����Ϊ����֧�ɽ��,����Ϊǿ,���ö���');");
E_D("replace into `sm_qtbj` values('178','��','��','��ˮ��ϴ,���е���֮��,���м�ľ����,һ�峹�ס�');");
E_D("replace into `sm_qtbj` values('179','��','��','��ˮ����,ȡ����ΪԴ,�ɹ������');");
E_D("replace into `sm_qtbj` values('180','��','��','�����ø����ɶ��Ƹ�,���ɿ��⡣');");
E_D("replace into `sm_qtbj` values('181','��','��','ľ���齹,��Ϊ��Ҫ���޹��ö�,�������б��ء�');");
E_D("replace into `sm_qtbj` values('182','��','��','�ϰ���ר�ù�ˮ,�°��±��ﲢ�á�');");
E_D("replace into `sm_qtbj` values('183','��','��','�ɸ���ͨ���깬Ϊ�');");
E_D("replace into `sm_qtbj` values('184','��','��','����Ը�����͸Ϊ�������ù�,Ϊ��ɱ��Ȩ��');");
E_D("replace into `sm_qtbj` values('185','��','��','����Ϊ��,������ˮ,��ȡ��ľ,�������á�');");
E_D("replace into `sm_qtbj` values('186','��','��','�������޹�,�������ޱ���');");
E_D("replace into `sm_qtbj` values('187','��','��','ר����ˮ,���֮,��֧������Ϊ�������ɹ�,���켺й��֮����');");
E_D("replace into `sm_qtbj` values('188','��','��','�����ɲ�ʪ,���޼�����,���ɼ�����,�����ù');");
E_D("replace into `sm_qtbj` values('189','��','��','ȡ��ΪԴ,ȡ��Ϊ��,�޸�������');");
E_D("replace into `sm_qtbj` values('190','��','��','����Ϊ����֮��,������˾Ȩ,���ѵл�,�˼��бȽ�,���ø���֮�á�');");
E_D("replace into `sm_qtbj` values('191','��','δ','�ϰ���ͬ�����ù�,�°����ø�����');");
E_D("replace into `sm_qtbj` values('192','��','δ','������ľ,ϲ�ù�ˮ,�����ˮ,���ñ��������ɹ�,�м��켺���ҡ�');");
E_D("replace into `sm_qtbj` values('193','��','δ','�Ը�Ϊ����');");
E_D("replace into `sm_qtbj` values('194','��','δ','�Լ�ľ��������Ϊ��,�üײ����޸�,ȡ��Ϊ����');");
E_D("replace into `sm_qtbj` values('195','��','δ','����Ϊ��,�ﲻ��ȱ,���ñ���,���ز����޼ס�');");
E_D("replace into `sm_qtbj` values('196','��','δ','�������޹�,�������ޱ���');");
E_D("replace into `sm_qtbj` values('197','��','δ','��֧������,���ȶ���');");
E_D("replace into `sm_qtbj` values('198','��','δ','������ˮ,ȡ��Ϊ��,�����,�ü���֮,������');");
E_D("replace into `sm_qtbj` values('199','��','δ','������ˮԴ,��ľ������');");
E_D("replace into `sm_qtbj` values('200','��','δ','�ϰ��½���˥��,��������,�˱Ƚٰ���,ͬ���¡��°����ޱȽ���ɡ�');");
E_D("replace into `sm_qtbj` values('201','��','��','���ø�,��ȡ��,Ϊ�˹���ɱ,�޶�����,��������');");
E_D("replace into `sm_qtbj` values('202','��','��','��ԫ����˾��,ȡ������֮,���ˮ��֮�������ñ��ù�,�Լ���Ϊ����');");
E_D("replace into `sm_qtbj` values('203','��','��','��ˮͨ���깬,�ɶ��ȡ���ơ�');");
E_D("replace into `sm_qtbj` values('204','��','��','��ȡ����,�޼����ҡ��ñ�ů��ɹ��,�޸��׶�������,����Ϊ�ݲ����ơ�ˮ��\r\n���졣');");
E_D("replace into `sm_qtbj` values('205','��','��','��������,���ñ���,���ù�ˮ��ˮ��,�ü�й֮��');");
E_D("replace into `sm_qtbj` values('206','��','��','��������,��ˮ���������¸���˾��,�����ƽ�,����й��');");
E_D("replace into `sm_qtbj` values('207','��','��','ר�ö���,�Լ�������');");
E_D("replace into `sm_qtbj` values('208','��','��','��ˮΪ��,�������á������ù�ˮ��');");
E_D("replace into `sm_qtbj` values('209','��','��','ȡ���������Ƹ�,����ͨ������,����ͨ������,����Ϊ�á�');");
E_D("replace into `sm_qtbj` values('210','��','��','�����»,�ض����ƽ�Ϊ��,������ͨ������δΪ�');");
E_D("replace into `sm_qtbj` values('211','��','��','�ö���ɱ,�ñ�����,��������Ϊ����');");
E_D("replace into `sm_qtbj` values('212','��','��','�ϰ��¹��ȱ���,�°����ñ��ȹ��,�޹����ɡ�');");
E_D("replace into `sm_qtbj` values('213','��','��','�������,һ�ɸ�͸Ϊ�档����Ϊ�');");
E_D("replace into `sm_qtbj` values('214','��','��','��ȡ����,�޼����ҡ��ñ�ů��ɹ��,�޸��׶�������,����Ϊ�ݲ����ơ�ˮ��\r\n���졣');");
E_D("replace into `sm_qtbj` values('215','��','��','������ů,ϲˮ����');");
E_D("replace into `sm_qtbj` values('216','��','��','ȡ�����');");
E_D("replace into `sm_qtbj` values('217','��','��','�ö����ѽ�,���ñ������');");
E_D("replace into `sm_qtbj` values('218','��','��','��ˮ��ϴ,����켺,���������֧�ɽ��,����,���ö���');");
E_D("replace into `sm_qtbj` values('219','��','��','�޼�,�ý�ˮ֮Դ,����ˮ������,��ȫ֮�塣');");
E_D("replace into `sm_qtbj` values('220','��','��','����Ϊ��,������֮,��ˮů����,���λͬ͸Ϊ�');");
E_D("replace into `sm_qtbj` values('221','��','��','�������ü�ľ,ľ�����ø���,���ɹ�Ϊ����');");
E_D("replace into `sm_qtbj` values('222','��','��','�Խ�ˮ֮Դ������,������ϵ�ס�');");
E_D("replace into `sm_qtbj` values('223','��','��','�����޹�,��ȡ������,������ˮ��');");
E_D("replace into `sm_qtbj` values('224','��','��','һ�������޼�,Ϊ�˹پ���');");
E_D("replace into `sm_qtbj` values('225','��','��','������Ȩ,���ü�ľ,��ȡ���𡣼���,���ù�ˮ,��ȡ����');");
E_D("replace into `sm_qtbj` values('226','��','��','������ʢ,�˼�ľ��֮,���ñ��');");
E_D("replace into `sm_qtbj` values('227','��','��','�������ü���,������ϴ��');");
E_D("replace into `sm_qtbj` values('228','��','��','��������,����Ϊ��,ˮľΪ�á�');");
E_D("replace into `sm_qtbj` values('229','��','��','�Լ�����������,����Ϊ����');");
E_D("replace into `sm_qtbj` values('230','��','��','ר������,������,Ҫ�Ƚ��ȼ����췽�');");
E_D("replace into `sm_qtbj` values('231','��','��','�ø���,ȡ������֮,�������ˮ�����졣');");
E_D("replace into `sm_qtbj` values('232','��','��','��ľ����,ר�ñ���,ˮ������Ϊ����');");
E_D("replace into `sm_qtbj` values('233','��','��','��ԫ��ˮ����,ˮ���ü�ľ��֮����ɱ����,������֮����������,ľ���˸���');");
E_D("replace into `sm_qtbj` values('234','��','��','������������,��ľΪ��,����Ϊ�������Ȩ��ȡ�á�');");
E_D("replace into `sm_qtbj` values('235','��','��','�Ǽײ���,�Ǳ���ů��');");
E_D("replace into `sm_qtbj` values('236','��','��','��������,�Ǳ�ů��������������,ȡ������֮,����,ȡ��ľ��֮��');");
E_D("replace into `sm_qtbj` values('237','��','��','ˮ��𺮰�����,��ľ������');");
E_D("replace into `sm_qtbj` values('238','��','��','���ɺ��,�����ˮ��,������á�');");
E_D("replace into `sm_qtbj` values('239','��','��','���׳�����,���Ը���Ϊ�ȡ�');");
E_D("replace into `sm_qtbj` values('240','��','��','���м�ľ����,йɢԪ��,���ø�����ˮ������,����ö���');");

require("../../inc/footer.php");
?>