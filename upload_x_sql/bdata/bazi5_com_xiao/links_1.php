<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `links`;");
E_C("CREATE TABLE `links` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL DEFAULT '' COMMENT '链接显示名称',
  `tooltip` varchar(512) DEFAULT '' COMMENT 'title属性值',
  `url` varchar(768) NOT NULL DEFAULT '' COMMENT '跳转地址',
  `category` int(11) NOT NULL DEFAULT '1' COMMENT '类别',
  `displayorder` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '显示顺序',
  `description` varchar(768) DEFAULT '' COMMENT '描述',
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '状态',
  `add_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8");
E_D("replace into `links` values('3','第一星座','','http://www.d1xz.net/','4','0','','1','2015-09-14 19:07:53');");
E_D("replace into `links` values('4','美国神婆星座网','','http://www.meiguoshenpo.com/','4','0','','1','2015-09-24 11:33:44');");
E_D("replace into `links` values('5','腾讯星座','','http://astro.fashion.qq.com/index.shtml','4','0','','1','2015-11-27 16:03:35');");
E_D("replace into `links` values('6','新浪星座','','http://astro.eladies.sina.com.cn/','4','0','','1','2015-11-27 17:10:05');");
E_D("replace into `links` values('7','搜狐星座频道','','http://astro.women.sohu.com/','4','0','','1','2015-12-30 16:54:13');");
E_D("replace into `links` values('8','星座屋','','http://www.xzw.com/','4','0','','1','2015-12-30 16:54:34');");
E_D("replace into `links` values('9','第一星座网','','http://www.d1xz.net/astro/','4','0','','1','2015-12-30 16:55:24');");
E_D("replace into `links` values('10','网易星座','','http://lady.163.com/astro/','4','0','','1','2015-12-30 17:10:45');");
E_D("replace into `links` values('11','紫葳科技','','http://www.go108.com.cn/','4','0','','1','2015-12-30 17:11:58');");
E_D("replace into `links` values('12','星盘网','','http://www.xingpan.com/','4','0','','1','2016-08-02 11:17:11');");
E_D("replace into `links` values('13','星座乐','','http://www.1212.com/','4','0','','1','2016-09-07 11:45:10');");

require("../../inc/footer.php");
?>