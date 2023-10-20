-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 20, 2023 at 03:08 AM
-- Server version: 5.7.23-23
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ewq2v2wz_drive`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `file` text,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_by` int(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `description`, `file`, `is_active`, `created_by`, `created_at`, `updated_at`) VALUES
(2, 'All Pdf', 'just a sample for everyone', 'files/file1694758820Document.pdf', 1, 1, '2023-09-15 10:20:20', '2023-09-15 10:20:20'),
(3, 'TEST ALAN', 'HELLOO ALLLLLLL', 'files/file1694759382Desert.pdf', 1, 3, '2023-09-15 10:29:42', '2023-09-15 10:29:42'),
(4, 'TEST DESERT HELLO', 'HELLOOOOOOO', 'files/file1694759470DESERT HELLO.pdf', 1, 3, '2023-09-15 10:31:10', '2023-09-15 10:31:10');

-- --------------------------------------------------------

--
-- Table structure for table `file_access`
--

CREATE TABLE `file_access` (
  `id` int(11) NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `file_id` int(11) DEFAULT NULL,
  `request_id` int(11) DEFAULT NULL,
  `is_downloaded` int(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `file_access`
--

INSERT INTO `file_access` (`id`, `code`, `file_id`, `request_id`, `is_downloaded`, `created_at`, `updated_at`) VALUES
(1, '2372261010', 1, 0, 0, '2023-09-12 04:08:15', '2023-09-12 04:08:15'),
(2, '23608310', 1, 0, 0, '2023-09-12 04:09:52', '2023-09-12 04:09:52');

-- --------------------------------------------------------

--
-- Table structure for table `login_history`
--

CREATE TABLE `login_history` (
  `id` int(11) NOT NULL,
  `status` int(1) DEFAULT NULL,
  `member_id` int(11) DEFAULT NULL,
  `created_at` varchar(30) DEFAULT NULL,
  `updated_at` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_history`
--

INSERT INTO `login_history` (`id`, `status`, `member_id`, `created_at`, `updated_at`) VALUES
(1, 0, 1, '2023-09-12 04:15:32', '2023-09-12 04:15:32'),
(2, 1, 1, '2023-09-12 04:15:53', '2023-09-12 04:15:53'),
(3, 1, 1, '2023-09-15 09:49:25', '2023-09-15 09:49:25'),
(4, 0, 1, '2023-09-15 09:49:46', '2023-09-15 09:49:46'),
(5, 1, 2, '2023-09-15 09:49:56', '2023-09-15 09:49:56'),
(6, 0, 2, '2023-09-15 09:50:38', '2023-09-15 09:50:38'),
(7, 1, 1, '2023-09-15 10:19:07', '2023-09-15 10:19:07'),
(8, 1, 3, '2023-09-15 10:22:28', '2023-09-15 10:22:28'),
(9, 0, 3, '2023-09-15 10:23:46', '2023-09-15 10:23:46'),
(10, 1, 4, '2023-09-15 10:24:28', '2023-09-15 10:24:28'),
(11, 0, 4, '2023-09-15 10:27:19', '2023-09-15 10:27:19'),
(12, 1, 3, '2023-09-15 10:27:34', '2023-09-15 10:27:34'),
(13, 1, 3, '2023-09-15 10:48:57', '2023-09-15 10:48:57'),
(14, 1, 4, '2023-09-15 12:47:05', '2023-09-15 12:47:05'),
(15, 1, 1, '2023-09-15 14:04:02', '2023-09-15 14:04:02'),
(16, 1, 4, '2023-09-15 14:06:43', '2023-09-15 14:06:43'),
(17, 1, 1, '2023-09-15 14:22:38', '2023-09-15 14:22:38'),
(18, 0, 1, '2023-09-15 14:24:21', '2023-09-15 14:24:21'),
(19, 1, 1, '2023-09-15 14:24:23', '2023-09-15 14:24:23'),
(20, 1, 4, '2023-09-15 14:26:27', '2023-09-15 14:26:27'),
(21, 1, 1, '2023-09-15 14:28:30', '2023-09-15 14:28:30'),
(22, 0, 1, '2023-09-15 14:58:37', '2023-09-15 14:58:37'),
(23, 1, 4, '2023-09-15 14:58:54', '2023-09-15 14:58:54'),
(24, 1, 3, '2023-09-15 15:35:18', '2023-09-15 15:35:18'),
(25, 0, 0, '2023-09-15 16:57:47', '2023-09-15 16:57:47'),
(26, 1, 3, '2023-09-15 17:21:35', '2023-09-15 17:21:35'),
(27, 1, 4, '2023-09-15 17:28:10', '2023-09-15 17:28:10'),
(28, 1, 1, '2023-09-16 17:19:18', '2023-09-16 17:19:18'),
(29, 0, 1, '2023-09-16 17:23:46', '2023-09-16 17:23:46'),
(30, 1, 2, '2023-09-16 17:23:52', '2023-09-16 17:23:52'),
(31, 1, 1, '2023-09-16 19:26:21', '2023-09-16 19:26:21'),
(32, 1, 1, '2023-09-17 22:21:35', '2023-09-17 22:21:35'),
(33, 0, 1, '2023-09-17 22:21:44', '2023-09-17 22:21:44'),
(34, 1, 1, '2023-09-17 22:22:20', '2023-09-17 22:22:20'),
(35, 0, 1, '2023-09-17 22:23:09', '2023-09-17 22:23:09'),
(36, 1, 4, '2023-09-17 22:23:22', '2023-09-17 22:23:22'),
(37, 0, 4, '2023-09-17 22:28:15', '2023-09-17 22:28:15'),
(38, 1, 1, '2023-09-17 22:28:19', '2023-09-17 22:28:19'),
(39, 0, 1, '2023-09-17 22:29:16', '2023-09-17 22:29:16'),
(40, 1, 1, '2023-09-17 22:29:19', '2023-09-17 22:29:19'),
(41, 0, 1, '2023-09-17 22:29:59', '2023-09-17 22:29:59'),
(42, 1, 1, '2023-09-18 08:49:47', '2023-09-18 08:49:47'),
(43, 0, 1, '2023-09-18 08:50:05', '2023-09-18 08:50:05'),
(44, 1, 4, '2023-09-18 08:50:17', '2023-09-18 08:50:17'),
(45, 1, 1, '2023-09-18 11:35:16', '2023-09-18 11:35:16'),
(46, 0, 1, '2023-09-18 11:35:20', '2023-09-18 11:35:20'),
(47, 1, 1, '2023-09-19 14:34:56', '2023-09-19 14:34:56'),
(48, 0, 0, '2023-09-19 16:18:36', '2023-09-19 16:18:36'),
(49, 1, 4, '2023-09-20 08:20:03', '2023-09-20 08:20:03');

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `id` int(11) NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `postal_code` varchar(255) DEFAULT NULL,
  `address` text,
  `company` varchar(255) DEFAULT NULL,
  `subject` text,
  `message` text,
  `files` text,
  `code` varchar(255) DEFAULT NULL,
  `is_not_us_citizen` int(1) DEFAULT NULL,
  `is_agreed` int(1) DEFAULT NULL,
  `is_approved` int(1) DEFAULT NULL,
  `is_email_sent` int(1) DEFAULT NULL,
  `is_active` int(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `name`, `email`, `phone`, `country`, `state`, `city`, `postal_code`, `address`, `company`, `subject`, `message`, `files`, `code`, `is_not_us_citizen`, `is_agreed`, `is_approved`, `is_email_sent`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Abdul Hannan', 'abdulogs88@gmail.com', 'dsgfdgdfsg', 'Afghanistan', 'dfg', 'dfsgdsf', 'dfsg', 'dsfgsd', 'fdgs', NULL, NULL, NULL, '202309112924', 1, 1, 0, 1, 1, '2023-09-12 03:40:46', '2023-09-12 03:49:39'),
(2, 'Abdul Hannan', 'abdulogs88@gmail.com', 'sd', 'Afghanistan', 'asd', 'asd', 'asd', 'asd', 'asd', NULL, NULL, NULL, '202309112924', 1, 1, 0, 0, 1, '2023-09-12 03:53:33', '2023-09-12 03:53:33'),
(3, 'Abdul Hannan', 'abdulogs88@gmail.com', 'sd', 'Afghanistan', 'asd', 'asd', 'asd', 'asd', 'asd', NULL, NULL, NULL, '202309112924', 1, 1, 1, 0, 1, '2023-09-12 03:57:16', '2023-09-12 03:57:16'),
(4, 'Abdul Hannan', 'abdulogs88@gmail.com', 'sdasfds', 'Afghanistan', 'Punjab', 'dD', 'fdgs', 'Dharampura', 'pk', NULL, NULL, NULL, '235581', 1, 1, 1, 0, 1, '2023-09-12 04:05:12', '2023-09-12 04:05:12'),
(5, 'Abdul Hannan', 'abdulogs88@gmail.com', 'sdsda', 'Afghanistan', 'sdfa', 'asf', 'dfs', 'dsf', 'sadf', NULL, NULL, NULL, '231639', 1, 1, 1, 0, 1, '2023-09-12 04:06:51', '2023-09-12 04:06:51'),
(6, 'Abdul Hannan', 'abdulogs88@gmail.com', 'dfsaf', 'Afghanistan', 'Punjab', 'dD&*', 'joj', 'k', 'afda', NULL, NULL, NULL, '231822', 1, 1, 1, 0, 1, '2023-09-12 04:08:15', '2023-09-12 04:08:15'),
(7, 'Abdul Hannan', 'abdulogs88@gmail.com', 'dasfasd', 'Afghanistan', 'kn', 'qew', 'fdgs', 'kpk', 'nkn', NULL, NULL, NULL, '236178', 1, 1, 1, 0, 1, '2023-09-12 04:09:52', '2023-09-12 04:09:52');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `is_approved` int(1) DEFAULT NULL,
  `request_email` varchar(255) DEFAULT NULL,
  `request_subject` text,
  `request_message` text,
  `approval_email` varchar(255) DEFAULT NULL,
  `approval_subject` text,
  `approval_message` text,
  `remainder_email` varchar(255) DEFAULT NULL,
  `remainder_subject` text,
  `remainder_message` text,
  `otp_email` varchar(255) DEFAULT NULL,
  `otp_subject` varchar(255) DEFAULT NULL,
  `otp_message` text,
  `download_email` varchar(255) DEFAULT NULL,
  `download_subject` varchar(255) DEFAULT NULL,
  `download_message` text,
  `files` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `is_approved`, `request_email`, `request_subject`, `request_message`, `approval_email`, `approval_subject`, `approval_message`, `remainder_email`, `remainder_subject`, `remainder_message`, `otp_email`, `otp_subject`, `otp_message`, `download_email`, `download_subject`, `download_message`, `files`) VALUES
(1, 1, 'abdulog88@gmail.com', 'Hyperscale Nexus PPM registration successful', 'Thank you for reaching out to us through the website.   Shortly after approval of Hyperscale Nexus team you will get ppm.', 'abdulog88@gmail.com', 'Hyperscale Nexus PPM registration approval updates', 'As per your registration and agree with our terms & conditions you can find PPM file. ( PPM file link we can put here or maybe if attached unique number ppm with attachment of email)', 'abdulog88@gmail.com', 'Hyperscale Nexus PPM file download remainder', 'I hope you\'re doing well. We wanted to follow up to ensure you received PPM email and see if you had any initial questions. We like to discuss this with you further if it would be helpful. ', 'abdulog88@gmail.com', 'subject', 'message', 'abdulog88@gmail.com', 'subject', 'message', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(200) DEFAULT NULL,
  `lastname` varchar(200) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `image` text,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `is_role` tinyint(1) DEFAULT NULL,
  `is_status` int(11) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `image`, `email`, `password`, `is_role`, `is_status`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Abdul', 'Hannan', 'abdul', NULL, 'admin@gmail.com', 'aa5f9f65b56c061344c609e01f3f021e', 0, 1, 1, '2023-09-13 14:17:04', '2023-09-11 21:44:11'),
(2, 'Visitor', 'Visitor', 'Visitor', NULL, 'visitor@gmail.com', 'aa5f9f65b56c061344c609e01f3f021e', 1, 1, 1, '2023-09-05 14:19:39', '2023-09-11 21:14:30'),
(3, 'Alan', 'cheek', 'alan', NULL, 'alan@endemajfunds.com', '15948314d8593a5d17d1ffe88f5e91be', 0, 1, 1, '2023-09-15 10:20:58', '2023-09-15 10:22:23'),
(4, 'alan', 'alan', 'alan', NULL, 'alan@gmail.com', '15948314d8593a5d17d1ffe88f5e91be', 1, 1, 1, '2023-09-15 10:24:11', '2023-09-17 22:23:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file_access`
--
ALTER TABLE `file_access`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_history`
--
ALTER TABLE `login_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otp`
--
ALTER TABLE `otp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `file_access`
--
ALTER TABLE `file_access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login_history`
--
ALTER TABLE `login_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `otp`
--
ALTER TABLE `otp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
