-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.24-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6540
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table enroll.academic_year
CREATE TABLE IF NOT EXISTS `academic_year` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` smallint(4) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table enroll.academic_year: ~2 rows (approximately)
DELETE FROM `academic_year`;
INSERT INTO `academic_year` (`id`, `name`) VALUES
	(1, 2565),
	(2, 2566);

-- Dumping structure for table enroll.enroll
CREATE TABLE IF NOT EXISTS `enroll` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `image_profile` varchar(50) DEFAULT NULL,
  `prefix_id` tinyint(4) DEFAULT NULL,
  `fname_th` varchar(100) DEFAULT NULL,
  `lname_th` varchar(100) DEFAULT NULL,
  `fname_en` varchar(100) DEFAULT NULL,
  `lname_en` varchar(100) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `ethnicity` varchar(50) DEFAULT NULL COMMENT 'เชื้อชาติ',
  `nationality` varchar(50) DEFAULT NULL COMMENT 'สัญชาติ',
  `religion` varchar(50) DEFAULT NULL COMMENT 'ศาสนา',
  `blood_type` varchar(50) DEFAULT NULL COMMENT 'หมู่เลือด',
  `congenital_disease` varchar(100) DEFAULT NULL COMMENT 'โรคประจำตัว',
  `height` float DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `id_card` varchar(13) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `ayear_id` int(11) DEFAULT NULL,
  `level_id` int(11) DEFAULT NULL,
  `major_id` int(11) DEFAULT NULL,
  `remark` text DEFAULT NULL,
  `image_transcript` varchar(50) DEFAULT NULL,
  `image_id_card` varchar(50) DEFAULT NULL,
  `image_house_registration` varchar(50) DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table enroll.enroll: ~10 rows (approximately)
DELETE FROM `enroll`;
INSERT INTO `enroll` (`id`, `user_id`, `image_profile`, `prefix_id`, `fname_th`, `lname_th`, `fname_en`, `lname_en`, `date_of_birth`, `ethnicity`, `nationality`, `religion`, `blood_type`, `congenital_disease`, `height`, `weight`, `id_card`, `address`, `phone`, `email`, `ayear_id`, `level_id`, `major_id`, `remark`, `image_transcript`, `image_id_card`, `image_house_registration`, `create_by`, `create_date`, `update_date`) VALUES
	(1, 9, NULL, 2, 'นุสบา', 'ระยอง', 'nussaba', 'rayong', '1996-10-02', 'ไทย', 'ไทย', '-', 'A', NULL, 160, 60, '1222222000000', 'ระยอง', '0897867564', 'aaa@aaa.com', 1, 1, 3, NULL, NULL, NULL, NULL, NULL, '2022-10-03 00:32:12', '2022-10-03 00:32:12'),
	(3, 1, '16645638251976.png', 2, 'RtgqEIjApj', 'u9gkuKdjy0', 'rfGK4gJqsb', 'F14UPU4cUU', '2022-09-07', 'VLRY4PJDqG', 'fpFAmhaCKH', 'vG5Jdws9ew', 'QVvsS5MLyk', '8WpymaHH3M', 374572, 855, '432403', 's0aeu4CEes', '592600', 'qqq@ccc.com', 1, 2, 2, 'hJeu85FSQx', '16645638251945.pdf', '16645638251966.txt', '16645638251956.jpg', 1, '2022-10-03 00:04:58', '2022-10-03 00:32:09'),
	(4, 1, '16645647037444.png', 1, '1112', '111', '11', '11', '2011-11-11', '11', '11', '11', '11', '11', 11, 11, '11', '111', '11', '11@ccc.com', 2, 2, 2, '11', '16645649440049.jpg', '16645647037432.png', '16645647037419.jpg', 1, '2022-10-03 00:19:36', '2022-10-03 00:32:08'),
	(6, 4, '16645661264268.jpg', 2, 'ry1BAgqblz', 'dmonezKhiT', 'fh9OrTFggZ', 'NkYQ5nS15z', '2022-09-07', 'gaIEamH1lN', 'PVFgU2KXHN', 'Rf1YeBPtbV', 'WFiyNKRodC', 'aGt6QvZfEC', 748455, 444203, '936201', '3QLDJtdgRk', '567655', 'zzz@ccc.com', 2, 2, 1, '0OL4rTP3dc', '16645661264245.JPG', '16645661264260.PNG', '16645661264251.JPG', 4, '2022-10-03 00:43:19', NULL),
	(8, 4, '16645679233013.JPG', 1, 'VDfGzxHbcL', 'GYyQTWrkxo', 'lAqaGpxsZB', 'gnXyOpVxPP', '2022-09-07', '5D5hhhkmET', '6zMqnN5EQy', '8SKcoK39w6', 'ZvHITDcMUG', 'bIGUOWcWx2', 658943, 811798, '207474', 'ergnImqu9U', '123', 'eee@eee.com', 1, 1, 3, '2fkIlp2XJd', '16645679232977.JPG', '16645679232997.JPG', '16645679232984.JPG', 4, '2022-10-03 01:13:16', NULL),
	(9, 4, '16645683916249.JPG', 1, 'x5Ck2Ni1Cx', '1NHyo4325R', '6ZtF4lYkWV', 'H2GKnpjiNc', '2022-09-07', 'QZunLL62RC', 'A5FVEA9Whp', 'VGQk0N3Buw', 'rAR9yjGnjW', 'pWGyF8eYJS', 550880, 184911, '612085', '5h09KivAFT', '123', 'eee2@eee.com', 1, 2, 2, 'jUBePjzg1o', '16645683916210.JPG', '16645683916235.jpg', '16645683916218.jpg', 4, '2022-10-03 01:21:05', NULL),
	(10, 4, '16645685158435.JPG', 1, 'NKJE82Djzf', 'GD72DsFp1A', 'dKsEMhQuwZ', 'aeEhazq4xC', '2022-09-07', '9qOFRGmoX8', 'F2FRkthKpy', 'WrIRK0dwlb', 'OZXbE3HC19', '4l9Zu6tdZL', 917602, 827181, '328616', 'RfWGBzjBSo', '123', 'eee3@eee.com', 1, 2, 2, 'tmNc5FTBcN', '16645685158406.JPG', '16645685158427.JPG', '16645685158414.jpg', 4, '2022-10-03 01:23:09', NULL),
	(11, 16, '16645687963743.jpg', 2, 's2jG0a2lzu', 'aw7FYgkbSM', 'KvQeWjZzQp', 'xrtuqf4ayR', '2022-09-07', 'apndqTYR3x', 'HnGr0WOtq1', 'gmcZDmLL8p', 'HHqsD20Mt4', 'nLgCl1Tqd0', 548419, 637619, '184378', 'gcvHKtT3n4', '123', 'eee4@eee.com', 2, 1, 3, 'c4BF7lodsK', '16645687963713.JPG', '16645687963733.JPG', '16645687963722.JPG', 4, '2022-10-03 01:27:49', NULL),
	(12, 17, '16645693045337.JPG', 1, '8OUcojVgep', 'TmsCjo8fDY', 'ePQVotuvFs', 'g0IiAoVSa4', '2022-09-07', 'ZyjUT86dLV', 'Y7nzgu02pj', 'BncaB1DE9J', 'DSIA4yNdnA', 'nxFV3Msoli', 373346, 75658, '364350', '1rCiiAVdXG', '123', 'eee5@eee.com', 1, 2, 2, 'L1OSA01GH1', '16645693047228.jpg', '16645693047270.jpg', '16645693047246.JPG', 4, '2022-10-03 01:36:18', NULL),
	(13, 18, '16645693595063.JPG', 2, 'Mx2628lPLN', 'cBVECHNsEb', 'usBSd3dN5Z', 'zUUM5iKQSz', '2022-09-07', 'MgnXrix2hK', 'U0Tv8jhJiG', 'WqmcVisR9d', 'Z90fairzEH', 'JysGUma7Z4', 124432, 623252, '045557', 'WKuweGyz4b', '123', 'eee6@eee.com', 1, 1, 3, 'WKtf6nP2G0', '16645693596201.JPG', '16645693596225.JPG', '16645693596210.JPG', 4, '2022-10-03 01:37:13', NULL);

-- Dumping structure for table enroll.level
CREATE TABLE IF NOT EXISTS `level` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(10) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table enroll.level: ~2 rows (approximately)
DELETE FROM `level`;
INSERT INTO `level` (`id`, `code`, `name`) VALUES
	(1, 'ปวช', 'ประกาศนียบัตรวิชาชีพ'),
	(2, 'ปวส', 'ประกาศนียบัตรวิชาชีพชั้นสูง');

-- Dumping structure for table enroll.major
CREATE TABLE IF NOT EXISTS `major` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `level_id` int(11) unsigned DEFAULT NULL,
  `code` varchar(10) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table enroll.major: ~5 rows (approximately)
DELETE FROM `major`;
INSERT INTO `major` (`id`, `level_id`, `code`, `name`) VALUES
	(1, 2, 'สคธ', 'คอม'),
	(2, 2, 'สทส', 'สาระ'),
	(3, 1, 'ชคธ', 'คอม'),
	(4, 1, 'ชชย', 'ยน'),
	(5, 2, 'สยก', 'กล');

-- Dumping structure for table enroll.prefix
CREATE TABLE IF NOT EXISTS `prefix` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `th` varchar(100) DEFAULT NULL,
  `en` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table enroll.prefix: ~2 rows (approximately)
DELETE FROM `prefix`;
INSERT INTO `prefix` (`id`, `th`, `en`) VALUES
	(1, 'นาย', 'Mr.'),
	(2, 'นางสาว', 'Ms.');

-- Dumping structure for table enroll.role
CREATE TABLE IF NOT EXISTS `role` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `role` varchar(20) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table enroll.role: ~3 rows (approximately)
DELETE FROM `role`;
INSERT INTO `role` (`id`, `role`, `color`) VALUES
	(1, 'ผู้ดูแล', 'primary'),
	(2, 'เจ้าหน้าที่', 'info'),
	(3, 'นักศึกษา', 'secondary');

-- Dumping structure for table enroll.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(20) DEFAULT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `role` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table enroll.user: ~16 rows (approximately)
DELETE FROM `user`;
INSERT INTO `user` (`id`, `code`, `fname`, `lname`, `email`, `password`, `phone`, `image`, `role`) VALUES
	(1, '000', 'Admin', 'System', 'admin@enroll.com', '$2y$10$Kvuh6KEyAAoLTOKpuzykMemvOhGA7CrOtyyzDUezKpPuHOv2l.n7y', '000000000', '16587758265375.JPG', 1),
	(2, '001', 'aa', 'aa', 'aa@car.com', '$2y$10$Idh36PD3QcRhrjTCBvmKROU4YRBWsXnQ07e7GrKWxnrkAN/rbrbZm', '000000000', '16572296641265.JPG', 1),
	(4, '0002', 'bb', 'bb', 'bb@car.com', '$2y$10$N/p.0U8.Y7s1QAELEMMHG.7XaNCIIvExAgb4Kc3VfWkVDEQCvf5wW', '3082988339', 'avatar.png', 2),
	(6, 'yyy', 'yyy', 'yyy', 'yyy@car.com', '$2y$10$sBLTpGEIBHEgJMmnZc96sOMQUuQg3HPhPFupGK3ddCUKwh0ln/5XK', '8765169606', 'avatar.png', 2),
	(7, 'CXa00auYUS', 'Is1zXlufAs', 'KESEAHWxlc', 'xxx@enroll.com', '$2y$10$LIS1CSEA1YsB9F1LlejhCO7TpBRFKxe2WC3zCoMWJedfkKrEyir..', '0082541775', '16588087850462.JPG', 2),
	(8, 'Cd36eLlYXz', 'N99s5seLdD', '81ARR6QRtH', 'ppp@car.com', '$2y$10$PjPAz3s4.hOMq3lZ3Yalx.VszrTgHcGI0uv.VV5cPlfqBVNdxmjPC', '2774479444', 'avatar.png', 2),
	(9, NULL, 'ITcZPjOj7x', '1m5obQrwVV', 'aaa@aaa.com', '$2y$10$hAtSjWOFacsK7YPMUyf9LuSp5vo5eYf.NELIKM1fJBNAMCFidWFiq', '6741592443', 'avatar.png', 3),
	(10, NULL, 'JdvzWAIIRk', 'GeGVR2B23H', 'bbb@bbb.com', '$2y$10$gx8RmbwRYBlP3z.auYUjyeOPGVoDzqaq0KmR.h/KoLdmZ62ifVRHC', '5897983258', 'avatar.png', 3),
	(11, NULL, 'qP3OFUelSr', 'RFK4qVjgEm', 'ccc@ccc.com', '$2y$10$LB1HDO9audNQ18P7Y8PvbeIWOI8pzwUtWWLR57DmAL7LrsmCQVblS', '3193096654', 'avatar.png', 3),
	(12, 'zzz', 'GE3vAqwMat', '6e9qowbi9h', 'zzz@ccc.com', '$2y$10$yVh7vJeHTr2.Dib1FcFBnuikPxFkUBAk0/t3w5N3R/Bo2SooSuYW.', '3466322876', 'avatar.png', 2),
	(13, NULL, 'VDfGzxHbcL', 'GYyQTWrkxo', 'eee@eee.com', '$2y$10$nws4aH6QJRc2zg6YQh3KS.rTsCgerI7z8at/jG3ARvNXQXQeE2T0.', '123', 'avatar.png', 3),
	(14, NULL, 'x5Ck2Ni1Cx', '1NHyo4325R', 'eee2@eee.com', '$2y$10$JEvFiAyiYJDtBEH2CcDIS..s6yWQB8sBlPLFDAS4lz6U31HC7Ypbi', '123', '16645683915640.JPG', 3),
	(15, NULL, 'NKJE82Djzf', 'GD72DsFp1A', 'eee3@eee.com', '$2y$10$c8ND7W1a1DYBHfBvfcW50.ZFDsFOuaKEESay/cFbDbNRzJMBp2Zfi', '123', '16645685158366.JPG', 3),
	(16, NULL, 's2jG0a2lzu', 'aw7FYgkbSM', 'eee4@eee.com', '$2y$10$FE33RXwsy5nVmKqRMkCOUO5ovJxYq6M5oMRWtkjCKf2EpavfXn3n2', '123', '16645687963663.jpg', 3),
	(17, NULL, '8OUcojVgep', 'TmsCjo8fDY', 'eee5@eee.com', '$2y$10$v.UiQZAPaaE0sWx7IarAI.diZF1rKuwgYbqM6.x9/kJyEXuf.x.x.', '123', '', 3),
	(18, NULL, 'Mx2628lPLN', 'cBVECHNsEb', 'eee6@eee.com', '$2y$10$YGw8/76ntefQU2nZRnqq4.5h3q9WA86OKYE6KSebtpImov1ftyHnm', '123', '16645693595063.JPG', 3);

-- Dumping structure for view enroll.view_enroll
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `view_enroll` (
	`id` INT(11) NOT NULL,
	`user_id` INT(11) NULL,
	`image_profile` VARCHAR(50) NULL COLLATE 'utf8mb4_general_ci',
	`prefix_id` TINYINT(4) NULL,
	`fname_th` VARCHAR(100) NULL COLLATE 'utf8mb4_general_ci',
	`lname_th` VARCHAR(100) NULL COLLATE 'utf8mb4_general_ci',
	`fname_en` VARCHAR(100) NULL COLLATE 'utf8mb4_general_ci',
	`lname_en` VARCHAR(100) NULL COLLATE 'utf8mb4_general_ci',
	`date_of_birth` DATE NULL,
	`ethnicity` VARCHAR(50) NULL COMMENT 'เชื้อชาติ' COLLATE 'utf8mb4_general_ci',
	`nationality` VARCHAR(50) NULL COMMENT 'สัญชาติ' COLLATE 'utf8mb4_general_ci',
	`religion` VARCHAR(50) NULL COMMENT 'ศาสนา' COLLATE 'utf8mb4_general_ci',
	`blood_type` VARCHAR(50) NULL COMMENT 'หมู่เลือด' COLLATE 'utf8mb4_general_ci',
	`congenital_disease` VARCHAR(100) NULL COMMENT 'โรคประจำตัว' COLLATE 'utf8mb4_general_ci',
	`height` FLOAT NULL,
	`weight` FLOAT NULL,
	`id_card` VARCHAR(13) NULL COLLATE 'utf8mb4_general_ci',
	`address` TEXT NULL COLLATE 'utf8mb4_general_ci',
	`phone` VARCHAR(50) NULL COLLATE 'utf8mb4_general_ci',
	`email` VARCHAR(100) NULL COLLATE 'utf8mb4_general_ci',
	`ayear_id` INT(11) NULL,
	`level_id` INT(11) NULL,
	`major_id` INT(11) NULL,
	`remark` TEXT NULL COLLATE 'utf8mb4_general_ci',
	`image_transcript` VARCHAR(50) NULL COLLATE 'utf8mb4_general_ci',
	`image_id_card` VARCHAR(50) NULL COLLATE 'utf8mb4_general_ci',
	`image_house_registration` VARCHAR(50) NULL COLLATE 'utf8mb4_general_ci',
	`create_by` INT(11) NULL,
	`create_date` DATETIME NULL,
	`update_date` DATETIME NULL,
	`th` VARCHAR(100) NULL COLLATE 'utf8mb4_general_ci',
	`en` VARCHAR(100) NULL COLLATE 'utf8mb4_general_ci',
	`ayear_name` SMALLINT(4) UNSIGNED NULL,
	`level_code` VARCHAR(10) NULL COLLATE 'utf8mb4_general_ci',
	`level_name` VARCHAR(255) NULL COLLATE 'utf8mb4_general_ci',
	`major_code` VARCHAR(10) NULL COLLATE 'utf8mb4_general_ci',
	`major_name` VARCHAR(255) NULL COLLATE 'utf8mb4_general_ci'
) ENGINE=MyISAM;

-- Dumping structure for view enroll.view_user
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `view_user` (
	`id` INT(11) UNSIGNED NOT NULL,
	`code` VARCHAR(20) NULL COLLATE 'utf8mb4_general_ci',
	`fname` VARCHAR(100) NULL COLLATE 'utf8mb4_general_ci',
	`lname` VARCHAR(100) NULL COLLATE 'utf8mb4_general_ci',
	`email` VARCHAR(100) NULL COLLATE 'utf8mb4_general_ci',
	`password` VARCHAR(100) NULL COLLATE 'utf8mb4_general_ci',
	`phone` VARCHAR(50) NULL COLLATE 'utf8mb4_general_ci',
	`image` VARCHAR(50) NULL COLLATE 'utf8mb4_general_ci',
	`role` TINYINT(4) NULL,
	`fullname` VARCHAR(201) NULL COLLATE 'utf8mb4_general_ci',
	`role_name` VARCHAR(20) NULL COLLATE 'utf8mb4_general_ci',
	`color` VARCHAR(20) NULL COLLATE 'utf8mb4_general_ci'
) ENGINE=MyISAM;

-- Dumping structure for view enroll.view_enroll
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `view_enroll`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `view_enroll` AS SELECT a.*, b.th, b.en, c.name AS ayear_name, d.code AS level_code, d.name AS level_name, e.code AS major_code, e.name AS major_name
FROM enroll a
LEFT JOIN prefix b ON b.id = a.prefix_id
LEFT JOIN academic_year c ON c.id = a.ayear_id
LEFT JOIN `level` d ON d.id = a.`level_id`
LEFT JOIN `major` e ON e.id = a.major_id ;

-- Dumping structure for view enroll.view_user
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `view_user`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `view_user` AS SELECT `a`.`id` AS `id`, `a`.`code` AS `code`, `a`.`fname` AS `fname`, `a`.`lname` AS `lname`, `a`.`email` AS `email`, `a`.`password` AS `password`, `a`.`phone` AS `phone`, `a`.`image` AS `image`, `a`.`role` AS `role`, CONCAT(`a`.`fname`,' ',`a`.`lname`) AS `fullname`, `d`.`role` AS `role_name`, `d`.`color` AS `color`
FROM `user` `a`
LEFT JOIN `role` `d` ON `d`.`id` = `a`.`role` ;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
