-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2019 at 04:52 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(20) NOT NULL DEFAULT '2',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `first_name`, `last_name`, `email`, `password`, `phone`, `address`, `area`, `city`, `zip`, `avatar`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Mashudul', 'Hasan', 'hasan@gmail.com', '$2y$10$/AgjWpmrhNPPzZpijT4DFOythhuXBXadvU7/0/Z7qDD6yzBU2WpUe', '01710897144', NULL, NULL, NULL, NULL, '5c8c554c2be815c8abebf5843cIMG_7059.JPG', 1, 'QOF6INK0vhOapd8I3m2rqSznoqGiFUMrDgTlL63WZRjg6u3p5T1ePMKA8Tp4', '2019-03-16 01:45:48', '2019-03-19 22:24:34'),
(3, 'Dip', 'Protik', 'dip@gmail.com', '$2y$10$mavxXdWZh.TBBPZxbPm9wuMkM/EWujVuir4yKKmMHcFs8xIlvb2ZG', '011110101', NULL, NULL, NULL, NULL, '5c8c55dbd96c45c8abeeb3a0bdIMG_3435.JPG', 2, 'v89lhVAmPcZHgPqGnBNUcpBBeprzfGIVHd77BPpymTwaeuUAl8I2RTk0dYjG', '2019-03-16 01:48:12', '2019-03-16 01:48:12'),
(4, 'Dip', 'Protik', 'mk@gmail.com', '$2y$10$Tcjr2gkZTTxWewYKOvLVpuDfswgR5Hekydj2Rn9n1OwT0BxrWBOzO', '2135151', NULL, NULL, NULL, NULL, '', 2, NULL, '2019-03-19 14:56:00', '2019-03-19 14:56:00');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(12, 'dip', 'dip@yahoo.com', '01710897146', 'ahd asdhasld ashdasld haslduahsld ahlasdhald\r\nahd asdhasld ashdasld haslduahsld ahlasdhaldahd asdhasld ashdasld haslduahsld ahlasdhald', '2019-03-19 17:12:15', '2019-03-19 17:12:15'),
(13, 'osman', 'osman@gmail.com', 'goni', 'ddahsd asdhasldh aslidahs ldhla sidhasldhsldkja ahd asdhasld ashdasld haslduahsld ahlasdhald\r\nahd asdhasld ashdasld haslduahsld ahlasdhald', '2019-03-19 17:14:03', '2019-03-19 17:14:03');

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE `dishes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dish_category_id` int(11) NOT NULL,
  `chef_special` tinyint(1) NOT NULL DEFAULT '0',
  `most_loved` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`id`, `name`, `details`, `price`, `photo`, `dish_category_id`, `chef_special`, `most_loved`, `created_at`, `updated_at`) VALUES
(63, 'Paneer Butter Masala', 'The near perfect combination of spiciness and creaminess.', '260', '1.jpg', 1, 0, 0, '2019-03-17 08:43:21', '2019-03-17 08:43:21'),
(64, 'Chicken Korai Special', 'The near perfect combination of spiciness and creaminess.', '250', '2.jpg', 1, 0, 0, '2019-03-17 08:43:21', '2019-03-17 08:43:21'),
(65, 'Chicken Vorta', 'The near perfect combination of spiciness and creaminess.', '350', '3.jpg', 1, 1, 1, '2019-03-17 08:43:21', '2019-03-18 23:52:37'),
(66, 'Chicken Tikka Masala', 'The near perfect combination of spiciness and creaminess.', '310', '4.jpg', 1, 0, 0, '2019-03-17 08:43:21', '2019-03-17 08:43:21'),
(67, 'Mattar Paneer', 'The near perfect combination of spiciness and creaminess.', '275', '5.jpg', 1, 0, 1, '2019-03-17 08:43:21', '2019-03-19 15:28:16'),
(68, 'Beef Boti Kebab Special', 'The near perfect combination of spiciness and creaminess.', '280', '6.jpg', 1, 0, 0, '2019-03-17 08:43:21', '2019-03-18 23:55:48'),
(69, 'Beef Achari', 'The near perfect combination of spiciness and creaminess.', '240', '7.jpg', 1, 1, 0, '2019-03-17 08:43:21', '2019-03-17 09:03:21'),
(70, 'Plain Raita', 'The near perfect combination of spiciness and creaminess.', '120', '8.jpg', 2, 0, 1, '2019-03-17 08:43:21', '2019-03-18 23:55:34'),
(71, 'Aloo Raita', 'The near perfect combination of spiciness and creaminess.', '140', '9.jpg', 2, 0, 1, '2019-03-17 08:43:21', '2019-03-19 22:25:10'),
(72, 'Everyday\'s Bite Special Raita', 'The near perfect combination of spiciness and creaminess.', '290', '10.jpg', 2, 0, 0, '2019-03-17 08:43:21', '2019-03-17 08:43:21'),
(73, 'Mixed Salad', 'The near perfect combination of spiciness and creaminess.', '75', '11.jpg', 2, 0, 0, '2019-03-17 08:43:21', '2019-03-18 23:52:29'),
(74, 'Plain Curd', 'The near perfect combination of spiciness and creaminess.', '70', '12.jpg', 2, 1, 0, '2019-03-17 08:43:21', '2019-03-18 23:24:57'),
(75, 'Multani Soup', 'The near perfect combination of spiciness and creaminess.', '160', '13.jpg', 2, 0, 1, '2019-03-17 08:43:21', '2019-03-19 22:25:24'),
(76, 'Woondall Special Chicken Curry', 'The near perfect combination of spiciness and creaminess.', '260', '14.jpg', 3, 0, 0, '2019-03-17 08:43:21', '2019-03-17 08:43:21'),
(77, 'Chicken Bhuna', 'The near perfect combination of spiciness and creaminess.', '220', '1.jpg', 3, 0, 0, '2019-03-17 08:43:21', '2019-03-17 08:43:21'),
(78, 'Chicken Masala', 'The near perfect combination of spiciness and creaminess.', '230', '2.jpg', 3, 0, 0, '2019-03-17 08:43:22', '2019-03-17 08:43:22'),
(79, 'Chicken Dahiwala', 'The near perfect combination of spiciness and creaminess.', '250', '3.jpg', 3, 0, 0, '2019-03-17 08:43:22', '2019-03-17 08:43:22'),
(80, 'Chicken Shakwala', 'The near perfect combination of spiciness and creaminess.', '240', '4.jpg', 3, 0, 0, '2019-03-17 08:43:22', '2019-03-17 08:43:22'),
(81, 'Chicken Korai', 'The near perfect combination of spiciness and creaminess.', '250', '5.jpg', 3, 0, 0, '2019-03-17 08:43:22', '2019-03-17 08:43:22'),
(82, 'Chicken Reshmi Butter Masala', 'The near perfect combination of spiciness and creaminess.', '320', '6.jpg', 3, 0, 0, '2019-03-17 08:43:22', '2019-03-17 08:43:22'),
(83, 'Keema Mattar', 'The near perfect combination of spiciness and creaminess.', '220', '7.jpg', 4, 0, 0, '2019-03-17 08:43:22', '2019-03-17 08:43:22'),
(84, 'Beef Satkora', 'The near perfect combination of spiciness and creaminess.', '295', '8.jpg', 4, 0, 0, '2019-03-17 08:43:22', '2019-03-17 08:43:22'),
(85, 'Beef Dopiaza', 'The near perfect combination of spiciness and creaminess.', '250', '9.jpg', 4, 0, 0, '2019-03-17 08:43:22', '2019-03-17 08:43:22'),
(86, 'Beef Achari Special', 'The near perfect combination of spiciness and creaminess.', '240', '10.jpg', 4, 0, 0, '2019-03-17 08:43:22', '2019-03-17 08:43:22'),
(87, 'Beef Bhuna', 'The near perfect combination of spiciness and creaminess.', '240', '11.jpg', 4, 0, 0, '2019-03-17 08:43:22', '2019-03-17 08:43:22'),
(88, 'Beef Muglai', 'The near perfect combination of spiciness and creaminess.', '255', '12.jpg', 4, 0, 0, '2019-03-17 08:43:22', '2019-03-17 08:43:22'),
(89, 'Beef Panjabi', 'The near perfect combination of spiciness and creaminess.', '320', '12.jpg', 4, 0, 0, '2019-03-17 08:43:22', '2019-03-17 08:43:22'),
(90, 'Mutton Curry', 'The near perfect combination of spiciness and creaminess.', '260', '13.jpg', 5, 0, 0, '2019-03-17 08:43:22', '2019-03-17 08:43:22'),
(91, 'Mutton Rogon Josh', 'The near perfect combination of spiciness and creaminess.', '295', '14.jpg', 5, 0, 0, '2019-03-17 08:43:22', '2019-03-17 08:43:22'),
(92, 'Mutton Satkora', 'The near perfect combination of spiciness and creaminess.', '320', '1.jpg', 5, 0, 0, '2019-03-17 08:43:22', '2019-03-17 08:43:22'),
(93, 'Mutton Masala', 'The near perfect combination of spiciness and creaminess.', '290', '2.jpg', 5, 0, 0, '2019-03-17 08:43:22', '2019-03-17 08:43:22'),
(94, 'Mutton Korma', 'The near perfect combination of spiciness and creaminess.', '280', '3.jpg', 5, 0, 0, '2019-03-17 08:43:22', '2019-03-17 08:43:22'),
(95, 'Mutton Dahiwala', 'The near perfect combination of spiciness and creaminess.', '295', '4.jpg', 5, 0, 0, '2019-03-17 08:43:22', '2019-03-17 08:43:22'),
(96, 'Mutton Korai', 'The near perfect combination of spiciness and creaminess.', '350', '5.jpg', 5, 0, 0, '2019-03-17 08:43:22', '2019-03-18 23:37:28'),
(97, 'Fish n Chips', 'The near perfect combination of spiciness and creaminess.', '350', '6.jpg', 6, 0, 0, '2019-03-17 08:43:22', '2019-03-17 08:43:22'),
(98, 'Sweet & Sour Fish', 'The near perfect combination of spiciness and creaminess.', '295', '7.jpg', 6, 0, 0, '2019-03-17 08:43:22', '2019-03-17 08:43:22'),
(99, 'Sweet & Sour Prawn', 'The near perfect combination of spiciness and creaminess.', '320', '8.jpg', 6, 0, 0, '2019-03-17 08:43:22', '2019-03-17 08:43:22'),
(100, 'Prawn with Garlic Sauce', 'The near perfect combination of spiciness and creaminess.', '330', '9.jpg', 6, 0, 0, '2019-03-17 08:43:22', '2019-03-17 08:43:22'),
(101, 'Special Prawn Masala', 'The near perfect combination of spiciness and creaminess.', '380', '10.jpg', 6, 0, 0, '2019-03-17 08:43:22', '2019-03-17 08:43:22'),
(102, 'Tandoori Chicken', 'The near perfect combination of spiciness and creaminess.', '190', '11.jpg', 7, 0, 0, '2019-03-17 08:43:22', '2019-03-17 08:43:22'),
(103, 'Chicken Tikka Kebab', 'The near perfect combination of spiciness and creaminess.', '415', '12.jpg', 7, 0, 0, '2019-03-17 08:43:23', '2019-03-17 08:43:23'),
(104, 'Reshmi Kebab', 'The near perfect combination of spiciness and creaminess.', '430', '13.jpg', 7, 0, 0, '2019-03-17 08:43:23', '2019-03-17 08:43:23'),
(105, 'Chicken Hariyali Kebab', 'The near perfect combination of spiciness and creaminess.', '490', '14.jpg', 7, 0, 0, '2019-03-17 08:43:23', '2019-03-17 08:43:23'),
(106, 'Chicken Boti Kebab', 'The near perfect combination of spiciness and creaminess.', '450', '1.jpg', 7, 0, 0, '2019-03-17 08:43:23', '2019-03-17 08:43:23'),
(107, 'Beef Boti Kebab', 'The near perfect combination of spiciness and creaminess.', '280', '2.jpg', 7, 1, 0, '2019-03-17 08:43:23', '2019-03-18 23:38:20'),
(108, 'Mutton Keema Kebab', 'The near perfect combination of spiciness and creaminess.', '240', '3.jpg', 7, 0, 0, '2019-03-17 08:43:23', '2019-03-17 08:43:23'),
(109, 'Woondall Special Family Naan', 'The near perfect combination of spiciness and creaminess.', '425', '4.jpg', 8, 0, 0, '2019-03-17 08:43:23', '2019-03-17 08:43:23'),
(110, 'Plain Naan', 'The near perfect combination of spiciness and creaminess.', '50', '5.jpg', 8, 0, 0, '2019-03-17 08:43:23', '2019-03-18 23:22:01'),
(111, 'Butter Naan', 'The near perfect combination of spiciness and creaminess.', '65', '6.jpg', 8, 0, 0, '2019-03-17 08:43:23', '2019-03-18 23:26:44'),
(112, 'Garlic Naan', 'The near perfect combination of spiciness and creaminess.', '90', '7.jpg', 8, 0, 0, '2019-03-17 08:43:23', '2019-03-19 12:59:47'),
(113, 'Keema Naan', 'The near perfect combination of spiciness and creaminess.', '175', '8.jpg', 8, 0, 0, '2019-03-17 08:43:23', '2019-03-17 08:43:23'),
(114, 'Masala Naan', 'The near perfect combination of spiciness and creaminess.', '140', '9.jpg', 8, 0, 0, '2019-03-17 08:43:23', '2019-03-17 08:43:23'),
(115, 'Thai Soup', 'The near perfect combination of spiciness and creaminess.', '250', '10.jpg', 9, 0, 0, '2019-03-17 08:43:23', '2019-03-18 23:34:18'),
(116, 'Hot & Sour Soup', 'The near perfect combination of spiciness and creaminess.', '250', '11.jpg', 9, 0, 0, '2019-03-17 08:43:23', '2019-03-19 12:59:55'),
(117, 'Fried Wonton', 'The near perfect combination of spiciness and creaminess.', '200', '12.jpg', 9, 0, 0, '2019-03-17 08:43:23', '2019-03-18 23:37:30'),
(118, 'Lab Gai Salad', 'The near perfect combination of spiciness and creaminess.', '350', '13.jpg', 9, 0, 0, '2019-03-17 08:43:23', '2019-03-19 13:00:03'),
(119, 'Chicken Cashewnut Salad', 'The near perfect combination of spiciness and creaminess.', '350', '14.jpg', 9, 0, 0, '2019-03-17 08:43:23', '2019-03-17 08:43:23'),
(120, 'Beef Shawarma', 'The near perfect combination of spiciness and creaminess.', '165', '1.jpg', 10, 0, 0, '2019-03-17 08:43:23', '2019-03-17 08:43:23'),
(121, 'Chicken Shawarma', 'The near perfect combination of spiciness and creaminess.', '165', '2.jpg', 10, 1, 0, '2019-03-17 08:43:23', '2019-03-19 13:00:32'),
(122, 'Tandoori Chicken Shawarma', 'The near perfect combination of spiciness and creaminess.', '200', '3.jpg', 10, 0, 0, '2019-03-17 08:43:23', '2019-03-17 08:43:23'),
(123, 'Tuna Fish Shawarma', 'The near perfect combination of spiciness and creaminess.', '170', '4.jpg', 10, 0, 0, '2019-03-17 08:43:23', '2019-03-19 00:15:40'),
(124, 'Tandoori Fish Shwarma Wrap', 'The near perfect combination of spiciness and creaminess.', '240', '5.jpg', 10, 0, 0, '2019-03-17 08:43:23', '2019-03-17 08:43:23');

-- --------------------------------------------------------

--
-- Table structure for table `dish_categories`
--

CREATE TABLE `dish_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dish_categories`
--

INSERT INTO `dish_categories` (`id`, `name`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Fish & Prawn', 'fishnprawn', '2019-03-17 08:44:54', '2019-03-17 08:44:54'),
(2, 'Kebab', 'kebab', '2019-03-17 08:44:54', '2019-03-17 08:44:54'),
(3, 'Mutton', 'mutton', '2019-03-17 08:44:54', '2019-03-17 08:44:54'),
(4, 'Naan', 'naan', '2019-03-17 08:44:54', '2019-03-17 08:44:54'),
(5, 'Soups & Salads', 'soupsnsalads', '2019-03-17 08:44:54', '2019-03-17 08:44:54'),
(6, 'Arabian Shawarma', 'shawarma', '2019-03-17 08:44:54', '2019-03-17 08:44:54'),
(7, 'Popular Dishes', 'popular', '2019-03-17 08:44:54', '2019-03-17 08:44:54'),
(8, 'Chicken', 'chicken', '2019-03-17 08:44:54', '2019-03-17 08:44:54'),
(9, 'Appetizer', 'appetizer', '2019-03-17 08:44:54', '2019-03-17 08:44:54'),
(10, 'Beef', 'beef', '2019-03-17 08:44:54', '2019-03-17 08:44:54');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `name`, `caption`, `created_at`, `updated_at`) VALUES
(18, '2.jpg', 'Chicken 2', '2019-03-17 08:49:14', '2019-03-17 08:49:14'),
(19, '3.jpg', ' Chicken 3', '2019-03-17 08:49:14', '2019-03-17 08:49:14'),
(21, '5.jpg', 'Chicken 4', '2019-03-17 08:49:14', '2019-03-17 08:49:14'),
(22, '6.jpg', 'Chicken 5', '2019-03-17 08:49:14', '2019-03-17 08:49:14'),
(23, '7.jpg', 'Chicken 6', '2019-03-17 08:49:14', '2019-03-17 08:49:14'),
(24, '8.jpg', 'Chicken 7', '2019-03-17 08:49:14', '2019-03-17 08:49:14'),
(25, '9.jpg', 'Chicken 8', '2019-03-17 08:49:14', '2019-03-17 08:49:14'),
(26, '10.jpg', 'Chicken 9', '2019-03-17 08:49:14', '2019-03-17 08:49:14'),
(27, '11.jpg', 'Chicken 10', '2019-03-17 08:49:14', '2019-03-17 08:49:14'),
(28, '12.jpg', 'Chicken 11', '2019-03-17 08:49:14', '2019-03-17 08:49:14'),
(29, '13.jpg', 'Chicken 12', '2019-03-17 08:49:14', '2019-03-17 08:49:14'),
(30, '14.jpg', 'Chicken 13', '2019-03-17 08:49:14', '2019-03-17 08:49:14'),
(31, '15.jpg', 'Chicken 14', '2019-03-17 08:49:15', '2019-03-17 08:49:15');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_01_15_134650_create_admins_table', 1),
(4, '2018_01_19_132819_create_dish_categories_table', 1),
(5, '2018_01_19_142028_create_dishes_table', 1),
(6, '2018_01_19_161153_create_orders_table', 1),
(10, '2018_01_19_161318_create_galleries_table', 1),
(13, '2018_01_19_161417_create_loved_dishes_table', 1),
(14, '2018_01_19_161451_create_chef_specials_table', 1),
(16, '2018_01_19_170802_create_invoices_table', 1),
(17, '2018_01_29_131619_create_contacts_table', 1),
(18, '2018_02_02_125427_create_reservations_table', 2),
(21, '2019_03_13_131357_create_website_statuses_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `cart` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `checkout_info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `payment_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `cart`, `checkout_info`, `total`, `qty`, `status`, `payment_type`, `payment_id`, `payment_number`, `created_at`, `updated_at`) VALUES
(19, 8, 'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:2:{s:32:\"c229457762c2c5a22d9327344627459c\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":8:{s:5:\"rowId\";s:32:\"c229457762c2c5a22d9327344627459c\";s:2:\"id\";i:3;s:3:\"qty\";i:1;s:4:\"name\";s:13:\"Chicken Vorta\";s:5:\"price\";d:350;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":1:{s:8:\"\0*\0items\";a:1:{s:5:\"photo\";s:5:\"3.jpg\";}}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";N;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:21;}s:32:\"79337024f0ab3a61ecb35b2059fad89d\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":8:{s:5:\"rowId\";s:32:\"79337024f0ab3a61ecb35b2059fad89d\";s:2:\"id\";i:6;s:3:\"qty\";i:1;s:4:\"name\";s:23:\"Beef Boti Kebab Special\";s:5:\"price\";d:280;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":1:{s:8:\"\0*\0items\";a:1:{s:5:\"photo\";s:5:\"6.jpg\";}}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";N;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:21;}}}', 'a:7:{s:5:\"fname\";s:5:\"rabel\";s:5:\"lname\";s:5:\"ahmed\";s:5:\"email\";s:15:\"rabel@gmail.com\";s:5:\"phone\";s:11:\"01738671782\";s:7:\"address\";s:19:\"8087 Racine, Warren\";s:4:\"city\";s:6:\"Warren\";s:8:\"postCode\";s:5:\"48088\";}', '630', 2, 1, 'Bkash', 'ghfc5ycfyjh5r', '01111111', '2019-03-13 12:33:05', '2019-03-16 12:34:36'),
(21, 8, 'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:6:{s:32:\"c229457762c2c5a22d9327344627459c\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":9:{s:5:\"rowId\";s:32:\"c229457762c2c5a22d9327344627459c\";s:2:\"id\";i:3;s:3:\"qty\";s:1:\"4\";s:4:\"name\";s:13:\"Chicken Vorta\";s:5:\"price\";d:350;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":1:{s:8:\"\0*\0items\";a:1:{s:5:\"photo\";s:5:\"3.jpg\";}}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";N;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:21;s:8:\"priceTax\";d:423.5;}s:32:\"79337024f0ab3a61ecb35b2059fad89d\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":8:{s:5:\"rowId\";s:32:\"79337024f0ab3a61ecb35b2059fad89d\";s:2:\"id\";i:6;s:3:\"qty\";i:1;s:4:\"name\";s:23:\"Beef Boti Kebab Special\";s:5:\"price\";d:280;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":1:{s:8:\"\0*\0items\";a:1:{s:5:\"photo\";s:5:\"6.jpg\";}}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";N;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:21;}s:32:\"8401ef2097f8402fd4ec1ab5c73fab53\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":8:{s:5:\"rowId\";s:32:\"8401ef2097f8402fd4ec1ab5c73fab53\";s:2:\"id\";i:117;s:3:\"qty\";i:1;s:4:\"name\";s:12:\"Fried Wonton\";s:5:\"price\";d:200;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":1:{s:8:\"\0*\0items\";a:1:{s:5:\"photo\";s:6:\"12.jpg\";}}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";N;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:21;}s:32:\"5d5aa61fbd42e6e9e6547f68b7dc650b\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":8:{s:5:\"rowId\";s:32:\"5d5aa61fbd42e6e9e6547f68b7dc650b\";s:2:\"id\";i:116;s:3:\"qty\";i:1;s:4:\"name\";s:15:\"Hot & Sour Soup\";s:5:\"price\";d:250;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":1:{s:8:\"\0*\0items\";a:1:{s:5:\"photo\";s:6:\"11.jpg\";}}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";N;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:21;}s:32:\"268da69c0abf1b7011162ab9ad370a5b\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":8:{s:5:\"rowId\";s:32:\"268da69c0abf1b7011162ab9ad370a5b\";s:2:\"id\";i:74;s:3:\"qty\";i:1;s:4:\"name\";s:10:\"Plain Curd\";s:5:\"price\";d:70;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":1:{s:8:\"\0*\0items\";a:1:{s:5:\"photo\";s:6:\"12.jpg\";}}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";N;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:21;}s:32:\"c56e597760847df64d6dd0c6c585214d\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":8:{s:5:\"rowId\";s:32:\"c56e597760847df64d6dd0c6c585214d\";s:2:\"id\";i:69;s:3:\"qty\";i:2;s:4:\"name\";s:11:\"Beef Achari\";s:5:\"price\";d:240;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":1:{s:8:\"\0*\0items\";a:1:{s:5:\"photo\";s:5:\"7.jpg\";}}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";N;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:21;}}}', 'a:7:{s:5:\"fname\";s:8:\"Mashudul\";s:5:\"lname\";s:5:\"Hasan\";s:5:\"email\";s:15:\"hasan@gmail.com\";s:5:\"phone\";s:11:\"01738671782\";s:7:\"address\";s:6:\"+65456\";s:4:\"city\";s:6:\"Sylhet\";s:8:\"postCode\";s:5:\"48088\";}', '2680', 10, 1, 'COD', '', '01710897146', '2019-03-17 09:07:36', '2019-03-18 08:11:25'),
(22, 8, 'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:5:{s:32:\"82a5ef8b979232b7606bb2b42a30a4a5\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":8:{s:5:\"rowId\";s:32:\"82a5ef8b979232b7606bb2b42a30a4a5\";s:2:\"id\";i:121;s:3:\"qty\";i:1;s:4:\"name\";s:16:\"Chicken Shawarma\";s:5:\"price\";d:165;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":1:{s:8:\"\0*\0items\";a:1:{s:5:\"photo\";s:5:\"2.jpg\";}}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";N;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:21;}s:32:\"d8cfc244c4f427ceccf742c354a2c9a7\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":8:{s:5:\"rowId\";s:32:\"d8cfc244c4f427ceccf742c354a2c9a7\";s:2:\"id\";i:120;s:3:\"qty\";i:1;s:4:\"name\";s:13:\"Beef Shawarma\";s:5:\"price\";d:165;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":1:{s:8:\"\0*\0items\";a:1:{s:5:\"photo\";s:5:\"1.jpg\";}}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";N;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:21;}s:32:\"aa35df511d73673559ba79df90fb705e\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":8:{s:5:\"rowId\";s:32:\"aa35df511d73673559ba79df90fb705e\";s:2:\"id\";i:122;s:3:\"qty\";i:1;s:4:\"name\";s:25:\"Tandoori Chicken Shawarma\";s:5:\"price\";d:200;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":1:{s:8:\"\0*\0items\";a:1:{s:5:\"photo\";s:5:\"3.jpg\";}}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";N;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:21;}s:32:\"f3eabc242f325bd4eadac6618f091a2e\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":8:{s:5:\"rowId\";s:32:\"f3eabc242f325bd4eadac6618f091a2e\";s:2:\"id\";i:124;s:3:\"qty\";i:1;s:4:\"name\";s:26:\"Tandoori Fish Shwarma Wrap\";s:5:\"price\";d:240;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":1:{s:8:\"\0*\0items\";a:1:{s:5:\"photo\";s:5:\"5.jpg\";}}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";N;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:21;}s:32:\"e1bc43ca81100b486ec0744eb92f9854\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":8:{s:5:\"rowId\";s:32:\"e1bc43ca81100b486ec0744eb92f9854\";s:2:\"id\";i:123;s:3:\"qty\";i:1;s:4:\"name\";s:18:\"Tuna Fish Shawarma\";s:5:\"price\";d:170;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":1:{s:8:\"\0*\0items\";a:1:{s:5:\"photo\";s:5:\"4.jpg\";}}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";N;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:21;}}}', 'a:7:{s:5:\"fname\";s:8:\"Mashudul\";s:5:\"lname\";s:5:\"Hasan\";s:5:\"email\";s:15:\"hasan@gmail.com\";s:5:\"phone\";s:11:\"01738671782\";s:7:\"address\";s:19:\"8087 Racine, Warren\";s:4:\"city\";s:6:\"Warren\";s:8:\"postCode\";s:5:\"48088\";}', '940', 5, 0, 'Bkash', '951', '48184', '2019-03-18 08:13:21', '2019-03-18 08:13:21'),
(23, 8, 'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:2:{s:32:\"bc131358bed2c9584c226e06066b2a98\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":8:{s:5:\"rowId\";s:32:\"bc131358bed2c9584c226e06066b2a98\";s:2:\"id\";i:70;s:3:\"qty\";i:2;s:4:\"name\";s:11:\"Plain Raita\";s:5:\"price\";d:120;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":1:{s:8:\"\0*\0items\";a:1:{s:5:\"photo\";s:5:\"8.jpg\";}}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";N;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:21;}s:32:\"8aaf156d4840341ede7b3e1510d7d069\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":8:{s:5:\"rowId\";s:32:\"8aaf156d4840341ede7b3e1510d7d069\";s:2:\"id\";i:75;s:3:\"qty\";i:1;s:4:\"name\";s:12:\"Multani Soup\";s:5:\"price\";d:160;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":1:{s:8:\"\0*\0items\";a:1:{s:5:\"photo\";s:6:\"13.jpg\";}}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";N;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:21;}}}', 'a:7:{s:5:\"fname\";s:8:\"Mashudul\";s:5:\"lname\";s:5:\"Hasan\";s:5:\"email\";s:15:\"hasan@gmail.com\";s:5:\"phone\";s:11:\"01710897146\";s:7:\"address\";s:19:\"8087 Racine, Warren\";s:4:\"city\";s:6:\"Sylhet\";s:8:\"postCode\";s:5:\"48088\";}', '400', 3, 1, 'Bkash', 'fsdafsdf364534', '1213', '2019-03-19 15:36:12', '2019-03-19 16:55:56'),
(24, 8, 'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:1:{s:32:\"ea827bda938f740202a33e3b1a493570\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":8:{s:5:\"rowId\";s:32:\"ea827bda938f740202a33e3b1a493570\";s:2:\"id\";i:65;s:3:\"qty\";i:2;s:4:\"name\";s:13:\"Chicken Vorta\";s:5:\"price\";d:350;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":1:{s:8:\"\0*\0items\";a:1:{s:5:\"photo\";s:5:\"3.jpg\";}}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";N;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:21;}}}', 'a:7:{s:5:\"fname\";s:8:\"Mashudul\";s:5:\"lname\";s:5:\"Hasan\";s:5:\"email\";s:15:\"hasan@gmail.com\";s:5:\"phone\";s:16:\"2323213313131313\";s:7:\"address\";s:19:\"8087 Racine, Warren\";s:4:\"city\";s:6:\"Warren\";s:8:\"postCode\";s:5:\"48088\";}', '700', 2, 1, 'Bkash', 'ghfc5ycfyjh5r', '12312', '2019-03-19 15:37:52', '2019-03-19 16:52:34'),
(25, 8, 'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:1:{s:32:\"ea827bda938f740202a33e3b1a493570\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":8:{s:5:\"rowId\";s:32:\"ea827bda938f740202a33e3b1a493570\";s:2:\"id\";i:65;s:3:\"qty\";i:1;s:4:\"name\";s:13:\"Chicken Vorta\";s:5:\"price\";d:350;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":1:{s:8:\"\0*\0items\";a:1:{s:5:\"photo\";s:5:\"3.jpg\";}}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";N;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:21;}}}', 'a:7:{s:5:\"fname\";s:8:\"Mashudul\";s:5:\"lname\";s:5:\"Hasan\";s:5:\"email\";s:15:\"hasan@gmail.com\";s:5:\"phone\";s:16:\"2323213313131313\";s:7:\"address\";s:19:\"8087 Racine, Warren\";s:4:\"city\";s:6:\"Warren\";s:8:\"postCode\";s:5:\"48088\";}', '350', 1, 1, 'Bkash', '01', '01111111', '2019-03-19 15:39:56', '2019-03-19 16:29:45'),
(26, 8, 'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:1:{s:32:\"ea827bda938f740202a33e3b1a493570\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":8:{s:5:\"rowId\";s:32:\"ea827bda938f740202a33e3b1a493570\";s:2:\"id\";i:65;s:3:\"qty\";i:1;s:4:\"name\";s:13:\"Chicken Vorta\";s:5:\"price\";d:350;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":1:{s:8:\"\0*\0items\";a:1:{s:5:\"photo\";s:5:\"3.jpg\";}}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";N;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:21;}}}', 'a:7:{s:5:\"fname\";s:8:\"Mashudul\";s:5:\"lname\";s:5:\"Hasan\";s:5:\"email\";s:15:\"hasan@gmail.com\";s:5:\"phone\";s:11:\"01710897146\";s:7:\"address\";s:19:\"8087 Racine, Warren\";s:4:\"city\";s:6:\"Warren\";s:8:\"postCode\";s:5:\"48088\";}', '350', 1, 0, 'Bkash', '01111111', '01710897146', '2019-03-19 23:30:49', '2019-03-19 23:30:49'),
(27, 9, 'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:1:{s:32:\"ea827bda938f740202a33e3b1a493570\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":9:{s:5:\"rowId\";s:32:\"ea827bda938f740202a33e3b1a493570\";s:2:\"id\";i:65;s:3:\"qty\";s:1:\"5\";s:4:\"name\";s:13:\"Chicken Vorta\";s:5:\"price\";d:350;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":1:{s:8:\"\0*\0items\";a:1:{s:5:\"photo\";s:5:\"3.jpg\";}}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";N;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:21;s:8:\"priceTax\";d:423.5;}}}', 'a:7:{s:5:\"fname\";s:5:\"Osman\";s:5:\"lname\";s:4:\"RAFI\";s:5:\"email\";s:14:\"Rafi@gmail.com\";s:5:\"phone\";s:11:\"01712589645\";s:7:\"address\";s:9:\"kumarpara\";s:4:\"city\";s:6:\"sylhet\";s:8:\"postCode\";s:4:\"3100\";}', '1750', 5, 0, 'Bkash', 'aaaa5238', '01712589645', '2019-03-19 23:47:14', '2019-03-19 23:47:14'),
(28, 9, 'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:1:{s:32:\"ea827bda938f740202a33e3b1a493570\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":8:{s:5:\"rowId\";s:32:\"ea827bda938f740202a33e3b1a493570\";s:2:\"id\";i:65;s:3:\"qty\";i:1;s:4:\"name\";s:13:\"Chicken Vorta\";s:5:\"price\";d:350;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":1:{s:8:\"\0*\0items\";a:1:{s:5:\"photo\";s:5:\"3.jpg\";}}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";N;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:21;}}}', 'a:7:{s:5:\"fname\";s:5:\"Osman\";s:5:\"lname\";s:4:\"RAFI\";s:5:\"email\";s:14:\"Rafi@gmail.com\";s:5:\"phone\";s:10:\"0152964784\";s:7:\"address\";s:8:\"raynogor\";s:4:\"city\";s:6:\"Sylhet\";s:8:\"postCode\";s:4:\"3100\";}', '350', 1, 1, 'Bkash', 'aaa56', '01712589645', '2019-03-19 23:53:19', '2019-03-19 23:53:36'),
(29, 9, 'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:1:{s:32:\"ea827bda938f740202a33e3b1a493570\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":8:{s:5:\"rowId\";s:32:\"ea827bda938f740202a33e3b1a493570\";s:2:\"id\";i:65;s:3:\"qty\";i:1;s:4:\"name\";s:13:\"Chicken Vorta\";s:5:\"price\";d:350;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":1:{s:8:\"\0*\0items\";a:1:{s:5:\"photo\";s:5:\"3.jpg\";}}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";N;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:21;}}}', 'a:7:{s:5:\"fname\";s:5:\"Osman\";s:5:\"lname\";s:4:\"RAFI\";s:5:\"email\";s:14:\"Rafi@gmail.com\";s:5:\"phone\";s:10:\"0175689532\";s:7:\"address\";s:9:\"kumarpara\";s:4:\"city\";s:6:\"Sylhet\";s:8:\"postCode\";s:4:\"3100\";}', '350', 1, 0, 'Bkash', 'ghfc5ycfyjh5r', '01712589645', '2019-03-20 00:16:22', '2019-03-20 00:16:22'),
(30, 11, 'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:1:{s:32:\"ea827bda938f740202a33e3b1a493570\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":8:{s:5:\"rowId\";s:32:\"ea827bda938f740202a33e3b1a493570\";s:2:\"id\";i:65;s:3:\"qty\";i:1;s:4:\"name\";s:13:\"Chicken Vorta\";s:5:\"price\";d:350;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":1:{s:8:\"\0*\0items\";a:1:{s:5:\"photo\";s:5:\"3.jpg\";}}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";N;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:21;}}}', 'a:7:{s:5:\"fname\";s:5:\"ahsan\";s:5:\"lname\";s:4:\"miah\";s:5:\"email\";s:19:\"ahsanmiah@gmail.com\";s:5:\"phone\";s:11:\"01710895632\";s:7:\"address\";s:9:\"kumarpara\";s:4:\"city\";s:6:\"Sylhet\";s:8:\"postCode\";s:4:\"3100\";}', '350', 1, 1, 'Bkash', 'hfgh', NULL, '2019-03-20 00:22:35', '2019-03-20 14:18:09'),
(31, 8, 'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:1:{s:32:\"bffb549314d71e589e13f000fa6f225e\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":8:{s:5:\"rowId\";s:32:\"bffb549314d71e589e13f000fa6f225e\";s:2:\"id\";i:67;s:3:\"qty\";i:1;s:4:\"name\";s:13:\"Mattar Paneer\";s:5:\"price\";d:275;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":1:{s:8:\"\0*\0items\";a:1:{s:5:\"photo\";s:5:\"5.jpg\";}}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";N;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:21;}}}', 'a:7:{s:5:\"fname\";s:8:\"Mashudul\";s:5:\"lname\";s:5:\"Hasan\";s:5:\"email\";s:15:\"hasan@gmail.com\";s:5:\"phone\";s:11:\"01710897146\";s:7:\"address\";s:19:\"8087 Racine, Warren\";s:4:\"city\";s:6:\"Sylhet\";s:8:\"postCode\";s:5:\"48088\";}', '275', 1, 1, 'COD', '', '01710897146', '2019-03-20 14:15:18', '2019-03-20 14:30:17');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('hasan@gmail.com', '$2y$10$9zxCxC6e42Z29jDf74mlDOT51NQQ/ZemrK071TC4ZJjBksJwT0pRO', '2019-03-20 14:56:09');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_of_person` int(11) NOT NULL,
  `date` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_slot` enum('Breakfast','Lunch','Dinner') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `verificarionCode` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `name`, `phone`, `num_of_person`, `date`, `time_slot`, `status`, `verificarionCode`, `created_at`, `updated_at`) VALUES
(18, 'Hasan', '01738671782', 7, '21 Feb 2019', 'Lunch', 0, 'O3YWt', '2019-02-04 18:40:59', '2019-02-04 18:40:59'),
(20, 'Alex', '01738671782', 5, '19 Feb 2019', 'Dinner', 1, 'Jtolx', '2019-02-04 18:53:44', '2019-02-04 18:54:43'),
(22, 'Obama', '01738671782', 9, '23 Feb 2019', 'Breakfast', 1, '3wVzk', '2019-02-04 18:57:47', '2019-02-04 18:58:26'),
(24, 'Hasan', '01738671782', 10, '16 Feb 2019', 'Dinner', 1, '3FhTh', '2019-02-16 11:40:34', '2019-02-16 11:46:45'),
(25, 'sheikh hasina', '01710897146', 8, '29 Mar 2019', 'Lunch', 1, 'K8pDI', '2019-03-16 16:51:46', '2019-03-16 16:52:24'),
(26, 'tarek', '01710897146', 3, '27 Mar 2019', 'Breakfast', 0, 'r8rvv', '2019-03-18 18:08:10', '2019-03-18 18:08:10'),
(27, 'hasan', '01710897146', 5, '21 Mar 2019', 'Dinner', 1, 'YsWvS', '2019-03-20 14:16:58', '2019-03-20 14:17:23'),
(28, 'redwan', '01710897146', 10, '30 Mar 2019', 'Lunch', 0, 'XqFew', '2019-03-20 14:26:04', '2019-03-20 14:26:04'),
(29, 'Salman', '01710897146', 10, '29 Mar 2019', 'Dinner', 0, 'tflyg', '2019-03-20 14:26:27', '2019-03-20 14:26:27'),
(30, 'redwan', '01710897146', 9, '30 Mar 2019', 'Breakfast', 0, 'S9VQe', '2019-03-20 14:26:46', '2019-03-20 14:26:46'),
(31, 'redwan', '01710897146', 10, '12 Apr 2019', 'Breakfast', 1, 'rKFMf', '2019-03-20 14:29:18', '2019-03-20 14:29:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `phone`, `address`, `area`, `city`, `zip`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(8, 'Mashudul', 'Hasan', 'hasan@gmail.com', '$2y$10$ATOOCH8MJCeb2Fk.NPCSEO.tuD3vxZ7C3X73fnya8AxHblSys9JN2', '01710897146', '8087 Racine, Warren', 'Modina Marker', 'Warren', '48088', '5c917e9164d9ehappy3.jpg', 'RJwCyn8kCcr6L3HTY4KnEU0nxWETCSgfSWEUbOMUKfhrlhqjIrrasPTfbg31', '2019-03-13 06:50:43', '2019-03-19 23:43:13'),
(9, 'Osman', 'RAFI', 'Rafi@gmail.com', '$2y$10$A909D7xHS4S3bxVDfDLc1.T5o84Ug/vPVuBl3V/R6Oiz9UTtaRq1u', '01712589645', NULL, NULL, NULL, NULL, '5c917edbc5725happ2.jpg', 'zagvGiV0lBqEplrjSfRNXzjMWeV9bA72TfWBHmv9tavDvvWaQUmV5sjKKw5J', '2019-03-19 23:44:01', '2019-03-19 23:44:27'),
(10, 'nahiyan', 'nasim', 'nahiyan@gmail.com', '$2y$10$arbsJbv.LxfkSVSvPtBCieB54kRR3cdR6KR2uW63BEyy53q0l6Hcm', '01765886946', NULL, NULL, NULL, NULL, '5c917f0e8d78ehappy.jpg', 'VzWOn8zhGqM1qhtJn2oBLpE0eQlsy8tCZ4pqragZU6I9ShAzb8AZjQqgw3Rn', '2019-03-19 23:44:59', '2019-03-19 23:45:18'),
(11, 'ahsan', 'miah', 'ahsanmiah@gmail.com', '$2y$10$xQw70dKCJ/g1ddJnBO7nI.33hscG3aUjrd9VC6hOP.72jGa4UtXcu', '0171086958', NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-20 00:20:20', '2019-03-20 00:24:09');

-- --------------------------------------------------------

--
-- Table structure for table `website_statuses`
--

CREATE TABLE `website_statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` enum('closed','open') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `website_statuses`
--

INSERT INTO `website_statuses` (`id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'open', NULL, '2019-03-16 21:47:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dish_categories`
--
ALTER TABLE `dish_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dish_categories_name_unique` (`name`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `website_statuses`
--
ALTER TABLE `website_statuses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `dishes`
--
ALTER TABLE `dishes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `dish_categories`
--
ALTER TABLE `dish_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `website_statuses`
--
ALTER TABLE `website_statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
