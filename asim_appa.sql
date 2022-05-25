-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 25, 2022 at 07:48 AM
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
  `phone_number2` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fieldname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uni_number` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uni_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orgniztionName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accept` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `competitions`
--

INSERT INTO `competitions` (`id`, `type`, `form`, `letter`, `publishedWorks`, `candidateImage`, `passportimages`, `release`, `place`, `title`, `relation`, `about`, `idNumber`, `inputNationality`, `inputName`, `inputEmail`, `phoneNumber`, `phone_number2`, `fieldname`, `age`, `uni_number`, `uni_email`, `state`, `orgniztionName`, `accept`, `created_at`, `updated_at`) VALUES
(2, 2, 'five', NULL, NULL, NULL, NULL, '2022-04-11', 'kmlk', 'kllk', 'kmkl', 'lkl', 'lml', 'أندوري', 'klml', 'teacher@gmail.com', 'lmlm', '0', '', '0', '0', '', 'أندورا', 'kkm', 2, '2022-04-14 13:16:29', '2022-04-14 13:27:32'),
(8, 2, 'eight', NULL, NULL, NULL, NULL, '2022-04-25', 'rer', 'err', 'rere', 'terte', '1111', 'أفغاني', '1111', 'user@user.com', '11111', '0', '', '0', '0', '', 'أندورا', '1111', 0, '2022-04-15 06:18:35', '2022-04-15 06:18:35'),
(9, 2, 'eight', NULL, 'upload//t49VIQUnpA5nLC84JQJxlBluG4i1qHwHjCThP39P.pdf', NULL, NULL, '2022-04-08', 'test__', 'test__', 'test__', 'test__', 'test__', 'أفغاني', 'test__', 'test__@gmail.com', 'test__', '0', '', '0', '0', '', 'أندورا', 'test__', 0, '2022-04-15 09:46:13', '2022-04-15 09:46:13'),
(10, 2, 'eight', NULL, 'upload//hVy2UWszzxa7c0TKv4MvLIZ0py29C04aw9NzuTnu.pdf', NULL, NULL, '2022-04-08', 'test__', 'test__', 'test__', 'test__', 'test__', 'أفغاني', 'test__', 'test__@gmail.com', 'test__', '0', '', '0', '0', '', 'أندورا', 'test__', 0, '2022-04-15 10:26:03', '2022-04-15 10:26:03'),
(11, 2, 'eight', NULL, 'upload//5WX1phkpKl5WONmeio918Nu3MdIJfVguVWOEr8lP.pdf', NULL, NULL, '2022-04-08', 'testtest', 'lahore', 'testtest', 'testtest', 'testtest', 'أفغاني', 'testtest', 'arslanshheikh879@gmail.com', 'testtest', '0', '', '0', '0', '', 'أندورا', 'testtest', 0, '2022-04-15 10:28:00', '2022-04-15 10:28:00'),
(12, 2, 'eight', NULL, 'upload//7MrWZG0rCG8laZeNenH7UipWtX0dCZa122NuRlfe.jpg', NULL, NULL, '2022-04-29', '1334', '12344', '12344', '1234w3', '12344', 'ألباني', '1233', '123@gmail.com', '1233', '0', '', '0', '0', '', 'آروبا', '123', 0, '2022-04-16 08:27:59', '2022-04-16 08:27:59'),
(13, 2, 'five', NULL, 'upload//TrEQayMtBZmaSItVDyBcqzh7R7J20mfaiWxn8stb.pdf', NULL, NULL, '2022-04-17', 'assss', 'asd', 'asdfghhg', 'asdfg', 'sadf', 'أذربيجاني', 'asdfg', 'asd@gmail.com', 'asdfg', '0', '', '0', '0', '', 'أرمينيا', 'asdfg', 1, '2022-04-16 08:56:44', '2022-05-09 02:40:53'),
(14, 2, 'six', NULL, 'upload//Z2iHtaPrzWNEV5QWq9tgNN6vKGQPQs2CxG4AwsDO.pdf', NULL, NULL, '2022-05-26', 'eg r', 'ret fdg', '53gfefge', 'rtf g e ge', '345678', 'جزائري', 'eewoitureo', '5678@gmail.com', '34534534', '0', '', '0', '0', '', 'أنجويلا', 'العربي', 0, '2022-04-17 06:03:25', '2022-04-17 06:03:25'),
(15, 2, 'eight', NULL, NULL, NULL, NULL, '2022-04-11', 'test', 'test', 'test', 'test', 'test', 'ألباني', 'test', 'test@gmail.com', 'test', '0', '', '0', '0', '', 'أندورا', 'test', 0, '2022-04-18 04:07:16', '2022-04-18 04:07:16'),
(16, 2, 'eight', NULL, 'upload//oKPk2NelWZLPdxL2tfLvdm92MgPsGjhB8droCzGu.pdf', NULL, NULL, '2022-04-11', 'test1', 'test1', 'test1', 'test1', 'test1', NULL, 'test1', 'test1@gmail.com', 'test1', '0', '', '0', '0', '', 'أندورا', 'test1', 0, '2022-04-18 04:27:33', '2022-04-18 04:27:33'),
(17, 2, 'eight', NULL, 'upload//X3IBfjpXcn0s3LCsxEsjWMQ6e9awkhPAOPkbt49I.pdf', NULL, NULL, '2022-04-11', 'test3', 'test3', 'test3', 'test3', 'test3', 'ألباني', 'test3', 'test3@gmail.com', 'test3', '0', '', '0', '0', '', 'الامارات العربية المتحدة', 'test3', 0, '2022-04-18 09:47:21', '2022-04-18 09:47:21'),
(18, 2, 'eight', NULL, 'upload//rjyDvl5ociHjXBZ8T9qRDsmgPljAzT7gxw1G1axq.pdf', NULL, NULL, '2022-04-11', 'test9', 'test9', 'test9', 'test9', 'test9', 'باهامى', 'test9', 'test9@gmail.com', 'test9', '0', '', '0', '0', '', 'أندورا', 'test9', 0, '2022-04-18 10:47:50', '2022-04-18 10:47:50'),
(19, 2, 'eight', NULL, NULL, NULL, NULL, '2022-04-11', 'test7', 'test7', 'test7', 'test7', 'test7', 'أمريكي', 'test7', 'test7@gmail.com', 'test7', '0', '', '0', '0', '', 'الامارات العربية المتحدة', 'test7', 0, '2022-04-18 10:54:21', '2022-04-18 10:54:21'),
(20, 2, 'eight', NULL, NULL, NULL, 'upload//E7NQkMWnmqZHak9SYjHWL0SnF4qXWAplT3NOLFt2.pdf', '2022-04-11', 'test7', 'test7', 'test7', 'test7', 'test7', 'ألباني', 'test7', 'test7@gmail.com', 'test7', '0', '', '0', '0', '', 'أفغانستان', 'test7', 0, '2022-04-18 10:55:48', '2022-04-18 10:55:48'),
(21, 2, 'eight', NULL, NULL, NULL, NULL, '2022-04-12', 'test10', 'test10', 'test10', 'test10', 'test10', 'جزائري', 'test10', 'test10@gmail.com', 'test10', '0', '', '0', '0', '', 'الامارات العربية المتحدة', 'test10', 0, '2022-04-19 04:42:16', '2022-04-19 04:42:16'),
(22, 2, 'eight', NULL, NULL, 'HorseX.png', NULL, '2022-04-12', 'test11', 'test11', 'test11', 'test11', 'test11', 'ألباني', 'test11', 'test11@gmail.com', 'test11', '0', '', '0', '0', '', 'الامارات العربية المتحدة', 'test11', 0, '2022-04-19 06:00:14', '2022-04-19 06:00:14'),
(23, 2, 'eight', NULL, NULL, 'bean bag.jpg', NULL, '2022-04-07', 'test12', 'test12', 'test12', 'test12', 'test12', 'جزائري', 'test12', 'test12@gmail.com', 'test12', '0', '', '0', '0', '', 'أندورا', 'test12', 0, '2022-04-19 06:22:46', '2022-04-19 06:22:46'),
(24, 2, 'eight', NULL, 'HorseX.pdf', 'ficon.png', 'bean bag.jpg', '2022-04-12', 'test13', 'test13', 'test13', 'test13', 'test13', 'جزائري', 'test13', 'test13@gmail.com', 'test13', '0', '', '0', '0', '', 'الامارات العربية المتحدة', 'test13', 0, '2022-04-19 06:30:33', '2022-04-19 06:30:33'),
(25, 2, 'eight', NULL, 'HorseX (1).pdf', 'bean bag.jpg', 'HorseX.png', '2022-04-12', 'test_form', 'test_form', 'test_form', 'test_form', 'test_form', 'ألباني', 'test_form', 'test_form@gmail.com', 'test_form', '0', '', '0', '0', '', 'الامارات العربية المتحدة', 'test_form', 0, '2022-04-19 07:20:40', '2022-04-19 07:20:40'),
(26, 2, 'eight', NULL, 'HorseX (1).pdf', 'bean bag.jpg', 'HorseX.png', '2022-04-13', '_ftest', '_ftest', '_ftest', '_ftest', '_ftest', 'جزائري', '_ftest', 'ftest@gmail.com', '_ftest', '0', '', '0', '0', '', 'الامارات العربية المتحدة', '_ftest', 0, '2022-04-19 07:34:44', '2022-04-19 07:34:44'),
(27, 2, 'eight', NULL, 'HorseX (1).pdf', 'Test_image.jpg', 'test.png', '2022-04-12', 'testtest', 'testtest', 'testtest', 'testtest', 'testtest', 'ألباني', 'testtest', 'testtest@gmail.com', 'testtest', '0', '', '0', '0', '', 'أندورا', 'testtest', 0, '2022-04-19 07:37:16', '2022-04-19 07:37:16'),
(28, 2, 'eight', NULL, 'HorseX (1).pdf', 'Test_image.jpg', 'test.png', '2022-04-12', 'final_t', 'final_t', 'final_t', 'final_t', 'final_t', 'ألباني', 'final_t', 'final_t@gmail.com', 'final_t', '0', '', '0', '0', '', 'ألبانيا', 'final_t', 0, '2022-04-19 07:47:22', '2022-04-19 07:47:22'),
(29, 2, 'eight', NULL, 'Balancesheet.pdf', 'Test_image.jpg', 'test.png', '2022-04-12', 'final_t1', 'final_t1', 'final_t1', 'final_t1', 'final_t1', 'ألباني', 'final_t1', 'final_t1@gmail.com', 'final_t1', '0', '', '0', '0', '', 'أندورا', 'final_t1', 0, '2022-04-19 07:49:35', '2022-04-19 07:49:35'),
(30, 2, 'eight', NULL, 'HorseX (1) (2).pdf', 'Test_image.jpg', 'test.png', '2022-04-06', 't_', 't_', 't_', 't_', 't_', 'ألباني', 't_', 't_@gmail.com', 't_', '0', '', '0', '0', '', 'أندورا', 't_', 0, '2022-04-19 07:52:25', '2022-04-19 07:52:25'),
(31, 2, 'eight', NULL, 'HorseX (1) (1).pdf', 'test.png', 'Test_image.jpg', '2022-04-12', 'v', 't_1', 't_1', 't_1', 't_1', 'أندوري', 't_1', 't_1@gmail.com', 't_1', '0', '', '0', '0', '', 'الامارات العربية المتحدة', 't_1', 0, '2022-04-19 07:59:22', '2022-04-19 07:59:22'),
(32, 2, 'eight', NULL, 'HorseX (1) (1).pdf', 'test.png', 'Test_image.jpg', '2022-04-12', 'v', 't_1', 't_1', 't_1', 't_1', 'أندوري', 't_1', 't_1@gmail.com', 't_1', '0', '', '0', '0', '', 'الامارات العربية المتحدة', 't_1', 0, '2022-04-19 08:07:50', '2022-04-19 08:07:50'),
(33, 2, 'eight', NULL, 'HorseX (1) (1).pdf', 'test.png', 'Test_image.jpg', '2022-04-12', 'v', 't_1', 't_1', 't_1', 't_1', 'أندوري', 't_1', 't_1@gmail.com', 't_1', '0', '', '0', '0', '', 'الامارات العربية المتحدة', 't_1', 0, '2022-04-19 08:08:02', '2022-04-19 08:08:02'),
(34, 2, 'eight', NULL, 'HorseX (1).pdf', 'test.png', 'Test_image.jpg', '2022-04-12', 'kn', 'J', 'k', 'kn', 'khk', 'جزائري', 'kn', 'kn@gail.com', 'jk', '0', '', '0', '0', '', 'أفغانستان', 'dml`', 0, '2022-04-19 08:15:11', '2022-04-19 08:15:11'),
(35, 2, 'eight', NULL, 'HorseX (1).pdf', 'test.png', 'Test_image.jpg', '2022-04-12', 'kn', 'J', 'k', 'kn', 'khk', 'جزائري', 'kn', 'kn@gail.com', 'jk', '0', '', '0', '0', '', 'أفغانستان', 'dml`', 0, '2022-04-19 08:18:06', '2022-04-19 08:18:06'),
(36, 2, 'eight', 'HorseX (1).pdf', 'HorseX (1).pdf', 'shafitechlogo.png', 'led_light.jpg', '2022-04-12', 'let', 'let', 'let', 'let', 'let', 'انتيغوا', 'let', 'let@gmail.com', 'let', '0', '', '0', '0', '', 'الفاتيكان', 'let', 0, '2022-04-19 08:35:04', '2022-04-19 08:35:04'),
(37, 2, 'six', 'Document1.pdf', 'Document1.pdf', 'halal 4.png', 'Screenshot at Jan 05 02-17-15.png', '2022-04-05', 'wewew', 'ewwewe', 'weewewe', 'wwwwewew', 'ewwe', 'أفغاني', 'ewww', 'wewe@gmail.com', 'wewe', '0', '', '0', '0', '', 'أندورا', 'ewewe', 0, '2022-04-19 09:04:07', '2022-04-19 09:04:07'),
(38, 2, 'seven', 'Document1.pdf', 'Document1.pdf', 'Screenshot at Apr 09 13-25-10.png', 'Screenshot at Apr 09 13-25-10.png', '2022-04-13', 'sdasdasd', 'adsasda', 'dfasdas', 'erwere', 'rwere', 'بربودا', 'fewrwe', 'sdfsdfsd@gmail.com', 'sdfsdfsd', '0', '', '0', '0', '', 'جزر أولان', 'dfdsfsdf', 0, '2022-04-19 09:08:51', '2022-04-19 09:08:51'),
(39, 2, 'five', 'Document1.pdf', 'Document1.pdf', 'Screenshot at Apr 09 13-25-10.png', 'Screenshot at Apr 09 13-25-10.png', '2022-04-12', 'werwerw', 'werwerwe', 'wrwerwerwer', 'ewrwerwerwer', 'erwer', 'بربودا', 'erewr', 'dsad@gmail.com', 'asdasd', '0', '', '0', '0', '', 'أندورا', 'asadsdas', 0, '2022-04-19 09:10:12', '2022-04-19 09:10:12'),
(40, 2, 'first', 'Document1.pdf', 'Document1.pdf', 'Screenshot at Apr 09 13-25-10.png', 'Screenshot at Apr 09 13-25-10.png', '2022-04-19', 'qweqwe', 'eqwqeqwe', 'qweqweqwe', 'weqweqwe', 'eqwe', 'بحريني', 'qweqw', 'sdf@gmail.com', 'dfsd', '0', '', '0', '0', '', 'أندورا', 'dd', 0, '2022-04-19 09:11:27', '2022-04-19 09:11:27'),
(41, 2, 'six', 'Document1.pdf', 'Document1.pdf', 'Screenshot at Apr 09 13-25-10.png', 'Screenshot at Apr 09 13-25-10.png', '2022-04-20', 'vxcvxc', 'vxcvxcv', 'xcvxcvxcvxcvxc', 'xvxcvxcvcx', 'fgdfgdf', 'بنجلاديشي', 'fgf', 'erwe@gmail.com', 'rwer', '0', '', '0', '0', '', 'lahore', '1111111', 0, '2022-04-19 09:14:20', '2022-04-19 09:14:20'),
(42, 2, 'eight', 'Document1.pdf', 'Document1.pdf', 'Screenshot at Apr 09 13-25-10.png', 'Screenshot at Apr 09 13-25-10.png', '2022-04-19', 'fsdfsdfs', 'dfsfsdfs', 'sdfsdfsdfsdfsfdsfsfsdfsdfdsfds', 'dfsdfsdfsdfsdfsdfsdfdsfs', 'sdfsdf', 'أفغاني', 'fsdf', 'rtyrt@gmail.com', 'yryrt', '0', '', '0', '0', '', 'أندورا', 'yrtyrty', 0, '2022-04-19 09:17:07', '2022-04-19 09:17:07'),
(43, 2, 'six', 'HorseX (1) (3).pdf', 'HorseX (1) (3).pdf', 'Test_image.jpg', 'test.png', '2022-04-12', 'six', 'six', 'six', 'six', 'six', 'ألباني', 'six', 'six@gmail.com', 'six', '0', '', '0', '0', '', 'six', 'six', 0, '2022-04-19 10:08:29', '2022-04-19 10:08:29'),
(44, 2, 'six', 'Balancesheet (1).pdf', 'HorseX (1) (3).pdf', 'test.png', 'Test_image.jpg', '2022-04-12', 'ss1', 'ss1', 'ss1', 'ss1', 'ss1', 'أفغاني', 'ss1', 'ss1@gmail.com', '0987654321', '0', '', '0', '0', '', 'ss1', 'ss1', 0, '2022-04-19 10:33:04', '2022-04-19 10:33:04'),
(45, 2, 'six', 'Document1.pdf', 'Document1.pdf', 'Screenshot at Apr 09 13-25-10.png', 'Screenshot at Apr 09 13-25-10.png', '2022-04-13', 'dfgdf', 'fgdfg', 'gdfgdfgd', 'fdgdfgdfg', 'vbnvbnvbn', 'باربادوسي', 'vnvbnvbn', 'bnvbnvbn@gmail.com', 'nbvnvbn', '0', '', '0', '0', '', 'nvbnvbn', 'nvbnvbn', 0, '2022-04-20 03:28:34', '2022-04-20 03:28:34'),
(46, 2, 'six', 'Document1.pdf', 'Document1.pdf', 'Screenshot at Apr 09 13-25-10.png', 'Screenshot at Apr 09 13-25-10.png', '2022-04-19', 'sdasda', 'sdasd', 'asdasdasda', 'dasdasdsdas', 'dasdas', 'أسترالي', 'asdasd', 'dasd@gmail.com', 'sdasd', '0', '', '0', '0', '', 'lahore', 'sidra', 0, '2022-04-20 03:30:33', '2022-04-20 03:30:33'),
(47, 2, 'seven', 'HorseX (1) (2).pdf', 'HorseX (1) (3).pdf', 'Test_image.jpg', 'test.png', '2022-04-13', 'test_7', 'test_7', 'test_7', 'test_7', 'test_7', 'ألباني', 'test_7', 'test_7@gmail.com', '0987654', 'null', 'null', 'null', 'null', 'null', 'test_7', 'test_7', 0, '2022-04-20 05:46:35', '2022-04-20 05:46:35'),
(48, 2, 'six', 'Document1.pdf', 'Document1.pdf', 'Screenshot at Apr 09 13-25-10.png', 'Screenshot at Apr 09 13-25-10.png', '2022-04-20', 'sdfsdf', 'fsdfs', 'fsdfsdfsd', 'dfsdfdsfsdfds', 'dfsdf', 'أفغاني', 'fdsf', 'sfsdf@gmail.com', 'fsdf', 'null', 'null', 'null', 'null', 'null', 'lahore', 'sidraaa', 0, '2022-04-20 05:51:12', '2022-04-20 05:51:12'),
(49, 2, 'six', 'HorseX (1) (2).pdf', 'HorseX (1) (3).pdf', 'test.png', 'Test_image.jpg', '2022-04-13', 'test_u', 'test_u', 'test_u', 'test_u', 'test_u', 'أذربيجاني', 'test_u', 'test_u@gmail.com', '0987654', 'null', 'null', 'null', 'null', 'null', 'test_u', 'test_u', 0, '2022-04-20 05:51:37', '2022-04-20 05:51:37'),
(50, 2, 'six', 'HorseX (1) (2).pdf', 'HorseX (1) (2).pdf', 'test.png', 'Test_image.jpg', '2022-04-13', 'test_u1', 'test_u1', 'test_u1', 'test_u1', 'test_u1', NULL, 'test_u1', 'test_u1@gmail.com', '098765', '897654', 'test_u1', '29', '897654', 'test_u1@gmail.com', 'test_u1', 'test_u1', 0, '2022-04-20 06:04:38', '2022-04-20 06:04:38'),
(51, 2, 'six', 'Document1.pdf', 'Document1.pdf', 'Screenshot at Apr 09 13-25-10.png', 'Screenshot at Apr 09 13-25-10.png', '2022-04-19', '1212', '21212', '12121212121221', '21121221', '211212', 'ألباني', '112', 'aa@gmail.com', 'ewrwer', '1221', 'rwerewr', '27', '1212', '1212@gmail.com', 'lahore', 'einnovention', 0, '2022-04-20 06:20:25', '2022-04-20 06:20:25'),
(52, 2, 'seven', 'Quotation 3D+.pdf', 'Quotation 3D+.pdf', 'favicon-neties.png', 'moc.png', '2022-04-18', 'sdtfg36', 'sd', 'sdfdsfg345765', 'lakshdflaskhflaksjhflkajshdflajikshdflfkjhsladkdhflakjshdflkjhaldshfljkahsdlfjk', '123', 'تركي', 'asd', 'abc@gmail.com', '1234567890', '089798765764653', 'rao', '23', '321', 'uni@gmail.com', 'lahore', 'rzproduction', 0, '2022-04-20 07:29:27', '2022-04-20 07:29:27'),
(53, 2, 'five', 'myfile.pdf', 'Quotation 3D+.pdf', 'netis-logo (1).png', 'of-the-food-icons-vector (1).jpg', '2022-04-14', 'frfr', 'adsf', 'sdfasdf', 'dsfsd', '24345678', 'أسترالي', 'acsd', 'abc@gmail.com', '3025788489', 'null', 'null', 'null', 'null', 'null', 'أنجولا', 'rzproduction2', 0, '2022-04-20 07:43:04', '2022-04-20 07:43:04'),
(54, 2, 'five', 'Quotation 3D+.pdf', 'Quotation 3D+.pdf', 'angle-left-solid.svg', 'angle-left-solid (1).svg', '2022-04-10', 'dfhgdf', 'dfhgfgh2222', 'dtrhjdjgfgjfg8888', 'dfhgdfhgdfhgdf', '6545', 'جزائري', 'sd456', 'abc@gmail.com', '657564565654', 'null', 'null', 'null', 'null', 'null', 'فنزويلا', 'rzproduction3', 0, '2022-04-20 07:55:46', '2022-04-20 07:55:46'),
(55, 2, 'five', 'Quotation 3D+.pdf', 'myfile.pdf', 'angle-left-solid.svg', 'angle-left-solid (1).svg', '2022-04-07', 'fghbdfh', 'cxvb1111', 'fghjnfghnj', 'trhfg', 'sadcrtuy655555', 'نمساوي', 'ertyhert', 'abc@gmail.com', 'dfgdfg4564645', 'null', 'null', 'null', 'null', 'null', 'آروبا', 'rzproduction4', 0, '2022-04-20 08:15:33', '2022-04-20 08:15:33');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(100) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `message` varchar(1000) DEFAULT NULL,
  `created_at` varchar(1000) DEFAULT NULL,
  `updated_at` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `phone`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Elijah Hanson', 'Gisela Brock', 'derys@mailinator.com', 'Sed consectetur inve', '2022-05-23 14:57:01', '2022-05-23 14:57:01'),
(2, 'Arshad Faarsi', '03047299635', 'arshadfaarsi13@gmail.com', 'There is no reason to ask reason', '2022-05-23 15:27:05', '2022-05-23 15:27:05');

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
(1, 'أندورا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(2, 'الامارات العربية المتحدة', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(3, 'أفغانستان', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(4, 'أنتيجوا وبربودا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(5, 'أنجويلا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(6, 'ألبانيا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(7, 'أرمينيا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(8, 'أنجولا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(9, 'القطب الجنوبي', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(10, 'الأرجنتين', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(11, 'ساموا الأمريكية', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(12, 'النمسا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(13, 'أستراليا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(14, 'آروبا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(15, 'جزر أولان', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(16, 'أذربيجان', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(17, 'البوسنة والهرسك', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(18, 'بربادوس', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(19, 'بنجلاديش', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(20, 'بلجيكا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(21, 'بوركينا فاسو', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(22, 'بلغاريا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(23, 'البحرين', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(24, 'بوروندي', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(25, 'بنين', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(26, 'سان بارتيلمي', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(27, 'برمودا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(28, 'بروناي', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(29, 'بوليفيا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(30, 'بونير', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(31, 'البرازيل', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(32, 'الباهاما', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(33, 'بوتان', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(34, 'جزيرة بوفيه', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(35, 'بتسوانا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(36, 'روسيا البيضاء', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(37, 'بليز', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(38, 'كندا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(39, 'جزر كوكوس', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(40, 'جمهورية الكونغو الديمقراطية', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(41, 'جمهورية افريقيا الوسطى', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(42, 'الكونغو - برازافيل', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(43, 'سويسرا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(44, 'ساحل العاج', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(45, 'جزر كوك', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(46, 'شيلي', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(47, 'الكاميرون', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(48, 'الصين', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(49, 'كولومبيا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(50, 'كوستاريكا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(51, 'كوبا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(52, 'الرأس الأخضر', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(53, 'كوراساو', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(54, 'جزيرة الكريسماس', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(55, 'قبرص', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(56, 'جمهورية التشيك', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(57, 'ألمانيا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(58, 'جيبوتي', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(59, 'الدانمرك', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(60, 'دومينيكا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(61, 'جمهورية الدومينيك', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(62, 'الجزائر', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(63, 'الاكوادور', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(64, 'استونيا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(65, 'مصر', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(66, 'الصحراء الغربية', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(67, 'اريتريا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(68, 'أسبانيا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(69, 'اثيوبيا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(70, 'فنلندا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(71, 'فيجي', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(72, 'جزر فوكلاند', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(73, 'ميكرونيزيا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(74, 'جزر فارو', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(75, 'فرنسا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(76, 'الجابون', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(77, 'المملكة المتحدة', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(78, 'جرينادا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(79, 'جورجيا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(80, 'غويانا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(81, 'غيرنزي', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(82, 'غانا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(83, 'جبل طارق', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(84, 'جرينلاند', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(85, 'غامبيا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(86, 'غينيا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(87, 'جوادلوب', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(88, 'غينيا الاستوائية', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(89, 'اليونان', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(90, 'جورجيا الجنوبية وجزر ساندويتش الجنوبية', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(91, 'جواتيمالا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(92, 'جوام', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(93, 'غينيا بيساو', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(94, 'غيانا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(95, 'هونج كونج الصينية', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(96, 'جزيرة هيرد وماكدونالد', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(97, 'هندوراس', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(98, 'كرواتيا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(99, 'هايتي', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(100, 'المجر', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(101, 'اندونيسيا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(102, 'أيرلندا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(103, 'اسرائيل', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(104, 'جزيرة مان', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(105, 'الهند', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(106, 'المحيط الهندي البريطاني', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(107, 'العراق', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(108, 'ايران', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(109, 'أيسلندا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(110, 'ايطاليا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(111, 'جيرسي', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(112, 'جامايكا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(113, 'الأردن', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(114, 'اليابان', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(115, 'كينيا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(116, 'قرغيزستان', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(117, 'كمبوديا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(118, 'كيريباتي', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(119, 'جزر القمر', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(120, 'سانت كيتس ونيفيس', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(121, 'كوريا الشمالية', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(122, 'كوريا الجنوبية', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(123, 'الكويت', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(124, 'جزر الكايمن', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(125, 'كازاخستان', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(126, 'لاوس', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(127, 'لبنان', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(128, 'سانت لوسيا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(129, 'ليختنشتاين', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(130, 'سريلانكا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(131, 'ليبيريا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(132, 'ليسوتو', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(133, 'ليتوانيا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(134, 'لوكسمبورج', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(135, 'لاتفيا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(136, 'ليبيا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(137, 'المغرب', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(138, 'موناكو', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(139, 'مولدافيا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(140, 'الجبل الأسود', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(141, 'سانت مارتين', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(142, 'مدغشقر', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(143, 'جزر المارشال', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(144, 'مقدونيا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(145, 'مالي', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(146, 'ميانمار', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(147, 'منغوليا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(148, 'ماكاو الصينية', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(149, 'جزر ماريانا الشمالية', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(150, 'مارتينيك', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(151, 'موريتانيا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(152, 'مونتسرات', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(153, 'مالطا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(154, 'موريشيوس', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(155, 'جزر الملديف', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(156, 'ملاوي', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(157, 'المكسيك', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(158, 'ماليزيا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(159, 'موزمبيق', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(160, 'ناميبيا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(161, 'كاليدونيا الجديدة', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(162, 'النيجر', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(163, 'جزيرة نورفوك', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(164, 'نيجيريا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(165, 'نيكاراجوا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(166, 'هولندا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(167, 'النرويج', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(168, 'نيبال', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(169, 'نورو', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(170, 'نيوي', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(171, 'نيوزيلاندا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(172, 'عمان', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(173, 'بنما', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(174, 'بيرو', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(175, 'بولينيزيا الفرنسية', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(176, 'بابوا غينيا الجديدة', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(177, 'الفيلبين', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(178, 'باكستان', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(179, 'بولندا', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(180, 'سانت بيير وميكولون', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(181, 'بتكايرن', '2022-03-12 14:12:27', '2022-03-12 14:12:27'),
(182, 'بورتوريكو', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(183, 'فلسطين', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(184, 'البرتغال', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(185, 'بالاو', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(186, 'باراجواي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(187, 'قطر', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(188, 'روينيون', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(189, 'رومانيا', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(190, 'صربيا', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(191, 'روسيا', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(192, 'رواندا', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(193, 'المملكة العربية السعودية', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(194, 'جزر سليمان', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(195, 'سيشل', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(196, 'السودان', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(197, 'السويد', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(198, 'سنغافورة', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(199, 'سانت هيلنا', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(200, 'سلوفينيا', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(201, 'سفالبارد وجان مايان', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(202, 'سلوفاكيا', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(203, 'سيراليون', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(204, 'سان مارينو', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(205, 'السنغال', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(206, 'الصومال', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(207, 'سورينام', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(208, 'جنوب السودان', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(209, 'ساو تومي وبرينسيبي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(210, 'السلفادور', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(211, 'سينت مارتن', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(212, 'سوريا', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(213, 'سوازيلاند', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(214, 'جزر الترك وجايكوس', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(215, 'تشاد', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(216, 'المقاطعات الجنوبية الفرنسية', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(217, 'توجو', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(218, 'تايلند', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(219, 'طاجكستان', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(220, 'توكيلو', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(221, 'تيمور الشرقية', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(222, 'تركمانستان', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(223, 'تونس', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(224, 'تونجا', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(225, 'تركيا', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(226, 'ترينيداد وتوباغو', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(227, 'توفالو', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(228, 'تايوان', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(229, 'تانزانيا', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(230, 'أوكرانيا', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(231, 'أوغندا', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(232, 'جزر الولايات المتحدة البعيدة الصغيرة', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(233, 'الولايات المتحدة الأمريكية', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(234, 'أورجواي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(235, 'أوزبكستان', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(236, 'الفاتيكان', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(237, 'سانت فنسنت وغرنادين', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(238, 'فنزويلا', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(239, 'جزر فرجين البريطانية', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(240, 'جزر فرجين الأمريكية', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(241, 'فيتنام', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(242, 'فانواتو', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(243, 'جزر والس وفوتونا', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(244, 'ساموا', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(245, 'كوسوفو', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(246, 'اليمن', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(247, 'مايوت', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(248, 'جمهورية جنوب افريقيا', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(249, 'زامبيا', '2022-03-12 14:12:28', '2022-03-12 14:12:28');

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
(10, '2022_02_28_090804_create_nations_table', 1);

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
(1, 'أفغاني', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(2, 'ألباني', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(3, 'جزائري', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(4, 'أمريكي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(5, 'أندوري', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(6, 'أنغولي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(7, 'انتيغوا', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(8, 'أرجنتيني', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(9, 'أرميني', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(10, 'أسترالي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(11, 'نمساوي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(12, 'أذربيجاني', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(13, 'باهامى', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(14, 'بحريني', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(15, 'بنجلاديشي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(16, 'باربادوسي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(17, 'بربودا', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(18, 'بوتسواني', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(19, 'بيلاروسي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(20, 'بلجيكي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(21, 'بليزي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(22, 'بنيني', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(23, 'بوتاني', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(24, 'بوليفي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(25, 'بوسني', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(26, 'برازيلي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(27, 'بريطاني', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(28, 'بروناى', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(29, 'بلغاري', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(30, 'بوركيني', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(31, 'بورمي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(32, 'بوروندي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(33, 'كمبودي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(34, 'كاميروني', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(35, 'كندي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(36, 'االرأس الأخضر', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(37, 'وسط أفريقيا', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(38, 'تشادي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(39, 'شيلي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(40, 'صينى', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(41, 'كولومبي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(42, 'جزر القمر', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(43, 'كونغولي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(44, 'كوستاريكي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(45, 'كرواتية', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(46, 'كوبي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(47, 'قبرصي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(48, 'تشيكي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(49, 'دانماركي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(50, 'جيبوتي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(51, 'دومينيكاني', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(52, 'هولندي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(53, 'تيموري شرقي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(54, 'اكوادوري', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(55, 'مصري', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(56, 'إماراتي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(57, 'غيني  استوائي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(58, 'إريتري', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(59, 'إستوني', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(60, 'حبشي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(61, 'فيجي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(62, 'فلبيني', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(63, 'فنلندي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(64, 'فرنسي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(65, 'جابوني', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(66, 'غامبيي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(67, 'جورجي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(68, 'ألماني', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(69, 'غاني', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(70, 'إغريقي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(71, 'جرينادي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(72, 'غواتيمالي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(73, 'غيني بيساوي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(74, 'غيني', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(75, 'جوياني', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(76, 'هايتي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(77, 'هرسكي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(78, 'هندوراسي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(79, 'هنغاري', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(80, 'إيسلندي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(81, 'هندي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(82, 'إندونيسي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(83, 'إيراني', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(84, 'عراقي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(85, 'إيرلندي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(86, 'إيطالي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(87, 'إفواري', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(88, 'جامايكي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(89, 'ياباني', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(90, 'أردني', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(91, 'كازاخستاني', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(92, 'كيني', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(93, 'كيتياني ونيفيسياني', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(94, 'كويتي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(95, 'قيرغيزستان', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(96, 'لاوسي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(97, 'لاتفي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(98, 'لبناني', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(99, 'ليبيري', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(100, 'ليبي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(101, 'ليختنشتايني', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(102, 'لتواني', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(103, 'لكسمبرغي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(104, 'مقدوني', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(105, 'مدغشقري', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(106, 'مالاوى', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(107, 'ماليزي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(108, 'مالديفي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(109, 'مالي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(110, 'مالطي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(111, 'مارشالي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(112, 'موريتاني', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(113, 'موريشيوسي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(114, 'مكسيكي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(115, 'ميكرونيزي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(116, 'مولدوفي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(117, 'موناكو', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(118, 'منغولي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(119, 'مغربي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(120, 'ليسوتو', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(121, 'لتسواني', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(122, 'موزمبيقي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(123, 'ناميبي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(124, 'ناورو', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(125, 'نيبالي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(126, 'نيوزيلندي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(127, 'ني فانواتي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(128, 'نيكاراغوا', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(129, 'نيجري', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(130, 'كوري شمالي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(131, 'إيرلندي شمالي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(132, 'نرويجي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(133, 'عماني', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(134, 'باكستاني', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(135, 'بالاوي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(136, 'فلسطيني', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(137, 'بنمي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(138, 'بابوا غينيا الجديدة', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(139, 'باراغواياني', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(140, 'بيروفي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(141, 'بولندي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(142, 'برتغالي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(143, 'قطري', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(144, 'روماني', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(145, 'روسي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(146, 'رواندي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(147, 'لوسياني', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(148, 'سلفادوري', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(149, 'ساموايان', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(150, 'سان مارينيز', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(151, 'ساو توميان', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(152, 'سعودي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(153, 'سكتلندي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(154, 'سنغالي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(155, 'صربي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(156, 'سيشلي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(157, 'سيرا ليوني', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(158, 'سنغافوري', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(159, 'سلوفاكي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(160, 'سلوفيني', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(161, 'جزر سليمان', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(162, 'صومالي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(163, 'جنوب افريقيي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(164, 'كوري جنوبي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(165, 'إسباني', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(166, 'سري لانكي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(167, 'سوداني', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(168, 'سورينامي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(169, 'سوازي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(170, 'سويدي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(171, 'سويسري', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(172, 'سوري', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(173, 'تايواني', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(174, 'طاجيكي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(175, 'تنزاني', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(176, 'التايلاندي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(177, 'توغواني', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(178, 'تونجاني', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(179, 'ترينيدادي أو توباغوني', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(180, 'تونسي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(181, 'تركي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(182, 'توفالي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(183, 'أوغندي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(184, 'أوكراني', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(185, 'أوروجواي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(186, 'أوزبكستاني', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(187, 'فنزويلي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(188, 'فيتنامي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(189, 'ويلزي', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(190, 'يمني', '2022-03-12 14:12:28', '2022-03-12 14:12:28'),
(191, 'زامبي', '2022-03-12 14:12:28', '2022-03-12 14:12:28');

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
  `id` int(100) NOT NULL,
  `video` varchar(200) DEFAULT NULL,
  `image1` varchar(200) DEFAULT NULL,
  `image2` varchar(200) DEFAULT NULL,
  `image3` varchar(200) DEFAULT NULL,
  `image4` varchar(200) DEFAULT NULL,
  `image5` varchar(200) DEFAULT NULL,
  `image6` varchar(200) DEFAULT NULL,
  `year` varchar(100) DEFAULT NULL,
  `created_at` varchar(1000) DEFAULT NULL,
  `updated_at` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `video`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `year`, `created_at`, `updated_at`) VALUES
(1, '1653311360734.mp4', 'IMG_1721.jpg', 'IMG_1722.jpg', 'IMG_1717.jpg', 'IMG_1718.jpg', 'IMG_1722.jpg', 'IMG_1708.jpg', '2019', '2022-05-23 15:03:18', '2022-05-23 15:49:14'),
(2, NULL, 'IMG_1721.jpg', 'IMG_1722.jpg', 'IMG_1717.jpg', 'IMG_1718.jpg', 'A17I3897.jpg', 'IMG_1715.jpg', '2020', '2022-05-23 15:17:08', '2022-05-23 15:48:14');

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
(1, 'admin', NULL, 'admin1', 'admin@admin.com', NULL, '$2y$10$4KDfvp7a6A0ZSFhwnq3bte5YFJ629Fwszysyq237GKRmZ3iANdDoS', NULL, '2022-03-12 14:12:26', '2022-03-12 14:12:26'),
(2, 'admin2', NULL, 'admin2', 'admin2@admin2.com', NULL, '$2y$10$Pvx6JhpmpsTDEXzX1vHYLuklWZX4XQhIezhiCjn4SgHf76PeLNC4O', NULL, '2022-03-12 14:12:27', '2022-03-12 14:12:27');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
