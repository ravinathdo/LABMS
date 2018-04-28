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

/*Table structure for table `lb_branch` */

DROP TABLE IF EXISTS `lb_branch`;

CREATE TABLE `lb_branch` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `branch_name` varchar(100) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `telephone` varchar(50) DEFAULT NULL,
  `status_code` varchar(10) DEFAULT NULL,
  `created_user` int(5) DEFAULT NULL,
  `created_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `FK_lb_branch_status` (`status_code`),
  CONSTRAINT `FK_lb_branch_status` FOREIGN KEY (`status_code`) REFERENCES `lb_status` (`status_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `lb_branch` */

/*Table structure for table `lb_center` */

DROP TABLE IF EXISTS `lb_center`;

CREATE TABLE `lb_center` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `center_name` varchar(100) DEFAULT NULL,
  `center_address` varchar(100) DEFAULT NULL,
  `telephone` int(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `joined_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `center_status` varchar(10) DEFAULT 'ACTIVE' COMMENT 'ACTIVE|CLOSE',
  `remarks` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `lb_center` */

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
  KEY `FK_lb_invoice_test_invoice` (`invoice_id`),
  CONSTRAINT `FK_lb_invoice_test_invoice` FOREIGN KEY (`invoice_id`) REFERENCES `ld_invoice` (`id`),
  CONSTRAINT `FK_lb_invoice_test` FOREIGN KEY (`test_id`) REFERENCES `lb_test_profile` (`id`),
  CONSTRAINT `FK_lb_invoice_test_center` FOREIGN KEY (`center_id`) REFERENCES `lb_center` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `lb_invoice_test` */

/*Table structure for table `lb_patient` */

DROP TABLE IF EXISTS `lb_patient`;

CREATE TABLE `lb_patient` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `frist_name` varchar(200) DEFAULT NULL,
  `last_name` varchar(200) DEFAULT NULL,
  `nic` varchar(20) DEFAULT NULL,
  `date_of_birth` varchar(20) DEFAULT NULL,
  `telephone` int(20) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `pword` text,
  `status_code` varchar(10) DEFAULT 'ACTIVE' COMMENT 'ACTIVE|DEACTIVE',
  `registered_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `branch_id` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_lb_patient_status` (`status_code`),
  CONSTRAINT `FK_lb_patient_status` FOREIGN KEY (`status_code`) REFERENCES `lb_status` (`status_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `lb_patient` */

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
  KEY `FK_lb_test_feild` (`test_profile_id`),
  CONSTRAINT `FK_lb_test_feild` FOREIGN KEY (`test_profile_id`) REFERENCES `lb_test_profile` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `lb_test_feild` */

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
  KEY `FK_lb_test_profile_status` (`status_code`),
  CONSTRAINT `FK_lb_test_profile_status` FOREIGN KEY (`status_code`) REFERENCES `lb_status` (`status_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `lb_test_profile` */

/*Table structure for table `lb_user` */

DROP TABLE IF EXISTS `lb_user`;

CREATE TABLE `lb_user` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `frist_name` text,
  `last_name` varchar(20) DEFAULT NULL,
  `nic` varchar(10) DEFAULT NULL,
  `password` varchar(14) DEFAULT NULL,
  `role_code` varchar(10) DEFAULT NULL,
  `telephone` int(10) DEFAULT NULL,
  `status` int(4) DEFAULT NULL,
  `created_user` varchar(10) DEFAULT NULL,
  `created_datetime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `branch_id` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `lb_user` */

/*Table structure for table `ld_invoice` */

DROP TABLE IF EXISTS `ld_invoice`;

CREATE TABLE `ld_invoice` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `patient_id` int(5) DEFAULT NULL,
  `invoice_datetime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status_code` varchar(10) DEFAULT 'OPEN' COMMENT 'OPEN->CLOSE',
  `BCN` varchar(15) DEFAULT NULL,
  `created_user` int(5) DEFAULT NULL,
  `created_datetime` varchar(20) DEFAULT NULL,
  `report_ready_date` varchar(20) DEFAULT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL,
  `branch_id` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_ld_invoice` (`patient_id`),
  KEY `FK_ld_invoice_branch` (`branch_id`),
  KEY `FK_ld_invoice_user` (`created_user`),
  KEY `FK_ld_invoice_status` (`status_code`),
  CONSTRAINT `FK_ld_invoice_status` FOREIGN KEY (`status_code`) REFERENCES `lb_status` (`status_code`),
  CONSTRAINT `FK_ld_invoice` FOREIGN KEY (`patient_id`) REFERENCES `lb_patient` (`id`),
  CONSTRAINT `FK_ld_invoice_branch` FOREIGN KEY (`branch_id`) REFERENCES `lb_branch` (`id`),
  CONSTRAINT `FK_ld_invoice_user` FOREIGN KEY (`created_user`) REFERENCES `lb_user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ld_invoice` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
