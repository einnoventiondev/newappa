-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 30, 2022 at 10:37 AM
-- Server version: 10.3.28-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asim_appa`
--

-- --------------------------------------------------------

--
-- Table structure for table `competition1s`
--

CREATE TABLE `competition1s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` int(11) NOT NULL DEFAULT 2,
  `letter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publishedWorks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `candidateImage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passportimages` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `release` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idNumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inputNationality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inputName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inputEmail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phoneNumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orgniztionName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `competition2s`
--

CREATE TABLE `competition2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` int(11) NOT NULL DEFAULT 2,
  `letter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publishedWorks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `candidateImage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passportimages` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `release` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idNumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inputNationality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inputName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inputEmail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phoneNumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orgniztionName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `competition4s`
--

CREATE TABLE `competition4s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `orgniztionName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `letter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publishedWorks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `candidateImage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passportimages` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `release` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idNumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inputNationality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inputName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inputEmail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phoneNumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `release1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publishedWorks1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `release2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publishedWorks2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `release3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publishedWorks3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `release4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publishedWorks4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `release5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publishedWorks5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `competitions`
--

CREATE TABLE `competitions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` int(11) NOT NULL DEFAULT 2,
  `form` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `letter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publishedWorks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `candidateImage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passportimages` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `release` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idNumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inputNationality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inputName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inputEmail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phoneNumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orgniztionName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accept` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `corporate1s`
--

CREATE TABLE `corporate1s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `authentic_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authentic_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authentic_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authentic_project` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authentic_company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authentic_options` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authentic_manager_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authentic_contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authentic_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authentic_country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authentic_city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authentic_idea` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authentic_program` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authentic_history` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authentic_place` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authentic_history1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authentic_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authentic_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authentic_cv` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authentic_cv1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authentic_cv2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authentic_cv3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `corporate1s`
--

INSERT INTO `corporate1s` (`id`, `authentic_name`, `authentic_type`, `authentic_date`, `authentic_project`, `authentic_company`, `authentic_options`, `authentic_manager_name`, `authentic_contact`, `authentic_email`, `authentic_country`, `authentic_city`, `authentic_idea`, `authentic_program`, `authentic_history`, `authentic_place`, `authentic_history1`, `authentic_target`, `authentic_link`, `authentic_cv`, `authentic_cv1`, `authentic_cv2`, `authentic_cv3`, `check`, `created_at`, `updated_at`) VALUES
(1, 'gregre', 'grgres', '05/25/2022', 'فريق', NULL, 'خاصة', 'greggre', '656334646346363', 'sikandar@gmail.com', 'حكومية', 'ww5t4yt', 'hdhhdhdhd', '{\"authentic_program\":\"rereregre\"}', '{\"authentic_history\":\"rgrergegre\"}', '{\"authentic_place\":\"gregregrerggre\"}', '{\"authentic_history1\":\"gregregre\"}', '{\"authentic_target\":\"gregrgrgr\"}', 'https://www.codegrepper.com', '{\"authentic_cv\":{}}', '{\"authentic_cv1\":{}}', '{\"authentic_cv2\":{}}', '{\"authentic_cv3\":{}}', NULL, '2022-05-25 11:56:03', '2022-05-25 11:56:03'),
(2, 'gregre', 'grgres', '05/25/2022', 'فرد', NULL, 'خاصة', 'greggre', '7465454', 'sikandar@gmail.com', 'حكومية', 'ww5t4yt', 'uiguiguiguguigug', 'rereregre', 'rgrergegre', 'gregregrerggre', 'gregregre', 'gregrgrgr', 'https://www.codegrepper.com', 'C:\\xampp\\tmp\\phpD99.tmp', 'C:\\xampp\\tmp\\phpDA9.tmp', 'C:\\xampp\\tmp\\phpDAA.tmp', 'C:\\xampp\\tmp\\phpDAB.tmp', NULL, '2022-05-25 12:01:24', '2022-05-25 12:01:24'),
(3, 'asd', 'ads', '05/19/2022', 'فريق', NULL, 'خاصة', 'asd', '112', '12312@gmail.com', 'AZ', 'lahore', 'dds', 'df', '12/22/2022', 'asd', 'asd', 'asd', 'https://hopeful-khorana.161-97-115-110.plesk.page/newappa/public/corpor', NULL, NULL, NULL, NULL, NULL, '2022-05-27 11:53:19', '2022-05-27 11:53:19'),
(4, 'sidra', 'ssd', '05/26/2022', 'فرد', NULL, 'خاصة', 'asd', '1234', '12312@gmail.com', 'AW', 'lahore', 'asd', 'sdas', 'asdasd', 'asdsdas', 'adsas', 'asdasd', 'https://hopeful-khorana.161-97-115-110.plesk.page/newappa/public/corpor', NULL, NULL, NULL, NULL, NULL, '2022-05-27 11:57:45', '2022-05-27 11:57:45');

-- --------------------------------------------------------

--
-- Table structure for table `corporate2s`
--

CREATE TABLE `corporate2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `behalf_candidate_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `behalf_options` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `behalf_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `behalf_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `behalf_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `behalf_company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `behalf_options1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `behalf_project` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `behalf_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `behalf_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `behalf_country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `behalf_city` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `behalf_about` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `corporate2s`
--

INSERT INTO `corporate2s` (`id`, `behalf_candidate_name`, `behalf_options`, `behalf_name`, `behalf_type`, `behalf_date`, `behalf_company_name`, `behalf_options1`, `behalf_project`, `behalf_number`, `behalf_email`, `behalf_country`, `behalf_city`, `behalf_about`, `created_at`, `updated_at`) VALUES
(1, 'Nicholas Stephens', 'مؤسسة', 'Amela Wise', 'Xaviera Riggs', 'Indira Duncan', 'Brooks and Harrell Trading', 'تطوعية', '450', '211', 'tozyju@mailinator.com', 'NI', '607', 'Ratione consectetur', '2022-05-27 09:32:34', '2022-05-27 09:32:34'),
(2, 'tedt', 'مؤسسة', 'reras das', 'sad sads', '05/28/2022', 'sad asd', 'خاصة', 'dosa ddsa', '546547654', 'test@g.com', 'ES', 'glfdkgj', 'fdgdf df', '2022-05-28 10:02:31', '2022-05-28 10:02:31');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'أندورا', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(2, 'الامارات العربية المتحدة', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(3, 'أفغانستان', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(4, 'أنتيجوا وبربودا', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(5, 'أنجويلا', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(6, 'ألبانيا', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(7, 'أرمينيا', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(8, 'أنجولا', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(9, 'القطب الجنوبي', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(10, 'الأرجنتين', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(11, 'ساموا الأمريكية', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(12, 'النمسا', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(13, 'أستراليا', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(14, 'آروبا', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(15, 'جزر أولان', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(16, 'أذربيجان', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(17, 'البوسنة والهرسك', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(18, 'بربادوس', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(19, 'بنجلاديش', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(20, 'بلجيكا', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(21, 'بوركينا فاسو', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(22, 'بلغاريا', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(23, 'البحرين', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(24, 'بوروندي', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(25, 'بنين', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(26, 'سان بارتيلمي', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(27, 'برمودا', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(28, 'بروناي', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(29, 'بوليفيا', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(30, 'بونير', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(31, 'البرازيل', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(32, 'الباهاما', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(33, 'بوتان', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(34, 'جزيرة بوفيه', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(35, 'بتسوانا', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(36, 'روسيا البيضاء', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(37, 'بليز', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(38, 'كندا', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(39, 'جزر كوكوس', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(40, 'جمهورية الكونغو الديمقراطية', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(41, 'جمهورية افريقيا الوسطى', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(42, 'الكونغو - برازافيل', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(43, 'سويسرا', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(44, 'ساحل العاج', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(45, 'جزر كوك', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(46, 'شيلي', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(47, 'الكاميرون', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(48, 'الصين', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(49, 'كولومبيا', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(50, 'كوستاريكا', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(51, 'كوبا', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(52, 'الرأس الأخضر', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(53, 'كوراساو', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(54, 'جزيرة الكريسماس', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(55, 'قبرص', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(56, 'جمهورية التشيك', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(57, 'ألمانيا', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(58, 'جيبوتي', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(59, 'الدانمرك', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(60, 'دومينيكا', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(61, 'جمهورية الدومينيك', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(62, 'الجزائر', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(63, 'الاكوادور', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(64, 'استونيا', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(65, 'مصر', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(66, 'الصحراء الغربية', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(67, 'اريتريا', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(68, 'أسبانيا', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(69, 'اثيوبيا', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(70, 'فنلندا', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(71, 'فيجي', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(72, 'جزر فوكلاند', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(73, 'ميكرونيزيا', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(74, 'جزر فارو', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(75, 'فرنسا', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(76, 'الجابون', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(77, 'المملكة المتحدة', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(78, 'جرينادا', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(79, 'جورجيا', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(80, 'غويانا', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(81, 'غيرنزي', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(82, 'غانا', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(83, 'جبل طارق', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(84, 'جرينلاند', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(85, 'غامبيا', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(86, 'غينيا', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(87, 'جوادلوب', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(88, 'غينيا الاستوائية', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(89, 'اليونان', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(90, 'جورجيا الجنوبية وجزر ساندويتش الجنوبية', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(91, 'جواتيمالا', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(92, 'جوام', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(93, 'غينيا بيساو', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(94, 'غيانا', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(95, 'هونج كونج الصينية', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(96, 'جزيرة هيرد وماكدونالد', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(97, 'هندوراس', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(98, 'كرواتيا', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(99, 'هايتي', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(100, 'المجر', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(101, 'اندونيسيا', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(102, 'أيرلندا', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(103, 'اسرائيل', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(104, 'جزيرة مان', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(105, 'الهند', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(106, 'المحيط الهندي البريطاني', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(107, 'العراق', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(108, 'ايران', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(109, 'أيسلندا', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(110, 'ايطاليا', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(111, 'جيرسي', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(112, 'جامايكا', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(113, 'الأردن', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(114, 'اليابان', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(115, 'كينيا', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(116, 'قرغيزستان', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(117, 'كمبوديا', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(118, 'كيريباتي', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(119, 'جزر القمر', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(120, 'سانت كيتس ونيفيس', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(121, 'كوريا الشمالية', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(122, 'كوريا الجنوبية', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(123, 'الكويت', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(124, 'جزر الكايمن', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(125, 'كازاخستان', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(126, 'لاوس', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(127, 'لبنان', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(128, 'سانت لوسيا', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(129, 'ليختنشتاين', '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(130, 'سريلانكا', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(131, 'ليبيريا', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(132, 'ليسوتو', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(133, 'ليتوانيا', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(134, 'لوكسمبورج', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(135, 'لاتفيا', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(136, 'ليبيا', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(137, 'المغرب', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(138, 'موناكو', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(139, 'مولدافيا', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(140, 'الجبل الأسود', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(141, 'سانت مارتين', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(142, 'مدغشقر', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(143, 'جزر المارشال', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(144, 'مقدونيا', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(145, 'مالي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(146, 'ميانمار', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(147, 'منغوليا', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(148, 'ماكاو الصينية', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(149, 'جزر ماريانا الشمالية', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(150, 'مارتينيك', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(151, 'موريتانيا', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(152, 'مونتسرات', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(153, 'مالطا', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(154, 'موريشيوس', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(155, 'جزر الملديف', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(156, 'ملاوي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(157, 'المكسيك', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(158, 'ماليزيا', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(159, 'موزمبيق', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(160, 'ناميبيا', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(161, 'كاليدونيا الجديدة', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(162, 'النيجر', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(163, 'جزيرة نورفوك', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(164, 'نيجيريا', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(165, 'نيكاراجوا', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(166, 'هولندا', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(167, 'النرويج', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(168, 'نيبال', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(169, 'نورو', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(170, 'نيوي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(171, 'نيوزيلاندا', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(172, 'عمان', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(173, 'بنما', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(174, 'بيرو', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(175, 'بولينيزيا الفرنسية', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(176, 'بابوا غينيا الجديدة', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(177, 'الفيلبين', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(178, 'باكستان', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(179, 'بولندا', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(180, 'سانت بيير وميكولون', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(181, 'بتكايرن', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(182, 'بورتوريكو', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(183, 'فلسطين', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(184, 'البرتغال', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(185, 'بالاو', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(186, 'باراجواي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(187, 'قطر', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(188, 'روينيون', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(189, 'رومانيا', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(190, 'صربيا', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(191, 'روسيا', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(192, 'رواندا', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(193, 'المملكة العربية السعودية', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(194, 'جزر سليمان', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(195, 'سيشل', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(196, 'السودان', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(197, 'السويد', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(198, 'سنغافورة', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(199, 'سانت هيلنا', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(200, 'سلوفينيا', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(201, 'سفالبارد وجان مايان', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(202, 'سلوفاكيا', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(203, 'سيراليون', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(204, 'سان مارينو', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(205, 'السنغال', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(206, 'الصومال', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(207, 'سورينام', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(208, 'جنوب السودان', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(209, 'ساو تومي وبرينسيبي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(210, 'السلفادور', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(211, 'سينت مارتن', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(212, 'سوريا', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(213, 'سوازيلاند', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(214, 'جزر الترك وجايكوس', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(215, 'تشاد', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(216, 'المقاطعات الجنوبية الفرنسية', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(217, 'توجو', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(218, 'تايلند', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(219, 'طاجكستان', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(220, 'توكيلو', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(221, 'تيمور الشرقية', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(222, 'تركمانستان', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(223, 'تونس', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(224, 'تونجا', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(225, 'تركيا', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(226, 'ترينيداد وتوباغو', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(227, 'توفالو', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(228, 'تايوان', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(229, 'تانزانيا', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(230, 'أوكرانيا', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(231, 'أوغندا', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(232, 'جزر الولايات المتحدة البعيدة الصغيرة', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(233, 'الولايات المتحدة الأمريكية', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(234, 'أورجواي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(235, 'أوزبكستان', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(236, 'الفاتيكان', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(237, 'سانت فنسنت وغرنادين', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(238, 'فنزويلا', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(239, 'جزر فرجين البريطانية', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(240, 'جزر فرجين الأمريكية', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(241, 'فيتنام', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(242, 'فانواتو', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(243, 'جزر والس وفوتونا', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(244, 'ساموا', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(245, 'كوسوفو', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(246, 'اليمن', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(247, 'مايوت', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(248, 'جمهورية جنوب افريقيا', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(249, 'زامبيا', '2022-05-28 06:23:25', '2022-05-28 06:23:25');

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
-- Table structure for table `individual1s`
--

CREATE TABLE `individual1s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `authentic_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authentic_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authentic_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authentic_project` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authentic_company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authentic_age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authentic_options` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authentic_contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authentic_contact1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authentic_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authentic_condition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authentic_choose` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authentic_country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authentic_city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authentic_idea` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authentic_program` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authentic_history` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authentic_place` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authentic_history1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authentic_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authentic_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authentic_cv` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authentic_cv1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authentic_cv2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authentic_cv3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `individual1s`
--

INSERT INTO `individual1s` (`id`, `authentic_name`, `authentic_type`, `authentic_date`, `authentic_project`, `authentic_company`, `authentic_age`, `authentic_options`, `authentic_contact`, `authentic_contact1`, `authentic_email`, `authentic_condition`, `authentic_choose`, `authentic_country`, `authentic_city`, `authentic_idea`, `authentic_program`, `authentic_history`, `authentic_place`, `authentic_history1`, `authentic_target`, `authentic_link`, `authentic_cv`, `authentic_cv1`, `authentic_cv2`, `authentic_cv3`, `check`, `created_at`, `updated_at`) VALUES
(1, 'as', 'asd', '05/29/2022', 'فريق', 'asd', NULL, 'باربادوسي', '234', NULL, 'asdf@gmail.com', NULL, NULL, 'UY', 'asda', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'https://www.google.com', '1653659361.png', NULL, NULL, NULL, NULL, '2022-05-27 11:49:21', '2022-05-27 11:49:21'),
(2, 'Lester Neal', 'Zoe Garner', 'Julian Stafford', 'فريق', 'Contreras Freeman Inc', NULL, 'غاني', '913', NULL, 'wygemyqota@mailinator.com', NULL, NULL, 'NE', '33', 'Porro at illum poss', '288', '440', '535', '638', '359', 'https://www.zukiqyzurarivac.ca', '1653659386.png', NULL, NULL, NULL, NULL, '2022-05-27 11:49:46', '2022-05-27 11:49:46'),
(3, 'Haley Galloway', 'Ciara Roy', 'Hyacinth Cannon', 'فريق', 'Gomez Holmes Plc', NULL, 'جزر سليمان', '506', NULL, 'supe@mailinator.com', NULL, NULL, 'MA', '74', 'Animi et fugit cul', '212', '773', '898', '514', '919', 'https://www.feku.ws', '1653659598.png', NULL, NULL, NULL, NULL, '2022-05-27 11:53:18', '2022-05-27 11:53:18');

-- --------------------------------------------------------

--
-- Table structure for table `individual2s`
--

CREATE TABLE `individual2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `behalf_candidate_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `behalf_options` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `behalf_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `behalf_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `behalf_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `behalf_country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `behalf_city` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `behalf_about` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `behalf_site` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `individual2s`
--

INSERT INTO `individual2s` (`id`, `behalf_candidate_name`, `behalf_options`, `behalf_name`, `behalf_type`, `behalf_date`, `behalf_country`, `behalf_city`, `behalf_about`, `behalf_site`, `created_at`, `updated_at`) VALUES
(1, 'Clayton Dodson', 'فرد', 'Denise Dillard', 'Alec Mullen', 'Nicole Gentry', 'HK', '601', 'Qui recusandae Est', 'https://www.bowapesujyk.cm', '2022-05-27 11:53:02', '2022-05-27 11:53:02'),
(2, 'Bo Casey', 'مؤسسة', 'Roary Farrell', 'Nevada Sharpe', 'Whilemina Shepherd', 'PE', '909', 'Ex omnis exercitatio', 'https://www.lideja.in', '2022-05-27 11:53:30', '2022-05-27 11:53:30');

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
(5, '2022_02_22_144920_create_competitions_table', 1),
(6, '2022_02_24_070721_create_competition1s_table', 1),
(7, '2022_02_24_075248_create_competition2s_table', 1),
(8, '2022_02_25_082122_create_competition4s_table', 1),
(9, '2022_02_28_071320_create_countries_table', 1),
(10, '2022_02_28_090804_create_nations_table', 1),
(11, '2022_05_23_063647_create_contact_us_table', 1),
(12, '2022_05_23_091917_create_portfolios_table', 1),
(13, '2022_05_25_140334_create_corporate1s_table', 1),
(14, '2022_05_25_144607_create_corporate2s_table', 1),
(15, '2022_05_26_071014_create_individual2s_table', 2),
(16, '2022_05_26_071045_create_individual1s_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `nations`
--

CREATE TABLE `nations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nations`
--

INSERT INTO `nations` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'أفغاني', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(2, 'ألباني', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(3, 'جزائري', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(4, 'أمريكي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(5, 'أندوري', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(6, 'أنغولي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(7, 'انتيغوا', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(8, 'أرجنتيني', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(9, 'أرميني', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(10, 'أسترالي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(11, 'نمساوي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(12, 'أذربيجاني', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(13, 'باهامى', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(14, 'بحريني', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(15, 'بنجلاديشي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(16, 'باربادوسي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(17, 'بربودا', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(18, 'بوتسواني', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(19, 'بيلاروسي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(20, 'بلجيكي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(21, 'بليزي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(22, 'بنيني', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(23, 'بوتاني', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(24, 'بوليفي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(25, 'بوسني', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(26, 'برازيلي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(27, 'بريطاني', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(28, 'بروناى', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(29, 'بلغاري', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(30, 'بوركيني', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(31, 'بورمي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(32, 'بوروندي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(33, 'كمبودي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(34, 'كاميروني', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(35, 'كندي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(36, 'االرأس الأخضر', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(37, 'وسط أفريقيا', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(38, 'تشادي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(39, 'شيلي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(40, 'صينى', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(41, 'كولومبي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(42, 'جزر القمر', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(43, 'كونغولي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(44, 'كوستاريكي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(45, 'كرواتية', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(46, 'كوبي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(47, 'قبرصي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(48, 'تشيكي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(49, 'دانماركي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(50, 'جيبوتي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(51, 'دومينيكاني', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(52, 'هولندي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(53, 'تيموري شرقي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(54, 'اكوادوري', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(55, 'مصري', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(56, 'إماراتي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(57, 'غيني  استوائي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(58, 'إريتري', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(59, 'إستوني', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(60, 'حبشي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(61, 'فيجي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(62, 'فلبيني', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(63, 'فنلندي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(64, 'فرنسي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(65, 'جابوني', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(66, 'غامبيي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(67, 'جورجي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(68, 'ألماني', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(69, 'غاني', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(70, 'إغريقي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(71, 'جرينادي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(72, 'غواتيمالي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(73, 'غيني بيساوي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(74, 'غيني', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(75, 'جوياني', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(76, 'هايتي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(77, 'هرسكي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(78, 'هندوراسي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(79, 'هنغاري', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(80, 'إيسلندي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(81, 'هندي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(82, 'إندونيسي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(83, 'إيراني', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(84, 'عراقي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(85, 'إيرلندي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(86, 'إيطالي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(87, 'إفواري', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(88, 'جامايكي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(89, 'ياباني', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(90, 'أردني', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(91, 'كازاخستاني', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(92, 'كيني', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(93, 'كيتياني ونيفيسياني', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(94, 'كويتي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(95, 'قيرغيزستان', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(96, 'لاوسي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(97, 'لاتفي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(98, 'لبناني', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(99, 'ليبيري', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(100, 'ليبي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(101, 'ليختنشتايني', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(102, 'لتواني', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(103, 'لكسمبرغي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(104, 'مقدوني', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(105, 'مدغشقري', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(106, 'مالاوى', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(107, 'ماليزي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(108, 'مالديفي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(109, 'مالي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(110, 'مالطي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(111, 'مارشالي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(112, 'موريتاني', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(113, 'موريشيوسي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(114, 'مكسيكي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(115, 'ميكرونيزي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(116, 'مولدوفي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(117, 'موناكو', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(118, 'منغولي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(119, 'مغربي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(120, 'ليسوتو', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(121, 'لتسواني', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(122, 'موزمبيقي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(123, 'ناميبي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(124, 'ناورو', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(125, 'نيبالي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(126, 'نيوزيلندي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(127, 'ني فانواتي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(128, 'نيكاراغوا', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(129, 'نيجري', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(130, 'كوري شمالي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(131, 'إيرلندي شمالي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(132, 'نرويجي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(133, 'عماني', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(134, 'باكستاني', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(135, 'بالاوي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(136, 'فلسطيني', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(137, 'بنمي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(138, 'بابوا غينيا الجديدة', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(139, 'باراغواياني', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(140, 'بيروفي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(141, 'بولندي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(142, 'برتغالي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(143, 'قطري', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(144, 'روماني', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(145, 'روسي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(146, 'رواندي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(147, 'لوسياني', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(148, 'سلفادوري', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(149, 'ساموايان', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(150, 'سان مارينيز', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(151, 'ساو توميان', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(152, 'سعودي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(153, 'سكتلندي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(154, 'سنغالي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(155, 'صربي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(156, 'سيشلي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(157, 'سيرا ليوني', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(158, 'سنغافوري', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(159, 'سلوفاكي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(160, 'سلوفيني', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(161, 'جزر سليمان', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(162, 'صومالي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(163, 'جنوب افريقيي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(164, 'كوري جنوبي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(165, 'إسباني', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(166, 'سري لانكي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(167, 'سوداني', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(168, 'سورينامي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(169, 'سوازي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(170, 'سويدي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(171, 'سويسري', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(172, 'سوري', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(173, 'تايواني', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(174, 'طاجيكي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(175, 'تنزاني', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(176, 'التايلاندي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(177, 'توغواني', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(178, 'تونجاني', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(179, 'ترينيدادي أو توباغوني', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(180, 'تونسي', '2022-05-28 06:23:25', '2022-05-28 06:23:25'),
(181, 'تركي', '2022-05-28 06:23:26', '2022-05-28 06:23:26'),
(182, 'توفالي', '2022-05-28 06:23:26', '2022-05-28 06:23:26'),
(183, 'أوغندي', '2022-05-28 06:23:26', '2022-05-28 06:23:26'),
(184, 'أوكراني', '2022-05-28 06:23:26', '2022-05-28 06:23:26'),
(185, 'أوروجواي', '2022-05-28 06:23:26', '2022-05-28 06:23:26'),
(186, 'أوزبكستاني', '2022-05-28 06:23:26', '2022-05-28 06:23:26'),
(187, 'فنزويلي', '2022-05-28 06:23:26', '2022-05-28 06:23:26'),
(188, 'فيتنامي', '2022-05-28 06:23:26', '2022-05-28 06:23:26'),
(189, 'ويلزي', '2022-05-28 06:23:26', '2022-05-28 06:23:26'),
(190, 'يمني', '2022-05-28 06:23:26', '2022-05-28 06:23:26'),
(191, 'زامبي', '2022-05-28 06:23:26', '2022-05-28 06:23:26');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `profile`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'admin', NULL, 'admin1', 'admin@admin.com', NULL, '$2y$10$zv3plUp0Sr3s0vb/EBuyXeiayMy0ILp0V0.uxj3ufbXJGmTvn2Y7.', NULL, '2022-05-28 06:23:24', '2022-05-28 06:23:24'),
(4, 'admin2', NULL, 'admin2', 'admin2@admin2.com', NULL, '$2y$10$j5XF7Mgwpt.kMNaH5TbpY.B3VMaKDw4bX.ghFar8HuSbt9hDEJuyG', NULL, '2022-05-28 06:23:24', '2022-05-28 06:23:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `competition1s`
--
ALTER TABLE `competition1s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `competition2s`
--
ALTER TABLE `competition2s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `competition4s`
--
ALTER TABLE `competition4s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `competitions`
--
ALTER TABLE `competitions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corporate1s`
--
ALTER TABLE `corporate1s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corporate2s`
--
ALTER TABLE `corporate2s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `individual1s`
--
ALTER TABLE `individual1s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `individual2s`
--
ALTER TABLE `individual2s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nations`
--
ALTER TABLE `nations`
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
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `competition1s`
--
ALTER TABLE `competition1s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `competition2s`
--
ALTER TABLE `competition2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `competition4s`
--
ALTER TABLE `competition4s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `competitions`
--
ALTER TABLE `competitions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `corporate1s`
--
ALTER TABLE `corporate1s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `corporate2s`
--
ALTER TABLE `corporate2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `individual1s`
--
ALTER TABLE `individual1s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `individual2s`
--
ALTER TABLE `individual2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `nations`
--
ALTER TABLE `nations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
