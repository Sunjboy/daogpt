<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gb2312');
E_D("DROP TABLE IF EXISTS `sm_bihua`;");
E_C("CREATE TABLE `sm_bihua` (
  `num` varchar(50) DEFAULT NULL,
  `hanzi` text CHARACTER SET utf8
) ENGINE=MyISAM DEFAULT CHARSET=gb2312");
E_D("replace into `sm_bihua` values('1','Ò»ÒÒ');");
E_D("replace into `sm_bihua` values('2','¶þ¶¡ÄËÈëÁËÈËµ¶µóÁ¦Ø°²·ÓÖ');");
E_D("replace into `sm_bihua` values('3','²Å²æ´¨´çÇ§ÈÐÈýÉÏÊ¿Ï¦Ð¡¸É¹¤¹­¼°½í¾ÃØ¥ÆòÒÑ·²ÏÂ×Ó´óÅ®ËÈçÛß®ÕÉÖ®¼ºÉ½ÍÁÍèØ£Ñ¾Ò²ÓÚ');");
E_D("replace into `sm_bihua` values('4','³ð·¦¸êÈÊÈÔÈßÉÙÉýÊ²ÊÏÊÖËÄÙâÐÄ×¦±åØ¤¹«¹´½é½ñ½ï¿º¿×Ä¾Å£Ç·È®ÑÀÔªÔÂÔÈ°Í±È²»´õ·´·½·Ö·ò¸¸»¥»§»¯»ÃÃ«Æ¥Æ¬ê·ÈÉØ¦Ë®ÎÄÎãÎð³ß³óµ¤Øê¶·»ð¾®ÄÚÈÕÌ«ÌìÍÍÎçØ³Ö§Ö¹ÖÐÇÐÍõÒüÒýÓÈÓÑÓèÔ»ÔÊ');");
E_D("replace into `sm_bihua` values('5','²á³â³ö¿¯ÇªÇÒØðÉêÉúÊ§Ê¯Ê·Ê¸ÊÀÊËÊÐÊ¾Ë¦Ë¾ÏÉÕ¼ÕýÖ÷±¾¸Ê¹¦¹Å¹Ï»Ü¼Ó¼×¾ä¾Þ¿¨¿ÉÃ®ÇÉÇðÇôÈ¥ÍâÎ´ÎåÓñÔý°È°×°ë°ü±±±Ø²¼´Ò¸¥¸¶º»ºÌºëºõÃ¬ÃñÃóÄ©Ä¸Ä¿Ø§Æ¤Æ½ØíÐÖÐþ±û´úµ©¶£¶¬Á¢ÁîÁíÄáÅ«È½ËûËüÌïÕÌÕÙ×óÍßÎìÑëÒÔÓÀÓÃÓÉÓÒÓ××Ð');");
E_D("replace into `sm_bihua` values('6','³¼Ø©â¶´Ë´Î´æ¶ª¶øÀôÁÐÈÎÈÓÈçÉ«Ê½ÊØËÂÙíÍ¹Î÷ÎüÏÈØ¶Ñ®Ò·ÔÙÔÚÔçß¸ÖÝÖÛ×Ö¶ä¸÷¹²¼ªàî¼þ½»Øø¿¼¿ïÆóÇúÈÖÐñÑöí²ÖìÖñ°Ç°Ù±ù²¢ÛÊ·¥·«·¸·Âåú·Ýó¾·üº¥ºÃºÏ»ØÃ×ôéÃûÄ²Æ¹ÊÕÍ¡Î£ÏòÐÌÐÐÐ×ÐÝÑªÖ­³Ô³Ú´ò¶à¶úØ¨¹â¼â½³Ëý¾öÀÏÁùàïÄêÅÒÈ«Í¬ÍýÕ¬Õ×Ö¼ÖÁÖÙ×Ô°²³äµØôÞ»Ò»øá§ËÆÍÂÎéÐçØóÑòÒÁÒÂÒÄÒàÒÙÒòÓÐÓîÓðÛÚÓ¡');");
E_D("replace into `sm_bihua` values('7','²íÍ¢ÑÓ³µ³É³à´®´Ñ´µ¶ÒÅÐÆßÈÌÉ¾ÙÜÉìÉíÊøË±Ë½ËÅËÎÎÇÐÁÐãÐòÑ²ÓÏÔíØùÖú×±×³×Î×ß×ô×÷×ø²Äá¯è¾´²´å¶ÅÙ¤¸Ä¸Ë¸Ü¸æ¸ü¹¥¹À¹ÈºµºÎ¼É¼Ð¼û½Ç½Ù¾¿¾Ö¾ý¿Ë¿ÛÀ§Äãè½ÆúÇ¼È´É¼ÎÒÎâÎáÐÓÑÔÒ÷ÕÈ°É°é±´?±ð±ø²®²½³Ø´ô·ÁáÝ·ð·ñæÚ¸¦º¬º±º¹ºàºêàñ»¡¼³¼´½­½ä¿öÀäÃ¦Ã¿Ãîæ¤ÈêÉÇÍüÎ²Ï«Ï£Ð¢ÐÎÑ´³Êµ«µÍµÜµèµé¶¹¶Ê¶Úêº¾ÄÀÎÀîÀïÀûÁ¼ÁßÁæÂÀÃâÄÐØúÅªÅ¬Çóìþìýî®Ù¡Í®ÍÌÍÐÙ¢Í×Î×Ñý×¡×Ææ¢×ãÛÐ³½·»¾ù¿²ÄµáªÍºÍêÎ»Ò±ÒÓÒÛÒØð®ØüÓÓÓàÖ·');");
E_D("replace into `sm_bihua` values('8','ËÉ?²ý³­³¶³À³Ð³õ´¹´Ì¶ù¹Îê§½ð¾»Ù©¿ÌÆÞãÞÇàÈ¡ÈþÉ²æ©ÉÐÉáÉçÊ¹Ê¼ÊÂÊÜÊãÊåË¢ËùÍÃÎôÐ©ÐÕÔþÖ¶ÖÜæ¨ÖäÖæ×¥×Ú×ä°º?°å±­èÆ¶«¶ó?¸«¸Ñ¸ý¹©¹¾¹Ã¹Â¹Ì¹Ô¹Ù¹ûº¼ºö»è¼¡Ø½¼¼¼¾¼Ñ¼ç½ì¾©¾Àôñ¾Á¾Ó¾ß¾í¿¹¿Ï¿Õ¿ì¿ë¿ñÁÖÃ¶èËèÁÆäÆæÆçñ·ò°ÇüÈ¯Í÷ÎÔÎöÐÀÜºèÃÒËÕíÖ¦óÃèÌ°¶°Ë°Ñ°Ö°â°æ°ç±°±Ëãê±í±ü²¯³Áãç·º·¿·Å·Ç·Õ·Ú·Þ·î·ö¸®¸·¸ÔãéØÔÛÀºÍºô»¢»òÃ»ÃÃÃÅÃ¥ÃÏåµÃ÷ÃüÄ­Ä·ãåÄÁÅ¤Å×ÅæÅåÅóÅúÆãÆûÇßÉ³ÉòÌ­ÍôÎ¶ãëÎÖÎäÎïÏÒÙþÏíÐ­ÐÃÐÒÒÊÓêãä×´°Û³¤³´³Þ´¶æ§í³á·å´µ½µÄµÒµ×µäµê¶¨¶±ê»½ã¾Ì¾ñ¿»À¥ØÝÀ´ÀýÁ½ÙýàòÂÂÂØ?ÄÎÄÝÄîåóæªÊÌ?ÌûÍ¶Øèê¿Ñ×ÑðÒ×ÕÒÕÛÕùÖªÖ±ÖÆÖËÖÒ×¿°¬ÛêÛæ·¯¸½¿ÀÀ¤À¬áºÅÀÅÁÆºÆÂÌ¹ÍðÍùÍúÎ¯âèÑÇÑÙëÈÒ¹ÒÀÒÖì¶ÓÛô§êÀ');");
E_D("replace into `sm_bihua` values('9','²éæ±åû²î²ð´©´º´Ù¶¾¶È¹¬¿ÝÇ°ÇÖÇïÈáÉ°ÉÀÉõÉüÊ¡Ê©Ê³ÊÒÊÇÊ×Ë§Ë¼ÛÅË×Ï÷ÐÅÐÇñãÐðÐûÒ³ÓáÔÕÔòßååëÖÅ×¾×É×Ë×ò±ú²ñ¶í¸Ì¸Í¸×¸ï¹·èÛ¹Ê¹Úð§¹ì¹ï¹ñºåÙêºç¼¶¼±¼È¼Ï¼Ü½¨½ªæ¯½Ô½çñæ¾¢¾Å¾Â¾Ð¾Ñ¾Ü¾ü¿´¿Â¿Æ¿ÍÁøÃ¢êÇÄéÆíÆõÇ¡ÇÎÙ´ÇõÉÖÊÁèÞèØÍæÏÀÏàÑåÞÈÞÄôàØ·èÖØ®óÄÓóÕ¤èÏÖ¥è×Öùí½°Î°Ý°è±£±§±³±â±ã²¨²´²ª²À·¨î²·É·Ð·ç·âÙì·÷·ý¸º¹Á¹þº¢ºÓºÜºìãüºîºóºñºü»²Û¼»Â»Ê¼Æ¾£¾æÀÑÀáêÄÃ°ÃµÃ¼ÃÀÃÁòµåôÃÚÃãÃëçäãýÄ³Ä´ÄàÅÄãúÅÑÅÎÅÝÅêÅûÅþæ°Æ·ÆÁÆÃÙéÆâÆüÈªÈ¾æ¬ãôãûÏÌÏãÏïÐ¹Ð¶ãùÑØÑÜãóÓ¯Ó¾ÓÍÕ´ÕÓÖÎ×¢±þ³é´ýµ¡µÖµÛ¶©¶Î¶Ü¸°¹Õ¼í¾¼¿¡À­ÀåÙµÀþÁ¯ÁÁÂÉÄÈèÍÄÍÄÏÅ­Å°ÅÚÌ©Ì¿Í¤Í»?ÍÏÍØÍáæýìÅáàÒ§Ó³êÅÔ¹ÔÖÕ¨ÕÐÕÑÕßÕêÕþÖÑÖØæûëÐìÄ×àÞÖêÆ¹¸¿üÅÂÅèÍÞÍþÎ¤Î·Î¸ÎÍÎÝÎêÐÍá¾æ«Ò¦ÒªâùÒÌÒöÒôÛóÙ¸ÓÂÓÄÔ«ë¼Ô¼');");
E_D("replace into `sm_bihua` values('10','°þ²ÆÍ¥²Ç²Ö²òØö³«êËå·³Ëò¿³Ö³áÛ»´¿ìô´àµò¶¤¸Õî¸¹Ö½è¾þÄßÆÊÙ»êüÈõÉºÉÁÉÈÉÚÉä?ÉñÊ¦Ê®Ê±Ê°Êéç£ÊâË©ËØËîËïË÷ÎÉÏ¢Ï¯ÏÆÏüÐ¦ÐÞÐìÑ³ÔÔÔ×ÞÊîÈÕëÕæÕüÖ½Ö¸×§×Ã×â×æ×ùèñ°Å°Ê°Ø?°ð·¼·Ò·ÛÜ½¸á¸ß¸ç¸ñ¸ù¸û¹§¹ª¹°¹±¹É¹Ç¹ÒÙÄ¹í¹ðºË»¨»¸»Ö¼§óÅ¼¹¼Ççì¼Ò¼æôø½ÆÞ×èî¾¶èê½Û¾Ø¾ãÙÆ¾ê¾ëöÁ¿½çæã¡¿Ö¿Þ¿â¿òÀ¨ÀõÄäÆÜÜÎÆñÆðò¯ÜÍÜËÇÛìîÈ­É£Ë¨ËñÌÒÍ©Î¦ÜÌÞÉÐ£Ð¾èòèâÑ¿ÜÓÒÐçßÓéàôÓøÔ­ç¡Ü¿ÜÆèäÖê×ÀôÎ°à°ã±ª±¶ïõ²¡²£Ùñ³Ó¶´¶ð·¾·Äô³·Ê·Ë·×·åÙº·þ¸©¸ªº¦º¯º½ºÄºÝºÞºãºéºòìïä¡ä§»î½ò¾Æä£ÂåÂíÃÇÃØÃßçëï÷Ä¶ÅÉÅÏÅÔÅäÆ´æ³Ù·çêÆÔÆùÇ¢È÷É±É´æ¶ä¬ÍÝÎÆÎñÏ´Ð§Ð²Ðôâþä­ÑµÑóÔÅÖÞä¨×Ç³Üçéµ¢µºµ¹æ·çè¶³¶²¹¢ºæ»Ð¼²½úçå¾ó¿¾ÀÊÀÓæ²Á©Á¹ÁÏÁÒÁáÁèÁôÂÃÂÎÂ×ÄÃÄÉñÄØ«ÄÜÄïÇØÜÇÙ¼É¹ÉÎË¡Ë·ÌÆÌÈÌÖÌ×ÌØÌÛÌëÙÃÌñÌðÌôÌõÍ¦Í½ÍÚÙÁÎÚÏÄÐó?Ñ¶Ñ¸ÑíìÈñºÒ¨Õ¹Õ¾ÕäëÞÖ«ÖµÖÈÖÂÚ£×£í§°£°³°´°¸°»°½?³ÇíÆ¶ë¶÷íÀ¸ö¹¡ÂñÅéÆÆÆÒÆöÇÍÇÔÈÝÛïÉéÜ¢íÈæ¸ÎÌÏ¿ÐùëÙÑçêÌí¦ÒæÒó?ÓØÓýÔ±Ô¬ÔÒ×¼Å¶');");
E_D("replace into `sm_bihua` values('11','±Ï²Ê²Î²Ü²àîÎ²ú³£áä³ª³²³¿³×³ç´¦ç©´¬îË´É´ÖµÃµö·°¸±¼Å¼À¼ôìº¿±Ø¸ÂÊÄó?ÚäÈ¸ÉÌÉÓÉÜÉÝÉâÉðÊÛÊëÊüË¬ËÏËÞÍµÎÊÏ¤áãÏ¸ÏÏÏéÐ±ÐÏÐßÐäÐýÔÃÔðÔúÕ³ÖÕÖçÖéÖû×¨×Å×å×é×ö°ú±½±¿±ò²ç³Ãó×´ÞµÑèóÜÞ·û¸Òô´¹£¹¶¹Æèô¹æ¹úº·º´¼ÄóÕôÂ¼Ù¼á½¡ð¨½Ìæ¼ÝÀ½üæº¾¹¾È¾è¾ì¿µ¿Á¿Ü¿à¿øÀ¦À·óÒÜßÃ©Ã¯Ã·ÜÔì»Å¼ÆôÇ¬ÇÄÇÑÇäÇêÇøÈ¢ÜÛÈôØÄÉÒÜæóÏÙ¿ÊáÊõáÂËóÌ¦ÌÝóÔÍ°ÎàÎòÎîÏÁÏáÙÉÐµÐíÑÐÑÛñ´Ó¢â×Ô·ÜÑ×Âè÷°Æ°Ü°í°îäº±»±Æ±Õ±áØÒ±ë²°²¶ä¹´½¶ï·µ···Ã¸¡Ùë¸¾¹»º£ºÁºÆºÐçñ»¼»Ë»Úåç»Þ»é»õ½þãþä¸ÀËÁ÷ÂéÂóÂöÂüÃÙÃÜÃçÃôÅÇÅÖÅëÆ«Æ±Æ¶ÆÅÆÖÇþÉ¬ÉæêýÍ¿ÍíÍûÙËÏ°ÏÑÏûÐ®ÐéÑ©?Ó¿ÓãÔ¡Õãä·ë·´Ó´Õ´ø´üñõµ¨µ°µÁ¶¥¶¯·éêÏìÊº¸½«ÀÇÀÕÀæÀçÁ£ÁºÁÄÁçôáñöÂ¹ÂÔàðçóÄÇÄúÆÝÈíêÉÌ°ôÐÍ£ÍÀÍé?Ï©?Õ¶ÕÅÕÂÕÊÕìÕñÖ´ÖÏ×½°¤âÖ±À²º¶Ñ¸ÚáÄ¹èºú»ùÄñÅàÆéÆèÇ£ÌÃñ»Ì÷ÍñÎ¨á¡Î°Î¾áÅÑÂãÆÙÈÒ°ÒÆÒìÛüÒîÒúÓ­ÓÆÓòÓûá¿');");
E_D("replace into `sm_bihua` values('12','×ÏÓ½²Â²Ã³¨³®³¬³¯´°´´´Êë¥´ëõõµô·¡¸Æ¹¼ºøêª¾û¿¢Å¥ÇÕÇéÈ»ÈÍÈÞÉ¡É¢É¨ÉÆÉÔÉÛÊ¤Ê¢Ê£ÊÓÊÚÊè±óÊæÊòÊöË°Ë³Ë´Ë¿Ë¹ËßËÚîÑÌæÍ¯ÍÆÏ§ÎúÏÛÏóÐëÐöÐõÑ¤Ó÷Ô¿ÔäÔæÔøÕÆÚ¯ÕõÖ¡Ö³ÖÚÖü×È×ð°ô±Ê²Ý²ß²èèú´ðµÈµÚé¦µü¶°·¤Üò¸Þ¸ø¹á¹ó¹÷é¤ð©ãÈ»ÄÜîÜöïú¼«¼¬¼¯¼¸åÈ¼ä¼öòÔ½Ö½Ü½á¾°¿ª¿­éð¿Ã¿Ø¿ðÀâÀóÂçÃÞÜøÅïÆÚÆÛÆîÆåÜçÇ¿ÇÇÇñÇòÜóÈãÈîÉ­ñûÌÄÍ³Í²ÍîÏ¡ÏÃÜ÷ÑÅÑÚÑãÒ¢?ÜèÒðÔ¦Ô¢Õ»Ö²Üï×Ø×î°ó°ø±¨±¸êÚåö²©´¾äÈµ­·¢·¬·Àì³·ë¸¢·ù¸´¸µ¸»äÆºªº­º®ºÔºØ»´»½áå»Ý»ì»ó½¥ÂÙÃ£Ã³Ã½ÃÄÃÂÃÍÃèíµãÉÅÅÅÆÅíÅõÆÀÆÈÆÕä¿Ç³ÇåÉîÊçäÁÌÊÌíö©ÎÞäÀÏ²ÏÐÏÖÏîÐÛáßÑÄÑÍÒºÓÙÔ¨ÔÆ±º²É³¡³¸³Ì´ö´ûµ¥µÇµÏµë¶Ì?¶Ø·Ù½¹½Ó¾§¾ÍÀÅÀÍÀíÁÀÁ¿ÁÑÁðÂ²ÇçÈòÌºÌ½ÌóÌöÌùæÃÍïá¢Ñ°Ñ­ÙãìÍéóæÂÕÜÕÝÕïéôÖ¤ÖÇÖáÞß°Á±¤??µÌ·ÑºÚ»­»Æ¿°á°áÒáËÎªÎ§àøÎ©ÏèÏõÑâÑßÒ¼åÆêÝÔÁÔ½áÌ');");
E_D("replace into `sm_bihua` values('13','²§Üðèèîà²¬²ÈôÓâü²ïè¡³î³í³ê³þ´§´Àçý´ß´êîä¶ÂºÂ¼Ø½Ë½Ý¾¸îÒÁåÅÙÇ¦ã«â¿ÈàÈûÉ·ÉËô¹ò×Ê«Ê¨ÊÆÊÔéøÊîÊóÊñË¯ËÃËÁËÍËÑËàî¡ËêîèîãÏ±õ£ÏÓõÐÏêÏëÐÂì§ÐÊìãêÑîçÑ±Ñ¯ÓËÓäîÚÔ£ÓúÔØÔôÕ¢Õ®ÕåÕöÖï×¯×°×Ê×á×è²ë´»é¨Ý¶·ã¸Ãêà¸Å¸Ð?¸ú¹îºÉºïåË»û¼µé®¼Ô¼Þ¼ðóÈ¼õ½¼½Å½ÒÚµ½â½ö½û½ù¾­¾¥¾¦¾´åÄ¾¾¾ËöÂ¾îóÞ¿«¿®¿¬ê¬¿äØáÞñêÒçûÀªÝ¹ÀãÀòÝ°Á®é¬ÁÕÃ§Ý®é¹ÃäÄ¼éªÄæÆÎñýçùç÷ì÷ÇÙÇÚÇãÈ¹ÈºÉ¯é©ÊúËÌÝ±Ý«ÎÓðªÏ¾ÜÈÐ¨ÐªÝ·é¸Ñ¥óÛÑîÒ¬ÒµÒåÒÞéºÝ¯Ý¬ÓÞÓÜÔ¤Óùé«èå×ï°ä°ß±¢Úé±Å?ã¹±ÙÙ÷Þð²³²¹²â³ü¶É¸¬¸È¸Û?ºÅ?ºþâ©»»»Á»ÌäÒ»ÓêÍ»Ô»ã»á»ß»Ù»ë¼ÖäÐ½Ïð¯¿ÊÀ×Á»ÂèÃËÃÔÃìõ¤ÄªÅÃÅÈÅýÆ¸ôÃÈÇËçÌÀÍÄÎ¢Î¼ÎõÏæäÍäÓäÖäÎÓÎÓåÓôÔüÕ¿ÖÍÖó?³Û´«´î÷°µ±µçµîëº¶¦¶½ìÑ¶Ù¶ã¶è·³ö¡ìÎ»À»Í»Î»Ï¼£¼åÀÈã¶Á¶ÁÞÁãéûÂ»Â·ÂÒÃºÄÀÄË?ÄÕÅ©Å¯ËþÌµÌÓÌáÌøÍ§ÍËìÕÍÉÍÑÍÔÍÓÍçìÐì¿ÎÏÏ¨ìÓÑÌçüÑïì¾áæÓÝìÏÕ²ÕµÕÕÕÖÖÃïô×·ã·°¢°«°®°µ?°Â±®µâµï»°¼î¿éÊ¥áÔËÜËéËúÌÁÌîÍëÎÂÎÕÑ«ÑÃÞëÒ¯Ò¾âÂÒèÒâÒáÒûÓ¶ÓºÓÌÔ°Ô²Ô®ã¢ÔÎã³ÖÉ');");
E_D("replace into `sm_bihua` values('14','ÏñÇÈÁÅÙÔÙÖÉ®?½ÄÙÒ¹Í??¾¤»®ØÑ¼ÎØÅÍ¼ÍÅÇµÛÓ¾³ÊûÜ­µæ??ÊÙÃÎ¶á½±??µÕæÌÄÛ?æÆæÐæÏÄ¯²ì¹ÑÇÞå»ÁÈÊµÄþ¶ÔÂÅáÐáÖÕ¸á£Ä»á¤?ÀªÁÎ??ÕÃâýÉ÷Ô¸í¯?Òó´ÈÌ¬ãº½Øê¯²«Ò¡?´îåº´êÌÂ°á¸ãÎÓÆìì½³©?ÀÆéÅ°ñé¿ÈÙéÃ¹¹¹¹»±ÁñÅÌ¸ÜÆÂ¹È?????ÎÂÔ´×¼Áï¹µäéÒçäßÏªËÝäÚäàÈÜäè²×Ãðµá×ÌÜþ»¬ÌÏëø??ÐÜÑ¬Ó«É¿ÈÛ??ìÁ¶ûêûÊ¨è¥çø??çõè§??çâ???º÷è¤ÈðÉªè£è¦?Õç¼à¾¡î¥î£¶ÃÃéË¶?íÙ±Ì?µúÌ¼??????ÖÖ³ÆÎÑ½ß¶Ë¼ãóÝ²­Ëã»þ¹Ü¸öóä?´â¾«×ÛÂÌ³ñôëç·Î¬çº¸ÙÍø×º²ÊÂÚç²ÕÀ´Âç±ç»½ôç³ç¸Ãàçµ??ç¶????î»ÕÖ?ÖÃµÔ´äÎÅÉöê°Ì¨Îè¾Ûô»ÝÒÝÑ¾ÕÝÅÝ¿²Ë²¤»ª¹½ÝÔÝ¼·ÆÑÌÝÄÝ½ÝÍÌÑÜÉ?À³ÝÂÃÈÆ¼Î®ÆÐÁââÖ???¾£?ÃÛ?ñÑÉÑÅáÖÆ¹ÓÈÏÖ¾ÊÄµ®³Ï½ëÓïÚ¾ËÐËµºÀÃ²êâ±öêäºÕÕÔ¸Ï¸¨ÇáåÐÍ¸ÖðåÏ¾¶Í¾ºÐ¶ºÕâÍ¨³ÑËÙÔì·êÁ¬ºÂÛ¬ÀÉÛ£¿¤Û­Û§ËáÒø½ÂÍ­ï§Ï³îýÃúï¢ÏÎ?¸óºÏ¹ëÎÅÃö·§½µÏÞöÃÐè÷°ÉØÁìâÂ?ÊÎËÇ??²µ÷Ö¿ý»ê·ïÃùÆë±Ç¹üôä?ÓÌ?È¶');");
E_D("replace into `sm_bihua` values('15','±µ²Ñ²Ò²ô?æ¿?³§³å³ø³ú´Í´×´Ý·æ·óï¯¹ôØÛ¼ê½£½Úö¦¾çï¶ï®ÅüÆÌÇëÈ¤÷×ÈñÉµÉÂÉÍÉóÊµÊ´Ê»ÊìÊýË¤Ë­æáËÒËöÍÈÏÝÏÙÐ¿Ð÷?ÔëÖÄÚìÖ¿ÖåÖö´±×»×ÙÝá±ê²Û³»´Ðµ¾µÙ·®éÏ¸å¸ðâÙ¹®¹ã¹å¹ùéÎ¼©êå»ü¼·ð¢¼Û¼Ý¼Ú¼óôå¼ú¼ý½©½°½¿½ºÙÓãÎ¾Ô¾á¿¶¿¿¿Î¿Ù¿í¿î¿ûÂ¥ÃæÄ£ñîÝâÆªÆÏã¥ÇìÇîÜäÊàÝãÝÚÎ­åüÏÍÏäÝæÑùÒÇÒêÒãÓ¨ëôÕÁóð×í°Õ°ýñÙ±©±²±¼±Ý±àñÛ±ý²¿äî´¼µÎ·¶òðæâ¸³¸¹çÃîÂë½º©ººò¢ºÖä°»¦÷â»Û½¬Á°ÁÝÂ©ÂÄÂäÂêÂëÂôÂúÂýÂþÃ¨òúÃ²Ã¹÷ÈÃåç¿ÃíÃþÄ¦Ä®Ä«Ä½ÄºÅ½ÅÌÅâÅçÛ¯ôæÆ¯ÆÇí¬ÉøöªÍòåÔæÒâÃÏöÛÄÐ´äöÑÝÑúäôò£ÓæÕÄÕÇÕð°¨²ã³¹³Ý³ýñÒê¡´þµ¯µÂµÐ¶­¶¸¶Ð¶ü»º¼ùèª½øãÏÀÖÀèÀ÷Á·ÁÂÁ¾å¼ÁÌÁõÂ§Â³åÖÂ¾ÂÇÂÖÂÛÂæØ¾ÄÔÄÖÄÙéýæåÅ²Æ§ÈÈÌ¤ÌßÍÊÑüÑþìÚìÙÔÝÕªâ¯ÕËéüÕóð²Õ÷ÚºÖÊ×¤ê¢°°´Å´èáØ¶Õ¶é·Ï·Øºýá½áÀÀÚá×ÄëÅ·Å¹âæÅÍÈ·ÍãÎ³ÚÃÎÀÎ¿æµÑ»ÑøÒ¶ÒÚÒÝÓ°ã¼ÓÇÓÊÔµÔºÔÄÔöáç');");
E_D("replace into `sm_bihua` values('16','ï¼²Í?²Õ²ÚãÑÚÈã¿ñ¬õßå×Úï´¸è®è­´éõã´íµñ¶§·ø¸Ö¼­½õ¾²¾âï¿ÃÌÄÂÆ¾Ç®ÞìÈåî£ÊäËºöÕôËãÒÏÇÐÑÚËÓâÚÍÔ÷Õ½çÇï£Õûç§Öî×²×¶Ýíó÷²Ô³ÈóÆ¶ö¶õãÕ¶ôØ¬¸Ý¸âÞè¹ê¹õ¹ýÝïºáèë»Å»ç»úçÜÝð¼Á¼½÷Ù¼ÕÚÉ?êñÞØáèçÆ¾±ã½éÙ¾ÙÃÎÆÑÆÓÆ÷Ç­ÇÁÇÅã¾éÔÇËÇÊÇ×ÇÜíàåÙÇ÷ÈØð£Ê÷ÝôËâÝ¥ÏØÏðóãÐ¥Ð³ÐîÑÖ÷ÊÑèÒ¤çËÝÓÙøÓ±ÓöÕôÖþ×­×ìé×°Ä°ì±«±é±æ²¥äý³±³º³Îö­·Ü·ß·í¸§º§ò¥º²ôçå¾äê»ä»ô½§½½½àÀ£ÁÊÁØÂîÃõÄ¬Ä±ÄÞÄýÅËÅãö¬ÅìæéÆ²Æ³ÆµÆËÇ±ÈóÈöö®Ì¶äüìäÏÜâÝÐËÑ§ä±?³·³Â³Å³ã´ïµ§µ¬µ¼µÀµÆÚÐµý¶¼¶Ä¶ÖìÀ¶Ý»ý¾ïÀµÀÌÀÞÁ§î¾ÀúçöÁÃâ²ÁÇÁêÁúÂ¬Â½Â¼ÄÓÅµÈ¼ÉÕËìê¼ÌÐÌÕÌãÍ·êÕÍÒÏþè¯ÑæÑìêÊìÇ?è°ÕéÖí×«×¸æÈÚÏñú°Ã±Ú¹ßºâ¿Ñ¿åÄ¥ê±Ç½ÈÚÌ³Î¥Î½âäåÚÑËÑàÒÃÒõÛÕâÅÔ¥Ô§ÔËÛ©ÔÍ×©');");
E_D("replace into `sm_bihua` values('17','ÒñÔÀ²Á²Ùìø³¥´Ï¶À¶Æ¶Í»Õ½¤¼ü¿¥ïÇÁ´ïÑÃ¾÷ãÇ²ÇÂïÆÈæÈüÉùÚÖË²ïÈËÊËäËåËõÎýÏ¥Ï·ÏÊÐ»Ñ·ÒíÓßÕ¡Õ«Õ±ÕàïñÖõ×Ü×Þ±Î²ÌÜÊÝý´Øµµ¶®óûß¦¸ëóô¹ºæÅð»¹Ýèí»í»÷¼¤¼è¼ñ¼ì½²½¯½Ã½×¾Ï¾Ýì«¿Å¿ÒÞ¢¿÷À¸Á«ÁªÁ²Þ¤ÝäÂ¨Âûí®ÃïóúÅîõèÇ«ÇÆÇæóÀÞ¡óùÌ´ÎµÏ­Ï½éÜÓªÓüÕá×¬×®°ï±Ûå£µãµí·±·ìº«º¶º³ºèä½è«ä«À«ÂºÃÖÃÕÃÓÚ×Ä¡Ä¤Å¨æÉð«è±Ëª?ìûÏ¼ÏçÙôÐ¸öàÔèÔóå¤²Ó³Ò÷ìµ£µ²µ¸¶Ó»â¼¨¾ôÀ»ÀøÁ¥ñÍÁÆÁÙÁ×Â¡çÑìÝåÝÌ£Í«ÍÎÏåÛÆÒ¥Ò£ôíÔïÔñÕ·ñÞðºó®Öò×Ý°¯åÛ?º¾ÛÖ½¸ÁëáÉãÇÚùÑ¹ÑôáÚÒäâøôèÓ¦Ó¤âßÓµÓÅ÷îÓçÓìÔ¶ÔÇ');");
E_D("replace into `sm_bihua` values('18','´¢??ÀÝÙøÒÍÃÉí¯´÷ßª±÷¸é¾Ù¶ÏÊïê×êÖÄû¹ñÌ¨éÄèþ¹éÅ¢ÃÉå©¼ÃÌÎå¦åª¿£Î«±õÊªÒ«Ñ¬»ñ¾ôè¨èµ»·è²???Õ°öÄ´¡Àñð£?¼òóñ»ÉÁ¸çÕÖ¯ÉÉ·­ÈÆÐåóïÒíÇÌÖ°ÄôÉÅ¾ÉÞ¬½¶ÈïÜñÜ¿Þ¥Ïôµ´?ó´²õ³æ?¸²êîõüÚÓÚØ½÷?ö¥Ú©?·áõÏ³ÙÊÊÛ³Ò½½´ÀåËø?°÷??îø¸äÕòï×ÎÙïÖãÙ?ãØãÚË«¼¦ÔÓ÷¶?è¸¶îÌâÑÕ?ò§ð¥Æïæë?ËÉÀðöè¾éðÀðÄÎº?');");
E_D("replace into `sm_bihua` values('19','÷éäÞïÚ²ù³Í³Ù³è³ë´Çµ»ïáµßë¹¾µï¬ÃªÇ¨ïÏÈµÛ·ÉþÊ¶ÊÞÏµåßÑ¡ÔÞÔêÚÚ×ñ³÷èü¹Ø»Ñ¼¥¼»çÖ½É½Î½óç«¿èëÚ¿õÀ©ÀÙèÀèÝéÖÂ´ÄÑÅÊÇ©ÈøÊíÞ±ÏôÐ¤Ð·Ð½Ñ¦ØÍÒÅ²¾ðÈäÂ¸þ»æ½¦ÁÔä¯ÃÒÅôÆ­Û¶Æ×õëÆÙÈÅÎíÐºö¯°Ú±¬µË¶×ì´¼ÊÚÜÙúÀàÀëÀöÁ±Á³ÁÉÁÚåàê¥Áäß£Â®ÙùÄìÅÓÆØË¸Ì·èºçôÒïÔùÛµÕÞÖ£æï»µ½®ÛÞÂ¢ÛâÛäÎÈðÄæðÒÜÓ·ÔÏÐå');");
E_D("replace into `sm_bihua` values('20','È°ÑÏÈÀ±¦?¿ù»³ÐüÂ£?êØëÊèÓèÐãò±ôå«Á¤äìå­äþãñäëÂ¯Ï×Çí??ÛÇÀùíÂ¿óñ¼¾ºÀº³ï¼®×ë?çÍ¼Ì?ñ÷î¼?Ò«?½¢ô¿ÈøÊíÑ¬?Þ¸Þ·Üù?½åÀ¶?ñà¾õ´¥Òé¾¯ÒëÓ®õ»ÑûÂõ»¹õ·ÊÍÖÓÁÍïëïâîüãÛ²ûÂ¶Æ®Ü°öúÏÌ÷ô¹¨ÌÚÃæµ³Áä¹¨²ØÁÚ');");
E_D("replace into `sm_bihua` values('21','öÍ²óâãåñ³Äîõ³ùîìïÔÀØÁ­ËæËíåäÌú?ÏÕïîõÜÊôïí¹Ë÷¤¼¢¼ßðÏÙçÞ¼ÅºÇýÈÄÞ´ÌÙÏùÒ©ÒÕÝºÓ£ÔÌ÷ö°Ô±çæô±ìì­·ªº×ºä»¤À½äòëïåãÅùõ¸å®²øõÒÀ°ìµÀÀÀÃÀÛÙ³çç?ÂâêÙðÎÔîâÍó»íÃÎ¡ÓþÔ¾Ðâ');");
E_D("replace into `sm_bihua` values('22','Ù²ÙÎ?æ®?ÂÏÂÍ?áÛÍäÜ²»¶Ð¯ÉãÈ¨»¶¹àãã??ìßè¬?µü?ìü?ð¦¾º?Áý?ÙáÌýëÍÛäôµÝþÜÂÞ­°ªÔåÞ½Þ¿Â«ËÕÔÌÆ»??³ÄÏ®êë¶ÁÉóÊêõðõÜõÈéöàÎÚ÷ïìïÙÖý¼ø¼øÒþ±ßçÖ÷²Ïì²ü÷Ï÷Ï÷Ó½¾æèæçÐë÷©ðÑÅ¸¹¨?');");
E_D("replace into `sm_bihua` values('23','?ÑÒÁµ?ÔÜÌ¯ÂÎÉ¹èïé¡?È÷Ì²??Ç©Ô¿Ó§?ÏË?Þ¾ÞºÞÀÀ¼îÃ?±äöÅîå??ÏÔ÷Ð?Ñé¾ªæäËèÌåÁÛðØð¸ÑàÃ¹÷ë÷¡ÑàõÒº×íè');");
E_D("replace into `sm_bihua` values('24','²Ï²÷Úß´£öÎè¶Öèö°¸Óî¿½ÁÝñÀéÄðáéÓ¥ß¬°ö÷ÞàÎò­÷²À¾ö¨ÁéÂ¤ðØÈÃ°Ó¹ÞÑÎÑÞ');");
E_D("replace into `sm_bihua` values('25','ÌüÀ¿é­å°å±??ÂùÀéçÚÂÜ¹Û??õæÛºÔ¿Ïâ??Ùä');");
E_D("replace into `sm_bihua` values('26','²öïéæ÷Ä÷õÑôõÍååÎÛªÂ¿Âß');");
E_D("replace into `sm_bihua` values('27','ÂÐÀÂÚÝÚÔÂà×êöÇæøæ÷öù');");
E_D("replace into `sm_bihua` values('28','óÖí°èùäÙ?ðÐ');");
E_D("replace into `sm_bihua` values('29','ïÝæêõïðÙ');");
E_D("replace into `sm_bihua` values('30','ìà?öââÎ');");
E_D("replace into `sm_bihua` values('31','');");
E_D("replace into `sm_bihua` values('32','Óõ');");
E_D("replace into `sm_bihua` values('33','?');");
E_D("replace into `sm_bihua` values('77','zi');");

require("../../inc/footer.php");
?>