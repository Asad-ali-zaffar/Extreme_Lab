-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2022 at 01:20 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forge`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `log_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_id` bigint(20) UNSIGNED DEFAULT NULL,
  `causer_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `properties` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `subject_id`, `causer_type`, `causer_id`, `properties`, `created_at`, `updated_at`) VALUES
(1, 'default', 'User was created', 'App\\Models\\User', 1, NULL, NULL, '[]', '2021-11-13 13:19:42', '2021-11-13 13:19:42'),
(2, 'default', 'Role was created', 'App\\Models\\Role', 1, NULL, NULL, '[]', '2021-11-13 13:19:42', '2021-11-13 13:19:42'),
(3, 'default', 'Currency was created', 'App\\Models\\Currency', 1, NULL, NULL, '[]', '2021-11-13 13:20:12', '2021-11-13 13:20:12'),
(4, 'default', 'Currency was created', 'App\\Models\\Currency', 2, NULL, NULL, '[]', '2021-11-13 13:20:12', '2021-11-13 13:20:12'),
(5, 'default', 'Currency was created', 'App\\Models\\Currency', 3, NULL, NULL, '[]', '2021-11-13 13:20:13', '2021-11-13 13:20:13'),
(6, 'default', 'Currency was created', 'App\\Models\\Currency', 4, NULL, NULL, '[]', '2021-11-13 13:20:14', '2021-11-13 13:20:14'),
(7, 'default', 'Currency was created', 'App\\Models\\Currency', 5, NULL, NULL, '[]', '2021-11-13 13:20:15', '2021-11-13 13:20:15'),
(8, 'default', 'Currency was created', 'App\\Models\\Currency', 6, NULL, NULL, '[]', '2021-11-13 13:20:15', '2021-11-13 13:20:15'),
(9, 'default', 'Currency was created', 'App\\Models\\Currency', 7, NULL, NULL, '[]', '2021-11-13 13:20:16', '2021-11-13 13:20:16'),
(10, 'default', 'Currency was created', 'App\\Models\\Currency', 8, NULL, NULL, '[]', '2021-11-13 13:20:17', '2021-11-13 13:20:17'),
(11, 'default', 'Currency was created', 'App\\Models\\Currency', 9, NULL, NULL, '[]', '2021-11-13 13:20:17', '2021-11-13 13:20:17'),
(12, 'default', 'Currency was created', 'App\\Models\\Currency', 10, NULL, NULL, '[]', '2021-11-13 13:20:17', '2021-11-13 13:20:17'),
(13, 'default', 'Currency was created', 'App\\Models\\Currency', 11, NULL, NULL, '[]', '2021-11-13 13:20:19', '2021-11-13 13:20:19'),
(14, 'default', 'Currency was created', 'App\\Models\\Currency', 12, NULL, NULL, '[]', '2021-11-13 13:20:19', '2021-11-13 13:20:19'),
(15, 'default', 'Currency was created', 'App\\Models\\Currency', 13, NULL, NULL, '[]', '2021-11-13 13:20:19', '2021-11-13 13:20:19'),
(16, 'default', 'Currency was created', 'App\\Models\\Currency', 14, NULL, NULL, '[]', '2021-11-13 13:20:21', '2021-11-13 13:20:21'),
(17, 'default', 'Currency was created', 'App\\Models\\Currency', 15, NULL, NULL, '[]', '2021-11-13 13:20:21', '2021-11-13 13:20:21'),
(18, 'default', 'Currency was created', 'App\\Models\\Currency', 16, NULL, NULL, '[]', '2021-11-13 13:20:22', '2021-11-13 13:20:22'),
(19, 'default', 'Currency was created', 'App\\Models\\Currency', 17, NULL, NULL, '[]', '2021-11-13 13:20:22', '2021-11-13 13:20:22'),
(20, 'default', 'Currency was created', 'App\\Models\\Currency', 18, NULL, NULL, '[]', '2021-11-13 13:20:23', '2021-11-13 13:20:23'),
(21, 'default', 'Currency was created', 'App\\Models\\Currency', 19, NULL, NULL, '[]', '2021-11-13 13:20:24', '2021-11-13 13:20:24'),
(22, 'default', 'Currency was created', 'App\\Models\\Currency', 20, NULL, NULL, '[]', '2021-11-13 13:20:24', '2021-11-13 13:20:24'),
(23, 'default', 'Currency was created', 'App\\Models\\Currency', 21, NULL, NULL, '[]', '2021-11-13 13:20:25', '2021-11-13 13:20:25'),
(24, 'default', 'Currency was created', 'App\\Models\\Currency', 22, NULL, NULL, '[]', '2021-11-13 13:20:26', '2021-11-13 13:20:26'),
(25, 'default', 'Currency was created', 'App\\Models\\Currency', 23, NULL, NULL, '[]', '2021-11-13 13:20:26', '2021-11-13 13:20:26'),
(26, 'default', 'Currency was created', 'App\\Models\\Currency', 24, NULL, NULL, '[]', '2021-11-13 13:20:26', '2021-11-13 13:20:26'),
(27, 'default', 'Currency was created', 'App\\Models\\Currency', 25, NULL, NULL, '[]', '2021-11-13 13:20:28', '2021-11-13 13:20:28'),
(28, 'default', 'Currency was created', 'App\\Models\\Currency', 26, NULL, NULL, '[]', '2021-11-13 13:20:28', '2021-11-13 13:20:28'),
(29, 'default', 'Currency was created', 'App\\Models\\Currency', 27, NULL, NULL, '[]', '2021-11-13 13:20:28', '2021-11-13 13:20:28'),
(30, 'default', 'Currency was created', 'App\\Models\\Currency', 28, NULL, NULL, '[]', '2021-11-13 13:20:30', '2021-11-13 13:20:30'),
(31, 'default', 'Currency was created', 'App\\Models\\Currency', 29, NULL, NULL, '[]', '2021-11-13 13:20:30', '2021-11-13 13:20:30'),
(32, 'default', 'Currency was created', 'App\\Models\\Currency', 30, NULL, NULL, '[]', '2021-11-13 13:20:31', '2021-11-13 13:20:31'),
(33, 'default', 'Currency was created', 'App\\Models\\Currency', 31, NULL, NULL, '[]', '2021-11-13 13:20:31', '2021-11-13 13:20:31'),
(34, 'default', 'Currency was created', 'App\\Models\\Currency', 32, NULL, NULL, '[]', '2021-11-13 13:20:32', '2021-11-13 13:20:32'),
(35, 'default', 'Currency was created', 'App\\Models\\Currency', 33, NULL, NULL, '[]', '2021-11-13 13:20:33', '2021-11-13 13:20:33'),
(36, 'default', 'Currency was created', 'App\\Models\\Currency', 34, NULL, NULL, '[]', '2021-11-13 13:20:33', '2021-11-13 13:20:33'),
(37, 'default', 'Currency was created', 'App\\Models\\Currency', 35, NULL, NULL, '[]', '2021-11-13 13:20:35', '2021-11-13 13:20:35'),
(38, 'default', 'Currency was created', 'App\\Models\\Currency', 36, NULL, NULL, '[]', '2021-11-13 13:20:35', '2021-11-13 13:20:35'),
(39, 'default', 'Currency was created', 'App\\Models\\Currency', 37, NULL, NULL, '[]', '2021-11-13 13:20:35', '2021-11-13 13:20:35'),
(40, 'default', 'Currency was created', 'App\\Models\\Currency', 38, NULL, NULL, '[]', '2021-11-13 13:20:37', '2021-11-13 13:20:37'),
(41, 'default', 'Currency was created', 'App\\Models\\Currency', 39, NULL, NULL, '[]', '2021-11-13 13:20:37', '2021-11-13 13:20:37'),
(42, 'default', 'Currency was created', 'App\\Models\\Currency', 40, NULL, NULL, '[]', '2021-11-13 13:20:37', '2021-11-13 13:20:37'),
(43, 'default', 'Currency was created', 'App\\Models\\Currency', 41, NULL, NULL, '[]', '2021-11-13 13:20:38', '2021-11-13 13:20:38'),
(44, 'default', 'Currency was created', 'App\\Models\\Currency', 42, NULL, NULL, '[]', '2021-11-13 13:20:39', '2021-11-13 13:20:39'),
(45, 'default', 'Currency was created', 'App\\Models\\Currency', 43, NULL, NULL, '[]', '2021-11-13 13:20:39', '2021-11-13 13:20:39'),
(46, 'default', 'Currency was created', 'App\\Models\\Currency', 44, NULL, NULL, '[]', '2021-11-13 13:20:39', '2021-11-13 13:20:39'),
(47, 'default', 'Currency was created', 'App\\Models\\Currency', 45, NULL, NULL, '[]', '2021-11-13 13:20:40', '2021-11-13 13:20:40'),
(48, 'default', 'Currency was created', 'App\\Models\\Currency', 46, NULL, NULL, '[]', '2021-11-13 13:20:41', '2021-11-13 13:20:41'),
(49, 'default', 'Currency was created', 'App\\Models\\Currency', 47, NULL, NULL, '[]', '2021-11-13 13:20:41', '2021-11-13 13:20:41'),
(50, 'default', 'Currency was created', 'App\\Models\\Currency', 48, NULL, NULL, '[]', '2021-11-13 13:20:42', '2021-11-13 13:20:42'),
(51, 'default', 'Currency was created', 'App\\Models\\Currency', 49, NULL, NULL, '[]', '2021-11-13 13:20:43', '2021-11-13 13:20:43'),
(52, 'default', 'Currency was created', 'App\\Models\\Currency', 50, NULL, NULL, '[]', '2021-11-13 13:20:44', '2021-11-13 13:20:44'),
(53, 'default', 'Currency was created', 'App\\Models\\Currency', 51, NULL, NULL, '[]', '2021-11-13 13:20:44', '2021-11-13 13:20:44'),
(54, 'default', 'Currency was created', 'App\\Models\\Currency', 52, NULL, NULL, '[]', '2021-11-13 13:20:46', '2021-11-13 13:20:46'),
(55, 'default', 'Currency was created', 'App\\Models\\Currency', 53, NULL, NULL, '[]', '2021-11-13 13:20:46', '2021-11-13 13:20:46'),
(56, 'default', 'Currency was created', 'App\\Models\\Currency', 54, NULL, NULL, '[]', '2021-11-13 13:20:46', '2021-11-13 13:20:46'),
(57, 'default', 'Currency was created', 'App\\Models\\Currency', 55, NULL, NULL, '[]', '2021-11-13 13:20:48', '2021-11-13 13:20:48'),
(58, 'default', 'Currency was created', 'App\\Models\\Currency', 56, NULL, NULL, '[]', '2021-11-13 13:20:48', '2021-11-13 13:20:48'),
(59, 'default', 'Currency was created', 'App\\Models\\Currency', 57, NULL, NULL, '[]', '2021-11-13 13:20:48', '2021-11-13 13:20:48'),
(60, 'default', 'Currency was created', 'App\\Models\\Currency', 58, NULL, NULL, '[]', '2021-11-13 13:20:49', '2021-11-13 13:20:49'),
(61, 'default', 'Currency was created', 'App\\Models\\Currency', 59, NULL, NULL, '[]', '2021-11-13 13:20:50', '2021-11-13 13:20:50'),
(62, 'default', 'Currency was created', 'App\\Models\\Currency', 60, NULL, NULL, '[]', '2021-11-13 13:20:50', '2021-11-13 13:20:50'),
(63, 'default', 'Currency was created', 'App\\Models\\Currency', 61, NULL, NULL, '[]', '2021-11-13 13:20:51', '2021-11-13 13:20:51'),
(64, 'default', 'Currency was created', 'App\\Models\\Currency', 62, NULL, NULL, '[]', '2021-11-13 13:20:51', '2021-11-13 13:20:51'),
(65, 'default', 'Currency was created', 'App\\Models\\Currency', 63, NULL, NULL, '[]', '2021-11-13 13:20:52', '2021-11-13 13:20:52'),
(66, 'default', 'Currency was created', 'App\\Models\\Currency', 64, NULL, NULL, '[]', '2021-11-13 13:20:53', '2021-11-13 13:20:53'),
(67, 'default', 'Currency was created', 'App\\Models\\Currency', 65, NULL, NULL, '[]', '2021-11-13 13:20:53', '2021-11-13 13:20:53'),
(68, 'default', 'Currency was created', 'App\\Models\\Currency', 66, NULL, NULL, '[]', '2021-11-13 13:20:54', '2021-11-13 13:20:54'),
(69, 'default', 'Currency was created', 'App\\Models\\Currency', 67, NULL, NULL, '[]', '2021-11-13 13:20:55', '2021-11-13 13:20:55'),
(70, 'default', 'Currency was created', 'App\\Models\\Currency', 68, NULL, NULL, '[]', '2021-11-13 13:20:55', '2021-11-13 13:20:55'),
(71, 'default', 'Currency was created', 'App\\Models\\Currency', 69, NULL, NULL, '[]', '2021-11-13 13:20:56', '2021-11-13 13:20:56'),
(72, 'default', 'Currency was created', 'App\\Models\\Currency', 70, NULL, NULL, '[]', '2021-11-13 13:20:57', '2021-11-13 13:20:57'),
(73, 'default', 'Currency was created', 'App\\Models\\Currency', 71, NULL, NULL, '[]', '2021-11-13 13:20:57', '2021-11-13 13:20:57'),
(74, 'default', 'Currency was created', 'App\\Models\\Currency', 72, NULL, NULL, '[]', '2021-11-13 13:20:59', '2021-11-13 13:20:59'),
(75, 'default', 'Currency was created', 'App\\Models\\Currency', 73, NULL, NULL, '[]', '2021-11-13 13:20:59', '2021-11-13 13:20:59'),
(76, 'default', 'Currency was created', 'App\\Models\\Currency', 74, NULL, NULL, '[]', '2021-11-13 13:20:59', '2021-11-13 13:20:59'),
(77, 'default', 'Currency was created', 'App\\Models\\Currency', 75, NULL, NULL, '[]', '2021-11-13 13:21:01', '2021-11-13 13:21:01'),
(78, 'default', 'Currency was created', 'App\\Models\\Currency', 76, NULL, NULL, '[]', '2021-11-13 13:21:01', '2021-11-13 13:21:01'),
(79, 'default', 'Currency was created', 'App\\Models\\Currency', 77, NULL, NULL, '[]', '2021-11-13 13:21:02', '2021-11-13 13:21:02'),
(80, 'default', 'Currency was created', 'App\\Models\\Currency', 78, NULL, NULL, '[]', '2021-11-13 13:21:03', '2021-11-13 13:21:03'),
(81, 'default', 'Currency was created', 'App\\Models\\Currency', 79, NULL, NULL, '[]', '2021-11-13 13:21:03', '2021-11-13 13:21:03'),
(82, 'default', 'Currency was created', 'App\\Models\\Currency', 80, NULL, NULL, '[]', '2021-11-13 13:21:04', '2021-11-13 13:21:04'),
(83, 'default', 'Currency was created', 'App\\Models\\Currency', 81, NULL, NULL, '[]', '2021-11-13 13:21:05', '2021-11-13 13:21:05'),
(84, 'default', 'Currency was created', 'App\\Models\\Currency', 82, NULL, NULL, '[]', '2021-11-13 13:21:06', '2021-11-13 13:21:06'),
(85, 'default', 'Currency was created', 'App\\Models\\Currency', 83, NULL, NULL, '[]', '2021-11-13 13:21:06', '2021-11-13 13:21:06'),
(86, 'default', 'Currency was created', 'App\\Models\\Currency', 84, NULL, NULL, '[]', '2021-11-13 13:21:08', '2021-11-13 13:21:08'),
(87, 'default', 'Currency was created', 'App\\Models\\Currency', 85, NULL, NULL, '[]', '2021-11-13 13:21:08', '2021-11-13 13:21:08'),
(88, 'default', 'Currency was created', 'App\\Models\\Currency', 86, NULL, NULL, '[]', '2021-11-13 13:21:08', '2021-11-13 13:21:08'),
(89, 'default', 'Currency was created', 'App\\Models\\Currency', 87, NULL, NULL, '[]', '2021-11-13 13:21:09', '2021-11-13 13:21:09'),
(90, 'default', 'Currency was created', 'App\\Models\\Currency', 88, NULL, NULL, '[]', '2021-11-13 13:21:10', '2021-11-13 13:21:10'),
(91, 'default', 'Currency was created', 'App\\Models\\Currency', 89, NULL, NULL, '[]', '2021-11-13 13:21:10', '2021-11-13 13:21:10'),
(92, 'default', 'Currency was created', 'App\\Models\\Currency', 90, NULL, NULL, '[]', '2021-11-13 13:21:10', '2021-11-13 13:21:10'),
(93, 'default', 'Currency was created', 'App\\Models\\Currency', 91, NULL, NULL, '[]', '2021-11-13 13:21:12', '2021-11-13 13:21:12'),
(94, 'default', 'Currency was created', 'App\\Models\\Currency', 92, NULL, NULL, '[]', '2021-11-13 13:21:12', '2021-11-13 13:21:12'),
(95, 'default', 'Currency was created', 'App\\Models\\Currency', 93, NULL, NULL, '[]', '2021-11-13 13:21:12', '2021-11-13 13:21:12'),
(96, 'default', 'Currency was created', 'App\\Models\\Currency', 94, NULL, NULL, '[]', '2021-11-13 13:21:13', '2021-11-13 13:21:13'),
(97, 'default', 'Currency was created', 'App\\Models\\Currency', 95, NULL, NULL, '[]', '2021-11-13 13:21:14', '2021-11-13 13:21:14'),
(98, 'default', 'Currency was created', 'App\\Models\\Currency', 96, NULL, NULL, '[]', '2021-11-13 13:21:14', '2021-11-13 13:21:14'),
(99, 'default', 'Currency was created', 'App\\Models\\Currency', 97, NULL, NULL, '[]', '2021-11-13 13:21:15', '2021-11-13 13:21:15'),
(100, 'default', 'Currency was created', 'App\\Models\\Currency', 98, NULL, NULL, '[]', '2021-11-13 13:21:16', '2021-11-13 13:21:16'),
(101, 'default', 'Currency was created', 'App\\Models\\Currency', 99, NULL, NULL, '[]', '2021-11-13 13:21:16', '2021-11-13 13:21:16'),
(102, 'default', 'Currency was created', 'App\\Models\\Currency', 100, NULL, NULL, '[]', '2021-11-13 13:21:17', '2021-11-13 13:21:17'),
(103, 'default', 'Currency was created', 'App\\Models\\Currency', 101, NULL, NULL, '[]', '2021-11-13 13:21:18', '2021-11-13 13:21:18'),
(104, 'default', 'Currency was created', 'App\\Models\\Currency', 102, NULL, NULL, '[]', '2021-11-13 13:21:18', '2021-11-13 13:21:18'),
(105, 'default', 'Currency was created', 'App\\Models\\Currency', 103, NULL, NULL, '[]', '2021-11-13 13:21:19', '2021-11-13 13:21:19'),
(106, 'default', 'Currency was created', 'App\\Models\\Currency', 104, NULL, NULL, '[]', '2021-11-13 13:21:19', '2021-11-13 13:21:19'),
(107, 'default', 'Currency was created', 'App\\Models\\Currency', 105, NULL, NULL, '[]', '2021-11-13 13:21:20', '2021-11-13 13:21:20'),
(108, 'default', 'Currency was created', 'App\\Models\\Currency', 106, NULL, NULL, '[]', '2021-11-13 13:21:21', '2021-11-13 13:21:21'),
(109, 'default', 'Currency was created', 'App\\Models\\Currency', 107, NULL, NULL, '[]', '2021-11-13 13:21:21', '2021-11-13 13:21:21'),
(110, 'default', 'Currency was created', 'App\\Models\\Currency', 108, NULL, NULL, '[]', '2021-11-13 13:21:21', '2021-11-13 13:21:21'),
(111, 'default', 'Currency was created', 'App\\Models\\Currency', 109, NULL, NULL, '[]', '2021-11-13 13:21:23', '2021-11-13 13:21:23'),
(112, 'default', 'Currency was created', 'App\\Models\\Currency', 110, NULL, NULL, '[]', '2021-11-13 13:21:23', '2021-11-13 13:21:23'),
(113, 'default', 'Currency was created', 'App\\Models\\Currency', 111, NULL, NULL, '[]', '2021-11-13 13:21:23', '2021-11-13 13:21:23'),
(114, 'default', 'Currency was created', 'App\\Models\\Currency', 112, NULL, NULL, '[]', '2021-11-13 13:21:24', '2021-11-13 13:21:24'),
(115, 'default', 'Currency was created', 'App\\Models\\Currency', 113, NULL, NULL, '[]', '2021-11-13 13:21:25', '2021-11-13 13:21:25'),
(116, 'default', 'Currency was created', 'App\\Models\\Currency', 114, NULL, NULL, '[]', '2021-11-13 13:21:26', '2021-11-13 13:21:26'),
(117, 'default', 'Currency was created', 'App\\Models\\Currency', 115, NULL, NULL, '[]', '2021-11-13 13:21:27', '2021-11-13 13:21:27'),
(118, 'default', 'Currency was created', 'App\\Models\\Currency', 116, NULL, NULL, '[]', '2021-11-13 13:21:27', '2021-11-13 13:21:27'),
(119, 'default', 'Currency was created', 'App\\Models\\Currency', 117, NULL, NULL, '[]', '2021-11-13 13:21:28', '2021-11-13 13:21:28'),
(120, 'default', 'Currency was created', 'App\\Models\\Currency', 118, NULL, NULL, '[]', '2021-11-13 13:21:29', '2021-11-13 13:21:29'),
(121, 'default', 'Currency was created', 'App\\Models\\Currency', 119, NULL, NULL, '[]', '2021-11-13 13:21:30', '2021-11-13 13:21:30'),
(122, 'default', 'Currency was created', 'App\\Models\\Currency', 120, NULL, NULL, '[]', '2021-11-13 13:21:30', '2021-11-13 13:21:30'),
(123, 'default', 'Currency was created', 'App\\Models\\Currency', 121, NULL, NULL, '[]', '2021-11-13 13:21:31', '2021-11-13 13:21:31'),
(124, 'default', 'Currency was created', 'App\\Models\\Currency', 122, NULL, NULL, '[]', '2021-11-13 13:21:32', '2021-11-13 13:21:32'),
(125, 'default', 'Currency was created', 'App\\Models\\Currency', 123, NULL, NULL, '[]', '2021-11-13 13:21:32', '2021-11-13 13:21:32'),
(126, 'default', 'Currency was created', 'App\\Models\\Currency', 124, NULL, NULL, '[]', '2021-11-13 13:21:33', '2021-11-13 13:21:33'),
(127, 'default', 'Currency was created', 'App\\Models\\Currency', 125, NULL, NULL, '[]', '2021-11-13 13:21:34', '2021-11-13 13:21:34'),
(128, 'default', 'Currency was created', 'App\\Models\\Currency', 126, NULL, NULL, '[]', '2021-11-13 13:21:35', '2021-11-13 13:21:35'),
(129, 'default', 'Currency was created', 'App\\Models\\Currency', 127, NULL, NULL, '[]', '2021-11-13 13:21:36', '2021-11-13 13:21:36'),
(130, 'default', 'Currency was created', 'App\\Models\\Currency', 128, NULL, NULL, '[]', '2021-11-13 13:21:37', '2021-11-13 13:21:37'),
(131, 'default', 'Currency was created', 'App\\Models\\Currency', 129, NULL, NULL, '[]', '2021-11-13 13:21:38', '2021-11-13 13:21:38'),
(132, 'default', 'Currency was created', 'App\\Models\\Currency', 130, NULL, NULL, '[]', '2021-11-13 13:21:38', '2021-11-13 13:21:38'),
(133, 'default', 'Currency was created', 'App\\Models\\Currency', 131, NULL, NULL, '[]', '2021-11-13 13:21:40', '2021-11-13 13:21:40'),
(134, 'default', 'Currency was created', 'App\\Models\\Currency', 132, NULL, NULL, '[]', '2021-11-13 13:21:41', '2021-11-13 13:21:41'),
(135, 'default', 'Currency was created', 'App\\Models\\Currency', 133, NULL, NULL, '[]', '2021-11-13 13:21:41', '2021-11-13 13:21:41'),
(136, 'default', 'Currency was created', 'App\\Models\\Currency', 134, NULL, NULL, '[]', '2021-11-13 13:21:43', '2021-11-13 13:21:43'),
(137, 'default', 'Currency was created', 'App\\Models\\Currency', 135, NULL, NULL, '[]', '2021-11-13 13:21:43', '2021-11-13 13:21:43'),
(138, 'default', 'Currency was created', 'App\\Models\\Currency', 136, NULL, NULL, '[]', '2021-11-13 13:21:44', '2021-11-13 13:21:44'),
(139, 'default', 'Currency was created', 'App\\Models\\Currency', 137, NULL, NULL, '[]', '2021-11-13 13:21:45', '2021-11-13 13:21:45'),
(140, 'default', 'Currency was created', 'App\\Models\\Currency', 138, NULL, NULL, '[]', '2021-11-13 13:21:46', '2021-11-13 13:21:46'),
(141, 'default', 'Currency was created', 'App\\Models\\Currency', 139, NULL, NULL, '[]', '2021-11-13 13:21:46', '2021-11-13 13:21:46'),
(142, 'default', 'Currency was created', 'App\\Models\\Currency', 140, NULL, NULL, '[]', '2021-11-13 13:21:46', '2021-11-13 13:21:46'),
(143, 'default', 'Currency was created', 'App\\Models\\Currency', 141, NULL, NULL, '[]', '2021-11-13 13:21:46', '2021-11-13 13:21:46'),
(144, 'default', 'Currency was created', 'App\\Models\\Currency', 142, NULL, NULL, '[]', '2021-11-13 13:21:48', '2021-11-13 13:21:48'),
(145, 'default', 'Currency was created', 'App\\Models\\Currency', 143, NULL, NULL, '[]', '2021-11-13 13:21:48', '2021-11-13 13:21:48'),
(146, 'default', 'Currency was created', 'App\\Models\\Currency', 144, NULL, NULL, '[]', '2021-11-13 13:21:49', '2021-11-13 13:21:49'),
(147, 'default', 'Currency was created', 'App\\Models\\Currency', 145, NULL, NULL, '[]', '2021-11-13 13:21:50', '2021-11-13 13:21:50'),
(148, 'default', 'Currency was created', 'App\\Models\\Currency', 146, NULL, NULL, '[]', '2021-11-13 13:21:50', '2021-11-13 13:21:50'),
(149, 'default', 'Currency was created', 'App\\Models\\Currency', 147, NULL, NULL, '[]', '2021-11-13 13:21:51', '2021-11-13 13:21:51'),
(150, 'default', 'Currency was created', 'App\\Models\\Currency', 148, NULL, NULL, '[]', '2021-11-13 13:21:51', '2021-11-13 13:21:51'),
(151, 'default', 'Currency was created', 'App\\Models\\Currency', 149, NULL, NULL, '[]', '2021-11-13 13:21:52', '2021-11-13 13:21:52'),
(152, 'default', 'Currency was created', 'App\\Models\\Currency', 150, NULL, NULL, '[]', '2021-11-13 13:21:53', '2021-11-13 13:21:53'),
(153, 'default', 'Currency was created', 'App\\Models\\Currency', 151, NULL, NULL, '[]', '2021-11-13 13:21:53', '2021-11-13 13:21:53'),
(154, 'default', 'Currency was created', 'App\\Models\\Currency', 152, NULL, NULL, '[]', '2021-11-13 13:21:55', '2021-11-13 13:21:55'),
(155, 'default', 'Currency was created', 'App\\Models\\Currency', 153, NULL, NULL, '[]', '2021-11-13 13:21:55', '2021-11-13 13:21:55'),
(156, 'default', 'Currency was created', 'App\\Models\\Currency', 154, NULL, NULL, '[]', '2021-11-13 13:21:55', '2021-11-13 13:21:55'),
(157, 'default', 'Currency was created', 'App\\Models\\Currency', 155, NULL, NULL, '[]', '2021-11-13 13:21:56', '2021-11-13 13:21:56'),
(158, 'default', 'Currency was created', 'App\\Models\\Currency', 156, NULL, NULL, '[]', '2021-11-13 13:21:57', '2021-11-13 13:21:57'),
(159, 'default', 'Currency was created', 'App\\Models\\Currency', 157, NULL, NULL, '[]', '2021-11-13 13:21:57', '2021-11-13 13:21:57'),
(160, 'default', 'Currency was created', 'App\\Models\\Currency', 158, NULL, NULL, '[]', '2021-11-13 13:21:57', '2021-11-13 13:21:57'),
(161, 'default', 'Currency was created', 'App\\Models\\Currency', 159, NULL, NULL, '[]', '2021-11-13 13:21:58', '2021-11-13 13:21:58'),
(162, 'default', 'Currency was created', 'App\\Models\\Currency', 160, NULL, NULL, '[]', '2021-11-13 13:21:59', '2021-11-13 13:21:59'),
(163, 'default', 'Currency was created', 'App\\Models\\Currency', 161, NULL, NULL, '[]', '2021-11-13 13:22:00', '2021-11-13 13:22:00'),
(164, 'default', 'Currency was created', 'App\\Models\\Currency', 162, NULL, NULL, '[]', '2021-11-13 13:22:01', '2021-11-13 13:22:01'),
(165, 'default', 'Currency was created', 'App\\Models\\Currency', 163, NULL, NULL, '[]', '2021-11-13 13:22:02', '2021-11-13 13:22:02'),
(166, 'default', 'Currency was created', 'App\\Models\\Currency', 164, NULL, NULL, '[]', '2021-11-13 13:22:02', '2021-11-13 13:22:02'),
(167, 'default', 'Test was created', 'App\\Models\\Test', 1, NULL, NULL, '[]', '2021-11-13 13:22:12', '2021-11-13 13:22:12'),
(168, 'default', 'Culture was created', 'App\\Models\\Culture', 1, NULL, NULL, '[]', '2021-11-13 13:22:14', '2021-11-13 13:22:14'),
(169, 'default', 'Patient was created', 'App\\Models\\Patient', 1, NULL, NULL, '[]', '2021-11-13 13:22:17', '2021-11-13 13:22:17'),
(170, 'default', 'Antibiotic was created', 'App\\Models\\Branch', 1, NULL, NULL, '[]', '2021-11-13 13:22:19', '2021-11-13 13:22:19'),
(171, 'default', 'Patient was created', 'App\\Models\\Patient', 2, 'App\\Models\\User', 1, '[]', '2021-12-04 11:51:25', '2021-12-04 11:51:25'),
(172, 'default', 'Patient was created', 'App\\Models\\Patient', 3, 'App\\Models\\User', 1, '[]', '2021-12-13 00:29:13', '2021-12-13 00:29:13'),
(173, 'default', 'Patient was created', 'App\\Models\\Patient', 4, 'App\\Models\\User', 1, '[]', '2021-12-13 00:39:49', '2021-12-13 00:39:49'),
(174, 'default', 'Patient was updated', 'App\\Models\\Patient', 4, 'App\\Models\\User', 1, '[]', '2021-12-13 00:40:56', '2021-12-13 00:40:56'),
(175, 'default', 'Patient was updated', 'App\\Models\\Patient', 4, 'App\\Models\\User', 1, '[]', '2021-12-13 01:36:48', '2021-12-13 01:36:48'),
(176, 'default', 'Patient was updated', 'App\\Models\\Patient', 4, 'App\\Models\\User', 1, '[]', '2021-12-13 01:37:32', '2021-12-13 01:37:32'),
(177, 'default', 'Patient was updated', 'App\\Models\\Patient', 4, 'App\\Models\\User', 1, '[]', '2021-12-13 01:47:12', '2021-12-13 01:47:12'),
(178, 'default', 'Patient was updated', 'App\\Models\\Patient', 4, 'App\\Models\\User', 1, '[]', '2021-12-13 01:56:21', '2021-12-13 01:56:21'),
(179, 'default', 'Patient was updated', 'App\\Models\\Patient', 4, 'App\\Models\\User', 1, '[]', '2021-12-13 01:57:14', '2021-12-13 01:57:14'),
(180, 'default', 'Patient was updated', 'App\\Models\\Patient', 4, 'App\\Models\\User', 1, '[]', '2021-12-13 01:58:16', '2021-12-13 01:58:16'),
(181, 'default', 'User was updated', 'App\\Models\\User', 1, 'App\\Models\\User', 1, '[]', '2021-12-13 01:59:18', '2021-12-13 01:59:18'),
(182, 'default', 'Patient was updated', 'App\\Models\\Patient', 4, 'App\\Models\\User', 1, '[]', '2021-12-13 01:59:41', '2021-12-13 01:59:41'),
(183, 'default', 'Patient was updated', 'App\\Models\\Patient', 4, 'App\\Models\\User', 1, '[]', '2021-12-13 02:00:51', '2021-12-13 02:00:51'),
(184, 'default', 'Patient was updated', 'App\\Models\\Patient', 4, 'App\\Models\\User', 1, '[]', '2021-12-13 02:01:31', '2021-12-13 02:01:31'),
(185, 'default', 'Patient was updated', 'App\\Models\\Patient', 4, 'App\\Models\\User', 1, '[]', '2021-12-13 02:04:02', '2021-12-13 02:04:02'),
(186, 'default', 'Patient was created', 'App\\Models\\Patient', 5, 'App\\Models\\User', 1, '[]', '2021-12-14 01:38:03', '2021-12-14 01:38:03'),
(187, 'default', 'Doctor was created', 'App\\Models\\Doctor', 1, 'App\\Models\\User', 1, '[]', '2021-12-14 01:41:22', '2021-12-14 01:41:22'),
(188, 'default', 'Patient was created', 'App\\Models\\Organizations', 2, 'App\\Models\\User', 1, '[]', '2021-12-17 12:49:50', '2021-12-17 12:49:50'),
(189, 'default', 'Patient was created', 'App\\Models\\Organizations', 3, 'App\\Models\\User', 1, '[]', '2021-12-17 13:36:16', '2021-12-17 13:36:16'),
(190, 'default', 'Patient was created', 'App\\Models\\Organizations', 4, 'App\\Models\\User', 1, '[]', '2021-12-17 13:39:24', '2021-12-17 13:39:24'),
(191, 'default', 'Patient was created', 'App\\Models\\Organizations', 5, 'App\\Models\\User', 1, '[]', '2021-12-17 13:40:41', '2021-12-17 13:40:41'),
(192, 'default', 'Patient was deleted', 'App\\Models\\Patient', 5, 'App\\Models\\User', 1, '[]', '2021-12-17 13:40:56', '2021-12-17 13:40:56'),
(193, 'default', 'Patient was deleted', 'App\\Models\\Organizations', 5, 'App\\Models\\User', 1, '[]', '2021-12-17 13:45:43', '2021-12-17 13:45:43'),
(194, 'default', 'Patient was updated', 'App\\Models\\Organizations', 4, 'App\\Models\\User', 1, '[]', '2021-12-17 13:51:08', '2021-12-17 13:51:08'),
(195, 'default', 'Patient was deleted', 'App\\Models\\Organizations', 4, 'App\\Models\\User', 1, '[]', '2021-12-17 13:51:16', '2021-12-17 13:51:16'),
(196, 'default', 'Patient was created', 'App\\Models\\Labs', 7, 'App\\Models\\User', 1, '[]', '2021-12-18 03:27:31', '2021-12-18 03:27:31'),
(197, 'default', 'Patient was updated', 'App\\Models\\Labs', 7, 'App\\Models\\User', 1, '[]', '2021-12-18 04:07:20', '2021-12-18 04:07:20'),
(198, 'default', 'Patient was created', 'App\\Models\\Centers', 3, 'App\\Models\\User', 1, '[]', '2021-12-21 13:19:33', '2021-12-21 13:19:33'),
(199, 'default', 'Patient was updated', 'App\\Models\\Centers', 3, 'App\\Models\\User', 1, '[]', '2021-12-21 13:30:05', '2021-12-21 13:30:05'),
(200, 'default', 'Patient was created', 'App\\Models\\Centers', 4, 'App\\Models\\User', 1, '[]', '2021-12-21 13:31:44', '2021-12-21 13:31:44'),
(201, 'default', 'Doctor was created', 'App\\Models\\Doctor', 2, 'App\\Models\\User', 1, '[]', '2021-12-23 04:09:02', '2021-12-23 04:09:02'),
(202, 'default', 'Doctor was updated', 'App\\Models\\Doctor', 2, 'App\\Models\\User', 1, '[]', '2021-12-23 04:36:32', '2021-12-23 04:36:32'),
(203, 'default', 'Doctor was updated', 'App\\Models\\Doctor', 2, 'App\\Models\\User', 1, '[]', '2021-12-23 04:37:54', '2021-12-23 04:37:54'),
(204, 'default', 'Doctor was updated', 'App\\Models\\Doctor', 2, 'App\\Models\\User', 1, '[]', '2021-12-23 04:39:05', '2021-12-23 04:39:05'),
(205, 'default', 'Doctor was updated', 'App\\Models\\Doctor', 2, 'App\\Models\\User', 1, '[]', '2021-12-23 04:39:59', '2021-12-23 04:39:59'),
(206, 'default', 'Doctor was updated', 'App\\Models\\Doctor', 2, 'App\\Models\\User', 1, '[]', '2021-12-23 04:39:59', '2021-12-23 04:39:59'),
(207, 'default', 'Patient was created', 'App\\Models\\Departments', 1, 'App\\Models\\User', 1, '[]', '2021-12-27 12:38:38', '2021-12-27 12:38:38'),
(208, 'default', 'Patient was updated', 'App\\Models\\Departments', 1, 'App\\Models\\User', 1, '[]', '2021-12-27 12:46:29', '2021-12-27 12:46:29'),
(209, 'default', 'Patient was created', 'App\\Models\\Specializations', 1, 'App\\Models\\User', 1, '[]', '2021-12-27 12:55:29', '2021-12-27 12:55:29'),
(210, 'default', 'Patient was updated', 'App\\Models\\Specializations', 1, 'App\\Models\\User', 1, '[]', '2021-12-27 12:56:01', '2021-12-27 12:56:01'),
(211, 'default', 'Patient was updated', 'App\\Models\\Departments', 1, 'App\\Models\\User', 1, '[]', '2021-12-27 13:00:42', '2021-12-27 13:00:42'),
(212, 'default', 'Patient was created', 'App\\Models\\Departments', 2, 'App\\Models\\User', 1, '[]', '2021-12-27 13:00:57', '2021-12-27 13:00:57'),
(213, 'default', 'Patient was created', 'App\\Models\\Departments', 3, 'App\\Models\\User', 1, '[]', '2021-12-27 13:01:08', '2021-12-27 13:01:08'),
(214, 'default', 'Patient was created', 'App\\Models\\Departments', 4, 'App\\Models\\User', 1, '[]', '2021-12-27 13:01:20', '2021-12-27 13:01:20'),
(215, 'default', 'Doctor was created', 'App\\Models\\DoctorQualifications', 3, 'App\\Models\\User', 1, '[]', '2022-01-04 02:26:05', '2022-01-04 02:26:05'),
(216, 'default', 'Doctor was created', 'App\\Models\\DoctorQualifications', 4, 'App\\Models\\User', 1, '[]', '2022-01-04 02:36:23', '2022-01-04 02:36:23'),
(217, 'default', 'Doctor was deleted', 'App\\Models\\DoctorQualifications', 4, 'App\\Models\\User', 1, '[]', '2022-01-04 03:07:30', '2022-01-04 03:07:30'),
(218, 'default', 'Patient was deleted', 'App\\Models\\Patient', 4, 'App\\Models\\User', 1, '[]', '2022-01-04 04:02:53', '2022-01-04 04:02:53'),
(219, 'default', 'Doctor was created', 'App\\Models\\Doctor', 3, 'App\\Models\\User', 1, '[]', '2022-01-04 04:15:12', '2022-01-04 04:15:12'),
(220, 'default', 'Doctor was deleted', 'App\\Models\\Doctor', 3, 'App\\Models\\User', 1, '[]', '2022-01-04 04:15:46', '2022-01-04 04:15:46'),
(221, 'default', 'Doctor was created', 'App\\Models\\DoctorQualifications', 5, 'App\\Models\\User', 1, '[]', '2022-01-05 02:31:54', '2022-01-05 02:31:54'),
(222, 'default', 'Doctor was deleted', 'App\\Models\\DoctorQualifications', 5, 'App\\Models\\User', 1, '[]', '2022-01-05 05:07:19', '2022-01-05 05:07:19'),
(223, 'default', 'Doctor was created', 'App\\Models\\DoctorExpertises', 1, 'App\\Models\\User', 1, '[]', '2022-01-05 08:00:42', '2022-01-05 08:00:42'),
(224, 'default', 'Doctor was created', 'App\\Models\\DoctorExpertises', 2, 'App\\Models\\User', 1, '[]', '2022-01-05 08:02:58', '2022-01-05 08:02:58'),
(225, 'default', 'Doctor was created', 'App\\Models\\DoctorExpertises', 3, 'App\\Models\\User', 1, '[]', '2022-01-05 08:04:40', '2022-01-05 08:04:40'),
(226, 'default', 'Doctor was created', 'App\\Models\\DoctorCharges', 1, 'App\\Models\\User', 1, '[]', '2022-01-05 09:26:18', '2022-01-05 09:26:18'),
(227, 'default', 'Doctor was created', 'App\\Models\\Faranchises', 1, 'App\\Models\\User', 1, '[]', '2022-01-06 14:08:01', '2022-01-06 14:08:01'),
(228, 'default', 'Doctor was updated', 'App\\Models\\Faranchises', 1, 'App\\Models\\User', 1, '[]', '2022-01-06 14:11:51', '2022-01-06 14:11:51'),
(229, 'default', 'Doctor was updated', 'App\\Models\\Faranchises', 1, 'App\\Models\\User', 1, '[]', '2022-01-06 14:12:03', '2022-01-06 14:12:03'),
(230, 'default', 'Doctor was deleted', 'App\\Models\\Faranchises', 1, 'App\\Models\\User', 1, '[]', '2022-01-06 14:14:15', '2022-01-06 14:14:15'),
(231, 'default', 'Doctor was created', 'App\\Models\\Airlines', 1, 'App\\Models\\User', 1, '[]', '2022-01-08 09:37:46', '2022-01-08 09:37:46'),
(232, 'default', 'Doctor was updated', 'App\\Models\\Airlines', 1, 'App\\Models\\User', 1, '[]', '2022-01-08 09:43:53', '2022-01-08 09:43:53'),
(233, 'default', 'Doctor was deleted', 'App\\Models\\Airlines', 1, 'App\\Models\\User', 1, '[]', '2022-01-08 09:45:51', '2022-01-08 09:45:51'),
(234, 'default', 'Doctor was created', 'App\\Models\\Supervisorshift', 1, 'App\\Models\\User', 1, '[]', '2022-01-11 10:20:00', '2022-01-11 10:20:00'),
(235, 'default', 'Doctor was updated', 'App\\Models\\Supervisorshift', 1, 'App\\Models\\User', 1, '[]', '2022-01-11 11:24:55', '2022-01-11 11:24:55'),
(236, 'default', 'Doctor was created', 'App\\Models\\Usershift', 1, 'App\\Models\\User', 1, '[]', '2022-01-11 12:52:02', '2022-01-11 12:52:02'),
(237, 'default', 'Doctor was created', 'App\\Models\\Usershift', 2, 'App\\Models\\User', 1, '[]', '2022-01-11 13:02:03', '2022-01-11 13:02:03'),
(238, 'default', 'Doctor was updated', 'App\\Models\\Usershift', 2, 'App\\Models\\User', 1, '[]', '2022-01-11 13:02:15', '2022-01-11 13:02:15'),
(239, 'default', 'Doctor was updated', 'App\\Models\\Supervisorshift', 1, 'App\\Models\\User', 1, '[]', '2022-01-11 13:50:27', '2022-01-11 13:50:27'),
(240, 'default', 'Doctor was created', 'App\\Models\\Pattern', 1, 'App\\Models\\User', 1, '[]', '2022-01-12 08:51:38', '2022-01-12 08:51:38'),
(241, 'default', 'Doctor was created', 'App\\Models\\Pattern', 2, 'App\\Models\\User', 1, '[]', '2022-01-12 08:52:15', '2022-01-12 08:52:15'),
(242, 'default', 'Doctor was created', 'App\\Models\\Pattern', 3, 'App\\Models\\User', 1, '[]', '2022-01-12 08:52:50', '2022-01-12 08:52:50'),
(243, 'default', 'Doctor was created', 'App\\Models\\Pattern', 4, 'App\\Models\\User', 1, '[]', '2022-01-12 08:55:00', '2022-01-12 08:55:00'),
(244, 'default', 'Doctor was updated', 'App\\Models\\Pattern', 1, 'App\\Models\\User', 1, '[]', '2022-01-12 08:55:44', '2022-01-12 08:55:44'),
(245, 'default', 'Doctor was updated', 'App\\Models\\Pattern', 1, 'App\\Models\\User', 1, '[]', '2022-01-12 08:56:36', '2022-01-12 08:56:36'),
(246, 'default', 'Patient was created', 'App\\Models\\Units', 1, 'App\\Models\\User', 1, '[]', '2022-01-14 09:03:48', '2022-01-14 09:03:48'),
(247, 'default', 'Doctor was created', 'App\\Models\\AgeClassification', 1, 'App\\Models\\User', 1, '[]', '2022-01-17 02:17:42', '2022-01-17 02:17:42'),
(248, 'default', 'Doctor was updated', 'App\\Models\\AgeClassification', 1, 'App\\Models\\User', 1, '[]', '2022-01-17 02:20:00', '2022-01-17 02:20:00'),
(249, 'default', 'Doctor was created', 'App\\Models\\NormalRangeHeading', 1, 'App\\Models\\User', 1, '[]', '2022-01-17 02:42:16', '2022-01-17 02:42:16'),
(250, 'default', 'Doctor was updated', 'App\\Models\\NormalRangeHeading', 1, 'App\\Models\\User', 1, '[]', '2022-01-17 02:42:31', '2022-01-17 02:42:31'),
(251, 'default', 'Doctor was created', 'App\\Models\\ProductRegistration', 1, 'App\\Models\\User', 1, '[]', '2022-01-19 08:25:27', '2022-01-19 08:25:27'),
(252, 'default', 'Doctor was updated', 'App\\Models\\ProductRegistration', 1, 'App\\Models\\User', 1, '[]', '2022-01-19 08:26:32', '2022-01-19 08:26:32'),
(253, 'default', 'Doctor was created', 'App\\Models\\MorphologyRegistration', 0, 'App\\Models\\User', 1, '[]', '2022-01-21 06:34:32', '2022-01-21 06:34:32'),
(254, 'default', 'Doctor was updated', 'App\\Models\\MorphologyRegistration', 1, 'App\\Models\\User', 1, '[]', '2022-01-21 06:36:31', '2022-01-21 06:36:31'),
(255, 'default', 'Doctor was updated', 'App\\Models\\MorphologyRegistration', 1, 'App\\Models\\User', 1, '[]', '2022-01-21 06:38:53', '2022-01-21 06:38:53'),
(256, 'default', 'Doctor was created', 'App\\Models\\MorphologyRegistration', 2, 'App\\Models\\User', 1, '[]', '2022-01-21 07:14:26', '2022-01-21 07:14:26'),
(257, 'default', 'Doctor was created', 'App\\Models\\MorphologyRegistration', 3, 'App\\Models\\User', 1, '[]', '2022-01-21 07:15:06', '2022-01-21 07:15:06'),
(258, 'default', 'Doctor was created', 'App\\Models\\CbcRemarks', 2, 'App\\Models\\User', 1, '[]', '2022-01-21 07:18:33', '2022-01-21 07:18:33'),
(259, 'default', 'Doctor was created', 'App\\Models\\CbcRemarks', 3, 'App\\Models\\User', 1, '[]', '2022-01-21 07:20:00', '2022-01-21 07:20:00'),
(260, 'default', 'Patient was created', 'App\\Models\\CustomerRegistration', 1, 'App\\Models\\User', 1, '[]', '2022-01-27 11:40:48', '2022-01-27 11:40:48'),
(261, 'default', 'Patient was created', 'App\\Models\\CustomerRegistration', 2, 'App\\Models\\User', 1, '[]', '2022-01-27 12:59:18', '2022-01-27 12:59:18'),
(262, 'default', 'Culture option was created', 'App\\Models\\CustomerRegistrationLab', 3, 'App\\Models\\User', 1, '[]', '2022-01-28 12:28:52', '2022-01-28 12:28:52'),
(263, 'default', 'Culture option was created', 'App\\Models\\CustomerRegistrationLab', 4, 'App\\Models\\User', 1, '[]', '2022-01-28 12:32:35', '2022-01-28 12:32:35'),
(264, 'default', 'Culture option was created', 'App\\Models\\CustomerRegistrationLab', 5, 'App\\Models\\User', 1, '[]', '2022-01-28 12:35:21', '2022-01-28 12:35:21'),
(265, 'default', 'Culture option was deleted', 'App\\Models\\CustomerRegistrationLab', 5, 'App\\Models\\User', 1, '[]', '2022-01-28 12:59:53', '2022-01-28 12:59:53'),
(266, 'default', 'Culture option was deleted', 'App\\Models\\CustomerRegistrationLab', 4, 'App\\Models\\User', 1, '[]', '2022-01-28 13:00:09', '2022-01-28 13:00:09'),
(267, 'default', 'Culture option was created', 'App\\Models\\CustomerRegistrationLab', 6, 'App\\Models\\User', 1, '[]', '2022-01-29 10:05:22', '2022-01-29 10:05:22'),
(268, 'default', 'Culture option was updated', 'App\\Models\\CustomerRegistrationLab', 3, 'App\\Models\\User', 1, '[]', '2022-01-29 10:21:51', '2022-01-29 10:21:51'),
(269, 'default', 'Culture option was updated', 'App\\Models\\CustomerRegistrationLab', 1, 'App\\Models\\User', 1, '[]', '2022-01-29 10:22:43', '2022-01-29 10:22:43'),
(270, 'default', 'Culture option was updated', 'App\\Models\\CustomerRegistrationLab', 3, 'App\\Models\\User', 1, '[]', '2022-01-29 10:24:44', '2022-01-29 10:24:44'),
(271, 'default', 'Culture option was updated', 'App\\Models\\CustomerRegistrationLab', 1, 'App\\Models\\User', 1, '[]', '2022-01-29 11:52:02', '2022-01-29 11:52:02'),
(272, 'default', 'Culture option was updated', 'App\\Models\\CustomerRegistrationLab', 3, 'App\\Models\\User', 1, '[]', '2022-01-29 12:01:30', '2022-01-29 12:01:30'),
(273, 'default', 'Culture option was created', 'App\\Models\\CustomerRegistrationCenter', 1, 'App\\Models\\User', 1, '[]', '2022-01-29 12:35:37', '2022-01-29 12:35:37'),
(274, 'default', 'Culture option was created', 'App\\Models\\CustomerRegistrationCenter', 2, 'App\\Models\\User', 1, '[]', '2022-01-29 12:41:46', '2022-01-29 12:41:46'),
(275, 'default', 'Culture option was created', 'App\\Models\\CustomerRegistrationCenter', 3, 'App\\Models\\User', 1, '[]', '2022-01-29 12:43:03', '2022-01-29 12:43:03'),
(276, 'default', 'Culture option was created', 'App\\Models\\CustomerRegistrationCenter', 4, 'App\\Models\\User', 1, '[]', '2022-01-29 13:04:50', '2022-01-29 13:04:50'),
(277, 'default', 'Culture option was created', 'App\\Models\\CustomerRegistrationCenter', 5, 'App\\Models\\User', 1, '[]', '2022-01-29 13:08:39', '2022-01-29 13:08:39'),
(278, 'default', 'Culture option was updated', 'App\\Models\\CustomerRegistrationCenter', 5, 'App\\Models\\User', 1, '[]', '2022-01-29 13:09:09', '2022-01-29 13:09:09'),
(279, 'default', 'Culture option was deleted', 'App\\Models\\CustomerRegistrationCenter', 5, 'App\\Models\\User', 1, '[]', '2022-01-29 13:10:44', '2022-01-29 13:10:44'),
(280, 'default', 'Patient was created', 'App\\Models\\CustomerRegistrationPriceList', 1, 'App\\Models\\User', 1, '[]', '2022-01-31 14:01:56', '2022-01-31 14:01:56'),
(281, 'default', 'Patient was created', 'App\\Models\\CustomerRegistrationPriceList', 2, 'App\\Models\\User', 1, '[]', '2022-01-31 14:02:21', '2022-01-31 14:02:21'),
(282, 'default', 'Patient was updated', 'App\\Models\\CustomerRegistrationPriceList', 1, 'App\\Models\\User', 1, '[]', '2022-01-31 15:05:21', '2022-01-31 15:05:21'),
(283, 'default', 'Patient was updated', 'App\\Models\\CustomerRegistrationPriceList', 1, 'App\\Models\\User', 1, '[]', '2022-01-31 15:05:45', '2022-01-31 15:05:45'),
(284, 'default', 'Patient was updated', 'App\\Models\\CustomerRegistrationPriceList', 1, 'App\\Models\\User', 1, '[]', '2022-01-31 15:07:15', '2022-01-31 15:07:15'),
(285, 'default', 'Doctor was created', 'App\\Models\\Sample', 1, 'App\\Models\\User', 1, '[]', '2022-02-02 02:56:24', '2022-02-02 02:56:24'),
(286, 'default', 'Patient was created', 'App\\Models\\Units', 2, 'App\\Models\\User', 1, '[]', '2022-02-02 03:57:23', '2022-02-02 03:57:23'),
(287, 'default', 'Doctor was created', 'App\\Models\\TestRegistration', 1, 'App\\Models\\User', 1, '[]', '2022-02-02 04:03:54', '2022-02-02 04:03:54'),
(288, 'default', 'Patient was created', 'App\\Models\\CustomerRegistrationPriceList', 3, 'App\\Models\\User', 1, '[]', '2022-02-05 06:11:58', '2022-02-05 06:11:58'),
(289, 'default', 'Patient was created', 'App\\Models\\CustomerRegistrationPriceListsDiscount', 1, 'App\\Models\\User', 1, '[]', '2022-02-05 10:01:14', '2022-02-05 10:01:14'),
(290, 'default', 'Patient was created', 'App\\Models\\CustomerRegistrationPriceListsDiscount', 2, 'App\\Models\\User', 1, '[]', '2022-02-05 10:47:41', '2022-02-05 10:47:41'),
(291, 'default', 'Patient was created', 'App\\Models\\FaranchisesPriceList', 1, 'App\\Models\\User', 1, '[]', '2022-02-07 13:50:00', '2022-02-07 13:50:00'),
(292, 'default', 'Doctor was created', 'App\\Models\\Airlines', 2, 'App\\Models\\User', 1, '[]', '2022-02-14 09:01:53', '2022-02-14 09:01:53'),
(293, 'default', 'Doctor was created', 'App\\Models\\Airlines', 3, 'App\\Models\\User', 1, '[]', '2022-02-14 09:02:11', '2022-02-14 09:02:11'),
(294, 'default', 'Culture option was created', 'App\\Models\\CustomerRegistrationLab', 7, 'App\\Models\\User', 1, '[]', '2022-02-15 10:41:53', '2022-02-15 10:41:53'),
(295, 'default', 'Patient was deleted', 'App\\Models\\Labs', 2, 'App\\Models\\User', 1, '[]', '2022-02-20 08:24:01', '2022-02-20 08:24:01'),
(296, 'default', 'Patient was deleted', 'App\\Models\\Labs', 6, 'App\\Models\\User', 1, '[]', '2022-02-20 08:24:10', '2022-02-20 08:24:10'),
(297, 'default', 'Patient was deleted', 'App\\Models\\Labs', 7, 'App\\Models\\User', 1, '[]', '2022-02-20 08:24:47', '2022-02-20 08:24:47'),
(298, 'default', 'Doctor was created', 'App\\Models\\DiscountRole', 1, 'App\\Models\\User', 1, '[]', '2022-02-24 04:03:13', '2022-02-24 04:03:13'),
(299, 'default', 'Doctor was created', 'App\\Models\\DiscountRole', 2, 'App\\Models\\User', 1, '[]', '2022-02-24 04:09:14', '2022-02-24 04:09:14'),
(300, 'default', 'Doctor was created', 'App\\Models\\DiscountRole', 3, 'App\\Models\\User', 1, '[]', '2022-02-24 04:09:34', '2022-02-24 04:09:34'),
(301, 'default', 'Doctor was updated', 'App\\Models\\DiscountRole', 1, 'App\\Models\\User', 1, '[]', '2022-02-24 04:09:55', '2022-02-24 04:09:55'),
(302, 'default', 'Doctor was created', 'App\\Models\\DiscountRole', 4, 'App\\Models\\User', 1, '[]', '2022-02-24 04:12:14', '2022-02-24 04:12:14'),
(303, 'default', 'Doctor was created', 'App\\Models\\Doctor', 6, 'App\\Models\\User', 1, '[]', '2022-02-24 06:11:12', '2022-02-24 06:11:12'),
(304, 'default', 'Group test was created', 'App\\Models\\Group', 1, 'App\\Models\\User', 1, '[]', '2022-02-24 08:02:03', '2022-02-24 08:02:03'),
(305, 'default', 'Group test was updated', 'App\\Models\\Group', 1, 'App\\Models\\User', 1, '[]', '2022-02-24 08:02:06', '2022-02-24 08:02:06'),
(306, 'default', 'Group test was created', 'App\\Models\\Group', 2, 'App\\Models\\User', 1, '[]', '2022-02-24 08:04:13', '2022-02-24 08:04:13'),
(307, 'default', 'Group test was updated', 'App\\Models\\Group', 2, 'App\\Models\\User', 1, '[]', '2022-02-24 08:04:18', '2022-02-24 08:04:18'),
(308, 'default', 'Group test was created', 'App\\Models\\Group', 3, 'App\\Models\\User', 1, '[]', '2022-02-24 08:05:32', '2022-02-24 08:05:32'),
(309, 'default', 'Group test was updated', 'App\\Models\\Group', 3, 'App\\Models\\User', 1, '[]', '2022-02-24 08:05:34', '2022-02-24 08:05:34'),
(310, 'default', 'Group test was updated', 'App\\Models\\Group', 3, 'App\\Models\\User', 1, '[]', '2022-02-24 08:05:36', '2022-02-24 08:05:36'),
(311, 'default', 'Group test was created', 'App\\Models\\Group', 4, 'App\\Models\\User', 1, '[]', '2022-03-01 10:11:30', '2022-03-01 10:11:30'),
(312, 'default', 'Group test was updated', 'App\\Models\\Group', 4, 'App\\Models\\User', 1, '[]', '2022-03-01 10:11:33', '2022-03-01 10:11:33'),
(313, 'default', 'Group test was updated', 'App\\Models\\Group', 4, 'App\\Models\\User', 1, '[]', '2022-03-01 10:11:38', '2022-03-01 10:11:38'),
(314, 'default', 'Doctor was created', 'App\\Models\\PackageRegistrations', 1, 'App\\Models\\User', 1, '[]', '2022-03-04 01:42:07', '2022-03-04 01:42:07'),
(315, 'default', 'Doctor was created', 'App\\Models\\PackageRegistrations', 2, 'App\\Models\\User', 1, '[]', '2022-03-04 01:54:28', '2022-03-04 01:54:28'),
(316, 'default', 'Doctor was created', 'App\\Models\\PackageRegistrations', 3, 'App\\Models\\User', 1, '[]', '2022-03-04 01:55:02', '2022-03-04 01:55:02'),
(317, 'default', 'Doctor was created', 'App\\Models\\PackageRegistrations', 4, 'App\\Models\\User', 1, '[]', '2022-03-04 01:55:33', '2022-03-04 01:55:33'),
(318, 'default', 'Doctor was updated', 'App\\Models\\PackageRegistrations', 4, 'App\\Models\\User', 1, '[]', '2022-03-04 01:56:38', '2022-03-04 01:56:38'),
(319, 'default', 'Doctor was created', 'App\\Models\\Machines', 1, 'App\\Models\\User', 1, '[]', '2022-09-30 00:56:05', '2022-09-30 00:56:05'),
(320, 'default', 'Doctor was created', 'App\\Models\\Machines', 2, 'App\\Models\\User', 1, '[]', '2022-09-30 00:56:50', '2022-09-30 00:56:50'),
(321, 'default', 'Doctor was created', 'App\\Models\\Machines', 1, 'App\\Models\\User', 1, '[]', '2022-09-30 02:03:07', '2022-09-30 02:03:07'),
(322, 'default', 'Doctor was updated', 'App\\Models\\Machines', 1, 'App\\Models\\User', 1, '[]', '2022-09-30 03:04:31', '2022-09-30 03:04:31'),
(323, 'default', 'Doctor was updated', 'App\\Models\\Machines', 1, 'App\\Models\\User', 1, '[]', '2022-09-30 03:04:50', '2022-09-30 03:04:50'),
(324, 'default', 'Doctor was deleted', 'App\\Models\\Machines', 1, 'App\\Models\\User', 1, '[]', '2022-09-30 03:13:31', '2022-09-30 03:13:31'),
(325, 'default', 'Doctor was created', 'App\\Models\\Machines', 2, 'App\\Models\\User', 1, '[]', '2022-09-30 03:18:49', '2022-09-30 03:18:49'),
(326, 'default', 'Doctor was deleted', 'App\\Models\\Machines', 2, 'App\\Models\\User', 1, '[]', '2022-09-30 03:19:24', '2022-09-30 03:19:24'),
(327, 'default', 'Doctor was deleted', 'App\\Models\\Machines', 2, 'App\\Models\\User', 1, '[]', '2022-09-30 03:20:30', '2022-09-30 03:20:30'),
(328, 'default', 'Doctor was deleted', 'App\\Models\\Machines', 2, 'App\\Models\\User', 1, '[]', '2022-09-30 03:21:24', '2022-09-30 03:21:24'),
(329, 'default', 'Doctor was created', 'App\\Models\\Sections', 2, 'App\\Models\\User', 1, '[]', '2022-09-30 08:43:36', '2022-09-30 08:43:36'),
(330, 'default', 'Doctor was updated', 'App\\Models\\Sections', 2, 'App\\Models\\User', 1, '[]', '2022-09-30 09:11:40', '2022-09-30 09:11:40'),
(331, 'default', 'Doctor was updated', 'App\\Models\\Sections', 1, 'App\\Models\\User', 1, '[]', '2022-09-30 09:12:05', '2022-09-30 09:12:05'),
(332, 'default', 'Patient was created', 'App\\Models\\Departments', 5, 'App\\Models\\User', 1, '[]', '2022-09-30 11:17:04', '2022-09-30 11:17:04'),
(333, 'default', 'Patient was updated', 'App\\Models\\Departments', 5, 'App\\Models\\User', 1, '[]', '2022-09-30 11:22:51', '2022-09-30 11:22:51'),
(334, 'default', 'Patient was updated', 'App\\Models\\Departments', 5, 'App\\Models\\User', 1, '[]', '2022-09-30 11:23:56', '2022-09-30 11:23:56'),
(335, 'default', 'Patient was updated', 'App\\Models\\Departments', 5, 'App\\Models\\User', 1, '[]', '2022-09-30 11:31:14', '2022-09-30 11:31:14'),
(336, 'default', 'Patient was updated', 'App\\Models\\Departments', 1, 'App\\Models\\User', 1, '[]', '2022-09-30 12:00:51', '2022-09-30 12:00:51'),
(337, 'default', 'Doctor was created', 'App\\Models\\Payment', 2, 'App\\Models\\User', 1, '[]', '2022-10-01 03:13:07', '2022-10-01 03:13:07'),
(338, 'default', 'Doctor was updated', 'App\\Models\\Payment', 1, 'App\\Models\\User', 1, '[]', '2022-10-01 03:17:46', '2022-10-01 03:17:46'),
(339, 'default', 'Doctor was updated', 'App\\Models\\Payment', 1, 'App\\Models\\User', 1, '[]', '2022-10-01 03:18:38', '2022-10-01 03:18:38');

-- --------------------------------------------------------

--
-- Table structure for table `age_classifications`
--

CREATE TABLE `age_classifications` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `airlines`
--

CREATE TABLE `airlines` (
  `id` int(11) NOT NULL,
  `name_eng` varchar(255) DEFAULT NULL,
  `name_local` varchar(255) DEFAULT NULL,
  `remarks` text,
  `status` tinyint(1) DEFAULT '0' COMMENT '0 active, 1 de-active. 2 suspend, 3 closed	',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `airlines`
--

INSERT INTO `airlines` (`id`, `name_eng`, `name_local`, `remarks`, `status`, `deleted_at`, `updated_at`, `created_at`) VALUES
(2, 'PAKISTAN INTERNATIONAL AIRLINES (PK)', 'PAKISTAN INTERNATIONAL AIRLINES (PK)', 'PAKISTAN INTERNATIONAL AIRLINES (PK)', 0, NULL, '2022-02-14 09:01:53', '2022-02-14 09:01:53'),
(4, 'PAKISTAN INTERNATIONAL AIRLINES (PK) 2', 'PAKISTAN INTERNATIONAL AIRLINES (PK)', 'PAKISTAN INTERNATIONAL AIRLINES (PK)', 0, NULL, '2022-02-14 09:01:53', '2022-02-14 09:01:53');

-- --------------------------------------------------------

--
-- Table structure for table `antibiotics`
--

CREATE TABLE `antibiotics` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shortcut` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commercial_name` longtext COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` double(8,2) DEFAULT NULL,
  `lng` double(8,2) DEFAULT NULL,
  `zoom_level` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `name`, `address`, `phone`, `lat`, `lng`, `zoom_level`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Main Branch', 'Egypt', '+201063955280', 27.77, 30.88, 8, NULL, '2021-11-13 13:22:19', '2021-11-13 13:22:19');

-- --------------------------------------------------------

--
-- Table structure for table `cbc_remarks`
--

CREATE TABLE `cbc_remarks` (
  `id` int(11) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0' COMMENT '0 active, 1 de-active. 2 suspend, 3 closed	',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `centers`
--

CREATE TABLE `centers` (
  `id` int(11) NOT NULL,
  `name_eng` varchar(255) DEFAULT NULL,
  `name_local` varchar(255) DEFAULT NULL,
  `contact_name` varchar(255) DEFAULT NULL,
  `ph1` varchar(255) DEFAULT NULL,
  `ph2` varchar(255) DEFAULT NULL,
  `mob_no1` varchar(255) DEFAULT NULL,
  `mob_no2` varchar(255) DEFAULT NULL,
  `country_id` int(11) DEFAULT '0',
  `prov_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `address1` text,
  `address2` text,
  `email` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `lab_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `centers`
--

INSERT INTO `centers` (`id`, `name_eng`, `name_local`, `contact_name`, `ph1`, `ph2`, `mob_no1`, `mob_no2`, `country_id`, `prov_id`, `city_id`, `address1`, `address2`, `email`, `is_active`, `deleted_at`, `updated_at`, `created_at`, `lab_id`) VALUES
(1, 'HIBA POLY CLINIC', 'HIBA CLINIC', 'DR GHUFRAN UL HAQ', '02135876980', NULL, NULL, NULL, 165, NULL, NULL, 'MAIN KHAYABAN E BADDAR DHA PHASE 6 KARACHI', NULL, NULL, 1, NULL, NULL, NULL, 1),
(2, 'FATIMA BAI HOSPITAL KARACHI', 'FATIMA BAI HOSPITAL', 'no person', '02135876980', NULL, NULL, NULL, 165, NULL, NULL, 'MAIN KHAYABAN E BADDAR DHA PHASE 6 KARACHI', NULL, NULL, 1, NULL, NULL, NULL, 2),
(3, 'MAIN LAB KARACHI', 'SHAHEED-E-MILAT ROAD', 'Ahmed New Javed', '+92123456789', '98765432', '23456789', '9876543', 165, 1, 2, 'Test', 'B 31, BLOCK 15, AL RAAEE AVENUE OFF UNIVERSITY ROAD GULSHAN E IQBAL KARACHI', 'ahmedjavedsw15@gmail.com', 1, NULL, '2021-12-21 13:30:05', '2021-12-21 13:19:33', 2),
(4, 'dfghj', 'tyuio', '456789', '987654', '4567890', '987654', '5678900', 165, 2, 2, 'Test', 'Test', 'ahmedjavedsw15+1@gmail.com', 1, NULL, '2021-12-21 13:31:44', '2021-12-21 13:31:44', 3);

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from` int(10) UNSIGNED DEFAULT NULL,
  `to` int(10) UNSIGNED DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `province_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `province_id`) VALUES
(1, 'HYDERABAD', 1),
(2, 'KARACHI', 1),
(3, 'LARKANA', 1),
(4, 'NAWABSHAH', 1),
(5, 'SUKKUR', 1),
(6, 'QUETTA', 5),
(7, 'ISLAMABAD', 4),
(8, 'PESHAWAR', 3),
(9, 'FAISALABAD', 2),
(10, 'GUJRANWALA', 2),
(11, 'LAHORE', 2),
(12, 'MULTAN', 2),
(13, 'OKARA', 2),
(14, 'RAWALPINDI', 2),
(15, 'SAHIWAL', 2),
(16, 'SARGODHA', 2),
(17, 'SIALKOT', 2);

-- --------------------------------------------------------

--
-- Table structure for table `contracts`
--

CREATE TABLE `contracts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `discount` double(8,2) UNSIGNED NOT NULL DEFAULT '0.00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `eng_country_name` varchar(100) NOT NULL DEFAULT '',
  `arb_country_name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `phone_code` varchar(500) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `eng_country_name`, `arb_country_name`, `code`, `phone_code`, `latitude`, `longitude`) VALUES
(1, 'Saudi Arabia', 'المملكة العربية السعودية', 'SAU', '+1', '37.09024	', '-95.712891	'),
(2, 'Canada', 'كندا', 'CAN', '+1', '56.130366	', '-106.346771	'),
(3, 'United States', 'الولايات المتحدة', 'USA', '+93', '33.93911', '67.709953	'),
(4, 'Albania', 'ألبانيا', 'ALB', '+355', '41.153332', '20.168331	'),
(5, 'Algeria', 'الجزائر', 'DZA', '+213', '28.033886', '1.659626'),
(6, 'American Samoa', 'ساموا-الأمريكي', 'ASM', '', '', ''),
(7, 'Andorra', 'أندورا', 'AND', '+376', '42.546245', '1.601554'),
(8, 'Angola', 'أنغولا', 'AGO', '+244', '-11.202692	', '17.873887	'),
(9, 'Anguilla', 'أنغيلا', 'AIA', '+1', '18.220554', '-63.068615	'),
(10, 'Antarctica', 'أنتاركتيكا', 'ATA', '', '-75.250973	', '-0.071389	'),
(11, 'Antigua and/Barbuda', 'أنتيغوا وبربودا', 'ATG', '+1', '17.060816', '-61.796428	'),
(12, 'Argentina', 'الأرجنتين', 'ARG', '+54', '-38.416097	', '-63.616672	'),
(13, 'Armenia', 'أرمينيا', 'ARM', '+374', '40.069099', '45.038189'),
(14, 'Aruba', 'أروبا', 'ABW', '+297', '12.52111	', '-69.968338	'),
(15, 'Australia', 'أستراليا', 'AUS', '+61', '-25.274398	', '133.775136	'),
(16, 'Austria', 'النمسا', 'AUT', '+43', '47.516231', '14.550072'),
(17, 'Azerbaijan', 'أذربيجان', 'AZE', '+994', '40.143105	', '47.576927	'),
(18, 'Bahamas', 'الباهاماس', 'BHS', '+1', '25.03428	', '-77.39628	'),
(19, 'Bahrain', 'البحرين', 'BHR', '+973', '25.930414', '50.637772	'),
(20, 'Bangladesh', 'بنغلاديش', 'BGD', '+880', '23.684994', '90.356331'),
(21, 'Barbados', 'بربادوس', 'BRB', '+1', '13.193887', '-59.543198	'),
(22, 'Belarus', 'روسيا البيضاء', 'BLR', '+375', '53.709807', '27.953389	'),
(23, 'Belgium', 'بلجيكا', 'BEL', '+32', '50.503887', '4.469936'),
(24, 'Belize', 'بيليز', 'BLZ', '+501', '17.189877	', '-88.49765	'),
(25, 'Benin', 'بنين', 'BEN', '+229', '9.30769	', '2.315834'),
(26, 'Bermuda', 'جزر برمود', 'BMU', '+1', '32.321384	', '-64.75737	'),
(27, 'Bhutan', 'بوتان', 'BTN', '+975', '27.514162', '90.433601	'),
(28, 'Bolivia', 'بوليفيا', 'BOL', '+591', '-16.290154	', '-63.588653	'),
(29, 'Bosnia and Herzegovina', 'البوسنة و الهرسك', 'BIH', '+387', '43.915886	', '17.679076'),
(30, 'Botswana', 'بوتسوانا', 'BWA', '+267', '-22.328474	', '24.684866	'),
(31, 'Bouvet Island', 'جزيرة بوفيت', 'BVT', '', '-54.423199	', '3.413194	'),
(32, 'Brazil', 'البرازيل', 'BRA', '+55', '-14.235004	', '-51.92528	'),
(33, 'British Indian Ocean Territory', 'إقليم المحيط الهندي البريطاني', 'IOT', '+246', '-6.343194	', '71.876519'),
(34, 'Brunei Darussalam', 'بروناي دار السلام', 'BRN', '+673', '4.535277', '114.727669'),
(35, 'Bulgaria', 'بلغاريا', 'BGR', '+359', '', ''),
(36, 'Burkina Faso', 'بوركينا فاسو', 'BFA', '+226', '12.238333	', '-1.561593	'),
(37, 'Burundi', 'بوروندي', 'BDI', '+257', '-3.373056	', '29.918886'),
(38, 'Cambodia', 'كمبوديا', 'KHM', '+855', '12.565679	', '104.990963'),
(39, 'Cameroon', 'كاميرون', 'CMR', '+237', '7.369722', '12.354722	'),
(40, 'Cape Verde', 'الرأس الأخضر', 'CPV', '+238', '16.002082	', '-24.013197	'),
(41, 'Cayman Islands', 'جزر كايمان', 'CYM', '+1', '19.513469', '-80.566956	'),
(42, 'Central African Republic', 'جمهورية افريقيا الوسطى', 'CAF', '+236', '6.611111', '20.939444'),
(43, 'Chad', 'تشاد', 'TCD', '+235', '15.454166	', '18.732207'),
(44, 'Chile', 'تشيلي', 'CHL', '+56', '-35.675147	', '-71.542969	'),
(45, 'China', 'الصين', 'CHN', '+86', '35.86166	', '104.195397	'),
(46, 'Christmas Island', 'جزيرة الكريسماس', 'CXR', '', '-10.447525	', '105.690449	'),
(47, 'Cocos (Keeling) Islands', 'جزر كوكوس ( كيلينغ)', 'CCK', '', '-12.164165	', '96.870956	'),
(48, 'Colombia', 'كولومبيا', 'COL', '+57', '4.570868	', '-74.297333	'),
(49, 'Comoros', 'جزر القمر', 'COM', '+269', '-11.875001	', '43.872219	'),
(50, 'Congo', 'الكونغو', 'COG', '+242', '-0.228021	', '15.827659	'),
(51, 'Cook Islands', 'جزر كوك', 'COK', '+682', '-21.236736	', '-159.777671	'),
(52, 'Costa Rica', 'كوستا ريك', 'CRI', '+506', '9.748917	', '-83.753428'),
(53, 'Croatia (Hrvatska)', 'كرواتيا ( هرافاتسكا )', 'HRV', '+385', '45.1', '15.2	'),
(54, 'Cuba', 'كوبا', 'CUB', '+53', '21.521757', '-77.781167	'),
(55, 'Cyprus', 'قبرص', 'CYP', '+357', '35.126413', '33.429859	'),
(56, 'Czech Republic', 'جمهورية التشيك', 'CZE', '+420', '49.817492', '15.472962	'),
(57, 'Denmark', 'الدنمارك', 'DNK', '+45', '56.26392	', '9.501785	'),
(58, 'Djibouti', 'جيبوتي', 'DJI', '+253', '11.825138	', '42.590275'),
(59, 'Dominica', 'دومينيكا', 'DMA', '+1', '15.414999	', '-61.370976	'),
(60, 'Dominican Republic', 'جمهورية الدومنيكان', 'DOM', '+1', '18.735693', '-70.162651	'),
(61, 'East Timor', 'تيمور الشرقية', 'TMP', '', '', ''),
(62, 'Ecuador', 'الإكوادور', 'ECU', '+593', '-1.831239	', '-78.183406	'),
(63, 'Egypt', 'مصر', 'EGY', '+20', '26.820553', '30.802498'),
(64, 'El Salvador', 'السلفادور', 'SLV', '+503', '13.794185', '-88.89653	'),
(65, 'Equatorial Guinea', 'غينيا الإستوائية', 'GNQ', '+240', '1.650801', '10.267895'),
(66, 'Eritrea', 'إريتريا', 'ERI', '+291', '15.179384', '39.782334'),
(67, 'Estonia', 'استونيا', 'EST', '+372', '58.595272', '25.013607'),
(68, 'Ethiopia', 'أثيوبيا', 'ETH', '+251', '9.145', '40.489673	'),
(69, 'Falkland Islands (Malvinas)', 'جزر فوكلاند ( مالفيناس )', 'FLK', '+500', '-51.796253	', '-59.523613	'),
(70, 'Faroe Islands', 'جزر فارو', 'FRO', '+298', '61.892635	', '-6.911806	'),
(71, 'Fiji', 'فيجي', 'FJI', '+679', '-16.578193	', '179.414413	'),
(72, 'Finland', 'فنلندا', 'FIN', '+358', '61.92411', '25.748151'),
(73, 'France', 'فرنسا', 'FRA', '+33', '46.227638	', '2.213749	'),
(74, 'France, Metropolitan', 'فرنسا ، متروبوليتان', '', '', '', ''),
(75, 'French Guiana', 'جيانا الفرنسية', 'GUF', '+594', '3.933889', '-53.125782	'),
(76, 'French Polynesia', 'بولينيزيا الفرنسية', 'PYF', '+689', '-17.679742	', '-149.406843	'),
(77, 'French Southern Territories', 'الاقاليم الجنوبية الفرنسية', 'ATF', '', '-49.280366	', '69.348557'),
(78, 'Gabon', 'الغابون', 'GAB', '+241', '-0.803689	', '11.609444	'),
(79, 'Gambia', 'غامبيا', 'GMB', '+220', '13.443182', '-15.310139	'),
(80, 'Georgia', 'جورجيا', 'GEO', '+995', '42.315407', '43.356892'),
(81, 'Germany', 'ألمانيا', 'DEU', '+49', '51.165691	', '10.451526'),
(82, 'Ghana', 'غانا', 'GHA', '+233', '7.946527	', '-1.023194	'),
(83, 'Gibraltar', 'جبل طارق', 'GIB', '+350', '36.137741', '-5.345374	'),
(246, 'Guernsey', 'غيرنسي', '', '', '', ''),
(84, 'Greece', 'اليونان', 'GRC', '+30', '39.074208', '21.824312'),
(85, 'Greenland', 'ارض خضراء', 'GRL', '+299', '71.706936	', '-42.604303	'),
(86, 'Grenada', 'غرينادا', 'GRD', '+1', '12.262776', '-61.604171	'),
(87, 'Guadeloupe', 'جوادلوب', 'GLP', '+590', '16.995971	', '-62.067641	'),
(88, 'Guam', 'غوام', 'GUM', '+1', '13.444304', '144.793731	'),
(89, 'Guatemala', 'غواتيمالا', 'GTM', '+502', '15.783471', '-90.230759	'),
(90, 'Guinea', 'غينيا', 'GIN', '+224', '9.945587', '-9.696645	'),
(91, 'Guinea-Bissau', 'غينيا بيساو', 'GNB', '+245', '11.803749', '-15.180413	'),
(92, 'Guyana', 'غيانا', 'GUY', '+592', '4.860416	', '-58.93018	'),
(93, 'Haiti', 'هايتي', 'HTI', '+509', '18.971187	', '-72.285215	'),
(94, 'Heard and Mc Donald Islands', 'سمع و ماك دونالد جزر', 'HMD', '', '-53.08181	', '73.504158'),
(95, 'Honduras', 'هندوراس', 'HND', '+504', '15.199999', '-86.241905	'),
(96, 'Hong Kong', 'هونج كونج', 'HKG', '+852', '22.396428	', '114.109497'),
(97, 'Hungary', 'هنغاريا', 'HUN', '+36', '47.162494', '19.503304'),
(98, 'Iceland', 'أيسلندا', 'ISL', '+354', '64.963051', '-19.020835	'),
(99, 'India', 'الهند', 'IND', '+91', '20.593684	', '78.96288'),
(100, 'Indonesia', 'أندونيسيا', 'IDN', '+62', '-0.789275	', '113.921327	'),
(101, 'Iran (Islamic Republic of)', 'إيران ( الجمهورية الإسلامية)', 'IRN', '+98', '32.427908	', '53.688046'),
(102, 'Iraq', 'العراق', 'IRQ', '+964', '33.223191', '43.679291'),
(103, 'Ireland', 'أيرلندا', 'IRL', '+353', '53.41291', '-8.24389	'),
(105, 'Italy', 'إيطاليا', 'ITA', '+39', '41.87194', '12.56738'),
(106, 'Ivory Coast', 'ساحل العاج', 'CIV', '+225', '7.539989	', '-5.54708	'),
(245, 'Jersey', 'جيرسي', '', '', '49.214439', '-2.13125	'),
(107, 'Jamaica', 'جامايكا', 'JAM', '+1', '18.109581', '-77.297508	'),
(108, 'Japan', 'اليابان', 'JPN', '+81', '36.204824', '138.252924'),
(109, 'Jordan', ' الأردن', 'JOR', '+962', '30.585164', '36.238414	'),
(110, 'Kazakhstan', 'كازاخستان', 'KAZ', '+7', '48.019573', '66.923684'),
(111, 'Kenya', 'كينيا', 'KEN', '+254', '-0.023559	', '37.906193'),
(112, 'Kiribati', 'كيريباتي', 'KIR', '+686', '-3.370417	', '-168.734039	'),
(114, 'Korea', 'جمهورية كوريا', 'KOR', '+82', '35.907757', '127.766922	'),
(115, 'Kosovo', 'كوسوفو', '', '+381', '42.602636	', '20.902977'),
(116, 'Kuwait', 'الكويت', 'KWT', '+965', '29.31166	', '47.481766'),
(117, 'Kyrgyzstan', 'قرغيزستان', 'KGZ', '+996', '41.20438', '74.766098	'),
(118, 'Lao People\'s Democratic Republic', 'جمهورية لاو الديمقراطية الشعبية', 'LAO', '+856', '19.85627', '102.495496'),
(119, 'Latvia', 'لاتفيا', 'LVA', '+371', '56.879635', '24.603189'),
(120, 'Lebanon', 'لبنان', 'LBN', '+961', '33.854721', '35.862285'),
(121, 'Lesotho', 'ليسوتو', 'LSO', '+266', '-29.609988	', '28.233608'),
(122, 'Liberia', 'ليبيريا', 'LBR', '+231', '6.428055', '-9.429499	'),
(123, 'Libyan Arab Jamahiriya', 'الجماهيرية العربية الليبية', 'LBY', '+218', '26.3351', '17.228331'),
(124, 'Liechtenstein', 'ليختنشتاين', 'LIE', '+423', '47.166', '9.555373'),
(125, 'Lithuania', 'ليتوانيا', 'LTU', '+370', '55.169438', '23.881275'),
(126, 'Luxembourg', 'لوكسمبورغ', 'LUX', '+352', '49.815273', '6.129583'),
(127, 'Macau', 'ماكاو', 'MAC', '+853', '22.198745', '113.543873'),
(128, 'Macedonia', 'مقدونيا', 'MKD', '+389', '41.608635', '21.745275	'),
(129, 'Madagascar', 'مدغشقر', 'MDG', '+261', '-18.766947	', '46.869107	'),
(130, 'Malawi', 'ملاوي', 'MWI', '+265', '-13.254308	', '34.301525'),
(131, 'Malaysia', 'ماليزيا', 'MYS', '+60', '4.210484', '101.975766'),
(132, 'Maldives', 'جزر المالديف', 'MDV', '+960', '3.202778', '73.22068'),
(133, 'Mali', 'مالي', 'MLI', '+223', '17.570692', '-3.996166	'),
(134, 'Malta', 'مالطا', 'MLT', '+356', '35.937496', '14.375416'),
(135, 'Marshall Islands', 'جزر مارشال', 'MHL', '+692', '7.131474', '171.184478'),
(136, 'Martinique', 'مارتينيك', 'MTQ', '+596', '14.641528	', '-61.024174	'),
(137, 'Mauritania', 'موريتانيا', 'MRT', '+222', '21.00789', '-10.940835	'),
(138, 'Mauritius', 'موريشيوس', 'MUS', '+230', '-20.348404	', '57.552152'),
(139, 'Mayotte', 'مايوت', '', '', '', ''),
(140, 'Mexico', 'المكسيك', 'MEX', '+52', '23.634501	', '-102.552784	'),
(141, 'Micronesia, Federated States of', 'ولايات ميكرونيزيا الموحدة من', 'FSM', '+691', '7.425554	', '150.550812'),
(142, 'Moldova, Republic of', 'جمهورية مولدوفا', 'MDA', '+373', '47.411631', '28.369885'),
(143, 'Monaco', 'موناكو', 'MCO', '+377', '43.750298	', '7.412841'),
(144, 'Mongolia', 'منغوليا', 'MNG', '+976', '46.862496', '103.846656'),
(145, 'Montenegro', 'الجبل الأسود', '', '+382', '42.708678	', '19.37439'),
(146, 'Montserrat', 'مونتسيرات', 'MSR', '+1', '16.742498', '-62.187366	'),
(147, 'Morocco', 'المغرب', 'MAR', '+212', '31.791702', '-7.09262	'),
(148, 'Mozambique', 'موزمبيق', 'MOZ', '+258', '-18.665695	', '35.529562'),
(149, 'Myanmar', 'ميانمار', 'MMR', '+95', '21.913965', '95.956223'),
(150, 'Namibia', 'ناميبيا', 'NAM', '+264', '-22.95764	', '18.49041'),
(151, 'Nauru', 'ناورو', 'NRU', '+674', '-0.522778	', '166.931503	'),
(152, 'Nepal', 'نيبال', 'NPL', '+977', '28.394857', '84.124008'),
(153, 'Netherlands', 'هولندا', 'NLD', '+31', '52.132633', '5.291266'),
(154, 'Netherlands Antilles', 'جزر الأنتيل الهولندية', 'ANT', '+599', '12.226079', '-69.060087	'),
(155, 'New Caledonia', 'كاليدونيا الجديدة', 'NCL', '+687', '-20.904305	', '165.618042	'),
(156, 'New Zealand', 'نيوزيلندا', 'NZL', '+64', '-40.900557	', '174.885971	'),
(157, 'Nicaragua', 'نيكاراغوا', 'NIC', '+505', '12.865416', '-85.207229	'),
(158, 'Niger', 'النيجر', 'NER', '+227', '17.607789', '8.081666	'),
(159, 'Nigeria', 'نيجيريا', 'NGA', '+234', '9.081999', '8.675277	'),
(160, 'Niue', 'نيوي', 'NIU', '+683', '-19.054445	', '-169.867233	'),
(161, 'Norfolk Island', 'جزيرة نورفولك', 'NFK', '+672', '-29.040835	', '167.954712'),
(162, 'Northern Mariana Islands', 'جزر مريانا الشمالية', 'MNP', '+1', '17.33083', '145.38469'),
(163, 'Norway', 'النرويج', 'NOR', '+47', '60.472024	', '8.468946'),
(164, 'Oman', 'سلطنة عمان', 'OMN', '+968', '21.512583', '55.923255	'),
(165, 'Pakistan', 'باكستان', 'PAK', '+92', '30.375321', '69.345116'),
(166, 'Palau', 'بالاو', 'PLW', '+680', '7.51498', '134.58252'),
(243, 'Palestine', 'فلسطين', 'PSE', '+970', '31.952162', '35.233154'),
(167, 'Panama', 'بناما', 'PAN', '+507', '8.537981', '-80.782127	'),
(168, 'Papua New Guinea', 'بابوا غينيا الجديدة', 'PNG', '+675', '-6.314993	', '143.95555'),
(169, 'Paraguay', 'باراغواي', 'PRY', '+595', '-23.442503	', '-58.443832	'),
(170, 'Peru', 'بيرو', 'PER', '+51', '-9.189967	', '-75.015152	'),
(171, 'Philippines', 'الفلبين', 'PHL', '+63', '12.879721	', '121.774017	'),
(172, 'Pitcairn', 'بيتكيرن', 'PCN', '', '-24.703615	', '-127.439308	'),
(173, 'Poland', 'بولندا', 'POL', '+48', '51.919438	', '19.145136	'),
(174, 'Portugal', 'البرتغال', 'PRT', '+351', '39.399872	', '-8.224454	'),
(175, 'Puerto Rico', 'بورتوريكو', 'PRI', '+1', '18.220833	', '-66.590149	'),
(176, 'Qatar', 'دولة قطر', 'QAT', '+974', '25.354826', '51.183884	'),
(177, 'Reunion', 'جمع شمل', 'REU', '+262', '-21.115141	', '55.536384'),
(178, 'Romania', 'رومانيا', 'ROM', '+40', '45.943161	', '24.96676'),
(179, 'Russian Federation', 'الفيدرالية الروسية', 'RUS', '+7', '61.52401	', '105.318756	'),
(180, 'Rwanda', 'رواندا', 'RWA', '+250', '-1.940278	', '29.873888'),
(181, 'Saint Kitts and Nevis', 'سانت كيتس ونيفيس', 'KNA', '+1', '17.357822	', '-62.782998	'),
(182, 'Saint Lucia', 'سانت لوسيا', 'LCA', '+1', '13.909444	', '-60.978893	'),
(183, 'Saint Vincent and the Grenadines', 'سانت فنسنت وجزر غرينادين', 'VCT', '+1', '12.984305', '-61.287228	'),
(184, 'Samoa', 'ساموا', 'WSM', '+685', '-13.759029	', '-172.104629	'),
(185, 'San Marino', 'سان مارينو', 'SMR', '+378', '43.94236', '12.457777'),
(186, 'Sao Tome and Principe', 'ساو تومي و برينسيبي', 'STP', '+239', '0.18636', '6.613081	'),
(187, 'Afghanistan', 'أفغانستان', 'AFG', '+966', '23.885942', '45.079162'),
(188, 'Senegal', 'السنغال', 'SEN', '+221', '14.497401', '-14.452362	'),
(189, 'Serbia', 'صربيا', '', '+381', '44.016521	', '21.005859'),
(190, 'Seychelles', 'سيشيل', 'SYC', '+248', '-4.679574	', '55.491977'),
(191, 'Sierra Leone', 'سيرا ليون', 'SLE', '+232', '8.460555', '-11.779889	'),
(192, 'Singapore', 'سنغافورة', 'SGP', '+65', '1.352083', '103.819836	'),
(193, 'Slovakia', 'سلوفاكيا', 'SVK', '+421', '48.669026	', '19.699024	'),
(194, 'Slovenia', 'سلوفينيا', 'SVN', '+386', '46.151241	', '14.995463'),
(195, 'Solomon Islands', 'جزر سليمان', 'SLB', '+677', '-9.64571	', '160.156194'),
(196, 'Somalia', 'الصومال', 'SOM', '+252', '5.152149', '46.199616'),
(197, 'South Africa', 'جنوب أفريقيا', 'ZAF', '+27', '-30.559482	', '22.937506	'),
(198, 'South Georgia South Sandwich Islands', 'جزر ساندويتش الجنوبية جورجيا الجنوبية', 'SGS', '', '-54.429579	', '-36.587909	'),
(199, 'Spain', 'إسبانيا', 'ESP', '+34', '40.463667', '-3.74922	'),
(200, 'Sri Lanka', 'سيريلانكا', 'LKA', '+94', '7.873054', '80.771797	'),
(201, 'St. Helena', 'سانت هيلانة', 'SHN', '+290', '-24.143474	', '-10.030696	'),
(202, 'St. Pierre and Miquelon', 'سانت بيير و ميكلون', 'SPM', '+508', '46.941936', '-56.27111	'),
(203, 'Sudan', 'سودان', 'SDN', '+249', '12.862807', '30.217636'),
(204, 'Suriname', 'سورينام', 'SUR', '+597', '3.919305', '-56.027783	'),
(205, 'Svalbard and Jan Mayen Islands', 'جزر سفالبارد وجان ماين', 'SJM', '', '77.553604	', '23.670272'),
(206, 'Swaziland', 'سوازيلاند', 'SWZ', '+268', '-26.522503	', '31.465866	'),
(207, 'Sweden', 'السويد', 'SWE', '+46', '60.128161', '18.643501'),
(208, 'Switzerland', 'سويسرا', 'CHE', '+41', '46.818188	', '8.227512'),
(209, 'Syrian Arab Republic', 'الجمهورية العربية السورية', 'SYR', '+963', '34.802075', '38.996815'),
(210, 'Taiwan', 'تايوان', 'TWN', '+886', '23.69781	', '120.960515'),
(211, 'Tajikistan', 'طاجيكستان', 'TJK', '+992', '38.861034', '71.276093'),
(212, 'Tanzania, United Republic of', 'جمهورية تنزانيا المتحدة', 'TZA', '+255', '-6.369028	', '34.888822	'),
(213, 'Thailand', 'تايلاند', 'THA', '+66', '15.870032', '100.992541'),
(214, 'Togo', 'توغو', 'TGO', '+228', '8.619543	', '0.824782'),
(215, 'Tokelau', 'توكيلاو', 'TKL', '+690', '-8.967363	', '-171.855881	'),
(216, 'Tonga', 'تونغا', 'TON', '+676', '-21.178986	', '-175.198242	'),
(217, 'Trinidad and Tobago', 'ترينداد وتوباغو', 'TTO', '+1', '10.691803	', '-61.222503	'),
(218, 'Tunisia', 'تونس', 'TUN', '+216', '33.886917	', '9.537499	'),
(219, 'Turkey', 'تركيا', 'TUR', '+90', '38.963745', '35.243322'),
(220, 'Turkmenistan', 'تركمانستان', 'TKM', '+993', '38.969719', '59.556278	'),
(221, 'Turks and Caicos Islands', 'جزر تركس وكايكوس', 'TCA', '+1', '21.694025', '-71.797928	'),
(222, 'Tuvalu', 'توفالو', 'TUV', '+688', '-7.109535	', '177.64933'),
(223, 'Uganda', 'أوغندا', 'UGA', '+256', '1.373333', '32.290275'),
(224, 'Ukraine', 'أوكرانيا', 'UKR', '+380', '48.379433	', '31.16558'),
(225, 'United Arab Emirates', 'الإمارات العربية المتحدة', 'ARE', '+971', '23.424076', '	53.847818'),
(226, 'United Kingdom', 'المملكة المتحدة', 'GBR', '+44', '55.378051	', '-3.435973	'),
(227, 'United States minor outlying islands', 'الولايات المتحدة الجزر الصغيرة النائية', 'UMI', '', '', ''),
(228, 'Uruguay', 'أوروغواي', 'URY', '+598', '-32.522779	', '-55.765835	'),
(229, 'Uzbekistan', 'أوزبكستان', 'UZB', '+998', '41.377491', '64.585262'),
(230, 'Vanuatu', 'فانواتو', 'VUT', '+678', '-15.376706	', '166.959158'),
(231, 'Vatican City State', 'دولة مدينة الفاتيكان', 'VAT', '+39', '41.902916	', '12.453389'),
(232, 'Venezuela', 'فنزويلا', 'VEN', '+58', '6.42375', '-66.58973	'),
(233, 'Vietnam', 'فيتنام', 'VNM', '+84', '14.058324', '108.277199	'),
(234, 'Virgin Islands (British)', 'جزر العذراء (البريطانية )', 'VGB', '+1', '18.420695', '-64.639968	'),
(235, 'Virgin Islands (U.S.)', 'جزر العذراء ( الولايات المتحدة )', 'VIR', '+1', '18.335765', '-64.896335	'),
(236, 'Wallis and Futuna Islands', 'واليس و فوتونا', 'WLF', '+681', '-13.768752	', '-177.156097	'),
(237, 'Western Sahara', 'الصحراء الغربية', 'ESH', '', '24.215527	', '-12.885834	'),
(238, 'Yemen', 'اليمن', 'YEM', '+967', '15.552727	', '48.516388	'),
(239, 'Yugoslavia', 'يوغوسلافيا', 'YUG', '', '', ''),
(240, 'Zaire', 'زائير', '', '', '', ''),
(241, 'Zambia', 'زامبيا', 'ZMB', '+260', '-13.133897	', '27.849332'),
(242, 'Zimbabwe', 'زيمبابوي', 'ZWE', '+263', '-19.015438	', '29.154857');

-- --------------------------------------------------------

--
-- Table structure for table `cultures`
--

CREATE TABLE `cultures` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precautions` text COLLATE utf8mb4_unicode_ci,
  `price` double DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cultures`
--

INSERT INTO `cultures` (`id`, `name`, `sample_type`, `precautions`, `price`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Blood Culture', NULL, NULL, 100, NULL, '2021-11-13 13:22:14', '2021-11-13 13:22:14');

-- --------------------------------------------------------

--
-- Table structure for table `culture_options`
--

CREATE TABLE `culture_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `culture_options`
--

INSERT INTO `culture_options` (`id`, `value`, `parent_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Organism', 0, NULL, NULL, NULL),
(2, 'Colony Count', 0, NULL, NULL, NULL),
(3, 'Condition', 0, NULL, NULL, NULL),
(4, 'opt 1', 1, NULL, NULL, NULL),
(5, 'opt 2', 1, NULL, NULL, NULL),
(6, 'opt 1', 2, NULL, NULL, NULL),
(7, 'opt 2', 2, NULL, NULL, NULL),
(8, 'opt 1', 3, NULL, NULL, NULL),
(9, 'opt 2', 3, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `iso` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `symbol` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `iso`, `name`, `symbol`) VALUES
(1, 'AED', 'United Arab Emirates Dirham', 'د.إ'),
(2, 'AFN', 'Afghan Afghani', '؋'),
(3, 'ALL', 'Albanian Lek', 'L'),
(4, 'AMD', 'Armenian Dram', 'դր.'),
(5, 'ANG', 'Netherlands Antillean Gulden', 'ƒ'),
(6, 'AOA', 'Angolan Kwanza', 'Kz'),
(7, 'ARS', 'Argentine Peso', '$'),
(8, 'AUD', 'Australian Dollar', '$'),
(9, 'AWG', 'Aruban Florin', 'ƒ'),
(10, 'AZN', 'Azerbaijani Manat', 'null'),
(11, 'BAM', 'Bosnia and Herzegovina Convertible Mark', 'КМ'),
(12, 'BBD', 'Barbadian Dollar', '$'),
(13, 'BDT', 'Bangladeshi Taka', '৳'),
(14, 'BGN', 'Bulgarian Lev', 'лв'),
(15, 'BHD', 'Bahraini Dinar', 'ب.د'),
(16, 'BIF', 'Burundian Franc', 'Fr'),
(17, 'BMD', 'Bermudian Dollar', '$'),
(18, 'BND', 'Brunei Dollar', '$'),
(19, 'BOB', 'Bolivian Boliviano', 'Bs.'),
(20, 'BRL', 'Brazilian Real', 'R$'),
(21, 'BSD', 'Bahamian Dollar', '$'),
(22, 'BTN', 'Bhutanese Ngultrum', 'Nu.'),
(23, 'BWP', 'Botswana Pula', 'P'),
(24, 'BYR', 'Belarusian Ruble', 'Br'),
(25, 'BZD', 'Belize Dollar', '$'),
(26, 'CAD', 'Canadian Dollar', '$'),
(27, 'CDF', 'Congolese Franc', 'Fr'),
(28, 'CHF', 'Swiss Franc', 'Fr'),
(29, 'CLF', 'Unidad de Fomento', 'UF'),
(30, 'CLP', 'Chilean Peso', '$'),
(31, 'CNY', 'Chinese Renminbi Yuan', '¥'),
(32, 'COP', 'Colombian Peso', '$'),
(33, 'CRC', 'Costa Rican Colón', '₡'),
(34, 'CUC', 'Cuban Convertible Peso', '$'),
(35, 'CUP', 'Cuban Peso', '$'),
(36, 'CVE', 'Cape Verdean Escudo', '$'),
(37, 'CZK', 'Czech Koruna', 'Kč'),
(38, 'DJF', 'Djiboutian Franc', 'Fdj'),
(39, 'DKK', 'Danish Krone', 'kr'),
(40, 'DOP', 'Dominican Peso', '$'),
(41, 'DZD', 'Algerian Dinar', 'د.ج'),
(42, 'EGP', 'Egyptian Pound', 'ج.م'),
(43, 'ERN', 'Eritrean Nakfa', 'Nfk'),
(44, 'ETB', 'Ethiopian Birr', 'Br'),
(45, 'EUR', 'Euro', '€'),
(46, 'FJD', 'Fijian Dollar', '$'),
(47, 'FKP', 'Falkland Pound', '£'),
(48, 'GBP', 'British Pound', '£'),
(49, 'GEL', 'Georgian Lari', 'ლ'),
(50, 'GHS', 'Ghanaian Cedi', '₵'),
(51, 'GIP', 'Gibraltar Pound', '£'),
(52, 'GMD', 'Gambian Dalasi', 'D'),
(53, 'GNF', 'Guinean Franc', 'Fr'),
(54, 'GTQ', 'Guatemalan Quetzal', 'Q'),
(55, 'GYD', 'Guyanese Dollar', '$'),
(56, 'HKD', 'Hong Kong Dollar', '$'),
(57, 'HNL', 'Honduran Lempira', 'L'),
(58, 'HRK', 'Croatian Kuna', 'kn'),
(59, 'HTG', 'Haitian Gourde', 'G'),
(60, 'HUF', 'Hungarian Forint', 'Ft'),
(61, 'IDR', 'Indonesian Rupiah', 'Rp'),
(62, 'ILS', 'Israeli New Sheqel', '₪'),
(63, 'INR', 'Indian Rupee', '₹'),
(64, 'IQD', 'Iraqi Dinar', 'ع.د'),
(65, 'IRR', 'Iranian Rial', '﷼'),
(66, 'ISK', 'Icelandic Króna', 'kr'),
(67, 'JMD', 'Jamaican Dollar', '$'),
(68, 'JOD', 'Jordanian Dinar', 'د.ا'),
(69, 'JPY', 'Japanese Yen', '¥'),
(70, 'KES', 'Kenyan Shilling', 'KSh'),
(71, 'KGS', 'Kyrgyzstani Som', 'som'),
(72, 'KHR', 'Cambodian Riel', '៛'),
(73, 'KMF', 'Comorian Franc', 'Fr'),
(74, 'KPW', 'North Korean Won', '₩'),
(75, 'KRW', 'South Korean Won', '₩'),
(76, 'KWD', 'Kuwaiti Dinar', 'د.ك'),
(77, 'KYD', 'Cayman Islands Dollar', '$'),
(78, 'KZT', 'Kazakhstani Tenge', '〒'),
(79, 'LAK', 'Lao Kip', '₭'),
(80, 'LBP', 'Lebanese Pound', 'ل.ل'),
(81, 'LKR', 'Sri Lankan Rupee', '₨'),
(82, 'LRD', 'Liberian Dollar', '$'),
(83, 'LSL', 'Lesotho Loti', 'L'),
(84, 'LTL', 'Lithuanian Litas', 'Lt'),
(85, 'LVL', 'Latvian Lats', 'Ls'),
(86, 'LYD', 'Libyan Dinar', 'ل.د'),
(87, 'MAD', 'Moroccan Dirham', 'د.م.'),
(88, 'MDL', 'Moldovan Leu', 'L'),
(89, 'MGA', 'Malagasy Ariary', 'Ar'),
(90, 'MKD', 'Macedonian Denar', 'ден'),
(91, 'MMK', 'Myanmar Kyat', 'K'),
(92, 'MNT', 'Mongolian Tögrög', '₮'),
(93, 'MOP', 'Macanese Pataca', 'P'),
(94, 'MRO', 'Mauritanian Ouguiya', 'UM'),
(95, 'MUR', 'Mauritian Rupee', '₨'),
(96, 'MVR', 'Maldivian Rufiyaa', 'MVR'),
(97, 'MWK', 'Malawian Kwacha', 'MK'),
(98, 'MXN', 'Mexican Peso', '$'),
(99, 'MYR', 'Malaysian Ringgit', 'RM'),
(100, 'MZN', 'Mozambican Metical', 'MTn'),
(101, 'NAD', 'Namibian Dollar', '$'),
(102, 'NGN', 'Nigerian Naira', '₦'),
(103, 'NIO', 'Nicaraguan Córdoba', 'C$'),
(104, 'NOK', 'Norwegian Krone', 'kr'),
(105, 'NPR', 'Nepalese Rupee', '₨'),
(106, 'NZD', 'New Zealand Dollar', '$'),
(107, 'OMR', 'Omani Rial', 'ر.ع.'),
(108, 'PAB', 'Panamanian Balboa', 'B/.'),
(109, 'PEN', 'Peruvian Nuevo Sol', 'S/.'),
(110, 'PGK', 'Papua New Guinean Kina', 'K'),
(111, 'PHP', 'Philippine Peso', '₱'),
(112, 'PKR', 'Pakistani Rupee', '₨'),
(113, 'PLN', 'Polish Złoty', 'zł'),
(114, 'PYG', 'Paraguayan Guaraní', '₲'),
(115, 'QAR', 'Qatari Riyal', 'ر.ق'),
(116, 'RON', 'Romanian Leu', 'Lei'),
(117, 'RSD', 'Serbian Dinar', 'РСД'),
(118, 'RUB', 'Russian Ruble', 'р.'),
(119, 'RWF', 'Rwandan Franc', 'FRw'),
(120, 'SAR', 'Saudi Riyal', 'ر.س'),
(121, 'SBD', 'Solomon Islands Dollar', '$'),
(122, 'SCR', 'Seychellois Rupee', '₨'),
(123, 'SDG', 'Sudanese Pound', '£'),
(124, 'SEK', 'Swedish Krona', 'kr'),
(125, 'SGD', 'Singapore Dollar', '$'),
(126, 'SHP', 'Saint Helenian Pound', '£'),
(127, 'SKK', 'Slovak Koruna', 'Sk'),
(128, 'SLL', 'Sierra Leonean Leone', 'Le'),
(129, 'SOS', 'Somali Shilling', 'Sh'),
(130, 'SRD', 'Surinamese Dollar', '$'),
(131, 'SSP', 'South Sudanese Pound', '£'),
(132, 'STD', 'São Tomé and Príncipe Dobra', 'Db'),
(133, 'SVC', 'Salvadoran Colón', '₡'),
(134, 'SYP', 'Syrian Pound', '£S'),
(135, 'SZL', 'Swazi Lilangeni', 'L'),
(136, 'THB', 'Thai Baht', '฿'),
(137, 'TJS', 'Tajikistani Somoni', 'ЅМ'),
(138, 'TMT', 'Turkmenistani Manat', 'T'),
(139, 'TND', 'Tunisian Dinar', 'د.ت'),
(140, 'TOP', 'Tongan Paʻanga', 'T$'),
(141, 'TRY', 'Turkish Lira', 'TL'),
(142, 'TTD', 'Trinidad and Tobago Dollar', '$'),
(143, 'TWD', 'New Taiwan Dollar', '$'),
(144, 'TZS', 'Tanzanian Shilling', 'Sh'),
(145, 'UAH', 'Ukrainian Hryvnia', '₴'),
(146, 'UGX', 'Ugandan Shilling', 'USh'),
(147, 'USD', 'United States Dollar', '$'),
(148, 'UYU', 'Uruguayan Peso', '$'),
(149, 'UZS', 'Uzbekistani Som', 'null'),
(150, 'VEF', 'Venezuelan Bolívar', 'Bs F'),
(151, 'VND', 'Vietnamese Đồng', '₫'),
(152, 'VUV', 'Vanuatu Vatu', 'Vt'),
(153, 'WST', 'Samoan Tala', 'T'),
(154, 'XAF', 'Central African Cfa Franc', 'Fr'),
(155, 'XAG', 'Silver (Troy Ounce)', 'oz t'),
(156, 'XAU', 'Gold (Troy Ounce)', 'oz t'),
(157, 'XCD', 'East Caribbean Dollar', '$'),
(158, 'XDR', 'Special Drawing Rights', 'SDR'),
(159, 'XOF', 'West African Cfa Franc', 'Fr'),
(160, 'XPF', 'Cfp Franc', 'Fr'),
(161, 'YER', 'Yemeni Rial', '﷼'),
(162, 'ZAR', 'South African Rand', 'R'),
(163, 'ZMK', 'Zambian Kwacha', 'ZK'),
(164, 'ZMW', 'Zambian Kwacha', 'ZK');

-- --------------------------------------------------------

--
-- Table structure for table `customer_registrations`
--

CREATE TABLE `customer_registrations` (
  `id` int(11) NOT NULL,
  `org_id` int(11) NOT NULL,
  `name_eng` varchar(255) DEFAULT NULL,
  `name_local` varchar(255) DEFAULT NULL,
  `party_type` int(11) DEFAULT NULL,
  `contact_name` varchar(255) DEFAULT NULL,
  `ph1` varchar(255) DEFAULT NULL,
  `ph2` varchar(255) DEFAULT NULL,
  `mob_no1` varchar(255) DEFAULT NULL,
  `mob_no2` varchar(255) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `prov_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `address1` varchar(255) DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `credit_limit` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0' COMMENT '0 active, 1 de-active. 2 suspend, 3 closed	',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_registrations`
--

INSERT INTO `customer_registrations` (`id`, `org_id`, `name_eng`, `name_local`, `party_type`, `contact_name`, `ph1`, `ph2`, `mob_no1`, `mob_no2`, `country_id`, `prov_id`, `city_id`, `address1`, `address2`, `email`, `credit_limit`, `status`, `deleted_at`, `updated_at`, `created_at`) VALUES
(1, 1, 'asdas', 'asdas', 28, 'rty', 'ty', 'uy', 'uy', 'u', 165, 1, 2, 'uyu', NULL, NULL, NULL, 0, NULL, '2022-01-27 11:40:48', '2022-01-27 11:40:48'),
(2, 1, 'rtyu', 'tyu', 26, 'yui', 'yu', 'iyu', 'y', 'u', 165, 1, 2, 'weqwe', 'u', 'engmohsinshaikh@gmail.com', NULL, 0, NULL, '2022-01-27 12:59:18', '2022-01-27 12:59:18');

-- --------------------------------------------------------

--
-- Table structure for table `customer_registration_centers`
--

CREATE TABLE `customer_registration_centers` (
  `id` int(11) NOT NULL,
  `customer_registration_id` int(11) NOT NULL,
  `center_id` int(11) NOT NULL,
  `name_eng` varchar(255) DEFAULT NULL,
  `name_local` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0 active, 1 de-active	',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_registration_centers`
--

INSERT INTO `customer_registration_centers` (`id`, `customer_registration_id`, `center_id`, `name_eng`, `name_local`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(3, 1, 1, 'Mohsin', 'Shaikh', 0, NULL, '2022-01-29 12:43:03', '2022-01-29 12:43:03'),
(4, 1, 3, 'Ahmed', 'Test', 0, NULL, '2022-01-29 13:04:50', '2022-01-29 13:04:50'),
(5, 1, 4, 'TEssssssttttttt', 'poiuytrewq', 0, '2022-01-29 13:10:43', '2022-01-29 13:08:39', '2022-01-29 13:10:43');

-- --------------------------------------------------------

--
-- Table structure for table `customer_registration_docs`
--

CREATE TABLE `customer_registration_docs` (
  `id` int(11) NOT NULL,
  `customer_registration_id` int(11) NOT NULL,
  `doc_details` text,
  `doc_file` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer_registration_labs`
--

CREATE TABLE `customer_registration_labs` (
  `id` int(11) NOT NULL,
  `customer_registration_id` int(11) NOT NULL,
  `lab_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0 active, 1 de-active',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_registration_labs`
--

INSERT INTO `customer_registration_labs` (`id`, `customer_registration_id`, `lab_id`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 0, NULL, NULL, '2022-01-29 11:52:02'),
(2, 1, 2, 0, NULL, NULL, NULL),
(3, 1, 3, 0, NULL, '2022-01-28 12:28:51', '2022-01-29 12:01:29'),
(4, 1, 5, 0, '2022-01-28 13:00:09', '2022-01-28 12:32:34', '2022-01-28 13:00:09'),
(5, 1, 5, 0, '2022-01-28 12:59:53', '2022-01-28 12:35:20', '2022-01-28 12:59:53'),
(6, 1, 2, 0, NULL, '2022-01-29 10:05:22', '2022-01-29 10:05:22'),
(7, 1, 1, 0, NULL, '2022-02-15 10:41:53', '2022-02-15 10:41:53');

-- --------------------------------------------------------

--
-- Table structure for table `customer_registration_price_lists`
--

CREATE TABLE `customer_registration_price_lists` (
  `id` int(11) NOT NULL,
  `org_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `cust_type` tinyint(1) NOT NULL DEFAULT '0',
  `start_date` varchar(255) DEFAULT NULL,
  `end_date` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0 active, 1 de-active.',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_registration_price_lists`
--

INSERT INTO `customer_registration_price_lists` (`id`, `org_id`, `cust_id`, `cust_type`, `start_date`, `end_date`, `status`, `deleted_at`, `updated_at`, `created_at`) VALUES
(1, 1, 1, 0, '09-02-2022', '0000-00-00', 0, NULL, '2022-01-31 15:07:15', '2022-01-31 14:01:55'),
(2, 1, 1, 0, '0000-00-00', '0000-00-00', 0, NULL, '2022-01-31 14:02:21', '2022-01-31 14:02:21'),
(3, 2, 1, 0, '05-02-2022', '05-02-2022', 0, NULL, '2022-02-05 06:11:58', '2022-02-05 06:11:58');

-- --------------------------------------------------------

--
-- Table structure for table `customer_registration_price_lists_discounts`
--

CREATE TABLE `customer_registration_price_lists_discounts` (
  `id` int(11) NOT NULL,
  `cust_price_list_id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `discount_type` tinyint(1) NOT NULL DEFAULT '0',
  `price` float NOT NULL DEFAULT '0',
  `discount_value` float NOT NULL DEFAULT '0',
  `party_price` float NOT NULL DEFAULT '0',
  `reporting_days` varchar(100) DEFAULT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0 Offered, 1 Agreed, 2 Disputed',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_registration_price_lists_discounts`
--

INSERT INTO `customer_registration_price_lists_discounts` (`id`, `cust_price_list_id`, `test_id`, `discount_type`, `price`, `discount_value`, `party_price`, `reporting_days`, `status`, `deleted_at`, `updated_at`, `created_at`) VALUES
(1, 1, 1, 1, 10, 0, 10, '2 days', 0, NULL, '2022-02-05 10:01:14', '2022-02-05 10:01:14'),
(2, 1, 1, 2, 1000, 0, 100, '5 Days', 0, NULL, '2022-02-05 10:47:41', '2022-02-05 10:47:41');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `org_id` int(11) NOT NULL,
  `name_eng` varchar(255) DEFAULT NULL,
  `name_local` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `remarks` varchar(191) DEFAULT NULL,
  `sctn_id` int(11) NOT NULL,
  `contact_name` varchar(191) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `org_id`, `name_eng`, `name_local`, `status`, `remarks`, `sctn_id`, `contact_name`, `is_active`, `deleted_at`, `updated_at`, `created_at`) VALUES
(1, 3, 'Microbiology', 'Microbiology', 0, 'om g', 2, 'DR. FATAH MEMON', 0, NULL, '2022-09-30 12:00:51', '2021-12-27 12:38:38'),
(2, 3, 'Transfusion Services', 'Transfusion Services', 0, 'i am', 2, 'DR. MEMON', 1, NULL, '2021-12-27 13:00:57', '2021-12-27 13:00:57'),
(3, 2, 'Immunology', 'Immunology', 0, 'yes', 2, 'DR. FATAH MEMON', 1, NULL, '2021-12-27 13:01:08', '2021-12-27 13:01:08'),
(4, 1, 'Surgical Pathology', 'Surgical Pathology', 0, 'oo', 2, 'DR. FATAH', 1, NULL, '2021-12-27 13:01:20', '2021-12-27 13:01:20'),
(5, 1, 'SEROLOGY', 'SEROLOGY', 0, 'NO', 2, 'DR. FATAH MEMON', 3, NULL, '2022-09-30 11:31:14', '2022-09-30 11:17:04');

-- --------------------------------------------------------

--
-- Table structure for table `discount_roles`
--

CREATE TABLE `discount_roles` (
  `id` int(11) NOT NULL,
  `name_eng` varchar(255) DEFAULT NULL,
  `name_local` varchar(255) DEFAULT NULL,
  `discount_perct` float NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0 active, 1 de-active',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `discount_roles`
--

INSERT INTO `discount_roles` (`id`, `name_eng`, `name_local`, `discount_perct`, `status`, `deleted_at`, `updated_at`, `created_at`) VALUES
(2, '5000 PCR TEST', '5000 PCR TEST', 20, 0, NULL, '2022-02-24 04:09:14', '2022-02-24 04:09:14'),
(3, '6000', 'ZERO', 2, 0, NULL, '2022-02-24 04:09:34', '2022-02-24 04:09:34'),
(4, '40 PERCENT 2600', '40 PERCENT 2600', 2, 0, NULL, '2022-02-24 04:12:14', '2022-02-24 04:12:14');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nature` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_eng` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_local` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dept_id` int(11) DEFAULT NULL,
  `spec_id` int(11) DEFAULT NULL,
  `gender` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `martial_status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count_id` int(11) DEFAULT NULL,
  `prov_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `mob1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mob2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `room_no` int(11) DEFAULT NULL,
  `cnic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doc_portal_user` int(11) DEFAULT NULL,
  `gl_acc` int(11) DEFAULT NULL,
  `remarks` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `code`, `email`, `address`, `nature`, `name_eng`, `name_local`, `dept_id`, `spec_id`, `gender`, `martial_status`, `dob`, `count_id`, `prov_id`, `city_id`, `mob1`, `mob2`, `room_no`, `cnic`, `doc_portal_user`, `gl_acc`, `remarks`, `deleted_at`, `created_at`, `updated_at`, `profile_image`) VALUES
(6, '1645701072363', NULL, NULL, 'Payroll', 'Mohsin', 'Mohsin', 1, 1, 'Male', 'Married', '24-02-2022', NULL, 2, 2, '123456789', '123456789', 101, '1234567890', NULL, NULL, 'this is test record', NULL, '2022-02-24 06:11:12', '2022-02-24 06:11:12', '');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_charges`
--

CREATE TABLE `doctor_charges` (
  `id` int(11) NOT NULL,
  `doc_id` int(11) NOT NULL,
  `charges_type` varchar(255) DEFAULT NULL,
  `nature` varchar(255) DEFAULT NULL,
  `charges` varchar(255) DEFAULT NULL,
  `share_type` varchar(255) DEFAULT NULL,
  `doctor_share` varchar(255) DEFAULT NULL,
  `billing_nature` varchar(255) DEFAULT NULL,
  `remarks_charges` text,
  `deleted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctor_expertises`
--

CREATE TABLE `doctor_expertises` (
  `id` int(11) NOT NULL,
  `doc_id` int(11) NOT NULL,
  `expertise` varchar(255) DEFAULT NULL,
  `remarks_expertises` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor_expertises`
--

INSERT INTO `doctor_expertises` (`id`, `doc_id`, `expertise`, `remarks_expertises`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 2, 'CARDIAC SURGERY', 'This is testing expertise update', NULL, '2022-01-05 08:00:41', '2022-01-05 08:00:41');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_qualifications`
--

CREATE TABLE `doctor_qualifications` (
  `id` int(11) NOT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `institute` varchar(255) NOT NULL,
  `remarks_qualification` text,
  `doc_id` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor_qualifications`
--

INSERT INTO `doctor_qualifications` (`id`, `qualification`, `institute`, `remarks_qualification`, `doc_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'FCPS', 'Meran', 'This is well know', 2, NULL, NULL, NULL),
(2, 'MBA', 'Iqra University', 'This is well know', 2, NULL, NULL, NULL),
(3, 'F.R.C.P.S', 'Test', 'Test', 2, NULL, '2022-01-04 02:26:05', '2022-01-04 02:26:05'),
(5, 'FCPS', 'Mehran University', 'Welldoneyy Ahmed', 3, '2022-01-05 05:07:18', '2022-01-05 02:31:53', '2022-01-05 05:07:18');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `expense_category_id` int(11) DEFAULT NULL,
  `amount` double NOT NULL DEFAULT '0',
  `date` date DEFAULT NULL,
  `notes` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `doctor_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `expense_categories`
--

CREATE TABLE `expense_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faranchises`
--

CREATE TABLE `faranchises` (
  `id` int(11) NOT NULL,
  `org_id` int(11) DEFAULT NULL,
  `name_eng` varchar(255) DEFAULT NULL,
  `name_local` varchar(255) DEFAULT NULL,
  `lab_id` int(11) DEFAULT NULL,
  `contact_name` varchar(255) DEFAULT NULL,
  `ph1` varchar(255) DEFAULT NULL,
  `ph2` varchar(255) DEFAULT NULL,
  `mob_no1` varchar(255) DEFAULT NULL,
  `mob_no2` varchar(255) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `prov_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `address1` text,
  `address2` text,
  `email` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '0 active, 1 de-active. 2 suspend, 3 closed',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `faranchises_price_lists`
--

CREATE TABLE `faranchises_price_lists` (
  `id` int(11) NOT NULL,
  `org_id` int(11) NOT NULL,
  `lab_id` int(11) NOT NULL,
  `franchise_id` int(11) NOT NULL,
  `start_date` varchar(50) DEFAULT NULL,
  `end_date` varchar(50) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0 active, 1 de-active. 2 suspend, 3 closed',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faranchises_price_lists`
--

INSERT INTO `faranchises_price_lists` (`id`, `org_id`, `lab_id`, `franchise_id`, `start_date`, `end_date`, `status`, `deleted_at`, `updated_at`, `created_at`) VALUES
(1, 1, 1, 2, '07-02-2022', '07-02-2022', 0, NULL, '2022-02-07 13:50:00', '2022-02-07 13:50:00');

-- --------------------------------------------------------

--
-- Table structure for table `faranchise_price_lists_discounts`
--

CREATE TABLE `faranchise_price_lists_discounts` (
  `id` int(11) NOT NULL,
  `faranchise_list_id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `discount_type` tinyint(1) NOT NULL DEFAULT '0',
  `price` float NOT NULL DEFAULT '0',
  `discount_price` float NOT NULL DEFAULT '0',
  `party_price` float NOT NULL DEFAULT '0',
  `reporting_days` varchar(500) NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0 Offered, 1 Agreed, 2 Disputed',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `branch_id` int(10) UNSIGNED DEFAULT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `contract_id` int(11) DEFAULT NULL,
  `discount` double(8,2) NOT NULL DEFAULT '0.00',
  `subtotal` double(8,2) NOT NULL DEFAULT '0.00',
  `total` double(8,2) NOT NULL DEFAULT '0.00',
  `paid` double(8,2) NOT NULL DEFAULT '0.00',
  `due` double(8,2) NOT NULL DEFAULT '0.00',
  `done` tinyint(1) NOT NULL DEFAULT '0',
  `report_pdf` text COLLATE utf8mb4_unicode_ci,
  `receipt_pdf` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `barcode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doctor_commission` double NOT NULL DEFAULT '0',
  `signature` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inv_date_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patient_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lab_id` int(11) NOT NULL,
  `lab_center_id` int(11) NOT NULL,
  `party_id` int(11) NOT NULL,
  `party_center_id` int(11) NOT NULL,
  `case_no` int(11) NOT NULL,
  `walk_in_or_cash` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lab_no` int(11) NOT NULL,
  `org_id` int(11) NOT NULL,
  `inv_no` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0 Pending, 1 Completed',
  `disc_code_id` int(11) NOT NULL,
  `discount_per` float NOT NULL,
  `discount_amount` float NOT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exp_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flight_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pnr_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `airline_id` int(11) DEFAULT NULL,
  `dest_count_id` int(11) NOT NULL,
  `inv_type` tinyint(1) NOT NULL DEFAULT '1',
  `trav_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `request_reason` text COLLATE utf8mb4_unicode_ci,
  `is_status_request` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1 Request for cancel, 2 declined by lab incharge, 3 accepted'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `branch_id`, `patient_id`, `doctor_id`, `contract_id`, `discount`, `subtotal`, `total`, `paid`, `due`, `done`, `report_pdf`, `receipt_pdf`, `created_at`, `updated_at`, `barcode`, `doctor_commission`, `signature`, `inv_date_time`, `patient_type`, `lab_id`, `lab_center_id`, `party_id`, `party_center_id`, `case_no`, `walk_in_or_cash`, `lab_no`, `org_id`, `inv_no`, `status`, `disc_code_id`, `discount_per`, `discount_amount`, `payment_type`, `exp_date`, `flight_no`, `pnr_no`, `passport_no`, `airline_id`, `dest_count_id`, `inv_type`, `trav_date`, `request_reason`, `is_status_request`) VALUES
(1, NULL, 2, 6, NULL, 0.00, 30.00, 30.00, 30.00, 0.00, 0, NULL, NULL, '2022-09-27 08:02:03', '2022-03-12 06:48:49', '635946910033', 0, NULL, NULL, 'Local Patient', 1, 1, 1, 3, 9876543, 'Walk In', 987654321, 3, 1234567, 0, 3, 2, 0.6, 'PAYMENT ORDER', NULL, NULL, NULL, NULL, 2, 1, 1, NULL, 'Duplicate added', 1),
(2, NULL, 2, 6, NULL, 0.00, 30.00, 30.00, 30.00, 0.00, 0, NULL, NULL, '2022-08-24 08:04:12', '2022-03-12 06:48:49', '499105881294', 0, NULL, NULL, 'Overseas Traveller', 1, 1, 1, 3, 9876543, 'Walk In', 987654321, 3, 1234567, 0, 3, 2, 0.6, 'PAYMENT ORDER', '01-03-2022', '0987654321', '123123', '0987654321', 2, 1, 2, '15-03-2022', 'Duplicate added', 2),
(3, NULL, 2, 6, NULL, 0.00, 30.00, 30.00, 30.00, 0.00, 0, NULL, 'http://localhost/global_labs/public/uploads/pdf/1645707934.pdf', '2021-12-31 08:05:32', '2022-03-12 06:48:49', '424506733117', 0, NULL, NULL, 'Local Patient', 1, 1, 2, 3, 9876543, 'Walk In', 987654321, 3, 1234567, 0, 3, 2, 0.6, 'PAYMENT ORDER', NULL, NULL, NULL, NULL, 2, 1, 1, NULL, 'Duplicate added', 3),
(4, NULL, 2, 6, NULL, 0.00, 30.00, 30.00, 0.00, 30.00, 0, NULL, 'http://localhost/global_labs/public/uploads/pdf/1646147493.pdf', '2022-09-01 10:11:30', '2022-03-01 10:11:38', '110355170354', 0, NULL, NULL, 'General Traveller', 1, 1, 2, 4, 9876543, 'Walk In', 987654, 2, 23456789, 0, 3, 2, 1.2, 'CASH', '23-03-2022', '8654', '34567', '098654321', 4, 165, 1, '31-03-2022', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `group_cultures`
--

CREATE TABLE `group_cultures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group_id` int(11) DEFAULT NULL,
  `culture_id` int(11) DEFAULT NULL,
  `price` double(8,2) DEFAULT NULL,
  `done` tinyint(1) NOT NULL DEFAULT '0',
  `comment` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `group_culture_options`
--

CREATE TABLE `group_culture_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group_culture_id` int(11) DEFAULT NULL,
  `culture_option_id` int(11) DEFAULT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `group_culture_results`
--

CREATE TABLE `group_culture_results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group_culture_id` int(11) DEFAULT NULL,
  `antibiotic_id` int(11) DEFAULT NULL,
  `sensitivity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `group_tests`
--

CREATE TABLE `group_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group_id` int(11) DEFAULT NULL,
  `test_id` int(11) DEFAULT NULL,
  `price` double(8,2) DEFAULT NULL,
  `has_results` tinyint(1) NOT NULL DEFAULT '0',
  `has_entered` tinyint(1) NOT NULL DEFAULT '0',
  `done` tinyint(1) NOT NULL DEFAULT '0',
  `is_urgent` tinyint(1) NOT NULL DEFAULT '0',
  `comment` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `group_tests`
--

INSERT INTO `group_tests` (`id`, `group_id`, `test_id`, `price`, `has_results`, `has_entered`, `done`, `is_urgent`, `comment`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 30.00, 1, 0, 0, 0, NULL, '2022-02-24 08:02:04', '2022-02-24 08:02:04'),
(2, 1, 2, 0.00, 1, 0, 0, 0, NULL, '2022-02-24 08:02:04', '2022-02-24 08:02:05'),
(3, 1, 3, 0.00, 1, 0, 0, 0, NULL, '2022-02-24 08:02:04', '2022-02-24 08:02:06'),
(4, 2, 1, 30.00, 1, 0, 0, 0, NULL, '2022-02-24 08:04:13', '2022-02-24 08:04:14'),
(5, 2, 2, 0.00, 1, 0, 0, 0, NULL, '2022-02-24 08:04:13', '2022-02-24 08:04:16'),
(6, 2, 3, 0.00, 1, 0, 0, 0, NULL, '2022-02-24 08:04:13', '2022-02-24 08:04:17'),
(7, 3, 1, 30.00, 1, 0, 0, 0, NULL, '2022-02-24 08:05:32', '2022-02-24 08:05:33'),
(8, 3, 2, 0.00, 1, 0, 0, 0, NULL, '2022-02-24 08:05:32', '2022-02-24 08:05:33'),
(9, 3, 3, 0.00, 1, 0, 0, 0, NULL, '2022-02-24 08:05:32', '2022-02-24 08:05:33'),
(10, 4, 2, 0.00, 1, 0, 0, 0, NULL, '2022-03-01 10:11:30', '2022-03-01 10:11:31'),
(11, 4, 1, 30.00, 1, 0, 0, 0, NULL, '2022-03-01 10:11:31', '2022-03-01 10:11:31'),
(12, 4, 4, 0.00, 1, 0, 0, 0, NULL, '2022-03-01 10:11:31', '2022-03-01 10:11:32'),
(13, 4, 6, 0.00, 1, 0, 0, 0, NULL, '2022-03-01 10:11:31', '2022-03-01 10:11:33');

-- --------------------------------------------------------

--
-- Table structure for table `group_test_results`
--

CREATE TABLE `group_test_results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group_test_id` int(11) DEFAULT NULL,
  `test_id` int(11) DEFAULT NULL,
  `result` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `group_test_results`
--

INSERT INTO `group_test_results` (`id`, `group_test_id`, `test_id`, `result`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, NULL, '2022-02-24 08:02:04', '2022-02-24 08:02:04'),
(2, 1, 3, NULL, NULL, '2022-02-24 08:02:05', '2022-02-24 08:02:05'),
(3, 1, 4, NULL, NULL, '2022-02-24 08:02:05', '2022-02-24 08:02:05'),
(4, 1, 5, NULL, NULL, '2022-02-24 08:02:05', '2022-02-24 08:02:05'),
(5, 1, 6, NULL, NULL, '2022-02-24 08:02:05', '2022-02-24 08:02:05'),
(6, 1, 7, NULL, NULL, '2022-02-24 08:02:05', '2022-02-24 08:02:05'),
(7, 1, 8, NULL, NULL, '2022-02-24 08:02:05', '2022-02-24 08:02:05'),
(8, 1, 9, NULL, NULL, '2022-02-24 08:02:05', '2022-02-24 08:02:05'),
(9, 1, 10, NULL, NULL, '2022-02-24 08:02:05', '2022-02-24 08:02:05'),
(10, 1, 11, NULL, NULL, '2022-02-24 08:02:05', '2022-02-24 08:02:05'),
(11, 1, 12, NULL, NULL, '2022-02-24 08:02:05', '2022-02-24 08:02:05'),
(12, 2, 2, NULL, NULL, '2022-02-24 08:02:05', '2022-02-24 08:02:05'),
(13, 4, 2, NULL, NULL, '2022-02-24 08:04:14', '2022-02-24 08:04:14'),
(14, 4, 3, NULL, NULL, '2022-02-24 08:04:14', '2022-02-24 08:04:14'),
(15, 4, 4, NULL, NULL, '2022-02-24 08:04:14', '2022-02-24 08:04:14'),
(16, 4, 5, NULL, NULL, '2022-02-24 08:04:14', '2022-02-24 08:04:14'),
(17, 4, 6, NULL, NULL, '2022-02-24 08:04:15', '2022-02-24 08:04:15'),
(18, 4, 7, NULL, NULL, '2022-02-24 08:04:15', '2022-02-24 08:04:15'),
(19, 4, 8, NULL, NULL, '2022-02-24 08:04:15', '2022-02-24 08:04:15'),
(20, 4, 9, NULL, NULL, '2022-02-24 08:04:16', '2022-02-24 08:04:16'),
(21, 4, 10, NULL, NULL, '2022-02-24 08:04:16', '2022-02-24 08:04:16'),
(22, 4, 11, NULL, NULL, '2022-02-24 08:04:16', '2022-02-24 08:04:16'),
(23, 4, 12, NULL, NULL, '2022-02-24 08:04:16', '2022-02-24 08:04:16'),
(24, 5, 2, NULL, NULL, '2022-02-24 08:04:17', '2022-02-24 08:04:17'),
(25, 7, 2, NULL, NULL, '2022-02-24 08:05:33', '2022-02-24 08:05:33'),
(26, 7, 3, NULL, NULL, '2022-02-24 08:05:33', '2022-02-24 08:05:33'),
(27, 7, 4, NULL, NULL, '2022-02-24 08:05:33', '2022-02-24 08:05:33'),
(28, 7, 5, NULL, NULL, '2022-02-24 08:05:33', '2022-02-24 08:05:33'),
(29, 7, 6, NULL, NULL, '2022-02-24 08:05:33', '2022-02-24 08:05:33'),
(30, 7, 7, NULL, NULL, '2022-02-24 08:05:33', '2022-02-24 08:05:33'),
(31, 7, 8, NULL, NULL, '2022-02-24 08:05:33', '2022-02-24 08:05:33'),
(32, 7, 9, NULL, NULL, '2022-02-24 08:05:33', '2022-02-24 08:05:33'),
(33, 7, 10, NULL, NULL, '2022-02-24 08:05:33', '2022-02-24 08:05:33'),
(34, 7, 11, NULL, NULL, '2022-02-24 08:05:33', '2022-02-24 08:05:33'),
(35, 7, 12, NULL, NULL, '2022-02-24 08:05:33', '2022-02-24 08:05:33'),
(36, 8, 2, NULL, NULL, '2022-02-24 08:05:33', '2022-02-24 08:05:33'),
(37, 10, 2, NULL, NULL, '2022-03-01 10:11:31', '2022-03-01 10:11:31'),
(38, 11, 2, NULL, NULL, '2022-03-01 10:11:31', '2022-03-01 10:11:31'),
(39, 11, 3, NULL, NULL, '2022-03-01 10:11:31', '2022-03-01 10:11:31'),
(40, 11, 4, NULL, NULL, '2022-03-01 10:11:31', '2022-03-01 10:11:31'),
(41, 11, 5, NULL, NULL, '2022-03-01 10:11:31', '2022-03-01 10:11:31'),
(42, 11, 6, NULL, NULL, '2022-03-01 10:11:32', '2022-03-01 10:11:32'),
(43, 11, 7, NULL, NULL, '2022-03-01 10:11:32', '2022-03-01 10:11:32'),
(44, 11, 8, NULL, NULL, '2022-03-01 10:11:32', '2022-03-01 10:11:32'),
(45, 11, 9, NULL, NULL, '2022-03-01 10:11:32', '2022-03-01 10:11:32'),
(46, 11, 10, NULL, NULL, '2022-03-01 10:11:32', '2022-03-01 10:11:32'),
(47, 11, 11, NULL, NULL, '2022-03-01 10:11:32', '2022-03-01 10:11:32'),
(48, 11, 12, NULL, NULL, '2022-03-01 10:11:32', '2022-03-01 10:11:32');

-- --------------------------------------------------------

--
-- Table structure for table `labs`
--

CREATE TABLE `labs` (
  `id` int(11) NOT NULL,
  `org_id` int(11) NOT NULL,
  `inv_type` int(11) DEFAULT NULL,
  `name_eng` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `name_local` varchar(255) CHARACTER SET utf8 NOT NULL,
  `contact_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `ph1` varchar(255) DEFAULT NULL,
  `ph2` varchar(255) DEFAULT NULL,
  `mob_no1` varchar(255) DEFAULT NULL,
  `mob_no2` varchar(255) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `prov_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `address1` text,
  `address2` text,
  `rev_acc` varchar(255) DEFAULT NULL,
  `cash_acc` varchar(255) DEFAULT NULL,
  `bank_acc` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `remarks` text,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `labs`
--

INSERT INTO `labs` (`id`, `org_id`, `inv_type`, `name_eng`, `name_local`, `contact_name`, `ph1`, `ph2`, `mob_no1`, `mob_no2`, `country_id`, `prov_id`, `city_id`, `address1`, `address2`, `rev_acc`, `cash_acc`, `bank_acc`, `email`, `remarks`, `is_active`, `deleted_at`, `updated_at`, `created_at`) VALUES
(1, 1, 1, 'GRRL MAIN LAB', 'KHI MAIN LAB', 'MR. FAWWAD BUKHARI', '02134304775', NULL, '02134324775', NULL, 165, 1, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(2, 1, 1, 'GRRL ISLAMABAD', 'GRRL ISLAMABAD', 'MR. IMRAN', '02134304775', '\r\n', '02134324775', NULL, 165, 1, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-02-20 08:24:00', '2022-02-20 08:24:00', NULL),
(5, 1, 1, 'GENOSE LABORATORY', 'GENOSE LABORATORY', 'SHAFQAT', '02134304775', '', '02134324775', NULL, 165, 1, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(6, 1, 1, 'T LAB', 'T LAB', 'SHAFQAT', '02134304775', '', '02134324775', NULL, 165, 1, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-02-20 08:24:10', '2022-02-20 08:24:10', NULL),
(7, 3, 1, 'Ahmed New Javed', 'Ahmed New Javed', 'Ahmed New Javed', '+92123456789', '98765432', '23456789', '234567', 165, 1, 2, 'Test', 'test', NULL, '34567', '345678', 'ahmedjavedsw15@gmail.com', 'Test', 1, '2022-02-20 08:24:46', '2022-02-20 08:24:46', '2021-12-18 03:27:31');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `iso` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rtl` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `iso`, `active`, `created_at`, `updated_at`, `rtl`) VALUES
(1, 'ar', 1, NULL, NULL, 1),
(2, 'en', 1, NULL, NULL, 0),
(3, 'de', 1, NULL, NULL, 0),
(4, 'es', 1, NULL, NULL, 0),
(5, 'et', 1, NULL, NULL, 0),
(6, 'fa', 1, NULL, NULL, 1),
(7, 'fr', 1, NULL, NULL, 0),
(8, 'id', 1, NULL, NULL, 0),
(9, 'it', 1, NULL, NULL, 0),
(10, 'nl', 1, NULL, NULL, 0),
(11, 'de', 1, NULL, NULL, 0),
(12, 'pl', 1, NULL, NULL, 0),
(13, 'pt', 1, NULL, NULL, 0),
(14, 'ro', 1, NULL, NULL, 0),
(15, 'ru', 1, NULL, NULL, 0),
(16, 'th', 1, NULL, NULL, 0),
(17, 'tr', 1, NULL, NULL, 0),
(18, 'pt-br', 1, NULL, NULL, 0),
(19, 'zh-cn', 1, NULL, NULL, 0),
(20, 'zh-tw', 1, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `machines`
--

CREATE TABLE `machines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `org_id` int(11) NOT NULL,
  `name_eng` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_local` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `network_loaction` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dpt_id` int(11) NOT NULL,
  `mfr_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `splr` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(2, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(3, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(4, '2016_06_01_000004_create_oauth_clients_table', 1),
(5, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(6, '2020_06_291_023147_create_patients_table', 1),
(7, '2020_06_29_0231471_create_group_tests_table', 1),
(8, '2020_06_29_0231471_create_groups_table', 1),
(9, '2020_06_29_023147_create_antibiotics_table', 1),
(10, '2020_06_29_023147_create_cultures_table', 1),
(11, '2020_06_29_023147_create_currencies_table', 1),
(12, '2020_06_29_023147_create_doctors_table', 1),
(13, '2020_06_29_023147_create_failed_jobs_table', 1),
(14, '2020_06_29_023147_create_group_culture_results_table', 1),
(15, '2020_06_29_023147_create_group_cultures_table', 1),
(16, '2020_06_29_023147_create_group_test_results_table', 1),
(17, '2020_06_29_023147_create_password_resets_table', 1),
(18, '2020_06_29_023147_create_permissions_table', 1),
(19, '2020_06_29_023147_create_role_permissions_table', 1),
(20, '2020_06_29_023147_create_roles_table', 1),
(21, '2020_06_29_023147_create_settings_table', 1),
(22, '2020_06_29_023147_create_user_roles_table', 1),
(23, '2020_06_29_023147_create_users_table', 1),
(24, '2020_07_14_164944_create_chats_table', 1),
(25, '2020_07_19_0402311212_create_visits_table', 1),
(26, '2020_07_23_00134911_create_branches_table', 1),
(27, '2020_07_25_0846441_create_contracts_table', 1),
(28, '2020_07_26_174857_create_expenses_table', 1),
(29, '2020_07_26_180427_create_expense_categories_table', 1),
(30, '2020_09_19_01584112_create_component_options_table', 1),
(31, '2020_09_21_081815_create_tests_table', 1),
(32, '2020_09_21_090444_create_culture_options_table', 1),
(33, '2020_09_22_000304_create_activity_log_table', 1),
(34, '2020_09_23_06421111_create_group_culture_options', 1),
(35, '2020_09_28_005305_create_modules_table', 1),
(36, '2020_10_13_163657_create_languages_table', 1),
(37, '2021_01_07_055724_add_direction_to_languages_table', 1),
(38, '2021_03_11_152345_add_barcode_to_groups_table', 1),
(39, '2021_03_12_112340_add_commission_to_doctors', 1),
(40, '2021_03_12_120501_add_doctor_commission_to_groups_table', 1),
(41, '2021_03_12_121735_add_doctor_id_to_expenses_table', 1),
(42, '2021_03_13_032624_add_code_to_doctors_table', 1),
(43, '2021_03_13_175226_add_signature_to_users_table', 1),
(44, '2021_03_13_180751_add_sinature_to_groups_table', 1),
(45, '2022_08_25_121131_create_test_normal_ranges_table', 2),
(49, '2022_09_29_143619_create_machines_table', 3),
(50, '2022_09_30_065000_add_deleted_at_to_machines_table', 3),
(52, '2022_09_30_083357_create_sections_table', 4),
(53, '2022_09_30_155402_add_new_column_to_departments_table', 5),
(54, '2022_10_01_063627_create_payments_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'tests', '2021-11-13 13:19:07', '2021-11-13 13:19:07'),
(2, 'cultures', '2021-11-13 13:19:08', '2021-11-13 13:19:08'),
(3, 'antibiotics', '2021-11-13 13:19:08', '2021-11-13 13:19:08'),
(4, 'culture options', '2021-11-13 13:19:09', '2021-11-13 13:19:09'),
(5, 'doctors', '2021-11-13 13:19:10', '2021-11-13 13:19:10'),
(6, 'groups tests', '2021-11-13 13:19:12', '2021-11-13 13:19:12'),
(7, 'patients', '2021-11-13 13:19:12', '2021-11-13 13:19:12'),
(8, 'tests reports', '2021-11-13 13:19:14', '2021-11-13 13:19:14'),
(9, 'roles', '2021-11-13 13:19:15', '2021-11-13 13:19:15'),
(10, 'users', '2021-11-13 13:19:16', '2021-11-13 13:19:16'),
(11, 'price list', '2021-11-13 13:19:18', '2021-11-13 13:19:18'),
(12, 'accounting reports', '2021-11-13 13:19:19', '2021-11-13 13:19:19'),
(13, 'Home visits', '2021-11-13 13:19:19', '2021-11-13 13:19:19'),
(14, 'Branches', '2021-11-13 13:19:21', '2021-11-13 13:19:21'),
(15, 'contracts', '2021-11-13 13:19:21', '2021-11-13 13:19:21'),
(16, 'expense categories', '2021-11-13 13:19:21', '2021-11-13 13:19:21'),
(17, 'Expenses', '2021-11-13 13:19:23', '2021-11-13 13:19:23'),
(18, 'Backups', '2021-11-13 13:19:23', '2021-11-13 13:19:23'),
(19, 'setting', '2021-11-13 13:19:25', '2021-11-13 13:19:25'),
(20, 'Chat', '2021-11-13 13:19:25', '2021-11-13 13:19:25'),
(21, 'Actvity logs', '2021-11-13 13:19:25', '2021-11-13 13:19:25'),
(22, 'Translation', '2021-11-13 13:19:27', '2021-11-13 13:19:27'),
(23, 'Reporting', '2021-11-13 13:19:27', '2021-11-13 13:19:27'),
(24, 'InActive patient report', '2021-11-13 13:19:27', '2021-11-13 13:19:27'),
(25, 'Daily Active Cash Report', '2021-11-13 13:19:27', '2021-11-13 13:19:27');

-- --------------------------------------------------------

--
-- Table structure for table `morphology_registrations`
--

CREATE TABLE `morphology_registrations` (
  `id` int(11) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0' COMMENT '0 active, 1 de-active. 2 suspend, 3 closed	',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `morphology_registrations`
--

INSERT INTO `morphology_registrations` (`id`, `name`, `status`, `deleted_at`, `updated_at`, `created_at`) VALUES
(1, 'Normochromic Normocytic', 0, NULL, '2022-01-21 06:38:53', '2022-01-21 06:34:32'),
(2, 'Erythrocytosis', 1, NULL, '2022-01-21 07:14:25', '2022-01-21 07:14:25'),
(3, 'Erythrocytosis', 1, NULL, '2022-01-21 07:15:06', '2022-01-21 07:15:06');

-- --------------------------------------------------------

--
-- Table structure for table `normal_range_headings`
--

CREATE TABLE `normal_range_headings` (
  `id` int(11) NOT NULL,
  `name_eng` varchar(255) DEFAULT NULL,
  `name_local` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `organizations`
--

CREATE TABLE `organizations` (
  `id` int(11) NOT NULL,
  `name_eng` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `name_local` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `ntn_no` int(11) DEFAULT NULL,
  `str_no` int(11) DEFAULT NULL,
  `buss_nature` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `location` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `cash_gl_account` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `organizations`
--

INSERT INTO `organizations` (`id`, `name_eng`, `name_local`, `ntn_no`, `str_no`, `buss_nature`, `location`, `address`, `cash_gl_account`, `is_active`, `deleted_at`, `updated_at`, `created_at`) VALUES
(1, 'GLOBAL RESEARCH AND REFERENCE LABORATORIES', 'SINDH ICON', NULL, NULL, NULL, 'PAKISTAN', 'KARACHI,PAKISTAN', '1', 1, NULL, NULL, NULL),
(2, 'GLOBAL RESEARCH AND REFERENCE LABORATORIES 2', 'SINDH ICON 2', NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '2021-12-17 12:49:50', '2021-12-17 12:49:50'),
(3, 'GLOBAL RESEARCH AND REFERENCE LABORATORIES 3', 'Ahmed Javed', NULL, NULL, NULL, NULL, 'Test', '1', NULL, NULL, '2021-12-17 13:36:16', '2021-12-17 13:36:16'),
(4, 'GLOBAL RESEARCH AND REFERENCE LABORATORIES 4 update', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '2021-12-17 13:51:16', '2021-12-17 13:51:16', '2021-12-17 13:39:24'),
(5, 'GLOBAL RESEARCH AND REFERENCE LABORATORIES 4', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '2021-12-17 13:45:43', '2021-12-17 13:45:43', '2021-12-17 13:40:41');

-- --------------------------------------------------------

--
-- Table structure for table `package_registrations`
--

CREATE TABLE `package_registrations` (
  `id` int(11) NOT NULL,
  `amount` float NOT NULL,
  `name_eng` varchar(255) DEFAULT NULL,
  `name_local` varchar(255) DEFAULT NULL,
  `valid_from` varchar(255) DEFAULT NULL,
  `valid_to` varchar(255) DEFAULT NULL,
  `discount` float DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0 active, 1 de-active. 2 suspend, 3 closed',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package_registrations`
--

INSERT INTO `package_registrations` (`id`, `amount`, `name_eng`, `name_local`, `valid_from`, `valid_to`, `discount`, `status`, `deleted_at`, `updated_at`, `created_at`) VALUES
(2, 200, 'HAJJ PACKAGE', 'HAJJ PACKAGE', '01-03-2022', '31-03-2022', 0, 0, NULL, '2022-03-04 01:54:28', '2022-03-04 01:54:28'),
(3, 100, 'UMRAH PACKAGES', 'UMRAH PACKAGES', '01-03-2022', '15-03-2022', 0, 0, NULL, '2022-03-04 01:55:02', '2022-03-04 01:55:02'),
(4, 500, 'OVERSEAS PACKAGE', 'OVERSEAS PACKAGE', '01-03-2022', '30-04-2022', 10, 0, NULL, '2022-03-04 01:56:38', '2022-03-04 01:55:33');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patient_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_date` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salutation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `midname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(191) CHARACTER SET utf8mb4 DEFAULT NULL,
  `guardian` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `guardian_name` varchar(191) CHARACTER SET utf8mb4 DEFAULT NULL,
  `martial_status` varchar(191) CHARACTER SET utf8 DEFAULT NULL,
  `age_year` int(11) DEFAULT NULL,
  `age_month` int(11) DEFAULT NULL,
  `age_days` int(11) DEFAULT NULL,
  `remarks` text COLLATE utf8mb4_unicode_ci,
  `cnic` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` int(11) DEFAULT NULL,
  `province` int(11) DEFAULT NULL,
  `city` int(11) DEFAULT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emerg_contact_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emerg_contact_rel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emerg_contact_ph` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_no1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_no2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_image` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `code`, `fname`, `gender`, `dob`, `phone`, `email`, `address`, `patient_type`, `reg_date`, `salutation`, `midname`, `lname`, `guardian`, `age`, `guardian_name`, `martial_status`, `age_year`, `age_month`, `age_days`, `remarks`, `cnic`, `country`, `province`, `city`, `nationality`, `postal_address`, `emerg_contact_name`, `emerg_contact_rel`, `emerg_contact_ph`, `mobile_no1`, `mobile_no2`, `profile_image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '1593914720', 'patient', 'male', '2022-01-01', '+201063955280', 'osamamohamed2050@gmail.com', 'Egypt', NULL, '2021-03-23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '00098765432111', NULL, NULL, NULL, '2021-11-13 13:22:16', '2021-11-13 13:22:16'),
(2, '1638636684109', 'Mohsin', 'male', '2022-05-22', '123456789', 'engmohsinshaikh@gmail.com', 'Test', NULL, '2021-07-16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '00098765432111', NULL, NULL, NULL, '2021-12-04 11:51:24', '2021-12-04 11:51:24'),
(3, '1639373352637', 'Ahmed', 'male', '2022-09-16', '123456789', 'sem1@gmail.com', 'Test', 'Local Patient', '0000-00-00', 'MR.', 'Albert', 'Javed', 'S/O', 27, 'Mohsin', 'MARRIED', NULL, NULL, NULL, 'This is test record', '123123123', 165, 2, NULL, 'Pakistani', 'ISL  G6', 'Mohsin Shaikh', 'Friend', '665544332211', '00098765432111', '123456789', NULL, NULL, '2022-08-31 19:00:00', '2021-12-13 00:29:12'),
(4, '163937398923', 'Developer', 'male', '2021-09-01', '123456789', 'ahmedjavedsw666@gmail.com', 'Johar Town 123', 'Local Patient', '13-12-2021', 'MR.', 'Albert', 'Sem', 'S/O', 37, 'Faisal', 'MARRIED', NULL, NULL, NULL, 'this is test record', '1234567890', 165, 2, NULL, 'Pakistani', 'Test', 'Developer Sem', 'Friend', '12312313', '00098765432111', '123456789', '4.jpg', '2022-01-04 04:02:53', '2021-12-13 00:39:49', '2022-01-04 04:02:53'),
(5, '1639463882752', 'Ahmed New', 'male', '2022-12-31', '+92123456789', 'ahmedjavedsw15@gmail.com', 'Test', 'Overseas Traveller', '14-12-2021', 'MR.', 'Sem', 'Javed', 'W/O', 44, 'Faisal', 'SINGLE', NULL, NULL, NULL, 'this is test record', '1234567890', 165, 1, 2, 'Pakistani', 'test', 'Ahmed New Javed', NULL, NULL, '00098765432111', '123123213', NULL, '2021-12-17 13:40:56', '2021-12-14 01:38:02', '2021-12-17 13:40:56');

-- --------------------------------------------------------

--
-- Table structure for table `patterns`
--

CREATE TABLE `patterns` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `remarks` text,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patterns`
--

INSERT INTO `patterns` (`id`, `name`, `remarks`, `status`, `deleted_at`, `updated_at`, `created_at`) VALUES
(1, '2A32', 'Update', 2, NULL, '2022-01-12 08:56:36', '2022-01-12 08:51:37'),
(4, 'PATTERN A', 'This is test PATTERN A', 0, NULL, '2022-01-12 08:54:59', '2022-01-12 08:54:59');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_eng` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_local` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pay_group` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `name_eng`, `name_local`, `pay_group`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'CREADIT CARD', 'CREADIT CARD', 2, 1, NULL, NULL, '2022-10-01 03:18:38');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `module_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `module_id`, `name`, `key`, `created_at`, `updated_at`) VALUES
(1, 1, 'View', 'view_test', NULL, NULL),
(2, 1, 'Create', 'create_test', NULL, NULL),
(3, 1, 'Edit', 'edit_test', NULL, NULL),
(4, 1, 'Delete', 'delete_test', NULL, NULL),
(5, 2, 'View', 'view_culture', NULL, NULL),
(6, 2, 'Create', 'create_culture', NULL, NULL),
(7, 2, 'Edit', 'edit_culture', NULL, NULL),
(8, 2, 'Delete', 'delete_culture', NULL, NULL),
(9, 3, 'View', 'view_antibiotic', NULL, NULL),
(10, 3, 'Create', 'create_antibiotic', NULL, NULL),
(11, 3, 'Edit', 'edit_antibiotic', NULL, NULL),
(12, 3, 'Delete', 'delete_antibiotic', NULL, NULL),
(13, 4, 'View', 'view_culture_option', NULL, NULL),
(14, 4, 'Create', 'create_culture_option', NULL, NULL),
(15, 4, 'Edit', 'edit_culture_option', NULL, NULL),
(16, 4, 'Delete', 'delete_culture_option', NULL, NULL),
(17, 5, 'View', 'view_doctor', NULL, NULL),
(18, 5, 'Create', 'create_doctor', NULL, NULL),
(19, 5, 'Edit', 'edit_doctor', NULL, NULL),
(20, 5, 'Delete', 'delete_doctor', NULL, NULL),
(21, 6, 'View', 'view_group', NULL, NULL),
(22, 6, 'Create', 'create_group', NULL, NULL),
(23, 6, 'Edit', 'edit_group', NULL, NULL),
(24, 6, 'Delete', 'delete_group', NULL, NULL),
(25, 7, 'View', 'view_patient', NULL, NULL),
(26, 7, 'Create', 'create_patient', NULL, NULL),
(27, 7, 'Edit', 'edit_patient', NULL, NULL),
(28, 7, 'Delete', 'delete_patient', NULL, NULL),
(29, 8, 'View', 'view_report', NULL, NULL),
(30, 8, 'Create', 'create_report', NULL, NULL),
(31, 8, 'Edit', 'edit_report', NULL, NULL),
(32, 8, 'Delete', 'delete_report', NULL, NULL),
(33, 8, 'Sign', 'sign_report', NULL, NULL),
(34, 9, 'View', 'view_role', NULL, NULL),
(35, 9, 'Create', 'create_role', NULL, NULL),
(36, 9, 'Edit', 'edit_role', NULL, NULL),
(37, 9, 'Delete', 'delete_role', NULL, NULL),
(38, 10, 'View', 'view_user', NULL, NULL),
(39, 10, 'Create', 'create_user', NULL, NULL),
(40, 10, 'Edit', 'edit_user', NULL, NULL),
(41, 10, 'Delete', 'delete_user', NULL, NULL),
(42, 11, 'View tests prices', 'view_test_prices', NULL, NULL),
(43, 11, 'update tests prices', 'update_test_prices', NULL, NULL),
(44, 11, 'View cultures prices', 'view_culture_prices', NULL, NULL),
(45, 11, 'Update cultures prices', 'update_culture_prices', NULL, NULL),
(46, 12, 'View', 'view_accounting_reports', NULL, NULL),
(47, 12, 'Generate', 'generate_report_accounting', NULL, NULL),
(48, 13, 'View', 'view_visit', NULL, NULL),
(49, 13, 'Create', 'create_visit', NULL, NULL),
(50, 13, 'Edit', 'edit_visit', NULL, NULL),
(51, 13, 'Delete', 'delete_visit', NULL, NULL),
(52, 14, 'View', 'view_branch', NULL, NULL),
(53, 14, 'Create', 'create_branch', NULL, NULL),
(54, 14, 'Edit', 'edit_branch', NULL, NULL),
(55, 14, 'Delete', 'delete_branch', NULL, NULL),
(56, 15, 'View', 'view_contract', NULL, NULL),
(57, 15, 'Create', 'create_contract', NULL, NULL),
(58, 15, 'Edit', 'edit_contract', NULL, NULL),
(59, 15, 'Delete', 'delete_contract', NULL, NULL),
(60, 16, 'View', 'view_expense_category', NULL, NULL),
(61, 16, 'Create', 'create_expense_category', NULL, NULL),
(62, 16, 'Edit', 'edit_expense_category', NULL, NULL),
(63, 16, 'Delete', 'delete_expense_category', NULL, NULL),
(64, 17, 'View', 'view_expense', NULL, NULL),
(65, 17, 'Create', 'create_expense', NULL, NULL),
(66, 17, 'Edit', 'edit_expense', NULL, NULL),
(67, 17, 'Delete', 'delete_expense', NULL, NULL),
(68, 18, 'View', 'view_backup', NULL, NULL),
(69, 18, 'Create', 'create_backup', NULL, NULL),
(70, 18, 'Delete', 'delete_backup', NULL, NULL),
(71, 19, 'Update', 'view_setting', NULL, NULL),
(72, 20, 'View', 'view_chat', NULL, NULL),
(73, 21, 'View', 'view_activity_log', NULL, NULL),
(74, 21, 'Clear', 'clear_activity_log', NULL, NULL),
(75, 22, 'View', 'view_translation', NULL, NULL),
(76, 22, 'Edit', 'edit_translation', NULL, NULL),
(77, 23, 'View', 'view_reporting', NULL, NULL),
(78, 24, 'View', 'view_inactive_patient_reporting', NULL, NULL),
(79, 25, 'View', 'view_daily_cash_report', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_registrations`
--

CREATE TABLE `product_registrations` (
  `id` int(11) NOT NULL,
  `name_eng` varchar(255) DEFAULT NULL,
  `name_local` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `name`, `country_id`) VALUES
(1, 'SINDH', 165),
(2, 'PUNJAB', 165),
(3, 'KHAYBER PAKHTOON KHUWA', 165),
(4, 'FADERAL CAPITAL', 165),
(5, 'BALOCHISTAN', 165);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'super_admin', '2021-11-13 13:19:42', '2021-11-13 13:19:42');

-- --------------------------------------------------------

--
-- Table structure for table `role_permissions`
--

CREATE TABLE `role_permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `permission_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_permissions`
--

INSERT INTO `role_permissions` (`id`, `role_id`, `permission_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2021-11-13 13:19:43', '2021-11-13 13:19:43'),
(2, 1, 2, '2021-11-13 13:19:43', '2021-11-13 13:19:43'),
(3, 1, 3, '2021-11-13 13:19:43', '2021-11-13 13:19:43'),
(4, 1, 4, '2021-11-13 13:19:44', '2021-11-13 13:19:44'),
(5, 1, 5, '2021-11-13 13:19:45', '2021-11-13 13:19:45'),
(6, 1, 6, '2021-11-13 13:19:45', '2021-11-13 13:19:45'),
(7, 1, 7, '2021-11-13 13:19:45', '2021-11-13 13:19:45'),
(8, 1, 8, '2021-11-13 13:19:45', '2021-11-13 13:19:45'),
(9, 1, 9, '2021-11-13 13:19:45', '2021-11-13 13:19:45'),
(10, 1, 10, '2021-11-13 13:19:46', '2021-11-13 13:19:46'),
(11, 1, 11, '2021-11-13 13:19:47', '2021-11-13 13:19:47'),
(12, 1, 12, '2021-11-13 13:19:47', '2021-11-13 13:19:47'),
(13, 1, 13, '2021-11-13 13:19:47', '2021-11-13 13:19:47'),
(14, 1, 14, '2021-11-13 13:19:47', '2021-11-13 13:19:47'),
(15, 1, 15, '2021-11-13 13:19:47', '2021-11-13 13:19:47'),
(16, 1, 16, '2021-11-13 13:19:47', '2021-11-13 13:19:47'),
(17, 1, 17, '2021-11-13 13:19:48', '2021-11-13 13:19:48'),
(18, 1, 18, '2021-11-13 13:19:48', '2021-11-13 13:19:48'),
(19, 1, 19, '2021-11-13 13:19:49', '2021-11-13 13:19:49'),
(20, 1, 20, '2021-11-13 13:19:49', '2021-11-13 13:19:49'),
(21, 1, 21, '2021-11-13 13:19:49', '2021-11-13 13:19:49'),
(22, 1, 22, '2021-11-13 13:19:49', '2021-11-13 13:19:49'),
(23, 1, 23, '2021-11-13 13:19:50', '2021-11-13 13:19:50'),
(24, 1, 24, '2021-11-13 13:19:50', '2021-11-13 13:19:50'),
(25, 1, 25, '2021-11-13 13:19:50', '2021-11-13 13:19:50'),
(26, 1, 26, '2021-11-13 13:19:51', '2021-11-13 13:19:51'),
(27, 1, 27, '2021-11-13 13:19:51', '2021-11-13 13:19:51'),
(28, 1, 28, '2021-11-13 13:19:52', '2021-11-13 13:19:52'),
(29, 1, 29, '2021-11-13 13:19:52', '2021-11-13 13:19:52'),
(30, 1, 30, '2021-11-13 13:19:52', '2021-11-13 13:19:52'),
(31, 1, 31, '2021-11-13 13:19:52', '2021-11-13 13:19:52'),
(32, 1, 32, '2021-11-13 13:19:53', '2021-11-13 13:19:53'),
(33, 1, 33, '2021-11-13 13:19:53', '2021-11-13 13:19:53'),
(34, 1, 34, '2021-11-13 13:19:54', '2021-11-13 13:19:54'),
(35, 1, 35, '2021-11-13 13:19:54', '2021-11-13 13:19:54'),
(36, 1, 36, '2021-11-13 13:19:54', '2021-11-13 13:19:54'),
(37, 1, 37, '2021-11-13 13:19:54', '2021-11-13 13:19:54'),
(38, 1, 38, '2021-11-13 13:19:55', '2021-11-13 13:19:55'),
(39, 1, 39, '2021-11-13 13:19:55', '2021-11-13 13:19:55'),
(40, 1, 40, '2021-11-13 13:19:56', '2021-11-13 13:19:56'),
(41, 1, 41, '2021-11-13 13:19:56', '2021-11-13 13:19:56'),
(42, 1, 42, '2021-11-13 13:19:56', '2021-11-13 13:19:56'),
(43, 1, 43, '2021-11-13 13:19:56', '2021-11-13 13:19:56'),
(44, 1, 44, '2021-11-13 13:19:56', '2021-11-13 13:19:56'),
(45, 1, 45, '2021-11-13 13:19:57', '2021-11-13 13:19:57'),
(46, 1, 46, '2021-11-13 13:19:58', '2021-11-13 13:19:58'),
(47, 1, 47, '2021-11-13 13:19:58', '2021-11-13 13:19:58'),
(48, 1, 48, '2021-11-13 13:19:58', '2021-11-13 13:19:58'),
(49, 1, 49, '2021-11-13 13:19:58', '2021-11-13 13:19:58'),
(50, 1, 50, '2021-11-13 13:19:59', '2021-11-13 13:19:59'),
(51, 1, 51, '2021-11-13 13:19:59', '2021-11-13 13:19:59'),
(52, 1, 52, '2021-11-13 13:19:59', '2021-11-13 13:19:59'),
(53, 1, 53, '2021-11-13 13:19:59', '2021-11-13 13:19:59'),
(54, 1, 54, '2021-11-13 13:20:00', '2021-11-13 13:20:00'),
(55, 1, 55, '2021-11-13 13:20:00', '2021-11-13 13:20:00'),
(56, 1, 56, '2021-11-13 13:20:01', '2021-11-13 13:20:01'),
(57, 1, 57, '2021-11-13 13:20:01', '2021-11-13 13:20:01'),
(58, 1, 58, '2021-11-13 13:20:01', '2021-11-13 13:20:01'),
(59, 1, 59, '2021-11-13 13:20:01', '2021-11-13 13:20:01'),
(60, 1, 60, '2021-11-13 13:20:02', '2021-11-13 13:20:02'),
(61, 1, 61, '2021-11-13 13:20:03', '2021-11-13 13:20:03'),
(62, 1, 62, '2021-11-13 13:20:03', '2021-11-13 13:20:03'),
(63, 1, 63, '2021-11-13 13:20:03', '2021-11-13 13:20:03'),
(64, 1, 64, '2021-11-13 13:20:03', '2021-11-13 13:20:03'),
(65, 1, 65, '2021-11-13 13:20:03', '2021-11-13 13:20:03'),
(66, 1, 66, '2021-11-13 13:20:04', '2021-11-13 13:20:04'),
(67, 1, 67, '2021-11-13 13:20:05', '2021-11-13 13:20:05'),
(68, 1, 68, '2021-11-13 13:20:05', '2021-11-13 13:20:05'),
(69, 1, 69, '2021-11-13 13:20:05', '2021-11-13 13:20:05'),
(70, 1, 70, '2021-11-13 13:20:05', '2021-11-13 13:20:05'),
(71, 1, 71, '2021-11-13 13:20:06', '2021-11-13 13:20:06'),
(72, 1, 72, '2021-11-13 13:20:06', '2021-11-13 13:20:06'),
(73, 1, 73, '2021-11-13 13:20:06', '2021-11-13 13:20:06'),
(74, 1, 74, '2021-11-13 13:20:07', '2021-11-13 13:20:07'),
(75, 1, 75, '2021-11-13 13:20:07', '2021-11-13 13:20:07'),
(76, 1, 76, '2021-11-13 13:20:07', '2021-11-13 13:20:07');

-- --------------------------------------------------------

--
-- Table structure for table `samples`
--

CREATE TABLE `samples` (
  `id` int(11) NOT NULL,
  `name_eng` varchar(255) DEFAULT NULL,
  `name_local` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0 active, 1 de-active. 2 suspend, 3 closed',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `samples`
--

INSERT INTO `samples` (`id`, `name_eng`, `name_local`, `status`, `deleted_at`, `updated_at`, `created_at`) VALUES
(1, 'WHOLE BLOOD', 'WHOLE BLOOD Local', 1, NULL, '2022-02-02 02:56:24', '2022-02-02 02:56:24');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `org_id` int(11) NOT NULL,
  `name_eng` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_local` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `org_id`, `name_eng`, `name_local`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 1, 'CT SCAN', 'CT', '1', NULL, '2022-09-30 08:43:36', '2022-09-30 09:11:40');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'info', '{\"name\":\"ExtremeLab\",\"currency\":\"Rs\",\"reports_logo\":\"iVBORw0KGgoAAAANSUhEUgAAAMAAAADACAYAAABS3GwHAAAbwUlEQVR42u2deXjcxXnHPzO7q8OyJVm25FPyKdtgbM4YiCGAaTDQHDTBJBC3CYE+SQjkTigNafrkaJ4kJReU52kLhOYgAQwlIQEMCSYpDraDjQ\\/wJdvYluVTsi7r1s70j3fXXsuyvL\\/VSvv77c7neRYZaX+7c7zfmXdm3plR+ITIYnv8n8AYYAYwEzgLqAYmARXAaKAY0JlOs+MkDNACNAKHgTqgBtgC7AB2Ag1AD0DPcpXp9AKQ0VQkGH0JMBu4GFgAzAMmAqVAONPpdKSMBXqBJmA\\/sAlYA6wGtgHNkFkxDPs3Jxh9EXAusBhYBJyNGLxr2bMbgwhiM\\/AysBzYALTB8Ith2L4tZvgKcWWuBT4AXIK4NI7cpRFYBTwNvIC4Tna4hDDk35Jg+NXAEuDDwBzEtXE44vQCW4FfA08i44chF8KQfXqCqzMFWAp8DJiOc3EcA2OAXcCjwC+APTB0rlHaPzXB8IuBG4HPIINaZ\\/gOLxhk0PwTYBkyw5R2IaT102LGr5HZnLsRXz9\\/yIvKkc10IWOD7yKzRyadIkjbJ8WMvxi4DfgiMth1ONJFHXAf8DDQki4RDPpTElyeWcC\\/Ah8E8jJRQo6spxt4CrGz7TB4l2hQTyfM8CxCuqgLM11CjpxgLfAVYAWDnClKeWAaM\\/4wMsPzKM74HcPHhYjNLQXCCV6IZ1ISQOwL84A7gR8DkzNdIo6coxKxvTuBvFRF4LnviH1RIfAFZKZnVKZLwpHTtCLu9w+ADq\\/ukKd3J7T8XwbuBQoynXuHA+gEvgV8H+j2IoKkXaAEn\\/8OpOV3xu\\/wCwWITd6BxzFBUlJJmO1ZivhdLoDN4Ucagc8iIRRJzQ6d8R0JaloE\\/BSoynQuHY4B2AvcioRan3GdIFkXaDbwPZzxO\\/xPFWKrs5N584ACSAhv+Dpunt8RHC5EbLb4TOOB0wogwe+\\/HQlvcDiCxAcR21UDiaBfBynhgUuBJ3ALXY5gsg+4CXgN+h8PDOQCFSPxFs74HUFlMmLDxad7wykCSGj9bwSuy3QOHI5Bch1iy\\/TnCp2uB5gK3IXbzOIIPvmILU\\/t748nCSBBIR9BjixxOLKBcxGbPqUX6K8HmINsYHeHUTmyBYXY9ClrA8cFkKCMJciRhA5HNjGTfsYCfc\\/mqUQE4IhhUt9rcRLaY3+aqe\\/Ncj4E\\/Ayojf+irwAWI0cUOoCQhgmjITzIA116DRxuhKjx9\\/fmAGcjNv5Q\\/BcKjncJRciJXG7qE2mBJ42FJ78mP1NtkbWCunpY8k35eaYWOVPfm0M8j3g5bT3L1Uk9wHnIWZ2OGGENE8aIIQ4GY7215pn63hzhEsTWVwLohAHBNbg4f0f2MxqxdSKL7fFZoFIk3t\\/hyAUWITZ\\/XACzkJtYHI5c4CzE5o8L4GLkWiJHAsYGewYlatI3nZpljEFsHo3cybUg0ynyG0rBkWZ48LdwpCnTqfHOkaZY2pslL45TWABENKKGeZlOjd9QQFc3\\/Php+Oj34PXtmU5R8ry+XdL846clD87++2UeMCaM3MY4MdOp8SNKgbWw\\/HXYUQf33AI3XwUFPj36t7MbfrUCvvMY7DwgC2qu9T8tE4EZYSRGojTTqfEzIQ27DsDnHoQ3auDLH4LK8kyn6mRqj8D3H4f\\/eQnaOiTNjgEpBWaGkRGxu6\\/rDGgN7Z3w4LPw9kH42d0w2ieHQja2wh0\\/huf\\/Ku6OdsafDGHgLI1cXuc6yiRQCrDw5m441pnp1JzgWKekCetcHg8ooFrjbnLxhvJnXI1WuGbMO5M0UJHpVDgcGaJC4+J\\/HLnLaM0AR0Y4HFlOscbd3+vIXdyEmSO3cQJw5DROAI6cxgnAkdM4AThyGicAR07jBODIaZwAHDmNE4Ajp3ECcOQ0TgCOnMYJwJHTOAE4chonAEdO4wTgyGmcABw5jROAI6dxAnDkNE4APsRaeTmGHncinM9QChpa4Yv\\/CZVjYXxZ7LqkMTButPz\\/qEKIRNwxQOnACcBnKKCjC576s\\/x\\/SMvO7fwIjB4J5aUwbTzMroS5U2HeVLkDwPUYqeEE4FPCoRP\\/tlZOfq5rgH31sK5Geor8iJxPOm401Lf488Q6v+MEECD6Hn\\/YG5V7gA8edadBp4oTQMBRCkKu5U+ZnG83jM3Ne7RyNd99yVkBxA2gqhymjsutQaS1kueqcieEnHOBbKzCJ5fDje+CWxfDzv1w279Dc1v2n69vLZQUwX2fhBkT4afL4ck\\/QV29jDGyPf99ySkBRA2UjYIbFsIn3wvnzZDBY\\/Uk+d1Pl2e\\/P22s5PXad8gs0vdul3vP\\/vN38MxKONqaWwPqnBCAsTKteNV58LkPwlXnnnzRXX4E7ngfvPwG7D2SvdOJxsKUCslrfkR+FwrBRbPgnDvhA5fDj56CP22UGaZsLYdEsl7rUSO+7rduhV\\/eA9e9o\\/9bHs+vhluvHbpKj4c3mAFeNvE1BGnQSvJ4fvWpfyvIk7L55T1SVlXlwb4kPFmytgewVrry6y6Br94C75g9sH+rgI9dA8++Bmtr0usGaAWjRkB5CeTnQbjPZ1sL3VGwBrp7wRjo6pU7fhNXeeM+eip+etTAhdWSx4EeH1sCX7wR3jUPvv0YLP+rPJutYwMVWZx98x9RA2OL4c4bpLsf4+EKkEdfhDvvh66e\\/g0l7ka88oPkr0rt6oENuyAvBCNHQEHkRAuvYp95rAN6onCsXX62tMHhZqg7AnsOwd7DsL8BDjZCWyf09IpRJjNwtYjL88BdIoBkaWiR2+YfeEZWmrNxbJB1PUDUwNlT4Jsfg\\/dccnJIQTL83UL431fhd6vSV+H5EVgwO\\/XnjZX4oIYWqD0Mm\\/fChp3wxg6ZwWpsHdhlMgauPl\\/y5oUxxXDPzTBvGnztUdi8J\\/tEkDUCsLH\\/XH0+fPcf4fyZqX1OSZH0HKs2y4yIH7p+raCoQF5VFbDwHDHqlnYRwB\\/fgO8+Lr1G3\\/Rae6I3LCny\\/t3hkMwaTRkHd\\/83rFgPqOyJRM0KPVsrRnLzInj4S6kbf5wr58OSK4ZmIJoutIbSkXDhLMl3aVH\\/6bVIXq6cP7jvO3+mlO3Ni6Sss8VxDrwArIVIGD7xHvjRp5L3ywciEoZPvgemjw\\/2KqmxkodPvkfyNFgqy6WMPxH7vGwQQaAFEDf+O2+Ab98KZWm479Ja2H0IXlonIchB7uoVkoeX1kme0mGwZcVS1nfekB0iCOwYIG78d90A9y6VXVKD5UADPPEneOQF2ForfrYfxgCpohQcOAr\\/9BA8uhw+fi3cdIXsMBsMo0bA15aKwO5\\/5sSMVBAJrAC0htuuk4oYOUjjb+uE3\\/xFpvvW1cRWQXVwKzURFfPX39otg9jHX5HW+\\/3vlEF1qowqlLJv74L\\/+n1we4JACsBaGdh9\\/R8GZ\\/zGwtrt8INl8PvVIoT4FsRsQ2vJ7+qt8OaPZJr3CzfCBdWpr36PLJQ6ONoKT7wSzAYjcAKIGrjyXPjObTK9lyqt7fA\\/L8EPl4l\\/rFX2zXH3R0jLmsLjr8DqLfD5G+Gj7xa3JhXGFktdHDwKr2wIXhkGKrnGwMyJUuBVFal\\/zo798On7xSXYc0gqLYitV6qomNj3HJIy+PT9UiapUlUhdTJzotRRkAhMD2DticHXgjmpf86K9fDPD8Nft8dCCYapCTBGQiK6e+XVH3lheeVHhiddWktaHnsZavbBv90mEbOpsGCO1M1dD0hYR1AalMAIQCnZvLLkitSejxrZ+PHVR8TlGaquuqdXNtbU1UPtEXj7IOw7Aoca5byf1nZo6zh10UoBRYUi8jGxkx4ml8sRKJXlMGmsrOSmYz6\\/7\\/cqBWu2we33wbc\\/LmWcSvksuUImER74zdCU7VAQCAFEDVxylsTyx+PYvdAblanNe38KR9Mc1GUs1DfDlr1S+Wu3y78PNkLTMRFE1Mj74sY2EPFQ6PiYJBKWFd\\/xo+GsKln5vaBa\\/j22JH3h23GX6DP\\/ISEWH7\\/WexxVfkTqaPVWWLUlGOMB3wsgvoXvSzel5vf3RuE\\/fgPf+IW0zOlwLayVFn3jLlj+Orz2Fuw8AK0dEI2eGqUZ0uDRlo7T03vi6JM3dsDjf5IpyBkT4NK5sPgi6S3SMQ2ptczo3POwDJQ\\/\\/X7vIqiqkLq67d+lt\\/O7K+T7cOiokdbogbu8t\\/5RIy3\\/PQ9BU1t6WksLFOaJW1J7RKZOYXj308Y31oDM5cfT0pGmlWtjJbboO7dL2Xttybt6JKT8kRf83wv4OnnGQmUFfOq9qbk+T78qYbxNx9LnKsTDC7bVisGF9PDPIsVncUJa0rCtNr1hG1pJmX3tUSlDr+RHpM4qK\\/wfS+VrAYAs3Z+XQnTnqi1w7yNQ3zQ0Mypa+yNOSDF0+atvkjJctcX78+fNlLrzO74VQHzn1dKrvbfedfXix+7Yn52rusOF1lKG9zwsZerpWSV1N8XnvYB\\/zcPKKQXnTPP2WHcv3LcMXt3kf\\/8zCIS0lOV9y06\\/fnE6zpkmm2n8vLHClyZiLVSMhiXv8t76P78GfvZipnOQffzsRSlbL2gFH7pS6tKvUy2+FIAxsHAuzJ\\/u7bmDjRLb03jM\\/9NvQUIpKdMfLpMy9sL86VKXfg2R8KUA8vLgfe\\/s\\/\\/yegfj1iuAswASNkJay\\/fUKb88VxOoyz2NdDhe+MxVjZOB02Vxvz+09DD9\\/SY4UcQwNPVEp472HvT132dzYYNiHvYD\\/BGAl7KHS46rvMyvhzd2u9R9KQlrK+JmV3p6rrJA69eNskO\\/MJS8Ml53jbQm+oQWW\\/VnCHhxDS29UyrqhJflnwiGp0zwfBt74SgDWyp1XF83y9tyqLRKXkwuHuWYaraSs12z19txFs6Ru\\/TYb5CsBGCvhv16C3qyFl9ZKIJqb+Rl6lJKyXv66N2OuqpC69Zsb5KtOyVqonizhv8lS3wKvvhkLN\\/ZZ4WYrxkqZ17fIgb\\/JUDpSLuRIJaxiKPGVAJSC2ZO9hS\\/sr5eoz2njXA8wXFgrZb6\\/PnkBaC17GPxWR74SQCQEU8d7e2Z2JTz7TV+vtmclCtmQ44Wp46WO\\/eQG+UYA1kJhAVSUenuuIE+2Djr8T0UpFOb7a8+wrwbBhfneWxVHcBhTLJuJ\\/IRvBBC\\/xKE0hSO8HcGgpAjyIv5yV30jAIhtBE9186zD90TC\\/lup91lyHI7hxQnAkdM4AThyGl8JIGrkHBxHdhI\\/JMxP+EYACujukcOrHNlJc5vUsU+WAAAfCQDkjBsvYbaOYNHQInXsJ3yzEqyUHMe3fR\\/Mnepi+7ONcEjqtqPLP6vA4MOjEUePgpGDuLrH4V+Odcql3n7CNz1AnKMtzg3KVpI5HXu48Z0AVBbdQu7wP74aBDscw40TgCOncQJw5DROAI6cxgnAkdM4AThyGicAR06TfQKwgMFf++6CThaXafYIIFZJtqwD87c12FkNUmmOwWHAzmqQMi3ryDoh+G4lOCUMMKIXc9F+zPXbsTOPoraPIfSTS1AHi7JJ5sOLATu+jehH12NnNaAu34N+bhb69YnQHs6KcvVdMJwnDBA22NkNmOtrMBccgPxeMBJPof9SSeihC6Al38VXeMUCxV1Eb1+HeWdt7Pp6C11h9LoJ6OeqUdvGQK8OtBCCKYBYiu2kVsw1OzGX7YHSTjH8Pu\\/Tf5hB6BfzoT3iRJAsFijqIbp0I+bqnaeWm7bQVIB+dQr6xRmoulHy+wCWb\\/AEYIDSLszlezDv3omdFAsdtf2UvgKiCv1cNaEn5zoRJIMFRvQQvektzPU1pz9xOPZ7VVeMfmkG+v+mQFN+4HqDYAkgP4o57wDm+hrsnHoImVNb\\/VNyiIjgj9MJPTYPWvMCV0nDhgFGdRO9ZRPm6l0Qsmce8GoLUY3aOhb9XDV6\\/QToCs7hTsERgAF77iF6P\\/8aFHed2fD7YhV6ZSX6sfmowyOcCPpiwFa0Y27ZiFlY6\\/2seW2hJZ\\/wDy9FbRgXmPINSDIBBWpHGXrdhNSm4ZTFXL6X6B1rsNWNWTWVN2gs2OpGoneswVy+N7WLFizodRNQO8oC5WYGSgC0RdBPnIOqGSMtjlcs2PmHiH72NanosMltIVggbKRh+Oxr2PmHUisPbVE1Y9BPnANtwRpnBccFimPAzj1C9K7V2Io2764QiHjaI+gV09C\\/nY06MiK2Xy\\/TmRsmrLxseTvmfdswV70NI3pSLkt1uIjQ\\/Rej3ioPUpMKBFEAABbMwlqit62V8YBNoeKUfI7aWYb+7Wz02onQGQpcBXrGAAVRzIX7Me\\/bhp1x9HhZeEaJ3x96+EL0yspANiDBFACIT\\/\\/unUSXboTCntREANIbdETQaybJ4s6u0RBV2ScEA4QsdnqjLBouqJNyS6XVBzH+jgihX8xHvzQj9fLPMMEVQNx\\/vb6G6JK3BicCBSiLahiBWlmJfnm6LO5kgxDihj+pFbNoF3ZhLXZMu5RVqjUfN\\/4n56Kfq5bV4GDaf4AFACdEcF0N0ZsGKQKIzX4o1OEi1JpJ6FenoPaUQLcO1hgh5uOTZ7BTmjGX7cEuqJMxE3bwZdQRIfTEXPTzwTZ+CLoA4IQI\\/mYX0Q+9mdoawSmlYqVSGwvRG8eh\\/lKJ3j4WWvLk+\\/wohrjRK6C4GzOrHvvOWsz8QzC6I\\/b3QSY6Ntcfevwc9B+mB974QQQQJegdfSxQyyysxXxkI7Y8xdmhU0oHEUNnGLWnFLVhHHrTONTeEjjmAzEkGv3IbmxVM2beIey5h7BTmqCgd3CuTiLaoo4UoX85Xwa8JisOcDIqstg2AqWZTklasGDnHSb69xtkdiMdIoijY2EBbXmo2hLU5nL01rFQW4JqLoCuhDZkKEQRN\\/Y4+QZb0gmVzZg59dizj2Arm6GoW747zXlXO8sI\\/fxc1KaKbDD8OE0qstjuAqZlOiVpw4Cd3Iq5ZRPmHXWgTXpnKOK9AkBXGNVQiKotgd2lIowDI6G5ANWWBz36xG6q+LPJEDd0HXsmYrBF3VDSiZ1wTAx9ahO2shk7pkNCwCF9rf3xvFowGv3XSejH5qH2jQq6r9CXt1VksV0FXJzplKSVeFDX9TWY62rSMy44HfHxAkB3CNojqKYCOFoos0r1I6CpAI7lodoj0BmW9\\/VHXhQKerEjemBkN5R2Yse2y6xNWQe2tFMWrPJiR2enw68\\/HTF\\/Xz9fTei56mwNIlwdBuoynYq0o4FjeYSWnY3eUUb0xs3Y6obUF3wGIrHVDRso6RJDndbE8ekFq6Q36I29TidGbeUzwgYi5kRPE093\\/LuGSswJ36W2jSW07GzU+vHyfdln\\/AB1YaCGE0Op7EEBVqHWTiC0twRz7Q7MorehpHNoDeh0rXLcqJP+DIZ\\/cUlbaC5AvzwN\\/cJMCRGJu2HZhwVqwsAWoBeIZDpFQ4IGVT+C0K\\/moTeMJ\\/rebdh5h8SNGEoh9IdfJ5y1he4QatM4Qs\\/ORm0uz45FwIHpBbaEgR1AE1Ce6RQNGbFZEbWxgvCu0ZiL92Gu2Ymd3pjcpppsJb6ZpaYM\\/eIM9OrJcCySza1+Ik3AjjCwE9hPNgsgjkZCqv84Db1+AubSvZgrd2OnNOeWEOKGv6sU\\/cpU9GtV0FAgRp\\/drX4i+4GdYaAB2AScm+kUDQvxOfqjBejfz0KtqsResg+zcA92WpO4RumeTvQD8enb7hDq7VL0yimoVZNRDYXy99wx\\/DibgIYw0AOsAZZmOkXDSqyxVw2FqN9Vo1+twsw\\/hL20FjPniEydpntBKRPEF\\/Ba8tFby1GvVaI3jpMN7H4M6Rg+1gA98YOxViM9wZhMp2rYiRtBcz76z1WwZhJ6ahPmgv3Y8w5iJ7dISAEEo2dIXKjrDKP2FaPWj0evm4jaXSp7HnLL1emPBsTmUZHFFiQU4lngskynzBcYxEhKurAzj2LmH8TOqcdOOAYjuk+el\\/cD8cU4C7TnoQ6MlFMaNo6XPbrN+bF4qUwn1De8CrwXaIr3AE3AyzgBCHFDac5HvT6B0LrxUNyNndyMnXUUO6seW9mCLe2A\\/OiJ40OGQxRxY48d90JXCNVUiKotRm0fi9pehtpXIpGr8YC13HZ1+uNlxOalWGK9wEKkFxid6dT5ksRgtHyDHd0B449hq5qwVc3SO5R1YEd1iSi0jRlrbI3RJnzOQKjEn7HYfavEmLtCqNZ8CbM4MBK1twS1txQOjkQ1Fp4IyHMGPxCNSOu\\/sme5Oulw3PXAKuC6TKfQlyQaVY9GHSqCg0Wo9eMgbCG\\/F1vcBWWd2LJ2GNsuIinpkkC2ET0ylijolR6jP6JKYoU6wxJT1JYnvVBjIdSPQB0dAUcLUC350BWGXnVy2pyLkwyrEFsHYqdD9yxXRBbbNuBp4BogOEd7ZYpEQRglBtsegQMjjzf6KMTYIwbCUQhbbCghxqcvVqGiWgy7NyTxQ1F1ctx\\/Yg\\/hDN4rUcTG23qWS0H2PR59ObAZmJfplAYO1ednHKNk5iXWpnjyTJz\\/nm42IzZ+nL5tSC3weKZTmXWoFF+OdPM4YuPHOS6AeJcALEPigxyObKIGse1EW+\\/Xi9wGPIr\\/l3wcjmSxiE1v6\\/uHkwSQoIxfAhsynWqHI01sAB6Dk1t\\/OP08wm7gfqAr0yl3OAZJF2LLu\\/v74ykC6DMWeD7TqXc4Bsnz9OP7xxloJrkF+B6wL9M5cDhSZB9iwy2ne0O\\/AkhQyirgh0B3pnPicHikG7HdVdB\\/6w8D9ACxByzwEPBUpnPjcHjkKcR27emMH5JYbokFys1GZoYuzHSuHI4kWAt8BNg2kPFD8tEk24CvAHsznTOH4wzsRWx1WzJvPqMAEhS0ArgXCSd1OPxII2KjK+D0fn8iSfUACeOBXwHfAFoznVOHow+tiG3+ijP4\\/YkkHVAb+8Be4EHgu0BnpnPscMToBL6D2GZvssYPKcQcxgbFhcAXgLuBUZnOvSOnaUUa5B8AHV6MH1IMuo2JIA+4A\\/gX3DZKR2ZoRNyeB4Fur8YPg4g6j4kgDNwMfBuozHRpOHKKWuCriM\\/vye1JZFDbLmIiUMBVyJKzWydwDAdrkanOFXgY8PbHoHaVJswOvQzcgqjRhU04hopuxMZuQWxuUMYPadx4F+sNioHbgC8CkzJVSo6sZB9wH\\/AI0DJYw4+T1p2nMRFo5Mqlu4FrgfzhLCVH1tEFvIDM9KwGTLqMH4Zg63VMBCC9wY3AZ5BTJtwhHg4vGOQE558g8fwtkNzqrheG7OyBBCFMQU6e\\/hgwHScEx8AY5M6KR5EAzD2QfsOPM+SHbyTMFFUDS4APA3M49UwiR27TC2xFBrlPIieTDHqQeyaG7fSZBCFMQsYGHwAuwS2i5TqNyKaVpxFfv45hMPw4w378UoJrVITcSrMYWAScjRzT7lyk7MYgJzNvRqYylyOnNrTB0Lk6pyOj548liKEE2XRzMbAAGTRPRAQRznQ6HSljEdemCbmTaxNyM8tqJF6\\/GYbf6BPxjWEliCGC3FQzA5gJnIWMHyYBFYjLVIzrKfyGQWZqGoHDiCtTg1zDuwMZ2DYgV3Jl1OgT+X\\/G0itN2yPjPgAAAABJRU5ErkJggg==\",\"address\":\"Address\",\"phone\":\"+99\",\"email\":\"support@extremelab.tech\",\"website\":\"https:\\/\\/www.extremelab.tech\",\"footer\":\"All rights are reserved\",\"socials\":{\"facebook\":\"#\",\"twitter\":\"#\",\"instagram\":\"#\",\"youtube\":\"#\"}}', NULL, NULL),
(2, 'reports', '{\"show_header\":true,\"show_footer\":true,\"show_signature\":true,\"margin-top\":\"0\",\"margin-right\":\"20\",\"margin-bottom\":\"20\",\"margin-left\":\"20\",\"content-margin-top\":\"270\",\"content-margin-bottom\":\"220\",\"footer\":\"footer here\",\"show_header_image\":true,\"show_background_image\":true,\"show_footer_image\":true,\"branch_name\":{\"color\":\"#000000\",\"font-size\":\"12\",\"font-family\":\"sans-serif\"},\"branch_info\":{\"color\":\"#000000\",\"font-size\":\"12\",\"font-family\":\"sans-serif\"},\"patient_title\":{\"color\":\"#000000\",\"font-size\":\"12\",\"font-family\":\"sans-serif\"},\"patient_data\":{\"color\":\"#000000\",\"font-size\":\"12\",\"font-family\":\"sans-serif\"},\"test_title\":{\"color\":\"#000000\",\"font-size\":\"12\",\"font-family\":\"sans-serif\"},\"test_name\":{\"color\":\"#000000\",\"font-size\":\"12\",\"font-family\":\"sans-serif\"},\"test_head\":{\"color\":\"#000000\",\"font-size\":\"12\",\"font-family\":\"sans-serif\"},\"result\":{\"color\":\"#000000\",\"font-size\":\"12\",\"font-family\":\"sans-serif\"},\"unit\":{\"color\":\"#000000\",\"font-size\":\"12\",\"font-family\":\"sans-serif\"},\"reference_range\":{\"color\":\"#000000\",\"font-size\":\"12\",\"font-family\":\"sans-serif\"},\"status\":{\"color\":\"#000000\",\"font-size\":\"12\",\"font-family\":\"sans-serif\"},\"comment\":{\"color\":\"#000000\",\"font-size\":\"12\",\"font-family\":\"sans-serif\"},\"signature\":{\"color\":\"#000000\",\"font-size\":\"12\",\"font-family\":\"sans-serif\"},\"antibiotic_name\":{\"color\":\"#000000\",\"font-size\":\"12\",\"font-family\":\"sans-serif\"},\"sensitivity\":{\"color\":\"#000000\",\"font-size\":\"12\",\"font-family\":\"sans-serif\"},\"commercial_name\":{\"color\":\"#000000\",\"font-size\":\"12\",\"font-family\":\"sans-serif\"},\"report_footer\":{\"color\":\"#000000\",\"font-size\":\"12\",\"font-family\":\"sans-serif\",\"text-align\":\"center\"}}', NULL, NULL),
(3, 'emails', '{\"host\":\"\",\"port\":\"\",\"username\":\"\",\"password\":\"\",\"encryption\":\"\",\"from_address\":\"\",\"from_name\":\"\",\"header_color\":\"#c43e00\",\"footer_color\":\"#363636\",\"patient_code\":{\"active\":false,\"subject\":\"Patient Code\",\"body\":\"Welcome , {patient_name}<br>Your patient code is : {patient_code}\"},\"reset_password\":{\"active\":false,\"subject\":\"Reset your passwor\",\"body\":\"Reset your password\"},\"receipt\":{\"active\":false,\"subject\":\"Order receipt\",\"body\":\"Welcome {patient_name},<br> your receipt is attached\"},\"report\":{\"active\":false,\"subject\":\"Medical report\",\"body\":\"welcome , {patient_name}<br>you report is attached\"}}', NULL, NULL),
(4, 'sms', '{\"sid\":\"\",\"token\":\"\",\"from\":\"\",\"patient_code\":{\"active\":false,\"message\":\"welcome {patient_name} , your patient code is {patient_code}\"},\"tests_notification\":{\"active\":false,\"message\":\"welcome {patient_name} , your tests are ready now .. you can check tests by using your patient code : {patient_code}\"}}', NULL, NULL),
(5, 'whatsapp', '{\"receipt\":{\"active\":false,\"message\":\"welcome {patient_name} , receipt link is {receipt_link}\"},\"report\":{\"active\":false,\"message\":\"welcome {patient_name} , tests report link is {report_link}\"}}', NULL, NULL),
(6, 'api_keys', '{\"google_map\":\"\"}', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `specializations`
--

CREATE TABLE `specializations` (
  `id` int(11) NOT NULL,
  `name_eng` varchar(255) DEFAULT NULL,
  `name_local` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `specializations`
--

INSERT INTO `specializations` (`id`, `name_eng`, `name_local`, `is_active`, `deleted_at`, `updated_at`, `created_at`) VALUES
(1, 'Doctorrrrrrr', 'Doctorrrrrrr 1', 1, NULL, '2021-12-27 12:56:01', '2021-12-27 12:55:28');

-- --------------------------------------------------------

--
-- Table structure for table `supervisorshifts`
--

CREATE TABLE `supervisorshifts` (
  `id` int(11) NOT NULL,
  `lab_id` int(11) NOT NULL,
  `shift_prefix` varchar(255) DEFAULT NULL,
  `shift_date` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `added_by` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supervisorshifts`
--

INSERT INTO `supervisorshifts` (`id`, `lab_id`, `shift_prefix`, `shift_date`, `status`, `added_by`, `deleted_at`, `updated_at`, `created_at`) VALUES
(1, 1, 'morning', '11-01-2022', 0, 1, NULL, '2022-01-11 13:50:27', '2022-01-11 10:20:00'),
(2, 3, 'night', '13-01-2022', 0, 1, NULL, '2022-01-11 11:24:55', '2022-01-11 10:20:00');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shortcut` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sample_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference_range` text COLLATE utf8mb4_unicode_ci,
  `type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `separated` tinyint(1) NOT NULL DEFAULT '0',
  `price` double NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `title` tinyint(1) DEFAULT '0',
  `precautions` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `parent_id`, `name`, `shortcut`, `sample_type`, `unit`, `reference_range`, `type`, `separated`, `price`, `status`, `title`, `precautions`, `deleted_at`) VALUES
(1, 0, 'Complete Blood Count', 'CBC', 'blood', NULL, NULL, '', 0, 30, 0, 0, NULL, NULL),
(2, 1, 'hgb-hemoglobin', NULL, 'blood', 'g/dl', '', 'text', 1, 0, 0, 0, NULL, NULL),
(3, 1, 'hct-hematocrit', NULL, 'blood', '%', '', 'text', 0, 0, 0, 0, NULL, NULL),
(4, 1, 'RBC-Erythrocytes', NULL, 'blood', 'million/µl', '', 'text', 0, 0, 0, 0, NULL, NULL),
(5, 1, 'MCV', NULL, 'blood', 'fl', '', 'text', 0, 0, 0, 0, NULL, NULL),
(6, 1, 'MCH', NULL, 'blood', 'pg', '', 'text', 0, 0, 0, 0, NULL, NULL),
(7, 1, 'MCHC', NULL, 'blood', 'g/dl', '', 'text', 0, 0, 0, 0, NULL, NULL),
(8, 1, 'RDW-CV', NULL, 'blood', '%', '', 'text', 0, 0, 0, 0, NULL, NULL),
(9, 1, 'pit-platelet', NULL, 'blood', '10^3/µ', '', 'text', 0, 0, 0, 0, NULL, NULL),
(10, 1, 'MPV', NULL, 'blood', 'fl', '', 'text', 0, 0, 0, 0, NULL, NULL),
(11, 1, 'PCT-PLATELETCRIT', NULL, 'blood', '%', '', 'text', 0, 0, 0, 0, NULL, NULL),
(12, 1, 'PDW', NULL, 'blood', '%', '', 'text', 0, 0, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `test_normal_ranges`
--

CREATE TABLE `test_normal_ranges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `test` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `machine` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `test_options`
--

CREATE TABLE `test_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_id` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `test_registrations`
--

CREATE TABLE `test_registrations` (
  `id` int(11) NOT NULL,
  `type` tinyint(1) DEFAULT '0' COMMENT '0 means Test, 1 means Part',
  `org_id` int(11) NOT NULL,
  `name_eng` varchar(255) NOT NULL,
  `nature` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0 means hide, 1 No Discount, 2 Routine Test, 3 Special Test',
  `dept_id` int(11) NOT NULL,
  `perform_by` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0 Self, 1 Both , 2 Outside',
  `unit_id` int(11) NOT NULL DEFAULT '0',
  `price` float NOT NULL DEFAULT '0',
  `urgent_price` float NOT NULL DEFAULT '0',
  `pattern_id` int(11) NOT NULL,
  `reporting_days` int(11) DEFAULT '0',
  `sample_id` int(11) NOT NULL,
  `test_req` text,
  `remarks` text,
  `special_remarks` text,
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0 active, 1 de-active. 2 suspend, 3 closed',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test_registrations`
--

INSERT INTO `test_registrations` (`id`, `type`, `org_id`, `name_eng`, `nature`, `dept_id`, `perform_by`, `unit_id`, `price`, `urgent_price`, `pattern_id`, `reporting_days`, `sample_id`, `test_req`, `remarks`, `special_remarks`, `status`, `deleted_at`, `updated_at`, `created_at`) VALUES
(1, 0, 2, '24 HRS.URINARY CREATININE', 1, 1, 0, 2, 10, 20, 1, 0, 1, 'This is test', 'Test11', 'Test remarks', 1, NULL, '2022-02-02 04:03:54', '2022-02-02 04:03:54'),
(2, 0, 2, '24 HRS. URINE SUGAR', 1, 1, 0, 2, 10, 20, 1, 0, 1, 'This is test', 'Test11', 'Test remarks', 1, NULL, '2022-02-02 04:03:54', '2022-02-02 04:03:54'),
(3, 0, 2, 'ABG;S (DISCONTINUED)', 1, 1, 0, 2, 10, 20, 1, 0, 1, 'This is test', 'Test11', 'Test remarks', 1, NULL, '2022-02-02 04:03:54', '2022-02-02 04:03:54'),
(4, 0, 2, 'ACID PHOSPHATASE', 1, 1, 0, 2, 10, 20, 1, 0, 1, 'This is test', 'Test11', 'Test remarks', 1, NULL, '2022-02-02 04:03:54', '2022-02-02 04:03:54'),
(5, 0, 2, 'SERUM ALBUMIN', 1, 1, 0, 2, 10, 20, 1, 0, 1, 'This is test', 'Test11', 'Test remarks', 1, NULL, '2022-02-02 04:03:54', '2022-02-02 04:03:54'),
(6, 0, 2, 'ALCOHOL DRUG TEST (MOP)', 1, 1, 0, 2, 10, 20, 1, 0, 1, 'This is test', 'Test11', 'Test remarks', 1, NULL, '2022-02-02 04:03:54', '2022-02-02 04:03:54'),
(7, 0, 2, 'ALDOLASE', 1, 1, 0, 2, 10, 20, 1, 0, 1, 'This is test', 'Test11', 'Test remarks', 1, NULL, '2022-02-02 04:03:54', '2022-02-02 04:03:54'),
(8, 0, 2, 'ALKALINE PHOSPHATASE', 1, 1, 0, 2, 10, 20, 1, 0, 1, 'This is test', 'Test11', 'Test remarks', 1, NULL, '2022-02-02 04:03:54', '2022-02-02 04:03:54'),
(9, 0, 2, 'AMINO ACID CHROMATOGRAPHY (URINE)', 1, 1, 0, 2, 10, 20, 1, 0, 1, 'This is test', 'Test11', 'Test remarks', 1, NULL, '2022-02-02 04:03:54', '2022-02-02 04:03:54'),
(10, 0, 2, 'AMMONIA', 1, 1, 0, 2, 10, 20, 1, 0, 1, 'This is test', 'Test11', 'Test remarks', 1, NULL, '2022-02-02 04:03:54', '2022-02-02 04:03:54'),
(11, 0, 2, 'BILIRUBIN TOTAL', 1, 1, 0, 2, 10, 20, 1, 0, 1, 'This is test', 'Test11', 'Test remarks', 1, NULL, '2022-02-02 04:03:54', '2022-02-02 04:03:54');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` int(11) NOT NULL,
  `name_local` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `name_eng` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `name_local`, `status`, `name_eng`, `deleted_at`, `updated_at`, `created_at`) VALUES
(2, 'mg/L', 1, 'mg/L', NULL, '2022-02-02 03:57:23', '2022-02-02 03:57:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `signature` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `token`, `created_at`, `updated_at`, `signature`) VALUES
(1, 'Super Admin', 'super_admin@lab.com', NULL, '$2y$10$BRX9Z59dm9SKA4TQT7So7uPoR3/j428wjY3QGJ9X896.5J4HwmrbW', NULL, 'AKOHT10RJUn5mQTyyTuWUIPXy2pWM3JV', '2021-11-13 13:19:41', '2021-12-13 01:59:18', '1.png');

-- --------------------------------------------------------

--
-- Table structure for table `usershifts`
--

CREATE TABLE `usershifts` (
  `id` int(11) NOT NULL,
  `lab_id` int(11) NOT NULL,
  `shift_no` tinyint(11) NOT NULL,
  `shift_prefix` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `added_by` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usershifts`
--

INSERT INTO `usershifts` (`id`, `lab_id`, `shift_no`, `shift_prefix`, `status`, `added_by`, `deleted_at`, `updated_at`, `created_at`) VALUES
(1, 1, 0, 'evening', 0, 1, NULL, '2022-01-11 12:52:02', '2022-01-11 12:52:02'),
(2, 4, 0, 'morning', 0, 1, NULL, '2022-01-11 13:02:15', '2022-01-11 13:02:03');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2021-11-13 13:20:08', '2021-11-13 13:20:08');

-- --------------------------------------------------------

--
-- Table structure for table `visits`
--

CREATE TABLE `visits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `lat` double(8,2) DEFAULT NULL,
  `lng` double(8,2) DEFAULT NULL,
  `zoom_level` int(11) DEFAULT NULL,
  `visit_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attach` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `read` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject` (`subject_type`,`subject_id`),
  ADD KEY `causer` (`causer_type`,`causer_id`),
  ADD KEY `activity_log_log_name_index` (`log_name`);

--
-- Indexes for table `age_classifications`
--
ALTER TABLE `age_classifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `airlines`
--
ALTER TABLE `airlines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `antibiotics`
--
ALTER TABLE `antibiotics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cbc_remarks`
--
ALTER TABLE `cbc_remarks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `centers`
--
ALTER TABLE `centers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contracts`
--
ALTER TABLE `contracts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cultures`
--
ALTER TABLE `cultures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `culture_options`
--
ALTER TABLE `culture_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_registrations`
--
ALTER TABLE `customer_registrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_registration_centers`
--
ALTER TABLE `customer_registration_centers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_registration_docs`
--
ALTER TABLE `customer_registration_docs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_registration_labs`
--
ALTER TABLE `customer_registration_labs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_registration_price_lists`
--
ALTER TABLE `customer_registration_price_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_registration_price_lists_discounts`
--
ALTER TABLE `customer_registration_price_lists_discounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discount_roles`
--
ALTER TABLE `discount_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_charges`
--
ALTER TABLE `doctor_charges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_expertises`
--
ALTER TABLE `doctor_expertises`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_qualifications`
--
ALTER TABLE `doctor_qualifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense_categories`
--
ALTER TABLE `expense_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faranchises`
--
ALTER TABLE `faranchises`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faranchises_price_lists`
--
ALTER TABLE `faranchises_price_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faranchise_price_lists_discounts`
--
ALTER TABLE `faranchise_price_lists_discounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_cultures`
--
ALTER TABLE `group_cultures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_culture_options`
--
ALTER TABLE `group_culture_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_culture_results`
--
ALTER TABLE `group_culture_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_tests`
--
ALTER TABLE `group_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_test_results`
--
ALTER TABLE `group_test_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `labs`
--
ALTER TABLE `labs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `machines`
--
ALTER TABLE `machines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `morphology_registrations`
--
ALTER TABLE `morphology_registrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `normal_range_headings`
--
ALTER TABLE `normal_range_headings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `organizations`
--
ALTER TABLE `organizations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_registrations`
--
ALTER TABLE `package_registrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patterns`
--
ALTER TABLE `patterns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_registrations`
--
ALTER TABLE `product_registrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_permissions`
--
ALTER TABLE `role_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `samples`
--
ALTER TABLE `samples`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specializations`
--
ALTER TABLE `specializations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supervisorshifts`
--
ALTER TABLE `supervisorshifts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_normal_ranges`
--
ALTER TABLE `test_normal_ranges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_options`
--
ALTER TABLE `test_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_registrations`
--
ALTER TABLE `test_registrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `usershifts`
--
ALTER TABLE `usershifts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visits`
--
ALTER TABLE `visits`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=340;

--
-- AUTO_INCREMENT for table `age_classifications`
--
ALTER TABLE `age_classifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `airlines`
--
ALTER TABLE `airlines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `antibiotics`
--
ALTER TABLE `antibiotics`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cbc_remarks`
--
ALTER TABLE `cbc_remarks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `centers`
--
ALTER TABLE `centers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contracts`
--
ALTER TABLE `contracts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;

--
-- AUTO_INCREMENT for table `cultures`
--
ALTER TABLE `cultures`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `culture_options`
--
ALTER TABLE `culture_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `customer_registrations`
--
ALTER TABLE `customer_registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer_registration_centers`
--
ALTER TABLE `customer_registration_centers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer_registration_docs`
--
ALTER TABLE `customer_registration_docs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_registration_labs`
--
ALTER TABLE `customer_registration_labs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer_registration_price_lists`
--
ALTER TABLE `customer_registration_price_lists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer_registration_price_lists_discounts`
--
ALTER TABLE `customer_registration_price_lists_discounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `discount_roles`
--
ALTER TABLE `discount_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `doctor_charges`
--
ALTER TABLE `doctor_charges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctor_expertises`
--
ALTER TABLE `doctor_expertises`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doctor_qualifications`
--
ALTER TABLE `doctor_qualifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expense_categories`
--
ALTER TABLE `expense_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faranchises`
--
ALTER TABLE `faranchises`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faranchises_price_lists`
--
ALTER TABLE `faranchises_price_lists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faranchise_price_lists_discounts`
--
ALTER TABLE `faranchise_price_lists_discounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `group_cultures`
--
ALTER TABLE `group_cultures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `group_culture_options`
--
ALTER TABLE `group_culture_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `group_culture_results`
--
ALTER TABLE `group_culture_results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `group_tests`
--
ALTER TABLE `group_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `group_test_results`
--
ALTER TABLE `group_test_results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `labs`
--
ALTER TABLE `labs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `machines`
--
ALTER TABLE `machines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `morphology_registrations`
--
ALTER TABLE `morphology_registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `normal_range_headings`
--
ALTER TABLE `normal_range_headings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `organizations`
--
ALTER TABLE `organizations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `package_registrations`
--
ALTER TABLE `package_registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `patterns`
--
ALTER TABLE `patterns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `product_registrations`
--
ALTER TABLE `product_registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `role_permissions`
--
ALTER TABLE `role_permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `samples`
--
ALTER TABLE `samples`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `specializations`
--
ALTER TABLE `specializations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `supervisorshifts`
--
ALTER TABLE `supervisorshifts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `test_normal_ranges`
--
ALTER TABLE `test_normal_ranges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `test_options`
--
ALTER TABLE `test_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `test_registrations`
--
ALTER TABLE `test_registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usershifts`
--
ALTER TABLE `usershifts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visits`
--
ALTER TABLE `visits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
