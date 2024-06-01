-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2024 at 07:55 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravecom_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `username`, `email`, `password`, `picture`, `created_at`, `updated_at`) VALUES
(1, 'John Duson Jr. (admin)', 'admin', 'admin@email.com', '$2y$10$39uEH/Yzh6AC2ygxO/LDB.F8HxFoqpeG3cEvl83NbBrXWdXNtF0Lm', 'ADMIN_IMG_52211686822237648add5d42195.jpg', '2023-05-18 15:10:37', '2023-06-20 16:53:32');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_slug` varchar(255) NOT NULL,
  `category_image` varchar(255) NOT NULL,
  `ordering` int(11) NOT NULL DEFAULT 10000,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_slug`, `category_image`, `ordering`, `created_at`, `updated_at`) VALUES
(9, 'Electronics', 'electronics', '1709304608_electronics.png', 1, '2024-02-29 06:50:36', '2024-03-05 09:18:27'),
(10, 'Sports, Fitness & Outdoor', 'sports-fitness-outdoor', '1709304626_sports.png', 2, '2024-02-29 06:51:47', '2024-03-05 09:18:27'),
(11, 'Health & Beauty', 'health-beauty', '1709304641_facial-massage.png', 3, '2024-02-29 06:55:01', '2024-03-04 12:45:10'),
(12, 'Clothing & Shoes', 'clothing-shoes', '1709304712_jacket.png', 4, '2024-02-29 06:55:23', '2024-03-04 12:45:15'),
(13, 'Computers & Gaming', 'computers-gaming', '1709304655_gaming.png', 5, '2024-02-29 07:32:58', '2024-03-04 12:45:15'),
(15, 'Home & Furniture', 'home-furniture', '1709304669_furniture.png', 10000, '2024-02-29 10:58:34', '2024-03-01 12:51:09'),
(16, 'TV & Appliances', 'tv-appliances', '1709304690_monitor.png', 10000, '2024-02-29 11:06:21', '2024-03-01 12:51:30');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `status` enum('Pending','Active') NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_name` varchar(255) NOT NULL,
  `site_email` varchar(255) NOT NULL,
  `site_phone` varchar(255) DEFAULT NULL,
  `site_meta_keywords` varchar(255) DEFAULT NULL,
  `site_meta_description` text DEFAULT NULL,
  `site_logo` varchar(255) DEFAULT NULL,
  `site_favicon` varchar(255) DEFAULT NULL,
  `site_address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`id`, `site_name`, `site_email`, `site_phone`, `site_meta_keywords`, `site_meta_description`, `site_logo`, `site_favicon`, `site_address`, `created_at`, `updated_at`) VALUES
(1, 'Laravecom', 'info@laravecom.test', '+1 234 5678 910', 'laravecom, ecommerce', 'Laravecom is online shopping website where users all over the world can purchase best products with our very best prices', 'LOGO_64e798d2ca872.png', 'FAV_64e945c72ca69.png', '20 Cooper Square, New York, NY 10003, USA', NULL, '2024-02-04 13:45:37');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_17_232730_create_admins_table', 1),
(6, '2023_05_17_232739_create_clients_table', 1),
(7, '2023_05_17_232748_create_sellers_table', 1),
(8, '2023_08_18_003008_create_general_settings_table', 2),
(9, '2023_08_24_170605_update_general_settings_table', 3),
(10, '2023_09_05_033631_create_social_networks_table', 4),
(11, '2024_02_04_153431_add_address_to_general_settings_table', 5),
(12, '2024_02_07_174228_create_categories_table', 6),
(13, '2024_02_17_044203_create_sub_categories_table', 7),
(14, '2024_03_11_075106_add_verified_to_sellers_table', 8),
(15, '2024_03_11_075512_create_verification_tokens_table', 9),
(16, '2024_04_09_074954_create_shops_table', 10),
(17, '2024_04_14_193209_create_products_table', 11),
(19, '2024_05_08_151312_create_product_images_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `guard` varchar(255) DEFAULT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `guard`, `token`, `created_at`) VALUES
('admin@email.com', 'admin', 'SHBlbkFUSjJoNTkwb0ZYUXNsNzlRWlhIaWRUa1hzWjJJQW5ocUpWVFdmSVJNa2JZWjU0ckF0QTY2VTc2N3dzaw==', '2024-02-07 03:53:31');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `summary` text NOT NULL,
  `category` int(11) NOT NULL,
  `subcategory` int(11) NOT NULL,
  `price` double(10,2) NOT NULL,
  `compare_price` double(10,2) DEFAULT NULL,
  `product_image` varchar(255) NOT NULL,
  `visibility` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `user_type`, `seller_id`, `name`, `slug`, `summary`, `category`, `subcategory`, `price`, `compare_price`, `product_image`, `visibility`, `created_at`, `updated_at`) VALUES
(2, 'seller', 4, 'Product 2', 'product-2', '&nbsp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim earum velit molestias harum nesciunt vitae impedit commodi asperiores ratione molestiae soluta iusto, autem distinctio dignissimos perspiciatis ab dolores inventore aliquid!', 13, 62, 11.90, 112.34, 'PIMG_1713126968661c3e38e6307.jpg', 1, '2024-04-14 18:36:08', '2024-04-14 18:36:08'),
(3, 'seller', 4, 'Product 3', 'product-3', 'write product summary write product summary write product summary write product summary write product summary write product summary', 12, 148, 11.00, 22.00, 'PIMG_17156436136642a4dd9d274.jpg', 1, '2024-05-13 20:39:56', '2024-05-13 20:40:13');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(13, 2, 'APIMG_217156433746642a3eed17b1.jpeg', '2024-05-13 20:36:15', '2024-05-13 20:36:15'),
(14, 2, 'APIMG_217156434046642a40c359fc.jpg', '2024-05-13 20:36:44', '2024-05-13 20:36:44'),
(15, 3, 'APIMG_317156436266642a4ea23336.jpeg', '2024-05-13 20:40:26', '2024-05-13 20:40:26'),
(16, 3, 'APIMG_317156436266642a4ea1255d.jpg', '2024-05-13 20:40:26', '2024-05-13 20:40:26');

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `verified` int(11) NOT NULL DEFAULT 0,
  `status` enum('Pending','inReview','Active') NOT NULL DEFAULT 'Pending',
  `payment_method` varchar(255) DEFAULT NULL,
  `payment_email` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`id`, `name`, `username`, `email`, `password`, `picture`, `address`, `phone`, `email_verified_at`, `verified`, `status`, `payment_method`, `payment_email`, `created_at`, `updated_at`) VALUES
(1, 'Seller 1 Smith', NULL, 'seller1@email.com', '$2y$10$/Ddo3SSgG8p46fQvtLF9T.EjRajTT2mJaHlE5NBmRmVXh/U4GPoZW', NULL, NULL, NULL, NULL, 1, 'Pending', NULL, NULL, '2024-03-11 16:01:21', '2024-03-11 16:21:20'),
(4, 'Seller 2 John Mark', 'seller2', 'seller2@email.com', '$2y$10$umlPYjvDURbSU2rfAEsZXOEXmsFgqgGyfjlkSqwglyczNUp34vNEC', 'SELLER_IMG_4.jpg', 'address 001', '1234567890', '2024-03-16 08:46:14', 1, 'Pending', NULL, NULL, '2024-03-16 08:43:43', '2024-04-03 06:28:43');

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `seller_id` int(11) NOT NULL,
  `shop_name` varchar(255) DEFAULT NULL,
  `shop_phone` varchar(255) DEFAULT NULL,
  `shop_address` varchar(255) DEFAULT NULL,
  `shop_description` text DEFAULT NULL,
  `shop_logo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`id`, `seller_id`, `shop_name`, `shop_phone`, `shop_address`, `shop_description`, `shop_logo`, `created_at`, `updated_at`) VALUES
(1, 4, 'Tredex', '1234567890', 'address 1', 'Tredex is an online shop where you can buy anything, anytime only for your best choice.', 'SHOPLOGO_4661505b59c124.png', '2024-04-09 06:07:24', '2024-04-09 07:09:09');

-- --------------------------------------------------------

--
-- Table structure for table `social_networks`
--

CREATE TABLE `social_networks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `facebook_url` varchar(255) DEFAULT NULL,
  `twitter_url` varchar(255) DEFAULT NULL,
  `instagram_url` varchar(255) DEFAULT NULL,
  `youtube_url` varchar(255) DEFAULT NULL,
  `github_url` varchar(255) DEFAULT NULL,
  `linkedin_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_networks`
--

INSERT INTO `social_networks` (`id`, `facebook_url`, `twitter_url`, `instagram_url`, `youtube_url`, `github_url`, `linkedin_url`, `created_at`, `updated_at`) VALUES
(1, 'https://facebook.com/laravecom', 'https://twitter.com/laravecom', NULL, 'https://youtube.com/@laravecom', NULL, NULL, NULL, '2023-09-05 01:09:13');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_name` varchar(255) NOT NULL,
  `subcategory_slug` varchar(255) NOT NULL,
  `is_child_of` int(11) NOT NULL DEFAULT 0,
  `ordering` int(11) NOT NULL DEFAULT 10000,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `subcategory_name`, `subcategory_slug`, `is_child_of`, `ordering`, `created_at`, `updated_at`) VALUES
(10, 10, 'Sports', 'sports', 0, 3, '2024-02-29 06:57:39', '2024-03-01 13:21:45'),
(11, 10, 'Running', 'running', 10, 10000, '2024-02-29 06:57:50', '2024-02-29 09:12:19'),
(12, 10, 'Cricket', 'cricket', 10, 10000, '2024-02-29 06:58:07', '2024-02-29 09:12:34'),
(13, 10, 'Kids Cycles', 'kids-cycles', 10, 10000, '2024-02-29 06:58:23', '2024-02-29 09:12:46'),
(14, 10, 'Bicycle Accessories', 'bicycle-accessories', 10, 10000, '2024-02-29 06:58:40', '2024-02-29 09:12:56'),
(15, 10, 'Football', 'football', 10, 10000, '2024-02-29 06:58:52', '2024-02-29 09:13:05'),
(16, 10, 'Basketball', 'basketball', 10, 10000, '2024-02-29 06:59:02', '2024-02-29 09:13:19'),
(17, 10, 'Skating', 'skating', 10, 10000, '2024-02-29 06:59:13', '2024-02-29 09:13:26'),
(18, 10, 'Get fit at home', 'get-fit-at-home', 0, 4, '2024-02-29 06:59:40', '2024-03-01 13:21:41'),
(19, 10, 'Home Gym', 'home-gym', 18, 10000, '2024-02-29 06:59:50', '2024-02-29 09:13:39'),
(20, 10, 'Dumbbells', 'dumbbells', 18, 10000, '2024-02-29 07:00:29', '2024-02-29 09:13:58'),
(21, 10, 'Treadmills', 'treadmills', 18, 10000, '2024-02-29 07:00:44', '2024-02-29 09:14:08'),
(22, 10, 'Abdominal Exercisers', 'abdominal-exercisers', 18, 10000, '2024-02-29 07:01:07', '2024-02-29 09:14:18'),
(23, 10, 'Yoga Mats', 'yoga-mats', 18, 10000, '2024-02-29 07:01:20', '2024-02-29 09:14:26'),
(24, 10, 'Weight Scales', 'weight-scales', 18, 10000, '2024-02-29 07:01:34', '2024-02-29 09:14:34'),
(25, 10, 'Get ready for gym', 'get-ready-for-gym', 0, 5, '2024-02-29 07:02:00', '2024-03-01 13:21:42'),
(26, 10, 'Sports Footwear', 'sports-footwear', 25, 10000, '2024-02-29 07:02:16', '2024-02-29 09:14:43'),
(27, 10, 'Fitness Gadgets', 'fitness-gadgets', 25, 10000, '2024-02-29 07:02:30', '2024-02-29 09:14:50'),
(28, 10, 'Sippers', 'sippers', 25, 10000, '2024-02-29 07:02:41', '2024-02-29 09:14:57'),
(29, 10, 'Gym Gloves', 'gym-gloves', 25, 10000, '2024-02-29 07:02:53', '2024-02-29 09:15:05'),
(30, 10, 'Sports Nutrition', 'sports-nutrition', 25, 10000, '2024-02-29 07:03:10', '2024-02-29 09:15:22'),
(31, 10, 'Gym Gags', 'gym-gags', 25, 10000, '2024-02-29 07:03:36', '2024-02-29 09:15:41'),
(32, 10, 'Hiking & Outdoor', 'hiking-outdoor', 0, 6, '2024-02-29 07:04:09', '2024-03-01 13:21:38'),
(33, 10, 'Knives & Tools', 'knives-tools', 32, 10000, '2024-02-29 07:04:23', '2024-02-29 09:16:20'),
(34, 10, 'Backpacks', 'backpacks', 32, 10000, '2024-02-29 07:04:36', '2024-02-29 09:16:28'),
(35, 10, 'Hiking Bags', 'hiking-bags', 32, 10000, '2024-02-29 07:05:07', '2024-02-29 09:16:39'),
(36, 10, 'Luggage & Switcases', 'luggage-switcases', 32, 10000, '2024-02-29 07:05:28', '2024-02-29 09:16:55'),
(37, 10, 'Travel Accessories', 'travel-accessories', 32, 10000, '2024-02-29 07:07:16', '2024-02-29 09:17:02'),
(38, 9, 'Headphones, Headsets & Microphones', 'headphones-headsets-microphones', 0, 7, '2024-02-29 07:09:06', '2024-03-01 13:21:38'),
(39, 9, 'Headphones', 'headphones', 38, 10000, '2024-02-29 07:10:11', '2024-02-29 07:10:11'),
(40, 9, 'Headsets', 'headsets', 38, 10000, '2024-02-29 07:10:20', '2024-02-29 07:10:20'),
(41, 9, 'Earphones', 'earphones', 38, 10000, '2024-02-29 07:11:00', '2024-02-29 07:11:00'),
(42, 9, 'Mobiles & Accessories', 'mobiles-accessories', 0, 8, '2024-02-29 07:12:33', '2024-03-01 13:21:38'),
(43, 9, 'Cases, Covers & Protectors', 'cases-covers-protectors', 42, 10000, '2024-02-29 07:13:55', '2024-02-29 07:26:13'),
(44, 9, 'Charges & Power Adapter', 'charges-power-adapter', 42, 10000, '2024-02-29 07:14:27', '2024-02-29 07:14:27'),
(45, 9, 'Selfie Sticks', 'selfie-sticks', 42, 10000, '2024-02-29 07:15:06', '2024-02-29 07:15:06'),
(46, 9, 'Bluetooth Devices', 'bluetooth-devices', 42, 10000, '2024-02-29 07:24:09', '2024-02-29 09:26:10'),
(47, 9, 'Cables & Charges', 'cables-charges', 42, 10000, '2024-02-29 07:24:39', '2024-02-29 07:24:39'),
(48, 9, 'Memory Cards', 'memory-cards', 42, 10000, '2024-02-29 07:24:58', '2024-02-29 07:24:58'),
(49, 9, 'Televisions', 'televisions', 0, 9, '2024-02-29 07:27:06', '2024-03-01 13:21:34'),
(50, 9, 'Projectors & Accessories', 'projectors-accessories', 49, 10000, '2024-02-29 07:27:26', '2024-02-29 07:27:26'),
(51, 9, 'Television & Video Accessories', 'television-video-accessories', 49, 10000, '2024-02-29 07:27:55', '2024-02-29 07:27:55'),
(52, 9, 'Blu-Ray & DVD Players', 'blu-ray-dvd-players', 49, 10000, '2024-02-29 07:28:15', '2024-02-29 07:28:15'),
(53, 9, 'Video Games', 'video-games', 0, 10, '2024-02-29 07:28:30', '2024-03-01 13:21:34'),
(54, 9, 'Video Games & Consoles', 'video-games-consoles', 53, 10000, '2024-02-29 07:29:42', '2024-02-29 07:30:05'),
(55, 9, 'Gaming Accessories', 'gaming-accessories', 53, 10000, '2024-02-29 07:30:31', '2024-02-29 10:12:14'),
(57, 13, 'Storage', 'storage', 0, 11, '2024-02-29 07:33:28', '2024-03-01 13:21:30'),
(58, 13, 'External Hard Drives', 'external-hard-drives', 57, 10000, '2024-02-29 07:33:50', '2024-02-29 07:33:50'),
(59, 13, 'Pen Drives', 'pen-drives', 57, 10000, '2024-02-29 07:34:26', '2024-02-29 07:34:26'),
(60, 13, 'HDD & SSD', 'hdd-ssd', 57, 10000, '2024-02-29 07:34:48', '2024-02-29 07:34:48'),
(61, 13, 'Computer Accessories', 'computer-accessories', 0, 12, '2024-02-29 07:35:06', '2024-03-01 13:21:30'),
(62, 13, 'Keyboards', 'keyboards', 61, 10000, '2024-02-29 07:35:22', '2024-02-29 07:35:22'),
(63, 13, 'Mouses', 'mouses', 61, 10000, '2024-02-29 07:35:33', '2024-02-29 07:35:33'),
(64, 13, 'Web Cams', 'web-cams', 61, 10000, '2024-02-29 07:35:54', '2024-02-29 07:35:54'),
(65, 13, 'Laptop Skins', 'laptop-skins', 61, 10000, '2024-02-29 07:36:11', '2024-02-29 07:36:11'),
(66, 13, 'Cooling Pads', 'cooling-pads', 61, 10000, '2024-02-29 07:36:31', '2024-02-29 07:36:31'),
(67, 13, 'Extension Cards', 'extension-cards', 61, 10000, '2024-02-29 07:36:55', '2024-02-29 07:36:55'),
(68, 13, 'Networking Devices', 'networking-devices', 0, 13, '2024-02-29 07:37:13', '2024-03-01 13:21:30'),
(69, 13, 'Data Cards', 'data-cards', 68, 10000, '2024-02-29 07:37:22', '2024-02-29 07:37:22'),
(70, 13, 'Dongles', 'dongles', 68, 10000, '2024-02-29 07:37:32', '2024-02-29 07:37:32'),
(71, 13, 'Routers', 'routers', 68, 10000, '2024-02-29 07:37:43', '2024-02-29 07:37:43'),
(72, 13, 'Computer Components', 'computer-components', 0, 14, '2024-02-29 07:38:06', '2024-03-01 13:21:26'),
(73, 13, 'RAM (Read Access Memory)', 'ram-read-access-memory', 72, 10000, '2024-02-29 07:38:38', '2024-02-29 07:38:38'),
(74, 13, 'Internal Hard Drive', 'internal-hard-drive', 72, 10000, '2024-02-29 07:52:49', '2024-02-29 07:52:49'),
(75, 13, 'UPS (Uninterruptible Power Supply)', 'ups-uninterruptible-power-supply', 72, 10000, '2024-02-29 07:53:22', '2024-02-29 07:56:52'),
(76, 9, 'Portable Audio', 'portable-audio', 0, 15, '2024-02-29 07:54:15', '2024-03-01 13:21:26'),
(77, 9, 'Portable & Bluetooth Speakers', 'portable-bluetooth-speakers', 76, 10000, '2024-02-29 07:54:45', '2024-02-29 07:54:45'),
(78, 9, 'Radios', 'radios', 76, 10000, '2024-02-29 07:54:58', '2024-02-29 07:54:58'),
(87, 9, 'Audio & Video', 'audio-video', 0, 16, '2024-02-29 10:10:16', '2024-03-01 13:21:26'),
(88, 9, 'MP3 & Media Players', 'mp3-media-players', 87, 10000, '2024-02-29 10:10:35', '2024-02-29 10:10:35'),
(89, 9, 'Projectors', 'projectors', 87, 10000, '2024-02-29 10:10:55', '2024-02-29 10:10:55'),
(90, 9, 'Audio & Video Accessories', 'audio-video-accessories', 87, 10000, '2024-02-29 10:11:17', '2024-02-29 10:11:17'),
(91, 9, 'Computers, Tablets & Network Hardware', 'computers-tablets-network-hardware', 0, 17, '2024-02-29 10:16:37', '2024-03-01 13:21:21'),
(92, 9, 'Computer components & Parts', 'computer-components-parts', 91, 10000, '2024-02-29 10:17:06', '2024-02-29 10:17:06'),
(93, 9, 'Laptops & Notebooks', 'laptops-notebooks', 91, 10000, '2024-02-29 10:17:28', '2024-02-29 10:17:28'),
(94, 9, 'Tablets & eReaders', 'tablets-ereaders', 91, 10000, '2024-02-29 10:18:03', '2024-02-29 10:18:03'),
(95, 9, 'Desktops & All-in-one Computers', 'desktops-all-in-one-computers', 91, 10000, '2024-02-29 10:18:44', '2024-02-29 10:18:44'),
(96, 9, 'Laptops & Desktops Accessories', 'laptops-desktops-accessories', 91, 10000, '2024-02-29 10:19:12', '2024-02-29 10:19:12'),
(97, 9, 'Computer Printers, Scanners & Suppliers', 'computer-printers-scanners-suppliers', 91, 10000, '2024-02-29 10:20:05', '2024-02-29 10:20:05'),
(98, 9, 'Cell phones, Smart Watches & Accessories', 'cell-phones-smart-watches-accessories', 0, 18, '2024-02-29 10:20:31', '2024-03-01 13:21:21'),
(99, 9, 'Cell phones & Smartphones', 'cell-phones-smartphones', 98, 10000, '2024-02-29 10:20:54', '2024-02-29 10:20:54'),
(100, 9, 'Cell phones Accessories', 'cell-phones-accessories', 98, 10000, '2024-02-29 10:21:33', '2024-02-29 10:21:33'),
(101, 9, 'Portable Audio & Headphones', 'portable-audio-headphones', 98, 10000, '2024-02-29 10:21:57', '2024-02-29 10:21:57'),
(102, 11, 'Fragrances', 'fragrances', 0, 19, '2024-02-29 10:24:36', '2024-03-01 13:21:21'),
(103, 11, 'Fragrances for Men', 'fragrances-for-men', 102, 10000, '2024-02-29 10:25:01', '2024-02-29 10:25:01'),
(104, 11, 'Fragrances for Women', 'fragrances-for-women', 102, 10000, '2024-02-29 10:25:25', '2024-02-29 10:25:25'),
(105, 11, 'Unisex Fragrances', 'unisex-fragrances', 102, 10000, '2024-02-29 10:25:42', '2024-02-29 10:25:42'),
(106, 11, 'Skin Care Products', 'skin-care-products', 0, 20, '2024-02-29 10:26:53', '2024-03-01 13:21:17'),
(107, 11, 'Anti-aging Products', 'anti-aging-products', 106, 10000, '2024-02-29 10:27:26', '2024-02-29 10:27:26'),
(108, 11, 'Skin Care Moisturizers', 'skin-care-moisturizers', 106, 10000, '2024-02-29 10:28:32', '2024-02-29 10:28:32'),
(109, 11, 'Skin Brightening Creams', 'skin-brightening-creams', 106, 10000, '2024-02-29 10:29:13', '2024-02-29 10:29:13'),
(110, 11, 'Acne & Blemish Treatments', 'acne-blemish-treatments', 106, 10000, '2024-02-29 10:29:48', '2024-02-29 10:29:48'),
(111, 11, 'Lip Balm & Treatments', 'lip-balm-treatments', 106, 10000, '2024-02-29 10:30:31', '2024-02-29 10:30:31'),
(112, 11, 'Skin Cleaners & Tones', 'skin-cleaners-tones', 106, 10000, '2024-02-29 10:31:45', '2024-02-29 10:31:45'),
(113, 11, 'Hair care & Styling Products', 'hair-care-styling-products', 0, 21, '2024-02-29 10:32:20', '2024-03-01 13:21:17'),
(114, 11, 'Shampoos & Conditioners', 'shampoos-conditioners', 113, 10000, '2024-02-29 10:32:50', '2024-02-29 10:32:50'),
(115, 11, 'Hair Extensions & Wigs', 'hair-extensions-wigs', 113, 10000, '2024-02-29 10:33:30', '2024-02-29 10:33:30'),
(116, 11, 'Hair Styling Devices', 'hair-styling-devices', 113, 10000, '2024-02-29 10:33:58', '2024-02-29 10:33:58'),
(117, 11, 'Hair Loss Treatments', 'hair-loss-treatments', 113, 10000, '2024-02-29 10:34:37', '2024-02-29 10:34:37'),
(118, 11, 'Hair Color Products', 'hair-color-products', 113, 10000, '2024-02-29 10:35:02', '2024-02-29 10:35:02'),
(119, 11, 'Oral Care Products', 'oral-care-products', 0, 22, '2024-02-29 10:35:28', '2024-03-01 13:21:14'),
(120, 11, 'Electrical Oral & Dental Care', 'electrical-oral-dental-care', 119, 10000, '2024-02-29 10:36:16', '2024-02-29 10:36:16'),
(121, 11, 'Teeth Whitening Products', 'teeth-whitening-products', 119, 10000, '2024-02-29 10:37:06', '2024-02-29 10:37:06'),
(122, 11, 'Dental Floss & Flossers', 'dental-floss-flossers', 119, 10000, '2024-02-29 10:37:39', '2024-02-29 10:37:39'),
(123, 11, 'Toothpaste', 'toothpaste', 119, 10000, '2024-02-29 10:38:10', '2024-02-29 10:38:10'),
(124, 9, 'Cameras & Photo', 'cameras-photo', 0, 23, '2024-02-29 10:39:21', '2024-03-01 13:21:14'),
(125, 9, 'Digital Cameras', 'digital-cameras', 124, 10000, '2024-02-29 10:39:39', '2024-02-29 10:39:39'),
(126, 9, 'Camera Lenses & Filters', 'camera-lenses-filters', 124, 10000, '2024-02-29 10:40:09', '2024-02-29 10:40:09'),
(127, 9, 'Film Photography Equipment', 'film-photography-equipment', 124, 10000, '2024-02-29 10:40:37', '2024-02-29 10:40:37'),
(128, 9, 'Camcorders', 'camcorders', 124, 10000, '2024-02-29 10:41:00', '2024-02-29 10:41:00'),
(129, 9, 'Camera, Dones & Photo Accessories', 'camera-dones-photo-accessories', 124, 10000, '2024-02-29 10:41:38', '2024-02-29 10:41:38'),
(130, 12, 'Women\'s clothing, shoes & accessories', 'women-s-clothing-shoes-accessories', 0, 24, '2024-02-29 10:44:20', '2024-03-01 13:21:10'),
(131, 12, 'Women\'s clothing', 'women-s-clothing', 130, 10000, '2024-02-29 10:44:44', '2024-02-29 10:44:44'),
(132, 12, 'Women\'s shoes', 'women-s-shoes', 130, 10000, '2024-02-29 10:44:54', '2024-02-29 10:44:54'),
(133, 12, 'Women\'s Bags & Handbags', 'women-s-bags-handbags', 130, 10000, '2024-02-29 10:45:29', '2024-02-29 10:45:29'),
(134, 12, 'Women\'s  Accessories', 'women-s-accessories', 130, 10000, '2024-02-29 10:46:00', '2024-02-29 10:46:00'),
(135, 12, 'Men\'s Clothing, Shoes & Accessories', 'men-s-clothing-shoes-accessories', 0, 25, '2024-02-29 10:46:40', '2024-03-01 13:21:10'),
(136, 12, 'Men\'s Clothing', 'men-s-clothing', 135, 10000, '2024-02-29 10:47:08', '2024-02-29 10:47:08'),
(137, 12, 'Men\'s Shoes', 'men-s-shoes', 135, 10000, '2024-02-29 10:47:21', '2024-02-29 10:47:21'),
(138, 12, 'Men\'s Accessories', 'men-s-accessories', 135, 10000, '2024-02-29 10:47:48', '2024-02-29 10:47:48'),
(139, 12, 'Specialty Clothing, Shoes & Accessories', 'specialty-clothing-shoes-accessories', 0, 26, '2024-02-29 10:49:24', '2024-03-01 13:21:06'),
(140, 12, 'Sports Fan Apparel & Souvenirs', 'sports-fan-apparel-souvenirs', 139, 10000, '2024-02-29 10:50:08', '2024-02-29 10:50:08'),
(141, 12, 'Vintage Clothing, Shoes & Accessories', 'vintage-clothing-shoes-accessories', 139, 10000, '2024-02-29 10:50:40', '2024-02-29 10:50:40'),
(142, 12, 'Wedding & Formal Wear', 'wedding-formal-wear', 139, 10000, '2024-02-29 10:51:35', '2024-02-29 10:51:35'),
(143, 12, 'Uniforms & Work Clothing', 'uniforms-work-clothing', 139, 10000, '2024-02-29 10:52:07', '2024-02-29 10:52:07'),
(144, 12, 'Baby Clothing, Shoes & Accessories', 'baby-clothing-shoes-accessories', 0, 27, '2024-02-29 10:53:02', '2024-03-01 13:21:06'),
(145, 12, 'Baby & toddler Clothing', 'baby-toddler-clothing', 144, 10000, '2024-02-29 10:53:37', '2024-02-29 10:53:37'),
(146, 12, 'Baby Shoes', 'baby-shoes', 144, 10000, '2024-02-29 10:54:03', '2024-02-29 10:54:03'),
(147, 12, 'Kid\'s Clothing, Shoes & Accessories', 'kid-s-clothing-shoes-accessories', 0, 28, '2024-02-29 10:54:34', '2024-03-01 13:21:06'),
(148, 12, 'Girl\'s Clothing, Shoes & Accessories', 'girl-s-clothing-shoes-accessories', 147, 10000, '2024-02-29 10:55:11', '2024-02-29 10:55:11'),
(149, 12, 'Boy\'s Clothing, Shoes & Accessories', 'boy-s-clothing-shoes-accessories', 147, 10000, '2024-02-29 10:55:44', '2024-02-29 10:55:44'),
(150, 12, 'Unisex Kids', 'unisex-kids', 147, 10000, '2024-02-29 10:56:10', '2024-02-29 10:56:10'),
(151, 12, 'Kid\'s Backbags & Bags', 'kid-s-backbags-bags', 147, 10000, '2024-02-29 10:56:33', '2024-02-29 10:56:33'),
(152, 15, 'Kitchen, Cookware & Serve ware', 'kitchen-cookware-serve-ware', 0, 29, '2024-02-29 10:59:27', '2024-03-01 13:21:02'),
(153, 15, 'Cooking Pans', 'cooking-pans', 152, 10000, '2024-02-29 11:00:09', '2024-02-29 11:00:09'),
(154, 15, 'Gas Stoves', 'gas-stoves', 152, 10000, '2024-02-29 11:00:41', '2024-02-29 11:00:41'),
(155, 15, 'Kitchen Tools', 'kitchen-tools', 152, 10000, '2024-02-29 11:01:05', '2024-02-29 11:01:05'),
(156, 15, 'Pressure Cookers', 'pressure-cookers', 152, 10000, '2024-02-29 11:01:31', '2024-02-29 11:01:31'),
(157, 15, 'Flasks', 'flasks', 152, 10000, '2024-02-29 11:01:47', '2024-02-29 11:01:47'),
(158, 15, 'Bedroom Furniture', 'bedroom-furniture', 0, 30, '2024-02-29 11:02:32', '2024-03-01 13:21:02'),
(159, 15, 'Home Beds', 'home-beds', 158, 10000, '2024-02-29 11:02:58', '2024-02-29 11:02:58'),
(160, 15, 'Mattresses', 'mattresses', 158, 10000, '2024-02-29 11:03:27', '2024-02-29 11:03:27'),
(161, 15, 'Wardrobes', 'wardrobes', 158, 10000, '2024-02-29 11:03:47', '2024-02-29 11:03:47'),
(162, 15, 'Home Lighting', 'home-lighting', 0, 31, '2024-02-29 11:04:20', '2024-03-01 13:20:57'),
(163, 15, 'Bulbs', 'bulbs', 162, 10000, '2024-02-29 11:04:44', '2024-02-29 11:04:44'),
(164, 15, 'Wall Lamps', 'wall-lamps', 162, 10000, '2024-02-29 11:05:12', '2024-02-29 11:05:12'),
(165, 15, 'Table Lamp', 'table-lamp', 162, 10000, '2024-02-29 11:05:30', '2024-02-29 11:05:30'),
(166, 13, 'Ceiling Lamp', 'ceiling-lamp', 162, 10000, '2024-02-29 11:05:50', '2024-02-29 11:05:50'),
(167, 16, 'Small Home Appliances', 'small-home-appliances', 0, 32, '2024-02-29 11:06:54', '2024-03-01 13:20:57'),
(168, 16, 'Irons', 'irons', 167, 10000, '2024-02-29 11:07:02', '2024-02-29 11:07:02'),
(169, 16, 'Water Purifiers', 'water-purifiers', 167, 10000, '2024-02-29 11:07:19', '2024-02-29 11:07:19'),
(170, 16, 'Fans.', 'fans', 167, 10000, '2024-02-29 11:07:40', '2024-02-29 11:07:40'),
(171, 16, 'Air Coolers', 'air-coolers', 167, 10000, '2024-02-29 11:08:09', '2024-02-29 11:08:09'),
(172, 16, 'Inverters', 'inverters', 167, 10000, '2024-02-29 11:08:28', '2024-02-29 11:08:28'),
(173, 16, 'Vaccum cleaners', 'vaccum-cleaners', 167, 10000, '2024-02-29 11:08:55', '2024-02-29 11:08:55'),
(174, 16, 'Sewing Machines', 'sewing-machines', 167, 10000, '2024-02-29 11:09:20', '2024-02-29 11:09:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `verification_tokens`
--

CREATE TABLE `verification_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `verification_tokens`
--

INSERT INTO `verification_tokens` (`id`, `user_type`, `email`, `token`, `created_at`, `updated_at`) VALUES
(1, 'seller', 'seller1@email.com', 'SDFDUThXTkhuR3lMbjBkSWF2V0prU0U4bmFZQW9FeExNNE5UUEphRW5hUTNaSzJweEhzRE9YRk5EZERZejhkcw==', '2024-03-11 16:01:22', '2024-03-11 16:01:22'),
(4, 'seller', 'seller2@email.com', 'SmlJalNTck1RQUpKOGJUQlA5eWUyVG5CZEJiSGIyNEFMVlBkd3BEQ0Y4WmRWTVdlYUF3TERsQzVPdk14b0xzUw==', '2024-03-16 08:43:43', '2024-03-16 08:43:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_username_unique` (`username`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_category_slug_unique` (`category_slug`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clients_username_unique` (`username`),
  ADD UNIQUE KEY `clients_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sellers_username_unique` (`username`),
  ADD UNIQUE KEY `sellers_email_unique` (`email`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `shops_shop_name_unique` (`shop_name`);

--
-- Indexes for table `social_networks`
--
ALTER TABLE `social_networks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `verification_tokens`
--
ALTER TABLE `verification_tokens`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_networks`
--
ALTER TABLE `social_networks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `verification_tokens`
--
ALTER TABLE `verification_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
