/*
SQLyog Ultimate v8.55 
MySQL - 5.5.54 : Database - lab_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`lab_db` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `lab_db`;

/*Table structure for table `lb_bcn` */

DROP TABLE IF EXISTS `lb_bcn`;

CREATE TABLE `lb_bcn` (
  `bcn` varchar(50) NOT NULL,
  `status` varchar(10) DEFAULT 'ACTIVE',
  PRIMARY KEY (`bcn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `lb_bcn` */

insert  into `lb_bcn`(`bcn`,`status`) values ('5000000000012','CLOSE'),('5000000000029','CLOSE'),('5000000000036','CLOSE'),('5000000000043','CLOSE'),('5000000000050','ACT'),('5000000000067','ACT'),('5000000000074','ACT'),('5000000000081','ACT'),('5000000000098','ACT'),('5000000000104','ACT'),('5000000000111','ACT'),('5000000000128','ACT'),('5000000000135','ACT'),('5000000000142','ACT'),('5000000000159','ACT'),('5000000000166','ACT'),('5000000000173','ACT'),('5000000000180','ACT'),('5000000000197','ACT'),('5000000000203','ACT'),('5000000000210','ACT'),('5000000000227','ACT'),('5000000000234','ACT'),('5000000000241','ACT'),('5000000000258','ACT'),('5000000000265','ACT'),('5000000000272','ACT'),('5000000000289','ACT'),('5000000000296','ACT'),('5000000000302','ACT'),('5000000000319','ACT'),('5000000000326','ACT'),('5000000000333','ACT'),('5000000000340','ACT'),('5000000000357','ACT');

/*Table structure for table `lb_branch` */

DROP TABLE IF EXISTS `lb_branch`;

CREATE TABLE `lb_branch` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `branch_name` varchar(100) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `telephone` varchar(50) DEFAULT NULL,
  `status_code` varchar(10) DEFAULT 'ACTIVE',
  `created_user` int(5) DEFAULT NULL,
  `created_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `NewIndex1` (`branch_name`),
  KEY `FK_lb_branch_status` (`status_code`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `lb_branch` */

insert  into `lb_branch`(`id`,`branch_name`,`address`,`telephone`,`status_code`,`created_user`,`created_datetime`) values (1,'Head Office','Colombo 03','0112544780','ACTIVE',1,'2018-04-15 23:32:14'),(2,'Negombo','Nego Sea ','0315788402','ACTIVE',1,'2018-04-16 22:35:28'),(3,'Gampaha','Gampaha Road ','0335977480','ACTIVE',1,'2018-04-21 18:30:51'),(4,'Girulla','Giriulla Branch ','0358874580','ACTIVE',1,'2018-04-21 18:32:01'),(5,'Kandy','Kandy Road, Kandy','0521145700','ACTIVE',1,'2018-04-21 20:00:06');

/*Table structure for table `lb_center` */

DROP TABLE IF EXISTS `lb_center`;

CREATE TABLE `lb_center` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `center_name` varchar(100) DEFAULT NULL,
  `center_address` varchar(100) DEFAULT NULL,
  `telephone` int(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `joined_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status_code` varchar(10) DEFAULT 'ACTIVE' COMMENT 'ACTIVE|CLOSE',
  `remarks` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `lb_center` */

insert  into `lb_center`(`id`,`center_name`,`center_address`,`telephone`,`email`,`joined_date`,`status_code`,`remarks`) values (1,'In House','LAB House',115388975,'labms@labms.lk','2018-04-20 08:01:41','ACTIVE','In House test'),(2,'Gampaha Center','Station Road, Gampaha',318966587,'gam@gmai.com','2018-04-21 09:16:43','ACTIVE','Gampaha Test Center'),(3,'Negombo Center','Sea Street Negombo',318455470,'gamneg@gmai.com','2018-04-21 09:56:27','ACTIVE','Negombo Test Center');

/*Table structure for table `lb_invoice_test` */

DROP TABLE IF EXISTS `lb_invoice_test`;

CREATE TABLE `lb_invoice_test` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `invoice_id` int(5) DEFAULT NULL,
  `test_id` int(5) DEFAULT NULL,
  `created_user` int(5) DEFAULT NULL,
  `center_id` int(5) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `status_code` varchar(10) DEFAULT 'PENDING' COMMENT 'PENDING->COMPLETE',
  `result_value` varchar(200) DEFAULT NULL,
  `results_remark` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_lb_invoice_test` (`test_id`),
  KEY `FK_lb_invoice_test_center` (`center_id`),
  KEY `FK_lb_invoice_test_invoice` (`invoice_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `lb_invoice_test` */

insert  into `lb_invoice_test`(`id`,`invoice_id`,`test_id`,`created_user`,`center_id`,`amount`,`status_code`,`result_value`,`results_remark`) values (1,1,1,2,1,'2500.00','COMPLETE','25','Pass test'),(2,2,1,2,1,'2500.00','PENDING',NULL,NULL),(3,2,2,2,1,'1500.00','COMPLETE','45','Pass'),(4,3,1,1,1,'2500.00','COMPLETE','25','Ok with value'),(5,4,1,2,3,'2500.00','PENDING',NULL,NULL),(6,4,2,2,1,'1500.00','PENDING',NULL,NULL);

/*Table structure for table `lb_message` */

DROP TABLE IF EXISTS `lb_message`;

CREATE TABLE `lb_message` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name_user` varchar(100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `message` text,
  `created_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status_code` varchar(10) DEFAULT 'OPEN',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `lb_message` */

insert  into `lb_message`(`id`,`name_user`,`email`,`message`,`created_time`,`status_code`) values (1,'Ravinath','ravi@gmail.com','this is sample meessage','2018-04-22 17:06:09','OPEN');

/*Table structure for table `lb_patient` */

DROP TABLE IF EXISTS `lb_patient`;

CREATE TABLE `lb_patient` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `frist_name` varchar(200) DEFAULT NULL,
  `last_name` varchar(200) DEFAULT NULL,
  `nic` varchar(20) DEFAULT NULL,
  `date_of_birth` varchar(20) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `pword` text,
  `status_code` varchar(10) DEFAULT 'ACTIVE' COMMENT 'ACTIVE|DEACTIVE',
  `registered_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `branch_id` int(5) DEFAULT NULL,
  `role_code` varchar(20) DEFAULT 'PATIENT',
  PRIMARY KEY (`id`),
  UNIQUE KEY `NewIndex1` (`nic`),
  KEY `FK_lb_patient_status` (`status_code`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `lb_patient` */

insert  into `lb_patient`(`id`,`frist_name`,`last_name`,`nic`,`date_of_birth`,`telephone`,`email`,`address`,`pword`,`status_code`,`registered_date`,`branch_id`,`role_code`) values (1,'Preshantha','Fernando','8635125824V','2018-03-05','0715833470','preshan@gmail.com','Raddoluwa','*34969A9E33BAE0CA0FDDF4A25FFE018F90DFDAF9','ACTIVE','2018-04-17 14:12:19',1,'PATIENT'),(2,'Kumari','Gamage','8968547541V','2018-04-01','0763582247','kumari@gmail.com','Gampaha','*2E14EEB12BF962BCA36FDE0F4D6D9C60D153AC0F','ACTIVE','2018-04-17 14:13:21',1,'PATIENT'),(3,'Samantha','Perera','8965475412V','2018-04-01','0752584520','samantha@gmail.com','Seeduwa','*44008D43E53BDC01B84AA78F5FB574B207CA4CFF','ACTIVE','2018-04-17 14:16:03',1,'PATIENT');

/*Table structure for table `lb_status` */

DROP TABLE IF EXISTS `lb_status`;

CREATE TABLE `lb_status` (
  `status_code` varchar(10) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`status_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `lb_status` */

/*Table structure for table `lb_test_feild` */

DROP TABLE IF EXISTS `lb_test_feild`;

CREATE TABLE `lb_test_feild` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `test_profile_id` int(5) DEFAULT NULL,
  `field_name` varchar(200) DEFAULT NULL,
  `normal_results` varchar(10) DEFAULT NULL,
  `special_results` varchar(10) DEFAULT NULL,
  `low_value` varchar(50) DEFAULT NULL,
  `high_value` varchar(50) DEFAULT NULL,
  `unit` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `NewIndex1` (`test_profile_id`,`field_name`),
  KEY `FK_lb_test_feild` (`test_profile_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `lb_test_feild` */

insert  into `lb_test_feild`(`id`,`test_profile_id`,`field_name`,`normal_results`,`special_results`,`low_value`,`high_value`,`unit`) values (1,1,'sadsad','55','44','33','22','mm'),(2,2,'L Cell','36','66','14','15','mm'),(3,1,'Himoglobin','25','66','58','152','mm');

/*Table structure for table `lb_test_profile` */

DROP TABLE IF EXISTS `lb_test_profile`;

CREATE TABLE `lb_test_profile` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `profile_name` varchar(20) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `REF_level_1` varchar(6) DEFAULT NULL,
  `REF_level_2` varchar(6) DEFAULT NULL,
  `container` varchar(20) DEFAULT NULL,
  `result_type` varchar(10) DEFAULT NULL,
  `status_code` varchar(10) DEFAULT NULL,
  `fee` double(10,2) DEFAULT NULL,
  `time_takes_to_test` varchar(10) DEFAULT NULL,
  `short_code` varchar(10) DEFAULT NULL,
  `created_user` int(5) DEFAULT NULL,
  `created_datetime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `NewIndex1` (`profile_name`),
  KEY `FK_lb_test_profile_status` (`status_code`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `lb_test_profile` */

insert  into `lb_test_profile`(`id`,`profile_name`,`description`,`REF_level_1`,`REF_level_2`,`container`,`result_type`,`status_code`,`fee`,`time_takes_to_test`,`short_code`,`created_user`,`created_datetime`) values (1,'Bollod ','Full Blood','25','45','Value','Leter','ACTIVE',2500.00,'25 min','52335',1,'2018-04-17 15:27:02'),(2,'Urine','Ureen Test','25','46','Value','Conte','ACTIVE',1500.00,'25 min','25333',1,'2018-04-20 07:23:59');

/*Table structure for table `lb_user` */

DROP TABLE IF EXISTS `lb_user`;

CREATE TABLE `lb_user` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `frist_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `nic` varchar(12) DEFAULT NULL,
  `empno` varchar(20) DEFAULT NULL COMMENT 'the username',
  `pword` text,
  `role_code` varchar(10) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `status_code` varchar(10) DEFAULT 'ACTIVE',
  `created_user` varchar(10) DEFAULT NULL,
  `created_datetime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `branch_id` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `NewIndex1` (`empno`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `lb_user` */

insert  into `lb_user`(`id`,`frist_name`,`last_name`,`nic`,`empno`,`pword`,`role_code`,`telephone`,`status_code`,`created_user`,`created_datetime`,`branch_id`) values (1,'Super','Admin','998654214V','admin','*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9','ADMIN','0758455470','ACTIVE','1','2018-04-15 23:31:52',1),(2,'Danushka','Fernan','665845554V','5522','*667F407DE7C6AD07358FA38DAED7828A72014B4E','MANAGER','0575548740','ACTIVE','1','2018-04-16 23:06:51',1),(3,'janaka','vidana','865125824V','8855','*6C39DB3F16D3F0B179A84C9D34F0553143B83684','MANAGER','0765866985','ACTIVE','1','2018-04-21 18:38:27',3),(4,'Gayanthax','Kumari','8652125412V','8856','*5B4B1F8AA7BE549E39ED4AD2F8CCEAE050AD0389','CASHIER','0758633254','ACTIVE','1','2018-04-21 18:42:44',3),(5,'kumari','kamag','998547454V','8857','*40DCB45E857B060576E8FB496BFC0BA50769BC77','MLT','0768566958','ACTIVE','1','2018-04-21 18:45:44',3),(7,'Kusumi','Fernando','887547522V','8858','*288A7937D7A48B2C8148F1849013DBD8AA443263','MLT','0768522347','ACTIVE','1','2018-04-21 18:47:56',3),(8,'Janaka','Vidanagama','866545824V','9952','*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9','CASHIER','075863541','ACTIVE','1','2018-04-22 16:42:30',2);

/*Table structure for table `ld_invoice` */

DROP TABLE IF EXISTS `ld_invoice`;

CREATE TABLE `ld_invoice` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `patient_id` int(5) DEFAULT NULL,
  `invoice_datetime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status_code` varchar(10) DEFAULT 'OPEN' COMMENT 'OPEN->CLOSE',
  `BCN` varchar(15) DEFAULT NULL,
  `created_user` int(5) DEFAULT NULL,
  `report_ready_date` varchar(20) DEFAULT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL,
  `branch_id` int(5) DEFAULT NULL,
  `updated_user` int(5) DEFAULT NULL,
  `updated_time` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_ld_invoice` (`patient_id`),
  KEY `FK_ld_invoice_branch` (`branch_id`),
  KEY `FK_ld_invoice_user` (`created_user`),
  KEY `FK_ld_invoice_status` (`status_code`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `ld_invoice` */

insert  into `ld_invoice`(`id`,`patient_id`,`invoice_datetime`,`status_code`,`BCN`,`created_user`,`report_ready_date`,`total_amount`,`branch_id`,`updated_user`,`updated_time`) values (1,1,'2018-04-20 16:40:19','OPEN','5000000000012',2,'2018-04-27','2500.00',2,0,''),(2,3,'2018-04-20 16:40:56','COMPLETE','5000000000029',2,'2018-04-26','4000.00',1,1,'2018-04-21 11:52:45am'),(3,1,'2018-04-21 18:59:48','COMPLETE','5000000000036',1,'2018-04-25','2500.00',1,2,'2018-04-21 08:19:33pm'),(4,2,'2018-04-21 20:12:56','OPEN','5000000000043',2,'2018-04-30','4000.00',3,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
