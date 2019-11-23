-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2019 at 02:09 PM
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
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Man', '2019-11-21 20:20:35', NULL),
(2, 'Woman', '2019-11-21 20:21:13', NULL),
(3, 'Child', '2019-11-21 20:21:21', NULL),
(4, 'Home app', '2019-11-21 20:21:30', NULL);

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
(8, '2019_10_08_125632_create_products_table', 2),
(9, '2019_11_21_135247_create_categories_table', 2);

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
(1, '1', 'apple laptop', 'better', 1232, 111, 90, 'product_default_image.jpg', '2019-11-21 20:16:53', '2019-11-22 19:29:45', '2019-11-22 19:29:45'),
(2, '2', 'apple imac', 'good', 110, 22, 21, '2.jpg', '2019-11-21 20:22:29', '2019-11-22 19:29:48', '2019-11-22 19:29:48'),
(3, '4', 'Pendrive', 'better', 120, 20, 2, 'product_default_image.jpg', '2019-11-21 20:24:30', '2019-11-22 19:29:52', '2019-11-22 19:29:52'),
(4, '1', 'Man', 'hj', 67, 77, 7, '4.jpg', '2019-11-22 19:30:17', '2019-11-22 19:30:18', NULL),
(5, '1', 'man2', 'uy', 78, 78, 78, '5.jpg', '2019-11-22 19:30:46', '2019-11-22 19:30:46', NULL),
(6, '2', 'woman', 'hj', 76, 76, 76, '6.jpg', '2019-11-22 19:31:06', '2019-11-22 19:31:06', NULL),
(7, '2', 'woman2', 'hjk', 87, 87, 87, '7.jpg', '2019-11-22 19:31:28', '2019-11-22 19:31:28', NULL),
(8, '3', 'child', 'yuyu', 78, 78, 65, '8.jpg', '2019-11-22 19:32:04', '2019-11-22 19:32:04', NULL),
(9, '3', 'child2', 'hg', 56, 5, 65, '9.jpg', '2019-11-22 19:32:43', '2019-11-22 19:32:44', NULL),
(10, '4', 'home', 'jkj', 90, 90, 87, '10.jpg', '2019-11-22 19:33:09', '2019-11-22 19:33:09', NULL),
(11, '4', 'Home2', 'jkjk', 89, 98, 80, '11.jpg', '2019-11-22 19:33:35', '2019-11-22 19:33:36', NULL);

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
(1, 'Aslam', 'aslam@gmail.com', NULL, '$2y$10$mqMWgKqfo5/UNHDGt8PPA.2OyB1zj.CJX6oqb02zbJAs7Az9JbfT.', 'w9OvfRwV3JZeXIYfghLOldMOBab1jwkDajCAAldLBjBCpVizta6pdeVtg214', '2019-09-12 00:16:20', '2019-09-12 00:16:20'),
(2, 'Md Aslam Hossain CTG', 'aslamcsebd@gmail.com', NULL, '$2y$10$ekgVjCiPFcQYyTlMZeH1sev.oyOBmlSET6vF1r88Jqdq2BDUh85ie', NULL, '2019-10-06 07:46:25', '2019-10-06 07:46:25'),
(3, 'Aslam', 'aslamhossainctg@gmail.com', NULL, '$2y$10$.RA2Vnyp7Gdnq2cPMvDmfuAejBruVIrgikECMhUAckddK/msjVLW6', NULL, '2019-10-07 01:42:59', '2019-10-07 01:42:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
