-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 16, 2022 at 03:14 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `p`
--

-- --------------------------------------------------------

--
-- Table structure for table `cus`
--

CREATE TABLE `cus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `productname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cus`
--

INSERT INTO `cus` (`id`, `productname`, `price`, `created_at`, `updated_at`) VALUES
(1, 'rice', 80, NULL, NULL),
(2, 'wheat', 25, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `filter`
--

CREATE TABLE `filter` (
  `id` int(11) NOT NULL,
  `country` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `empsize` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `filter`
--

INSERT INTO `filter` (`id`, `country`, `state`, `updated_at`, `created_at`, `empsize`) VALUES
(1, 'usa', 'newyorks', '2022-11-01 09:37:31', '2022-11-06 03:19:35', '11-50'),
(2, 'uksss', 'london', '2022-12-15 14:03:52', '2022-11-06 03:19:35', '11-50'),
(3, 'au', 'ponom', '2022-11-03 10:25:57', '2022-11-06 03:19:35', '11-50'),
(5, 'jp', 'tokyo', '2022-11-06 03:19:35', '2022-11-06 03:19:35', '0'),
(6, 'ca', 'ontario', '2022-11-06 03:19:35', '2022-11-06 03:19:35', '0'),
(7, 'in', 'tamilnadu', '2022-11-06 03:19:35', '2022-11-06 03:19:35', '0'),
(8, 'china', 'cn', '2022-11-13 10:27:23', '2022-11-09 10:27:17', '0'),
(9, 'china', 'cn', '2022-11-13 10:28:28', '2022-11-16 10:28:25', '0'),
(10, 'usa', 'newyork', '2022-11-19 09:37:18', '2022-11-13 10:28:29', '0'),
(11, 'uss', 'newyork', '2022-11-19 09:38:59', '2022-11-13 10:28:35', '0'),
(15, 'us', 'newyork', '2022-11-13 10:28:37', '2022-11-13 10:28:37', '0'),
(16, 'us', 'newyork', '2022-11-13 10:28:41', '2022-11-13 10:28:40', '0'),
(17, 'us', 'newyork', '2022-11-13 10:28:40', '2022-11-13 10:28:39', '0'),
(18, 'us', 'newyork', '2022-11-13 10:28:44', '2022-11-13 10:28:43', '0'),
(21, 'denmark', 'dk', '2022-11-19 09:20:43', '2022-11-19 09:20:43', NULL),
(22, 'tamilnadu', 'tn', '2022-11-19 09:54:13', '2022-11-19 09:54:13', NULL),
(23, 'america', 'us', '2022-11-19 09:56:19', '2022-11-19 09:56:19', NULL),
(24, 'india', 'in', '2022-11-19 09:57:20', '2022-11-19 09:57:20', NULL),
(25, 'ds', 'ds', '2022-11-19 10:26:50', '2022-11-19 10:26:50', NULL),
(26, 'sq', 'sq', '2022-11-19 10:29:44', '2022-11-19 10:29:44', NULL),
(27, 'ee', 'ee', '2022-11-19 10:39:19', '2022-11-19 10:39:19', NULL),
(28, 'aaa', 'aaa', '2022-11-19 10:43:59', '2022-11-19 10:43:59', NULL),
(29, 'kkkk', 'kkkk', '2022-11-19 10:44:08', '2022-11-19 10:44:08', NULL),
(30, 'dum', 'dum', '2022-11-19 10:44:58', '2022-11-19 10:44:58', NULL),
(32, 'uk', 'london', '2022-11-26 08:22:21', '2022-11-19 06:10:36', '50'),
(33, 'au', 'ponom', '2022-11-19 06:10:36', '2022-11-19 06:10:36', NULL),
(34, 'lms', 'beijing', '2022-12-01 06:45:31', '2022-11-19 06:10:36', NULL),
(35, 'jp', 'tokyo', '2022-11-19 06:10:36', '2022-11-19 06:10:36', NULL),
(36, 'ca', 'ontario', '2022-11-19 06:10:36', '2022-11-19 06:10:36', NULL),
(37, 'in', 'tamilnadu', '2022-11-19 06:10:36', '2022-11-19 06:10:36', NULL),
(38, 'us', 'newyork', '2022-11-19 06:13:15', '2022-11-19 06:13:15', NULL),
(39, 'uk', 'london', '2022-11-26 08:22:25', '2022-11-19 06:13:15', '50'),
(40, 'au', 'ponom', '2022-11-19 06:13:15', '2022-11-19 06:13:15', NULL),
(41, 'cn', 'beijing', '2022-11-19 06:13:15', '2022-11-19 06:13:15', NULL),
(42, 'jp', 'tokyo', '2022-11-19 06:13:15', '2022-11-19 06:13:15', NULL),
(43, 'ca', 'ontario', '2022-11-19 06:13:15', '2022-11-19 06:13:15', NULL),
(44, 'in', 'tamilnadu', '2022-11-19 06:13:15', '2022-11-19 06:13:15', NULL),
(45, 'us', 'newyork', '2022-11-19 09:04:43', '2022-11-19 09:04:43', NULL),
(46, 'uk', 'london', '2022-11-26 08:22:32', '2022-11-19 09:04:43', '50'),
(47, 'au', 'ponom', '2022-11-19 09:04:43', '2022-11-19 09:04:43', NULL),
(48, 'cn', 'beijing', '2022-11-19 09:04:43', '2022-11-19 09:04:43', NULL),
(49, 'jp', 'tokyo', '2022-11-19 09:04:43', '2022-11-19 09:04:43', NULL),
(50, 'ca', 'ontario', '2022-11-19 09:04:43', '2022-11-19 09:04:43', NULL),
(51, 'in', 'tamilnadu', '2022-11-19 09:04:43', '2022-11-19 09:04:43', NULL),
(53, 'uk', 'london', '2022-11-26 08:22:35', '2022-11-19 09:08:16', '50'),
(54, 'au', 'ponom', '2022-11-19 09:08:16', '2022-11-19 09:08:16', NULL),
(55, 'cn', 'beijing', '2022-11-19 09:08:16', '2022-11-19 09:08:16', NULL),
(56, 'jp', 'tokyo', '2022-11-19 09:08:16', '2022-11-19 09:08:16', NULL),
(57, 'ca', 'ontario', '2022-11-19 09:08:16', '2022-11-19 09:08:16', NULL),
(58, 'in', 'tamilnadu', '2022-11-19 09:08:16', '2022-11-19 09:08:16', NULL),
(60, 'uk', 'london', '2022-11-26 08:22:41', '2022-11-19 21:41:56', '50'),
(61, 'au', 'ponom', '2022-11-19 21:41:56', '2022-11-19 21:41:56', NULL),
(62, 'cn', 'beijing', '2022-11-19 21:41:56', '2022-11-19 21:41:56', NULL),
(63, 'jp', 'tokyo', '2022-11-19 21:41:56', '2022-11-19 21:41:56', NULL),
(64, 'ca', 'ontario', '2022-11-19 21:41:56', '2022-11-19 21:41:56', NULL),
(65, 'in', 'tamilnadu', '2022-11-19 21:41:56', '2022-11-19 21:41:56', NULL),
(68, 'au', 'ponom', '2022-11-19 21:42:47', '2022-11-19 21:42:47', NULL),
(69, 'cn', 'beijing', '2022-11-19 21:42:47', '2022-11-19 21:42:47', NULL),
(70, 'jp', 'tokyo', '2022-11-19 21:42:47', '2022-11-19 21:42:47', NULL),
(71, 'ca', 'ontario', '2022-11-19 21:42:47', '2022-11-19 21:42:47', NULL),
(72, 'in', 'tamilnadu', '2022-11-19 21:42:47', '2022-11-19 21:42:47', NULL),
(73, 'us', 'newyork', '2022-11-26 07:26:26', '2022-11-26 07:26:26', NULL),
(74, 'uk', 'london', '2022-11-26 07:26:26', '2022-11-26 07:26:26', NULL),
(75, 'au', 'ponom', '2022-11-26 07:26:26', '2022-11-26 07:26:26', NULL),
(76, 'cn', 'beijing', '2022-11-26 07:26:26', '2022-11-26 07:26:26', NULL),
(77, 'jp', 'tokyo', '2022-11-26 07:26:26', '2022-11-26 07:26:26', NULL),
(78, 'ca', 'ontario', '2022-11-26 07:26:26', '2022-11-26 07:26:26', NULL),
(79, 'in', 'tamilnadu', '2022-11-26 07:26:26', '2022-11-26 07:26:26', NULL),
(80, 'ureka', 'uka', '2022-11-26 12:56:54', '2022-11-26 12:56:54', NULL),
(81, 'apparel', 'ap', '2022-11-26 12:57:06', '2022-11-26 12:57:06', NULL),
(82, 'us', 'newyork', '2022-12-01 01:17:49', '2022-12-01 01:17:49', NULL),
(83, 'uk', 'london', '2022-12-01 01:17:49', '2022-12-01 01:17:49', NULL),
(84, 'au', 'ponom', '2022-12-01 01:17:49', '2022-12-01 01:17:49', NULL),
(85, 'cn', 'beijing', '2022-12-01 01:17:49', '2022-12-01 01:17:49', NULL),
(86, 'jp', 'tokyo', '2022-12-01 01:17:49', '2022-12-01 01:17:49', NULL),
(87, 'ca', 'ontario', '2022-12-01 01:17:49', '2022-12-01 01:17:49', NULL),
(88, 'in', 'tamilnadu', '2022-12-01 01:17:49', '2022-12-01 01:17:49', NULL),
(89, 'vb', 'newyork', '2022-12-01 01:59:39', '2022-12-01 01:59:39', NULL),
(90, 'uk', 'london', '2022-12-01 01:59:39', '2022-12-01 01:59:39', NULL),
(91, 'au', 'ponom', '2022-12-01 01:59:39', '2022-12-01 01:59:39', NULL),
(92, 'cn', 'beijing', '2022-12-01 01:59:39', '2022-12-01 01:59:39', NULL),
(93, 'jp', 'tokyo', '2022-12-01 01:59:39', '2022-12-01 01:59:39', NULL),
(94, 'ca', 'ontario', '2022-12-01 01:59:39', '2022-12-01 01:59:39', NULL),
(95, 'in', 'tamilnadu', '2022-12-01 01:59:39', '2022-12-01 01:59:39', NULL),
(96, 'vb', 'newyork', '2022-12-01 02:04:58', '2022-12-01 02:04:58', NULL),
(97, 'uk', 'london', '2022-12-01 02:04:58', '2022-12-01 02:04:58', NULL),
(98, 'au', 'ponom', '2022-12-01 02:04:58', '2022-12-01 02:04:58', NULL),
(99, 'cn', 'beijing', '2022-12-01 02:04:58', '2022-12-01 02:04:58', NULL),
(100, 'jp', 'tokyo', '2022-12-01 02:04:59', '2022-12-01 02:04:59', NULL),
(101, 'ca', 'ontario', '2022-12-01 02:04:59', '2022-12-01 02:04:59', NULL),
(102, 'in', 'tamilnadu', '2022-12-01 02:04:59', '2022-12-01 02:04:59', NULL),
(103, 'germanyd', 'des', '2022-12-15 06:44:32', '2022-12-15 06:44:32', NULL),
(104, 'norways', 'nos', '2022-12-15 06:44:46', '2022-12-15 06:44:46', NULL),
(105, 'vb', 'newyork', '2022-12-15 01:15:02', '2022-12-15 01:15:02', NULL),
(106, 'uk', 'london', '2022-12-15 01:15:02', '2022-12-15 01:15:02', NULL),
(107, 'au', 'ponom', '2022-12-15 01:15:02', '2022-12-15 01:15:02', NULL),
(108, 'cn', 'beijing', '2022-12-15 01:15:02', '2022-12-15 01:15:02', NULL),
(109, 'jp', 'tokyo', '2022-12-15 01:15:02', '2022-12-15 01:15:02', NULL),
(110, 'ca', 'ontario', '2022-12-15 01:15:02', '2022-12-15 01:15:02', NULL),
(111, 'in', 'tamilnadu', '2022-12-15 01:15:02', '2022-12-15 01:15:02', NULL),
(112, 'southafrica', 'za', '2022-12-15 14:20:55', '2022-12-15 14:20:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lta`
--

CREATE TABLE `lta` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `lead` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lta`
--

INSERT INTO `lta` (`id`, `name`, `lead`, `date`) VALUES
(1, 'mani', 50, '2022-11-01'),
(2, 'pavi', 35, '2022-11-02'),
(3, 'mani', 30, '2022-11-04'),
(4, 'pavi', 40, '2022-11-03');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_02_22_080856_create_cus_table', 1),
(6, '2022_03_03_142134_studentss', 1);

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
('mani@auditshipment.com', '$2y$10$ro4Ho3.UJti2gCYv7sY9bOaO.DPweINiD/lzNW3JyuTp/HrSI6sHK', '2022-11-03 22:35:20');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(250) NOT NULL,
  `student_phone` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`student_id`, `student_name`, `student_phone`) VALUES
(1, 'Pauline S. Rich', '412-735-0224'),
(2, 'Sarah C. White', '320-552-9961'),
(3, 'Samuel L. Leslie', '201-324-8264'),
(4, 'Norma R. Manly', '478-322-4715'),
(5, 'Kimberly R. Castro', '479-966-6788'),
(6, 'Elaine R. Davis', '701-685-8912'),
(7, 'Concepcion S. Gardner', '607-829-8758'),
(8, 'Patricia J. White', '803-789-0429'),
(9, 'Michael M. Bothwell', '214-585-0737'),
(10, 'Ronald C. Vansickle', '630-571-4107'),
(11, 'Clarence A. Rich', '904-459-3747'),
(12, 'Elizabeth W. Peterson', '404-380-9481'),
(13, 'Renee R. Hewitt', '323-350-4973'),
(14, 'John K. Love', '337-229-1983'),
(15, 'Teresa J. Rincon', '216-394-6894'),
(16, 'Erin S. Huckaby', '503-284-8652');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'pavi', 'pavi@gmail.com', NULL, 1, 'pavipavi', NULL, '2022-03-03 09:11:01', '2022-11-13 22:10:59'),
(3, 'kumar', 'kumar@gmail.com', NULL, 0, '$2y$10$ZQudhbJC/KmgUEPj2ub72.6XiQmHg5Bq89KVsaBXJ3oRIeR2cfku6', NULL, '2022-10-30 21:22:51', '2022-11-19 04:43:14'),
(4, 'mani', 'mani@auditshipment.com', NULL, 0, '$2y$10$zO0gbOw2fu5gd6JNnqCHKuD83gMkWOl2Nyx0NOKK.ua75RDF89Hbq', NULL, '2022-10-31 03:03:45', '2022-11-13 19:27:21'),
(5, 'balu', 'balu@gmail.com', NULL, 1, '$2y$10$QYBcLznFBco2ufi501oAA.am8CK5.bk9BfVpA8WgWkhhPyc3IglOK', NULL, '2022-11-15 23:50:38', '2022-11-19 04:30:43'),
(6, 'murugan', 'murugan@gmail.com', NULL, 1, '$2y$10$dpvMXF8RyybeAe4plhK3buJnkRXDZR2WfcuEJD/Snf5DbgZZfw0Ua', NULL, '2022-11-19 05:18:54', '2022-11-19 05:32:34'),
(7, 'kani', 'kani@gmail.com', NULL, 1, '$2y$10$KQP4rrN53LOgQRSWQDjPn.v9fhSi9JShSTnpPEPjYkcYsGdQsnhmy', NULL, '2022-11-19 08:26:02', '2022-11-24 22:33:12'),
(8, 'jill', 'jill@gmail.com', NULL, 0, '$2y$10$nJYyAXE6VJwuxeRoUc0wCu6WXaV2Nipbf2w.IjKLFFU5JliPD/PXG', NULL, '2022-11-24 22:38:47', '2022-11-24 22:39:35'),
(9, 'ram', 'ram@gmail.com', NULL, 1, '$2y$10$iaLLRVHntsgkXwaQQ0oZiejt4rcaB5V024PNOp8AyDN6zlbYHtlL.', NULL, '2022-11-26 01:16:16', '2022-11-27 00:14:25'),
(10, 'sekar', 'sekar@gmail.com', NULL, 1, '$2y$10$xL9hxj.wGNZlIFT2KhiA8e/NaFc5y7002FEFqR45N3qjH/b.riOMC', NULL, '2022-11-26 07:31:45', '2022-11-26 07:31:45'),
(11, 'vb', 'vb@gmail.com', NULL, 1, '$2y$10$iZMkVVa6.9gEJJXCMpVrA.GMqjrb4zXKoYte2zBhmqTht.cbL5HaS', NULL, '2022-12-01 01:06:04', '2022-12-01 01:06:04'),
(12, 'vb', 'vb+1@gmail.com', NULL, 1, '$2y$10$sbN9al0LWWYhMtZrAqxWlODa6flmruuLPssqzmthw3G0RAnBZoLU.', NULL, '2022-12-01 01:26:49', '2022-12-01 01:26:49'),
(13, 'boss', 'boss@gmail.com', NULL, 1, '$2y$10$nuSIterPEXrHONRvyXFPlO97xPHbV.irCNlijNXoqaknV.0EzVSKm', NULL, '2022-12-02 04:55:47', '2022-12-02 04:55:47'),
(14, 'sumi', 'sumi@gmail.com', NULL, 0, '$2y$10$/aMFRPUpXbpZIqBXm3uCX.jev.D2XXtLnvceYeEvbO6NHhJnOKgsi', NULL, '2022-12-02 08:49:23', '2022-12-02 08:49:23'),
(15, 'durai', 'durai@gmail.com', NULL, 1, '$2y$10$fAy75A9AplM3eLxFytQa9OGyVXgGi1lF3QrUCWsJSdVPKPaz4Mj.K', NULL, '2022-12-14 05:54:01', '2022-12-14 05:54:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cus`
--
ALTER TABLE `cus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `filter`
--
ALTER TABLE `filter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lta`
--
ALTER TABLE `lta`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cus`
--
ALTER TABLE `cus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `filter`
--
ALTER TABLE `filter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `lta`
--
ALTER TABLE `lta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
