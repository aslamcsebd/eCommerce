-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2019 at 05:27 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_ip` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`id`, `customer_ip`, `product_id`, `product_quantity`, `created_at`, `updated_at`) VALUES
(11, '127.0.0.1', 1, 4, '2019-12-01 04:19:13', '2019-12-01 04:20:39');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `menu_status`, `created_at`, `updated_at`) VALUES
(1, 'Man', 1, '2019-11-25 14:10:46', '2019-11-30 18:44:51'),
(2, 'Woman', 1, '2019-11-25 14:10:59', '2019-11-30 18:53:20'),
(3, 'Child', 1, '2019-11-25 14:21:28', '2019-11-30 18:53:18'),
(4, 'Home App', 1, '2019-11-26 04:48:58', '2019-11-30 18:44:24');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_status` int(11) NOT NULL DEFAULT 1 COMMENT '1=unread, 2=read',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `full_name`, `email`, `subject`, `message`, `read_status`, `created_at`, `updated_at`) VALUES
(18, 'Md Aslam', 'aslam323@gmail.com', 'message', 'I am a softwere engineer...', 1, NULL, NULL),
(19, 'Md Aslam', 'aslam123@gmail.com', 'message', 'I m a softwere engineer...', 1, NULL, NULL),
(20, 'Md Aslam', 'as@gmail.com', 'message', 'I m a softwere engineer...', 2, NULL, '2019-11-30 21:56:47'),
(21, 'Md Aslam', 'a34s@gmail.com', 'message', 'i m softwere engineer...', 1, NULL, NULL),
(22, 'Md Aslam', 'ka34s@gmail.com', 'message', 'sddfghj', 1, NULL, NULL),
(23, 'Md Aslam', 'jka34s@gmail.com', 'message', 'hjhj', 1, NULL, NULL),
(24, 'Md Aslam', 'jaka34s@gmail.com', 'message', 'hjhj', 1, NULL, NULL),
(25, 'Md Aslam', 'swejaka34s@gmail.com', 'message', 'aslam my name', 1, NULL, NULL),
(26, 'Md Aslam', 'skwejaka34s@gmail.com', 'message', 'aasas', 1, NULL, NULL),
(27, 'Md Aslam', 'skkwejaka34s@gmail.com', 'message', 'aasas', 1, NULL, NULL),
(28, 'Md Aslam', 'skkwejakalk34s@gmail.com', 'message', 'aslam', 1, NULL, NULL),
(29, 'Md Aslam', 'skkkwejakalk34s@gmail.com', 'message', 'kll', 1, NULL, NULL),
(30, 'Md Aslam', 'oakalk34s@gmail.com', 'message', 'aslam', 1, NULL, NULL),
(31, 'Md Aslam', 'oakalkk34s@gmail.com', 'message', 'k', 1, NULL, NULL),
(32, 'Md Aslam', 'oxakalkk34s@gmail.com', 'message', 'x', 1, NULL, NULL),
(33, 'Aslamctg3', 'aslamaa@gmail.com', 'sms', 'aslam', 1, NULL, NULL),
(34, 'aslam', 'asleeam323@gmail.com', 'aslam3', 'aslam', 1, NULL, NULL),
(35, 'Md Aslam', 'aslesseam323@gmail.com', 'aslam3', 'sms', 1, NULL, NULL),
(36, 'Md Aslam', 'aszlesseam323@gmail.com', 'zz', 'smszz', 1, NULL, NULL),
(37, 'Md Aslam3', 'addslam323@gmail.com', 'zz', 'smszz', 1, NULL, NULL),
(38, 'Md Aslam3x', 'addxslam323@gmail.com', 'zz', 'smszz', 1, NULL, NULL),
(39, 'Md Aslam3x', 'adsdxslam323@gmail.com', 'zz', 'ss', 1, NULL, NULL),
(40, 'Md Aslam3xs', 'adssdxslam323@gmail.com', 'zz', 'I m web developer', 1, NULL, NULL),
(41, 'Md Aslam3xs', 'adsxsdxslam323@gmail.com', 'zz', 'xx', 1, NULL, NULL),
(42, 'Md Aslam3xs', 'adcsxsdxslam323@gmail.com', 'zz', 'xxc', 1, NULL, NULL),
(43, 'Md Aslam3xs', 'aaadcsxsdxslam323@gmail.com', 'zz', 'aa', 1, NULL, NULL),
(44, 'Md Aslam3xs', 'xaaadcsxsdxslam323@gmail.com', 'zz', 'aax', 1, NULL, NULL),
(45, 'Md Aslam3xs', 'aska@gmail.com', 'zz', 'aa', 1, NULL, NULL),
(46, 'Md Aslam3xs', 'aaaska@gmail.com', 'zz', 'aaaa', 1, NULL, NULL),
(47, 'Md Aslam3xs', 'aaaska@gmail.com', 'zz', 'zz', 1, NULL, NULL),
(48, 'aslam', 'aslam323@gmail.com', 'sms', 'message', 1, NULL, NULL),
(49, 'aslam', 'aslam323@gmail.com', 'sms', 'message', 1, NULL, NULL),
(50, 'Aslam', 'aslam@gmail.com', 'message', 'I m softwere engineer...', 1, NULL, NULL),
(51, 'Aslam', 'aslam@gmail.com', 'message', 'I m softwere engineer...', 1, NULL, NULL),
(52, 'Aslam', 'aslam@gmail.com', 'message', 'I m softwere engineer...', 1, NULL, NULL),
(53, 'Aslam', 'aslam@gmail.com', 'message', 'I m softwere engineer...', 1, NULL, NULL),
(54, 'Aslam', 'aslam@gmail.com', 'message', 'I m softwere engineer...', 1, NULL, NULL),
(55, 'Aslam', 'aslam@gmail.com', 'message', 'I m softwere engineer...', 1, NULL, NULL),
(56, 'Aslam', 'aslam@gmail.com', 'message', 'I m softwere engineer...', 1, NULL, NULL),
(57, 'Aslam', 'aslam@gmail.com', 'message', 'I m softwere engineer', 1, NULL, NULL),
(58, 'aslam', 'aslam323@gmail.com', 'message', 'message', 1, NULL, NULL),
(59, 'aslam', 'aslam323@gmail.com', 'message', 'message', 1, NULL, NULL),
(60, 'aslam', 'aslam323@gmail.com', 'message', 'message', 1, NULL, NULL),
(61, 'aslam', 'aslam323@gmail.com', 'message', 'message', 1, NULL, NULL),
(62, 'aslam', 'aslam323@gmail.com', 'message', 'message', 1, NULL, NULL),
(63, 'aslam', 'aslam323@gmail.com', 'message', 'message', 1, NULL, NULL),
(64, 'aslam', 'aslam323@gmail.com', 'message', 'message', 1, NULL, NULL),
(65, 'aslam', 'aslam323@gmail.com', 'message', 'message', 1, NULL, NULL),
(66, 'aslam', 'aslam323@gmail.com', 'message', 'message', 1, NULL, NULL),
(67, 'aslam', 'aslam323@gmail.com', 'message', 'this is message', 1, NULL, NULL),
(68, 'aslam', 'aslam323@gmail.com', 'message', 'this is message', 1, NULL, NULL),
(69, 'aslam', 'aslam323@gmail.com', 'message', 'this is message', 1, NULL, NULL),
(70, 'Md aslam', 'aslam323@gmail.com', 'subjet', 'it is message', 1, NULL, NULL),
(71, 'Md aslam', 'aslam323@gmail.com', 'subjet', 'it is message', 1, NULL, NULL),
(73, 'Md Aslam Hossain', 'aslamhossainctg@gmail.com', 'Prayer for developer application', 'Hi sir.\r\nI m from Bangladesh.\r\nI want to join with your live \"Laravel project\".\r\nPlease receive my application.\r\n\r\nNo more today, take care your valuable health...\r\n\r\n:)', 1, NULL, NULL);

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
(3, '2019_10_08_125632_create_products_table', 1),
(4, '2019_11_21_135247_create_categories_table', 1),
(6, '2019_11_26_194511_create_contacts_table', 2),
(7, '2019_12_01_021959_create_cards_table', 3);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `alert_quantity` int(11) NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'product_default_image.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `price`, `quantity`, `alert_quantity`, `product_image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', 'apple imac', 'better', 1232, 3, 65, '1.jpg', '2019-11-25 14:48:49', '2019-11-25 14:48:50', NULL),
(2, '2', 'apple laptop', 'Asus', 230, 3, 65, '2.jpg', '2019-11-25 14:49:12', '2019-11-25 14:49:12', NULL),
(3, '2', 'Man', 'hj', 110, 3, 65, '3.jpg', '2019-11-25 14:49:34', '2019-11-25 14:49:35', NULL),
(4, '3', 'apple laptop', 'Asus', 230, 3, 87, '4.jpg', '2019-11-25 14:50:03', '2019-11-25 14:50:03', NULL),
(5, '2', 'apple laptop', 'Asus', 1232, 3, 90, '5.jpg', '2019-11-25 14:50:30', '2019-11-25 14:50:30', NULL),
(6, '3', 'apple imac222', 'good apple', 110, 0, 1, '6.jpg', '2019-11-25 14:51:00', '2019-11-25 14:51:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Aslam', 'aslamcsebd@gmail.com', NULL, '$2y$10$.eZn4AUws1D7kYQLZD6qy.bp1znSfZ1tteXKC3sx5iGSNEzXCchWC', NULL, '2019-11-26 06:21:31', '2019-11-26 06:21:31'),
(2, 'Aslam', 'aslamhossainctg@gmail.com', NULL, '$2y$10$dWE3uwbg0MqK3XTxADgBPubT/5YeunzMhUboDjjpRRWC5Z722BO9O', 'ZU3zDDGwINYFbcbRdyIq9XwANUYlfvpCXnUzZFdYLXpdDFZuZopgaSSU2QAI', '2019-11-27 12:37:02', '2019-11-30 06:35:35'),
(3, 'Aslam', 'aslam@gmail.com', NULL, '$2y$10$dWE3uwbg0MqK3XTxADgBPubT/5YeunzMhUboDjjpRRWC5Z722BO9O', 'ZU3zDDGwINYFbcbRdyIq9XwANUYlfvpCXnUzZFdYLXpdDFZuZopgaSSU2QAI', '2019-11-27 12:37:02', '2019-11-30 06:35:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
