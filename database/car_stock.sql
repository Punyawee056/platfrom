-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2022 at 04:21 AM
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
-- Database: `car_stock`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `id` int(11) UNSIGNED NOT NULL,
  `code` varchar(10) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`id`, `code`, `name`) VALUES
(1, '1001', 'asdfvsddd'),
(2, '1002', 'lPnUYdQd6M');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `id` int(10) UNSIGNED NOT NULL,
  `import_date` date DEFAULT NULL COMMENT 'วันที่รถลง',
  `serial_no` varchar(50) DEFAULT NULL COMMENT 'เลขเครื่อง',
  `mc_no` varchar(50) DEFAULT NULL COMMENT 'เลขตัวถัง',
  `dealer_id` int(11) DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `model_desc_id` int(11) DEFAULT NULL,
  `color_id` int(11) DEFAULT NULL,
  `floorplan_id` int(11) DEFAULT NULL,
  `tmc_id` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL COMMENT 'ราคารวม vat',
  `aging` varchar(50) DEFAULT NULL,
  `aging_rank` varchar(50) DEFAULT NULL,
  `ym_key` varchar(50) DEFAULT NULL COMMENT 'ปีเดือนที่เพิ่มข้อมูล',
  `create_by` int(10) UNSIGNED DEFAULT NULL COMMENT 'คีย์ลงระบบโดย',
  `create_date` datetime DEFAULT NULL COMMENT 'วันที่คีย์ลงระบบ',
  `update_date` datetime DEFAULT NULL COMMENT 'วันที่อัปเดต',
  `branch_id` int(11) DEFAULT NULL,
  `key_sale_by` int(11) DEFAULT NULL COMMENT 'คีย์ขายโดย',
  `key_sale_date` datetime DEFAULT NULL COMMENT 'วันที่คีย์ขาย',
  `sale_date` datetime DEFAULT NULL COMMENT 'วันที่ขาย',
  `buy_date` date DEFAULT NULL COMMENT 'วันที่ซื้อ',
  `buy_by` varchar(255) DEFAULT NULL COMMENT 'ชื่อคนที่ซื้อ',
  `status` varchar(50) DEFAULT NULL COMMENT 'สถานะ',
  `paid` float DEFAULT NULL COMMENT 'ชำระแล้ว',
  `delivery_date` date DEFAULT NULL COMMENT 'กำหนดส่งมอบ',
  `remark` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `import_date`, `serial_no`, `mc_no`, `dealer_id`, `location_id`, `model_id`, `model_desc_id`, `color_id`, `floorplan_id`, `tmc_id`, `price`, `aging`, `aging_rank`, `ym_key`, `create_by`, `create_date`, `update_date`, `branch_id`, `key_sale_by`, `key_sale_date`, `sale_date`, `buy_date`, `buy_by`, `status`, `paid`, `delivery_date`, `remark`) VALUES
(1, '2022-07-29', '111', '222', 2, 7, 1, 6, 6, 1, 1, 999000, 'wwww', 'qqqq', NULL, 1, '2022-07-28 05:04:29', '2022-07-28 09:03:52', 1, 2, '2022-07-28 05:04:32', '2022-07-28 05:04:53', '2022-07-28', 'stttttt', 'ขายแล้ว', 50000, '2022-08-07', 'sdfgsg'),
(2, '2022-07-28', 'PVWWDuaXd5', 'PNfyg3fR2k', 1, 3, 2, 4, 8, NULL, 1, 332766, 'Cd6BI65kRO', 'P9slAUBKPA', '2022-07', 1, '2022-07-28 06:12:43', '2022-07-28 09:16:52', 2, 1, '2022-07-28 09:16:52', NULL, NULL, 'wwwwwwwwwww', 'จอง', 55000, '2022-08-03', '5ff4HSxvzeghjghjghj'),
(4, '2022-07-30', 'QX2EBXrtoJ', 'UQV1hhZOnb', 2, 8, 1, 3, 4, NULL, 1, 471787, 'Hdm9vH6Dck', 'A09qTB2cnq', '2022-07', 1, '2022-07-28 08:39:55', '2022-07-28 08:44:03', 0, NULL, NULL, NULL, NULL, NULL, 'ว่าง', 0, '0000-00-00', 'รายละเอียด หรือ หมายเหตุ :');

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `id` int(11) UNSIGNED NOT NULL,
  `code` varchar(10) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `model_desc_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`id`, `code`, `name`, `model_desc_id`) VALUES
(1, 'rd', 'แดง', NULL),
(2, 'pk', 'ชมพู', NULL),
(4, '0001', 'ส้ม', 3),
(5, '0002', 'เทา', 3),
(6, '0001', 'ส้ม', 6),
(7, '0003', 'แดง', 6),
(8, '0001', 'ส้ม', 4),
(9, '0004', 'บรอน', 4);

-- --------------------------------------------------------

--
-- Table structure for table `dealer`
--

CREATE TABLE `dealer` (
  `id` int(11) UNSIGNED NOT NULL,
  `code` varchar(10) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dealer`
--

INSERT INTO `dealer` (`id`, `code`, `name`) VALUES
(1, '101', 'aaarrrrr'),
(2, '102', 'bbb'),
(3, '000', 'PzhefPNurS');

-- --------------------------------------------------------

--
-- Table structure for table `floorplan`
--

CREATE TABLE `floorplan` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `floorplan`
--

INSERT INTO `floorplan` (`id`, `name`) VALUES
(1, 'ตัดสด'),
(2, 'IQjAD3zxuy');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) UNSIGNED NOT NULL,
  `dealer_id` int(11) UNSIGNED NOT NULL,
  `code` varchar(10) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `dealer_id`, `code`, `name`) VALUES
(3, 1, '10101', 'dvf'),
(4, 1, '10102', 'wsrgerh'),
(7, 2, '10201', 'wsedfsdf'),
(8, 2, '10202', 'wedfweg');

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

CREATE TABLE `model` (
  `id` int(11) UNSIGNED NOT NULL,
  `code` varchar(10) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `model`
--

INSERT INTO `model` (`id`, `code`, `name`) VALUES
(1, 'md001', 'mmmmmaaaaa'),
(2, 'md002', 'sdfgsdg');

-- --------------------------------------------------------

--
-- Table structure for table `model_desc`
--

CREATE TABLE `model_desc` (
  `id` int(11) UNSIGNED NOT NULL,
  `model_id` int(11) UNSIGNED NOT NULL,
  `code` varchar(10) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `model_desc`
--

INSERT INTO `model_desc` (`id`, `model_id`, `code`, `name`) VALUES
(3, 1, 'wALuk3', 'CI3296N58c2'),
(4, 2, 'RbcvrvJVxB', 'dVHv4hQPQx'),
(5, 2, 'JtqEHMtLz8', 'WRPaA2VBDr'),
(6, 1, 'JP6KXVZS06', 'FgDElrmqDu');

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
-- Table structure for table `tmc`
--

CREATE TABLE `tmc` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tmc`
--

INSERT INTO `tmc` (`id`, `name`) VALUES
(1, 'InStock'),
(2, 'Outstock');

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
  `dealer_id` int(11) UNSIGNED DEFAULT NULL,
  `location_id` int(11) UNSIGNED DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `code`, `fname`, `lname`, `email`, `password`, `phone`, `image`, `dealer_id`, `location_id`, `role`) VALUES
(1, '000', 'Admin', 'System', 'admin@car.com', '$2y$10$Kvuh6KEyAAoLTOKpuzykMemvOhGA7CrOtyyzDUezKpPuHOv2l.n7y', '000000000', '16587758265375.JPG', NULL, NULL, '1'),
(2, '001', 'aa', 'aa', 'aa@car.com', '$2y$10$Idh36PD3QcRhrjTCBvmKROU4YRBWsXnQ07e7GrKWxnrkAN/rbrbZm', '000000000', '16572296641265.JPG', 0, 0, '1'),
(4, '0002', 'bb', 'bb', 'bb@car.com', '$2y$10$N/p.0U8.Y7s1QAELEMMHG.7XaNCIIvExAgb4Kc3VfWkVDEQCvf5wW', '3082988339', 'avatar.png', 2, 7, '2'),
(6, 'NsCxvaZGJr', '6Y38pQ0jhK', 'NgOWKXz4gg', 'yyy@car.com', '$2y$10$sBLTpGEIBHEgJMmnZc96sOMQUuQg3HPhPFupGK3ddCUKwh0ln/5XK', '8765169606', 'avatar.png', 1, 4, '2'),
(7, 'CXa00auYUS', 'Is1zXlufAs', 'KESEAHWxlc', 'xxx@car.com', '$2y$10$LIS1CSEA1YsB9F1LlejhCO7TpBRFKxe2WC3zCoMWJedfkKrEyir..', '0082541775', '16588087850462.JPG', 1, 3, '2'),
(8, 'Cd36eLlYXz', 'N99s5seLdD', '81ARR6QRtH', 'ppp@car.com', '$2y$10$PjPAz3s4.hOMq3lZ3Yalx.VszrTgHcGI0uv.VV5cPlfqBVNdxmjPC', '2774479444', 'avatar.png', 3, 0, '2');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_car`
-- (See below for the actual view)
--
CREATE TABLE `view_car` (
`id` int(10) unsigned
,`import_date` date
,`serial_no` varchar(50)
,`mc_no` varchar(50)
,`dealer_id` int(11)
,`location_id` int(11)
,`model_id` int(11)
,`model_desc_id` int(11)
,`color_id` int(11)
,`floorplan_id` int(11)
,`tmc_id` int(11)
,`price` float
,`aging` varchar(50)
,`aging_rank` varchar(50)
,`ym_key` varchar(50)
,`create_by` int(10) unsigned
,`create_date` datetime
,`update_date` datetime
,`key_sale_by` int(11)
,`branch_id` int(11)
,`key_sale_date` datetime
,`sale_date` datetime
,`buy_date` date
,`buy_by` varchar(255)
,`status` varchar(50)
,`paid` float
,`delivery_date` date
,`remark` text
,`dealer` varchar(268)
,`location` varchar(268)
,`model` varchar(268)
,`model_desc` varchar(268)
,`color` varchar(268)
,`floorplan` varchar(255)
,`tmc` varchar(255)
,`create_by_name` varchar(201)
,`key_sale_by_name` varchar(201)
,`branch` varchar(268)
,`age` int(5)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_user`
-- (See below for the actual view)
--
CREATE TABLE `view_user` (
`id` int(11) unsigned
,`code` varchar(20)
,`fname` varchar(100)
,`lname` varchar(100)
,`email` varchar(100)
,`password` varchar(100)
,`phone` varchar(50)
,`image` varchar(50)
,`dealer_id` int(11) unsigned
,`location_id` int(11) unsigned
,`role` varchar(20)
,`fullname` varchar(201)
,`dealer` varchar(268)
,`location` varchar(268)
,`role_name` varchar(20)
,`color` varchar(20)
);

-- --------------------------------------------------------

--
-- Structure for view `view_car`
--
DROP TABLE IF EXISTS `view_car`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_car`  AS SELECT `a`.`id` AS `id`, `a`.`import_date` AS `import_date`, `a`.`serial_no` AS `serial_no`, `a`.`mc_no` AS `mc_no`, `a`.`dealer_id` AS `dealer_id`, `a`.`location_id` AS `location_id`, `a`.`model_id` AS `model_id`, `a`.`model_desc_id` AS `model_desc_id`, `a`.`color_id` AS `color_id`, `a`.`floorplan_id` AS `floorplan_id`, `a`.`tmc_id` AS `tmc_id`, `a`.`price` AS `price`, `a`.`aging` AS `aging`, `a`.`aging_rank` AS `aging_rank`, `a`.`ym_key` AS `ym_key`, `a`.`create_by` AS `create_by`, `a`.`create_date` AS `create_date`, `a`.`update_date` AS `update_date`, `a`.`key_sale_by` AS `key_sale_by`, `a`.`branch_id` AS `branch_id`, `a`.`key_sale_date` AS `key_sale_date`, `a`.`sale_date` AS `sale_date`, `a`.`buy_date` AS `buy_date`, `a`.`buy_by` AS `buy_by`, `a`.`status` AS `status`, `a`.`paid` AS `paid`, `a`.`delivery_date` AS `delivery_date`, `a`.`remark` AS `remark`, concat(`b`.`code`,' : ',`b`.`name`) AS `dealer`, concat(`c`.`code`,' : ',`c`.`name`) AS `location`, concat(`d`.`code`,' : ',`d`.`name`) AS `model`, concat(`e`.`code`,' : ',`e`.`name`) AS `model_desc`, concat(`f`.`code`,' : ',`f`.`name`) AS `color`, `g`.`name` AS `floorplan`, `h`.`name` AS `tmc`, `i`.`fullname` AS `create_by_name`, `j`.`fullname` AS `key_sale_by_name`, concat(`k`.`code`,' : ',`k`.`name`) AS `branch`, year(current_timestamp()) - year(`a`.`import_date`) AS `age` FROM ((((((((((`car` `a` left join `dealer` `b` on(`b`.`id` = `a`.`dealer_id`)) left join `location` `c` on(`c`.`id` = `a`.`location_id`)) left join `model` `d` on(`d`.`id` = `a`.`model_id`)) left join `model_desc` `e` on(`e`.`id` = `a`.`model_desc_id`)) left join `color` `f` on(`f`.`id` = `a`.`color_id`)) left join `floorplan` `g` on(`g`.`id` = `a`.`floorplan_id`)) left join `tmc` `h` on(`h`.`id` = `a`.`tmc_id`)) left join `view_user` `i` on(`i`.`id` = `a`.`create_by`)) left join `view_user` `j` on(`j`.`id` = `a`.`key_sale_by`)) left join `branch` `k` on(`k`.`id` = `a`.`branch_id`))  ;

-- --------------------------------------------------------

--
-- Structure for view `view_user`
--
DROP TABLE IF EXISTS `view_user`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_user`  AS SELECT `a`.`id` AS `id`, `a`.`code` AS `code`, `a`.`fname` AS `fname`, `a`.`lname` AS `lname`, `a`.`email` AS `email`, `a`.`password` AS `password`, `a`.`phone` AS `phone`, `a`.`image` AS `image`, `a`.`dealer_id` AS `dealer_id`, `a`.`location_id` AS `location_id`, `a`.`role` AS `role`, concat(`a`.`fname`,' ',`a`.`lname`) AS `fullname`, concat(`b`.`code`,' : ',`b`.`name`) AS `dealer`, concat(`c`.`code`,' : ',`c`.`name`) AS `location`, `d`.`role` AS `role_name`, `d`.`color` AS `color` FROM (((`user` `a` left join `dealer` `b` on(`b`.`id` = `a`.`dealer_id`)) left join `location` `c` on(`c`.`id` = `a`.`location_id`)) left join `role` `d` on(`d`.`id` = `a`.`role`))  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `dealer`
--
ALTER TABLE `dealer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `floorplan`
--
ALTER TABLE `floorplan`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `model_desc`
--
ALTER TABLE `model_desc`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tmc`
--
ALTER TABLE `tmc`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `dealer`
--
ALTER TABLE `dealer`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `floorplan`
--
ALTER TABLE `floorplan`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `model`
--
ALTER TABLE `model`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `model_desc`
--
ALTER TABLE `model_desc`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tmc`
--
ALTER TABLE `tmc`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
