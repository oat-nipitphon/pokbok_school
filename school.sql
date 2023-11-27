-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2021 at 02:33 PM
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
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_config` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `datacontents`
--

CREATE TABLE `datacontents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `duc_file` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_sub` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `datacontents`
--

INSERT INTO `datacontents` (`id`, `title_name`, `content`, `img_content`, `duc_file`, `icon`, `type`, `link`, `link_sub`, `created_at`, `updated_at`) VALUES
(3, 'The PHP Framework', 'Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.', '1635265578.jpg', '1635265578.pdf', '1635265578.jpg', '1', 'http://anubanchon.ac.th/mainpage?fbclid=IwAR087UjDmJ_ozsfRSnJS66-Ve21MRyh8nASYiE-3MUXbFwFi8Xm5IHRNNyI', 'https://www.nicesnippets.com/blog/laravel-8-file-upload-example', '2021-10-27 22:15:04', '2021-10-21 22:15:04'),
(4, 'การศึกษา สาธารณสุข 24 ตุลาคม', '24 ต.ค. 64 – กรุงเทพมหานคร โดย สำนักอนามัย เผยรายชื่อ 63 โรงเรียนแรก ในพื้นที่กรุงเทพมหานคร ที่ได้รับอนุญาตให้เปิดการเรียนการสอนได้ โดยขอให้ดำเนินการตามมาตรการป้องกันโรคโควิด -19 อย่างเคร่งครัด', '1635796625.png', '1635796625.pdf', '1635796625.png', '3', 'http://anubanchon.ac.th/mainpage?fbclid=IwAR087UjDmJ_ozsfRSnJS66-Ve21MRyh8nASYiE-3MUXbFwFi8Xm5IHRNNyI', 'https://www.youtube.com/watch?v=9SOaXqA9uag&list=RDLx4ka2qBY_A&index=12', '2021-10-28 00:58:02', '2021-10-24 00:58:02'),
(9, 'ภาพกิจกรรม', 'ภาพกิจกรรมภาพกิจกรรมภาพกิจกรรมภาพกิจกรรมภาพกิจกรรมภาพกิจกรรมภาพกิจกรรมภาพกิจกรรมภาพกิจกรรม', '1635274931.jpg', '1635274931.pdf', '1635274931.jpg', '2', 'http://anubanchon.ac.th/mainpage?fbclid=IwAR087UjDmJ_ozsfRSnJS66-Ve21MRyh8nASYiE-3MUXbFwFi8Xm5IHRNNyI', 'http://anubanchon.ac.th/mainpage?fbclid=IwAR087UjDmJ_ozsfRSnJS66-Ve21MRyh8nASYiE-3MUXbFwFi8Xm5IHRNNyI', '2021-10-28 12:02:11', '2021-10-26 12:02:11'),
(10, 'ข่าวประชาสัมพันธ์', 'ข่าวประชาสัมพันธ์ข่าวประชาสัมพันธ์ข่าวประชาสัมพันธ์ข่าวประชาสัมพันธ์ข่าวประชาสัมพันธ์ข่าวประชาสัมพันธ์ข่าวประชาสัมพันธ์', '1635274984.jpg', '1635274984.pdf', '1635274984.jpg', '1', 'http://anubanchon.ac.th/mainpage?fbclid=IwAR087UjDmJ_ozsfRSnJS66-Ve21MRyh8nASYiE-3MUXbFwFi8Xm5IHRNNyI', 'https://www.youtube.com/watch?v=YiloegUaxwk', '2021-10-26 12:03:04', '2021-10-26 12:03:04'),
(11, 'ข่าวการศึกษา', 'ข่าวการศึกษาข่าวการศึกษาข่าวการศึกษาข่าวการศึกษาข่าวการศึกษาข่าวการศึกษาข่าวการศึกษาข่าวการศึกษา', '1635275029.jpg', '1635275029.pdf', '1635275029.jpg', '3', 'https://www.youtube.com/watch?v=YiloegUaxwk', 'https://www.youtube.com/watch?v=YiloegUaxwk', '2021-10-26 12:03:49', '2021-10-26 12:03:49'),
(12, 'Associating form text with form controls', 'Associating form text with form controls\r\nForm text should be explicitly associated with the form control it relates to using the aria-describedby attribute. This will ensure that assistive technologies—such as screen readers—will announce this form text when the user focuses or enters the control.', '1635279538.jpg', '1635279538.pdf', '1635279538.jpg', '2', 'https://getbootstrap.com/docs/5.0/forms/overview/', 'https://getbootstrap.com/docs/5.0/components/modal/', '2021-10-26 13:18:58', '2021-10-26 13:18:58');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_school` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_dow` double NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `itas`
--

CREATE TABLE `itas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sub_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_menu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_menu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_ita` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duc_file` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `itas`
--

INSERT INTO `itas` (`id`, `sub_id`, `title_name`, `content`, `title_menu`, `sub_menu`, `image_ita`, `duc_file`, `created_at`, `updated_at`) VALUES
(6, NULL, 'โครงสร้างหน่วยงาน', 'โครงสร้างหน่วยงาน', NULL, NULL, '1635801158.jpg', '1635801158.jpg', '2021-11-01 14:12:38', '2021-11-01 14:12:38'),
(7, NULL, 'อำนาจหน้าที่', 'อำนาจหน้าที่', NULL, NULL, '1635801829.png', '1635801829.pdf', '2021-11-01 14:17:18', '2021-11-01 14:17:18'),
(8, NULL, 'Examples', 'Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies – such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (e.g. the visible text), or is included through alternative means, such as additional text hidden with the .visually-hidden class.', NULL, NULL, '1635819641.png', '1635819641.pdf', '2021-11-01 19:20:41', '2021-11-01 19:20:41');

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
(5, '2021_10_16_050911_create_itas_table', 1),
(6, '2021_10_16_050933_create_documents_table', 1),
(7, '2021_10_18_150856_create_data_contents_table', 1),
(8, '2021_10_18_151036_create_web_boards_table', 1),
(9, '2021_10_18_151154_create_contact_us_table', 1);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_user` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

INSERT INTO `users` (`id`, `name`, `position`, `time_position`, `image_user`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', NULL, NULL, 'admin@gmail.com', NULL, '$2y$10$k5ervDMZxUqLnc2xCtLDMusEqdV7iC9A7Tbh4xU29g9iWj9i3dW62', 'lfNmQQoDlqBUs3MbSWs8bz4XkUXMLr9uggQnFjynH96QeK0LEQNxehzBfBs6', '2021-10-19 06:05:35', '2021-10-19 06:05:35');

-- --------------------------------------------------------

--
-- Table structure for table `web_boards`
--

CREATE TABLE `web_boards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `list` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_post` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `port_content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datacontents`
--
ALTER TABLE `datacontents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `itas`
--
ALTER TABLE `itas`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `web_boards`
--
ALTER TABLE `web_boards`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `datacontents`
--
ALTER TABLE `datacontents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `itas`
--
ALTER TABLE `itas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `web_boards`
--
ALTER TABLE `web_boards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
