-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 06, 2018 at 03:11 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banglaso_DPED`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `folderID` int(10) UNSIGNED NOT NULL,
  `fileID` int(11) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `extension` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`folderID`, `fileID`, `file`, `extension`, `created_at`, `updated_at`) VALUES
(18, 1, 'আরোপিত কাজ প্রদান', 'docx', NULL, '2018-02-23 09:37:46'),
(13, 2, 'আরোপিত কাজ মূল্যায়ন রুব্রিক', 'pdf', NULL, '2018-03-20 13:06:04'),
(13, 3, 'আরোপিত কাজ মূল্যায়ন', 'pdf', NULL, '2018-03-20 13:06:39'),
(13, 4, 'আরোপিত কাজের বিষয়', 'pdf', NULL, '2018-03-20 13:07:06'),
(29, 5, 'যে যে বিষয়ে আরোপিত কাজ আছে', 'pdf', NULL, '2018-02-23 09:39:37'),
(9, 6, 'বেসলাইন মূল্যায়ন নির্দেশনা', 'pdf', NULL, '2018-03-20 12:36:50'),
(9, 7, 'বেসলাইন সার্ভে', 'pdf', NULL, '2018-03-20 12:38:08'),
(25, 8, 'বেসলাইন টুলস তৈরি নির্দেশনা(ইংরেজি)', 'docx', NULL, '2018-03-22 15:09:21'),
(25, 9, 'বেসলাইন টুলস তৈরি নির্দেশনা(গনিত)', 'pdf', NULL, '2018-03-20 12:06:16'),
(25, 10, 'বেসলাইন টুলস তৈরি নির্দেশনা(বাংলা)', 'pdf', NULL, '2018-03-20 12:07:40'),
(25, 11, 'বেসলাইন টুলস তৈরি নির্দেশনা(বাংলাদেশ ও বিশ্বপরিচয়', 'pdf', NULL, '2018-03-20 12:08:13'),
(25, 12, 'ববেসলাইন টুলস তৈরি নির্দেশনা(বিজ্ঞান)', 'pdf', NULL, '2018-03-20 12:08:39'),
(6, 17, 'শিক্ষাক্রম', 'pdf', NULL, NULL),
(3, 18, 'পিটি আই পরিচিতি', 'docx', NULL, NULL),
(31, 20, '১ম ও ২য় টার্মের রেকর্ড ছক', 'pdf', NULL, NULL),
(31, 21, '৩য় ও ৪র্থ টার্ম রেকর্ড ছক', 'pdf', NULL, NULL),
(31, 22, '১ম থেকে ৩য় টার্মের সারসংক্ষেপ', 'pdf', NULL, NULL),
(31, 24, 'বিদ্যালয়ে ইন্সট্রাক্টর কতৃক শ্রেনিপাঠ মুল্যায়ন চেকলিস্ট', 'pdf', NULL, NULL),
(31, 25, 'বিদ্যালয়ে প্রধান শিক্ষক ও সহকারি শিক্ষকগন কতৃক শ্রেনিপাঠ মুল্যায়ন চেকলিস্ট', 'pdf', NULL, NULL),
(32, 26, '৪র্থ টার্ম কার্যক্রম', 'pdf', NULL, NULL),
(32, 27, 'প্রয়োজনীয় ছক', 'pdf', NULL, NULL),
(7, 28, 'ডিব্রিফিং', 'pdf', NULL, NULL),
(7, 29, 'প্রস্তুতিমুলক কাজ', 'pdf', NULL, NULL),
(7, 30, 'বিদ্যালয় প্লেসমেন্ট', 'pdf', NULL, NULL),
(7, 31, 'রিফ্লেক্টিভ জার্নাল', 'pdf', NULL, '2018-03-20 12:43:39'),
(7, 32, 'লগ বই', 'pdf', NULL, NULL),
(7, 33, 'শ্রেনী কার্যক্রম পরিচালনা', 'pdf', NULL, NULL),
(7, 34, '১ম থেকে ৩য় টার্মের রুটিন ও অনুশীলনের বিষয়', 'pdf', NULL, NULL),
(25, 35, 'বেসলাইন মূল্যায়ন  নির্দেশনা', 'docx', NULL, '2018-03-22 15:12:48'),
(26, 36, 'বাংলা বিষয়ের বেসলাইন মূল্যায়ন তথ্য সংগ্রহ ছক ১', 'pdf', NULL, NULL),
(26, 37, 'বাংলা বিষয়ের বেসলাইন মূল্যায়ন তথ্য সংরক্ষন ছক', 'pdf', NULL, NULL),
(26, 38, 'গণিত বিষয়ে বেসলাইন মূল্যায়ন তথ্য সংগ্রহ ছক  ৩য় /৪র্থশ্রেণি', 'pdf', NULL, NULL),
(26, 39, 'গণিত বিষয়ে বেসলাইন মূল্যায়ন তথ্য সংগ্রহ ছক  ৩য় /৪র্থশ্রেণি', 'pdf', NULL, NULL),
(26, 40, 'গণিত বিষয়ে বেসলাইন মূল্যায়ন তথ্য সংগ্রহ ছক ১ম ও ২য়', 'pdf', NULL, NULL),
(26, 41, 'ইংরেজী বিষয়ের বেসলাইন মূল্যায়ন তথ্য সংগ্রহ ছক', 'pdf', NULL, NULL),
(26, 42, 'বাংলাদেশ ও বিশ্বপরিচয় বিষয়ের বেসলাইন মূল্যায়ন তথ্য সংগ্রহ ছক', 'pdf', NULL, NULL),
(26, 43, 'প্রাথমিক বিজ্ঞান বিষয়ের বেসলাইন মূল্যায়ন তথ্য সংগ্রহ ছক', 'pdf', NULL, NULL),
(14, 44, 'কেসস্টাডির ধারণা', 'pdf', NULL, NULL),
(14, 45, 'কেসস্টাডির রুব্রিক', 'pdf', NULL, NULL),
(7, 46, 'রিফ্লেক্টিভ জার্নাল', 'pdf', NULL, NULL),
(7, 47, 'প্রতিফলন আনুশীলন', 'pdf', NULL, NULL),
(33, 49, 'স্তরভিত্তিক সময় বিভাজন(ইংরেজি)', 'pdf', NULL, NULL),
(33, 50, 'স্তরভিত্তিক সময় বিভাজন(গনিত)', 'pdf', NULL, NULL),
(33, 51, 'স্তরভিত্তিক সময় বিভাজন(বাংলা)', 'pdf', NULL, NULL),
(33, 52, 'স্তরভিত্তিক সময় বিভাজন(বাংলাদেশ ও বিশ্বপরিচয়)', 'pdf', NULL, NULL),
(33, 53, 'স্তরভিত্তিক সময় বিভাজন(বিজ্ঞান)', 'pdf', NULL, NULL),
(8, 54, 'স্তরভিত্তিক পাঠদান পদ্ধতি', 'pdf', NULL, NULL),
(16, 55, 'পাঠ মূল্যায়নের জন্য রুব্রিক', 'pdf', NULL, NULL),
(13, 56, 'আরোপিত কাজ প্রদান', 'pdf', NULL, NULL),
(13, 57, 'যে যে বিষয়ে আরোপিত কাজ আছে', 'pdf', NULL, NULL),
(16, 58, 'পাঠ সমীক্ষা কার্যক্রমের প্রতিবেদন ছক ( দলের সদস্যদের জন্য)', 'pdf', NULL, NULL),
(16, 59, 'পাঠ সমীক্ষা গাইড ইনস্ট্রাক্টর কর্তৃক পাঠসমীক্ষা কার্যক্রম মূল্যায়ন ছক ২', 'pdf', NULL, NULL),
(16, 60, 'পাঠ সমীক্ষা গাইড ইনস্ট্রাক্টর কর্তৃক পাঠসমীক্ষা কার্যক্রম মূল্যায়ন ছক', 'pdf', NULL, NULL),
(16, 61, 'পাঠ সমীক্ষা প্রতিবেদন কাঠামো', 'pdf', NULL, NULL),
(4, 62, 'ডিপিএড পরিচিতি', 'pdf', NULL, NULL),
(28, 63, 'ফলাফল', 'pdf', NULL, NULL),
(28, 64, 'টেবুলেশন সীট', 'pdf', NULL, NULL),
(12, 65, 'পিটিআইভিত্তিক  মূল্যায়ন', 'pdf', NULL, NULL),
(12, 66, 'প্রশ্নপত্রের ধরন', 'pdf', NULL, NULL),
(12, 67, 'চূড়ান্ত মুল্যায়ন', 'pdf', NULL, NULL),
(12, 68, '৪র্থ ট্রাম মুল্যায়ন নির্দেশিকা', 'pdf', NULL, '2018-03-22 14:51:13'),
(15, 69, 'কার্যোপযোগী গবেষনার ধারণা', 'pdf', NULL, NULL),
(15, 70, 'গবেষনা বাস্তবায়ন', 'pdf', NULL, NULL),
(15, 71, 'গবেষনার মূল্যায়ন রুব্রিক', 'pdf', NULL, NULL),
(15, 72, 'পরিকল্পনার নমুনা', 'pdf', NULL, NULL),
(15, 73, 'ফলাফল বিশ্লেষণ ও সুপারিস', 'pdf', NULL, NULL),
(5, 76, 'ডিপিএড কাঠামো', 'pdf', NULL, NULL),
(42, 77, 'চুরান্ত পাঠ বিজ্ঞান', 'pdf', NULL, NULL),
(42, 78, 'পাঠ পরিকল্পনা  গণিতˆ', 'pdf', NULL, NULL),
(43, 79, 'Daily Lesson Plan English', 'pdf', NULL, NULL),
(43, 80, 'গণিত স্তর ভিত্তিক ছক', 'pdf', NULL, NULL),
(43, 81, 'বাংলা পাঠ পরিকল্পনা ছক', 'pdf', NULL, NULL),
(43, 82, 'স্তর ভিত্তিক  দৈনিক পাঠ পরিকল্পনা ( বিজ্ঞান )', 'pdf', NULL, NULL),
(43, 83, 'বাঃ ও বিঃ পাঠ পরিকল্পনা ছক', 'pdf', NULL, NULL),
(44, 84, 'পাক্ষিক পরিকল্পনার গনিত', 'pdf', NULL, NULL),
(45, 85, 'Fortnightly plan', 'pdf', NULL, NULL),
(45, 86, 'পাক্ষিক পরিকল্পনার ছক সব বিষয়', 'pdf', NULL, NULL),
(47, 87, 'পাক্ষিক পাঠ পরিকল্পনা', 'pdf', NULL, NULL),
(13, 88, 'টেস্ট', 'doc', NULL, NULL),
(48, 89, 'গণিত বিষয়ে পাক্ষিক মূল্যায়ন তথ্য সংগ্রহ ছক', 'pdf', NULL, NULL),
(48, 90, 'পরিকল্পনার মূল্যায়ন ছক পাক্ষিক  বাংলা ১', 'pdf', NULL, NULL),
(48, 91, 'বাংলাদেশ ও বিশ্বপরিচয় বিষয়ের পাক্ষিক মূল্যায়ন তথ্য সংগ্রহ ছক', 'pdf', NULL, NULL),
(48, 92, 'পাক্ষিক মূল্যায়ন', 'pdf', NULL, NULL),
(16, 93, 'পাঠ সমীক্ষা concept', 'pdf', NULL, NULL),
(22, 94, 'যোগাযোগ', 'pdf', NULL, NULL),
(49, 95, 'বাংলাদেশ ও বিশ্বপরিচয়', 'pdf', NULL, NULL),
(49, 96, 'বিজ্ঞান তথ্যপুস্তক', 'pdf', NULL, NULL),
(49, 97, 'পেশাগত শিক্ষা(১ম খন্ড) তথ্যপুস্তক', 'pdf', NULL, NULL),
(49, 98, 'পেশাগত শিক্ষা(২য় খন্ড) তথ্যপুস্তক', 'pdf', NULL, '2018-04-04 14:16:29'),
(49, 99, 'পেশাগত শিক্ষা(৩য় খন্ড) তথ্যপুস্তক', 'pdf', NULL, '2018-04-04 14:17:49');

-- --------------------------------------------------------

--
-- Table structure for table `folders`
--

CREATE TABLE `folders` (
  `folderID` int(11) NOT NULL,
  `rootID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `folder` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `folders`
--

INSERT INTO `folders` (`folderID`, `rootID`, `folder`, `created_at`, `updated_at`) VALUES
(3, '0', 'পিটিআই পরিচিতি', NULL, NULL),
(4, '0', 'ডিপিএড পরিচিতি', NULL, NULL),
(5, '0', 'ডিপিএড কাঠামো', NULL, '2018-03-20 12:57:38'),
(6, '0', 'ডিপিএড শিক্ষাক্রম', NULL, NULL),
(7, '0', 'বিদ্যালয় প্লেসমেট', NULL, '2018-02-21 14:47:18'),
(8, '0', 'স্তর ভিত্তিক পাঠদান পদ্ধতি', NULL, NULL),
(9, '0', 'বেসলাইন মূল্যায়ন', NULL, NULL),
(10, '0', 'পাঠ পরিকল্পনা', NULL, '2018-02-22 16:42:29'),
(11, '0', 'পোর্টফোলিও', NULL, NULL),
(12, '0', 'ডিপিএড মূল্যায়ন', NULL, '2018-02-22 16:00:32'),
(13, '0', 'অ্যাসাইনমেন্ট', NULL, NULL),
(14, '0', 'কেস স্টাডি', NULL, '2018-03-20 12:38:46'),
(15, '0', 'কর্ম সহায়ক গবেষণা', NULL, NULL),
(16, '0', 'পাঠ সমীক্ষা', NULL, NULL),
(17, '0', 'শিক্ষকমান', NULL, NULL),
(21, '0', 'রেফারেন্স বই/লাইব্রেরি', NULL, '2018-02-22 15:12:02'),
(22, '0', 'বিশেষজ্ঞের সাথে যোগাযোগ', NULL, '2018-02-23 08:00:33'),
(23, '18', '৪র্থ টার্ম', NULL, '2018-02-23 09:11:47'),
(25, '9', 'বেসলাইন টুলস তৈরি নির্দেশনা', NULL, '2018-02-23 08:24:07'),
(26, '9', 'বেসলাইন তথ্য সংগ্রহ ছক', NULL, '2018-02-23 08:30:46'),
(27, '8', '৪র্থ টার্ম মূল্যায়ন', NULL, '2018-02-22 16:20:51'),
(28, '0', 'ফলাফল', NULL, '2018-02-23 09:10:25'),
(29, '13', 'নমুনা অ্যাসাইনমেন্ট', NULL, '2018-02-22 15:05:54'),
(30, '14', 'নমুনা কেসস্টাডি', NULL, NULL),
(31, '17', 'শিক্ষকমান মুল্যায়ন ছক', NULL, '2018-03-20 11:28:58'),
(32, '7', '৪র্থ টার্ম', NULL, NULL),
(33, '8', 'স্তর ভত্তিক শ্রেণি পরিচালনার সময় বিভাজন', NULL, NULL),
(38, '10', 'স্তরভিত্তিক দৈনিক পাঠ পরিকল্পনা', NULL, NULL),
(39, '10', 'স্তরভিত্তিক পাক্ষিক পাঠ পরিকল্পনা', NULL, NULL),
(40, '10', 'প্রাক প্রাথমিক পাঠ পরিকল্পনা', NULL, NULL),
(41, '40', 'নমুনা পাঠ পরিকল্পনা', NULL, NULL),
(42, '38', 'নমুনা পাঠ পরিকল্পনা', NULL, NULL),
(43, '38', 'স্তরভিত্তিক দৈনিক পাঠ পরিকল্পনার ছক', NULL, NULL),
(44, '39', 'নমুনা পাক্ষিক পাঠ পরিকল্পনা', NULL, '2018-03-23 12:40:32'),
(45, '39', 'স্তরভিত্তিক পাক্ষিক পাঠ পরিকল্পনার ছক', NULL, NULL),
(46, '0', 'গুরুত্ত্বপূর্ণ ভিডিও', NULL, NULL),
(47, '40', 'পাক্ষিক পাঠ পরিকল্পনা', NULL, NULL),
(48, '0', 'পাক্ষিক মূল্যায়ন', NULL, NULL),
(49, '21', 'ডিপিএড বই', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sharif Noor Zisad', 'snzisad@gmail.com', '$2y$10$QSn5MsTEBPNSlJtSPlga7.Xhj/de791MG7QaXwJkjEaR6n52EpTiW', 'bEvNNsg2PvKp57pKGiQSgP2Jbrjob1yIR0BlKXmZPL23yIMNHwHph2NCmQyb', '2018-01-18 23:23:38', '2018-01-18 23:23:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`fileID`);

--
-- Indexes for table `folders`
--
ALTER TABLE `folders`
  ADD PRIMARY KEY (`folderID`);

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
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `fileID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `folders`
--
ALTER TABLE `folders`
  MODIFY `folderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
