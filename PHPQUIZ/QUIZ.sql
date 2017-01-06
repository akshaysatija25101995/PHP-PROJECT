/*
SQLyog Community v11.31 (32 bit)
MySQL - 5.5.45 : Database - quiz
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`quiz` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `quiz`;

/*Table structure for table `category` */

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `catname` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `category` */

insert  into `category`(`id`,`catname`) values (1,'PHP'),(2,'MYSQL');

/*Table structure for table `detail` */

DROP TABLE IF EXISTS `detail`;

CREATE TABLE `detail` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(25) DEFAULT NULL,
  `MOBILE` decimal(10,0) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `pass` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `detail` */

insert  into `detail`(`id`,`Name`,`MOBILE`,`email`,`pass`) values (1,'aksh','99','blasterakshay@gmail.com','123'),(2,'akshay','9999','bbb@gmail.com','aks'),(3,'akshay','999','blasterakshay@gmail.com','123');

/*Table structure for table `questions` */

DROP TABLE IF EXISTS `questions`;

CREATE TABLE `questions` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `question` varchar(100) DEFAULT NULL,
  `ans1` varchar(80) DEFAULT NULL,
  `ans2` varchar(80) DEFAULT NULL,
  `ans3` varchar(80) DEFAULT NULL,
  `ans4` varchar(80) DEFAULT NULL,
  `ans` int(4) DEFAULT NULL,
  `catid` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `questions` */

insert  into `questions`(`id`,`question`,`ans1`,`ans2`,`ans3`,`ans4`,`ans`,`catid`) values (1,'What does PHP stand for?','PHP: Hypertext Preprocessor','PHP: Hypertext Preprocessor','Personal Hypertext Processor','None of above',0,1),(2,'PHP server scripts are surrounded by delimiters, which?',' <?php>...</?>','<&>...</&>','<script>...</script>','<?php...?>',3,1),(3,'How do you write \"Hello World\" in PHP','Document.Write(\"Hello World\");','echo \"Hello World\";','\"Hello World\";','none of above',1,1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
