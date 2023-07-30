<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xingzuo_shangsheng_data`;");
E_C("CREATE TABLE `xingzuo_shangsheng_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) NOT NULL COMMENT '栏目id',
  `xingge` text NOT NULL COMMENT '性格特点',
  `t` varchar(250) NOT NULL COMMENT 'seo标题',
  `k` varchar(250) NOT NULL COMMENT 'seo关键字',
  `d` text NOT NULL COMMENT 'seo描述',
  `title` varchar(250) NOT NULL COMMENT '星座名',
  `jianjie` text NOT NULL COMMENT '简介',
  `tezhi` text NOT NULL COMMENT '特质',
  `fgmd` text NOT NULL COMMENT '风格盲点',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8");
E_D("replace into `xingzuo_shangsheng_data` values('1','407','上升星座天秤座性格特点：和善迷人，散发着贵族气质，沟通能力强，能很快吸引众人的目光。 风相太阳星座遇上升天秤座，聪慧，极具感染力，但也容易流于散漫，说多做少，不够务实。 而火相太阳星座遇之，会给人随和、好相处的印象，动力强，待人处事也更加平和。 土相、水相太阳星座遇到，则会变得更为灵活，待人温和，又不失大方，既合群又有自己的独特想法。','天秤座上升星座','天秤座上升星座','天秤座上升星座','天秤座','<table style=\"width:100%;\" cellpadding=\"2\" cellspacing=\"0\" border=\"1\" bordercolor=\"#000000\">\r\n		<tbody>\r\n			<tr>\r\n				<td>\r\n					<strong>上升位于天秤座</strong><span>：文雅、公平、矛盾</span><br>\r\n				</td>\r\n				<td>\r\n					<strong>优点</strong><span>：公正，客观。</span><br>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td>\r\n					<strong>上升代表</strong><span>：灵魂，外在行为，生活态度。</span><br>\r\n				</td>\r\n				<td>\r\n					<strong>缺点</strong><span>：犹豫不决，缺乏主见。</span><br>\r\n				</td>\r\n			</tr>\r\n		</tbody>\r\n	</table>','<p>潜在特性：表达爱与美的特质，寻求和谐、分享的双向沟通。</p><br />\r\n<p><br />\r\n基本特质：上升星落在天秤座你的自我感比较薄弱，容易为了跟别人建立和谐的关系，做出很多不必要的妥协和让步。 不过你也擅长运用个人的自然魅力来说服别人，而不至于表现出强势的性格。</p><br />\r\n<p><br />\r\n具体特质：上升星位于天秤座代表你有一把追求公平客观的心秤，因此你很能从别人的观点看事情，并且具有能在第一时间缓和冲突的本领。 但是，你自己的内心却很容易在两极之间游离，并潜藏了很多对人、事、物无法调和的失望感，因此你会表现出很多不确定的态度、矛盾的心情和模棱两可的看法。 对别人的事情有很明快的判决，对自己的事情却超级犹豫不决，不敢做出重大的决定，只知道闪躲。</p>','<p>行事风格：你不但追求自我和他人的平衡关系，也追求理性和感性的平衡运作。 对于任何事，你都讲究客观与公平性，但做决定时就表现出犹豫不决、摇摆不定。</p><br />\r\n<p><br />\r\n个性盲点：过度以他人为中心，缺乏自己的主见，你要学习用判断力去决定什么时候应该妥协，什么时候应该坚持立场，正视自己真正的需要。<br />\r\n</p>');");
E_D("replace into `xingzuo_shangsheng_data` values('2','408','上升星座天蝎座性格特点：感情丰富，神秘而敏感，散发出迷人的吸引力。 水相太阳星座遇上升天蝎座，会有畏首畏尾的倾向，害怕受到伤害，与他人保持较远的距离。 不过，很能保护亲友，为了重要的人会表现出非常坚强的一面。 而火相、风相太阳星座遇上升天蝎座，领悟力会增强，待人处事更为冷静理性。 土相太阳星座遇到，性情则会更为柔和，也更成熟。','天蝎座上升星座','天蝎座上升星座','天蝎座上升星座','天蝎座','<table style=\"width:100%;\" cellpadding=\"2\" cellspacing=\"0\" border=\"1\" bordercolor=\"#000000\">\r\n		<tbody>\r\n			<tr>\r\n				<td>\r\n					<strong>上升位于天蝎座</strong><span>：怀疑、神秘、意志坚定</span><br>\r\n				</td>\r\n				<td>\r\n					<strong>优点</strong><span>：坚持，自制。</span><br>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td>\r\n					<strong>上升代表</strong><span>：灵魂，外在行为，生活态度。</span><br>\r\n				</td>\r\n				<td>\r\n					<strong>缺点</strong><span>：固执，多疑。</span><br>\r\n				</td>\r\n			</tr>\r\n		</tbody>\r\n	</table>','潜在特性：在坠落中升起，在毁灭中自我淬炼的浴火凤凰。<br />\r\n基本特质：上升星落在天蝎座的人有热情也很有想象力，但不善于表达自己真正的心情。 因此，从不热衷于使自己适应社会，也不想开放自己。 由于这种内在与外在的矛盾感，反而让人觉得你有一种神秘感。<br />\r\n具体特质：上升星位于射手座代表你有一股超凡的魅力。 你喜欢和人接近，但又因害怕会在感情上受到伤害而宁可保持距离，使得你在内心的想法总是内藏而不敢外显，这样的矛盾亦使你显得特别神秘。 你的意志力惊人的坚强，无论别人怎么企图让你做出改变，你都不会有丝毫的动摇，不过这种坚持很多时候又会让人觉得你很固执。 你害怕别人看透你的心思，于是不断的压抑、掩饰自己的情绪，说话小心翼翼，有时会让你与人相处时变得很累，也会让人觉得你不够真实。','行事风格：充实的能力和坚强的意志力，为达目的甚至不惜牺牲自己的生命。 仔细地守护与打理内在世界，以致任何内外在的风吹草动都会让你变得敏感，过分一点则会变成偏执、妄想。<br />\r\n个性盲点：其实你很能明辨善恶、有热情也很有想象力，不过你还应该多主动接触外界，给别人跟你交流互动的机会，让别人了解你的优点，免得让人以为你冷酷无情而让自己变得孤立。');");
E_D("replace into `xingzuo_shangsheng_data` values('3','401','上升星座白羊座性格特点总结：精力充沛，活泼好动，常常会有惊人之举。 土相、水相太阳星座遇上升白羊座，能很好地激发出活力，增强自信与动力，拥有生意头脑和创造力。 而火相太阳星座遇上升白羊座，热情如火，是冲锋陷阵的将军，要么不动，动则惊人，很容易成为众人瞩目的焦点。 只不过，优点也易过度发散，显得冲动、耐性不足。','白羊座上升星座，上升星座查询表，白羊座性格','白羊座上升星座，上升星座查询表，白羊座性格','白羊座上升星座，上升星座查询表，白羊座性格','白羊座','<table cellpadding=\"2\" cellspacing=\"0\" border=\"1\" bordercolor=\"#000000\" style=\"width:1083px;\"><br />\r\n	<tbody><br />\r\n		<tr><br />\r\n			<td><br />\r\n				<strong>上升位于白羊座：</strong>活力、冒险、热情<br><br />\r\n			</td><br />\r\n			<td><br />\r\n				<strong>优点：</strong>活泼，果敢，慷慨。<br><br />\r\n			</td><br />\r\n		</tr><br />\r\n		<tr><br />\r\n			<td><br />\r\n				<strong>上升代表：</strong>灵魂，外在行为，生活态度。<br><br />\r\n			</td><br />\r\n			<td><br />\r\n				<strong>缺点：</strong>冲动，缺乏耐性，不善理财。<br><br />\r\n			</td><br />\r\n		</tr><br />\r\n	</tbody><br />\r\n</table>','潜在特性：以开创与拓展为自我实现。<br /><br />\r\n基本特质：上升星落在白羊座的人非常活跃且爽快，行动敏捷，给他人的印象是非常热情，生气蓬勃。 你有积极乐观的生活态度，纵使遇到挫折或内心有点不安，也会突破难关的。<br /><br />\r\n具体特质：上升星落入白羊座说明你有充沛的精力，活泼开朗的个性，让人觉得你很容易亲近。 你喜欢冒险与挑战，就算遇到困难你也不会害怕，而是会透过实际行动去证明自己的能力非凡。 你心情不愉快的时候，不但不会寻求别人的安慰和支持，反而会对自己的低潮一笑置之，以证明自己的强悍实力和纯真热情。 你不祈求同情与帮助，而是要让自己变得自立自强，这样更能展现出自己的能力。','行事风格：行事冲动，只要有想法就要付出行动，不会考虑到后果。 做事通常都很干脆，不喜欢拖泥带水，因此办事效率也会很高。 待人不拘小节，大大方方。<br /><br />\r\n个性盲点：行事冲动以致你遭受挫折的机率很高，凡事应该三思而后行。 脾气不大好，虽然发过之后很快就会没事，但会给对方造成不良的影响，因此要多加控制自己的情绪才行。<br /><br />\r\n');");
E_D("replace into `xingzuo_shangsheng_data` values('4','402','上升星座金牛座性格特点：性情更稳定，态度更平和，待人处事谨慎有礼。 火相太阳星座遇到上升金牛座，是完美的结合，金牛的耐心与细心可以调和火相星座的冲动、莽撞，而火相星座的动力与外向感性又能让金牛更活泼，更受人欢迎。 而土相太阳星座遇上升金牛座，非常内敛，做事更加细心，给人可靠、信赖之感，但也容易拘泥于细节问题，处事不够果决。','金牛座上升星座，上升星座查询表，金牛座性格','金牛座上升星座，上升星座查询表，金牛座性格','金牛座上升星座，上升星座查询表，金牛座性格','金牛座','<table style=\"width:100%;\" cellpadding=\"2\" cellspacing=\"0\" border=\"1\" bordercolor=\"#000000\"><br />\r\n		<tbody><br />\r\n			<tr><br />\r\n				<td><br />\r\n					<span><strong>上升位于金牛座：</strong>稳重、金钱、美食</span><br><br />\r\n				</td><br />\r\n				<td><br />\r\n					<span><strong>优点：</strong>务实，决断力，温柔。</span><br><br />\r\n				</td><br />\r\n			</tr><br />\r\n			<tr><br />\r\n				<td><br />\r\n					<span><strong>上升代表：</strong>灵魂，外在行为，生活态度。</span><br><br />\r\n				</td><br />\r\n				<td><br />\r\n					<span><strong>缺点：</strong>顽固，保守，自私。</span> <br />\r\n				</td><br />\r\n			</tr><br />\r\n		</tbody><br />\r\n	</table>','潜在特性：追求物质世界的美好、丰富与拥有。<br /><br />\r\n基本特质：上升星落在金牛座的人给人的印象是淡泊宁静且稳重优雅。 对所有事都从容不迫，稳健而踏实。 喜欢稳定，任何的改变都会让你感觉不适应，对任何事情都表现出一种坚定不移的执着。<br /><br />\r\n具体特质：上升星落入金牛座的你外表看起来很稳重，但内心却潜藏着顽固的意志。 你所喜欢的是自然的节奏，而不愿凡事都显得忙忙碌碌。 不过当你一旦着手做某一件事，就不是那么容易罢手。 你很固执，讨厌别人给你的一些忠告或建议，因此你会选择顽强抵抗别人所施加的压力。 你不会轻易的投入一段感情，一旦投入了，便会想要确定彼此稳定的关系，不做改变。 对金钱和美食的需求很强烈。','行事风格：你有温暖大方的天性，因此能用轻松的态度去处理事情，从而能发散出镇静优雅的味道。 你行动谨慎，因此完成工作的进度相对会很稳定，自己的精力也不会白白浪费，而且能收到实质的成效。<br /><br />\r\n个性盲点：个性顽固，不能够适应变化，这样当遇到突发事件时，你将变得手足无措。 对于金钱也过于斤斤计较，让你变得有些小心眼，同时也会让你失去许多的快乐。');");
E_D("replace into `xingzuo_shangsheng_data` values('5','404','上升星座巨蟹座性格特点：温文儒雅，内心充满爱，给人温暖亲切之感。 火相、风相太阳星座遇上升巨蟹座，内心的情感会更丰富，有利思考，平和心境。 而火相太阳星座遇之，直觉会更加敏锐，既坚强又感性，常常会把灿烂、亲切的笑容挂在脸上，让人想要亲近。 水相太阳星座遇到则会更为内敛，柔柔的，充满温情，但依赖之心也更加强烈。','巨蟹座上升星座，上升星座查询表，巨蟹座性格','巨蟹座上升星座，上升星座查询表，巨蟹座性格','巨蟹座上升星座，上升星座查询表，巨蟹座性格','巨蟹座','<table style=\"width:100%;\" cellpadding=\"2\" cellspacing=\"0\" border=\"1\" bordercolor=\"#000000\"><br />\r\n		<tbody><br />\r\n			<tr><br />\r\n				<td><br />\r\n					<strong>上升位于巨蟹座</strong><span>：母性、家庭、爱</span><br><br />\r\n				</td><br />\r\n				<td><br />\r\n					<strong>优点</strong><span>：照顾，仁爱，勤俭。</span><br><br />\r\n				</td><br />\r\n			</tr><br />\r\n			<tr><br />\r\n				<td><br />\r\n					<strong>上升代表</strong><span>：灵魂，外在行为，生活态度。</span><br><br />\r\n				</td><br />\r\n				<td><br />\r\n					<strong>缺点</strong><span>：情绪化，斤斤计较，没有自信。</span><br><br />\r\n				</td><br />\r\n			</tr><br />\r\n		</tbody><br />\r\n	</table>','潜在特性：情感的落实，所归是毕生的经营与自觉<br /><br />\r\n基本特质：上升星落在巨蟹座的人有关怀和照顾别人的母性本能，但你的内心却很敏感且容易受到伤害。 你有点怕生，但很容易亲近，是非常亲切而勤奋的人。<br /><br />\r\n具体特质：上升星落入巨蟹座的你很懂得保护自己，你虽然会对不熟悉的人表示出关怀之意，但你绝不会说出自己内心的感觉。 除非你们已经相互了解并累积了不少的感情，你才会解除安全戒备措施，开始信任对方并分享心事。 由于你将许多的事都藏在心里，加上你又有些敏感，情绪会显得比较多变，言行举止同时也会受到情绪的影响。 感情上会很脆弱，一旦感情遭到伤害，很可能要过很久才能抚平伤痛。','行事风格：由于你自我保护意识很强，较难接受别人的意见，还容易对一些小事耿耿于怀，受到点打击，就会对自己失去信心。 喜欢把感情建立在家庭、朋友、事业上。<br /><br />\r\n个性盲点：对别人的批评很敏感，容易退缩到自我保护的硬壳之中，要勇于接受逆耳忠言，要敢于面对困难。 你很怀旧，但有些事情该忘记的还是要选择忘记，眷恋过去很可能会阻碍你前行。');");
E_D("replace into `xingzuo_shangsheng_data` values('6','405','上升星座狮子座性格特点：热情大言，慷慨豪爽，喜欢在众人面前表现才华，有王者气质。 火相太阳星座遇到上升狮子座，在为人处事上会更加爽朗，朋友遍天下，但火气太盛，得罪人而不自知。 而土相、水相太阳星座遇之，柔中带刚，感性、有自信，会变得喜欢与人交流沟通，朋友很多，不过，抱着“君子之交淡如水”的态度，一生知己不多。<br /><br />\r\n','狮子座上升星座，上升星座查询表，狮子座性格','狮子座上升星座，上升星座查询表，狮子座性格','狮子座上升星座，上升星座查询表，狮子座性格','狮子座','<table style=\"width:100%;\" cellpadding=\"2\" cellspacing=\"0\" border=\"1\" bordercolor=\"#000000\"><br />\r\n		<tbody><br />\r\n			<tr><br />\r\n				<td><br />\r\n					<strong></strong><strong>上升位于狮子座</strong><span>：领导、热情、尊严</span><br><br />\r\n				</td><br />\r\n				<td><br />\r\n					<strong>优点</strong><span>：自信，坚强，大方。</span><br><br />\r\n				</td><br />\r\n			</tr><br />\r\n			<tr><br />\r\n				<td><br />\r\n					<strong>上升代表</strong><span>：灵魂，外在行为，生活态度。</span><br><br />\r\n				</td><br />\r\n				<td><br />\r\n					<strong>缺点</strong><span>：虚荣，自我，好面子。</span><br><br />\r\n				</td><br />\r\n			</tr><br />\r\n		</tbody><br />\r\n	</table>','潜在特性：旺盛的创造力，在人生的舞台发光发热。<br /><br />\r\n基本特质：上升星落在狮子座的人有自我表现的热情，喜欢呈现出坚强、自信和庄严的样子，来成为大家注意的焦点。 对金钱的观念不够强，常常为了满足自己的欲望，而大手笔的挥金。<br /><br />\r\n具体特质：上升星落入狮子座的你有股很强的欲望，总希望大家都注视着你。 你需要发挥自己的创造本能和玩乐天分，来替各种生活聚会营造齣戏剧性的气氛。 你明朗、开放且充满自信的态度，不论走到哪里，都会给人一种华丽的印象。 讲话时动作有点夸张，充满幽默感，社交能力颇佳。 固执加上坚强的你，从不会认输，即使自己已经伤痕累累也不会在别人面前表现出脆弱的一面，而是以更为高傲的姿态面对世人。','行事风格：他人的赞美对你而言是最大的动力，他人对你的批评，便会让你感觉尊严受到伤害，不过通常你会表现出无所谓的样子，甚至拿出一些抬高自己身份的东西，来维护自己的颜面。 努力让自己成为众人的焦点，追捧的对象。<br /><br />\r\n个性盲点：你需要节制自我炫耀的行为或言论，才能好好发挥你的领导能力和组织能力，来满足你的成功欲望。 也不要想当然的把自己的想法强加到他人的身上。');");
E_D("replace into `xingzuo_shangsheng_data` values('7','406','上升星座处女座性格特点：斯文有礼，给人安静轻柔的印象，追求完美，处事细腻。 火相、风相太阳星座遇上升处女座，对待学习、工作都会更加认真、细心，待人处事也会更有原则，但又不会太固执。 而水相太阳星遇之，既体贴、照顾人，又不会太黏人，应对得体。 不过，土相太阳星座遇上升处女座，会有爱做白日梦的倾向，对人对己过于严苛，更加爱挑剔、喜欢计较。','处女座上升星座，上升星座查询表，处女座性格','处女座上升星座，上升星座查询表，处女座性格','处女座上升星座，上升星座查询表，处女座性格','处女座','<table style=\"width:100%;\" cellpadding=\"2\" cellspacing=\"0\" border=\"1\" bordercolor=\"#000000\"><br />\r\n		<tbody><br />\r\n			<tr><br />\r\n				<td><br />\r\n					<strong>上升位于处女座</strong><span>：完美、敏感、细致</span><br><br />\r\n				</td><br />\r\n				<td><br />\r\n					<strong>优点</strong><span>：心思细腻，守信，刻苦耐劳。</span><br><br />\r\n				</td><br />\r\n			</tr><br />\r\n			<tr><br />\r\n				<td><br />\r\n					<strong>上升代表</strong><span>：灵魂，外在行为，生活态度。</span><br><br />\r\n				</td><br />\r\n				<td><br />\r\n					<strong>缺点</strong><span>：神经质，洁癖，挑剔。</span><br><br />\r\n				</td><br />\r\n			</tr><br />\r\n		</tbody><br />\r\n	</table>','潜在特性：在不断的学习与自我成长中，使生命趋于更高的完美。<br /><br />\r\n基本特质：上升星落在处女座的人心思非常细腻，而且爱好干净。 每件事你都要求做到最完美，如果达不到标准，你会陷入焦虑与不安之中。<br /><br />\r\n具体特质：上升星位于处女座的你对自身和他人的要求都很高，凡事都要求做到尽善尽美。 精神灵敏度也极强，因此别人无心的一句话，一个眼神，都会对你的心情造成影响。 你希望将所学的知识分享世人，也喜欢把自己变得很忙碌，否则你会觉得生活很空虚。 你严守约定，做事也很细心，因此深受周围人的信赖。 踏实勤奋的你，一旦打算对事情展开行动，就会表现得非常有系统、有组织。','行事风格：行事勤奋、踏实，而且不管遇到任何微细的问题，皆能敏锐的察觉到，因此行动上绝对没有不完备之处。 但对他人过于挑剔，只会与人相处不悦。<br /><br />\r\n个性盲点：对自己的工作和义务很忠实，几近于神经质，不是任何事都可以做到完美的，不要总往小处看，或许你能过得更轻松愉快。');");
E_D("replace into `xingzuo_shangsheng_data` values('8','409','上升星座射手座性格特点：活泼开朗，待人亲切，身边不缺朋友;喜欢旅行，追求并享受自由自在的生活。 火相、风相太阳星座遇上升射手座，能保持快乐心境，会创造条件周游世界，让玩乐成为生活的重心。 不过，态度也会更为随意，耐性不足，做事有点毛躁。 而土相、水相太阳星座遇之，能增强信心，心胸会更为开阔，喜欢与人交流，分享想法与心情。','射手座上升星座，上升星座查询表，射手座性格','射手座上升星座，上升星座查询表，射手座性格','射手座上升星座，上升星座查询表，射手座性格','射手座','<table style=\"width:100%;\" cellpadding=\"2\" cellspacing=\"0\" border=\"1\" bordercolor=\"#000000\"><br />\r\n		<tbody><br />\r\n			<tr><br />\r\n				<td><br />\r\n					<strong>上升位于射手座</strong><span>：开放、自由、快活</span><br><br />\r\n				</td><br />\r\n				<td><br />\r\n					<strong>优点</strong><span>：乐观，诚实，精力充沛。</span><br><br />\r\n				</td><br />\r\n			</tr><br />\r\n			<tr><br />\r\n				<td><br />\r\n					<strong>上升代表</strong><span>：灵魂，外在行为，生活态度。</span><br><br />\r\n				</td><br />\r\n				<td><br />\r\n					<strong>缺点</strong><span>：缺乏责任感，自大，莽撞。</span><br><br />\r\n				</td><br />\r\n			</tr><br />\r\n		</tbody><br />\r\n	</table>','潜在特性：有着流浪汉的血液，向往更遥远的国度，追寻至高的真理。 是身、心双修的旅行者，永远在出发。<br /><br />\r\n<br /><br />\r\n基本特质：上升星落在射手座的人很开放外向，讨厌矫情做作的行为姿态。 旺盛的行动力和好奇心，让你一刻也停不下来。 你热爱自由，难免会放纵自我，很容易变得没有责任感，而且心智也显得不够成熟。<br /><br />\r\n具体特质：上升星位于射手座说明你是一个热爱自由的人。 你喜欢随意过自己的生活，不想让自己的行为方式受到别人的强制规定，或是受到环境的层层限制。 你能用乐观和自信的态度来面对人生挑战，并且想要确定自己的人生目标来全力以赴。 在与人相处时，常常表现出开朗与天真，特别是犯下错误时，总能用羞赧加无知的微笑化解别人对你的责难，待人很真诚，也很热心，因此也很受到周围人的欢迎。','行事风格：行事太过随意，说话也十分坦白，有时会毫不婉转地说出一些轻率的评论，而伤到别人的心。 有了目标就不畏艰险，敢做敢当，就算失败也能乐观的面对。<br /><br />\r\n个性盲点：个性太过随意，要适度培养自己的责任感，才不会一直逃避情感的承诺。 说话做事都应多思考一下，以免给自己或他人造成不必要的伤害。');");
E_D("replace into `xingzuo_shangsheng_data` values('9','410','上升星座摩羯座性格特点：谨慎踏实，凡事有计划，很有耐性，工作能力增强。 火相、风相太阳星座遇上升摩羯座，摩羯的务实态度可以调和火相、风相星座的感性冲动，工作更细心，有机会在领导岗位发挥才能。 而水相太阳星座遇之，更为稳定成熟，行事也较果决，与人保持距离，不喜欢凑热闹。 土相太阳星座遇到，则会追求完美，过于严肃拘谨。','摩羯座上升星座，上升星座查询表，摩羯座性格','摩羯座上升星座，上升星座查询表，摩羯座性格','摩羯座上升星座，上升星座查询表，摩羯座性格','摩羯座','<table style=\"width:100%;\" cellpadding=\"2\" cellspacing=\"0\" border=\"1\" bordercolor=\"#000000\"><br />\r\n		<tbody><br />\r\n			<tr><br />\r\n				<td><br />\r\n					<strong>上升位于摩羯座</strong><span>：保守、勤奋、严肃</span><br><br />\r\n				</td><br />\r\n				<td><br />\r\n					<strong>优点：</strong><span>有责任感、坚忍不拔、冷静。</span><br><br />\r\n				</td><br />\r\n			</tr><br />\r\n			<tr><br />\r\n				<td><br />\r\n					<strong>上升代表</strong><span>：灵魂，外在行为，生活态度。</span><br><br />\r\n				</td><br />\r\n				<td><br />\r\n					<strong>缺点：</strong><span>悲观、忧郁、缺乏自信。</span><br><br />\r\n				</td><br />\r\n			</tr><br />\r\n		</tbody><br />\r\n	</table>','潜在特性：意志坚定，不畏困难，以承担为自我测视的攀岩专家。<br /><br />\r\n基本特质：上升星落在摩羯座的人有冷静的判断力和坚忍不拔的个性，随着年龄的增长，你敦厚高尚的品格也会显现出来。 你有野心但对自己缺乏信心，所以你有很多的梦想，最终都会因为半途而废而未能实现。 总觉得自己与别人有差距，因此也不愿与人接近。<br /><br />\r\n具体特质：上升星位于摩羯座说明你是一个严肃、保守的人。 你怀有极大的梦想，却往往被现实或社会的规则所束缚，怀疑自己是否有能力去完成这些目标。 你是一个勤勉且有责任感的人，一旦接受了别人的委托，便会奋力的去帮他人完成交待的任务，但由于你的不自信，在完成的过程中，容易让自己背负较大的压力。 面对感情又很保守，很难敞开自己的心扉去接受别人的好意，更无法主动表达自己的感情。','行事风格：你遵守纪律、按部就班，做事十分踏实又很有责任感是值得信任的对象。 但你不够自信，喜欢低估自己压抑自己，很难以轻松的心态去享受做事情时的快乐。<br /><br />\r\n个性盲点：摆脱严肃的面孔，发挥出自己的幽默感来笑看人生，你的生活将会变得轻松许多。 不要因为挫折轻易放弃自己的梦想，因为如果你够勤奋，坚持到底，梦想终有实现的那一天。');");
E_D("replace into `xingzuo_shangsheng_data` values('10','411','上升星座水瓶座性格特点：聪慧，好奇心强，思维活跃，常有不错的创意表现。 风相太阳星座遇上升水瓶座，特别能活跃气氛，乐于助人，说话很有影响力，但也容易说过火，显得浮夸。 而火相太阳星座遇上升水瓶座，喜欢热闹，待人热情，会主动创造丰富多彩的生活，只是偶尔说话太冲，易得罪人。 土相、水相太阳星座遇到，则会更为活泼，能更好地融入到团体中。','水瓶座上升星座，上升星座查询表，水瓶座性格','水瓶座上升星座，上升星座查询表，水瓶座性格','水瓶座上升星座，上升星座查询表，水瓶座性格','水瓶座','<table style=\"width:100%;\" cellpadding=\"2\" cellspacing=\"0\" border=\"1\" bordercolor=\"#000000\"><br />\r\n		<tbody><br />\r\n			<tr><br />\r\n				<td><br />\r\n					<strong>上升位于水瓶座</strong><span>：自我、智慧、冷漠</span><br><br />\r\n				</td><br />\r\n				<td><br />\r\n					<strong>优点</strong><span>：创新，独立，理性。</span><br><br />\r\n				</td><br />\r\n			</tr><br />\r\n			<tr><br />\r\n				<td><br />\r\n					<strong>上升代表</strong><span>：灵魂，外在行为，生活态度。</span><br><br />\r\n				</td><br />\r\n				<td><br />\r\n					<strong>缺点</strong><span>：自私，叛逆，自以为是。</span><br><br />\r\n				</td><br />\r\n			</tr><br />\r\n		</tbody><br />\r\n	</table>','潜在特性：反传统，挑战既定模式，推动人权，开创新纪元。<br /><br />\r\n基本特质：上升星落在水瓶座的人有冷静的思考能力，能够控制自己的情感，对任何人和蔼可亲，谦虚有礼。 你不喜欢随波逐流，而是要走自己与众不同的道路来，也不愿受他人的指导与灌输，有时难免让人觉得你自大、古怪、漠然。<br /><br />\r\n具体特质：上升星位于水瓶座说明你有自己独特的思维模式，富有求新求变的改革倾向。 你乐于与他人交换彼此的观点来丰富自己的思想境界，但不愿过多的投入自己的感情，比起一对一的亲密关系，你更想要朋友间那种亲密无间的友谊。 你也有人道主义的情怀，很容易同情弱势群体，并且希望大家能以平等互惠的立场来交往，而不要有上下之分，所以你讨厌有人指挥你、束缚你，一切都要由自己做主才行。','行事风格：你独立自主、求新求变，不喜欢支配人或受人支配，喜欢用自己独到的方法去处理问题，有时候难免会让人觉得你思想与作风有些古怪，但你并不会在意外人的眼光，继续做自己想做的事情。<br /><br />\r\n个性盲点：过分要求与众不同会是一件相当辛苦的事情，其实旧的事物和他人的建议很多时候都会有其可取之处，在创新的同时不妨与传统的事物相结合，将会有新的发现与收获。');");
E_D("replace into `xingzuo_shangsheng_data` values('11','412','','','','','双鱼座','','','');");
E_D("replace into `xingzuo_shangsheng_data` values('12','403','上升星座双子座性格特点：对新奇事物会表现出强烈的好奇心，反应灵敏，待人更为随和。 虽然火相太阳星座显得浮躁、冲动易怒，但遇上升双子座处事会更为圆融，更能替他人着想，给人活泼好相处的印象。 而与土相、水相太阳星座相遇，感性与理性兼容，待人亲切，受人欢迎。 不过，风相太阳星座遇之，虽然会更加风趣幽默，但也易变得夸夸其谈。','双子座上升星座，上升星座查询表，双子座性格','双子座上升星座，上升星座查询表，双子座性格','双子座上升星座，上升星座查询表，双子座性格','双子座','<table style=\"width:100%;\" cellpadding=\"2\" cellspacing=\"0\" border=\"1\" bordercolor=\"#000000\"><br />\r\n		<tbody><br />\r\n			<tr><br />\r\n				<td><br />\r\n					<span><strong>上升位于双子座</strong>：好奇心、变化</span><br><br />\r\n				</td><br />\r\n				<td><br />\r\n					<span><strong>优点</strong>：伶牙俐齿，反应快。</span><br><br />\r\n				</td><br />\r\n			</tr><br />\r\n			<tr><br />\r\n				<td><br />\r\n					<span><strong>上升代表：灵魂</strong>，外在行为，生活态度。</span><br><br />\r\n				</td><br />\r\n				<td><br />\r\n					<span><strong>缺点</strong>：喜新厌旧，不够专心。</span> <br />\r\n				</td><br />\r\n			</tr><br />\r\n		</tbody><br />\r\n	</table>','潜在特性：以知识的获得与传递为自我期许。<br /><br />\r\n基本特质：上升星落在双子座的人有很好的口才，头脑也很灵活，能对事情做出迅速的反应。 好奇心很强，能够快速吸收新的内容，不过对于新鲜的事物通常你也只能保持三分钟的热度。<br /><br />\r\n具体特质：上升星落入双子座的你有很强的好奇心，喜欢接触各种人事物，以便得到新鲜的刺激经验，并且能够迅速吸收新知，用自己超好的口才将各类讯息组织起来去说服他人，适合从事大众传播方面的工作。 你的思维很活跃，可以说是转个不停，善于和人家聊各种话题，并且经常会冒出一些无厘头或有创意的点子。 但是，你的思考可能只有新意，却欠缺深度。 无论你的年龄有多大，你都始终保持一颗年轻的心。','行事风格：头脑动得很快，能迅速的察觉对方的想法和心情，反应也不错。 你很难保持沉默，也不太有耐心倾听别人慢慢说话。 做事很得要领，是敏捷而且非常能干的人，但却经常不假思索，或多或少会给人一种不沉着的印象。<br /><br />\r\n个性盲点：虽然每一样东西你都有兴趣，并且也愿意去学，也有能力学好，不过你都不肯深入，最终无一精通。 要定下心来，坚持下去，必能在某一方面有所建树。');");

require("../../inc/footer.php");
?>