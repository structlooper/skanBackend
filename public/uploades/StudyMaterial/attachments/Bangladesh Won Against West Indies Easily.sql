-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2020 at 02:22 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_session_key` varchar(255) NOT NULL,
  `admin_remember_me_token` varchar(255) DEFAULT NULL,
  `admin_public_ip` varchar(255) DEFAULT NULL,
  `admin_lockscreen` tinyint(1) DEFAULT 0 COMMENT '0 - false, 1- true',
  `admin_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_password`, `admin_session_key`, `admin_remember_me_token`, `admin_public_ip`, `admin_lockscreen`, `admin_img`) VALUES
(1, 'admin', '$2y$10$EJ041.Jp4b9HyEGr4nLC.eTB86Mva0PDKgG72GNzysmBhom2955ZS', 'iAmAuthAdmin', '15e068459ce7961efe0480fbaaadcf32debe1e3e', '::1', 0, 'http://localhost/portfolio/uploads/admin_image/profileImage07092019023233716.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attendace_id` int(11) NOT NULL,
  `attendance_staff` int(11) NOT NULL,
  `attendance_date` varchar(255) NOT NULL,
  `attendance_status` int(11) NOT NULL COMMENT '1- present, 2-absent, 3-leave',
  `attendance_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `attendance_time_in` varchar(255) DEFAULT NULL,
  `attendance_time_out` varchar(255) DEFAULT NULL,
  `attendance_hours` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attendace_id`, `attendance_staff`, `attendance_date`, `attendance_status`, `attendance_timestamp`, `attendance_time_in`, `attendance_time_out`, `attendance_hours`) VALUES
(1, 32, '2019-12-17', 1, '2019-12-17 11:01:47', '09:00 AM', '07:20 PM', '10.33'),
(2, 1, '2019-12-17', 1, '2019-12-17 11:01:47', '04:00 PM', '08:00 PM', '0'),
(3, 33, '2019-12-17', 1, '2019-12-17 11:01:47', '10:10 AM', '07:00 PM', '8.83'),
(5, 32, '2019-12-16', 1, '2019-12-17 11:32:34', '09:00 AM', '11:33 AM', '437984'),
(6, 1, '2019-12-16', 3, '2019-12-17 11:32:34', '', '', '0'),
(7, 33, '2019-12-16', 2, '2019-12-17 11:32:34', '', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `beam`
--

CREATE TABLE `beam` (
  `beam_id` int(11) NOT NULL,
  `beam_machine_id` int(11) DEFAULT NULL,
  `beam_install_date` date DEFAULT NULL,
  `beam_length` decimal(25,2) DEFAULT NULL,
  `beam_length_red` decimal(25,2) DEFAULT NULL,
  `beam_weight` decimal(25,2) DEFAULT NULL,
  `beam_weight_red` decimal(25,2) DEFAULT NULL,
  `beam_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beam`
--

INSERT INTO `beam` (`beam_id`, `beam_machine_id`, `beam_install_date`, `beam_length`, `beam_length_red`, `beam_weight`, `beam_weight_red`, `beam_timestamp`) VALUES
(1, 2, '2020-01-20', '10000.00', '8349.00', '700.00', '700.00', '2020-01-28 11:40:03'),
(2, 4, '2020-01-20', '10000.00', '8202.00', '700.00', '700.00', '2020-01-28 11:41:45'),
(3, 3, '2020-01-20', '10000.00', '8354.00', '700.00', '700.00', '2020-01-28 11:42:13'),
(4, 6, '2020-01-20', '10000.00', '8951.00', '700.00', '700.00', '2020-01-28 11:42:32');

-- --------------------------------------------------------

--
-- Table structure for table `finishedgoods_stock`
--

CREATE TABLE `finishedgoods_stock` (
  `finishedgoods_stock_id` int(11) NOT NULL COMMENT 'table unique id',
  `finisged_goods_id` int(11) DEFAULT NULL COMMENT 'finished id from table goods',
  `fnished_goods_qty` int(25) DEFAULT NULL,
  `retinv_unique_fgoods` int(25) NOT NULL COMMENT 'unique id from  table returninventory',
  `finished_goods_created_on` date NOT NULL,
  `finished_goods_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finishedgoods_stock`
--

INSERT INTO `finishedgoods_stock` (`finishedgoods_stock_id`, `finisged_goods_id`, `fnished_goods_qty`, `retinv_unique_fgoods`, `finished_goods_created_on`, `finished_goods_timestamp`) VALUES
(1, 1, 5, 11, '2020-01-14', '2020-01-14 07:07:28'),
(2, 1, 5, 13, '2020-01-14', '2020-01-14 07:50:35');

-- --------------------------------------------------------

--
-- Table structure for table `goods`
--

CREATE TABLE `goods` (
  `goods_id` int(11) NOT NULL,
  `goods_name` varchar(255) DEFAULT NULL,
  `goods_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `goods`
--

INSERT INTO `goods` (`goods_id`, `goods_name`, `goods_timestamp`) VALUES
(1, 'Cloth', '2020-01-10 10:29:07'),
(3, 'Sample 1', '2020-01-10 11:15:05');

-- --------------------------------------------------------

--
-- Table structure for table `inventory_cat`
--

CREATE TABLE `inventory_cat` (
  `inventory_cat_id` int(11) NOT NULL,
  `inventory_category` varchar(255) DEFAULT NULL,
  `inventory_cat_desc` text DEFAULT NULL,
  `inventory_cat_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory_cat`
--

INSERT INTO `inventory_cat` (`inventory_cat_id`, `inventory_category`, `inventory_cat_desc`, `inventory_cat_timestamp`) VALUES
(1, 'Inventory Category 1', 'Lorem Ipsum is a dummy text', '2019-12-20 05:52:21'),
(2, 'Inventory Catgeory 2', 'Lorem Ipsum is a dummy text', '2019-12-20 06:01:24'),
(4, 'Inventory Catgeory 3', 'Lorem Ipsum is a dummy text', '2019-12-24 07:08:16'),
(5, 'Inventory Catgeory 4', 'qwertyuiop[', '2019-12-28 13:15:49'),
(6, 'New Category', 'Lorem Ipsum is a Dummy Text', '2020-01-06 04:49:34');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(11) NOT NULL,
  `item_vendor_id` int(11) NOT NULL,
  `item_purchase_order_id` int(11) DEFAULT NULL,
  `item_type` int(11) DEFAULT NULL COMMENT '1 - Consummable, 2 - Non-consummable',
  `item_inv_cat` int(11) DEFAULT NULL,
  `item_inventory` varchar(255) DEFAULT NULL,
  `item_quantity` varchar(255) DEFAULT NULL,
  `item_re_order` varchar(255) DEFAULT NULL,
  `item_free` varchar(255) DEFAULT NULL,
  `item_discount` varchar(255) DEFAULT NULL,
  `item_mrp` varchar(255) DEFAULT NULL,
  `item_rate` varchar(255) DEFAULT NULL,
  `item_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `item_vendor_id`, `item_purchase_order_id`, `item_type`, `item_inv_cat`, `item_inventory`, `item_quantity`, `item_re_order`, `item_free`, `item_discount`, `item_mrp`, `item_rate`, `item_timestamp`) VALUES
(1, 2, 4, 2, 2, 'qwerty', '437', '40', '0', '150000', '499', '359', '2019-12-23 08:11:23'),
(4, 2, 5, 1, 2, 'Sample 12', '970', '60', '75', '100000', '499', '299', '2019-12-23 13:14:05'),
(7, 2, 6, 2, 2, 'Sample 322', '280', '50', '50', '1000', '8', '5', '2019-12-24 07:31:47'),
(8, 2, 4, 2, 1, 'Item 1', '1000', '500', '30', '16000', '98', '78', '2020-01-03 05:52:16'),
(9, 4, 7, 1, 6, 'Pen', '99', '10', '10', '10', '5', '3.5', '2020-01-06 04:58:38');

-- --------------------------------------------------------

--
-- Table structure for table `machines`
--

CREATE TABLE `machines` (
  `machine_id` int(11) NOT NULL,
  `machine_model` varchar(255) DEFAULT NULL,
  `machine_title` varchar(255) DEFAULT NULL,
  `machine_dop` date DEFAULT NULL,
  `machine_type` int(11) DEFAULT NULL COMMENT '1 - Automatic, 2 - Manual',
  `machine_amount` varchar(255) DEFAULT NULL,
  `machine_dec` text DEFAULT NULL,
  `machine_consumption_type` int(11) DEFAULT NULL COMMENT '1 - Electric, 2 - Manual',
  `machine_unit` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `machines`
--

INSERT INTO `machines` (`machine_id`, `machine_model`, `machine_title`, `machine_dop`, `machine_type`, `machine_amount`, `machine_dec`, `machine_consumption_type`, `machine_unit`) VALUES
(2, 'SM-712', 'Sample Title', '2019-12-19', 1, '350000', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 1, 1.5),
(3, 'D-521', 'Sample Title 4', '2019-12-15', 1, '650000', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, 2.5),
(4, 'WW-84', 'Sample Title', '2019-12-13', 1, '460000', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 2, 50),
(6, 'A293', 'Sample Title 512', '2019-12-19', 1, '369000', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `machinestatus`
--

CREATE TABLE `machinestatus` (
  `machinestatus_id` int(11) NOT NULL,
  `mstatus_machine_id` int(11) NOT NULL,
  `mstatus_date` date DEFAULT NULL,
  `mstatus_stop_time` varchar(255) DEFAULT NULL,
  `mstatus_start_time` varchar(255) DEFAULT NULL,
  `mstatus_reason` int(1) DEFAULT NULL COMMENT '1 - Maintenance, 2 - Power Off',
  `mstatus_shift` int(1) DEFAULT NULL COMMENT '1 - Day, 2 - Night',
  `mstatus_work_id` int(11) DEFAULT NULL,
  `mstatus_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_rec`
--

CREATE TABLE `purchase_rec` (
  `pr_id` int(11) NOT NULL,
  `pr_invoice_no` int(50) NOT NULL,
  `pr_vendor_id` int(11) NOT NULL,
  `pr_purchaseorder_id` int(11) NOT NULL,
  `pr_payment_mode` varchar(255) DEFAULT NULL,
  `pr_invtotalamount` decimal(25,2) DEFAULT NULL,
  `pr_paid_amount` decimal(25,2) NOT NULL,
  `pr_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_rec`
--

INSERT INTO `purchase_rec` (`pr_id`, `pr_invoice_no`, `pr_vendor_id`, `pr_purchaseorder_id`, `pr_payment_mode`, `pr_invtotalamount`, `pr_paid_amount`, `pr_timestamp`) VALUES
(2, 10000, 2, 4, 'Online', '1135150.00', '1135150.00', '2019-12-28 07:24:31'),
(3, 10001, 2, 5, 'Online', '953975.00', '953975.00', '2019-12-28 07:24:50'),
(4, 10002, 4, 7, 'Online', '305.00', '305.00', '2020-01-06 04:59:19');

-- --------------------------------------------------------

--
-- Table structure for table `returninventory`
--

CREATE TABLE `returninventory` (
  `retinv_id` int(11) NOT NULL,
  `retinv_stck_issued_id` int(11) DEFAULT NULL,
  `retinv_inventory_cat` int(11) DEFAULT NULL,
  `retinv_item_id` int(11) DEFAULT NULL,
  `retinv_return_qty` int(25) DEFAULT NULL,
  `retinv_remarks` varchar(255) DEFAULT NULL,
  `retinv_issdate` date DEFAULT NULL,
  `retinv_wastage` int(25) DEFAULT NULL,
  `retinv_used` int(25) DEFAULT NULL,
  `retinv_fgood_id` int(11) DEFAULT NULL,
  `retinv_goods_qty` int(25) DEFAULT NULL,
  `unique_id_fgoods` int(11) NOT NULL DEFAULT 1,
  `retinv_return_date` date DEFAULT NULL,
  `retinv_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `returninventory`
--

INSERT INTO `returninventory` (`retinv_id`, `retinv_stck_issued_id`, `retinv_inventory_cat`, `retinv_item_id`, `retinv_return_qty`, `retinv_remarks`, `retinv_issdate`, `retinv_wastage`, `retinv_used`, `retinv_fgood_id`, `retinv_goods_qty`, `unique_id_fgoods`, `retinv_return_date`, `retinv_timestamp`) VALUES
(1, 15, 2, 1, 2, 'Goods Finished', NULL, 2, 16, NULL, NULL, 1, NULL, '2020-01-10 07:48:04'),
(2, 16, 2, 1, 1, 'Remarks', '1970-01-01', 1, 3, NULL, NULL, 1, '2020-01-10', '2020-01-10 07:53:47'),
(3, 10, 2, 1, 100, 'asdfg3ertyui', '2019-12-31', 50, 700, NULL, NULL, 1, '2020-01-10', '2020-01-10 07:55:11'),
(4, 24, 2, 1, 15, 'qwertyuiop', '2020-01-10', 10, 75, 1, 75, 1, '2020-01-14', '2020-01-14 04:45:53'),
(5, 25, 2, 7, 15, 'qwertyuiop', '2020-01-10', 10, 75, 1, 75, 1, '2020-01-14', '2020-01-14 04:45:53'),
(6, 24, 2, 1, 0, 'qexrcty', '2020-01-10', 0, 75, 1, 75, 2, '2020-01-14', '2020-01-14 06:33:02'),
(7, 25, 2, 7, 0, 'qexrcty', '2020-01-10', 0, 75, 1, 75, 3, '2020-01-14', '2020-01-14 06:33:02'),
(8, 24, 2, 1, 0, 'qwertyui', '2020-01-10', 0, 75, 1, 75, 4, '2020-01-14', '2020-01-14 06:39:35'),
(9, 25, 2, 7, 0, 'qwertyui', '2020-01-10', 0, 75, 1, 75, 5, '2020-01-14', '2020-01-14 06:39:35'),
(10, 24, 2, 1, 0, 'sedrctvyhu', '2020-01-10', 0, 30, 1, 30, 6, '2020-01-14', '2020-01-14 06:40:40'),
(11, 25, 2, 7, 0, 'sedrctvyhu', '2020-01-10', 0, 30, 1, 30, 7, '2020-01-14', '2020-01-14 06:40:40'),
(12, 24, 2, 1, 0, 'awe4rtb', '2020-01-10', 0, 10, 1, 10, 8, '2020-01-14', '2020-01-14 07:05:25'),
(13, 25, 2, 7, 0, 'awe4rtb', '2020-01-10', 0, 10, 1, 10, 9, '2020-01-14', '2020-01-14 07:05:25'),
(14, 24, 2, 1, 0, '', '2020-01-10', 0, 5, 1, 5, 10, '2020-01-14', '2020-01-14 07:07:28'),
(15, 25, 2, 7, 0, '', '2020-01-10', 0, 5, 1, 5, 11, '2020-01-14', '2020-01-14 07:07:28'),
(16, 24, 2, 1, 0, 'asdfghjk', '2020-01-10', 0, 5, 1, 5, 12, '2020-01-14', '2020-01-14 07:50:34'),
(17, 25, 2, 7, 0, 'asdfghjk', '2020-01-10', 0, 5, 1, 5, 13, '2020-01-14', '2020-01-14 07:50:35');

-- --------------------------------------------------------

--
-- Table structure for table `staff_member`
--

CREATE TABLE `staff_member` (
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(255) NOT NULL,
  `staff_mobile` varchar(255) DEFAULT NULL,
  `staff_email` varchar(255) DEFAULT NULL,
  `staff_gender` varchar(255) DEFAULT NULL,
  `staff_doj` date DEFAULT NULL,
  `staff_addr` varchar(255) DEFAULT NULL,
  `staff_desc` text DEFAULT NULL,
  `staff_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_member`
--

INSERT INTO `staff_member` (`staff_id`, `staff_name`, `staff_mobile`, `staff_email`, `staff_gender`, `staff_doj`, `staff_addr`, `staff_desc`, `staff_timestamp`) VALUES
(1, 'Deepak Arya', '7845124578', 'arya@email.com', 'Male', '2019-12-03', 'qwertyuio', 'Deepak Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '2019-12-16 05:30:50'),
(32, 'Anirudh Sharma', '9873562412', 'anirudh@gmail.com', 'Male', '2019-12-17', 'RZ-51, Uttam Nagar', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.f', '2019-12-17 04:07:05'),
(33, 'Manoj Ramalingam', '9868344628', 'manoj@gmaipl.com', 'Male', '2019-12-17', 'ko', 'op', '2019-12-17 04:10:36'),
(37, 'Aman Verma', '7845125623', 'aman@gmail.com', 'Male', '2019-12-19', 'wertyuio', 'qwertyuio', '2019-12-19 05:32:05'),
(38, 'Sandeep Singh', '6598659857', 'sandeepa@gmail.com', 'Male', '2020-01-28', 'qwertyu', 'wqertyu', '2020-01-28 11:24:22'),
(39, 'Mahendra Kumar', '9865329518', 'kumar@gmail.com', 'Male', '2020-01-28', 'qwertfgvyh', 'wertbguybnik', '2020-01-28 11:26:21'),
(40, 'Nitin', '6535265236', 'nitin@mail.com', 'Male', '2020-01-01', 'asdasd', 'asdasdas', '2020-01-28 11:50:04');

-- --------------------------------------------------------

--
-- Table structure for table `stockissues`
--

CREATE TABLE `stockissues` (
  `stckissue_id` int(11) UNSIGNED NOT NULL,
  `stck_staff_id` int(11) UNSIGNED DEFAULT NULL,
  `stck_inventory_cat_id` int(11) NOT NULL,
  `stck_item_id` int(11) DEFAULT NULL,
  `stck_quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stck_discount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stck_remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stck_total` decimal(25,2) DEFAULT NULL,
  `stck_receipt_no` int(11) DEFAULT NULL,
  `stck_status` tinyint(1) NOT NULL DEFAULT 1,
  `stck_created_by` int(11) UNSIGNED DEFAULT NULL,
  `stck_created_at` timestamp NULL DEFAULT current_timestamp(),
  `stck_updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stockissues`
--

INSERT INTO `stockissues` (`stckissue_id`, `stck_staff_id`, `stck_inventory_cat_id`, `stck_item_id`, `stck_quantity`, `stck_discount`, `stck_remarks`, `stck_total`, `stck_receipt_no`, `stck_status`, `stck_created_by`, `stck_created_at`, `stck_updated_at`) VALUES
(9, 33, 2, 1, '2000', '0', 'Remarks for two item', '999999.99', 2, 1, NULL, '2019-12-31 07:39:54', NULL),
(10, 30, 2, 1, '0', '0', 'Sample Remarks', '424150.00', 3, 1, NULL, '2019-12-31 07:41:02', NULL),
(11, 37, 2, 1, '0', '0', 'Remarks', '2495.00', 4, 1, NULL, '2019-12-31 07:59:06', NULL),
(12, 1, 2, 1, '0', '0', 'Remarks', '124750.00', 5, 1, NULL, '2020-01-03 05:37:22', NULL),
(13, 1, 2, 4, '280', '0', 'Remarks', '139720.00', 6, 1, NULL, '2020-01-03 05:38:20', NULL),
(14, 1, 1, 8, '50', '0', 'Remarks', '4900.00', 7, 1, NULL, '2020-01-03 05:53:46', NULL),
(15, 1, 2, 1, '0', '0', 'Remarks', '47405.00', 8, 1, NULL, '2020-01-03 12:34:25', NULL),
(16, 1, 2, 1, '0', '0', 'Remarks', '5988.00', 9, 1, NULL, '2020-01-06 04:25:52', NULL),
(17, 30, 6, 9, '1', '0', 'Remarks for pencil issue', '75.00', 10, 1, NULL, '2020-01-06 05:00:03', NULL),
(18, 1, 2, 4, '500', '0', 'Remarks for Inventory Issue', '249500.00', 11, 1, NULL, '2020-01-09 10:10:01', NULL),
(21, 1, 2, 1, '0', NULL, 'Remarks for Inventory Issue', NULL, NULL, 1, NULL, '2020-01-09 11:16:14', NULL),
(22, 1, 2, 8, '350', NULL, 'Issued to make something', NULL, NULL, 1, NULL, '2020-01-10 12:40:41', NULL),
(23, 1, 2, 4, '350', NULL, 'Issued to make something', NULL, NULL, 1, NULL, '2020-01-10 12:40:41', NULL),
(24, 1, 2, 1, '50', NULL, 'Issued to make something', NULL, NULL, 1, NULL, '2020-01-10 12:40:41', NULL),
(25, 1, 2, 7, '50', NULL, 'Issued to make something', NULL, NULL, 1, NULL, '2020-01-10 12:40:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `vendor_id` int(11) NOT NULL,
  `vendor_comp_name` varchar(255) DEFAULT NULL,
  `vendor_comp_phone` varchar(255) DEFAULT NULL,
  `vendor_comp_email` varchar(255) DEFAULT NULL,
  `vendor_comp_addr` varchar(255) DEFAULT NULL,
  `vendor_comp_country` varchar(255) DEFAULT NULL,
  `vendor_comp_state` varchar(255) DEFAULT NULL,
  `vendor_comp_city` varchar(255) DEFAULT NULL,
  `vendor_comp_pincode` varchar(255) DEFAULT NULL,
  `vendor_name` varchar(255) DEFAULT NULL,
  `vendor_phone` varchar(255) DEFAULT NULL,
  `vendor_addr` varchar(255) DEFAULT NULL,
  `vendor_bank_name` varchar(255) DEFAULT NULL,
  `vendor_branch_name` varchar(255) DEFAULT NULL,
  `vendor_account_no` varchar(255) DEFAULT NULL,
  `vendor_ifsc_code` varchar(255) DEFAULT NULL,
  `vendor_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`vendor_id`, `vendor_comp_name`, `vendor_comp_phone`, `vendor_comp_email`, `vendor_comp_addr`, `vendor_comp_country`, `vendor_comp_state`, `vendor_comp_city`, `vendor_comp_pincode`, `vendor_name`, `vendor_phone`, `vendor_addr`, `vendor_bank_name`, `vendor_branch_name`, `vendor_account_no`, `vendor_ifsc_code`, `vendor_timestamp`) VALUES
(2, 'Sample 1', '1234567890', 'sample@email.com', 'sample  sample', 'India', 'Delhi', 'New Delhi', '110079', 'Mohit Rai', '9865327415', 'Q-123 Address', 'Punjab National Bank', 'Gopi Nath', '0112666352698', 'PNB0112654', '2019-12-20 12:37:21'),
(3, 'XYZ Company', '01125663599', 'xyz@email.com', 'A-51 sample', 'India', 'Delhi', 'New Delhi', '110045', 'Rishabh Singh', '7845125698', 'Address', 'Central Bank of India', 'Rajapuri', '011254875996', 'CBI14251425', '2019-12-20 12:45:54'),
(4, 'Aveng pvt ltd', '25663566', 'aveng@gmail.com', 'S-210, That Location', 'India', 'Delhi', 'New Delhi', '110078', 'Manish ', '7845123571', 'Vendor Address', 'UCO Bank', 'Ramphal Chowk', '0112424258258', 'IFSC784512', '2020-01-06 04:54:02');

-- --------------------------------------------------------

--
-- Table structure for table `vend_purchase_order`
--

CREATE TABLE `vend_purchase_order` (
  `vpo_id` int(11) NOT NULL,
  `vpo_vendor_id` int(11) NOT NULL,
  `vpo_category` varchar(255) DEFAULT NULL,
  `vpo_date` date DEFAULT NULL,
  `vpo_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vend_purchase_order`
--

INSERT INTO `vend_purchase_order` (`vpo_id`, `vpo_vendor_id`, `vpo_category`, `vpo_date`, `vpo_timestamp`) VALUES
(4, 2, '1001', '2019-12-23', '2019-12-23 05:49:45'),
(5, 2, '1002', '2019-12-23', '2019-12-23 05:50:17'),
(6, 2, '1003', '2019-12-24', '2019-12-24 07:17:59'),
(7, 4, 'Stationary', '2020-01-06', '2020-01-06 04:54:41');

-- --------------------------------------------------------

--
-- Table structure for table `work_assign`
--

CREATE TABLE `work_assign` (
  `work_id` int(11) NOT NULL,
  `work_staff_id` int(11) NOT NULL,
  `work_machine_id` int(11) NOT NULL,
  `work_date` date DEFAULT NULL,
  `work_timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `work_beam_id` int(11) DEFAULT NULL,
  `work_shift` int(1) DEFAULT NULL COMMENT '1 - Day and 2 - Night',
  `work_cone_given` decimal(25,2) DEFAULT NULL,
  `work_meter` decimal(25,2) DEFAULT NULL,
  `work_wastage` decimal(25,2) DEFAULT NULL,
  `work_coneweight` decimal(25,2) DEFAULT NULL,
  `work_roll_weight` decimal(25,2) DEFAULT NULL,
  `work_used_cone_weight` decimal(25,2) DEFAULT NULL,
  `work_beam_bal` decimal(25,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work_assign`
--

INSERT INTO `work_assign` (`work_id`, `work_staff_id`, `work_machine_id`, `work_date`, `work_timestamp`, `work_beam_id`, `work_shift`, `work_cone_given`, `work_meter`, `work_wastage`, `work_coneweight`, `work_roll_weight`, `work_used_cone_weight`, `work_beam_bal`) VALUES
(1, 1, 2, '2020-01-20', '2020-01-29 04:39:55', 1, 1, '30.00', '121.00', '0.60', '21.00', '5.60', '9.00', '9879.00'),
(2, 32, 3, '2020-01-20', '2020-01-29 05:15:08', 3, 1, '30.00', '121.00', '0.60', '21.00', '5.60', '9.00', '9879.00'),
(3, 33, 4, '2020-01-20', '2020-01-29 04:45:22', 2, 1, '30.00', '121.00', '0.60', '21.00', '5.60', '9.00', '9879.00'),
(4, 37, 6, '2020-01-20', '2020-01-29 05:16:26', 4, 1, '30.00', '145.00', '0.60', '23.00', '5.60', '7.00', '9855.00'),
(5, 38, 2, '2020-01-20', '2020-01-29 05:17:08', 1, 2, '30.00', '105.00', '0.56', '23.00', '5.40', '7.00', '9774.00'),
(6, 39, 3, '2020-01-20', '2020-01-29 05:18:11', 3, 2, '30.00', '98.00', '0.61', '25.00', '5.34', '5.00', '9781.00'),
(7, 40, 4, '2020-01-20', '2020-01-29 05:18:37', 2, 2, '30.00', '89.00', '0.34', '21.00', '5.30', '9.00', '9790.00'),
(8, 1, 2, '2020-01-21', '2020-01-29 05:23:07', 1, 1, '32.00', '103.00', '0.60', '21.00', '5.40', '11.00', '9671.00'),
(9, 32, 3, '2020-01-21', '2020-01-29 05:24:22', 3, 1, '32.00', '98.00', '0.60', '24.00', '5.70', '8.00', '9683.00'),
(10, 33, 4, '2020-01-21', '2020-01-29 05:29:11', 2, 1, '32.00', '124.00', '0.45', '20.00', '5.60', '12.00', '9666.00'),
(11, 37, 6, '2020-01-21', '2020-01-29 05:30:36', 4, 1, '32.00', '78.00', '0.30', '21.00', '5.10', '11.00', '9777.00'),
(12, 38, 2, '2020-01-21', '2020-01-29 05:31:17', 1, 2, '32.00', '102.00', '0.67', '24.30', '6.20', '7.70', '9569.00'),
(13, 39, 3, '2020-01-21', '2020-01-29 05:33:51', 3, 2, '32.00', '56.00', '0.54', '26.00', '5.60', '6.00', '9627.00'),
(14, 40, 4, '2020-01-21', '2020-01-29 05:34:32', 2, 2, '32.00', '79.00', '0.45', '27.00', '5.30', '5.00', '9587.00'),
(15, 1, 2, '2020-01-22', '2020-01-29 05:53:55', 1, 1, '30.00', '142.00', '0.54', '18.00', '5.60', '12.00', '9427.00'),
(16, 32, 3, '2020-01-22', '2020-01-29 05:54:51', 3, 1, '30.00', '125.00', '0.54', '19.00', '5.32', '11.00', '9502.00'),
(17, 33, 4, '2020-01-22', '2020-01-29 05:56:01', 2, 1, '30.00', '123.00', '0.45', '17.00', '5.70', '13.00', '9464.00'),
(18, 37, 6, '2020-01-22', '2020-01-29 05:56:27', 4, 1, '30.00', '137.00', '0.45', '21.00', '6.35', '9.00', '9640.00'),
(19, 38, 2, '2020-01-22', '2020-01-29 05:57:51', 1, 2, '30.00', '124.00', '0.65', '21.00', '5.40', '9.00', '9303.00'),
(20, 39, 3, '2020-01-22', '2020-01-29 05:59:32', 3, 2, '30.00', '91.00', '0.61', '18.00', '5.40', '12.00', '9411.00'),
(21, 40, 4, '2020-01-22', '2020-01-29 06:00:08', 2, 2, '30.00', '84.00', '0.34', '24.00', '5.32', '6.00', '9380.00'),
(22, 1, 2, '2020-01-23', '2020-01-29 06:09:01', 1, 1, '30.00', '124.00', '0.45', '21.00', '5.40', '9.00', '9179.00'),
(23, 32, 3, '2020-01-23', '2020-01-29 06:09:24', 3, 1, '30.00', '134.00', '0.40', '21.00', '5.70', '9.00', '9277.00'),
(24, 33, 4, '2020-01-23', '2020-01-29 06:12:03', 2, 1, '30.00', '87.00', '0.64', '23.00', '5.40', '7.00', '9293.00'),
(25, 37, 6, '2020-01-23', '2020-01-29 06:13:07', 4, 1, '30.00', '110.00', '0.62', '19.00', '5.40', '11.00', '9530.00'),
(26, 38, 2, '2020-01-23', '2020-01-29 06:15:00', 1, 2, '30.00', '58.00', '0.45', '21.00', '5.67', '9.00', '9121.00'),
(27, 39, 3, '2020-01-23', '2020-01-29 06:15:59', 3, 2, '30.00', '98.00', '0.45', '18.00', '5.40', '12.00', '9179.00'),
(28, 40, 4, '2020-01-23', '2020-01-29 06:18:52', 2, 2, '30.00', '124.00', '0.35', '17.00', '5.70', '13.00', '9169.00'),
(29, 1, 2, '2020-01-24', '2020-01-29 06:26:29', 1, 1, '30.00', '78.00', '0.34', '15.00', '5.40', '15.00', '9043.00'),
(30, 32, 3, '2020-01-24', '2020-01-29 06:28:11', 3, 1, '30.00', '134.00', '0.45', '18.00', '5.80', '12.00', '9045.00'),
(31, 33, 4, '2020-01-24', '2020-01-29 06:29:54', 2, 1, '30.00', '145.00', '0.62', '18.00', '5.41', '12.00', '9024.00'),
(32, 37, 6, '2020-01-24', '2020-01-29 06:32:23', 4, 1, '30.00', '108.00', '0.54', '21.00', '5.60', '9.00', '9422.00'),
(33, 38, 2, '2020-01-24', '2020-01-29 06:33:30', 1, 2, '30.00', '89.00', '0.56', '18.00', '5.60', '12.00', '8954.00'),
(34, 39, 3, '2020-01-24', '2020-01-29 06:33:52', 3, 2, '30.00', '98.00', '0.34', '19.00', '5.64', '11.00', '8947.00'),
(35, 40, 4, '2020-01-24', '2020-01-29 06:35:37', 2, 2, '30.00', '124.00', '0.34', '22.00', '5.34', '8.00', '8900.00'),
(36, 1, 2, '2020-01-25', '2020-01-29 06:39:03', 1, 1, '30.00', '95.00', '0.65', '18.00', '6.50', '12.00', '8859.00'),
(37, 32, 3, '2020-01-25', '2020-01-29 06:39:45', 3, 1, '30.00', '124.00', '0.63', '15.00', '5.67', '15.00', '8823.00'),
(38, 33, 4, '2020-01-25', '2020-01-29 06:49:23', 2, 1, '30.00', '86.00', '0.45', '18.00', '5.40', '12.00', '8814.00'),
(39, 37, 6, '2020-01-25', '2020-01-29 06:51:06', 4, 1, '30.00', '151.00', '0.56', '18.00', '5.45', '12.00', '9271.00'),
(40, 38, 2, '2020-01-25', '2020-01-29 06:51:58', 1, 2, '30.00', '84.00', '0.56', '16.00', '5.47', '14.00', '8775.00'),
(41, 39, 3, '2020-01-25', '2020-01-29 06:53:53', 3, 2, '30.00', '57.00', '0.64', '17.00', '5.41', '13.00', '8766.00'),
(42, 40, 4, '2020-01-25', '2020-01-29 06:54:24', 2, 2, '30.00', '152.00', '0.56', '13.00', '5.67', '17.00', '8662.00'),
(43, 1, 2, '2020-01-27', '2020-01-29 07:10:50', 1, 1, '30.00', '122.00', '0.40', '13.00', '5.60', '17.00', '8653.00'),
(44, 32, 3, '2020-01-27', '2020-01-29 07:11:25', 3, 1, '30.00', '95.00', '0.47', '13.00', '5.60', '17.00', '8671.00'),
(45, 33, 4, '2020-01-27', '2020-01-29 07:11:57', 2, 1, '30.00', '78.00', '0.65', '13.00', '6.45', '17.00', '8584.00'),
(46, 37, 6, '2020-01-27', '2020-01-29 07:13:08', 4, 1, '30.00', '175.00', '0.54', '13.00', '5.47', '17.00', '9096.00'),
(47, 38, 2, '2020-01-27', '2020-01-29 07:13:47', 1, 2, '30.00', '59.00', '0.36', '13.00', '5.40', '17.00', '8594.00'),
(48, 39, 3, '2020-01-27', '2020-01-29 07:14:18', 3, 2, '30.00', '79.00', '0.40', '13.00', '5.84', '17.00', '8592.00'),
(49, 40, 4, '2020-01-27', '2020-01-29 07:14:32', 2, 2, '30.00', '134.00', '0.62', '13.00', '5.40', '17.00', '8450.00'),
(50, 1, 2, '2020-01-28', '2020-01-29 07:18:20', 1, 1, '34.00', '121.00', '0.65', '13.00', '5.60', '21.00', '8473.00'),
(51, 32, 3, '2020-01-28', '2020-01-29 07:18:52', 3, 1, '30.00', '121.00', '0.56', '13.00', '5.60', '17.00', '8471.00'),
(52, 33, 4, '2020-01-28', '2020-01-29 07:19:16', 2, 1, '32.00', '121.00', '0.66', '13.00', '5.40', '19.00', '8329.00'),
(53, 37, 6, '2020-01-28', '2020-01-29 07:19:34', 4, 1, '30.00', '145.00', '0.65', '13.00', '5.68', '17.00', '8951.00'),
(54, 38, 2, '2020-01-28', '2020-01-29 07:19:51', 1, 2, '32.00', '124.00', '0.54', '13.00', '5.70', '19.00', '8349.00'),
(55, 39, 3, '2020-01-28', '2020-01-29 07:20:06', 3, 2, '30.00', '117.00', '0.45', '13.00', '5.98', '17.00', '8354.00'),
(56, 40, 4, '2020-01-28', '2020-01-29 07:20:25', 2, 2, '30.00', '127.00', '0.54', '21.00', '6.40', '9.00', '8202.00'),
(57, 32, 2, '2020-03-02', '2020-03-02 04:19:03', 1, 1, '5.60', NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_session_key` (`admin_session_key`),
  ADD UNIQUE KEY `admin_name` (`admin_name`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attendace_id`),
  ADD KEY `attendance_staff` (`attendance_staff`);

--
-- Indexes for table `beam`
--
ALTER TABLE `beam`
  ADD PRIMARY KEY (`beam_id`),
  ADD KEY `beam_machine_id` (`beam_machine_id`);

--
-- Indexes for table `finishedgoods_stock`
--
ALTER TABLE `finishedgoods_stock`
  ADD PRIMARY KEY (`finishedgoods_stock_id`);

--
-- Indexes for table `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`goods_id`);

--
-- Indexes for table `inventory_cat`
--
ALTER TABLE `inventory_cat`
  ADD PRIMARY KEY (`inventory_cat_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `item_vendor_id` (`item_vendor_id`),
  ADD KEY `item_purchase_order_id` (`item_purchase_order_id`);

--
-- Indexes for table `machines`
--
ALTER TABLE `machines`
  ADD PRIMARY KEY (`machine_id`);

--
-- Indexes for table `machinestatus`
--
ALTER TABLE `machinestatus`
  ADD PRIMARY KEY (`machinestatus_id`),
  ADD KEY `mstatus_machine_id` (`mstatus_machine_id`),
  ADD KEY `mstatus_work_id` (`mstatus_work_id`);

--
-- Indexes for table `purchase_rec`
--
ALTER TABLE `purchase_rec`
  ADD PRIMARY KEY (`pr_id`),
  ADD KEY `pr_vendor_id` (`pr_vendor_id`),
  ADD KEY `pr_purchaseorder_id` (`pr_purchaseorder_id`);

--
-- Indexes for table `returninventory`
--
ALTER TABLE `returninventory`
  ADD PRIMARY KEY (`retinv_id`);

--
-- Indexes for table `staff_member`
--
ALTER TABLE `staff_member`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `stockissues`
--
ALTER TABLE `stockissues`
  ADD PRIMARY KEY (`stckissue_id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`vendor_id`);

--
-- Indexes for table `vend_purchase_order`
--
ALTER TABLE `vend_purchase_order`
  ADD PRIMARY KEY (`vpo_id`),
  ADD KEY `vpo_vendor_id` (`vpo_vendor_id`);

--
-- Indexes for table `work_assign`
--
ALTER TABLE `work_assign`
  ADD PRIMARY KEY (`work_id`),
  ADD KEY `work_staff_id` (`work_staff_id`),
  ADD KEY `work_machine_id` (`work_machine_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attendace_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `beam`
--
ALTER TABLE `beam`
  MODIFY `beam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `finishedgoods_stock`
--
ALTER TABLE `finishedgoods_stock`
  MODIFY `finishedgoods_stock_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'table unique id', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `goods`
--
ALTER TABLE `goods`
  MODIFY `goods_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `inventory_cat`
--
ALTER TABLE `inventory_cat`
  MODIFY `inventory_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `machines`
--
ALTER TABLE `machines`
  MODIFY `machine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `machinestatus`
--
ALTER TABLE `machinestatus`
  MODIFY `machinestatus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `purchase_rec`
--
ALTER TABLE `purchase_rec`
  MODIFY `pr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `returninventory`
--
ALTER TABLE `returninventory`
  MODIFY `retinv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `staff_member`
--
ALTER TABLE `staff_member`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `stockissues`
--
ALTER TABLE `stockissues`
  MODIFY `stckissue_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vend_purchase_order`
--
ALTER TABLE `vend_purchase_order`
  MODIFY `vpo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `work_assign`
--
ALTER TABLE `work_assign`
  MODIFY `work_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`attendance_staff`) REFERENCES `staff_member` (`staff_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `beam`
--
ALTER TABLE `beam`
  ADD CONSTRAINT `beam_ibfk_1` FOREIGN KEY (`beam_machine_id`) REFERENCES `machines` (`machine_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`item_vendor_id`) REFERENCES `vendors` (`vendor_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `item_ibfk_2` FOREIGN KEY (`item_purchase_order_id`) REFERENCES `vend_purchase_order` (`vpo_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `machinestatus`
--
ALTER TABLE `machinestatus`
  ADD CONSTRAINT `machinestatus_ibfk_1` FOREIGN KEY (`mstatus_machine_id`) REFERENCES `machines` (`machine_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `machinestatus_ibfk_2` FOREIGN KEY (`mstatus_work_id`) REFERENCES `work_assign` (`work_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `purchase_rec`
--
ALTER TABLE `purchase_rec`
  ADD CONSTRAINT `purchase_rec_ibfk_1` FOREIGN KEY (`pr_vendor_id`) REFERENCES `vendors` (`vendor_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `purchase_rec_ibfk_2` FOREIGN KEY (`pr_purchaseorder_id`) REFERENCES `vend_purchase_order` (`vpo_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `vend_purchase_order`
--
ALTER TABLE `vend_purchase_order`
  ADD CONSTRAINT `vend_purchase_order_ibfk_1` FOREIGN KEY (`vpo_vendor_id`) REFERENCES `vendors` (`vendor_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `work_assign`
--
ALTER TABLE `work_assign`
  ADD CONSTRAINT `work_assign_ibfk_1` FOREIGN KEY (`work_staff_id`) REFERENCES `staff_member` (`staff_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `work_assign_ibfk_2` FOREIGN KEY (`work_machine_id`) REFERENCES `machines` (`machine_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
