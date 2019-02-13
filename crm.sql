-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 13, 2019 at 07:18 AM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `account_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `swift_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `user_id`, `account_name`, `account_no`, `bank_name`, `branch`, `type`, `swift_code`, `created_at`, `updated_at`) VALUES
(1, 1, 'Brac-savings', '1211161', 'Brac Bank', 'Badda', 'Savings', '55562', '2019-02-12 03:18:21', '2019-02-12 03:18:33');

-- --------------------------------------------------------

--
-- Table structure for table `comissions`
--

DROP TABLE IF EXISTS `comissions`;
CREATE TABLE IF NOT EXISTS `comissions` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

DROP TABLE IF EXISTS `expenses`;
CREATE TABLE IF NOT EXISTS `expenses` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double NOT NULL,
  `expense_date` date NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` int(11) NOT NULL,
  `account` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `expenses_user_id_foreign` (`customer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `title`, `amount`, `expense_date`, `category`, `customer_id`, `account`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Test-010', 500000, '2019-02-14', 'N/A', 4, '15656565', 'fhnkskfsfksfks.', '2019-02-13 00:53:42', '2019-02-13 00:54:57');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

DROP TABLE IF EXISTS `invoices`;
CREATE TABLE IF NOT EXISTS `invoices` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `serial_no` int(11) NOT NULL,
  `invoice_no` int(11) NOT NULL,
  `issue_date` date NOT NULL,
  `due_note` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `due_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `invoices_user_id_foreign` (`customer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

DROP TABLE IF EXISTS `leads`;
CREATE TABLE IF NOT EXISTS `leads` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `source` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_web` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_contacted` date NOT NULL,
  `lead_tags` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lead_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `leads_user_id_foreign` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ticket_id` int(25) NOT NULL,
  `user_id` int(25) NOT NULL,
  `message` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `ticket_id`, `user_id`, `message`, `created_at`, `updated_at`) VALUES
(1, 101, 2, 'jgsajgjagbhjqhqh.', '2019-02-11 03:47:44', '2019-02-11 03:49:37');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=128 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(109, '2014_10_12_000000_create_users_table', 1),
(110, '2014_10_12_100000_create_password_resets_table', 1),
(111, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(112, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(113, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(114, '2016_06_01_000004_create_oauth_clients_table', 1),
(115, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(116, '2019_02_03_093152_create_permission_tables', 1),
(117, '2019_02_05_045423_invoices', 1),
(118, '2019_02_05_054902_task', 1),
(119, '2019_02_05_054916_proposal', 1),
(120, '2019_02_05_055000_order', 1),
(121, '2019_02_05_055210_invoice', 1),
(122, '2019_02_05_055245_expense', 1),
(123, '2019_02_05_055259_customer', 1),
(124, '2019_02_05_055317_comission', 1),
(125, '2019_02_05_055336_account', 1),
(126, '2019_02_05_055352_ticket', 1),
(127, '2019_02_05_110302_lead', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_type_model_id_index` (`model_type`,`model_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_type_model_id_index` (`model_type`,`model_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1),
(2, 'App\\User', 3),
(3, 'App\\User', 2),
(5, 'App\\User', 4);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

DROP TABLE IF EXISTS `oauth_access_tokens`;
CREATE TABLE IF NOT EXISTS `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_access_tokens_user_id_index` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

DROP TABLE IF EXISTS `oauth_auth_codes`;
CREATE TABLE IF NOT EXISTS `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

DROP TABLE IF EXISTS `oauth_clients`;
CREATE TABLE IF NOT EXISTS `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_clients_user_id_index` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

DROP TABLE IF EXISTS `oauth_personal_access_clients`;
CREATE TABLE IF NOT EXISTS `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `client_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_personal_access_clients_client_id_index` (`client_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

DROP TABLE IF EXISTS `oauth_refresh_tokens`;
CREATE TABLE IF NOT EXISTS `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` int(11) NOT NULL,
  `issue_date` date NOT NULL,
  `staff_id` int(11) NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `open_till` date NOT NULL,
  `details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_user_id_foreign` (`customer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'web', '2019-02-05 01:06:11', '2019-02-05 01:06:11'),
(2, 'role-create', 'web', '2019-02-05 01:06:11', '2019-02-05 01:06:11'),
(3, 'role-edit', 'web', '2019-02-05 01:06:11', '2019-02-05 01:06:11'),
(4, 'role-delete', 'web', '2019-02-05 01:06:11', '2019-02-05 01:06:11'),
(5, 'Account-list', 'web', '2019-02-05 01:06:11', '2019-02-05 01:06:11'),
(6, 'Account-create', 'web', '2019-02-05 01:06:11', '2019-02-05 01:06:11'),
(7, 'Account-edit', 'web', '2019-02-05 01:06:11', '2019-02-05 01:06:11'),
(8, 'Account-delete', 'web', '2019-02-05 01:06:11', '2019-02-05 01:06:11'),
(9, 'Comission-list', 'web', '2019-02-05 01:06:11', '2019-02-05 01:06:11'),
(10, 'Comission-create', 'web', '2019-02-05 01:06:11', '2019-02-05 01:06:11'),
(11, 'Comission-edit', 'web', '2019-02-05 01:06:11', '2019-02-05 01:06:11'),
(12, 'Comission-delete', 'web', '2019-02-05 01:06:11', '2019-02-05 01:06:11'),
(13, 'Customer-list', 'web', '2019-02-05 01:06:11', '2019-02-05 01:06:11'),
(14, 'Customer-create', 'web', '2019-02-05 01:06:11', '2019-02-05 01:06:11'),
(15, 'Customer-edit', 'web', '2019-02-05 01:06:11', '2019-02-05 01:06:11'),
(16, 'Customer-delete', 'web', '2019-02-05 01:06:11', '2019-02-05 01:06:11'),
(17, 'Expense-list', 'web', '2019-02-05 01:06:11', '2019-02-05 01:06:11'),
(18, 'Expense-create', 'web', '2019-02-05 01:06:11', '2019-02-05 01:06:11'),
(19, 'Expense-edit', 'web', '2019-02-05 01:06:11', '2019-02-05 01:06:11'),
(20, 'Expense-delete', 'web', '2019-02-05 01:06:11', '2019-02-05 01:06:11'),
(21, 'Invoice-list', 'web', '2019-02-05 01:06:11', '2019-02-05 01:06:11'),
(22, 'Invoice-create', 'web', '2019-02-05 01:06:11', '2019-02-05 01:06:11'),
(23, 'Invoice-edit', 'web', '2019-02-05 01:06:11', '2019-02-05 01:06:11'),
(24, 'Invoice-delete', 'web', '2019-02-05 01:06:11', '2019-02-05 01:06:11'),
(25, 'Lead-list', 'web', '2019-02-05 01:06:11', '2019-02-05 01:06:11'),
(26, 'Lead-create', 'web', '2019-02-05 01:06:11', '2019-02-05 01:06:11'),
(27, 'Lead-edit', 'web', '2019-02-05 01:06:11', '2019-02-05 01:06:11'),
(28, 'Lead-delete', 'web', '2019-02-05 01:06:11', '2019-02-05 01:06:11'),
(29, 'Order-list', 'web', '2019-02-05 01:06:11', '2019-02-05 01:06:11'),
(30, 'Order-create', 'web', '2019-02-05 01:06:12', '2019-02-05 01:06:12'),
(31, 'Order-edit', 'web', '2019-02-05 01:06:12', '2019-02-05 01:06:12'),
(32, 'Order-delete', 'web', '2019-02-05 01:06:12', '2019-02-05 01:06:12'),
(33, 'Project-list', 'web', '2019-02-05 01:06:12', '2019-02-05 01:06:12'),
(34, 'Project-create', 'web', '2019-02-05 01:06:12', '2019-02-05 01:06:12'),
(35, 'Project-edit', 'web', '2019-02-05 01:06:12', '2019-02-05 01:06:12'),
(36, 'Project-delete', 'web', '2019-02-05 01:06:12', '2019-02-05 01:06:12'),
(37, 'Proposal-list', 'web', '2019-02-05 01:06:12', '2019-02-05 01:06:12'),
(38, 'Proposal-create', 'web', '2019-02-05 01:06:12', '2019-02-05 01:06:12'),
(39, 'Proposal-edit', 'web', '2019-02-05 01:06:12', '2019-02-05 01:06:12'),
(40, 'Proposal-delete', 'web', '2019-02-05 01:06:12', '2019-02-05 01:06:12'),
(41, 'Task-list', 'web', '2019-02-05 01:06:12', '2019-02-05 01:06:12'),
(42, 'Task-create', 'web', '2019-02-05 01:06:12', '2019-02-05 01:06:12'),
(43, 'Task-edit', 'web', '2019-02-05 01:06:12', '2019-02-05 01:06:12'),
(44, 'Task-delete', 'web', '2019-02-05 01:06:12', '2019-02-05 01:06:12'),
(45, 'Ticket-list', 'web', '2019-02-05 01:06:12', '2019-02-05 01:06:12'),
(46, 'Ticket-create', 'web', '2019-02-05 01:06:12', '2019-02-05 01:06:12'),
(47, 'Ticket-edit', 'web', '2019-02-05 01:06:12', '2019-02-05 01:06:12'),
(48, 'Ticket-delete', 'web', '2019-02-05 01:06:12', '2019-02-05 01:06:12'),
(49, 'User-list', 'web', '2019-02-02 18:00:00', '2019-02-02 18:00:00'),
(50, 'User-create', 'web', '2019-02-02 18:00:00', '2019-02-02 18:00:00'),
(51, 'User-edit', 'web', '2019-02-02 18:00:00', '2019-02-02 18:00:00'),
(52, 'User-delete', 'web', '2019-02-02 18:00:00', '2019-02-02 18:00:00'),
(53, 'Product-list', 'web', '2019-02-02 18:00:00', '2019-02-02 18:00:00'),
(54, 'Product-create', 'web', '2019-02-02 18:00:00', '2019-02-02 18:00:00'),
(55, 'Product-edit', 'web', '2019-02-02 18:00:00', '2019-02-10 18:00:00'),
(56, 'Product-delete', 'web', '2019-02-10 18:00:00', '2019-02-02 18:00:00'),
(57, 'Report-list', 'web', '2019-02-02 18:00:00', '2019-02-02 18:00:00'),
(58, 'Report-create', 'web', '2019-02-02 18:00:00', '2019-02-02 18:00:00'),
(59, 'Report-edit', 'web', '2019-02-02 18:00:00', '2019-02-10 18:00:00'),
(60, 'Report-delete', 'web', '2019-02-10 18:00:00', '2019-02-02 18:00:00'),
(61, 'Message-list', 'web', '2019-02-02 18:00:00', '2019-02-02 18:00:00'),
(62, 'Message-create', 'web', '2019-02-02 18:00:00', '2019-02-02 18:00:00'),
(63, 'Message-edit', 'web', '2019-02-02 18:00:00', '2019-02-10 18:00:00'),
(64, 'Message-delete', 'web', '2019-02-10 18:00:00', '2019-02-02 18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` text NOT NULL,
  `purchase_price` float NOT NULL,
  `sales_price` float NOT NULL,
  `product_code` varchar(191) NOT NULL,
  `tax` double NOT NULL,
  `in_stock` varchar(191) NOT NULL,
  `details` text NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `purchase_price`, `sales_price`, `product_code`, `tax`, `in_stock`, `details`, `created_at`, `updated_at`) VALUES
(1, 'aad', 133, 1313, '1313', 113, '424', 'sfsgesge', '2019-02-06 07:43:06', '2019-02-06 07:59:35');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(191) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `details` text NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `customer_id`, `start_date`, `end_date`, `details`, `created_at`, `updated_at`) VALUES
(2, 'aaaaa', 1, '2019-05-01', '2019-05-03', 'fszfazfsaf', '2019-02-06 04:17:34', '2019-02-06 04:17:34'),
(3, 'ddada', 1, '2019-05-01', '2019-05-03', 'aarfafafaf', '2019-02-06 04:19:20', '2019-02-06 08:04:57');

-- --------------------------------------------------------

--
-- Table structure for table `proposals`
--

DROP TABLE IF EXISTS `proposals`;
CREATE TABLE IF NOT EXISTS `proposals` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proposals`
--

INSERT INTO `proposals` (`id`, `subject`, `customer_id`, `staff_id`, `status`, `start_date`, `end_date`, `details`, `created_at`, `updated_at`) VALUES
(5, 'fsfs', 1, 3, 'aa', '2019-02-07', '2019-02-13', 'tswtst', '2019-02-06 07:05:43', '2019-02-06 07:05:43'),
(4, 'fsfs', 2, 1, 'ada', '2019-02-04', '2019-02-13', 'esgsgfsf', '2019-02-06 05:07:34', '2019-02-06 08:00:09');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2019-02-05 01:13:19', '2019-02-05 01:13:19'),
(2, 'Sales Manager', 'web', '2019-02-05 05:52:32', '2019-02-12 05:20:41'),
(3, 'Business Development Manager', 'web', '2019-02-12 05:30:01', '2019-02-12 05:30:01'),
(4, 'Staff', 'web', '2019-02-05 18:00:00', '2019-02-11 18:00:00'),
(5, 'Customer', 'web', '2019-02-10 18:00:00', '2019-02-09 18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 1),
(2, 2),
(2, 3),
(3, 1),
(3, 2),
(3, 3),
(4, 1),
(4, 2),
(4, 3),
(5, 1),
(5, 3),
(6, 1),
(6, 3),
(7, 1),
(7, 3),
(8, 1),
(8, 3),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(21, 2),
(21, 3),
(21, 5),
(22, 1),
(22, 2),
(22, 3),
(22, 5),
(23, 1),
(23, 2),
(23, 3),
(23, 5),
(24, 1),
(24, 2),
(24, 3),
(24, 5),
(25, 1),
(25, 2),
(25, 3),
(25, 5),
(26, 1),
(26, 2),
(26, 3),
(26, 5),
(27, 1),
(27, 2),
(27, 3),
(27, 5),
(28, 1),
(28, 2),
(28, 3),
(28, 5),
(29, 1),
(29, 2),
(29, 3),
(29, 5),
(30, 1),
(30, 2),
(30, 3),
(30, 5),
(31, 1),
(31, 2),
(31, 3),
(31, 5),
(32, 1),
(32, 2),
(32, 3),
(32, 5),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(53, 2),
(53, 3),
(54, 1),
(54, 2),
(54, 3),
(55, 1),
(55, 2),
(55, 3),
(56, 1),
(56, 2),
(56, 3),
(57, 1),
(57, 2),
(58, 1),
(58, 2),
(59, 1),
(59, 2),
(60, 1),
(60, 2),
(61, 1),
(62, 1),
(63, 1),
(64, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `due_date` date NOT NULL,
  `staff_id` int(11) NOT NULL,
  `priority` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `type`, `project`, `customer_id`, `start_date`, `due_date`, `staff_id`, `priority`, `status`, `details`, `created_at`, `updated_at`) VALUES
(4, 'adada', 'fafa', 1, '2019-02-07', '2019-02-12', 1, 'sgsgs', 'sfsf', 'fyfufuyif', '2019-02-06 08:14:19', '2019-02-06 08:22:39');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

DROP TABLE IF EXISTS `tickets`;
CREATE TABLE IF NOT EXISTS `tickets` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` int(11) NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `subject`, `customer_id`, `contact`, `department`, `priority`, `details`, `created_at`, `updated_at`) VALUES
(3, 'adada', 1, 'adada', 'adada', 'adadad', 'fsfgsgfs', '2019-02-06 08:05:36', '2019-02-06 08:11:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ashraful', 'shyon@gmail.com', '$2y$10$tWkWip5gtIX1AA9UZPg8Ku24jmhdhQpJHqM4qn/okCLs.T9OpRtKS', '7tIxJ3Ul0p8w3Vxl8MSFzA20uDClizAp7byAN8BHhh4FyDb11A5ovydVFCT0', '2019-02-05 01:13:58', '2019-02-05 01:13:58'),
(2, 'Ashraful', 'ashraful@gmail.com', '$2y$10$F7m202YjRt1/4D9EMa/egeukNnZvkGXnieCV/dNM3njrk3Mya5vay', NULL, '2019-02-05 01:13:58', '2019-02-12 05:31:00'),
(3, 'ashes', 'ash@gmail.com', '$2y$10$GF9ahLs/bzYFhkZ5uh1uZuG6M2C.lyTnEkcICjsizhOKvWLjt4cBq', NULL, '2019-02-07 00:18:27', '2019-02-07 00:18:49'),
(4, 'H&M', 'h&m@gmail.com', '$2y$10$j.J0rk/F1Jufen4Qybe4V.lCNOcn6bE3jbqmZRmyxVecbovLnNPtq', NULL, '2019-02-13 00:24:45', '2019-02-13 00:24:45');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
