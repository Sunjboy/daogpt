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
E_D("replace into `sm_zhiwen` values('1','xxxxx','温顺有能力，性格朴素，大方正直，有思想泼动，但能讲信用，保持威信。');");
E_D("replace into `sm_zhiwen` values('2','xxxxo','有毅力，机智灵敏。 但狡猾，好色，一般是贱人。');");
E_D("replace into `sm_zhiwen` values('3','xxxox','手巧聪明，但沉着性差，多感情。');");
E_D("replace into `sm_zhiwen` values('4','xxxoo','嘴甜，感情为重，活泼，后果不佳。');");
E_D("replace into `sm_zhiwen` values('5','xxoxx','较稳重，说话太多，但办事认真。 固执己见，往往多折。');");
E_D("replace into `sm_zhiwen` values('6','xxoxo','生性粗鲁，好大吹大擂，性情狂热。');");
E_D("replace into `sm_zhiwen` values('7','xxoox','有钻研的性格，多愁善感。');");
E_D("replace into `sm_zhiwen` values('8','xxooo','感情丰富，有计划，有活泼能力，办事有思考。');");
E_D("replace into `sm_zhiwen` values('9','xoxxx','表面是温顺，其实骄傲，但有运气。');");
E_D("replace into `sm_zhiwen` values('10','xoxxo','冷酷无情，有活动能力，但外表热情。');");
E_D("replace into `sm_zhiwen` values('11','xoxox','有计划，通情达理，有活动能力，办事彻底。');");
E_D("replace into `sm_zhiwen` values('12','xoxoo','稳重，有活动能力，官气十足，激于色情。');");
E_D("replace into `sm_zhiwen` values('13','xooxx','待人接物热情，却有神精质，办事欠思考。');");
E_D("replace into `sm_zhiwen` values('14','xooxo','爱好文艺，温顺大方，办事认真，但遇事忧豫不决。爱好文艺，温顺大方，办事认真，但遇事忧豫不决。');");
E_D("replace into `sm_zhiwen` values('15','xooox','感情强烈活波，不甘落后，有自尊心，能干，但不协调周全。');");
E_D("replace into `sm_zhiwen` values('16','xoooo','能说能干，性情稳重，自尊心强。');");
E_D("replace into `sm_zhiwen` values('17','oxxxx','性情温和，善于诱人，为人热情，固执己见。');");
E_D("replace into `sm_zhiwen` values('18','oxxxo','诡辩，吹牛求疵，自已为是，不听旁人劝告。');");
E_D("replace into `sm_zhiwen` values('19','oxxox','易被利用，理智顽固，感情误事，结果不怎么好。');");
E_D("replace into `sm_zhiwen` values('20','oxxoo','接受能力强，好动感情，宁愿助人为乐。');");
E_D("replace into `sm_zhiwen` values('21','oxoxx','办事漂亮，却心情不定，经不起色情考验。');");
E_D("replace into `sm_zhiwen` values('22','oxoxo','感情丰富，有活动能力，感情用事，顾自己。');");
E_D("replace into `sm_zhiwen` values('23','oxoox','感情好动，肯钻研，才智过人，通情达理。');");
E_D("replace into `sm_zhiwen` values('24','oxooo','脑忆力强，个性强，运气好。');");
E_D("replace into `sm_zhiwen` values('25','ooxxx','求知欲望强，办事协调，文雅好奇。');");
E_D("replace into `sm_zhiwen` values('26','ooxxo','自私有信念，不听人劝告，善感，多挫折。');");
E_D("replace into `sm_zhiwen` values('27','ooxox','日日多友，感情深厚，性情开郎。');");
E_D("replace into `sm_zhiwen` values('28','ooxoo','手巧，有活动能力，爱清洁，表面悠闲，实际内心复杂。');");
E_D("replace into `sm_zhiwen` values('29','oooxx','信念坚强，好外表，但实际能力差，没毅力，办事虎头蛇尾，不能果断，不彻底。');");
E_D("replace into `sm_zhiwen` values('30','oooxo','社会经验丰富，性格开郎，灵活，有活动能力。');");
E_D("replace into `sm_zhiwen` values('31','oooox','稳重有主张，早年生活奔波，遇难不死，晚年好。');");
E_D("replace into `sm_zhiwen` values('32','ooooo','有信念，办事积极认真努力，能创造，讲究发明，经常体壮，不听人意见。。');");

require("../../inc/footer.php");
?>