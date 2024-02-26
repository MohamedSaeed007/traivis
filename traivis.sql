-- MySQL dump 10.13  Distrib 5.7.32, for osx10.12 (x86_64)
--
-- Host: localhost    Database: teachify
-- ------------------------------------------------------
-- Server version	5.7.32

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
-- Table structure for table `all_languages`
--

DROP TABLE IF EXISTS `all_languages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `all_languages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `en_language` varchar(255) DEFAULT NULL,
  `ar_language` varchar(255) DEFAULT NULL,
  `active` tinyint(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `all_languages`
--

LOCK TABLES `all_languages` WRITE;
/*!40000 ALTER TABLE `all_languages` DISABLE KEYS */;
INSERT INTO `all_languages` VALUES (1,'English','English (Arabic)',1),(2,'French','French (Arabic)',1),(3,'Arabic','Arabic (Arabic)',1);
/*!40000 ALTER TABLE `all_languages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `answers`
--

DROP TABLE IF EXISTS `answers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `answers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `quiz_id` int(11) DEFAULT NULL,
  `question_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `attempt_id` int(11) DEFAULT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci,
  `q_type` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `q_score` decimal(5,1) DEFAULT NULL,
  `r_score` decimal(5,1) DEFAULT NULL,
  `is_correct` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answers`
--

LOCK TABLES `answers` WRITE;
/*!40000 ALTER TABLE `answers` DISABLE KEYS */;
INSERT INTO `answers` VALUES (1,7,4,3,3,'<phpjkjs>','text',10.0,0.0,0),(2,7,3,3,3,'[\"3\"]','checkbox',10.0,10.0,1),(3,7,5,3,3,'[\"6\"]','checkbox',10.0,10.0,1),(4,7,5,4,4,'[\"6\"]','checkbox',10.0,10.0,1),(5,7,3,4,4,'[\"3\"]','checkbox',10.0,10.0,1),(6,7,4,4,4,'hjhj','text',10.0,0.0,0);
/*!40000 ALTER TABLE `answers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `assignment_submissions`
--

DROP TABLE IF EXISTS `assignment_submissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `assignment_submissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `assignment_id` int(11) DEFAULT NULL,
  `instructor_id` int(11) DEFAULT NULL,
  `text_submission` longtext COLLATE utf8mb4_unicode_ci,
  `earned_numbers` decimal(8,2) DEFAULT NULL,
  `instructors_note` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_evaluated` tinyint(4) DEFAULT '0',
  `evaluated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `assignment_submissions`
--

LOCK TABLES `assignment_submissions` WRITE;
/*!40000 ALTER TABLE `assignment_submissions` DISABLE KEYS */;
INSERT INTO `assignment_submissions` VALUES (1,1,1,3,NULL,'<p>new</p>',NULL,NULL,'submitted',0,NULL,'2020-12-19 05:43:01','2020-12-19 05:43:12'),(2,2,2,6,1,'<p>Yes</p>',13.00,'<p>jjh</p>','submitted',1,'2020-12-22 08:56:16','2020-12-20 01:05:27','2020-12-22 08:56:16'),(3,3,2,6,NULL,'<p>okay</p>',NULL,NULL,'submitted',0,NULL,'2020-12-20 01:09:53','2020-12-20 01:10:08'),(4,4,2,6,NULL,'<p>hggj</p>',NULL,NULL,'submitted',0,NULL,'2020-12-21 02:23:08','2020-12-21 02:24:01');
/*!40000 ALTER TABLE `assignment_submissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `attachments`
--

DROP TABLE IF EXISTS `attachments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attachments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `course_id` int(11) DEFAULT NULL,
  `assignment_submission_id` int(11) DEFAULT NULL,
  `belongs_course_id` int(11) DEFAULT NULL,
  `content_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `media_id` int(11) DEFAULT NULL,
  `hash_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attachments`
--

LOCK TABLES `attachments` WRITE;
/*!40000 ALTER TABLE `attachments` DISABLE KEYS */;
INSERT INTO `attachments` VALUES (1,NULL,2,NULL,NULL,2,2,'vv6hkq87t8xet446148brz6emfcjncvo'),(2,NULL,3,NULL,NULL,3,3,'uvluvuoc8jcoy446408cti2aivopaoe3'),(3,NULL,4,NULL,NULL,4,4,'ex7gsoe9vxqog537241ksxrawzsboapo');
/*!40000 ALTER TABLE `attachments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `attempts`
--

DROP TABLE IF EXISTS `attempts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attempts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `course_id` int(11) DEFAULT NULL,
  `quiz_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `reviewer_id` int(11) DEFAULT NULL,
  `questions_limit` int(11) DEFAULT NULL,
  `total_answered` int(11) DEFAULT NULL,
  `total_scores` decimal(5,1) DEFAULT NULL,
  `earned_scores` decimal(5,1) DEFAULT NULL,
  `passing_percent` int(11) DEFAULT NULL,
  `earned_percent` int(11) DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quiz_gradable` tinyint(4) DEFAULT '0',
  `is_reviewed` tinyint(4) DEFAULT '0',
  `ended_at` timestamp NULL DEFAULT NULL,
  `reviewed_at` timestamp NULL DEFAULT NULL,
  `passed` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attempts`
--

LOCK TABLES `attempts` WRITE;
/*!40000 ALTER TABLE `attempts` DISABLE KEYS */;
INSERT INTO `attempts` VALUES (1,1,2,1,NULL,NULL,0,0.0,0.0,0,0,'finished',NULL,0,'2020-12-19 05:42:12',NULL,1,'2020-12-19 05:42:11','2020-12-19 05:42:12'),(2,2,7,2,NULL,NULL,0,0.0,0.0,0,0,'finished',NULL,0,'2020-12-20 01:06:00',NULL,1,'2020-12-20 01:06:00','2020-12-20 01:06:00'),(3,2,7,3,NULL,10,3,30.0,20.0,5,67,'in_review',1,0,'2020-12-20 01:10:38',NULL,1,'2020-12-20 01:10:16','2020-12-20 01:10:38'),(4,2,7,4,NULL,10,3,30.0,20.0,5,67,'in_review',1,0,'2020-12-21 02:24:39',NULL,1,'2020-12-21 02:24:16','2020-12-21 02:24:39');
/*!40000 ALTER TABLE `attempts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `banners`
--

DROP TABLE IF EXISTS `banners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `banners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` int(11) DEFAULT NULL,
  `title_en` varchar(250) DEFAULT NULL,
  `title_ar` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `content_en` text,
  `content_ar` text CHARACTER SET utf8,
  `slug` varchar(250) DEFAULT NULL,
  `logo` varchar(250) DEFAULT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '0' COMMENT '0-deactivated. 1- Activated',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banners`
--

LOCK TABLES `banners` WRITE;
/*!40000 ALTER TABLE `banners` DISABLE KEYS */;
INSERT INTO `banners` VALUES (1,1,'Company Landing',NULL,'test',NULL,'company-landing','5f96b4b1c5b24.png',0,'2020-10-26 04:00:01','2020-10-26 06:06:17'),(3,2,'Test','dfgdfgdf','desc','hjhtr','test','5f96b46b5a6fe.png',0,'2020-10-26 04:42:38','2020-10-26 06:05:07'),(4,3,'casdasd','dgfdfdfgdfg','asdasd','dfgdfg','casdasd','5f96a136988b4.jpeg',0,'2020-10-26 04:43:10','2020-10-26 05:15:36'),(5,4,'asd','asdas','asdads','asdasd','asd','5f96a1423e85b.jpeg',0,'2020-10-26 04:43:22','2020-10-26 05:21:02'),(6,5,'About Us','About Us','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br>\r\ntempor incididunt ut labore et dolore magna aliqua.','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br>\r\ntempor incididunt ut labore et dolore magna aliqua.','about-us','5f96baa533e13.jpeg',0,'2020-10-26 06:30:45','2020-10-26 06:51:54'),(9,6,'Privacy Policy','Tested','','','test-1','5fd09d4f7b939.jpeg',0,'2020-12-09 04:17:59','2020-12-09 10:43:33'),(10,7,'Contact','Contact','test','tds','contact','5fd0a621859f6.jpeg',0,'2020-12-09 04:55:37','2020-12-09 10:27:30');
/*!40000 ALTER TABLE `banners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) DEFAULT '0',
  `thumbnail_id` int(11) DEFAULT NULL,
  `icon_class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `step` tinyint(4) NOT NULL DEFAULT '0',
  `status` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,1,'Main','main',0,NULL,'la-adjust',0,1),(2,1,'Topic','sub-main',2,NULL,'la-accusoft',2,1),(3,1,'Sub Main','sub-main-1',1,NULL,'la-500px',1,1),(4,1,'Topic','topic',3,NULL,'la-address-book-o',2,1),(5,1,'Computer Science','computer-science',0,NULL,'0',0,1),(6,1,'Programming','programming',5,NULL,'la-accessible-icon',1,1),(7,1,'Python','python',6,NULL,'la-address-book',2,1);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `companies`
--

DROP TABLE IF EXISTS `companies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `companies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `en_company_name` varchar(200) DEFAULT NULL,
  `ar_company_name` varchar(200) DEFAULT NULL,
  `logo` varchar(200) DEFAULT NULL,
  `en_about_company` text,
  `ar_about_company` text,
  `website` varchar(200) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `latitude` decimal(12,9) DEFAULT NULL,
  `longitude` decimal(12,9) DEFAULT NULL,
  `newsletter_status` tinyint(1) DEFAULT NULL COMMENT '0-unsuscribe ,1 -subscribe',
  `status` tinyint(2) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `companies`
--

LOCK TABLES `companies` WRITE;
/*!40000 ALTER TABLE `companies` DISABLE KEYS */;
INSERT INTO `companies` VALUES (16,'Yarddiant Weblounge',NULL,'yarddiant.png','We build relationships on the basis of mutual trust, transparency, reliability and perseverance with our team, clients and other business associates.',NULL,'https://www.yarddiant.com','SBC office-12, 1st floor, Sahya building, Govt Cyberpark, Calicut-673016',101,NULL,NULL,1,1,'2020-10-01 09:12:13','2020-10-01 09:35:55',NULL);
/*!40000 ALTER TABLE `companies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_contact_details`
--

DROP TABLE IF EXISTS `company_contact_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company_contact_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) DEFAULT NULL,
  `contact_first_name` varchar(255) DEFAULT NULL,
  `contact_last_name` varchar(255) DEFAULT NULL,
  `position` varchar(200) DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL COMMENT '1-Female, 2-Male ,3-Other , 4- I''d rather not say',
  `dob` date DEFAULT NULL,
  `email_id` varchar(250) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `visibility_status` tinyint(2) DEFAULT NULL COMMENT 'public 1\r\nprivate 0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_contact_details`
--

LOCK TABLES `company_contact_details` WRITE;
/*!40000 ALTER TABLE `company_contact_details` DISABLE KEYS */;
INSERT INTO `company_contact_details` VALUES (1,16,'Neeraj',' Gupta','COO',2,'2000-11-04','neeraj@yarddiant.com','9876543210',1,'2020-10-01 15:37:39','2020-10-02 22:26:42');
/*!40000 ALTER TABLE `company_contact_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_departments`
--

DROP TABLE IF EXISTS `company_departments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company_departments` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `en_department` varchar(255) DEFAULT NULL,
  `ar_department` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  `created_by` bigint(20) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_by` bigint(20) DEFAULT NULL,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_departments`
--

LOCK TABLES `company_departments` WRITE;
/*!40000 ALTER TABLE `company_departments` DISABLE KEYS */;
INSERT INTO `company_departments` VALUES (1,16,'IT department',NULL,1,NULL,'2020-10-02 12:13:52',16,'2020-10-02 12:51:02',NULL),(3,16,'SEO',NULL,1,NULL,'2020-10-02 12:14:31',NULL,'2020-10-02 12:14:31',NULL),(7,16,'Marketing',NULL,1,NULL,'2020-11-18 05:26:08',NULL,'2020-11-18 05:26:08',NULL),(8,16,'Finance',NULL,1,NULL,'2020-11-18 05:26:13',NULL,'2020-11-18 05:26:13',NULL),(9,4,'Developement Department','تنسننس. ستن',1,NULL,'2020-12-26 18:54:31',NULL,'2020-12-26 18:54:31',NULL),(10,4,'Designing Department','تنسننس. ستن',1,NULL,'2020-12-27 04:16:57',NULL,'2020-12-27 04:16:57',NULL),(11,4,'SEO Department','تنسننس. ستن',1,NULL,'2020-12-27 05:36:38',NULL,'2020-12-27 05:36:38',NULL),(12,4,'Testing Department','تنسننس. ستن',1,NULL,'2020-12-27 05:36:53',NULL,'2020-12-27 05:36:53',NULL),(13,4,'Server Side Maintanance Department','تنسننس. ستن',1,NULL,'2020-12-27 05:37:15',NULL,'2020-12-27 05:37:15',NULL),(14,4,'Delevery Department','تنسننس. ستن',1,NULL,'2020-12-27 05:37:31',NULL,'2020-12-27 05:37:31',NULL);
/*!40000 ALTER TABLE `company_departments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_industries`
--

DROP TABLE IF EXISTS `company_industries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company_industries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) DEFAULT NULL,
  `industry_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_industries`
--

LOCK TABLES `company_industries` WRITE;
/*!40000 ALTER TABLE `company_industries` DISABLE KEYS */;
/*!40000 ALTER TABLE `company_industries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_languages`
--

DROP TABLE IF EXISTS `company_languages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company_languages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) DEFAULT NULL,
  `language_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_languages`
--

LOCK TABLES `company_languages` WRITE;
/*!40000 ALTER TABLE `company_languages` DISABLE KEYS */;
INSERT INTO `company_languages` VALUES (1,16,1,NULL,NULL,NULL),(2,16,2,NULL,'2020-10-01 22:20:08',NULL);
/*!40000 ALTER TABLE `company_languages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_occupations`
--

DROP TABLE IF EXISTS `company_occupations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company_occupations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) DEFAULT NULL,
  `occupation_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_occupations`
--

LOCK TABLES `company_occupations` WRITE;
/*!40000 ALTER TABLE `company_occupations` DISABLE KEYS */;
INSERT INTO `company_occupations` VALUES (1,16,6,NULL,NULL),(2,16,7,NULL,NULL);
/*!40000 ALTER TABLE `company_occupations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_positions`
--

DROP TABLE IF EXISTS `company_positions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company_positions` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `position_en` varchar(255) DEFAULT NULL,
  `position_ar` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  `created_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` bigint(20) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_positions`
--

LOCK TABLES `company_positions` WRITE;
/*!40000 ALTER TABLE `company_positions` DISABLE KEYS */;
INSERT INTO `company_positions` VALUES (1,16,'Developer',NULL,1,NULL,'2020-11-18 00:01:52',NULL,'2020-11-18 00:01:52',NULL),(2,16,'Designer',NULL,1,NULL,'2020-11-18 00:01:58',NULL,'2020-11-18 00:01:58',NULL),(3,16,'QA',NULL,1,NULL,'2020-11-18 00:02:05',NULL,'2020-11-18 00:02:05',NULL),(4,16,'Business analyst',NULL,1,NULL,'2020-11-18 00:02:14',NULL,'2020-11-18 00:02:14',NULL),(5,16,'Tester',NULL,1,NULL,'2020-11-18 00:02:23',NULL,'2020-11-18 00:02:23',NULL),(6,16,'Adviser',NULL,1,NULL,'2020-11-18 00:02:38',NULL,'2020-11-18 00:02:38',NULL),(7,16,'Manager',NULL,1,NULL,'2020-11-18 00:02:53',NULL,'2020-11-18 00:02:53',NULL),(8,16,'SEO Analyst',NULL,1,NULL,'2020-11-18 00:44:27',NULL,'2020-11-18 00:44:27',NULL),(9,4,'Project Manager','سسيسيس',1,NULL,'2020-12-26 13:23:50',NULL,'2020-12-26 13:23:50',NULL),(10,4,'Designer','سسيسيس',1,NULL,'2020-12-27 11:27:15',NULL,'2020-12-27 11:27:15',NULL),(11,4,'Developer','سسيسيس',1,NULL,'2020-12-27 11:27:23',NULL,'2020-12-27 11:27:23',NULL);
/*!40000 ALTER TABLE `company_positions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_projects`
--

DROP TABLE IF EXISTS `company_projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company_projects` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `en_project` varchar(500) DEFAULT NULL,
  `ar_project` varchar(500) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  `created_by` bigint(20) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_by` bigint(20) DEFAULT NULL,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_projects`
--

LOCK TABLES `company_projects` WRITE;
/*!40000 ALTER TABLE `company_projects` DISABLE KEYS */;
INSERT INTO `company_projects` VALUES (2,16,'ABC Project',NULL,1,NULL,'2020-10-02 12:19:58',16,'2020-10-02 12:20:32',NULL),(3,16,'Alfa Project',NULL,1,NULL,'2020-10-02 12:51:23',16,'2020-10-02 12:51:31',NULL),(5,16,'Glowa',NULL,1,NULL,'2020-11-18 05:29:32',NULL,'2020-11-18 05:29:32',NULL),(6,16,'Skyline',NULL,1,NULL,'2020-11-18 05:30:00',NULL,'2020-11-18 05:30:00',NULL),(7,16,'Beta',NULL,1,NULL,'2020-11-18 05:30:12',NULL,'2020-11-18 05:30:12',NULL),(8,4,'Project Traivis','هعس زسهزهس',1,NULL,'2020-12-26 18:55:01',NULL,'2020-12-26 18:55:01',NULL);
/*!40000 ALTER TABLE `company_projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_purchase_temporary`
--

DROP TABLE IF EXISTS `company_purchase_temporary`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company_purchase_temporary` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `company_course_id` int(11) DEFAULT NULL,
  `purchase_course_id` int(11) DEFAULT NULL,
  `assigned_employees` varchar(500) DEFAULT NULL,
  `unit_price` float DEFAULT NULL,
  `course_quantity` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_purchase_temporary`
--

LOCK TABLES `company_purchase_temporary` WRITE;
/*!40000 ALTER TABLE `company_purchase_temporary` DISABLE KEYS */;
INSERT INTO `company_purchase_temporary` VALUES (1,8,8,'60',12,1,1);
/*!40000 ALTER TABLE `company_purchase_temporary` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_required_courses`
--

DROP TABLE IF EXISTS `company_required_courses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company_required_courses` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) DEFAULT NULL,
  `en_course_name` varchar(255) DEFAULT NULL,
  `ar_course_name` varchar(255) DEFAULT NULL,
  `type` tinyint(1) NOT NULL COMMENT '1-internal,2-external',
  `purchase_course_id` bigint(20) DEFAULT '0',
  `validity` int(2) DEFAULT NULL COMMENT 'in months',
  `status` tinyint(1) DEFAULT '1',
  `created_by` bigint(20) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_by` bigint(20) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_required_courses`
--

LOCK TABLES `company_required_courses` WRITE;
/*!40000 ALTER TABLE `company_required_courses` DISABLE KEYS */;
INSERT INTO `company_required_courses` VALUES (1,16,'Wordpress Development','تطوير وورد',2,0,6,1,NULL,'2020-11-18 06:18:26',NULL,'2020-11-18 06:18:26',NULL),(2,16,'Digital Marketing','التسويق الرقمي',2,0,12,1,NULL,'2020-11-18 06:19:01',NULL,'2020-11-18 06:19:01',NULL),(3,16,'Yoast SEO Training','التدريب',2,0,6,1,NULL,'2020-11-18 06:19:35',NULL,'2020-11-18 06:19:35',NULL),(4,16,'Web Designing','تصميم المواقع',2,0,6,1,NULL,'2020-11-18 06:20:12',NULL,'2020-11-18 06:20:12',NULL),(5,16,'Internal Laravel Development','تطوير Laravel الداخلي',1,0,12,1,NULL,'2020-11-18 06:33:46',NULL,'2020-11-18 06:33:46',NULL),(6,16,'Photoshop','محل تصوير',1,0,6,1,NULL,'2020-11-18 06:34:18',NULL,'2020-11-18 06:34:18',NULL),(7,16,'Larvel 8','انسانسلاهياهي',1,0,6,1,NULL,'2020-11-21 14:15:27',NULL,'2020-11-21 14:15:27',NULL),(8,16,'Larvel 8 Advanced','انسانسلاهياهي',2,0,12,1,NULL,'2020-11-21 14:16:07',NULL,'2020-11-21 14:16:07',NULL),(9,4,'Company added course 1','انسانسلاهياهي',1,0,2,1,NULL,'2020-12-27 03:50:19',NULL,'2020-12-27 03:50:19',NULL),(10,4,'Company added course 2','انسانسلاهياهي',2,0,5,1,NULL,'2020-12-27 03:50:38',NULL,'2020-12-27 03:50:38',NULL),(11,4,'Designing course Internal','انسانسلاهياهي',1,0,6,1,NULL,'2020-12-27 16:59:03',NULL,'2020-12-27 16:59:03',NULL),(12,4,'Designing course External','انسانسلاهياهي',2,0,6,1,NULL,'2020-12-27 16:59:25',NULL,'2020-12-27 16:59:25',NULL),(13,4,'Designing course Internal 2','انسانسلاهياهي',1,0,4,1,NULL,'2020-12-27 17:03:04',NULL,'2020-12-27 17:03:04',NULL),(14,4,'PHP Laravel internal','انسانسلاهياهي',2,0,12,1,NULL,'2020-12-27 17:03:39',NULL,'2020-12-27 17:03:39',NULL),(15,4,'SEO specialist','انسانسلاهياهي',1,0,2,1,NULL,'2020-12-27 17:04:06',NULL,'2020-12-27 17:04:06',NULL),(16,4,'Larvel 8','انسانسلاهياهي',2,0,4,1,NULL,'2020-12-27 17:05:14',NULL,'2020-12-27 17:05:14',NULL);
/*!40000 ALTER TABLE `company_required_courses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_users`
--

DROP TABLE IF EXISTS `company_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company_users` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `user_role` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_users`
--

LOCK TABLES `company_users` WRITE;
/*!40000 ALTER TABLE `company_users` DISABLE KEYS */;
INSERT INTO `company_users` VALUES (1,6,16,3,'2020-10-01 17:50:18','2020-10-06 16:44:58',NULL);
/*!40000 ALTER TABLE `company_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_workforce`
--

DROP TABLE IF EXISTS `company_workforce`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company_workforce` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `position_id` int(11) DEFAULT NULL,
  `department_id` bigint(20) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `work_id` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL COMMENT '0-deleted,1-active,2-pending',
  `created_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_workforce`
--

LOCK TABLES `company_workforce` WRITE;
/*!40000 ALTER TABLE `company_workforce` DISABLE KEYS */;
INSERT INTO `company_workforce` VALUES (1,16,54,NULL,NULL,NULL,'YR01',2,6,'2020-11-18 00:39:29','2020-11-18 00:39:29'),(2,16,55,NULL,NULL,NULL,'YR02',2,6,'2020-11-18 00:40:46','2020-11-18 00:40:46'),(3,16,56,NULL,NULL,NULL,'Y189W',2,6,'2020-11-18 00:42:28','2020-11-18 00:42:28'),(4,16,57,NULL,NULL,NULL,'YR745',2,6,'2020-11-18 00:45:17','2020-11-18 00:45:17'),(5,16,58,NULL,NULL,NULL,'Yt45',2,6,'2020-11-18 00:45:52','2020-11-18 00:45:52'),(6,16,59,NULL,NULL,NULL,'YR741',2,6,'2020-11-18 00:46:39','2020-11-18 00:46:39'),(7,16,60,NULL,NULL,NULL,'1234',2,6,'2020-11-21 08:37:41','2020-11-21 08:37:41'),(8,4,5,NULL,NULL,NULL,'22311',2,4,'2020-12-26 13:31:25','2020-12-26 13:31:25'),(9,4,6,NULL,NULL,NULL,'110',2,4,'2020-12-27 11:24:59','2020-12-27 11:24:59'),(10,4,7,NULL,NULL,NULL,'321',2,4,'2020-12-27 11:25:28','2020-12-27 11:25:28'),(11,4,8,NULL,NULL,NULL,'9876',2,4,'2020-12-27 11:25:52','2020-12-27 11:25:52'),(12,4,9,NULL,NULL,NULL,'5475',2,4,'2020-12-27 11:26:36','2020-12-27 11:26:36'),(13,4,10,NULL,NULL,NULL,'5443',2,4,'2020-12-27 11:27:01','2020-12-27 11:27:01'),(14,4,11,NULL,NULL,NULL,'3211',2,4,'2020-12-27 11:28:13','2020-12-27 11:28:13');
/*!40000 ALTER TABLE `company_workforce` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `completes`
--

DROP TABLE IF EXISTS `completes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `completes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `completed_course_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `content_id` int(11) DEFAULT NULL,
  `completed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `completes`
--

LOCK TABLES `completes` WRITE;
/*!40000 ALTER TABLE `completes` DISABLE KEYS */;
INSERT INTO `completes` VALUES (1,1,NULL,1,2,'2020-12-19 05:42:12'),(2,1,NULL,1,3,'2020-12-19 05:43:12'),(3,1,NULL,1,1,'2020-12-19 05:45:45'),(4,2,NULL,2,4,'2020-12-20 01:04:53'),(5,2,NULL,2,5,'2020-12-20 01:05:16'),(6,2,NULL,2,6,'2020-12-20 01:05:48'),(7,2,NULL,2,7,'2020-12-20 01:06:00'),(8,2,2,NULL,NULL,'2020-12-20 01:08:50'),(9,3,NULL,2,4,'2020-12-20 01:09:49'),(10,3,NULL,2,5,'2020-12-20 01:09:51'),(11,3,NULL,2,6,'2020-12-20 01:10:08'),(12,3,NULL,2,7,'2020-12-20 01:10:38'),(13,4,NULL,2,4,'2020-12-21 02:22:53'),(14,4,NULL,2,5,'2020-12-21 02:23:02'),(15,4,NULL,2,6,'2020-12-21 02:24:01'),(16,4,NULL,2,7,'2020-12-21 02:24:39');
/*!40000 ALTER TABLE `completes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contents`
--

DROP TABLE IF EXISTS `contents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contents` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `section_id` int(11) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci,
  `video_src` text COLLATE utf8mb4_unicode_ci,
  `video_time` int(11) DEFAULT NULL,
  `item_type` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_preview` tinyint(4) DEFAULT '0',
  `status` tinyint(4) DEFAULT '0',
  `sort_order` tinyint(4) DEFAULT '0',
  `options` text COLLATE utf8mb4_unicode_ci,
  `quiz_gradable` tinyint(4) DEFAULT NULL,
  `unlock_date` timestamp NULL DEFAULT NULL,
  `unlock_days` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contents`
--

LOCK TABLES `contents` WRITE;
/*!40000 ALTER TABLE `contents` DISABLE KEYS */;
INSERT INTO `contents` VALUES (1,1,1,1,'Module 1','module-1','<p>Interested in the field of Machine Learning?&nbsp;Then this course is for you!</p>\r\n\r\n<p>This course has been designed by two professional Data Scientists so that we can share our knowledge and help you learn complex theory,&nbsp;algorithms, and coding libraries in a simple way.</p>\r\n\r\n<p>We will walk you step-by-step into the World of Machine Learning. With every tutorial, you will develop new skills and improve your understanding of this challenging yet lucrative sub-field of Data Science.</p>\r\n\r\n<p>This course is&nbsp;fun and exciting, but at the same time, we dive deep into Machine Learning. It is structured the following way:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Part 1 - Data Preprocessing</p>\r\n	</li>\r\n	<li>\r\n	<p>Part 2 - Regression: Simple Linear Regression, Multiple Linear Regression,&nbsp;Polynomial&nbsp;Regression,&nbsp;SVR, Decision Tree Regression,&nbsp;Random Forest Regression</p>\r\n	</li>\r\n	<li>\r\n	<p>Part 3 - Classification: Logistic Regression, K-NN, SVM, Kernel SVM, Naive Bayes, Decision Tree Classification,&nbsp;Random&nbsp;Forest Classification</p>\r\n	</li>\r\n	<li>\r\n	<p>Part 4 - Clustering: K-Means,&nbsp;Hierarchical Clustering</p>\r\n	</li>\r\n	<li>\r\n	<p>Part 5 - Association Rule Learning: Apriori,&nbsp;Eclat</p>\r\n	</li>\r\n	<li>\r\n	<p>Part 6 - Reinforcement Learning:&nbsp;Upper Confidence Bound,&nbsp;Thompson Sampling</p>\r\n	</li>\r\n	<li>\r\n	<p>Part 7 - Natural Language Processing: Bag-of-words model&nbsp;and&nbsp;algorithms for NLP</p>\r\n	</li>\r\n	<li>\r\n	<p>Part 8 - Deep Learning: Artificial Neural Networks,&nbsp;Convolutional Neural Networks</p>\r\n	</li>\r\n	<li>\r\n	<p>Part 9 - Dimensionality Reduction: PCA, LDA, Kernel PCA</p>\r\n	</li>\r\n	<li>\r\n	<p>Part 10 - Model Selection &amp; Boosting: k-fold Cross Validation, Parameter Tuning, Grid Search,&nbsp;XGBoost</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>Moreover, the course is packed with practical exercises that are based on real-life&nbsp;examples. So not only will you learn the theory, but you will also get some hands-on practice building your own models.</p>\r\n\r\n<p>And as a bonus, this course includes both&nbsp;Python and R&nbsp;code templates which you can download and use on your own projects.</p>\r\n\r\n<p>Important updates (June 2020):</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>CODES ALL UP TO DATE</p>\r\n	</li>\r\n	<li>\r\n	<p>DEEP LEARNING CODED IN TENSORFLOW 2.0</p>\r\n	</li>\r\n	<li>\r\n	<p>TOP GRADIENT BOOSTING MODELS INCLUDING XGBOOST AND EVEN CATBOOST!</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Who this course is for:</h2>\r\n\r\n<ul>\r\n	<li>Anyone interested in Machine Learning.</li>\r\n	<li>Students who have at least high school knowledge in math and who want to start learning Machine Learning.</li>\r\n	<li>Any intermediate level people who know the basics of machine learning, including the classical algorithms like linear regression or logistic regression, but who want to learn more about it and explore all the different fields of Machine Learning.</li>\r\n	<li>Any people who are not that comfortable with coding but who are interested in Machine Learning and want to apply it easily on datasets.</li>\r\n	<li>Any students in college who want to start a career in Data Science.</li>\r\n	<li>Any data analysts who want to level up in Machine Learning.</li>\r\n	<li>Any people who are not satisfied with their job and who want to become a Data Scientist.</li>\r\n	<li>Any people who want to create added value to their business by using powerful Machine Learning tools.</li>\r\n</ul>',NULL,0,'lecture',1,1,1,NULL,NULL,NULL,NULL,'2020-12-19 05:38:16','2020-12-19 05:38:16'),(2,1,1,1,'Master Quiz','master-quiz','<p>Interested in the field of Machine Learning?&nbsp;Then this course is for you!</p>\r\n\r\n<p>This course has been designed by two professional Data Scientists so that we can share our knowledge and help you learn complex theory,&nbsp;algorithms, and coding libraries in a simple way.</p>\r\n\r\n<p>We will walk you step-by-step into the World of Machine Learning. With every tutorial, you will develop new skills and improve your understanding of this challenging yet lucrative sub-field of Data Science.</p>\r\n\r\n<p>This course is&nbsp;fun and exciting, but at the same time, we dive deep into Machine Learning. It is structured the following way:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Part 1 - Data Preprocessing</p>\r\n	</li>\r\n	<li>\r\n	<p>Part 2 - Regression: Simple Linear Regression, Multiple Linear Regression,&nbsp;Polynomial&nbsp;Regression,&nbsp;SVR, Decision Tree Regression,&nbsp;Random Forest Regression</p>\r\n	</li>\r\n	<li>\r\n	<p>Part 3 - Classification: Logistic Regression, K-NN, SVM, Kernel SVM, Naive Bayes, Decision Tree Classification,&nbsp;Random&nbsp;Forest Classification</p>\r\n	</li>\r\n	<li>\r\n	<p>Part 4 - Clustering: K-Means,&nbsp;Hierarchical Clustering</p>\r\n	</li>\r\n	<li>\r\n	<p>Part 5 - Association Rule Learning: Apriori,&nbsp;Eclat</p>\r\n	</li>\r\n	<li>\r\n	<p>Part 6 - Reinforcement Learning:&nbsp;Upper Confidence Bound,&nbsp;Thompson Sampling</p>\r\n	</li>\r\n	<li>\r\n	<p>Part 7 - Natural Language Processing: Bag-of-words model&nbsp;and&nbsp;algorithms for NLP</p>\r\n	</li>\r\n	<li>\r\n	<p>Part 8 - Deep Learning: Artificial Neural Networks,&nbsp;Convolutional Neural Networks</p>\r\n	</li>\r\n	<li>\r\n	<p>Part 9 - Dimensionality Reduction: PCA, LDA, Kernel PCA</p>\r\n	</li>\r\n	<li>\r\n	<p>Part 10 - Model Selection &amp; Boosting: k-fold Cross Validation, Parameter Tuning, Grid Search,&nbsp;XGBoost</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>Moreover, the course is packed with practical exercises that are based on real-life&nbsp;examples. So not only will you learn the theory, but you will also get some hands-on practice building your own models.</p>\r\n\r\n<p>And as a bonus, this course includes both&nbsp;Python and R&nbsp;code templates which you can download and use on your own projects.</p>\r\n\r\n<p>Important updates (June 2020):</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>CODES ALL UP TO DATE</p>\r\n	</li>\r\n	<li>\r\n	<p>DEEP LEARNING CODED IN TENSORFLOW 2.0</p>\r\n	</li>\r\n	<li>\r\n	<p>TOP GRADIENT BOOSTING MODELS INCLUDING XGBOOST AND EVEN CATBOOST!</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Who this course is for:</h2>\r\n\r\n<ul>\r\n	<li>Anyone interested in Machine Learning.</li>\r\n	<li>Students who have at least high school knowledge in math and who want to start learning Machine Learning.</li>\r\n	<li>Any intermediate level people who know the basics of machine learning, including the classical algorithms like linear regression or logistic regression, but who want to learn more about it and explore all the different fields of Machine Learning.</li>\r\n	<li>Any people who are not that comfortable with coding but who are interested in Machine Learning and want to apply it easily on datasets.</li>\r\n	<li>Any students in college who want to start a career in Data Science.</li>\r\n	<li>Any data analysts who want to level up in Machine Learning.</li>\r\n	<li>Any people who are not satisfied with their job and who want to become a Data Scientist.</li>\r\n	<li>Any people who want to create added value to their business by using powerful Machine Learning tools.</li>\r\n</ul>',NULL,0,'quiz',0,1,2,NULL,NULL,NULL,NULL,'2020-12-19 05:38:37','2020-12-19 05:38:37'),(3,1,1,1,'Submit Assignment','submit-assignment','<p>Okay</p>',NULL,NULL,'assignment',0,1,3,'{\"time_duration\":{\"time_value\":\"2\",\"time_type\":\"weeks\"},\"total_number\":\"10\",\"pass_number\":\"5\",\"upload_attachment_limit\":\"1\",\"upload_attachment_size_limit\":\"5\"}',NULL,NULL,NULL,'2020-12-19 05:40:34','2020-12-19 05:40:34'),(4,1,2,2,'Introduction Class','introduction-class','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>','{\"source\":\"youtube\",\"html5_video_id\":null,\"html5_video_poster_id\":null,\"source_external_url\":null,\"source_youtube\":\"https:\\/\\/www.youtube.com\\/watch?v=UMi26DDA4Yo\",\"source_vimeo\":null,\"source_embedded\":null,\"runtime\":{\"hours\":\"00\",\"mins\":\"10\",\"secs\":\"40\"}}',0,'lecture',1,1,1,NULL,NULL,NULL,NULL,'2020-12-20 00:56:11','2020-12-20 01:03:32'),(5,1,2,2,'Introduction to Python','introduction-to-python','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>','{\"source\":\"youtube\",\"html5_video_id\":null,\"html5_video_poster_id\":null,\"source_external_url\":null,\"source_youtube\":\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\",\"source_vimeo\":null,\"source_embedded\":null,\"runtime\":{\"hours\":\"00\",\"mins\":\"10\",\"secs\":\"40\"}}',0,'lecture',1,1,2,NULL,NULL,NULL,NULL,'2020-12-20 00:57:37','2020-12-20 01:03:32'),(6,1,2,2,'First assignment','first-assignment','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>',NULL,NULL,'assignment',0,1,3,'{\"time_duration\":{\"time_value\":\"0\",\"time_type\":\"weeks\"},\"total_number\":\"50\",\"pass_number\":\"25\",\"upload_attachment_limit\":\"1\",\"upload_attachment_size_limit\":\"2\"}',NULL,NULL,NULL,'2020-12-20 00:58:58','2020-12-20 01:03:32'),(7,1,2,2,'Fisrt Test','fisrt-test','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>',NULL,0,'quiz',0,1,4,'{\"show_time\":\"1\",\"time_limit\":\"2\",\"passing_score\":\"5\",\"questions_limit\":\"10\"}',1,NULL,NULL,'2020-12-20 00:59:15','2020-12-20 01:08:14'),(8,1,2,3,'Live class','live-class','<p>Today</p>',NULL,0,'lecture',NULL,1,5,NULL,NULL,NULL,NULL,'2020-12-20 01:15:24','2020-12-20 01:15:24'),(9,1,3,4,'INTRODUCTION','introduction','<ul>\r\n	<li>\r\n	<p>Master Machine Learning on Python &amp; R</p>\r\n	</li>\r\n	<li>\r\n	<p>Have a great intuition of many Machine Learning models</p>\r\n	</li>\r\n	<li>\r\n	<p>Make accurate predictions</p>\r\n	</li>\r\n	<li>\r\n	<p>Make powerful analysis</p>\r\n	</li>\r\n	<li>\r\n	<p>Make robust Machine Learning models</p>\r\n	</li>\r\n	<li>\r\n	<p>Create strong added value to your business</p>\r\n	</li>\r\n	<li>\r\n	<p>Use Machine Learning for personal purpose</p>\r\n	</li>\r\n	<li>\r\n	<p>Handle specific topics like Reinforcement Learning, NLP and Deep Learning</p>\r\n	</li>\r\n	<li>\r\n	<p>Handle advanced techniques like Dimensionality Reduction</p>\r\n	</li>\r\n	<li>\r\n	<p>Know which Machine Learning model to choose for each type of problem</p>\r\n	</li>\r\n	<li>\r\n	<p>Build an army of powerful Machine Learning models and know how to combine them to solve any problem</p>\r\n	</li>\r\n</ul>','{\"source\":\"youtube\",\"html5_video_id\":null,\"html5_video_poster_id\":null,\"source_external_url\":null,\"source_youtube\":\"https:\\/\\/www.youtube.com\\/watch?v=yXzWfZ4N4xU\",\"source_vimeo\":null,\"source_embedded\":null,\"runtime\":{\"hours\":\"01\",\"mins\":\"30\",\"secs\":\"00\"}}',0,'lecture',1,1,1,NULL,NULL,NULL,NULL,'2020-12-21 02:10:11','2020-12-21 02:10:33'),(10,1,3,4,'New assignment','new-assignment','<ul>\r\n	<li>\r\n	<p>Master Machine Learning on Python &amp; R</p>\r\n	</li>\r\n	<li>\r\n	<p>Have a great intuition of many Machine Learning models</p>\r\n	</li>\r\n	<li>\r\n	<p>Make accurate predictions</p>\r\n	</li>\r\n	<li>\r\n	<p>Make powerful analysis</p>\r\n	</li>\r\n	<li>\r\n	<p>Make robust Machine Learning models</p>\r\n	</li>\r\n	<li>\r\n	<p>Create strong added value to your business</p>\r\n	</li>\r\n	<li>\r\n	<p>Use Machine Learning for personal purpose</p>\r\n	</li>\r\n	<li>\r\n	<p>Handle specific topics like Reinforcement Learning, NLP and Deep Learning</p>\r\n	</li>\r\n	<li>\r\n	<p>Handle advanced techniques like Dimensionality Reduction</p>\r\n	</li>\r\n	<li>\r\n	<p>Know which Machine Learning model to choose for each type of problem</p>\r\n	</li>\r\n	<li>\r\n	<p>Build an army of powerful Machine Learning models and know how to combine them to solve any problem</p>\r\n	</li>\r\n</ul>',NULL,NULL,'assignment',0,1,2,'{\"time_duration\":{\"time_value\":\"10\",\"time_type\":\"weeks\"},\"total_number\":\"10\",\"pass_number\":\"5\",\"upload_attachment_limit\":\"1\",\"upload_attachment_size_limit\":\"5\"}',NULL,NULL,NULL,'2020-12-21 02:11:26','2020-12-21 02:11:26'),(11,1,3,4,'Test','test','<ul>\r\n	<li>\r\n	<p>Master Machine Learning on Python &amp; R</p>\r\n	</li>\r\n	<li>\r\n	<p>Have a great intuition of many Machine Learning models</p>\r\n	</li>\r\n	<li>\r\n	<p>Make accurate predictions</p>\r\n	</li>\r\n	<li>\r\n	<p>Make powerful analysis</p>\r\n	</li>\r\n	<li>\r\n	<p>Make robust Machine Learning models</p>\r\n	</li>\r\n	<li>\r\n	<p>Create strong added value to your business</p>\r\n	</li>\r\n	<li>\r\n	<p>Use Machine Learning for personal purpose</p>\r\n	</li>\r\n	<li>\r\n	<p>Handle specific topics like Reinforcement Learning, NLP and Deep Learning</p>\r\n	</li>\r\n	<li>\r\n	<p>Handle advanced techniques like Dimensionality Reduction</p>\r\n	</li>\r\n	<li>\r\n	<p>Know which Machine Learning model to choose for each type of problem</p>\r\n	</li>\r\n	<li>\r\n	<p>Build an army of powerful Machine Learning models and know how to combine them to solve any problem</p>\r\n	</li>\r\n</ul>',NULL,0,'quiz',0,1,3,NULL,NULL,NULL,NULL,'2020-12-21 02:12:01','2020-12-21 02:12:01');
/*!40000 ALTER TABLE `contents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `countries` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `country_code` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency_code` varchar(9) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency_symbol` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency_decimals` int(11) DEFAULT NULL,
  `iso2` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iso3` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `continent_code` char(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `calling_code` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flag` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `countries`
--

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course_user`
--

DROP TABLE IF EXISTS `course_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course_user` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `course_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `permissions` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `added_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_user`
--

LOCK TABLES `course_user` WRITE;
/*!40000 ALTER TABLE `course_user` DISABLE KEYS */;
INSERT INTO `course_user` VALUES (1,1,1,NULL,'2020-12-19 05:35:37'),(2,2,1,NULL,'2020-12-20 00:53:31'),(3,3,1,NULL,'2020-12-21 02:08:21');
/*!40000 ALTER TABLE `course_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `courses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `parent_category_id` int(11) DEFAULT NULL,
  `second_category_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `benefits` text COLLATE utf8mb4_unicode_ci,
  `requirements` text COLLATE utf8mb4_unicode_ci,
  `price_plan` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(16,2) DEFAULT NULL,
  `sale_price` decimal(16,2) DEFAULT NULL,
  `level` tinyint(4) DEFAULT '0',
  `status` tinyint(4) DEFAULT '0',
  `is_presale` tinyint(4) DEFAULT '0',
  `launch_at` timestamp NULL DEFAULT NULL,
  `thumbnail_id` int(11) DEFAULT NULL,
  `video_src` text COLLATE utf8mb4_unicode_ci,
  `total_video_time` int(11) DEFAULT NULL,
  `require_enroll` int(11) DEFAULT '1',
  `require_login` int(11) DEFAULT '1',
  `total_lectures` tinyint(4) DEFAULT '0',
  `total_assignments` tinyint(4) DEFAULT '0',
  `total_quiz` tinyint(4) DEFAULT '0',
  `rating_value` decimal(3,2) DEFAULT '0.00',
  `rating_count` tinyint(4) DEFAULT '0',
  `five_star_count` tinyint(4) DEFAULT '0',
  `four_star_count` tinyint(4) DEFAULT '0',
  `three_star_count` tinyint(4) DEFAULT '0',
  `two_star_count` tinyint(4) DEFAULT '0',
  `one_star_count` tinyint(4) DEFAULT '0',
  `is_featured` tinyint(4) DEFAULT NULL,
  `featured_at` timestamp NULL DEFAULT NULL,
  `is_popular` tinyint(4) DEFAULT NULL,
  `popular_added_at` timestamp NULL DEFAULT NULL,
  `last_updated_at` timestamp NULL DEFAULT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `courses`
--

LOCK TABLES `courses` WRITE;
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
INSERT INTO `courses` VALUES (1,1,1,3,4,'Machine Learning A-Z™: Hands-On Python & R In Data Science','new-course','Course DescriLearn to create Machine Learning Algorithms in Python and R from two Data Science experts. Code templates included.ption','<p>Interested in the field of Machine Learning?&nbsp;Then this course is for you!</p>\r\n\r\n<p>This course has been designed by two professional Data Scientists so that we can share our knowledge and help you learn complex theory,&nbsp;algorithms, and coding libraries in a simple way.</p>\r\n\r\n<p>We will walk you step-by-step into the World of Machine Learning. With every tutorial, you will develop new skills and improve your understanding of this challenging yet lucrative sub-field of Data Science.</p>\r\n\r\n<p>This course is&nbsp;fun and exciting, but at the same time, we dive deep into Machine Learning. It is structured the following way:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Part 1 - Data Preprocessing</p>\r\n	</li>\r\n	<li>\r\n	<p>Part 2 - Regression: Simple Linear Regression, Multiple Linear Regression,&nbsp;Polynomial&nbsp;Regression,&nbsp;SVR, Decision Tree Regression,&nbsp;Random Forest Regression</p>\r\n	</li>\r\n	<li>\r\n	<p>Part 3 - Classification: Logistic Regression, K-NN, SVM, Kernel SVM, Naive Bayes, Decision Tree Classification,&nbsp;Random&nbsp;Forest Classification</p>\r\n	</li>\r\n	<li>\r\n	<p>Part 4 - Clustering: K-Means,&nbsp;Hierarchical Clustering</p>\r\n	</li>\r\n	<li>\r\n	<p>Part 5 - Association Rule Learning: Apriori,&nbsp;Eclat</p>\r\n	</li>\r\n	<li>\r\n	<p>Part 6 - Reinforcement Learning:&nbsp;Upper Confidence Bound,&nbsp;Thompson Sampling</p>\r\n	</li>\r\n	<li>\r\n	<p>Part 7 - Natural Language Processing: Bag-of-words model&nbsp;and&nbsp;algorithms for NLP</p>\r\n	</li>\r\n	<li>\r\n	<p>Part 8 - Deep Learning: Artificial Neural Networks,&nbsp;Convolutional Neural Networks</p>\r\n	</li>\r\n	<li>\r\n	<p>Part 9 - Dimensionality Reduction: PCA, LDA, Kernel PCA</p>\r\n	</li>\r\n	<li>\r\n	<p>Part 10 - Model Selection &amp; Boosting: k-fold Cross Validation, Parameter Tuning, Grid Search,&nbsp;XGBoost</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>Moreover, the course is packed with practical exercises that are based on real-life&nbsp;examples. So not only will you learn the theory, but you will also get some hands-on practice building your own models.</p>\r\n\r\n<p>And as a bonus, this course includes both&nbsp;Python and R&nbsp;code templates which you can download and use on your own projects.</p>\r\n\r\n<p>Important updates (June 2020):</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>CODES ALL UP TO DATE</p>\r\n	</li>\r\n	<li>\r\n	<p>DEEP LEARNING CODED IN TENSORFLOW 2.0</p>\r\n	</li>\r\n	<li>\r\n	<p>TOP GRADIENT BOOSTING MODELS INCLUDING XGBOOST AND EVEN CATBOOST!</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Who this course is for:</h2>\r\n\r\n<ul>\r\n	<li>Anyone interested in Machine Learning.</li>\r\n	<li>Students who have at least high school knowledge in math and who want to start learning Machine Learning.</li>\r\n	<li>Any intermediate level people who know the basics of machine learning, including the classical algorithms like linear regression or logistic regression, but who want to learn more about it and explore all the different fields of Machine Learning.</li>\r\n	<li>Any people who are not that comfortable with coding but who are interested in Machine Learning and want to apply it easily on datasets.</li>\r\n	<li>Any students in college who want to start a career in Data Science.</li>\r\n	<li>Any data analysts who want to level up in Machine Learning.</li>\r\n	<li>Any people who are not satisfied with their job and who want to become a Data Scientist.</li>\r\n	<li>Any people who want to create added value to their business by using powerful Machine Learning tools.</li>\r\n</ul>','Master Machine Learning on Python & R\r\nHave a great intuition of many Machine Learning models\r\nMake accurate predictions\r\nMake powerful analysis\r\nMake robust Machine Learning models\r\nCreate strong added value to your business\r\nUse Machine Learning for personal purpose\r\nHandle specific topics like Reinforcement Learning, NLP and Deep Learning\r\nHandle advanced techniques like Dimensionality Reduction\r\nKnow which Machine Learning model to choose for each type of problem\r\nBuild an army of powerful Machine Learning models and know how to combine them to solve any problem','Just some high school mathematics level.','free',NULL,NULL,2,1,0,NULL,1,'{\"source\":\"youtube\",\"html5_video_id\":null,\"html5_video_poster_id\":null,\"source_external_url\":null,\"source_youtube\":\"https:\\/\\/www.youtube.com\\/watch?v=yXzWfZ4N4xU\",\"source_vimeo\":null,\"source_embedded\":null}',0,1,1,1,0,1,5.00,1,1,0,0,0,0,NULL,NULL,NULL,NULL,'2020-12-19 05:38:37','2020-12-19 06:07:02','2020-12-19 05:35:37','2020-12-19 06:07:02'),(2,1,5,6,7,'Learn Python Programming Masterclass','learn-python-programming-masterclass','This Python For Beginners Course Teaches You The Python Language Fast. Includes Python Online Training With Python 3','<p>Whether you want to:</p>\r\n\r\n<p>- build the skills you need to get your first&nbsp;Python programming job</p>\r\n\r\n<p>- move to a more senior software developer position</p>\r\n\r\n<p>- get started with Machine Learning, Data Science, Django or other hot areas that Python specialises in</p>\r\n\r\n<p>- or just learn Python to be able to create your own Python apps quickly.</p>\r\n\r\n<p>&hellip;then you need a solid foundation in Python programming. And this course is designed to give you those core skills, fast.</p>\r\n\r\n<p>This course is aimed at complete beginners who have never programmed before, as well as existing programmers who want to increase their career options by learning Python.</p>\r\n\r\n<p>The fact is, Python is one of the most popular programming languages in the world &ndash; Huge companies like Google use it in mission critical applications like Google Search.</p>\r\n\r\n<p>And Python is the number one language choice for machine learning, data science and artificial intelligence. To get those high paying jobs you need an expert knowledge of Python, and that&rsquo;s what you will get from this course.</p>\r\n\r\n<p>By the end of the course you&rsquo;ll be able to apply in confidence for Python programming jobs. And yes, this applies even if you have never programmed before. With the right skills which you will learn in this course, you can become employable and valuable in the eyes of future employers.</p>\r\n\r\n<p>Here&rsquo;s what a few students have told us about the course after going through it.</p>\r\n\r\n<p>&ldquo;I had very limited programming experience before I started this course, so I have really learned a lot from the first few sections. It has taken me from essentially zero programming skill to a level where I&#39;m comfortable using Python to analyze data for my lab reports, and I&#39;m not even halfway done the course yet. There are other courses out there which focus on data analysis, but those courses are usually targeted at people who already know how to program which is why I chose this course instead. &ldquo; &ndash; Christian DiMaria<br />\r\n<br />\r\n&ldquo;I have been puttering through your Python course . In that time, though, and without finishing it yet I&#39;ve been able to automate quite a bit at my work. I work in a school system and unifying data from our various student information systems can be incredibly frustrating, time consuming, and at times challenging. Using your course, I&#39;ve learned enough to write applications that turn massive text files into dictionaries that get &quot;stitched&quot; together like a database and output to properly formatted CSV files and then uploaded via SFTP to various systems for secure processing. Our teachers, students, and the tech department have greatly benefitted from this automation. I just wanted to drop you a note thanking you for helping me learn this skill.&rdquo; &ndash; Keith Medlin<br />\r\n<br />\r\n&ldquo;This course was great. Within 3 weeks I was able to write my own database related applications.&rdquo; &ndash; Theo Coenen<br />\r\n<br />\r\nAnd there are many more students who love the course &ndash; check out all the reviews for yourself.</p>\r\n\r\n<p><strong>Will this course give you core python skills?</strong></p>\r\n\r\n<p>Yes it will.&nbsp; There are a range of exciting opportunities for Python developers. All of them require a solid understanding of Python, and that&rsquo;s what you will learn in this course.</p>\r\n\r\n<p><strong>Will the course teach me data science, machine learning and artificial intelligence?</strong></p>\r\n\r\n<p>No, it won&rsquo;t do that &ndash; All of these topics are branches of Python programming.&nbsp; And all of them require a solid understanding of the Python language.</p>\r\n\r\n<p>Nearly all courses on these topics assume that you understand Python, and without it you will quickly become lost and confused.</p>\r\n\r\n<p>This course will give you that core, solid understanding of the Python programming language.</p>\r\n\r\n<p>By the end of the course you will be ready to apply for Python programming positions as well as move on to specific areas of Python, as listed above.</p>\r\n\r\n<p><strong>Why should you take this course?</strong></p>\r\n\r\n<p>There are a lot of Python courses on Udemy &ndash; Your instructors, Tim and Jean-Paul are pretty unique in that between them they have around 70 years of professional programming experience.&nbsp; That&rsquo;s more than a lifetime of skills you get to learn Python from.</p>\r\n\r\n<p>You can enrol in the course safe in the knowledge that they are not just teachers, but professional programmers with real commercial programming experience, having worked with big companies like IBM, Mitsubishi, Fujitsu and Saab in the past.</p>\r\n\r\n<p>As such you will not only be learning Python, but you will be learning industry best practices for Python programming that real employers demand.&nbsp;</p>\r\n\r\n<p>And if that&rsquo;s not enough take a read of some of the many reviews from happy students &ndash; there are around 100,000 students who have left around 19,000 reviews.</p>\r\n\r\n<p>This is one of the most popular courses on Python programming on Udemy.</p>\r\n\r\n<p><strong>Here&rsquo;s just some of what you&rsquo;ll learn</strong></p>\r\n\r\n<p>(It&rsquo;s okay if you don&rsquo;t understand all this yet, you will in the course)</p>\r\n\r\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; All the essential Python keywords, operators, statements, and expressions needed to fully understand exactly what you&rsquo;re coding and why - making programming easy to grasp and less frustrating</p>\r\n\r\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; You will learn the answers to questions like What is the Python For Loop, what is Python used for, how Python switch the traditional syntax of code, and more.</p>\r\n\r\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Complete chapters on object-oriented programming and many other aspects of Python, including tKInter (for building GUI Interfaces) and using databases with Python.</p>\r\n\r\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Although this is primarily a Python 3 course, a python developer will need to work with Python 2 projects from time to time &ndash; We&rsquo;ll show the difference in both versions to make sure you understand how things work differently in each version.</p>\r\n\r\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;How to develop powerful Python applications using one of the most powerful Integrated Development Environments on the market, IntelliJ IDEA! - Meaning you can code functional programs easier. &nbsp;<strong>IntelliJ</strong>&nbsp;has both a&nbsp;<strong>FREE</strong>&nbsp;and&nbsp;PAID version, and you can use either in this course.&nbsp; PyCharm will also work just fine.</p>\r\n\r\n<p>(Don&rsquo;t worry if you want to use another IDE. You&rsquo;re free to use any IDE and still get the most out of this course).<br />\r\n<br />\r\n<strong>Does the course get updated?</strong></p>\r\n\r\n<p>It&rsquo;s no secret how technology is advancing at a rapid rate. New, more powerful hardware and software are being released&nbsp;every day, meaning it&rsquo;s crucial to stay on top with the latest knowledge.<br />\r\n<br />\r\nA lot of other courses on Udemy get released once, and never get updated.&nbsp; Learning from an outdated course and/or an outdated version of Python can be counter productive and even worse it could teach you the wrong way to do things.</p>\r\n\r\n<p>For example if you apply some parts of Python 2 to Python 3 code, you will get completely different results.</p>\r\n\r\n<p>We cover differences like this in the course and also continually update the course as well.</p>\r\n\r\n<p><strong>What if you have questions?</strong></p>\r\n\r\n<p>As if this course wasn&rsquo;t complete enough, we offer&nbsp;<strong>full support</strong>, answering any questions you have&nbsp;<strong>7 days a week</strong>&nbsp;(whereas many instructors answer just once per week,&nbsp;or not at all).</p>\r\n\r\n<p>This means you&rsquo;ll never find yourself stuck on one lesson for days on end. With our hand-holding guidance, you&rsquo;ll progress smoothly through this course without any major roadblocks.</p>\r\n\r\n<p>That&rsquo;s just one reason why Tim was voted&nbsp;<strong>top 10 in the&nbsp; Udemy instructor awards</strong>&nbsp;(out of a whopping 18,000 instructors), and quickly became a top-rated, bestselling instructor on the Udemy site. &nbsp;</p>\r\n\r\n<p>Student Quote: &ldquo;Tim and JP are excellent teachers and are constantly answering questions and surveying students on new topics they will like to learn. This isn&#39;t a Python course it&rsquo;s THE Python course you need.&rdquo; &ndash; Sean Burger</p>\r\n\r\n<p><strong>There&rsquo;s no risk either!</strong></p>\r\n\r\n<p>This course comes with a&nbsp;<strong>full 30 day money-back guarantee</strong>. Meaning if you are not completely satisfied with the course or your progress, simply let Tim or J-P know and they will refund you 100%, every last penny no questions asked.</p>\r\n\r\n<p>You either end up with Python skills, go on to develop great programs and potentially make an awesome career for yourself, or you try the course and simply get all your money back if you don&rsquo;t like it&hellip;</p>\r\n\r\n<p><strong>You literally can&rsquo;t lose.</strong></p>\r\n\r\n<p><strong>Ready to get started, developer?</strong></p>\r\n\r\n<p><strong>Enrol now&nbsp;</strong>using the &ldquo;Add to Cart&rdquo; button on the right, and get started on your way to creative, advanced Python brilliance. Or, take this course for a free spin using the preview feature, so you know you&rsquo;re 100% certain this course is for you.</p>\r\n\r\n<p><strong>See you on the inside&nbsp;(hurry, your Python class is waiting!)</strong></p>\r\n\r\n<h2>Who this course is for:</h2>\r\n\r\n<ul>\r\n	<li>Beginners with no previous programming experience looking to obtain the skills to get their first programming job.</li>\r\n	<li>Anyone looking to to build the minimum Python programming skills necessary as a pre-requisites for moving into machine learning, data science, and artificial intelligence.</li>\r\n	<li>Existing programmers who want to improve their career options by learning the Python programming language.</li>\r\n	<li>If you are an expert Python programmer with extensive knowledge, and many years&rsquo; experience, then this course is probably not for you.</li>\r\n</ul>','Have a fundamental understanding of the Python programming language.\r\nHave the skills and understanding of Python to confidently apply for Python programming jobs.\r\nAcquire the pre-requisite Python skills to move into specific branches - Machine Learning, Data Science, etc..\r\nAdd the Python Object-Oriented Programming (OOP) skills to your résumé.\r\nUnderstand how to create your own Python programs.\r\nLearn Python from experienced professional software developers.\r\nUnderstand both Python 2 and Python 3.','You’ve either already got it or it’s FREE. Here’s the checklist:\r\nA computer - Windows, Mac, and Linux are all supported. Setup and installation instructions are included for each platform.\r\nYour enthusiasm to learn this go-to programming language. It’s a valuable lifetime skill which you can’t un-learn!\r\nEverything else needed to start programming in Python is already included in the course.','paid',100.00,50.00,2,1,0,NULL,1,'{\"source\":\"youtube\",\"html5_video_id\":null,\"html5_video_poster_id\":null,\"source_external_url\":null,\"source_youtube\":\"https:\\/\\/www.youtube.com\\/watch?v=emQSnPkLL9M\",\"source_vimeo\":null,\"source_embedded\":null}',0,1,1,3,1,1,0.00,0,0,0,0,0,0,NULL,NULL,NULL,NULL,'2020-12-20 01:15:24','2020-12-20 01:04:09','2020-12-20 00:53:31','2020-12-20 01:22:17'),(3,1,5,6,7,'Machine Learning A-Z™: Hands-On Python & R In Data Science','machine-learning-a-z-hands-on-python-r-in-data-science','Learn to create Machine Learning Algorithms in Python and R from two Data Science experts. Code templates included.','<p>Learn to create Machine Learning Algorithms in Python and R from two Data Science experts. Code templates included.</p>','Master Machine Learning on Python & R\r\nHave a great intuition of many Machine Learning models\r\nMake accurate predictions\r\nMake powerful analysis\r\nMake robust Machine Learning models\r\nCreate strong added value to your business\r\nUse Machine Learning for personal purpose\r\nHandle specific topics like Reinforcement Learning, NLP and Deep Learning\r\nHandle advanced techniques like Dimensionality Reduction\r\nKnow which Machine Learning model to choose for each type of problem\r\nBuild an army of powerful Machine Learning models and know how to combine them to solve any problem','Master Machine Learning on Python & R\r\nHave a great intuition of many Machine Learning models\r\nMake accurate predictions\r\nMake powerful analysis\r\nMake robust Machine Learning models\r\nCreate strong added value to your business\r\nUse Machine Learning for personal purpose\r\nHandle specific topics like Reinforcement Learning, NLP and Deep Learning\r\nHandle advanced techniques like Dimensionality Reduction\r\nKnow which Machine Learning model to choose for each type of problem\r\nBuild an army of powerful Machine Learning models and know how to combine them to solve any problem','free',NULL,NULL,2,0,0,NULL,1,'{\"source\":\"youtube\",\"html5_video_id\":null,\"html5_video_poster_id\":null,\"source_external_url\":null,\"source_youtube\":\"https:\\/\\/www.youtube.com\\/watch?v=yXzWfZ4N4xU\",\"source_vimeo\":null,\"source_embedded\":null}',0,1,1,1,1,1,0.00,0,0,0,0,0,0,NULL,NULL,NULL,NULL,'2020-12-21 02:12:01',NULL,'2020-12-21 02:08:21','2020-12-21 02:12:01');
/*!40000 ALTER TABLE `courses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `discussions`
--

DROP TABLE IF EXISTS `discussions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `discussions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `course_id` int(11) DEFAULT '0',
  `content_id` int(11) DEFAULT '0',
  `instructor_id` int(11) DEFAULT '0',
  `user_id` int(11) DEFAULT '0',
  `discussion_id` int(11) DEFAULT '0',
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `replied` tinyint(4) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `discussions`
--

LOCK TABLES `discussions` WRITE;
/*!40000 ALTER TABLE `discussions` DISABLE KEYS */;
INSERT INTO `discussions` VALUES (1,1,1,0,1,0,'Admission 2020','nop',1,'2020-12-19 05:42:40','2020-12-22 08:51:53'),(2,2,5,0,2,0,'Hello','I dont understant',1,'2020-12-20 01:05:09','2020-12-22 08:53:11'),(3,1,1,0,1,1,NULL,'nop',0,'2020-12-22 08:51:53','2020-12-22 08:51:53'),(4,1,1,0,1,1,NULL,'this is good',0,'2020-12-22 08:52:06','2020-12-22 08:52:06'),(5,1,1,0,1,1,NULL,'dd',0,'2020-12-22 08:52:25','2020-12-22 08:52:25'),(6,1,1,0,1,1,NULL,'d',0,'2020-12-22 08:52:28','2020-12-22 08:52:28'),(7,1,1,0,1,1,NULL,'ddd',0,'2020-12-22 08:52:31','2020-12-22 08:52:31'),(8,1,1,0,1,1,NULL,'ddddd',0,'2020-12-22 08:52:35','2020-12-22 08:52:35'),(9,1,1,0,1,1,NULL,'dddd',0,'2020-12-22 08:52:40','2020-12-22 08:52:40'),(10,1,1,0,1,1,NULL,'ddd',0,'2020-12-22 08:52:44','2020-12-22 08:52:44'),(11,2,5,0,1,2,NULL,'ok',0,'2020-12-22 08:53:11','2020-12-22 08:53:11');
/*!40000 ALTER TABLE `discussions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `earnings`
--

DROP TABLE IF EXISTS `earnings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `earnings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `instructor_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `payment_id` int(11) DEFAULT NULL,
  `payment_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` decimal(16,2) DEFAULT NULL,
  `instructor_amount` decimal(16,2) DEFAULT NULL,
  `admin_amount` decimal(16,2) DEFAULT NULL,
  `instructor_share` decimal(16,2) DEFAULT NULL,
  `admin_share` decimal(16,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `earnings`
--

LOCK TABLES `earnings` WRITE;
/*!40000 ALTER TABLE `earnings` DISABLE KEYS */;
INSERT INTO `earnings` VALUES (1,1,2,1,'success',50.00,45.00,5.00,90.00,10.00,'2020-12-21 02:19:25','2020-12-21 02:19:25');
/*!40000 ALTER TABLE `earnings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `enrolls`
--

DROP TABLE IF EXISTS `enrolls`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enrolls` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `course_id` int(11) DEFAULT '0',
  `user_id` int(11) DEFAULT '0',
  `course_price` decimal(16,2) DEFAULT NULL,
  `payment_id` int(11) DEFAULT '0',
  `status` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT 'pending',
  `enrolled_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enrolls`
--

LOCK TABLES `enrolls` WRITE;
/*!40000 ALTER TABLE `enrolls` DISABLE KEYS */;
INSERT INTO `enrolls` VALUES (1,1,1,NULL,0,'success','2020-12-19 05:41:58'),(2,1,2,NULL,0,'success','2020-12-19 08:35:08'),(3,2,2,NULL,0,'success','2020-12-20 01:04:37'),(4,2,3,NULL,0,'success','2020-12-20 01:09:44'),(5,2,4,50.00,1,'success','2020-12-21 02:19:25');
/*!40000 ALTER TABLE `enrolls` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `individual_languages`
--

DROP TABLE IF EXISTS `individual_languages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `individual_languages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) DEFAULT NULL,
  `language_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `individual_languages`
--

LOCK TABLES `individual_languages` WRITE;
/*!40000 ALTER TABLE `individual_languages` DISABLE KEYS */;
INSERT INTO `individual_languages` VALUES (1,16,1,NULL,NULL,NULL),(2,16,2,NULL,'2020-10-01 22:20:08',NULL),(67,62,1,'2020-12-21 04:17:45','2020-12-21 04:17:45',NULL),(68,62,3,'2020-12-21 04:17:45','2020-12-21 04:17:45',NULL);
/*!40000 ALTER TABLE `individual_languages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `media`
--

DROP TABLE IF EXISTS `media`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `media` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug_ext` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mime_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metadata` text COLLATE utf8mb4_unicode_ci,
  `sort_order` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media`
--

LOCK TABLES `media` WRITE;
/*!40000 ALTER TABLE `media` DISABLE KEYS */;
INSERT INTO `media` VALUES (1,1,'CA07E5AC-0328-4536-8230-509B3D4D391A.jpeg','Admission 2020',NULL,'ca07e5ac-0328-4536-8230-509b3d4d391a','ca07e5ac-0328-4536-8230-509b3d4d391a.jpeg','267517','image/jpeg',NULL,0,'2020-12-19 05:19:38','2020-12-19 05:20:01'),(2,2,'avatar-female.jpg',NULL,NULL,'avatar-female','avatar-female.jpg','16871','image/jpeg',NULL,0,'2020-12-20 01:05:42','2020-12-20 01:05:42'),(3,3,'avatar-male.png',NULL,NULL,'avatar-male','avatar-male.png','45441','image/png',NULL,0,'2020-12-20 01:10:03','2020-12-20 01:10:03'),(4,4,'avatar-female.jpg',NULL,NULL,'avatar-female-1','avatar-female-1.jpg','16871','image/jpeg',NULL,0,'2020-12-21 02:23:21','2020-12-21 02:23:21');
/*!40000 ALTER TABLE `media` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2017_11_25_103526_create_media_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2020_04_13_155306_create_options_table',1),(5,'2020_04_14_053128_create_countries_table',1),(6,'2020_04_19_150640_create_courses_table',1),(7,'2020_04_19_185837_create_sections_table',1),(8,'2020_04_20_160323_create_course_user_table',1),(9,'2020_04_25_091439_create_enrolls_table',1),(10,'2020_04_28_172856_create_attachments_table',1),(11,'2020_04_30_173643_create_assignment_submissions_table',1),(12,'2020_05_01_175907_create_categories_table',1),(13,'2020_05_02_113246_create_contents_table',1),(14,'2020_05_02_144441_create_completes_table',1),(15,'2020_05_05_204608_create_payments_table',1),(16,'2020_05_06_140733_create_earnings_table',1),(17,'2020_05_10_175048_create_reviews_table',1),(18,'2020_05_14_005447_create_wishlist_table',1),(19,'2020_05_15_164207_create_withdraws_table',1),(20,'2020_05_17_012150_create_posts_table',1),(21,'2020_05_17_143030_create_discussions_table',1),(22,'2020_05_18_233630_create_questions_table',1),(23,'2020_05_18_234745_create_question_options_table',1),(24,'2020_05_19_234606_create_attempts_table',1),(25,'2020_05_20_043510_create_answers_table',1),(27,'2020_12_20_072811_update_users_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `options`
--

DROP TABLE IF EXISTS `options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `options` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `option_key` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option_value` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `options`
--

LOCK TABLES `options` WRITE;
/*!40000 ALTER TABLE `options` DISABLE KEYS */;
INSERT INTO `options` VALUES (1,'site_name','Traivis'),(2,'site_url','http://train.local.com'),(3,'site_title',NULL),(4,'email_address',NULL),(5,'default_timezone','Africa/Abidjan'),(6,'date_format_custom',NULL),(7,'time_format_custom',NULL),(8,'currency_sign','USD'),(9,'currency_position','left'),(10,'allowed_file_types','jpeg,png,jpg,pdf,zip,doc,docx,xls,ppt,pptx'),(11,'logo_settings','show_site_name'),(12,'lms_settings','json_encode_value_{\"enable_discussion\":\"1\"}'),(13,'default_storage','public'),(14,'amazon_key',NULL),(15,'amazon_secret',NULL),(16,'amazon_region',NULL),(17,'bucket',NULL),(18,'current_theme','traivis'),(19,'enable_instructors_earning','1'),(20,'enable_charge_fees','1'),(21,'admin_share','10'),(22,'instructor_share','90'),(23,'charge_fees_name',NULL),(24,'charge_fees_amount',NULL),(25,'charge_fees_type','percent'),(26,'enable_offline_payment','1'),(27,'stripe_test_secret_key',NULL),(28,'stripe_test_publishable_key',NULL),(29,'stripe_live_secret_key',NULL),(30,'stripe_live_publishable_key',NULL),(31,'paypal_receiver_email','nanduldas@gmail.com'),(32,'bank_gateway','json_encode_value_{\"bank_name\":null,\"bank_swift_code\":null,\"account_number\":null,\"branch_name\":null,\"branch_address\":null,\"account_name\":null,\"iban\":null}'),(33,'enable_paypal','1'),(34,'enable_paypal_sandbox','1');
/*!40000 ALTER TABLE `options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_en` varchar(50) CHARACTER SET utf8 NOT NULL,
  `title_ar` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `content_en` text CHARACTER SET utf8 NOT NULL,
  `content_ar` text CHARACTER SET utf8,
  `meta_title` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `meta_key` text CHARACTER SET utf8,
  `meta_description` text CHARACTER SET utf8,
  `slug` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `show_on_menu` int(11) DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,'Company Landing','Company Landing','<section class=\"information-area ptb-100 bg-fcfcfc\">\r\n            <div class=\"container\">\r\n                <div class=\"row align-items-center\">\r\n                    <div class=\"col-lg-6 col-md-12\">\r\n                        <div class=\"information-image text-center\">\r\n                            <figure><img src=\"assets/img/information-img.png\" alt=\"image\" data-image=\"jd7a06rdljz3\"></figure>\r\n                        </div>\r\n                    </div>\r\n\r\n                    <div class=\"col-lg-6 col-md-12\">\r\n                        <div class=\"information-content\">\r\n                            <span class=\"sub-title\">USER MANAGEMENT</span>\r\n                            <h2>Workforce Features</h2>\r\n                            <ul class=\"apply-details\">\r\n                                <li>\r\n                                    <div class=\"icon\">\r\n                                        <i class=\"flaticon-checkmark\"></i>\r\n                                    </div>\r\n                                    <h3>Select Suitable Course</h3>\r\n                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>\r\n                                </li>\r\n\r\n                                <li>\r\n                                    <div class=\"icon\">\r\n                                        <i class=\"flaticon-login\"></i>\r\n                                    </div>\r\n                                    <h3>Student Information</h3>\r\n                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>\r\n                                </li>\r\n                                \r\n                                <li>\r\n                                    <div class=\"icon\">\r\n                                        <i class=\"flaticon-credit-card\"></i>\r\n                                    </div>\r\n                                    <h3>Payment Information</h3>\r\n                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>\r\n                                </li>\r\n                                \r\n                                <li>\r\n                                    <div class=\"icon\">\r\n                                        <i class=\"flaticon-verify\"></i>\r\n                                    </div>\r\n                                    <h3>Register Now</h3>\r\n                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>\r\n                                </li>\r\n                            </ul>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </section><p> <br> </p><section class=\"subscribe-area ptb-100\">\r\n            <div class=\"container\">\r\n                <div class=\"subscribe-content\">\r\n                    <span class=\"sub-title\">Go At Your Own Pace</span>\r\n                    <h2>Create Profile and Start Exploring!</h2>\r\n                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>\r\n                 <a href=\"#!\" id=\"myBtn8\" class=\"default-btn\"><i class=\"bx bx-user-circle icon-arrow before\"></i><span class=\"label\">Register Now !</span><i class=\"bx bx-user-circle icon-arrow after\"></i></a>\r\n                </div>\r\n                \r\n            </div>\r\n\r\n            <div class=\"lang-shape4\"><figure><img src=\"assets/img/lang-shape4.png\" alt=\"image\" data-image=\"1wxt2hnuc49q\"></figure></div>\r\n            <div class=\"lang-shape5\"><figure><img src=\"assets/img/lang-shape5.png\" alt=\"image\" data-image=\"2jh518yeg8in\"></figure></div>\r\n\r\n        </section>','<section class=\"distance-learning-area ptb-200\">\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<div class=\"col-lg-6 col-md-12\">\r\n<div class=\"distance-learning-image\"><figure><img alt=\"image\" src=\"assets/img/images/train.png\" data-image=\"6xjb6jqypgv5\"></figure></div>\r\n</div>\r\n\r\n<div class=\"col-lg-6 col-md-12\">\r\n<div class=\"distance-learning-content\"><span class=\"sub-title\">TRAINING MATRIX</span>\r\n\r\n<h2>Increase your expertise in planning, management, and profit shape up</h2>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n\r\n<ul class=\"features-list\">\r\n	<li>Consistency</li>\r\n	<li>Improvement</li>\r\n	<li>Remote Learning</li>\r\n	<li>Branching</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"business-shape4\"><figure><img alt=\"image\" src=\"assets/img/business-coaching/business-shape4.png\" data-image=\"hac1pjryxe4u\"></figure></div>\r\n</section><section class=\"services-area ptb-100\">\r\n<div class=\"container\">\r\n<div class=\"section-title\"><span class=\"sub-title\">OUR FEATURES</span>\r\n\r\n<h2>Enterprise Dashboard Features</h2>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>\r\n</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-lg-4 col-md-6 col-sm-6\">\r\n<div class=\"services-box\">\r\n<div class=\"icon\">&nbsp;</div>\r\n\r\n<h3>Business Planning</h3>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-lg-4 col-md-6 col-sm-6\">\r\n<div class=\"services-box\">\r\n<div class=\"icon\">&nbsp;</div>\r\n\r\n<h3>From Anywhere</h3>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-lg-4 col-md-6 col-sm-6\">\r\n<div class=\"services-box\">\r\n<div class=\"icon\">&nbsp;</div>\r\n\r\n<h3>Solicitor</h3>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-lg-4 col-md-6 col-sm-6\">\r\n<div class=\"services-box\">\r\n<div class=\"icon\">&nbsp;</div>\r\n\r\n<h3>Self Development</h3>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-lg-4 col-md-6 col-sm-6\">\r\n<div class=\"services-box\">\r\n<div class=\"icon\">&nbsp;</div>\r\n\r\n<h3>Lifetime Access</h3>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-lg-4 col-md-6 col-sm-6\">\r\n<div class=\"services-box\">\r\n<div class=\"icon\">&nbsp;</div>\r\n\r\n<h3>Start Ups</h3>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</section><section class=\"information-area ptb-100 bg-fcfcfc\">\r\n<div class=\"container\">\r\n<div class=\"row align-items-center\">\r\n<div class=\"col-lg-6 col-md-12\">\r\n<div class=\"information-image text-center\"><figure><img alt=\"image\" src=\"assets/img/information-img.png\" data-image=\"x9gclem585bj\"></figure></div>\r\n</div>\r\n\r\n<div class=\"col-lg-6 col-md-12\">\r\n<div class=\"information-content\"><span class=\"sub-title\">USER MANAGEMENT</span>\r\n\r\n<h2>Workforce Features</h2>\r\n\r\n<ul class=\"apply-details\">\r\n	<li>\r\n	<div class=\"icon\">&nbsp;</div>\r\n\r\n	<h3>Select Suitable Course</h3>\r\n\r\n	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>\r\n	</li>\r\n	<li>\r\n	<div class=\"icon\">&nbsp;</div>\r\n\r\n	<h3>Student Information</h3>\r\n\r\n	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>\r\n	</li>\r\n	<li>\r\n	<div class=\"icon\">&nbsp;</div>\r\n\r\n	<h3>Payment Information</h3>\r\n\r\n	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>\r\n	</li>\r\n	<li>\r\n	<div class=\"icon\">&nbsp;</div>\r\n\r\n	<h3>Register Now</h3>\r\n\r\n	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>\r\n	</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>',NULL,NULL,NULL,'company-landing',0,1,'2020-10-26 05:56:39','2020-12-24 07:22:05'),(2,'Training Centre Landing','Training Centre Landing','<section class=\"distance-learning-area ptb-200\">\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<div class=\"col-lg-6 col-md-12\">\r\n<div class=\"distance-learning-image\"><img alt=\"image\" src=\"assets/img/images/center.png\" /></div>\r\n</div>\r\n\r\n<div class=\"col-lg-6 col-md-12\">\r\n<div class=\"distance-learning-content\"><span class=\"sub-title\">TRAINING CENTER REGISTRATION</span>\r\n\r\n<h2>Increase your expertise in planning, management, and profit shape up</h2>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n\r\n<ul class=\"features-list\">\r\n	<li><span>Consistency</span></li>\r\n	<li><span>Improvement</span></li>\r\n	<li><span>Remote Learning</span></li>\r\n	<li><span>Branching</span></li>\r\n</ul>\r\n<!--  <a href=\"register.html\" class=\"default-btn\"><i class=\'bx bx-user-circle icon-arrow before\'></i><span class=\"label\">Join For Free</span><i class=\"bx bx-user-circle icon-arrow after\"></i></a> --></div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"business-shape4\"><img alt=\"image\" src=\"assets/img/business-coaching/business-shape4.png\" /></div>\r\n<!-- <div class=\"divider bg-e4feff\"></div> --></section>\r\n<!-- End Distance Learning Area --><!-- Start Services Area -->\r\n\r\n<section class=\"services-area ptb-100\">\r\n<div class=\"container\">\r\n<div class=\"section-title\"><span class=\"sub-title\">OUR FEATURES</span>\r\n\r\n<h2>Training Center Dashboard Features</h2>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>\r\n</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-lg-4 col-md-6 col-sm-6\">\r\n<div class=\"services-box\">\r\n<div class=\"icon\">&nbsp;</div>\r\n\r\n<h3>Business Planning</h3>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-lg-4 col-md-6 col-sm-6\">\r\n<div class=\"services-box\">\r\n<div class=\"icon\">&nbsp;</div>\r\n\r\n<h3>From Anywhere</h3>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-lg-4 col-md-6 col-sm-6\">\r\n<div class=\"services-box\">\r\n<div class=\"icon\">&nbsp;</div>\r\n\r\n<h3>Solicitor</h3>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-lg-4 col-md-6 col-sm-6\">\r\n<div class=\"services-box\">\r\n<div class=\"icon\">&nbsp;</div>\r\n\r\n<h3>Self Development</h3>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-lg-4 col-md-6 col-sm-6\">\r\n<div class=\"services-box\">\r\n<div class=\"icon\">&nbsp;</div>\r\n\r\n<h3>Lifetime Access</h3>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-lg-4 col-md-6 col-sm-6\">\r\n<div class=\"services-box\">\r\n<div class=\"icon\">&nbsp;</div>\r\n\r\n<h3>Start Ups</h3>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>\r\n</div>\r\n</div>\r\n<!--   <div class=\"col-lg-12 col-md-12 col-sm-12\">\r\n                        <div class=\"services-btn\">\r\n                            <a href=\"register.html\" class=\"default-btn\"><i class=\'bx bx-user-circle icon-arrow before\'></i><span class=\"label\">Get Started Today</span><i class=\"bx bx-user-circle icon-arrow after\"></i></a>\r\n                        </div>\r\n                    </div> --></div>\r\n</div>\r\n<!-- <div id=\"particles-js-circle-bubble-2\"></div> --></section>\r\n<!-- End Services Area --><!-- Start Information Area -->\r\n\r\n<section class=\"information-area ptb-100 bg-fcfcfc\">\r\n<div class=\"container\">\r\n<div class=\"row align-items-center\">\r\n<div class=\"col-lg-6 col-md-12\">\r\n<div class=\"information-image text-center\"><img alt=\"image\" src=\"assets/img/images/training.png\" /></div>\r\n</div>\r\n\r\n<div class=\"col-lg-6 col-md-12\">\r\n<div class=\"information-content\"><span class=\"sub-title\">TRAINING CENTER INFORMATION</span>\r\n\r\n<h2>Lorem ipsum dolor</h2>\r\n\r\n<ul class=\"apply-details\">\r\n	<li>\r\n	<div class=\"icon\">&nbsp;</div>\r\n\r\n	<h3>Select Suitable Course</h3>\r\n\r\n	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>\r\n	</li>\r\n	<li>\r\n	<div class=\"icon\">&nbsp;</div>\r\n\r\n	<h3>Student Information</h3>\r\n\r\n	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>\r\n	</li>\r\n	<li>\r\n	<div class=\"icon\">&nbsp;</div>\r\n\r\n	<h3>Payment Information</h3>\r\n\r\n	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>\r\n	</li>\r\n	<li>\r\n	<div class=\"icon\">&nbsp;</div>\r\n\r\n	<h3>Register Now</h3>\r\n\r\n	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>\r\n	</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n<!-- End Information Area --><!-- Start Subscribe Area -->\r\n\r\n<section class=\"subscribe-area ptb-100\">\r\n<div class=\"container\">\r\n<div class=\"subscribe-content\"><span class=\"sub-title\">Go At Your Own Pace</span>\r\n\r\n<h2>Create Profile and Start Exploring!</h2>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>\r\n<a class=\"default-btn\" href=\"#!\" id=\"myBtn8\"><span class=\"label\">Register Now !</span></a></div>\r\n\r\n<div id=\"particles-js-circle-bubble-3\">&nbsp;</div>\r\n</div>\r\n\r\n<div class=\"lang-shape4\"><img alt=\"image\" src=\"assets/img/lang-shape4.png\" /></div>\r\n\r\n<div class=\"lang-shape5\"><img alt=\"image\" src=\"assets/img/lang-shape5.png\" /></div>\r\n</section>\r\n<!-- End Subscribe Area -->','<section class=\"distance-learning-area ptb-200\">\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<div class=\"col-lg-6 col-md-12\">\r\n<div class=\"distance-learning-image\"><img alt=\"image\" src=\"assets/img/images/center.png\" /></div>\r\n</div>\r\n\r\n<div class=\"col-lg-6 col-md-12\">\r\n<div class=\"distance-learning-content\"><span class=\"sub-title\">TRAINING CENTER REGISTRATION</span>\r\n\r\n<h2>Increase your expertise in planning, management, and profit shape up</h2>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>\r\n\r\n<ul class=\"features-list\">\r\n	<li><span>Consistency</span></li>\r\n	<li><span>Improvement</span></li>\r\n	<li><span>Remote Learning</span></li>\r\n	<li><span>Branching</span></li>\r\n</ul>\r\n<!--  <a href=\"register.html\" class=\"default-btn\"><i class=\'bx bx-user-circle icon-arrow before\'></i><span class=\"label\">Join For Free</span><i class=\"bx bx-user-circle icon-arrow after\"></i></a> --></div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"business-shape4\"><img alt=\"image\" src=\"assets/img/business-coaching/business-shape4.png\" /></div>\r\n<!-- <div class=\"divider bg-e4feff\"></div> --></section>\r\n<!-- End Distance Learning Area --><!-- Start Services Area -->\r\n\r\n<section class=\"services-area ptb-100\">\r\n<div class=\"container\">\r\n<div class=\"section-title\"><span class=\"sub-title\">OUR FEATURES</span>\r\n\r\n<h2>Training Center Dashboard Features</h2>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>\r\n</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-lg-4 col-md-6 col-sm-6\">\r\n<div class=\"services-box\">\r\n<div class=\"icon\">&nbsp;</div>\r\n\r\n<h3>Business Planning</h3>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-lg-4 col-md-6 col-sm-6\">\r\n<div class=\"services-box\">\r\n<div class=\"icon\">&nbsp;</div>\r\n\r\n<h3>From Anywhere</h3>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-lg-4 col-md-6 col-sm-6\">\r\n<div class=\"services-box\">\r\n<div class=\"icon\">&nbsp;</div>\r\n\r\n<h3>Solicitor</h3>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-lg-4 col-md-6 col-sm-6\">\r\n<div class=\"services-box\">\r\n<div class=\"icon\">&nbsp;</div>\r\n\r\n<h3>Self Development</h3>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-lg-4 col-md-6 col-sm-6\">\r\n<div class=\"services-box\">\r\n<div class=\"icon\">&nbsp;</div>\r\n\r\n<h3>Lifetime Access</h3>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-lg-4 col-md-6 col-sm-6\">\r\n<div class=\"services-box\">\r\n<div class=\"icon\">&nbsp;</div>\r\n\r\n<h3>Start Ups</h3>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>\r\n</div>\r\n</div>\r\n<!--   <div class=\"col-lg-12 col-md-12 col-sm-12\">\r\n                        <div class=\"services-btn\">\r\n                            <a href=\"register.html\" class=\"default-btn\"><i class=\'bx bx-user-circle icon-arrow before\'></i><span class=\"label\">Get Started Today</span><i class=\"bx bx-user-circle icon-arrow after\"></i></a>\r\n                        </div>\r\n                    </div> --></div>\r\n</div>\r\n<!-- <div id=\"particles-js-circle-bubble-2\"></div> --></section>\r\n<!-- End Services Area --><!-- Start Information Area -->\r\n\r\n<section class=\"information-area ptb-100 bg-fcfcfc\">\r\n<div class=\"container\">\r\n<div class=\"row align-items-center\">\r\n<div class=\"col-lg-6 col-md-12\">\r\n<div class=\"information-image text-center\"><img alt=\"image\" src=\"assets/img/images/training.png\" /></div>\r\n</div>\r\n\r\n<div class=\"col-lg-6 col-md-12\">\r\n<div class=\"information-content\"><span class=\"sub-title\">TRAINING CENTER INFORMATION</span>\r\n\r\n<h2>Lorem ipsum dolor</h2>\r\n\r\n<ul class=\"apply-details\">\r\n	<li>\r\n	<div class=\"icon\">&nbsp;</div>\r\n\r\n	<h3>Select Suitable Course</h3>\r\n\r\n	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>\r\n	</li>\r\n	<li>\r\n	<div class=\"icon\">&nbsp;</div>\r\n\r\n	<h3>Student Information</h3>\r\n\r\n	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>\r\n	</li>\r\n	<li>\r\n	<div class=\"icon\">&nbsp;</div>\r\n\r\n	<h3>Payment Information</h3>\r\n\r\n	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>\r\n	</li>\r\n	<li>\r\n	<div class=\"icon\">&nbsp;</div>\r\n\r\n	<h3>Register Now</h3>\r\n\r\n	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>\r\n	</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n<!-- End Information Area --><!-- Start Subscribe Area -->\r\n\r\n<section class=\"subscribe-area ptb-100\">\r\n<div class=\"container\">\r\n<div class=\"subscribe-content\"><span class=\"sub-title\">Go At Your Own Pace</span>\r\n\r\n<h2>Create Profile and Start Exploring!</h2>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>\r\n<a class=\"default-btn\" href=\"#!\" id=\"myBtn8\"><span class=\"label\">Register Now !</span></a></div>\r\n\r\n<div id=\"particles-js-circle-bubble-3\">&nbsp;</div>\r\n</div>\r\n\r\n<div class=\"lang-shape4\"><img alt=\"image\" src=\"assets/img/lang-shape4.png\" /></div>\r\n\r\n<div class=\"lang-shape5\"><img alt=\"image\" src=\"assets/img/lang-shape5.png\" /></div>\r\n</section>\r\n<!-- End Subscribe Area -->',NULL,NULL,NULL,'training-centre-landing',0,1,'2020-10-26 06:20:01','2020-10-26 11:30:02'),(3,'Individual user landing','Individual user landing','<!-- Start Distance Learning Area -->\r\n        <section class=\"distance-learning-area ptb-200\">\r\n            <div class=\"container\">\r\n                <div class=\"row\">\r\n                    <div class=\"col-lg-6 col-md-12\">\r\n                        <div class=\"distance-learning-image\">\r\n                            <img src=\"assets/img/images/indi.png\" alt=\"image\">\r\n                        </div>\r\n                    </div>\r\n\r\n                    <div class=\"col-lg-6 col-md-12\">\r\n                        <div class=\"distance-learning-content\">\r\n                            <span class=\"sub-title\">INDIVIDUAL REGISTRATION</span>\r\n                            <h2>Increase your expertise in planning, management, and profit shape up</h2>\r\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>\r\n                            <ul class=\"features-list\">\r\n                                <li><span><i class=\"flaticon-self-growth\"></i> Consistency</span></li>\r\n                                <li><span><i class=\"flaticon-clock\"></i> Improvement</span></li>\r\n                                <li><span><i class=\"flaticon-ebook\"></i> Remote Learning</span></li>\r\n                                <li><span><i class=\"flaticon-factory\"></i> Branching</span></li>\r\n                            </ul>\r\n                           <!--  <a href=\"register.html\" class=\"default-btn\"><i class=\'bx bx-user-circle icon-arrow before\'></i><span class=\"label\">Join For Free</span><i class=\"bx bx-user-circle icon-arrow after\"></i></a> -->\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n\r\n            <div class=\"business-shape4\"><img src=\"assets/img/business-coaching/business-shape4.png\" alt=\"image\"></div>\r\n            <!-- <div class=\"divider bg-e4feff\"></div> -->\r\n        </section>\r\n        <!-- End Distance Learning Area -->\r\n\r\n\r\n\r\n\r\n        <!-- Start Services Area -->\r\n        <section class=\"services-area ptb-100\">\r\n            <div class=\"container\">\r\n                <div class=\"section-title\">\r\n                    <span class=\"sub-title\">OUR FEATURES</span>\r\n                    <h2>Individual Dashboard Features</h2>\r\n                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>\r\n                </div>\r\n\r\n                <div class=\"row\">\r\n                    <div class=\"col-lg-4 col-md-6 col-sm-6\">\r\n                        <div class=\"services-box\">\r\n                            <div class=\"icon\">\r\n                                <i class=\"flaticon-analytics\"></i>\r\n                            </div>\r\n                            <h3>Business Planning</h3>\r\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>\r\n                        </div>\r\n                    </div>\r\n\r\n                    <div class=\"col-lg-4 col-md-6 col-sm-6\">\r\n                        <div class=\"services-box\">\r\n                            <div class=\"icon\">\r\n                                <i class=\"flaticon-anywhere\"></i>\r\n                            </div>\r\n                            <h3>From Anywhere</h3>\r\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>\r\n                        </div>\r\n                    </div>\r\n\r\n                    <div class=\"col-lg-4 col-md-6 col-sm-6\">\r\n                        <div class=\"services-box\">\r\n                            <div class=\"icon\">\r\n                                <i class=\"flaticon-graduated\"></i>\r\n                            </div>\r\n                            <h3>Solicitor</h3>\r\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>\r\n                        </div>\r\n                    </div>\r\n\r\n                    <div class=\"col-lg-4 col-md-6 col-sm-6\">\r\n                        <div class=\"services-box\">\r\n                            <div class=\"icon\">\r\n                                <i class=\"flaticon-self-improvement\"></i>\r\n                            </div>\r\n                            <h3>Self Development</h3>\r\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>\r\n                        </div>\r\n                    </div>\r\n\r\n                    <div class=\"col-lg-4 col-md-6 col-sm-6\">\r\n                        <div class=\"services-box\">\r\n                            <div class=\"icon\">\r\n                                <i class=\"flaticon-padlock\"></i>\r\n                            </div>\r\n                            <h3>Lifetime Access</h3>\r\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>\r\n                        </div>\r\n                    </div>\r\n\r\n                    <div class=\"col-lg-4 col-md-6 col-sm-6\">\r\n                        <div class=\"services-box\">\r\n                            <div class=\"icon\">\r\n                                <i class=\"flaticon-launch\"></i>\r\n                            </div>\r\n                            <h3>Start Ups</h3>\r\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>\r\n                        </div>\r\n                    </div>\r\n\r\n                  <!--   <div class=\"col-lg-12 col-md-12 col-sm-12\">\r\n                        <div class=\"services-btn\">\r\n                            <a href=\"register.html\" class=\"default-btn\"><i class=\'bx bx-user-circle icon-arrow before\'></i><span class=\"label\">Get Started Today</span><i class=\"bx bx-user-circle icon-arrow after\"></i></a>\r\n                        </div>\r\n                    </div> -->\r\n                </div>\r\n            </div>\r\n<!-- <div id=\"particles-js-circle-bubble-2\"></div> -->\r\n            \r\n        </section>\r\n        <!-- End Services Area -->\r\n\r\n\r\n\r\n                <!-- Start Information Area -->\r\n        <section class=\"information-area ptb-100 bg-fcfcfc\">\r\n            <div class=\"container\">\r\n                <div class=\"row align-items-center\">\r\n                    <div class=\"col-lg-6 col-md-12\">\r\n                        <div class=\"information-image text-center\">\r\n                            <img src=\"assets/img/images/indi2.png\" alt=\"image\">\r\n                        </div>\r\n                    </div>\r\n\r\n                    <div class=\"col-lg-6 col-md-12\">\r\n                        <div class=\"information-content\">\r\n                            <span class=\"sub-title\">PERSONAL INFORMATION</span>\r\n                            <h2>Lorem ipsum dolor</h2>\r\n                            <ul class=\"apply-details\">\r\n                                <li>\r\n                                    <div class=\"icon\">\r\n                                        <i class=\"flaticon-checkmark\"></i>\r\n                                    </div>\r\n                                    <h3>Select Suitable Course</h3>\r\n                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>\r\n                                </li>\r\n\r\n                                <li>\r\n                                    <div class=\"icon\">\r\n                                        <i class=\"flaticon-login\"></i>\r\n                                    </div>\r\n                                    <h3>Student Information</h3>\r\n                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>\r\n                                </li>\r\n                                \r\n                                <li>\r\n                                    <div class=\"icon\">\r\n                                        <i class=\"flaticon-credit-card\"></i>\r\n                                    </div>\r\n                                    <h3>Payment Information</h3>\r\n                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>\r\n                                </li>\r\n                                \r\n                                <li>\r\n                                    <div class=\"icon\">\r\n                                        <i class=\"flaticon-verify\"></i>\r\n                                    </div>\r\n                                    <h3>Register Now</h3>\r\n                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>\r\n                                </li>\r\n                            </ul>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </section>\r\n        <!-- End Information Area -->\r\n\r\n  \r\n\r\n\r\n    <!-- Start Subscribe Area -->\r\n        <section class=\"subscribe-area ptb-100\">\r\n            <div class=\"container\">\r\n                <div class=\"subscribe-content\">\r\n                    <span class=\"sub-title\">Go At Your Own Pace</span>\r\n                    <h2>Create Profile and Start Exploring!</h2>\r\n                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>\r\n                 <a href=\"#!\" id=\"myBtn8\" class=\"default-btn\"><i class=\"bx bx-user-circle icon-arrow before\"></i><span class=\"label\">Register Now !</span><i class=\"bx bx-user-circle icon-arrow after\"></i></a>\r\n                </div>\r\n                <div id=\"particles-js-circle-bubble-3\"></div>\r\n            </div>\r\n\r\n            <div class=\"lang-shape4\"><img src=\"assets/img/lang-shape4.png\" alt=\"image\"></div>\r\n            <div class=\"lang-shape5\"><img src=\"assets/img/lang-shape5.png\" alt=\"image\"></div>\r\n\r\n        </section>\r\n        <!-- End Subscribe Area -->','<!-- Start Distance Learning Area -->\r\n        <section class=\"distance-learning-area ptb-200\">\r\n            <div class=\"container\">\r\n                <div class=\"row\">\r\n                    <div class=\"col-lg-6 col-md-12\">\r\n                        <div class=\"distance-learning-image\">\r\n                            <img src=\"assets/img/images/indi.png\" alt=\"image\">\r\n                        </div>\r\n                    </div>\r\n\r\n                    <div class=\"col-lg-6 col-md-12\">\r\n                        <div class=\"distance-learning-content\">\r\n                            <span class=\"sub-title\">INDIVIDUAL REGISTRATION</span>\r\n                            <h2>Increase your expertise in planning, management, and profit shape up</h2>\r\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>\r\n                            <ul class=\"features-list\">\r\n                                <li><span><i class=\"flaticon-self-growth\"></i> Consistency</span></li>\r\n                                <li><span><i class=\"flaticon-clock\"></i> Improvement</span></li>\r\n                                <li><span><i class=\"flaticon-ebook\"></i> Remote Learning</span></li>\r\n                                <li><span><i class=\"flaticon-factory\"></i> Branching</span></li>\r\n                            </ul>\r\n                           <!--  <a href=\"register.html\" class=\"default-btn\"><i class=\'bx bx-user-circle icon-arrow before\'></i><span class=\"label\">Join For Free</span><i class=\"bx bx-user-circle icon-arrow after\"></i></a> -->\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n\r\n            <div class=\"business-shape4\"><img src=\"assets/img/business-coaching/business-shape4.png\" alt=\"image\"></div>\r\n            <!-- <div class=\"divider bg-e4feff\"></div> -->\r\n        </section>\r\n        <!-- End Distance Learning Area -->\r\n\r\n\r\n\r\n\r\n        <!-- Start Services Area -->\r\n        <section class=\"services-area ptb-100\">\r\n            <div class=\"container\">\r\n                <div class=\"section-title\">\r\n                    <span class=\"sub-title\">OUR FEATURES</span>\r\n                    <h2>Individual Dashboard Features</h2>\r\n                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>\r\n                </div>\r\n\r\n                <div class=\"row\">\r\n                    <div class=\"col-lg-4 col-md-6 col-sm-6\">\r\n                        <div class=\"services-box\">\r\n                            <div class=\"icon\">\r\n                                <i class=\"flaticon-analytics\"></i>\r\n                            </div>\r\n                            <h3>Business Planning</h3>\r\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>\r\n                        </div>\r\n                    </div>\r\n\r\n                    <div class=\"col-lg-4 col-md-6 col-sm-6\">\r\n                        <div class=\"services-box\">\r\n                            <div class=\"icon\">\r\n                                <i class=\"flaticon-anywhere\"></i>\r\n                            </div>\r\n                            <h3>From Anywhere</h3>\r\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>\r\n                        </div>\r\n                    </div>\r\n\r\n                    <div class=\"col-lg-4 col-md-6 col-sm-6\">\r\n                        <div class=\"services-box\">\r\n                            <div class=\"icon\">\r\n                                <i class=\"flaticon-graduated\"></i>\r\n                            </div>\r\n                            <h3>Solicitor</h3>\r\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>\r\n                        </div>\r\n                    </div>\r\n\r\n                    <div class=\"col-lg-4 col-md-6 col-sm-6\">\r\n                        <div class=\"services-box\">\r\n                            <div class=\"icon\">\r\n                                <i class=\"flaticon-self-improvement\"></i>\r\n                            </div>\r\n                            <h3>Self Development</h3>\r\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>\r\n                        </div>\r\n                    </div>\r\n\r\n                    <div class=\"col-lg-4 col-md-6 col-sm-6\">\r\n                        <div class=\"services-box\">\r\n                            <div class=\"icon\">\r\n                                <i class=\"flaticon-padlock\"></i>\r\n                            </div>\r\n                            <h3>Lifetime Access</h3>\r\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>\r\n                        </div>\r\n                    </div>\r\n\r\n                    <div class=\"col-lg-4 col-md-6 col-sm-6\">\r\n                        <div class=\"services-box\">\r\n                            <div class=\"icon\">\r\n                                <i class=\"flaticon-launch\"></i>\r\n                            </div>\r\n                            <h3>Start Ups</h3>\r\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>\r\n                        </div>\r\n                    </div>\r\n\r\n                  <!--   <div class=\"col-lg-12 col-md-12 col-sm-12\">\r\n                        <div class=\"services-btn\">\r\n                            <a href=\"register.html\" class=\"default-btn\"><i class=\'bx bx-user-circle icon-arrow before\'></i><span class=\"label\">Get Started Today</span><i class=\"bx bx-user-circle icon-arrow after\"></i></a>\r\n                        </div>\r\n                    </div> -->\r\n                </div>\r\n            </div>\r\n<!-- <div id=\"particles-js-circle-bubble-2\"></div> -->\r\n            \r\n        </section>\r\n        <!-- End Services Area -->\r\n\r\n\r\n\r\n                <!-- Start Information Area -->\r\n        <section class=\"information-area ptb-100 bg-fcfcfc\">\r\n            <div class=\"container\">\r\n                <div class=\"row align-items-center\">\r\n                    <div class=\"col-lg-6 col-md-12\">\r\n                        <div class=\"information-image text-center\">\r\n                            <img src=\"assets/img/images/indi2.png\" alt=\"image\">\r\n                        </div>\r\n                    </div>\r\n\r\n                    <div class=\"col-lg-6 col-md-12\">\r\n                        <div class=\"information-content\">\r\n                            <span class=\"sub-title\">PERSONAL INFORMATION</span>\r\n                            <h2>Lorem ipsum dolor</h2>\r\n                            <ul class=\"apply-details\">\r\n                                <li>\r\n                                    <div class=\"icon\">\r\n                                        <i class=\"flaticon-checkmark\"></i>\r\n                                    </div>\r\n                                    <h3>Select Suitable Course</h3>\r\n                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>\r\n                                </li>\r\n\r\n                                <li>\r\n                                    <div class=\"icon\">\r\n                                        <i class=\"flaticon-login\"></i>\r\n                                    </div>\r\n                                    <h3>Student Information</h3>\r\n                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>\r\n                                </li>\r\n                                \r\n                                <li>\r\n                                    <div class=\"icon\">\r\n                                        <i class=\"flaticon-credit-card\"></i>\r\n                                    </div>\r\n                                    <h3>Payment Information</h3>\r\n                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>\r\n                                </li>\r\n                                \r\n                                <li>\r\n                                    <div class=\"icon\">\r\n                                        <i class=\"flaticon-verify\"></i>\r\n                                    </div>\r\n                                    <h3>Register Now</h3>\r\n                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>\r\n                                </li>\r\n                            </ul>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </section>\r\n        <!-- End Information Area -->\r\n\r\n  \r\n\r\n\r\n    <!-- Start Subscribe Area -->\r\n        <section class=\"subscribe-area ptb-100\">\r\n            <div class=\"container\">\r\n                <div class=\"subscribe-content\">\r\n                    <span class=\"sub-title\">Go At Your Own Pace</span>\r\n                    <h2>Create Profile and Start Exploring!</h2>\r\n                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>\r\n                 <a href=\"#!\" id=\"myBtn8\" class=\"default-btn\"><i class=\"bx bx-user-circle icon-arrow before\"></i><span class=\"label\">Register Now !</span><i class=\"bx bx-user-circle icon-arrow after\"></i></a>\r\n                </div>\r\n                <div id=\"particles-js-circle-bubble-3\"></div>\r\n            </div>\r\n\r\n            <div class=\"lang-shape4\"><img src=\"assets/img/lang-shape4.png\" alt=\"image\"></div>\r\n            <div class=\"lang-shape5\"><img src=\"assets/img/lang-shape5.png\" alt=\"image\"></div>\r\n\r\n        </section>\r\n        <!-- End Subscribe Area -->',NULL,NULL,NULL,'individual-user-landing',0,1,'2020-10-26 06:20:31','2020-10-26 07:38:40'),(4,'Trainer landing','Trainer landing','<!-- Start Distance Learning Area -->\r\n        <section class=\"distance-learning-area ptb-200\">\r\n            <div class=\"container\">\r\n                <div class=\"row\">\r\n                    <div class=\"col-lg-6 col-md-12\">\r\n                        <div class=\"distance-learning-image\">\r\n                            <img src=\"assets/img/images/trainer.png\" alt=\"image\">\r\n                        </div>\r\n                    </div>\r\n\r\n                    <div class=\"col-lg-6 col-md-12\">\r\n                        <div class=\"distance-learning-content\">\r\n                            <span class=\"sub-title\">TRAINER REGISTRATION</span>\r\n                            <h2>Increase your expertise in planning, management, and profit shape up</h2>\r\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>\r\n                            <ul class=\"features-list\">\r\n                                <li><span><i class=\"flaticon-self-growth\"></i> Consistency</span></li>\r\n                                <li><span><i class=\"flaticon-clock\"></i> Improvement</span></li>\r\n                                <li><span><i class=\"flaticon-ebook\"></i> Remote Learning</span></li>\r\n                                <li><span><i class=\"flaticon-factory\"></i> Branching</span></li>\r\n                            </ul>\r\n                           <!--  <a href=\"register.html\" class=\"default-btn\"><i class=\'bx bx-user-circle icon-arrow before\'></i><span class=\"label\">Join For Free</span><i class=\"bx bx-user-circle icon-arrow after\"></i></a> -->\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n\r\n            <div class=\"business-shape4\"><img src=\"assets/img/business-coaching/business-shape4.png\" alt=\"image\"></div>\r\n            <!-- <div class=\"divider bg-e4feff\"></div> -->\r\n        </section>\r\n        <!-- End Distance Learning Area -->\r\n\r\n\r\n\r\n\r\n        <!-- Start Services Area -->\r\n        <section class=\"services-area ptb-100\">\r\n            <div class=\"container\">\r\n                <div class=\"section-title\">\r\n                    <span class=\"sub-title\">OUR FEATURES</span>\r\n                    <h2>Trainer Dashboard Features</h2>\r\n                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>\r\n                </div>\r\n\r\n                <div class=\"row\">\r\n                    <div class=\"col-lg-4 col-md-6 col-sm-6\">\r\n                        <div class=\"services-box\">\r\n                            <div class=\"icon\">\r\n                                <i class=\"flaticon-analytics\"></i>\r\n                            </div>\r\n                            <h3>Business Planning</h3>\r\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>\r\n                        </div>\r\n                    </div>\r\n\r\n                    <div class=\"col-lg-4 col-md-6 col-sm-6\">\r\n                        <div class=\"services-box\">\r\n                            <div class=\"icon\">\r\n                                <i class=\"flaticon-anywhere\"></i>\r\n                            </div>\r\n                            <h3>From Anywhere</h3>\r\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>\r\n                        </div>\r\n                    </div>\r\n\r\n                    <div class=\"col-lg-4 col-md-6 col-sm-6\">\r\n                        <div class=\"services-box\">\r\n                            <div class=\"icon\">\r\n                                <i class=\"flaticon-graduated\"></i>\r\n                            </div>\r\n                            <h3>Solicitor</h3>\r\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>\r\n                        </div>\r\n                    </div>\r\n\r\n                    <div class=\"col-lg-4 col-md-6 col-sm-6\">\r\n                        <div class=\"services-box\">\r\n                            <div class=\"icon\">\r\n                                <i class=\"flaticon-self-improvement\"></i>\r\n                            </div>\r\n                            <h3>Self Development</h3>\r\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>\r\n                        </div>\r\n                    </div>\r\n\r\n                    <div class=\"col-lg-4 col-md-6 col-sm-6\">\r\n                        <div class=\"services-box\">\r\n                            <div class=\"icon\">\r\n                                <i class=\"flaticon-padlock\"></i>\r\n                            </div>\r\n                            <h3>Lifetime Access</h3>\r\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>\r\n                        </div>\r\n                    </div>\r\n\r\n                    <div class=\"col-lg-4 col-md-6 col-sm-6\">\r\n                        <div class=\"services-box\">\r\n                            <div class=\"icon\">\r\n                                <i class=\"flaticon-launch\"></i>\r\n                            </div>\r\n                            <h3>Start Ups</h3>\r\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>\r\n                        </div>\r\n                    </div>\r\n\r\n                  <!--   <div class=\"col-lg-12 col-md-12 col-sm-12\">\r\n                        <div class=\"services-btn\">\r\n                            <a href=\"register.html\" class=\"default-btn\"><i class=\'bx bx-user-circle icon-arrow before\'></i><span class=\"label\">Get Started Today</span><i class=\"bx bx-user-circle icon-arrow after\"></i></a>\r\n                        </div>\r\n                    </div> -->\r\n                </div>\r\n            </div>\r\n<!-- <div id=\"particles-js-circle-bubble-2\"></div> -->\r\n            \r\n        </section>\r\n        <!-- End Services Area -->\r\n\r\n\r\n\r\n                <!-- Start Information Area -->\r\n        <section class=\"information-area ptb-100 bg-fcfcfc\">\r\n            <div class=\"container\">\r\n                <div class=\"row align-items-center\">\r\n                    <div class=\"col-lg-6 col-md-12\">\r\n                        <div class=\"information-image text-center\">\r\n                            <img src=\"assets/img/images/trainer2.png\" alt=\"image\">\r\n                        </div>\r\n                    </div>\r\n\r\n                    <div class=\"col-lg-6 col-md-12\">\r\n                        <div class=\"information-content\">\r\n                            <span class=\"sub-title\">TRAINER INFORMATION</span>\r\n                            <h2>Lorem ipsum dolor</h2>\r\n                            <ul class=\"apply-details\">\r\n                                <li>\r\n                                    <div class=\"icon\">\r\n                                        <i class=\"flaticon-checkmark\"></i>\r\n                                    </div>\r\n                                    <h3>Select Suitable Course</h3>\r\n                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>\r\n                                </li>\r\n\r\n                                <li>\r\n                                    <div class=\"icon\">\r\n                                        <i class=\"flaticon-login\"></i>\r\n                                    </div>\r\n                                    <h3>Student Information</h3>\r\n                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>\r\n                                </li>\r\n                                \r\n                                <li>\r\n                                    <div class=\"icon\">\r\n                                        <i class=\"flaticon-credit-card\"></i>\r\n                                    </div>\r\n                                    <h3>Payment Information</h3>\r\n                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>\r\n                                </li>\r\n                                \r\n                                <li>\r\n                                    <div class=\"icon\">\r\n                                        <i class=\"flaticon-verify\"></i>\r\n                                    </div>\r\n                                    <h3>Register Now</h3>\r\n                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>\r\n                                </li>\r\n                            </ul>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </section>\r\n        <!-- End Information Area -->\r\n\r\n  \r\n\r\n\r\n    <!-- Start Subscribe Area -->\r\n        <section class=\"subscribe-area ptb-100\">\r\n            <div class=\"container\">\r\n                <div class=\"subscribe-content\">\r\n                    <span class=\"sub-title\">Go At Your Own Pace</span>\r\n                    <h2>Create Profile and Start Exploring!</h2>\r\n                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>\r\n                 <a href=\"#!\" id=\"myBtn8\" class=\"default-btn\"><i class=\"bx bx-user-circle icon-arrow before\"></i><span class=\"label\">Register Now !</span><i class=\"bx bx-user-circle icon-arrow after\"></i></a>\r\n                </div>\r\n                <!-- <div id=\"particles-js-circle-bubble-3\"></div> -->\r\n            </div>\r\n\r\n            <div class=\"lang-shape4\"><img src=\"assets/img/lang-shape4.png\" alt=\"image\"></div>\r\n            <div class=\"lang-shape5\"><img src=\"assets/img/lang-shape5.png\" alt=\"image\"></div>\r\n\r\n        </section>\r\n        <!-- End Subscribe Area -->','<!-- Start Distance Learning Area -->\r\n        <section class=\"distance-learning-area ptb-200\">\r\n            <div class=\"container\">\r\n                <div class=\"row\">\r\n                    <div class=\"col-lg-6 col-md-12\">\r\n                        <div class=\"distance-learning-image\">\r\n                            <img src=\"assets/img/images/trainer.png\" alt=\"image\">\r\n                        </div>\r\n                    </div>\r\n\r\n                    <div class=\"col-lg-6 col-md-12\">\r\n                        <div class=\"distance-learning-content\">\r\n                            <span class=\"sub-title\">TRAINER REGISTRATION</span>\r\n                            <h2>Increase your expertise in planning, management, and profit shape up</h2>\r\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>\r\n                            <ul class=\"features-list\">\r\n                                <li><span><i class=\"flaticon-self-growth\"></i> Consistency</span></li>\r\n                                <li><span><i class=\"flaticon-clock\"></i> Improvement</span></li>\r\n                                <li><span><i class=\"flaticon-ebook\"></i> Remote Learning</span></li>\r\n                                <li><span><i class=\"flaticon-factory\"></i> Branching</span></li>\r\n                            </ul>\r\n                           <!--  <a href=\"register.html\" class=\"default-btn\"><i class=\'bx bx-user-circle icon-arrow before\'></i><span class=\"label\">Join For Free</span><i class=\"bx bx-user-circle icon-arrow after\"></i></a> -->\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n\r\n            <div class=\"business-shape4\"><img src=\"assets/img/business-coaching/business-shape4.png\" alt=\"image\"></div>\r\n            <!-- <div class=\"divider bg-e4feff\"></div> -->\r\n        </section>\r\n        <!-- End Distance Learning Area -->\r\n\r\n\r\n\r\n\r\n        <!-- Start Services Area -->\r\n        <section class=\"services-area ptb-100\">\r\n            <div class=\"container\">\r\n                <div class=\"section-title\">\r\n                    <span class=\"sub-title\">OUR FEATURES</span>\r\n                    <h2>Trainer Dashboard Features</h2>\r\n                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>\r\n                </div>\r\n\r\n                <div class=\"row\">\r\n                    <div class=\"col-lg-4 col-md-6 col-sm-6\">\r\n                        <div class=\"services-box\">\r\n                            <div class=\"icon\">\r\n                                <i class=\"flaticon-analytics\"></i>\r\n                            </div>\r\n                            <h3>Business Planning</h3>\r\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>\r\n                        </div>\r\n                    </div>\r\n\r\n                    <div class=\"col-lg-4 col-md-6 col-sm-6\">\r\n                        <div class=\"services-box\">\r\n                            <div class=\"icon\">\r\n                                <i class=\"flaticon-anywhere\"></i>\r\n                            </div>\r\n                            <h3>From Anywhere</h3>\r\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>\r\n                        </div>\r\n                    </div>\r\n\r\n                    <div class=\"col-lg-4 col-md-6 col-sm-6\">\r\n                        <div class=\"services-box\">\r\n                            <div class=\"icon\">\r\n                                <i class=\"flaticon-graduated\"></i>\r\n                            </div>\r\n                            <h3>Solicitor</h3>\r\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>\r\n                        </div>\r\n                    </div>\r\n\r\n                    <div class=\"col-lg-4 col-md-6 col-sm-6\">\r\n                        <div class=\"services-box\">\r\n                            <div class=\"icon\">\r\n                                <i class=\"flaticon-self-improvement\"></i>\r\n                            </div>\r\n                            <h3>Self Development</h3>\r\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>\r\n                        </div>\r\n                    </div>\r\n\r\n                    <div class=\"col-lg-4 col-md-6 col-sm-6\">\r\n                        <div class=\"services-box\">\r\n                            <div class=\"icon\">\r\n                                <i class=\"flaticon-padlock\"></i>\r\n                            </div>\r\n                            <h3>Lifetime Access</h3>\r\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>\r\n                        </div>\r\n                    </div>\r\n\r\n                    <div class=\"col-lg-4 col-md-6 col-sm-6\">\r\n                        <div class=\"services-box\">\r\n                            <div class=\"icon\">\r\n                                <i class=\"flaticon-launch\"></i>\r\n                            </div>\r\n                            <h3>Start Ups</h3>\r\n                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>\r\n                        </div>\r\n                    </div>\r\n\r\n                  <!--   <div class=\"col-lg-12 col-md-12 col-sm-12\">\r\n                        <div class=\"services-btn\">\r\n                            <a href=\"register.html\" class=\"default-btn\"><i class=\'bx bx-user-circle icon-arrow before\'></i><span class=\"label\">Get Started Today</span><i class=\"bx bx-user-circle icon-arrow after\"></i></a>\r\n                        </div>\r\n                    </div> -->\r\n                </div>\r\n            </div>\r\n<!-- <div id=\"particles-js-circle-bubble-2\"></div> -->\r\n            \r\n        </section>\r\n        <!-- End Services Area -->\r\n\r\n\r\n\r\n                <!-- Start Information Area -->\r\n        <section class=\"information-area ptb-100 bg-fcfcfc\">\r\n            <div class=\"container\">\r\n                <div class=\"row align-items-center\">\r\n                    <div class=\"col-lg-6 col-md-12\">\r\n                        <div class=\"information-image text-center\">\r\n                            <img src=\"assets/img/images/trainer2.png\" alt=\"image\">\r\n                        </div>\r\n                    </div>\r\n\r\n                    <div class=\"col-lg-6 col-md-12\">\r\n                        <div class=\"information-content\">\r\n                            <span class=\"sub-title\">TRAINER INFORMATION</span>\r\n                            <h2>Lorem ipsum dolor</h2>\r\n                            <ul class=\"apply-details\">\r\n                                <li>\r\n                                    <div class=\"icon\">\r\n                                        <i class=\"flaticon-checkmark\"></i>\r\n                                    </div>\r\n                                    <h3>Select Suitable Course</h3>\r\n                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>\r\n                                </li>\r\n\r\n                                <li>\r\n                                    <div class=\"icon\">\r\n                                        <i class=\"flaticon-login\"></i>\r\n                                    </div>\r\n                                    <h3>Student Information</h3>\r\n                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>\r\n                                </li>\r\n                                \r\n                                <li>\r\n                                    <div class=\"icon\">\r\n                                        <i class=\"flaticon-credit-card\"></i>\r\n                                    </div>\r\n                                    <h3>Payment Information</h3>\r\n                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>\r\n                                </li>\r\n                                \r\n                                <li>\r\n                                    <div class=\"icon\">\r\n                                        <i class=\"flaticon-verify\"></i>\r\n                                    </div>\r\n                                    <h3>Register Now</h3>\r\n                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>\r\n                                </li>\r\n                            </ul>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </section>\r\n        <!-- End Information Area -->\r\n\r\n  \r\n\r\n\r\n    <!-- Start Subscribe Area -->\r\n        <section class=\"subscribe-area ptb-100\">\r\n            <div class=\"container\">\r\n                <div class=\"subscribe-content\">\r\n                    <span class=\"sub-title\">Go At Your Own Pace</span>\r\n                    <h2>Create Profile and Start Exploring!</h2>\r\n                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>\r\n                 <a href=\"#!\" id=\"myBtn8\" class=\"default-btn\"><i class=\"bx bx-user-circle icon-arrow before\"></i><span class=\"label\">Register Now !</span><i class=\"bx bx-user-circle icon-arrow after\"></i></a>\r\n                </div>\r\n                <!-- <div id=\"particles-js-circle-bubble-3\"></div> -->\r\n            </div>\r\n\r\n            <div class=\"lang-shape4\"><img src=\"assets/img/lang-shape4.png\" alt=\"image\"></div>\r\n            <div class=\"lang-shape5\"><img src=\"assets/img/lang-shape5.png\" alt=\"image\"></div>\r\n\r\n        </section>\r\n        <!-- End Subscribe Area -->',NULL,NULL,NULL,'trainer-landing',0,1,'2020-10-26 06:20:52','2020-10-26 07:39:46'),(5,'About Us','About Us','<section class=\"about-area ptb-100\">\r\n            <div class=\"container\">\r\n                <div class=\"row align-items-center\">\r\n                    <div class=\"col-lg-6 col-md-12\">\r\n                        <div class=\"experience-image\">\r\n                            <figure><img src=\"assets/img/about/3.jpg\" class=\"shadow\" alt=\"image\"></figure>\r\n                        </div>\r\n                       \r\n                    </div>\r\n\r\n                    <div class=\"col-lg-6 col-md-12\">\r\n                        <div class=\"about-content\">\r\n                            <span class=\"sub-title\">About Us</span>\r\n                            <h2>Learn New Skills to go ahead for Your Career</h2>\r\n                            <h6>We can support student forum 24/7 for national and international students.</h6>\r\n                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut nisi ut aliquip ex ea commodo consequat.</p>\r\n                            <p>Education encompasses both the teaching and learning of knowledge, proper conduct, and technical competency.</p>\r\n\r\n                            <div class=\"features-text\">\r\n                                <h5><i class=\"bx bx-planet\"></i>A place where you can achieve</h5>\r\n                                <p>Education encompasses both the teaching and learning of knowledge, proper conduct, and technical competency.</p>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n\r\n                <div class=\"about-inner-area\">\r\n                    <div class=\"row\">\r\n                        <div class=\"col-lg-4 col-md-6 col-sm-6\">\r\n                            <div class=\"about-text\">\r\n                                <h3>100,000 online courses</h3>\r\n                                <p>Real innovations and a positive customer experience are the heart of successful communication.</p>\r\n                                \r\n                                <ul class=\"features-list\">\r\n                                    <li><i class=\"bx bx-check\"></i> Activate Listening</li>\r\n                                    <li><i class=\"bx bx-check\"></i> Brilliant minds</li>\r\n                                    <li><i class=\"bx bx-check\"></i> Better. Best. Wow!</li>\r\n                                    <li><i class=\"bx bx-check\"></i> Branding it better!</li>\r\n                                </ul>\r\n                            </div>\r\n                        </div>\r\n\r\n                        <div class=\"col-lg-4 col-md-6 col-sm-6\">\r\n                            <div class=\"about-text\">\r\n                                <h3>Expert instruction</h3>\r\n                                <p>Real innovations and a positive customer experience are the heart of successful communication.</p>\r\n                                \r\n                                <ul class=\"features-list\">\r\n                                    <li><i class=\"bx bx-check\"></i> Creating. Results.</li>\r\n                                    <li><i class=\"bx bx-check\"></i> Expect more</li>\r\n                                    <li><i class=\"bx bx-check\"></i> Good thinking</li>\r\n                                    <li><i class=\"bx bx-check\"></i> In real we trust</li>\r\n                                </ul>\r\n                            </div>\r\n                        </div>\r\n\r\n                        <div class=\"col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3\">\r\n                            <div class=\"about-text\">\r\n                                <h3>Lifetime access</h3>\r\n                                <p>Real innovations and a positive customer experience are the heart of successful communication.</p>\r\n                                \r\n                                <ul class=\"features-list\">\r\n                                    <li><i class=\"bx bx-check\"></i> Stay real. Always.</li>\r\n                                    <li><i class=\"bx bx-check\"></i> We have you covered</li>\r\n                                    <li><i class=\"bx bx-check\"></i> We turn heads</li>\r\n                                    <li><i class=\"bx bx-check\"></i> Your brand, promoted</li>\r\n                                </ul>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n\r\n           \r\n        </section>','<section class=\"about-area ptb-100\">\r\n<div class=\"container\">\r\n<div class=\"row align-items-center\">\r\n<div class=\"col-lg-6 col-md-12\">\r\n<div class=\"experience-image\"><figure><img alt=\"image\" class=\"shadow\" src=\"assets/img/about/3.jpg\"></figure></div>\r\n</div>\r\n\r\n<div class=\"col-lg-6 col-md-12\">\r\n<div class=\"about-content\"><span class=\"sub-title\">About Us</span>\r\n\r\n<h2>Learn New Skills to go ahead for Your Career</h2>\r\n\r\n<h6>We can support student forum 24/7 for national and international students.</h6>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut nisi ut aliquip ex ea commodo consequat.</p>\r\n\r\n<p>Education encompasses both the teaching and learning of knowledge, proper conduct, and technical competency.</p>\r\n\r\n<div class=\"features-text\">\r\n<h5>A place where you can achieve</h5>\r\n\r\n<p>Education encompasses both the teaching and learning of knowledge, proper conduct, and technical competency.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"about-inner-area\">\r\n<div class=\"row\">\r\n<div class=\"col-lg-4 col-md-6 col-sm-6\">\r\n<div class=\"about-text\">\r\n<h3>100,000 online courses</h3>\r\n\r\n<p>Real innovations and a positive customer experience are the heart of successful communication.</p>\r\n\r\n<ul class=\"features-list\">\r\n	<li>Activate Listening</li>\r\n	<li>Brilliant minds</li>\r\n	<li>Better. Best. Wow!</li>\r\n	<li>Branding it better!</li>\r\n</ul>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-lg-4 col-md-6 col-sm-6\">\r\n<div class=\"about-text\">\r\n<h3>Expert instruction</h3>\r\n\r\n<p>Real innovations and a positive customer experience are the heart of successful communication.</p>\r\n\r\n<ul class=\"features-list\">\r\n	<li>Creating. Results.</li>\r\n	<li>Expect more</li>\r\n	<li>Good thinking</li>\r\n	<li>In real we trust</li>\r\n</ul>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3\">\r\n<div class=\"about-text\">\r\n<h3>Lifetime access</h3>\r\n\r\n<p>Real innovations and a positive customer experience are the heart of successful communication.</p>\r\n\r\n<ul class=\"features-list\">\r\n	<li>Stay real. Always.</li>\r\n	<li>We have you covered</li>\r\n	<li>We turn heads</li>\r\n	<li>Your brand, promoted</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</section><p>&nbsp;</p><p>&nbsp;</p>',NULL,NULL,NULL,'about-us',0,1,'2020-10-26 11:38:51','2020-10-28 04:31:07'),(6,'Privacy Policy','سياسة خاصة','<p>No content here</p>','<p>لا يوجد محتوى هنا</p>',NULL,NULL,NULL,'privacy-policy',0,1,'2020-12-09 09:20:50','2020-12-09 09:20:50'),(7,'Contact Us','اتصل بنا','<section class=\"contact-info-area pt-100 pb-70\">\r\n            <div class=\"container\">\r\n                <div class=\"row\">\r\n                    <div class=\"col-lg-4 col-md-6 col-sm-6\">\r\n                        <div class=\"contact-info-box mb-30\">\r\n                            <div class=\"icon\">\r\n                                <i class=\"bx bx-envelope\"></i>\r\n                            </div>\r\n\r\n                            <h3>Email Here</h3>\r\n                            <p><a href=\"mailto:hello@traineaze.com\">hello@traineaze.com</a></p>\r\n                            <p><a href=\"mailto:traineaze@hello.com\">traineaze@hello.com</a></p>\r\n                        </div>\r\n                    </div>\r\n\r\n                    <div class=\"col-lg-4 col-md-6 col-sm-6\">\r\n                        <div class=\"contact-info-box mb-30\">\r\n                            <div class=\"icon\">\r\n                                <i class=\"bx bx-map\"></i>\r\n                            </div>\r\n\r\n                            <h3>Location Here</h3>\r\n                            <p><a href=\"#!\" target=\"_blank\">2750 ABC Road, Downtown, New York, USA</a></p>\r\n                        </div>\r\n                    </div>\r\n\r\n                    <div class=\"col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3\">\r\n                        <div class=\"contact-info-box mb-30\">\r\n                            <div class=\"icon\">\r\n                                <i class=\"bx bx-phone-call\"></i>\r\n                            </div>\r\n\r\n                            <h3>Call Here</h3>\r\n                            <p><a href=\"tel:1234567890\">+123 456 7890</a></p>\r\n                            <p><a href=\"tel:2414524526\">+241 452 4526</a></p>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n\r\n            <div id=\"particles-js-circle-bubble-2\"></div>\r\n        </section>\r\n\r\n <!-- Start Contact Area -->\r\n        <section class=\"contact-area pb-100\">\r\n            <div class=\"container\">\r\n                <div class=\"section-title\">\r\n                    <span class=\"sub-title\">Contact Us</span>\r\n                    <h2>Drop us Message for any Query</h2>\r\n                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>\r\n                </div>\r\n                </div>\r\n                   </section>\r\n        <!-- End Contact Info Area -->','<section class=\"contact-info-area pt-100 pb-70\">\r\n            <div class=\"container\">\r\n                <div class=\"row\">\r\n                    <div class=\"col-lg-4 col-md-6 col-sm-6\">\r\n                        <div class=\"contact-info-box mb-30\">\r\n                            <div class=\"icon\">\r\n                                <i class=\"bx bx-envelope\"></i>\r\n                            </div>\r\n\r\n                            <h3>Email Here</h3>\r\n                            <p><a href=\"mailto:hello@traineaze.com\">hello@traineaze.com</a></p>\r\n                            <p><a href=\"mailto:traineaze@hello.com\">traineaze@hello.com</a></p>\r\n                        </div>\r\n                    </div>\r\n\r\n                    <div class=\"col-lg-4 col-md-6 col-sm-6\">\r\n                        <div class=\"contact-info-box mb-30\">\r\n                            <div class=\"icon\">\r\n                                <i class=\"bx bx-map\"></i>\r\n                            </div>\r\n\r\n                            <h3>Location Here</h3>\r\n                            <p><a href=\"#!\" target=\"_blank\">2750 ABC Road, Downtown, New York, USA</a></p>\r\n                        </div>\r\n                    </div>\r\n\r\n                    <div class=\"col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3\">\r\n                        <div class=\"contact-info-box mb-30\">\r\n                            <div class=\"icon\">\r\n                                <i class=\"bx bx-phone-call\"></i>\r\n                            </div>\r\n\r\n                            <h3>Call Here</h3>\r\n                            <p><a href=\"tel:1234567890\">+123 456 7890</a></p>\r\n                            <p><a href=\"tel:2414524526\">+241 452 4526</a></p>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n\r\n            <div id=\"particles-js-circle-bubble-2\"></div>\r\n        </section>\r\n\r\n <!-- Start Contact Area -->\r\n        <section class=\"contact-area pb-100\">\r\n            <div class=\"container\">\r\n                <div class=\"section-title\">\r\n                    <span class=\"sub-title\">Contact Us</span>\r\n                    <h2>Drop us Message for any Query</h2>\r\n                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>\r\n                </div>\r\n                </div>\r\n                   </section>\r\n        <!-- End Contact Info Area -->',NULL,NULL,NULL,'contact-us',0,1,'2020-12-09 10:04:09','2020-12-09 11:11:06');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `amount` decimal(8,2) DEFAULT NULL,
  `total_amount` decimal(8,2) DEFAULT NULL,
  `fees_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fees_amount` decimal(8,2) DEFAULT NULL,
  `fees_total` decimal(8,2) DEFAULT NULL,
  `fees_type` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('initial','pending','onhold','success','failed','declined','dispute','expired') COLLATE utf8mb4_unicode_ci DEFAULT 'initial',
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_last4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_exp_month` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_exp_year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `charge_id_or_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payer_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `local_transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_created` int(11) DEFAULT NULL,
  `bank_swift_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iban` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_note` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payments`
--

LOCK TABLES `payments` WRITE;
/*!40000 ALTER TABLE `payments` DISABLE KEYS */;
INSERT INTO `payments` VALUES (1,'Nikhil','nikhil@gmail.com',4,50.00,NULL,NULL,NULL,0.00,'percent','offline','success','AED',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'TRAN_1608536965UHTNCM',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'huh','2020-12-21 02:19:25','2020-12-21 02:22:07');
/*!40000 ALTER TABLE `payments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_content` longtext COLLATE utf8mb4_unicode_ci,
  `feature_image` int(11) DEFAULT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `question_options`
--

DROP TABLE IF EXISTS `question_options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question_options` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `question_id` int(11) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL,
  `d_pref` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT 'text',
  `is_correct` tinyint(4) DEFAULT '0',
  `sort_order` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question_options`
--

LOCK TABLES `question_options` WRITE;
/*!40000 ALTER TABLE `question_options` DISABLE KEYS */;
INSERT INTO `question_options` VALUES (1,2,'option 1',NULL,'text',1,1),(2,2,'option 2',NULL,'text',0,2),(3,3,'Programming language',NULL,'text',1,1),(4,3,'CSS',NULL,'text',0,2),(5,3,'Javascrip',NULL,'text',0,3),(6,5,'Django',NULL,'text',1,1),(7,5,'Laravel',NULL,'text',0,2),(8,5,'Vue',NULL,'text',0,3),(9,5,'Angular',NULL,'text',0,4);
/*!40000 ALTER TABLE `question_options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `quiz_id` int(11) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `score` decimal(5,1) DEFAULT NULL,
  `sort_order` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` VALUES (1,1,2,'What is your name',1,'text',10.0,1),(2,1,2,'Are you ready',1,'checkbox',10.0,2),(3,1,7,'What is python?',NULL,'checkbox',10.0,1),(4,1,7,'write a simple python code',NULL,'text',10.0,2),(5,1,7,'select the correct a python framework?',NULL,'checkbox',10.0,3);
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `required_course_departments`
--

DROP TABLE IF EXISTS `required_course_departments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `required_course_departments` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `course_id` bigint(20) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  `created_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` bigint(20) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `required_course_departments`
--

LOCK TABLES `required_course_departments` WRITE;
/*!40000 ALTER TABLE `required_course_departments` DISABLE KEYS */;
INSERT INTO `required_course_departments` VALUES (1,1,1,1,16,'2020-11-18 00:48:26',NULL,'2020-11-18 00:48:26',NULL),(2,2,7,1,16,'2020-11-18 00:49:01',NULL,'2020-11-18 00:49:01',NULL),(3,3,3,1,16,'2020-11-18 00:49:35',NULL,'2020-11-18 00:49:35',NULL),(4,4,1,1,16,'2020-11-18 00:50:12',NULL,'2020-11-18 00:50:12',NULL),(5,5,1,1,16,'2020-11-18 01:03:46',NULL,'2020-11-18 01:03:46',NULL),(6,6,1,1,16,'2020-11-18 01:04:18',NULL,'2020-11-18 01:04:18',NULL),(7,7,1,1,16,'2020-11-21 08:45:27',NULL,'2020-11-21 08:45:27',NULL),(8,7,3,1,16,'2020-11-21 08:45:27',NULL,'2020-11-21 08:45:27',NULL),(9,8,1,1,16,'2020-11-21 08:46:07',NULL,'2020-11-21 08:46:07',NULL),(10,8,3,1,16,'2020-11-21 08:46:07',NULL,'2020-11-21 08:46:07',NULL),(11,8,7,1,16,'2020-11-21 08:46:07',NULL,'2020-11-21 08:46:07',NULL),(12,8,8,1,16,'2020-11-21 08:46:07',NULL,'2020-11-21 08:46:07',NULL),(13,9,9,1,4,'2020-12-26 22:20:19',NULL,'2020-12-26 22:20:19',NULL),(14,10,9,1,4,'2020-12-26 22:20:38',NULL,'2020-12-26 22:20:38',NULL),(15,11,10,1,4,'2020-12-27 11:29:03',NULL,'2020-12-27 11:29:03',NULL),(16,12,10,1,4,'2020-12-27 11:29:25',NULL,'2020-12-27 11:29:25',NULL),(17,13,10,1,4,'2020-12-27 11:33:04',NULL,'2020-12-27 11:33:04',NULL),(18,14,9,1,4,'2020-12-27 11:33:39',NULL,'2020-12-27 11:33:39',NULL),(19,15,11,1,4,'2020-12-27 11:34:06',NULL,'2020-12-27 11:34:06',NULL),(20,16,9,1,4,'2020-12-27 11:35:14',NULL,'2020-12-27 11:35:14',NULL);
/*!40000 ALTER TABLE `required_course_departments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `required_course_positions`
--

DROP TABLE IF EXISTS `required_course_positions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `required_course_positions` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `course_id` bigint(20) DEFAULT NULL,
  `position_id` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  `created_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` bigint(20) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `required_course_positions`
--

LOCK TABLES `required_course_positions` WRITE;
/*!40000 ALTER TABLE `required_course_positions` DISABLE KEYS */;
INSERT INTO `required_course_positions` VALUES (1,1,1,1,16,'2020-11-18 00:48:26',NULL,'2020-11-18 00:48:26',NULL),(2,2,7,1,16,'2020-11-18 00:49:01',NULL,'2020-11-18 00:49:01',NULL),(3,3,8,1,16,'2020-11-18 00:49:35',NULL,'2020-11-18 00:49:35',NULL),(4,4,2,1,16,'2020-11-18 00:50:12',NULL,'2020-11-18 00:50:12',NULL),(5,5,1,1,16,'2020-11-18 01:03:46',NULL,'2020-11-18 01:03:46',NULL),(6,6,2,1,16,'2020-11-18 01:04:18',NULL,'2020-11-18 01:04:18',NULL),(7,7,2,1,16,'2020-11-21 08:45:27',NULL,'2020-11-21 08:45:27',NULL),(8,8,1,1,16,'2020-11-21 08:46:07',NULL,'2020-11-21 08:46:07',NULL),(9,8,2,1,16,'2020-11-21 08:46:08',NULL,'2020-11-21 08:46:08',NULL),(10,8,3,1,16,'2020-11-21 08:46:08',NULL,'2020-11-21 08:46:08',NULL),(11,9,9,1,4,'2020-12-26 22:20:19',NULL,'2020-12-26 22:20:19',NULL),(12,10,9,1,4,'2020-12-26 22:20:38',NULL,'2020-12-26 22:20:38',NULL),(13,11,10,1,4,'2020-12-27 11:29:03',NULL,'2020-12-27 11:29:03',NULL),(14,12,10,1,4,'2020-12-27 11:29:25',NULL,'2020-12-27 11:29:25',NULL),(15,13,9,1,4,'2020-12-27 11:33:04',NULL,'2020-12-27 11:33:04',NULL),(16,13,10,1,4,'2020-12-27 11:33:04',NULL,'2020-12-27 11:33:04',NULL),(17,14,9,1,4,'2020-12-27 11:33:39',NULL,'2020-12-27 11:33:39',NULL),(18,14,10,1,4,'2020-12-27 11:33:39',NULL,'2020-12-27 11:33:39',NULL),(19,14,11,1,4,'2020-12-27 11:33:39',NULL,'2020-12-27 11:33:39',NULL),(20,15,9,1,4,'2020-12-27 11:34:06',NULL,'2020-12-27 11:34:06',NULL),(21,15,11,1,4,'2020-12-27 11:34:06',NULL,'2020-12-27 11:34:06',NULL),(22,16,9,1,4,'2020-12-27 11:35:14',NULL,'2020-12-27 11:35:14',NULL),(23,16,11,1,4,'2020-12-27 11:35:14',NULL,'2020-12-27 11:35:14',NULL);
/*!40000 ALTER TABLE `required_course_positions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `required_course_projects`
--

DROP TABLE IF EXISTS `required_course_projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `required_course_projects` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `course_id` bigint(20) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  `created_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` bigint(20) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `required_course_projects`
--

LOCK TABLES `required_course_projects` WRITE;
/*!40000 ALTER TABLE `required_course_projects` DISABLE KEYS */;
INSERT INTO `required_course_projects` VALUES (1,1,2,1,16,'2020-11-18 00:48:26',NULL,'2020-11-18 00:48:26',NULL),(2,1,3,1,16,'2020-11-18 00:48:26',NULL,'2020-11-18 00:48:26',NULL),(3,2,2,1,16,'2020-11-18 00:49:01',NULL,'2020-11-18 00:49:01',NULL),(4,3,2,1,16,'2020-11-18 00:49:35',NULL,'2020-11-18 00:49:35',NULL),(5,3,3,1,16,'2020-11-18 00:49:35',NULL,'2020-11-18 00:49:35',NULL),(6,4,6,1,16,'2020-11-18 00:50:12',NULL,'2020-11-18 00:50:12',NULL),(7,5,6,1,16,'2020-11-18 01:03:46',NULL,'2020-11-18 01:03:46',NULL),(8,6,6,1,16,'2020-11-18 01:04:18',NULL,'2020-11-18 01:04:18',NULL),(9,7,2,1,16,'2020-11-21 08:45:27',NULL,'2020-11-21 08:45:27',NULL),(10,7,3,1,16,'2020-11-21 08:45:27',NULL,'2020-11-21 08:45:27',NULL),(11,8,2,1,16,'2020-11-21 08:46:08',NULL,'2020-11-21 08:46:08',NULL),(12,8,3,1,16,'2020-11-21 08:46:08',NULL,'2020-11-21 08:46:08',NULL),(13,9,8,1,4,'2020-12-26 22:20:19',NULL,'2020-12-26 22:20:19',NULL),(14,10,8,1,4,'2020-12-26 22:20:38',NULL,'2020-12-26 22:20:38',NULL),(15,11,8,1,4,'2020-12-27 11:29:03',NULL,'2020-12-27 11:29:03',NULL),(16,12,8,1,4,'2020-12-27 11:29:25',NULL,'2020-12-27 11:29:25',NULL),(17,13,8,1,4,'2020-12-27 11:33:04',NULL,'2020-12-27 11:33:04',NULL),(18,14,8,1,4,'2020-12-27 11:33:39',NULL,'2020-12-27 11:33:39',NULL),(19,15,8,1,4,'2020-12-27 11:34:06',NULL,'2020-12-27 11:34:06',NULL),(20,16,8,1,4,'2020-12-27 11:35:14',NULL,'2020-12-27 11:35:14',NULL);
/*!40000 ALTER TABLE `required_course_projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `required_course_workforces`
--

DROP TABLE IF EXISTS `required_course_workforces`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `required_course_workforces` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `course_id` bigint(20) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `certificate` varchar(500) DEFAULT NULL,
  `issue_date` date DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  `certificate_status` tinyint(1) DEFAULT '0' COMMENT '0-deleted,1-active/admin approved,2-inactive, 3-expired',
  `upload_status` tinyint(1) NOT NULL COMMENT '1-uploaded, 0-not uploaded',
  `status` tinyint(4) DEFAULT '1',
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` bigint(20) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `required_course_workforces`
--

LOCK TABLES `required_course_workforces` WRITE;
/*!40000 ALTER TABLE `required_course_workforces` DISABLE KEYS */;
INSERT INTO `required_course_workforces` VALUES (1,5,55,'5fb4c0eed705a.jpeg','2020-11-18','2021-11-17',1,1,1,NULL,NULL,NULL,'2020-11-18 01:06:31',NULL,'2020-11-18 01:06:31',NULL),(2,6,56,'5fb4c1535cbfa.png','2020-04-29','2020-10-28',1,1,1,NULL,NULL,NULL,'2020-11-18 01:08:11',NULL,'2020-11-18 01:08:11',NULL),(3,7,60,'5fb9235c47e61.png','2019-10-17','2020-04-16',1,1,1,'2020-11-01',NULL,NULL,'2020-11-21 08:48:01',16,'2020-11-21 08:55:32',NULL),(4,8,60,NULL,NULL,NULL,0,0,1,'2020-11-30',NULL,NULL,'2020-11-21 08:48:41',NULL,'2020-11-21 08:48:41',NULL),(5,9,5,'5fe8bb832aa50.pdf','2021-01-15','2021-03-14',1,1,1,'2020-12-27',NULL,NULL,'2020-12-27 11:21:15',NULL,'2020-12-27 11:21:15',NULL),(6,11,10,'5fe8bddbdeccf.pdf','2020-06-09','2020-12-08',1,1,1,'2020-07-31',NULL,NULL,'2020-12-27 11:31:15',NULL,'2020-12-27 11:31:15',NULL),(7,11,9,'5fe8bdfaea799.pdf','2020-07-22','2021-01-21',1,1,1,'2020-07-31',NULL,NULL,'2020-12-27 11:31:46',NULL,'2020-12-27 11:31:46',NULL);
/*!40000 ALTER TABLE `required_course_workforces` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reviews` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `review_id` int(11) DEFAULT '0',
  `review` text COLLATE utf8mb4_unicode_ci,
  `rating` tinyint(4) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reviews`
--

LOCK TABLES `reviews` WRITE;
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
INSERT INTO `reviews` VALUES (1,1,1,0,'good',5,1,'2020-12-19 05:45:35','2020-12-19 05:45:35');
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sections`
--

DROP TABLE IF EXISTS `sections`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sections` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `course_id` int(11) DEFAULT NULL,
  `section_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unlock_date` timestamp NULL DEFAULT NULL,
  `unlock_days` tinyint(4) DEFAULT NULL,
  `sort_order` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sections`
--

LOCK TABLES `sections` WRITE;
/*!40000 ALTER TABLE `sections` DISABLE KEYS */;
INSERT INTO `sections` VALUES (1,1,'Module 1',NULL,NULL,0),(2,2,'Course Introduction',NULL,NULL,0),(3,2,'Live Session',NULL,NULL,0),(4,3,'INtroduction',NULL,NULL,0);
/*!40000 ALTER TABLE `sections` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_en` varchar(200) DEFAULT NULL,
  `title_ar` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `position_en` varchar(200) DEFAULT NULL,
  `position_ar` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `img` varchar(200) NOT NULL,
  `description_en` text,
  `description_ar` text CHARACTER SET utf8,
  `status` tinyint(2) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testimonials`
--

LOCK TABLES `testimonials` WRITE;
/*!40000 ALTER TABLE `testimonials` DISABLE KEYS */;
INSERT INTO `testimonials` VALUES (2,'John','يوحنا','Designer','مصمم','5f87debf6eed9.jpeg','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.','مصمم مصمم مصمم مصمم مصمم مصمم مصمم مصمم مصمم مصمم',1,'2020-10-14 09:49:43','2020-10-15 08:36:38'),(3,'Christina','كريستينا','Developer','مطور','5f87ded2ad064.jpeg','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.',1,'2020-10-14 09:56:05','2020-10-15 05:33:16');
/*!40000 ALTER TABLE `testimonials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_me` text COLLATE utf8mb4_unicode_ci,
  `date_of_birth` date DEFAULT NULL,
  `photo` int(11) DEFAULT NULL,
  `job_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `options` text COLLATE utf8mb4_unicode_ci,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int(2) DEFAULT NULL,
  `course_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_status` tinyint(4) DEFAULT '0',
  `provider_user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reset_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Nandul Das','nanduldas@gmail.com',NULL,'$2y$10$iq8z84WSpmd2.3GFpU4j7eGbJxqLvuJzS5Vvxw3cIEtsSUf8ngP4q',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'{\"enrolled_courses\":[1],\"completed_courses\":{\"1\":{\"percent\":100,\"content_ids\":[2,3,1]}}}','admin',NULL,'',1,NULL,NULL,NULL,NULL,'2020-12-19 05:15:44','2020-12-19 05:45:45'),(2,'Student','student@gmail.com',NULL,'$2y$10$b6Sb5YLMh.mKtiRSH7sq2e1yhzgCUOZCvrrhvvtVhbK.vMwY3K8qq',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'{\"enrolled_courses\":[1,2],\"completed_courses\":{\"2\":{\"percent\":100,\"content_ids\":[4,5,6,7]}}}','student',NULL,'',1,NULL,NULL,NULL,NULL,'2020-12-19 08:34:24','2020-12-20 01:06:00'),(3,'student2','student2@gmail.com',NULL,'$2y$10$mfL3.n0PrOz7JzTpGOrP0erIgFuGSMyC2O6G/AqIFeCNetcut2f2W',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'{\"enrolled_courses\":[2],\"completed_courses\":{\"2\":{\"percent\":100,\"content_ids\":[4,5,6,7]}}}','student',NULL,'',1,NULL,NULL,NULL,NULL,'2020-12-20 01:09:29','2020-12-20 01:10:38'),(4,'Nikhil','nikhil@gmail.com',NULL,'$2y$10$iq8z84WSpmd2.3GFpU4j7eGbJxqLvuJzS5Vvxw3cIEtsSUf8ngP4q',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'{\"social\":{\"website\":null,\"twitter\":null,\"facebook\":null,\"linkedin\":null,\"youtube\":null,\"instagram\":null},\"enrolled_courses\":[2],\"completed_courses\":{\"2\":{\"percent\":80,\"content_ids\":[4,5,6,7]}}}','company',NULL,'',1,NULL,NULL,NULL,NULL,'2020-12-21 02:16:45','2020-12-21 02:25:58'),(5,' Nandu Company','nanduldascompany@gmail.com',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'company',6,'',0,NULL,NULL,NULL,NULL,'2020-12-26 13:31:25','2020-12-26 13:31:25'),(6,'Sandeep Kumar','sandeepcompany@gmail.com',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'company',6,'',0,NULL,NULL,NULL,NULL,'2020-12-27 11:24:59','2020-12-27 11:24:59'),(7,'Yadu S Das','yaducomapany@gmail.com',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'company',6,'',0,NULL,NULL,NULL,NULL,'2020-12-27 11:25:28','2020-12-27 11:25:28'),(8,'Neeraj Gupta','neeraj@yarddiant.com',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'company',6,'',0,NULL,NULL,NULL,NULL,'2020-12-27 11:25:52','2020-12-27 11:25:52'),(9,'Nikhil D','nikhilcomany2@gmail.com',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'company',6,'',0,NULL,NULL,NULL,NULL,'2020-12-27 11:26:36','2020-12-27 11:26:36'),(10,'Anju c','anju@gmail.com',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'company',6,'',0,NULL,NULL,NULL,NULL,'2020-12-27 11:27:01','2020-12-27 11:27:01'),(11,'Priyanka L','priyanka@gmail.com',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'company',6,'',0,NULL,NULL,NULL,NULL,'2020-12-27 11:28:13','2020-12-27 11:28:13');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wishlists`
--

DROP TABLE IF EXISTS `wishlists`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wishlists` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `course_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wishlists`
--

LOCK TABLES `wishlists` WRITE;
/*!40000 ALTER TABLE `wishlists` DISABLE KEYS */;
/*!40000 ALTER TABLE `wishlists` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `withdraws`
--

DROP TABLE IF EXISTS `withdraws`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `withdraws` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `amount` decimal(16,2) DEFAULT NULL,
  `method_data` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `withdraws`
--

LOCK TABLES `withdraws` WRITE;
/*!40000 ALTER TABLE `withdraws` DISABLE KEYS */;
/*!40000 ALTER TABLE `withdraws` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `workforce_departments`
--

DROP TABLE IF EXISTS `workforce_departments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `workforce_departments` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  `created_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` bigint(20) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `workforce_departments`
--

LOCK TABLES `workforce_departments` WRITE;
/*!40000 ALTER TABLE `workforce_departments` DISABLE KEYS */;
INSERT INTO `workforce_departments` VALUES (1,54,1,1,16,'2020-11-18 00:39:29',NULL,'2020-11-18 00:39:29',NULL),(2,54,3,1,16,'2020-11-18 00:39:29',NULL,'2020-11-18 00:39:29',NULL),(3,54,7,1,16,'2020-11-18 00:39:29',NULL,'2020-11-18 00:39:29',NULL),(4,54,8,1,16,'2020-11-18 00:39:29',NULL,'2020-11-18 00:39:29',NULL),(5,55,1,1,16,'2020-11-18 00:40:46',NULL,'2020-11-18 00:40:46',NULL),(6,56,1,1,16,'2020-11-18 00:42:28',NULL,'2020-11-18 00:42:28',NULL),(7,57,3,1,16,'2020-11-18 00:45:17',NULL,'2020-11-18 00:45:17',NULL),(8,58,3,1,16,'2020-11-18 00:45:52',NULL,'2020-11-18 00:45:52',NULL),(9,59,7,1,16,'2020-11-18 00:46:39',NULL,'2020-11-18 00:46:39',NULL),(10,59,8,1,16,'2020-11-18 00:46:39',NULL,'2020-11-18 00:46:39',NULL),(11,60,3,1,16,'2020-11-21 08:37:41',NULL,'2020-11-21 08:37:41',NULL),(12,5,9,1,4,'2020-12-26 13:31:25',NULL,'2020-12-26 13:31:25',NULL),(13,6,9,1,4,'2020-12-27 11:24:59',NULL,'2020-12-27 11:24:59',NULL),(14,7,9,1,4,'2020-12-27 11:25:28',NULL,'2020-12-27 11:25:28',NULL),(15,8,9,1,4,'2020-12-27 11:25:52',NULL,'2020-12-27 11:25:52',NULL),(16,9,10,1,4,'2020-12-27 11:26:36',NULL,'2020-12-27 11:26:36',NULL),(17,10,10,1,4,'2020-12-27 11:27:01',NULL,'2020-12-27 11:27:01',NULL),(18,11,14,1,4,'2020-12-27 11:28:13',NULL,'2020-12-27 11:28:13',NULL);
/*!40000 ALTER TABLE `workforce_departments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `workforce_positions`
--

DROP TABLE IF EXISTS `workforce_positions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `workforce_positions` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) DEFAULT NULL,
  `position_id` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  `created_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` bigint(20) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `workforce_positions`
--

LOCK TABLES `workforce_positions` WRITE;
/*!40000 ALTER TABLE `workforce_positions` DISABLE KEYS */;
INSERT INTO `workforce_positions` VALUES (1,54,3,1,16,'2020-11-18 00:39:29',NULL,'2020-11-18 00:39:29',NULL),(2,54,4,1,16,'2020-11-18 00:39:29',NULL,'2020-11-18 00:39:29',NULL),(3,55,1,1,16,'2020-11-18 00:40:46',NULL,'2020-11-18 00:40:46',NULL),(4,55,2,1,16,'2020-11-18 00:40:46',NULL,'2020-11-18 00:40:46',NULL),(5,56,2,1,16,'2020-11-18 00:42:28',NULL,'2020-11-18 00:42:28',NULL),(6,57,8,1,16,'2020-11-18 00:45:17',NULL,'2020-11-18 00:45:17',NULL),(7,58,8,1,16,'2020-11-18 00:45:52',NULL,'2020-11-18 00:45:52',NULL),(8,59,7,1,16,'2020-11-18 00:46:39',NULL,'2020-11-18 00:46:39',NULL),(9,60,2,1,16,'2020-11-21 08:37:41',NULL,'2020-11-21 08:37:41',NULL),(10,5,9,1,4,'2020-12-26 13:31:25',NULL,'2020-12-26 13:31:25',NULL),(11,6,9,1,4,'2020-12-27 11:24:59',NULL,'2020-12-27 11:24:59',NULL),(12,7,9,1,4,'2020-12-27 11:25:28',NULL,'2020-12-27 11:25:28',NULL),(13,8,9,1,4,'2020-12-27 11:25:52',NULL,'2020-12-27 11:25:52',NULL),(14,9,9,1,4,'2020-12-27 11:26:36',NULL,'2020-12-27 11:26:36',NULL),(15,10,9,1,4,'2020-12-27 11:27:01',NULL,'2020-12-27 11:27:01',NULL),(16,11,9,1,4,'2020-12-27 11:28:13',NULL,'2020-12-27 11:28:13',NULL);
/*!40000 ALTER TABLE `workforce_positions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `workforce_projects`
--

DROP TABLE IF EXISTS `workforce_projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `workforce_projects` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  `created_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` bigint(20) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `workforce_projects`
--

LOCK TABLES `workforce_projects` WRITE;
/*!40000 ALTER TABLE `workforce_projects` DISABLE KEYS */;
INSERT INTO `workforce_projects` VALUES (1,54,2,1,16,'2020-11-18 00:39:29',NULL,'2020-11-18 00:39:29',NULL),(2,54,3,1,16,'2020-11-18 00:39:29',NULL,'2020-11-18 00:39:29',NULL),(3,54,5,1,16,'2020-11-18 00:39:29',NULL,'2020-11-18 00:39:29',NULL),(4,55,5,1,16,'2020-11-18 00:40:46',NULL,'2020-11-18 00:40:46',NULL),(5,55,6,1,16,'2020-11-18 00:40:46',NULL,'2020-11-18 00:40:46',NULL),(6,56,2,1,16,'2020-11-18 00:42:28',NULL,'2020-11-18 00:42:28',NULL),(7,56,5,1,16,'2020-11-18 00:42:28',NULL,'2020-11-18 00:42:28',NULL),(8,57,3,1,16,'2020-11-18 00:45:17',NULL,'2020-11-18 00:45:17',NULL),(9,57,5,1,16,'2020-11-18 00:45:17',NULL,'2020-11-18 00:45:17',NULL),(10,57,6,1,16,'2020-11-18 00:45:17',NULL,'2020-11-18 00:45:17',NULL),(11,58,2,1,16,'2020-11-18 00:45:52',NULL,'2020-11-18 00:45:52',NULL),(12,58,5,1,16,'2020-11-18 00:45:52',NULL,'2020-11-18 00:45:52',NULL),(13,59,2,1,16,'2020-11-18 00:46:39',NULL,'2020-11-18 00:46:39',NULL),(14,59,6,1,16,'2020-11-18 00:46:39',NULL,'2020-11-18 00:46:39',NULL),(15,59,7,1,16,'2020-11-18 00:46:39',NULL,'2020-11-18 00:46:39',NULL),(16,60,3,1,16,'2020-11-21 08:37:41',NULL,'2020-11-21 08:37:41',NULL),(17,60,5,1,16,'2020-11-21 08:37:41',NULL,'2020-11-21 08:37:41',NULL),(18,5,8,1,4,'2020-12-26 13:31:25',NULL,'2020-12-26 13:31:25',NULL),(19,6,8,1,4,'2020-12-27 11:24:59',NULL,'2020-12-27 11:24:59',NULL),(20,7,8,1,4,'2020-12-27 11:25:28',NULL,'2020-12-27 11:25:28',NULL),(21,8,8,1,4,'2020-12-27 11:25:52',NULL,'2020-12-27 11:25:52',NULL),(22,9,8,1,4,'2020-12-27 11:26:36',NULL,'2020-12-27 11:26:36',NULL),(23,10,8,1,4,'2020-12-27 11:27:01',NULL,'2020-12-27 11:27:01',NULL),(24,11,8,1,4,'2020-12-27 11:28:13',NULL,'2020-12-27 11:28:13',NULL);
/*!40000 ALTER TABLE `workforce_projects` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-12-28  0:00:49
