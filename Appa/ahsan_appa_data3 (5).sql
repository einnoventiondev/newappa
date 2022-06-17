-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 17, 2022 at 09:56 AM
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
-- Database: `ahsan_appa_data3`
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
  `about` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idNumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inputNationality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inputName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inputEmail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phoneNumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orgniztionName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accept` int(11) NOT NULL DEFAULT 0,
  `sung_poem` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `singer_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `composer_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_registration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `song` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `competitions`
--

INSERT INTO `competitions` (`id`, `type`, `form`, `letter`, `publishedWorks`, `candidateImage`, `passportimages`, `release`, `place`, `title`, `relation`, `about`, `idNumber`, `inputNationality`, `inputName`, `inputEmail`, `phoneNumber`, `state`, `orgniztionName`, `accept`, `sung_poem`, `singer_name`, `composer_name`, `date_of_registration`, `song`, `created_at`, `updated_at`) VALUES
(5, 1, 'five', NULL, '1653908217.pdf', '1653908217.png', '1653908217.png', '2022-05-06', 'تجربة', 'تجربة', NULL, 'تجررربة', '1011887283', 'سعودي', 'عبدالله الشهري', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2022-05-30 07:56:57', '2022-05-30 07:56:57'),
(7, 2, 'five', '1653937512.pdf', '1653937512.pdf', '1653937512.jpeg', '1653937512.jpeg', '2022-05-01', 'رقش للنشر والتوزيع', 'البوصلة بلا شمال', 'ديوان البوصلة بلا شمال ديوان جديد يستحق الترشيح', 'الشاعر سلطان الضيط الحاصل على لقب أمير الشعراء للموسم التاسع', '1083909182', 'سعودي', 'سلطان بن سعود بن تركي الضيط', 'info@raqash.org', '0546095323', 'المملكة العربية السعودية', 'دار رقش للنشر والتوزيع', 0, NULL, NULL, NULL, NULL, NULL, '2022-05-30 16:05:12', '2022-05-30 16:05:12'),
(8, 1, 'five', NULL, '1653949098.pdf', '1653949098.pdf', '1653949098.pdf', '2021-12-20', 'دار خطوط وظلال - الأردن - عمَّان', 'أفسر قلق الريح', NULL, 'شاعر وصيدلاني سوري.\r\nمواليد: دير الزور (11\\8\\ 1973).', '27376001804', 'سوري', 'عمر جلال الدين هزاع', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2022-05-30 19:18:18', '2022-05-30 19:18:18'),
(9, 1, 'second', NULL, '1653956405.pdf', '1653956405.jpg', NULL, '2022-05-31', 'لاتوجد', 'أوبريت ( أسراب الرياض )      احتفاء بالذكرى الأولى ليوم التأسيس          ٢٢ فبراير ١٧٢٧ م', NULL, 'معلم ، عضو نادي جازان الأدبي ، له ثلاث إصدارات ،شارك في فعاليات متنوعة ، متزوج وأب لأربعة أبناء ، لازال على رأس العمل ، ويعتبر من ذوي الهمم ( الاحتياجات الخاصة) كونه يعاني من حدب حنفي شديد في الظهر والسداد رئوي مزمن', '1045163811', 'سعودي', 'جبران محمد علي قحل', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2022-05-30 21:20:05', '2022-05-30 21:20:05'),
(10, 1, 'second', NULL, '1653965769.pdf', '1653965769.jpg', '1653965769.jpg', '2021-06-01', 'مجلة الصقيلة', 'اقتربي', NULL, 'كاتب وباحث في مجال الأدب والفنون والنقد', '134368', 'مغربي', 'عبد اللطيف السعيدي بن عمر', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2022-05-30 23:56:09', '2022-05-30 23:56:09'),
(11, 1, 'second', NULL, '1653965951.pdf', '1653965951.jpg', '1653965951.jpg', '2021-06-02', 'الصقيلة', 'اقتربي', NULL, 'كاتب وباحث في مجال الأدب والفنون والنقد', '134368', 'مغربي', 'عبد اللطيف السعيدي بن عمر', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2022-05-30 23:59:11', '2022-05-30 23:59:11'),
(12, 1, 'five', NULL, '1653979767.pdf', '1653979767.jpg', NULL, '2021-11-01', 'الهيئة المصرية العامة للكتاب', 'أساطير ومكابدات. بحث عن مكمن الطير الذهبيّ', NULL, 'شاعر مصري\r\nمواليد 1984', '208409091501458', 'مصري', 'وليد صابر محمود شرشير', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2022-05-31 03:49:27', '2022-05-31 03:49:27'),
(13, 1, 'five', NULL, '1654011251.pdf', '1654011251.pdf', '1654011251.jpg', '2021-09-11', 'ضمة', 'حدائق الرّماد', NULL, 'شاعر جزائري له ثلاث إصدارات شعريّة ، و له العديد من الجوائز على المستوى الوطني ، شارك في نهائيات الموسم التّاسع لمسابقة أمير الشعراء.', '101524318', 'جزائري', 'مصعب تقي الدين بن عمار', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2022-05-31 12:34:11', '2022-05-31 12:34:11'),
(14, 1, 'five', NULL, '1654022575.pdf', '1654022575.docx', '1654022575.jpg', '2019-02-28', 'مؤسسة يسطرون للطباعة والنشر والتوزيع بالتعاون مع مركز عماد قطري للإبداع والتنمية الثقافية – الطبعة الأولى – 2019  – جمهورية مصر العربية -', 'القدس صبارة الروح', NULL, '• ولد في محافظة حماة مدينة / محردة / ريف حماة 12 تموز 1963م\r\n• تخرج من جامعة حلب – كلية الآداب قسم اللغة العربية ، وعمل مدرِّسا ً للغة العربية منذ   1993م وما يزال حتى الآن على رأس عمله .', '05200006489', 'سوري', 'مفيد فهد نبزو', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2022-05-31 15:42:55', '2022-05-31 15:42:55'),
(15, 1, 'five', NULL, '1654045221.pdf', '1654045221.jpg', '1654045221.jpg', '2022-06-01', 'لا توجد', 'مجرد فضفضة', NULL, 'محمد السيد محمد كلية الاقتصاد والعلوم السياسية قسم العلوم السياسية السن 20 عام كاتب ديوان بعنوان مجرد فضفضة ورواية مع بعض لآخر العمر في معرض القاهرة الدولي للكتاب 2020م وكاتب كتاب عن الأزمة الروسية الأوكرانية', '30211191400874', 'مصري', 'محمد السيد محمد السيد', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2022-05-31 22:00:21', '2022-05-31 22:00:21'),
(20, 1, 'second', NULL, '1654083701.pdf', '1654083701.jpeg', '1654083701.jpeg', '2022-06-01', 'غير منشورة', 'قصيدة طاف الفؤاد', NULL, 'قصيدة مغناة عن الحج', '29007010111912', 'مصري', 'محمد إبراهيم فرغل حسن', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2022-06-01 08:41:41', '2022-06-01 08:41:41'),
(21, 1, 'second', NULL, '1654084761.pdf', '1654084761.jpeg', '1654084761.jpeg', '2022-06-01', 'غير منشورة', 'قصيدة طاف الفؤاد', NULL, 'محمد فرغلي \r\nشاعر مصري', '29007010111912', 'مصري', 'محمد إبراهيم فرغل حسن', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2022-06-01 08:59:21', '2022-06-01 08:59:21'),
(22, 1, 'five', NULL, NULL, '1654110198.jpg', NULL, '2005-08-23', 'مطبعة النهضة العربية _القاهرة', 'لمن العبير و ديوان المنن الإلهية في الشمائل المحمدية', NULL, 'يعمل بوزارة التعليم \r\nله ديوانين شعر بالفصحى \r\nنشر قصائده بجريدة \r\nالمدينة المنورة \r\nعكاظ \r\nالبلاد\r\nله عدة بمشاركات', '1051255055', 'سعودي', 'خالد بن حسين محمد الحكمي', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2022-06-01 16:03:19', '2022-06-01 16:03:19'),
(23, 2, 'eight', '1654110971.jpg', NULL, '1654110971.jpg', NULL, '2005-08-23', 'مطبعة النهضة العربية _القاهرة', 'لمن العبير و ديوان المنن الإلهية في الشمائل المحدية', 'يعمل بوزارة التعليم \r\nله ديوانين شعر بالفصحى \r\nلمن العبير و ديوان المنن الإلهية في الشمائل المحمدية \r\nنشر قصائده بجريدة \r\nالمدينة المنورة \r\nعكاظ \r\nالبلاد\r\nله عدة مشاركات', 'يعمل بوزارة التعليم \r\nله ديوانين شعر بالفصحى \r\nلمن العبير و ديوان المنن الإلهية في الشمائل المحمدية', '1051255055', 'سعودي', 'خالد بن حسين محمد الحكمي', 'kh_alhakamy@yahoo.com', '0539366641', 'المملكة العربية السعودية', 'وزارة التعليم', 0, NULL, NULL, NULL, NULL, NULL, '2022-06-01 16:16:11', '2022-06-01 16:16:11'),
(24, 1, 'five', NULL, '1654115176.pdf', '1654115176.jpg', '1654115176.jpg', '2021-03-25', 'يسترون', 'أبو الطيب المصري', NULL, 'ديوان شعر فصيح بعنوان\r\n( أبو الطيب المصري )\r\nصادر عن دار يسطرون للنشر والتوزيع في مارس 2021', '27571504', 'مصري', 'عبدالله عبدالعزيز عبدالعزيز الشوربجي', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2022-06-01 17:26:16', '2022-06-01 17:26:16'),
(25, 1, 'five', NULL, '1654115342.pdf', '1654115342.jpg', '1654115342.jpg', '2021-03-25', 'يسطرون', 'أبو الطيب المصري', NULL, 'ديوان شعر فصيح بعنوان\r\n( أبو الطيب المصري )\r\nصادر عن دار يسطرون للنشر والتوزيع في مارس 2021', '27571504', 'مصري', 'عبدالله عبدالعزيز عبدالعزيز الشوربجي', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2022-06-01 17:29:02', '2022-06-01 17:29:02'),
(27, 1, 'five', NULL, '1654173550.pdf', '1654173550.jpg', '1654173550.jpg', '2021-12-11', 'دار ارتقاء', 'ساحرة الفؤاد', NULL, 'شاعر مصري شاب من مواليد ١٩٩٤ في احدي قري محافظة المنيا و هي قرية بني سالم  و حلصل علي ليسانس اداب في الدراسات السكانية من احدي الجامعات المصرية و بدا الكتابة و هو في سن التاسعة .', '29412112402913', 'مصري', 'سامح فكري رتيب مسعد', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2022-06-02 09:39:10', '2022-06-02 09:39:10'),
(28, 1, 'five', NULL, '1654206059.pdf', '1654206059.pdf', '1654206059.jpg', '2020-07-01', 'نادي حائل الأدبي- دار المفردات', 'رحيل.. آخره التفات', NULL, 'صدر لي ثلاثة دواوين شعرية،\r\nوفزتُ بجملة من تالجوائز، منها: جائزة راشد بن حميد، وجائزة الأمير فيصل بن فهد للإبداع، وجائزة نادي الباحة.', '1047385040', 'سعودي', 'سعود سليمان عبداله اليوسف', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2022-06-02 18:40:59', '2022-06-02 18:40:59'),
(29, 1, 'five', NULL, '1654278281.pdf', '1654278281.docx', '1654278281.jpg', '2021-12-05', 'شركة تكوين للطباعة والنشر والتوزيع', 'مطر على أرْصفة الشّمال', NULL, 'سعد بن مقبل الثابتي , شاعر سعودي , بكالوريوس لغة عربية , معلم لغة عربية , لي العديد من المشاركات الشعرية في الأندية الأدبية والمناسبات الوطنية .\r\nصدر لي ديوان ( مرايا القدر ) 2017\r\nصدر لي ديوان ( مطر على أرصفة الشمال ) 2021م', '1126961117', 'سعودي', 'سعد مقبل ويدان الثابتي الشمري', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2022-06-03 14:44:41', '2022-06-03 14:44:41'),
(30, 1, 'five', NULL, '1654327525.pdf', '1654327525.jpg', '1654327525.jpg', '2022-03-10', 'اقتباس للنشر الحديث', '... ولو ألقيتُ معاذيري', NULL, 'شريف محمد شريف \r\nمدرس أول اللغة العربية بمصر\r\nحاصل على ماجستير،  وباحث دكتوراه \r\nمشارك في معرض القاهرة الدولي للكتاب \r\nجوال / 00201003390079', '1501091', 'مصري', 'شريف محمد شريف محمد', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2022-06-04 04:25:25', '2022-06-04 04:25:25'),
(31, 1, 'five', NULL, '1654377631.pdf', '1654377631.jpg', '1654377631.jpeg', '2021-03-25', 'يسطرون', 'أبو الطيب المصري', NULL, 'ديوان شعر فصيح بعنوان أبوالطيب المصري', '27571504', 'مصري', 'عبدالله عبدالعزيز عبدالعزيز الشوربجي', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2022-06-04 18:20:31', '2022-06-04 18:20:31'),
(32, 1, 'five', NULL, '1654410531.pdf', '1654410531.png', '1654410531.png', '2021-11-03', 'دار تكوين للطباعة والنشر', 'الثلاثون', NULL, 'مواليد محافظة بلقرن عام 1407 للهجرة\r\nخريج كلية اللغة العربية بجامعة الملك خالد\r\nأعمل حاليا موظف في المحكمة العامة بمحافظة بلقرن\r\nحصلت على العديد من الجوائز الشعرية والأدبية وقد ذكرتها في الملف الخاص بالسيرة الذاتية .', '1044795613', 'سعودي', 'محمد فائز سعيد القرني', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2022-06-05 03:28:51', '2022-06-05 03:28:51'),
(33, 1, 'first', NULL, '1654410980.pdf', '1654410980.png', '1654410980.png', '2021-11-03', 'دار تكوين للطباعة والنشر', 'الثلاثون', NULL, 'مواليد عام 1407 بمحافظة بلقرن\r\nاعمل حاليا موظف بالمحكمة العامة بمحافظة بلقرن\r\nحصلت على العديد من الجوائز الشعرية وقد اوضحتها بملف السيرة الذاتية المرفق', '1044795613', 'سعودي', 'محمد فائز سعيد القرني', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2022-06-05 03:36:20', '2022-06-05 03:36:20'),
(36, 1, 'five', NULL, '1654495057.pdf', '1654495057.doc', '1654495057.jpg', '2021-06-10', 'دار الخليج', 'نهر لشجر العاشق', NULL, 'ولد في القدس وله العديد من الدواوين الموجهة للكبار  وحصل على العديد من الجوائز \r\nاشرف على تحرير عدد المجلات واصدر العديد من الكتب الموجهة للطفل \r\nعضو رابطة الكتاب الاردنيين \r\n\r\nملاحظة مرفق سيرة ذاتية', 'o661950', 'أردني', 'علي محمد محمود قطوش', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2022-06-06 01:57:37', '2022-06-06 01:57:37'),
(44, 1, 'five', NULL, '1654591322.pdf', '1654591322.png', '1654591322.png', '2022-01-27', 'المسك للنشر والتوزيع- القاهرة', 'ينمو بحذر', NULL, 'شاعر  وسيناريست سوداني له عدد من الإصدارات الأدبية بالإضافة إلى أعمال تلفزيونية مختلفة: دراما، شارات برامج، فواصل، وغيرها من القوالب الفنية.', '008541732', 'سوداني', 'محمد حسن محمد السيد', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2022-06-07 04:42:02', '2022-06-07 04:42:02'),
(45, 1, 'five', NULL, '1654591556.pdf', '1654591556.png', '1654591556.png', '2022-01-27', 'المسك للنشر والتوزيع- القاهرة', 'ينمو بحذر', NULL, 'شاعر وسيناريست له عدد من الإصدارات الأدبية والأعمال التلفزيونية المتنوعة.', '008541732', 'سوداني', 'محمد حسن محمد السيد', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2022-06-07 04:45:56', '2022-06-07 04:45:56'),
(52, 1, 'five', NULL, '1654709022.pdf', '1654709022.pdf', '1654709022.jpg', '2020-11-07', 'أفاتار للطباعة والنشر', 'القُبلة إلى اليسار قليلًا', NULL, 'شاعر مصري..أصدرت عدة دواوين من الشعر الفصيح..منها\"وشم على كتف الحياة\" و\"رجمًا بالغيب\" و \"القُبلة إلى اليسار قليلا\"', '00201008117247', 'مصري', 'محمد حسن عبد السلام عبد المطلب', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2022-06-08 13:23:42', '2022-06-08 13:23:42'),
(83, 1, 'five', NULL, NULL, '1655155029.docx', '1655155029.jpg', NULL, NULL, NULL, NULL, 'البيانات الشخصية :\r\nسعد بن مقبل الثابتي الشمري\r\nتاريخ الميلاد 2 / 18 / 1986\r\nالمؤهل / بكالوريوس في اللغة العربية وآدابها .\r\nالجنسية / سعودي\r\nالمهنة / معلم لغة عربية .\r\nشاعر سعودي\r\nصدر لي ديوان مرايا القدر وديوان مطر على أرصفة الشمال ..', '1126961117', 'سعودي', 'سعد مقبل ويدان الثابتي الشمري', 'SAAD5670@HOTMAIL.COM', '0556765670', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2022-06-13 16:17:09', '2022-06-13 16:17:09'),
(84, 2, 'eight', '1655168886.pdf', NULL, '1655168886.png', '1655168886.jpg', NULL, NULL, NULL, 'مفاربة شعرها للنخبة العربية على مر العصور \r\nلغة وإبداعُا وغزارة المنتج الشعري\r\n والأساليب البلاعيةالدالة والصور الشعرية \r\nالمبتكرة في نسق لغوي بديع', 'شاعرة سعودية صدر لها ثمانية دواوين \r\nفازت بجايزة الشارقة لابداعات المراة الخليجية \r\nفي مجال الشعر من الشاعرات المؤثرات في\r\n المشهد الشعري السعودي والعربي', 'W713175', 'سعودي', 'مها محمد العتيبي', 'bal_alame@yahoo.com', '07711002790', 'العراق', 'سطور للنشر والتوزيع', 0, NULL, NULL, NULL, NULL, NULL, '2022-06-13 20:08:06', '2022-06-13 20:08:06'),
(95, 2, 'five', '1655265116.pdf', NULL, '1655265116.jpg', '1655265116.jpg', NULL, NULL, NULL, 'nnnnn', 'jg', '8765222', 'أندوري', '867aa', 'hms_1406@hotmail.com', '98765', 'ألبانيا', 'Eman', 0, NULL, NULL, NULL, NULL, NULL, '2022-06-14 22:51:56', '2022-06-14 22:51:56'),
(101, 2, 'eight', '1655393982.pdf', NULL, '1655393982.png', '1655393982.png', NULL, NULL, NULL, 'Doloribus corporis d', 'In aliqua Quia veli', '697', 'بوركيني', 'Kimberley Craig', 'dyqysysigy@mailinator.com', '413', 'بليز', 'poetic experice', 0, NULL, NULL, NULL, NULL, NULL, '2022-06-16 13:39:42', '2022-06-16 13:39:42'),
(102, 1, 'second', NULL, NULL, '1655394590.png', '1655394590.png', NULL, NULL, NULL, NULL, 'Reiciendis dolor fac', '162', 'وسط أفريقيا', 'Nita Reed', 'wytovewa@mailinator.com', '899', NULL, NULL, 0, 'Velit sunt porro v', 'Oren Evans', 'Armand Russell', '1972-06-12', '1655394590.png', '2022-06-16 13:49:50', '2022-06-16 13:49:50'),
(103, 2, 'second', '1655394801.pdf', NULL, '1655394801.png', '1655394801.png', NULL, NULL, NULL, 'Placeat non similiq', 'Nisi ea quae neque c', '647', 'إغريقي', 'Duncan Slater', 'ryryp@mailinator.com', '1000', 'سانت بيير وميكولون', 'Clark Dickerson', 0, 'Cum corrupti sint a', 'Velma Sanders', 'Branden Mcbride', '1987-05-20', '1655394801.png', '2022-06-16 13:53:21', '2022-06-16 13:53:21'),
(104, 1, 'first', NULL, NULL, '1655395342.png', '1655395342.png', NULL, NULL, NULL, NULL, 'Omnis quam neque dig', '203', 'تونسي', 'Chelsea Zamora', 'jyli@mailinator.com', '874', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2022-06-16 14:02:22', '2022-06-16 14:02:22'),
(105, 2, 'first', '1655395507.pdf', NULL, '1655395507.png', '1655395507.png', NULL, NULL, NULL, 'Autem est quis at et', 'Velit dolorum amet', '678', 'لاوسي', 'Sophia Gutierrez', 'dirapo@mailinator.com', '315', 'العراق', 'Kadeem Arnold', 0, NULL, NULL, NULL, NULL, NULL, '2022-06-16 14:05:07', '2022-06-16 14:05:07'),
(106, 2, 'eight', '1655395759.pdf', NULL, '1655395759.png', '1655395759.png', NULL, NULL, NULL, 'Fugiat est exercita', 'Deserunt cupiditate', '667', 'أوكراني', 'Charity Duffy', 'lihin@mailinator.com', '123', 'جرينلاند', 'Dai Bates', 0, NULL, NULL, NULL, NULL, NULL, '2022-06-16 14:09:19', '2022-06-16 14:09:19'),
(107, 1, 'five', NULL, NULL, '1655395916.png', '1655395916.png', NULL, NULL, NULL, NULL, 'Aliquip animi molli', '667', 'جيبوتي', 'Noelle Pierce', 'kucisig@mailinator.com', '528', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '2022-06-16 14:11:56', '2022-06-16 14:11:56'),
(108, 2, 'five', '1655396248.pdf', NULL, '1655396248.png', '1655396248.png', NULL, NULL, NULL, 'Molestiae ut quam re', 'Et nulla aut error v', '408', 'فنزويلي', 'Seth Church', 'lopikux@mailinator.com', '763', 'مونتسرات', 'Chaim Bradshaw', 0, NULL, NULL, NULL, NULL, NULL, '2022-06-16 14:17:28', '2022-06-16 14:17:28');

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

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'مريم بودهري', 'meriemboudehri@gmail.com', '0782588818', 'هل أستطيع المشاركة بشعر سبق لي نشره في كتاب؟', '2022-05-30 19:11:56', '2022-05-30 19:11:56'),
(2, 'عصام مهران', 'essammhran32@gmail.com', '002010155950', 'السلام عليكم ورحمة الله وبركاته \r\nعصام مهران _ مصر \r\n\r\nهل يمكن المشاركة بديوان شعر للأطفال مخطوط .\r\n\r\nتحياتى', '2022-05-30 19:26:37', '2022-05-30 19:26:37'),
(3, 'عصام مهران', 'essammhran32@gmail.com', '002010155950', 'السلام عليكم ورحمة الله وبركاته \r\nعصام مهران _ مصر \r\n\r\nهل يمكن المشاركة بديوان شعر للأطفال مخطوط .\r\n\r\nتحياتى', '2022-05-30 19:26:50', '2022-05-30 19:26:50'),
(4, 'عصام مهران', 'essammhran32@gmail.com', '002010155950', 'السلام عليكم ورحمة الله وبركاته \r\nعصام مهران _ مصر \r\n\r\nهل يمكن المشاركة بديوان شعر للأطفال مخطوط .\r\n\r\nتحياتى', '2022-05-30 19:26:53', '2022-05-30 19:26:53'),
(5, 'عصام مهران', 'essammhran32@gmail.com', '002010155950', 'السلام عليكم ورحمة الله وبركاته \r\nعصام مهران _ مصر \r\n\r\nهل يمكن المشاركة بديوان شعر للأطفال مخطوط .\r\n\r\nتحياتى', '2022-05-30 19:26:53', '2022-05-30 19:26:53'),
(6, 'محمود حامد', 'dopoetor@gmail.com', '00201093608271', 'السلام عليكم\r\nانا شاعر من مصر\r\nكيف اشترك ف المسابقة', '2022-05-30 19:36:54', '2022-05-30 19:36:54'),
(7, 'ندا محمود عبد اللطيف', 'nadamahmoudnigm@gmail.com', '01223463609', 'السلام عليكم أن اسجل فى المسابقة الشعرية \r\nكيف يتم ارسال القصيدة إذا سمحتم', '2022-05-30 20:32:30', '2022-05-30 20:32:30'),
(8, 'صلاح محمد سعد بدران', 'alwatar.alsades@gmail.com', '0109 518 9717', 'سلام الله عليكم.\r\nلم يتضح لي شروط المصنف الذي يصلح للمشاركة، أقصيدة أم ديوانا؟\r\nوهل يكون مطبوعا أم مخطوطا؟ \r\nأين أجد الشروط التفصيلية إذًا؟', '2022-05-30 21:32:48', '2022-05-30 21:32:48'),
(9, 'ضياء اسماعيل', 'deaagad@gmail.com', '0021098996963', 'ضياء اسماعيل سيناريست مصرى وشاعر وروائي يسعدنى اشترك فى المسابقه كيف أرسل قصائدى', '2022-05-30 23:34:33', '2022-05-30 23:34:33'),
(10, 'الاء', 'alaamgdob82@gmail.com', '0535991882', 'السلام عليكم ورحمته الله وبركاته بالنسبه للمسابقة هل يمكن اشتراك اشخاص من الداخل الفلسطيني المحتل اضافة الى ذلك عدم حضور الشخص للحفل الاختتامي ..', '2022-05-31 00:54:08', '2022-05-31 00:54:08'),
(11, 'عزت الطيرى', 'eltairy51@gmail.com', '٠٠٢٠١٠٠٥٧٨٢٩٨٢', 'هل يمكن الاشتراك بديوان مطبوع حديثا من شعر التفعيلة..ام بديوان لم يطبع بعد مخطوط\r\n\r\nالشاعر\r\nعزت الطيرى\r\n\r\neltairy51@gmail.com', '2022-05-31 04:27:04', '2022-05-31 04:27:04'),
(12, 'عزت الطيرى', 'eltairy51@gmail.com', '٠٠٢٠١٠٠٥٧٨٢٩٨٢', 'هل يمكن الاشتراك بديوان مطبوع حديثا من شعر التفعيلة..ام بديوان لم يطبع بعد مخطوط\r\n\r\nالشاعر\r\nعزت الطيرى\r\n\r\neltairy51@gmail.com', '2022-05-31 04:27:08', '2022-05-31 04:27:08'),
(13, 'محمد الخضرى', 'mohamedelkhodary15583@gmail.com', '01091199085', 'السلام عليكم \r\nفئة الديوان أو الأغنية يلزم ان يكون شعر فصيح ولا شعر عامية مصرية أو شعر شعبي وجزاكم الله خير', '2022-05-31 08:32:44', '2022-05-31 08:32:44'),
(14, 'Salim Haddaji', 'haddajisalim058@gmail.com', '21690427664+', 'مرحبا..اردت ان أسأل عن جائزة الشاعر الواعد هل هي تخص كل طلاب العالم العربي او المملكة فقط وشكرا..', '2022-05-31 08:46:34', '2022-05-31 08:46:34'),
(15, 'mostafa', 'mostafa_ganem20@gmail.com', '2001068506774', 'بكتب عاميه', '2022-05-31 09:11:28', '2022-05-31 09:11:28'),
(16, 'فرح يوسف محمد علي', 'farha.youssef.law@gmail.com', '01129819657', 'اريد التقدم والمشاركه', '2022-05-31 10:47:06', '2022-05-31 10:47:06'),
(17, 'فرح يوسف محمد علي', 'farha.youssef.law@gmail.com', '01129819657', 'اريد التقدم والمشاركه', '2022-05-31 10:47:10', '2022-05-31 10:47:10'),
(18, 'فرح يوسف محمد علي', 'farha.youssef.law@gmail.com', '01129819657', 'اريد التقدم والمشاركه', '2022-05-31 10:47:10', '2022-05-31 10:47:10'),
(19, 'فرح يوسف محمد علي', 'farha.youssef.law@gmail.com', '01129819657', 'اريد التقدم والمشاركه  ف المسابقه', '2022-05-31 10:47:16', '2022-05-31 10:47:16'),
(20, 'مرتضى الحسام', 'g776102161@gmail.com', '00967776102161', 'هل يستطيع الشعراء اليمنيون المشاركة في المسابقة في قسم الشاعر الواعد \r\nفأنا شاعر وطالب جامعي \r\nوإذا كان لا يمكنني ذلك\r\n\r\nهل هناك فرصة في الاشتراك في باقي أقسام المسابقة إذا لم أكن أنتمي لجهة مؤسسية ؟', '2022-05-31 13:06:46', '2022-05-31 13:06:46'),
(21, 'مرتضى الحسام', 'g776102161@gmail.com', '00967776102161', 'هل يستطيع الشعراء اليمنيون المشاركة في المسابقة في قسم الشاعر الواعد \r\nفأنا شاعر وطالب جامعي \r\nوإذا كان لا يمكنني ذلك\r\n\r\nهل هناك فرصة في الاشتراك في باقي أقسام المسابقة إذا لم أكن أنتمي لجهة مؤسسية ؟', '2022-05-31 13:07:40', '2022-05-31 13:07:40'),
(22, 'مرتضى الحسام', 'g776102161@gmail.com', '00967776102161', 'هل يستطيع الشعراء اليمنيون المشاركة في المسابقة في قسم الشاعر الواعد \r\nفأنا شاعر وطالب جامعي \r\nوإذا كان لا يمكنني ذلك\r\n\r\nهل هناك فرصة في الاشتراك في باقي أقسام المسابقة إذا لم أكن أنتمي لجهة مؤسسية ؟', '2022-05-31 13:09:28', '2022-05-31 13:09:28'),
(23, 'Hhh', 'hhh@hhh.com', 'Jhh', 'Hhhh', '2022-05-31 13:18:41', '2022-05-31 13:18:41'),
(24, 'رمضان عبداللاه إبراهيم حسن', 'rabdella27@yahoo.com', '01221305608', 'لقد اشتركت حضراتكم في المسابقة بديوان فصحى مطبوع العام الماضي 2021\r\nفردي \\\r\nوأرسلت الرسالة لحضراتكم \r\nهل وصلت مشاركتي \r\nبوركتم يا رب', '2022-05-31 13:49:57', '2022-05-31 13:49:57'),
(25, 'ريهام عبد الملك المطري', 'rehamabdalmalik@gmail.com', '776467751', 'أنا طالبة ثانوية من خارج المملكة وأريد حقًا المشاركة  في المسابقة هل يمكن ذلك لأنه من مذكور أنه الطالب الثانوي يجب أن يكون من داخل المملكة', '2022-05-31 13:51:59', '2022-05-31 13:51:59'),
(26, 'ريهام عبد الملك المطري', 'rehamabdalmalik@gmail.com', '776467751', 'أنا طالبة ثانوية من خارج المملكة وأريد حقًا المشاركة  في المسابقة هل يمكن ذلك لأنه من مذكور أنه الطالب الثانوي يجب أن يكون من داخل المملكة', '2022-05-31 13:52:08', '2022-05-31 13:52:08'),
(27, 'مختار أبو شرف', 'Abwpkr123@gmail.com', '00967733810969', 'في فرع افضل مشروع في خدمة الشعر  .. إذ عندي بحث في الشعر وماهيته', '2022-05-31 15:57:00', '2022-05-31 15:57:00'),
(28, 'الشاعرفتاح المقطري', 'f733448400@hotmail.com', '967774988925', 'هل يمكن المسابقة بنص نثري', '2022-05-31 16:59:38', '2022-05-31 16:59:38'),
(29, 'محمد إبراهيم', 'farghale@icloud.com', '01010193469', 'قمت بارسال قصيدة مغناة \r\nهل تم تأكيد اشتراكي بالمسابقة \r\nولكم جزيل الشكر', '2022-06-01 08:44:59', '2022-06-01 08:44:59'),
(30, 'محمد فايز', 'mohamdfz7@gmail.com', '0535932462', 'من ضمن شروط الديوان للترشيح الفردي موافقة خطية من المؤلف .\r\nارجو التوضيح أكثر عن محتوى الموافقة و هل يتم ارسال الموافقة بشكل مستقل على ورقة او كيف يتم الارسال ؟', '2022-06-01 10:13:13', '2022-06-01 10:13:13'),
(31, 'محمد فايز', 'mohamdfz7@gmail.com', '0535932462', 'من ضمن شروط الديوان للترشيح الفردي موافقة خطية من المؤلف .\r\nارجو التوضيح أكثر عن محتوى الموافقة و هل يتم ارسال الموافقة بشكل مستقل على ورقة او كيف يتم الارسال ؟', '2022-06-01 10:13:52', '2022-06-01 10:13:52'),
(32, 'جهان كور نعسان', 'jehankornasan@gmail.com', '+9630949912525', 'أود المشاركة بمسابقة الديوان وقد أرسلت مشاركتي عبر إيميلكم', '2022-06-01 14:42:33', '2022-06-01 14:42:33'),
(33, 'جبران محمد علي قحل', 'jab05028@gmail.com', '0504791901', 'المكرمون إدارة جائزة الأمير عبدالله الفيصل فرع الديوان تحية طيبة .\r\nحولت ارسال ترشيح المشاركة طبقا لبيانات الموقع , ولم احظى برد يفيد بنجاح تسجيل المشاركة \r\nكرما, التلطف بالرد والمساعدة .', '2022-06-01 17:10:22', '2022-06-01 17:10:22'),
(34, 'عبدالله بن أحمد الأسمري', 'al-asmary33@hotmail.com', '0505709833', 'السلام عليكم ورحمة الله وبركاتة صباح الخير والمسرات وطاب يومك\r\nكيف ارسل المشاركة في هذه المسابقة\r\nالشعر الفصيح وشكرا لكم', '2022-06-01 23:50:09', '2022-06-01 23:50:09'),
(35, 'عبدالله بن أحمد الأسمري', 'al-asmary33@hotmail.com', '0505709833', 'السلام عليكم ورحمة الله وبركاتة صباح الخير والمسرات وطاب يومك\r\nكيف ارسل المشاركة في هذه المسابقة\r\nالشعر الفصيح وشكرا لكم', '2022-06-01 23:50:15', '2022-06-01 23:50:15'),
(36, 'عبدالله بن أحمد الأسمري', 'al-asmary33@hotmail.com', '0505709833', 'السلام عليكم ورحمة الله وبركاتة صباح الخير والمسرات وطاب يومك\r\nكيف ارسل المشاركة في هذه المسابقة\r\nالشعر الفصيح وشكرا لكم', '2022-06-01 23:50:59', '2022-06-01 23:50:59'),
(37, 'عبدالله بن أحمد الأسمري', 'al-asmary33@hotmail.com', '0966505709833', 'السلام عليكم ورحمة الله وبركاتة صباح الخير والمسرات وطاب يومك\r\nكيف ارسل المشاركة في هذه المسابقة\r\nالشعر الفصيح وشكرا لكم', '2022-06-01 23:51:48', '2022-06-01 23:51:48'),
(38, 'عبدالله بن أحمد الأسمري', 'al-asmary33@hotmail.com', '0966505709833', 'السلام عليكم ورحمة الله وبركاتة صباح الخير والمسرات وطاب يومك\r\nكيف ارسل المشاركة في هذه المسابقة\r\nالشعر الفصيح وشكرا لكم', '2022-06-01 23:51:53', '2022-06-01 23:51:53'),
(39, 'عبدالله بن أحمد الأسمري', 'al-asmary33@hotmail.com', '0966505709833', 'السلام عليكم ورحمة الله وبركاتة صباح الخير والمسرات وطاب يومك\r\nكيف ارسل المشاركة في هذه المسابقة\r\nالشعر الفصيح وشكرا لكم', '2022-06-01 23:52:02', '2022-06-01 23:52:02'),
(40, 'عبدالله بن أحمد الأسمري', 'al-asmary33@hotmail.com', '00966505709833', 'السلام عليكم ورحمة الله وبركاته مساء الخير والمسرات كيف المشاركة في المسابقة الشعر العمودي وشكرا لك', '2022-06-02 07:18:14', '2022-06-02 07:18:14'),
(41, 'عبدالله الأسمري', 'al-asmary33@hotmail.com', '00966505709833', 'السلام عليكم ورحمة الله وبركاته مساء الخير والمسرات كيف المشاركة في المسابقة الشعر العمودي وشكرا لك', '2022-06-02 07:19:02', '2022-06-02 07:19:02'),
(42, 'عبدالله الأسمري', 'al-asmary33@hotmail.com', '00966505709833', 'السلام عليكم ورحمة الله وبركاته مساء الخير والمسرات كيف المشاركة في المسابقة الشعر العمودي وشكرا لك', '2022-06-02 07:19:08', '2022-06-02 07:19:08'),
(43, 'عبدالله الأسمري', 'al-asmary33@hotmail.com', '00966505709833', 'السلام عليكم ورحمة الله وبركاته مساء الخير والمسرات كيف المشاركة في المسابقة الشعر العمودي وشكرا لك', '2022-06-02 07:19:13', '2022-06-02 07:19:13'),
(44, 'عبدالله الأسمري', 'al-asmary33@hotmail.com', '00966505709833', 'السلام عليكم ورحمة الله وبركاته مساء الخير والمسرات كيف المشاركة في المسابقة الشعر العمودي وشكرا لك', '2022-06-02 07:19:13', '2022-06-02 07:19:13'),
(45, 'مناسك ابراهيم حسن حسين', 'mnasikibrahim413@gimal.com', '+249 0113898662', 'أُريدُ المُشاركة فِي مُسابقة الشعر\r\nوهذا هو نصي الشِعري:\r\n\r\n\r\n\"أسدُ العَرين\"', '2022-06-02 16:33:25', '2022-06-02 16:33:25'),
(46, 'سعود اليوسف', 'ssyesf@gmail.com', '00966555088875', 'السلام عليكم\r\n\r\nأرسلت طلبا للمشاركة في فرع الديوان،\r\nفهل وصل طلبي مكتملاً؟\r\n\r\nوشكرا\r\n\r\nسعود اليوسف', '2022-06-02 18:42:20', '2022-06-02 18:42:20'),
(47, 'ياسر عبد المطلوب علي المحمدي', 'S170393029@seu.edu.sa', '0544663586', 'السلام عليكم و رحمة الله و بركاته \r\nٍس/ هل أستطيع المشاركة في مسابقة الامير عبدالله الفيصل بشكل فردي في قسم جائزة الشاعر الواعد أم يجب الترشح من قبل المؤسسة التعليمية ( الجامعة ) . \r\nو ان كان الجواب نعم , فكيف ؟', '2022-06-03 02:50:17', '2022-06-03 02:50:17'),
(48, 'ali ahmed qully', 'qully77@gmail.com', '0506534598', 'السلام عليكم \r\nشكراً لكم لإتاحة الفرصة\r\nارسلت مشاركتي ضمن فرع الديوان ، ديواني معراج الرؤى،  ولكن الموقع يظهر قاعدة البيانات وكأن هنالك خطأ في الموقع.\r\nهل وصلت المشاركة؟ أم ان هناك طريقة أخرى لارسال المشاركات.\r\nبارك الله فيكم', '2022-06-03 12:02:50', '2022-06-03 12:02:50'),
(49, 'رنيم قطيط', 'raneemkoteit@gmail.com', '00201150093339', 'يشرفنا ترشيح قصيدة وأنت معي للمسابقة كلمات الشاعر ربيع السايح وألحان وغناء رنيم قطيط . نريد معرفة كيفية ترشيح القصيدة . \r\nمؤسسة RK.Media', '2022-06-03 16:29:21', '2022-06-03 16:29:21'),
(50, 'جوهرة حسن', 'jh171799@gmail.com', '0506433832', 'انا شاعرة  من أبها خريجة جامعة الملك خالد قبل سنة ليش لدي ترشيح من جهة معينة أود المشاركة ذاتياً الرجاء تزويدي بالطريقة وشكراً .', '2022-06-03 19:50:10', '2022-06-03 19:50:10'),
(51, 'فادي قطوش', 'fadik@ju.edu.jo', '0798507950', 'السلام عليكم\r\nقدم بتقديم مشاركة باسم علي محمد محمود قطوش\r\nلكن لم يعطيني انه تم الارسال بنجاح او اي رسالة اخرى \r\nكيف لي أن أتاكد بأن المشاركة قد وصلت', '2022-06-06 01:59:37', '2022-06-06 01:59:37'),
(52, 'Gavin Adams', 'cezeliv@mailinator.com', '+1 (642) 381-9266', 'Duis exercitationem', '2022-06-09 05:48:35', '2022-06-09 05:48:35'),
(53, 'محمد عبده', 'm-abdo11@hotmail.com', '00966580263510', 'السلام عليكم\r\nطابت أوقاتكم\r\n\r\nحاب أستفسر عن فرع القصيدة الغنائية\r\n\r\nهل يشترط أن تكون القصيدة منشورة في ديوان مطبوع؟\r\n\r\nلأن من ضمن خيارات الاستمارة ( دار النشر )\r\n\r\nمع الشكر', '2022-06-13 05:06:05', '2022-06-13 05:06:05');

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
  `check` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `accept` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `corporate1_fields`
--

CREATE TABLE `corporate1_fields` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `corporate1_id` bigint(20) UNSIGNED NOT NULL,
  `authentic_program` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `authentic_history` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `authentic_place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `authentic_history1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `authentic_target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `authentic_cv1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `authentic_cv2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `authentic_cv3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `accept` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `corporate2s`
--

INSERT INTO `corporate2s` (`id`, `behalf_candidate_name`, `behalf_options`, `behalf_name`, `behalf_type`, `behalf_date`, `behalf_company_name`, `behalf_options1`, `behalf_project`, `behalf_number`, `behalf_email`, `behalf_country`, `behalf_city`, `behalf_about`, `accept`, `created_at`, `updated_at`) VALUES
(3, 'Eman', 'مؤسسة', 'iiii', 'sss', '06/15/2022', 'hyy', 'حكومية', 'bbb', '98765', 'hms_1406@hotmail.com', 'DE', 'kjhfgfh', 'nnnnn', 0, '2022-06-14 23:10:13', '2022-06-14 23:10:13');

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
(1, 'أندورا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(2, 'الامارات العربية المتحدة', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(3, 'أفغانستان', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(4, 'أنتيجوا وبربودا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(5, 'أنجويلا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(6, 'ألبانيا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(7, 'أرمينيا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(8, 'أنجولا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(9, 'القطب الجنوبي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(10, 'الأرجنتين', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(11, 'ساموا الأمريكية', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(12, 'النمسا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(13, 'أستراليا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(14, 'آروبا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(15, 'جزر أولان', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(16, 'أذربيجان', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(17, 'البوسنة والهرسك', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(18, 'بربادوس', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(19, 'بنجلاديش', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(20, 'بلجيكا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(21, 'بوركينا فاسو', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(22, 'بلغاريا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(23, 'البحرين', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(24, 'بوروندي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(25, 'بنين', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(26, 'سان بارتيلمي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(27, 'برمودا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(28, 'بروناي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(29, 'بوليفيا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(30, 'بونير', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(31, 'البرازيل', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(32, 'الباهاما', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(33, 'بوتان', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(34, 'جزيرة بوفيه', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(35, 'بتسوانا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(36, 'روسيا البيضاء', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(37, 'بليز', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(38, 'كندا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(39, 'جزر كوكوس', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(40, 'جمهورية الكونغو الديمقراطية', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(41, 'جمهورية افريقيا الوسطى', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(42, 'الكونغو - برازافيل', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(43, 'سويسرا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(44, 'ساحل العاج', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(45, 'جزر كوك', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(46, 'شيلي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(47, 'الكاميرون', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(48, 'الصين', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(49, 'كولومبيا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(50, 'كوستاريكا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(51, 'كوبا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(52, 'الرأس الأخضر', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(53, 'كوراساو', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(54, 'جزيرة الكريسماس', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(55, 'قبرص', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(56, 'جمهورية التشيك', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(57, 'ألمانيا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(58, 'جيبوتي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(59, 'الدانمرك', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(60, 'دومينيكا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(61, 'جمهورية الدومينيك', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(62, 'الجزائر', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(63, 'الاكوادور', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(64, 'استونيا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(65, 'مصر', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(66, 'الصحراء الغربية', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(67, 'اريتريا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(68, 'أسبانيا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(69, 'اثيوبيا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(70, 'فنلندا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(71, 'فيجي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(72, 'جزر فوكلاند', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(73, 'ميكرونيزيا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(74, 'جزر فارو', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(75, 'فرنسا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(76, 'الجابون', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(77, 'المملكة المتحدة', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(78, 'جرينادا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(79, 'جورجيا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(80, 'غويانا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(81, 'غيرنزي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(82, 'غانا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(83, 'جبل طارق', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(84, 'جرينلاند', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(85, 'غامبيا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(86, 'غينيا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(87, 'جوادلوب', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(88, 'غينيا الاستوائية', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(89, 'اليونان', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(90, 'جورجيا الجنوبية وجزر ساندويتش الجنوبية', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(91, 'جواتيمالا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(92, 'جوام', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(93, 'غينيا بيساو', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(94, 'غيانا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(95, 'هونج كونج الصينية', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(96, 'جزيرة هيرد وماكدونالد', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(97, 'هندوراس', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(98, 'كرواتيا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(99, 'هايتي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(100, 'المجر', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(101, 'اندونيسيا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(102, 'أيرلندا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(103, 'اسرائيل', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(104, 'جزيرة مان', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(105, 'الهند', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(106, 'المحيط الهندي البريطاني', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(107, 'العراق', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(108, 'ايران', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(109, 'أيسلندا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(110, 'ايطاليا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(111, 'جيرسي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(112, 'جامايكا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(113, 'الأردن', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(114, 'اليابان', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(115, 'كينيا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(116, 'قرغيزستان', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(117, 'كمبوديا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(118, 'كيريباتي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(119, 'جزر القمر', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(120, 'سانت كيتس ونيفيس', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(121, 'كوريا الشمالية', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(122, 'كوريا الجنوبية', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(123, 'الكويت', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(124, 'جزر الكايمن', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(125, 'كازاخستان', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(126, 'لاوس', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(127, 'لبنان', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(128, 'سانت لوسيا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(129, 'ليختنشتاين', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(130, 'سريلانكا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(131, 'ليبيريا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(132, 'ليسوتو', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(133, 'ليتوانيا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(134, 'لوكسمبورج', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(135, 'لاتفيا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(136, 'ليبيا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(137, 'المغرب', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(138, 'موناكو', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(139, 'مولدافيا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(140, 'الجبل الأسود', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(141, 'سانت مارتين', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(142, 'مدغشقر', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(143, 'جزر المارشال', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(144, 'مقدونيا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(145, 'مالي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(146, 'ميانمار', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(147, 'منغوليا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(148, 'ماكاو الصينية', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(149, 'جزر ماريانا الشمالية', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(150, 'مارتينيك', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(151, 'موريتانيا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(152, 'مونتسرات', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(153, 'مالطا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(154, 'موريشيوس', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(155, 'جزر الملديف', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(156, 'ملاوي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(157, 'المكسيك', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(158, 'ماليزيا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(159, 'موزمبيق', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(160, 'ناميبيا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(161, 'كاليدونيا الجديدة', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(162, 'النيجر', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(163, 'جزيرة نورفوك', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(164, 'نيجيريا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(165, 'نيكاراجوا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(166, 'هولندا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(167, 'النرويج', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(168, 'نيبال', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(169, 'نورو', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(170, 'نيوي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(171, 'نيوزيلاندا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(172, 'عمان', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(173, 'بنما', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(174, 'بيرو', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(175, 'بولينيزيا الفرنسية', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(176, 'بابوا غينيا الجديدة', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(177, 'الفيلبين', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(178, 'باكستان', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(179, 'بولندا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(180, 'سانت بيير وميكولون', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(181, 'بتكايرن', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(182, 'بورتوريكو', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(183, 'فلسطين', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(184, 'البرتغال', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(185, 'بالاو', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(186, 'باراجواي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(187, 'قطر', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(188, 'روينيون', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(189, 'رومانيا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(190, 'صربيا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(191, 'روسيا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(192, 'رواندا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(193, 'المملكة العربية السعودية', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(194, 'جزر سليمان', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(195, 'سيشل', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(196, 'السودان', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(197, 'السويد', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(198, 'سنغافورة', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(199, 'سانت هيلنا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(200, 'سلوفينيا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(201, 'سفالبارد وجان مايان', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(202, 'سلوفاكيا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(203, 'سيراليون', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(204, 'سان مارينو', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(205, 'السنغال', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(206, 'الصومال', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(207, 'سورينام', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(208, 'جنوب السودان', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(209, 'ساو تومي وبرينسيبي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(210, 'السلفادور', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(211, 'سينت مارتن', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(212, 'سوريا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(213, 'سوازيلاند', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(214, 'جزر الترك وجايكوس', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(215, 'تشاد', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(216, 'المقاطعات الجنوبية الفرنسية', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(217, 'توجو', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(218, 'تايلند', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(219, 'طاجكستان', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(220, 'توكيلو', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(221, 'تيمور الشرقية', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(222, 'تركمانستان', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(223, 'تونس', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(224, 'تونجا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(225, 'تركيا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(226, 'ترينيداد وتوباغو', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(227, 'توفالو', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(228, 'تايوان', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(229, 'تانزانيا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(230, 'أوكرانيا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(231, 'أوغندا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(232, 'جزر الولايات المتحدة البعيدة الصغيرة', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(233, 'الولايات المتحدة الأمريكية', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(234, 'أورجواي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(235, 'أوزبكستان', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(236, 'الفاتيكان', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(237, 'سانت فنسنت وغرنادين', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(238, 'فنزويلا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(239, 'جزر فرجين البريطانية', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(240, 'جزر فرجين الأمريكية', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(241, 'فيتنام', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(242, 'فانواتو', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(243, 'جزر والس وفوتونا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(244, 'ساموا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(245, 'كوسوفو', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(246, 'اليمن', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(247, 'مايوت', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(248, 'جمهورية جنوب افريقيا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(249, 'زامبيا', '2022-06-09 05:11:39', '2022-06-09 05:11:39');

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
-- Table structure for table `form_fields`
--

CREATE TABLE `form_fields` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `competition_id` bigint(20) UNSIGNED NOT NULL,
  `form` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `release` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publishedWorks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `form_fields`
--

INSERT INTO `form_fields` (`id`, `competition_id`, `form`, `type`, `title`, `place`, `release`, `publishedWorks`, `created_at`, `updated_at`) VALUES
(41, 83, 'five', '1', 'مطر على أرصفة الشّمال', 'شركة تكوين للطباعة والنشر والتوزيع', '2021-08-02', 'document-0-1655155029.pdf', '2022-06-13 16:17:09', '2022-06-13 16:17:09'),
(42, 84, 'eight', '2', 'رهيد', 'سطور للنشر والتوزيع', '2022-05-16', 'document-0-1655168886.pdf', '2022-06-13 20:08:06', '2022-06-13 20:08:06'),
(43, 84, 'eight', '2', 'اشدد بكفك أحلامي فقد أصل', 'سطور للنشر والتوزيع', '2020-10-01', 'document-1-1655168886.pdf', '2022-06-13 20:08:06', '2022-06-13 20:08:06'),
(44, 84, 'eight', '2', 'حنين بين قوسين', 'أطياف للنشر', '2020-08-14', 'document-2-1655168886.pdf', '2022-06-13 20:08:06', '2022-06-13 20:08:06'),
(45, 84, 'eight', '2', 'مقام', 'الانتشار العربي', '2017-08-15', 'document-3-1655168886.pdf', '2022-06-13 20:08:06', '2022-06-13 20:08:06'),
(46, 84, 'eight', '2', 'تشرين والحب والأغنيات', 'النتشار العربي ونادي تبوك', '2016-07-28', 'document-4-1655168886.pdf', '2022-06-13 20:08:06', '2022-06-13 20:08:06'),
(47, 84, 'eight', '2', 'لوعة الطين', 'جميرا للنشر', '2014-11-08', 'document-5-1655168886.pdf', '2022-06-13 20:08:06', '2022-06-13 20:08:06'),
(48, 84, 'eight', '2', 'عرائس الحب', 'الدار العربية للعلوم', '2010-11-17', 'document-6-1655168886.pdf', '2022-06-13 20:08:06', '2022-06-13 20:08:06'),
(49, 84, 'eight', '2', 'نقوش على مرايا الذاكرة', 'المؤلفة', '2009-01-01', 'document-7-1655168886.pdf', '2022-06-13 20:08:06', '2022-06-13 20:08:06'),
(68, 95, 'five', '2', '98765', 'bbbb', '2022-06-16', 'document-0-1655265116.pdf', '2022-06-14 22:51:56', '2022-06-14 22:51:56'),
(69, 95, 'five', '2', 'nnnn', 'KJHGF', '2022-06-16', 'document-1-1655265116.pdf', '2022-06-14 22:51:56', '2022-06-14 22:51:56'),
(78, 101, 'eight', '2', 'Nulla est iusto reic', 'Aut duis ut aliquip', '1984-12-15', 'document-0-1655393982.pdf', '2022-06-16 13:39:42', '2022-06-16 13:39:42'),
(79, 101, 'eight', '2', 'Qila Didar Singh District Gujranwala', 'muslim town', '2022-06-13', 'document-1-1655393982.pdf', '2022-06-16 13:39:42', '2022-06-16 13:39:42'),
(80, 102, 'second', '1', 'Ut consectetur fugia', 'Dolor harum velit en', '2015-06-23', 'document-0-1655394590.pdf', '2022-06-16 13:49:50', '2022-06-16 13:49:50'),
(81, 103, 'second', '2', 'Repudiandae aut exce', 'Impedit quisquam te', '1978-09-20', 'document-0-1655394801.pdf', '2022-06-16 13:53:21', '2022-06-16 13:53:21'),
(82, 104, 'first', '1', 'Quia aut ducimus do', 'Facilis eiusmod dolo', '1987-02-05', 'document-0-1655395342.pdf', '2022-06-16 14:02:22', '2022-06-16 14:02:22'),
(83, 104, 'first', '1', 'Ut sunt inventore i', 'Tempora in sapiente', '1998-12-01', 'document-1-1655395342.pdf', '2022-06-16 14:02:22', '2022-06-16 14:02:22'),
(84, 105, 'first', '2', 'Ipsum qui occaecat o', 'In nulla quibusdam s', '1990-03-21', 'document-0-1655395507.pdf', '2022-06-16 14:05:07', '2022-06-16 14:05:07'),
(85, 105, 'first', '2', 'Et maxime hic alias', 'Beatae voluptatem N', '1974-07-11', 'document-1-1655395507.pdf', '2022-06-16 14:05:07', '2022-06-16 14:05:07'),
(86, 106, 'eight', '2', 'Ut est consequat Es', 'Quaerat ut sed est', '2013-04-19', 'document-0-1655395759.pdf', '2022-06-16 14:09:19', '2022-06-16 14:09:19'),
(87, 106, 'eight', '2', 'Eveniet tempore au', 'Iusto enim voluptati', '1985-07-24', 'document-1-1655395759.pdf', '2022-06-16 14:09:19', '2022-06-16 14:09:19'),
(88, 107, 'five', '1', 'Ullam culpa ullamco', 'Magni delectus reru', '1973-03-28', 'document-0-1655395916.pdf', '2022-06-16 14:11:56', '2022-06-16 14:11:56'),
(89, 107, 'five', '1', 'Dolores nemo tenetur', 'Laudantium providen', '2007-01-28', 'document-1-1655395917.pdf', '2022-06-16 14:11:57', '2022-06-16 14:11:57'),
(90, 108, 'five', '2', 'Ea molestiae natus a', 'Ipsum exercitation', '1974-02-21', 'document-0-1655396248.pdf', '2022-06-16 14:17:28', '2022-06-16 14:17:28'),
(91, 108, 'five', '2', 'Quos rerum dicta dol', 'Magna nostrud sit l', '1986-02-19', 'document-1-1655396248.pdf', '2022-06-16 14:17:28', '2022-06-16 14:17:28');

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
  `accept` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `individual1s`
--

INSERT INTO `individual1s` (`id`, `authentic_name`, `authentic_type`, `authentic_date`, `authentic_project`, `authentic_company`, `authentic_age`, `authentic_options`, `authentic_contact`, `authentic_contact1`, `authentic_email`, `authentic_condition`, `authentic_choose`, `authentic_country`, `authentic_city`, `authentic_idea`, `authentic_program`, `authentic_history`, `authentic_place`, `authentic_history1`, `authentic_target`, `authentic_link`, `authentic_cv`, `authentic_cv1`, `authentic_cv2`, `authentic_cv3`, `check`, `accept`, `created_at`, `updated_at`) VALUES
(4, 'قناة \"أثير الأدب\" على منصة يوتيوب', 'قناة لنشر الشعر العربي الفصيح بقراءة سليمة وبسهولة في الطرح وتنوع في اختيار النصوص', '07/01/2020', 'فرد', 'أثير عبد العزيز محمد الفيصل', NULL, 'سعودي', '1098191032', NULL, 'Atheer_aziz1417@hotmail.com', NULL, NULL, 'SA', 'الرياض', 'قناة أثير الأدب أنشئت لنشر النصوص الأدبية -الشعرية غالبا-؛ مقروءة وبخلفيات صوتية تلائم أغلب الأذواق ، هذه القناة تهدف إلى إيصال الجمال الأدبي العربي ونشر كل ما يبهر المستمع من عذب القصائد والنصوص.', '[\"أثير الأدب\"]', '[\"07/01/2020\"]', '[\"الرياض\"]', '[\"الإسهام في نشر الشعر العربي كما يُحبذ أن يُرى عليه\"]', '[\"الناطقون بالعربية من جميع الأعمار والمذاهب\"]', 'https://m.youtube.com/channel/UChQdWG96G2yCoAdgZ_NPnwA', '[\"\"]', NULL, NULL, NULL, NULL, NULL, '2022-05-30 17:22:12', '2022-05-30 17:22:12');

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
  `behalf_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `behalf_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accept` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(10, '2022_02_28_090804_create_nations_table', 1),
(11, '2022_05_23_063647_create_contact_us_table', 1),
(12, '2022_05_23_091917_create_portfolios_table', 1),
(13, '2022_05_25_140334_create_corporate1s_table', 1),
(14, '2022_05_25_144607_create_corporate2s_table', 1),
(15, '2022_05_26_071014_create_individual2s_table', 1),
(16, '2022_05_26_071045_create_individual1s_table', 1),
(17, '2022_05_31_110932_create_universities_table', 1),
(18, '2022_06_01_114340_create_role_forms_table', 1),
(19, '2022_06_02_081237_add_accept_to_universities_table', 1),
(20, '2022_06_02_081559_add_accept_to_corporate1s_table', 1),
(21, '2022_06_02_081616_add_accept_to_corporate2s_table', 1),
(22, '2022_06_02_081736_add_accept_to_individual1s_table', 1),
(23, '2022_06_02_081756_add_accept_to_individual2s_table', 1),
(24, '2022_06_03_070223_add_sung_poem_to_competitions', 1),
(25, '2022_06_03_070447_add_singer_name_to_competitions', 1),
(26, '2022_06_03_070517_add_composer_name_to_competitions', 1),
(27, '2022_06_03_070559_add_date_of_registration_to_competitions', 1),
(28, '2022_06_03_070631_add_song_to_competitions', 1),
(29, '2022_06_07_152447_create_addmores_table', 1),
(30, '2022_06_07_174532_add_two_column_to_form_fields', 1),
(31, '2022_06_08_110416_create_university_fields_table', 1),
(32, '2022_06_08_131602_create_corporate1_fields_table', 1),
(33, '2022_06_09_074046_add_behalf_to_individual2s', 1),
(34, '2022_06_09_132040_create_form_fields_table', 2);

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
(1, 'أفغاني', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(2, 'ألباني', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(3, 'جزائري', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(4, 'أمريكي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(5, 'أندوري', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(6, 'أنغولي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(7, 'انتيغوا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(8, 'أرجنتيني', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(9, 'أرميني', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(10, 'أسترالي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(11, 'نمساوي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(12, 'أذربيجاني', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(13, 'باهامى', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(14, 'بحريني', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(15, 'بنجلاديشي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(16, 'باربادوسي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(17, 'بربودا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(18, 'بوتسواني', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(19, 'بيلاروسي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(20, 'بلجيكي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(21, 'بليزي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(22, 'بنيني', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(23, 'بوتاني', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(24, 'بوليفي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(25, 'بوسني', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(26, 'برازيلي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(27, 'بريطاني', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(28, 'بروناى', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(29, 'بلغاري', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(30, 'بوركيني', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(31, 'بورمي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(32, 'بوروندي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(33, 'كمبودي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(34, 'كاميروني', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(35, 'كندي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(36, 'االرأس الأخضر', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(37, 'وسط أفريقيا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(38, 'تشادي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(39, 'شيلي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(40, 'صينى', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(41, 'كولومبي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(42, 'جزر القمر', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(43, 'كونغولي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(44, 'كوستاريكي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(45, 'كرواتية', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(46, 'كوبي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(47, 'قبرصي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(48, 'تشيكي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(49, 'دانماركي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(50, 'جيبوتي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(51, 'دومينيكاني', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(52, 'هولندي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(53, 'تيموري شرقي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(54, 'اكوادوري', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(55, 'مصري', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(56, 'إماراتي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(57, 'غيني  استوائي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(58, 'إريتري', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(59, 'إستوني', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(60, 'حبشي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(61, 'فيجي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(62, 'فلبيني', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(63, 'فنلندي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(64, 'فرنسي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(65, 'جابوني', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(66, 'غامبيي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(67, 'جورجي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(68, 'ألماني', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(69, 'غاني', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(70, 'إغريقي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(71, 'جرينادي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(72, 'غواتيمالي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(73, 'غيني بيساوي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(74, 'غيني', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(75, 'جوياني', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(76, 'هايتي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(77, 'هرسكي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(78, 'هندوراسي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(79, 'هنغاري', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(80, 'إيسلندي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(81, 'هندي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(82, 'إندونيسي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(83, 'إيراني', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(84, 'عراقي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(85, 'إيرلندي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(86, 'إيطالي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(87, 'إفواري', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(88, 'جامايكي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(89, 'ياباني', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(90, 'أردني', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(91, 'كازاخستاني', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(92, 'كيني', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(93, 'كيتياني ونيفيسياني', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(94, 'كويتي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(95, 'قيرغيزستان', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(96, 'لاوسي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(97, 'لاتفي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(98, 'لبناني', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(99, 'ليبيري', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(100, 'ليبي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(101, 'ليختنشتايني', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(102, 'لتواني', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(103, 'لكسمبرغي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(104, 'مقدوني', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(105, 'مدغشقري', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(106, 'مالاوى', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(107, 'ماليزي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(108, 'مالديفي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(109, 'مالي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(110, 'مالطي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(111, 'مارشالي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(112, 'موريتاني', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(113, 'موريشيوسي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(114, 'مكسيكي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(115, 'ميكرونيزي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(116, 'مولدوفي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(117, 'موناكو', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(118, 'منغولي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(119, 'مغربي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(120, 'ليسوتو', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(121, 'لتسواني', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(122, 'موزمبيقي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(123, 'ناميبي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(124, 'ناورو', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(125, 'نيبالي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(126, 'نيوزيلندي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(127, 'ني فانواتي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(128, 'نيكاراغوا', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(129, 'نيجري', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(130, 'كوري شمالي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(131, 'إيرلندي شمالي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(132, 'نرويجي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(133, 'عماني', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(134, 'باكستاني', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(135, 'بالاوي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(136, 'فلسطيني', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(137, 'بنمي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(138, 'بابوا غينيا الجديدة', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(139, 'باراغواياني', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(140, 'بيروفي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(141, 'بولندي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(142, 'برتغالي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(143, 'قطري', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(144, 'روماني', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(145, 'روسي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(146, 'رواندي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(147, 'لوسياني', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(148, 'سلفادوري', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(149, 'ساموايان', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(150, 'سان مارينيز', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(151, 'ساو توميان', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(152, 'سعودي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(153, 'سكتلندي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(154, 'سنغالي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(155, 'صربي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(156, 'سيشلي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(157, 'سيرا ليوني', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(158, 'سنغافوري', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(159, 'سلوفاكي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(160, 'سلوفيني', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(161, 'جزر سليمان', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(162, 'صومالي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(163, 'جنوب افريقيي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(164, 'كوري جنوبي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(165, 'إسباني', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(166, 'سري لانكي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(167, 'سوداني', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(168, 'سورينامي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(169, 'سوازي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(170, 'سويدي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(171, 'سويسري', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(172, 'سوري', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(173, 'تايواني', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(174, 'طاجيكي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(175, 'تنزاني', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(176, 'التايلاندي', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(177, 'توغواني', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(178, 'تونجاني', '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(179, 'ترينيدادي أو توباغوني', '2022-06-09 05:11:40', '2022-06-09 05:11:40'),
(180, 'تونسي', '2022-06-09 05:11:40', '2022-06-09 05:11:40'),
(181, 'تركي', '2022-06-09 05:11:40', '2022-06-09 05:11:40'),
(182, 'توفالي', '2022-06-09 05:11:40', '2022-06-09 05:11:40'),
(183, 'أوغندي', '2022-06-09 05:11:40', '2022-06-09 05:11:40'),
(184, 'أوكراني', '2022-06-09 05:11:40', '2022-06-09 05:11:40'),
(185, 'أوروجواي', '2022-06-09 05:11:40', '2022-06-09 05:11:40'),
(186, 'أوزبكستاني', '2022-06-09 05:11:40', '2022-06-09 05:11:40'),
(187, 'فنزويلي', '2022-06-09 05:11:40', '2022-06-09 05:11:40'),
(188, 'فيتنامي', '2022-06-09 05:11:40', '2022-06-09 05:11:40'),
(189, 'ويلزي', '2022-06-09 05:11:40', '2022-06-09 05:11:40'),
(190, 'يمني', '2022-06-09 05:11:40', '2022-06-09 05:11:40'),
(191, 'زامبي', '2022-06-09 05:11:40', '2022-06-09 05:11:40');

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
-- Table structure for table `universities`
--

CREATE TABLE `universities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` int(11) NOT NULL DEFAULT 2,
  `form` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orgniztionName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fieldname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phoneNumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inputEmail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inputName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inputNationality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idNumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uniNumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uniEmail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phoneNumber2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passportimages` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `candidateImage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publishedWorks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `letter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `accept` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `university_fields`
--

CREATE TABLE `university_fields` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `university_id` bigint(20) UNSIGNED NOT NULL,
  `form` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `release` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publishedWorks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(1, 'admin', NULL, 'admin1', 'admin@admin.com', NULL, '$2y$10$ghIK4PNY1wwM8kqljRM3TOeX/m2CvoUfgchKG9bbl7CIFEiBp2p/C', NULL, '2022-06-09 05:11:38', '2022-06-09 05:11:38'),
(2, 'admin2', NULL, 'admin2', 'admin2@admin2.com', NULL, '$2y$10$6MK7aTcv3KKJ6Gbyna1mpOVYbF.VM3K5SkNflEYLSgNPwdYy1DOou', NULL, '2022-06-09 05:11:39', '2022-06-09 05:11:39'),
(8, 'admin3', NULL, 'admin3', 'admin3@gmail.com', NULL, '$2y$10$EnX6F.AMTLz/PJHsFezr9.lEKZwU5LiYTz.1RuqkMHaCEu2FK1ite', NULL, '2022-06-11 07:59:04', '2022-06-11 09:11:27'),
(12, 'zahid', NULL, 'admin2', 'zahid@gmail.com', NULL, '$2y$10$2l.BLYXcMOrNfqVVr3lFEuaAGQGQHO/vBxVB/xNS/v.3eOMaZQ5Sm', NULL, '2022-06-11 10:59:57', '2022-06-11 10:59:57'),
(13, 'Eman', NULL, 'admin2', 'hms_1406@hotmail.com', NULL, '$2y$10$iajiwjmqe8NiPZLM5UtaE.ZOCZs5zFODZ.uKXZ9oEjpigQUlDN/pK', NULL, '2022-06-12 03:46:08', '2022-06-12 03:46:08');

-- --------------------------------------------------------

--
-- Table structure for table `user_forms`
--

CREATE TABLE `user_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `competition_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for table `corporate1_fields`
--
ALTER TABLE `corporate1_fields`
  ADD PRIMARY KEY (`id`),
  ADD KEY `corporate1_fields_corporate1_id_foreign` (`corporate1_id`);

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
-- Indexes for table `form_fields`
--
ALTER TABLE `form_fields`
  ADD PRIMARY KEY (`id`),
  ADD KEY `form_fields_competition_id_foreign` (`competition_id`);

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
-- Indexes for table `universities`
--
ALTER TABLE `universities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `university_fields`
--
ALTER TABLE `university_fields`
  ADD PRIMARY KEY (`id`),
  ADD KEY `university_fields_university_id_foreign` (`university_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_forms`
--
ALTER TABLE `user_forms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_forms_user_id_foreign` (`user_id`),
  ADD KEY `user_forms_competition_id_foreign` (`competition_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `corporate1s`
--
ALTER TABLE `corporate1s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `corporate1_fields`
--
ALTER TABLE `corporate1_fields`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `corporate2s`
--
ALTER TABLE `corporate2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `form_fields`
--
ALTER TABLE `form_fields`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `individual1s`
--
ALTER TABLE `individual1s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `individual2s`
--
ALTER TABLE `individual2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

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
-- AUTO_INCREMENT for table `universities`
--
ALTER TABLE `universities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `university_fields`
--
ALTER TABLE `university_fields`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_forms`
--
ALTER TABLE `user_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `corporate1_fields`
--
ALTER TABLE `corporate1_fields`
  ADD CONSTRAINT `corporate1_fields_corporate1_id_foreign` FOREIGN KEY (`corporate1_id`) REFERENCES `corporate1s` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `form_fields`
--
ALTER TABLE `form_fields`
  ADD CONSTRAINT `form_fields_competition_id_foreign` FOREIGN KEY (`competition_id`) REFERENCES `competitions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `university_fields`
--
ALTER TABLE `university_fields`
  ADD CONSTRAINT `university_fields_university_id_foreign` FOREIGN KEY (`university_id`) REFERENCES `universities` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_forms`
--
ALTER TABLE `user_forms`
  ADD CONSTRAINT `user_forms_competition_id_foreign` FOREIGN KEY (`competition_id`) REFERENCES `competitions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_forms_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
