<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ad`;");
E_C("CREATE TABLE `ad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL COMMENT '标题',
  `content` text NOT NULL COMMENT '内容',
  `endtime` int(10) NOT NULL COMMENT '结束时间',
  `titlere` varchar(128) NOT NULL COMMENT '替换后标题',
  `reserve` text NOT NULL COMMENT '结束后内容',
  `type` enum('index','mini','web','pc','online','common','other') NOT NULL DEFAULT 'other' COMMENT '所属页面',
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `endtime` (`endtime`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8 COMMENT='广告投放表'");
E_D("replace into `ad` values('50','内容页_300x250','MzAw','0','','','common');");
E_D("replace into `ad` values('51','星座_960x90','OTYw','0','','','common');");
E_D("replace into `ad` values('52','右侧250x250','MjUw','0','','','common');");
E_D("replace into `ad` values('53','头部_728x90','PGRpdiBjbGFzcz0idG9wTWVudSI+DQogICAgPHVsPg0KICAgICAgICA8bGk+DQogICAgICAgICAgICA8YSBocmVmPSIvc3Vhbm1pbmcvc2Niei8iIHRpdGxlPSLlhavlrZfmtYvnrpciPg0KICAgICAgICAgICAgICAgIDxzcGFuPjxpbWcgc3JjPSIvc3RhdGljL2JhemkvaW1nL2ljb24xLnBuZyIgd2lkdGg9IjUwIiBoZWlnaHQ9IjUwIiBhbHQ9IuWFq+Wtl+a1i+eulyI+PC9zcGFuPua1i+eulw0KICAgICAgICAgICAgPC9hPg0KICAgICAgICA8L2xpPg0KICAgICAgICA8bGk+DQogICAgICAgICAgICA8YSBocmVmPSIvcGFpcGFuL3ppd2VpLyIgdGl0bGU9Iue0q+iWh+aOkuebmCI+DQogICAgICAgICAgICAgICAgPHNwYW4+PGltZyBzcmM9Ii9zdGF0aWMvYmF6aS9pbWcvaWNvbjIucG5nIiB3aWR0aD0iNTAiIGhlaWdodD0iNTAiIGFsdD0i57Sr6JaH5o6S55uYIj48L3NwYW4+5o6S55uYDQogICAgICAgICAgICA8L2E+DQogICAgICAgIDwvbGk+DQogICAgICAgIDxsaT4NCiAgICAgICAgICAgIDxhIGhyZWY9Ii94aW5nenVvLyIgdGl0bGU9IuaYn+W6pyI+DQogICAgICAgICAgICAgICAgPHNwYW4+PGltZyBzcmM9Ii9zdGF0aWMvYmF6aS9pbWcvaWNvbjMucG5nIiB3aWR0aD0iNTAiIGhlaWdodD0iNTAiIGFsdD0i5pif5bqnIj48L3NwYW4+5pif5bqnDQogICAgICAgICAgICA8L2E+DQogICAgICAgIDwvbGk+DQogICAgICAgIDxsaT4NCiAgICAgICAgICAgIDxhIGhyZWY9Ii96Z2ptLyIgdGl0bGU9IuWRqOWFrOino+aipiI+DQogICAgICAgICAgICAgICAgPHNwYW4+PGltZyBzcmM9Ii9zdGF0aWMvYmF6aS9pbWcvaWNvbjQucG5nIiB3aWR0aD0iNTAiIGhlaWdodD0iNTAiIGFsdD0i5ZGo5YWs6Kej5qKmIj48L3NwYW4+6Kej5qKmDQogICAgICAgICAgICA8L2E+DQogICAgICAgIDwvbGk+DQogICAgICAgIDxsaT4NCiAgICAgICAgICAgIDxhIGhyZWY9Ii9jaG91cWlhbi8iIHRpdGxlPSLpu4TlpKfku5nnrpfljaYiPg0KICAgICAgICAgICAgICAgIDxzcGFuPjxpbWcgc3JjPSIvc3RhdGljL2JhemkvaW1nL2ljb241LnBuZyIgd2lkdGg9IjUwIiBoZWlnaHQ9IjUwIiBhbHQ9Ium7hOWkp+S7meeul+WNpiI+PC9zcGFuPueul+WNpg0KICAgICAgICAgICAgPC9hPg0KICAgICAgICA8L2xpPg0KICAgICAgICA8bGk+DQogICAgICAgICAgICA8YSBocmVmPSIveGluZ21pbmcveG1wZC8iIHRpdGxlPSLlp5PlkI3phY3lr7kiPg0KICAgICAgICAgICAgICAgIDxzcGFuPjxpbWcgc3JjPSIvc3RhdGljL2JhemkvaW1nL2ljb242LnBuZyIgd2lkdGg9IjUwIiBoZWlnaHQ9IjUwIiBhbHQ9IuWnk+WQjemFjeWvuSI+PC9zcGFuPumFjeWvuQ0KICAgICAgICAgICAgPC9hPg0KICAgICAgICA8L2xpPg0KICAgICAgICA8bGk+DQogICAgICAgICAgICA8YSBocmVmPSIveGluZ21pbmcvcWltaW5nLyIgdGl0bGU9IuWcqOe6v+i1t+WQjSI+DQogICAgICAgICAgICAgICAgPHNwYW4+PGltZyBzcmM9Ii9zdGF0aWMvYmF6aS9pbWcvaWNvbjcucG5nIiB3aWR0aD0iNTAiIGhlaWdodD0iNTAiIGFsdD0i5Zyo57q/6LW35ZCNIj48L3NwYW4+6LW35ZCNDQogICAgICAgICAgICA8L2E+DQogICAgICAgIDwvbGk+DQogICAgPC91bD4NCjwvZGl2Pg0K','0','','','common');");

require("../../inc/footer.php");
?>