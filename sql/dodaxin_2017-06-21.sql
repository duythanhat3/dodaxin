# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.18)
# Database: dodaxin
# Generation Time: 2017-06-21 14:38:01 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table cart_details
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cart_details`;

CREATE TABLE `cart_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cart_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `item_price` double(20,0) DEFAULT NULL,
  `item_quantity` int(10) DEFAULT NULL,
  `amount` double(20,0) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

LOCK TABLES `cart_details` WRITE;
/*!40000 ALTER TABLE `cart_details` DISABLE KEYS */;

INSERT INTO `cart_details` (`id`, `cart_id`, `item_id`, `item_price`, `item_quantity`, `amount`)
VALUES
	(1,1,4,280000,1,280000),
	(2,1,10,320000,2,640000),
	(3,2,4,280000,1,280000),
	(4,2,11,350000,2,700000),
	(5,3,11,350000,2,700000),
	(6,4,9,380000,1,380000),
	(7,5,13,350000,1,350000),
	(8,6,7,345000,3,1035000),
	(9,7,45,250000,1,250000),
	(10,8,81,350000,3,1050000),
	(11,9,25,300000,1,300000),
	(12,9,36,1200000,1,1200000),
	(13,10,39,1200000,30,36000000),
	(14,11,11,350000,1,350000),
	(15,12,13,350000,4,1400000),
	(16,13,88,350000,2,700000),
	(17,14,132,370000,1,370000);

/*!40000 ALTER TABLE `cart_details` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table carts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `carts`;

CREATE TABLE `carts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `total_due` double(20,0) DEFAULT NULL,
  `cus_name` varchar(300) DEFAULT NULL,
  `cus_phone` varchar(20) DEFAULT NULL,
  `cus_email` varchar(100) DEFAULT NULL,
  `cus_address` varchar(500) DEFAULT NULL,
  `note` text,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

LOCK TABLES `carts` WRITE;
/*!40000 ALTER TABLE `carts` DISABLE KEYS */;

INSERT INTO `carts` (`id`, `total_due`, `cus_name`, `cus_phone`, `cus_email`, `cus_address`, `note`, `created_at`)
VALUES
	(1,920000,'nguyễn văn long','0989123123','','hưng yên','ship nhanh nhé','2016-08-23 22:16:13'),
	(2,980000,'lê thị quỳnh','0976223121','lequynh@gmail.com','hưng yên','gửi hàng cho tôi nhé shop','2016-08-23 23:14:17'),
	(3,700000,'lê thị hảo','0999911221','hao@gmail.com','kim động - hưng yên','ship hàng cho mình nha shop','2016-08-23 23:18:19'),
	(4,380000,'Lê thị huyền trang','09124857441','Trangle@gmail.com','Sài gòn','Tôi đặt mua sản phẩm này nhé','2016-08-23 23:54:34'),
	(5,350000,'lê thị vy','091918181','','sdfdsf','','2016-08-24 12:53:28'),
	(6,1035000,'đoàn thị thanh phương','09181112221','','quảng ninh','em yêu','2016-08-25 00:02:56'),
	(7,250000,'Nhat hunt','0907876047','Uongcafenhoem@yahoo.com','158/8 tan binh tphcm','Cuc cuc that to ','2016-09-03 21:31:08'),
	(8,1050000,'test 1','0191819191','','sfsdf','','2016-09-20 11:37:23'),
	(9,1500000,'thái','0909123123213','','út tịch','tôi muốn đặt 2 mặt này trong ngày hôm nay','2016-09-20 11:39:06'),
	(10,36000000,'Nguyen van Cu ','01628101662','','230/25 ton dan quan 4','lay het hang neu . trong kho còn bao nhiêu cái lấy hết ','2016-09-22 20:39:27'),
	(11,350000,'aaaaa','65656556','','hhhhh','','2016-09-25 10:27:12'),
	(12,1400000,'lê văn lượng','0132452334','','hoang hoa tham','Ship ngay cho anh','2016-09-28 22:14:11'),
	(13,700000,'van anh','0123232323','','dfsdfds','giao toi day cho toi ngay','2016-10-07 08:46:27'),
	(14,370000,'nguyễn thu hà','09198911122','','abc','acb','2016-12-22 17:06:34');

/*!40000 ALTER TABLE `carts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table category
# ------------------------------------------------------------

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) DEFAULT NULL,
  `name_ascii` varchar(300) DEFAULT NULL,
  `name_url` varchar(350) DEFAULT NULL,
  `active` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;

INSERT INTO `category` (`id`, `name`, `name_ascii`, `name_url`, `active`)
VALUES
	(1,'Ví da nam','Vi da nam','vi-da-nam','1'),
	(2,'Ví da nữ','Vi da nu','vi-da-nu','1'),
	(3,'Dây lưng','Day lung','day-lung','1'),
	(4,'Túi Ipad','Tui Ipad','tui-ipad','1');

/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table contacts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `contacts`;

CREATE TABLE `contacts` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(200) DEFAULT NULL,
  `lastname` varchar(200) DEFAULT NULL,
  `name` varchar(300) DEFAULT NULL,
  `name_ascii` varchar(300) DEFAULT NULL,
  `phone_primary` varchar(20) NOT NULL DEFAULT '',
  `phone_other` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `position` varchar(300) DEFAULT NULL,
  `avatar` varchar(300) DEFAULT NULL,
  `note` mediumtext,
  `group_id` int(10) DEFAULT NULL,
  `group_name` varchar(300) DEFAULT NULL,
  `country_id` int(10) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `active` char(1) DEFAULT '1',
  `created_by` int(10) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(10) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;

INSERT INTO `contacts` (`id`, `firstname`, `lastname`, `name`, `name_ascii`, `phone_primary`, `phone_other`, `email`, `date_of_birth`, `position`, `avatar`, `note`, `group_id`, `group_name`, `country_id`, `city`, `address`, `active`, `created_by`, `created_at`, `updated_by`, `updated_at`)
VALUES
	(1,'tuan kiet','dao','dao tuan kiet','dao tuan kiet','09874084091','01652198403','tuankiet@gmail.com',NULL,'director',NULL,'chau dao tuan kiet haha',3,'Company',243,'ho chi minh','19 duong duc hien 123','1',1,'2016-05-25 18:10:31',1,'2016-06-19 22:27:26'),
	(2,'Huyền trang','Lê thị','Lê thị Huyền trang','Le thi Huyen trang','0111222333','0222333444','trang@gmail.com','1991-06-05','call center',NULL,'test nek',3,'test 2',4,'HCM','19 duong duc hien','1',NULL,'2016-05-26 02:44:38',1,'2016-06-12 14:46:47'),
	(3,'nhị','đào văn','đào văn nhị','dao van nhi','09898123122','','daonhi@gmail.com',NULL,'',NULL,'',2,'test 1',243,'','hung yen','1',NULL,'2016-05-26 02:48:21',1,'2016-06-05 06:25:58'),
	(5,'hưng','đàm vĩnh','đàm vĩnh hưng','dam vinh hung','0167821121','','hungdam@gmail.com','2016-06-05','ca sy',NULL,'test nha',2,'test 1',243,'','test','1',NULL,'2016-05-26 02:59:58',1,'2016-06-07 16:55:23'),
	(10,'Kim 12345','nguyễn thị','nguyễn thị Kim 12345','nguyen thi Kim 12345','0989111222','01932121212','kim@gmail.com',NULL,'giám đốc kinh doanh',NULL,'kim kim',3,'test 2',243,'hà nội','hai bà trưng','1',NULL,'2016-06-05 04:22:17',1,'2016-06-12 14:36:45'),
	(11,'hồng','nguyễn kim','nguyễn kim hồng','nguyen kim hong','01212121212','01313131313','hong@gmail.com','1990-10-05','sale',NULL,'khách hàng rất thân mật',2,'People',243,'hồ chí minh ','trần quang khải','1',NULL,'2016-06-05 04:27:03',1,'2016-07-25 23:35:08'),
	(12,'trọng','nguyễn đức','nguyễn đức trọng','nguyen duc trong','0918191819','','',NULL,'',NULL,'',2,'test 1',243,'','','1',1,'2016-06-05 04:29:59',NULL,'2016-06-05 04:29:59'),
	(13,'tự long','lý','lý tự long','ly tu long','091289221122','','test@gmail.com','1992-11-12','',NULL,'',2,'People',243,'','','1',1,'2016-06-09 16:00:51',NULL,'2016-06-19 22:33:28'),
	(14,'văn tiệp','nguyễn','nguyễn văn tiệp','nguyen van tiep','019182323','','',NULL,'',NULL,'',2,'People',243,'','','1',1,'2016-07-25 23:40:40',NULL,'2016-07-25 23:40:40');

/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table country
# ------------------------------------------------------------

DROP TABLE IF EXISTS `country`;

CREATE TABLE `country` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) DEFAULT NULL,
  `code` varchar(100) DEFAULT NULL,
  `order_display` int(10) DEFAULT '2',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `country` WRITE;
/*!40000 ALTER TABLE `country` DISABLE KEYS */;

INSERT INTO `country` (`id`, `name`, `code`, `order_display`)
VALUES
	(2,'Andorra','ad',2),
	(3,'United Arab Emirates','ae',2),
	(4,'Afghanistan','af',2),
	(5,'Antigua and Barbuda','ag',2),
	(6,'Anguilla','ai',2),
	(7,'Albania','al',2),
	(8,'Armenia','am',2),
	(9,'Netherlands Antilles','an',2),
	(10,'Angola','ao',2),
	(11,'Antarctica','aq',2),
	(12,'Argentina','ar',2),
	(13,'Old style Arpanet','arpa',2),
	(14,'American Samoa','as',2),
	(15,'Austria','at',2),
	(16,'Australia','au',2),
	(17,'Aruba','aw',2),
	(18,'Azerbaidjan','az',2),
	(19,'Bosnia-Herzegovina','ba',2),
	(20,'Barbados','bb',2),
	(21,'Bangladesh','bd',2),
	(22,'Belgium','be',2),
	(23,'Burkina Faso','bf',2),
	(24,'Bulgaria','bg',2),
	(25,'Bahrain','bh',2),
	(26,'Burundi','bi',2),
	(27,'Benin','bj',2),
	(28,'Bermuda','bm',2),
	(29,'Brunei Darussalam','bn',2),
	(30,'Bolivia','bo',2),
	(31,'Brazil','br',2),
	(32,'Bahamas','bs',2),
	(33,'Bhutan','bt',2),
	(34,'Bouvet Island','bv',2),
	(35,'Botswana','bw',2),
	(36,'Belarus','by',2),
	(37,'Belize','bz',2),
	(38,'Canada','ca',2),
	(39,'Cocos (Keeling) Islands','cc',2),
	(40,'Central African Republic','cf',2),
	(41,'Congo','cg',2),
	(42,'Switzerland','ch',2),
	(43,'Ivory Coast (Cote D\'Ivoire)','ci',2),
	(44,'Cook Islands','ck',2),
	(45,'Chile','cl',2),
	(46,'Cameroon','cm',2),
	(47,'China','cn',2),
	(48,'Colombia','co',2),
	(49,'Commercial','com',2),
	(50,'Costa Rica','cr',2),
	(51,'Former Czechoslovakia','cs',2),
	(52,'Cuba','cu',2),
	(53,'Cape Verde','cv',2),
	(54,'Christmas Island','cx',2),
	(55,'Cyprus','cy',2),
	(56,'Czech Republic','cz',2),
	(57,'Germany','de',2),
	(58,'Djibouti','dj',2),
	(59,'Denmark','dk',2),
	(60,'Dominica','dm',2),
	(61,'Dominican Republic','do',2),
	(62,'Algeria','dz',2),
	(63,'Ecuador','ec',2),
	(64,'USA Educational','edu',2),
	(65,'Estonia','ee',2),
	(66,'Egypt','eg',2),
	(67,'Western Sahara','eh',2),
	(68,'Eritrea','er',2),
	(69,'Spain','es',2),
	(70,'Ethiopia','et',2),
	(71,'Finland','fi',2),
	(72,'Fiji','fj',2),
	(73,'Falkland Islands','fk',2),
	(74,'Micronesia','fm',2),
	(75,'Faroe Islands','fo',2),
	(76,'France','fr',2),
	(77,'France (European Territory)','fx',2),
	(78,'Gabon','ga',2),
	(79,'Great Britain','gb',2),
	(80,'Grenada','gd',2),
	(81,'Georgia','ge',2),
	(82,'French Guyana','gf',2),
	(83,'Ghana','gh',2),
	(84,'Gibraltar','gi',2),
	(85,'Greenland','gl',2),
	(86,'Gambia','gm',2),
	(87,'Guinea','gn',2),
	(88,'USA Government','gov',2),
	(89,'Guadeloupe (French)','gp',2),
	(90,'Equatorial Guinea','gq',2),
	(91,'Greece','gr',2),
	(92,'S. Georgia & S. Sandwich Isls.','gs',2),
	(93,'Guatemala','gt',2),
	(94,'Guam (USA)','gu',2),
	(95,'Guinea Bissau','gw',2),
	(96,'Guyana','gy',2),
	(97,'Hong Kong','hk',2),
	(98,'Heard and McDonald Islands','hm',2),
	(99,'Honduras','hn',2),
	(100,'Croatia','hr',2),
	(101,'Haiti','ht',2),
	(102,'Hungary','hu',2),
	(103,'Indonesia','id',2),
	(104,'Ireland','ie',2),
	(105,'Israel','il',2),
	(106,'India','in',2),
	(107,'International','int',2),
	(108,'British Indian Ocean Territory','io',2),
	(109,'Iraq','iq',2),
	(110,'Iran','ir',2),
	(111,'Iceland','is',2),
	(112,'Italy','it',2),
	(113,'Jamaica','jm',2),
	(114,'Jordan','jo',2),
	(115,'Japan','jp',2),
	(116,'Kenya','ke',2),
	(117,'Kyrgyzstan','kg',2),
	(118,'Cambodia','kh',2),
	(119,'Kiribati','ki',2),
	(120,'Comoros','km',2),
	(121,'Saint Kitts & Nevis Anguilla','kn',2),
	(122,'North Korea','kp',2),
	(123,'South Korea','kr',2),
	(124,'Kuwait','kw',2),
	(125,'Cayman Islands','ky',2),
	(126,'Kazakhstan','kz',2),
	(127,'Laos','la',2),
	(128,'Lebanon','lb',2),
	(129,'Saint Lucia','lc',2),
	(130,'Liechtenstein','li',2),
	(131,'Sri Lanka','lk',2),
	(132,'Liberia','lr',2),
	(133,'Lesotho','ls',2),
	(134,'Lithuania','lt',2),
	(135,'Luxembourg','lu',2),
	(136,'Latvia','lv',2),
	(137,'Libya','ly',2),
	(138,'Morocco','ma',2),
	(139,'Monaco','mc',2),
	(140,'Moldavia','md',2),
	(141,'Madagascar','mg',2),
	(142,'Marshall Islands','mh',2),
	(143,'USA Military','mil',2),
	(144,'Macedonia','mk',2),
	(145,'Mali','ml',2),
	(146,'Myanmar','mm',2),
	(147,'Mongolia','mn',2),
	(148,'Macau','mo',2),
	(149,'Northern Mariana Islands','mp',2),
	(150,'Martinique (French)','mq',2),
	(151,'Mauritania','mr',2),
	(152,'Montserrat','ms',2),
	(153,'Malta','mt',2),
	(154,'Mauritius','mu',2),
	(155,'Maldives','mv',2),
	(156,'Malawi','mw',2),
	(157,'Mexico','mx',2),
	(158,'Malaysia','my',2),
	(159,'Mozambique','mz',2),
	(160,'Namibia','na',2),
	(161,'NATO (this was purged in 1996 - see hq.nato.int)','nato',2),
	(162,'New Caledonia (French)','nc',2),
	(163,'Niger','ne',2),
	(164,'Network','net',2),
	(165,'Norfolk Island','nf',2),
	(166,'Nigeria','ng',2),
	(167,'Nicaragua','ni',2),
	(168,'Netherlands','nl',2),
	(169,'Norway','no',2),
	(170,'Nepal','np',2),
	(171,'Nauru','nr',2),
	(172,'Neutral Zone','nt',2),
	(173,'Niue','nu',2),
	(174,'New Zealand','nz',2),
	(175,'Oman','om',2),
	(176,'Non-Profit Making Organisations (sic)','org',2),
	(177,'Panama','pa',2),
	(178,'Peru','pe',2),
	(179,'Polynesia (French)','pf',2),
	(180,'Papua New Guinea','pg',2),
	(181,'Philippines','ph',2),
	(182,'Pakistan','pk',2),
	(183,'Poland','pl',2),
	(184,'Saint Pierre and Miquelon','pm',2),
	(185,'Pitcairn Island','pn',2),
	(186,'Puerto Rico','pr',2),
	(187,'Portugal','pt',2),
	(188,'Palau','pw',2),
	(189,'Paraguay','py',2),
	(190,'Qatar','qa',2),
	(191,'Reunion (French)','re',2),
	(192,'Romania','ro',2),
	(193,'Russian Federation','ru',2),
	(194,'Rwanda','rw',2),
	(195,'Saudi Arabia','sa',2),
	(196,'Solomon Islands','sb',2),
	(197,'Seychelles','sc',2),
	(198,'Sudan','sd',2),
	(199,'Sweden','se',2),
	(200,'Singapore','sg',2),
	(201,'Saint Helena','sh',2),
	(202,'Slovenia','si',2),
	(203,'Svalbard and Jan Mayen Islands','sj',2),
	(204,'Slovak Republic','sk',2),
	(205,'Sierra Leone','sl',2),
	(206,'San Marino','sm',2),
	(207,'Senegal','sn',2),
	(208,'Somalia','so',2),
	(209,'Suriname','sr',2),
	(210,'Saint Tome (Sao Tome) and Principe','st',2),
	(211,'Former USSR','su',2),
	(212,'El Salvador','sv',2),
	(213,'Syria','sy',2),
	(214,'Swaziland','sz',2),
	(215,'Turks and Caicos Islands','tc',2),
	(216,'Chad','td',2),
	(217,'French Southern Territories','tf',2),
	(218,'Togo','tg',2),
	(219,'Thailand','th',2),
	(220,'Tadjikistan','tj',2),
	(221,'Tokelau','tk',2),
	(222,'Turkmenistan','tm',2),
	(223,'Tunisia','tn',2),
	(224,'Tonga','to',2),
	(225,'East Timor','tp',2),
	(226,'Turkey','tr',2),
	(227,'Trinidad and Tobago','tt',2),
	(228,'Tuvalu','tv',2),
	(229,'Taiwan','tw',2),
	(230,'Tanzania','tz',2),
	(231,'Ukraine','ua',2),
	(232,'Uganda','ug',2),
	(233,'United Kingdom','uk',2),
	(234,'USA Minor Outlying Islands','um',2),
	(235,'United States','us',2),
	(236,'Uruguay','uy',2),
	(237,'Uzbekistan','uz',2),
	(238,'Vatican City State','va',2),
	(239,'Saint Vincent & Grenadines','vc',2),
	(240,'Venezuela','ve',2),
	(241,'Virgin Islands (British)','vg',2),
	(242,'Virgin Islands (USA)','vi',2),
	(243,'Vietnam','vn',1),
	(244,'Vanuatu','vu',2),
	(245,'Wallis and Futuna Islands','wf',2),
	(246,'Samoa','ws',2),
	(247,'Yemen','ye',2),
	(248,'Mayotte','yt',2),
	(249,'Yugoslavia','yu',2),
	(250,'South Africa','za',2),
	(251,'Zambia','zm',2),
	(252,'Zaire','zr',2),
	(253,'Zimbabwe','zw',2);

/*!40000 ALTER TABLE `country` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table email_templates
# ------------------------------------------------------------

DROP TABLE IF EXISTS `email_templates`;

CREATE TABLE `email_templates` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) DEFAULT NULL,
  `name_ascii` varchar(300) DEFAULT NULL,
  `content` mediumtext,
  `created_by` int(10) DEFAULT NULL,
  `created_datetime` datetime DEFAULT NULL,
  `updated_by` int(10) DEFAULT NULL,
  `updated_datetime` datetime DEFAULT NULL,
  `active` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table item_attach_files
# ------------------------------------------------------------

DROP TABLE IF EXISTS `item_attach_files`;

CREATE TABLE `item_attach_files` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `item_id` int(10) DEFAULT NULL,
  `path_file` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `item_attach_files` WRITE;
/*!40000 ALTER TABLE `item_attach_files` DISABLE KEYS */;

INSERT INTO `item_attach_files` (`id`, `item_id`, `path_file`)
VALUES
	(8,1,'eKOeeq5Au6DOrbj2miuSLE5ewYUqdQTjHk4QjTPw.jpeg'),
	(9,3,'dMi03ovmklAU0ch2RyzizGHovhftu7Z1QsAdexhT.jpeg'),
	(10,4,'uyQdHFrRRP1Tgkye8jVrPpFS4aEiZzl9sute3yx7.jpeg'),
	(11,5,'QNjO3m6ulYSv7QoNjUgXB5rDIxkqfAicdNFlW9ln.jpeg'),
	(13,5,'XXN1j2yl4HCZG84xedB7koEtZDKbs0mooi4SryVt.jpeg'),
	(14,6,'fDHuppZ9jxEkZFgIYqc1K7b7XSfDTQD3LyhGTFcV.jpeg'),
	(16,7,'kBb5uFNNUUfItB3UolAEiwQl8HeQFnvC5dVIX1bH.jpeg'),
	(17,16,'M7rD0l9FW64tNp6u1xOCfGh66J2HUAPJT5lzic5t.jpeg'),
	(18,7,'cy1mdgdF02f1RyyjvR9DrR72doqJoEgvNapj5iSt.jpeg'),
	(19,9,'LxMVQuBfGtToj7mKGLHAaT4oIQSLohzZCEUjOz5H.jpeg'),
	(20,19,'Vrvml3ADzbV0nKxMk0IAN3ziV0Lf52FMZRNmI2eO.jpeg'),
	(21,10,'3PIeRneToXRI4HrK84isNPZY9b4cMYbYYNCNeFfM.jpeg'),
	(23,22,'m61WMBK5n9RfgNaAubwJAZ4SxP3RdcnxFMeVPz5R.jpeg'),
	(24,10,'KoMu8SpCnCOe3F2KDhyhQCmDi8ksaiMIdzMzX7O7.jpeg'),
	(25,10,'posoPQXZjaU2ATtnrxKKBkPvdz3sGXeEBJHsAOvn.jpeg'),
	(26,11,'k69NCvqonpjBDeht4S36YrMzfQPXexzLEc0OuxzG.jpeg'),
	(28,27,'ebuo46nmyFb8cIvkwZdp9BalNaflzratiXj8OZIX.jpeg'),
	(29,12,'dZMGJNqhkMQ3kYFF3JZBBAg6vsDEBcv8jC5pURKs.jpeg'),
	(30,29,'trnwprnNGhhoGcjqoQaNlc4qQwfCY1nGWVnAbks0.jpeg'),
	(31,13,'Oi1CN0WMtPzkaAxnA1KxccNqDQYcmOQHl4z9JpI5.jpeg'),
	(32,31,'B7n6DoaUKmLhtRG6kOVygFWsW95QeJXhgs2lf09q.jpeg'),
	(33,14,'dVDpEIBOFUgriOiBMoEvXSOgGkRr0XDpnHjGoAFr.jpeg'),
	(35,15,'chp2I5Z2o5NcIbvb9LdAlFCeZwee5f6QNF5RgUxR.jpeg'),
	(36,16,'6ttmE6wzgnTOeVkDdQPgooKGyNbwxhFAnhx8Leiv.jpeg'),
	(37,17,'zDEwkuQ7LLbzsuF4qOS2ho85VCqlhozSbl6sx3Vp.jpeg'),
	(38,37,'i2Nm9jpA21qjvG2WpKbdpfTOV2QsJrRYjHu3ygme.jpeg'),
	(39,18,'jnI04kGs7xYugANeBH0ptGctdv7IBVqs3EzZNlzH.jpeg'),
	(40,19,'NUwjc6agc6B23Y0dGr7C1Ris71c3VaXeMoXgH9yA.jpeg'),
	(41,20,'x4Qh6usW9R1mQyNd4ly9s7qo09yjC5xu9f03bzZw.jpeg'),
	(42,41,'UsXpiNyUSIRZtvNIUlam8KagHFjS6GZizyoDJ7Yw.jpeg'),
	(43,21,'jHARRjKeO3iKmuJ2R59LkIOfbvbw18jhKxb5mEDs.jpeg'),
	(46,24,'DkHNdstTnFdlpZmd3AfJwvYYaKh7uFgB7QuLztoG.jpeg'),
	(47,46,'H13xfDJSqZOPBKT7hWHlqzCabMPtcnZW8ezBpv8f.jpeg'),
	(48,25,'od88kggSvn8yNmCrJ2tPLp8ingprm59D8U3XqByk.jpeg'),
	(49,26,'ecuXFn1of7UIR5eF0NzXsUNHsHtXqOixGcotX8MA.jpeg'),
	(50,49,'VvHAieIk3PytZ4bnnMMf3BkvCHKuTZBMd5tqZJuj.jpeg'),
	(51,27,'xBvEKNHg8YPEmE8MZveJ485M76RxkEBpJqFydmlG.jpeg'),
	(52,28,'WTXBfhjk6ey3fnHSY9h9ULgTFJlPviLxFmHU9kzo.jpeg'),
	(53,29,'VAfAyEDxiwx505J2GUUmvZ3GKPe3rKY6NEtXI2Wr.jpeg'),
	(54,30,'zWnXcVGZ2VfGhdOdtIwEfC3qVB2qFzOYl2GbpoSq.jpeg'),
	(55,31,'YiV2K69uB601aXblkKyV9lUJ2G5k2mSG1ZSw33z0.jpeg'),
	(56,55,'3KUsEoWgEebeZWT8KN17JBspaxMmmK9NBUE8Mk5A.jpeg'),
	(57,32,'2dISlPuGAixpBm8PVoIovIZLpJJ65S2km8Gv9vw8.jpeg'),
	(58,33,'lOJ62Y7iQvyPgOx81GbNvWKkLk2Bf50tEOFYjYod.jpeg'),
	(59,34,'wYBOGbaVC6TSBTa3haX9Kd4DjJHPNZTtE0zqrCaQ.jpeg'),
	(60,35,'XtGCyCA4B2zDNBzpGovdXe4KsTZ5iRrTOYmaOacZ.jpeg'),
	(61,36,'75dCNPFGx375kanSjQSLVIgcrOMEowaG69PhxiHb.jpeg'),
	(62,37,'EAcHyG9tLJm8aoNBxs3VDSsmZISk55cdPg8GiKk0.jpeg'),
	(63,38,'D190MrRMSzhcUzUdqnY7jsJJ4DXSWUd3Mr7JUY5A.jpeg'),
	(64,39,'NjG2yMy72QsmiblpiSX0D1te6RfUutf7lGR7Vl6t.jpeg'),
	(65,40,'SLVvkrBwjXKWMxMRQ5hQaaNNYWn3NdzK9J4vWi2h.jpeg'),
	(67,41,'XHYgVE1WolucTqFIjRl8FdoMJUMNBrkADxAkJMLC.jpeg'),
	(68,67,'tpVAx08iSgc1vRSweNUgNhgzs0NZRyvMcgLRXMqh.jpeg'),
	(69,42,'Xr2OyCafbVSknEQ7avLKluWfHj895swVxGfE3cuk.jpeg'),
	(71,43,'uG6XO3yRcjW3NVB7ssdDr85kBEiuiv5VRsWubZLB.jpeg'),
	(72,44,'fke8eLYgC1dtAB2ZYwArxAflM3CExQMdWY19OLB2.jpeg'),
	(73,45,'02cbQxolS7naSZVcuJOmxkyg4lT10r9N0Bg7oF9D.jpeg'),
	(74,46,'X2pkPIOqRq4Vk5k09iFj01Te593J8mjzxseHwoA4.jpeg'),
	(75,47,'frslxXuJG5so78hZG7SYzFM0MBzIHwuUXD9UprGI.jpeg'),
	(77,48,'9zQ8doKLk0oZynPV5oJ9LqXuSQu4oUmZv1hy5dta.jpeg'),
	(78,49,'eOWrq7xzevqoi7J6Wrgg5ZqEeep3XlegcxEPqhtF.jpeg'),
	(79,50,'MC5sB3QZAygXYRIxHf4Ih44PlrpQZj0pWFdULeJL.jpeg'),
	(80,54,'uY7KzPuYgiTu6zRkMzxEbM5oiJmj0V6Xf38DagDS.jpeg'),
	(81,56,'kWX4Kku4uJKRFXbdkZcNk4CLb74KSyHaoPqN2j0x.jpeg'),
	(82,81,'HZq7WKBuq5xnG2uG9pHQytNTiqqTEg0bmbRqukq2.jpeg'),
	(83,82,'N26QLVSRwunP29VhLPEpY4eNDlFb08rDYmvjLDd5.jpeg'),
	(84,57,'5JT3UYJpgbOMdwhsZTloBvU1JHHpwWfuel0TkfA4.jpeg'),
	(85,84,'fa92UKaDFW39M3gxeCV8sUL0kJKA8WOI2TDdWz3y.jpeg'),
	(86,85,'gc7nIWoHTOfr0D6WaK0zRmX3VvvD7lx7YPJ9xnGZ.jpeg'),
	(87,57,'00tX4TIKr5i6g5zyjuEKCLapEhpA8NoPYGe4kXuC.jpeg'),
	(88,57,'fQLONRFsjnnhjObhVdmKWyXUyYeiAEbw7wg7kEpE.jpeg'),
	(89,57,'gwvTkFZtDOaIW852CnrnGS4cddTpmHq26FLNBE42.jpeg'),
	(90,58,'bDCwpMFw1eLGVyeRZUL9CTbLUtR6YjWgQwSuh93T.jpeg'),
	(91,90,'nqp2HJlXEkRWC0c6vV0CzLzwnzYdLVp9IvMl2KR7.jpeg'),
	(92,59,'p8IWaVdBan8zpNMF74pYUX5RKdeKVd0PObBn0iRT.jpeg'),
	(93,60,'j5oO7aKF8MlcHiploJrMowNc6n6E44ojMmzemzyg.jpeg'),
	(94,93,'jRbYpkBmun2BYR1x34JXCVXKM2oScb35lG5LJ7ve.jpeg'),
	(95,94,'EW6kiN2IQZmVptAKLyFbUx7WKXhFTyaCWlHNgAIt.jpeg'),
	(96,61,'YwyJM1l9SsqEVvhDeSFlH8AiQSA5fln1dyfZPVJo.jpeg'),
	(97,96,'zXW204aCWPE7z1wq8bGxOshfAdWgHjC02cENYzMl.jpeg'),
	(98,97,'BdHVB676yHkgSw2h3FpCqYYIIHUnX1WTJB8XnaV8.jpeg'),
	(99,62,'sBq45vaTC3OElFc659JmniUeZqL0Tdtdku3NmbNh.jpeg'),
	(100,99,'L2EbdG2EQgancsiBZCvyLxeFg9pEK7Fk1M4w1vla.jpeg'),
	(101,100,'FFKPQGVn1WTOS29fkFJSZfBs3k865eXJEX3izAy0.jpeg'),
	(102,63,'CTnL13hKuvPlcdjezOnIuVXEhdjuTJdvxOozMD6w.jpeg'),
	(104,64,'rlBwL3TXZeOKB2X0NsZPdRtPuBIpH5WwKpFngRPG.jpeg'),
	(105,104,'Kwgju3ws06TJsOJPe5pyn3FuSnwTHMWG5P1sqtuX.jpeg'),
	(106,62,'eJzqkrmkCFUoQeP5nJ0ztLwb8Qv5ZI52Z2zMvKls.jpeg'),
	(107,62,'B4R4ntXHFqofNNYWY457871UaLbTc1loWYSUlP7H.jpeg'),
	(108,63,'gKjizNiMOwlopXry7gBX55dcG3ytmMEnxAn4mEj5.jpeg'),
	(110,60,'ZaJdb7uya5l3qwf1qUc6hSGH5ZiuRsy0sDBUO7fd.jpeg'),
	(111,60,'MpRHsCZcCY5mjEoCGqnNeGRoQSzVJ3SNpvgcvhI5.jpeg'),
	(112,65,'aZPYZjq2JGzQHp5Pa5Z3tdnT6r25tDUXvOmlI36n.jpeg'),
	(114,65,'j68sT7sb254O88Tv8is7noEkXpw0RdBdzVfHByDY.jpeg'),
	(115,56,'rBQbRuzn8APso0Ud7b2Z44qXkAD3pib2zyCqsJgM.jpeg'),
	(116,66,'LKSTR7xx3rZGt9bYKBJykIQ7V27ltHl9XwIFgeWq.jpeg'),
	(117,116,'UtFqPxOAljDfhiM83g87XyhUn4kRoyh5bZVIjyFB.jpeg'),
	(118,117,'ZGpzpq4Gpv1kFWhYxhhk8lPhezg5LJEqMVZ6RfaK.jpeg'),
	(119,67,'CA32V9VFuLLaRqImYLhqtVKOprXF2RUPEx4fXmAE.jpeg'),
	(120,119,'yCYQo7ttC1VkRs3TJMN7yIXykI0qeoFWrdDC2Qta.jpeg'),
	(121,120,'6NJqvNQP84gmqEn8wgfx90UjRPc9sdPAQtgqC2XZ.jpeg'),
	(123,122,'YSDEP0VM7k1RtMiKfJ8a9ZgrdoBHdT1biwErVsDB.jpeg'),
	(124,123,'DVxFFKkPau67ezDxRb88udtnXwf35absKBlthWqQ.jpeg'),
	(125,68,'BbM3KTIB9HT25jWKFvJg1s6tfHZ9KAOXUygG3Nvo.jpeg'),
	(126,68,'MBqIYcP4sM1dhNqHFtz6iPvEXG2dEwDVFi6GJaoH.jpeg'),
	(127,68,'xk0XkxhJVIBbwbvM9fyLdM7PvXfVAtopEdR0Pso5.jpeg'),
	(128,69,'rUqmFuYX1I2ree21lBrBkmxVH4dSlQjrMil6tmyZ.jpeg'),
	(130,129,'H2IbtRRavs51Ibh6FlTmyqEn8NGhYzNxAdNKetVm.jpeg'),
	(131,70,'nrE47cwKPslGLZ7vOQ0Wr9t8VNlQNBO1Gxdfcmjw.jpeg'),
	(134,69,'hzKovFwzEXE3QyFFM37ku30erPZkjxtlRBkRPn8x.jpeg'),
	(135,69,'8ErkI6V4SC3XqLRgsfGJ4z1ivqn4klnc53dtjStw.jpeg'),
	(136,70,'SqsTIt5KSlKNjppRZvJU77bbZzmpMXOWtOQV7Uqy.jpeg'),
	(137,70,'Mw1eve4V5wa3Q5JhYxxZ9KCx8VA4GjDQKIDqNyNw.jpeg'),
	(138,71,'wujv0shBFadI5hbpiqUb3QFu186BZ0LkTPzcUyBC.png'),
	(139,138,'VoYP51WehnhnL3Nwf7waNC78TfXnYYleZ6pvgBw4.jpeg'),
	(140,72,'oVXpymyxvxlgapLpcEZbx05ty5QqCPYzJ7kodmE4.jpeg'),
	(141,140,'xJ69uI2HrdiXTDRyU1X8qJ9Y1u4B0tnnUUHJR9se.png'),
	(142,72,'YmR8a9WgD207PNh8LKefz67wdII5JWUhJ994KhsX.png'),
	(143,73,'HwRg5VBuFdwMHL1LbFDwqcw4Qd3xtThhqoZNR45W.jpeg'),
	(144,143,'lG3iCmw1l1PziYRlmWPia6WkF5Cg5WeKccLmncQy.png'),
	(145,74,'3OFf1zbWIvKdQXOEwcOuM45UT0zrISxzSq7RXqMo.jpeg'),
	(146,145,'xNqHeRdNfMl3gk8o3AgjMnuipFCmCOHD3g7HnDTO.jpeg'),
	(147,75,'CZl53dcc6JbIVQmuvhuPQHrrGLliFb3IxtyrMDyY.jpeg'),
	(148,75,'IlilwiiJF62akLsCYjYCg06mbMFVYU33FBXNq8DL.jpeg'),
	(149,76,'KhdnTRzN6KE1SfHjaUDjYYEgciaKhOr5lkN1IFMS.jpeg'),
	(150,149,'bthvP4mZmLpatoxhpiIAanqytrDO0xmj3mkEf98y.jpeg'),
	(151,150,'G9LqGo9BmaaQQIu9fplJxwJPcwAPltjrWajl3Unx.jpeg'),
	(152,77,'wfX5CMOHdduqT7QHexF6SYaoUMPxjISFK0MURrED.jpeg'),
	(153,152,'XnMdZg3FNCFtE24UFB3eNLRO2MDPwzVVCD88wLuE.png'),
	(154,78,'Usc9DwCK3prmtzb95tAKFiV3jr48BXqbO760xyD3.jpeg'),
	(155,81,'mNQBsJ2i9GvZwHB0aElgBwTzyHUu1Ur3iZBOeQjO.jpeg'),
	(156,81,'7xFcADJMk3GIzwcFKPIluMAnnPEp0fYUsMuEbPrb.jpeg'),
	(157,83,'ujiVDqFI2iUBYI3A4pznbDaX5ypeLMxrg44Pt2cJ.jpeg'),
	(158,83,'c7ZBBuUkqIuHrEEKC2D5sv2V3n6XHeAtTEoXHiEU.jpeg'),
	(159,84,'HYYDR8Bed0LittL1ZJ49LIOpgAV4yM7Wm3GM70sB.jpeg'),
	(160,84,'hqW01YDEh7JB50itpr1HWwRl5uKiq3VyAIi3nB4v.jpeg'),
	(161,84,'sv8Y9AZCpr8M5KB3GmPz62gxsolVwZitOchJ1qeb.jpeg'),
	(162,85,'n5wp6TlJALPlQatxyn7VBUNDPznmiSuHEQK6I3AG.jpeg'),
	(163,85,'7AaYslaxTz5DGcLkyqgZdvTEYU95CrXUWdww3ZeX.jpeg'),
	(164,86,'eEOOsP82G84D0ikmohXoqzTKgcegRiojnOhXOyGE.jpeg'),
	(165,86,'Sj5ZF6XSeERKIrbRKvSgpStxVwxz2iFTPXDt9ayg.jpeg'),
	(166,86,'QVzsdjRrIMuwNVNyhQvWnfYzTiPrd5lc0kHbUu9I.jpeg'),
	(167,87,'q0fzf4shFkXCed34Bhh9CiqFSMJy9rahLk5BeBVB.jpeg'),
	(168,87,'QWiatbKHHiSWARuYNDkAEbHzdF3EZKKbtQShrbZ1.jpeg'),
	(169,88,'nW7jyIp0I0tlLZ5WPeBcQ9FNlhgN5ixDt7CIbaGZ.jpeg'),
	(170,88,'squ6roP50Nk6dbvKstaCxxhToExeTfV68sBwq2Xd.jpeg'),
	(171,89,'PMKDPubw1DooKkRJUMBxVRP7hldLgjj0hYixAMvf.jpeg'),
	(172,89,'gzhxrly1Ij9P6lOQbNiRlV0LQOJtqdBuf8hlTnB5.jpeg'),
	(173,89,'fqXVSpftCj5305iceS0NM4uXTs7XwMT8KqefPyim.jpeg'),
	(174,90,'1CCTra5XWy30sSOAnIo11dqyjj4mHCWJaNKD3Mos.jpeg'),
	(175,90,'91pfGdHNYL5ME8NEXBc8zTWT3Bzgf38W4Shqu3wZ.jpeg'),
	(176,91,'joAk98TlnOhhzISWe7H3eKJPfw9OGbAdui8mfinM.jpeg'),
	(177,91,'knxwgOBLiq4ymo0Npg5hzHclwpDghCAulsZcHkYU.jpeg'),
	(178,92,'WXvFh4AyZZqAOWhARqyVWqiQYNLBXwP4qyEgUJbW.jpeg'),
	(179,21,'3UKCSL2YwtJR8k42zC9DuSWLMU9nxy0qgoKm3Sqa.jpeg'),
	(180,21,'vI1IDabkUXio0H67Z6ATO65PYIBlqkCB8EuqXqCL.jpeg'),
	(181,4,'aF2ZFTpJkDBWpUtMfFRNUYz2vxtbP1O4REUBZVey.jpeg'),
	(182,5,'b8RLqrLtlGmVXGcSbdlLdVVFSWf54Ug97CMG2v9I.jpeg'),
	(183,5,'9b4D3I9D2dlntsDn8Vzv5UN1VgqFnGySysTnVqyM.jpeg'),
	(184,6,'mJBg84vhF0iWM6YxnglCf9VfD69c8cwOUbhYs6E0.jpeg'),
	(185,93,'QeerV3yRDRXQhjkfdKDl9TTCotTfISqNj280s1WP.jpeg'),
	(186,94,'QPZEhFGJTIgIkO9T60Szlwes7HqVrOaRf58Z27LE.jpeg'),
	(187,97,'1h7oElkQvvVa4mJc5t9T2yqCpUqNJ0moV62vJv02.jpeg'),
	(188,98,'lfnbaVqsjaxcXFCjJLfVl42ZHq8JYXFyRsKvxzlh.jpeg'),
	(189,98,'6UQFEenKlFybgvtajfA2vP1InlZsmCKo1eRPPlg4.jpeg'),
	(190,99,'pd8MrVLJbY2LYRnVDTu6cltmG5OOyDt7gP2WW9Zk.jpeg'),
	(191,101,'touI2ox95KkVfhUeuhFfZP3Ee2eLUguOKrMtUUjp.jpeg'),
	(192,102,'iRXNs6QsSIxeceC9A1RtKELGTIbBDdrBhqenlcEV.jpeg'),
	(193,102,'zBhCZUcS8w7gF9ufzaQLqI9N6uriQ2CyAkTBbMwX.jpeg'),
	(194,103,'5UwmaQxbXgqojDVgDJxuOD8OCNum8Xm0qaNHsbVZ.jpeg'),
	(195,104,'fWjDQK2o3IV0a75ijdXh8ISpOlgefQAXNwGK6jVz.jpeg'),
	(196,105,'N1ZjQ2M0NMsLwy6iurPbY6RaSSsiEjAw1HFnmZm2.jpeg'),
	(197,106,'DzNZUZbGlZDhcOkTiV6Y2UGIcP3mzpyZ03HuYixg.jpeg'),
	(198,107,'hPZXwjpXHPdZ2DYDsprFSO2erHrYPDYCrgcXUREb.jpeg'),
	(199,108,'C0hGk0K8pmkuLbklyQfs3utb24ACbD9BEHjpKFRy.jpeg'),
	(200,109,'Mttd8Od30NRNEzYBCK7pyfWepSOGKT2xSUzZfIDJ.jpeg'),
	(201,110,'EjwuXZB52ihZsJYZT6WBrJsHNO1WbxxaG3VvLveb.jpeg'),
	(202,111,'iayIBdD40UWPNptg5KpnqFMBf4oaesAkLI4DJkv8.jpeg'),
	(203,111,'n1RWvxqh5rQZWjnIcgwXiWaXJeSt6TBnXcD6DIHF.jpeg'),
	(204,112,'BpxPWUPwf8L9Pfeu06fA5oM6mWMnyqR0ijxYQfCp.jpeg'),
	(205,112,'CMDim7A3TerHqRiE5yNTtwztZe4kbVzt2jY5CxQa.jpeg'),
	(206,113,'bT3qsE5uhUDscd9XotBe51mPJlVWjtvmQVEpHdze.jpeg'),
	(207,114,'eni6Xm3FfGanYf1cepWMBfrFCMaPWwn50dO2OuQ3.jpeg'),
	(208,114,'UgW4fHMA5wekDwwtPQqY7kHyfZJwt8zz5iYsI4fG.jpeg'),
	(209,115,'WsbjqGAE4qUAa9b8wopvXkTJxCe1nCjZQKdXCBYV.jpeg'),
	(210,115,'WSZPDoBOiXP1zmtKi7s7mpXEbS3UlyHTIWokeEqe.jpeg'),
	(211,116,'MsDYgSAjDsMXmu4uRsjcUqdomTS2tn04956qC1pG.jpeg'),
	(212,116,'fP34wVV9LlkMOlkWG14aS62MW4KdpxNya4gtRSMW.jpeg'),
	(213,117,'jgA2gfHvPBGKW1XjVsCo7L58nsNOgVwH2JRHPtoC.jpeg'),
	(214,117,'O7NTHwky0Qyq7WEacxjPk8JGXQrhO2D4v2tQw1sb.jpeg'),
	(215,117,'JSBRefhd4oQFBLPL80Lsf8XYcapXaaKVcJVrOK2L.jpeg'),
	(216,118,'TMQItCkFpebeXVA5M582WN3veTsFvfzSSSWKhD06.jpeg'),
	(217,118,'6gfEaAmwiH8Jo9SwKTIoYQktqBHQg6H8yIWqDYkj.jpeg'),
	(218,119,'R2tkCLUaIPU3fMN9PmHblCn934FDKDcxEW75MXga.jpeg'),
	(219,120,'CMAr5xGIC437bM1cDHgJcCuiMOqXP9ZLrPQhpmQf.jpeg'),
	(220,121,'R1An1Ok9WsYHfCFHR5RLAlKAo3FZi0EZsZXW41KE.jpeg'),
	(221,122,'vyhzghNGJcvLz2blX4pDyT3g05Drp8ggRfBlkvOk.jpeg'),
	(222,122,'SiYXIoPg5dvaGKjGGROjOA0gwjz1Cx1teznhlczM.jpeg'),
	(223,123,'zsvbkmSvqnxiAWZ0dXtiR4JQzFvUfRf0IzkLvaYz.jpeg'),
	(224,123,'F5WLaSrrqMt1Nhq0k0nz63i3yqp1Eo5ye0cPQqkT.jpeg'),
	(225,124,'GviioiUVfIPLiLh7B4XzgsR3QNyGISmDrGRv85Vc.jpeg'),
	(226,124,'pAqqSDzLQk8UYUBEwLIWiXdxHAEOlZXZfvmg2FPX.jpeg'),
	(227,125,'zTvfV9Ho9VIYOCkTLv9TXYydH1VImlE7iY5eyK7e.jpeg'),
	(228,125,'l9CW8dkVYz4gPbJwzikzuLxfmC6FLtLzUskokfq9.jpeg'),
	(229,126,'umgRoJhhaWsVpBjjNTQSsXWyutaXQa9xzdp1bVN9.jpeg'),
	(230,127,'RyDmn9fT0yZ5snDDnmwwibaHAo36G80AcDjZ2y5R.jpeg'),
	(231,128,'FOxecQ8bJQYbw8He8YTBWBtKbhyzTJyUdp0Ms3qR.jpeg'),
	(232,130,'RPN79j1HfElakooTQ8gedkE6lhXVIEmRLuG57rs6.jpeg'),
	(233,130,'6eWnxDcJ8mnOvJ4uojn6fstErB16ON44F3XEkDIF.jpeg'),
	(234,131,'Cg2Y4yCD4VK4Auhi3xRhbx3ZI75tR5nfFKD2EyAp.jpeg'),
	(235,131,'2KSQonRkmhfP0KA2vc5YDzUoqunjNsT7F8dypRnk.jpeg'),
	(236,132,'LfMlBIGEIeSW1TgsWbyJSoXzHzS5gXuKh488kMxP.jpeg'),
	(237,133,'A5AksTVJXNO7lguDXN4uw7YNmIpt0dEkifEBRWYk.jpeg'),
	(238,134,'y2WGzfH9MFwl6fkrcjbZh6hPb2t45fIBVmzLE5Ki.jpeg'),
	(239,134,'zLcZtqodvExQOS1w6ot9NI6saT8SON4xzJQMENBg.jpeg');

/*!40000 ALTER TABLE `item_attach_files` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table items
# ------------------------------------------------------------

DROP TABLE IF EXISTS `items`;

CREATE TABLE `items` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `name_ascii` varchar(500) DEFAULT NULL,
  `name_url` varchar(500) DEFAULT NULL,
  `code` varchar(200) DEFAULT NULL,
  `brand` varchar(200) DEFAULT NULL,
  `color` varchar(200) DEFAULT NULL,
  `manufacturer` varchar(300) DEFAULT NULL,
  `unit_price` double(20,2) DEFAULT NULL,
  `currency` varchar(20) DEFAULT NULL,
  `category_id` int(10) DEFAULT NULL,
  `description` mediumtext,
  `active` char(1) DEFAULT NULL,
  `image_file_name` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(10) DEFAULT NULL,
  `is_new` char(1) DEFAULT NULL,
  `is_out_of_stock` char(1) DEFAULT NULL,
  `old_price` double(20,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `items` WRITE;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;

INSERT INTO `items` (`id`, `name`, `name_ascii`, `name_url`, `code`, `brand`, `color`, `manufacturer`, `unit_price`, `currency`, `category_id`, `description`, `active`, `image_file_name`, `created_at`, `created_by`, `updated_at`, `updated_by`, `is_new`, `is_out_of_stock`, `old_price`)
VALUES
	(4,'Ví nam TD1001','Vi nam TD1001','vi-nam-td1001','TD1001','Đồ da xịn','Đen, vàng','Công ty TNHH Cộng Đồng',300000.00,'VND',1,'<p><span style=\"font-size: 18pt; color: #ff0000;\"><strong>V&iacute; nam đẹp 100% da thật</strong></span></p>\r\n<p><span style=\"font-size: 12pt;\">&loz; Đối với nam giới, v&iacute; da l&agrave; một vật dụng c&aacute; nh&acirc;n kh&ocirc;ng thể thiếu. N&oacute; kh&ocirc;ng chỉ d&ugrave;ng để đựng tiền hay thẻ card m&agrave; c&ograve;n l&agrave; 1 phụ kiện thời trang th&acirc;n thiết.</span></p>\r\n<p><strong><em><span style=\"font-size: 12pt; color: #ff0000;\">Mẫu v&iacute; nam của Đồ da xịn lu&ocirc;n đảm bảo đầy đủ c&aacute;c ti&ecirc;u ch&iacute;:</span></em></strong></p>\r\n<ul>\r\n<li><span style=\"font-size: 12pt;\">Chất liệu: da b&ograve; thật 100%</span></li>\r\n<li><span style=\"font-size: 12pt;\">H&agrave;ng Made in Việt Nam cao cấp</span></li>\r\n<li><span style=\"font-size: 12pt;\">Thiết kế trẻ trung, tiện &iacute;ch</span></li>\r\n<li><span style=\"font-size: 12pt;\">M&ocirc; tả sản phẩm gồm c&oacute;: 2 ngăn ch&iacute;nh để đựng tiền, 1 ngăn c&oacute; kh&oacute;a k&eacute;o k&iacute;n v&agrave; nhiều ngăn nhỏ đựng visa, card hay Chứng minh thư nh&acirc;n d&acirc;n... ngăn nhỏ ph&iacute;a trước để ảnh của bạn hay người th&acirc;n y&ecirc;u.</span></li>\r\n<li><span style=\"font-size: 12pt;\">Sản phẩm c&oacute; 2 m&agrave;u: V&agrave;ng trẻ trung v&agrave; Đen lịch l&atilde;m</span><hr /><em><strong><span style=\"font-size: 14pt;\">Đồ da xịn - Mua thả ga - Gi&aacute; qu&aacute; đ&atilde;!&nbsp;&hearts;</span></strong></em><hr /><span style=\"font-size: 12pt;\"><strong>&hearts; Đồ da xịn cam kết</strong>: </span></li>\r\n<li><span style=\"font-size: 12pt;\">&clubs; Tất cả sản phẩm của ch&uacute;ng t&ocirc;i đều l&agrave; da thật 100% </span></li>\r\n<li><span style=\"font-size: 12pt;\">&clubs;&nbsp;Thanh to&aacute;n khi nhận v&agrave; xem h&agrave;ng </span></li>\r\n<li><span style=\"font-size: 12pt;\">&clubs;&nbsp;Đổi h&agrave;ng trong v&ograve;ng 10 ng&agrave;y nếu sản phẩm bị lỗi</span></li>\r\n<li><span style=\"font-size: 12pt;\">&clubs;C&ograve;n x&agrave;i c&ograve;n bảo h&agrave;nh</span><hr /><strong><span style=\"font-size: 12pt;\">Click Mua ngay để trải nghiệm sự sang trọng của Đồ da xịn !</span></strong></li>\r\n<li><span style=\"font-size: 12pt;\"><em>Hotline</em>: 0974084091 hoặc 01652198403</span></li>\r\n<li><span style=\"font-size: 12pt;\"><em>Fanpage</em>:<a href=\"https://www.facebook.com/dodaxin100/\">https://www.facebook.com/dodaxin100/</a></span></li>\r\n<li><span style=\"font-size: 12pt;\">Kh&aacute;ch lấy sỉ li&ecirc;n hệ trực tiếp đến Hotline của ch&uacute;ng t&ocirc;i.</span></li>\r\n</ul>','1','HdF3cnfQLdbQap3PCiZ76K45V0Cw3Y1csi4UrfUL.jpeg','2016-08-01 10:30:05',1,'2016-09-26 10:37:24',1,'1','9',0.00),
	(5,'Ví da bò TD1002','Vi da bo TD1002','vi-da-bo-td1002','TD1002','Đồ da xịn','Đen, vàng, nâu','Công ty TNHH Cộng Đồng',350000.00,'VND',1,'<p><span style=\"color: #333399;\"><strong><span style=\"font-size: 14pt;\">V&iacute; nam da b&ograve; cao cấp</span></strong></span></p>\r\n<p><em><span style=\"font-size: 12pt;\">&spades; Đồ da xịn cho ra mắt Bộ sưu tập v&iacute; nam với chất liệu da b&ograve; thật 100%. tất cả đều l&agrave; h&agrave;ng Made in Việt Nam cao cấp.</span></em></p>\r\n<p><em><span style=\"font-size: 12pt;\">&spades;D&ugrave;ng h&agrave;ng Việt Nam - V&igrave; t&ocirc;i y&ecirc;u nước Việt!</span></em></p>\r\n<hr />\r\n<p>&nbsp;</p>\r\n<p><em><span style=\"font-size: 12pt;\">&hearts; Sản phẩm được thiết kế bằng tay nghề của những người thợ da l&agrave;nh nghề v&agrave; tận tụy. Dựa tr&ecirc;n nền tảng 3 m&agrave;u sắc cơ bản của da thật l&agrave; V&agrave;ng, đen v&agrave; n&acirc;u họ đ&atilde; cho ra đời những mẫu thiết kế thời trang, phong c&aacute;ch m&agrave; cực k&igrave; sang trọng.</span></em></p>\r\n<p><em><span style=\"font-size: 12pt;\">&hearts; L&agrave; 1 người đ&agrave;n &ocirc;ng - Bạn kh&ocirc;ng thể Kh&ocirc;ng sở hữu sản phẩm n&agrave;y!</span></em></p>\r\n<p><span style=\"color: #333399;\"><strong><em><span style=\"font-size: 12pt;\">Đồ da xịn lu&ocirc;n cam kết với tất cả kh&aacute;ch h&agrave;ng:</span></em></strong></span></p>\r\n<p><em><span style=\"font-size: 12pt;\">&diams; 100% da thật</span></em></p>\r\n<p><em><span style=\"font-size: 12pt;\">&diams; H&agrave;ng chuẩn, y h&igrave;nh (tất cả h&igrave;nh ảnh on web đều do ch&uacute;ng t&ocirc;i tự chụp)</span></em></p>\r\n<p><em><span style=\"font-size: 12pt;\">&diams; Đổi h&agrave;ng trong v&ograve;ng 10 ng&agrave;y nếu sản phẩm bị lỗi</span></em></p>\r\n<p><em><span style=\"font-size: 12pt;\">&diams; Thanh to&aacute;n khi nhận v&agrave; xem h&agrave;ng</span></em></p>\r\n<p><em><span style=\"font-size: 12pt;\">&diams; C&ograve;n x&agrave;i c&ograve;n bảo h&agrave;nh!</span></em></p>\r\n<hr />\r\n<p>&nbsp;</p>\r\n<p><em><span style=\"font-size: 12pt;\"><strong><span style=\"font-size: 14pt;\">Mua ngay để tận hưởng sản phẩm v&agrave; dịch vụ tuyệt vời của ch&uacute;ng t&ocirc;i</span></strong></span></em></p>\r\n<p><strong><span style=\"font-size: 14pt;\"><em>ĐỒ da xịn - Mua thả ga - Gi&aacute; q&uacute;a đ&atilde;&nbsp;</em></span></strong></p>\r\n<hr />\r\n<p>&nbsp;</p>\r\n<p><strong><span style=\"font-size: 14pt;\">&nbsp;</span></strong></p>\r\n<p><em><span style=\"font-size: 12pt;\">Hotline: 0974084091 or 01652198403</span></em></p>\r\n<p><em><span style=\"font-size: 12pt;\">Fanpage:&nbsp;<a href=\"https://www.facebook.com/dodaxin100/\">https://www.facebook.com/dodaxin100/</a></span></em></p>\r\n<p><em><span style=\"font-size: 12pt;\">C&aacute;c kh&aacute;ch h&agrave;ng đặt sỉ vui l&ograve;ng li&ecirc;n hệ trực tiếp với ch&uacute;ng t&ocirc;i qua hotline tr&ecirc;n</span></em></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>','1','aJqisvOESfN2fu36Fq3TdHR2hBrskWjhL2iBQMiA.jpeg','2016-08-01 13:52:29',1,'2016-09-26 10:43:19',1,'1','9',0.00),
	(6,'Túi da ipad TD4001','Tui da ipad TD4001','tui-da-ipad-td4001','TD4001','Đồ da xịn','Vàng, đen','Công ty TNHH Cộng Đồng',820000.00,'VND',4,'<p><span style=\"color: #000080;\"><strong><span style=\"font-size: 14pt;\">T&uacute;i ipad da thật</span></strong></span></p>\r\n<hr />\r\n<p>&nbsp;</p>\r\n<p><em><span style=\"font-size: 12pt;\">&hearts; Thương hiệu t&uacute;i Ipad da của Đồ da xịn từ l&acirc;u đ&atilde; khẳng định được t&ecirc;n tuổi tr&ecirc;n thị trường trong v&agrave; ngo&agrave;i nước</span></em></p>\r\n<p><em><span style=\"font-size: 12pt;\">&hearts; T&uacute;i ipad l&agrave; một sản phẩm vừa thời trang vừa tiện &iacute;ch kh&ocirc;ng thể thiếu trong thời đại ng&agrave;y nay</span></em></p>\r\n<p><em><span style=\"font-size: 12pt;\">&hearts; Sở hữu 1 chiếc t&uacute;i ipad vừa đẹp, vừa tiện &iacute;ch sẽ gi&uacute;p bạn trở n&ecirc;n tự tịn, v&agrave; c&aacute; t&iacute;nh hơn!</span></em></p>\r\n<p><em><span style=\"font-size: 12pt;\">&asymp; Chất liệu: da b&ograve; thật 100%</span></em></p>\r\n<p><em><span style=\"font-size: 12pt;\">&asymp; Thiết kế thời trang, hiện đại, tiện dụng</span></em></p>\r\n<p><em><span style=\"font-size: 12pt;\">&asymp; Xuất xứ: Ch&iacute;nh h&atilde;ng</span></em></p>\r\n<p><em><span style=\"font-size: 12pt;\">&asymp; C&ograve;n x&agrave;i c&ograve;n bảo h&agrave;nh</span></em></p>\r\n<p><em><span style=\"font-size: 12pt;\">&asymp; Đổi h&agrave;ng trong v&ograve;ng 10 ng&agrave;y nếu ph&aacute;t hiện lỗi</span></em></p>\r\n<p><em><span style=\"font-size: 12pt;\">&asymp;Thanh to&aacute;n khi nhận v&agrave; xem h&agrave;ng</span></em></p>\r\n<hr />\r\n<p>&nbsp;</p>\r\n<p><span style=\"color: #000080;\"><strong><em><span style=\"font-size: 12pt;\">Đồ da xịn - Bao gi&aacute; to&agrave;n thị trường</span></em></strong></span></p>\r\n<hr />\r\n<p>&nbsp;</p>\r\n<p><em><span style=\"font-size: 12pt;\">Hotline: 0974.084.091 or 01652.198.403</span></em></p>\r\n<p><em><span style=\"font-size: 12pt;\">Fanpage:&nbsp;<a href=\"https://www.facebook.com/dodaxin100/\">https://www.facebook.com/dodaxin100/</a></span></em></p>\r\n<p><em><span style=\"font-size: 12pt;\">Kh&aacute;ch sỉ li&ecirc;n lạc trực tiếp với ch&uacute;ng t&ocirc;i.</span></em></p>','1','Rbq6g8sYqOmGHuBswMM57Rnp52RAxu5UIe0TNW5N.jpeg','2016-08-01 14:34:40',1,'2016-09-26 10:53:41',1,'1','9',1100000.00),
	(8,'Túi ipad TD4002','Tui ipad TD4002','tui-ipad-td4002','TD4002','Đồ da xịn','Nâu, vàng','Công ty TNHH Cộng Đồng',820000.00,'VND',4,'<p><strong><span style=\"font-size: 14pt;\">T&uacute;i ipad da - Phong c&aacute;ch thời thượng!</span></strong></p>\r\n<p><span style=\"font-size: 10pt;\">&hearts;Thiết kế: trẻ trung, thời trang v&agrave; tiện &iacute;ch</span></p>\r\n<p><span style=\"font-size: 10pt;\">&hearts;Chất liệu: 100% da thật</span></p>\r\n<p><span style=\"font-size: 10pt;\">&hearts;Xuất xứ: H&agrave;ng ch&iacute;nh h&atilde;ng Made in Việt Nam cao cấp</span></p>\r\n<p><strong><span style=\"font-size: 12pt; color: #ff6600;\">Đồ da xịn - Bao gi&aacute; - Bao chất to&agrave;n thị trường</span></strong></p>\r\n<p><strong><span style=\"font-size: 12pt; color: #ff6600;\">H&atilde;y đến với ch&uacute;ng t&ocirc;i để tận hưởng sản phẩm, dịch vụ thương hiệu h&agrave;ng đầu VN</span></strong></p>\r\n<hr />\r\n<p>&nbsp;</p>\r\n<p><strong><span style=\"font-size: 10pt;\">Đồ da xịn cam kết:</span></strong></p>\r\n<p><span style=\"font-size: 10pt;\">&diams;Thanh to&aacute;n khi nhận h&agrave;ng</span></p>\r\n<p><span style=\"font-size: 10pt;\">&diams;Đổi h&agrave;ng trong 10 ng&agrave;y nếu ph&aacute;t hiện sản phẩm bị lỗi</span></p>\r\n<p><span style=\"font-size: 10pt;\">&diams;C&ograve;n x&agrave;i c&ograve;n bảo h&agrave;nh&nbsp;</span></p>\r\n<p><span style=\"font-size: 10pt;\">&rArr;Click mua ngay bằng c&aacute;ch để lại [SĐT + Địa chỉ] của bạn, ch&uacute;ng t&ocirc;i sẽ li&ecirc;n hệ v&agrave; gửi h&agrave;ng cho b ngay!</span></p>\r\n<p><span style=\"font-size: 10pt;\">Hotline: 0974084091 or 01652198403</span></p>\r\n<p><span style=\"font-size: 10pt;\">Email:dodaxin@gmail.com</span></p>\r\n<p><span style=\"font-size: 10pt;\">Fanpage:<a href=\"https://www.facebook.com/dodaxin100/\">https://www.facebook.com/dodaxin100/</a></span></p>\r\n<p><span style=\"font-size: 10pt;\">kh&aacute;ch sỉ li&ecirc;n hệ nh&eacute;!</span></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>','1','d6CGr7e0S45zTWgIVPBnG1G7dVmKQdCFPiZCcbhW.jpeg','2016-08-05 09:46:48',1,'2016-08-22 22:54:34',1,'1','9',0.00),
	(10,'Ví da nữ TD2001','Vi da nu TD2001','vi-da-nu-td2001','TD2001','Đồ da xịn','Vàng, đen','Công ty TNHH Cộng Đồng',350000.00,'VND',2,'<p><strong><span style=\"font-size: 12pt; color: #ff0000;\">V&Iacute; H&Agrave;NG HIỆU - TI&Ecirc;U TIỀN TRIỆU</span></strong></p>\r\n<p><span style=\"font-size: 10pt;\">&hearts; Thiết kế: sang trọng, thanh lịch v&agrave; tiện &iacute;ch.&nbsp;</span></p>\r\n<p><span style=\"font-size: 10pt;\">&hearts; V&iacute; được chia th&agrave;nh 2 ngăn lớn đựng tiền, điện thoại. Một ngăn kh&oacute;a c&ugrave;ng nhiều ngăn nhỏ để đựng CMTND hay card</span></p>\r\n<p><span style=\"font-size: 10pt;\">&hearts; Chất liệu: da b&ograve; thật 100%</span></p>\r\n<p><span style=\"font-size: 10pt;\">&hearts; Xuất xứ: h&agrave;ng made in Việt Nam cao cấp</span></p>\r\n<p><span style=\"font-size: 10pt;\">&hearts; M&agrave;u sắc: Đen, v&agrave;ng</span></p>\r\n<p><strong><span style=\"font-size: 10pt;\">Đồ da xịn - Bao đẹp - Bao chất lu&ocirc;n</span></strong></p>\r\n<hr />\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-size: 10pt;\">Mua ngay bằng c&aacute;ch để lại [SĐT + Địa chỉ] của bạn, ch&uacute;ng t&ocirc;i sẽ li&ecirc;n lạc v&agrave; gửi h&agrave;ng ngay cho bạn</span></p>\r\n<p><span style=\"font-size: 10pt;\">&clubs; Thanh to&aacute;n khi nhận h&agrave;ng</span></p>\r\n<p><span style=\"font-size: 10pt;\">&clubs; Đổi h&agrave;ng trong 10 ngay nếu ph&aacute;t hiện sp bị lỗi</span></p>\r\n<p><span style=\"font-size: 10pt;\">&clubs; C&ograve;n x&agrave;i c&ograve;n bảo h&agrave;nh</span></p>\r\n<p><span style=\"font-size: 10pt;\">Li&ecirc;n hệ hotline: 0974084091</span></p>\r\n<p><span style=\"font-size: 10pt;\">Fanpage:&nbsp;<a href=\"https://www.facebook.com/dodaxin100/\">https://www.facebook.com/dodaxin100/</a></span></p>\r\n<p><span style=\"font-size: 10pt;\">Email: <a href=\"mailto:dodaxin@gmail.com\">dodaxin@gmail.com</a></span></p>\r\n<p><span style=\"font-size: 10pt;\">Kh&aacute;ch sỉ li&ecirc;n hệ!</span></p>','1','IsGv0YJqtVeccSWK4U2u2mWz7MRe1wFrrCQigup3.jpeg','2016-08-08 10:22:43',1,'2016-09-13 07:53:09',1,'1','9',0.00),
	(11,'Dây lưng TD3005','Day lung TD3005','day-lung-td3005','TD3005','Đồ da xịn','Đen','Công ty TNHH Cộng Đồng',350000.00,'VND',3,'<p><strong><span style=\"font-size: 12pt; color: #ff0000;\">D&acirc;y lưng nam da thật - Độc đẹp, đẳng cấp</span></strong></p>\r\n<p><span style=\"font-size: 10pt;\">&clubs; Sản phẩm gồm 1 d&acirc;y lưng chất liệu da b&ograve; thật 100% v&agrave; 1 mặt kh&oacute;a h&igrave;nh b&aacute;o si&ecirc;u chất được l&agrave;m từ hợp kim kh&ocirc;ng m&ograve;n, kh&ocirc;ng gỉ s&eacute;t.</span></p>\r\n<p><span style=\"font-size: 10pt;\">&clubs; Rất ph&ugrave; hợp để sử dụng v&agrave; l&agrave;m qu&agrave; biếu, qu&agrave; tặng bạn b&egrave;, người th&acirc;n</span></p>\r\n<p><span style=\"font-size: 10pt;\">&clubs; H&agrave;ng c&oacute; sẵn tại Đồ da xịn</span></p>\r\n<p><span style=\"font-size: 10pt;\">&clubs; Ảnh thật 100%, fullbox, tem thẻ đầy đủ</span></p>\r\n<p><span style=\"font-size: 10pt;\">&clubs; Bao gi&aacute; to&agrave;n thị trường</span></p>\r\n<hr />\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-size: 10pt;\">Inbox - Gọi hotline để đặt h&agrave;ng nhanh</span></p>\r\n<p><span style=\"font-size: 10pt;\">Kh&aacute;ch sỉ li&ecirc;n hệ trực tiếp</span></p>\r\n<hr />\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-size: 10pt;\">Hotline: 0974084091 - 01652198403</span></p>\r\n<p><span style=\"font-size: 10pt;\">Email: <a href=\"mailto:dodaxin@gmail.com\">dodaxin@gmail.com</a></span></p>\r\n<p><span style=\"font-size: 10pt;\">Fanpage:&nbsp;<a href=\"https://www.facebook.com/dodaxin100/\">https://www.facebook.com/dodaxin100/</a></span></p>','1','EQLTkjSr1ncvpXeN3EgFmjdSP84sbaSGiPRj6vlq.jpeg','2016-08-20 08:57:00',1,'2016-08-22 22:33:08',1,'1','9',380000.00),
	(12,'Dây lưng TD3006','Day lung TD3006','day-lung-td3006','TD3006','Đồ da xịn','Đen, vàng, nâu','Công ty TNHH Cộng Đồng',350000.00,'VND',3,'<p><span style=\"font-size: 12pt;\"><strong><span style=\"color: #008000;\">D&acirc;y lưng nam da thật</span></strong></span></p>\r\n<p><span style=\"font-size: 10pt;\">&diams; Sản phẩm d&acirc;y lưng kết hợp với đầu kh&oacute;a kim thời trang bền đẹp, kh&ocirc;ng m&ograve;n, kh&ocirc;ng gỉ</span></p>\r\n<p><span style=\"font-size: 10pt;\">&diams; Th&iacute;ch hợp cho việc sử dụng hoặc l&agrave;m qu&agrave; biếu - tặng bạn b&egrave; người th&acirc;n</span></p>\r\n<p><span style=\"font-size: 10pt;\">&diams; H&agrave;ng c&oacute; sẵn</span></p>\r\n<p><span style=\"font-size: 10pt;\">&diams; Ảnh thật 100%</span></p>\r\n<p><span style=\"font-size: 10pt;\">&diams; Bao gi&aacute; tr&ecirc;n to&agrave;n thị trường</span></p>\r\n<hr />\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-size: 10pt;\">INBOX - gọi Hotline mua ngay&nbsp;<img src=\"http://dodaxin.com/backend/assets/plugins/tinymce/js/tinymce/plugins/emoticons/img/smiley-laughing.gif\" alt=\"laughing\" /></span></p>\r\n<p><span style=\"font-size: 10pt;\">&radic; Thanh to&aacute;n khi nhận v&agrave; xem h&agrave;ng</span></p>\r\n<p><span style=\"font-size: 10pt;\">&radic; Đổi h&agrave;ng trong 10 ng&agrave;y nếu ph&aacute;t hiện sp bị lỗi</span></p>\r\n<p><span style=\"font-size: 10pt;\">&radic; Bảo h&agrave;nh 12 th&aacute;ng</span></p>\r\n<hr />\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-size: 10pt;\">Hotline: 0974084091 - 01652198403</span></p>\r\n<p><span style=\"font-size: 10pt;\">Email: <a href=\"mailto:dodaxin@gmail.com\">dodaxin@gmail.com</a></span></p>\r\n<p><span style=\"font-size: 10pt;\">Fanpage:&nbsp;<a href=\"https://www.facebook.com/dodaxin100/\">https://www.facebook.com/dodaxin100/</a></span></p>\r\n<p><span style=\"font-size: 10pt;\">Kh&aacute;ch sỉ li&ecirc;n hệ để nhận b&aacute;o gi&aacute;<img src=\"http://dodaxin.com/backend/assets/plugins/tinymce/js/tinymce/plugins/emoticons/img/smiley-smile.gif\" alt=\"smile\" /></span></p>','1','vLIKmbZgf6NMAgVNKQVSNBcbZJJ1C6igR3pjG14G.jpeg','2016-08-20 09:19:01',1,'2016-09-28 09:20:25',1,'9','1',0.00),
	(13,'Dây lưng TD3007','Day lung TD3007','day-lung-td3007','TD3007','Đồ da xịn','Đen, vàng, nâu','Công ty TNHH Cộng Đồng',350000.00,'VND',3,'<p><strong><span style=\"font-size: 12pt; color: #0000ff;\">D&acirc;y lưng nam Đẹp, độc, đẳng cấp</span></strong></p>\r\n<p><span style=\"font-size: 10pt;\">&spades; Top sản phẩm b&aacute;n chạy tại Đồ da xịn</span></p>\r\n<p><span style=\"font-size: 10pt;\">&spades; D&acirc;y da b&ograve; thật 100% - Mặt kh&oacute;a lăn được l&agrave;m từ hợp kim cao cấp si&ecirc;u bền đẹp</span></p>\r\n<p><span style=\"font-size: 10pt;\">&spades; Ảnh thật do ad tự chụp</span></p>\r\n<p><span style=\"font-size: 10pt;\">&spades; H&agrave;ng c&oacute; sẵn tại Đồ da xịn</span></p>\r\n<p><span style=\"font-size: 10pt;\">&spades; Gi&aacute; cả cực cạnh tranh</span></p>\r\n<hr />\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-size: 10pt;\">INBOX - gọi Hotline để mua h&agrave;ng</span></p>\r\n<p><span style=\"font-size: 10pt;\">&bull; Thanh to&aacute;n khi nhận v&agrave; xem h&agrave;ng</span></p>\r\n<p><span style=\"font-size: 10pt;\">&bull; Đổi h&agrave;ng trong 10 ng&agrave;y nếu ph&aacute;t hiện sp bị lỗi</span></p>\r\n<p><span style=\"font-size: 10pt;\">&bull; Bảo h&agrave;nh l&ecirc;n đến 12 th&aacute;ng</span></p>\r\n<hr />\r\n<p><span style=\"font-size: 10pt;\">&radic; Chi tiết li&ecirc;n hệ hotline: 0974084091 - 01652198403</span></p>\r\n<p><span style=\"font-size: 10pt;\">&radic; Email: <a href=\"mailto:dodaxin@gmail.com\">dodaxin@gmail.com</a></span></p>\r\n<p><span style=\"font-size: 10pt;\">&radic; Fanpage:&nbsp;<a href=\"https://www.facebook.com/dodaxin100/\">https://www.facebook.com/dodaxin100/</a></span></p>\r\n<p><span style=\"font-size: 10pt;\">&radic; Kh&aacute;ch sỉ li&ecirc;n hệ để nhận b&aacute;o gi&aacute;</span></p>','1','e964PEJ8REPowEoxY2OX6N5JvmjGAv3cf7ioiemu.jpeg','2016-08-20 09:50:40',1,'2016-08-22 22:33:23',1,'1','9',0.00),
	(14,'Dây lưng TD3011','Day lung TD3011','day-lung-td3011','TD3011','vy đồ da','đen','',300000.00,'VND',3,'<p>test</p>','1','cqoSSSaUiurXzUiokPDbSvV5Gqz2gVJJR02XBQ6d.jpeg','2016-08-24 12:59:33',1,'2016-08-24 13:00:04',1,'9','9',0.00),
	(15,'Ví da TD 1004','Vi da TD 1004','vi-da-td-1004','TD 1004','Đồ da xịn','Nâu, vàng, đen','Công ty TNHH Cộng Đồng',320000.00,'VND',1,'','1','7WvmD3sqUtAvy4pWp62WLBdRStjHk2CNN5hk1Ev5.jpeg','2016-08-26 10:39:23',1,'2016-09-13 07:49:56',1,'1','9',0.00),
	(17,'Ví da nam TD 1005','Vi da nam TD 1005','vi-da-nam-td-1005','TD 1005','Đồ da xịn','Đen, vàng','Công ty TNHH Cộng Đồng',270000.00,'VND',1,'','1','dvCv7yzzN8oB9z9nMJqST6ViNx7fL2Z7YIBAwOBG.jpeg','2016-08-26 10:42:32',1,'2016-09-13 07:50:17',1,'1','9',0.00),
	(18,'Ví da TD 1006','Vi da TD 1006','vi-da-td-1006','TD 1006','Đồ da xịn','Vàng','Công ty TNHH Cộng Đồng',350000.00,'VND',1,'','1','fwXz9V0TNwn7i7CdGBKbcvBaswDaLurT0HB7Zv2a.jpeg','2016-08-26 10:44:31',1,'2016-09-13 07:52:20',1,'1','9',0.00),
	(19,'Ví da TD 1007','Vi da TD 1007','vi-da-td-1007','TD 1007','Đồ da xịn','Nâu','Công ty TNHH Cộng Đồng',300000.00,'VND',1,'','1','hhskC3opspMEXhJ7xVaJYHmn5vfjFOSJdBHS1S2H.jpeg','2016-08-26 10:47:04',1,'2016-08-26 10:47:04',1,'1','9',0.00),
	(20,'Ví da nữ TD2002','Vi da nu TD2002','vi-da-nu-td2002','TD 2002','Đồ da xịn','Đen, vàng, nâu','Công ty TNHH Cộng Đồng',320000.00,'VND',2,'','1','MYQp7nEBg18cQuDdkrTkqJquPNkqce9nv84Sp7QI.jpeg','2016-08-26 10:57:13',1,'2016-09-12 17:44:25',1,'1','9',0.00),
	(21,'Túi ipad nam TD4003','Tui ipad nam TD4003','tui-ipad-nam-td4003','TD4003','Đồ da xịn','Đen, vàng, nâu, đỏ','Công ty TNHH Cộng Đồng',1200000.00,'VND',4,'','1','VNivamfyuZT5ugdIWfBWEkwkEVFXZu5gDk7Kg8gv.jpeg','2016-08-26 11:05:38',1,'2016-09-26 10:28:46',1,'1','9',1500000.00),
	(22,'Túi ipad nam TD4004','Tui ipad nam TD4004','tui-ipad-nam-td4004','TD 4004','Đồ da xịn','Đen, vàng','Công ty TNHH Cộng Đồng',850000.00,'VND',4,'','1','JvXBzewdkd0hUDfqBklyKIxGxBq6ad51DFiP3sEj.jpeg','2016-08-26 11:14:26',1,'2016-09-16 16:19:53',1,'1','9',0.00),
	(23,'Ví nữ TD2003','Vi nu TD2003','vi-nu-td2003','TD2003','Đồ da xịn','Vàng, đen, nâu','Công ty TNHH Cộng Đồng',320000.00,'VND',2,'','1','L4wfTHnDfcQWnbv8uYx8uBN9C1a71IuQXHRV0DJ2.jpeg','2016-08-26 11:17:17',1,'2016-09-12 17:43:23',1,'1','9',0.00),
	(24,'Dây lưng TD 3010','Day lung TD 3010','day-lung-td-3010','TD 3010','Đồ da xịn','Vàng, đen','Công ty TNHH Cộng Đồng',250000.00,'VND',3,'','1','cUqnafhr7S622ZGzpkCtV8jEvNirNqXAgx4bXBIH.jpeg','2016-08-26 15:30:15',1,'2016-08-30 15:03:55',1,'1','9',0.00),
	(25,'Dây lưng TD 3012','Day lung TD 3012','day-lung-td-3012','TD 3012','Đồ da xịn','Đen, vàng, nâu','Công ty TNHH Cộng Đồng',300000.00,'VND',3,'','1','OWt6pQnUMoof8AwQOnjeI6o4gF9FU9qPVZyFE3Gg.jpeg','2016-08-26 15:32:59',1,'2016-08-26 15:32:59',1,'1','9',0.00),
	(26,'Dây lưng TD 3013','Day lung TD 3013','day-lung-td-3013','TD3013','Đồ da xịn','Đen, vàng, nâu','Công ty TNHH Cộng Đồng',300000.00,'VND',3,'','1','FTu03VDNMC9knLZh0Q9NSMT7bOBK5uOXNLRDbZ2F.jpeg','2016-08-26 15:34:29',1,'2016-09-28 09:20:45',1,'9','9',0.00),
	(27,'Dây lưng TD3014','Day lung TD3014','day-lung-td3014','TD3014','Đồ da xịn','đen, vàng','Công ty TNHH Cộng Đồng',280000.00,'VND',3,'','1','PpFdXeqwDghK6f2yxjOgUPgcJj24R6qRPzHBz3oS.jpeg','2016-08-30 15:06:03',1,'2016-08-30 15:06:03',1,'1','9',0.00),
	(28,'Dây lưng TD3015','Day lung TD3015','day-lung-td3015','TD3015','Đồ da xịn','Vàng, đen','Công ty TNHH Cộng Đồng',260000.00,'VND',3,'','1','7IkJ04byiMoTu6patVhlvrBLpIoQ3LSadpsvZdCP.jpeg','2016-08-30 15:08:07',1,'2016-08-30 15:08:07',1,'1','9',0.00),
	(29,'Dây lưng TD3016','Day lung TD3016','day-lung-td3016','TD3016','Đồ da xịn','vàng','Công ty TNHH Cộng Đồng',250000.00,'VND',3,'','1','8Kxbz3QFWyIBCERRAAkG9oV3EIx8HX9sCT9jJa4f.jpeg','2016-08-30 15:09:37',1,'2016-08-30 15:09:37',1,'1','9',0.00),
	(30,'Dây lưng TD3017','Day lung TD3017','day-lung-td3017','TD3017','Đồ da xịn','nâu, vàng','Công ty TNHH Cộng Đồng',250000.00,'VND',3,'','1','zXXCD0c5nV4fIh1hGK4MAy2I1ejucG146WEIueHt.jpeg','2016-08-30 15:10:57',1,'2016-08-30 15:10:57',1,'1','9',0.00),
	(31,'Dây lưng TD3018','Day lung TD3018','day-lung-td3018','TD3018','Đồ da xịn','Đen, vàng, nâu','Công ty TNHH Cộng Đồng',250000.00,'VND',3,'','1','JuHg5zTxtMQb1AWRby1PUsaBAtuq05skwsbygUJl.jpeg','2016-08-30 15:12:30',1,'2016-08-30 15:12:30',1,'1','9',0.00),
	(32,'Dây lưng TD3019','Day lung TD3019','day-lung-td3019','TD3019','Đồ da xịn','nâu','Công ty TNHH Cộng Đồng',250000.00,'VND',3,'','1','W50HqGxpuY12tj2lVffiSukcXcfQOVF70vEaWsC4.jpeg','2016-08-30 15:13:47',1,'2016-08-30 15:13:47',1,'1','9',0.00),
	(33,'Ví nữ TD2004','Vi nu TD2004','vi-nu-td2004','TD2004','Đồ da xịn','nâu','Công ty TNHH Cộng Đồng',350000.00,'VND',2,'','1','xv9VeyIGoyDKaOnlCI4FoWT6QCMMTiiXr1OOL4UH.jpeg','2016-08-30 15:15:21',1,'2016-09-13 07:53:39',1,'1','9',0.00),
	(34,'Ví nữ TD2005','Vi nu TD2005','vi-nu-td2005','TD2005','Đồ da xịn','Đen','Công ty TNHH Cộng Đồng',350000.00,'VND',2,'','1','VX1zeOCSwcaJhd1hwpDBLyQi1lqoaOKMMhKEzNRS.jpeg','2016-08-30 15:16:30',1,'2016-09-13 07:54:13',1,'1','9',0.00),
	(35,'Ví nam TD1008','Vi nam TD1008','vi-nam-td1008','TD1008','Đồ da xịn','Đen','Công ty TNHH Cộng Đồng',550000.00,'VND',1,'','1','4cxFy1yCE6Dest8a0eqYugzBkFIubIOqrk7iL88r.jpeg','2016-08-30 15:23:48',1,'2016-09-12 14:11:19',1,'1','9',0.00),
	(36,'Da cá sấu TD3020','Da ca sau TD3020','da-ca-sau-td3020','TD3020','Đồ da xịn','Đen, vàng, nâu','Công ty TNHH Cộng Đồng',1200000.00,'VND',3,'','1','iQhKuWXtCX0AJA5swe9e3qF0kaNoWT0QEigsjK6G.jpeg','2016-08-30 16:27:30',1,'2016-10-09 22:54:29',1,'1','9',0.00),
	(37,'Da cá sấu TD3021','Da ca sau TD3021','da-ca-sau-td3021','TD3021','Đồ da xịn','Vàng','Công ty TNHH Cộng Đồng',1200000.00,'VND',3,'','1','9FEQlBEiTOjdP2yy4TlbW8NKAgl9fXk6oAoRfmBN.jpeg','2016-08-30 16:28:41',1,'2016-10-09 22:54:52',1,'1','9',0.00),
	(38,'Da cá sấu TD3022','Da ca sau TD3022','da-ca-sau-td3022','TD3022','Đồ da xịn','nâu','Công ty TNHH Cộng Đồng',1200000.00,'VND',3,'','1','ymmixYjHcLRtJE9hwfrjOanuZQsEpMooPhF83Fr4.jpeg','2016-08-30 16:29:48',1,'2016-09-26 21:20:44',1,'1','9',0.00),
	(39,'Dây lưng  TD3023','Day lung  TD3023','day-lung-td3023','TD3023','Đồ da xịn','đen','',1200000.00,'VND',3,'','1','3BKNdBsU9sFRZE6YIEqYuA1Q2nB0jYkms5CSFiJq.jpeg','2016-08-30 16:31:10',1,'2016-09-11 11:32:09',1,'1','9',0.00),
	(40,'Ví da TD1009','Vi da TD1009','vi-da-td1009','TD1009','Đồ da xịn','Đen','Công ty TNHH Cộng Đồng',280000.00,'VND',1,'','1','GC0ckaYm6PzX5EFICSOnSHBY6ol91dQTr6AZNmgc.jpeg','2016-09-01 10:07:08',1,'2016-09-13 07:45:45',1,'1','9',0.00),
	(41,'Ví da nam TD1010','Vi da nam TD1010','vi-da-nam-td1010','TD1010','Đồ da xịn','Đen','Công ty TNHH Cộng Đồng',280000.00,'VND',1,'','1','Xn4fULdk3PRAa0xU8wMbnHJanjE6nNKP523mv8Fk.jpeg','2016-09-01 10:08:53',1,'2016-09-13 07:46:19',1,'1','9',0.00),
	(42,'Ví da nam TD1011','Vi da nam TD1011','vi-da-nam-td1011','TD1011','Đồ da xịn','Đen','Công ty TNHH Cộng Đồng',280000.00,'VND',1,'','1','QEAaowDEctUpgwwMnu6xC4ulPDQsy75oBLArUu6q.jpeg','2016-09-01 10:10:29',1,'2016-09-13 07:46:50',1,'1','9',0.00),
	(43,'Ví nam TD1012','Vi nam TD1012','vi-nam-td1012','TD1012','Đồ da xịn','Đen','Công ty TNHH Cộng Đồng',280000.00,'VND',1,'','1','MXbP98uM0CCINFs7zOJntBQBfnRwqZ6eB3j2fzig.jpeg','2016-09-01 10:30:24',1,'2016-09-13 07:47:23',1,'1','9',0.00),
	(44,'Ví nam TD1013','Vi nam TD1013','vi-nam-td1013','TD1013','Đồ da xịn','Đen','Công ty TNHH Cộng Đồng',280000.00,'VND',1,'','1','944uWq9rFToUwwhfBULxFdzXgiHOgA2D5cUV4y0s.jpeg','2016-09-01 10:59:39',1,'2016-09-13 07:47:54',1,'1','9',0.00),
	(45,'ví nam TD1014','vi nam TD1014','vi-nam-td1014','TD1014','Đồ da xịn','nâu','Công ty TNHH Cộng Đồng',280000.00,'VND',1,'','1','u3np4LfkuYT8cV1ezQfBKoKZsEa6wGjbGZ7GlMdL.jpeg','2016-09-01 11:01:06',1,'2016-09-13 07:48:24',1,'1','9',0.00),
	(47,'Dây lưng TD3024','Day lung TD3024','day-lung-td3024','TD3024','Đồ da xịn','Đen','Công ty TNHH Cộng Đồng',350000.00,'VND',3,'','1','tkhkh8b1ZZV71Y5XeWDcVN3x7utIz25PbVH3u9rJ.jpeg','2016-09-11 11:01:00',1,'2016-09-11 11:01:00',1,'1','9',0.00),
	(48,'Dây lưng TD3025','Day lung TD3025','day-lung-td3025','TD3025','Đồ da xịn','Đen','Công ty TNHH Cộng Đồng',350000.00,'VND',3,'','1','0qEGGFQPunnfk6OqVrrsg8auFpSnAIxpYxQeULIa.jpeg','2016-09-11 11:03:03',1,'2016-09-11 11:04:11',1,'1','9',0.00),
	(49,'Dây lưng TD3026','Day lung TD3026','day-lung-td3026','TD3026','Đồ da xịn','Đen','Công ty TNHH Cộng Đồng',350000.00,'VND',3,'','1','5NlNWispimq7B87z84opEK0Q8SdfGfg1QABCnHxH.jpeg','2016-09-11 11:05:26',1,'2016-09-11 11:05:26',1,'1','9',0.00),
	(50,'Dây lưng TD3027','Day lung TD3027','day-lung-td3027','TD3027','Đồ da xịn','Đen','Công ty TNHH Cộng Đồng',350000.00,'VND',3,'','1','ip1FWHUTCtZvQXGLpBMT4EPEd0jFT5UoQP5TxGpU.jpeg','2016-09-11 11:06:44',1,'2016-09-11 11:06:44',1,'1','9',0.00),
	(51,'Dây lưng TD3028','Day lung TD3028','day-lung-td3028','TD3028','Đồ da xịn','Đen','Công ty TNHH Cộng Đồng',350000.00,'VND',3,'','1','ZoR59Dsm4pmLQEj4bel7SawSzjHCBnsLZfbC60TB.jpeg','2016-09-11 11:14:51',1,'2016-09-11 11:14:51',1,'1','9',0.00),
	(52,'Dây lưng TD3029','Day lung TD3029','day-lung-td3029','TD3029','Đồ da xịn','Đen','',350000.00,'VND',3,'','1','TwMCVcALPFAxI5OaGHDj6mghIBcQIcBZQltXmZPC.jpeg','2016-09-11 11:16:47',1,'2016-09-11 11:16:47',1,'1','9',0.00),
	(53,'Dây lưng TD3030','Day lung TD3030','day-lung-td3030','TD3030','Đồ da xịn','Đen','',350000.00,'VND',3,'','1','ImGL3EaG3Ik0TkxEjiVkRPcht2BPlgUm5jTDTbKA.jpeg','2016-09-11 11:19:49',1,'2016-09-28 09:21:04',1,'1','9',0.00),
	(54,'Dây lưng TD3031','Day lung TD3031','day-lung-td3031','TD3031','Đồ da xịn','Đen','',350000.00,'VND',3,'','1','99IxoT1s2DG5NNhtxFbm4UH7PB1UlZs5B31mWxeP.jpeg','2016-09-11 11:21:16',1,'2016-09-11 11:21:16',1,'1','9',0.00),
	(55,'Dây nữ TD3032','Day nu TD3032','day-nu-td3032','TD3032','Đồ da xịn','Đen, vàng','',300000.00,'VND',3,'','1','wMRUoWO4u91AFJHikZ9VLcjOAwEvh8OIuiyjN3vN.jpeg','2016-09-11 11:23:23',1,'2016-09-26 21:25:02',1,'1','9',0.00),
	(56,'Ví da TD1015','Vi da TD1015','vi-da-td1015','TD1015','Đồ da xịn','Đen','Công ty TNHH Cộng Đồng',300000.00,'VND',1,'','1','GVdYGytvPKvO0qSNBAEi3RjojlornkUnoLk3L86u.jpeg','2016-09-11 12:00:58',1,'2016-09-13 07:49:27',1,'1','9',0.00),
	(57,'Ví da TD1016','Vi da TD1016','vi-da-td1016','TD1016','Đồ da xịn','Vàng','Công ty TNHH Cộng Đồng',280000.00,'VND',1,'','1','EVP5ARznhQilNNQOTNSGAflFtHT0WpXdqQcQfsJG.jpeg','2016-09-11 12:03:06',1,'2016-09-11 12:15:48',1,'1','9',0.00),
	(58,'Ví cá sấu TD1017','Vi ca sau TD1017','vi-ca-sau-td1017','TD1017','Đồ da xịn','','Công ty TNHH Cộng Đồng',850000.00,'VND',1,'','1','JspjbDYYKCTnkCCYTauH0FirU40MkGMlf8TJkkWA.jpeg','2016-09-11 12:20:08',1,'2016-09-11 12:20:08',1,'1','9',0.00),
	(59,'Ví nam TD1018','Vi nam TD1018','vi-nam-td1018','TD1018','Đồ da xịn','Vàng','Công ty TNHH Cộng Đồng',280000.00,'VND',1,'','1','C5t2t3uJllirlt9sHklyjDwrRtQ6zm4TaPQuurmF.jpeg','2016-09-11 12:32:45',1,'2016-09-11 12:32:45',1,'1','9',0.00),
	(60,'Ví nữ TD2006','Vi nu TD2006','vi-nu-td2006','TD2006','Đồ da xịn','','Công ty TNHH Cộng Đồng',350000.00,'VND',2,'','1','7onAzNwkb8jmzXIHptVY20cwx5vbNaQjLZOqHoLy.jpeg','2016-09-12 17:46:23',1,'2016-09-12 18:05:53',1,'1','9',0.00),
	(61,'Ví nữ TD2007','Vi nu TD2007','vi-nu-td2007','TD2007','Đồ da xịn','','Công ty TNHH Cộng Đồng',350000.00,'VND',2,'','1','VBTZV501fiJ1SsybdUewCjGrVfeAySTYKB31yl6J.jpeg','2016-09-12 17:47:47',1,'2016-09-12 17:47:47',1,'1','9',0.00),
	(62,'Ví nữ TD2008','Vi nu TD2008','vi-nu-td2008','TD2008','Đồ da xịn','','',350000.00,'VND',2,'','1','ncsY88X927BPNHez6Nq3GcF5iNLdEdfJB8fg6FBT.jpeg','2016-09-12 17:48:58',1,'2016-09-12 18:03:34',1,'1','9',0.00),
	(63,'Ví nữ TD2009','Vi nu TD2009','vi-nu-td2009','TD2009','Đồ da xịn','','',350000.00,'VND',2,'','1','NSyQYzNfyZ9A5QcBooqqQLb2K3t6jExHWE8Id4P2.jpeg','2016-09-12 17:50:16',1,'2016-09-12 18:05:00',1,'1','9',0.00),
	(64,'Ví nam TD1019','Vi nam TD1019','vi-nam-td1019','TD1019','Đồ da xịn','','',280000.00,'VND',1,'','1','mzyGekCYfTMXpJVfDke53fn2EppEWRxw1eIzUvnA.jpeg','2016-09-12 17:52:43',1,'2016-09-12 17:52:43',1,'1','9',0.00),
	(65,'Ví nam TD1020','Vi nam TD1020','vi-nam-td1020','TD1020','Đồ da xịn','Vàng','Công ty TNHH Cộng Đồng',300000.00,'VND',1,'','1','UDe7iSbipmjEQbVnB6dJu2IftaCjVKxnOV7OOIJn.jpeg','2016-09-12 19:37:27',1,'2016-09-16 13:53:59',1,'1','9',0.00),
	(66,'Vĩ nữ TD2010','Vi nu TD2010','vi-nu-td2010','TD2010','Đồ da xịn','Đen','Công ty TNHH Cộng Đồng',350000.00,'VND',2,'','1','FOM6qlrpaHAlaUlOYU3HddUflUjfF25kLxVebmbb.jpeg','2016-09-13 08:02:04',1,'2016-09-13 08:02:04',1,'1','9',0.00),
	(67,'ví nam TD1021','vi nam TD1021','vi-nam-td1021','TD1021','Đồ da xịn','nâu nhạt','',370000.00,'VND',1,'','1','yY706Nxzva1m9FgWqdywi7M1jtBv7m5QtRhqBbga.jpeg','2016-09-13 08:17:33',1,'2016-09-13 08:17:33',1,'1','9',0.00),
	(68,'Túi da TD4005','Tui da TD4005','tui-da-td4005','TD4005','Đồ da xịn','','Công ty TNHH Cộng Đồng',850000.00,'VND',4,'','1','M17YGWWy1mPWoemP9ZZ0uvjZGuDkAogVomb6L1zr.jpeg','2016-09-13 09:50:17',1,'2016-09-13 09:55:48',1,'1','9',0.00),
	(69,'Ví nữ TD2011','Vi nu TD2011','vi-nu-td2011','TD2011','Đồ da xịn','Vàng','Công ty TNHH Cộng Đồng',350000.00,'VND',2,'','1','8aHweRcmkSPzFJuk6Fb0OnllzvoCkVJjBtz2Z7Z7.jpeg','2016-09-13 12:15:01',1,'2016-09-13 12:20:34',1,'1','9',0.00),
	(70,'Ví nữ TD2012','Vi nu TD2012','vi-nu-td2012','TD2012','Đồ da xịn','','Công ty TNHH Cộng Đồng',350000.00,'VND',2,'','1','u3MpsAtQhQWzOePhs9dYJQWrOo9CBk3OSjxWKS5N.jpeg','2016-09-13 12:16:47',1,'2016-09-13 12:22:44',1,'1','9',0.00),
	(74,'Cặp da TD4006','Cap da TD4006','cap-da-td4006','TD4006','Đồ da xịn','Nâu, đen, vàng','Công ty TNHH Cộng Đồng',1400000.00,'VND',4,'','1','hdi48CBOgDy6jBGtDXglX2Va9LgvbRFkKj6klJFW.jpeg','2016-09-16 11:23:48',1,'2016-09-16 11:23:48',1,'1','9',0.00),
	(75,'Cặp da TD4007','Cap da TD4007','cap-da-td4007','TD4007','Đồ da xịn','Đen','Công ty TNHH Cộng Đồng',1400000.00,'VND',4,'','1','YcRAoYQ7CZRdQIoSoy1mvRzhVd1A0gg8lygxNo8g.jpeg','2016-09-16 11:27:24',1,'2016-09-16 16:21:24',1,'1','9',0.00),
	(76,'Ví da TD1022','Vi da TD1022','vi-da-td1022','TD1022','Đồ da xịn','nâu','Công ty TNHH Cộng Đồng',300000.00,'VND',1,'','1','JtsGC9GGEZHYsRiDuhkeNKW7DVJlfBTZJ9oMyDJu.jpeg','2016-09-16 11:45:11',1,'2016-09-16 11:45:11',1,'1','9',0.00),
	(78,'Dây lưng TD3034','Day lung TD3034','day-lung-td3034','TD3033','Đồ da xịn','Đen','Công ty TNHH Cộng Đồng',350000.00,'VND',3,'','1','JcuDv6LxX1GBVid1qIRpNyOCXy07BZiuyf0a3175.jpeg','2016-09-16 16:27:38',1,'2016-09-16 16:27:38',1,'1','9',0.00),
	(79,'Dây lưng TD3034','Day lung TD3034','day-lung-td3034','TD3034','Đồ da xịn','','Công ty TNHH Cộng Đồng',350000.00,'VND',3,'','1','uyvCVmCMwTMiX37DgWzs5MCADyAleZhbdwVxlGrY.jpeg','2016-09-16 16:28:56',1,'2016-09-16 16:28:56',1,'1','9',0.00),
	(80,'Dây lưng TD3036','Day lung TD3036','day-lung-td3036','TD3036','Đồ da xịn','Đen','Công ty TNHH Cộng Đồng',350000.00,'VND',3,'','1','49scdfQS6pKKYpxhmtDx56mzYAlSXFKs1Ax6jC4h.jpeg','2016-09-19 09:41:07',1,'2016-09-19 09:41:07',1,'1','9',0.00),
	(81,'Dây lưng TD3037','Day lung TD3037','day-lung-td3037','TD3037','Đồ da xịn','Đen','Công ty TNHH Cộng Đồng',350000.00,'VND',3,'','1','ACBcRyILyOIsVLb8HoiY9OYws6rhXD1C5ZxVGyhU.jpeg','2016-09-19 09:45:25',1,'2016-09-19 09:45:25',1,'1','9',0.00),
	(82,'Dây lưng TD3038','Day lung TD3038','day-lung-td3038','TD3038','Đồ da xịn','Đen','Công ty TNHH Cộng Đồng',350000.00,'VND',3,'','1','wpHx4iNxySePDTGHKaGE3xJktYMcEN91XormP9B8.jpeg','2016-09-19 09:46:38',1,'2016-09-19 09:48:40',1,'1','9',0.00),
	(88,'Dây lưng TD3039','Day lung TD3039','day-lung-td3039','TD3039','','Đen','Công ty TNHH Cộng Đồng',350000.00,'VND',3,'','1','5Y2MqqRry7g5k86KBjn8aQRVmR4TpbLGCSITRyNY.jpeg','2016-09-21 15:39:37',1,'2016-09-21 15:39:37',1,'1','9',0.00),
	(89,'Dây lưng TD3040','Day lung TD3040','day-lung-td3040','TD3040','Đồ da xịn','Đen','',350000.00,'VND',3,'','1','xO1WgZRJADLl8MdBac0gooD0DejxttSEBHbf3jfZ.jpeg','2016-09-21 15:42:56',1,'2016-09-21 15:42:56',1,'1','9',0.00),
	(90,'Dây lưng TD3041','Day lung TD3041','day-lung-td3041','TD3041','Đồ da xịn','Đen','Công ty TNHH Cộng Đồng',350000.00,'VND',3,'','1','8vkR1nCBczNbnFzv9I6ooG8CjDiogVQwqrLy9smG.jpeg','2016-09-21 15:47:30',1,'2016-09-21 15:47:30',1,'1','9',0.00),
	(91,'Dây lưng TD3042','Day lung TD3042','day-lung-td3042','TD3042','Đồ da xịn','','Công ty TNHH Cộng Đồng',350000.00,'VND',3,'','1','RaZXCr1EDDlDSFECOqRBHFW578KUUPRU8x3hWpeH.jpeg','2016-09-21 15:48:44',1,'2016-09-21 15:48:44',1,'1','9',0.00),
	(92,'Dây lưng TD3043','Day lung TD3043','day-lung-td3043','TD3043','Đồ da xịn','','',350000.00,'VND',3,'','1','f6dWPzXr5jR4QHv0lVmm9tnGsKzyvQGRYO7TXxi1.jpeg','2016-09-21 15:49:45',1,'2016-09-21 15:49:45',1,'1','9',0.00),
	(93,'Dây lưng TD3044','Day lung TD3044','day-lung-td3044','TD3044','Đồ da xịn','','Công ty TNHH Cộng Đồng',350000.00,'VND',3,'','1','dGK6xsyYSNFpzJgJ5ZMK8AavViJuyERDfCb3OfS5.jpeg','2016-09-27 08:51:47',1,'2016-09-27 08:51:47',1,'1','9',0.00),
	(94,'Dây lưng TD3045','Day lung TD3045','day-lung-td3045','TD3045','Đồ da xịn','Đen','Công ty TNHH Cộng Đồng',350000.00,'VND',3,'','1','9aSgEZtdmEwzeS4FcL6JiKbOKWxM5uIPV7AgtJPu.jpeg','2016-09-27 08:53:17',1,'2016-09-27 08:53:17',1,'1','9',0.00),
	(95,'đầu khóa TD3046','dau khoa TD3046','dau-khoa-td3046','TD3046','Đồ da xịn','','',150000.00,'VND',3,'','1','iVvfnL9j4LbrIr9AMf38KLg5bnsTIvePDIHtwitk.jpeg','2016-09-27 08:54:03',1,'2016-09-27 08:54:03',1,'1','9',0.00),
	(96,'Dây lưng TD3008','Day lung TD3008','day-lung-td3008','TD3008','Đồ da xịn','','Công ty TNHH Cộng Đồng',350000.00,'VND',3,'','1','68WTCIZGZ9f5ayRsOHmVreXIBom2eKQw1f79Qbtz.jpeg','2016-09-27 09:16:24',1,'2016-09-27 09:16:24',1,'1','9',0.00),
	(97,'Dây lưng TD3009','Day lung TD3009','day-lung-td3009','TD3009','Đồ da xịn','','',350000.00,'VND',3,'','1','edMfvEliI76dsSzBFHB3KnfFkd3HuROKuIqE2RDF.jpeg','2016-09-27 09:18:22',1,'2016-09-27 09:18:22',1,'1','9',0.00),
	(101,'Dây lưng TD3004','Day lung TD3004','day-lung-td3004','TD3004','Đồ da xịn','','',350000.00,'VND',3,'','1','I0rSupdsm0GHclksM9kNUJPRJQLd9oURDNEBIPLF.jpeg','2016-09-27 09:41:26',1,'2016-09-27 09:41:26',1,'9','9',0.00),
	(102,'Dây lưng TD3047','Day lung TD3047','day-lung-td3047','TD3047','Đồ da xịn','Đen, vàng','Công ty TNHH Cộng Đồng',350000.00,'VND',3,'','1','h0RcUanhhgnz6KcFzxbJlWkMT6obWSf7mbpDGmgq.jpeg','2016-09-27 09:49:27',1,'2016-09-27 09:51:37',1,'9','9',0.00),
	(103,'Ví da TD1023','Vi da TD1023','vi-da-td1023','TD1023','Đồ da xịn','','',350000.00,'VND',1,'','1','ZVsOKDuLNDbQj4zHDGPmqqOHBgLldFwMv6Xqigcg.jpeg','2016-09-27 14:13:51',1,'2016-09-27 14:13:51',1,'1','9',0.00),
	(104,'Ví da TD1024','Vi da TD1024','vi-da-td1024','TD1024','Đồ da xịn','','',350000.00,'VND',1,'','1','FXtPmUDDWF4Ya8xMBWd1GWjroRvbVmhlCbK3kwzv.jpeg','2016-09-27 14:14:40',1,'2016-09-27 14:14:40',1,'1','9',0.00),
	(106,'Ví da TD1025','Vi da TD1025','vi-da-td1025','TD1025','Đồ da xịn','','',350000.00,'VND',1,'','1','OeTbasPVViPFQirTFURJEcC6gDlaDNppm1YDiMK3.jpeg','2016-09-27 14:15:32',1,'2016-09-27 14:15:32',1,'1','9',0.00),
	(107,'Ví da TD1026','Vi da TD1026','vi-da-td1026','TD1026','Đồ da xịn','','',350000.00,'VND',1,'','1','CRcdFkpw5YK0XIZJSIeFcK8fU4CsKepGh0YtjCcM.jpeg','2016-09-27 14:16:32',1,'2016-09-27 14:16:32',1,'1','9',0.00),
	(108,'Ví da TD1027','Vi da TD1027','vi-da-td1027','TD1027','Đồ da xịn','','',350000.00,'VND',1,'','1','HyjwUl4OvRQJC1qfULiz15km05QIjtXFeWEVDXIb.jpeg','2016-09-27 14:17:33',1,'2016-09-27 14:17:33',1,'1','9',0.00),
	(109,'Ví da TD1028','Vi da TD1028','vi-da-td1028','TD1028','Đồ da xịn','Vàng','',300000.00,'VND',1,'','1','FJkYhXK2SwgMhtVpMipPImVszOGyglpRy6bRZBPe.jpeg','2016-09-27 15:14:05',1,'2016-09-27 15:14:05',1,'1','9',0.00),
	(110,'Ví da TD1029','Vi da TD1029','vi-da-td1029','TD1029','Đồ da xịn','đỏ','Công ty TNHH Cộng Đồng',300000.00,'VND',1,'','1','95kqpcUXVEVW3THYluDCaZfsTVRJyGIlo2OdMQub.jpeg','2016-09-27 15:15:57',1,'2016-09-27 15:15:57',1,'1','9',0.00),
	(111,'Ví da TD1030','Vi da TD1030','vi-da-td1030','TD1030','Đồ da xịn','','',350000.00,'VND',1,'','1','gk43XjfzxnsG0Y6LL1kAC93Vj2JSwz1dbbEeFad2.jpeg','2016-09-27 15:18:23',1,'2016-09-27 15:18:23',1,'1','9',0.00),
	(112,'Dây lưng TD3048','Day lung TD3048','day-lung-td3048','TD3048','Đồ da xịn','Đen','',350000.00,'VND',3,'','1','L6IZAZf5CWY3Zo1RsjPfoT09TjMnhPgc7fYRH9Ge.jpeg','2016-09-28 16:13:20',1,'2016-09-28 16:14:15',1,'1','9',0.00),
	(113,'Dây lưng TD3049','Day lung TD3049','day-lung-td3049','TD3049','Đồ da xịn','','',350000.00,'VND',3,'','1','vK1HG02T7xF5S0Jap0MatGmV4mzXQCm8NxPsI54l.jpeg','2016-09-28 16:16:00',1,'2016-09-28 16:16:27',1,'1','9',0.00),
	(114,'Dây lưng TD3050','Day lung TD3050','day-lung-td3050','TD3050','Đồ da xịn','','',350000.00,'VND',3,'','1','JFdwNcjjO0WXn4NlvWjcdNtiPiJwGxH44q2eFOlo.jpeg','2016-09-28 16:18:15',1,'2016-09-28 16:18:36',1,'1','9',0.00),
	(115,'Dây lưng TD3051','Day lung TD3051','day-lung-td3051','TD3051','Đồ da xịn','','',350000.00,'VND',3,'','1','TlMR9CuUH5FbrsMutBf3xldzM2N0ohEaFin5Aw6p.jpeg','2016-09-28 16:19:51',1,'2016-09-28 16:19:51',1,'1','9',0.00),
	(116,'Dây lưng TD3052','Day lung TD3052','day-lung-td3052','TD3052','Đồ da xịn','','',350000.00,'VND',3,'','1','TzeTeUe4ioagIstvLq5Bw8i35iRp1ZsFHAMA4qKV.jpeg','2016-09-28 16:21:27',1,'2016-09-28 16:21:27',1,'1','9',0.00),
	(117,'Dây lưng TD3053','Day lung TD3053','day-lung-td3053','TD3053','Đồ da xịn','','',350000.00,'VND',3,'','1','53DqjF5i8YfmHvUwBqON4dl6dykPNuRdNH55LcBb.jpeg','2016-09-28 16:23:00',1,'2016-09-28 16:23:00',1,'1','9',0.00),
	(118,'Dây lưng TD3054','Day lung TD3054','day-lung-td3054','TD3054','Đồ da xịn','','',350000.00,'VND',3,'','1','uhfkSBzeeu3n6q5vbuGQlPCcnmy3Bmw8E8MHst33.jpeg','2016-09-28 16:24:56',1,'2016-09-28 16:24:56',1,'1','9',0.00),
	(120,'Dây lưng TD3055','Day lung TD3055','day-lung-td3055','TD3055','Đồ da xịn','','',350000.00,'VND',3,'','1','y5QuD3n55YGjSmtMTJKjx0zzRuvCNHd6R3ozmxq4.jpeg','2016-09-28 16:26:07',1,'2016-09-28 16:26:07',1,'1','9',0.00),
	(121,'Dây lưng TD3056','Day lung TD3056','day-lung-td3056','TD3056','Đồ da xịn','','',350000.00,'VND',3,'','1','K7LBkOfF7Y2Wl2INL3rleHynSsFIcxWB5hwA9Ge6.jpeg','2016-09-28 16:27:16',1,'2016-09-28 16:27:16',1,'1','9',0.00),
	(122,'Dây lưng TD3057','Day lung TD3057','day-lung-td3057','TD3057','Đồ da xịn','','',350000.00,'VND',3,'','1','pqEnFN3SZkf8Izgf4Io3GO88q6buga3Y3KuPnReT.jpeg','2016-09-28 16:29:04',1,'2016-09-28 16:29:04',1,'1','9',0.00),
	(123,'Dây lưng TD3058','Day lung TD3058','day-lung-td3058','TD3058','Đồ da xịn','','',350000.00,'VND',3,'','1','gfZdKtWc3EzuqS87MVll7RsbtAC5QSuC9Kk6aOxt.jpeg','2016-09-28 16:32:41',1,'2016-09-28 16:32:41',1,'1','9',0.00),
	(124,'Dây lưng TD3059','Day lung TD3059','day-lung-td3059','TD3059','Đồ da xịn','đen','',350000.00,'VND',3,'','1','bMXzU3DIXxemQEVx9DbnQimixkugql1uSzlhbt7a.jpeg','2016-10-09 15:20:16',1,'2016-10-09 15:20:16',1,'1','9',0.00),
	(125,'Dây lưng TD3060','Day lung TD3060','day-lung-td3060','TD3060','Đồ da xịn','đen','',350000.00,'VND',3,'','1','v4NFU6urcBIryeYYNdN62NUyshsUhtNFhRkn1eNZ.jpeg','2016-10-09 15:21:50',1,'2016-10-09 15:21:50',1,'1','9',0.00),
	(126,'Dây lưng TD3061','Day lung TD3061','day-lung-td3061','TD3061','Đồ da xịn','','',350000.00,'VND',3,'','1','y4lFK1nrDjvyMmww6zCDx9wB6lXvAOmKdE1Ju6Iu.jpeg','2016-10-09 15:23:30',1,'2016-10-09 15:23:30',1,'1','9',0.00),
	(127,'Dây lưng TD3062','Day lung TD3062','day-lung-td3062','TD3062','Đồ da xịn','đen','',350000.00,'VND',3,'','1','EeO0CcAnRKu9wctAdiel2oJmrw8iRZk8MaB3K5SG.jpeg','2016-10-09 15:24:48',1,'2016-10-09 15:24:48',1,'1','9',0.00),
	(128,'Dây lưng TD3063','Day lung TD3063','day-lung-td3063','TD3063','Đồ da xịn','đen','',350000.00,'VND',3,'','1','KLBKcx1bl1Ll1dmqVI34ueiODPIWXpA0mghozu3S.jpeg','2016-10-09 15:26:36',1,'2016-10-09 15:36:33',1,'1','9',0.00),
	(129,'Dây lưng TD3064','Day lung TD3064','day-lung-td3064','TD3064','Đồ da xịn','đen','',350000.00,'VND',3,'','1','I4kQTEOq7OiXK4nQkTvMwkygpQuM7keFvWL6zSnm.jpeg','2016-10-09 15:27:40',1,'2016-10-09 15:34:59',1,'1','9',0.00),
	(130,'Ví da TD1031','Vi da TD1031','vi-da-td1031','TD1031','Đồ da xịn','Đen','',370000.00,'VND',1,'','1','dMKzqhh4ghDSbp1TXf8jIjG0ol39CYCMHkHzMnRx.jpeg','2016-10-16 20:33:23',1,'2016-10-16 20:34:05',1,'1','9',0.00),
	(131,'ví da TD1032','vi da TD1032','vi-da-td1032','TD1032','Đồ da xịn','','',370000.00,'VND',1,'','1','QAtgqqC6kOZJHmUtjrEBOmROGxERsHP6d70hDscY.jpeg','2016-10-16 20:36:49',1,'2016-10-16 20:45:38',1,'1','9',0.00),
	(132,'Ví da TD1033','Vi da TD1033','vi-da-td1033','TD1033','Đồ da xịn','','',370000.00,'VND',1,'','1','1b9k7EXVxGNWIDfGGNCtTfyngonvxh95v4GymHmT.jpeg','2016-10-16 20:38:11',1,'2016-10-16 20:44:44',1,'1','9',0.00),
	(133,'ví da TD1034','vi da TD1034','vi-da-td1034','TD1034','Đồ da xịn','','',370000.00,'VND',1,'','1','YmdbNujcZoKq4WkvGRZ2lOBHt9nofQROeGf4x0V1.jpeg','2016-10-16 20:40:48',1,'2016-10-16 20:40:48',1,'1','9',0.00),
	(134,'Ví da TD1035','Vi da TD1035','vi-da-td1035','TD1035','Đồ da xịn','','',370000.00,'VND',1,'','1','0WDpdzbQ2G1AOwZ9vPXBySsKhNTZXyEFbikcsbEJ.jpeg','2016-10-16 20:43:03',1,'2016-10-16 20:43:03',1,'1','9',0.00);

/*!40000 ALTER TABLE `items` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`migration`, `batch`)
VALUES
	('2014_10_12_000000_create_users_table',1),
	('2014_10_12_100000_create_password_resets_table',1);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;

INSERT INTO `password_resets` (`email`, `token`, `created_at`)
VALUES
	('taomanhdung@gmail.com','b1987f521dfc1ba989e0043043837a5e689da00979d22bb13ffe3242084ec035','2016-05-21 15:12:16');

/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table user_queues
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user_queues`;

CREATE TABLE `user_queues` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) DEFAULT NULL,
  `queue` varchar(20) DEFAULT NULL,
  `inbound_setting_id` int(10) DEFAULT NULL,
  `priority` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `user_queues` WRITE;
/*!40000 ALTER TABLE `user_queues` DISABLE KEYS */;

INSERT INTO `user_queues` (`id`, `user_id`, `queue`, `inbound_setting_id`, `priority`)
VALUES
	(12,1,'602',3,0),
	(13,1,'601',3,1),
	(14,4,'602',3,3);

/*!40000 ALTER TABLE `user_queues` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table user_teams
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user_teams`;

CREATE TABLE `user_teams` (
  `user_id` int(10) NOT NULL,
  `team_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci DEFAULT '',
  `active` char(1) COLLATE utf8_unicode_ci DEFAULT '1',
  `department_id` int(10) DEFAULT NULL,
  `level` int(1) DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `updated_by` int(10) DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8_unicode_ci,
  `extension` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `account_code` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `username`, `active`, `department_id`, `level`, `created_by`, `updated_by`, `phone`, `note`, `extension`, `account_code`)
VALUES
	(1,'tào mạnh dũng','taomanhdung@gmail.com','$2y$10$a2vmN.U2/sUnragae9c9MurnPqjIQ9YFDayZzLOIXu7NX5fbTUudS','QjJxBVSXbmrCrc9aJYWDdXTGTcoytzsBgznGrWZkxUsXUQQgZe0wAZ2iNrF1','2016-05-21 15:06:46','2016-11-19 16:05:15','dungtao','1',NULL,NULL,NULL,NULL,NULL,NULL,'8000','111111'),
	(4,'tuấn hưng','tuanhung@gmail.com','$2y$10$9p3odd1bLqoydNrmi.6iQuxlM2iB3U77TD0bq5l1KDWaHJ5r/qBKm','1DNpkH3jlNcDF3gJmdqidHLo992omJmDx8BbgcJcB8tvhQ4WxSlkJS5SX51P','2016-05-22 07:39:49','2016-05-22 07:40:31','tuanhung','1',NULL,NULL,NULL,NULL,NULL,NULL,'8001','222222'),
	(5,'tào thị loan','loantao@gmail.com','$2y$10$fWRjx78PEthJE3XgoZBVueBoLG./sC4JxYzO94IaP0gX2GlFrKet.','KZS2d4EsQj3GU6TvohVJ25smtVd6bpPKLER90nVSF1IkBt143MqdQzgpZb1d','2016-05-22 07:40:53','2016-05-22 07:41:28','loantao','1',NULL,NULL,NULL,NULL,NULL,NULL,'8002','333333');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
