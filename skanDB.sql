-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2020 at 02:00 PM
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
-- Database: `apitest`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(999) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `heading`, `desc`, `image`, `created_at`, `updated_at`) VALUES
(1, 'testing heading', 'sdfighudsfgalkdf\r\nhadfjhpioadfh\r\nfadgpjhiopfdjhg\r\nasdfgjpdfhsdafasdfg\r\nsdfhjopsdfjhad\r\ndeepak kumar', '5e745c89415ce.jpg', '2020-03-17 18:30:00', '2020-03-20 00:32:49');

-- --------------------------------------------------------

--
-- Table structure for table `banner_datas`
--

CREATE TABLE `banner_datas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner_datas`
--

INSERT INTO `banner_datas` (`id`, `heading`, `desc`, `image`, `created_at`, `updated_at`) VALUES
(6, 'this is localhost tested', 'this is desc box updated', '5e7447ff245d6.jpg', '2020-03-19 23:05:11', '2020-03-20 00:19:49');

-- --------------------------------------------------------

--
-- Table structure for table `category_datas`
--

CREATE TABLE `category_datas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `source` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_datas`
--

INSERT INTO `category_datas` (`id`, `source`, `category`, `created_at`, `updated_at`) VALUES
(1, 'MCQs', 'General', '2020-03-12 04:39:56', '2020-03-12 04:40:55'),
(2, 'MCQs', 'English', '2020-03-12 04:40:16', '2020-03-12 04:40:16'),
(4, 'MCQs', 'Stationary', '2020-03-13 00:09:22', '2020-03-20 00:58:17'),
(6, 'MCQs', 'Science', '2020-03-20 00:59:01', '2020-03-20 00:59:01');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `subject`, `url`, `method`, `ip`, `agent`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Organisation details added', 'http://127.0.0.1:8000/timeline', 'GET', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.122 Safari/537.36', 6, '2020-02-25 07:28:53', '2020-02-25 07:28:53'),
(2, 'Organisation details added', 'http://127.0.0.1:8000/timeline', 'GET', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.122 Safari/537.36', 6, '2020-02-25 07:29:25', '2020-02-25 07:29:25'),
(3, 'Organisation details added', 'http://127.0.0.1:8000/timeline', 'GET', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.122 Safari/537.36', 6, '2020-02-25 07:55:06', '2020-02-25 07:55:06'),
(4, 'Organisation details added', 'http://127.0.0.1:8000/timeline', 'GET', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.122 Safari/537.36', 6, '2020-02-25 07:56:59', '2020-02-25 07:56:59'),
(5, 'Organisation details added', 'http://127.0.0.1:8000/timeline', 'GET', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Mobile Safari/537.36', 6, '2020-03-13 06:13:56', '2020-03-13 06:13:56'),
(6, 'Organisation details added', 'http://127.0.0.1:8000/timeline', 'GET', '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Mobile Safari/537.36', 6, '2020-03-13 06:14:12', '2020-03-13 06:14:12');

-- --------------------------------------------------------

--
-- Table structure for table `mcqs_category_question_data`
--

CREATE TABLE `mcqs_category_question_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` bigint(20) UNSIGNED NOT NULL,
  `questionName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timeDuration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mcqs_category_question_data`
--

INSERT INTO `mcqs_category_question_data` (`id`, `category`, `questionName`, `timeDuration`, `created_at`, `updated_at`) VALUES
(6, 1, 'SSC 2020 Exam', '20', '2020-03-16 05:36:11', '2020-03-16 05:36:11'),
(7, 4, 'testing Category', '60', '2020-03-18 02:22:59', '2020-03-18 05:55:33'),
(9, 2, 'new testing categoty', '150', '2020-03-18 05:39:39', '2020-03-18 05:39:39'),
(10, 6, 'Non-Medical', '90', '2020-03-20 01:28:31', '2020-03-20 01:28:31');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2019_08_19_000000_create_failed_jobs_table', 1),
(16, '2020_02_25_050004_add_is_addmine_users', 2),
(19, '2020_02_25_114715_create_logs', 3),
(20, '2020_02_27_061115_create_values_table', 4),
(21, '2020_03_04_054000_create_banner_datas_table', 5),
(22, '2020_03_05_060716_create_abouts_table', 6),
(23, '2020_03_05_080049_create_terms_and_conductions_table', 7),
(24, '2020_03_05_124148_create_privacy_policies_table', 8),
(25, '2020_03_07_070924_add_status_col_to_users', 9),
(26, '2020_03_07_071529_add_status_col_to_users', 10),
(27, '2020_03_11_040904_create_terms_and_conditions_table', 11),
(28, '2020_03_11_102023_create_payment_datas_table', 12),
(29, '2020_03_11_105313_create_payment_datas_table', 13),
(30, '2020_03_11_110905_create_payment_datas_table', 14),
(31, '2020_03_11_111315_create_payment_datas_table', 15),
(32, '2020_03_11_113859_create_payment_datas_table', 16),
(33, '2020_03_11_120335_create_pas_table', 17),
(34, '2020_03_11_121039_create_pas_table', 18),
(35, '2020_03_12_041513_create_study_material_data_table', 19),
(36, '2020_03_12_045000_create_category_datas_table', 20),
(37, '2020_03_12_101321_create_study_material_datas_table', 21),
(38, '2020_03_12_113941_create_study_material_data_table', 22),
(39, '2020_03_16_065910_create_mcqs_category_question_data_table', 23),
(40, '2020_03_17_104510_create_create_questions_table', 24),
(41, '2020_03_17_105623_create_quiz_questions_table', 25),
(42, '2020_03_17_105803_create_quiz_questions_table', 26),
(43, '2020_03_17_120611_create_payment_data_table', 27);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('test@gmail.com', '$2y$10$8D0Z9vrjyWXuljyLgyMWS.pMKgcslcxKIp1WISOQYa.oKAWmzapr6', '2020-02-25 05:44:05');

-- --------------------------------------------------------

--
-- Table structure for table `payment_datas`
--

CREATE TABLE `payment_datas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pay_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `courses` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_datas`
--

INSERT INTO `payment_datas` (`id`, `pay_id`, `user_id`, `status`, `courses`, `amount`, `created_at`, `updated_at`) VALUES
(2, 'pay_ETHqoa646Xbi20', 5, 'captured', '1', '30000', '2020-03-17 07:02:35', '2020-03-17 07:02:35'),
(3, 'pay_ETHvotH7kmZsVc', 4, 'captured', '4', '4000', '2020-03-17 07:07:27', '2020-03-17 07:07:27'),
(4, 'pay_ETbp70D7p8CEEA', 4, 'captured', '2', '30000', '2020-03-18 02:34:45', '2020-03-18 02:34:45'),
(5, 'pay_ETdTg1Bp5AVz7L', 5, 'captured', '3', '8000', '2020-03-18 04:11:59', '2020-03-18 04:11:59');

-- --------------------------------------------------------

--
-- Table structure for table `privacy_policies`
--

CREATE TABLE `privacy_policies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` varchar(999) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privacy_policies`
--

INSERT INTO `privacy_policies` (`id`, `content`, `created_at`, `updated_at`) VALUES
(1, '<p>gdsfhgdfhdsg[\'klhdf</p><p>dfohdfjh[pfkh</p><p>sdfohjfdsh updated</p>', '2020-03-18 18:30:00', '2020-03-20 01:15:34');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_questions`
--

CREATE TABLE `quiz_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` bigint(20) UNSIGNED NOT NULL,
  `question` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `option1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quiz_questions`
--

INSERT INTO `quiz_questions` (`id`, `category`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`, `desc`, `created_at`, `updated_at`) VALUES
(11, 6, 'question 1', 'opt 1', 'opt 2', NULL, NULL, 'option_4', 'sample', '2020-03-18 05:56:36', '2020-03-19 02:03:45'),
(13, 7, 'question 3', 'opt 1', 'opt 2', 'opt 3', 'opt 4', 'option_3', 's;ljdfklsj', '2020-03-18 06:28:40', '2020-03-19 02:06:51'),
(14, 10, 'This is testing after localhost?', 'this is what', 'this is why', 'sdfgsdfg', 'opt 4', 'option_2', NULL, '2020-03-20 01:42:12', '2020-03-20 01:42:12');

-- --------------------------------------------------------

--
-- Table structure for table `study_material_data`
--

CREATE TABLE `study_material_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by_user` bigint(20) UNSIGNED NOT NULL,
  `category` bigint(20) UNSIGNED NOT NULL,
  `source` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otherDocument` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `study_material_data`
--

INSERT INTO `study_material_data` (`id`, `created_by_user`, `category`, `source`, `title`, `desc`, `image`, `otherDocument`, `created_at`, `updated_at`) VALUES
(1, 6, 2, 'MCQs', 'Sample Title 4', 'this is desc', 'Sample Title 4.PNG', 'Sample Title 4.sql', '2020-03-13 02:09:02', '2020-03-20 06:12:41'),
(2, 6, 2, 'MCQs', 'Bangladesh Won Against West Indies Easily', 'desc', 'Bangladesh Won Against West Indies Easily.png', 'Bangladesh Won Against West Indies Easily.sql', '2020-03-19 02:30:38', '2020-03-20 06:14:37');

-- --------------------------------------------------------

--
-- Table structure for table `terms_and_conditions`
--

CREATE TABLE `terms_and_conditions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` varchar(999) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terms_and_conditions`
--

INSERT INTO `terms_and_conditions` (`id`, `content`, `created_at`, `updated_at`) VALUES
(1, '<p>adsgjskoaghsjp</p><p>asdpiojgpsdioagj</p><p>fk<i><u>asdopgosdgsdf\'\';,jd</u></i><i><u>dplpsdlgp</u></i></p>', '2020-03-03 18:30:00', '2020-03-20 01:08:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userId` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pinCode` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Image` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `userId`, `mobile`, `address`, `pinCode`, `email`, `Image`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`, `status`) VALUES
(4, 'karan', 'partap', 'aran3170087', '1234567890', 'hashtagkaran, New Delhi', 110045, 'test@gmail.com', 'http://localhost/skanBack/uploades/profileImages/aran3170087.png', NULL, '$2y$10$wAQS7R.PuWpw.rzGaXrfTO8G9inbMCVWACw19AEut/v/WG0bo6S8G', NULL, '2020-02-24 00:51:50', '2020-03-20 07:23:22', 'user', 'active'),
(5, 'testing', 'last', 'ting9774954', '1234567893', NULL, NULL, 'user@gmail.com', '5e539cc04db5d.jpg', NULL, '$2y$10$qUltMRWbncQmbpzdCBxt1O3yNzhGRyy1HdlLF/dPM5dcNx0kGOb8m', NULL, '2020-02-24 03:43:11', '2020-03-17 02:39:54', 'user', 'active'),
(6, 'Deepak', 'sinha', 'n5294784', '0987654321', NULL, NULL, 'admin@gmail.com', 'n5294784.jpg', NULL, '$2y$10$JU8PybsZtzVCSZUlrXwDye6r3UdDURZJTEXNJKIIOQhlsmV3s4pQO', NULL, '2020-02-25 00:09:55', '2020-03-20 02:37:27', 'admin', 'active'),
(61, 'Deepakk', 'kumar sinha', 'epak6886278', '7834992456', NULL, NULL, 'email@gmail.com', NULL, NULL, '$2y$10$XJYlH15D5V2TQzom2M4fkObauWp4FWd7BsHb8otTuSYZlWcRzC7G6', NULL, '2020-03-06 03:54:53', '2020-03-20 02:34:37', 'admin', 'active'),
(62, 'karan', 'sala', 'aran7169179', '8754215487', NULL, NULL, 'karan@gmail.com', NULL, NULL, '$2y$10$yIvAFG0drWkr0BH6uAIuMO4d3O4kO22j1Extn//cj0/uFmApSSJNy', NULL, '2020-03-06 04:37:09', '2020-03-06 04:37:09', 'admin', 'active'),
(63, 'test', 'kumar', 'asdf1197629', '7834992452', NULL, NULL, 'manoj@gmail.com', NULL, NULL, '$2y$10$.NSzSuy1S7clR5qbZuvrFO.Te2igHl1VtI3ZRaIT3I2vQtr5XSbYm', NULL, '2020-03-11 01:44:37', '2020-03-20 02:35:01', 'admin', 'active'),
(64, 'sample', 'sample', 'mple3551474', '0987654326', NULL, NULL, 'sample@mail.com', NULL, NULL, '$2y$10$fYabq2Rxsb/.PT1qA8qbF.cNJ847vc1yK9ENLwh3OFH/i037x/BaG', NULL, '2020-03-17 04:05:33', '2020-03-17 04:05:33', 'user', 'active'),
(65, 'Rohan', 'kumar', 'ohan8482452', '8130973060', NULL, NULL, 'harry@gmail.com', NULL, NULL, '$2y$10$TNern6Xl2JpxO/vKmDMxcedz0bo4mX4ZUVpRQ183DwSt.RRpj6ijm', NULL, '2020-03-20 02:39:32', '2020-03-20 02:39:32', 'admin', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_datas`
--
ALTER TABLE `banner_datas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_datas`
--
ALTER TABLE `category_datas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mcqs_category_question_data`
--
ALTER TABLE `mcqs_category_question_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mcqs_category_question_data_category_foreign` (`category`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment_datas`
--
ALTER TABLE `payment_datas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payment_datas_user_id_foreign` (`user_id`);

--
-- Indexes for table `privacy_policies`
--
ALTER TABLE `privacy_policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_questions`
--
ALTER TABLE `quiz_questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quiz_questions_category_foreign` (`category`);

--
-- Indexes for table `study_material_data`
--
ALTER TABLE `study_material_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `study_material_data_created_by_user_foreign` (`created_by_user`),
  ADD KEY `study_material_data_category_foreign` (`category`);

--
-- Indexes for table `terms_and_conditions`
--
ALTER TABLE `terms_and_conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `userId` (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner_datas`
--
ALTER TABLE `banner_datas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category_datas`
--
ALTER TABLE `category_datas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mcqs_category_question_data`
--
ALTER TABLE `mcqs_category_question_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `payment_datas`
--
ALTER TABLE `payment_datas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `privacy_policies`
--
ALTER TABLE `privacy_policies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `quiz_questions`
--
ALTER TABLE `quiz_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `study_material_data`
--
ALTER TABLE `study_material_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `terms_and_conditions`
--
ALTER TABLE `terms_and_conditions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mcqs_category_question_data`
--
ALTER TABLE `mcqs_category_question_data`
  ADD CONSTRAINT `mcqs_category_question_data_category_foreign` FOREIGN KEY (`category`) REFERENCES `category_datas` (`id`);

--
-- Constraints for table `payment_datas`
--
ALTER TABLE `payment_datas`
  ADD CONSTRAINT `payment_datas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `quiz_questions`
--
ALTER TABLE `quiz_questions`
  ADD CONSTRAINT `quiz_questions_category_foreign` FOREIGN KEY (`category`) REFERENCES `mcqs_category_question_data` (`id`);

--
-- Constraints for table `study_material_data`
--
ALTER TABLE `study_material_data`
  ADD CONSTRAINT `study_material_data_category_foreign` FOREIGN KEY (`category`) REFERENCES `category_datas` (`id`),
  ADD CONSTRAINT `study_material_data_created_by_user_foreign` FOREIGN KEY (`created_by_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
