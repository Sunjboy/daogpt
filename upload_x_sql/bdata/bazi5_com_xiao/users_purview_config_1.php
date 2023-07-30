<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `users_purview_config`;");
E_C("CREATE TABLE `users_purview_config` (
  `name` char(50) NOT NULL COMMENT '配置名',
  `config` text NOT NULL COMMENT '配置内容',
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='应用权限配置（原来存放在文件，考虑不适合分布式，所以改存数据库）'");
E_D("replace into `users_purview_config` values('ip_limit','127.0.0.1\r\n10.0.0.*\r\n192.168.1.*\r\n119.145.100.138');");
E_D("replace into `users_purview_config` values('purview_xml','<pools:admin name=\"管理员\" allowpool=\"member\" auttype=\"session\" login_control=\"?ct=index&ac=login\">\r\n\r\n    <!-- //公开的控制器，不需登录就能访问 -->\r\n    <ctl:public>index-login,index-loginout</ctl:public>\r\n\r\n    <!-- //保护的控制器，当前池会员登录后都能访问 -->\r\n    <ctl:protected>index-index,index-adminmsg,users-mypurview</ctl:protected>\r\n\r\n    <!-- //私有控制器，只有特定组才能访问 -->\r\n    <ctl:private>\r\n        <admin name=\"管理员\">*</admin>\r\n        <test name=\"测试组\">index-index,users-iplimit,users-editpwd,users-log,users-login_log</test>\r\n    </ctl:private>\r\n\r\n</pools:admin>\r\n\r\n<pools:member name=\"网站会员\" allowpool=\"\" auttype=\"cookie\" login_control=\"?ct=index&ac=login\">\r\n\r\n    <!-- //公开的控制器，不需登录就能访问 -->\r\n    <ctl:public>index-login,index-loginout,index-register,index-get_password,index-validate_image,index-test_user_name,index-test_email</ctl:public>\r\n\r\n    <!-- //保护的控制器，当前池会员登录后都能访问 -->\r\n    <ctl:protected>index-index</ctl:protected>\r\n\r\n    <!-- //私有控制器，只有特定组才能访问 -->\r\n    <ctl:private>\r\n        <normal name=\"普通会员\">*</normal>\r\n    </ctl:private>\r\n\r\n</pools:member>\r\n\r\n');");

require("../../inc/footer.php");
?>