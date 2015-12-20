-- MySQL dump 10.10
--
-- Host: localhost    Database: alias
-- ------------------------------------------------------
-- Server version	5.0.18-nt

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `content`
--

DROP TABLE IF EXISTS `content`;
CREATE TABLE `content` (
  `id` int(11) NOT NULL auto_increment,
  `menu` int(11) NOT NULL,
  `title` varchar(200) not null,
  `in_date` datetime NOT NULL,
  `up_date` datetime NOT NULL,
  `in_person` varchar(100) default NULL,
  `up_person` varchar(100) NOT NULL,
  `image1` varchar(100) default NULL,
  `image2` varchar(100) default NULL,
  `image3` varchar(100) default NULL,
  `date1` date default NULL,
  `date2` date default NULL,
  `date3` date default NULL,
  `text1` varchar(100) default NULL,
  `text2` varchar(100) default NULL,
  `text3` varchar(100) default NULL,
  `text4` varchar(100) default NULL,
  `text5` varchar(100) default NULL,
  `text6` varchar(100) default NULL,
  `text7` varchar(100) default NULL,
  `text8` varchar(100) default NULL,
  `file1` varchar(100) default NULL,
  `file2` varchar(100) default NULL,
  `file3` varchar(100) default NULL,
  `media1` varchar(100) default NULL,
  `media2` varchar(100) default NULL,
  `media3` varchar(100) default NULL,
  `textarea1` mediumtext,
  `textarea2` mediumtext,
  `textarea3` mediumtext,
  `textarea4` mediumtext,
  `textarea5` mediumtext,
  `isUse` char(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `content`
--


/*!40000 ALTER TABLE `content` DISABLE KEYS */;
LOCK TABLES `content` WRITE;
INSERT INTO `content` VALUES (8,24,'资料正在准备中...','2012-04-21 07:53:52','2012-06-16 02:20:30','系统总管理员','系统管理员',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'资料正在准备中...',NULL,NULL,NULL,NULL,'0'),(11,21,'资料正在添加中...','2012-04-27 05:57:26','2012-07-02 10:16:25','系统总管理员','系统总管理员',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'资料正在添加中...',NULL,NULL,NULL,NULL,'0'),(12,21,'资料正在添加中...','2012-04-27 05:57:44','2012-06-16 03:02:15','系统总管理员','系统管理员',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'资料正在添加中...',NULL,NULL,NULL,NULL,'1'),(13,21,'资料正在添加中...','2012-04-27 05:57:50','2012-06-16 03:02:17','系统总管理员','系统管理员',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'资料正在添加中...',NULL,NULL,NULL,NULL,'0'),(14,21,'资料正在添加中...','2012-04-27 05:57:54','2012-06-16 03:01:44','系统总管理员','系统管理员',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'资料正在添加中...',NULL,NULL,NULL,NULL,'0'),(15,21,'资料正在添加中...','2012-04-27 05:58:00','2012-06-16 03:01:41','系统总管理员','系统管理员',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'资料正在添加中...',NULL,NULL,NULL,NULL,'1'),(16,21,'资料正在添加中...','2012-04-27 05:58:05','2012-06-16 03:01:32','系统总管理员','系统管理员',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'资料正在添加中...',NULL,NULL,NULL,NULL,'1'),(17,21,'资料正在添加中...','2012-04-27 05:58:11','2012-06-16 03:01:09','系统总管理员','系统管理员',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'资料正在添加中...',NULL,NULL,NULL,NULL,'0'),(18,21,'资料正在添加中...','2012-04-27 05:58:18','2012-06-16 03:00:50','系统总管理员','系统管理员',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'资料正在添加中...',NULL,NULL,NULL,NULL,'1'),(20,26,'会员注册','2012-04-29 06:13:26','2012-05-04 08:44:02','系统总管理员','系统总管理员',NULL,NULL,NULL,NULL,NULL,NULL,'王春兰','vvpvvp','888888','1347072123123','21124124@sina.com.cn',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1'),(21,27,'sdg','2012-05-06 05:43:37','2012-05-06 05:43:37','系统总管理员','系统总管理员',NULL,NULL,NULL,'2012-05-09',NULL,NULL,'sdg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'sdg','sdgsdsdg',NULL,NULL,NULL,'0'),(23,40,'关于红酒','2012-05-27 08:50:22','2012-06-16 02:43:20','系统总管理员','系统管理员',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'　　星光汇红酒吧为尊贵的会员提供了多种高品位的酒类。<br />\r\n　　红酒有纯进口的法国酒王之王柏图斯干红、拉菲庄园等。由专业的品鉴师为您服务，私人专属的储藏柜储藏，是您真正享受餐酒文化的唯一选择。<br />\r\n　　无酒不欢，尊贵的您置身其中，有意无意地使本会所酒吧文化变得更加丰富而立体。在这里，您喝的任何酒是否作为今晚主角并不重要，有趣的是酒里的乾坤，世间闲事慢诉中，晓月明净，夜虽阑珊，意兴未尽，随之而起的风云轶事，酒之可爱便在与友人为伴，有酒有友，不经意间成就人生、事业，夫复何求？',NULL,NULL,NULL,NULL,'0'),(24,40,'gsd','2012-06-04 07:48:05','2012-06-04 08:23:13','系统总管理员','系统总管理员',NULL,NULL,NULL,NULL,NULL,NULL,'sdg','sdg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'<embed src=\"/aliasCenter/kindeditor/attached/media/20120604/20120604090745_58422.flv\" type=\"application/x-shockwave-flash\" width=\"550\" height=\"400\" autostart=\"false\" loop=\"true\" />',NULL,NULL,NULL,NULL,'0'),(25,39,'星光汇简介','2012-06-11 02:13:14','2012-06-16 02:46:49','系统总管理员','系统管理员',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'星光汇商务会所：由豪华KTV、雪茄吧、红酒吧组成。内设33间豪华KTV包厢，全德国进口音响，环境舒适，服务一流，是您商务接待、娱乐休闲的第一选择。国际顶尖品牌、高度私密化环境、超值专业服务，让雪茄吧和红酒吧成为您彰显品位、诠释个性、演绎时尚的最佳去处。',NULL,NULL,NULL,NULL,'0'),(26,39,'dgsdg','2012-06-11 02:22:14','2012-06-13 08:46:36','系统总管理员','系统总管理员',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'/aliasCenter/kindeditor/attached/file/20120611/20120611142222_51978.html',NULL,NULL,NULL,NULL,NULL,'<embed src=\"http://www.tudou.com/v/QtXAIipQjfQ/&rpid=11065740&resourceId=11065740_05_05_99&bid=05/v.swf\" type=\"application/x-shockwave-flash\" allowscriptaccess=\"always\" allowfullscreen=\"true\" wmode=\"opaque\" width=\"480\" height=\"400\"></embed>',NULL,NULL,NULL,NULL,'0'),(27,41,'关于雪茄','2012-06-12 02:14:41','2012-06-16 02:44:04','系统总管理员','系统管理员',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'<p>\r\n	<p>\r\n		　　有人说，这世间，能让我们单纯享受愉悦的物品实在太少。<br />\r\n　　当一切已离你而去的时候，只有手中的雪茄常伴左右，轻轻点燃一支生命的火种，慢慢品吸那如烟的往事。<br />\r\n雪茄----永远的情人。<br />\r\n　　英国首相丘吉尔是雪茄的忠实捍卫者，他永远以一幅叼着雪茄的形象出现在公众面前。\r\n	</p>\r\n	<p>\r\n		<strong>这里有古巴雪茄顶级品牌：</strong>\r\n	</p>\r\n	<p>\r\n		<strong>【COHIBA--浓淡随粗细而定】</strong><br />\r\n　　六十年代问世的COHIBA，所选用的烟叶皆是上 乘之选，同时必定收藏至完美无瑕才推出，产量稀有，更显珍贵。&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br />\r\n　　其浓淡随粗细而定，从外型纤细风味清醇的 PANATELA到浓烈的ROBUSTOS. COHIBA始终是雪茄爱好者最钟情的选择。<br />\r\n<strong>【BELINDA--历史悠久的古巴品牌】</strong><br />\r\n　　是一个拥有悠久历史的古巴品牌，口感浓郁香醇，一天中任何时刻都适合品尝，非常受到欧洲市场的欢迎。<br />\r\n　　并为尊贵的会员提供私人专属的雪茄恒温、恒湿储藏盒，更能体现无以伦比的会员尊贵！\r\n	</p>\r\n</p>\r\n<p>\r\n	<br />\r\n<br />\r\n<br />\r\n<br />\r\n</p>',NULL,NULL,NULL,NULL,'0'),(28,11,'星光灿烂大剧院简介','2012-06-14 01:55:40','2012-06-15 11:03:47','系统总管理员','系统管理员',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'<br />\r\n<img alt=\"\" src=\"/aliasCenter/kindeditor/attached/image/20120614/20120614171312_12843.jpg\" width=\"767\" height=\"256\" /> \r\n\r\n<p>\r\n	星光灿烂大剧院位于江城最繁华的中央商务区----镜湖区中山北路32号。建筑面积24000平方米，总投资1.8亿元，全进口装饰材料合理应用，简约、精致而又不失奢华的设计风格，功能设施完善，动静相宜，环境优雅、交通便利。\r\n</p>\r\n<p>\r\n	星光灿烂大剧院秉承中、西休闲文化，倡导会员专属制，满足各个层次消费人群需求，即有大型综艺演出剧院功能配置，又有私密式至高时尚、休闲、健康的商务会所理念。集综艺类演出、咖啡，茶艺、雪茄、红酒为一体，为精英界成功人士提供尊贵、典雅、商务、休闲区域及专业、科学、温馨的高级服务。是一所大型综合性高级休闲场所。\r\n</p>\r\n<p>\r\n	场所设施先进、合理、周全而富有个性化，是目前安徽省内首家设置红酒、雪茄专属区域的综合娱乐场所，具有强烈的的私人归属感。使会员在休闲享受之中轻松便捷的随时进行各类商务、政务活动。场所配备有多种从法国、德国等进口的一流设备，为来宾提供更高规格、更科学的服务功能，保证来宾在场所享受安全、健康、舒适的服务。\r\n</p>\r\n<p>\r\n	场所每月将定期开展各类商务投资交流活动、专属会员沙龙联谊，并不定期的开展知名人物高级讲座，高雅艺术视听及各类专题PARTY活动，为频繁社交接待、公务繁忙又交游广阔的商家名流、政要人士提供一个体面、健康、时尚的社交接待场所。\r\n</p>\r\n<p>\r\n	专属会员可在这里享受场所特别设立的，芜湖市第一家顶级、私密、储藏式雪茄红酒吧为您提供的纯正高级进口雪茄及红酒，一展丘吉尔式的绅士风度及大家气派。\r\n</p>',NULL,NULL,NULL,NULL,'0'),(29,14,'星光汇简介','2012-06-14 02:01:45','2012-06-16 02:30:15','系统总管理员','系统管理员',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'<p>\r\n	资料正在添加中...\r\n</p>',NULL,NULL,NULL,NULL,'0'),(30,17,'新势力简介','2012-06-14 02:51:16','2012-06-16 02:19:12','系统总管理员','系统管理员',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'资料正在准备中...',NULL,NULL,NULL,NULL,'0'),(31,18,'企业文化','2012-06-14 02:51:27','2012-06-16 02:19:44','系统总管理员','系统管理员',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'<p>\r\n	资料正在准备中...\r\n</p>',NULL,NULL,NULL,NULL,'0'),(32,29,'第一张','2012-06-14 10:01:34','2012-06-16 02:17:13','系统总管理员','系统管理员','/aliasCenter/kindeditor/attached/image/20120616/20120616141800_49248.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0'),(33,30,'第一张','2012-06-14 10:02:03','2012-06-16 02:25:06','系统总管理员','系统管理员','/aliasCenter/kindeditor/attached/image/20120616/20120616142611_25017.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0'),(34,31,'第一张','2012-06-14 10:02:31','2012-06-19 01:35:54','系统总管理员','系统管理员','/aliasCenter/kindeditor/attached/image/20120619/20120619133614_52980.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0'),(35,29,'第二张','2012-06-14 10:11:13','2012-06-16 02:18:35','系统总管理员','系统管理员','/aliasCenter/kindeditor/attached/image/20120616/20120616141844_10523.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0'),(36,29,'第三张','2012-06-14 10:11:37','2012-06-16 02:19:22','系统总管理员','系统管理员','/aliasCenter/kindeditor/attached/image/20120616/20120616141946_25816.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0'),(37,29,'第4张','2012-06-14 10:11:38','2012-06-16 02:20:06','系统总管理员','系统管理员','/aliasCenter/kindeditor/attached/image/20120616/20120616142013_40399.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0'),(38,29,'第5张','2012-06-14 10:12:07','2012-06-16 02:50:23','系统总管理员','','/aliasCenter/kindeditor/attached/image/20120616/20120616145038_45127.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0'),(39,29,'第6张','2012-06-14 10:12:26','2012-06-16 02:50:53','系统总管理员','','/aliasCenter/kindeditor/attached/image/20120616/20120616145059_36975.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0'),(40,30,'第2张','2012-06-14 10:13:20','2012-06-16 02:25:11','系统总管理员','系统管理员','/aliasCenter/kindeditor/attached/image/20120616/20120616142530_80674.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0'),(41,30,'第3张','2012-06-14 10:13:36','2012-06-16 02:25:28','系统总管理员','系统管理员','/aliasCenter/kindeditor/attached/image/20120616/20120616142547_91728.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0'),(42,30,'第4张','2012-06-14 10:14:03','2012-06-16 02:25:48','系统总管理员','系统管理员','/aliasCenter/kindeditor/attached/image/20120616/20120616142606_83769.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0'),(43,30,'第5张','2012-06-14 10:14:17','2012-06-16 02:49:19','系统总管理员','','/aliasCenter/kindeditor/attached/image/20120616/20120616145000_35804.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0'),(44,30,'第6张','2012-06-14 10:14:19','2012-06-16 02:50:07','系统总管理员','','/aliasCenter/kindeditor/attached/image/20120616/20120616145015_48148.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0'),(45,31,'第2张','2012-06-14 10:14:31','2012-06-19 01:36:19','系统总管理员','','/aliasCenter/kindeditor/attached/image/20120619/20120619133628_29166.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0'),(46,31,'第3张','2012-06-14 10:14:44','2012-06-19 01:36:35','系统总管理员','系统管理员','/aliasCenter/kindeditor/attached/image/20120619/20120619133643_16728.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0'),(47,31,'第4张','2012-06-14 10:14:57','2012-06-19 01:36:56','系统总管理员','系统管理员','/aliasCenter/kindeditor/attached/image/20120619/20120619133656_52756.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0'),(48,31,'第5张','2012-06-14 10:15:15','2012-06-19 01:37:00','系统总管理员','系统管理员','/aliasCenter/kindeditor/attached/image/20120619/20120619133709_81330.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0'),(49,31,'第6张','2012-06-14 10:15:50','2012-06-19 01:37:13','系统总管理员','','/aliasCenter/kindeditor/attached/image/20120619/20120619133721_40817.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0'),(52,33,'好消息！会员积分兑换活动开始了！','2012-06-15 08:14:30','2012-06-15 08:18:12','系统总管理员','系统总管理员',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'<p>\r\n	好消息！会员积分兑换\r\n</p>\r\n好消息！会员积分兑换\r\n<p>\r\n	<br />\r\n</p>\r\n好消息！会员积分兑换好消息！会员积分兑换\r\n<p>\r\n	<br />\r\n</p>',NULL,NULL,NULL,NULL,'0'),(53,33,'会员卡办理及使用说明','2012-06-15 08:14:50','2012-06-15 08:14:50','系统总管理员','系统总管理员',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'<p>\r\n	会员卡办理及使用说明\r\n</p>\r\n会员卡办理及使用说明\r\n<p>\r\n	&nbsp;\r\n</p>\r\n会员卡办理及使用说明\r\n<p>\r\n	&nbsp;\r\n</p>\r\n会员卡办理及使用说明\r\n<p>\r\n	&nbsp;\r\n</p>',NULL,NULL,NULL,NULL,'0'),(54,7,'星光灿烂开业','2012-06-15 08:25:25','2012-06-27 04:15:54','系统总管理员','系统管理员','/aliasCenter/kindeditor/attached/image/20120627/20120627161602_97894.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'http://player.youku.com/player.php/sid/XNDE5NjMwMTcy/v.swf',NULL,NULL,'<p>\r\n	&nbsp;\r\n</p>',NULL,NULL,NULL,NULL,'1'),(55,34,'星光汇简介','2012-06-15 09:54:38','2012-06-16 02:54:00','系统总管理员','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'<p>\r\n	星光汇商务会所：由豪华KTV、雪茄吧、红酒吧组成。内设33间豪华KTV包厢，全德国进口音响，环境舒适，服务一流，是您商务接待、娱乐休闲的第一选择。国际顶尖品牌、高度私密化环境、超值专业服务，让雪茄吧和红酒吧成为您彰显品位、诠释个性、演绎时尚的最佳去处。\r\n</p>',NULL,NULL,NULL,NULL,'0'),(56,34,'关于红酒','2012-06-15 09:54:52','2012-06-16 02:55:01','系统总管理员','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'<p>\r\n	<span>无酒不欢，尊贵的您置身其中，有意无意地使本会所酒吧文化变得更加丰富而立体。在这里，您喝的任何酒是否作为今晚主角并不重要，有趣的是酒里的乾坤，世间闲事慢诉中，晓月明净，夜虽阑珊，意兴未尽，随之而起的风云轶事，酒之可爱便在与友人为伴，有酒有友，不经意间成就人生、事业，夫复何求？</span>\r\n</p>',NULL,NULL,NULL,NULL,'0'),(57,34,'关于雪茄','2012-06-15 09:55:29','2012-06-16 02:56:24','系统总管理员','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'<p>\r\n	<span id=\"part2_center_t3\" class=\"selA\">六十年代问世的COHIBA，所选用的烟叶皆是上 乘之选，同时必定收藏至完美无瑕才推出，产量稀有，更显珍贵。</span>\r\n</p>\r\n<p>\r\n	<span class=\"selA\">其浓淡随粗细而定，从外型纤细风味清醇的 PANATELA到浓烈的ROBUSTOS. COHIBA始终是雪茄爱好者最钟情的选择。</span>\r\n</p>',NULL,NULL,NULL,NULL,'0'),(58,34,'星光普丽酒店简介','2012-06-15 09:55:34','2012-06-16 02:57:09','系统总管理员','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'<p>\r\n	资料正在添加中...\r\n</p>',NULL,NULL,NULL,NULL,'0'),(59,34,'客房展示','2012-06-15 09:56:34','2012-06-16 02:57:32','系统总管理员','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'<p>\r\n	<span class=\"selA\"><span class=\"selA\">资料正在添加中...</span></span>\r\n</p>',NULL,NULL,NULL,NULL,'0'),(62,6,'大剧院表演现场','2012-06-16 04:25:55','2012-06-20 03:26:26','系统总管理员','','/aliasCenter/kindeditor/attached/image/20120619/20120619174956_85454.jpg','/aliasCenter/kindeditor/attached/image/20120619/20120619175217_18641.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'大剧院表演现场',NULL,NULL,NULL,NULL,'0'),(63,20,'标题','2012-06-16 04:47:12','2012-06-16 04:47:12','系统总管理员','系统总管理员','/xing/aliasCenter/kindeditor/attached/image/20120616/20120616033904_12548.jpg','/xing/aliasCenter/kindeditor/attached/image/20120616/20120616033931_96728.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'dgsdggs',NULL,NULL,NULL,NULL,'0'),(64,15,'星光普丽酒店简介','2012-06-16 02:31:16','2012-06-16 06:31:55','系统管理员','系统管理员',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'<p>\r\n	&nbsp;\r\n</p>',NULL,NULL,NULL,NULL,'0'),(65,6,'大剧院表演现场','2012-06-20 03:14:02','2012-06-20 03:26:56','系统管理员','星光灿烂大剧院','/aliasCenter/kindeditor/attached/image/20120620/20120620151425_71169.jpg','/aliasCenter/kindeditor/attached/image/20120620/20120620151605_80401.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0'),(66,6,'大剧院表演现场','2012-06-20 03:18:12','2012-06-20 03:18:12','系统管理员','系统管理员','/aliasCenter/kindeditor/attached/image/20120620/20120620151810_95457.jpg','/aliasCenter/kindeditor/attached/image/20120620/20120620151819_97625.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0'),(67,6,'大剧院表演现场','2012-06-20 03:18:28','2012-06-20 03:18:28','系统管理员','系统管理员','/aliasCenter/kindeditor/attached/image/20120620/20120620151843_15820.jpg','/aliasCenter/kindeditor/attached/image/20120620/20120620151851_17860.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0'),(68,6,'大剧院表演现场','2012-06-25 05:14:09','2012-06-25 05:15:02','系统管理员','系统管理员','/aliasCenter/kindeditor/attached/image/20120625/20120625163717_48955.jpg','/aliasCenter/kindeditor/attached/image/20120625/20120625165214_34675.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0'),(69,43,'前台','2012-06-25 10:49:34','2012-06-25 10:51:36','系统总管理员','系统总管理员',NULL,NULL,NULL,'2012-07-31',NULL,NULL,'安徽省芜湖市','星光汇','1','面议',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'<p>\r\n	文笔有个性。\r\n</p>\r\n<p>\r\n	有意向请将简历发送邮箱<a href=\"mailto:a8918929@sina.com.cn\" target=\"_blank\">a8918929@sina.com.cn</a>\r\n</p>',NULL,NULL,NULL,NULL,'0'),(70,6,'大剧院表演现场','2012-06-27 09:53:13','2012-06-27 09:59:35','系统管理员','','/aliasCenter/kindeditor/attached/image/20120627/20120627100509_13579.jpg','/aliasCenter/kindeditor/attached/image/20120627/20120627100517_85599.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0'),(71,6,'大剧院表演现场','2012-06-27 10:11:56','2012-06-27 10:13:14','系统管理员','系统管理员','/aliasCenter/kindeditor/attached/image/20120627/20120627101209_44993.jpg','/aliasCenter/kindeditor/attached/image/20120627/20120627101328_32712.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0'),(72,44,'会员注册','2012-07-08 12:57:40','2012-07-08 12:57:40','网页前台','网页前台',NULL,NULL,NULL,NULL,NULL,NULL,'vvpvvp','alias','alsid@sina.com','310218',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0'),(74,46,'会员留言','2012-07-08 03:50:26','2012-07-08 03:50:26','网页前台','网页前台',NULL,NULL,NULL,NULL,NULL,NULL,'vvpvvp','alias','sgsdgsgsgd',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0'),(75,46,'会员留言','2012-07-08 03:55:10','2012-07-08 05:52:30','网页前台','系统总管理员',NULL,NULL,NULL,NULL,NULL,NULL,'vvpvvp','alias','dgagadgsgd',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'sgsdgdgsgsdgsdg',NULL,NULL,NULL,NULL,'0'),(78,46,'会员留言','2012-07-08 05:53:40','2012-07-08 05:54:12','网页前台','系统总管理员',NULL,NULL,NULL,NULL,NULL,NULL,'vvpvvp','alias','在哪儿有这个种问候哈',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'在哪儿有这个种问候哈在哪儿有这个种问候哈在哪儿有这个种问候哈在哪儿有这个种问候哈',NULL,NULL,NULL,NULL,'0');
UNLOCK TABLES;
/*!40000 ALTER TABLE `content` ENABLE KEYS */;

--
-- Table structure for table `manager`
--

DROP TABLE IF EXISTS `manager`;
CREATE TABLE `manager` (
  `id` int(11) NOT NULL auto_increment,
  `loginname` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `issuper` char(1) NOT NULL default 'N',
  `bz` varchar(1000) default NULL,
  `popedom` varchar(500) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manager`
--


/*!40000 ALTER TABLE `manager` DISABLE KEYS */;
LOCK TABLES `manager` WRITE;
INSERT INTO `manager` VALUES (1,'superadmin','123','系统总管理员','Y',NULL,''),(2,'admin','123','系统管理员','N','fsdfsdf',''),(3,'yonghu','888888','yonghu','N',NULL,''),(4,'xing','888888','星光灿烂大剧院','N','星光灿烂大剧院','');
UNLOCK TABLES;
/*!40000 ALTER TABLE `manager` ENABLE KEYS */;

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` int(11) NOT NULL auto_increment,
  `pid` int(11) NOT NULL default '0',
  `menuname` varchar(100) NOT NULL,
  `hasContent` char(1) NOT NULL default 'N',
  `bz` varchar(500) default NULL,
  `sort` int(11) default NULL,
  `isnormal` char(1) default 'Y',
  `link` varchar(100) default NULL,
  `isshow` char(1) default 'N',
  `showlink` varchar(100) default NULL,
  `cancreate` char(1) default 'Y',
  `candelete` char(1) default 'Y',
  `canupdate` char(1) default 'Y',
  `canpublic` char(1) default 'Y',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--


/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
LOCK TABLES `menu` WRITE;
INSERT INTO `menu` VALUES (1,0,'首页','N',NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(2,0,'关于我们','N',NULL,2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(3,0,'新闻中心','N',NULL,3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(4,0,'近期策划','Y',NULL,4,'Y',NULL,'N',NULL,'Y','Y','Y','N'),(5,0,'会员天地','N',NULL,5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(6,0,'精彩瞬间','Y','img',6,'Y',NULL,'N',NULL,'Y','Y','Y','N'),(7,0,'在线视频','Y','img',7,'Y',NULL,'N',NULL,'Y','Y','Y','N'),(8,0,'服务项目','N',NULL,8,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9,0,'商家联盟','N',NULL,9,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(10,0,'联系我们','N',NULL,10,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(11,2,'星光灿烂大剧院简介','Y',NULL,11,'R',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(14,2,'星光汇简介','N',NULL,14,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(15,2,'星光普丽酒店简介','N',NULL,15,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(16,2,'新势力文化传媒简介','N',NULL,16,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(17,16,'新势力简介','Y',NULL,17,'R',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(18,16,'企业文化','Y',NULL,18,'R',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(19,16,'资质荣誉','Y',NULL,19,'Y',NULL,'Y',NULL,'Y','Y','Y','Y'),(20,16,'案例展示','Y','img',20,'Y',NULL,'N',NULL,'Y','Y','Y','N'),(21,3,'星光灿烂大剧院动态','Y',NULL,21,'Y',NULL,'N',NULL,'Y','Y','Y','Y'),(22,3,'星光汇动态','Y',NULL,22,'Y',NULL,'N',NULL,'Y','Y','Y','Y'),(23,3,'星光普丽酒店动态','Y',NULL,23,'Y',NULL,'N',NULL,'Y','Y','Y','Y'),(24,3,'新势力文化传媒动态','Y',NULL,24,'Y',NULL,'Y',NULL,'Y','Y','Y','Y'),(25,8,'企业租场服务','Y',NULL,25,'Y',NULL,'N',NULL,'Y','Y','Y','Y'),(26,8,'商务招待服务','Y',NULL,26,'Y',NULL,'N',NULL,'Y','Y','Y','Y'),(27,8,'演员外演服务','Y',NULL,27,'Y',NULL,'N',NULL,'Y','Y','Y','Y'),(28,8,'明星代言业务','Y',NULL,28,'Y',NULL,'Y',NULL,'Y','Y','Y','Y'),(29,1,'星光灿烂大剧院滚动图片238*445','Y',NULL,29,'Y',NULL,'N',NULL,'N','N','Y','N'),(30,1,'星光汇滚动图片357*1001','Y',NULL,30,'Y',NULL,'N',NULL,'N','N','Y','N'),(31,1,'普丽酒店滚动图片333*1001','Y',NULL,31,'Y',NULL,'N',NULL,'N','N','Y','N'),(33,5,'会员卡消息','Y',NULL,33,'Y',NULL,'N',NULL,'Y','Y','Y','N'),(34,1,'首页内容','Y',NULL,34,'Y',NULL,'N',NULL,'N','N','Y','N'),(35,15,'普丽酒店简介','Y',NULL,35,'R',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(37,15,'客房展示','Y',NULL,37,'Y',NULL,'N',NULL,'Y','Y','Y','N'),(39,14,'星光汇简介','Y',NULL,39,'R',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(40,14,'关于红酒','Y',NULL,40,'R',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(41,14,'关于雪茄','Y',NULL,41,'R',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(42,10,'联系我们','Y',NULL,42,'R',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(43,10,'招贤纳士','Y','zp',43,'Y',NULL,'N',NULL,'Y','Y','Y','N'),(44,5,'大剧院会员','Y','zc',44,'Y',NULL,'N',NULL,'N','N','N','N'),(45,0,'留言管理','N',NULL,45,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(46,45,'大剧院会员留言','Y',NULL,46,'Y',NULL,'N',NULL,'N','N','Y','N');
UNLOCK TABLES;
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;

--
-- Table structure for table `menuset`
--

DROP TABLE IF EXISTS `menuset`;
CREATE TABLE `menuset` (
  `id` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `col_name` varchar(30) NOT NULL,
  `col_type` varchar(30) NOT NULL COMMENT '类型：D：日期，I：普通字段，X：小型编辑，B：大型编辑，M：图像，W：文件，S：视频',
  `isIndex` int(11) NOT NULL default '0',
  KEY `FK_menuset_1pk_id` (`id`),
  CONSTRAINT `FK_menuset_1pk_menu` FOREIGN KEY (`id`) REFERENCES `menu` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menuset`
--


/*!40000 ALTER TABLE `menuset` DISABLE KEYS */;
LOCK TABLES `menuset` WRITE;
INSERT INTO `menuset` VALUES (11,1,'内容','textarea1','B',0),(14,1,'内容','textarea1','B',0),(15,1,'内容','textarea1','B',0),(17,1,'内容','textarea1','B',0),(18,1,'内容','textarea1','B',0),(19,1,'内容','textarea1','B',0),(21,1,'新闻内容','textarea1','B',0),(22,1,'新闻内容','textarea1','B',0),(23,1,'新闻内容','textarea1','B',0),(24,1,'新闻内容','textarea1','B',0),(4,1,'内容','textarea1','B',0),(29,1,'图片','image1','M',1),(30,1,'图片','image1','M',1),(31,1,'图片','image1','M',1),(33,1,'内容','textarea1','B',0),(25,1,'内容','textarea1','X',0),(26,1,'内容','textarea1','B',0),(27,1,'内容','textarea1','B',0),(28,1,'内容','textarea1','B',0),(7,1,'预览图','image1','M',1),(7,2,'视频','media1','S',0),(7,3,'内容','textarea1','B',0),(34,1,'内容','textarea1','X',0),(6,1,'小图','image1','M',1),(6,2,'大图','image2','M',0),(6,3,'内容','textarea1','X',0),(20,1,'缩略图','image1','M',1),(20,2,'图片','image2','M',0),(20,3,'内容','textarea1','B',0),(43,1,'工作地点','text1','I',1),(43,2,'招聘单位','text2','I',0),(43,3,'招聘人数','text3','I',1),(43,4,'待遇月薪','text4','I',1),(43,5,'失效日期','date1','D',0),(43,6,'职位描述','textarea1','X',0),(44,1,'登录名','text1','Z',0),(44,2,'真实姓名','text2','Z',1),(44,3,'电子邮箱','text3','Z',1),(44,4,'密码','text4','P',0),(45,1,'留言人编号','text1','Z',0),(45,2,'留言人','text2','Z',1),(45,3,'留言内容','textarea1','X',0),(45,4,'回复','textarea2','X',0),(46,1,'留言人ID','text1','Z',0),(46,2,'留言人姓名','text2','Z',1),(46,3,'留言内容','text3','Z',1),(46,4,'留言回复','textarea1','X',1);
UNLOCK TABLES;
/*!40000 ALTER TABLE `menuset` ENABLE KEYS */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

