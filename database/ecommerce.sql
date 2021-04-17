-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 17, 2021 at 07:22 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_ip` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`id`, `customer_ip`, `product_id`, `product_quantity`, `created_at`, `updated_at`) VALUES
(4, '127.0.0.1', 30, 1, '2021-04-17 19:02:51', NULL),
(5, '127.0.0.1', 29, 1, '2021-04-17 19:02:55', NULL),
(6, '127.0.0.1', 28, 1, '2021-04-17 19:03:00', NULL);

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
(1, 'Man', 1, '2019-12-05 09:22:38', '2021-04-17 13:20:25'),
(2, 'Woman', 0, '2019-12-05 10:25:45', '2021-04-17 17:59:48'),
(3, 'Child', 1, '2019-12-05 11:57:34', '2021-04-17 17:59:30'),
(4, 'Electronics', 1, '2019-12-05 11:57:50', NULL),
(5, 'Other', 1, '2019-12-05 11:58:10', NULL);

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
  `read_status` int(11) NOT NULL DEFAULT '1' COMMENT '1=unread, 2=read',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `full_name`, `email`, `subject`, `message`, `read_status`, `created_at`, `updated_at`) VALUES
(1, 'Md Aslam Hossain', 'aslamcsebd@gmail.com', 'make a project', 'it is a good project', 2, NULL, '2019-12-26 16:52:27'),
(3, 'Md Aslam Hossain', 'aslam323@gmail.com', 'It is just a subject', 'I want to make website...', 2, NULL, '2019-12-26 17:47:40'),
(4, 'Md Rakib', 'rakib@gmail.com', 'It is a subject', 'I make a website. Plz see if possible.', 1, NULL, NULL);

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
(5, '2019_11_26_194511_create_contacts_table', 1),
(6, '2019_12_01_021959_create_cards_table', 1);

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
(26, '3', 'Child design', 'Good product', 132, 12, 2, '26.jpg', '2019-12-05 12:01:50', '2019-12-08 18:23:57', '2019-12-08 18:23:57'),
(27, '3', 'New dress', 'Safe Trading Kids Dress Wear on Leading B2B Platform. Trusted China Suppliers Verified by SGS. China’s B2B Impact Award. Quality China Products. Leading B2B Portal. SGS Audited Suppliers. Highlights: Founded In 1998, A Comprehensive Third-Party B2B E-Commerce Portal,', 123, 3, 1, '27.jpg', '2019-12-05 12:03:51', '2019-12-08 18:23:59', '2019-12-08 18:23:59'),
(28, '3', 'New cap', 'Safe Trading Kids Dress Wear on Leading B2B Platform. Trusted China Suppliers Verified by SGS. China’s B2B Impact Award. Quality China Products. Leading B2B Portal. SGS Audited Suppliers. Highlights: Founded In 1998, A Comprehensive Third-Party B2B E-Commerce Portal,', 124, 4, 2, '28.jpg', '2019-12-05 12:04:24', '2019-12-05 12:04:25', NULL),
(29, '3', 'Blue dress', 'Safe Trading Kids Dress Wear on Leading B2B Platform. Trusted China Suppliers Verified by SGS. China’s B2B Impact Award. Quality China Products. Leading B2B Portal. SGS Audited Suppliers. Highlights: Founded In 1998, A Comprehensive Third-Party B2B E-Commerce Portal,', 23, 2, 1, '29.jpg', '2019-12-05 12:05:36', '2019-12-05 12:05:37', NULL),
(30, '3', 'Child Red shart', 'Safe Trading Kids Dress Wear on Leading B2B Platform. Trusted China Suppliers Verified by SGS. China’s B2B Impact Award. Quality China Products. Leading B2B Portal. SGS Audited Suppliers. Highlights: Founded In 1998, A Comprehensive Third-Party B2B E-Commerce Portal,', 34, 10, 2, '30.jpg', '2019-12-05 12:06:37', '2019-12-05 12:06:38', NULL),
(31, '1', 'Black tie', 'Trusted results for Skin Care Products For Men. Check Visymo Search for the best results! Unlimited Access. Results & Answers. The Best Resources. Always Facts. 100% Secure. Privacy Friendly. Types: Best Results, Explore Now, New Sources, Best in Search', 45, 4, 1, '31.jpg', '2019-12-05 12:09:44', '2019-12-05 12:09:45', NULL),
(32, '1', 'White product', 'Trusted results for Skin Care Products For Men. Check Visymo Search for the best results! Unlimited Access. Results & Answers. The Best Resources. Always Facts. 100% Secure. Privacy Friendly. Types: Best Results, Explore Now, New Sources, Best in Search', 54, 4, 1, '32.jpg', '2019-12-05 12:10:19', '2019-12-05 12:10:20', NULL),
(33, '1', 'White shart', 'Trusted results for Skin Care Products For Men. Check Visymo Search for the best results! Unlimited Access. Results & Answers. The Best Resources. Always Facts. 100% Secure. Privacy Friendly. Types: Best Results, Explore Now, New Sources, Best in Search', 56, 5, 1, '33.jpg', '2019-12-05 12:11:02', '2019-12-05 12:11:03', NULL),
(34, '1', 'New product', 'Trusted results for Skin Care Products For Men. Check Visymo Search for the best results! Unlimited Access. Results & Answers. The Best Resources. Always Facts. 100% Secure. Privacy Friendly. Types: Best Results, Explore Now, New Sources, Best in Search', 67, 6, 1, '34.jpg', '2019-12-05 12:11:37', '2019-12-08 18:23:50', '2019-12-08 18:23:50'),
(36, '4', 'AsasDSS', 'good', 12, 3, 1, '36.jpg', '2019-12-05 17:13:30', '2019-12-26 18:15:27', '2019-12-26 18:15:27');

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
(1, 'Md Aslam Hossain', 'aslamcsebd@gmail.com', NULL, '$2y$10$FD0V2ZTkd6HMZjFHwnx84epa0vz3etqBsyouUQqyCYSo8LDdZlNAO', NULL, '2021-04-17 11:41:59', '2021-04-17 11:41:59');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
