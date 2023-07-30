<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gb2312');
E_D("DROP TABLE IF EXISTS `sm_wh`;");
E_C("CREATE TABLE `sm_wh` (
  `wh` varchar(50) NOT NULL,
  `tnwh` varchar(50) DEFAULT NULL,
  `ynwh` varchar(50) DEFAULT NULL,
  `skzhyj` longtext,
  `whzx` longtext,
  `szwh` longtext,
  `hyhw` longtext,
  `whw` longtext,
  `whq` longtext,
  PRIMARY KEY (`wh`)
) ENGINE=MyISAM DEFAULT CHARSET=gb2312");
E_D("replace into `sm_wh` values('��','��ľ','ˮ����','������ˮ��&nbsp;������á�\r<BR>����������&nbsp;�����ޣ�&nbsp;ǿ�������&nbsp;��ֹ���档\r<BR>���ܿ˽�&nbsp;����Ϩ��&nbsp;��������&nbsp;�ؼ����ۡ�\r<BR>����ľ����&nbsp;ľ���㣻&nbsp;ľ������&nbsp;���ľ�١���\r<BR>','������&nbsp;���Լ���&nbsp;���鹧��&nbsp;��ζ�࣬&nbsp;��ɫ�ࡣ&nbsp;��ʢ֮��ͷС�ų���&nbsp;�ϼ�������ŨüС����&nbsp;������˸��&nbsp;Ϊ��ǫ�͹�����&nbsp;���Ӽ��ꡣ&nbsp;��˥֮������ݼ��㣬&nbsp;����������&nbsp;��թ�ʶ���&nbsp;������ʼ���ա�','������С����Ϊ�อ���&nbsp;����Ѫ��������ѭ��ϵͳ��&nbsp;�������˥��&nbsp;���˻�С����&nbsp;���࣬&nbsp;�磬&nbsp;ѪҺ��&nbsp;��Ѫ��&nbsp;������&nbsp;���ݣ�&nbsp;������&nbsp;�ಿ�ȷ���ļ�����','�˻��ߣ�&nbsp;ϲ�Ϸ���&nbsp;�ɴ��·Ź⣬&nbsp;������&nbsp;��ѧ��&nbsp;���ȣ�&nbsp;��ȼ��&nbsp;���࣬&nbsp;�ƾ��࣬����ʳ��&nbsp;ʳƷ��&nbsp;����&nbsp;��ױƷ��&nbsp;����װ��Ʒ��&nbsp;���գ�&nbsp;��ѧ��&nbsp;�ľߣ�&nbsp;�Ļ�ѧ����&nbsp;���ˣ�&nbsp;���ң�&nbsp;д����&nbsp;׫�ģ�&nbsp;��Ա��&nbsp;У����&nbsp;���飬&nbsp;���棬&nbsp;����&nbsp;����ȷ���ľ�Ӫ����ҵ��',NULL,NULL);");
E_D("replace into `sm_wh` values('��','����','��ľˮ','�����û�&nbsp;��������\r<BR>������ˮ��&nbsp;ˮ������&nbsp;ǿ���ˮ��&nbsp;������档\r<BR>���ܿ�ľ��&nbsp;ľ���ȱ��&nbsp;ľ�����&nbsp;��Ϊ���ۡ�\r<BR>����������&nbsp;�������&nbsp;��������&nbsp;������䡣��\r<BR>','�����壬&nbsp;���Ըգ�&nbsp;�����ң�&nbsp;��ζ����&nbsp;��ɫ�ס�&nbsp;��ʢ֮�˹�����ƣ�&nbsp;�淽�׾���ü�����&nbsp;�彡���塣&nbsp;Ϊ�˸�����ϣ�&nbsp;������壬&nbsp;��֪���ܡ�&nbsp;̫����������ı��̰�����ʡ�&nbsp;�����������С��&nbsp;Ϊ�˿̱��ڶ���&nbsp;ϲ����ɱ��&nbsp;����̰����','����󳦻�Ϊ�อ���&nbsp;�������ܼ���������ϵͳ��&nbsp;�������˥��&nbsp;���˻��󳦣�&nbsp;�Σ�&nbsp;�꣬&nbsp;��̵��&nbsp;�Σ�&nbsp;Ƥ����&nbsp;�̴���&nbsp;�����ܵȷ���ļ�����','�˽��ߣ�&nbsp;ϲ������&nbsp;�ɴ��¾��˲Ļ�������߲��ϣ�&nbsp;��Ӳ��&nbsp;���ϣ�&nbsp;������&nbsp;�������ܹܣ�&nbsp;������&nbsp;��ͨ��&nbsp;���ڣ�&nbsp;���̣�&nbsp;���ӣ�&nbsp;����&nbsp;�������&nbsp;��ľ��&nbsp;��е�ȷ���ľ�Ӫ�͹�����',NULL,NULL);");
E_D("replace into `sm_wh` values('ľ','ľˮ','������','ľ���ý�&nbsp;���ɶ�����\r<BR>ľ������&nbsp;���ľ�٣�&nbsp;ǿľ�û�&nbsp;�������硣\r<BR>ľ�ܿ�����&nbsp;����ľ�ۣ�&nbsp;������ľ��&nbsp;��Ϊ���ݡ�\r<BR>ľ��ˮ����&nbsp;ˮ��ľƯ��&nbsp;ˮ����ľ��&nbsp;ľ��ˮ����','ľ���ʣ�&nbsp;����ֱ��&nbsp;����ͣ�&nbsp;��ζ�ᣬ&nbsp;��ɫ�ࡣ&nbsp;ľʢ���˳��÷���������&nbsp;�����޳���&nbsp;����ϸ�壬&nbsp;�ڼⷢ����&nbsp;��ɫ��ס�&nbsp;Ϊ���в�������֮�ģ�&nbsp;�������֮�⣬��߿�����&nbsp;������α��&nbsp;ľ˥֮��������ݳ���&nbsp;ͷ��ϡ�٣�&nbsp;�Ը�ƫ����&nbsp;���ʲ��ʡ�ľ������֮����ü�۲�����&nbsp;���ᣬ&nbsp;������&nbsp;Ϊ�˱������ġ�','���뵨��Ϊ�อ���&nbsp;������Ǻ���֫��&nbsp;�������˥��&nbsp;���˻��Σ�&nbsp;����ͷ��&nbsp;����&nbsp;��֫��&nbsp;�ؽڣ�&nbsp;������&nbsp;�ۣ�&nbsp;�񾭵ȷ���ļ�����','��ľ�ߣ�&nbsp;ϲ������&nbsp;�ɴ���ľ�ģ�&nbsp;ľ����&nbsp;�Ҿߣ�&nbsp;װ�꣬&nbsp;ľ��Ʒ��&nbsp;ֽҵ��&nbsp;��ֲ��������&nbsp;�����磬&nbsp;������Ʒ��&nbsp;���ϣ�&nbsp;ֲ������ʳƷ�Ⱦ�Ӫ����ҵ��',NULL,NULL);");
E_D("replace into `sm_wh` values('ˮ','ˮ��','����ľ','ˮ��������&nbsp;���ɳ��ӡ�\r<BR>ˮ����ľ��&nbsp;ľ��ˮ����&nbsp;ǿˮ��ľ��&nbsp;��й���ơ�\r<BR>ˮ�ܿ˻�&nbsp;���ˮ�ɣ�&nbsp;������ˮ��&nbsp;�ز�Ϩ��\r<BR>ˮ��������&nbsp;���ˮ�ǣ�&nbsp;������ˮ��&nbsp;ˮ������','ˮ���ǣ�&nbsp;���Դϣ�&nbsp;�����ƣ�&nbsp;��ζ�̣�&nbsp;��ɫ�ڡ�&nbsp;ˮ��֮������вɣ�&nbsp;������ͣ�Ϊ����˼���ǣ�&nbsp;���Ƕ�ı��&nbsp;ѧʶ���ˡ�&nbsp;̫�����˵�Ƿǣ�&nbsp;Ʈ��̰����&nbsp;�����������С��&nbsp;�����޳���&nbsp;��С���ԣ�&nbsp;���·�����','������׻�Ϊ�อ���&nbsp;������������ϵͳ��&nbsp;�������˥��&nbsp;���˻��������ף�&nbsp;�֣�&nbsp;�㣬&nbsp;ͷ��&nbsp;�Σ�&nbsp;����&nbsp;������&nbsp;������&nbsp;����&nbsp;�ӹ���&nbsp;�����ȷ���ļ�����','��ˮ�ߣ�&nbsp;ϲ������&nbsp;�ɴ��º�����&nbsp;���²�ȼҺ�壬&nbsp;��ˮ��&nbsp;���࣬&nbsp;ˮ����&nbsp;ˮ������أ�&nbsp;�䶳��&nbsp;���̣�&nbsp;ϴ�࣬&nbsp;ɨ����&nbsp;��ˮ��&nbsp;�ۿڣ�&nbsp;Ӿ�أ�&nbsp;��������&nbsp;ԡ�أ�&nbsp;��ʳ��������&nbsp;Ʈ�Σ�&nbsp;������&nbsp;������&nbsp;�����ԣ�&nbsp;�ױ仯��&nbsp;��ˮ���ʣ�&nbsp;�������ʣ�&nbsp;������ʣ�&nbsp;������ҵ��&nbsp;Ǩ�ã�&nbsp;�ؼ����ݣ�&nbsp;�˶���&nbsp;���Σ�&nbsp;���У�&nbsp;��ߣ�&nbsp;ħ����&nbsp;���ߣ�&nbsp;��̽��&nbsp;���磬������ߣ�&nbsp;�������ߣ�&nbsp;ҽ��ҵ��&nbsp;ҩ�ﾭӪ��&nbsp;ҽ����&nbsp;��ʿ��&nbsp;ռ���ȷ���ľ�Ӫ�͹�����',NULL,NULL);");
E_D("replace into `sm_wh` values('��','����','ľˮ��','������ˮ��&nbsp;������ͨ��\r<BR>��������&nbsp;������䣻&nbsp;ǿ���ý�&nbsp;�������ա�\r<BR>���ܿ�ˮ��&nbsp;ˮ��������&nbsp;ˮ��������&nbsp;��Ϊ������\r<BR>����������&nbsp;���������&nbsp;����������&nbsp;�����ޡ�','�����ţ�&nbsp;�����أ�&nbsp;�����&nbsp;��ζ�ʣ�&nbsp;��ɫ�ơ�&nbsp;��ʢ֮��Բ�����ǣ�&nbsp;ü��ľ�㣬�ڲ����ء�&nbsp;Ϊ����Т���ϣ�&nbsp;�������&nbsp;�Ա��У�&nbsp;�бع���&nbsp;����̫����ͷ�Խ�������׾������&nbsp;����þ���&nbsp;����֮����ɫ���ͣ�&nbsp;���ǵͣ�&nbsp;Ϊ�˺ݶ����壬&nbsp;�������ã���ͨ����','Ƣ��θ��Ϊ�อ���&nbsp;����������������ϵͳ��&nbsp;�������˥��&nbsp;���˻�Ƣ��&nbsp;θ��&nbsp;�ߣ�&nbsp;����&nbsp;�أ�&nbsp;�Σ�&nbsp;�ǵȷ���ļ�����','�����ߣ�&nbsp;ϲ����֮�أ�&nbsp;���ء�&nbsp;�ɴ���������&nbsp;�ز���&nbsp;ũ�壬&nbsp;������&nbsp;��ƥ��&nbsp;��װ����֯��&nbsp;ʯ�ϣ�&nbsp;ʯ�ң�&nbsp;ɽ�أ�&nbsp;ˮ�࣬&nbsp;������&nbsp;����������&nbsp;���£�&nbsp;��ɡ��&nbsp;���̣�&nbsp;��ˮ��Ʒ��&nbsp;���̣�&nbsp;�Ŷ���&nbsp;�м��ˣ�&nbsp;��ʦ��&nbsp;����&nbsp;������&nbsp;��ƣ�&nbsp;���ʣ�&nbsp;ɥҵ��&nbsp;��Ĺ��&nbsp;Ĺ�ع���&nbsp;ɮ��ȷ���ľ�Ӫ����ҵ��',NULL,NULL);");

require("../../inc/footer.php");
?>