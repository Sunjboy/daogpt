<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gb2312');
E_D("DROP TABLE IF EXISTS `sm_sxgx`;");
E_C("CREATE TABLE `sm_sxgx` (
  `sxgx` longtext,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sx` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=gb2312");
E_D("replace into `sm_sxgx` values('①意志坚定，忠实可靠。\r<BR>②正义、公平、敏捷。\r<BR>③聪明、有见识，有条理。\r<BR>④受人所用，能听话吃苦，注重现实。\r<BR>弱点：有时急躁，有盲目倾向，顽固，不计后果，防止被人因小利而亡大义。','1','狗');");
E_D("replace into `sm_sxgx` values('①有进取心，喜欢竞争。\r<BR>②多才多艺，多面手。\r<BR>③略有虚荣心，生活浪漫，不受拘束。\r<BR>④能与人融洽相处，善于应酬。\r<BR>弱点：有嫉妒心，轻浮散漫，性情多变，约缺诚信。','2','猴');");
E_D("replace into `sm_sxgx` values('①有朝气，有雄心壮志。\r<BR>②敢想敢干，勇于开拓。\r<BR>③热情大方，顽强自信，刚愎自用。\r<BR>④有正义感，乐于助人。\r<BR>弱点：易动感情，自以为是，稍微有点孤傲任性。','3','虎');");
E_D("replace into `sm_sxgx` values('①精力充沛，善于言谈。\r<BR>②调查研究，讲究效率。\r<BR>③果断、敏锐、好表现自己。\r<BR>④勇往直前，心强好胜，总想一鸣惊人。\r<BR>弱点：脾气古怪，爱争善辩，固执已见，稍微自私。','4','鸡');");
E_D("replace into `sm_sxgx` values('①勇往直前，有旺盛的进取心。\r<BR>②专心致志，果断肯干。\r<BR>③孝顺，慷慨，善于理财。\r<BR>④聪明，有才能，气度高。\r<BR>弱点：有时容易急躁，盛气凌人，主观固执，约显争强好胜，不服输。','5','龙');");
E_D("replace into `sm_sxgx` values('①精力旺盛，刚毅果断。\r<BR>②善恶分明，耿直热情。\r<BR>③能言善辩，不怕困难，勇往直前。\r<BR>弱点；欠缺冷静有时急躁，个性约为倔强。','6','马');");
E_D("replace into `sm_sxgx` values('①勤奋努力，有强烈的进取心。\r<BR>②忠厚老实，务实，责任心强，有耐力。\r<BR>③有正义感，爱打抱不平。\r<BR>④勤俭持家，稳定。\r<BR>弱点是：稍微固执已见，缺乏通融；有时钻“牛角尖”，主观独断。','7','牛');");
E_D("replace into `sm_sxgx` values('①专心致志，认真负责。\r<BR>②心灵手巧，思路敏捷。\r<BR>③精力充沛，随和开朗。\r<BR>④表面沉着，有时口快。\r<BR>弱点：有时动摇不定，心胸狭窄，有时钻“牛角尖”，性情多疑，不太信任他人。','8','蛇');");
E_D("replace into `sm_sxgx` values('①做事态度积极，勤奋努力，头脑机智手脚灵巧。\r<BR>②待人和蔼，有自我约束力，遇事能替人着想。\r<BR>③适应性强，善于结交各方面的朋友。\r<BR>④多情善感，性格稍微内向，行动上活泼，待人热情。\r<BR>⑤观察细致，思维方式有条理。\r<BR>弱点是：稍微胆小怕事，多疑保守，个别问题上约显目光短浅，认识深度不够。','9','鼠');");
E_D("replace into `sm_sxgx` values('①温柔、善良、乐观，感情细腻。\r<BR>②精明灵活，体谅他人。\r<BR>③气质高雅，思维细腻。\r<BR>④能忍耐谦让，不好争执。\r<BR>弱点：约有虚荣心，性情有时候不稳定，容易急躁，满足于现状的时候多。','10','兔');");
E_D("replace into `sm_sxgx` values('①研究欲强，富有创造性。\r<BR>②善良、宽容、顺从。\r<BR>③有耐心，不惹是非。适应环境快。\r<BR>弱点：易动感情，主观性差，随波逐流优柔寡断。','11','羊');");
E_D("replace into `sm_sxgx` values('①真挚、诚实、有同情心。\r<BR>②精力旺盛，待人诚实。\r<BR>③专心致志，凡事热心。\r<BR>④信任别人，开朗乐观。\r<BR>弱点：易动感情，固执保守，目光短浅，有时脾气不稳。','12','猪');");

require("../../inc/footer.php");
?>