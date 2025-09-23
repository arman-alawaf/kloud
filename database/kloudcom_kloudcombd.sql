-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 18, 2025 at 09:04 AM
-- Server version: 10.6.23-MariaDB
-- PHP Version: 8.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kloudcom_kloudcombd`
--

-- --------------------------------------------------------

--
-- Table structure for table `apps`
--

CREATE TABLE `apps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `facebook_pixel` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apps`
--

INSERT INTO `apps` (`id`, `title`, `favicon`, `logo`, `description`, `facebook_pixel`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, '2025-07-22 05:48:08');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(15, 'Ovijit Shaha', 'job.ovijit@gmail.com', '01973750015', 'hi', '2025-07-21 06:33:43', '2025-07-21 06:33:43'),
(18, 'June', 'connect@leaseip.top', '+85252949801', 'Dear Team，\r\nIt was a pleasure connecting at the APINC 2025. Should you have any needs for lP addresses? Our platform provides a one-stop solution for IPv4 leasing, purchasing, and selling, with a wide range of address blocks available to meet diverse needs. Please don’t hesitate to reach out.\r\nThank you for considering this opportunity to collaborate.\r\nBest regards,\r\nIPv4 Superhub', '2025-07-31 07:46:37', '2025-07-31 07:46:37'),
(19, 'Md Aslam Hossain', 'aslamhossain08@gmail.com', '01718675107', 'আইপি টিভি দেখতে চাইলিংক চাই', '2025-08-03 16:32:07', '2025-08-03 16:32:07'),
(20, 'Wahid Tousif Tafsir', 'wahidtafsir86@gmail.com', '01724356035', 'do you have coverage in Sreemangal?', '2025-08-29 13:13:23', '2025-08-29 13:13:23'),
(21, 'MD Al Amin Hawlader, ID : KTL7501', 'm.h.a45604588@gmail.com', '01927487448', 'Need FTP & BDIX server link\r\nMD.ALAMIN HAWLADER:\r\nName : Al_amin_Miapara\r\nID: KTL7501', '2025-09-03 13:25:54', '2025-09-03 13:25:54'),
(22, 'Md Akib', 'akib1213141516@gmail.com', '01770672145', 'Ftp server nai', '2025-09-07 04:37:21', '2025-09-07 04:37:21'),
(23, 'SM.Rakib', 'rakibsouthbanglabd@gmail.com', '01678040449', 'আসসালামু আলাইকুম\r\n\r\nপ্রিয় স্যার,\r\n\r\nআমি আমাদের কোম্পানি SOUTH BANGLA COMPUTERS.  এর সাথে পরিচয় করিয়ে দিতে চাই।  যেটি বিগত ২৫,বছর ধরে ব্যবসায়িক নেটওয়ার্কিং পণ্যে রয়েছে ।  আমরা সেরা গ্রাহক সন্তুষ্টির জন্য একটি চমৎকার ট্র্যাক রেকর্ড সহ একটি প্রতিষ্ঠিত এবং জনপ্রিয় আইটি কোম্পানি হয়েছি। আমরা কখনই মানের এবং গ্রাহককে দেওয়া পরিষেবাগুলির সাথে আপস করিনি। আমরা গ্রাহকদের খুশি রাখতে এবং তাদের খুব প্রতিযোগিতামূলক মূল্যে পণ্য সরবরাহে বিশ্বাস করি। আমরা Tenda, রাউটারের একচেটিয়া পরিবেশক। এছাড়াও আমরা বাংলাদেশে Cisco, Solitine, MeeTion, HKC-Monitor, Rosenberger Cable এর অংশীদার।\r\nআমাদের সাথে যুক্ত থাকুন এবং নতুন নতুন পণ্যের জন্য আমাদের সাথে থাকুন,\r\n\r\nআমাদের পন্য সমূহের আপডেট  জানতে ভিজিট করুন:\r\nWebsite: www.southbanglabd.com \r\n  \r\nআপনার যেকোনো আইটি-নেটওয়ার্কিং পণ্যের প্রয়োজন হলে, আপনি আমার সাথে যোগাযোগ করতে পারেন।\r\n\r\nSouth Bangla Computers\r\nCorporte Office:\r\nS.M. Rakib\r\nSr.Sales Executive\r\nMobile:-01678040449 \r\nEmail: rakibsouthbanglabd@gmail.com \r\n323, Akram Serenity, Level, 5 & 6. Elephant Road, Dhaka-1205.', '2025-09-11 09:17:52', '2025-09-11 09:17:52'),
(24, 'SM.Rakib', 'rakibsouthbanglabd@gmail.com', '01678040449', 'Assalamu Alaikum\r\n\r\nDear Sir,\r\n\r\nI would like to introduce our company SOUTH BANGLA COMPUTERS. which has been in the business networking products for the past 25 years. We have become an established and popular IT company with an excellent track record for best customer satisfaction. We have never compromised on quality and services provided to the customer. We believe in keeping the customers happy and providing them with products at very competitive prices. We are the exclusive distributor of Tenda, Routers. We are also partners of Cisco, Solitine, MeeTion, HKC-Monitor, Rosenberger, Cable in Bangladesh.\r\n\r\nOur aim is to provide the highest quality after-sales service and warranty support to our customers. We are constantly expanding our product range and improving our service standards to meet your needs. We offer a carefully selected range of high-quality products including Mail Servers, Ethernet Switches, Enterprise Wireless Solutions, Structured LAN Cabling, Network Cabinets, Outdoor Wireless Equipment, and Professional Tools and Testers. Stay connected with us and stay tuned for new products,\r\n\r\nFor updates on our products, visit:\r\nWebsite: www.southbanglabd.com\r\n\r\nIf you need any IT-Networking products, you can contact me.\r\n\r\nSouth Bangla Computers\r\nCorporte Office:\r\nS.M. Rakib\r\nSr.Sales Executive\r\nMobile:-01678040449\r\nEmail: rakibsouthbanglabd@gmail.com\r\n323, Akram Serenity, Level, 5 & 6. Elephant Road, Dhaka-1205.', '2025-09-11 09:23:23', '2025-09-11 09:23:23'),
(25, 'Shihab', 'shihab.nc@gmail.com', '01912699099', 'I am Shihab, an internet service provider. I’m looking to purchase approximately 2000 Mbps of bandwidth.\r\nCould you please share the current pricing details and available payment methods?\r\n\r\nThank you.', '2025-09-12 17:25:46', '2025-09-12 17:25:46');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2025_07_20_070222_create_contacts_table', 2),
(8, '2025_07_21_142824_create_apps_table', 4),
(9, '2025_07_21_145749_create_orders_table', 5),
(10, '2025_07_21_134357_create_packages_table', 6),
(11, '2025_08_06_145622_create_news_table', 7),
(12, '2025_09_14_044556_create_sliders_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `image`, `description`, `created_at`, `updated_at`) VALUES
(5, 'News 1', 'news-1', '1754563346.jpg', '<h2>What is Lorem Ipsum?</h2><p>&nbsp;</p><p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br><img src=\"https://t3.ftcdn.net/jpg/00/82/30/70/360_F_82307047_vMqQun5fjBzuJF0o2brRxYIs9Ix62fco.jpg\" alt=\"Demo Images – Browse 99,477 Stock Photos, Vectors, and Video | Adobe Stock\"></p><h2>Why do we use it?</h2><p>&nbsp;</p><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', '2025-08-06 16:46:06', '2025-08-07 10:50:24'),
(6, 'News 2', 'news-2', '1754563362.jpg', NULL, '2025-08-06 16:46:40', '2025-08-07 10:50:18'),
(7, 'News 3', 'news-3', '1754563371.jpg', NULL, '2025-08-06 16:46:55', '2025-08-07 10:50:11');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `package_id`, `name`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(13, '9', 'Zane Bean', 'sifa@mailinator.com', '+1 (775) 323-5435', '2025-08-01 06:11:53', '2025-08-01 06:11:53'),
(14, '8', 'Chaon Chandro', 'chaonray@gmail.com', '01750214654', '2025-08-08 13:11:45', '2025-08-08 13:11:45'),
(15, '8', 'Chaon Chandro', 'chaonray@gmail.com', '01750214654', '2025-08-08 13:11:49', '2025-08-08 13:11:49'),
(16, '13', 'wahed Tousif Tafsir', 'wahidtafsir86@gmail.com', '01724356035', '2025-08-11 16:01:25', '2025-08-11 16:01:25'),
(17, '14', 'Wahid Tousif Tafsir', 'wahidtafsir86@gmail.com', '01724356035', '2025-08-29 13:01:59', '2025-08-29 13:01:59'),
(18, '8', 'Chaon Chandro', 'chaonray@gmail.com', '+8801750214654', '2025-09-06 20:28:47', '2025-09-06 20:28:47'),
(19, '8', 'Shihab', 'shihabuddin644@gmail.com', '01718201751', '2025-09-10 11:02:48', '2025-09-10 11:02:48'),
(20, '8', 'Shihab', 'ashik@shihab', '01718201751', '2025-09-12 07:57:21', '2025-09-12 07:57:21');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `plan` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `feature` varchar(255) DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `type`, `plan`, `name`, `price`, `feature`, `created_by`, `updated_by`, `deleted_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(8, 'Residentials', '35 Mbps', 'Kloud Mini', '699', NULL, 1, 1, NULL, NULL, '2025-07-26 07:01:51', '2025-07-26 07:06:10'),
(9, 'Residentials', '45 Mbps', 'Kloud Stream', '899', NULL, 1, 1, NULL, NULL, '2025-07-26 07:02:20', '2025-07-26 07:06:02'),
(10, 'Residentials', '55 Mbps', 'Kloud Neo', '999', NULL, 1, 1, NULL, NULL, '2025-07-26 07:02:43', '2025-07-26 07:05:55'),
(11, 'Residentials', '75 Mbps', 'Kloud Boost+', '1499', NULL, 1, 1, NULL, NULL, '2025-07-26 07:03:05', '2025-07-26 07:05:48'),
(12, 'Residentials', '100 Mbps', 'Kloud Edge', '1899', NULL, 1, 1, NULL, NULL, '2025-07-26 07:03:27', '2025-07-26 07:05:40'),
(13, 'Residentials', '200 Mbps', 'Kloud Blaze', '2899', NULL, 1, 1, NULL, NULL, '2025-07-26 07:03:51', '2025-07-26 07:05:32'),
(14, 'Residentials', '300 Mbps', 'Kloud Elite', '4999', NULL, 1, 1, NULL, NULL, '2025-07-26 07:04:14', '2025-07-26 07:05:21');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'test', '1757826034.png', '2025-09-14 05:00:34', '2025-09-14 05:00:34'),
(2, 'abc', '1757826145.png', '2025-09-14 05:02:25', '2025-09-14 05:02:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'User' COMMENT 'User,Admin',
  `developer` varchar(255) NOT NULL DEFAULT 'No' COMMENT 'No,Yes',
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `type`, `developer`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Arman Sharif', 'Admin', 'Yes', 'arman.dev.bd@gmail.com', NULL, '$2y$10$yC.vfkepqZp3FiKNIzeftu5Id1Wa6D33w2CCYfho0h54HzU1B5tsW', NULL, '2025-07-20 00:42:51', '2025-07-20 00:42:51'),
(3, 'Arman', 'Admin', 'No', 'arman@gmail.com', NULL, '$2y$10$1gt7yy4SQqZLcoP6Re0jUOPIC14zJTlPjJxG9J7o/tVMLcKUXr0Bq', NULL, '2025-07-20 02:06:10', '2025-07-26 07:07:05'),
(4, 'Ovijit Shaha', 'User', 'No', 'admin@gmail.com', NULL, '$2y$10$ZgV1/neVhCb2fxyYmjdH1uzHlDtfEGRscfgUdwbccP0rRQGPMArRG', NULL, '2025-07-21 06:32:27', '2025-07-26 06:59:43'),
(5, 'adminxp', 'User', 'No', 'adminxp@gmail.com', NULL, '$2y$10$4ltlyN7bFNG2deo9aw.lf.VuSl1F6FFS5uvpA.r.lhOI8F13jn0ri', NULL, '2025-09-14 14:54:02', '2025-09-14 14:54:02'),
(6, 'adminexp', 'User', 'No', 'adminexp@gmail.com', NULL, '$2y$10$PGhvELkU/RPUkuUEgcYh0uIapXaHDkBnSeKeKIdtolRp1LBOBxj.q', NULL, '2025-09-16 05:42:51', '2025-09-16 05:42:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apps`
--
ALTER TABLE `apps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
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
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
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
-- AUTO_INCREMENT for table `apps`
--
ALTER TABLE `apps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
