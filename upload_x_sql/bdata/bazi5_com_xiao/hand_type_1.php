<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hand_type`;");
E_C("CREATE TABLE `hand_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `typename` varchar(100) NOT NULL COMMENT '分类名称',
  `typecode` varchar(100) NOT NULL COMMENT '分类代码',
  `shownum` int(10) NOT NULL COMMENT '显示数量',
  `ordby` varchar(100) NOT NULL COMMENT '排序方式',
  `api_mark` enum('noapi','onlyapi','both') NOT NULL DEFAULT 'noapi' COMMENT '独立API标记',
  `cid` varchar(11) NOT NULL COMMENT '采集分类ID',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=196 DEFAULT CHARSET=utf8");
E_D("replace into `hand_type` values('179','周公解梦_搜索下方热词','zgjm_hot_tag','7','uptime DESC','noapi','0');");
E_D("replace into `hand_type` values('193','公用_右侧_算命大全','public_right_smdq','18','uptime DESC','noapi','0');");
E_D("replace into `hand_type` values('194','公用_右侧_应用推荐','public_right_yingyong','6','uptime DESC','noapi','0');");
E_D("replace into `hand_type` values('195','黄道吉日_底下连接','hdjr_bot_link','10','uptime DESC','noapi','0');");

require("../../inc/footer.php");
?>