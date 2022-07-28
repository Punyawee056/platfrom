-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2022 at 12:14 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `opd`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) UNSIGNED NOT NULL,
  `code` varchar(10) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `code`, `name`) VALUES
(1, 'PD', 'ผลิต'),
(2, 'HR', 'บุคคล');

-- --------------------------------------------------------

--
-- Table structure for table `opd`
--

CREATE TABLE `opd` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `type_opd_id` int(11) UNSIGNED DEFAULT NULL,
  `slip` varchar(50) DEFAULT NULL,
  `price` float UNSIGNED DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `action_by` int(11) DEFAULT NULL,
  `action_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `opd`
--

INSERT INTO `opd` (`id`, `user_id`, `type_opd_id`, `slip`, `price`, `detail`, `year`, `create_date`, `status`, `action_by`, `action_date`) VALUES
(2, 1, 6, '16572292656692.jpg', 330, 'COPYRIGHT © 2022Rayong All, All rights Reserved', 2022, '2022-07-10 03:01:08', 'ไม่อนุมัติ', 1, '2022-07-10 03:22:45'),
(3, 2, 3, '16572297582031.jpg', 1880, 'Simply beautiful open source icons', 2022, '2022-07-10 03:01:08', 'รออนุมัติ', NULL, NULL),
(4, 2, 6, '16572297907945.JPG', 3300, '', 2022, '2022-07-10 03:01:08', 'อนุมัติ', 1, '2022-07-10 03:23:04'),
(5, 4, 6, '16572298626670.JPG', 980, 'Simply beautiful open source icons', 2022, '2022-07-10 03:01:08', 'อนุมัติ', 1, '2022-07-10 03:23:12'),
(6, 1, 6, '16572347679599.jpg', 660, '660', 2022, '2022-07-10 04:01:48', 'อนุมัติ', 1, '2022-07-10 04:04:08'),
(7, 1, 6, '16572347827581.jpg', 990, '990', 2022, '2022-07-10 04:02:02', 'อนุมัติ', 1, '2022-07-10 04:05:18'),
(8, 1, 6, '16572350075324.jpg', 50000, 'oo', 2022, '2022-07-10 04:05:47', 'ไม่อนุมัติ', 1, '2022-07-10 04:06:32'),
(9, 4, 4, '16572389845167.jpg', 20000, 'fgdfgn', 2022, '2022-07-10 05:12:04', 'อนุมัติ', 1, '2022-07-10 05:12:40');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) UNSIGNED NOT NULL,
  `role` varchar(20) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`, `color`) VALUES
(1, 'ผู้ดูแล', 'primary'),
(2, 'พนักงาน', 'info');

-- --------------------------------------------------------

--
-- Table structure for table `type_opd`
--

CREATE TABLE `type_opd` (
  `id` int(11) UNSIGNED NOT NULL,
  `type_opd` varchar(255) DEFAULT NULL,
  `financial_amount` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type_opd`
--

INSERT INTO `type_opd` (`id`, `type_opd`, `financial_amount`) VALUES
(2, 'Fast track', 30000),
(3, 'Walk in', 10000),
(4, 'Emergent', 300000),
(5, 'Urgent', 50000),
(6, 'Non Urgent', 30000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) UNSIGNED NOT NULL,
  `code` varchar(20) DEFAULT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `department_id` int(11) UNSIGNED DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `code`, `fname`, `lname`, `email`, `password`, `phone`, `image`, `department_id`, `role`) VALUES
(1, '000', 'Admin', 'OPD', 'admin@opd.com', '$2y$10$Kvuh6KEyAAoLTOKpuzykMemvOhGA7CrOtyyzDUezKpPuHOv2l.n7y', NULL, NULL, NULL, '1'),
(2, '001', 'aa', 'aa', 'aa@opd.com', '$2y$10$Idh36PD3QcRhrjTCBvmKROU4YRBWsXnQ07e7GrKWxnrkAN/rbrbZm', '000000000', '16572296641265.JPG', 2, '2'),
(4, '0002', 'bb', 'bb', 'bb@opd.com', '$2y$10$N/p.0U8.Y7s1QAELEMMHG.7XaNCIIvExAgb4Kc3VfWkVDEQCvf5wW', '3082988339', 'avatar.png', 1, '2');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_financial_amount`
-- (See below for the actual view)
--
CREATE TABLE `view_financial_amount` (
`id` int(11) unsigned
,`type_opd` varchar(255)
,`financial_amount` float
,`user_id` int(11) unsigned
,`sum_price` double
,`year` year(4)
,`remain` double
,`user_fullname` varchar(201)
,`department_name` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_opd`
-- (See below for the actual view)
--
CREATE TABLE `view_opd` (
`id` int(11) unsigned
,`user_id` int(11) unsigned
,`type_opd_id` int(11) unsigned
,`slip` varchar(50)
,`price` float unsigned
,`detail` text
,`year` year(4)
,`create_date` datetime
,`status` varchar(30)
,`action_by` int(11)
,`action_date` datetime
,`user_fullname` varchar(201)
,`department_name` varchar(255)
,`type_opd` varchar(255)
,`financial_amount` float
,`action_by_fullname` varchar(201)
);

-- --------------------------------------------------------

--
-- Structure for view `view_financial_amount`
--
DROP TABLE IF EXISTS `view_financial_amount`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_financial_amount`  AS SELECT `c`.`id` AS `id`, `c`.`type_opd` AS `type_opd`, `c`.`financial_amount` AS `financial_amount`, `c`.`user_id` AS `user_id`, `c`.`sum_price` AS `sum_price`, `c`.`year` AS `year`, `c`.`financial_amount`- `c`.`sum_price` AS `remain`, concat(`d`.`fname`,' ',`d`.`lname`) AS `user_fullname`, `f`.`name` AS `department_name` FROM (((select `a`.`id` AS `id`,`a`.`type_opd` AS `type_opd`,`a`.`financial_amount` AS `financial_amount`,`a`.`user_id` AS `user_id`,ifnull(sum(`b`.`price`),0) AS `sum_price`,`b`.`year` AS `year` from ((select `a`.`id` AS `id`,`a`.`type_opd` AS `type_opd`,`a`.`financial_amount` AS `financial_amount`,`b`.`id` AS `user_id` from (`type_opd` `a` join `user` `b`)) `a` left join `opd` `b` on(`b`.`user_id` = `a`.`user_id` and `b`.`type_opd_id` = `a`.`id` and `b`.`year` = year(current_timestamp()) and `b`.`status` = 'อนุมัติ')) group by `a`.`user_id`,`a`.`id`,`b`.`year`) `c` left join `user` `d` on(`d`.`id` = `c`.`user_id`)) left join `department` `f` on(`f`.`id` = `d`.`department_id`))  ;

-- --------------------------------------------------------

--
-- Structure for view `view_opd`
--
DROP TABLE IF EXISTS `view_opd`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_opd`  AS SELECT `a`.`id` AS `id`, `a`.`user_id` AS `user_id`, `a`.`type_opd_id` AS `type_opd_id`, `a`.`slip` AS `slip`, `a`.`price` AS `price`, `a`.`detail` AS `detail`, `a`.`year` AS `year`, `a`.`create_date` AS `create_date`, `a`.`status` AS `status`, `a`.`action_by` AS `action_by`, `a`.`action_date` AS `action_date`, concat(`b`.`fname`,' ',`b`.`lname`) AS `user_fullname`, `f`.`name` AS `department_name`, `c`.`type_opd` AS `type_opd`, `c`.`financial_amount` AS `financial_amount`, concat(`d`.`fname`,' ',`d`.`lname`) AS `action_by_fullname` FROM ((((`opd` `a` left join `user` `b` on(`b`.`id` = `a`.`user_id`)) left join `type_opd` `c` on(`c`.`id` = `a`.`type_opd_id`)) left join `user` `d` on(`d`.`id` = `a`.`action_by`)) left join `department` `f` on(`f`.`id` = `b`.`department_id`))  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opd`
--
ALTER TABLE `opd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_opd`
--
ALTER TABLE `type_opd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `opd`
--
ALTER TABLE `opd`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `type_opd`
--
ALTER TABLE `type_opd`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
