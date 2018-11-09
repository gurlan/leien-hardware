/*
SQLyog Ultimate v11.24 (32 bit)
MySQL - 5.5.53 : Database - luguang
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `v9_shop` */

DROP TABLE IF EXISTS `v9_shop`;

CREATE TABLE `v9_shop` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `catid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `typeid` smallint(5) unsigned NOT NULL,
  `title` char(80) NOT NULL DEFAULT '',
  `style` char(24) NOT NULL DEFAULT '',
  `thumb` char(100) NOT NULL DEFAULT '',
  `keywords` char(40) NOT NULL DEFAULT '',
  `description` char(255) NOT NULL DEFAULT '',
  `posids` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `url` char(100) NOT NULL,
  `listorder` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(2) unsigned NOT NULL DEFAULT '1',
  `sysadd` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `islink` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `username` char(20) NOT NULL,
  `inputtime` int(10) unsigned NOT NULL DEFAULT '0',
  `updatetime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `status` (`status`,`listorder`,`id`),
  KEY `listorder` (`catid`,`status`,`listorder`,`id`),
  KEY `catid` (`catid`,`status`,`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

/*Data for the table `v9_shop` */

insert  into `v9_shop`(`id`,`catid`,`typeid`,`title`,`style`,`thumb`,`keywords`,`description`,`posids`,`url`,`listorder`,`status`,`sysadd`,`islink`,`username`,`inputtime`,`updatetime`) values (2,58,0,'山西省','','http://luguang.com/uploadfile/2018/1027/20181027031934688.png','','',0,'http://luguang.com/index.php?m=content&c=index&a=show&catid=58&id=1',0,99,1,0,'admin',1540624708,1540624777),(3,58,0,'山西省','','http://luguang.com/uploadfile/2018/1027/20181027031934688.png','','',0,'http://luguang.com/index.php?m=content&c=index&a=show&catid=58&id=1',0,99,1,0,'admin',1540624708,1540624777),(4,58,0,'山西省','','http://luguang.com/uploadfile/2018/1027/20181027031934688.png','','',0,'http://luguang.com/index.php?m=content&c=index&a=show&catid=58&id=1',0,99,1,0,'admin',1540624708,1540624777),(5,58,0,'山西省','','http://luguang.com/uploadfile/2018/1027/20181027031934688.png','','',0,'http://luguang.com/index.php?m=content&c=index&a=show&catid=58&id=1',0,99,1,0,'admin',1540624708,1540624777),(6,58,0,'山西省','','http://luguang.com/uploadfile/2018/1027/20181027031934688.png','','',0,'http://luguang.com/index.php?m=content&c=index&a=show&catid=58&id=1',0,99,1,0,'admin',1540624708,1540624777),(7,58,0,'山西省','','http://luguang.com/uploadfile/2018/1027/20181027031934688.png','','',0,'http://luguang.com/index.php?m=content&c=index&a=show&catid=58&id=1',0,99,1,0,'admin',1540624708,1540624777),(8,58,0,'山西省','','http://luguang.com/uploadfile/2018/1027/20181027031934688.png','','',0,'http://luguang.com/index.php?m=content&c=index&a=show&catid=58&id=1',0,99,1,0,'admin',1540624708,1540624777),(9,58,0,'山西省','','http://luguang.com/uploadfile/2018/1027/20181027031934688.png','','',0,'http://luguang.com/index.php?m=content&c=index&a=show&catid=58&id=1',0,99,1,0,'admin',1540624708,1540624777),(10,58,0,'山西省','','http://luguang.com/uploadfile/2018/1027/20181027031934688.png','','',0,'http://luguang.com/index.php?m=content&c=index&a=show&catid=58&id=1',0,99,1,0,'admin',1540624708,1540624777);

/*Table structure for table `v9_shop_data` */

DROP TABLE IF EXISTS `v9_shop_data`;

CREATE TABLE `v9_shop_data` (
  `id` mediumint(8) unsigned DEFAULT '0',
  `content` text NOT NULL,
  `readpoint` smallint(5) unsigned NOT NULL DEFAULT '0',
  `groupids_view` varchar(100) NOT NULL,
  `paginationtype` tinyint(1) NOT NULL,
  `maxcharperpage` mediumint(6) NOT NULL,
  `template` varchar(30) NOT NULL,
  `paytype` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `allow_comment` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `relation` varchar(255) NOT NULL DEFAULT '',
  `leader` varchar(255) NOT NULL DEFAULT '',
  `phone` varchar(255) NOT NULL DEFAULT '',
  `mobile` varchar(255) NOT NULL DEFAULT '',
  `fax` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `v9_shop_data` */

insert  into `v9_shop_data`(`id`,`content`,`readpoint`,`groupids_view`,`paginationtype`,`maxcharperpage`,`template`,`paytype`,`allow_comment`,`relation`,`leader`,`phone`,`mobile`,`fax`,`email`) values (2,'',0,'',0,0,'',0,1,'','某某某','400-006-7803','15155555555','0311－83327968','xuelongqiye@163.com'),(3,'',0,'',0,0,'',0,1,'','某某某','400-006-7803','15155555555','0311－83327968','xuelongqiye@163.com'),(4,'',0,'',0,0,'',0,1,'','某某某','400-006-7803','15155555555','0311－83327968','xuelongqiye@163.com'),(5,'',0,'',0,0,'',0,1,'','某某某','400-006-7803','15155555555','0311－83327968','xuelongqiye@163.com'),(6,'',0,'',0,0,'',0,1,'','某某某','400-006-7803','15155555555','0311－83327968','xuelongqiye@163.com'),(7,'',0,'',0,0,'',0,1,'','某某某','400-006-7803','15155555555','0311－83327968','xuelongqiye@163.com'),(8,'',0,'',0,0,'',0,1,'','某某某','400-006-7803','15155555555','0311－83327968','xuelongqiye@163.com'),(9,'',0,'',0,0,'',0,1,'','某某某','400-006-7803','15155555555','0311－83327968','xuelongqiye@163.com'),(10,'',0,'',0,0,'',0,1,'','某某某','400-006-7803','15155555555','0311－83327968','xuelongqiye@163.com');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
