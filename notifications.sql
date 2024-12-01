-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 01, 2024 at 01:16 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notifications`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` varchar(255) DEFAULT NULL,
  `application_status` varchar(50) DEFAULT NULL,
  `approval_status` varchar(50) DEFAULT NULL,
  `tenure` varchar(110) DEFAULT NULL,
  `loan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `loan_amount` varchar(220) DEFAULT NULL,
  `interest` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `process` varchar(150) DEFAULT NULL,
  `step` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `client_id`, `application_status`, `approval_status`, `tenure`, `loan_id`, `loan_amount`, `interest`, `created_at`, `updated_at`, `process`, `step`) VALUES
(38, '18', 'COLLATERAL RELEASED', 'COMPLETED', '12', NULL, '5000000', NULL, '2024-07-29 03:24:21', '2024-07-29 03:39:05', '15', '3'),
(39, '18', 'COLLATERAL RELEASED', 'COMPLETED', '12', NULL, '4000000', NULL, '2024-07-29 04:44:12', '2024-07-29 04:49:33', '15', '3');

-- --------------------------------------------------------

--
-- Table structure for table `approvals`
--

CREATE TABLE `approvals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institution` varchar(255) DEFAULT NULL,
  `process_name` varchar(255) DEFAULT NULL,
  `process_description` varchar(255) DEFAULT NULL,
  `approval_process_description` varchar(255) DEFAULT NULL,
  `process_code` varchar(255) DEFAULT NULL,
  `process_id` varchar(255) DEFAULT NULL,
  `process_status` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `approver_id` varchar(255) DEFAULT NULL,
  `team_id` varchar(255) DEFAULT NULL,
  `edit_package` longtext DEFAULT NULL,
  `clearance` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `approval_status` varchar(255) DEFAULT 'PENDING',
  `reset_email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `approvals`
--

INSERT INTO `approvals` (`id`, `institution`, `process_name`, `process_description`, `approval_process_description`, `process_code`, `process_id`, `process_status`, `user_id`, `approver_id`, `team_id`, `edit_package`, `clearance`, `updated_at`, `created_at`, `approval_status`, `reset_email`) VALUES
(3, '3', 'addBranch', 'has added a branch', 'has approved addition of a branch', '02', '3', 'Pending', '1', NULL, '3', '', NULL, '2023-07-01 11:09:14', '2023-07-01 11:09:14', NULL, NULL),
(4, '4', 'addBranch', 'has added a branch', 'has approved addition of a branch', '02', '4', 'Pending', '1', NULL, '4', '', NULL, '2023-07-01 11:17:40', '2023-07-01 11:17:40', NULL, NULL),
(799, '18', 'Register_stock', 'ADMIN has registered new stock of Cocoa', 'has approved a registration', '102', '18', 'APPROVED', '32', '32', '18', NULL, NULL, NULL, NULL, 'APPROVED', NULL),
(800, '19', 'Register_stock', 'ADMIN has registered new stock of Maize', 'has approved a registration', '102', '19', 'APPROVED', '32', '32', '19', NULL, NULL, NULL, NULL, 'APPROVED', NULL),
(801, '20', 'Register_stock', 'ADMIN has registered new stock of Sesame', 'has approved a registration', '102', '20', 'APPROVED', '32', '32', '20', NULL, NULL, NULL, NULL, 'APPROVED', NULL),
(802, '21', 'Register_stock', 'ADMIN has registered new stock of Maize', 'has approved a registration', '102', '21', 'APPROVED', '32', '32', '21', NULL, NULL, NULL, NULL, 'APPROVED', NULL),
(803, '', 'passwordPolicy', 'ADMIN has  requested  to  change password policy ', '{\"length\":\"8\",\"requireUppercase\":\"1\",\"requireNumeric\":\"1\",\"requireSpecialCharacter\":\"1\",\"limiter\":5,\"passwordExpire\":\"30\"}', '30', '1', 'PENDING', '32', NULL, '', NULL, NULL, '2024-03-08 10:33:14', '2024-03-08 10:33:14', 'PENDING', NULL),
(804, '22', 'Register_stock', 'ADMIN has registered new stock of Cashew Nuts', 'has approved a registration', '102', '22', 'APPROVED', '32', '32', '22', NULL, NULL, NULL, NULL, 'APPROVED', NULL),
(805, '24', 'stock Release', 'ADMIN has registered stock release  forPeter Peter', NULL, '103', '24', NULL, '32', NULL, '24', NULL, NULL, NULL, NULL, 'PENDING', NULL),
(806, '23', 'stock Release', 'ADMIN has registered stock release  for Peter Peter', NULL, '103', '23', NULL, '32', NULL, '23', NULL, NULL, '2024-03-11 12:18:09', '2024-03-11 12:18:09', 'PENDING', NULL),
(807, '22', 'stock Release', 'ADMIN has registered stock release  for Andrew Andrew', NULL, '103', '22', NULL, '32', NULL, '22', NULL, NULL, '2024-03-11 13:17:19', '2024-03-11 13:17:19', 'PENDING', NULL),
(808, '23', 'Register_stock', 'ADMIN has registered new stock of Sesame', 'has approved a registration', '102', '23', 'APPROVED', '32', '32', '23', NULL, NULL, '2024-03-11 13:46:34', '2024-03-11 13:46:34', 'APPROVED', NULL),
(809, '22', 'stock Release', 'ADMIN has registered stock release  for Neema Neema', NULL, '103', '22', NULL, '32', NULL, '22', NULL, NULL, '2024-03-11 14:14:53', '2024-03-11 14:14:53', 'PENDING', NULL),
(810, '24', 'Register_stock', 'ADMIN has registered new stock of Red Beans', 'has approved a registration', '102', '24', 'APPROVED', '32', '32', '24', NULL, NULL, '2024-03-11 14:19:45', '2024-03-11 14:19:45', 'APPROVED', NULL),
(811, '25', 'Register_stock', 'ADMIN has registered new stock of Red Beans', 'has approved a registration', '102', '25', 'APPROVED', '32', '32', '25', NULL, NULL, '2024-03-11 14:22:24', '2024-03-11 14:22:24', 'APPROVED', NULL),
(812, '26', 'Register_stock', 'ADMIN has registered new stock of Sorghum', 'has approved a registration', '102', '26', 'APPROVED', '32', '32', '26', NULL, NULL, '2024-03-12 05:51:33', '2024-03-12 05:51:33', 'APPROVED', NULL),
(813, '26', 'stock Release', 'ADMIN has registered stock release  for Neema Neema', NULL, '103', '26', 'APPROVED', '32', '32', '26', NULL, NULL, '2024-03-12 05:52:08', '2024-03-12 05:52:08', 'APPROVED', NULL),
(814, '27', 'Register_stock', 'PECY has registered new stock of Cotton', 'has approved a registration', '102', '27', 'APPROVED', '50', '50', '27', NULL, NULL, '2024-03-12 09:15:51', '2024-03-12 09:15:51', 'APPROVED', NULL),
(815, '28', 'Register_stock', 'PECY has registered new stock of Coffee', 'has approved a registration', '102', '28', 'APPROVED', '50', '50', '28', NULL, NULL, '2024-03-12 11:51:05', '2024-03-12 11:51:05', 'APPROVED', NULL),
(816, '29', 'Register_stock', 'ADMIN has registered new stock of Sugar Beans', 'has approved a registration', '102', '29', 'APPROVED', '32', '32', '29', NULL, NULL, '2024-03-15 10:59:08', '2024-03-15 10:59:08', 'APPROVED', NULL),
(817, '30', 'Register_stock', 'ADMIN has registered new stock of Cotton', 'has approved a registration', '102', '30', 'APPROVED', '32', '32', '30', NULL, NULL, '2024-03-19 14:59:29', '2024-03-19 14:59:29', 'APPROVED', NULL),
(818, '31', 'Register_stock', 'ADMIN has registered new stock of Red Beans', 'has approved a registration', '102', '31', 'APPROVED', '32', '32', '31', NULL, NULL, '2024-03-24 08:05:34', '2024-03-24 08:05:34', 'APPROVED', NULL),
(819, ' ', 'editRole', 'ADMIN has edited role named - ADMINISTRATOR', 'ADMIN has edited role named - ADMINISTRATOR', '24', '16', 'Pending', '32', NULL, '', '{\"department_name\":\"ADMINISTRATOR\",\"description\":\"Second administrator\",\"permissions\":\"{\\\"0\\\":\\\"2\\\",\\\"1\\\":\\\"3\\\",\\\"2\\\":\\\"4\\\",\\\"3\\\":\\\"5\\\",\\\"4\\\":\\\"6\\\",\\\"5\\\":\\\"7\\\",\\\"6\\\":\\\"8\\\",\\\"7\\\":\\\"9\\\",\\\"8\\\":\\\"10\\\",\\\"9\\\":\\\"11\\\",\\\"10\\\":\\\"12\\\",\\\"11\\\":\\\"13\\\",\\\"12\\\":\\\"14\\\",\\\"13\\\":\\\"15\\\",\\\"14\\\":\\\"16\\\",\\\"15\\\":\\\"17\\\",\\\"17\\\":\\\"17\\\",\\\"18\\\":\\\"18\\\",\\\"20\\\":\\\"20\\\",\\\"21\\\":\\\"21\\\",\\\"22\\\":\\\"22\\\",\\\"24\\\":\\\"24\\\",\\\"25\\\":\\\"25\\\",\\\"26\\\":\\\"26\\\",\\\"28\\\":\\\"28\\\",\\\"30\\\":\\\"30\\\",\\\"34\\\":\\\"34\\\",\\\"38\\\":\\\"38\\\",\\\"42\\\":\\\"42\\\"}\",\"modules\":\"{\\\"0\\\":\\\"2\\\",\\\"1\\\":\\\"3\\\",\\\"2\\\":\\\"4\\\",\\\"3\\\":\\\"5\\\",\\\"4\\\":\\\"6\\\",\\\"5\\\":\\\"7\\\",\\\"6\\\":\\\"8\\\",\\\"7\\\":\\\"9\\\",\\\"8\\\":\\\"10\\\",\\\"9\\\":\\\"11\\\",\\\"10\\\":\\\"12\\\",\\\"11\\\":\\\"13\\\",\\\"12\\\":\\\"14\\\",\\\"13\\\":\\\"15\\\",\\\"14\\\":\\\"16\\\",\\\"15\\\":\\\"17\\\",\\\"17\\\":\\\"17\\\",\\\"18\\\":\\\"18\\\",\\\"20\\\":\\\"20\\\",\\\"21\\\":\\\"21\\\",\\\"22\\\":\\\"22\\\",\\\"24\\\":\\\"24\\\",\\\"25\\\":\\\"25\\\",\\\"26\\\":\\\"26\\\",\\\"28\\\":\\\"28\\\",\\\"30\\\":\\\"30\\\",\\\"34\\\":\\\"34\\\",\\\"38\\\":\\\"38\\\",\\\"42\\\":\\\"42\\\"}\",\"status\":\"ACTIVE\"}', NULL, '2024-07-17 08:32:37', '2024-07-17 08:32:37', 'PENDING', NULL),
(820, ' ', 'addRole', 'ADMIN has edited role named - TEST RUN', ' has approved creation of a new role', '24', '17', 'APPROVED', '32', '32', '', NULL, NULL, '2024-07-18 04:40:48', '2024-07-17 09:55:40', 'APPROVED', NULL),
(821, ' ', 'editRole', 'ADMIN has edited role named - TEST RUN', 'ADMIN has edited role named - TEST RUN', '24', '17', 'PENDING', '32', NULL, '', '{\"status\":\"BLOCK\"}', NULL, '2024-07-18 03:17:51', '2024-07-18 02:12:07', 'PENDING', NULL),
(822, ' ', 'addRole', 'ADMIN has edited role named - TEST ROLE', ' has approved creation of a new role', '24', '18', 'APPROVED', '32', '32', '', NULL, NULL, '2024-07-18 04:40:38', '2024-07-18 04:31:17', 'APPROVED', NULL),
(823, ' ', 'addRole', 'ADMIN has edited role named - THE ROLE', ' has approved creation of a new role', '24', '19', 'APPROVED', '32', '32', '', NULL, NULL, '2024-07-18 04:40:35', '2024-07-18 04:37:21', 'APPROVED', NULL),
(824, ' ', 'editRole', 'ADMIN has edited role named - TEST MO', 'Approved editing of the node', '24', '15', 'PENDING', '32', '32', '', '{\"department_name\":\"TEST MO\",\"description\":\"TEST MOZ\",\"permissions\":\"{\\\"1\\\":\\\"1\\\",\\\"3\\\":\\\"3\\\",\\\"6\\\":\\\"6\\\",\\\"7\\\":\\\"7\\\",\\\"10\\\":\\\"10\\\",\\\"11\\\":\\\"11\\\",\\\"12\\\":\\\"12\\\",\\\"14\\\":\\\"14\\\",\\\"18\\\":\\\"18\\\",\\\"19\\\":\\\"19\\\"}\",\"modules\":\"{\\\"1\\\":\\\"1\\\",\\\"3\\\":\\\"3\\\",\\\"6\\\":\\\"6\\\",\\\"7\\\":\\\"7\\\",\\\"10\\\":\\\"10\\\",\\\"11\\\":\\\"11\\\",\\\"12\\\":\\\"12\\\",\\\"14\\\":\\\"14\\\",\\\"18\\\":\\\"18\\\",\\\"19\\\":\\\"19\\\"}\",\"status\":\"ACTIVE\"}', NULL, '2024-07-18 04:55:59', '2024-07-18 04:48:03', 'APPROVED', NULL),
(825, ' ', 'editRole', 'ADMIN has edited role named - ADMINISTRATOR', 'Approved editing of the node', '24', '10', 'PENDING', '32', '32', '', '{\"department_name\":\"ADMINISTRATOR\",\"description\":\"Dicta eum voluptatib\",\"permissions\":\"[\\\"2\\\",false,false,false,false,\\\"5\\\",false,\\\"7\\\",false,\\\"9\\\",\\\"10\\\",false,false,\\\"13\\\",\\\"14\\\",false,false,\\\"17\\\",\\\"18\\\",\\\"19\\\",\\\"20\\\",false,false,\\\"23\\\",\\\"24\\\",\\\"25\\\",\\\"26\\\",\\\"27\\\",\\\"28\\\",false,\\\"30\\\",\\\"31\\\",\\\"32\\\",false,false,\\\"35\\\",\\\"36\\\",false,false,false,\\\"40\\\",\\\"41\\\",\\\"42\\\",\\\"43\\\",\\\"44\\\",\\\"45\\\",\\\"46\\\"]\",\"modules\":\"[\\\"2\\\",false,false,false,false,\\\"5\\\",false,\\\"7\\\",false,\\\"9\\\",\\\"10\\\",false,false,\\\"13\\\",\\\"14\\\",false,false,\\\"17\\\",\\\"18\\\",\\\"19\\\",\\\"20\\\",false,false,\\\"23\\\",\\\"24\\\",\\\"25\\\",\\\"26\\\",\\\"27\\\",\\\"28\\\",false,\\\"30\\\",\\\"31\\\",\\\"32\\\",false,false,\\\"35\\\",\\\"36\\\",false,false,false,\\\"40\\\",\\\"41\\\",\\\"42\\\",\\\"43\\\",\\\"44\\\",\\\"45\\\",\\\"46\\\"]\",\"status\":\"ACTIVE\"}', NULL, '2024-07-18 05:28:35', '2024-07-18 04:56:47', 'APPROVED', NULL),
(826, ' ', 'addCommodity', 'ADMIN has added a role named - test7', ' has approved creation of a new role', '24', '19', 'APPROVED', '32', '32', '', NULL, NULL, '2024-07-18 07:36:43', '2024-07-18 07:32:11', 'APPROVED', NULL),
(827, ' ', 'changePrice', 'ADMIN has changed the price per kilo of commodity named  - Maize, from 8000 to 790', 'ADMIN has edited role named - Maize', '24', '1', 'PENDING', '32', '32', '', '{\"price_per_kilo\":790}', NULL, '2024-07-29 04:35:29', '2024-07-19 03:26:09', 'PENDING', NULL),
(828, ' ', 'changePrice', 'ADMIN has changed the price per kilo of commodity named  - Cotton, from 1200 to 8000', 'Approved change of price', '24', '2', 'PENDING', '32', '32', '', '{\"price_per_kilo\":8000}', NULL, '2024-07-22 14:50:55', '2024-07-19 03:45:11', 'APPROVED', NULL),
(829, ' ', 'addBranch', 'ADMIN has added a branch named - Test 1', 'ADMIN has added a branch named - Test 1', '24', '33', 'PENDING', '32', NULL, '', NULL, NULL, '2024-07-19 09:40:39', '2024-07-19 09:40:39', 'PENDING', NULL),
(830, '32', 'Register_stock', 'ADMIN has registered new stock of Cocoa', 'has approved a registration', '102', '32', 'APPROVED', '32', '32', '32', NULL, NULL, '2024-07-21 08:47:09', '2024-07-21 08:47:09', 'APPROVED', NULL),
(831, '33', 'Register_stock', 'ADMIN has registered new stock of Cocoa', 'has approved a registration', '102', '33', 'APPROVED', '32', '32', '33', NULL, NULL, '2024-07-21 08:47:54', '2024-07-21 08:47:54', 'APPROVED', NULL),
(832, ' ', 'registerStock', 'Collateral Manager - ADMIN has registered new stock of Sesame', 'has approved this action', '24', '34', 'PENDING', '32', NULL, '', NULL, NULL, '2024-07-21 06:05:27', '2024-07-21 06:05:27', 'PENDING', NULL),
(833, ' ', 'registerStock', 'Collateral Manager - ADMIN has registered new stock of Maize', 'has approved this action', '24', '35', 'PENDING', '32', NULL, '', NULL, NULL, '2024-07-21 06:11:43', '2024-07-21 06:11:43', 'PENDING', NULL),
(834, ' ', 'registerStock', 'Collateral Manager - ADMIN has registered new stock of Mogas gasoline', 'has approved this action', '24', '36', 'PENDING', '32', NULL, '', NULL, NULL, '2024-07-21 06:21:59', '2024-07-21 06:21:59', 'PENDING', NULL),
(835, ' ', 'registerStock', 'Collateral Manager - ADMIN has registered new stock of Cotton', 'has approved this action', '24', '37', 'PENDING', '32', NULL, '', NULL, NULL, '2024-07-21 06:31:49', '2024-07-21 06:31:49', 'PENDING', NULL),
(836, ' ', 'registerStock', 'Collateral Manager - ADMIN has registered new stock of Cocoa', 'has approved this action', '24', '38', 'PENDING', '32', NULL, '', NULL, NULL, '2024-07-21 06:32:09', '2024-07-21 06:32:09', 'PENDING', NULL),
(837, ' ', 'registerStock', 'Collateral Manager - ADMIN has registered new stock of Petrol', 'has approved this action', '24', '39', 'PENDING', '32', NULL, '', NULL, NULL, '2024-07-21 06:32:29', '2024-07-21 06:32:29', 'PENDING', NULL),
(838, ' ', 'registerStock', 'Collateral Manager - ADMIN has registered new stock of Cocoa', 'has approved this action', '24', '40', 'PENDING', '32', NULL, '', NULL, NULL, '2024-07-22 15:05:12', '2024-07-22 15:05:12', 'PENDING', NULL),
(839, ' ', 'registerStock', 'Collateral Manager - ADMIN has registered new stock of Petrol', 'has approved this action', '24', '41', 'PENDING', '32', NULL, '', NULL, NULL, '2024-07-22 15:07:51', '2024-07-22 15:07:51', 'PENDING', NULL),
(840, '29', 'stock Release', 'ADMIN has registered stock release  for Andrew Andrew', NULL, '103', '29', NULL, '32', NULL, '29', NULL, NULL, '2024-07-22 21:40:04', '2024-07-22 21:40:04', 'PENDING', NULL),
(841, ' ', 'registerStock', 'Collateral Manager - ADMIN has registered new stock of Cotton', 'has approved this action', '24', '42', 'PENDING', '32', NULL, '', NULL, NULL, '2024-07-28 16:35:32', '2024-07-28 16:35:32', 'PENDING', NULL),
(842, ' ', 'registerStock', 'Collateral Manager - ADMIN has registered new stock of Maize', 'has approved this action', '24', '43', 'PENDING', '32', NULL, '', NULL, NULL, '2024-07-28 17:09:39', '2024-07-28 17:09:39', 'PENDING', NULL),
(843, ' ', 'registerStock', 'Collateral Manager - Omnis quo repudianda has registered new stock of Cashew Nuts', 'has approved this action', '24', '44', 'PENDING', '60', NULL, '', NULL, NULL, '2024-07-29 00:29:16', '2024-07-29 00:29:16', 'PENDING', NULL),
(844, '36', 'stock Release', 'ADMIN has registered stock release  for Enim Enim', NULL, '103', '36', NULL, '32', NULL, '36', NULL, NULL, '2024-07-29 05:59:41', '2024-07-29 05:59:41', 'PENDING', NULL),
(845, '35', 'stock Release', 'ADMIN has registered stock release  for Andrew Andrew', NULL, '103', '35', NULL, '32', NULL, '35', NULL, NULL, '2024-07-29 06:08:52', '2024-07-29 06:08:52', 'PENDING', NULL),
(846, '37', 'stock Release', 'ADMIN has registered stock release  for Andrew Andrew', NULL, '103', '37', NULL, '32', NULL, '37', NULL, NULL, '2024-07-29 06:12:05', '2024-07-29 06:12:05', 'PENDING', NULL),
(847, '38', 'stock Release', 'ADMIN has registered stock release  for Andrew Andrew', NULL, '103', '38', NULL, '32', NULL, '38', NULL, NULL, '2024-07-29 06:29:57', '2024-07-29 06:29:57', 'PENDING', NULL),
(848, ' ', 'registerStock', 'Collateral Manager - ADMIN has registered new stock of Cotton', 'has approved this action', '24', '45', 'PENDING', '32', NULL, '', NULL, NULL, '2024-07-29 04:29:31', '2024-07-29 04:29:31', 'PENDING', NULL),
(849, ' ', 'registerStock', 'Collateral Manager - ADMIN has registered new stock of Diesel', 'has approved this action', '24', '46', 'PENDING', '32', NULL, '', NULL, NULL, '2024-07-29 04:29:54', '2024-07-29 04:29:54', 'PENDING', NULL),
(850, ' ', 'registerStock', 'Collateral Manager - ADMIN has registered new stock of Cotton', 'has approved this action', '24', '47', 'PENDING', '32', NULL, '', NULL, NULL, '2024-07-29 04:32:36', '2024-07-29 04:32:36', 'PENDING', NULL),
(851, '39', 'stock Release', 'ADMIN has registered stock release  for Andrew Andrew', NULL, '103', '39', NULL, '32', NULL, '39', NULL, NULL, '2024-07-29 07:48:44', '2024-07-29 07:48:44', 'PENDING', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institution_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `region` varchar(255) DEFAULT NULL,
  `ward` varchar(255) DEFAULT NULL,
  `district` varchar(220) DEFAULT NULL,
  `branchNumber` varchar(255) DEFAULT NULL,
  `parentBranch` varchar(255) DEFAULT NULL,
  `monthly_disbursement_amount` varchar(255) DEFAULT NULL,
  `amount_owed` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `automatic_payments` varchar(255) DEFAULT NULL,
  `branch_status` varchar(255) DEFAULT NULL,
  `Status` varchar(220) DEFAULT NULL,
  `selected` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `institution_id`, `name`, `region`, `ward`, `district`, `branchNumber`, `parentBranch`, `monthly_disbursement_amount`, `amount_owed`, `phone_number`, `email`, `automatic_payments`, `branch_status`, `Status`, `selected`, `created_at`, `updated_at`) VALUES
(12, NULL, 'MAFINGA DC BRANCH', 'IRINGA', 'MAFINGA', NULL, '9010', NULL, NULL, NULL, NULL, 'ema@gmail.com', NULL, 'PENDING', NULL, 0, '2023-07-02 19:48:14', '2023-07-02 19:48:14'),
(17, NULL, 'SOWETO', 'DAR ES SALAAM ', 'ILALA', NULL, '9583', NULL, NULL, NULL, '0624451311', 'ema@gmail.com', NULL, 'ACTIVE', NULL, 0, '2023-07-03 08:37:35', '2023-07-03 08:37:35'),
(25, NULL, 'HQ', 'DAR ES SALAAM', 'KINONDONI', NULL, '9307', NULL, NULL, NULL, '0624531123', 'makongosaccos@gmail.com', NULL, 'PENDING', NULL, 0, '2023-08-02 03:50:44', '2023-08-02 03:50:44'),
(30, '8', 'text', 'mwanza ', 'mjini', NULL, '9308', NULL, NULL, NULL, '7777777777', 'mwana@gmail.com', NULL, 'ACTIVE', NULL, 0, '2023-11-20 09:30:18', '2023-11-20 09:33:10'),
(31, '8', 'demo', 'DAR ES SALAAM ', 'MADABA', NULL, '9309', NULL, NULL, NULL, '+2551234567891', 'mwana@gmail.com', NULL, 'PENDING', NULL, 0, '2023-11-24 10:33:33', '2023-11-24 10:33:33'),
(32, NULL, 'Test 1', '10', '617', '60', NULL, NULL, NULL, NULL, 'Sed quis qui rerum s', 'gevix@mailinator.com', NULL, NULL, 'PENDING', 0, '2024-07-19 09:39:47', '2024-07-19 09:39:47'),
(33, NULL, 'Test 1', '10', '617', '60', NULL, NULL, NULL, NULL, 'Sed quis qui rerum s', 'gevix@mailinator.com', NULL, NULL, 'PENDING', 0, '2024-07-19 09:40:39', '2024-07-19 09:40:39');

-- --------------------------------------------------------

--
-- Table structure for table `checks`
--

CREATE TABLE `checks` (
  `id` int(11) NOT NULL,
  `check_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `checks`
--

INSERT INTO `checks` (`id`, `check_name`) VALUES
(1, 'Security token'),
(2, 'Check device ID'),
(3, 'Check card IMEI number'),
(4, 'Check device type'),
(5, 'Check institution ID'),
(6, 'Check institution passcode'),
(7, 'Check institution status'),
(8, 'Check IMEI blacklist'),
(9, 'Check device ID blacklist'),
(10, 'Check customer name'),
(11, 'Check customer number'),
(12, 'Check customer passcode'),
(13, 'Check service ID'),
(14, 'Check type of service against user type (customer, institution, system)'),
(15, 'Check service status'),
(16, 'Check customer name blacklist'),
(17, 'Check customer phone number blacklist'),
(18, 'Check customer phone number'),
(19, 'Check frequency of customer name'),
(20, 'Check frequency of customer phone number'),
(21, 'Check frequency of customer number'),
(22, 'Check amount against limits'),
(23, 'Check amount against frequency'),
(24, 'Check duplicate transaction per RRN'),
(25, 'Check duplicate transaction per combined parameters'),
(26, 'Hour of the day check'),
(27, 'Day of the week check');

-- --------------------------------------------------------

--
-- Table structure for table `choises`
--

CREATE TABLE `choises` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `commodity_id` int(11) DEFAULT NULL,
  `kilos` int(11) DEFAULT NULL,
  `choise` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `choises`
--

INSERT INTO `choises` (`id`, `client_id`, `commodity_id`, `kilos`, `choise`, `created_at`, `updated_at`) VALUES
(5, 1, 9, 56, 1, NULL, NULL),
(6, 1, 5, 56, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `account_number` bigint(20) DEFAULT NULL,
  `institution_id` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `branch` varchar(255) DEFAULT NULL,
  `registering_officer` varchar(255) DEFAULT NULL,
  `loan_officer` varchar(255) DEFAULT NULL,
  `approving_officer` varchar(255) DEFAULT NULL,
  `membership_type` varchar(255) DEFAULT NULL,
  `incorporation_number` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `mobile_phone_number` varchar(255) DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `place_of_birth` varchar(255) DEFAULT NULL,
  `marital_status` varchar(255) DEFAULT NULL,
  `client_number` varchar(30) DEFAULT NULL,
  `registration_date` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `current_team_id` bigint(20) DEFAULT NULL,
  `profile_photo_path` varchar(255) DEFAULT NULL,
  `branch_id` varchar(255) DEFAULT NULL,
  `client_status` varchar(255) NOT NULL DEFAULT 'PENDING',
  `next_of_kin_name` varchar(255) DEFAULT NULL,
  `next_of_kin_phone` varchar(255) DEFAULT NULL,
  `tin_number` varchar(255) DEFAULT NULL,
  `nida_number` varchar(255) DEFAULT NULL,
  `ref_number` varchar(255) DEFAULT NULL,
  `shares_ref_number` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nationarity` varchar(30) DEFAULT NULL,
  `member_exit_document` varchar(200) DEFAULT NULL,
  `end_membership_description` text DEFAULT NULL,
  `full_name` varchar(50) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `national_id` varchar(30) DEFAULT NULL,
  `client_id` bigint(20) DEFAULT NULL,
  `customer_code` varchar(255) DEFAULT NULL,
  `present_surname` varchar(255) DEFAULT NULL,
  `birth_surname` varchar(255) DEFAULT NULL,
  `number_of_spouse` int(11) DEFAULT NULL,
  `number_of_children` int(11) DEFAULT NULL,
  `classification_of_individual` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `country_of_birth` varchar(255) DEFAULT NULL,
  `fate_status` varchar(255) DEFAULT NULL,
  `social_status` varchar(255) DEFAULT NULL,
  `residency` varchar(255) DEFAULT NULL,
  `citizenship` varchar(255) DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `employment` varchar(255) DEFAULT NULL,
  `employer_name` varchar(255) DEFAULT NULL,
  `education` varchar(255) DEFAULT NULL,
  `business_name` varchar(255) DEFAULT NULL,
  `income_available` varchar(255) DEFAULT NULL,
  `monthly_expenses` varchar(255) DEFAULT NULL,
  `negative_status_of_individual` varchar(255) DEFAULT NULL,
  `tax_identification_number` varchar(255) DEFAULT NULL,
  `passport_number` varchar(255) DEFAULT NULL,
  `passport_issuer_country` varchar(255) DEFAULT NULL,
  `driving_license_number` varchar(255) DEFAULT NULL,
  `voters_id` varchar(255) DEFAULT NULL,
  `foreign_unique_id` varchar(255) DEFAULT NULL,
  `custom_id_number_1` varchar(255) DEFAULT NULL,
  `custom_id_number_2` varchar(255) DEFAULT NULL,
  `main_address` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `number_of_building` varchar(255) DEFAULT NULL,
  `postal_code` varchar(255) DEFAULT NULL,
  `region` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `mobile_phone` varchar(255) DEFAULT NULL,
  `fixed_line` varchar(255) DEFAULT NULL,
  `web_page` varchar(255) DEFAULT NULL,
  `trade_name` text DEFAULT NULL,
  `legal_form` text DEFAULT NULL,
  `establishment_date` text DEFAULT NULL,
  `registration_country` text DEFAULT NULL,
  `industry_sector` text DEFAULT NULL,
  `registration_number` text DEFAULT NULL,
  `middle_names` text DEFAULT NULL,
  `collateral_manager_id` bigint(20) DEFAULT NULL,
  `identificationType` text DEFAULT NULL,
  `identificationNo` text DEFAULT NULL,
  `ward` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `account_number`, `institution_id`, `first_name`, `middle_name`, `last_name`, `branch`, `registering_officer`, `loan_officer`, `approving_officer`, `membership_type`, `incorporation_number`, `phone_number`, `mobile_phone_number`, `email`, `place_of_birth`, `marital_status`, `client_number`, `registration_date`, `address`, `notes`, `current_team_id`, `profile_photo_path`, `branch_id`, `client_status`, `next_of_kin_name`, `next_of_kin_phone`, `tin_number`, `nida_number`, `ref_number`, `shares_ref_number`, `created_at`, `updated_at`, `nationarity`, `member_exit_document`, `end_membership_description`, `full_name`, `amount`, `national_id`, `client_id`, `customer_code`, `present_surname`, `birth_surname`, `number_of_spouse`, `number_of_children`, `classification_of_individual`, `gender`, `date_of_birth`, `country_of_birth`, `fate_status`, `social_status`, `residency`, `citizenship`, `nationality`, `employment`, `employer_name`, `education`, `business_name`, `income_available`, `monthly_expenses`, `negative_status_of_individual`, `tax_identification_number`, `passport_number`, `passport_issuer_country`, `driving_license_number`, `voters_id`, `foreign_unique_id`, `custom_id_number_1`, `custom_id_number_2`, `main_address`, `street`, `number_of_building`, `postal_code`, `region`, `district`, `country`, `mobile_phone`, `fixed_line`, `web_page`, `trade_name`, `legal_form`, `establishment_date`, `registration_country`, `industry_sector`, `registration_number`, `middle_names`, `collateral_manager_id`, `identificationType`, `identificationNo`, `ward`) VALUES
(32, NULL, NULL, 'Andrew', 'Andrew', 'Andrew', NULL, NULL, NULL, NULL, NULL, NULL, '0754244888', NULL, 'appsbongo@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'NEW CLIENT', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-17 08:17:07', '2024-01-17 08:17:07', NULL, NULL, NULL, NULL, 200000, '12345467890', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'MBWENI', NULL, NULL, 'DAR ES SALAAM', 'ILALA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, NULL, NULL, 'MAEMBO', 'TUKUYU', 'MOYO', NULL, NULL, NULL, NULL, NULL, NULL, '0754244888', NULL, 'appsbongo@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'NEW CLIENT', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-17 14:49:12', '2024-01-17 14:49:12', NULL, NULL, NULL, NULL, NULL, '65655765687', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'UTUU', NULL, NULL, 'DAR ES SALAAM', 'ILALA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, NULL, NULL, 'MAEMBO', 'TUKUYU', 'MOYO', NULL, NULL, NULL, NULL, NULL, NULL, '0754244888', NULL, 'appsbongo@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'NEW CLIENT', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-17 14:49:54', '2024-01-17 14:49:54', NULL, NULL, NULL, NULL, NULL, '65655765687', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'UTUU', NULL, NULL, 'DAR ES SALAAM', 'ILALA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, NULL, NULL, 'MAEMBO', 'TUKUYU', 'MOYO', NULL, NULL, NULL, NULL, NULL, NULL, '0754244888', NULL, 'appsbongo@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'NEW CLIENT', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-17 14:51:23', '2024-01-17 14:51:23', NULL, NULL, NULL, NULL, NULL, '65655765687', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'UTUU', NULL, NULL, 'DAR ES SALAAM', 'ILALA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, NULL, NULL, 'MAEMBO', 'TUKUYU', 'MOYO', NULL, NULL, NULL, NULL, NULL, NULL, '0754244888', NULL, 'appsbongo@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'NEW CLIENT', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-17 14:52:21', '2024-01-17 14:52:21', NULL, NULL, NULL, NULL, NULL, '65655765687', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'UTUU', NULL, NULL, 'DAR ES SALAAM', 'ILALA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, NULL, NULL, 'LIGHT', 'ALONE', 'SASO', NULL, NULL, NULL, NULL, NULL, NULL, '0753244888', NULL, 'appsbongo@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'NEW CLIENT', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-18 08:11:06', '2024-01-18 08:11:06', NULL, NULL, NULL, NULL, NULL, '3222323444', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'WODA', NULL, NULL, 'DAR ES SALAAM', 'ILALA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, NULL, NULL, 'PASCAZIA', 'KOKUSHIBA', 'SHUBILA', NULL, NULL, NULL, NULL, NULL, NULL, '0754244888', NULL, 'appsbongo@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'NEW CLIENT', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-18 08:25:48', '2024-01-18 08:25:48', NULL, NULL, NULL, NULL, 35000000, '23434234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'MWENGE', NULL, NULL, 'DAR ES SALAAM', 'ILALA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, NULL, NULL, 'PASCAZIA', 'KOKUSHIBA', 'SHUBILA', NULL, NULL, NULL, NULL, NULL, NULL, '0754244888', NULL, 'appsbongo@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'NEW CLIENT', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-18 08:26:42', '2024-01-18 08:26:42', NULL, NULL, NULL, NULL, 35000000, '23434234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'MWENGE', NULL, NULL, 'DAR ES SALAAM', 'ILALA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, NULL, NULL, 'Edwin', NULL, 'Urasa', NULL, NULL, NULL, NULL, NULL, NULL, '+255757330260', NULL, 'edwin.urasa@creditinfo.co.tz', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'NEW CLIENT', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-29 18:58:06', '2024-01-29 18:58:06', NULL, NULL, NULL, NULL, 900000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, NULL, NULL, 'Edwin', NULL, 'Urasa', NULL, NULL, NULL, NULL, NULL, NULL, '+255757330260', NULL, 'edwin.urasa@creditinfo.co.tz', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'NEW CLIENT', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-29 18:59:32', '2024-01-29 18:59:32', NULL, NULL, NULL, NULL, 900000, '1223344566', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hai', NULL, NULL, 'moshi', 'moshi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `collateral_managers`
--

CREATE TABLE `collateral_managers` (
  `id` int(11) NOT NULL,
  `CMNumber` varchar(255) DEFAULT NULL,
  `EmailAddress` varchar(255) DEFAULT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL,
  `Country` varchar(255) DEFAULT NULL,
  `PostalCode` varchar(255) DEFAULT NULL,
  `WarehouseLocation` text DEFAULT NULL,
  `canAddFarmers` tinyint(1) NOT NULL DEFAULT 0,
  `canInitiateLoan` tinyint(1) NOT NULL DEFAULT 0,
  `canSetPrices` tinyint(1) NOT NULL DEFAULT 0,
  `BusinessName` varchar(300) DEFAULT NULL,
  `BusinessLicenceNumber` varchar(150) DEFAULT NULL,
  `TINNumber` varchar(150) DEFAULT NULL,
  `BusinessPhoneNumber` varchar(50) DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL,
  `photo` varchar(320) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ward` varchar(200) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `District` varchar(220) DEFAULT NULL,
  `PhoneNumber` varchar(220) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `collateral_managers`
--

INSERT INTO `collateral_managers` (`id`, `CMNumber`, `EmailAddress`, `FirstName`, `LastName`, `Address`, `City`, `Country`, `PostalCode`, `WarehouseLocation`, `canAddFarmers`, `canInitiateLoan`, `canSetPrices`, `BusinessName`, `BusinessLicenceNumber`, `TINNumber`, `BusinessPhoneNumber`, `Status`, `photo`, `created_at`, `updated_at`, `ward`, `description`, `District`, `PhoneNumber`) VALUES
(23, '67676', 'andrew.s.mashamba@gmail.com', 'Andrew', 'Mashamba', 'Namanga Rd', '2', 'Tanzania', NULL, '', 0, 0, 0, 'FastCredit', 'FastCredit', 'Numquam sunt eiusmo', '0692410353', 'PENDING', NULL, '2024-07-20 12:10:40', '2024-07-20 12:10:40', NULL, NULL, '8', NULL),
(24, '594055', 'andrew.s.mashamba@gmail.com', 'Andrew', 'Mashamba', 'Namanga Rd , Mambo leo', '17', 'Tanzania', NULL, '', 0, 0, 0, 'GREEN FIELDS LTD', '565565767', '54464656', '0692410353', 'PENDING', NULL, '2024-07-28 23:21:37', '2024-07-28 23:21:37', NULL, NULL, '112', 'Quidem qui quis iust'),
(25, '421144', 'cm@gmail.com', 'Aut tempore minus q', 'Do mollit aut aspern', 'Exercitation nisi ma', '13', 'Tanzania', NULL, '', 0, 0, 0, 'BLUE ORIGIN LTD', 'Duis dolores ut cupi', 'Quia aut nihil ut pr', 'Et ipsum numquam ac', 'PENDING', NULL, '2024-07-28 23:30:38', '2024-07-28 23:30:38', NULL, NULL, '81', 'Facilis aute minima '),
(26, '907402', 'cm2@gmail.com', 'Omnis quo repudianda', 'Earum veritatis non ', 'Molestias fuga Quam', '16', 'Tanzania', NULL, '', 0, 0, 0, 'BLACK WOOD LTD', 'Provident numquam s', 'Minima nulla non atq', 'Et minim et ullam eo', 'PENDING', NULL, '2024-07-29 00:08:44', '2024-07-29 00:08:44', NULL, NULL, '105', 'Praesentium qui qui ');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `application_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment_text` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `application_id`, `user_id`, `comment_text`, `created_at`, `updated_at`) VALUES
(1, 28, 32, 'This is good', '2024-07-22 10:49:35', '2024-07-22 10:49:35'),
(2, 28, 32, 'Application date is ok', '2024-07-22 13:25:59', '2024-07-22 13:25:59'),
(3, 31, 32, 'Yes ok', '2024-07-22 13:26:30', '2024-07-22 13:26:30'),
(4, 32, 32, 'Hello', '2024-07-22 14:56:06', '2024-07-22 14:56:06'),
(5, 33, 32, 'Ok', '2024-07-22 15:12:59', '2024-07-22 15:12:59'),
(6, 31, 32, 'GHBJH', '2024-07-23 03:50:20', '2024-07-23 03:50:20'),
(7, 36, 32, 'To be reviewed', '2024-07-29 02:28:50', '2024-07-29 02:28:50'),
(8, 39, 32, 'Done', '2024-07-29 04:45:50', '2024-07-29 04:45:50'),
(9, 39, 32, 'Ok', '2024-07-29 04:46:28', '2024-07-29 04:46:28');

-- --------------------------------------------------------

--
-- Table structure for table `commodities`
--

CREATE TABLE `commodities` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `unit` varchar(50) DEFAULT NULL,
  `total_liters` int(11) DEFAULT NULL,
  `price_per_kilo` int(11) DEFAULT NULL,
  `total_kilos` int(11) DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `commodities`
--

INSERT INTO `commodities` (`id`, `name`, `description`, `unit`, `total_liters`, `price_per_kilo`, `total_kilos`, `Status`, `created_at`, `updated_at`) VALUES
(1, 'Jan', NULL, 'Kg', NULL, 1200, NULL, 'PENDING', '2024-02-07 14:22:33', '2024-08-16 13:07:54'),
(2, 'Feb', NULL, 'Kg', NULL, 8000, NULL, 'PENDING', '2024-02-07 14:23:18', '2024-08-16 13:08:03'),
(3, 'March', NULL, 'Kg', NULL, 900, NULL, 'PENDING', '2024-02-07 14:23:34', '2024-08-16 13:08:11'),
(4, 'April', NULL, 'Kg', NULL, 6000, NULL, 'PENDING', '2024-02-07 14:23:48', '2024-08-16 13:08:22'),
(5, 'May', NULL, 'Kg', NULL, 5800, NULL, 'PENDING', '2024-02-07 14:24:03', '2024-08-16 13:09:24'),
(6, 'June', NULL, 'Kg', NULL, 7000, NULL, 'PENDING', '2024-02-07 14:24:18', '2024-08-16 13:09:46'),
(7, 'July', NULL, 'Kg', NULL, 1800, NULL, 'PENDING', '2024-02-07 14:24:46', '2024-08-16 13:10:02'),
(8, 'August', NULL, 'Kg', NULL, 2000, NULL, 'PENDING', '2024-02-07 14:24:59', '2024-08-16 13:11:44'),
(9, 'September', NULL, 'Kg', NULL, 2400, NULL, 'PENDING', '2024-02-07 14:25:16', '2024-08-16 13:12:00'),
(10, 'October', NULL, 'Kg', NULL, 700, NULL, 'PENDING', '2024-02-07 14:25:29', '2024-08-16 13:12:10'),
(11, 'November', NULL, 'L', NULL, 2300, NULL, 'PENDING', '2024-02-07 14:25:47', '2024-08-16 13:12:18'),
(12, 'December', NULL, 'L', NULL, 2800, NULL, 'PENDING', '2024-02-07 14:26:03', '2024-08-16 13:12:28');

-- --------------------------------------------------------

--
-- Table structure for table `contract_managements`
--

CREATE TABLE `contract_managements` (
  `id` int(11) NOT NULL,
  `contract_name` varchar(40) NOT NULL,
  `contract_description` varchar(255) NOT NULL,
  `contract_file_path` varchar(255) DEFAULT NULL,
  `startDate` datetime DEFAULT NULL,
  `endDate` datetime DEFAULT NULL,
  `vendorId` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contract_managements`
--

INSERT INTO `contract_managements` (`id`, `contract_name`, `contract_description`, `contract_file_path`, `startDate`, `endDate`, `vendorId`, `created_at`, `updated_at`, `status`) VALUES
(3, 'WAZAWA', 'DESCRIPTIONS', 'procurementContract/1697451854_98259aa7-f5af-4145-ae28-40abfb24f282.pdf', '2023-10-18 00:00:00', '2023-12-22 00:00:00', 1, '2023-10-16 10:24:14', '2023-10-16 10:24:14', 'PENDING');

-- --------------------------------------------------------

--
-- Table structure for table `contributions`
--

CREATE TABLE `contributions` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `amount` double NOT NULL,
  `updated_at` varchar(20) NOT NULL,
  `created_at` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contributions`
--

INSERT INTO `contributions` (`id`, `name`, `amount`, `updated_at`, `created_at`, `status`) VALUES
(1, ' CONTRIBUTION', 50000, '2023-07-24 09:45:36', '2023-07-24 09:45:36', ''),
(2, 'category name', 40000, '2023-07-24 10:33:55', '2023-07-24 10:33:55', 'PENDING');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `district_name` varchar(255) DEFAULT NULL,
  `region_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `district_name`, `region_id`, `created_at`, `updated_at`) VALUES
(1, 'Meru District', '1', NULL, NULL),
(2, 'Arusha City', '1', NULL, NULL),
(3, 'Arusha District', '1', NULL, NULL),
(4, 'Karatu District', '1', NULL, NULL),
(5, 'Longido District', '1', NULL, NULL),
(6, 'Monduli District', '1', NULL, NULL),
(7, 'Ngorongoro District', '1', NULL, NULL),
(8, 'Ilala Municipal', '2', NULL, NULL),
(9, 'Kinondoni Municipal', '2', NULL, NULL),
(10, 'Temeke Municipal', '2', NULL, NULL),
(11, 'Kigamboni Municipal', '2', NULL, NULL),
(12, 'Ubungo Municipal', '2', NULL, NULL),
(13, 'Bahi District', '3', NULL, NULL),
(14, 'Chamwino District', '3', NULL, NULL),
(15, 'Chemba District', '3', NULL, NULL),
(16, 'Dodoma Municipal', '3', NULL, NULL),
(17, 'Kondoa District', '3', NULL, NULL),
(18, 'Kongwa District', '3', NULL, NULL),
(19, 'Mpwapwa District', '3', NULL, NULL),
(20, 'Bukombe District', '4', NULL, NULL),
(21, 'Chato District', '4', NULL, NULL),
(22, 'Geita Town', '4', NULL, NULL),
(23, 'Mbogwe District', '4', NULL, NULL),
(24, 'Nyang\'hwale District', '4', NULL, NULL),
(25, 'Iringa District', '5', NULL, NULL),
(26, 'Iringa Municipal', '5', NULL, NULL),
(27, 'Kilolo District', '5', NULL, NULL),
(28, 'Mafinga Town', '5', NULL, NULL),
(29, 'Mufindi District', '5', NULL, NULL),
(30, 'Biharamulo District', '6', NULL, NULL),
(31, 'Bukoba District', '6', NULL, NULL),
(32, 'Bukoba Municipal', '6', NULL, NULL),
(33, 'Karagwe District', '6', NULL, NULL),
(34, 'Kyerwa District', '6', NULL, NULL),
(35, 'Missenyi District', '6', NULL, NULL),
(36, 'Muleba District', '6', NULL, NULL),
(37, 'Ngara District', '6', NULL, NULL),
(38, 'Mlele District', '7', NULL, NULL),
(39, 'Mpanda District', '7', NULL, NULL),
(40, 'Mpanda Town', '7', NULL, NULL),
(41, 'Buhigwe District', '8', NULL, NULL),
(42, 'Kakonko District', '8', NULL, NULL),
(43, 'Kasulu District', '8', NULL, NULL),
(44, 'Kasulu Town', '8', NULL, NULL),
(45, 'Kibondo District', '8', NULL, NULL),
(46, 'Kigoma District', '8', NULL, NULL),
(47, 'Kigoma-Ujiji Municipal', '8', NULL, NULL),
(48, 'Uvinza District', '8', NULL, NULL),
(49, 'Hai District', '9', NULL, NULL),
(50, 'Moshi District', '9', NULL, NULL),
(51, 'Moshi Municipal', '9', NULL, NULL),
(52, 'Mwanga District', '9', NULL, NULL),
(53, 'Rombo District', '9', NULL, NULL),
(54, 'Same District', '9', NULL, NULL),
(55, 'Siha District', '9', NULL, NULL),
(56, 'Chake Chake District', '19', NULL, NULL),
(57, 'Mkoani District', '19', NULL, NULL),
(58, 'Kati District', '31', NULL, NULL),
(59, 'Kusini District', '31', NULL, NULL),
(60, 'Kilwa District', '10', NULL, NULL),
(61, 'Lindi District', '10', NULL, NULL),
(62, 'Lindi Municipal', '10', NULL, NULL),
(63, 'Liwale District', '10', NULL, NULL),
(64, 'Nachingwea District', '10', NULL, NULL),
(65, 'Ruangwa District', '10', NULL, NULL),
(66, 'Babati Town', '11', NULL, NULL),
(67, 'Babati District', '11', NULL, NULL),
(68, 'Hanang District', '11', NULL, NULL),
(69, 'Kiteto District', '11', NULL, NULL),
(70, 'Mbulu District', '11', NULL, NULL),
(71, 'Simanjiro District', '11', NULL, NULL),
(72, 'Bunda District', '12', NULL, NULL),
(73, 'Butiama District', '12', NULL, NULL),
(74, 'Musoma District', '12', NULL, NULL),
(75, 'Musoma Municipal', '12', NULL, NULL),
(76, 'Rorya District', '12', NULL, NULL),
(77, 'Serengeti District', '12', NULL, NULL),
(78, 'Tarime District', '12', NULL, NULL),
(79, 'Busokelo District', '13', NULL, NULL),
(80, 'Chunya District', '13', NULL, NULL),
(81, 'Kyela District', '13', NULL, NULL),
(82, 'Mbarali City', '13', NULL, NULL),
(83, 'Mbeya District', '13', NULL, NULL),
(84, 'Mbeya District', '13', NULL, NULL),
(85, 'Rungwe', '13', NULL, NULL),
(86, 'Magharibi District', '30', NULL, NULL),
(87, 'Mjini District', '30', NULL, NULL),
(88, 'Gairo District', '14', NULL, NULL),
(89, 'Kilombero District', '14', NULL, NULL),
(90, 'Kilosa District', '14', NULL, NULL),
(91, 'Morogoro District', '14', NULL, NULL),
(92, 'Morogoro Municipal', '14', NULL, NULL),
(93, 'Mvomero District', '14', NULL, NULL),
(94, 'Ulanga District', '14', NULL, NULL),
(95, 'Malinyi District', '14', NULL, NULL),
(96, 'Ifakara Township', '14', NULL, NULL),
(97, 'Masasi District', '15', NULL, NULL),
(98, 'Masasi Town', '15', NULL, NULL),
(99, 'Mtwara District', '15', NULL, NULL),
(100, 'Mtwara Municipal', '15', NULL, NULL),
(101, 'Nanyumbu District', '15', NULL, NULL),
(102, 'Newala District', '15', NULL, NULL),
(103, 'Tandahimba District', '15', NULL, NULL),
(104, 'Ilemela Municipal', '16', NULL, NULL),
(105, 'Kwimba District', '16', NULL, NULL),
(106, 'Magu District', '16', NULL, NULL),
(107, 'Misungwi District', '16', NULL, NULL),
(108, 'Nyamagana Municipal', '16', NULL, NULL),
(109, 'Sengerema District', '16', NULL, NULL),
(110, 'Ukerewe District', '16', NULL, NULL),
(111, 'Ludewa District', '17', NULL, NULL),
(112, 'Makambako Town', '17', NULL, NULL),
(113, 'Makete District', '17', NULL, NULL),
(114, 'Njombe District', '17', NULL, NULL),
(115, 'Njombe Town', '17', NULL, NULL),
(116, 'Wanging\'ombe District', '17', NULL, NULL),
(117, 'Bagamoyo District', '20', NULL, NULL),
(118, 'Kibaha District', '20', NULL, NULL),
(119, 'Kibaha Town', '20', NULL, NULL),
(120, 'Kisarawe District', '20', NULL, NULL),
(121, 'Mafia District', '20', NULL, NULL),
(122, 'Mkuranga District', '20', NULL, NULL),
(123, 'Rufiji District', '20', NULL, NULL),
(124, 'Kalambo District', '21', NULL, NULL),
(125, 'Nkasi District', '21', NULL, NULL),
(126, 'Sumbawanga District', '21', NULL, NULL),
(127, 'Sumbawanga Municipal', '21', NULL, NULL),
(128, 'Mbinga District', '22', NULL, NULL),
(129, 'Songea District', '22', NULL, NULL),
(130, 'Songea Municipal', '22', NULL, NULL),
(131, 'Tunduru District', '22', NULL, NULL),
(132, 'Namtumbo District', '22', NULL, NULL),
(133, 'Nyasa District', '22', NULL, NULL),
(134, 'Kahama Town', '23', NULL, NULL),
(135, 'Kahama District', '23', NULL, NULL),
(136, 'Kishapu District', '23', NULL, NULL),
(137, 'Shinyanga District', '23', NULL, NULL),
(138, 'Shinyanga Municipal', '23', NULL, NULL),
(139, 'Bariadi District', '24', NULL, NULL),
(140, 'Busega District', '24', NULL, NULL),
(141, 'Itilima District', '24', NULL, NULL),
(142, 'Maswa District', '24', NULL, NULL),
(143, 'Meatu District', '24', NULL, NULL),
(144, 'Ikungi District', '25', NULL, NULL),
(145, 'Iramba District', '25', NULL, NULL),
(146, 'Manyoni District', '25', NULL, NULL),
(147, 'Mkalama District', '25', NULL, NULL),
(148, 'Singida District', '25', NULL, NULL),
(149, 'Singida Municipal', '25', NULL, NULL),
(150, 'Ileje District', '26', NULL, NULL),
(151, 'Mbozi District', '26', NULL, NULL),
(152, 'Momba District', '26', NULL, NULL),
(153, 'Songwe District', '26', NULL, NULL),
(154, 'Igunga District', '27', NULL, NULL),
(155, 'Kaliua District', '27', NULL, NULL),
(156, 'Nzega District', '27', NULL, NULL),
(157, 'Sikonge District', '27', NULL, NULL),
(158, 'Tabora Municipal', '27', NULL, NULL),
(159, 'Urambo District', '27', NULL, NULL),
(160, 'Uyui District', '27', NULL, NULL),
(161, 'Handeni District', '28', NULL, NULL),
(162, 'Handeni Town', '28', NULL, NULL),
(163, 'Kilindi District', '28', NULL, NULL),
(164, 'Korogwe Town', '28', NULL, NULL),
(165, 'Korogwe District', '28', NULL, NULL),
(166, 'Lushoto District', '28', NULL, NULL),
(167, 'Muheza District', '28', NULL, NULL),
(168, 'Mkinga District', '28', NULL, NULL),
(169, 'Pangani District', '28', NULL, NULL),
(170, 'Tanga City', '28', NULL, NULL),
(171, 'Kaskazini A District', '29', NULL, NULL),
(172, 'Kaskazini B District', '29', NULL, NULL),
(173, 'Micheweni District', '19', NULL, NULL),
(174, 'Wete District', '19', NULL, NULL),
(175, 'Unguja Magharibi District', '30', NULL, NULL),
(176, 'Unguja Mjini District', '30', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) DEFAULT NULL,
  `connection` text DEFAULT NULL,
  `queue` text DEFAULT NULL,
  `payload` text DEFAULT NULL,
  `exception` text DEFAULT NULL,
  `failed_at` timestamp NULL DEFAULT NULL,
  `user_id` char(10) DEFAULT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `username` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `failed_jobs`
--

INSERT INTO `failed_jobs` (`id`, `uuid`, `connection`, `queue`, `payload`, `exception`, `failed_at`, `user_id`, `ip_address`, `type`, `username`, `email`) VALUES
(1, '0333e1fa-af40-4aae-8147-24bca4727c84', 'database', 'default', '{\"uuid\":\"0333e1fa-af40-4aae-8147-24bca4727c84\",\"displayName\":\"App\\\\Jobs\\\\EndOfDay\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\EndOfDay\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\EndOfDay\\\":0:{}\"}}', 'ErrorException: Attempt to read property \"loan_account_number\" on null in /var/www/html/microfinance/template/fastCredit/app/Jobs/EndOfDay.php:135\nStack trace:\n#0 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Foundation/Bootstrap/HandleExceptions.php(270): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError()\n#1 /var/www/html/microfinance/template/fastCredit/app/Jobs/EndOfDay.php(135): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->Illuminate\\Foundation\\Bootstrap\\{closure}()\n#2 /var/www/html/microfinance/template/fastCredit/app/Jobs/EndOfDay.php(46): App\\Jobs\\EndOfDay->loanPaymentWithNoArrears()\n#3 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): App\\Jobs\\EndOfDay->handle()\n#4 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#5 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()\n#6 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()\n#7 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Container.php(661): Illuminate\\Container\\BoundMethod::call()\n#8 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(128): Illuminate\\Container\\Container->call()\n#9 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(141): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}()\n#10 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()\n#11 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then()\n#12 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow()\n#13 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(141): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}()\n#14 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()\n#15 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then()\n#16 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware()\n#17 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call()\n#18 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(425): Illuminate\\Queue\\Jobs\\Job->fire()\n#19 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(375): Illuminate\\Queue\\Worker->process()\n#20 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(173): Illuminate\\Queue\\Worker->runJob()\n#21 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(147): Illuminate\\Queue\\Worker->daemon()\n#22 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(130): Illuminate\\Queue\\Console\\WorkCommand->runWorker()\n#23 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#24 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#25 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()\n#26 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()\n#27 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Container.php(661): Illuminate\\Container\\BoundMethod::call()\n#28 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Console/Command.php(183): Illuminate\\Container\\Container->call()\n#29 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Command/Command.php(326): Illuminate\\Console\\Command->execute()\n#30 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Console/Command.php(152): Symfony\\Component\\Console\\Command\\Command->run()\n#31 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Application.php(1063): Illuminate\\Console\\Command->run()\n#32 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Application.php(320): Symfony\\Component\\Console\\Application->doRunCommand()\n#33 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Application.php(174): Symfony\\Component\\Console\\Application->doRun()\n#34 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Console/Application.php(102): Symfony\\Component\\Console\\Application->run()\n#35 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(155): Illuminate\\Console\\Application->run()\n#36 /var/www/html/microfinance/template/fastCredit/artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle()\n#37 {main}', '2023-11-27 19:25:36', NULL, NULL, NULL, NULL, NULL),
(2, 'b5950fc5-fb74-49e6-b153-a19a77864ec3', 'database', 'default', '{\"uuid\":\"b5950fc5-fb74-49e6-b153-a19a77864ec3\",\"displayName\":\"App\\\\Jobs\\\\EndOfDay\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\EndOfDay\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\EndOfDay\\\":0:{}\"}}', 'ErrorException: Attempt to read property \"loan_account_number\" on null in /var/www/html/microfinance/template/fastCredit/app/Jobs/EndOfDay.php:135\nStack trace:\n#0 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Foundation/Bootstrap/HandleExceptions.php(270): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError()\n#1 /var/www/html/microfinance/template/fastCredit/app/Jobs/EndOfDay.php(135): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->Illuminate\\Foundation\\Bootstrap\\{closure}()\n#2 /var/www/html/microfinance/template/fastCredit/app/Jobs/EndOfDay.php(46): App\\Jobs\\EndOfDay->loanPaymentWithNoArrears()\n#3 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): App\\Jobs\\EndOfDay->handle()\n#4 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#5 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()\n#6 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()\n#7 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Container.php(661): Illuminate\\Container\\BoundMethod::call()\n#8 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(128): Illuminate\\Container\\Container->call()\n#9 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(141): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}()\n#10 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()\n#11 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then()\n#12 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow()\n#13 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(141): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}()\n#14 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()\n#15 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then()\n#16 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware()\n#17 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call()\n#18 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(425): Illuminate\\Queue\\Jobs\\Job->fire()\n#19 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(375): Illuminate\\Queue\\Worker->process()\n#20 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(173): Illuminate\\Queue\\Worker->runJob()\n#21 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(147): Illuminate\\Queue\\Worker->daemon()\n#22 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(130): Illuminate\\Queue\\Console\\WorkCommand->runWorker()\n#23 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#24 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#25 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()\n#26 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()\n#27 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Container.php(661): Illuminate\\Container\\BoundMethod::call()\n#28 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Console/Command.php(183): Illuminate\\Container\\Container->call()\n#29 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Command/Command.php(326): Illuminate\\Console\\Command->execute()\n#30 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Console/Command.php(152): Symfony\\Component\\Console\\Command\\Command->run()\n#31 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Application.php(1063): Illuminate\\Console\\Command->run()\n#32 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Application.php(320): Symfony\\Component\\Console\\Application->doRunCommand()\n#33 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Application.php(174): Symfony\\Component\\Console\\Application->doRun()\n#34 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Console/Application.php(102): Symfony\\Component\\Console\\Application->run()\n#35 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(155): Illuminate\\Console\\Application->run()\n#36 /var/www/html/microfinance/template/fastCredit/artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle()\n#37 {main}', '2023-11-27 19:25:36', NULL, NULL, NULL, NULL, NULL),
(3, '307e9bfc-02e7-4199-a037-d91c3d03ac1a', 'database', 'default', '{\"uuid\":\"307e9bfc-02e7-4199-a037-d91c3d03ac1a\",\"displayName\":\"App\\\\Jobs\\\\EndOfDay\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\EndOfDay\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\EndOfDay\\\":0:{}\"}}', 'ErrorException: Attempt to read property \"loan_account_number\" on null in /var/www/html/microfinance/template/fastCredit/app/Jobs/EndOfDay.php:135\nStack trace:\n#0 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Foundation/Bootstrap/HandleExceptions.php(270): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError()\n#1 /var/www/html/microfinance/template/fastCredit/app/Jobs/EndOfDay.php(135): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->Illuminate\\Foundation\\Bootstrap\\{closure}()\n#2 /var/www/html/microfinance/template/fastCredit/app/Jobs/EndOfDay.php(46): App\\Jobs\\EndOfDay->loanPaymentWithNoArrears()\n#3 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): App\\Jobs\\EndOfDay->handle()\n#4 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#5 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()\n#6 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()\n#7 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Container.php(661): Illuminate\\Container\\BoundMethod::call()\n#8 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(128): Illuminate\\Container\\Container->call()\n#9 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(141): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}()\n#10 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()\n#11 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then()\n#12 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow()\n#13 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(141): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}()\n#14 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()\n#15 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then()\n#16 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware()\n#17 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call()\n#18 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(425): Illuminate\\Queue\\Jobs\\Job->fire()\n#19 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(375): Illuminate\\Queue\\Worker->process()\n#20 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(173): Illuminate\\Queue\\Worker->runJob()\n#21 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(147): Illuminate\\Queue\\Worker->daemon()\n#22 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(130): Illuminate\\Queue\\Console\\WorkCommand->runWorker()\n#23 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#24 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#25 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()\n#26 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()\n#27 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Container.php(661): Illuminate\\Container\\BoundMethod::call()\n#28 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Console/Command.php(183): Illuminate\\Container\\Container->call()\n#29 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Command/Command.php(326): Illuminate\\Console\\Command->execute()\n#30 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Console/Command.php(152): Symfony\\Component\\Console\\Command\\Command->run()\n#31 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Application.php(1063): Illuminate\\Console\\Command->run()\n#32 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Application.php(320): Symfony\\Component\\Console\\Application->doRunCommand()\n#33 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Application.php(174): Symfony\\Component\\Console\\Application->doRun()\n#34 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Console/Application.php(102): Symfony\\Component\\Console\\Application->run()\n#35 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(155): Illuminate\\Console\\Application->run()\n#36 /var/www/html/microfinance/template/fastCredit/artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle()\n#37 {main}', '2023-11-27 19:25:36', NULL, NULL, NULL, NULL, NULL),
(4, '5d74c720-97be-4af6-9d90-a5db798714c1', 'database', 'default', '{\"uuid\":\"5d74c720-97be-4af6-9d90-a5db798714c1\",\"displayName\":\"App\\\\Jobs\\\\EndOfDay\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\EndOfDay\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\EndOfDay\\\":0:{}\"}}', 'ErrorException: Attempt to read property \"loan_account_number\" on null in /var/www/html/microfinance/template/fastCredit/app/Jobs/EndOfDay.php:135\nStack trace:\n#0 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Foundation/Bootstrap/HandleExceptions.php(270): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError()\n#1 /var/www/html/microfinance/template/fastCredit/app/Jobs/EndOfDay.php(135): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->Illuminate\\Foundation\\Bootstrap\\{closure}()\n#2 /var/www/html/microfinance/template/fastCredit/app/Jobs/EndOfDay.php(46): App\\Jobs\\EndOfDay->loanPaymentWithNoArrears()\n#3 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): App\\Jobs\\EndOfDay->handle()\n#4 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#5 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()\n#6 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()\n#7 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Container.php(661): Illuminate\\Container\\BoundMethod::call()\n#8 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(128): Illuminate\\Container\\Container->call()\n#9 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(141): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}()\n#10 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()\n#11 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then()\n#12 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow()\n#13 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(141): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}()\n#14 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()\n#15 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then()\n#16 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware()\n#17 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call()\n#18 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(425): Illuminate\\Queue\\Jobs\\Job->fire()\n#19 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(375): Illuminate\\Queue\\Worker->process()\n#20 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(173): Illuminate\\Queue\\Worker->runJob()\n#21 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(147): Illuminate\\Queue\\Worker->daemon()\n#22 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(130): Illuminate\\Queue\\Console\\WorkCommand->runWorker()\n#23 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#24 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#25 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()\n#26 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()\n#27 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Container.php(661): Illuminate\\Container\\BoundMethod::call()\n#28 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Console/Command.php(183): Illuminate\\Container\\Container->call()\n#29 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Command/Command.php(326): Illuminate\\Console\\Command->execute()\n#30 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Console/Command.php(152): Symfony\\Component\\Console\\Command\\Command->run()\n#31 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Application.php(1063): Illuminate\\Console\\Command->run()\n#32 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Application.php(320): Symfony\\Component\\Console\\Application->doRunCommand()\n#33 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Application.php(174): Symfony\\Component\\Console\\Application->doRun()\n#34 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Console/Application.php(102): Symfony\\Component\\Console\\Application->run()\n#35 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(155): Illuminate\\Console\\Application->run()\n#36 /var/www/html/microfinance/template/fastCredit/artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle()\n#37 {main}', '2023-11-27 19:25:36', NULL, NULL, NULL, NULL, NULL),
(5, '7e8d229a-0a8b-4e26-b962-ea4749e311b4', 'database', 'default', '{\"uuid\":\"7e8d229a-0a8b-4e26-b962-ea4749e311b4\",\"displayName\":\"App\\\\Jobs\\\\EndOfDay\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\EndOfDay\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\EndOfDay\\\":0:{}\"}}', 'ErrorException: Attempt to read property \"loan_account_number\" on null in /var/www/html/microfinance/template/fastCredit/app/Jobs/EndOfDay.php:135\nStack trace:\n#0 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Foundation/Bootstrap/HandleExceptions.php(270): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError()\n#1 /var/www/html/microfinance/template/fastCredit/app/Jobs/EndOfDay.php(135): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->Illuminate\\Foundation\\Bootstrap\\{closure}()\n#2 /var/www/html/microfinance/template/fastCredit/app/Jobs/EndOfDay.php(46): App\\Jobs\\EndOfDay->loanPaymentWithNoArrears()\n#3 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): App\\Jobs\\EndOfDay->handle()\n#4 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#5 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()\n#6 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()\n#7 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Container.php(661): Illuminate\\Container\\BoundMethod::call()\n#8 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(128): Illuminate\\Container\\Container->call()\n#9 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(141): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}()\n#10 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()\n#11 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then()\n#12 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow()\n#13 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(141): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}()\n#14 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()\n#15 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then()\n#16 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware()\n#17 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call()\n#18 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(425): Illuminate\\Queue\\Jobs\\Job->fire()\n#19 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(375): Illuminate\\Queue\\Worker->process()\n#20 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(173): Illuminate\\Queue\\Worker->runJob()\n#21 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(147): Illuminate\\Queue\\Worker->daemon()\n#22 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(130): Illuminate\\Queue\\Console\\WorkCommand->runWorker()\n#23 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#24 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#25 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()\n#26 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()\n#27 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Container.php(661): Illuminate\\Container\\BoundMethod::call()\n#28 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Console/Command.php(183): Illuminate\\Container\\Container->call()\n#29 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Command/Command.php(326): Illuminate\\Console\\Command->execute()\n#30 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Console/Command.php(152): Symfony\\Component\\Console\\Command\\Command->run()\n#31 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Application.php(1063): Illuminate\\Console\\Command->run()\n#32 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Application.php(320): Symfony\\Component\\Console\\Application->doRunCommand()\n#33 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Application.php(174): Symfony\\Component\\Console\\Application->doRun()\n#34 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Console/Application.php(102): Symfony\\Component\\Console\\Application->run()\n#35 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(155): Illuminate\\Console\\Application->run()\n#36 /var/www/html/microfinance/template/fastCredit/artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle()\n#37 {main}', '2023-11-27 19:25:36', NULL, NULL, NULL, NULL, NULL),
(6, 'b0e853bb-4593-4e14-96b1-9962f8e6c183', 'database', 'default', '{\"uuid\":\"b0e853bb-4593-4e14-96b1-9962f8e6c183\",\"displayName\":\"App\\\\Jobs\\\\EndOfDay\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\EndOfDay\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\EndOfDay\\\":0:{}\"}}', 'ErrorException: Attempt to read property \"loan_account_number\" on null in /var/www/html/microfinance/template/fastCredit/app/Jobs/EndOfDay.php:135\nStack trace:\n#0 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Foundation/Bootstrap/HandleExceptions.php(270): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError()\n#1 /var/www/html/microfinance/template/fastCredit/app/Jobs/EndOfDay.php(135): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->Illuminate\\Foundation\\Bootstrap\\{closure}()\n#2 /var/www/html/microfinance/template/fastCredit/app/Jobs/EndOfDay.php(46): App\\Jobs\\EndOfDay->loanPaymentWithNoArrears()\n#3 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): App\\Jobs\\EndOfDay->handle()\n#4 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#5 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()\n#6 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()\n#7 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Container.php(661): Illuminate\\Container\\BoundMethod::call()\n#8 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(128): Illuminate\\Container\\Container->call()\n#9 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(141): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}()\n#10 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()\n#11 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then()\n#12 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow()\n#13 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(141): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}()\n#14 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()\n#15 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then()\n#16 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware()\n#17 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call()\n#18 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(425): Illuminate\\Queue\\Jobs\\Job->fire()\n#19 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(375): Illuminate\\Queue\\Worker->process()\n#20 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(173): Illuminate\\Queue\\Worker->runJob()\n#21 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(147): Illuminate\\Queue\\Worker->daemon()\n#22 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(130): Illuminate\\Queue\\Console\\WorkCommand->runWorker()\n#23 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#24 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#25 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()\n#26 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()\n#27 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Container.php(661): Illuminate\\Container\\BoundMethod::call()\n#28 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Console/Command.php(183): Illuminate\\Container\\Container->call()\n#29 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Command/Command.php(326): Illuminate\\Console\\Command->execute()\n#30 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Console/Command.php(152): Symfony\\Component\\Console\\Command\\Command->run()\n#31 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Application.php(1063): Illuminate\\Console\\Command->run()\n#32 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Application.php(320): Symfony\\Component\\Console\\Application->doRunCommand()\n#33 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Application.php(174): Symfony\\Component\\Console\\Application->doRun()\n#34 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Console/Application.php(102): Symfony\\Component\\Console\\Application->run()\n#35 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(155): Illuminate\\Console\\Application->run()\n#36 /var/www/html/microfinance/template/fastCredit/artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle()\n#37 {main}', '2023-11-27 19:25:36', NULL, NULL, NULL, NULL, NULL),
(7, 'c48eb889-fbe1-433f-b84e-554a3f97da86', 'database', 'default', '{\"uuid\":\"c48eb889-fbe1-433f-b84e-554a3f97da86\",\"displayName\":\"App\\\\Jobs\\\\EndOfDay\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\EndOfDay\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\EndOfDay\\\":0:{}\"}}', 'ErrorException: Attempt to read property \"loan_account_number\" on null in /var/www/html/microfinance/template/fastCredit/app/Jobs/EndOfDay.php:135\nStack trace:\n#0 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Foundation/Bootstrap/HandleExceptions.php(270): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError()\n#1 /var/www/html/microfinance/template/fastCredit/app/Jobs/EndOfDay.php(135): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->Illuminate\\Foundation\\Bootstrap\\{closure}()\n#2 /var/www/html/microfinance/template/fastCredit/app/Jobs/EndOfDay.php(46): App\\Jobs\\EndOfDay->loanPaymentWithNoArrears()\n#3 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): App\\Jobs\\EndOfDay->handle()\n#4 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#5 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()\n#6 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()\n#7 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Container.php(661): Illuminate\\Container\\BoundMethod::call()\n#8 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(128): Illuminate\\Container\\Container->call()\n#9 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(141): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}()\n#10 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()\n#11 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then()\n#12 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow()\n#13 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(141): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}()\n#14 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()\n#15 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then()\n#16 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware()\n#17 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call()\n#18 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(425): Illuminate\\Queue\\Jobs\\Job->fire()\n#19 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(375): Illuminate\\Queue\\Worker->process()\n#20 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(173): Illuminate\\Queue\\Worker->runJob()\n#21 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(147): Illuminate\\Queue\\Worker->daemon()\n#22 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(130): Illuminate\\Queue\\Console\\WorkCommand->runWorker()\n#23 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#24 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#25 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()\n#26 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()\n#27 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Container.php(661): Illuminate\\Container\\BoundMethod::call()\n#28 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Console/Command.php(183): Illuminate\\Container\\Container->call()\n#29 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Command/Command.php(326): Illuminate\\Console\\Command->execute()\n#30 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Console/Command.php(152): Symfony\\Component\\Console\\Command\\Command->run()\n#31 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Application.php(1063): Illuminate\\Console\\Command->run()\n#32 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Application.php(320): Symfony\\Component\\Console\\Application->doRunCommand()\n#33 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Application.php(174): Symfony\\Component\\Console\\Application->doRun()\n#34 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Console/Application.php(102): Symfony\\Component\\Console\\Application->run()\n#35 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(155): Illuminate\\Console\\Application->run()\n#36 /var/www/html/microfinance/template/fastCredit/artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle()\n#37 {main}', '2023-11-27 19:25:54', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `failed_jobs` (`id`, `uuid`, `connection`, `queue`, `payload`, `exception`, `failed_at`, `user_id`, `ip_address`, `type`, `username`, `email`) VALUES
(8, 'cf4aacce-f6a7-43da-b657-c5f67756e79b', 'database', 'default', '{\"uuid\":\"cf4aacce-f6a7-43da-b657-c5f67756e79b\",\"displayName\":\"App\\\\Jobs\\\\EndOfDay\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\EndOfDay\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\EndOfDay\\\":0:{}\"}}', 'ErrorException: Attempt to read property \"loan_account_number\" on null in /var/www/html/microfinance/template/fastCredit/app/Jobs/EndOfDay.php:135\nStack trace:\n#0 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Foundation/Bootstrap/HandleExceptions.php(270): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError()\n#1 /var/www/html/microfinance/template/fastCredit/app/Jobs/EndOfDay.php(135): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->Illuminate\\Foundation\\Bootstrap\\{closure}()\n#2 /var/www/html/microfinance/template/fastCredit/app/Jobs/EndOfDay.php(46): App\\Jobs\\EndOfDay->loanPaymentWithNoArrears()\n#3 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): App\\Jobs\\EndOfDay->handle()\n#4 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#5 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()\n#6 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()\n#7 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Container.php(661): Illuminate\\Container\\BoundMethod::call()\n#8 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(128): Illuminate\\Container\\Container->call()\n#9 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(141): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}()\n#10 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()\n#11 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then()\n#12 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow()\n#13 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(141): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}()\n#14 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()\n#15 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then()\n#16 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware()\n#17 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call()\n#18 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(425): Illuminate\\Queue\\Jobs\\Job->fire()\n#19 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(375): Illuminate\\Queue\\Worker->process()\n#20 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(173): Illuminate\\Queue\\Worker->runJob()\n#21 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(147): Illuminate\\Queue\\Worker->daemon()\n#22 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(130): Illuminate\\Queue\\Console\\WorkCommand->runWorker()\n#23 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#24 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#25 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()\n#26 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()\n#27 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Container.php(661): Illuminate\\Container\\BoundMethod::call()\n#28 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Console/Command.php(183): Illuminate\\Container\\Container->call()\n#29 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Command/Command.php(326): Illuminate\\Console\\Command->execute()\n#30 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Console/Command.php(152): Symfony\\Component\\Console\\Command\\Command->run()\n#31 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Application.php(1063): Illuminate\\Console\\Command->run()\n#32 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Application.php(320): Symfony\\Component\\Console\\Application->doRunCommand()\n#33 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Application.php(174): Symfony\\Component\\Console\\Application->doRun()\n#34 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Console/Application.php(102): Symfony\\Component\\Console\\Application->run()\n#35 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(155): Illuminate\\Console\\Application->run()\n#36 /var/www/html/microfinance/template/fastCredit/artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle()\n#37 {main}', '2023-11-27 19:28:09', NULL, NULL, NULL, NULL, NULL),
(9, 'a09cf548-4833-4369-a024-40eddabdacb2', 'database', 'default', '{\"uuid\":\"a09cf548-4833-4369-a024-40eddabdacb2\",\"displayName\":\"App\\\\Jobs\\\\EndOfDay\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\EndOfDay\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\EndOfDay\\\":0:{}\"}}', 'Illuminate\\Queue\\MaxAttemptsExceededException: App\\Jobs\\EndOfDay has been attempted too many times or run too long. The job may have previously timed out. in /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php:746\nStack trace:\n#0 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(505): Illuminate\\Queue\\Worker->maxAttemptsExceededException()\n#1 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(414): Illuminate\\Queue\\Worker->markJobAsFailedIfAlreadyExceedsMaxAttempts()\n#2 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(375): Illuminate\\Queue\\Worker->process()\n#3 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(173): Illuminate\\Queue\\Worker->runJob()\n#4 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(147): Illuminate\\Queue\\Worker->daemon()\n#5 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(130): Illuminate\\Queue\\Console\\WorkCommand->runWorker()\n#6 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#7 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#8 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()\n#9 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()\n#10 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Container/Container.php(661): Illuminate\\Container\\BoundMethod::call()\n#11 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Console/Command.php(183): Illuminate\\Container\\Container->call()\n#12 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Command/Command.php(326): Illuminate\\Console\\Command->execute()\n#13 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Console/Command.php(152): Symfony\\Component\\Console\\Command\\Command->run()\n#14 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Application.php(1063): Illuminate\\Console\\Command->run()\n#15 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Application.php(320): Symfony\\Component\\Console\\Application->doRunCommand()\n#16 /var/www/html/microfinance/template/fastCredit/vendor/symfony/console/Application.php(174): Symfony\\Component\\Console\\Application->doRun()\n#17 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Console/Application.php(102): Symfony\\Component\\Console\\Application->run()\n#18 /var/www/html/microfinance/template/fastCredit/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(155): Illuminate\\Console\\Application->run()\n#19 /var/www/html/microfinance/template/fastCredit/artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle()\n#20 {main}', '2023-12-15 11:50:30', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `farmers`
--

CREATE TABLE `farmers` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `gender` enum('Male','Female','Other') DEFAULT NULL,
  `contact_number` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `education_level` enum('None','Primary','Secondary','Tertiary') DEFAULT NULL,
  `marital_status` enum('Single','Married','Divorced','Widowed') DEFAULT NULL,
  `dependent_count` int(11) DEFAULT NULL,
  `annual_income` decimal(15,2) DEFAULT NULL,
  `City` varchar(220) DEFAULT NULL,
  `phone_number` varchar(50) DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `collateral_manager_id` bigint(20) DEFAULT NULL,
  `identificationType` varchar(220) DEFAULT NULL,
  `identificationNo` varchar(220) DEFAULT NULL,
  `region` varchar(220) DEFAULT NULL,
  `district` varchar(220) DEFAULT NULL,
  `ward` varchar(220) DEFAULT NULL,
  `branch` int(11) DEFAULT NULL,
  `process` varchar(150) DEFAULT NULL,
  `step` varchar(150) DEFAULT NULL,
  `xx` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `farmers`
--

INSERT INTO `farmers` (`id`, `first_name`, `last_name`, `date_of_birth`, `gender`, `contact_number`, `email`, `address`, `occupation`, `education_level`, `marital_status`, `dependent_count`, `annual_income`, `City`, `phone_number`, `Status`, `created_at`, `updated_at`, `collateral_manager_id`, `identificationType`, `identificationNo`, `region`, `district`, `ward`, `branch`, `process`, `step`, `xx`) VALUES
(18, 'Andrew', 'Mashamba', '1985-05-17', 'Male', NULL, 'andrew.s.mashamba@gmail.com', 'Namanga Rd', NULL, NULL, 'Married', NULL, NULL, NULL, NULL, 'ACTIVE', '2024-07-28 12:03:32', '2024-07-28 21:53:49', 23, 'NIDA', '11101010101010', '16', '105', '1572', 25, '14', '3', NULL),
(19, 'Enim', 'Saepe ', '2013-09-13', 'Male', NULL, 'andrew.s.mashamba@gmail.com', 'Namanga Rd', NULL, NULL, 'Married', NULL, NULL, NULL, NULL, 'ACTIVE', '2024-07-28 19:05:51', '2024-07-28 23:02:41', 23, 'Voter-ID', '45676767687', '14', '90', '588', 25, '14', '3', NULL),
(20, 'Velit ', 'Dolorum ', '2008-11-17', 'Male', NULL, 'andrew.s.mashamba@gmail.com', 'Namanga Rd', NULL, NULL, 'Married', NULL, NULL, NULL, NULL, 'ACTIVE', '2024-07-28 19:14:35', '2024-07-29 03:56:36', 23, 'Voter-ID', 'Nisi et corporis est', '10', '63', '746', 25, '14', '3', NULL),
(21, 'Distinctio', 'Nihil', '1993-12-22', 'Male', NULL, 'masik@mailinator.com', 'Sint aperiam id qui ', NULL, NULL, 'Single', NULL, NULL, NULL, NULL, 'PENDING', '2024-07-28 22:22:12', '2024-07-28 22:22:12', 23, 'NIDA', 'Obcaecati omnis quae', '8', '42', '1436', 25, '114', '2', NULL),
(22, 'Aberspiciatis', 'Enim ', '2009-01-17', 'Male', NULL, 'mukit@mailinator.com', 'Ex unde veniam labo', NULL, NULL, 'Divorced', NULL, NULL, NULL, NULL, 'SUSPENDED', '2024-07-28 22:33:26', '2024-07-28 23:03:48', 23, 'NIDA', 'Et adipisci velit q', '24', '139', '1130', 25, '14', '2', NULL),
(23, 'Ducimus', 'Animi', '1985-07-16', 'Male', NULL, 'mawenegyc@mailinator.com', 'Corporis occaecat ar', NULL, NULL, 'Married', NULL, NULL, NULL, NULL, 'SUSPENDED', '2024-07-28 22:40:29', '2024-07-28 23:03:42', 23, 'NIDA', 'Ea dolor recusandae', '15', '100', '863', 25, '14', '2', NULL),
(24, 'Necessitatibus', 'Non', '1977-09-25', 'Male', NULL, 'pilaziqiso@mailinator.com', 'Excepteur aliquid eu', NULL, NULL, 'Single', NULL, NULL, NULL, NULL, 'ACTIVE', '2024-07-28 22:42:50', '2024-07-28 23:03:37', 23, 'Voter-ID', 'Voluptas et a qui co', '11', NULL, NULL, 25, '14', '3', NULL),
(25, 'Nostrum', 'Aut', '1995-04-10', 'Male', NULL, 'simisor@mailinator.com', 'Et sint molestias mo', NULL, NULL, 'Divorced', NULL, NULL, NULL, NULL, 'PENDING', '2024-07-29 03:54:30', '2024-07-29 03:54:30', 23, 'NIDA', 'Perspiciatis volupt', '7', '38', '2994', 25, '14', '2', NULL),
(26, 'Alias ', 'Architecto', '2015-01-28', 'Male', NULL, 'ducozogyci@mailinator.com', 'Quisquam deserunt se', NULL, NULL, 'Widowed', NULL, NULL, NULL, NULL, 'ACTIVE', '2024-07-29 03:56:17', '2024-07-29 04:32:05', 23, 'NIDA', 'Do quis excepturi qu', '15', '100', '866', 25, '14', '3', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `institutions`
--

CREATE TABLE `institutions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institution_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `region` varchar(255) DEFAULT NULL,
  `wilaya` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `institution_status` varchar(255) DEFAULT NULL,
  `imgUrl` varchar(255) DEFAULT NULL,
  `admin` varchar(255) DEFAULT NULL,
  `available_shares` bigint(20) DEFAULT NULL,
  `registration_fees` double DEFAULT NULL,
  `min_shares` bigint(20) DEFAULT NULL,
  `initial_shares` varchar(255) DEFAULT NULL,
  `temp_shares_holding_account` bigint(20) DEFAULT NULL,
  `value_per_share` varchar(255) DEFAULT NULL,
  `selected` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `inactivity` tinyint(1) DEFAULT NULL,
  `allocated_shares` bigint(20) DEFAULT NULL,
  `admin_email` varchar(30) NOT NULL,
  `manager_email` varchar(30) NOT NULL,
  `tin_number` varchar(20) NOT NULL,
  `tcdc_form` varchar(100) DEFAULT NULL,
  `microfinance_license` varchar(100) DEFAULT NULL,
  `status` varchar(10) NOT NULL,
  `notes` text DEFAULT NULL,
  `manager_image_url` varchar(50) DEFAULT NULL,
  `manager_full_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `institutions`
--

INSERT INTO `institutions` (`id`, `institution_id`, `name`, `region`, `wilaya`, `phone_number`, `email`, `institution_status`, `imgUrl`, `admin`, `available_shares`, `registration_fees`, `min_shares`, `initial_shares`, `temp_shares_holding_account`, `value_per_share`, `selected`, `created_at`, `updated_at`, `inactivity`, `allocated_shares`, `admin_email`, `manager_email`, `tin_number`, `tcdc_form`, `microfinance_license`, `status`, `notes`, `manager_image_url`, `manager_full_name`) VALUES
(1, NULL, 'WAZAWA', 'DAR ES SALAAM ', 'KINONDONI', NULL, NULL, NULL, NULL, NULL, 400, 10000, 10, NULL, NULL, NULL, NULL, NULL, NULL, 24, 500, '', '', '', '', '', '', NULL, NULL, NULL),
(2, NULL, NULL, NULL, NULL, '1234567891', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'percyegno@gmail.com', 'joa@gmail.com', 'Tin2123344', NULL, NULL, '', NULL, NULL, NULL),
(3, NULL, NULL, NULL, NULL, '1234567891', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'percyegno@gmail.com', 'joa@gmail.com', 'Tin2123344', NULL, NULL, '', NULL, NULL, NULL),
(4, NULL, NULL, NULL, NULL, '1234567891', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'percyegno@gmail.com', 'joa@gmail.com', 'Tin2123344', NULL, NULL, '', NULL, NULL, NULL),
(5, NULL, NULL, NULL, NULL, '1234567891', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'percyegno@gmail.com', 'joa@gmail.com', 'Tin2123344', NULL, NULL, '', NULL, NULL, NULL),
(6, NULL, NULL, NULL, NULL, '+2551234567891', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'percyegno@gmail.com', 'joa@gmail.com', 'Tin2123344', 'Saccoss-request/1691560731_report_template.pdf', 'Saccoss-request/1691560731_ACCOUNTING AND FINANCE MODULE.docx', 'PENDING', NULL, NULL, NULL),
(8, '8', 'MIKOCHENI INSTITUTE', 'DAR ES SALAAM', 'ILALA', '+2551234567891', NULL, NULL, 'InstitutionLogo/mikocheni.png', NULL, NULL, 10000, 4, NULL, NULL, '20000', NULL, NULL, NULL, NULL, NULL, 'percyegno@gmail.com', 'joa@gmail.com', 'Tin2123344', 'Saccoss-request/1691572216_ACCOUNTING AND FINANCE MODULE.docx', 'Saccoss-request/1691572216_BUSINESS REQUIREMT SPECIFICATION FOR CSS-SACCOS SIDE-DAY THREE (1).docx', 'PENDING', 'Welcome to Mikocheni Institute Microfinance, where financial empowerment meets personalized service. As a distinguished institution in the heart of Dar es Salaam, we are dedicated to transforming lives through accessible and innovative microfinance solutions', NULL, 'JOHN JACOB KINGAZI');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `make_and_model` varchar(255) DEFAULT NULL,
  `year_of_manufacture` varchar(255) DEFAULT NULL,
  `vin` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `mileage` varchar(255) DEFAULT NULL,
  `purchase_price` varchar(11) DEFAULT NULL,
  `down_payment` varchar(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `make_and_model`, `year_of_manufacture`, `vin`, `color`, `mileage`, `purchase_price`, `down_payment`, `created_at`, `updated_at`) VALUES
(1, 'TOYOTA', '2004', '64646767', 'WHITE', '80000', '30000000', '10000000', '2024-01-17 14:49:54', '2024-01-17 14:49:54'),
(2, 'TOYOTA', '2004', '64646767', 'WHITE', '80000', '30000000', '10000000', '2024-01-17 14:51:23', '2024-01-17 14:51:23'),
(3, 'TOYOTA', '2004', '64646767', 'WHITE', '80000', '30000000', '10000000', '2024-01-17 14:52:21', '2024-01-17 14:52:21'),
(4, 'TOYOTA', '1999', '363365645', 'BLACK', '500000', '70000000', '30000000', '2024-01-18 08:11:06', '2024-01-18 08:11:06'),
(5, 'NISSAN', '2009', '5435456456', 'SILVER', '60000', '45000000', '10000000', '2024-01-18 08:25:48', '2024-01-18 08:25:48'),
(6, 'NISSAN', '2009', '5435456456', 'SILVER', '60000', '45000000', '10000000', '2024-01-18 08:26:42', '2024-01-18 08:26:42'),
(7, 'toyota', '2021', '122223333333', 'white', '20000', '1000000', '100000', '2024-01-29 18:58:06', '2024-01-29 18:58:06'),
(8, 'toyota', '2021', '122223333333', 'white', '20000', '1000000', '100000', '2024-01-29 18:59:32', '2024-01-29 18:59:32');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `system_id` int(11) DEFAULT NULL,
  `menu_name` varchar(255) DEFAULT NULL,
  `menu_description` varchar(255) DEFAULT NULL,
  `menu_title` varchar(255) DEFAULT NULL,
  `menu_number` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `system_id`, `menu_name`, `menu_description`, `menu_title`, `menu_number`, `created_at`, `updated_at`) VALUES
(2, 1, 'Sources', 'Sources', 'Sources', 1, NULL, NULL),
(4, 1, 'Approvals', 'Approvals', 'Approvals', 10, NULL, NULL),
(5, 1, 'Offers', 'Offers', 'Offers', 70, NULL, NULL),
(7, 1, 'Subscribers', 'Subscribers', 'Subscribers', 2, NULL, NULL),
(9, 1, 'Users', 'Users', 'Users', 11, NULL, NULL),
(10, 1, 'Collateral Managers', 'Collateral Managers', 'Collateral Managers', 6, NULL, NULL),
(11, 1, 'Commodities', 'Commodities', 'Commodities', 5, NULL, NULL),
(12, 1, 'Settings', 'Settings', 'Settings', 4, NULL, NULL),
(13, 1, 'Reports', 'Report Management', 'Report Management', 9, NULL, NULL),
(14, 1, 'Branches', 'Branches', 'Branches', 8, NULL, NULL),
(15, 1, 'Services', 'Services', 'Services', 3, NULL, NULL),
(16, 1, 'Warehouses', 'Warehouses', 'Warehouses', 7, NULL, NULL),
(17, 1, 'Notifications', 'Notifications', 'Notifications', 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menu_list`
--

CREATE TABLE `menu_list` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(4, '2023_07_01_101401_accounts', 1),
(5, '2023_07_01_101451_accounts_opened', 1),
(6, '2023_07_01_101533_accounts_running_balances', 1),
(7, '2023_07_01_101608_approvals', 1),
(8, '2023_07_01_102004_banks', 1),
(9, '2023_07_01_102034_branches', 1),
(10, '2023_07_01_102103_charges', 1),
(11, '2023_07_01_102140_currencies', 1),
(12, '2023_07_01_102210_departments', 1),
(13, '2023_07_01_102321_failed_jobs', 1),
(14, '2023_07_01_102411_general_ledger', 1),
(15, '2023_07_01_102544_institutions', 1),
(16, '2023_07_01_102840_issured_shares', 1),
(17, '2023_07_01_102919_loan_images', 1),
(18, '2023_07_01_102951_loan_sub_products', 1),
(19, '2023_07_01_103025_loans', 1),
(20, '2023_07_01_103113_loans_arreas', 1),
(21, '2023_07_01_103142_loans_originated', 1),
(22, '2023_07_01_103211_loans_schedules', 1),
(23, '2023_07_01_103459_loans_summary', 1),
(24, '2023_07_01_103542_members', 1),
(25, '2023_07_01_103614_menu_list', 1),
(26, '2023_07_01_103639_menus', 1),
(27, '2023_07_01_103908_menus_', 1),
(28, '2023_07_01_104017_orders', 1),
(29, '2023_07_01_104058_password_resets', 1),
(30, '2023_07_01_104201_sessions', 1),
(31, '2023_07_01_104352_sub_menus', 1),
(32, '2023_07_01_104414_sub_menus_', 1),
(33, '2023_07_01_104454_sub_products', 1),
(34, '2023_07_01_104549_team_invitations', 1),
(35, '2023_07_01_104805_team_user', 1),
(36, '2023_07_01_104832_teams', 1),
(37, '2023_07_01_105009_transactions', 1),
(38, '2023_07_01_105050_user_sub_menus', 1),
(39, '2023_07_01_113345_temp_permissions', 1),
(40, '2014_10_12_100000_create_password_resets_table', 2),
(41, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2),
(42, '2019_08_19_000000_create_failed_jobs_table', 2),
(43, '2022_03_23_163443_create_sessions_table', 2),
(44, '2022_05_11_154250_create_datafeeds_table', 2),
(45, '2023_07_20_204539_expenses', 2),
(46, '2023_10_06_105631_create_employeefiles_table', 3),
(47, '2023_10_06_130528_create_employeefiles_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `source_id` varchar(255) DEFAULT NULL,
  `subscriber_id` varchar(255) DEFAULT NULL,
  `service_id` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `provider_id` varchar(255) DEFAULT NULL,
  `rrn` varchar(255) DEFAULT NULL,
  `third_part_rnn` varchar(255) DEFAULT NULL,
  `provider_responce` varchar(255) DEFAULT NULL,
  `provider_responce_code` varchar(255) DEFAULT NULL,
  `network_response_code` varchar(255) DEFAULT NULL,
  `network_error_response_code` varchar(255) DEFAULT NULL,
  `network_error_message` varchar(255) DEFAULT NULL,
  `no_retrials` varchar(255) DEFAULT NULL,
  `no_resends` varchar(255) DEFAULT NULL,
  `body_string_lenght` varchar(255) DEFAULT NULL,
  `security_check_code` varchar(255) DEFAULT NULL,
  `security_check_message` varchar(255) DEFAULT NULL,
  `send_status` varchar(255) DEFAULT NULL,
  `receipt_status` varchar(255) DEFAULT NULL,
  `general_status` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `source_id`, `subscriber_id`, `service_id`, `message`, `provider_id`, `rrn`, `third_part_rnn`, `provider_responce`, `provider_responce_code`, `network_response_code`, `network_error_response_code`, `network_error_message`, `no_retrials`, `no_resends`, `body_string_lenght`, `security_check_code`, `security_check_message`, `send_status`, `receipt_status`, `general_status`, `status`, `created_at`, `updated_at`) VALUES
(11, 'source123', '255714140412', 'service123', 'Mr Abdul, Your loan repayment is due on 8/18/2024', 'provider123', '631622487', NULL, 'OK', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sent', NULL, '37475.7599', NULL, '2024-08-16 10:26:49', '2024-08-16 10:26:49'),
(12, 'source123', '255757330260', 'service123', 'Mr Edwin, Your loan repayment is due on 8/18/2024', 'provider123', '631623741', NULL, 'OK', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sent', NULL, '37445.7599', NULL, '2024-08-16 10:30:03', '2024-08-16 10:30:04'),
(13, 'source123', '255754509579', 'service123', 'Mr Edwin, Your loan repayment is due on 8/18/2024', 'provider123', '631624200', NULL, 'OK', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sent', NULL, '37435.7599', NULL, '2024-08-16 10:31:07', '2024-08-16 10:31:07'),
(14, 'source123', '255692410353', 'service123', 'Mr Edwin, Your loan repayment is due on 8/18/2024', 'provider123', '631624569', NULL, 'OK', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sent', NULL, '37425.7599', NULL, '2024-08-16 10:32:07', '2024-08-16 10:32:07'),
(15, 'source123', '255692410353', 'service123', 'Mr Edwin is requesting a loan offer', 'provider123', NULL, NULL, 'Exception occurred', 'Exception', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'failed', NULL, NULL, NULL, '2024-08-24 12:32:09', '2024-08-24 12:32:20'),
(16, 'source123', '255692410353', 'service123', 'Mr Edwin is requesting a loan offer', 'provider123', NULL, NULL, 'Exception occurred', 'Exception', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'failed', NULL, NULL, NULL, '2024-08-24 12:33:21', '2024-08-24 12:33:31'),
(17, 'source123', '255692410353', 'service123', 'Mr Edwin is requesting a loan offer', 'provider123', NULL, NULL, 'Exception occurred', 'Exception', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'failed', NULL, NULL, NULL, '2024-08-24 15:31:37', '2024-08-24 15:31:48'),
(18, 'source123', '255692410353', 'service123', 'Mr Edwin is requesting a loan offer', 'provider123', NULL, NULL, 'Exception occurred', 'Exception', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'failed', NULL, NULL, NULL, '2024-08-24 15:31:54', '2024-08-24 15:32:04'),
(19, 'source123', '255692410353', 'service123', 'Mr Edwin is requesting a loan offer', 'provider123', NULL, NULL, 'Exception occurred', 'Exception', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'failed', NULL, NULL, NULL, '2024-08-24 15:32:09', '2024-08-24 15:32:19'),
(20, 'source123', '255692410353', 'service123', 'Mr Edwin is requesting a loan offer', 'provider123', NULL, NULL, 'Exception occurred', 'Exception', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'failed', NULL, NULL, NULL, '2024-08-24 15:32:24', '2024-08-24 15:32:34'),
(21, 'source123', '255692410353', 'service123', 'Mr Edwin is requesting a loan offer', 'provider123', NULL, NULL, 'Exception occurred', 'Exception', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'failed', NULL, NULL, NULL, '2024-08-24 15:32:39', '2024-08-24 15:32:49'),
(22, 'source123', '255692410353', 'service123', 'Mr Edwin is requesting a loan offer', 'provider123', NULL, NULL, 'Exception occurred', 'Exception', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'failed', NULL, NULL, NULL, '2024-08-24 15:32:54', '2024-08-24 15:33:04'),
(23, 'source123', '255692410353', 'service123', 'Mr Edwin is requesting a loan offer', 'provider123', NULL, NULL, 'Exception occurred', 'Exception', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'failed', NULL, NULL, NULL, '2024-08-24 15:33:09', '2024-08-24 15:33:19'),
(24, 'source123', '255692410353', 'service123', 'Mr Edwin is requesting a loan offer', 'provider123', NULL, NULL, 'Exception occurred', 'Exception', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'failed', NULL, NULL, NULL, '2024-08-24 15:33:24', '2024-08-24 15:33:34'),
(25, 'source123', '255692410353', 'service123', 'Mr Edwin is requesting a loan offer', 'provider123', NULL, NULL, 'Exception occurred', 'Exception', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'failed', NULL, NULL, NULL, '2024-08-24 15:33:40', '2024-08-24 15:33:50'),
(26, 'source123', '255692410353', 'service123', 'Mr Edwin is requesting a loan offer', 'provider123', NULL, NULL, 'Exception occurred', 'Exception', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'failed', NULL, NULL, NULL, '2024-08-24 15:35:15', '2024-08-24 15:35:25'),
(27, 'source123', '255692410353', 'service123', 'Mr Edwin is requesting a loan offer', 'provider123', NULL, NULL, 'Exception occurred', 'Exception', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'failed', NULL, NULL, NULL, '2024-08-24 15:35:29', '2024-08-24 15:35:39'),
(28, 'source123', '255692410353', 'service123', 'Mr Edwin is requesting a loan offer', 'provider123', NULL, NULL, 'Exception occurred', 'Exception', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'failed', NULL, NULL, NULL, '2024-08-24 15:36:01', '2024-08-24 15:36:11'),
(29, 'source123', '255692410353', 'service123', 'Mr Edwin is requesting a loan offer', 'provider123', NULL, NULL, 'Exception occurred', 'Exception', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'failed', NULL, NULL, NULL, '2024-08-24 15:36:20', '2024-08-24 15:36:30'),
(30, 'source123', '255692410353', 'service123', 'Mr Edwin is requesting a loan offer', 'provider123', NULL, NULL, 'Exception occurred', 'Exception', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'failed', NULL, NULL, NULL, '2024-08-24 15:36:35', '2024-08-24 15:36:45'),
(31, 'source123', '255692410353', 'service123', 'Mr Edwin is requesting a loan offer', 'provider123', NULL, NULL, 'Exception occurred', 'Exception', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'failed', NULL, NULL, NULL, '2024-08-24 15:37:06', '2024-08-24 15:37:16'),
(32, 'source123', '255692410353', 'service123', 'Mr Edwin is requesting a loan offer', 'provider123', NULL, NULL, 'Exception occurred', 'Exception', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'failed', NULL, NULL, NULL, '2024-08-25 04:10:03', '2024-08-25 04:10:15'),
(33, 'source123', '255692410353', 'service123', 'Mr Edwin is requesting a loan offer', 'provider123', NULL, NULL, 'Exception occurred', 'Exception', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'failed', NULL, NULL, NULL, '2024-08-25 04:16:10', '2024-08-25 04:16:20'),
(34, 'source123', '255692410353', 'service123', 'Mr Edwin is requesting a loan offer', 'provider123', NULL, NULL, 'Exception occurred', 'Exception', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'failed', NULL, NULL, NULL, '2024-08-25 04:23:39', '2024-08-25 04:23:49');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `loan_id` varchar(255) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `application_id` int(11) DEFAULT NULL,
  `principle` varchar(255) DEFAULT NULL,
  `interest` varchar(50) DEFAULT NULL,
  `tenure` varchar(50) DEFAULT NULL,
  `interest_method` varchar(150) DEFAULT NULL,
  `make_and_model` varchar(255) DEFAULT NULL,
  `purchase_price` varchar(255) DEFAULT NULL,
  `schedule` text DEFAULT NULL,
  `offer_status` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `loan_id`, `client_id`, `application_id`, `principle`, `interest`, `tenure`, `interest_method`, `make_and_model`, `purchase_price`, `schedule`, `offer_status`, `created_at`, `updated_at`) VALUES
(12, NULL, NULL, 6, '90000000', '3', '6', NULL, NULL, NULL, NULL, 'ACCEPTED', '2024-02-08 14:05:28', '2024-02-08 15:46:46'),
(13, NULL, NULL, 5, '12000000', '8', '24', 'decline_balance', NULL, NULL, NULL, 'ACCEPTED', '2024-02-08 14:36:04', '2024-02-10 13:53:44'),
(14, NULL, NULL, 14, '7000', '6', '12', 'decline_balance', NULL, NULL, NULL, 'ACCEPTED', '2024-02-10 10:56:33', '2024-02-10 10:56:50'),
(15, NULL, NULL, 17, '5000', '8', '3', 'decline_balance', NULL, NULL, NULL, 'ACCEPTED', '2024-02-10 15:47:33', '2024-02-10 15:48:19'),
(16, NULL, NULL, 18, '10000000', '4', '12', 'decline_balance', NULL, NULL, NULL, 'ACCEPTED', '2024-02-11 09:40:22', '2024-02-11 09:43:04'),
(17, NULL, NULL, 19, '33000000', '6', '18', 'decline_balance', NULL, NULL, NULL, 'ACCEPTED', '2024-02-12 13:23:58', '2024-02-12 13:32:06'),
(18, NULL, NULL, 20, '70000000', '8', '12', 'decline_balance', NULL, NULL, NULL, 'ACCEPTED', '2024-02-13 03:15:59', '2024-02-13 03:16:14'),
(19, NULL, NULL, 21, '23000000', '8', '12', 'decline_balance', NULL, NULL, NULL, 'ACCEPTED', '2024-02-13 05:02:43', '2024-02-13 05:03:05'),
(20, NULL, NULL, 22, '100000000', '8', '12', 'decline_balance', NULL, NULL, NULL, 'ACCEPTED', '2024-02-13 05:13:31', '2024-02-13 05:13:42'),
(21, NULL, NULL, 23, '700', '8', '12', 'decline_balance', NULL, NULL, NULL, 'ACCEPTED', '2024-02-13 06:08:33', '2024-02-13 06:08:50'),
(22, NULL, NULL, 24, '200000', '4', '10', 'decline_balance', NULL, NULL, NULL, 'APPROVED', '2024-02-13 06:59:22', '2024-02-13 06:59:22'),
(23, NULL, NULL, 24, '200000', '4', '10', 'decline_balance', NULL, NULL, NULL, 'APPROVED', '2024-02-13 06:59:47', '2024-02-13 06:59:47'),
(24, NULL, NULL, 24, '200000', '4', '10', 'decline_balance', NULL, NULL, NULL, 'ACCEPTED', '2024-02-13 07:00:13', '2024-02-13 07:09:50');

-- --------------------------------------------------------

--
-- Table structure for table `password_policies`
--

CREATE TABLE `password_policies` (
  `id` int(11) NOT NULL,
  `requireSpecialCharacter` tinyint(1) NOT NULL,
  `length` varchar(10) NOT NULL,
  `requireUppercase` tinyint(1) NOT NULL,
  `requireNumeric` tinyint(1) NOT NULL,
  `limiter` int(11) NOT NULL,
  `passwordExpire` int(11) DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `password_policies`
--

INSERT INTO `password_policies` (`id`, `requireSpecialCharacter`, `length`, `requireUppercase`, `requireNumeric`, `limiter`, `passwordExpire`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, '8', 0, 0, 5, NULL, 'PENDING', '2023-10-09 23:05:05', '2023-10-09 23:05:05');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment_methods`
--

INSERT INTO `payment_methods` (`id`, `name`) VALUES
(1, 'internal funds transfer'),
(2, 'external funds transfer'),
(3, 'TIC'),
(4, 'mobile payment');

-- --------------------------------------------------------

--
-- Table structure for table `pending_registrations`
--

CREATE TABLE `pending_registrations` (
  `id` int(11) NOT NULL,
  `reference_number` varchar(30) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `account_id` varchar(40) DEFAULT NULL,
  `branch_id` int(11) NOT NULL,
  `phone_number` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pending_registrations`
--

INSERT INTO `pending_registrations` (`id`, `reference_number`, `amount`, `account_id`, `branch_id`, `phone_number`, `created_at`, `updated_at`, `status`) VALUES
(1, '1234', NULL, '9864321975', 17, 'NE200012347602', '2023-08-05 14:46:42', '2023-08-05 14:46:42', NULL),
(2, '1234', NULL, '9864321975', 17, 'NE200012349532', '2023-08-05 15:18:52', '2023-08-05 15:18:52', NULL),
(3, '1234', NULL, '9864321975', 17, 'NE200012349571', '2023-08-05 15:19:31', '2023-08-05 15:19:31', NULL),
(4, '1234', NULL, '9864321975', 17, 'NE200012349589', '2023-08-05 15:19:49', '2023-08-05 15:19:49', NULL),
(5, '1234', NULL, '9864321975', 17, 'NE200012349621', '2023-08-05 15:20:21', '2023-08-05 15:20:21', NULL),
(6, '1234', NULL, '9864321975', 17, 'NE200012349666', '2023-08-05 15:21:06', '2023-08-05 15:21:06', NULL),
(7, '1234', NULL, '9864321975', 17, 'NE200012349740', '2023-08-05 15:22:20', '2023-08-05 15:22:20', NULL),
(8, '1234', NULL, '9864321975', 17, 'NE200012349782', '2023-08-05 15:23:02', '2023-08-05 15:23:02', NULL),
(9, '1234', NULL, '9864321975', 17, 'NE200012349844', '2023-08-05 15:24:04', '2023-08-05 15:24:04', NULL),
(10, '1234', NULL, '9864321975', 17, 'NE200012340156', '2023-08-05 15:29:16', '2023-08-05 15:29:16', NULL),
(11, '1234', NULL, '9864321975', 17, 'NE200012340189', '2023-08-05 15:29:49', '2023-08-05 15:29:49', NULL),
(12, '1234', NULL, '9864321975', 17, 'NE200012340296', '2023-08-05 15:31:36', '2023-08-05 15:31:36', NULL),
(13, '1234', NULL, '5110000111', 17, 'NE200012340436', '2023-08-05 15:33:56', '2023-08-05 15:33:56', NULL),
(14, '1234', NULL, '5110000111', 17, 'NE200012340561', '2023-08-05 15:36:01', '2023-08-05 15:36:01', NULL),
(15, '1234', NULL, '5110000111', 17, 'NE200012340683', '2023-08-05 15:38:03', '2023-08-05 15:38:03', NULL),
(16, '1234', NULL, '5110000111', 17, 'NE200012340769', '2023-08-05 15:39:29', '2023-08-05 15:39:29', NULL),
(17, 'dddd', NULL, '9864321975', 17, 'NE2000dddd0831', '2023-08-05 15:40:31', '2023-08-05 15:40:31', NULL),
(18, 'dddd', NULL, '9864321975', 17, 'NE2000dddd0887', '2023-08-05 15:41:27', '2023-08-05 15:41:27', NULL),
(19, 'dddd', NULL, '9864321975', 17, 'NE2000dddd0996', '2023-08-05 15:43:16', '2023-08-05 15:43:16', NULL),
(20, '1234', NULL, '9864321975', 17, 'NE200012341078', '2023-08-05 15:44:38', '2023-08-05 15:44:38', NULL),
(21, '1234', 100000, '9864321975', 17, 'NE200012343045', '2023-08-06 08:57:25', '2023-08-06 08:57:25', 'ACTIVE'),
(22, '1234', 100000, '9864321975', 17, 'NE200012343312', '2023-08-06 09:01:52', '2023-08-06 09:01:52', 'ACTIVE'),
(23, '1234', 100000, '9864321975', 17, 'NE200012344804', '2023-08-06 09:26:44', '2023-08-06 09:26:44', 'ACTIVE'),
(24, '1234', 100000, '9864321975', 17, 'NE200012344310', '2023-08-06 14:51:50', '2023-08-06 14:51:50', 'ACTIVE'),
(25, '1234', 100000, '9864321975', 17, 'NE200012344656', '2023-08-06 14:57:36', '2023-08-06 14:57:36', 'ACTIVE'),
(26, '1234', 100000, '9864321975', 17, 'NE200012344691', '2023-08-06 14:58:11', '2023-08-06 14:58:11', 'ACTIVE'),
(27, '1234', 100000, '9864321975', 17, 'NE200012344913', '2023-08-06 15:01:53', '2023-08-06 15:01:53', 'ACTIVE'),
(28, '1234', 100000, '9864321975', 17, 'NE200012344946', '2023-08-06 15:02:26', '2023-08-06 15:02:26', 'ACTIVE'),
(29, '1234', 100000, '9864321975', 17, 'NE200012345235', '2023-08-06 15:07:15', '2023-08-06 15:07:15', 'ACTIVE'),
(30, '1234', 100000, '9864321975', 17, 'NE200012345285', '2023-08-06 15:08:05', '2023-08-06 15:08:05', 'ACTIVE'),
(31, '1234', 100000, '9864321975', 17, 'NE200012345320', '2023-08-06 15:08:40', '2023-08-06 15:08:40', 'ACTIVE'),
(32, '12341', 100000, '9864321975', 17, '123456', '2023-08-06 15:12:58', '2023-08-06 15:12:58', 'ACTIVE'),
(33, '1234', 100000, '9864321975', 17, '123456', '2023-08-07 02:03:41', '2023-08-07 02:03:41', 'ACTIVE'),
(34, '1234', 100000, '9864321975', 17, '123456', '2023-08-07 02:04:39', '2023-08-07 02:04:39', 'ACTIVE'),
(35, '1234', 100000, '9864321975', 17, '123456', '2023-08-07 02:05:27', '2023-08-07 02:05:27', 'ACTIVE'),
(36, '1234', 1000, '9864321975', 17, 'NE200012344779', '2023-08-07 02:07:32', '2023-08-07 02:07:32', NULL),
(37, '1234', 100000, '9864321975', 17, '123456', '2023-08-07 02:53:37', '2023-08-07 02:53:37', 'ACTIVE'),
(38, '1234', 100000, '9864321975', 17, '123456', '2023-08-07 02:57:56', '2023-08-07 02:57:56', 'ACTIVE'),
(39, '1234', 100000, '9864321975', 17, '1234567890', '2023-08-07 03:29:41', '2023-08-07 03:29:41', 'INITIAL PAY'),
(40, '1234', 10000, '9864321975', 17, '1234567890', '2023-08-07 03:37:10', '2023-08-07 03:37:10', NULL),
(41, '1234', 100000, '9864321975', 17, '1234567891', '2023-08-07 03:50:12', '2023-08-07 03:50:12', 'INITIAL PAY'),
(42, '1234', 10000, '9864321975', 17, '1234567891', '2023-08-07 03:50:41', '2023-08-07 03:50:41', 'ACTIVE'),
(43, '1234', 100000, '9864321975', 17, '12345678923', '2023-08-07 05:29:40', '2023-08-07 05:29:40', 'INITIAL PAY'),
(44, '1234', 100000, '9864321975', 17, '1234567892', '2023-08-07 05:30:12', '2023-08-07 05:30:12', 'INITIAL PAY'),
(45, '1234', 100000, '9864321975', 17, '1234561234', '2023-08-08 07:52:36', '2023-08-08 07:52:36', 'INITIAL PAY'),
(46, '1234', 10000, '9864321975', 17, '1234561234', '2023-08-08 07:53:55', '2023-08-08 07:53:55', 'ACTIVE'),
(47, '1234', 100000, ' 21121900003', 17, '1234567893', '2023-08-10 17:01:30', '2023-08-10 17:01:30', 'INITIAL PAY'),
(48, '1234', 10000, '1', 17, '1234567899', '2023-08-11 12:13:17', '2023-08-11 12:13:17', 'INITIAL PAY'),
(49, '1234', 10000, '21', 17, '123456789000', '2023-08-12 11:28:48', '2023-08-12 11:28:48', 'INITIAL PAY'),
(50, '1234', 10000, '081700001010', 17, '+2551234567891', '2023-08-12 15:32:34', '2023-08-12 15:32:34', 'INITIAL PAY'),
(51, '1234', 10000, '081700001010', 17, '+2551234567893', '2023-08-13 03:26:10', '2023-08-13 03:26:10', 'INITIAL PAY'),
(52, '1234', 10000, '081700001010', 17, '1234512345', '2023-08-13 05:32:42', '2023-08-13 05:32:42', 'INITIAL PAY'),
(53, '1234', 10000, '21', 17, '12341234123', '2023-08-13 05:33:34', '2023-08-13 05:33:34', 'INITIAL PAY'),
(54, '1234', 10000, '21', 17, '1234123412323', '2023-08-13 05:35:21', '2023-08-13 05:35:21', 'INITIAL PAY'),
(55, '1234', 10000, '21', 17, '123412341232323', '2023-08-13 05:38:16', '2023-08-13 05:38:16', 'INITIAL PAY'),
(56, '1234', 10000, '21', 17, '2323234545', '2023-08-13 06:31:39', '2023-08-13 06:31:39', 'INITIAL PAY'),
(57, '1234', 10000, '21', 17, '+25512345623456', '2023-08-13 06:33:04', '2023-08-13 06:33:04', 'INITIAL PAY'),
(58, '12347', 10000, '21', 17, '56343243675476', '2023-08-13 06:34:11', '2023-08-13 06:34:11', 'INITIAL PAY'),
(59, '1234', 10000, '21', 17, '1111111111', '2023-08-13 07:32:36', '2023-08-13 07:32:36', 'INITIAL PAY'),
(60, '1234', 10000, '21', 17, '1111111111', '2023-08-13 07:32:54', '2023-08-13 07:32:54', 'ACTIVE'),
(61, NULL, 10000, NULL, 17, '1234567859', '2023-08-13 10:16:23', '2023-08-13 10:16:23', 'INITIAL PAY'),
(62, NULL, 10000, NULL, 17, '2345678912', '2023-08-13 11:00:05', '2023-08-13 11:00:05', 'INITIAL PAY'),
(63, NULL, 10000, NULL, 17, '2345672345', '2023-08-13 11:49:38', '2023-08-13 11:49:38', 'INITIAL PAY'),
(64, NULL, 10000, NULL, 17, '2345672345', '2023-08-13 11:50:03', '2023-08-13 11:50:03', 'ACTIVE'),
(65, NULL, 10000, NULL, 17, '232343829575', '2023-08-13 11:54:48', '2023-08-13 11:54:48', 'INITIAL PAY'),
(66, NULL, 10000, NULL, 17, '1424534435', '2023-08-13 12:06:52', '2023-08-13 12:06:52', 'INITIAL PAY'),
(67, NULL, 10000, NULL, 17, '142453443', '2023-08-13 12:07:25', '2023-08-13 12:07:25', 'INITIAL PAY'),
(68, NULL, 10000, NULL, 17, '1424534432', '2023-08-13 12:08:15', '2023-08-13 12:08:15', 'INITIAL PAY'),
(69, NULL, 10000, NULL, 17, '1424534431', '2023-08-13 12:08:44', '2023-08-13 12:08:44', 'INITIAL PAY'),
(70, NULL, 10000, NULL, 17, '1424534430', '2023-08-13 12:09:29', '2023-08-13 12:09:29', 'INITIAL PAY'),
(71, '12343', 10000, '21', 17, '2222222222', '2023-08-14 05:40:17', '2023-08-14 05:40:17', 'INITIAL PAY'),
(72, '1234', 10000, '21', 17, '2222222222', '2023-08-14 05:40:33', '2023-08-14 05:40:33', 'ACTIVE'),
(73, NULL, 10000, NULL, 17, '55555555555', '2023-08-14 05:46:11', '2023-08-14 05:46:11', 'INITIAL PAY');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(11) NOT NULL,
  `role` varchar(50) DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `permission` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `role`, `menu_id`, `permission`) VALUES
(1, NULL, 13, 'Can View Releases Stocks Report'),
(2, NULL, 13, 'Can View Stock Reports'),
(3, NULL, 2, 'Can View Client Details'),
(4, NULL, 12, 'Can View Collateral Releases'),
(5, NULL, 10, 'Can View Collateral Managers'),
(6, NULL, 11, 'Can View Commodities'),
(7, NULL, 0, 'Can Register Stocks'),
(8, NULL, 9, 'Can Create System User'),
(9, NULL, 9, 'Can Update System User'),
(10, NULL, 9, 'Can Delete System User'),
(11, NULL, 9, 'Can Manage Roles And System Permissions'),
(12, NULL, 10, 'Can Create Collateral Managers'),
(13, NULL, 10, 'Can Update Collateral Managers'),
(14, NULL, 10, 'Can Delete Collateral Managers'),
(15, NULL, 2, 'Can Create Client'),
(16, NULL, 2, 'Can Update Client'),
(17, NULL, 2, 'Can Delete Client'),
(18, NULL, 11, 'Can Create Commodity'),
(19, NULL, 11, 'Can Update Commodity Prices'),
(20, NULL, 11, 'Can Delete Commodity'),
(21, NULL, 10, 'Can Register Collateral'),
(22, NULL, 12, 'Can Request Releases Stocks'),
(23, NULL, 4, 'Can Approve Releases Stocks'),
(24, NULL, 12, 'Can Reject Release Requests'),
(25, NULL, 12, 'Can Request Releases Stocks'),
(26, NULL, 4, 'Can Approve Create System User'),
(27, NULL, 4, 'Can Approve Update System User'),
(28, NULL, 4, 'Can Approve Delete System User'),
(29, NULL, 4, 'Can Approve Create Collateral Managers'),
(30, NULL, 4, 'Can Approve Update Collateral Managers'),
(31, NULL, 4, 'Can Approve Delete Collateral Managers'),
(32, NULL, 4, 'Can Approve Create Client'),
(33, NULL, 4, 'Can Approve Update Client'),
(34, NULL, 4, 'Can Approve Delete Client'),
(35, NULL, 4, 'Can Approve Create Commodity'),
(36, NULL, 4, 'Can Approve Update Commodity Prices'),
(37, NULL, 4, 'Can Approve Delete Commodity'),
(38, NULL, 9, 'Can create user roles'),
(39, NULL, 10, 'Can edit user roles'),
(40, NULL, 9, 'Can block or delete user roles'),
(41, NULL, 4, 'Can approve creation of or deletion/blocking of user roles'),
(42, NULL, 5, 'Can create offers'),
(43, NULL, 7, 'Can create applications'),
(44, NULL, 14, 'Can create branches'),
(45, NULL, 15, 'Can View Collaterals'),
(46, NULL, 16, 'Can View Warehouses');

-- --------------------------------------------------------

--
-- Table structure for table `personnel_expenses`
--

CREATE TABLE `personnel_expenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_code` varchar(255) DEFAULT NULL,
  `sub_category_code` varchar(255) DEFAULT NULL,
  `sub_category_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personnel_expenses`
--

INSERT INTO `personnel_expenses` (`id`, `category_code`, `sub_category_code`, `sub_category_name`, `created_at`, `updated_at`) VALUES
(1, '5100', '5110', 'staff_salaries', NULL, NULL),
(2, '5100', '5112', 'social_security_contributions', NULL, NULL),
(3, '5100', '5114', 'payroll_taxes', NULL, NULL),
(4, '5100', '5116', 'staff_training', NULL, NULL),
(5, '5100', '5118', 'leave_and_transfer', NULL, NULL),
(6, '5100', '5120', 'accrued_salary', NULL, NULL),
(7, '5100', '5122', 'internal_travel_expenses', NULL, NULL),
(8, '5100', '5124', 'back_pay', NULL, NULL),
(9, '5100', '5126', 'out_of_hours_payments', NULL, NULL),
(10, '5100', '5128', 'employee_incentives', NULL, NULL),
(11, '5100', '5130', 'responsibility_allowance', NULL, NULL),
(12, '5100', '5132', 'housing_allowance', NULL, NULL),
(13, '5100', '5134', 'transport_allowance', NULL, NULL),
(14, '5100', '5136', 'medical_allowance', NULL, NULL),
(15, '5100', '5138', 'food_allowance', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pledges`
--

CREATE TABLE `pledges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` varchar(255) DEFAULT NULL,
  `application_id` varchar(50) DEFAULT NULL,
  `commodity_id` varchar(110) DEFAULT NULL,
  `loan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kilos` varchar(220) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `Status` varchar(220) DEFAULT NULL,
  `interest` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pledges`
--

INSERT INTO `pledges` (`id`, `client_id`, `application_id`, `commodity_id`, `loan_id`, `kilos`, `amount`, `Status`, `interest`, `created_at`, `updated_at`) VALUES
(1, '1', '5', '2', NULL, '10000', NULL, 'PLEDGED', NULL, NULL, NULL),
(2, '1', '6', '2', NULL, '100000', NULL, 'COLLATERAL RELEASED', NULL, NULL, NULL),
(3, '1', '7', '1', NULL, '800', 2400000, 'COLLATERAL RELEASED', NULL, NULL, NULL),
(4, '1', '7', '2', NULL, '7000', 12600000, 'COLLATERAL RELEASED', NULL, NULL, NULL),
(5, '1', '8', '2', NULL, '7000', 12600000, 'COLLATERAL RELEASED', NULL, NULL, NULL),
(6, '1', '8', '1', NULL, '8000', 24000000, 'COLLATERAL RELEASED', NULL, NULL, NULL),
(7, '1', '9', '2', NULL, '1000', 1800000, 'COLLATERAL RELEASED', NULL, NULL, NULL),
(8, '1', '9', '1', NULL, '1000', 3000000, 'COLLATERAL RELEASED', NULL, NULL, NULL),
(9, '1', '10', '2', NULL, '1000', 1800000, 'COLLATERAL RELEASED', NULL, NULL, NULL),
(10, '1', '10', '1', NULL, '1000', 3000000, 'COLLATERAL RELEASED', NULL, NULL, NULL),
(11, '1', '11', '2', NULL, '1000', 1800000, 'COLLATERAL RELEASED', NULL, NULL, NULL),
(12, '1', '11', '1', NULL, '1000', 3000000, 'COLLATERAL RELEASED', NULL, NULL, NULL),
(13, '1', '13', '2', NULL, '1000', 1800000, 'PLEDGED', NULL, NULL, NULL),
(14, '1', '13', '1', NULL, '1000', 3000000, 'PLEDGED', NULL, NULL, NULL),
(15, '1', '14', '2', NULL, '1000', 1800000, 'PLEDGED', NULL, NULL, NULL),
(16, '1', '14', '1', NULL, '1000', 3000000, 'PLEDGED', NULL, NULL, NULL),
(17, '1', '15', '2', NULL, '1000', 1800000, 'PLEDGED', NULL, NULL, NULL),
(18, '1', '15', '1', NULL, '1000', 3000000, 'PLEDGED', NULL, NULL, NULL),
(19, '1', '16', '2', NULL, '1000', 1800000, 'PLEDGED', NULL, NULL, NULL),
(20, '1', '16', '1', NULL, '1000', 3000000, 'PLEDGED', NULL, NULL, NULL),
(21, '1', '17', '2', NULL, '66', 118800, 'COLLATERAL RELEASED', NULL, NULL, NULL),
(22, '1', '17', '1', NULL, '88', 264000, 'COLLATERAL RELEASED', NULL, NULL, NULL),
(23, '2', '18', '4', NULL, '20000', 120000000, 'COLLATERAL RELEASED', NULL, NULL, NULL),
(24, '3', '19', '5', NULL, '50', 290000, 'COLLATERAL RELEASED', NULL, NULL, NULL),
(25, '3', '19', '2', NULL, '30000', 54000000, 'COLLATERAL RELEASED', NULL, NULL, NULL),
(26, '1', '20', '2', NULL, '200000000', 360000000000, 'COLLATERAL RELEASED', NULL, NULL, NULL),
(27, '2', '21', '7', NULL, '45000', 81000000, 'COLLATERAL RELEASED', NULL, NULL, NULL),
(28, '1', '22', '2', NULL, '1', 1800, 'PLEDGED', NULL, NULL, NULL),
(29, '1', '22', '1', NULL, '150000', 675000000, 'PLEDGED', NULL, NULL, NULL),
(30, '1', '22', '5', NULL, '8000', 46400000, 'PLEDGED', NULL, NULL, NULL),
(31, '1', '22', '9', NULL, '300000', 720000000, 'PLEDGED', NULL, NULL, NULL),
(32, '2', '23', '10', NULL, '300000', 210000000, 'PLEDGED', NULL, NULL, NULL),
(33, '2', '24', '7', NULL, '20', 36000, 'PLEDGED', NULL, NULL, NULL),
(34, '2', '24', '10', NULL, '40', 28000, 'PLEDGED', NULL, NULL, NULL),
(35, '1', '25', '1', NULL, '70000', 315000000, 'COLLATERAL RELEASED', NULL, NULL, NULL),
(36, '1', '25', '5', NULL, '1000', 5800000, 'COLLATERAL RELEASED', NULL, NULL, NULL),
(37, '1', '27', '2', NULL, '56', 436800, 'PLEDGED', NULL, NULL, NULL),
(38, '1', '27', '1', NULL, '67', 529233, 'PLEDGED', NULL, NULL, NULL),
(39, '1', '27', '5', NULL, '780', 4524000, 'PLEDGED', NULL, NULL, NULL),
(40, '1', '27', '9', NULL, '2000', 4800000, 'PLEDGED', NULL, NULL, NULL),
(41, '9', '28', '1', NULL, '54', 426546, 'PLEDGED', NULL, NULL, NULL),
(42, '9', '28', '4', NULL, '1000', 6000000, 'PLEDGED', NULL, NULL, NULL),
(43, '9', '28', '12', NULL, '200', 560000, 'PLEDGED', NULL, NULL, NULL),
(44, '9', '29', '1', NULL, '400', 480000, 'PLEDGED', NULL, NULL, NULL),
(45, '9', '29', '4', NULL, '1000', 6000000, 'PLEDGED', NULL, NULL, NULL),
(46, '9', '29', '12', NULL, '600', 1680000, 'PLEDGED', NULL, NULL, NULL),
(47, '9', '30', '1', NULL, '77', 92400, 'PLEDGED', NULL, NULL, NULL),
(48, '9', '30', '4', NULL, '97', 582000, 'PLEDGED', NULL, NULL, NULL),
(49, '9', '30', '12', NULL, '90', 252000, 'PLEDGED', NULL, NULL, NULL),
(50, '9', '31', '1', NULL, '56', 67200, 'PLEDGED', NULL, NULL, NULL),
(51, '9', '31', '4', NULL, '456', 2736000, 'PLEDGED', NULL, NULL, NULL),
(52, '9', '31', '12', NULL, '77', 215600, 'PLEDGED', NULL, NULL, NULL),
(53, '9', '32', '1', NULL, '78', 93600, 'PLEDGED', NULL, NULL, NULL),
(54, '9', '32', '4', NULL, '45', 270000, 'PLEDGED', NULL, NULL, NULL),
(55, '9', '32', '12', NULL, '90', 252000, 'PLEDGED', NULL, NULL, NULL),
(56, '9', '33', '1', NULL, '500', 600000, 'PLEDGED', NULL, NULL, NULL),
(57, '9', '33', '4', NULL, '1000', 6000000, 'PLEDGED', NULL, NULL, NULL),
(58, '9', '33', '12', NULL, '500', 1400000, 'PLEDGED', NULL, NULL, NULL),
(59, '9', '34', '1', NULL, '400', 480000, 'PLEDGED', NULL, NULL, NULL),
(60, '9', '34', '4', NULL, '789', 4734000, 'PLEDGED', NULL, NULL, NULL),
(61, '9', '34', '12', NULL, '56', 156800, 'PLEDGED', NULL, NULL, NULL),
(62, '18', '35', '1', NULL, '7700', 9240000, 'PLEDGED', NULL, NULL, NULL),
(63, '18', '35', '2', NULL, '900', 7200000, 'PLEDGED', NULL, NULL, NULL),
(64, '19', '36', '3', NULL, '300', 270000, 'PLEDGED', NULL, NULL, NULL),
(65, '18', '37', '1', NULL, '400', 480000, 'PLEDGED', NULL, NULL, NULL),
(66, '18', '37', '2', NULL, '700', 5600000, 'PLEDGED', NULL, NULL, NULL),
(67, '18', '38', '1', NULL, '400', 480000, 'PLEDGED', NULL, NULL, NULL),
(68, '18', '38', '2', NULL, '700', 5600000, 'PLEDGED', NULL, NULL, NULL),
(69, '18', '39', '1', NULL, '300', 360000, 'PLEDGED', NULL, NULL, NULL),
(70, '18', '39', '2', NULL, '500', 4000000, 'PLEDGED', NULL, NULL, NULL),
(71, '18', '39', '11', NULL, '600', 1380000, 'PLEDGED', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `processes`
--

CREATE TABLE `processes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `process_name` varchar(250) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `processes`
--

INSERT INTO `processes` (`id`, `process_name`, `created_at`, `updated_at`) VALUES
(14, 'CUSTOMER ONBOADING AND STOCK REGISTRATION', '2024-07-28 04:32:29', '2024-07-28 04:32:29'),
(15, 'LOAN APPLICATION & SECURITY PERFECTION', '2024-07-28 08:44:39', '2024-07-28 08:44:39'),
(16, 'COLLATERAL RELEASE', '2024-07-28 09:05:13', '2024-07-28 09:05:13'),
(17, 'SYSTEM MANAGEMENT', '2024-07-28 19:54:12', '2024-07-28 19:54:12'),
(18, 'coob', '2024-08-15 05:24:27', '2024-08-15 05:24:27');

-- --------------------------------------------------------

--
-- Table structure for table `product_catalog`
--

CREATE TABLE `product_catalog` (
  `id` int(11) NOT NULL,
  `fsp_code` varchar(10) DEFAULT NULL,
  `fsp_name` varchar(100) DEFAULT NULL,
  `product_code` varchar(8) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `min_tenure` int(11) DEFAULT NULL,
  `max_tenure` int(11) DEFAULT NULL,
  `interest_rate` double DEFAULT NULL,
  `processing_fee` double DEFAULT NULL,
  `insurance` double DEFAULT NULL,
  `amount_min` double DEFAULT NULL,
  `amount_max` double DEFAULT NULL,
  `repayment_type` varchar(10) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `for_executive` tinyint(1) NOT NULL,
  `approval_status` varchar(50) NOT NULL DEFAULT 'PENDING',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_catalog`
--

INSERT INTO `product_catalog` (`id`, `fsp_code`, `fsp_name`, `product_code`, `product_name`, `min_tenure`, `max_tenure`, `interest_rate`, `processing_fee`, `insurance`, `amount_min`, `amount_max`, `repayment_type`, `description`, `for_executive`, `approval_status`, `created_at`, `updated_at`) VALUES
(1, '1001', 'ACB BANK', '4007', 'vfbafbfbasfb', 344, 343, 4, 34, 43, 34344, 344343, 'Monthly', 'qwrgqwgqwrgwrgqwg', 1, 'PENDING', '2023-12-17 13:04:44', '2023-12-17 13:04:44'),
(2, '1001', 'ACB BANK', '982765', 'asfasfasf', 34, 4, 4, 4, 3, 4343, 343434, 'Monthly', 'rgwergwergwerge', 1, 'PENDING', '2023-12-17 13:11:29', '2023-12-17 13:11:29'),
(3, '1001', 'ACB BANK', '172773', 'dfvefvefv', 3, 4, 3, 1, 4, 4, 3, 'Monthly', 'gbsdfvfvefve fveverve erv1rvrv3r', 1, 'PENDING', '2023-12-17 13:17:56', '2023-12-17 13:17:56'),
(4, '1001', 'ACB BANK', '172773', 'dfvefvefv', 3, 4, 3, 1, 4, 4, 3, 'Monthly', NULL, 1, 'PENDING', '2023-12-17 13:19:02', '2023-12-17 13:19:02'),
(5, '1001', 'ACB BANK', '172773', 'dfvefvefv', 3, 4, 3, 1, 4, 4, 3, 'Monthly', NULL, 1, 'PENDING', '2023-12-17 13:20:12', '2023-12-17 13:20:12');

-- --------------------------------------------------------

--
-- Table structure for table `property_and_equipment`
--

CREATE TABLE `property_and_equipment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_code` varchar(255) DEFAULT NULL,
  `sub_category_code` varchar(255) DEFAULT NULL,
  `sub_category_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_and_equipment`
--

INSERT INTO `property_and_equipment` (`id`, `category_code`, `sub_category_code`, `sub_category_name`, `created_at`, `updated_at`) VALUES
(1, '1700', '1710', 'buildings', NULL, NULL),
(2, '1700', '1712', 'depreciation__buildings', NULL, NULL),
(3, '1700', '1714', 'land', NULL, NULL),
(4, '1700', '1716', 'equipment', NULL, NULL),
(5, '1700', '1718', 'depreciation__equipment', NULL, NULL),
(6, '1700', '1720', 'vehicles', NULL, NULL),
(7, '1700', '1722', 'depreciation__vehicles', NULL, NULL),
(8, '1700', '1724', 'leased_rental_property', NULL, NULL),
(9, '1700', '1726', 'depreciation__leased_property', NULL, NULL),
(10, '1700', '1728', 'other_assets_and_equipment', NULL, NULL),
(11, '1700', '1730', 'other_depreciation', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` int(11) NOT NULL,
  `requisition_description` varchar(255) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `vendorId` int(11) DEFAULT NULL,
  `branchId` int(11) DEFAULT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `employeeId` int(11) NOT NULL,
  `invoice` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `requisition_description`, `quantity`, `vendorId`, `branchId`, `status`, `created_at`, `updated_at`, `employeeId`, `invoice`) VALUES
(5, 'REQUESTING FOR NEW COMPUTER', 2, 0, NULL, 'PENDING', '2023-08-01 20:50:25', '2023-10-16 10:18:58', 900029, NULL),
(6, 'svzdfvgfx', NULL, 1, NULL, 'ACTIVE', '2023-08-03 17:47:43', '2023-10-15 16:03:11', 900003, NULL),
(7, 'request for the new computer and file', 1, NULL, 17, 'DELETE', '2023-10-16 09:46:13', '2023-10-16 10:18:44', 900029, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `region_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `region_name`, `created_at`, `updated_at`) VALUES
(1, 'Arusha', NULL, NULL),
(2, 'Dar es Salaam', NULL, NULL),
(3, 'Dodoma', NULL, NULL),
(4, 'Geita', NULL, NULL),
(5, 'Iringa', NULL, NULL),
(6, 'Kagera', NULL, NULL),
(7, 'Katavi', NULL, NULL),
(8, 'Kigoma', NULL, NULL),
(9, 'Kilimanjaro', NULL, NULL),
(10, 'Lindi', NULL, NULL),
(11, 'Manyara', NULL, NULL),
(12, 'Mara', NULL, NULL),
(13, 'Mbeya', NULL, NULL),
(14, 'Morogoro', NULL, NULL),
(15, 'Mtwara', NULL, NULL),
(16, 'Mwanza', NULL, NULL),
(17, 'Njombe', NULL, NULL),
(18, 'Pemba Kaskazini', NULL, NULL),
(19, 'Pemba Kusini', NULL, NULL),
(20, 'Pwani', NULL, NULL),
(21, 'Rukwa', NULL, NULL),
(22, 'Ruvuma', NULL, NULL),
(23, 'Shinyanga', NULL, NULL),
(24, 'Simiyu', NULL, NULL),
(25, 'Singida', NULL, NULL),
(26, 'Songwe', NULL, NULL),
(27, 'Tabora', NULL, NULL),
(28, 'Tanga', NULL, NULL),
(29, 'Unguja Kaskazini', NULL, NULL),
(30, 'Unguja Mjini Magharibi', NULL, NULL),
(31, 'Unguja Kusini', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `releases`
--

CREATE TABLE `releases` (
  `id` int(11) NOT NULL,
  `application_id` int(11) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `Status` varchar(150) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `releases`
--

INSERT INTO `releases` (`id`, `application_id`, `client_id`, `Status`, `created_at`, `updated_at`) VALUES
(31, 38, 18, 'COLLATERAL RELEASED', NULL, NULL),
(32, 39, 18, 'COLLATERAL RELEASED', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institution_id` varchar(20) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `department_name` varchar(255) DEFAULT NULL,
  `permissions` longtext DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `modules` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `institution_id`, `status`, `department_name`, `permissions`, `description`, `updated_at`, `created_at`, `modules`) VALUES
(1, '31', 'ACTIVE', 'MANAGEMENT', '[\"1\",\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\",\"13\",\"14\",\"15\",\"16\",\"17\",\"18\",\"19\",\"20\",\"21\",\"22\",\"23\",\"24\",\"25\",\"26\",\"26\",\"27\",\"28\",\"29\",\"30\",\"31\",\"32\",\"33\",\"34\",\"35\",\"36\",\"37\",\"38\",\"39\",\"40\",\"41\",\"42\",\"43\",\"44\",\"45\",\"46\"]', 'Management class', '2024-07-27 04:51:45', '2023-09-23 11:57:57', '{\"1\":\"1\",\"2\":\"2\",\"3\":\"3\",\"4\":\"4\",\"5\":\"5\",\"6\":\"6\",\"7\":\"7\"}'),
(10, '31', 'ACTIVE', 'ADMINISTRATOR', '[\"1\",\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\",\"13\",\"14\",\"15\",\"16\",\"17\",\"18\",\"19\",\"20\",\"21\",\"22\",\"23\",\"24\",\"25\",\"26\",\"26\",\"27\",\"28\",\"29\",\"30\",\"31\",\"32\",\"33\",\"34\",\"35\",\"36\",\"37\",\"38\",\"39\",\"40\",\"41\",\"42\",\"43\",\"44\",\"45\",\"46\"]', 'Dicta eum voluptatib', '2024-07-18 05:28:35', '2023-09-23 11:57:57', '[\"2\",false,false,false,false,\"5\",false,\"7\",false,\"9\",\"10\",false,false,\"13\",\"14\",false,false,\"17\",\"18\",\"19\",\"20\",false,false,\"23\",\"24\",\"25\",\"26\",\"27\",\"28\",false,\"30\",\"31\",\"32\",false,false,\"35\",\"36\",false,false,false,\"40\",\"41\",\"42\",\"43\",\"44\",\"45\",\"46\"]'),
(11, '31', 'ACTIVE', 'COLLATERAL MANAGER', '{\"2\":\"2\",\"3\":\"3\",\"7\":\"7\"}', NULL, '2024-07-28 04:44:09', '2023-09-23 11:57:57', '{\"2\":\"2\",\"3\":\"3\",\"7\":\"7\"}'),
(12, '31', 'ACTIVE', 'TRADE FINANCE TEAM', '{\"3\":\"3\",\"5\":\"5\",\"32\":\"32\",\"33\":\"33\",\"34\":\"34\",\"38\":false}', NULL, '2024-07-28 04:41:40', '2023-09-23 11:57:57', '{\"3\":\"3\",\"5\":\"5\",\"32\":\"32\",\"33\":\"33\",\"34\":\"34\",\"38\":false}'),
(13, '31', 'ACTIVE', 'CREDIT TEAM', '{\"15\":\"15\",\"16\":\"16\",\"17\":\"17\",\"18\":\"18\",\"19\":\"19\",\"20\":\"20\",\"21\":\"21\",\"22\":\"22\",\"23\":\"23\",\"24\":\"24\",\"25\":\"25\"}', NULL, '2024-07-27 11:33:35', '2023-09-23 11:57:57', '{\"15\":\"15\",\"16\":\"16\",\"17\":\"17\",\"18\":\"18\",\"19\":\"19\",\"20\":\"20\",\"21\":\"21\",\"22\":\"22\",\"23\":\"23\",\"24\":\"24\",\"25\":\"25\"}'),
(14, '31', 'ACTIVE', 'RELATIONSHIP MANAGER', '{\"2\":\"2\",\"3\":\"3\",\"5\":\"5\",\"15\":\"15\",\"16\":\"16\",\"17\":\"17\",\"45\":\"45\",\"46\":\"46\"}', NULL, '2024-07-28 04:35:02', '2023-09-23 11:57:57', '{\"2\":\"2\",\"3\":\"3\",\"5\":\"5\",\"15\":\"15\",\"16\":\"16\",\"17\":\"17\",\"45\":\"45\",\"46\":\"46\"}');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_name` varchar(255) DEFAULT NULL,
  `service_type` varchar(255) DEFAULT NULL,
  `Status` varchar(220) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `service_type`, `Status`, `created_at`, `updated_at`) VALUES
(1, 'SMS SERVICE', 'SMS', 'ACTIVE', '2024-08-15 04:56:20', '2024-08-15 04:56:20'),
(2, 'EMAIL SERVICE', 'EMAIL', 'ACTIVE', '2024-08-15 04:59:16', '2024-08-15 04:59:16');

-- --------------------------------------------------------

--
-- Table structure for table `service_checks`
--

CREATE TABLE `service_checks` (
  `id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `check_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `service_checks`
--

INSERT INTO `service_checks` (`id`, `service_id`, `check_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 8),
(6, 1, 9),
(7, 1, 18),
(8, 1, 20),
(9, 1, 22),
(10, 1, 24),
(11, 1, 26),
(12, 2, 1),
(13, 2, 10),
(14, 2, 11),
(15, 2, 12),
(16, 2, 13),
(17, 2, 14),
(18, 2, 15),
(19, 2, 16),
(20, 2, 17),
(21, 2, 22),
(22, 2, 27);

-- --------------------------------------------------------

--
-- Table structure for table `service_parameters`
--

CREATE TABLE `service_parameters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_type` varchar(50) NOT NULL,
  `price_per_unit` decimal(10,2) NOT NULL,
  `limit_per_day` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_parameters`
--

INSERT INTO `service_parameters` (`id`, `service_type`, `price_per_unit`, `limit_per_day`, `created_at`, `updated_at`) VALUES
(1, 'SMS', 0.05, 1000, '2024-08-15 08:43:02', '2024-08-15 08:43:02'),
(2, 'Email', 0.01, 500, '2024-08-15 08:43:02', '2024-08-15 08:43:02');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` text NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('fe4sSFbiGT6sqHJhC6sPNAILUYqxZPkV4WuT1qbH', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoidDFxcmE1WG5QSEN4OG1YWFJjN28wb2FJQ2p5eFlPOFhVc3dKNHh6UiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozNzoiaHR0cDovLzEyNy4wLjAuMS9ub3RpZmljYXRpb25zL1N5c3RlbSI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM2OiJodHRwOi8vMTI3LjAuMC4xL25vdGlmaWNhdGlvbnMvbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1724665596),
('A8Wbw8DO6lfgPiDAS7YQf95OiVg1En9J5fo8UDNV', 32, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YToxMTp7czo2OiJfdG9rZW4iO3M6NDA6Im5NNDlRWk9wVUJpUThiSlVxRUdIejVJaVFOeFR6ZlozU0FmWTV3dDciO3M6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjc0OiJodHRwOi8vMTI3LjAuMC4xL25vdGlmaWNhdGlvbnMvbm9kZV9tb2R1bGVzL2FwZXhjaGFydHMvZGlzdC9hcGV4Y2hhcnRzLmNzcyI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjMyO3M6MTQ6InVzZXJEZXBhcnRtZW50IjtzOjEwOiJNQU5BR0VNRU5UIjtzOjExOiJwZXJtaXNzaW9ucyI7YTo0ODp7aTowO3M6MToiMSI7aToxO3M6MToiMSI7aToyO3M6MToiMiI7aTozO3M6MToiMyI7aTo0O3M6MToiNCI7aTo1O3M6MToiNSI7aTo2O3M6MToiNiI7aTo3O3M6MToiNyI7aTo4O3M6MToiOCI7aTo5O3M6MToiOSI7aToxMDtzOjI6IjEwIjtpOjExO3M6MjoiMTEiO2k6MTI7czoyOiIxMiI7aToxMztzOjI6IjEzIjtpOjE0O3M6MjoiMTQiO2k6MTU7czoyOiIxNSI7aToxNjtzOjI6IjE2IjtpOjE3O3M6MjoiMTciO2k6MTg7czoyOiIxOCI7aToxOTtzOjI6IjE5IjtpOjIwO3M6MjoiMjAiO2k6MjE7czoyOiIyMSI7aToyMjtzOjI6IjIyIjtpOjIzO3M6MjoiMjMiO2k6MjQ7czoyOiIyNCI7aToyNTtzOjI6IjI1IjtpOjI2O3M6MjoiMjYiO2k6Mjc7czoyOiIyNiI7aToyODtzOjI6IjI3IjtpOjI5O3M6MjoiMjgiO2k6MzA7czoyOiIyOSI7aTozMTtzOjI6IjMwIjtpOjMyO3M6MjoiMzEiO2k6MzM7czoyOiIzMiI7aTozNDtzOjI6IjMzIjtpOjM1O3M6MjoiMzQiO2k6MzY7czoyOiIzNSI7aTozNztzOjI6IjM2IjtpOjM4O3M6MjoiMzciO2k6Mzk7czoyOiIzOCI7aTo0MDtzOjI6IjM5IjtpOjQxO3M6MjoiNDAiO2k6NDI7czoyOiI0MSI7aTo0MztzOjI6IjQyIjtpOjQ0O3M6MjoiNDMiO2k6NDU7czoyOiI0NCI7aTo0NjtzOjI6IjQ1IjtpOjQ3O3M6MjoiNDYiO31zOjE2OiJwZXJtaXNzaW9uX2l0ZW1zIjthOjQ2OntpOjA7aToxO2k6MTtpOjI7aToyO2k6MztpOjM7aTo0O2k6NDtpOjU7aTo1O2k6NjtpOjY7aTo3O2k6NztpOjg7aTo4O2k6OTtpOjk7aToxMDtpOjEwO2k6MTE7aToxMTtpOjEyO2k6MTI7aToxMztpOjEzO2k6MTQ7aToxNDtpOjE1O2k6MTU7aToxNjtpOjE2O2k6MTc7aToxNztpOjE4O2k6MTg7aToxOTtpOjE5O2k6MjA7aToyMDtpOjIxO2k6MjE7aToyMjtpOjIyO2k6MjM7aToyMztpOjI0O2k6MjQ7aToyNTtpOjI1O2k6MjY7aToyNjtpOjI3O2k6Mjc7aToyODtpOjI4O2k6Mjk7aToyOTtpOjMwO2k6MzA7aTozMTtpOjMxO2k6MzI7aTozMjtpOjMzO2k6MzM7aTozNDtpOjM0O2k6MzU7aTozNTtpOjM2O2k6MzY7aTozNztpOjM3O2k6Mzg7aTozODtpOjM5O2k6Mzk7aTo0MDtpOjQwO2k6NDE7aTo0MTtpOjQyO2k6NDI7aTo0MztpOjQzO2k6NDQ7aTo0NDtpOjQ1O2k6NDU7aTo0Njt9czoyNjoibm90aWZpY2F0aW9uX3RhYmxlX3BlcnBhZ2UiO2k6MTA7czoyNToibm90aWZpY2F0aW9uX3RhYmxlX3NlYXJjaCI7TjtzOjk6Ik1haW5UaXRsZSI7czoxODoiU2VydmljZXMgRGFzaGJvYXJkIjtzOjEyOiJNYWluU3ViVGl0bGUiO3M6MjM6IkFuIE92ZXJ2aWV3IE9mIFNlcnZpY2VzIjt9', 1724666097),
('z9W8KiQmwNXCu8tIALaA9zKaXasGt1lD5x8KHsQS', 32, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTo4OntzOjY6Il90b2tlbiI7czo0MDoiYVdDN3d0QThJZlRBUG84RlhVOGc4d3diTkxHNFk4Zm1EVFdJbGZ5ZSI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjc0OiJodHRwOi8vMTI3LjAuMC4xL25vdGlmaWNhdGlvbnMvbm9kZV9tb2R1bGVzL2FwZXhjaGFydHMvZGlzdC9hcGV4Y2hhcnRzLmNzcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MTQ6InVzZXJEZXBhcnRtZW50IjtzOjEwOiJNQU5BR0VNRU5UIjtzOjExOiJwZXJtaXNzaW9ucyI7YTo0ODp7aTowO3M6MToiMSI7aToxO3M6MToiMSI7aToyO3M6MToiMiI7aTozO3M6MToiMyI7aTo0O3M6MToiNCI7aTo1O3M6MToiNSI7aTo2O3M6MToiNiI7aTo3O3M6MToiNyI7aTo4O3M6MToiOCI7aTo5O3M6MToiOSI7aToxMDtzOjI6IjEwIjtpOjExO3M6MjoiMTEiO2k6MTI7czoyOiIxMiI7aToxMztzOjI6IjEzIjtpOjE0O3M6MjoiMTQiO2k6MTU7czoyOiIxNSI7aToxNjtzOjI6IjE2IjtpOjE3O3M6MjoiMTciO2k6MTg7czoyOiIxOCI7aToxOTtzOjI6IjE5IjtpOjIwO3M6MjoiMjAiO2k6MjE7czoyOiIyMSI7aToyMjtzOjI6IjIyIjtpOjIzO3M6MjoiMjMiO2k6MjQ7czoyOiIyNCI7aToyNTtzOjI6IjI1IjtpOjI2O3M6MjoiMjYiO2k6Mjc7czoyOiIyNiI7aToyODtzOjI6IjI3IjtpOjI5O3M6MjoiMjgiO2k6MzA7czoyOiIyOSI7aTozMTtzOjI6IjMwIjtpOjMyO3M6MjoiMzEiO2k6MzM7czoyOiIzMiI7aTozNDtzOjI6IjMzIjtpOjM1O3M6MjoiMzQiO2k6MzY7czoyOiIzNSI7aTozNztzOjI6IjM2IjtpOjM4O3M6MjoiMzciO2k6Mzk7czoyOiIzOCI7aTo0MDtzOjI6IjM5IjtpOjQxO3M6MjoiNDAiO2k6NDI7czoyOiI0MSI7aTo0MztzOjI6IjQyIjtpOjQ0O3M6MjoiNDMiO2k6NDU7czoyOiI0NCI7aTo0NjtzOjI6IjQ1IjtpOjQ3O3M6MjoiNDYiO31zOjE2OiJwZXJtaXNzaW9uX2l0ZW1zIjthOjQ2OntpOjA7aToxO2k6MTtpOjI7aToyO2k6MztpOjM7aTo0O2k6NDtpOjU7aTo1O2k6NjtpOjY7aTo3O2k6NztpOjg7aTo4O2k6OTtpOjk7aToxMDtpOjEwO2k6MTE7aToxMTtpOjEyO2k6MTI7aToxMztpOjEzO2k6MTQ7aToxNDtpOjE1O2k6MTU7aToxNjtpOjE2O2k6MTc7aToxNztpOjE4O2k6MTg7aToxOTtpOjE5O2k6MjA7aToyMDtpOjIxO2k6MjE7aToyMjtpOjIyO2k6MjM7aToyMztpOjI0O2k6MjQ7aToyNTtpOjI1O2k6MjY7aToyNjtpOjI3O2k6Mjc7aToyODtpOjI4O2k6Mjk7aToyOTtpOjMwO2k6MzA7aTozMTtpOjMxO2k6MzI7aTozMjtpOjMzO2k6MzM7aTozNDtpOjM0O2k6MzU7aTozNTtpOjM2O2k6MzY7aTozNztpOjM3O2k6Mzg7aTozODtpOjM5O2k6Mzk7aTo0MDtpOjQwO2k6NDE7aTo0MTtpOjQyO2k6NDI7aTo0MztpOjQzO2k6NDQ7aTo0NDtpOjQ1O2k6NDU7aTo0Njt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MzI7fQ==', 1725699791);

-- --------------------------------------------------------

--
-- Table structure for table `sources`
--

CREATE TABLE `sources` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `source_name` varchar(255) DEFAULT NULL,
  `source_ip` varchar(255) DEFAULT NULL,
  `source_id` varchar(255) DEFAULT NULL,
  `Status` varchar(220) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sources`
--

INSERT INTO `sources` (`id`, `source_name`, `source_ip`, `source_id`, `Status`, `created_at`, `updated_at`) VALUES
(1, 'ADVANCE_SALARY_SYSTEM', '127.0.0.1', '2024-08-14', 'ACTIVE', '2024-08-15 00:40:31', '2024-08-15 00:40:31');

-- --------------------------------------------------------

--
-- Table structure for table `steps`
--

CREATE TABLE `steps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `process_id` int(11) DEFAULT NULL,
  `role_id` varchar(255) DEFAULT NULL,
  `step_name` varchar(255) DEFAULT NULL,
  `step_number` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `steps`
--

INSERT INTO `steps` (`id`, `process_id`, `role_id`, `step_name`, `step_number`, `created_at`, `updated_at`) VALUES
(26, 14, '14', 'ONBOADING', '1', '2024-07-28 04:35:02', '2024-07-28 04:35:02'),
(27, 14, '12', 'CLIENT REVIEW', '2', '2024-07-28 04:41:40', '2024-07-28 04:41:40'),
(28, 14, '11', 'STOCK REGISTRATION', '3', '2024-07-28 04:44:09', '2024-07-28 04:44:09'),
(29, 15, '14', 'LOAN APPLICATION', '1', '2024-07-28 08:48:32', '2024-07-28 08:48:32'),
(30, 15, '12', 'LOAN APPLICATION REVIEW', '2', '2024-07-28 08:52:52', '2024-07-28 08:52:52'),
(31, 15, '13', 'LOAN APPLICATION ANALYSIS', '3', '2024-07-28 08:55:09', '2024-07-28 08:55:09'),
(32, 16, '14', 'COLLATERAL RELEASE REQUEST', '1', '2024-07-28 09:08:12', '2024-07-28 09:08:12'),
(33, 16, '12', 'REVIEW COLLATERAL RELEASE REQUEST', '2', '2024-07-28 09:10:21', '2024-07-28 09:10:21'),
(34, 16, '13', 'COLLATERAL RELEASE APPROVAL', '3', '2024-07-28 09:16:26', '2024-07-28 09:16:26'),
(35, 17, '10', 'SYSTEM MANAGEMENT', '1', '2024-07-28 19:55:42', '2024-07-28 19:55:42');

-- --------------------------------------------------------

--
-- Table structure for table `step_permissions`
--

CREATE TABLE `step_permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `step_id` int(11) DEFAULT NULL,
  `permission_id` varchar(255) DEFAULT NULL,
  `Process_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `step_permissions`
--

INSERT INTO `step_permissions` (`id`, `step_id`, `permission_id`, `Process_id`, `created_at`, `updated_at`) VALUES
(39, 26, '2', '14', '2024-07-28 04:35:02', '2024-07-28 04:35:02'),
(40, 26, '3', '14', '2024-07-28 04:35:02', '2024-07-28 04:35:02'),
(41, 26, '5', '14', '2024-07-28 04:35:02', '2024-07-28 04:35:02'),
(42, 26, '15', '14', '2024-07-28 04:35:02', '2024-07-28 04:35:02'),
(43, 26, '16', '14', '2024-07-28 04:35:02', '2024-07-28 04:35:02'),
(44, 26, '17', '14', '2024-07-28 04:35:02', '2024-07-28 04:35:02'),
(45, 26, '45', '14', '2024-07-28 04:35:02', '2024-07-28 04:35:02'),
(46, 26, '46', '14', '2024-07-28 04:35:02', '2024-07-28 04:35:02'),
(47, 27, '3', '14', '2024-07-28 04:41:40', '2024-07-28 04:41:40'),
(48, 27, '5', '14', '2024-07-28 04:41:40', '2024-07-28 04:41:40'),
(49, 27, '32', '14', '2024-07-28 04:41:40', '2024-07-28 04:41:40'),
(50, 27, '33', '14', '2024-07-28 04:41:40', '2024-07-28 04:41:40'),
(51, 27, '34', '14', '2024-07-28 04:41:40', '2024-07-28 04:41:40'),
(52, 27, '0', '14', '2024-07-28 04:41:40', '2024-07-28 04:41:40'),
(53, 28, '2', '14', '2024-07-28 04:44:09', '2024-07-28 04:44:09'),
(54, 28, '3', '14', '2024-07-28 04:44:09', '2024-07-28 04:44:09'),
(55, 28, '7', '14', '2024-07-28 04:44:09', '2024-07-28 04:44:09'),
(56, 29, '2', '15', '2024-07-28 08:48:32', '2024-07-28 08:48:32'),
(57, 29, '3', '15', '2024-07-28 08:48:32', '2024-07-28 08:48:32'),
(58, 29, '5', '15', '2024-07-28 08:48:32', '2024-07-28 08:48:32'),
(59, 29, '43', '15', '2024-07-28 08:48:32', '2024-07-28 08:48:32'),
(60, 29, '45', '15', '2024-07-28 08:48:32', '2024-07-28 08:48:32'),
(61, 29, '46', '15', '2024-07-28 08:48:32', '2024-07-28 08:48:32'),
(62, 30, '2', '15', '2024-07-28 08:52:52', '2024-07-28 08:52:52'),
(63, 30, '3', '15', '2024-07-28 08:52:52', '2024-07-28 08:52:52'),
(64, 30, '45', '15', '2024-07-28 08:52:52', '2024-07-28 08:52:52'),
(65, 30, '46', '15', '2024-07-28 08:52:52', '2024-07-28 08:52:52'),
(66, 31, '2', '15', '2024-07-28 08:55:09', '2024-07-28 08:55:09'),
(67, 31, '3', '15', '2024-07-28 08:55:09', '2024-07-28 08:55:09'),
(68, 31, '5', '15', '2024-07-28 08:55:09', '2024-07-28 08:55:09'),
(69, 31, '6', '15', '2024-07-28 08:55:09', '2024-07-28 08:55:09'),
(70, 31, '45', '15', '2024-07-28 08:55:09', '2024-07-28 08:55:09'),
(71, 31, '46', '15', '2024-07-28 08:55:09', '2024-07-28 08:55:09'),
(72, 32, '1', '16', '2024-07-28 09:08:12', '2024-07-28 09:08:12'),
(73, 32, '2', '16', '2024-07-28 09:08:12', '2024-07-28 09:08:12'),
(74, 32, '3', '16', '2024-07-28 09:08:12', '2024-07-28 09:08:12'),
(75, 32, '4', '16', '2024-07-28 09:08:12', '2024-07-28 09:08:12'),
(76, 32, '5', '16', '2024-07-28 09:08:12', '2024-07-28 09:08:12'),
(77, 32, '22', '16', '2024-07-28 09:08:12', '2024-07-28 09:08:12'),
(78, 32, '25', '16', '2024-07-28 09:08:12', '2024-07-28 09:08:12'),
(79, 33, '1', '16', '2024-07-28 09:10:21', '2024-07-28 09:10:21'),
(80, 33, '2', '16', '2024-07-28 09:10:21', '2024-07-28 09:10:21'),
(81, 33, '3', '16', '2024-07-28 09:10:21', '2024-07-28 09:10:21'),
(82, 33, '4', '16', '2024-07-28 09:10:21', '2024-07-28 09:10:21'),
(83, 33, '5', '16', '2024-07-28 09:10:21', '2024-07-28 09:10:21'),
(84, 33, '23', '16', '2024-07-28 09:10:21', '2024-07-28 09:10:21'),
(85, 33, '24', '16', '2024-07-28 09:10:21', '2024-07-28 09:10:21'),
(86, 33, '45', '16', '2024-07-28 09:10:21', '2024-07-28 09:10:21'),
(87, 33, '46', '16', '2024-07-28 09:10:21', '2024-07-28 09:10:21'),
(88, 34, '1', '16', '2024-07-28 09:16:26', '2024-07-28 09:16:26'),
(89, 34, '2', '16', '2024-07-28 09:16:26', '2024-07-28 09:16:26'),
(90, 34, '3', '16', '2024-07-28 09:16:26', '2024-07-28 09:16:26'),
(91, 34, '4', '16', '2024-07-28 09:16:26', '2024-07-28 09:16:26'),
(92, 34, '5', '16', '2024-07-28 09:16:26', '2024-07-28 09:16:26'),
(93, 34, '6', '16', '2024-07-28 09:16:26', '2024-07-28 09:16:26'),
(94, 34, '23', '16', '2024-07-28 09:16:26', '2024-07-28 09:16:26'),
(95, 34, '24', '16', '2024-07-28 09:16:26', '2024-07-28 09:16:26'),
(96, 34, '45', '16', '2024-07-28 09:16:26', '2024-07-28 09:16:26'),
(97, 34, '46', '16', '2024-07-28 09:16:26', '2024-07-28 09:16:26'),
(98, 35, '1', '17', '2024-07-28 19:55:42', '2024-07-28 19:55:42'),
(99, 35, '2', '17', '2024-07-28 19:55:43', '2024-07-28 19:55:43'),
(100, 35, '3', '17', '2024-07-28 19:55:43', '2024-07-28 19:55:43'),
(101, 35, '4', '17', '2024-07-28 19:55:43', '2024-07-28 19:55:43'),
(102, 35, '5', '17', '2024-07-28 19:55:43', '2024-07-28 19:55:43'),
(103, 35, '6', '17', '2024-07-28 19:55:43', '2024-07-28 19:55:43'),
(104, 35, '7', '17', '2024-07-28 19:55:43', '2024-07-28 19:55:43'),
(105, 35, '8', '17', '2024-07-28 19:55:43', '2024-07-28 19:55:43'),
(106, 35, '9', '17', '2024-07-28 19:55:43', '2024-07-28 19:55:43'),
(107, 35, '10', '17', '2024-07-28 19:55:43', '2024-07-28 19:55:43'),
(108, 35, '11', '17', '2024-07-28 19:55:43', '2024-07-28 19:55:43'),
(109, 35, '12', '17', '2024-07-28 19:55:43', '2024-07-28 19:55:43'),
(110, 35, '13', '17', '2024-07-28 19:55:43', '2024-07-28 19:55:43'),
(111, 35, '14', '17', '2024-07-28 19:55:43', '2024-07-28 19:55:43'),
(112, 35, '15', '17', '2024-07-28 19:55:43', '2024-07-28 19:55:43'),
(113, 35, '16', '17', '2024-07-28 19:55:43', '2024-07-28 19:55:43'),
(114, 35, '17', '17', '2024-07-28 19:55:43', '2024-07-28 19:55:43'),
(115, 35, '18', '17', '2024-07-28 19:55:43', '2024-07-28 19:55:43'),
(116, 35, '19', '17', '2024-07-28 19:55:43', '2024-07-28 19:55:43'),
(117, 35, '20', '17', '2024-07-28 19:55:43', '2024-07-28 19:55:43'),
(118, 35, '21', '17', '2024-07-28 19:55:43', '2024-07-28 19:55:43'),
(119, 35, '22', '17', '2024-07-28 19:55:43', '2024-07-28 19:55:43'),
(120, 35, '23', '17', '2024-07-28 19:55:43', '2024-07-28 19:55:43'),
(121, 35, '24', '17', '2024-07-28 19:55:43', '2024-07-28 19:55:43'),
(122, 35, '25', '17', '2024-07-28 19:55:43', '2024-07-28 19:55:43'),
(123, 35, '26', '17', '2024-07-28 19:55:43', '2024-07-28 19:55:43'),
(124, 35, '27', '17', '2024-07-28 19:55:43', '2024-07-28 19:55:43'),
(125, 35, '28', '17', '2024-07-28 19:55:43', '2024-07-28 19:55:43'),
(126, 35, '29', '17', '2024-07-28 19:55:43', '2024-07-28 19:55:43'),
(127, 35, '30', '17', '2024-07-28 19:55:43', '2024-07-28 19:55:43'),
(128, 35, '31', '17', '2024-07-28 19:55:43', '2024-07-28 19:55:43'),
(129, 35, '32', '17', '2024-07-28 19:55:43', '2024-07-28 19:55:43'),
(130, 35, '33', '17', '2024-07-28 19:55:43', '2024-07-28 19:55:43'),
(131, 35, '34', '17', '2024-07-28 19:55:43', '2024-07-28 19:55:43'),
(132, 35, '35', '17', '2024-07-28 19:55:43', '2024-07-28 19:55:43'),
(133, 35, '36', '17', '2024-07-28 19:55:43', '2024-07-28 19:55:43'),
(134, 35, '37', '17', '2024-07-28 19:55:43', '2024-07-28 19:55:43'),
(135, 35, '38', '17', '2024-07-28 19:55:43', '2024-07-28 19:55:43'),
(136, 35, '39', '17', '2024-07-28 19:55:43', '2024-07-28 19:55:43'),
(137, 35, '40', '17', '2024-07-28 19:55:43', '2024-07-28 19:55:43'),
(138, 35, '41', '17', '2024-07-28 19:55:43', '2024-07-28 19:55:43'),
(139, 35, '42', '17', '2024-07-28 19:55:43', '2024-07-28 19:55:43'),
(140, 35, '43', '17', '2024-07-28 19:55:43', '2024-07-28 19:55:43'),
(141, 35, '44', '17', '2024-07-28 19:55:43', '2024-07-28 19:55:43'),
(142, 35, '45', '17', '2024-07-28 19:55:43', '2024-07-28 19:55:43'),
(143, 35, '46', '17', '2024-07-28 19:55:43', '2024-07-28 19:55:43');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `id` int(11) NOT NULL,
  `commodity_id` varchar(255) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `kilos` int(11) DEFAULT NULL,
  `value` double DEFAULT NULL,
  `pledged_kilos` int(11) DEFAULT NULL,
  `available_kilos` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `price_per_kilo` double DEFAULT NULL,
  `collateral_manager_id` bigint(20) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `ward_location` bigint(20) DEFAULT NULL,
  `warehouse` varchar(220) DEFAULT NULL,
  `warehouses_temp` varchar(220) DEFAULT NULL,
  `unit` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `commodity_id`, `client_id`, `kilos`, `value`, `pledged_kilos`, `available_kilos`, `created_at`, `updated_at`, `price_per_kilo`, `collateral_manager_id`, `status`, `ward_location`, `warehouse`, `warehouses_temp`, `unit`) VALUES
(37, '1', 9, 567, NULL, 1565, NULL, NULL, NULL, 7899, NULL, 'PENDING', NULL, '55', '55', 'Kg'),
(38, '4', 9, 1200, NULL, 4387, NULL, NULL, NULL, 6000, NULL, 'RELEASED', NULL, '56', '56', 'Kg'),
(39, '12', 9, 600, NULL, 1613, NULL, NULL, NULL, 2800, NULL, 'RELEASED', NULL, '56', '56', 'L'),
(40, '4', 9, 690, NULL, 4387, NULL, NULL, NULL, 6000, NULL, 'PENDING', NULL, '55', '55', 'Kg'),
(41, '12', 9, 500, NULL, 1613, NULL, NULL, NULL, 2800, NULL, 'PENDING', NULL, '56', '56', 'L'),
(42, '1', 18, 400, NULL, 8800, NULL, NULL, NULL, 1200, NULL, 'PENDING', NULL, '55', '55', 'Kg'),
(43, '2', 18, 700, NULL, 2800, NULL, NULL, NULL, 8000, NULL, 'PENDING', NULL, '56', '56', 'Kg'),
(44, '3', 19, 500, NULL, 300, NULL, NULL, NULL, 900, 26, 'PENDING', NULL, '62', '62', 'Kg'),
(45, '1', 18, 200, NULL, 8800, NULL, NULL, NULL, 1200, NULL, 'PENDING', NULL, '56', '56', 'Kg'),
(46, '11', 18, 800, NULL, 600, NULL, NULL, NULL, 2300, NULL, 'PENDING', NULL, '56', '56', 'L'),
(47, '1', 19, 600, NULL, NULL, NULL, NULL, NULL, 1200, NULL, 'PENDING', NULL, '55', '55', 'Kg');

-- --------------------------------------------------------

--
-- Table structure for table `stock_flows`
--

CREATE TABLE `stock_flows` (
  `id` int(11) NOT NULL,
  `inn_kilos` double DEFAULT NULL,
  `out_kilos` double DEFAULT NULL,
  `commodit_id` int(11) DEFAULT NULL,
  `ward_id` int(11) DEFAULT NULL,
  `desriptions` text DEFAULT NULL,
  `action_name` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `collateral_manager_id` bigint(20) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `stock_id` int(11) DEFAULT NULL,
  `farmer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stock_flows`
--

INSERT INTO `stock_flows` (`id`, `inn_kilos`, `out_kilos`, `commodit_id`, `ward_id`, `desriptions`, `action_name`, `created_at`, `updated_at`, `collateral_manager_id`, `price`, `stock_id`, `farmer_id`) VALUES
(1, 30, 0, 6, 23, 'register new stocks', 'stock storage', '2024-03-06 15:18:41', '2024-03-06 15:18:41', 123, NULL, NULL, NULL),
(2, 0, 50, 2, 23, 'register new stocks', 'stock storage', '2024-03-08 10:22:49', '2024-03-08 10:22:49', 123, NULL, NULL, NULL),
(3, 100, 0, 2, 23, 'register new stocks', 'stock storage', '2024-03-08 10:22:49', '2024-03-08 10:22:49', 123, NULL, NULL, NULL),
(4, 4000, 0, 3, 23, 'register new stocks', 'stock storage', '2024-03-11 10:04:50', '2024-03-11 10:04:50', 123, NULL, NULL, NULL),
(5, 50000, 0, 6, 23, 'register new stocks', 'stock storage', '2024-03-11 13:46:34', '2024-03-11 13:46:34', 123, NULL, NULL, NULL),
(6, 3000, 0, 7, 23, 'register new stocks', 'stock storage', '2024-03-11 14:19:45', '2024-03-11 14:19:45', 123, NULL, NULL, NULL),
(7, 4000, 0, 7, 23, 'register new stocks', 'stock storage', '2024-03-11 14:22:24', '2024-03-11 14:22:24', 123, NULL, NULL, NULL),
(8, 4790, 0, 9, 23, 'register new stocks', 'stock storage', '2024-03-12 05:51:33', '2024-03-12 05:51:33', 123, NULL, NULL, NULL),
(9, 0, 4000, 3, 23, 'Stock  has been released', 'stock_release', '2024-03-12 07:17:32', '2024-03-12 07:17:32', 123, 300, NULL, NULL),
(10, 4000, 0, 1, 637, 'register new stocks', 'stock storage', '2024-03-12 09:15:51', '2024-03-12 09:15:51', 15, NULL, NULL, NULL),
(11, 111, 0, 5, 637, 'register new stocks', 'stock storage', '2024-03-12 11:51:05', '2024-03-12 11:51:05', 15, NULL, NULL, NULL),
(12, 38000, 0, 8, NULL, 'register new stocks', 'stock storage', '2024-03-15 10:59:08', '2024-03-15 10:59:08', NULL, NULL, NULL, NULL),
(13, 30000, 0, 1, NULL, 'register new stocks', 'stock storage', '2024-03-19 14:59:29', '2024-03-19 14:59:29', NULL, NULL, NULL, NULL),
(14, 2000, 0, 7, NULL, 'register new stocks', 'stock storage', '2024-03-24 08:05:34', '2024-03-24 08:05:34', NULL, NULL, 31, 2);

-- --------------------------------------------------------

--
-- Table structure for table `stock_prices`
--

CREATE TABLE `stock_prices` (
  `id` int(11) NOT NULL,
  `stock_id` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `recorded_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stock_prices`
--

INSERT INTO `stock_prices` (`id`, `stock_id`, `price`, `recorded_at`, `updated_at`, `created_at`) VALUES
(1, 19, 6700.00, '2024-07-18 07:32:11', '2024-07-18 10:32:11', '2024-07-18 10:32:11'),
(2, 19, 9800.00, '2024-07-17 05:32:11', '2024-07-17 10:32:11', '2024-07-17 10:32:11'),
(3, 19, 6900.00, '2024-07-16 06:32:11', '2024-07-16 10:32:11', '2024-07-16 10:32:11'),
(4, 19, 7000.00, '2024-07-15 07:32:11', '2024-07-15 10:32:11', '2024-07-15 10:32:11'),
(5, 19, 7100.00, '2024-07-14 08:32:11', '2024-07-14 10:32:11', '2024-07-14 10:32:11'),
(6, 19, 7200.00, '2024-07-13 09:32:11', '2024-07-13 10:32:11', '2024-07-13 10:32:11'),
(7, 19, 699.00, '2024-07-12 10:32:11', '2024-07-12 10:32:11', '2024-07-12 10:32:11'),
(8, 19, 7400.00, '2024-07-11 11:32:11', '2024-07-11 10:32:11', '2024-07-11 10:32:11'),
(9, 19, 7500.00, '2024-07-10 12:32:11', '2024-07-10 10:32:11', '2024-07-10 10:32:11'),
(10, 19, 7889.00, '2024-07-09 13:32:11', '2024-07-09 10:32:11', '2024-07-09 10:32:11'),
(11, 19, 7700.00, '2024-07-08 14:32:11', '2024-07-08 10:32:11', '2024-07-08 10:32:11'),
(12, 19, 7800.00, '2024-07-07 15:32:11', '2024-07-07 10:32:11', '2024-07-07 10:32:11'),
(13, 19, 4000.00, '2024-07-06 16:32:11', '2024-07-06 10:32:11', '2024-07-06 10:32:11'),
(14, 19, 8000.00, '2024-07-05 17:32:11', '2024-07-05 10:32:11', '2024-07-05 10:32:11'),
(15, 19, 11000.00, '2024-07-04 18:32:11', '2024-07-04 10:32:11', '2024-07-04 10:32:11'),
(16, 19, 8200.00, '2024-07-03 19:32:11', '2024-07-03 10:32:11', '2024-07-03 10:32:11'),
(17, 19, 4657.00, '2024-07-02 20:32:11', '2024-07-02 10:32:11', '2024-07-02 10:32:11'),
(18, 19, 8400.00, '2024-06-30 21:32:11', '2024-07-01 10:32:11', '2024-07-01 10:32:11'),
(19, 19, 8500.00, '2024-06-29 22:32:11', '2024-06-30 10:32:11', '2024-06-30 10:32:11'),
(20, 19, 700.00, '2024-06-28 23:32:11', '2024-06-29 10:32:11', '2024-06-29 10:32:11'),
(21, 19, 8700.00, '2024-06-28 00:32:11', '2024-06-28 10:32:11', '2024-06-28 10:32:11'),
(22, 1, 7899.00, '2024-07-19 03:45:39', '2024-07-19 06:45:39', '2024-07-19 06:45:39'),
(23, 2, 7800.00, '2024-07-19 03:45:41', '2024-07-19 06:45:41', '2024-07-19 06:45:41'),
(24, 1, 1200.00, '2024-07-22 09:32:55', '2024-07-22 12:32:55', '2024-07-22 12:32:55'),
(25, 2, 8000.00, '2024-07-22 14:50:55', '2024-07-22 17:50:55', '2024-07-22 17:50:55');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subscriber_name` varchar(255) DEFAULT NULL,
  `subscriber_phone_number` varchar(255) DEFAULT NULL,
  `subscriber_email` varchar(255) DEFAULT NULL,
  `subscribers_id` varchar(255) DEFAULT NULL,
  `source_id` varchar(255) DEFAULT NULL,
  `Status` varchar(220) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `subscriber_name`, `subscriber_phone_number`, `subscriber_email`, `subscribers_id`, `source_id`, `Status`, `created_at`, `updated_at`) VALUES
(1, 'ANDREW MASHAMBA', '0754244888', 'andrew.s.mashamba@gmail.com', NULL, '1', 'ACTIVE', '2024-08-15 03:30:59', '2024-08-15 03:30:59'),
(2, 'PERCY EGNO', '255624451311', 'percyegno@gmail.com', NULL, '1', 'ACTIVE', '2024-08-15 12:18:53', '2024-08-15 12:18:53');

-- --------------------------------------------------------

--
-- Table structure for table `subsidy`
--

CREATE TABLE `subsidy` (
  `id` int(11) NOT NULL,
  `subsidy_id` bigint(20) NOT NULL,
  `account_name` bigint(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subsidy`
--

INSERT INTO `subsidy` (`id`, `subsidy_id`, `account_name`, `name`, `created_at`, `updated_at`) VALUES
(1, 4400, 4410, 'Government Conditional Grants', '2023-08-09 19:17:18', '2023-08-09 19:17:18'),
(2, 4400, 4420, 'conditional grants from private institutions', '2023-08-09 19:17:18', '2023-08-09 19:17:18'),
(3, 4400, 4430, 'unconditional grants', '2023-08-09 19:17:18', '2023-08-09 19:17:18'),
(4, 4400, 4440, 'contributions from individuals', '2023-08-09 19:17:18', '2023-08-09 19:17:18'),
(5, 4400, 4450, 'other contributions', '2023-08-09 19:17:18', '2023-08-09 19:17:18');

-- --------------------------------------------------------

--
-- Table structure for table `sub_menus`
--

CREATE TABLE `sub_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `system_id` int(10) UNSIGNED DEFAULT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `sub_menu_name` varchar(100) DEFAULT NULL,
  `user_action` varchar(100) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_menus`
--

INSERT INTO `sub_menus` (`id`, `system_id`, `menu_id`, `sub_menu_name`, `user_action`, `position`, `created_at`, `updated_at`) VALUES
(1, 1, 13, 'Can Register Stocks', 'Can Register Stocks', 35, NULL, NULL),
(2, 1, 13, 'Can View Releases Stocks Report', 'Can View Releases Stocks Report', 35, NULL, NULL),
(3, 1, 13, 'Can Views Stock Reports', 'Can Views Stock Reports', 35, NULL, NULL),
(4, 1, 2, 'Can View Farmer Details', 'Can View Farmer Details', 35, NULL, NULL),
(5, 1, 13, 'Can View Collateral Releases', 'Can View Collateral Releases', 35, NULL, NULL),
(6, 1, 9, 'Can Create System User', 'Can Create System User', 35, NULL, NULL),
(7, 1, 9, 'Can Update System User', 'Can Update System User', 35, NULL, NULL),
(8, 1, 9, 'Can Delete System User', 'Can Delete System User', 35, NULL, NULL),
(9, 1, 9, 'Can Manages Roles And System Permissions', 'Can Manages Roles And System Permissions', 35, NULL, NULL),
(10, 1, 10, 'Can Create Collateral Managers', 'Can Create Collateral Managers', 35, NULL, NULL),
(11, 1, 10, 'Can Update Collateral Managers', 'Can Update Collateral Managers', 35, NULL, NULL),
(12, 1, 10, 'Can Delete Collateral Managers', 'Can Delete Collateral Managers', 35, NULL, NULL),
(13, 1, 13, 'Can Request Releases Stocks', 'Can Request Releases Stocks', 35, NULL, NULL),
(14, 1, 2, 'Can Create Farmer', 'Can Create Farmer', 35, NULL, NULL),
(15, 1, 2, 'Can Update Farmer', 'Can Update Farmer', 35, NULL, NULL),
(16, 1, 2, 'Can Delete Farmer', 'Can Delete Farmer', 35, NULL, NULL),
(17, 1, 10, 'Can View Collateral Managers', 'Can View Collateral Managers', 35, NULL, NULL),
(18, 1, 11, 'Can Create Commodity', 'Can Create Commodity', 35, NULL, NULL),
(19, 1, 11, 'Can Update Commodity Prices', 'Can Update Commodity Prices', 35, NULL, NULL),
(20, 1, 11, 'Can Delete Commodity', 'Can Delete Commodity', 35, NULL, NULL),
(21, 1, 11, 'Can View Commodity', 'Can View Commodity', 35, NULL, NULL),
(22, 1, 12, 'Can Approves Releases Stocks', 'Can Approves Releases Stocks', 35, NULL, NULL),
(23, 1, 12, 'Can Rejects Release Requests', 'Can Rejects Release Requests', 35, NULL, NULL),
(24, 1, 13, 'Can Releases Stocks', 'Can Releases Stocks', 35, NULL, NULL),
(25, 1, 13, 'Notifications', 'Notifications', 35, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sub_products`
--

CREATE TABLE `sub_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(50) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `default_status` int(11) DEFAULT NULL,
  `sub_product_name` varchar(50) DEFAULT NULL,
  `sub_product_id` varchar(50) DEFAULT NULL,
  `sub_product_status` tinyint(4) DEFAULT NULL,
  `currency` varchar(50) DEFAULT NULL,
  `deposit` tinyint(4) DEFAULT NULL,
  `deposit_charge` double(8,2) DEFAULT NULL,
  `deposit_charge_min_value` double(8,2) DEFAULT NULL,
  `deposit_charge_max_value` double(8,2) DEFAULT NULL,
  `withdraw` tinyint(4) DEFAULT NULL,
  `withdraw_charge` double(8,2) DEFAULT NULL,
  `withdraw_charge_min_value` double(8,2) DEFAULT NULL,
  `withdraw_charge_max_value` double(8,2) DEFAULT NULL,
  `interest_value` double(8,2) DEFAULT NULL,
  `interest_tenure` double(8,2) DEFAULT NULL,
  `maintenance_fees` double(8,2) DEFAULT NULL,
  `maintenance_fees_value` double(8,2) DEFAULT NULL,
  `profit_account` varchar(255) DEFAULT NULL,
  `inactivity` varchar(50) DEFAULT NULL,
  `create_during_registration` tinyint(4) DEFAULT NULL,
  `activated_by_lower_limit` tinyint(4) DEFAULT NULL,
  `requires_approval` tinyint(4) DEFAULT NULL,
  `generate_atm_card_profile` tinyint(4) DEFAULT NULL,
  `allow_statement_generation` tinyint(4) DEFAULT NULL,
  `send_notifications` tinyint(4) DEFAULT NULL,
  `require_image_member` tinyint(4) DEFAULT NULL,
  `require_image_id` tinyint(4) DEFAULT NULL,
  `require_mobile_number` tinyint(4) DEFAULT NULL,
  `generate_mobile_profile` tinyint(4) DEFAULT NULL,
  `notes` varchar(120) DEFAULT NULL,
  `interest` int(11) DEFAULT NULL,
  `ledger_fees` tinyint(4) DEFAULT NULL,
  `ledger_fees_value` double(8,2) DEFAULT NULL,
  `total_shares` int(11) DEFAULT NULL,
  `shares_per_member` int(11) DEFAULT NULL,
  `nominal_price` double(8,2) DEFAULT NULL,
  `shares_allocated` double(8,2) DEFAULT NULL,
  `available_shares` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_products`
--

INSERT INTO `sub_products` (`id`, `product_name`, `product_id`, `default_status`, `sub_product_name`, `sub_product_id`, `sub_product_status`, `currency`, `deposit`, `deposit_charge`, `deposit_charge_min_value`, `deposit_charge_max_value`, `withdraw`, `withdraw_charge`, `withdraw_charge_min_value`, `withdraw_charge_max_value`, `interest_value`, `interest_tenure`, `maintenance_fees`, `maintenance_fees_value`, `profit_account`, `inactivity`, `create_during_registration`, `activated_by_lower_limit`, `requires_approval`, `generate_atm_card_profile`, `allow_statement_generation`, `send_notifications`, `require_image_member`, `require_image_id`, `require_mobile_number`, `generate_mobile_profile`, `notes`, `interest`, `ledger_fees`, `ledger_fees_value`, `total_shares`, `shares_per_member`, `nominal_price`, `shares_allocated`, `available_shares`, `created_at`, `updated_at`) VALUES
(1, '', 11, NULL, 'HISA ZA MALENGO', '1178', 0, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'FAMILY SAVING', '18', 1, 1, 1, 1, 1, 1, 1, 0, 0, 1, 'HISA ZA MALENGO', NULL, NULL, NULL, 500000, 10, 2000.00, NULL, 5000.00, '2023-07-02 07:46:53', '2023-08-17 12:55:08'),
(8, '', 12, NULL, 'DEMO SAVING', '1266', 0, '1', 0, 500.00, NULL, NULL, 0, 1.00, NULL, NULL, 6.00, 12.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'PRODUCT', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-08 09:05:29', '2023-08-08 09:05:29'),
(9, '', 13, NULL, 'DEPO TEST', '1367', 0, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-08 09:21:38', '2023-08-08 09:21:38');

-- --------------------------------------------------------

--
-- Table structure for table `team_user`
--

CREATE TABLE `team_user` (
  `id` bigint(20) NOT NULL,
  `institution` int(11) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `team_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `temp_permissions`
--

CREATE TABLE `temp_permissions` (
  `id` bigint(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `t1` int(11) DEFAULT NULL,
  `t2` int(11) DEFAULT NULL,
  `t3` int(11) DEFAULT NULL,
  `t4` int(11) DEFAULT NULL,
  `t5` int(11) DEFAULT NULL,
  `t6` int(11) DEFAULT NULL,
  `t7` int(11) DEFAULT NULL,
  `t8` int(11) DEFAULT NULL,
  `t9` int(11) DEFAULT NULL,
  `t10` int(11) DEFAULT NULL,
  `t11` int(11) DEFAULT NULL,
  `t12` int(11) DEFAULT NULL,
  `t13` int(11) DEFAULT NULL,
  `t14` int(11) DEFAULT NULL,
  `t15` int(11) DEFAULT NULL,
  `t16` int(11) DEFAULT NULL,
  `t17` int(11) DEFAULT NULL,
  `t18` int(11) DEFAULT NULL,
  `t19` int(11) DEFAULT NULL,
  `t20` int(11) DEFAULT NULL,
  `t21` int(11) DEFAULT NULL,
  `t22` int(11) DEFAULT NULL,
  `t23` int(11) DEFAULT NULL,
  `t24` int(11) DEFAULT NULL,
  `t25` int(11) DEFAULT NULL,
  `t26` int(11) DEFAULT NULL,
  `t27` int(11) DEFAULT NULL,
  `t28` int(11) DEFAULT NULL,
  `t29` int(11) DEFAULT NULL,
  `t30` int(11) DEFAULT NULL,
  `t31` int(11) DEFAULT NULL,
  `t32` int(11) DEFAULT NULL,
  `t33` int(11) DEFAULT NULL,
  `t34` int(11) DEFAULT NULL,
  `t35` int(11) DEFAULT NULL,
  `t36` int(11) DEFAULT NULL,
  `t37` int(11) DEFAULT NULL,
  `t38` int(11) DEFAULT NULL,
  `t39` int(11) DEFAULT NULL,
  `t40` int(11) DEFAULT NULL,
  `t41` int(11) DEFAULT NULL,
  `t42` int(11) DEFAULT NULL,
  `t43` int(11) DEFAULT NULL,
  `t44` int(11) DEFAULT NULL,
  `t45` int(11) DEFAULT NULL,
  `t46` int(11) DEFAULT NULL,
  `t47` int(11) DEFAULT NULL,
  `t48` int(11) DEFAULT NULL,
  `t49` int(11) DEFAULT NULL,
  `t50` int(11) DEFAULT NULL,
  `t51` int(11) DEFAULT NULL,
  `t52` int(11) DEFAULT NULL,
  `t53` int(11) DEFAULT NULL,
  `t54` int(11) DEFAULT NULL,
  `t55` int(11) DEFAULT NULL,
  `t56` int(11) DEFAULT NULL,
  `t57` int(11) DEFAULT NULL,
  `t58` int(11) DEFAULT NULL,
  `t59` int(11) DEFAULT NULL,
  `t60` int(11) DEFAULT NULL,
  `t61` int(11) DEFAULT NULL,
  `t62` int(11) DEFAULT NULL,
  `t63` int(11) DEFAULT NULL,
  `t64` int(11) DEFAULT NULL,
  `t65` int(11) DEFAULT NULL,
  `t66` int(11) DEFAULT NULL,
  `t67` int(11) DEFAULT NULL,
  `t68` int(11) DEFAULT NULL,
  `t69` int(11) DEFAULT NULL,
  `t70` int(11) DEFAULT NULL,
  `t71` int(11) DEFAULT NULL,
  `t72` int(11) DEFAULT NULL,
  `t73` int(11) DEFAULT NULL,
  `t74` int(11) DEFAULT NULL,
  `t75` int(11) DEFAULT NULL,
  `t76` int(11) DEFAULT NULL,
  `t77` int(11) DEFAULT NULL,
  `t78` int(11) DEFAULT NULL,
  `t79` int(11) DEFAULT NULL,
  `t80` int(11) DEFAULT NULL,
  `t81` int(11) DEFAULT NULL,
  `t82` int(11) DEFAULT NULL,
  `t83` int(11) DEFAULT NULL,
  `t84` int(11) DEFAULT NULL,
  `t85` int(11) DEFAULT NULL,
  `t86` int(11) DEFAULT NULL,
  `t87` int(11) DEFAULT NULL,
  `t88` int(11) DEFAULT NULL,
  `t89` int(11) DEFAULT NULL,
  `t90` int(11) DEFAULT NULL,
  `t91` int(11) DEFAULT NULL,
  `t92` int(11) DEFAULT NULL,
  `t93` int(11) DEFAULT NULL,
  `t94` int(11) DEFAULT NULL,
  `t95` int(11) DEFAULT NULL,
  `t96` int(11) DEFAULT NULL,
  `t97` int(11) DEFAULT NULL,
  `t98` int(11) DEFAULT NULL,
  `t99` int(11) DEFAULT NULL,
  `t100` int(11) DEFAULT NULL,
  `t101` int(11) DEFAULT NULL,
  `t102` int(11) DEFAULT NULL,
  `t103` int(11) DEFAULT NULL,
  `t104` int(11) DEFAULT NULL,
  `t105` int(11) DEFAULT NULL,
  `t106` int(11) DEFAULT NULL,
  `t107` int(11) DEFAULT NULL,
  `t108` int(11) DEFAULT NULL,
  `t109` int(11) DEFAULT NULL,
  `t110` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `t111` int(11) DEFAULT NULL,
  `t112` int(11) DEFAULT NULL,
  `t113` int(11) DEFAULT NULL,
  `t114` int(11) DEFAULT NULL,
  `t115` int(11) DEFAULT NULL,
  `t116` int(11) DEFAULT NULL,
  `t117` int(11) DEFAULT NULL,
  `t118` int(11) DEFAULT NULL,
  `t119` int(11) DEFAULT NULL,
  `t120` int(11) DEFAULT NULL,
  `t121` int(11) DEFAULT NULL,
  `t122` int(11) DEFAULT NULL,
  `t123` int(11) DEFAULT NULL,
  `t124` int(11) DEFAULT NULL,
  `t125` int(11) DEFAULT NULL,
  `t126` int(11) DEFAULT NULL,
  `t127` int(11) DEFAULT NULL,
  `t128` int(11) DEFAULT NULL,
  `t129` int(11) DEFAULT NULL,
  `t130` int(11) DEFAULT NULL,
  `t131` int(11) DEFAULT NULL,
  `t132` int(11) DEFAULT NULL,
  `t133` int(11) DEFAULT NULL,
  `t134` int(11) DEFAULT NULL,
  `t135` int(11) DEFAULT NULL,
  `t136` int(11) DEFAULT NULL,
  `t137` int(11) DEFAULT NULL,
  `t138` int(11) DEFAULT NULL,
  `t139` int(11) DEFAULT NULL,
  `t140` int(11) DEFAULT NULL,
  `t141` int(11) DEFAULT NULL,
  `t142` int(11) DEFAULT NULL,
  `t143` int(11) DEFAULT NULL,
  `t144` int(11) DEFAULT NULL,
  `t145` int(11) DEFAULT NULL,
  `t146` int(11) DEFAULT NULL,
  `t147` int(11) DEFAULT NULL,
  `t148` int(11) DEFAULT NULL,
  `t149` int(11) DEFAULT NULL,
  `t150` int(11) DEFAULT NULL,
  `t151` int(11) DEFAULT NULL,
  `t152` int(11) DEFAULT NULL,
  `t153` int(11) DEFAULT NULL,
  `t154` int(11) DEFAULT NULL,
  `t155` int(11) DEFAULT NULL,
  `t156` int(11) DEFAULT NULL,
  `t157` int(11) DEFAULT NULL,
  `t158` int(11) DEFAULT NULL,
  `t159` int(11) DEFAULT NULL,
  `t160` int(11) DEFAULT NULL,
  `t161` int(11) DEFAULT NULL,
  `t162` int(11) DEFAULT NULL,
  `t163` int(11) DEFAULT NULL,
  `t164` int(11) DEFAULT NULL,
  `t165` int(11) DEFAULT NULL,
  `t166` int(11) DEFAULT NULL,
  `t167` int(11) DEFAULT NULL,
  `t168` int(11) DEFAULT NULL,
  `t169` int(11) DEFAULT NULL,
  `t170` int(11) DEFAULT NULL,
  `t171` int(11) DEFAULT NULL,
  `t172` int(11) DEFAULT NULL,
  `t173` int(11) DEFAULT NULL,
  `t174` int(11) DEFAULT NULL,
  `t175` int(11) DEFAULT NULL,
  `t176` int(11) DEFAULT NULL,
  `t177` int(11) DEFAULT NULL,
  `t178` int(11) DEFAULT NULL,
  `t179` int(11) DEFAULT NULL,
  `t180` int(11) DEFAULT NULL,
  `t181` int(11) DEFAULT NULL,
  `t182` int(11) DEFAULT NULL,
  `t183` int(11) DEFAULT NULL,
  `t184` int(11) DEFAULT NULL,
  `t185` int(11) DEFAULT NULL,
  `t186` int(11) DEFAULT NULL,
  `t187` int(11) DEFAULT NULL,
  `t188` int(11) DEFAULT NULL,
  `t189` int(11) DEFAULT NULL,
  `t190` int(11) DEFAULT NULL,
  `t191` int(11) DEFAULT NULL,
  `t192` int(11) DEFAULT NULL,
  `t193` int(11) DEFAULT NULL,
  `t194` int(11) DEFAULT NULL,
  `t195` int(11) DEFAULT NULL,
  `t196` int(11) DEFAULT NULL,
  `t197` int(11) DEFAULT NULL,
  `t198` int(11) DEFAULT NULL,
  `t199` int(11) DEFAULT NULL,
  `t200` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `temp_permissions`
--

INSERT INTO `temp_permissions` (`id`, `user_id`, `t1`, `t2`, `t3`, `t4`, `t5`, `t6`, `t7`, `t8`, `t9`, `t10`, `t11`, `t12`, `t13`, `t14`, `t15`, `t16`, `t17`, `t18`, `t19`, `t20`, `t21`, `t22`, `t23`, `t24`, `t25`, `t26`, `t27`, `t28`, `t29`, `t30`, `t31`, `t32`, `t33`, `t34`, `t35`, `t36`, `t37`, `t38`, `t39`, `t40`, `t41`, `t42`, `t43`, `t44`, `t45`, `t46`, `t47`, `t48`, `t49`, `t50`, `t51`, `t52`, `t53`, `t54`, `t55`, `t56`, `t57`, `t58`, `t59`, `t60`, `t61`, `t62`, `t63`, `t64`, `t65`, `t66`, `t67`, `t68`, `t69`, `t70`, `t71`, `t72`, `t73`, `t74`, `t75`, `t76`, `t77`, `t78`, `t79`, `t80`, `t81`, `t82`, `t83`, `t84`, `t85`, `t86`, `t87`, `t88`, `t89`, `t90`, `t91`, `t92`, `t93`, `t94`, `t95`, `t96`, `t97`, `t98`, `t99`, `t100`, `t101`, `t102`, `t103`, `t104`, `t105`, `t106`, `t107`, `t108`, `t109`, `t110`, `created_at`, `updated_at`, `t111`, `t112`, `t113`, `t114`, `t115`, `t116`, `t117`, `t118`, `t119`, `t120`, `t121`, `t122`, `t123`, `t124`, `t125`, `t126`, `t127`, `t128`, `t129`, `t130`, `t131`, `t132`, `t133`, `t134`, `t135`, `t136`, `t137`, `t138`, `t139`, `t140`, `t141`, `t142`, `t143`, `t144`, `t145`, `t146`, `t147`, `t148`, `t149`, `t150`, `t151`, `t152`, `t153`, `t154`, `t155`, `t156`, `t157`, `t158`, `t159`, `t160`, `t161`, `t162`, `t163`, `t164`, `t165`, `t166`, `t167`, `t168`, `t169`, `t170`, `t171`, `t172`, `t173`, `t174`, `t175`, `t176`, `t177`, `t178`, `t179`, `t180`, `t181`, `t182`, `t183`, `t184`, `t185`, `t186`, `t187`, `t188`, `t189`, `t190`, `t191`, `t192`, `t193`, `t194`, `t195`, `t196`, `t197`, `t198`, `t199`, `t200`) VALUES
(16, 32, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-16 19:55:14', '2024-07-16 19:55:14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `terms_and_conditions`
--

CREATE TABLE `terms_and_conditions` (
  `id` int(11) NOT NULL,
  `product_catalog_id` int(11) NOT NULL,
  `terms_condition_number` varchar(20) NOT NULL,
  `description` varchar(255) NOT NULL,
  `tc_effective_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `selected` int(11) NOT NULL,
  `team_id` varchar(50) DEFAULT NULL,
  `service_id` varchar(50) NOT NULL,
  `order_id` varchar(50) DEFAULT NULL,
  `order_number` varchar(50) DEFAULT NULL,
  `source_branch_id` varchar(255) DEFAULT NULL,
  `source_branch_name` varchar(255) DEFAULT NULL,
  `source_branch_account_number` varchar(255) DEFAULT NULL,
  `destination_branch_id` varchar(255) DEFAULT NULL,
  `destination_branch_name` varchar(255) DEFAULT NULL,
  `destination_branch_account_number` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `transaction_amount` varchar(255) DEFAULT NULL,
  `credit` varchar(255) DEFAULT NULL,
  `debit` varchar(255) DEFAULT NULL,
  `reference_number` varchar(255) DEFAULT NULL,
  `month_of_payment` varchar(50) NOT NULL,
  `year_of_payment` varchar(50) NOT NULL,
  `trans_status` varchar(50) DEFAULT NULL,
  `trans_status_description` text DEFAULT NULL,
  `phone_number` varchar(50) DEFAULT NULL,
  `institution` varchar(50) DEFAULT NULL,
  `institution_name` varchar(50) DEFAULT NULL,
  `beneficiary_nane` varchar(120) DEFAULT NULL,
  `typeOfTransfer` varchar(50) DEFAULT NULL,
  `swift_code` varchar(50) DEFAULT NULL,
  `destination_bank_name` varchar(120) DEFAULT NULL,
  `destination_bank_number` varchar(50) DEFAULT NULL,
  `ordering_customer` varchar(120) DEFAULT NULL,
  `issuer_name` varchar(120) DEFAULT NULL,
  `employee_name` varchar(120) DEFAULT NULL,
  `sender_name` varchar(120) DEFAULT NULL,
  `payment_status` varchar(120) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nida_number` bigint(20) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` int(11) DEFAULT NULL,
  `profile_photo_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `otp_time` time DEFAULT NULL,
  `otp` int(11) DEFAULT NULL,
  `verification_status` varchar(255) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `employeeId` int(11) DEFAULT NULL,
  `department` int(11) NOT NULL,
  `branch` int(11) DEFAULT NULL,
  `institution_id` int(11) DEFAULT NULL,
  `last_update_password` datetime NOT NULL DEFAULT current_timestamp(),
  `collateral_manager_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `nida_number`, `email_verified_at`, `password`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `role`, `status`, `otp_time`, `otp`, `verification_status`, `phone_number`, `employeeId`, `department`, `branch`, `institution_id`, `last_update_password`, `collateral_manager_id`) VALUES
(32, 'ADMIN', 'admin@gmail.com', 94984284248242, NULL, '$2y$10$ehEE6ZXyBweJ0G2eU4u.GerUqMsrkc6o1FtmLbRgL0BbYH4woEk32', NULL, NULL, NULL, '2023-08-13 11:35:20', '2024-07-02 13:22:39', NULL, NULL, NULL, '10', 'ACTIVE', '16:22:39', 111111, '0', '0767582817', 900029, 1, 25, 8, '2023-11-24 08:06:15', NULL),
(58, 'Andrew', 'andrew.s.mashamba@gmail.com', NULL, NULL, '$2y$10$ehEE6ZXyBweJ0G2eU4u.GerUqMsrkc6o1FtmLbRgL0BbYH4woEk32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ACTIVE', NULL, NULL, '0', NULL, NULL, 1, 25, NULL, '2024-07-29 05:21:38', 24);

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menus`
--

CREATE TABLE `user_sub_menus` (
  `ID` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `sub_menu_id` int(11) DEFAULT NULL,
  `permission` varchar(50) DEFAULT NULL,
  `updated` int(11) DEFAULT NULL,
  `previous` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wards`
--

CREATE TABLE `wards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ward_name` varchar(255) DEFAULT NULL,
  `district_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wards`
--

INSERT INTO `wards` (`id`, `ward_name`, `district_id`, `created_at`, `updated_at`) VALUES
(1, 'Babayu', '13', NULL, NULL),
(2, 'Bahi', '13', NULL, NULL),
(3, 'Chali', '13', NULL, NULL),
(4, 'Chibelela', '13', NULL, NULL),
(5, 'Chikola', '13', NULL, NULL),
(6, 'Chipanga', '13', NULL, NULL),
(7, 'Ibihwa', '13', NULL, NULL),
(8, 'Ibugule', '13', NULL, NULL),
(9, 'Ilindi', '13', NULL, NULL),
(10, 'Kigwe', '13', NULL, NULL),
(11, 'Lamaiti', '13', NULL, NULL),
(12, 'Makanda', '13', NULL, NULL),
(13, 'Mpalanga', '13', NULL, NULL),
(14, 'Mpamantwa', '13', NULL, NULL),
(15, 'Msisi', '13', NULL, NULL),
(16, 'Mtitaa', '13', NULL, NULL),
(17, 'Mundemu', '13', NULL, NULL),
(18, 'Mwitikira', '13', NULL, NULL),
(19, 'Nondwa', '13', NULL, NULL),
(20, 'Zanka', '13', NULL, NULL),
(21, 'Buigiri', '14', NULL, NULL),
(22, 'Chiboli', '14', NULL, NULL),
(23, 'Chilonwa', '14', NULL, NULL),
(24, 'Chinugulu', '14', NULL, NULL),
(25, 'Dabalo', '14', NULL, NULL),
(26, 'Fufu', '14', NULL, NULL),
(27, 'Handali', '14', NULL, NULL),
(28, 'Haneti', '14', NULL, NULL),
(29, 'Huzi', '14', NULL, NULL),
(30, 'Idifu', '14', NULL, NULL),
(31, 'Igandu', '14', NULL, NULL),
(32, 'Ikowa', '14', NULL, NULL),
(33, 'Iringa Mvumi Zamani', '14', NULL, NULL),
(34, 'Itiso', '14', NULL, NULL),
(35, 'Loje', '14', NULL, NULL),
(36, 'Majeleko', '14', NULL, NULL),
(37, 'Makang\'wa', '14', NULL, NULL),
(38, 'Manchali', '14', NULL, NULL),
(39, 'Manda', '14', NULL, NULL),
(40, 'Manzase', '14', NULL, NULL),
(41, 'Membe', '14', NULL, NULL),
(42, 'Mlowa Bwawani', '14', NULL, NULL),
(43, 'Mpwayungu', '14', NULL, NULL),
(44, 'Msamalo', '14', NULL, NULL),
(45, 'Msanga', '14', NULL, NULL),
(46, 'Muungano', '14', NULL, NULL),
(47, 'Mvumi Makulu', '14', NULL, NULL),
(48, 'Mvumi Mission', '14', NULL, NULL),
(49, 'Nghambaku', '14', NULL, NULL),
(50, 'Nhinhi', '14', NULL, NULL),
(51, 'Segala', '14', NULL, NULL),
(52, 'Zajilwa', '14', NULL, NULL),
(53, 'Chandama', '15', NULL, NULL),
(54, 'Chemba', '15', NULL, NULL),
(55, 'Churuku', '15', NULL, NULL),
(56, 'Dalai', '15', NULL, NULL),
(57, 'Farkwa', '15', NULL, NULL),
(58, 'Goima', '15', NULL, NULL),
(59, 'Gwandi', '15', NULL, NULL),
(60, 'Jangalo', '15', NULL, NULL),
(61, 'Kimaha', '15', NULL, NULL),
(62, 'Kwamtoro', '15', NULL, NULL),
(63, 'Lalta', '15', NULL, NULL),
(64, 'Makorongo', '15', NULL, NULL),
(65, 'Mondo', '15', NULL, NULL),
(66, 'Mpendo', '15', NULL, NULL),
(67, 'Mrijo', '15', NULL, NULL),
(68, 'Msaada', '15', NULL, NULL),
(69, 'Ovada', '15', NULL, NULL),
(70, 'Paranga', '15', NULL, NULL),
(71, 'Sanzawa', '15', NULL, NULL),
(72, 'Songoro', '15', NULL, NULL),
(73, 'Chahwa', '16', NULL, NULL),
(74, 'Chamwino', '16', NULL, NULL),
(75, 'Chang\'ombe', '16', NULL, NULL),
(76, 'Chigongwe', '16', NULL, NULL),
(77, 'Chihanga', '16', NULL, NULL),
(78, 'Dodoma Makulu (Dom-Makulu)', '16', NULL, NULL),
(79, 'Hazina', '16', NULL, NULL),
(80, 'Hombolo', '16', NULL, NULL),
(81, 'Ipagala', '16', NULL, NULL),
(82, 'Ipala', '16', NULL, NULL),
(83, 'Iyumbu', '16', NULL, NULL),
(84, 'Kikombo', '16', NULL, NULL),
(85, 'Kikuyu Kaskazini ', '16', NULL, NULL),
(86, 'Kikuyu Kusini', '16', NULL, NULL),
(87, 'Kilimani', '16', NULL, NULL),
(88, 'Kiwanja cha Ndege', '16', NULL, NULL),
(89, 'Kizota', '16', NULL, NULL),
(90, 'Madukani', '16', NULL, NULL),
(91, 'Majengo', '16', NULL, NULL),
(92, 'Makole', '16', NULL, NULL),
(93, 'Makutupora', '16', NULL, NULL),
(94, 'Mbabala', '16', NULL, NULL),
(95, 'Mbalawala', '16', NULL, NULL),
(96, 'Miyuji', '16', NULL, NULL),
(97, 'Mkonze', '16', NULL, NULL),
(98, 'Mnadani', '16', NULL, NULL),
(99, 'Mpunguzi', '16', NULL, NULL),
(100, 'Msalato', '16', NULL, NULL),
(101, 'Mtumba', '16', NULL, NULL),
(102, 'Nala', '16', NULL, NULL),
(103, 'Ng\'hong\'honha', '16', NULL, NULL),
(104, 'Ntyuka', '16', NULL, NULL),
(105, 'Nzuguni', '16', NULL, NULL),
(106, 'Tambukareli', '16', NULL, NULL),
(107, 'Uhuru', '16', NULL, NULL),
(108, 'Viwandani', '16', NULL, NULL),
(109, 'Zuzu', '16', NULL, NULL),
(110, 'Bukoko', '154', NULL, NULL),
(111, 'Chabutwa', '154', NULL, NULL),
(112, 'Choma', '154', NULL, NULL),
(113, 'Igoweko (Igowero)', '154', NULL, NULL),
(114, 'Igunga', '154', NULL, NULL),
(115, 'Igurubi', '154', NULL, NULL),
(116, 'Isakamaliwa', '154', NULL, NULL),
(117, 'Itumba', '154', NULL, NULL),
(118, 'Itunduru', '154', NULL, NULL),
(119, 'Kining\'ila (Kining\'inila)', '154', NULL, NULL),
(120, 'Kinungu', '154', NULL, NULL),
(121, 'Mbutu', '154', NULL, NULL),
(122, 'Mwamashiga', '154', NULL, NULL),
(123, 'Mwamashimba', '154', NULL, NULL),
(124, 'Mwashiku', '154', NULL, NULL),
(125, 'Mwisi', '154', NULL, NULL),
(126, 'Nanga', '154', NULL, NULL),
(127, 'Ndembezi', '154', NULL, NULL),
(128, 'Ngulu', '154', NULL, NULL),
(129, 'Nguvumoja', '154', NULL, NULL),
(130, 'Nkinga', '154', NULL, NULL),
(131, 'Ntobo', '154', NULL, NULL),
(132, 'Nyandekwa', '154', NULL, NULL),
(133, 'Simbo', '154', NULL, NULL),
(134, 'Sungwizi', '154', NULL, NULL),
(135, 'Ziba', '154', NULL, NULL),
(136, 'Dung\'unyi', '144', NULL, NULL),
(137, 'Ighombwe', '144', NULL, NULL),
(138, 'Iglansoni', '144', NULL, NULL),
(139, 'Ihanja', '144', NULL, NULL),
(140, 'Ikungi', '144', NULL, NULL),
(141, 'Irisya', '144', NULL, NULL),
(142, 'Iseke', '144', NULL, NULL),
(143, 'Issuna', '144', NULL, NULL),
(144, 'Iyumbu', '144', NULL, NULL),
(145, 'Kikio', '144', NULL, NULL),
(146, 'Kituntu', '144', NULL, NULL),
(147, 'Lighwa', '144', NULL, NULL),
(148, 'Mang\'onyi', '144', NULL, NULL),
(149, 'Mgungira', '144', NULL, NULL),
(150, 'Minyughe', '144', NULL, NULL),
(151, 'Misughaa', '144', NULL, NULL),
(152, 'Mkiwa', '144', NULL, NULL),
(153, 'Mtunduru', '144', NULL, NULL),
(154, 'Muhintiri', '144', NULL, NULL),
(155, 'Mungaa', '144', NULL, NULL),
(156, 'Mwaru', '144', NULL, NULL),
(157, 'Ntuntu', '144', NULL, NULL),
(158, 'Puma', '144', NULL, NULL),
(159, 'Sepuka', '144', NULL, NULL),
(160, 'Siuyu', '144', NULL, NULL),
(161, 'Unyahati', '144', NULL, NULL),
(162, 'Kaselya', '145', NULL, NULL),
(163, 'Kidaru', '145', NULL, NULL),
(164, 'Kinampanda', '145', NULL, NULL),
(165, 'Kiomboi', '145', NULL, NULL),
(166, 'Kisiriri', '145', NULL, NULL),
(167, 'Kyengege', '145', NULL, NULL),
(168, 'Mbelekese', '145', NULL, NULL),
(169, 'Mgongo', '145', NULL, NULL),
(170, 'Mtekente', '145', NULL, NULL),
(171, 'Mtoa', '145', NULL, NULL),
(172, 'Ndago', '145', NULL, NULL),
(173, 'Ndulungu', '145', NULL, NULL),
(174, 'Ntwike', '145', NULL, NULL),
(175, 'Shelui', '145', NULL, NULL),
(176, 'Tulya', '145', NULL, NULL),
(177, 'Ulemo', '145', NULL, NULL),
(178, 'Urughu', '145', NULL, NULL),
(179, 'Ichemba', '155', NULL, NULL),
(180, 'Igagala', '155', NULL, NULL),
(181, 'Igombe Mkulu', '155', NULL, NULL),
(182, 'Igwisi', '155', NULL, NULL),
(183, 'Kaliua', '155', NULL, NULL),
(184, 'Kamsekwa', '155', NULL, NULL),
(185, 'Kanindo', '155', NULL, NULL),
(186, 'Kanoge', '155', NULL, NULL),
(187, 'Kashishi', '155', NULL, NULL),
(188, 'Kazaroho', '155', NULL, NULL),
(189, 'Milambo', '155', NULL, NULL),
(190, 'Mwongozo', '155', NULL, NULL),
(191, 'Sasu', '155', NULL, NULL),
(192, 'Seleli', '155', NULL, NULL),
(193, 'Silambo', '155', NULL, NULL),
(194, 'Ugunga', '155', NULL, NULL),
(195, 'Ukumbisiganga', '155', NULL, NULL),
(196, 'Ushokola', '155', NULL, NULL),
(197, 'Usinge', '155', NULL, NULL),
(198, 'Uyowa', '155', NULL, NULL),
(199, 'Zugimlole', '155', NULL, NULL),
(200, 'Bereko', '17', NULL, NULL),
(201, 'Bolisa', '17', NULL, NULL),
(202, 'Bumbuta', '17', NULL, NULL),
(203, 'Busi', '17', NULL, NULL),
(204, 'Changaa', '17', NULL, NULL),
(205, 'Chemchem', '17', NULL, NULL),
(206, 'Haubi', '17', NULL, NULL),
(207, 'Hondomairo', '17', NULL, NULL),
(208, 'Itaswi', '17', NULL, NULL),
(209, 'Itololo', '17', NULL, NULL),
(210, 'Kalamba', '17', NULL, NULL),
(211, 'Kikilo', '17', NULL, NULL),
(212, 'Kikore', '17', NULL, NULL),
(213, 'Kilimani', '17', NULL, NULL),
(214, 'Kingale', '17', NULL, NULL),
(215, 'Kinyasi', '17', NULL, NULL),
(216, 'Kisese', '17', NULL, NULL),
(217, 'Kolo', '17', NULL, NULL),
(218, 'Kondoa Mjini', '17', NULL, NULL),
(219, 'Kwadelo', '17', NULL, NULL),
(220, 'Masange', '17', NULL, NULL),
(221, 'Mnenia', '17', NULL, NULL),
(222, 'Pahi', '17', NULL, NULL),
(223, 'Salanka', '17', NULL, NULL),
(224, 'Serya', '17', NULL, NULL),
(225, 'Soera', '17', NULL, NULL),
(226, 'Suruke', '17', NULL, NULL),
(227, 'Thawi', '17', NULL, NULL),
(228, 'Chamkoroma', '18', NULL, NULL),
(229, 'Chitego', '18', NULL, NULL),
(230, 'Chiwe', '18', NULL, NULL),
(231, 'Hogoro', '18', NULL, NULL),
(232, 'Iduo', '18', NULL, NULL),
(233, 'Kibaigwa', '18', NULL, NULL),
(234, 'Kongwa', '18', NULL, NULL),
(235, 'Lenjulu', '18', NULL, NULL),
(236, 'Makawa', '18', NULL, NULL),
(237, 'Matongoro', '18', NULL, NULL),
(238, 'Mkoka', '18', NULL, NULL),
(239, 'Mlali', '18', NULL, NULL),
(240, 'Mtanana', '18', NULL, NULL),
(241, 'Nghumbi', '18', NULL, NULL),
(242, 'Ngomai', '18', NULL, NULL),
(243, 'Njoge', '18', NULL, NULL),
(244, 'Pandambili', '18', NULL, NULL),
(245, 'Sagara', '18', NULL, NULL),
(246, 'Sejeli', '18', NULL, NULL),
(247, 'Songambele', '18', NULL, NULL),
(248, 'Ugogoni', '18', NULL, NULL),
(249, 'Zoissa', '18', NULL, NULL),
(250, 'Aghondi', '146', NULL, NULL),
(251, 'Chikola', '146', NULL, NULL),
(252, 'Chikuyu', '146', NULL, NULL),
(253, 'Heka', '146', NULL, NULL),
(254, 'Idodyandole', '146', NULL, NULL),
(255, 'Ipande', '146', NULL, NULL),
(256, 'Isseke', '146', NULL, NULL),
(257, 'Itigi Majengo', '146', NULL, NULL),
(258, 'Itigi Mjini', '146', NULL, NULL),
(259, 'Kintinku', '146', NULL, NULL),
(260, 'Kitaraka', '146', NULL, NULL),
(261, 'Majiri', '146', NULL, NULL),
(262, 'Makanda', '146', NULL, NULL),
(263, 'Makuru', '146', NULL, NULL),
(264, 'Makutopora (Makutupora)', '146', NULL, NULL),
(265, 'Manyoni', '146', NULL, NULL),
(266, 'Mgandu', '146', NULL, NULL),
(267, 'Mitundu', '146', NULL, NULL),
(268, 'Mkwese', '146', NULL, NULL),
(269, 'Muhalala', '146', NULL, NULL),
(270, 'Mvumi', '146', NULL, NULL),
(271, 'Mwamagembe', '146', NULL, NULL),
(272, 'Nkonko', '146', NULL, NULL),
(273, 'Rungwa', '146', NULL, NULL),
(274, 'Sanjaranda', '146', NULL, NULL),
(275, 'Sanza', '146', NULL, NULL),
(276, 'Saranda', '146', NULL, NULL),
(277, 'Sasajila', '146', NULL, NULL),
(278, 'Sasilo', '146', NULL, NULL),
(279, 'Solya', '146', NULL, NULL),
(280, 'Gumanga', '147', NULL, NULL),
(281, 'Ibaga', '147', NULL, NULL),
(282, 'Iguguno', '147', NULL, NULL),
(283, 'Ilunda', '147', NULL, NULL),
(284, 'Kikhonda', '147', NULL, NULL),
(285, 'Kinyangiri', '147', NULL, NULL),
(286, 'Matongo', '147', NULL, NULL),
(287, 'Miganga', '147', NULL, NULL),
(288, 'Mpambala', '147', NULL, NULL),
(289, 'Msingi', '147', NULL, NULL),
(290, 'Mwanga', '147', NULL, NULL),
(291, 'Mwangeza', '147', NULL, NULL),
(292, 'Nduguti', '147', NULL, NULL),
(293, 'Nkinto', '147', NULL, NULL),
(294, 'Berege', '19', NULL, NULL),
(295, 'Chipogoro', '19', NULL, NULL),
(296, 'Chitemo', '19', NULL, NULL),
(297, 'Chunyu', '19', NULL, NULL),
(298, 'Galigali', '19', NULL, NULL),
(299, 'Godegode', '19', NULL, NULL),
(300, 'Gulwe', '19', NULL, NULL),
(301, 'Ipera', '19', NULL, NULL),
(302, 'Iwondo', '19', NULL, NULL),
(303, 'Kibakwe', '19', NULL, NULL),
(304, 'Kimagai', '19', NULL, NULL),
(305, 'Kingiti', '19', NULL, NULL),
(306, 'Lufu', '19', NULL, NULL),
(307, 'Luhundwa', '19', NULL, NULL),
(308, 'Lumuma', '19', NULL, NULL),
(309, 'Lupeta', '19', NULL, NULL),
(310, 'Malolo', '19', NULL, NULL),
(311, 'Massa', '19', NULL, NULL),
(312, 'Matomondo', '19', NULL, NULL),
(313, 'Mazae', '19', NULL, NULL),
(314, 'Mbuga', '19', NULL, NULL),
(315, 'Mima', '19', NULL, NULL),
(316, 'Mlunduzi', '19', NULL, NULL),
(317, 'Mpwapwa Mjini', '19', NULL, NULL),
(318, 'Mtera', '19', NULL, NULL),
(319, 'Nghambi', '19', NULL, NULL),
(320, 'Pwaga', '19', NULL, NULL),
(321, 'Rudi', '19', NULL, NULL),
(322, 'Ving\'hawe', '19', NULL, NULL),
(323, 'Wotta', '19', NULL, NULL),
(324, 'Budushi', '156', NULL, NULL),
(325, 'Bukene', '156', NULL, NULL),
(326, 'Igusule', '156', NULL, NULL),
(327, 'Ijanija', '156', NULL, NULL),
(328, 'Ikindwa', '156', NULL, NULL),
(329, 'Isagenhe', '156', NULL, NULL),
(330, 'Isanzu', '156', NULL, NULL),
(331, 'Itilo', '156', NULL, NULL),
(332, 'Itobo', '156', NULL, NULL),
(333, 'Kahama Nhalanga', '156', NULL, NULL),
(334, 'Karitu', '156', NULL, NULL),
(335, 'Kasela', '156', NULL, NULL),
(336, 'Lusu', '156', NULL, NULL),
(337, 'Magengati', '156', NULL, NULL),
(338, 'Mambali', '156', NULL, NULL),
(339, 'Mbogwe', '156', NULL, NULL),
(340, 'Miguwa', '156', NULL, NULL),
(341, 'Milambo Itobo', '156', NULL, NULL),
(342, 'Mizibaziba', '156', NULL, NULL),
(343, 'Mogwa', '156', NULL, NULL),
(344, 'Muhugi', '156', NULL, NULL),
(345, 'Mwakashanhala', '156', NULL, NULL),
(346, 'Mwamala', '156', NULL, NULL),
(347, 'Mwangoye', '156', NULL, NULL),
(348, 'Nata', '156', NULL, NULL),
(349, 'Ndala', '156', NULL, NULL),
(350, 'Nkiniziwa', '156', NULL, NULL),
(351, 'Nzega Mjini', '156', NULL, NULL),
(352, 'Nzega Ndogo', '156', NULL, NULL),
(353, 'Puge', '156', NULL, NULL),
(354, 'Semembela', '156', NULL, NULL),
(355, 'Shigamba', '156', NULL, NULL),
(356, 'Sigili', '156', NULL, NULL),
(357, 'Tongi', '156', NULL, NULL),
(358, 'Uduka', '156', NULL, NULL),
(359, 'Utwigu', '156', NULL, NULL),
(360, 'Wela', '156', NULL, NULL),
(361, 'Chabutwa', '157', NULL, NULL),
(362, 'Igigwa', '157', NULL, NULL),
(363, 'Ipole', '157', NULL, NULL),
(364, 'Kiloleli (Kaloleli)', '157', NULL, NULL),
(365, 'Kiloli', '157', NULL, NULL),
(366, 'Kipanga', '157', NULL, NULL),
(367, 'Kipili', '157', NULL, NULL),
(368, 'Kisanga', '157', NULL, NULL),
(369, 'Kitunda', '157', NULL, NULL),
(370, 'Misheni', '157', NULL, NULL),
(371, 'Mole', '157', NULL, NULL),
(372, 'Mpombwe', '157', NULL, NULL),
(373, 'Ngoywa', '157', NULL, NULL),
(374, 'Pangale', '157', NULL, NULL),
(375, 'Sikonge', '157', NULL, NULL),
(376, 'Tutuo', '157', NULL, NULL),
(377, 'Usunga', '157', NULL, NULL),
(378, 'Ipembe', '149', NULL, NULL),
(379, 'Kindai', '149', NULL, NULL),
(380, 'Majengo', '149', NULL, NULL),
(381, 'Mandewa', '149', NULL, NULL),
(382, 'Minga', '149', NULL, NULL),
(383, 'Misuna', '149', NULL, NULL),
(384, 'Mitunduruni (Mitunduru)', '149', NULL, NULL),
(385, 'Mtamaa', '149', NULL, NULL),
(386, 'Mtipa', '149', NULL, NULL),
(387, 'Mughanga', '149', NULL, NULL),
(388, 'Mungumaji', '149', NULL, NULL),
(389, 'Mwankoko', '149', NULL, NULL),
(390, 'Uhamaka', '149', NULL, NULL),
(391, 'Unyambwa (Umyambwa)', '149', NULL, NULL),
(392, 'Unyamikumbi', '149', NULL, NULL),
(393, 'Utemini', '149', NULL, NULL),
(394, 'Ikhanoda', NULL, NULL, NULL),
(395, 'Ilongero', NULL, NULL, NULL),
(396, 'Itaja', NULL, NULL, NULL),
(397, 'Kijota', NULL, NULL, NULL),
(398, 'Kinyagigi', NULL, NULL, NULL),
(399, 'Kinyeto', NULL, NULL, NULL),
(400, 'Maghojoa', NULL, NULL, NULL),
(401, 'Makuro', NULL, NULL, NULL),
(402, 'Merya', NULL, NULL, NULL),
(403, 'Mgori', NULL, NULL, NULL),
(404, 'Mrama', NULL, NULL, NULL),
(405, 'Msange', NULL, NULL, NULL),
(406, 'Msisi', NULL, NULL, NULL),
(407, 'Mtinko', NULL, NULL, NULL),
(408, 'Mudida', NULL, NULL, NULL),
(409, 'Mughamo', NULL, NULL, NULL),
(410, 'Mughunga', NULL, NULL, NULL),
(411, 'Mwasauya', NULL, NULL, NULL),
(412, 'Ngimu', NULL, NULL, NULL),
(413, 'Ntonge', NULL, NULL, NULL),
(414, 'Ughandi', NULL, NULL, NULL),
(415, 'Chemchem', '158', NULL, NULL),
(416, 'Cheyo', '158', NULL, NULL),
(417, 'Gongoni', '158', NULL, NULL),
(418, 'Ifucha', '158', NULL, NULL),
(419, 'Ikomwa', '158', NULL, NULL),
(420, 'Ipuli', '158', NULL, NULL),
(421, 'Isevya', '158', NULL, NULL),
(422, 'Itetemia', '158', NULL, NULL),
(423, 'Itonjanda', '158', NULL, NULL),
(424, 'Kabila', '158', NULL, NULL),
(425, 'Kakola', '158', NULL, NULL),
(426, 'Kalunde', '158', NULL, NULL),
(427, 'Kanyenye', '158', NULL, NULL),
(428, 'Kiloleni', '158', NULL, NULL),
(429, 'Kitete', '158', NULL, NULL),
(430, 'Malolo', '158', NULL, NULL),
(431, 'Mbugani', '158', NULL, NULL),
(432, 'Misha', '158', NULL, NULL),
(433, 'Mtendeni', '158', NULL, NULL),
(434, 'Ndevelwa', '158', NULL, NULL),
(435, 'Ng\'ambo', '158', NULL, NULL),
(436, 'Ntalikwa', '158', NULL, NULL),
(437, 'Tambukareli', '158', NULL, NULL),
(438, 'Tumbi', '158', NULL, NULL),
(439, 'Uyui', '158', NULL, NULL),
(440, 'Imalamakoye', '159', NULL, NULL),
(441, 'Itundu (Utundu)', '159', NULL, NULL),
(442, 'Kapilula', '159', NULL, NULL),
(443, 'Kasisi', '159', NULL, NULL),
(444, 'Kiloleni', '159', NULL, NULL),
(445, 'Muungano', '159', NULL, NULL),
(446, 'Nsenda', '159', NULL, NULL),
(447, 'Songambele', '159', NULL, NULL),
(448, 'Ugalla', '159', NULL, NULL),
(449, 'Ukondamoyo', '159', NULL, NULL),
(450, 'Urambo', '159', NULL, NULL),
(451, 'Usisya', '159', NULL, NULL),
(452, 'Ussoke', '159', NULL, NULL),
(453, 'Uyogo', '159', NULL, NULL),
(454, 'Uyumbu', '159', NULL, NULL),
(455, 'Vumilia', '159', NULL, NULL),
(456, 'Bukumbi', '160', NULL, NULL),
(457, 'Goweko', '160', NULL, NULL),
(458, 'Ibelamilundi', '160', NULL, NULL),
(459, 'Ibiri', '160', NULL, NULL),
(460, 'Igalula', '160', NULL, NULL),
(461, 'Ikongolo', '160', NULL, NULL),
(462, 'Ilolanguru', '160', NULL, NULL),
(463, 'Isikizya', '160', NULL, NULL),
(464, 'Kigwa', '160', NULL, NULL),
(465, 'Kizengi', '160', NULL, NULL),
(466, 'Loya', '160', NULL, NULL),
(467, 'Lutende', '160', NULL, NULL),
(468, 'Mabama', '160', NULL, NULL),
(469, 'Magiri', '160', NULL, NULL),
(470, 'Miswaki', '160', NULL, NULL),
(471, 'Miyenze', '160', NULL, NULL),
(472, 'Ndono', '160', NULL, NULL),
(473, 'Nsimbo', '160', NULL, NULL),
(474, 'Nsololo', '160', NULL, NULL),
(475, 'Shitage', '160', NULL, NULL),
(476, 'Tura', '160', NULL, NULL),
(477, 'Ufulumwa (Ufuluma)', '160', NULL, NULL),
(478, 'Upuge', '160', NULL, NULL),
(479, 'Usagari', '160', NULL, NULL),
(480, 'Bwilingu', '117', NULL, NULL),
(481, 'Dunda', '117', NULL, NULL),
(482, 'Fukayosi (Fukayose)', '117', NULL, NULL),
(483, 'Kerege', '117', NULL, NULL),
(484, 'Kibindu', '117', NULL, NULL),
(485, 'Kimange', '117', NULL, NULL),
(486, 'Kiromo', '117', NULL, NULL),
(487, 'Kiwangwa', '117', NULL, NULL),
(488, 'Lugoba', '117', NULL, NULL),
(489, 'Magomeni', '117', NULL, NULL),
(490, 'Mandera', '117', NULL, NULL),
(491, 'Mbwewe', '117', NULL, NULL),
(492, 'Miono', '117', NULL, NULL),
(493, 'Mkange', '117', NULL, NULL),
(494, 'Msata', '117', NULL, NULL),
(495, 'Msoga', '117', NULL, NULL),
(496, 'Pera', '117', NULL, NULL),
(497, 'Talawanda', '117', NULL, NULL),
(498, 'Ubenazomozi', '117', NULL, NULL),
(499, 'Vigwaza', '117', NULL, NULL),
(500, 'Yombo', '117', NULL, NULL),
(501, 'Zinga', '117', NULL, NULL),
(502, 'Chagongwe', '88', NULL, NULL),
(503, 'Chakwale', '88', NULL, NULL),
(504, 'Chanjale', '88', NULL, NULL),
(505, 'Gairo', '88', NULL, NULL),
(506, 'Idibo', '88', NULL, NULL),
(507, 'Iyogwe', '88', NULL, NULL),
(508, 'Kibedya', '88', NULL, NULL),
(509, 'Mandege', '88', NULL, NULL),
(510, 'Msingisi', '88', NULL, NULL),
(511, 'Nongwe', '88', NULL, NULL),
(512, 'Rubeho', '88', NULL, NULL),
(513, 'Buguruni', '8', NULL, NULL),
(514, 'Chanika', '8', NULL, NULL),
(515, 'Gerezani', '8', NULL, NULL),
(516, 'Gongo la Mboto', '8', NULL, NULL),
(517, 'Ilala', '8', NULL, NULL),
(518, 'Jangwani', '8', NULL, NULL),
(519, 'Kariakoo', '8', NULL, NULL),
(520, 'Kimanga', '8', NULL, NULL),
(521, 'Kinyerezi', '8', NULL, NULL),
(522, 'Kipawa', '8', NULL, NULL),
(523, 'Kisutu', '8', NULL, NULL),
(524, 'Kitunda', '8', NULL, NULL),
(525, 'Kivukoni', '8', NULL, NULL),
(526, 'Kivule', '8', NULL, NULL),
(527, 'Kiwalani', '8', NULL, NULL),
(528, 'Majohe', '8', NULL, NULL),
(529, 'Mchafukoge', '8', NULL, NULL),
(530, 'Mchikichini', '8', NULL, NULL),
(531, 'Msongola', '8', NULL, NULL),
(532, 'Pugu', '8', NULL, NULL),
(533, 'Segerea', '8', NULL, NULL),
(534, 'Tabata', '8', NULL, NULL),
(535, 'Ukonga', '8', NULL, NULL),
(536, 'Upanga Magharibi', '8', NULL, NULL),
(537, 'Upanga Mashariki', '8', NULL, NULL),
(538, 'Vingunguti', '8', NULL, NULL),
(539, 'Bokomnemela', '118', NULL, NULL),
(540, 'Dutumi', '118', NULL, NULL),
(541, 'Gwata', '118', NULL, NULL),
(542, 'Janga', '118', NULL, NULL),
(543, 'Kikongo', '118', NULL, NULL),
(544, 'Kilangalanga', '118', NULL, NULL),
(545, 'Kwala', '118', NULL, NULL),
(546, 'Magindu', '118', NULL, NULL),
(547, 'Mlandizi', '118', NULL, NULL),
(548, 'Ruvu', '118', NULL, NULL),
(549, 'Soga', '118', NULL, NULL),
(550, 'Kibaha', '119', NULL, NULL),
(551, 'Kongowe', '119', NULL, NULL),
(552, 'Maili Moja', '119', NULL, NULL),
(553, 'Mbwawa', '119', NULL, NULL),
(554, 'Misugusugu', '119', NULL, NULL),
(555, 'Mkuza', '119', NULL, NULL),
(556, 'Msangani', '119', NULL, NULL),
(557, 'Pangani', '119', NULL, NULL),
(558, 'Picha ya Ndege', '119', NULL, NULL),
(559, 'Tumbi', '119', NULL, NULL),
(560, 'Visiga', '119', NULL, NULL),
(561, 'Chisano', '89', NULL, NULL),
(562, 'Chita', '89', NULL, NULL),
(563, 'Idete', '89', NULL, NULL),
(564, 'Ifakara', '89', NULL, NULL),
(565, 'Kibaoni', '89', NULL, NULL),
(566, 'Kiberege', '89', NULL, NULL),
(567, 'Kidatu', '89', NULL, NULL),
(568, 'Kisawasawa', '89', NULL, NULL),
(569, 'Lumemo', '89', NULL, NULL),
(570, 'Mang\'ula', '89', NULL, NULL),
(571, 'Masagati', '89', NULL, NULL),
(572, 'Mbingu', '89', NULL, NULL),
(573, 'Mchombe', '89', NULL, NULL),
(574, 'Mkula', '89', NULL, NULL),
(575, 'Mlimba', '89', NULL, NULL),
(576, 'Mofu', '89', NULL, NULL),
(577, 'Sanje', '89', NULL, NULL),
(578, 'Uchindile', '89', NULL, NULL),
(579, 'Utengule', '89', NULL, NULL),
(580, 'Berega', '90', NULL, NULL),
(581, 'Chanzulu', '90', NULL, NULL),
(582, 'Dumila', '90', NULL, NULL),
(583, 'Kasiki', '90', NULL, NULL),
(584, 'Kidete', '90', NULL, NULL),
(585, 'Kidodi', '90', NULL, NULL),
(586, 'Kilangali', '90', NULL, NULL),
(587, 'Kimamba A', '90', NULL, NULL),
(588, 'Kimamba B', '90', NULL, NULL),
(589, 'Kisanga', '90', NULL, NULL),
(590, 'Kitete', '90', NULL, NULL),
(591, 'Lumbiji', '90', NULL, NULL),
(592, 'Lumuma', '90', NULL, NULL),
(593, 'Mabula', '90', NULL, NULL),
(594, 'Mabwerebwere', '90', NULL, NULL),
(595, 'Madoto', '90', NULL, NULL),
(596, 'Magole', '90', NULL, NULL),
(597, 'Magomeni', '90', NULL, NULL),
(598, 'Magubike', '90', NULL, NULL),
(599, 'Maguha', '90', NULL, NULL),
(600, 'Malolo', '90', NULL, NULL),
(601, 'Mamboya', '90', NULL, NULL),
(602, 'Masanze', '90', NULL, NULL),
(603, 'Mbumi', '90', NULL, NULL),
(604, 'Mikumi', '90', NULL, NULL),
(605, 'Mkwatani', '90', NULL, NULL),
(606, 'Msowero', '90', NULL, NULL),
(607, 'Ruaha', '90', NULL, NULL),
(608, 'Rudewa', '90', NULL, NULL),
(609, 'Ruhembe', '90', NULL, NULL),
(610, 'Tindiga', '90', NULL, NULL),
(611, 'Ulaya', '90', NULL, NULL),
(612, 'Uleling\'ombe', '90', NULL, NULL),
(613, 'Vidunda', '90', NULL, NULL),
(614, 'Zombo', '90', NULL, NULL),
(615, 'Chumo', '60', NULL, NULL),
(616, 'Kandawale', '60', NULL, NULL),
(617, 'Kibata', '60', NULL, NULL),
(618, 'Kikole', '60', NULL, NULL),
(619, 'Kinjumbi', '60', NULL, NULL),
(620, 'Kipatimu', '60', NULL, NULL),
(621, 'Kiranjeranje (Kirnjernje)', '60', NULL, NULL),
(622, 'Kivinjesingino', '60', NULL, NULL),
(623, 'Lihimalyao', '60', NULL, NULL),
(624, 'Likawage', '60', NULL, NULL),
(625, 'Mandawa', '60', NULL, NULL),
(626, 'Masoko', '60', NULL, NULL),
(627, 'Miguruwe', '60', NULL, NULL),
(628, 'Mingumbi', '60', NULL, NULL),
(629, 'Miteja', '60', NULL, NULL),
(630, 'Mitole', '60', NULL, NULL),
(631, 'Nanjirinji', '60', NULL, NULL),
(632, 'Njinjo', '60', NULL, NULL),
(633, 'Pande Mikoma', '60', NULL, NULL),
(634, 'Songosongo', '60', NULL, NULL),
(635, 'Tingi', '60', NULL, NULL),
(636, 'Bunju', '9', NULL, NULL),
(637, 'Goba', '9', NULL, NULL),
(638, 'Hananasif (Hananasifu)', '9', NULL, NULL),
(639, 'Kawe', '9', NULL, NULL),
(640, 'Kibamba', '9', NULL, NULL),
(641, 'Kigogo', '9', NULL, NULL),
(642, 'Kijitonyama', '9', NULL, NULL),
(643, 'Kimara', '9', NULL, NULL),
(644, 'Kinondoni', '9', NULL, NULL),
(645, 'Kunduchi', '9', NULL, NULL),
(646, 'Kwembe', '9', NULL, NULL),
(647, 'Mabibo', '9', NULL, NULL),
(648, 'Mabwepande', '9', NULL, NULL),
(649, 'Magomeni', '9', NULL, NULL),
(650, 'Makongo', '9', NULL, NULL),
(651, 'Makuburi', '9', NULL, NULL),
(652, 'Makumbusho', '9', NULL, NULL),
(653, 'Makurumla', '9', NULL, NULL),
(654, 'Manzese', '9', NULL, NULL),
(655, 'Mbezi', '9', NULL, NULL),
(656, 'Mbezi juu', '9', NULL, NULL),
(657, 'Mburahati', '9', NULL, NULL),
(658, 'Mbweni', '9', NULL, NULL),
(659, 'Mikocheni', '9', NULL, NULL),
(660, 'Msasani', '9', NULL, NULL),
(661, 'Msigani', '9', NULL, NULL),
(662, 'Mwananyamala', '9', NULL, NULL),
(663, 'Mzimuni', '9', NULL, NULL),
(664, 'Ndugumbi', '9', NULL, NULL),
(665, 'Saranga', '9', NULL, NULL),
(666, 'Sinza', '9', NULL, NULL),
(667, 'Tandale', '9', NULL, NULL),
(668, 'Ubungo', '9', NULL, NULL),
(669, 'Wazo', '9', NULL, NULL),
(670, 'Cholesamvula', '120', NULL, NULL),
(671, 'Kibuta', '120', NULL, NULL),
(672, 'Kiluvya', '120', NULL, NULL),
(673, 'Kisarawe', '120', NULL, NULL),
(674, 'Kurui', '120', NULL, NULL),
(675, 'Mafizi', '120', NULL, NULL),
(676, 'Maneromango', '120', NULL, NULL),
(677, 'Marui', '120', NULL, NULL),
(678, 'Marumbo', '120', NULL, NULL),
(679, 'Masaki', '120', NULL, NULL),
(680, 'Msanga', '120', NULL, NULL),
(681, 'Msimbu', '120', NULL, NULL),
(682, 'Mzenga', '120', NULL, NULL),
(683, 'Vihingo', '120', NULL, NULL),
(684, 'Vikumbulu', '120', NULL, NULL),
(685, 'Chikonji', '62', NULL, NULL),
(686, 'Jamhuri', '62', NULL, NULL),
(687, 'Makonde', '62', NULL, NULL),
(688, 'Matopeni', '62', NULL, NULL),
(689, 'Mbanja', '62', NULL, NULL),
(690, 'Mikumbi', '62', NULL, NULL),
(691, 'Mingoyo', '62', NULL, NULL),
(692, 'Mitandi', '62', NULL, NULL),
(693, 'Msanjihili (Msinjahili)', '62', NULL, NULL),
(694, 'Mtanda', '62', NULL, NULL),
(695, 'Mwenge', '62', NULL, NULL),
(696, 'Nachingwea', '62', NULL, NULL),
(697, 'Ndoro', '62', NULL, NULL),
(698, 'Ng\'apa', '62', NULL, NULL),
(699, 'Rahaleo', '62', NULL, NULL),
(700, 'Rasbura', '62', NULL, NULL),
(701, 'Tandangongoro', '62', NULL, NULL),
(702, 'Wailes', '62', NULL, NULL),
(703, 'Chiponda', NULL, NULL, NULL),
(704, 'Kilangala', NULL, NULL, NULL),
(705, 'Kilolambwani', NULL, NULL, NULL),
(706, 'Kitomanga', NULL, NULL, NULL),
(707, 'Kiwalala', NULL, NULL, NULL),
(708, 'Kiwawa', NULL, NULL, NULL),
(709, 'Longa', NULL, NULL, NULL),
(710, 'Majengo', NULL, NULL, NULL),
(711, 'Mandwanga', NULL, NULL, NULL),
(712, 'Matimba', NULL, NULL, NULL),
(713, 'Mchinga', NULL, NULL, NULL),
(714, 'Milola', NULL, NULL, NULL),
(715, 'Mipingo', NULL, NULL, NULL),
(716, 'Mnara', NULL, NULL, NULL),
(717, 'Mnolela', NULL, NULL, NULL),
(718, 'Mtama', NULL, NULL, NULL),
(719, 'Mtua', NULL, NULL, NULL),
(720, 'Mtumbya', NULL, NULL, NULL),
(721, 'Nachunyu', NULL, NULL, NULL),
(722, 'Nahukahuka', NULL, NULL, NULL),
(723, 'Namangwale (Namangale)', NULL, NULL, NULL),
(724, 'Namupa', NULL, NULL, NULL),
(725, 'Nangaru', NULL, NULL, NULL),
(726, 'Navanga', NULL, NULL, NULL),
(727, 'Nyangamara', NULL, NULL, NULL),
(728, 'Nyangao', NULL, NULL, NULL),
(729, 'Nyengedi', NULL, NULL, NULL),
(730, 'Pangatena', NULL, NULL, NULL),
(731, 'Rutamba', NULL, NULL, NULL),
(732, 'Sudi', NULL, NULL, NULL),
(733, 'Barikiwa', '63', NULL, NULL),
(734, 'Kiangara', '63', NULL, NULL),
(735, 'Kibutuka', '63', NULL, NULL),
(736, 'Kichonda', '63', NULL, NULL),
(737, 'Kimambi', '63', NULL, NULL),
(738, 'Likongowele', '63', NULL, NULL),
(739, 'Lilombe', '63', NULL, NULL),
(740, 'Liwale \'B\'', '63', NULL, NULL),
(741, 'Liwale Mjini', '63', NULL, NULL),
(742, 'Makata', '63', NULL, NULL),
(743, 'Mangirirkiti (Mangirikiti)', '63', NULL, NULL),
(744, 'Mbaya', '63', NULL, NULL),
(745, 'Mihumo', '63', NULL, NULL),
(746, 'Mirui', '63', NULL, NULL),
(747, 'Mkutano', '63', NULL, NULL),
(748, 'Mlembwe', '63', NULL, NULL),
(749, 'Mpigamiti', '63', NULL, NULL),
(750, 'Nangando', '63', NULL, NULL),
(751, 'Nangano', '63', NULL, NULL),
(752, 'Ngongowele', '63', NULL, NULL),
(753, 'Baleni', '121', NULL, NULL),
(754, 'Jibondo', '121', NULL, NULL),
(755, 'Kanga', '121', NULL, NULL),
(756, 'Kiegeani', '121', NULL, NULL),
(757, 'Kilindoni', '121', NULL, NULL),
(758, 'Kirongwe', '121', NULL, NULL),
(759, 'Miburani', '121', NULL, NULL),
(760, 'Ndagoni', '121', NULL, NULL),
(761, 'Chigugu', NULL, NULL, NULL),
(762, 'Chikolopola', NULL, NULL, NULL),
(763, 'Chiungutwa', NULL, NULL, NULL),
(764, 'Chiwale', NULL, NULL, NULL),
(765, 'Chiwata', NULL, NULL, NULL),
(766, 'Lipumburu', NULL, NULL, NULL),
(767, 'Lukuledi', NULL, NULL, NULL),
(768, 'Lulindi', NULL, NULL, NULL),
(769, 'Mbuyuni', NULL, NULL, NULL),
(770, 'Mchauru', NULL, NULL, NULL),
(771, 'Mkululu', NULL, NULL, NULL),
(772, 'Mkundi', NULL, NULL, NULL),
(773, 'Mlingula', NULL, NULL, NULL),
(774, 'Mnavira', NULL, NULL, NULL),
(775, 'Mpanyani', NULL, NULL, NULL),
(776, 'Mwena', NULL, NULL, NULL),
(777, 'Namajani', NULL, NULL, NULL),
(778, 'Namalenga', NULL, NULL, NULL),
(779, 'Namatutwe', NULL, NULL, NULL),
(780, 'Nanganga', NULL, NULL, NULL),
(781, 'Nanjota', NULL, NULL, NULL),
(782, 'Sindano', NULL, NULL, NULL),
(783, 'Jida', NULL, NULL, NULL),
(784, 'Marika', NULL, NULL, NULL),
(785, 'Migongo', NULL, NULL, NULL),
(786, 'Mkomaindo', NULL, NULL, NULL),
(787, 'Mkuti', NULL, NULL, NULL),
(788, 'Mpindimbi', NULL, NULL, NULL),
(789, 'Mtandi', NULL, NULL, NULL),
(790, 'Mwenge', NULL, NULL, NULL),
(791, 'Mwenge Mtapika', NULL, NULL, NULL),
(792, 'Nyasa', NULL, NULL, NULL),
(793, 'Sululu', NULL, NULL, NULL),
(794, 'Temeke', NULL, NULL, NULL),
(795, 'Bupu', '122', NULL, NULL),
(796, 'Kimanzichana', '122', NULL, NULL),
(797, 'Kiparang\'anda', '122', NULL, NULL),
(798, 'Kisiju', '122', NULL, NULL),
(799, 'Kitomondo', '122', NULL, NULL),
(800, 'Lukanga', '122', NULL, NULL),
(801, 'Magawa', '122', NULL, NULL),
(802, 'Mbezi', '122', NULL, NULL),
(803, 'Mkamba', '122', NULL, NULL),
(804, 'Mkuranga', '122', NULL, NULL),
(805, 'Mwalusembe (Mwarusembe)', '122', NULL, NULL),
(806, 'Njia Nne', '122', NULL, NULL),
(807, 'Nyamato', '122', NULL, NULL),
(808, 'Panzuo', '122', NULL, NULL),
(809, 'Shungubweni', '122', NULL, NULL),
(810, 'Tambani', '122', NULL, NULL),
(811, 'Vianzi', '122', NULL, NULL),
(812, 'Vikindu', '122', NULL, NULL),
(813, 'Bigwa', '92', NULL, NULL),
(814, 'Boma', '92', NULL, NULL),
(815, 'Kichangani', '92', NULL, NULL),
(816, 'Kihonda', '92', NULL, NULL),
(817, 'Kilakala', '92', NULL, NULL),
(818, 'Kingo', '92', NULL, NULL),
(819, 'Kingolwira', '92', NULL, NULL),
(820, 'Kiwanja cha Ndege', '92', NULL, NULL),
(821, 'Mafiga', '92', NULL, NULL),
(822, 'Mazimbu', '92', NULL, NULL),
(823, 'Mbuyuni', '92', NULL, NULL),
(824, 'Mji Mkuu', '92', NULL, NULL),
(825, 'Mji Mpya', '92', NULL, NULL),
(826, 'Mlimani', '92', NULL, NULL),
(827, 'Mwembesongo', '92', NULL, NULL),
(828, 'Mzinga', '92', NULL, NULL),
(829, 'Sabasaba', '92', NULL, NULL),
(830, 'Sultan Area', '92', NULL, NULL),
(831, 'Uwanja wa Taifa', '92', NULL, NULL),
(832, 'Bungu', NULL, NULL, NULL),
(833, 'Bwakila Chini', NULL, NULL, NULL),
(834, 'Bwakila Juu', NULL, NULL, NULL),
(835, 'Gwata', NULL, NULL, NULL),
(836, 'Kasanga', NULL, NULL, NULL),
(837, 'Kibogwa', NULL, NULL, NULL),
(838, 'Kibungo Juu', NULL, NULL, NULL),
(839, 'Kidugalo', NULL, NULL, NULL),
(840, 'Kinole', NULL, NULL, NULL),
(841, 'Kiroka', NULL, NULL, NULL),
(842, 'Kisaki', NULL, NULL, NULL),
(843, 'Kisemu', NULL, NULL, NULL),
(844, 'Kolero', NULL, NULL, NULL),
(845, 'Konde', NULL, NULL, NULL),
(846, 'Lundi', NULL, NULL, NULL),
(847, 'Matuli', NULL, NULL, NULL),
(848, 'Mikese', NULL, NULL, NULL),
(849, 'Mkambarani', NULL, NULL, NULL),
(850, 'Mkulazi', NULL, NULL, NULL),
(851, 'Mkuyuni', NULL, NULL, NULL),
(852, 'Mngazi', NULL, NULL, NULL),
(853, 'Mtombozi', NULL, NULL, NULL),
(854, 'Mvuha', NULL, NULL, NULL),
(855, 'Ngerengere', NULL, NULL, NULL),
(856, 'Selembala', NULL, NULL, NULL),
(857, 'Singisa', NULL, NULL, NULL),
(858, 'Tawa', NULL, NULL, NULL),
(859, 'Tegetero', NULL, NULL, NULL),
(860, 'Tununguo', NULL, NULL, NULL),
(861, 'Chikongola', '100', NULL, NULL),
(862, 'Chuno', '100', NULL, NULL),
(863, 'Jangwani', '100', NULL, NULL),
(864, 'Kisungule', '100', NULL, NULL),
(865, 'Likombe', '100', NULL, NULL),
(866, 'Magengeni', '100', NULL, NULL),
(867, 'Majengo', '100', NULL, NULL),
(868, 'Mitengo', '100', NULL, NULL),
(869, 'Mtonya', '100', NULL, NULL),
(870, 'Naliendele', '100', NULL, NULL),
(871, 'Rahaleo', '100', NULL, NULL),
(872, 'Railway', '100', NULL, NULL),
(873, 'Shangani', '100', NULL, NULL),
(874, 'Ufukoni', '100', NULL, NULL),
(875, 'Vigaeni', '100', NULL, NULL),
(876, 'Chawi', NULL, NULL, NULL),
(877, 'Dihimba', NULL, NULL, NULL),
(878, 'Kiromba', NULL, NULL, NULL),
(879, 'Kitaya', NULL, NULL, NULL),
(880, 'Kitere', NULL, NULL, NULL),
(881, 'Kiyanga', NULL, NULL, NULL),
(882, 'Libobe', NULL, NULL, NULL),
(883, 'Madimba', NULL, NULL, NULL),
(884, 'Mahurunga', NULL, NULL, NULL),
(885, 'Mayanga', NULL, NULL, NULL),
(886, 'Mbawala', NULL, NULL, NULL),
(887, 'Mbembaleo', NULL, NULL, NULL),
(888, 'Milangominne', NULL, NULL, NULL),
(889, 'Mnima', NULL, NULL, NULL),
(890, 'Mpapura', NULL, NULL, NULL),
(891, 'Msanga Mkuu', NULL, NULL, NULL),
(892, 'Mtimbwilimbwi', NULL, NULL, NULL),
(893, 'Mtiniko', NULL, NULL, NULL),
(894, 'Muungano', NULL, NULL, NULL),
(895, 'Namtumbuka', NULL, NULL, NULL),
(896, 'Nanguruwe', NULL, NULL, NULL),
(897, 'Nanyamba', NULL, NULL, NULL),
(898, 'Naumbu', NULL, NULL, NULL),
(899, 'Ndumbwe', NULL, NULL, NULL),
(900, 'Nitekela', NULL, NULL, NULL),
(901, 'Njengwa', NULL, NULL, NULL),
(902, 'Tangazo', NULL, NULL, NULL),
(903, 'Ziwani', NULL, NULL, NULL),
(904, 'Bunduki', '93', NULL, NULL),
(905, 'Diongoya', '93', NULL, NULL),
(906, 'Doma', '93', NULL, NULL),
(907, 'Hembeti', '93', NULL, NULL),
(908, 'Kanga', '93', NULL, NULL),
(909, 'Kibati', '93', NULL, NULL),
(910, 'Kikeo', '93', NULL, NULL),
(911, 'Langali', '93', NULL, NULL),
(912, 'Maskati', '93', NULL, NULL),
(913, 'Melela', '93', NULL, NULL),
(914, 'Mhonda', '93', NULL, NULL),
(915, 'Mlali', '93', NULL, NULL),
(916, 'Mtibwa', '93', NULL, NULL),
(917, 'Mvomero', '93', NULL, NULL),
(918, 'Mzumbe', '93', NULL, NULL),
(919, 'Sungaji', '93', NULL, NULL),
(920, 'Tchenzema', '93', NULL, NULL),
(921, 'Chiola', '64', NULL, NULL),
(922, 'Kiegei', '64', NULL, NULL),
(923, 'Kilimahewa (Kilimanihewa)', '64', NULL, NULL),
(924, 'Kilimarondo', '64', NULL, NULL),
(925, 'Kipara Mnero', '64', NULL, NULL),
(926, 'Lionja', '64', NULL, NULL),
(927, 'Marambo', '64', NULL, NULL),
(928, 'Matekwe', '64', NULL, NULL),
(929, 'Mbondo', '64', NULL, NULL),
(930, 'Mkoka', '64', NULL, NULL),
(931, 'Mkotokuyana', '64', NULL, NULL),
(932, 'Mnero Miembeni', '64', NULL, NULL),
(933, 'Mnerongongo (Minerongongo)', '64', NULL, NULL),
(934, 'Mpiruka', '64', NULL, NULL),
(935, 'Mtua', '64', NULL, NULL),
(936, 'Naipanga', '64', NULL, NULL),
(937, 'Naipingo', '64', NULL, NULL),
(938, 'Namapwia', '64', NULL, NULL),
(939, 'Namatula', '64', NULL, NULL),
(940, 'Nambambo', '64', NULL, NULL),
(941, 'Namikango', '64', NULL, NULL),
(942, 'Nangowe', '64', NULL, NULL),
(943, 'Nditi', '64', NULL, NULL),
(944, 'Ndomoni', '64', NULL, NULL),
(945, 'Ruponda', '64', NULL, NULL),
(946, 'Stesheni', '64', NULL, NULL),
(947, 'Chipuputa', '101', NULL, NULL),
(948, 'Likokona', '101', NULL, NULL),
(949, 'Lumesule', '101', NULL, NULL),
(950, 'Mangaka', '101', NULL, NULL),
(951, 'Maratani', '101', NULL, NULL),
(952, 'Masuguru', '101', NULL, NULL),
(953, 'Mikangaula', '101', NULL, NULL),
(954, 'Mkonona', '101', NULL, NULL),
(955, 'Mnanje', '101', NULL, NULL),
(956, 'Nandete', '101', NULL, NULL),
(957, 'Nangomba', '101', NULL, NULL),
(958, 'Nanyumbu', '101', NULL, NULL),
(959, 'Napacho', '101', NULL, NULL),
(960, 'Sengenya', '101', NULL, NULL),
(961, 'Chihangu', '102', NULL, NULL),
(962, 'Chilangalanga (Chilangala)', '102', NULL, NULL),
(963, 'Chitekete', '102', NULL, NULL),
(964, 'Chiwonga', '102', NULL, NULL),
(965, 'Kitangari', '102', NULL, NULL),
(966, 'Luchingu (Luchindu)', '102', NULL, NULL),
(967, 'Makonga', '102', NULL, NULL),
(968, 'Makote', '102', NULL, NULL),
(969, 'Makukwe', '102', NULL, NULL),
(970, 'Malatu', '102', NULL, NULL),
(971, 'Maputi', '102', NULL, NULL),
(972, 'Mchemo', '102', NULL, NULL),
(973, 'Mcholi I', '102', NULL, NULL),
(974, 'Mcholi II', '102', NULL, NULL),
(975, 'Mdimbampelempele', '102', NULL, NULL),
(976, 'Mkoma II', '102', NULL, NULL),
(977, 'Mkunya', '102', NULL, NULL),
(978, 'Mkwedu', '102', NULL, NULL),
(979, 'Mnekachi', '102', NULL, NULL),
(980, 'Mnyambe', '102', NULL, NULL),
(981, 'Mtonya', '102', NULL, NULL),
(982, 'Mtopwa', '102', NULL, NULL),
(983, 'Mtunguru', '102', NULL, NULL),
(984, 'Nakahako', '102', NULL, NULL),
(985, 'Nambali', '102', NULL, NULL),
(986, 'Namiyonga', '102', NULL, NULL),
(987, 'Nandwahi', '102', NULL, NULL),
(988, 'Nanguruwe', '102', NULL, NULL),
(989, 'Chibula', '65', NULL, NULL),
(990, 'Chienjele', '65', NULL, NULL),
(991, 'Chinongwe', '65', NULL, NULL),
(992, 'Chunyu', '65', NULL, NULL),
(993, 'Likunja', '65', NULL, NULL),
(994, 'Luchelegwa', '65', NULL, NULL),
(995, 'Makanjiro', '65', NULL, NULL),
(996, 'Malolo', '65', NULL, NULL),
(997, 'Mandarawe', '65', NULL, NULL),
(998, 'Mandawa', '65', NULL, NULL),
(999, 'Matambarale', '65', NULL, NULL),
(1000, 'Mbekenyera', '65', NULL, NULL),
(1001, 'Mnacho', '65', NULL, NULL),
(1002, 'Nachingwea', '65', NULL, NULL),
(1003, 'Nambilaje (Nambilanje)', '65', NULL, NULL),
(1004, 'Namichiga', '65', NULL, NULL),
(1005, 'Nandagala', '65', NULL, NULL),
(1006, 'Nanganga', '65', NULL, NULL),
(1007, 'Narung\'ombe', '65', NULL, NULL),
(1008, 'Nkowe', '65', NULL, NULL),
(1009, 'Ruangwa', '65', NULL, NULL),
(1010, 'Bungu', '123', NULL, NULL),
(1011, 'Chemchem', '123', NULL, NULL),
(1012, 'Chumbi', '123', NULL, NULL),
(1013, 'Dimani', '123', NULL, NULL),
(1014, 'Ikwiriri', '123', NULL, NULL),
(1015, 'Kibiti', '123', NULL, NULL),
(1016, 'Kiongoroni', '123', NULL, NULL),
(1017, 'Mahege', '123', NULL, NULL),
(1018, 'Maparoni', '123', NULL, NULL),
(1019, 'Mbuchi', '123', NULL, NULL),
(1020, 'Mbwara', '123', NULL, NULL),
(1021, 'Mchukwi', '123', NULL, NULL),
(1022, 'Mgomba', '123', NULL, NULL),
(1023, 'Mjawa', '123', NULL, NULL),
(1024, 'Mkongo', '123', NULL, NULL),
(1025, 'Mlanzi', '123', NULL, NULL),
(1026, 'Mtawanya', '123', NULL, NULL),
(1027, 'Mtunda', '123', NULL, NULL),
(1028, 'Mwambao', '123', NULL, NULL),
(1029, 'Mwaseni', '123', NULL, NULL),
(1030, 'Ngarambe', '123', NULL, NULL),
(1031, 'Ngorongo', '123', NULL, NULL),
(1032, 'Ruaruke', '123', NULL, NULL),
(1033, 'Salale', '123', NULL, NULL),
(1034, 'Umwe', '123', NULL, NULL),
(1035, 'Utete', '123', NULL, NULL),
(1036, 'Chaume', '103', NULL, NULL),
(1037, 'Chikongola', '103', NULL, NULL),
(1038, 'Chingungwe', '103', NULL, NULL),
(1039, 'Dinduma', '103', NULL, NULL),
(1040, 'Kitama', '103', NULL, NULL),
(1041, 'Kwanyama', '103', NULL, NULL),
(1042, 'Litehu', '103', NULL, NULL),
(1043, 'Luagala', '103', NULL, NULL),
(1044, 'Lukokoda', '103', NULL, NULL),
(1045, 'Lyenje', '103', NULL, NULL),
(1046, 'Mahuta', '103', NULL, NULL),
(1047, 'Maundo', '103', NULL, NULL),
(1048, 'Mchichira', '103', NULL, NULL),
(1049, 'Mdimbamnyoma', '103', NULL, NULL),
(1050, 'Mdumbwe', '103', NULL, NULL),
(1051, 'Michenjele', '103', NULL, NULL),
(1052, 'Mihambwe', '103', NULL, NULL),
(1053, 'Mihuta (Miuta)', '103', NULL, NULL),
(1054, 'Milingodi (Milongodi)', '103', NULL, NULL),
(1055, 'Mkonjowano', '103', NULL, NULL),
(1056, 'Mkoreha', '103', NULL, NULL),
(1057, 'Mkundi', '103', NULL, NULL),
(1058, 'Mkwiti', '103', NULL, NULL),
(1059, 'Mnyawa', '103', NULL, NULL),
(1060, 'Nambahu', '103', NULL, NULL),
(1061, 'Namikupa', '103', NULL, NULL),
(1062, 'Nanhyanga', '103', NULL, NULL),
(1063, 'Naputa', '103', NULL, NULL),
(1064, 'Ngunja', '103', NULL, NULL),
(1065, 'Tandahimba', '103', NULL, NULL),
(1066, 'Azimio', '10', NULL, NULL),
(1067, 'Buza', '10', NULL, NULL),
(1068, 'Chamazi', '10', NULL, NULL),
(1069, 'Chang\'ombe', '10', NULL, NULL),
(1070, 'Charambe', '10', NULL, NULL),
(1071, 'Keko', '10', NULL, NULL),
(1072, 'Kibada', '10', NULL, NULL),
(1073, 'Kiburugwa', '10', NULL, NULL),
(1074, 'Kigamboni', '10', NULL, NULL),
(1075, 'Kijichi', '10', NULL, NULL),
(1076, 'Kilakala', '10', NULL, NULL),
(1077, 'Kimbiji', '10', NULL, NULL),
(1078, 'Kisarawe II', '10', NULL, NULL),
(1079, 'Kurasini', '10', NULL, NULL),
(1080, 'Makangarawe', '10', NULL, NULL),
(1081, 'Mbagala', '10', NULL, NULL),
(1082, 'Mbagala Kuu', '10', NULL, NULL),
(1083, 'Mianzini', '10', NULL, NULL),
(1084, 'Miburani', '10', NULL, NULL),
(1085, 'Mjimwema', '10', NULL, NULL),
(1086, 'Mtoni', '10', NULL, NULL),
(1087, 'Pemba Mnazi', '10', NULL, NULL),
(1088, 'Sandali', '10', NULL, NULL),
(1089, 'Somangila', '10', NULL, NULL),
(1090, 'Tandika', '10', NULL, NULL),
(1091, 'Temeke', '10', NULL, NULL),
(1092, 'Toangoma', '10', NULL, NULL),
(1093, 'Tungi', '10', NULL, NULL),
(1094, 'Vijibweni', '10', NULL, NULL),
(1095, 'Yombo Vituka', '10', NULL, NULL),
(1096, 'Biro', '94', NULL, NULL),
(1097, 'Chirombola', '94', NULL, NULL),
(1098, 'Euga', '94', NULL, NULL),
(1099, 'Ilonga', '94', NULL, NULL),
(1100, 'Iragua', '94', NULL, NULL),
(1101, 'Isongo', '94', NULL, NULL),
(1102, 'Itete', '94', NULL, NULL),
(1103, 'Kichangani', '94', NULL, NULL),
(1104, 'Kilosa kwa Mpepo', '94', NULL, NULL),
(1105, 'Lukande', '94', NULL, NULL),
(1106, 'Lupiro', '94', NULL, NULL),
(1107, 'Mahenge', '94', NULL, NULL),
(1108, 'Malinyi', '94', NULL, NULL),
(1109, 'Mbuga', '94', NULL, NULL),
(1110, 'Minepa', '94', NULL, NULL),
(1111, 'Msogezi', '94', NULL, NULL),
(1112, 'Mtimbira', '94', NULL, NULL),
(1113, 'Mwaya', '94', NULL, NULL),
(1114, 'Ngoheranga', '94', NULL, NULL),
(1115, 'Ruaha', '94', NULL, NULL),
(1116, 'Sali', '94', NULL, NULL),
(1117, 'Sofi', '94', NULL, NULL),
(1118, 'Usangule', '94', NULL, NULL),
(1119, 'Vigoi', '94', NULL, NULL),
(1120, 'Bariadi', '139', NULL, NULL),
(1121, 'Bunamhala', '139', NULL, NULL),
(1122, 'Dutwa', '139', NULL, NULL),
(1123, 'Gambosi', '139', NULL, NULL),
(1124, 'Gilya', '139', NULL, NULL),
(1125, 'Guduwi', '139', NULL, NULL),
(1126, 'Ikungulyabashashi', '139', NULL, NULL),
(1127, 'Isanga', '139', NULL, NULL),
(1128, 'Kasoli', '139', NULL, NULL),
(1129, 'Kilalo', '139', NULL, NULL),
(1130, 'Malambo', '139', NULL, NULL),
(1131, 'Matongo', '139', NULL, NULL),
(1132, 'Mhango', '139', NULL, NULL),
(1133, 'Mwadobana (Madobana)', '139', NULL, NULL),
(1134, 'Mwaubingi (Mwaubinge)', '139', NULL, NULL),
(1135, 'Mwaumatondo', '139', NULL, NULL),
(1136, 'Ngulyati', '139', NULL, NULL),
(1137, 'Nkindwabiye', '139', NULL, NULL),
(1138, 'Nkololo', '139', NULL, NULL),
(1139, 'Nyakabindi', '139', NULL, NULL),
(1140, 'Nyangokolwa', '139', NULL, NULL),
(1141, 'Sakwe', '139', NULL, NULL),
(1142, 'Sapiwi', '139', NULL, NULL),
(1143, 'Sima', '139', NULL, NULL),
(1144, 'Somanda', '139', NULL, NULL),
(1145, 'Biharamulo Mjini', '30', NULL, NULL),
(1146, 'Bisibo', '30', NULL, NULL),
(1147, 'Kabindi', '30', NULL, NULL),
(1148, 'Kalenge', '30', NULL, NULL),
(1149, 'Kaniha', '30', NULL, NULL),
(1150, 'Lusahunga', '30', NULL, NULL),
(1151, 'Nemba', '30', NULL, NULL),
(1152, 'Nyabusozi', '30', NULL, NULL),
(1153, 'Nyakahura', '30', NULL, NULL),
(1154, 'Nyamahanga', '30', NULL, NULL),
(1155, 'Nyamigogo', '30', NULL, NULL),
(1156, 'Nyantakara', '30', NULL, NULL),
(1157, 'Nyarubungo', '30', NULL, NULL),
(1158, 'Runazi', '30', NULL, NULL),
(1159, 'Ruziba', '30', NULL, NULL),
(1160, 'Biharu', '41', NULL, NULL),
(1161, 'Buhigwe', '41', NULL, NULL),
(1162, 'Janda', '41', NULL, NULL),
(1163, 'Kajana', '41', NULL, NULL),
(1164, 'Kibande', '41', NULL, NULL),
(1165, 'Kilelema', '41', NULL, NULL),
(1166, 'Mugera', '41', NULL, NULL),
(1167, 'Muhinda', '41', NULL, NULL),
(1168, 'Munanila', '41', NULL, NULL),
(1169, 'Munyegera', '41', NULL, NULL),
(1170, 'Munzeze', '41', NULL, NULL),
(1171, 'Muyama', '41', NULL, NULL),
(1172, 'Mwayaya', '41', NULL, NULL),
(1173, 'Nyamugali', '41', NULL, NULL),
(1174, 'Rusaba', '41', NULL, NULL),
(1175, 'Bakoba', '32', NULL, NULL),
(1176, 'Bilele', '32', NULL, NULL),
(1177, 'Buhembe (Buhemba)', '32', NULL, NULL),
(1178, 'Hamugembe', '32', NULL, NULL),
(1179, 'Ijuganyondo', '32', NULL, NULL),
(1180, 'Kagondo', '32', NULL, NULL),
(1181, 'Kahororo', '32', NULL, NULL),
(1182, 'Kashai', '32', NULL, NULL),
(1183, 'Kibeta', '32', NULL, NULL),
(1184, 'Kitendaguro', '32', NULL, NULL),
(1185, 'Miembeni', '32', NULL, NULL),
(1186, 'Nshambya', '32', NULL, NULL),
(1187, 'Nyanga', '32', NULL, NULL),
(1188, 'Rwamishenye', '32', NULL, NULL),
(1189, 'Buhendangabo', NULL, NULL, NULL),
(1190, 'Bujugo', NULL, NULL, NULL),
(1191, 'Butelankuzi', NULL, NULL, NULL),
(1192, 'Butulage', NULL, NULL, NULL),
(1193, 'Ibwera', NULL, NULL, NULL),
(1194, 'Izimbya', NULL, NULL, NULL),
(1195, 'Kaagya', NULL, NULL, NULL),
(1196, 'Kaibanja', NULL, NULL, NULL),
(1197, 'Kanyangereko', NULL, NULL, NULL),
(1198, 'Karabagaine', NULL, NULL, NULL),
(1199, 'Kasharu', NULL, NULL, NULL),
(1200, 'Katerero', NULL, NULL, NULL),
(1201, 'Katoma', NULL, NULL, NULL),
(1202, 'Katoro', NULL, NULL, NULL),
(1203, 'Kemondo', NULL, NULL, NULL),
(1204, 'Kibirizi', NULL, NULL, NULL),
(1205, 'Kikomero', NULL, NULL, NULL),
(1206, 'Kishanje', NULL, NULL, NULL),
(1207, 'Kishogo', NULL, NULL, NULL),
(1208, 'Kyamulaile', NULL, NULL, NULL),
(1209, 'Maruku', NULL, NULL, NULL),
(1210, 'Mikoni', NULL, NULL, NULL),
(1211, 'Mugajwale', NULL, NULL, NULL),
(1212, 'Nyakato', NULL, NULL, NULL),
(1213, 'Nyakibimbili', NULL, NULL, NULL),
(1214, 'Rubafu', NULL, NULL, NULL),
(1215, 'Rubale', NULL, NULL, NULL),
(1216, 'Ruhunga', NULL, NULL, NULL),
(1217, 'Rukoma', NULL, NULL, NULL),
(1218, 'Bugelenga', '20', NULL, NULL),
(1219, 'Bukombe', '20', NULL, NULL),
(1220, 'Busonzo', '20', NULL, NULL),
(1221, 'Butinzya', '20', NULL, NULL),
(1222, 'Igulwa', '20', NULL, NULL),
(1223, 'Iyogelo', '20', NULL, NULL),
(1224, 'Lyambamgongo', '20', NULL, NULL),
(1225, 'Namonge', '20', NULL, NULL),
(1226, 'Ng\'anzo', '20', NULL, NULL),
(1227, 'Runzewe Magharibi', '20', NULL, NULL),
(1228, 'Runzewe Mashariki', '20', NULL, NULL),
(1229, 'Ushirombo', '20', NULL, NULL),
(1230, 'Uyovu', '20', NULL, NULL),
(1231, 'Balili', '72', NULL, NULL),
(1232, 'Bunda Mjini', '72', NULL, NULL),
(1233, 'Bunda Stoo', '72', NULL, NULL),
(1234, 'Butimba', '72', NULL, NULL),
(1235, 'Chitengule', '72', NULL, NULL),
(1236, 'Guta', '72', NULL, NULL),
(1237, 'Hunyari', '72', NULL, NULL),
(1238, 'Igundu', '72', NULL, NULL),
(1239, 'Iramba', '72', NULL, NULL),
(1240, 'Kabasa', '72', NULL, NULL),
(1241, 'Kasuguti', '72', NULL, NULL),
(1242, 'Ketare', '72', NULL, NULL),
(1243, 'Kibara', '72', NULL, NULL),
(1244, 'Kisorya', '72', NULL, NULL),
(1245, 'Kunzugu', '72', NULL, NULL),
(1246, 'Mcharo', '72', NULL, NULL),
(1247, 'Mihingo', '72', NULL, NULL),
(1248, 'Mugeta', '72', NULL, NULL),
(1249, 'Namhula', '72', NULL, NULL),
(1250, 'Nampindi', '72', NULL, NULL),
(1251, 'Nansimo', '72', NULL, NULL),
(1252, 'Neruma', '72', NULL, NULL),
(1253, 'Nyamang\'uta', '72', NULL, NULL),
(1254, 'Nyamuswa', '72', NULL, NULL),
(1255, 'Nyasura', '72', NULL, NULL),
(1256, 'Salama', '72', NULL, NULL),
(1257, 'Sazira', '72', NULL, NULL),
(1258, 'Wariku', '72', NULL, NULL),
(1259, 'Badugu', '140', NULL, NULL),
(1260, 'Igalukilo', '140', NULL, NULL),
(1261, 'Kabita', '140', NULL, NULL),
(1262, 'Kalemela', '140', NULL, NULL),
(1263, 'Kiloleli', '140', NULL, NULL),
(1264, 'Lamadi', '140', NULL, NULL),
(1265, 'Lutubiga', '140', NULL, NULL),
(1266, 'Malili', '140', NULL, NULL),
(1267, 'Mkula', '140', NULL, NULL),
(1268, 'Mwamanyili', '140', NULL, NULL),
(1269, 'Ngasamo', '140', NULL, NULL),
(1270, 'Nyaluhande', '140', NULL, NULL),
(1271, 'Shigala', '140', NULL, NULL),
(1272, 'Bisumwa', '73', NULL, NULL),
(1273, 'Buhemba', '73', NULL, NULL),
(1274, 'Bukabwa', '73', NULL, NULL),
(1275, 'Buruma', '73', NULL, NULL),
(1276, 'Busegwe', '73', NULL, NULL),
(1277, 'Buswahili', '73', NULL, NULL),
(1278, 'Butiama', '73', NULL, NULL),
(1279, 'Butuguri', '73', NULL, NULL),
(1280, 'Bwiregi', '73', NULL, NULL),
(1281, 'Etaro', '73', NULL, NULL),
(1282, 'Kukirango', '73', NULL, NULL),
(1283, 'Kyanyari', '73', NULL, NULL),
(1284, 'Masaba', '73', NULL, NULL),
(1285, 'Mirwa', '73', NULL, NULL),
(1286, 'Muriaza', '73', NULL, NULL),
(1287, 'Nyakatende', '73', NULL, NULL),
(1288, 'Nyamimange', '73', NULL, NULL),
(1289, 'Nyankanga', '73', NULL, NULL),
(1290, 'Nyegina', '73', NULL, NULL),
(1291, 'Sirorisimba', '73', NULL, NULL),
(1292, 'Bukome', '21', NULL, NULL),
(1293, 'Buseresere', '21', NULL, NULL),
(1294, 'Butengorumasa', '21', NULL, NULL),
(1295, 'Buziku', '21', NULL, NULL),
(1296, 'Bwanga', '21', NULL, NULL),
(1297, 'Bwera', '21', NULL, NULL),
(1298, 'Bwina', '21', NULL, NULL),
(1299, 'Bwongera', '21', NULL, NULL),
(1300, 'Chato', '21', NULL, NULL),
(1301, 'Ichwankima', '21', NULL, NULL),
(1302, 'Ilemela', '21', NULL, NULL),
(1303, 'Ilyamchele', '21', NULL, NULL),
(1304, 'Iparamasa', '21', NULL, NULL),
(1305, 'Kachwamba', '21', NULL, NULL),
(1306, 'Kasenga', '21', NULL, NULL),
(1307, 'Katende', '21', NULL, NULL),
(1308, 'Kigongo', '21', NULL, NULL),
(1309, 'Makurugusi', '21', NULL, NULL),
(1310, 'Muganza', '21', NULL, NULL),
(1311, 'Muungano', '21', NULL, NULL),
(1312, 'Nyamirembe', '21', NULL, NULL),
(1313, 'Nyarutembo', '21', NULL, NULL),
(1314, 'Bugalama', NULL, NULL, NULL),
(1315, 'Bugulula', NULL, NULL, NULL),
(1316, 'Bujula', NULL, NULL, NULL),
(1317, 'Bukoli', NULL, NULL, NULL),
(1318, 'Bukondo', NULL, NULL, NULL),
(1319, 'Bulela', NULL, NULL, NULL),
(1320, 'Bung\'wangoko', NULL, NULL, NULL),
(1321, 'Busanda', NULL, NULL, NULL),
(1322, 'Butobela', NULL, NULL, NULL),
(1323, 'Chigunga', NULL, NULL, NULL),
(1324, 'Ihanamilo', NULL, NULL, NULL),
(1325, 'Isulwabutundwe (Isulwabutunde)', NULL, NULL, NULL),
(1326, 'Kagu', NULL, NULL, NULL),
(1327, 'Kakubilo', NULL, NULL, NULL),
(1328, 'Kalangalala', NULL, NULL, NULL),
(1329, 'Kamena', NULL, NULL, NULL),
(1330, 'Kamhanga', NULL, NULL, NULL),
(1331, 'Kasamwa', NULL, NULL, NULL),
(1332, 'Kaseme', NULL, NULL, NULL),
(1333, 'Katoma', NULL, NULL, NULL),
(1334, 'Katoro', NULL, NULL, NULL),
(1335, 'Lubanga', NULL, NULL, NULL),
(1336, 'Lwamgasa', NULL, NULL, NULL),
(1337, 'Lwezera', NULL, NULL, NULL),
(1338, 'Mtakuja', NULL, NULL, NULL),
(1339, 'Nkome', NULL, NULL, NULL),
(1340, 'Nyachiluluma', NULL, NULL, NULL),
(1341, 'Nyakagomba', NULL, NULL, NULL),
(1342, 'Nyakamwaga', NULL, NULL, NULL),
(1343, 'Nyamalimbe', NULL, NULL, NULL),
(1344, 'Nyamigota', NULL, NULL, NULL),
(1345, 'Nyanguku', NULL, NULL, NULL),
(1346, 'Nyarugusu', NULL, NULL, NULL),
(1347, 'Nzera', NULL, NULL, NULL),
(1348, 'Senga', NULL, NULL, NULL),
(1349, 'Bugogwa', '104', NULL, NULL),
(1350, 'Buswelu', '104', NULL, NULL),
(1351, 'Ilemela', '104', NULL, NULL),
(1352, 'Kirumba', '104', NULL, NULL),
(1353, 'Kitangiri', '104', NULL, NULL),
(1354, 'Nyakato', '104', NULL, NULL),
(1355, 'Nyamanoro', '104', NULL, NULL),
(1356, 'Pasiansi', '104', NULL, NULL),
(1357, 'Sangabuye', '104', NULL, NULL),
(1358, 'Budalabujiga', '141', NULL, NULL),
(1359, 'Bumera', '141', NULL, NULL),
(1360, 'Chinamili', '141', NULL, NULL),
(1361, 'Ikindilo (Ikindiro)', '141', NULL, NULL),
(1362, 'Kinang\'weli', '141', NULL, NULL),
(1363, 'Lagangabilili', '141', NULL, NULL),
(1364, 'Lugulu', '141', NULL, NULL),
(1365, 'Mbita', '141', NULL, NULL),
(1366, 'Mhunze', '141', NULL, NULL),
(1367, 'Migato', '141', NULL, NULL),
(1368, 'Mwalushu', '141', NULL, NULL),
(1369, 'Mwamapalala', '141', NULL, NULL),
(1370, 'Mwamtani', '141', NULL, NULL),
(1371, 'Mwaswale', '141', NULL, NULL),
(1372, 'Ndolelezi', '141', NULL, NULL),
(1373, 'Nhobora', '141', NULL, NULL),
(1374, 'Nkoma', '141', NULL, NULL),
(1375, 'Nkuyu', '141', NULL, NULL),
(1376, 'Nyamalapa', '141', NULL, NULL),
(1377, 'Sagata', '141', NULL, NULL),
(1378, 'Sawida', '141', NULL, NULL),
(1379, 'Zagayu', '141', NULL, NULL),
(1380, 'Bugarama', NULL, NULL, NULL),
(1381, 'Bukomela', NULL, NULL, NULL),
(1382, 'Bulige', NULL, NULL, NULL),
(1383, 'Bulungwa', NULL, NULL, NULL),
(1384, 'Bulyanhulu', NULL, NULL, NULL),
(1385, 'Busangi', NULL, NULL, NULL),
(1386, 'Chambo', NULL, NULL, NULL),
(1387, 'Chela', NULL, NULL, NULL),
(1388, 'Chona', NULL, NULL, NULL),
(1389, 'Idahina', NULL, NULL, NULL),
(1390, 'Igunda', NULL, NULL, NULL),
(1391, 'Igwamanoni', NULL, NULL, NULL),
(1392, 'Isaka', NULL, NULL, NULL),
(1393, 'Jana', NULL, NULL, NULL),
(1394, 'Kashishi', NULL, NULL, NULL),
(1395, 'Kinamapula', NULL, NULL, NULL),
(1396, 'Kisuke', NULL, NULL, NULL),
(1397, 'Lunguya', NULL, NULL, NULL),
(1398, 'Mapamba', NULL, NULL, NULL),
(1399, 'Mega', NULL, NULL, NULL),
(1400, 'Mpunze', NULL, NULL, NULL),
(1401, 'Mwalugulu', NULL, NULL, NULL),
(1402, 'Mwanase', NULL, NULL, NULL),
(1403, 'Ngaya', NULL, NULL, NULL),
(1404, 'Ntobo', NULL, NULL, NULL),
(1405, 'Nyankende', NULL, NULL, NULL),
(1406, 'Sabasabini', NULL, NULL, NULL),
(1407, 'Segese', NULL, NULL, NULL),
(1408, 'Shilela', NULL, NULL, NULL),
(1409, 'Ubagwe', NULL, NULL, NULL),
(1410, 'Ukune', NULL, NULL, NULL),
(1411, 'Ulewe', NULL, NULL, NULL),
(1412, 'Ulowa', NULL, NULL, NULL),
(1413, 'Ushetu', NULL, NULL, NULL),
(1414, 'Uyogo', NULL, NULL, NULL),
(1415, 'Busoka', '134', NULL, NULL),
(1416, 'Isagehe', '134', NULL, NULL),
(1417, 'Iyenze', '134', NULL, NULL),
(1418, 'Kagongwa', '134', NULL, NULL),
(1419, 'Kahama Mjini', '134', NULL, NULL),
(1420, 'Kilago', '134', NULL, NULL);
INSERT INTO `wards` (`id`, `ward_name`, `district_id`, `created_at`, `updated_at`) VALUES
(1421, 'Kinaga', '134', NULL, NULL),
(1422, 'Majengo', '134', NULL, NULL),
(1423, 'Malunga', '134', NULL, NULL),
(1424, 'Mhongolo', '134', NULL, NULL),
(1425, 'Mhungula', '134', NULL, NULL),
(1426, 'Mondo', '134', NULL, NULL),
(1427, 'Mwendakulima', '134', NULL, NULL),
(1428, 'Ngogwa', '134', NULL, NULL),
(1429, 'Nyahanga', '134', NULL, NULL),
(1430, 'Nyandekwa', '134', NULL, NULL),
(1431, 'Nyasubi', '134', NULL, NULL),
(1432, 'Nyihogo', '134', NULL, NULL),
(1433, 'Wendele', '134', NULL, NULL),
(1434, 'Zongomera', '134', NULL, NULL),
(1435, 'Gwanumpu (Gwamumpu)', '42', NULL, NULL),
(1436, 'Kakonko', '42', NULL, NULL),
(1437, 'Kasanda', '42', NULL, NULL),
(1438, 'Kasuga (Kasunga)', '42', NULL, NULL),
(1439, 'Katanga', '42', NULL, NULL),
(1440, 'Kiziguzigu', '42', NULL, NULL),
(1441, 'Mugunzu', '42', NULL, NULL),
(1442, 'Muhange', '42', NULL, NULL),
(1443, 'Nyabibuye', '42', NULL, NULL),
(1444, 'Nyamtukuza', '42', NULL, NULL),
(1445, 'Rugenge', '42', NULL, NULL),
(1446, 'Bugene', '33', NULL, NULL),
(1447, 'Bweranyange', '33', NULL, NULL),
(1448, 'Chanika', '33', NULL, NULL),
(1449, 'Chonyonyo', '33', NULL, NULL),
(1450, 'Igurwa', '33', NULL, NULL),
(1451, 'Ihanda', '33', NULL, NULL),
(1452, 'Ihembe', '33', NULL, NULL),
(1453, 'Kanoni', '33', NULL, NULL),
(1454, 'Kayanga', '33', NULL, NULL),
(1455, 'Kibondo', '33', NULL, NULL),
(1456, 'Kihanga', '33', NULL, NULL),
(1457, 'Kiruruma', '33', NULL, NULL),
(1458, 'Kituntu', '33', NULL, NULL),
(1459, 'Ndama', '33', NULL, NULL),
(1460, 'Nyabiyonza', '33', NULL, NULL),
(1461, 'Nyaishozi', '33', NULL, NULL),
(1462, 'Nyakabanga', '33', NULL, NULL),
(1463, 'Nyakahanga', '33', NULL, NULL),
(1464, 'Nyakakika', '33', NULL, NULL),
(1465, 'Nyakasimbi', '33', NULL, NULL),
(1466, 'Rugera', '33', NULL, NULL),
(1467, 'Rugu', '33', NULL, NULL),
(1468, 'Asante Nyerere', NULL, NULL, NULL),
(1469, 'Bugaga', NULL, NULL, NULL),
(1470, 'Buhoro', NULL, NULL, NULL),
(1471, 'Herushingo', NULL, NULL, NULL),
(1472, 'Kagerankanda', NULL, NULL, NULL),
(1473, 'Kigembe', NULL, NULL, NULL),
(1474, 'Kitagata', NULL, NULL, NULL),
(1475, 'Kitanga', NULL, NULL, NULL),
(1476, 'Kurugongo', NULL, NULL, NULL),
(1477, 'Kwaga', NULL, NULL, NULL),
(1478, 'Muzye', NULL, NULL, NULL),
(1479, 'Nyachenda', NULL, NULL, NULL),
(1480, 'Nyakitonto', NULL, NULL, NULL),
(1481, 'Nyamidaho', NULL, NULL, NULL),
(1482, 'Nyamnyusi', NULL, NULL, NULL),
(1483, 'Rungwe Mpya', NULL, NULL, NULL),
(1484, 'Rusesa', NULL, NULL, NULL),
(1485, 'Shunguliba', NULL, NULL, NULL),
(1486, 'Titye', NULL, NULL, NULL),
(1487, 'Kasulu Mjini', '44', NULL, NULL),
(1488, 'Kigondo', '44', NULL, NULL),
(1489, 'Msambara', '44', NULL, NULL),
(1490, 'Muganza', '44', NULL, NULL),
(1491, 'Muhunga', '44', NULL, NULL),
(1492, 'Murufiti', '44', NULL, NULL),
(1493, 'Nyansha', '44', NULL, NULL),
(1494, 'Nyumbigwa', '44', NULL, NULL),
(1495, 'Ruhita', '44', NULL, NULL),
(1496, 'Bitare', '45', NULL, NULL),
(1497, 'Bunyanbo (Bunyambo)', '45', NULL, NULL),
(1498, 'Busagara', '45', NULL, NULL),
(1499, 'Busunzu', '45', NULL, NULL),
(1500, 'Itaba', '45', NULL, NULL),
(1501, 'Kibondo', '45', NULL, NULL),
(1502, 'Kitahana', '45', NULL, NULL),
(1503, 'Kizazi', '45', NULL, NULL),
(1504, 'Kumsenga', '45', NULL, NULL),
(1505, 'Mabamba', '45', NULL, NULL),
(1506, 'Misezero', '45', NULL, NULL),
(1507, 'Murungu', '45', NULL, NULL),
(1508, 'Rugongwe', '45', NULL, NULL),
(1509, 'Bitale', NULL, NULL, NULL),
(1510, 'Kagongo', NULL, NULL, NULL),
(1511, 'Kagunga', NULL, NULL, NULL),
(1512, 'Kalinzi', NULL, NULL, NULL),
(1513, 'Mahembe', NULL, NULL, NULL),
(1514, 'Matendo', NULL, NULL, NULL),
(1515, 'Mkigo', NULL, NULL, NULL),
(1516, 'Mkongoro', NULL, NULL, NULL),
(1517, 'Mungonya', NULL, NULL, NULL),
(1518, 'Mwamgongo', NULL, NULL, NULL),
(1519, 'Mwandiga', NULL, NULL, NULL),
(1520, 'Bangwe', '47', NULL, NULL),
(1521, 'Buhanda', '47', NULL, NULL),
(1522, 'Businde', '47', NULL, NULL),
(1523, 'Buzebazeba', '47', NULL, NULL),
(1524, 'Gungu', '47', NULL, NULL),
(1525, 'Kagera', '47', NULL, NULL),
(1526, 'Kasimbu', '47', NULL, NULL),
(1527, 'Kasingirima', '47', NULL, NULL),
(1528, 'Katubuka', '47', NULL, NULL),
(1529, 'Kibirizi', '47', NULL, NULL),
(1530, 'Kigoma', '47', NULL, NULL),
(1531, 'Kipampa', '47', NULL, NULL),
(1532, 'Kitongoni', '47', NULL, NULL),
(1533, 'Machinjioni', '47', NULL, NULL),
(1534, 'Majengo', '47', NULL, NULL),
(1535, 'Mwanga Kaskazini', '47', NULL, NULL),
(1536, 'Mwanga Kusini', '47', NULL, NULL),
(1537, 'Rubuga', '47', NULL, NULL),
(1538, 'Rusimbi', '47', NULL, NULL),
(1539, 'Bubiki', '136', NULL, NULL),
(1540, 'Bunambiyu', '136', NULL, NULL),
(1541, 'Itilima', '136', NULL, NULL),
(1542, 'Kiloleli', '136', NULL, NULL),
(1543, 'Kishapu', '136', NULL, NULL),
(1544, 'Lagana', '136', NULL, NULL),
(1545, 'Masanga', '136', NULL, NULL),
(1546, 'Mondo', '136', NULL, NULL),
(1547, 'Mwadui Luhumbo (Mwadui Lohumbo)', '136', NULL, NULL),
(1548, 'Mwakipoya', '136', NULL, NULL),
(1549, 'Mwamalasa', '136', NULL, NULL),
(1550, 'Mwamashele', '136', NULL, NULL),
(1551, 'Ngofila', '136', NULL, NULL),
(1552, 'Seke-Bugoro', '136', NULL, NULL),
(1553, 'Shagihilu', '136', NULL, NULL),
(1554, 'Somagedi', '136', NULL, NULL),
(1555, 'Songwa', '136', NULL, NULL),
(1556, 'Talaga', '136', NULL, NULL),
(1557, 'Uchunga', '136', NULL, NULL),
(1558, 'Ukenyenge', '136', NULL, NULL),
(1559, 'Bugando', '105', NULL, NULL),
(1560, 'Bungulwa', '105', NULL, NULL),
(1561, 'Bupamwa', '105', NULL, NULL),
(1562, 'Fukalo', '105', NULL, NULL),
(1563, 'Hungumalwa', '105', NULL, NULL),
(1564, 'Igongwa', '105', NULL, NULL),
(1565, 'Ilula', '105', NULL, NULL),
(1566, 'Iseni', '105', NULL, NULL),
(1567, 'Kikubiji', '105', NULL, NULL),
(1568, 'Lyoma', '105', NULL, NULL),
(1569, 'Maligisu', '105', NULL, NULL),
(1570, 'Malya', '105', NULL, NULL),
(1571, 'Mantare', '105', NULL, NULL),
(1572, 'Mhande', '105', NULL, NULL),
(1573, 'Mwabomba', '105', NULL, NULL),
(1574, 'Mwagi', '105', NULL, NULL),
(1575, 'Mwakilyambiti (Mwakilambiti)', '105', NULL, NULL),
(1576, 'Mwamala', '105', NULL, NULL),
(1577, 'Mwandu', '105', NULL, NULL),
(1578, 'Mwang\'halanga', '105', NULL, NULL),
(1579, 'Mwankulwe', '105', NULL, NULL),
(1580, 'Ng\'hundi', '105', NULL, NULL),
(1581, 'Ngudu', '105', NULL, NULL),
(1582, 'Ngulla', '105', NULL, NULL),
(1583, 'Nkalalo', '105', NULL, NULL),
(1584, 'Nyambiti', '105', NULL, NULL),
(1585, 'Nyamilama', '105', NULL, NULL),
(1586, 'Shilembo', '105', NULL, NULL),
(1587, 'Sumve', '105', NULL, NULL),
(1588, 'Walla', '105', NULL, NULL),
(1589, 'Bugomora', '34', NULL, NULL),
(1590, 'Businde', '34', NULL, NULL),
(1591, 'Isingiro', '34', NULL, NULL),
(1592, 'Kaisho', '34', NULL, NULL),
(1593, 'Kamuli', '34', NULL, NULL),
(1594, 'Kibale', '34', NULL, NULL),
(1595, 'Kibingo', '34', NULL, NULL),
(1596, 'Kikukuru', '34', NULL, NULL),
(1597, 'Kimuli', '34', NULL, NULL),
(1598, 'Kyerwa', '34', NULL, NULL),
(1599, 'Mabira', '34', NULL, NULL),
(1600, 'Murongo', '34', NULL, NULL),
(1601, 'Nkwenda', '34', NULL, NULL),
(1602, 'Nyakatuntu', '34', NULL, NULL),
(1603, 'Rukuraijo', '34', NULL, NULL),
(1604, 'Rutunguru', '34', NULL, NULL),
(1605, 'Rwabwere', '34', NULL, NULL),
(1606, 'Songambele', '34', NULL, NULL),
(1607, 'Bujashi', '106', NULL, NULL),
(1608, 'Bukandwe', '106', NULL, NULL),
(1609, 'Jinjimili', '106', NULL, NULL),
(1610, 'Kahangara', '106', NULL, NULL),
(1611, 'Kisesa', '106', NULL, NULL),
(1612, 'Kitongo Sima', '106', NULL, NULL),
(1613, 'Kongolo', '106', NULL, NULL),
(1614, 'Lubugu', '106', NULL, NULL),
(1615, 'Lutale', '106', NULL, NULL),
(1616, 'Magu Mjini', '106', NULL, NULL),
(1617, 'Mwamabanza', '106', NULL, NULL),
(1618, 'Mwamanga', '106', NULL, NULL),
(1619, 'Ng\'haya', '106', NULL, NULL),
(1620, 'Nkungulu', '106', NULL, NULL),
(1621, 'Nyanguge', '106', NULL, NULL),
(1622, 'Nyigogo', '106', NULL, NULL),
(1623, 'Shishani', '106', NULL, NULL),
(1624, 'Sukuma', '106', NULL, NULL),
(1625, 'Badi', '142', NULL, NULL),
(1626, 'Binza', '142', NULL, NULL),
(1627, 'Buchambi', '142', NULL, NULL),
(1628, 'Budekwa', '142', NULL, NULL),
(1629, 'Busilili', '142', NULL, NULL),
(1630, 'Dakama', '142', NULL, NULL),
(1631, 'Ipililo', '142', NULL, NULL),
(1632, 'Isanga', '142', NULL, NULL),
(1633, 'Kadoto', '142', NULL, NULL),
(1634, 'Kulimi', '142', NULL, NULL),
(1635, 'Lalago', '142', NULL, NULL),
(1636, 'Malampaka', '142', NULL, NULL),
(1637, 'Masela', '142', NULL, NULL),
(1638, 'Mpindo', '142', NULL, NULL),
(1639, 'Mwamanenge', '142', NULL, NULL),
(1640, 'Mwamashimba', '142', NULL, NULL),
(1641, 'Mwang\'honoli', '142', NULL, NULL),
(1642, 'Nguliguli', '142', NULL, NULL),
(1643, 'Ng\'wigwa', '142', NULL, NULL),
(1644, 'Nyabubinza', '142', NULL, NULL),
(1645, 'Nyalikungu', '142', NULL, NULL),
(1646, 'Senani', '142', NULL, NULL),
(1647, 'Seng\'wa', '142', NULL, NULL),
(1648, 'Shishiyu', '142', NULL, NULL),
(1649, 'Sukuma', '142', NULL, NULL),
(1650, 'Zanzui', '142', NULL, NULL),
(1651, 'Bukandwe', '23', NULL, NULL),
(1652, 'Ikobe', '23', NULL, NULL),
(1653, 'Ikunguigazi', '23', NULL, NULL),
(1654, 'Ilolangulu', '23', NULL, NULL),
(1655, 'Iponya', '23', NULL, NULL),
(1656, 'Isebya', '23', NULL, NULL),
(1657, 'Lugunga', '23', NULL, NULL),
(1658, 'Lulembela', '23', NULL, NULL),
(1659, 'Masumbwe', '23', NULL, NULL),
(1660, 'Mbogwe', '23', NULL, NULL),
(1661, 'Nanda', '23', NULL, NULL),
(1662, 'Ngemo (Mgemo)', '23', NULL, NULL),
(1663, 'Ng\'homolwa', '23', NULL, NULL),
(1664, 'Nyakafulu', '23', NULL, NULL),
(1665, 'Nyasato', '23', NULL, NULL),
(1666, 'Ushirika', '23', NULL, NULL),
(1667, 'Bukundi', '143', NULL, NULL),
(1668, 'Imalaseko', '143', NULL, NULL),
(1669, 'Itinje', '143', NULL, NULL),
(1670, 'Kimali', '143', NULL, NULL),
(1671, 'Kisesa', '143', NULL, NULL),
(1672, 'Lingeka', '143', NULL, NULL),
(1673, 'Lubiga', '143', NULL, NULL),
(1674, 'Mwabuma', '143', NULL, NULL),
(1675, 'Mwabusalu', '143', NULL, NULL),
(1676, 'Mwabuzo', '143', NULL, NULL),
(1677, 'Mwakisandu', '143', NULL, NULL),
(1678, 'Mwamalole', '143', NULL, NULL),
(1679, 'Mwamanimba', '143', NULL, NULL),
(1680, 'Mwamanongu', '143', NULL, NULL),
(1681, 'Mwamishali', '143', NULL, NULL),
(1682, 'Mwandoya', '143', NULL, NULL),
(1683, 'Mwangundo', '143', NULL, NULL),
(1684, 'Mwanhuzi', '143', NULL, NULL),
(1685, 'Mwanjolo', '143', NULL, NULL),
(1686, 'Mwanyahina', '143', NULL, NULL),
(1687, 'Mwasengela', '143', NULL, NULL),
(1688, 'Ng\'hoboko', '143', NULL, NULL),
(1689, 'Nkoma', '143', NULL, NULL),
(1690, 'Sakasaka', '143', NULL, NULL),
(1691, 'Tindabuligi', '143', NULL, NULL),
(1692, 'Bugandika', '35', NULL, NULL),
(1693, 'Bugorora', '35', NULL, NULL),
(1694, 'Buyango', '35', NULL, NULL),
(1695, 'Bwanjai', '35', NULL, NULL),
(1696, 'Gera', '35', NULL, NULL),
(1697, 'Ishozi', '35', NULL, NULL),
(1698, 'Ishunju', '35', NULL, NULL),
(1699, 'Kakunyu', '35', NULL, NULL),
(1700, 'Kanyigo', '35', NULL, NULL),
(1701, 'Kashenye', '35', NULL, NULL),
(1702, 'Kassambya', '35', NULL, NULL),
(1703, 'Kilimilile (Kilimilil)', '35', NULL, NULL),
(1704, 'Kitobo', '35', NULL, NULL),
(1705, 'Kyaka', '35', NULL, NULL),
(1706, 'Mabale', '35', NULL, NULL),
(1707, 'Minziro', '35', NULL, NULL),
(1708, 'Mushasha', '35', NULL, NULL),
(1709, 'Mutukula', '35', NULL, NULL),
(1710, 'Nsunga', '35', NULL, NULL),
(1711, 'Ruzinga', '35', NULL, NULL),
(1712, 'Buhingo', '107', NULL, NULL),
(1713, 'Bulemeji', '107', NULL, NULL),
(1714, 'Busongo', '107', NULL, NULL),
(1715, 'Fella', '107', NULL, NULL),
(1716, 'Gulumungu', '107', NULL, NULL),
(1717, 'Idetemya', '107', NULL, NULL),
(1718, 'Igokelo', '107', NULL, NULL),
(1719, 'Ilalambogo', '107', NULL, NULL),
(1720, 'Ilujamate', '107', NULL, NULL),
(1721, 'Isesa', '107', NULL, NULL),
(1722, 'Kanyelele', '107', NULL, NULL),
(1723, 'Kasololo', '107', NULL, NULL),
(1724, 'Kijima', '107', NULL, NULL),
(1725, 'Koromije', '107', NULL, NULL),
(1726, 'Lubili', '107', NULL, NULL),
(1727, 'Mabuki', '107', NULL, NULL),
(1728, 'Mamaye', '107', NULL, NULL),
(1729, 'Mbarika', '107', NULL, NULL),
(1730, 'Misasi (Masasi)', '107', NULL, NULL),
(1731, 'Misungwi', '107', NULL, NULL),
(1732, 'Mondo', '107', NULL, NULL),
(1733, 'Mwaniko', '107', NULL, NULL),
(1734, 'Nhundulu', '107', NULL, NULL),
(1735, 'Shilalo', '107', NULL, NULL),
(1736, 'Sumbugu', '107', NULL, NULL),
(1737, 'Ukiriguru', '107', NULL, NULL),
(1738, 'Usagara', '107', NULL, NULL),
(1739, 'Biirabo', '36', NULL, NULL),
(1740, 'Bisheke', '36', NULL, NULL),
(1741, 'Buganguzi', '36', NULL, NULL),
(1742, 'Buhangaza', '36', NULL, NULL),
(1743, 'Bulyakashaju', '36', NULL, NULL),
(1744, 'Bumbire', '36', NULL, NULL),
(1745, 'Bureza', '36', NULL, NULL),
(1746, 'Burungura', '36', NULL, NULL),
(1747, 'Goziba', '36', NULL, NULL),
(1748, 'Gwanseli', '36', NULL, NULL),
(1749, 'Ibuga', '36', NULL, NULL),
(1750, 'Ijumbi', '36', NULL, NULL),
(1751, 'Ikondo', '36', NULL, NULL),
(1752, 'Ikuza', '36', NULL, NULL),
(1753, 'Izigo', '36', NULL, NULL),
(1754, 'Kabirizi', '36', NULL, NULL),
(1755, 'Kagoma', '36', NULL, NULL),
(1756, 'Kamachumu', '36', NULL, NULL),
(1757, 'Karambi', '36', NULL, NULL),
(1758, 'Kasharunga', '36', NULL, NULL),
(1759, 'Kashasha', '36', NULL, NULL),
(1760, 'Katoke', '36', NULL, NULL),
(1761, 'Kerebe', '36', NULL, NULL),
(1762, 'Kibanga', '36', NULL, NULL),
(1763, 'Kikuku', '36', NULL, NULL),
(1764, 'Kimwani', '36', NULL, NULL),
(1765, 'Kishanda', '36', NULL, NULL),
(1766, 'Kyebitembe', '36', NULL, NULL),
(1767, 'Mafumbo', '36', NULL, NULL),
(1768, 'Magata Karutanga', '36', NULL, NULL),
(1769, 'Mayondwe', '36', NULL, NULL),
(1770, 'Mazinga Kisiwa', '36', NULL, NULL),
(1771, 'Mubunda', '36', NULL, NULL),
(1772, 'Muhutwe', '36', NULL, NULL),
(1773, 'Muleba', '36', NULL, NULL),
(1774, 'Mushabago', '36', NULL, NULL),
(1775, 'Ngenge', '36', NULL, NULL),
(1776, 'Nshamba', '36', NULL, NULL),
(1777, 'Nyakabango', '36', NULL, NULL),
(1778, 'Nyakatanga', '36', NULL, NULL),
(1779, 'Ruhanga', '36', NULL, NULL),
(1780, 'Rulanda', '36', NULL, NULL),
(1781, 'Rutoro', '36', NULL, NULL),
(1782, 'Buhare', '75', NULL, NULL),
(1783, 'Bweri', '75', NULL, NULL),
(1784, 'Iringo', '75', NULL, NULL),
(1785, 'Kamunyonge', '75', NULL, NULL),
(1786, 'Kigera', '75', NULL, NULL),
(1787, 'Kitaji', '75', NULL, NULL),
(1788, 'Makoko', '75', NULL, NULL),
(1789, 'Mukendo', '75', NULL, NULL),
(1790, 'Mwigobero', '75', NULL, NULL),
(1791, 'Mwisenge', '75', NULL, NULL),
(1792, 'Nyakato', '75', NULL, NULL),
(1793, 'Nyamatare', '75', NULL, NULL),
(1794, 'Nyasho', '75', NULL, NULL),
(1795, 'Bugwema', NULL, NULL, NULL),
(1796, 'Bukima', NULL, NULL, NULL),
(1797, 'Bukumi', NULL, NULL, NULL),
(1798, 'Bulinga', NULL, NULL, NULL),
(1799, 'Busambara', NULL, NULL, NULL),
(1800, 'Bwasi', NULL, NULL, NULL),
(1801, 'Kiriba', NULL, NULL, NULL),
(1802, 'Makojo', NULL, NULL, NULL),
(1803, 'Mugango', NULL, NULL, NULL),
(1804, 'Murangi', NULL, NULL, NULL),
(1805, 'Nyambono', NULL, NULL, NULL),
(1806, 'Nyamrandirira', NULL, NULL, NULL),
(1807, 'Suguti', NULL, NULL, NULL),
(1808, 'Tegeruka', NULL, NULL, NULL),
(1809, 'Bugarama', '37', NULL, NULL),
(1810, 'Bukiriro', '37', NULL, NULL),
(1811, 'Kabanga', '37', NULL, NULL),
(1812, 'Kanazi', '37', NULL, NULL),
(1813, 'Kasulo', '37', NULL, NULL),
(1814, 'Keza', '37', NULL, NULL),
(1815, 'Kibimba', '37', NULL, NULL),
(1816, 'Kirushya', '37', NULL, NULL),
(1817, 'Mabawe', '37', NULL, NULL),
(1818, 'Mbuba', '37', NULL, NULL),
(1819, 'Muganza', '37', NULL, NULL),
(1820, 'Mugoma', '37', NULL, NULL),
(1821, 'Murukulazo', '37', NULL, NULL),
(1822, 'Murusagamba', '37', NULL, NULL),
(1823, 'Ngara Mjini', '37', NULL, NULL),
(1824, 'Ntobeye', '37', NULL, NULL),
(1825, 'Nyakisasa', '37', NULL, NULL),
(1826, 'Nyamiyaga', '37', NULL, NULL),
(1827, 'Rulenge', '37', NULL, NULL),
(1828, 'Rusumo', '37', NULL, NULL),
(1829, 'Buhongwa', '108', NULL, NULL),
(1830, 'Butimba', '108', NULL, NULL),
(1831, 'Igogo', '108', NULL, NULL),
(1832, 'Igoma', '108', NULL, NULL),
(1833, 'Isamilo', '108', NULL, NULL),
(1834, 'Mahina', '108', NULL, NULL),
(1835, 'Mbugani', '108', NULL, NULL),
(1836, 'Mikuyuni (Mkuyuni)', '108', NULL, NULL),
(1837, 'Mirongo', '108', NULL, NULL),
(1838, 'Mkolani', '108', NULL, NULL),
(1839, 'Nyamagana', '108', NULL, NULL),
(1840, 'Pamba', '108', NULL, NULL),
(1841, 'Bukwimba', '24', NULL, NULL),
(1842, 'Busolwa', '24', NULL, NULL),
(1843, 'Izunya', '24', NULL, NULL),
(1844, 'Kafita', '24', NULL, NULL),
(1845, 'Kakora (Kakura)', '24', NULL, NULL),
(1846, 'Kharumwa', '24', NULL, NULL),
(1847, 'Mwingiro', '24', NULL, NULL),
(1848, 'Nyabulanda', '24', NULL, NULL),
(1849, 'Nyang\'hwale', '24', NULL, NULL),
(1850, 'Nyijundu', '24', NULL, NULL),
(1851, 'Nyugwa', '24', NULL, NULL),
(1852, 'Shabaka', '24', NULL, NULL),
(1853, 'Bukura', '76', NULL, NULL),
(1854, 'Bukwe', '76', NULL, NULL),
(1855, 'Goribe', '76', NULL, NULL),
(1856, 'Ikoma', '76', NULL, NULL),
(1857, 'Kigunga', '76', NULL, NULL),
(1858, 'Kirogo', '76', NULL, NULL),
(1859, 'Kisumwa', '76', NULL, NULL),
(1860, 'Kitembe', '76', NULL, NULL),
(1861, 'Komuge', '76', NULL, NULL),
(1862, 'Koryo', '76', NULL, NULL),
(1863, 'Kyang\'ombe', '76', NULL, NULL),
(1864, 'Mirare', '76', NULL, NULL),
(1865, 'Mkoma', '76', NULL, NULL),
(1866, 'Nyahongo', '76', NULL, NULL),
(1867, 'Nyamagaro', '76', NULL, NULL),
(1868, 'Nyamtinga', '76', NULL, NULL),
(1869, 'Nyamunga', '76', NULL, NULL),
(1870, 'Nyathorogo', '76', NULL, NULL),
(1871, 'Rabour', '76', NULL, NULL),
(1872, 'Roche', '76', NULL, NULL),
(1873, 'Tai', '76', NULL, NULL),
(1874, 'Bulyaheke', '109', NULL, NULL),
(1875, 'Bupandwa', '109', NULL, NULL),
(1876, 'Busisi', '109', NULL, NULL),
(1877, 'Buyagu', '109', NULL, NULL),
(1878, 'Buzilasoga', '109', NULL, NULL),
(1879, 'Chifunfu (Chifumfu)', '109', NULL, NULL),
(1880, 'Ibisabageni', '109', NULL, NULL),
(1881, 'Igalula', '109', NULL, NULL),
(1882, 'Igulumuki', '109', NULL, NULL),
(1883, 'Irenza', '109', NULL, NULL),
(1884, 'Kafunzo', '109', NULL, NULL),
(1885, 'Kagunga', '109', NULL, NULL),
(1886, 'Kalebezo', '109', NULL, NULL),
(1887, 'Kasenyi', '109', NULL, NULL),
(1888, 'Kasungamile', '109', NULL, NULL),
(1889, 'Katunguru', '109', NULL, NULL),
(1890, 'Katwe', '109', NULL, NULL),
(1891, 'Kazunzu', '109', NULL, NULL),
(1892, 'Kishinda', '109', NULL, NULL),
(1893, 'Lugata', '109', NULL, NULL),
(1894, 'Maisome', '109', NULL, NULL),
(1895, 'Mwabaluhi (Mwambului)', '109', NULL, NULL),
(1896, 'Nyakaliro', '109', NULL, NULL),
(1897, 'Nyakasasa', '109', NULL, NULL),
(1898, 'Nyakasungwa (Nyakasunga)', '109', NULL, NULL),
(1899, 'Nyamatongo', '109', NULL, NULL),
(1900, 'Nyamazugo', '109', NULL, NULL),
(1901, 'Nyampande', '109', NULL, NULL),
(1902, 'Nyampulukano', '109', NULL, NULL),
(1903, 'Nyanzenda', '109', NULL, NULL),
(1904, 'Nyatukala', '109', NULL, NULL),
(1905, 'Nyehunge', '109', NULL, NULL),
(1906, 'Sima', '109', NULL, NULL),
(1907, 'Tabaruka', '109', NULL, NULL),
(1908, 'Busawe', '77', NULL, NULL),
(1909, 'Geitasamo', '77', NULL, NULL),
(1910, 'Ikoma', '77', NULL, NULL),
(1911, 'Issenye', '77', NULL, NULL),
(1912, 'Kebanchabancha', '77', NULL, NULL),
(1913, 'Kenyamonta', '77', NULL, NULL),
(1914, 'Kisaka', '77', NULL, NULL),
(1915, 'Kisangura', '77', NULL, NULL),
(1916, 'Kyambahi', '77', NULL, NULL),
(1917, 'Machochwe', '77', NULL, NULL),
(1918, 'Magange', '77', NULL, NULL),
(1919, 'Majimoto', '77', NULL, NULL),
(1920, 'Manchira', '77', NULL, NULL),
(1921, 'Mbalibali', '77', NULL, NULL),
(1922, 'Morotonga', '77', NULL, NULL),
(1923, 'Mosongo', '77', NULL, NULL),
(1924, 'Mugumu', '77', NULL, NULL),
(1925, 'Natta', '77', NULL, NULL),
(1926, 'Nyamatare', '77', NULL, NULL),
(1927, 'Nyambureti', '77', NULL, NULL),
(1928, 'Nyamoko', '77', NULL, NULL),
(1929, 'Nyansurura', '77', NULL, NULL),
(1930, 'Rigicha', '77', NULL, NULL),
(1931, 'Ring\'wani', '77', NULL, NULL),
(1932, 'Rung\'abure', '77', NULL, NULL),
(1933, 'Sedeco', '77', NULL, NULL),
(1934, 'Stendi Kuu', '77', NULL, NULL),
(1935, 'Uwanja wa Ndege', '77', NULL, NULL),
(1936, 'Chamaguha', '138', NULL, NULL),
(1937, 'Chibe', '138', NULL, NULL),
(1938, 'Ibadakuli', '138', NULL, NULL),
(1939, 'Ibinzamata', '138', NULL, NULL),
(1940, 'Kambarage', '138', NULL, NULL),
(1941, 'Kitangili', '138', NULL, NULL),
(1942, 'Kizumbi', '138', NULL, NULL),
(1943, 'Kolandoto', '138', NULL, NULL),
(1944, 'Lubaga', '138', NULL, NULL),
(1945, 'Masekelo', '138', NULL, NULL),
(1946, 'Mwamalili', '138', NULL, NULL),
(1947, 'Mwawaza', '138', NULL, NULL),
(1948, 'Ndala', '138', NULL, NULL),
(1949, 'Ndembezi', '138', NULL, NULL),
(1950, 'Ngokolo', '138', NULL, NULL),
(1951, 'Old Shinyanga', '138', NULL, NULL),
(1952, 'Shinyanga Mjini', '138', NULL, NULL),
(1953, 'Bukene', NULL, NULL, NULL),
(1954, 'Didia', NULL, NULL, NULL),
(1955, 'Ilola', NULL, NULL, NULL),
(1956, 'Imesela', NULL, NULL, NULL),
(1957, 'Iselamagazi', NULL, NULL, NULL),
(1958, 'Itwangi', NULL, NULL, NULL),
(1959, 'Lyabukande', NULL, NULL, NULL),
(1960, 'Lyabusalu', NULL, NULL, NULL),
(1961, 'Lyamidati', NULL, NULL, NULL),
(1962, 'Masengwa', NULL, NULL, NULL),
(1963, 'Mwakitolyo (Mwakitolyoo)', NULL, NULL, NULL),
(1964, 'Mwalukwa', NULL, NULL, NULL),
(1965, 'Mwamala', NULL, NULL, NULL),
(1966, 'Mwantini', NULL, NULL, NULL),
(1967, 'Mwenge', NULL, NULL, NULL),
(1968, 'Nsalala', NULL, NULL, NULL),
(1969, 'Nyamalogo', NULL, NULL, NULL),
(1970, 'Nyida', NULL, NULL, NULL),
(1971, 'Pandagichiza', NULL, NULL, NULL),
(1972, 'Puni', NULL, NULL, NULL),
(1973, 'Salawe', NULL, NULL, NULL),
(1974, 'Samuye', NULL, NULL, NULL),
(1975, 'Solwa', NULL, NULL, NULL),
(1976, 'Tinde', NULL, NULL, NULL),
(1977, 'Usanda', NULL, NULL, NULL),
(1978, 'Usule', NULL, NULL, NULL),
(1979, 'Binagi', '78', NULL, NULL),
(1980, 'Bomani', '78', NULL, NULL),
(1981, 'Bumera', '78', NULL, NULL),
(1982, 'Genyange', '78', NULL, NULL),
(1983, 'Gorong\'a', '78', NULL, NULL),
(1984, 'Itiryo', '78', NULL, NULL),
(1985, 'Kemambo', '78', NULL, NULL),
(1986, 'Kentare', '78', NULL, NULL),
(1987, 'Kibasuka', '78', NULL, NULL),
(1988, 'Kiore', '78', NULL, NULL),
(1989, 'Komaswa', '78', NULL, NULL),
(1990, 'Manga', '78', NULL, NULL),
(1991, 'Matongo', '78', NULL, NULL),
(1992, 'Mbogi', '78', NULL, NULL),
(1993, 'Muriba', '78', NULL, NULL),
(1994, 'Mwema', '78', NULL, NULL),
(1995, 'Nyakonga', '78', NULL, NULL),
(1996, 'Nyamaranga', '78', NULL, NULL),
(1997, 'Nyamisangura', '78', NULL, NULL),
(1998, 'Nyamwaga', '78', NULL, NULL),
(1999, 'Nyandoto', '78', NULL, NULL),
(2000, 'Nyansincha (Nyansicha)', '78', NULL, NULL),
(2001, 'Nyanungu', '78', NULL, NULL),
(2002, 'Nyarero', '78', NULL, NULL),
(2003, 'Nyarokoba', '78', NULL, NULL),
(2004, 'Pemba', '78', NULL, NULL),
(2005, 'Sabasaba', '78', NULL, NULL),
(2006, 'Sirari', '78', NULL, NULL),
(2007, 'Susuni', '78', NULL, NULL),
(2008, 'Turwa', '78', NULL, NULL),
(2009, 'Bukanda', '110', NULL, NULL),
(2010, 'Bukiko (Bukiro)', '110', NULL, NULL),
(2011, 'Bukindo', '110', NULL, NULL),
(2012, 'Bukongo', '110', NULL, NULL),
(2013, 'Bukungu', '110', NULL, NULL),
(2014, 'Bwiro', '110', NULL, NULL),
(2015, 'Bwisya', '110', NULL, NULL),
(2016, 'Igalla (Igala)', '110', NULL, NULL),
(2017, 'Ilangala', '110', NULL, NULL),
(2018, 'Irugwa', '110', NULL, NULL),
(2019, 'Kagera', '110', NULL, NULL),
(2020, 'Kagunguli', '110', NULL, NULL),
(2021, 'Kakerege', '110', NULL, NULL),
(2022, 'Mukituntu', '110', NULL, NULL),
(2023, 'Muriti', '110', NULL, NULL),
(2024, 'Murutunguru', '110', NULL, NULL),
(2025, 'Nakatunguru', '110', NULL, NULL),
(2026, 'Namagondo', '110', NULL, NULL),
(2027, 'Namilembe', '110', NULL, NULL),
(2028, 'Nansio', '110', NULL, NULL),
(2029, 'Nduruma', '110', NULL, NULL),
(2030, 'Ngoma', '110', NULL, NULL),
(2031, 'Nkilizya', '110', NULL, NULL),
(2032, 'Nyamanga', '110', NULL, NULL),
(2033, 'Buhingu', '48', NULL, NULL),
(2034, 'Igalula', '48', NULL, NULL),
(2035, 'Ilagala', '48', NULL, NULL),
(2036, 'Itebula', '48', NULL, NULL),
(2037, 'Kalya', '48', NULL, NULL),
(2038, 'Kandaga', '48', NULL, NULL),
(2039, 'Kazuramimba', '48', NULL, NULL),
(2040, 'Mganza', '48', NULL, NULL),
(2041, 'Mtego wa Noti', '48', NULL, NULL),
(2042, 'Nguruka', '48', NULL, NULL),
(2043, 'Sigunga', '48', NULL, NULL),
(2044, 'Simbo', '48', NULL, NULL),
(2045, 'Sunuka', '48', NULL, NULL),
(2046, 'Uvinza', '48', NULL, NULL),
(2047, 'Baraa', '2', NULL, NULL),
(2048, 'Daraja Mbili', '2', NULL, NULL),
(2049, 'Elerai', '2', NULL, NULL),
(2050, 'Engutoto', '2', NULL, NULL),
(2051, 'Kaloleni', '2', NULL, NULL),
(2052, 'Kati', '2', NULL, NULL),
(2053, 'Kimandolu', '2', NULL, NULL),
(2054, 'Lemara', '2', NULL, NULL),
(2055, 'Levolosi', '2', NULL, NULL),
(2056, 'Moshono', '2', NULL, NULL),
(2057, 'Ngarenaro', '2', NULL, NULL),
(2058, 'Olasiti', '2', NULL, NULL),
(2059, 'Oloirien (Oloirieni)', '2', NULL, NULL),
(2060, 'Sekei', '2', NULL, NULL),
(2061, 'Sokoni I', '2', NULL, NULL),
(2062, 'Sombetini', '2', NULL, NULL),
(2063, 'Terrat', '2', NULL, NULL),
(2064, 'Themi', '2', NULL, NULL),
(2065, 'Unga Limited', '2', NULL, NULL),
(2066, 'Bangata', '3', NULL, NULL),
(2067, 'Bwawani', '3', NULL, NULL),
(2068, 'Ilkiding\'a', '3', NULL, NULL),
(2069, 'Kimnyaki', '3', NULL, NULL),
(2070, 'Kiranyi', '3', NULL, NULL),
(2071, 'Kisongo', '3', NULL, NULL),
(2072, 'Mateves', '3', NULL, NULL),
(2073, 'Mlangarini', '3', NULL, NULL),
(2074, 'Moivo', '3', NULL, NULL),
(2075, 'Mussa', '3', NULL, NULL),
(2076, 'Mwandeti', '3', NULL, NULL),
(2077, 'Nduruma', '3', NULL, NULL),
(2078, 'Oldonyosambu', '3', NULL, NULL),
(2079, 'Oljoro', '3', NULL, NULL),
(2080, 'Olkokola', '3', NULL, NULL),
(2081, 'Olmotonyi', '3', NULL, NULL),
(2082, 'Olorieni', '3', NULL, NULL),
(2083, 'Oltoroto', '3', NULL, NULL),
(2084, 'Oltrumet', '3', NULL, NULL),
(2085, 'Sambasha', '3', NULL, NULL),
(2086, 'Sokoni II', '3', NULL, NULL),
(2087, 'Arri', NULL, NULL, NULL),
(2088, 'Ayasanda', NULL, NULL, NULL),
(2089, 'Baoy (Boay)', NULL, NULL, NULL),
(2090, 'Bashnet (Bashneti)', NULL, NULL, NULL),
(2091, 'Dabil', NULL, NULL, NULL),
(2092, 'Dareda', NULL, NULL, NULL),
(2093, 'Duru', NULL, NULL, NULL),
(2094, 'Endakiso (Endokise)', NULL, NULL, NULL),
(2095, 'Gallapo (Galapo)', NULL, NULL, NULL),
(2096, 'Gidas', NULL, NULL, NULL),
(2097, 'Kiru', NULL, NULL, NULL),
(2098, 'Madunga', NULL, NULL, NULL),
(2099, 'Magara', NULL, NULL, NULL),
(2100, 'Magugu', NULL, NULL, NULL),
(2101, 'Mamire', NULL, NULL, NULL),
(2102, 'Mwada', NULL, NULL, NULL),
(2103, 'Nar', NULL, NULL, NULL),
(2104, 'Nkaiti', NULL, NULL, NULL),
(2105, 'Qash (Qashi)', NULL, NULL, NULL),
(2106, 'Riroda', NULL, NULL, NULL),
(2107, 'Ufana', NULL, NULL, NULL),
(2108, 'Babati', '66', NULL, NULL),
(2109, 'Bagara', '66', NULL, NULL),
(2110, 'Bonga', '66', NULL, NULL),
(2111, 'Maisaka', '66', NULL, NULL),
(2112, 'Mutuka', '66', NULL, NULL),
(2113, 'Nangara', '66', NULL, NULL),
(2114, 'Sigino', '66', NULL, NULL),
(2115, 'Singe', '66', NULL, NULL),
(2116, 'Hai Mjini', '49', NULL, NULL),
(2117, 'KIA', '49', NULL, NULL),
(2118, 'Machame Kaskazini', '49', NULL, NULL),
(2119, 'Machame Kusini', '49', NULL, NULL),
(2120, 'Machame Magharibi', '49', NULL, NULL),
(2121, 'Machame Mashariki', '49', NULL, NULL),
(2122, 'Machame Narumu', '49', NULL, NULL),
(2123, 'Machame Uroki', '49', NULL, NULL),
(2124, 'Machame Weruweru', '49', NULL, NULL),
(2125, 'Masama Kati', '49', NULL, NULL),
(2126, 'Masama Kusini', '49', NULL, NULL),
(2127, 'Masama Magharibi', '49', NULL, NULL),
(2128, 'Masama Mashariki', '49', NULL, NULL),
(2129, 'Masama Rundugai', '49', NULL, NULL),
(2130, 'Balangidalalu (Balagidalalu)', '68', NULL, NULL),
(2131, 'Bassodesh', '68', NULL, NULL),
(2132, 'Bassotu', '68', NULL, NULL),
(2133, 'Dirma', '68', NULL, NULL),
(2134, 'Endasak', '68', NULL, NULL),
(2135, 'Endasiwold', '68', NULL, NULL),
(2136, 'Ganana', '68', NULL, NULL),
(2137, 'Gehandu', '68', NULL, NULL),
(2138, 'Gendabi', '68', NULL, NULL),
(2139, 'Getanuwas', '68', NULL, NULL),
(2140, 'Gidahababieg', '68', NULL, NULL),
(2141, 'Gisambalang', '68', NULL, NULL),
(2142, 'Gitting (Giting)', '68', NULL, NULL),
(2143, 'Hidet', '68', NULL, NULL),
(2144, 'Hirbadaw', '68', NULL, NULL),
(2145, 'Katesh', '68', NULL, NULL),
(2146, 'Laghanga', '68', NULL, NULL),
(2147, 'Lalaji', '68', NULL, NULL),
(2148, 'Masakta', '68', NULL, NULL),
(2149, 'Masqaroda', '68', NULL, NULL),
(2150, 'Measkron (Maskron)', '68', NULL, NULL),
(2151, 'Mogitu', '68', NULL, NULL),
(2152, 'Nangwa', '68', NULL, NULL),
(2153, 'Simbay', '68', NULL, NULL),
(2154, 'Sirop', '68', NULL, NULL),
(2155, 'Kabuku', NULL, NULL, NULL),
(2156, 'Kabuku Ndani', NULL, NULL, NULL),
(2157, 'Kang\'ata', NULL, NULL, NULL),
(2158, 'Kiva', NULL, NULL, NULL),
(2159, 'Komkonga', NULL, NULL, NULL),
(2160, 'Kwachaga', NULL, NULL, NULL),
(2161, 'Kwaluguru', NULL, NULL, NULL),
(2162, 'Kwamatuku', NULL, NULL, NULL),
(2163, 'Kwamgwe', NULL, NULL, NULL),
(2164, 'Kwamsisi', NULL, NULL, NULL),
(2165, 'Kwankonje (Kwamkonje)', NULL, NULL, NULL),
(2166, 'Kwasunga', NULL, NULL, NULL),
(2167, 'Kwedizinga', NULL, NULL, NULL),
(2168, 'Mazingara', NULL, NULL, NULL),
(2169, 'Mgambo', NULL, NULL, NULL),
(2170, 'Misima', NULL, NULL, NULL),
(2171, 'Mkata', NULL, NULL, NULL),
(2172, 'Ndolwa', NULL, NULL, NULL),
(2173, 'Segera', NULL, NULL, NULL),
(2174, 'Sindeni', NULL, NULL, NULL),
(2175, 'Chanika', '162', NULL, NULL),
(2176, 'Kideleko', '162', NULL, NULL),
(2177, 'Konje', '162', NULL, NULL),
(2178, 'Kwamagome', '162', NULL, NULL),
(2179, 'Kwediyamba', '162', NULL, NULL),
(2180, 'Kwenjugo', '162', NULL, NULL),
(2181, 'Mabanda', '162', NULL, NULL),
(2182, 'Malezi', '162', NULL, NULL),
(2183, 'Mdoe', '162', NULL, NULL),
(2184, 'Mlimani', '162', NULL, NULL),
(2185, 'Msasa', '162', NULL, NULL),
(2186, 'Vibaoni', '162', NULL, NULL),
(2187, 'Baray', '4', NULL, NULL),
(2188, 'Buger', '4', NULL, NULL),
(2189, 'Daa', '4', NULL, NULL),
(2190, 'Endabash', '4', NULL, NULL),
(2191, 'Endamaghang', '4', NULL, NULL),
(2192, 'Endamarariek', '4', NULL, NULL),
(2193, 'Ganako', '4', NULL, NULL),
(2194, 'Kansay', '4', NULL, NULL),
(2195, 'Karatu', '4', NULL, NULL),
(2196, 'Mang\'ola', '4', NULL, NULL),
(2197, 'Mbulumbulu', '4', NULL, NULL),
(2198, 'Oldeani', '4', NULL, NULL),
(2199, 'Qurus', '4', NULL, NULL),
(2200, 'Rhotia', '4', NULL, NULL),
(2201, 'Jaila', '163', NULL, NULL),
(2202, 'Kibirashi', '163', NULL, NULL),
(2203, 'Kikunde', '163', NULL, NULL),
(2204, 'Kilindi', '163', NULL, NULL),
(2205, 'Kilwa', '163', NULL, NULL),
(2206, 'Kimbe', '163', NULL, NULL),
(2207, 'Kisangasa', '163', NULL, NULL),
(2208, 'Kwediboma', '163', NULL, NULL),
(2209, 'Kwekivu', '163', NULL, NULL),
(2210, 'Lwande', '163', NULL, NULL),
(2211, 'Mabalanga', '163', NULL, NULL),
(2212, 'Masagulu (Masagalu)', '163', NULL, NULL),
(2213, 'Mkindi', '163', NULL, NULL),
(2214, 'Msanja', '163', NULL, NULL),
(2215, 'Mvungwe', '163', NULL, NULL),
(2216, 'Negero', '163', NULL, NULL),
(2217, 'Pagwi', '163', NULL, NULL),
(2218, 'Saunyi', '163', NULL, NULL),
(2219, 'Songe', '163', NULL, NULL),
(2220, 'Tunguli', '163', NULL, NULL),
(2221, 'Bwagamoyo', '69', NULL, NULL),
(2222, 'Chapakazi', '69', NULL, NULL),
(2223, 'Dongo', '69', NULL, NULL),
(2224, 'Dosidosi', '69', NULL, NULL),
(2225, 'Engusero', '69', NULL, NULL),
(2226, 'Kibaya', '69', NULL, NULL),
(2227, 'Kijungu', '69', NULL, NULL),
(2228, 'Lengatei', '69', NULL, NULL),
(2229, 'Loolera', '69', NULL, NULL),
(2230, 'Magungu', '69', NULL, NULL),
(2231, 'Makame', '69', NULL, NULL),
(2232, 'Matui', '69', NULL, NULL),
(2233, 'Namelock', '69', NULL, NULL),
(2234, 'Ndedo', '69', NULL, NULL),
(2235, 'Njoro', '69', NULL, NULL),
(2236, 'Olboloti (Olboroti)', '69', NULL, NULL),
(2237, 'Partimbo', '69', NULL, NULL),
(2238, 'Songambele', '69', NULL, NULL),
(2239, 'Sunya', '69', NULL, NULL),
(2240, 'Bungu', NULL, NULL, NULL),
(2241, 'Chekelei', NULL, NULL, NULL),
(2242, 'Dindira', NULL, NULL, NULL),
(2243, 'Kerenge', NULL, NULL, NULL),
(2244, 'Kizara', NULL, NULL, NULL),
(2245, 'Kwagunda', NULL, NULL, NULL),
(2246, 'Kwashemshi', NULL, NULL, NULL),
(2247, 'Lutindi', NULL, NULL, NULL),
(2248, 'Magamba Kwalukonge', NULL, NULL, NULL),
(2249, 'Magoma', NULL, NULL, NULL),
(2250, 'Makuyuni', NULL, NULL, NULL),
(2251, 'Mashewa', NULL, NULL, NULL),
(2252, 'Mazinde', NULL, NULL, NULL),
(2253, 'Mkalamo', NULL, NULL, NULL),
(2254, 'Mkomazi', NULL, NULL, NULL),
(2255, 'Mnyuzi', NULL, NULL, NULL),
(2256, 'Mombo', NULL, NULL, NULL),
(2257, 'Mpale', NULL, NULL, NULL),
(2258, 'Mswaha', NULL, NULL, NULL),
(2259, 'Vugiri', NULL, NULL, NULL),
(2260, 'Kilole', '164', NULL, NULL),
(2261, 'Kwamndolwa', '164', NULL, NULL),
(2262, 'Kwamsisi', '164', NULL, NULL),
(2263, 'Magunga', '164', NULL, NULL),
(2264, 'Manundu', '164', NULL, NULL),
(2265, 'Mtonga', '164', NULL, NULL),
(2266, 'Ngombezi', '164', NULL, NULL),
(2267, 'Old Korogwe', '164', NULL, NULL),
(2268, 'Eleng\'ata Dapash', '5', NULL, NULL),
(2269, 'Engarenaibor', '5', NULL, NULL),
(2270, 'Engikaret', '5', NULL, NULL),
(2271, 'Gelai Lumbwa', '5', NULL, NULL),
(2272, 'Gelai Meirugoi', '5', NULL, NULL),
(2273, 'Ilorienito', '5', NULL, NULL),
(2274, 'Kamwanga', '5', NULL, NULL),
(2275, 'Kimokouwa', '5', NULL, NULL),
(2276, 'Kitumbeine (Kitumbeine)', '5', NULL, NULL),
(2277, 'Longido', '5', NULL, NULL),
(2278, 'Matale', '5', NULL, NULL),
(2279, 'Mundarara', '5', NULL, NULL),
(2280, 'Namanga', '5', NULL, NULL),
(2281, 'Olmolog', '5', NULL, NULL),
(2282, 'Orbomba', '5', NULL, NULL),
(2283, 'Tingatinga', '5', NULL, NULL),
(2284, 'Baga', '166', NULL, NULL),
(2285, 'Bumbuli', '166', NULL, NULL),
(2286, 'Dule \'B\'', '166', NULL, NULL),
(2287, 'Dule \'M\'', '166', NULL, NULL),
(2288, 'Funta', '166', NULL, NULL),
(2289, 'Gare', '166', NULL, NULL),
(2290, 'Hemtoye', '166', NULL, NULL),
(2291, 'Kilole', '166', NULL, NULL),
(2292, 'Kwai', '166', NULL, NULL),
(2293, 'Kwekanga', '166', NULL, NULL),
(2294, 'Kwemashai', '166', NULL, NULL),
(2295, 'Kwemshasha', '166', NULL, NULL),
(2296, 'Lukozi', '166', NULL, NULL),
(2297, 'Lunguza', '166', NULL, NULL),
(2298, 'Lushoto', '166', NULL, NULL),
(2299, 'Maheza Ngulu', '166', NULL, NULL),
(2300, 'Makanya', '166', NULL, NULL),
(2301, 'Malibwi', '166', NULL, NULL),
(2302, 'Malindi', '166', NULL, NULL),
(2303, 'Mamba', '166', NULL, NULL),
(2304, 'Manolo', '166', NULL, NULL),
(2305, 'Mayo', '166', NULL, NULL),
(2306, 'Mbaramo', '166', NULL, NULL),
(2307, 'Mbuzii', '166', NULL, NULL),
(2308, 'Mgwashi', '166', NULL, NULL),
(2309, 'Milingano (Milingano)', '166', NULL, NULL),
(2310, 'Mlalo', '166', NULL, NULL),
(2311, 'Mlola', '166', NULL, NULL),
(2312, 'Mnazi', '166', NULL, NULL),
(2313, 'Mng\'aro', '166', NULL, NULL),
(2314, 'Mponde', '166', NULL, NULL),
(2315, 'Mtae', '166', NULL, NULL),
(2316, 'Mwangoi', '166', NULL, NULL),
(2317, 'Ngulwi', '166', NULL, NULL),
(2318, 'Ngwelo', '166', NULL, NULL),
(2319, 'Nkongoi', '166', NULL, NULL),
(2320, 'Rangwi', '166', NULL, NULL),
(2321, 'Shume', '166', NULL, NULL),
(2322, 'Soni', '166', NULL, NULL),
(2323, 'Sunga', '166', NULL, NULL),
(2324, 'Tamota', '166', NULL, NULL),
(2325, 'Ubiri', '166', NULL, NULL),
(2326, 'Usambara', '166', NULL, NULL),
(2327, 'Vuga', '166', NULL, NULL),
(2328, 'Ayamaami', '70', NULL, NULL),
(2329, 'Ayamohe', '70', NULL, NULL),
(2330, 'Bargish', '70', NULL, NULL),
(2331, 'Bashay', '70', NULL, NULL),
(2332, 'Daudi', '70', NULL, NULL),
(2333, 'Dinamu', '70', NULL, NULL),
(2334, 'Dongobesh', '70', NULL, NULL),
(2335, 'Endagikot', '70', NULL, NULL),
(2336, 'Endamilay', '70', NULL, NULL),
(2337, 'Eshkesh', '70', NULL, NULL),
(2338, 'Gehandu', '70', NULL, NULL),
(2339, 'Geterer', '70', NULL, NULL),
(2340, 'Gidihim', '70', NULL, NULL),
(2341, 'Gunyoda', '70', NULL, NULL),
(2342, 'Hayderer', '70', NULL, NULL),
(2343, 'Haydom', '70', NULL, NULL),
(2344, 'Imboru', '70', NULL, NULL),
(2345, 'Kainam', '70', NULL, NULL),
(2346, 'Maghang', '70', NULL, NULL),
(2347, 'Marang', '70', NULL, NULL),
(2348, 'Maretadu', '70', NULL, NULL),
(2349, 'Masieda', '70', NULL, NULL),
(2350, 'Masqaroda', '70', NULL, NULL),
(2351, 'Murray', '70', NULL, NULL),
(2352, 'Nahasey', '70', NULL, NULL),
(2353, 'Nambisi', '70', NULL, NULL),
(2354, 'Sanu Baray', '70', NULL, NULL),
(2355, 'Tlawi', '70', NULL, NULL),
(2356, 'Tumati', '70', NULL, NULL),
(2357, 'Uhuru', '70', NULL, NULL),
(2358, 'Yaeda Ampa', '70', NULL, NULL),
(2359, 'Yaeda Chini', '70', NULL, NULL),
(2360, 'Akheri', '1', NULL, NULL),
(2361, 'Kikatiti', '1', NULL, NULL),
(2362, 'Kikwe', '1', NULL, NULL),
(2363, 'King\'ori', '1', NULL, NULL),
(2364, 'Leguruki', '1', NULL, NULL),
(2365, 'Maji ya Chai', '1', NULL, NULL),
(2366, 'Makiba', '1', NULL, NULL),
(2367, 'Maroroni', '1', NULL, NULL),
(2368, 'Mbuguni', '1', NULL, NULL),
(2369, 'Ngarenanyuki', '1', NULL, NULL),
(2370, 'Nkoanrua', '1', NULL, NULL),
(2371, 'Nkoaranga', '1', NULL, NULL),
(2372, 'Nkoarisambu', '1', NULL, NULL),
(2373, 'Poli', '1', NULL, NULL),
(2374, 'Seela Sing\'isi', '1', NULL, NULL),
(2375, 'Songoro', '1', NULL, NULL),
(2376, 'Usa River', '1', NULL, NULL),
(2377, 'Boma', '168', NULL, NULL),
(2378, 'Bosha', '168', NULL, NULL),
(2379, 'Bwiti', '168', NULL, NULL),
(2380, 'Daluni', '168', NULL, NULL),
(2381, 'Doda', '168', NULL, NULL),
(2382, 'Duga', '168', NULL, NULL),
(2383, 'Gombero', '168', NULL, NULL),
(2384, 'Kigongoi', '168', NULL, NULL),
(2385, 'Kwale', '168', NULL, NULL),
(2386, 'Manza', '168', NULL, NULL),
(2387, 'Mapatano', '168', NULL, NULL),
(2388, 'Maramba', '168', NULL, NULL),
(2389, 'Mayomboni', '168', NULL, NULL),
(2390, 'Mhinduro', '168', NULL, NULL),
(2391, 'Mkinga', '168', NULL, NULL),
(2392, 'Mnyenzani', '168', NULL, NULL),
(2393, 'Moa', '168', NULL, NULL),
(2394, 'Mtimbwani', '168', NULL, NULL),
(2395, 'Mwakijembe', '168', NULL, NULL),
(2396, 'Parungu Kasera', '168', NULL, NULL),
(2397, 'Sigaya', '168', NULL, NULL),
(2398, 'Engaruka', '6', NULL, NULL),
(2399, 'Engutoto', '6', NULL, NULL),
(2400, 'Esilalei', '6', NULL, NULL),
(2401, 'Lepurko', '6', NULL, NULL),
(2402, 'Lolkisale', '6', NULL, NULL),
(2403, 'Majengo', '6', NULL, NULL),
(2404, 'Makuyuni', '6', NULL, NULL),
(2405, 'Meserani', '6', NULL, NULL),
(2406, 'Moita', '6', NULL, NULL),
(2407, 'Monduli Juu', '6', NULL, NULL),
(2408, 'Monduli Mjini', '6', NULL, NULL),
(2409, 'Mswakini', '6', NULL, NULL),
(2410, 'Mto wa Mbu', '6', NULL, NULL),
(2411, 'Selela', '6', NULL, NULL),
(2412, 'Sepeko', '6', NULL, NULL),
(2413, 'Boma Mbuzi', '51', NULL, NULL),
(2414, 'Bondeni', '51', NULL, NULL),
(2415, 'Kaloleni', '51', NULL, NULL),
(2416, 'Karanga', '51', NULL, NULL),
(2417, 'Kiboriloni', '51', NULL, NULL),
(2418, 'Kilimanjaro', '51', NULL, NULL),
(2419, 'Kiusa', '51', NULL, NULL),
(2420, 'Korongoni', '51', NULL, NULL),
(2421, 'Longuo B', '51', NULL, NULL),
(2422, 'Majengo', '51', NULL, NULL),
(2423, 'Mawenzi', '51', NULL, NULL),
(2424, 'Mfumuni', '51', NULL, NULL),
(2425, 'Miembeni', '51', NULL, NULL),
(2426, 'Mji Mpya', '51', NULL, NULL),
(2427, 'Msaranga', '51', NULL, NULL),
(2428, 'Ng\'ambo', '51', NULL, NULL),
(2429, 'Njoro', '51', NULL, NULL),
(2430, 'Pasua', '51', NULL, NULL),
(2431, 'Rau', '51', NULL, NULL),
(2432, 'Shirimatunda', '51', NULL, NULL),
(2433, 'Soweto', '51', NULL, NULL),
(2434, 'Arusha Chini', NULL, NULL, NULL),
(2435, 'Kahe', NULL, NULL, NULL),
(2436, 'Kahe Mashariki', NULL, NULL, NULL),
(2437, 'Kibosho Kati', NULL, NULL, NULL),
(2438, 'Kibosho Magharibi', NULL, NULL, NULL),
(2439, 'Kibosho Mashariki', NULL, NULL, NULL),
(2440, 'Kilema Kaskazini', NULL, NULL, NULL),
(2441, 'Kilema Kati', NULL, NULL, NULL),
(2442, 'Kilema Kusini', NULL, NULL, NULL),
(2443, 'Kimochi', NULL, NULL, NULL),
(2444, 'Kindi', NULL, NULL, NULL),
(2445, 'Kirima', NULL, NULL, NULL),
(2446, 'Kirua Vunjo Kusini', NULL, NULL, NULL),
(2447, 'Kirua Vunjo Magharibi', NULL, NULL, NULL),
(2448, 'Kirua Vunjo Mashariki', NULL, NULL, NULL),
(2449, 'Mabogini', NULL, NULL, NULL),
(2450, 'Makuyuni', NULL, NULL, NULL),
(2451, 'Mamba Kaskazini', NULL, NULL, NULL),
(2452, 'Mamba Kusini', NULL, NULL, NULL),
(2453, 'Marangu Magharibi', NULL, NULL, NULL),
(2454, 'Marangu Mashariki', NULL, NULL, NULL),
(2455, 'Mbokomu', NULL, NULL, NULL),
(2456, 'Mwika Kaskazini', NULL, NULL, NULL),
(2457, 'Mwika Kusini', NULL, NULL, NULL),
(2458, 'Okaoni', NULL, NULL, NULL),
(2459, 'Old Moshi Magharibi', NULL, NULL, NULL),
(2460, 'Old Moshi Mashariki', NULL, NULL, NULL),
(2461, 'Uru Kaskazini', NULL, NULL, NULL),
(2462, 'Uru Kusini', NULL, NULL, NULL),
(2463, 'Uru Mashariki', NULL, NULL, NULL),
(2464, 'Uru Shimbwe', NULL, NULL, NULL),
(2465, 'Amani', '167', NULL, NULL),
(2466, 'Bwembwera', '167', NULL, NULL),
(2467, 'Genge', '167', NULL, NULL),
(2468, 'Kicheba', '167', NULL, NULL),
(2469, 'Kigombe', '167', NULL, NULL),
(2470, 'Kilulu', '167', NULL, NULL),
(2471, 'Kisiwani', '167', NULL, NULL),
(2472, 'Kwafungo', '167', NULL, NULL),
(2473, 'Kwakifua', '167', NULL, NULL),
(2474, 'Kwemkabala', '167', NULL, NULL),
(2475, 'Lusanga', '167', NULL, NULL),
(2476, 'Magila', '167', NULL, NULL),
(2477, 'Magoroto', '167', NULL, NULL),
(2478, 'Majengo', '167', NULL, NULL),
(2479, 'Masuguru', '167', NULL, NULL),
(2480, 'Mbaramo', '167', NULL, NULL),
(2481, 'Mbomole', '167', NULL, NULL),
(2482, 'Mhamba', '167', NULL, NULL),
(2483, 'Misalai', '167', NULL, NULL),
(2484, 'Misozwe', '167', NULL, NULL),
(2485, 'Mkuzi', '167', NULL, NULL),
(2486, 'Mlingoni (Mlingano)', '167', NULL, NULL),
(2487, 'Mpapayu', '167', NULL, NULL),
(2488, 'Mtindiro', '167', NULL, NULL),
(2489, 'Ngomeni', '167', NULL, NULL),
(2490, 'Nkumba', '167', NULL, NULL),
(2491, 'Pande Darajani', '167', NULL, NULL),
(2492, 'Potwe', '167', NULL, NULL),
(2493, 'Songa', '167', NULL, NULL),
(2494, 'Tanganyika', '167', NULL, NULL),
(2495, 'Tingeni', '167', NULL, NULL),
(2496, 'Tongwe', '167', NULL, NULL),
(2497, 'Zirai', '167', NULL, NULL),
(2498, 'Chomvu', '52', NULL, NULL),
(2499, 'Jipe', '52', NULL, NULL),
(2500, 'Kifula', '52', NULL, NULL),
(2501, 'Kighare', '52', NULL, NULL),
(2502, 'Kigonigoni (Kigoningoni)', '52', NULL, NULL),
(2503, 'Kileo', '52', NULL, NULL),
(2504, 'Kilomeni', '52', NULL, NULL),
(2505, 'Kirongwe', '52', NULL, NULL),
(2506, 'Kirya', '52', NULL, NULL),
(2507, 'Kivisini', '52', NULL, NULL),
(2508, 'Kwakoa', '52', NULL, NULL),
(2509, 'Lang\'ata', '52', NULL, NULL),
(2510, 'Lembeni', '52', NULL, NULL),
(2511, 'Mgagao', '52', NULL, NULL),
(2512, 'Msangeni', '52', NULL, NULL),
(2513, 'Mwanga', '52', NULL, NULL),
(2514, 'Mwaniko', '52', NULL, NULL),
(2515, 'Ngujini', '52', NULL, NULL),
(2516, 'Shighatini', '52', NULL, NULL),
(2517, 'Toloha', '52', NULL, NULL),
(2518, 'Alailelai', '7', NULL, NULL),
(2519, 'Arash', '7', NULL, NULL),
(2520, 'Digodigo', '7', NULL, NULL),
(2521, 'Enduleni (Endulen)', '7', NULL, NULL),
(2522, 'Enguserosambu', '7', NULL, NULL),
(2523, 'Kakesio', '7', NULL, NULL),
(2524, 'Maalon', '7', NULL, NULL),
(2525, 'Malambo', '7', NULL, NULL),
(2526, 'Nainokanoka', '7', NULL, NULL),
(2527, 'Naiyobi', '7', NULL, NULL),
(2528, 'Ngorongoro', '7', NULL, NULL),
(2529, 'Olbalbal', '7', NULL, NULL),
(2530, 'Oldonyo-Sambu', '7', NULL, NULL),
(2531, 'Oloipiri', '7', NULL, NULL),
(2532, 'Oloirien', '7', NULL, NULL),
(2533, 'Ololosokwan', '7', NULL, NULL),
(2534, 'Orgosorok', '7', NULL, NULL),
(2535, 'Pinyinyi', '7', NULL, NULL),
(2536, 'Sale', '7', NULL, NULL),
(2537, 'Samunge', '7', NULL, NULL),
(2538, 'Soit-Sambu', '7', NULL, NULL),
(2539, 'Bushiri', '169', NULL, NULL),
(2540, 'Bweni', '169', NULL, NULL),
(2541, 'Kimang\'a', '169', NULL, NULL),
(2542, 'Kipumbwi', '169', NULL, NULL),
(2543, 'Madanga', '169', NULL, NULL),
(2544, 'Mikunguni', '169', NULL, NULL),
(2545, 'Mkalamo', '169', NULL, NULL),
(2546, 'Mkwaja', '169', NULL, NULL),
(2547, 'Mwera', '169', NULL, NULL),
(2548, 'Pangani Magharibi', '169', NULL, NULL),
(2549, 'Pangani Mashariki', '169', NULL, NULL),
(2550, 'Tungamaa', '169', NULL, NULL),
(2551, 'Ubangaa', '169', NULL, NULL),
(2552, 'Holili', '53', NULL, NULL),
(2553, 'Katangara Mrere', '53', NULL, NULL),
(2554, 'Kelamfua Mokala', '53', NULL, NULL),
(2555, 'Keni Aleni', '53', NULL, NULL),
(2556, 'Keni Mengeni', '53', NULL, NULL),
(2557, 'Kirongo Samanga', '53', NULL, NULL),
(2558, 'Kirwa Keni', '53', NULL, NULL),
(2559, 'Kisale Masangara', '53', NULL, NULL),
(2560, 'Kitirima Kingachi', '53', NULL, NULL),
(2561, 'Mahida', '53', NULL, NULL),
(2562, 'Makiidi', '53', NULL, NULL),
(2563, 'Mamsera', '53', NULL, NULL),
(2564, 'Manda', '53', NULL, NULL),
(2565, 'Marangu Kitowo', '53', NULL, NULL),
(2566, 'Mengwe', '53', NULL, NULL),
(2567, 'Motamburu Kitendeni', '53', NULL, NULL),
(2568, 'Mrao Keryo', '53', NULL, NULL),
(2569, 'Nanjala Reha', '53', NULL, NULL),
(2570, 'Ngoyoni', '53', NULL, NULL),
(2571, 'Olele', '53', NULL, NULL),
(2572, 'Shimbi', '53', NULL, NULL),
(2573, 'Tarakea Motamburu', '53', NULL, NULL),
(2574, 'Ubetu Kahe', '53', NULL, NULL),
(2575, 'Ushiri Ikuini', '53', NULL, NULL),
(2576, 'Bendera', '54', NULL, NULL),
(2577, 'Bombo', '54', NULL, NULL),
(2578, 'Bwambo', '54', NULL, NULL),
(2579, 'Chome', '54', NULL, NULL),
(2580, 'Hedaru', '54', NULL, NULL),
(2581, 'Kalemawe', '54', NULL, NULL),
(2582, 'Kihurio', '54', NULL, NULL),
(2583, 'Kirangare', '54', NULL, NULL),
(2584, 'Kisima', '54', NULL, NULL),
(2585, 'Kisiwani', '54', NULL, NULL),
(2586, 'Lugulu', '54', NULL, NULL),
(2587, 'Mabilioni', '54', NULL, NULL),
(2588, 'Makanya', '54', NULL, NULL),
(2589, 'Maore', '54', NULL, NULL),
(2590, 'Mhezi', '54', NULL, NULL),
(2591, 'Mpinji', '54', NULL, NULL),
(2592, 'Mshewa', '54', NULL, NULL),
(2593, 'Msindo', '54', NULL, NULL),
(2594, 'Mtii', '54', NULL, NULL),
(2595, 'Mwembe', '54', NULL, NULL),
(2596, 'Myamba', '54', NULL, NULL),
(2597, 'Ndungu', '54', NULL, NULL),
(2598, 'Njoro', '54', NULL, NULL),
(2599, 'Ruvu', '54', NULL, NULL),
(2600, 'Same', '54', NULL, NULL),
(2601, 'Stesheni', '54', NULL, NULL),
(2602, 'Suji', '54', NULL, NULL),
(2603, 'Vudee', '54', NULL, NULL),
(2604, 'Vuje', '54', NULL, NULL),
(2605, 'Vumari', '54', NULL, NULL),
(2606, 'Vunta', '54', NULL, NULL),
(2607, 'Biriri', '55', NULL, NULL),
(2608, 'Gararagua', '55', NULL, NULL),
(2609, 'Karansi', '55', NULL, NULL),
(2610, 'Kashashi (Kashisha)', '55', NULL, NULL),
(2611, 'Livishi', '55', NULL, NULL),
(2612, 'Makiwaru', '55', NULL, NULL),
(2613, 'Naeny (Ivaeny)', '55', NULL, NULL),
(2614, 'Nasai', '55', NULL, NULL),
(2615, 'Ndumeti', '55', NULL, NULL),
(2616, 'Ngarenairobi', '55', NULL, NULL),
(2617, 'Olkolili', '55', NULL, NULL),
(2618, 'Sanya Juu', '55', NULL, NULL),
(2619, 'Emboreet', '71', NULL, NULL),
(2620, 'Endiamtu (Endiantu)', '71', NULL, NULL),
(2621, 'Endonyongijape', '71', NULL, NULL),
(2622, 'Kitwai', '71', NULL, NULL),
(2623, 'Komolo', '71', NULL, NULL),
(2624, 'Liborsoit', '71', NULL, NULL),
(2625, 'Loiborsiret', '71', NULL, NULL),
(2626, 'Mrerani (Mererani)', '71', NULL, NULL),
(2627, 'Msitu wa Tembo', '71', NULL, NULL),
(2628, 'Naberera', '71', NULL, NULL),
(2629, 'Naisinyai', '71', NULL, NULL),
(2630, 'Ngorika', '71', NULL, NULL),
(2631, 'Oljoro No. 5', '71', NULL, NULL),
(2632, 'Orkesumet (Orkesmet)', '71', NULL, NULL),
(2633, 'Ruvu Remiti', '71', NULL, NULL),
(2634, 'Shambarai', '71', NULL, NULL),
(2635, 'Terrat', '71', NULL, NULL),
(2636, 'Central', NULL, NULL, NULL),
(2637, 'Chongoleani', NULL, NULL, NULL),
(2638, 'Chumbageni', NULL, NULL, NULL),
(2639, 'Duga', NULL, NULL, NULL),
(2640, 'Kiomoni', NULL, NULL, NULL),
(2641, 'Kirare', NULL, NULL, NULL),
(2642, 'Mabawa', NULL, NULL, NULL),
(2643, 'Mabokweni', NULL, NULL, NULL),
(2644, 'Majengo', NULL, NULL, NULL),
(2645, 'Makorora', NULL, NULL, NULL),
(2646, 'Marungu', NULL, NULL, NULL),
(2647, 'Maweni', NULL, NULL, NULL),
(2648, 'Msambweni', NULL, NULL, NULL),
(2649, 'Mwanzange', NULL, NULL, NULL),
(2650, 'Mzingani', NULL, NULL, NULL),
(2651, 'Mzizima', NULL, NULL, NULL),
(2652, 'Ngamiani Kaskazini', NULL, NULL, NULL),
(2653, 'Ngamiani Kati', NULL, NULL, NULL),
(2654, 'Ngamiani Kusini', NULL, NULL, NULL),
(2655, 'Nguvumali', NULL, NULL, NULL),
(2656, 'Pongwe', NULL, NULL, NULL),
(2657, 'Tangasisi', NULL, NULL, NULL),
(2658, 'Tongoni', NULL, NULL, NULL),
(2659, 'Usagara', NULL, NULL, NULL),
(2660, 'Chalangwa', '80', NULL, NULL),
(2661, 'Chokaa', '80', NULL, NULL),
(2662, 'Ifumbo', '80', NULL, NULL),
(2663, 'Itewe', '80', NULL, NULL),
(2664, 'Kambikatoto', '80', NULL, NULL),
(2665, 'Lupa Tingatinga', '80', NULL, NULL),
(2666, 'Luwalaje', '80', NULL, NULL),
(2667, 'Mafyeko', '80', NULL, NULL),
(2668, 'Makongorosi (Makongolosi)', '80', NULL, NULL),
(2669, 'Mamba', '80', NULL, NULL),
(2670, 'Matundasi', '80', NULL, NULL),
(2671, 'Matwiga', '80', NULL, NULL),
(2672, 'Mbugani', '80', NULL, NULL),
(2673, 'Mkola', '80', NULL, NULL),
(2674, 'Mtanila', '80', NULL, NULL),
(2675, 'Sangambi', '80', NULL, NULL),
(2676, 'Bupigu', '150', NULL, NULL),
(2677, 'Chitete', '150', NULL, NULL),
(2678, 'Ibaba', '150', NULL, NULL),
(2679, 'Ikinga', '150', NULL, NULL),
(2680, 'Isongole', '150', NULL, NULL),
(2681, 'Itale', '150', NULL, NULL),
(2682, 'Itumba', '150', NULL, NULL),
(2683, 'Kafule', '150', NULL, NULL),
(2684, 'Kalembo', '150', NULL, NULL),
(2685, 'Lubanda', '150', NULL, NULL),
(2686, 'Luswisi', '150', NULL, NULL),
(2687, 'Malangali', '150', NULL, NULL),
(2688, 'Mbebe', '150', NULL, NULL),
(2689, 'Mlale', '150', NULL, NULL),
(2690, 'Ndola', '150', NULL, NULL),
(2691, 'Ngulilo', '150', NULL, NULL),
(2692, 'Ngulugulu', '150', NULL, NULL),
(2693, 'Sange', '150', NULL, NULL),
(2694, 'Gangilonga', '26', NULL, NULL),
(2695, 'Ilala', '26', NULL, NULL),
(2696, 'Isakalilo', '26', NULL, NULL),
(2697, 'Kihesa', '26', NULL, NULL),
(2698, 'Kitanzini', '26', NULL, NULL),
(2699, 'Kitwiru', '26', NULL, NULL),
(2700, 'Kwakilosa', '26', NULL, NULL),
(2701, 'Makorongoni', '26', NULL, NULL),
(2702, 'Mivinjeni', '26', NULL, NULL),
(2703, 'Mkwawa', '26', NULL, NULL),
(2704, 'Mlandege', '26', NULL, NULL),
(2705, 'Mshindo', '26', NULL, NULL),
(2706, 'Mtwivila', '26', NULL, NULL),
(2707, 'Mwangata', '26', NULL, NULL),
(2708, 'Nduli', '26', NULL, NULL),
(2709, 'Ruaha', '26', NULL, NULL),
(2710, 'Idodi', NULL, NULL, NULL),
(2711, 'Ifunda', NULL, NULL, NULL),
(2712, 'Ilolo Mpya', NULL, NULL, NULL),
(2713, 'Itunundu', NULL, NULL, NULL),
(2714, 'Izazi', NULL, NULL, NULL),
(2715, 'Kalenga', NULL, NULL, NULL),
(2716, 'Kihorogota', NULL, NULL, NULL),
(2717, 'Kiwere', NULL, NULL, NULL),
(2718, 'Luhota', NULL, NULL, NULL),
(2719, 'Lumuli', NULL, NULL, NULL),
(2720, 'Lyamgungwe', NULL, NULL, NULL),
(2721, 'Maboga', NULL, NULL, NULL),
(2722, 'Maguliwa', NULL, NULL, NULL),
(2723, 'Mahuninga', NULL, NULL, NULL),
(2724, 'Malengamakali', NULL, NULL, NULL),
(2725, 'Mgama', NULL, NULL, NULL),
(2726, 'Migoli', NULL, NULL, NULL),
(2727, 'Mlenge', NULL, NULL, NULL),
(2728, 'Mlowa', NULL, NULL, NULL),
(2729, 'Mseke', NULL, NULL, NULL),
(2730, 'Nduli', NULL, NULL, NULL),
(2731, 'Nyang\'oro', NULL, NULL, NULL),
(2732, 'Nzihi', NULL, NULL, NULL),
(2733, 'Ulanda', NULL, NULL, NULL),
(2734, 'Wasa', NULL, NULL, NULL),
(2735, 'Kasanga', '124', NULL, NULL),
(2736, 'Katazi', '124', NULL, NULL),
(2737, 'Katete', '124', NULL, NULL),
(2738, 'Kilesha', '124', NULL, NULL),
(2739, 'Kisumba', '124', NULL, NULL),
(2740, 'Legeza Mwendo', '124', NULL, NULL),
(2741, 'Mambwekenya (Mabwekenya)', '124', NULL, NULL),
(2742, 'Matai', '124', NULL, NULL),
(2743, 'Mkali', '124', NULL, NULL),
(2744, 'Mkowe', '124', NULL, NULL),
(2745, 'Mnamba', '124', NULL, NULL),
(2746, 'Msanzi', '124', NULL, NULL),
(2747, 'Mwazye', '124', NULL, NULL),
(2748, 'Mwembenkoswe', '124', NULL, NULL),
(2749, 'Mwimbi', '124', NULL, NULL),
(2750, 'Sopa', '124', NULL, NULL),
(2751, 'Ulumi', '124', NULL, NULL),
(2752, 'Boma la Ng\'ombe', '27', NULL, NULL),
(2753, 'Dabaga', '27', NULL, NULL),
(2754, 'Ibumu', '27', NULL, NULL),
(2755, 'Idete', '27', NULL, NULL),
(2756, 'Ihimbo', '27', NULL, NULL),
(2757, 'Ilula', '27', NULL, NULL),
(2758, 'Image', '27', NULL, NULL),
(2759, 'Irole', '27', NULL, NULL),
(2760, 'Kimala', '27', NULL, NULL),
(2761, 'Lugalo', '27', NULL, NULL),
(2762, 'Mahenge', '27', NULL, NULL),
(2763, 'Masisiwe', '27', NULL, NULL),
(2764, 'Mlafu', '27', NULL, NULL),
(2765, 'Mtitu', '27', NULL, NULL),
(2766, 'Ng\'ang\'ange', '27', NULL, NULL),
(2767, 'Ng\'uruhe', '27', NULL, NULL),
(2768, 'Nyalumbu', '27', NULL, NULL),
(2769, 'Ruaha Mbuyuni', '27', NULL, NULL),
(2770, 'Udekwa', '27', NULL, NULL),
(2771, 'Uhambingeto', '27', NULL, NULL),
(2772, 'Ukumbi', '27', NULL, NULL),
(2773, 'Ukwega', '27', NULL, NULL),
(2774, 'Bujonde', '81', NULL, NULL),
(2775, 'Busale', '81', NULL, NULL),
(2776, 'Ikama', '81', NULL, NULL),
(2777, 'Ikimba', '81', NULL, NULL),
(2778, 'Ikolo', '81', NULL, NULL),
(2779, 'Ipande', '81', NULL, NULL),
(2780, 'Ipinda', '81', NULL, NULL),
(2781, 'Itope', '81', NULL, NULL),
(2782, 'Kajunjumele', '81', NULL, NULL),
(2783, 'Katumba Songwe', '81', NULL, NULL),
(2784, 'Kyela', '81', NULL, NULL),
(2785, 'Lusungo', '81', NULL, NULL),
(2786, 'Makwale', '81', NULL, NULL),
(2787, 'Matema', '81', NULL, NULL),
(2788, 'Muungano', '81', NULL, NULL),
(2789, 'Mwaya', '81', NULL, NULL),
(2790, 'Ndobo', '81', NULL, NULL),
(2791, 'Ngana', '81', NULL, NULL),
(2792, 'Ngonga', '81', NULL, NULL),
(2793, 'Talatala', '81', NULL, NULL),
(2794, 'Ibumi', '111', NULL, NULL),
(2795, 'Iwela', '111', NULL, NULL),
(2796, 'Kilondo', '111', NULL, NULL),
(2797, 'Lifuma', '111', NULL, NULL);
INSERT INTO `wards` (`id`, `ward_name`, `district_id`, `created_at`, `updated_at`) VALUES
(2798, 'Luana', '111', NULL, NULL),
(2799, 'Ludende', '111', NULL, NULL),
(2800, 'Ludewa', '111', NULL, NULL),
(2801, 'Lugarawa', '111', NULL, NULL),
(2802, 'Luilo', '111', NULL, NULL),
(2803, 'Lumbila', '111', NULL, NULL),
(2804, 'Lupanga', '111', NULL, NULL),
(2805, 'Lupingu', '111', NULL, NULL),
(2806, 'Madilu', '111', NULL, NULL),
(2807, 'Madope', '111', NULL, NULL),
(2808, 'Makonde', '111', NULL, NULL),
(2809, 'Manda', '111', NULL, NULL),
(2810, 'Masasi', '111', NULL, NULL),
(2811, 'Mavanga', '111', NULL, NULL),
(2812, 'Mawengi', '111', NULL, NULL),
(2813, 'Milo', '111', NULL, NULL),
(2814, 'Mkongobaki', '111', NULL, NULL),
(2815, 'Mlangali', '111', NULL, NULL),
(2816, 'Mundindi', '111', NULL, NULL),
(2817, 'Nkomang\'ombe', '111', NULL, NULL),
(2818, 'Ruhuhu', '111', NULL, NULL),
(2819, 'Boma', '28', NULL, NULL),
(2820, 'Kinyanambo', '28', NULL, NULL),
(2821, 'Sao Hill', '28', NULL, NULL),
(2822, 'Kitandililo', '112', NULL, NULL),
(2823, 'Lyamkena', '112', NULL, NULL),
(2824, 'Mahongole', '112', NULL, NULL),
(2825, 'Mjimwema', '112', NULL, NULL),
(2826, 'Mlowa', '112', NULL, NULL),
(2827, 'Mwembetogwa', '112', NULL, NULL),
(2828, 'Ubena', '112', NULL, NULL),
(2829, 'Utengule', '112', NULL, NULL),
(2830, 'Bulongwa', '113', NULL, NULL),
(2831, 'Ikuwo', '113', NULL, NULL),
(2832, 'Iniho', '113', NULL, NULL),
(2833, 'Ipelele', '113', NULL, NULL),
(2834, 'Ipepo', '113', NULL, NULL),
(2835, 'Isapulano', '113', NULL, NULL),
(2836, 'Itundu', '113', NULL, NULL),
(2837, 'Iwawa', '113', NULL, NULL),
(2838, 'Kigala', '113', NULL, NULL),
(2839, 'Kigulu', '113', NULL, NULL),
(2840, 'Kipagilo (Kipagalo)', '113', NULL, NULL),
(2841, 'Kitulo', '113', NULL, NULL),
(2842, 'Lupalilo', '113', NULL, NULL),
(2843, 'Lupila', '113', NULL, NULL),
(2844, 'Luwumbu', '113', NULL, NULL),
(2845, 'Mang\'oto', '113', NULL, NULL),
(2846, 'Matamba', '113', NULL, NULL),
(2847, 'Mbalatse', '113', NULL, NULL),
(2848, 'Mfumbi', '113', NULL, NULL),
(2849, 'Mlondwe', '113', NULL, NULL),
(2850, 'Tandala', '113', NULL, NULL),
(2851, 'Ukwama', '113', NULL, NULL),
(2852, 'Chimala', NULL, NULL, NULL),
(2853, 'Igava', NULL, NULL, NULL),
(2854, 'Igurusi', NULL, NULL, NULL),
(2855, 'Ihahi', NULL, NULL, NULL),
(2856, 'Imalilosongwe', NULL, NULL, NULL),
(2857, 'Ipwani', NULL, NULL, NULL),
(2858, 'Itamboleo (Itambaleo)', NULL, NULL, NULL),
(2859, 'Kongolo', NULL, NULL, NULL),
(2860, 'Lugelele', NULL, NULL, NULL),
(2861, 'Luhanga', NULL, NULL, NULL),
(2862, 'Madibira', NULL, NULL, NULL),
(2863, 'Mahongole', NULL, NULL, NULL),
(2864, 'Mapogoro', NULL, NULL, NULL),
(2865, 'Mawindi', NULL, NULL, NULL),
(2866, 'Miyombweni', NULL, NULL, NULL),
(2867, 'Mwatenga', NULL, NULL, NULL),
(2868, 'Ruiwa', NULL, NULL, NULL),
(2869, 'Rujewa', NULL, NULL, NULL),
(2870, 'Ubaruku', NULL, NULL, NULL),
(2871, 'Utengule Usangu', NULL, NULL, NULL),
(2872, 'Forest', NULL, NULL, NULL),
(2873, 'Ghana', NULL, NULL, NULL),
(2874, 'Iduda', NULL, NULL, NULL),
(2875, 'Iganjo', NULL, NULL, NULL),
(2876, 'Iganzo', NULL, NULL, NULL),
(2877, 'Igawilo', NULL, NULL, NULL),
(2878, 'Ilemi', NULL, NULL, NULL),
(2879, 'Ilomba', NULL, NULL, NULL),
(2880, 'Isanga', NULL, NULL, NULL),
(2881, 'Isyesye', NULL, NULL, NULL),
(2882, 'Itagano', NULL, NULL, NULL),
(2883, 'Itende', NULL, NULL, NULL),
(2884, 'Itezi', NULL, NULL, NULL),
(2885, 'Itiji', NULL, NULL, NULL),
(2886, 'Iwambi', NULL, NULL, NULL),
(2887, 'Iyela', NULL, NULL, NULL),
(2888, 'Iyunga', NULL, NULL, NULL),
(2889, 'Iziwa', NULL, NULL, NULL),
(2890, 'Kalobe', NULL, NULL, NULL),
(2891, 'Maanga', NULL, NULL, NULL),
(2892, 'Mabatini', NULL, NULL, NULL),
(2893, 'Maendeleo', NULL, NULL, NULL),
(2894, 'Majengo', NULL, NULL, NULL),
(2895, 'Mbalizi Road', NULL, NULL, NULL),
(2896, 'Mwakibete', NULL, NULL, NULL),
(2897, 'Mwansekwa', NULL, NULL, NULL),
(2898, 'Mwasanga', NULL, NULL, NULL),
(2899, 'Nonde', NULL, NULL, NULL),
(2900, 'Nsalaga', NULL, NULL, NULL),
(2901, 'Nsoho', NULL, NULL, NULL),
(2902, 'Nzovwe', NULL, NULL, NULL),
(2903, 'Ruanda', NULL, NULL, NULL),
(2904, 'Sinde', NULL, NULL, NULL),
(2905, 'Sisimba', NULL, NULL, NULL),
(2906, 'Tembela', NULL, NULL, NULL),
(2907, 'Uyole', NULL, NULL, NULL),
(2908, 'Bonde la Songwe', NULL, NULL, NULL),
(2909, 'Igale', NULL, NULL, NULL),
(2910, 'Igoma', NULL, NULL, NULL),
(2911, 'Ihango', NULL, NULL, NULL),
(2912, 'Ijombe', NULL, NULL, NULL),
(2913, 'Ikukwa', NULL, NULL, NULL),
(2914, 'Ilembo', NULL, NULL, NULL),
(2915, 'Ilungu', NULL, NULL, NULL),
(2916, 'Inyala', NULL, NULL, NULL),
(2917, 'Isuto', NULL, NULL, NULL),
(2918, 'Itawa', NULL, NULL, NULL),
(2919, 'Itewe', NULL, NULL, NULL),
(2920, 'Iwiji', NULL, NULL, NULL),
(2921, 'Iwindi', NULL, NULL, NULL),
(2922, 'Iyunga Mapinduzi', NULL, NULL, NULL),
(2923, 'Lwanjiro', NULL, NULL, NULL),
(2924, 'Maendeleo', NULL, NULL, NULL),
(2925, 'Masoko', NULL, NULL, NULL),
(2926, 'Mshewe', NULL, NULL, NULL),
(2927, 'Nsalala', NULL, NULL, NULL),
(2928, 'Santilya', NULL, NULL, NULL),
(2929, 'Swaya', NULL, NULL, NULL),
(2930, 'Tembela', NULL, NULL, NULL),
(2931, 'Ulenje', NULL, NULL, NULL),
(2932, 'Utengule Usongwe', NULL, NULL, NULL),
(2933, 'Kambarage', '128', NULL, NULL),
(2934, 'Kigonsera', '128', NULL, NULL),
(2935, 'Kihangi Mahuka', '128', NULL, NULL),
(2936, 'Kihungu', '128', NULL, NULL),
(2937, 'Kikolo', '128', NULL, NULL),
(2938, 'Kilimani', '128', NULL, NULL),
(2939, 'Kipapa', '128', NULL, NULL),
(2940, 'Kipololo', '128', NULL, NULL),
(2941, 'Kitanda', '128', NULL, NULL),
(2942, 'Kitumbalomo', '128', NULL, NULL),
(2943, 'Kitura', '128', NULL, NULL),
(2944, 'Langiro', '128', NULL, NULL),
(2945, 'Linda', '128', NULL, NULL),
(2946, 'Litembo', '128', NULL, NULL),
(2947, 'Litumbandyosi', '128', NULL, NULL),
(2948, 'Luwaita', '128', NULL, NULL),
(2949, 'Maguu', '128', NULL, NULL),
(2950, 'Mapera', '128', NULL, NULL),
(2951, 'Matiri', '128', NULL, NULL),
(2952, 'Mbangamao', '128', NULL, NULL),
(2953, 'Mbinga Mjini', '128', NULL, NULL),
(2954, 'Mbuji', '128', NULL, NULL),
(2955, 'Mkako', '128', NULL, NULL),
(2956, 'Mkalanga (Mikalanga)', '128', NULL, NULL),
(2957, 'Mkumbi', '128', NULL, NULL),
(2958, 'Mpapa', '128', NULL, NULL),
(2959, 'Mpepai', '128', NULL, NULL),
(2960, 'Myangayanga', '128', NULL, NULL),
(2961, 'Namswea', '128', NULL, NULL),
(2962, 'Ngima', '128', NULL, NULL),
(2963, 'Nyoni', '128', NULL, NULL),
(2964, 'Ruanda', '128', NULL, NULL),
(2965, 'Ukata', '128', NULL, NULL),
(2966, 'Utiri', '128', NULL, NULL),
(2967, 'Bara', '151', NULL, NULL),
(2968, 'Halungu', '151', NULL, NULL),
(2969, 'Igamba', '151', NULL, NULL),
(2970, 'Ihanda', '151', NULL, NULL),
(2971, 'Ipunga', '151', NULL, NULL),
(2972, 'Isandula', '151', NULL, NULL),
(2973, 'Isansa', '151', NULL, NULL),
(2974, 'Itaka', '151', NULL, NULL),
(2975, 'Iyula', '151', NULL, NULL),
(2976, 'Mlangali', '151', NULL, NULL),
(2977, 'Mlowo', '151', NULL, NULL),
(2978, 'Msia', '151', NULL, NULL),
(2979, 'Myovizi', '151', NULL, NULL),
(2980, 'Nambinzo', '151', NULL, NULL),
(2981, 'Nanyala', '151', NULL, NULL),
(2982, 'Nyimbili (Nyambili)', '151', NULL, NULL),
(2983, 'Ruanda', '151', NULL, NULL),
(2984, 'Vwawa', '151', NULL, NULL),
(2985, 'Ikuba', '38', NULL, NULL),
(2986, 'Ilela', '38', NULL, NULL),
(2987, 'Ilunde', '38', NULL, NULL),
(2988, 'Inyonga', '38', NULL, NULL),
(2989, 'Itenka', '38', NULL, NULL),
(2990, 'Kapalala', '38', NULL, NULL),
(2991, 'Kasansa', '38', NULL, NULL),
(2992, 'Kasokola', '38', NULL, NULL),
(2993, 'Kibaoni', '38', NULL, NULL),
(2994, 'Litapunga', '38', NULL, NULL),
(2995, 'Machimboni', '38', NULL, NULL),
(2996, 'Magamba', '38', NULL, NULL),
(2997, 'Majimoto', '38', NULL, NULL),
(2998, 'Mamba', '38', NULL, NULL),
(2999, 'Mbede', '38', NULL, NULL),
(3000, 'Mtapenda', '38', NULL, NULL),
(3001, 'Mwamapuli', '38', NULL, NULL),
(3002, 'Nsenkwa', '38', NULL, NULL),
(3003, 'Nsimbo', '38', NULL, NULL),
(3004, 'Sitalike', '38', NULL, NULL),
(3005, 'Ugala', '38', NULL, NULL),
(3006, 'Urwila (Urwira)', '38', NULL, NULL),
(3007, 'Usevya', '38', NULL, NULL),
(3008, 'Utende', '38', NULL, NULL),
(3009, 'Chilulumo', '152', NULL, NULL),
(3010, 'Chitete', '152', NULL, NULL),
(3011, 'Chiwezi', '152', NULL, NULL),
(3012, 'Ivuna', '152', NULL, NULL),
(3013, 'Kamsamba', '152', NULL, NULL),
(3014, 'Kapele', '152', NULL, NULL),
(3015, 'Mkulwe', '152', NULL, NULL),
(3016, 'Mpapa', '152', NULL, NULL),
(3017, 'Msangano', '152', NULL, NULL),
(3018, 'Myunga', '152', NULL, NULL),
(3019, 'Ndalambo (Ndalembo)', '152', NULL, NULL),
(3020, 'Nkangamo', '152', NULL, NULL),
(3021, 'Nzoka', '152', NULL, NULL),
(3022, 'Ikola', '39', NULL, NULL),
(3023, 'Kabungu', '39', NULL, NULL),
(3024, 'Kapalamsenga', '39', NULL, NULL),
(3025, 'Karema', '39', NULL, NULL),
(3026, 'Katuma', '39', NULL, NULL),
(3027, 'Mishamo', '39', NULL, NULL),
(3028, 'Mpandandogo', '39', NULL, NULL),
(3029, 'Mwese', '39', NULL, NULL),
(3030, 'Sibwesa', '39', NULL, NULL),
(3031, 'Ilembo', '40', NULL, NULL),
(3032, 'Kakese', '40', NULL, NULL),
(3033, 'Kashaulili', '40', NULL, NULL),
(3034, 'Kawajense', '40', NULL, NULL),
(3035, 'Makanyagio', '40', NULL, NULL),
(3036, 'Misunkumilo', '40', NULL, NULL),
(3037, 'Mpanda Hotel', '40', NULL, NULL),
(3038, 'Nsemulwa', '40', NULL, NULL),
(3039, 'Shanwe', '40', NULL, NULL),
(3040, 'Bumilayinga', '29', NULL, NULL),
(3041, 'Idunda', '29', NULL, NULL),
(3042, 'Ifwagi', '29', NULL, NULL),
(3043, 'Igombavu (Igombavanu)', '29', NULL, NULL),
(3044, 'Igowole', '29', NULL, NULL),
(3045, 'Ihalimba', '29', NULL, NULL),
(3046, 'Ihanu', '29', NULL, NULL),
(3047, 'Ihowanza', '29', NULL, NULL),
(3048, 'Ikweha', '29', NULL, NULL),
(3049, 'Isalavanu', '29', NULL, NULL),
(3050, 'Itandula', '29', NULL, NULL),
(3051, 'Kasanga', '29', NULL, NULL),
(3052, 'Kibengu', '29', NULL, NULL),
(3053, 'Kiyowela', '29', NULL, NULL),
(3054, 'Luhunga (Luhanga)', '29', NULL, NULL),
(3055, 'Makungu', '29', NULL, NULL),
(3056, 'Malangali', '29', NULL, NULL),
(3057, 'Mapanda', '29', NULL, NULL),
(3058, 'Mbalamaziwa', '29', NULL, NULL),
(3059, 'Mdabulo', '29', NULL, NULL),
(3060, 'Mninga', '29', NULL, NULL),
(3061, 'Mpanga', '29', NULL, NULL),
(3062, 'Mtambula', '29', NULL, NULL),
(3063, 'Mtwango', '29', NULL, NULL),
(3064, 'Nyololo', '29', NULL, NULL),
(3065, 'Rungemba', '29', NULL, NULL),
(3066, 'Sadani', '29', NULL, NULL),
(3067, 'Hanga', '132', NULL, NULL),
(3068, 'Kitanda', '132', NULL, NULL),
(3069, 'Ligera', '132', NULL, NULL),
(3070, 'Likuyuseka', '132', NULL, NULL),
(3071, 'Limamu', '132', NULL, NULL),
(3072, 'Litola', '132', NULL, NULL),
(3073, 'Luchili', '132', NULL, NULL),
(3074, 'Luegu', '132', NULL, NULL),
(3075, 'Lusewa', '132', NULL, NULL),
(3076, 'Magazini', '132', NULL, NULL),
(3077, 'Mchomoro', '132', NULL, NULL),
(3078, 'Mgombasi', '132', NULL, NULL),
(3079, 'Mkongo', '132', NULL, NULL),
(3080, 'Mputa', '132', NULL, NULL),
(3081, 'Msindo', '132', NULL, NULL),
(3082, 'Namabengo', '132', NULL, NULL),
(3083, 'Namtumbo', '132', NULL, NULL),
(3084, 'Rwinga', '132', NULL, NULL),
(3085, 'Idamba', NULL, NULL, NULL),
(3086, 'Igongolo', NULL, NULL, NULL),
(3087, 'Ikondo', NULL, NULL, NULL),
(3088, 'Ikuna', NULL, NULL, NULL),
(3089, 'Kichiwa', NULL, NULL, NULL),
(3090, 'Kidegembye', NULL, NULL, NULL),
(3091, 'Lupembe', NULL, NULL, NULL),
(3092, 'Matembwe', NULL, NULL, NULL),
(3093, 'Mfriga', NULL, NULL, NULL),
(3094, 'Mtwango', NULL, NULL, NULL),
(3095, 'Ninga', NULL, NULL, NULL),
(3096, 'Ihanga', '115', NULL, NULL),
(3097, 'Iwungilo', '115', NULL, NULL),
(3098, 'Kifanya', '115', NULL, NULL),
(3099, 'Lugenge', '115', NULL, NULL),
(3100, 'Luponde', '115', NULL, NULL),
(3101, 'Makowo', '115', NULL, NULL),
(3102, 'Matola', '115', NULL, NULL),
(3103, 'Mjimwema', '115', NULL, NULL),
(3104, 'Njombe Mjini', '115', NULL, NULL),
(3105, 'Ramadhani', '115', NULL, NULL),
(3106, 'Utalingolo', '115', NULL, NULL),
(3107, 'Uwemba', '115', NULL, NULL),
(3108, 'Yakobi', '115', NULL, NULL),
(3109, 'Chala', '125', NULL, NULL),
(3110, 'Isale', '125', NULL, NULL),
(3111, 'Kabwe', '125', NULL, NULL),
(3112, 'Kala', '125', NULL, NULL),
(3113, 'Kate', '125', NULL, NULL),
(3114, 'Kipande', '125', NULL, NULL),
(3115, 'Kipili', '125', NULL, NULL),
(3116, 'Kirando', '125', NULL, NULL),
(3117, 'Korongwe', '125', NULL, NULL),
(3118, 'Mkwamba', '125', NULL, NULL),
(3119, 'Mtenga', '125', NULL, NULL),
(3120, 'Namanyere', '125', NULL, NULL),
(3121, 'Ninde', '125', NULL, NULL),
(3122, 'Nkandasi', '125', NULL, NULL),
(3123, 'Nkomolo', '125', NULL, NULL),
(3124, 'Sintali', '125', NULL, NULL),
(3125, 'Wampembe', '125', NULL, NULL),
(3126, 'Chiwanda', '133', NULL, NULL),
(3127, 'Kihagara', '133', NULL, NULL),
(3128, 'Kilosa', '133', NULL, NULL),
(3129, 'Kingerikiti', '133', NULL, NULL),
(3130, 'Liparamba', '133', NULL, NULL),
(3131, 'Lipingo', '133', NULL, NULL),
(3132, 'Lituhi', '133', NULL, NULL),
(3133, 'Liuli', '133', NULL, NULL),
(3134, 'Liwundi', '133', NULL, NULL),
(3135, 'Luhangarasi', '133', NULL, NULL),
(3136, 'Mbaha', '133', NULL, NULL),
(3137, 'Mbambabay', '133', NULL, NULL),
(3138, 'Mtipwili', '133', NULL, NULL),
(3139, 'Ngumbo', '133', NULL, NULL),
(3140, 'Tingi', '133', NULL, NULL),
(3141, 'Bagamoyo', NULL, NULL, NULL),
(3142, 'Bujela', NULL, NULL, NULL),
(3143, 'Bulyaga', NULL, NULL, NULL),
(3144, 'Ibighi', NULL, NULL, NULL),
(3145, 'Ikama', NULL, NULL, NULL),
(3146, 'Ikuti', NULL, NULL, NULL),
(3147, 'Ilima', NULL, NULL, NULL),
(3148, 'Isange', NULL, NULL, NULL),
(3149, 'Isongole', NULL, NULL, NULL),
(3150, 'Itete', NULL, NULL, NULL),
(3151, 'Kabula', NULL, NULL, NULL),
(3152, 'Kambasegela', NULL, NULL, NULL),
(3153, 'Kandete', NULL, NULL, NULL),
(3154, 'Kawetele', NULL, NULL, NULL),
(3155, 'Kikole', NULL, NULL, NULL),
(3156, 'Kinyala', NULL, NULL, NULL),
(3157, 'Kisegese', NULL, NULL, NULL),
(3158, 'Kisiba', NULL, NULL, NULL),
(3159, 'Kisondela', NULL, NULL, NULL),
(3160, 'Kiwira', NULL, NULL, NULL),
(3161, 'Kyimo', NULL, NULL, NULL),
(3162, 'Lufilyo', NULL, NULL, NULL),
(3163, 'Lufingo', NULL, NULL, NULL),
(3164, 'Lupata', NULL, NULL, NULL),
(3165, 'Luteba', NULL, NULL, NULL),
(3166, 'Lwangwa', NULL, NULL, NULL),
(3167, 'Makandana', NULL, NULL, NULL),
(3168, 'Malindo', NULL, NULL, NULL),
(3169, 'Masebe', NULL, NULL, NULL),
(3170, 'Masoko', NULL, NULL, NULL),
(3171, 'Masukulu', NULL, NULL, NULL),
(3172, 'Mpombo', NULL, NULL, NULL),
(3173, 'Mpuguso', NULL, NULL, NULL),
(3174, 'Msasani', NULL, NULL, NULL),
(3175, 'Nkunga', NULL, NULL, NULL),
(3176, 'Suma', NULL, NULL, NULL),
(3177, 'Swaya', NULL, NULL, NULL),
(3178, 'Bombambili', '130', NULL, NULL),
(3179, 'Lilambo', '130', NULL, NULL),
(3180, 'Lizaboni', '130', NULL, NULL),
(3181, 'Majengo', '130', NULL, NULL),
(3182, 'Matarawe', '130', NULL, NULL),
(3183, 'Mateka', '130', NULL, NULL),
(3184, 'Matogoro', '130', NULL, NULL),
(3185, 'Mfaranyaki', '130', NULL, NULL),
(3186, 'Misufini', '130', NULL, NULL),
(3187, 'Mjimwema', '130', NULL, NULL),
(3188, 'Mletele', '130', NULL, NULL),
(3189, 'Msamala', '130', NULL, NULL),
(3190, 'Mshangano', '130', NULL, NULL),
(3191, 'Mwengemshindo', '130', NULL, NULL),
(3192, 'Ndilimalitembo', '130', NULL, NULL),
(3193, 'Ruhuwiko', '130', NULL, NULL),
(3194, 'Ruvuma', '130', NULL, NULL),
(3195, 'SeedFarm', '130', NULL, NULL),
(3196, 'Songea Mjini', '130', NULL, NULL),
(3197, 'Subira', '130', NULL, NULL),
(3198, 'Tanga', '130', NULL, NULL),
(3199, 'Gumbiro', NULL, NULL, NULL),
(3200, 'Kilagano', NULL, NULL, NULL),
(3201, 'Litisha', NULL, NULL, NULL),
(3202, 'Magagura', NULL, NULL, NULL),
(3203, 'Mahanje', NULL, NULL, NULL),
(3204, 'Maposeni', NULL, NULL, NULL),
(3205, 'Matimira', NULL, NULL, NULL),
(3206, 'Matumbi', NULL, NULL, NULL),
(3207, 'Mbinga Mhalule', NULL, NULL, NULL),
(3208, 'Mkongotema', NULL, NULL, NULL),
(3209, 'Mpandangindo (Mpandangino)', NULL, NULL, NULL),
(3210, 'Mpitimbi', NULL, NULL, NULL),
(3211, 'Mtyangimbole', NULL, NULL, NULL),
(3212, 'Muhukuru (Muhuruku)', NULL, NULL, NULL),
(3213, 'Ndongosi', NULL, NULL, NULL),
(3214, 'Peramiho', NULL, NULL, NULL),
(3215, 'Wino', NULL, NULL, NULL),
(3216, 'Galula', NULL, NULL, NULL),
(3217, 'Gua', NULL, NULL, NULL),
(3218, 'Ifwenkenya (Ifyenkenya)', NULL, NULL, NULL),
(3219, 'Kanga', NULL, NULL, NULL),
(3220, 'Kapalala', NULL, NULL, NULL),
(3221, 'Magamba', NULL, NULL, NULL),
(3222, 'Mbangala', NULL, NULL, NULL),
(3223, 'Mbuyuni', NULL, NULL, NULL),
(3224, 'Mkwajuni', NULL, NULL, NULL),
(3225, 'Mwambani', NULL, NULL, NULL),
(3226, 'Namkukwe', NULL, NULL, NULL),
(3227, 'Ngwala', NULL, NULL, NULL),
(3228, 'Saza', NULL, NULL, NULL),
(3229, 'Totowe', NULL, NULL, NULL),
(3230, 'Chanji', '127', NULL, NULL),
(3231, 'Izia', '127', NULL, NULL),
(3232, 'Kasense', '127', NULL, NULL),
(3233, 'Katandala', '127', NULL, NULL),
(3234, 'Kizwite', '127', NULL, NULL),
(3235, 'Majengo', '127', NULL, NULL),
(3236, 'Malangali', '127', NULL, NULL),
(3237, 'Matanga', '127', NULL, NULL),
(3238, 'Mazwi', '127', NULL, NULL),
(3239, 'Milanzi', '127', NULL, NULL),
(3240, 'Mollo', '127', NULL, NULL),
(3241, 'Ntendo', '127', NULL, NULL),
(3242, 'Old Sumbawanga', '127', NULL, NULL),
(3243, 'Pito', '127', NULL, NULL),
(3244, 'Senga', '127', NULL, NULL),
(3245, 'Ilemba', NULL, NULL, NULL),
(3246, 'Kaengesa', NULL, NULL, NULL),
(3247, 'Kalambanzite', NULL, NULL, NULL),
(3248, 'Kaoze', NULL, NULL, NULL),
(3249, 'Kipeta', NULL, NULL, NULL),
(3250, 'Laela', NULL, NULL, NULL),
(3251, 'Lusaka', NULL, NULL, NULL),
(3252, 'Mfinga', NULL, NULL, NULL),
(3253, 'Miangalua', NULL, NULL, NULL),
(3254, 'Milepa', NULL, NULL, NULL),
(3255, 'Mpui', NULL, NULL, NULL),
(3256, 'Msanda Muungano', NULL, NULL, NULL),
(3257, 'Mtowisa', NULL, NULL, NULL),
(3258, 'Muze', NULL, NULL, NULL),
(3259, 'Sandulula', NULL, NULL, NULL),
(3260, 'Tunduma', NULL, NULL, NULL),
(3261, 'Jakika', '131', NULL, NULL),
(3262, 'Kalulu', '131', NULL, NULL),
(3263, 'Kidodoma', '131', NULL, NULL),
(3264, 'Ligoma', '131', NULL, NULL),
(3265, 'Ligunga', '131', NULL, NULL),
(3266, 'Lukumbule', '131', NULL, NULL),
(3267, 'Majengo', '131', NULL, NULL),
(3268, 'Marumba', '131', NULL, NULL),
(3269, 'Masonya', '131', NULL, NULL),
(3270, 'Matemanga', '131', NULL, NULL),
(3271, 'Mbati', '131', NULL, NULL),
(3272, 'Mbesa', '131', NULL, NULL),
(3273, 'Mchangani', '131', NULL, NULL),
(3274, 'Mchesi', '131', NULL, NULL),
(3275, 'Mchoteka', '131', NULL, NULL),
(3276, 'Mchuluka', '131', NULL, NULL),
(3277, 'Mindu', '131', NULL, NULL),
(3278, 'Misechela', '131', NULL, NULL),
(3279, 'Mlingoti Magharibi', '131', NULL, NULL),
(3280, 'Mlingoti Mashariki', '131', NULL, NULL),
(3281, 'Mtina', '131', NULL, NULL),
(3282, 'Muhuwesi', '131', NULL, NULL),
(3283, 'Nakapanya', '131', NULL, NULL),
(3284, 'Nakayaya', '131', NULL, NULL),
(3285, 'Nalasi Magharibi', '131', NULL, NULL),
(3286, 'Nalasi Mashariki', '131', NULL, NULL),
(3287, 'Namasakata', '131', NULL, NULL),
(3288, 'Namiungo', '131', NULL, NULL),
(3289, 'Nampungu', '131', NULL, NULL),
(3290, 'Namwinyu', '131', NULL, NULL),
(3291, 'Nandembo', '131', NULL, NULL),
(3292, 'Nanjoka', '131', NULL, NULL),
(3293, 'Ngapa', '131', NULL, NULL),
(3294, 'Sisikwasisi', '131', NULL, NULL),
(3295, 'Tuwemacho', '131', NULL, NULL),
(3296, 'Igima', '116', NULL, NULL),
(3297, 'Igosi', '116', NULL, NULL),
(3298, 'Igwachanya', '116', NULL, NULL),
(3299, 'Ilembula', '116', NULL, NULL),
(3300, 'Imalinyi', '116', NULL, NULL),
(3301, 'Kidugala', '116', NULL, NULL),
(3302, 'Kijombe', '116', NULL, NULL),
(3303, 'Kipengere', '116', NULL, NULL),
(3304, 'Luduga', '116', NULL, NULL),
(3305, 'Makoga', '116', NULL, NULL),
(3306, 'Mdandu', '116', NULL, NULL),
(3307, 'Saja', '116', NULL, NULL),
(3308, 'Uhambule', '116', NULL, NULL),
(3309, 'Ulembwe', '116', NULL, NULL),
(3310, 'Usuka', '116', NULL, NULL),
(3311, 'Wangama', '116', NULL, NULL),
(3312, 'Wanging\'ombe', '116', NULL, NULL),
(3313, 'Chachani', '56', NULL, NULL),
(3314, 'Chanjaani', '56', NULL, NULL),
(3315, 'Chonga', '56', NULL, NULL),
(3316, 'Dodo', '56', NULL, NULL),
(3317, 'Kibokoni', '56', NULL, NULL),
(3318, 'Kichungwani', '56', NULL, NULL),
(3319, 'Kilindi', '56', NULL, NULL),
(3320, 'Kwale', '56', NULL, NULL),
(3321, 'Madungu', '56', NULL, NULL),
(3322, 'Matale', '56', NULL, NULL),
(3323, 'Mbuzini', '56', NULL, NULL),
(3324, 'Mfikiwa', '56', NULL, NULL),
(3325, 'Mgelema', '56', NULL, NULL),
(3326, 'Mgogoni', '56', NULL, NULL),
(3327, 'Michungwani', '56', NULL, NULL),
(3328, 'Mkoroshoni', '56', NULL, NULL),
(3329, 'Msingini', '56', NULL, NULL),
(3330, 'Mvumoni', '56', NULL, NULL),
(3331, 'Ndagoni', '56', NULL, NULL),
(3332, 'Ng\'ambwa', '56', NULL, NULL),
(3333, 'Pujini', '56', NULL, NULL),
(3334, 'Shungi', '56', NULL, NULL),
(3335, 'Tibirinzi', '56', NULL, NULL),
(3336, 'Uwandani', '56', NULL, NULL),
(3337, 'Vitongoji', '56', NULL, NULL),
(3338, 'Wara', '56', NULL, NULL),
(3339, 'Wawi', '56', NULL, NULL),
(3340, 'Wesha', '56', NULL, NULL),
(3341, 'Ziwani', '56', NULL, NULL),
(3342, 'Bandamaji', '171', NULL, NULL),
(3343, 'Bwereu', '171', NULL, NULL),
(3344, 'Chaani Kubwa', '171', NULL, NULL),
(3345, 'Chaani Masingini', '171', NULL, NULL),
(3346, 'Chutama', '171', NULL, NULL),
(3347, 'Fukuchani', '171', NULL, NULL),
(3348, 'Gamba', '171', NULL, NULL),
(3349, 'Kandwi', '171', NULL, NULL),
(3350, 'Kibeni', '171', NULL, NULL),
(3351, 'Kidombo', '171', NULL, NULL),
(3352, 'Kidoti', '171', NULL, NULL),
(3353, 'Kigomani', '171', NULL, NULL),
(3354, 'Kigunda', '171', NULL, NULL),
(3355, 'Kijini', '171', NULL, NULL),
(3356, 'Kikobweni', '171', NULL, NULL),
(3357, 'Kilimani', '171', NULL, NULL),
(3358, 'Kilindi', '171', NULL, NULL),
(3359, 'Kinyasini', '171', NULL, NULL),
(3360, 'Kisongoni', '171', NULL, NULL),
(3361, 'Kivunge', '171', NULL, NULL),
(3362, 'Matemwe', '171', NULL, NULL),
(3363, 'Mchenza Shauri (Mcheza Shauri)', '171', NULL, NULL),
(3364, 'Mkokotoni', '171', NULL, NULL),
(3365, 'Mkwajuni', '171', NULL, NULL),
(3366, 'Moga', '171', NULL, NULL),
(3367, 'Mto wa Pwani', '171', NULL, NULL),
(3368, 'Muwange', '171', NULL, NULL),
(3369, 'Nungwi', '171', NULL, NULL),
(3370, 'Pale', '171', NULL, NULL),
(3371, 'Pitanazako', '171', NULL, NULL),
(3372, 'Potoa (Potowa)', '171', NULL, NULL),
(3373, 'Pwani Mchangani', '171', NULL, NULL),
(3374, 'Tazari', '171', NULL, NULL),
(3375, 'Tumbatu Gomani', '171', NULL, NULL),
(3376, 'Tumbatu Jongowe', '171', NULL, NULL),
(3377, 'Uvivini', '171', NULL, NULL),
(3378, 'Donge Karange', '172', NULL, NULL),
(3379, 'Donge Kipange', '172', NULL, NULL),
(3380, 'Donge Mbiji', '172', NULL, NULL),
(3381, 'Donge Mchangani', '172', NULL, NULL),
(3382, 'Donge Mtambile', '172', NULL, NULL),
(3383, 'Donge Vijibweni', '172', NULL, NULL),
(3384, 'Fujoni', '172', NULL, NULL),
(3385, 'Kidanzini', '172', NULL, NULL),
(3386, 'Kilombero', '172', NULL, NULL),
(3387, 'Kinduni', '172', NULL, NULL),
(3388, 'Kiombamvua', '172', NULL, NULL),
(3389, 'Kitope', '172', NULL, NULL),
(3390, 'Kiwengwa', '172', NULL, NULL),
(3391, 'Mafufuni', '172', NULL, NULL),
(3392, 'Mahonda', '172', NULL, NULL),
(3393, 'Makoba', '172', NULL, NULL),
(3394, 'Mangapwani', '172', NULL, NULL),
(3395, 'Matetema', '172', NULL, NULL),
(3396, 'Mbaleni', '172', NULL, NULL),
(3397, 'Mgambo', '172', NULL, NULL),
(3398, 'Misufini', '172', NULL, NULL),
(3399, 'Mkadini', '172', NULL, NULL),
(3400, 'Mkataleni', '172', NULL, NULL),
(3401, 'Mnyimbi', '172', NULL, NULL),
(3402, 'Muwanda', '172', NULL, NULL),
(3403, 'Njia ya Mtoni', '172', NULL, NULL),
(3404, 'Pangeni', '172', NULL, NULL),
(3405, 'Upenja', '172', NULL, NULL),
(3406, 'Zingwezingwe', '172', NULL, NULL),
(3407, 'Bambi', NULL, NULL, NULL),
(3408, 'Binguni', NULL, NULL, NULL),
(3409, 'Bungi', NULL, NULL, NULL),
(3410, 'Charawe', NULL, NULL, NULL),
(3411, 'Cheju', NULL, NULL, NULL),
(3412, 'Chwaka', NULL, NULL, NULL),
(3413, 'Dunga Bweni', NULL, NULL, NULL),
(3414, 'Dunga Kiembeni', NULL, NULL, NULL),
(3415, 'Ghana', NULL, NULL, NULL),
(3416, 'Jendele', NULL, NULL, NULL),
(3417, 'Jumbi', NULL, NULL, NULL),
(3418, 'Kiboje Mkwajuni', NULL, NULL, NULL),
(3419, 'Kiboje Mwembeshauri (Kiboje Muembeshauri)', NULL, NULL, NULL),
(3420, 'Kidimni', NULL, NULL, NULL),
(3421, 'Kikungwi', NULL, NULL, NULL),
(3422, 'Koani', NULL, NULL, NULL),
(3423, 'Machui', NULL, NULL, NULL),
(3424, 'Marumbi', NULL, NULL, NULL),
(3425, 'Mchangani', NULL, NULL, NULL),
(3426, 'Mgeni Haji', NULL, NULL, NULL),
(3427, 'Michamvi', NULL, NULL, NULL),
(3428, 'Mitakawani', NULL, NULL, NULL),
(3429, 'Miwani', NULL, NULL, NULL),
(3430, 'Mpapa', NULL, NULL, NULL),
(3431, 'Ndijani Mseweni', NULL, NULL, NULL),
(3432, 'Ndijani Mwembepunda (Ndijani Muembe Punda)', NULL, NULL, NULL),
(3433, 'Ng\'ambwa', NULL, NULL, NULL),
(3434, 'Pagali', NULL, NULL, NULL),
(3435, 'Pongwe', NULL, NULL, NULL),
(3436, 'Tindini', NULL, NULL, NULL),
(3437, 'Tunduni', NULL, NULL, NULL),
(3438, 'Tunguu', NULL, NULL, NULL),
(3439, 'Ubago', NULL, NULL, NULL),
(3440, 'Ukongoroni', NULL, NULL, NULL),
(3441, 'Umbuji', NULL, NULL, NULL),
(3442, 'Unguja Ukuu Kaebona', NULL, NULL, NULL),
(3443, 'Unguja Ukuu Kaepwani', NULL, NULL, NULL),
(3444, 'Uroa', NULL, NULL, NULL),
(3445, 'Uzi', NULL, NULL, NULL),
(3446, 'Uzini', NULL, NULL, NULL),
(3447, 'Bwejuu', NULL, NULL, NULL),
(3448, 'Dongwe', NULL, NULL, NULL),
(3449, 'Jambiani Kibigija', NULL, NULL, NULL),
(3450, 'Jambiani Kikadini', NULL, NULL, NULL),
(3451, 'Kajengwa', NULL, NULL, NULL),
(3452, 'Kibuteni', NULL, NULL, NULL),
(3453, 'Kijini', NULL, NULL, NULL),
(3454, 'Kiongoni', NULL, NULL, NULL),
(3455, 'Kitogani', NULL, NULL, NULL),
(3456, 'Kizimkazi Dimbani', NULL, NULL, NULL),
(3457, 'Kizimkazi Mkunguni', NULL, NULL, NULL),
(3458, 'Mtende', NULL, NULL, NULL),
(3459, 'Muungoni', NULL, NULL, NULL),
(3460, 'Muyuni A', NULL, NULL, NULL),
(3461, 'Muyuni B', NULL, NULL, NULL),
(3462, 'Muyuni C', NULL, NULL, NULL),
(3463, 'Mzuri', NULL, NULL, NULL),
(3464, 'Nganani', NULL, NULL, NULL),
(3465, 'Paje', NULL, NULL, NULL),
(3466, 'Pete', NULL, NULL, NULL),
(3467, 'Tasani', NULL, NULL, NULL),
(3468, 'Bububu', NULL, NULL, NULL),
(3469, 'Bumbwisudi', NULL, NULL, NULL),
(3470, 'Bweleo', NULL, NULL, NULL),
(3471, 'Chuini', NULL, NULL, NULL),
(3472, 'Chukwani', NULL, NULL, NULL),
(3473, 'Dimani', NULL, NULL, NULL),
(3474, 'Dole', NULL, NULL, NULL),
(3475, 'Fumba', NULL, NULL, NULL),
(3476, 'Fuoni Kibondeni', NULL, NULL, NULL),
(3477, 'Fuoni Kijito Upele', NULL, NULL, NULL),
(3478, 'Kama', NULL, NULL, NULL),
(3479, 'Kianga', NULL, NULL, NULL),
(3480, 'Kibweni', NULL, NULL, NULL),
(3481, 'Kiembesamaki', NULL, NULL, NULL),
(3482, 'Kihinani', NULL, NULL, NULL),
(3483, 'Kinuni', NULL, NULL, NULL),
(3484, 'Kisauni', NULL, NULL, NULL),
(3485, 'Kizimbani', NULL, NULL, NULL),
(3486, 'Kombeni', NULL, NULL, NULL),
(3487, 'Magogoni', NULL, NULL, NULL),
(3488, 'Maungani', NULL, NULL, NULL),
(3489, 'Mbuzini', NULL, NULL, NULL),
(3490, 'Meli Nne (Melinne)', NULL, NULL, NULL),
(3491, 'Mfenesini', NULL, NULL, NULL),
(3492, 'Mombasa', NULL, NULL, NULL),
(3493, 'Mtoni', NULL, NULL, NULL),
(3494, 'Mtoni Kidatu', NULL, NULL, NULL),
(3495, 'Mto Pepo', NULL, NULL, NULL),
(3496, 'Mtufaani', NULL, NULL, NULL),
(3497, 'Mwakaje', NULL, NULL, NULL),
(3498, 'Mwanakwerekwe', NULL, NULL, NULL),
(3499, 'Mwanyanya', NULL, NULL, NULL),
(3500, 'Mwera', NULL, NULL, NULL),
(3501, 'Nyamanzi', NULL, NULL, NULL),
(3502, 'Pangawe', NULL, NULL, NULL),
(3503, 'Shakani', NULL, NULL, NULL),
(3504, 'Sharifu Msa', NULL, NULL, NULL),
(3505, 'Tomondo', NULL, NULL, NULL),
(3506, 'Welezo', NULL, NULL, NULL),
(3507, 'Chimba', '173', NULL, NULL),
(3508, 'Finya', '173', NULL, NULL),
(3509, 'Kifundi', '173', NULL, NULL),
(3510, 'Kinowe', '173', NULL, NULL),
(3511, 'Kinyasini', '173', NULL, NULL),
(3512, 'Kiuyu Mbuyuni', '173', NULL, NULL),
(3513, 'Konde', '173', NULL, NULL),
(3514, 'Majenzi', '173', NULL, NULL),
(3515, 'Makangale', '173', NULL, NULL),
(3516, 'Maziwa Ng\'ombe', '173', NULL, NULL),
(3517, 'Mgogoni', '173', NULL, NULL),
(3518, 'Micheweni', '173', NULL, NULL),
(3519, 'Mihogoni', '173', NULL, NULL),
(3520, 'Mjini Wingwi', '173', NULL, NULL),
(3521, 'Mlindo', '173', NULL, NULL),
(3522, 'Msuka Magharibi', '173', NULL, NULL),
(3523, 'Msuka Mashariki', '173', NULL, NULL),
(3524, 'Mtemani', '173', NULL, NULL),
(3525, 'Shumba Mjini', '173', NULL, NULL),
(3526, 'Shumba Viamboni', '173', NULL, NULL),
(3527, 'Sizini', '173', NULL, NULL),
(3528, 'Tondooni', '173', NULL, NULL),
(3529, 'Tumbe ', '173', NULL, NULL),
(3530, 'Tumbe Mashariki', '173', NULL, NULL),
(3531, 'Wingwi Mapofu', '173', NULL, NULL),
(3532, 'Wingwi Mjananza', '173', NULL, NULL),
(3533, 'Wingwi Njuguni', '173', NULL, NULL),
(3534, 'Mjini Zanzibar', '173', NULL, NULL),
(3535, 'Amani', '173', NULL, NULL),
(3536, 'Chumbuni', '173', NULL, NULL),
(3537, 'Gulioni', '173', NULL, NULL),
(3538, 'Jang\'ombe', '173', NULL, NULL),
(3539, 'Karakana', '173', NULL, NULL),
(3540, 'Kidongo Chekundu', '173', NULL, NULL),
(3541, 'Kikwajuni Bondeni', '173', NULL, NULL),
(3542, 'Kikwajuni Juu', '173', NULL, NULL),
(3543, 'Kilimahewa Bondeni', '173', NULL, NULL),
(3544, 'Kilimahewa Juu', '173', NULL, NULL),
(3545, 'Kilimani', '173', NULL, NULL),
(3546, 'Kiponda', '173', NULL, NULL),
(3547, 'Kisima Majongoo', '173', NULL, NULL),
(3548, 'Kisiwandui', '173', NULL, NULL),
(3549, 'Kwaalimsha', '173', NULL, NULL),
(3550, 'Kwaalinatu', '173', NULL, NULL),
(3551, 'Kwahani', '173', NULL, NULL),
(3552, 'Kwamtipura', '173', NULL, NULL),
(3553, 'Kwa Wazee', '173', NULL, NULL),
(3554, 'Magomeni', '173', NULL, NULL),
(3555, 'Makadara', '173', NULL, NULL),
(3556, 'Malindi', '173', NULL, NULL),
(3557, 'Matarumbeta', '173', NULL, NULL),
(3558, 'Mchangani', '173', NULL, NULL),
(3559, 'Meya', '173', NULL, NULL),
(3560, 'Miembeni', '173', NULL, NULL),
(3561, 'Migombani', '173', NULL, NULL),
(3562, 'Mikunguni', '173', NULL, NULL),
(3563, 'Mkele', '173', NULL, NULL),
(3564, 'Mkunazini', '173', NULL, NULL),
(3565, 'Mlandege', '173', NULL, NULL),
(3566, 'Mpendae', '173', NULL, NULL),
(3567, 'Muungano', '173', NULL, NULL),
(3568, 'Mwembeladu', '173', NULL, NULL),
(3569, 'Mwembe Makumbi', '173', NULL, NULL),
(3570, 'Mwembeshauri (Muembeshauri)', '173', NULL, NULL),
(3571, 'Mwembetanga (Muembetanga)', '173', NULL, NULL),
(3572, 'Nyerere', '173', NULL, NULL),
(3573, 'Rahaleo', '173', NULL, NULL),
(3574, 'Sebleni', '173', NULL, NULL),
(3575, 'Shangani', '173', NULL, NULL),
(3576, 'Shaurimoyo', '173', NULL, NULL),
(3577, 'Sogea', '173', NULL, NULL),
(3578, 'Urusi', '173', NULL, NULL),
(3579, 'Vikokotoni', '173', NULL, NULL),
(3580, 'Chambani', '57', NULL, NULL),
(3581, 'Changaweni', '57', NULL, NULL),
(3582, 'Chokocho', '57', NULL, NULL),
(3583, 'Chumbageni', '57', NULL, NULL),
(3584, 'Jombwe', '57', NULL, NULL),
(3585, 'Kangani', '57', NULL, NULL),
(3586, 'Kendwa', '57', NULL, NULL),
(3587, 'Kengeja', '57', NULL, NULL),
(3588, 'Kisiwa Panza', '57', NULL, NULL),
(3589, 'Kiwani', '57', NULL, NULL),
(3590, 'Kuukuu', '57', NULL, NULL),
(3591, 'Makombeni', '57', NULL, NULL),
(3592, 'Makoongwe', '57', NULL, NULL),
(3593, 'Mbuguani', '57', NULL, NULL),
(3594, 'Mbuyuni', '57', NULL, NULL),
(3595, 'Mgagadu', '57', NULL, NULL),
(3596, 'Michenzani', '57', NULL, NULL),
(3597, 'Minazini', '57', NULL, NULL),
(3598, 'Mizingani', '57', NULL, NULL),
(3599, 'Mjimbini', '57', NULL, NULL),
(3600, 'Mkanyageni', '57', NULL, NULL),
(3601, 'Mkungu', '57', NULL, NULL),
(3602, 'Mtambile', '57', NULL, NULL),
(3603, 'Mtangani', '57', NULL, NULL),
(3604, 'Muambe', '57', NULL, NULL),
(3605, 'Ng\'ombeni', '57', NULL, NULL),
(3606, 'Ngwachani', '57', NULL, NULL),
(3607, 'Shamiani', '57', NULL, NULL),
(3608, 'Shidi', '57', NULL, NULL),
(3609, 'Stahabu', '57', NULL, NULL),
(3610, 'Ukutini', '57', NULL, NULL),
(3611, 'Uweleni', '57', NULL, NULL),
(3612, 'Wambaa', '57', NULL, NULL),
(3613, 'Bopwe', '174', NULL, NULL),
(3614, 'Chwale', '174', NULL, NULL),
(3615, 'Fundo', '174', NULL, NULL),
(3616, 'Gando', '174', NULL, NULL),
(3617, 'Jadida', '174', NULL, NULL),
(3618, 'Junguni', '174', NULL, NULL),
(3619, 'Kambini', '174', NULL, NULL),
(3620, 'Kangagani', '174', NULL, NULL),
(3621, 'Kinyikani', '174', NULL, NULL),
(3622, 'Kipangani', '174', NULL, NULL),
(3623, 'Kisiwani', '174', NULL, NULL),
(3624, 'Kiungoni', '174', NULL, NULL),
(3625, 'Kiuyu Kigongoni', '174', NULL, NULL),
(3626, 'Kiuyu Minungwini', '174', NULL, NULL),
(3627, 'Kizimbani', '174', NULL, NULL),
(3628, 'Kojani', '174', NULL, NULL),
(3629, 'Limbani', '174', NULL, NULL),
(3630, 'Maziwani', '174', NULL, NULL),
(3631, 'Mchanga Mdogo', '174', NULL, NULL),
(3632, 'Mjini Ole', '174', NULL, NULL),
(3633, 'Mpambani', '174', NULL, NULL),
(3634, 'Mtambwe Kaskazini', '174', NULL, NULL),
(3635, 'Mtambwe Kusini', '174', NULL, NULL),
(3636, 'Mzambarauni Takao', '174', NULL, NULL),
(3637, 'Ole', '174', NULL, NULL),
(3638, 'Pandani', '174', NULL, NULL),
(3639, 'Pembeni', '174', NULL, NULL),
(3640, 'Piki', '174', NULL, NULL),
(3641, 'Selem', '174', NULL, NULL),
(3642, 'Shengejuu', '174', NULL, NULL),
(3643, 'Ukunjwi', '174', NULL, NULL),
(3644, 'Utaani', '174', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `warehouses`
--

CREATE TABLE `warehouses` (
  `id` int(11) NOT NULL,
  `warehouse_name` varchar(255) NOT NULL,
  `warehouse_description` varchar(255) NOT NULL,
  `location_address` varchar(255) NOT NULL,
  `location_coordinates` varchar(255) NOT NULL,
  `iso3166` varchar(255) DEFAULT NULL,
  `amenity` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `country_code` varchar(255) DEFAULT NULL,
  `postcode` varchar(255) DEFAULT NULL,
  `region` varchar(255) DEFAULT NULL,
  `road` varchar(255) DEFAULT NULL,
  `suburb` varchar(255) DEFAULT NULL,
  `ward` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `warehouses_temp`
--

CREATE TABLE `warehouses_temp` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `warehouse_name` varchar(255) DEFAULT NULL,
  `warehouse_description` varchar(255) DEFAULT NULL,
  `location_address` text DEFAULT NULL,
  `location_coordinates` varchar(255) DEFAULT NULL,
  `iso3166` varchar(255) DEFAULT NULL,
  `amenity` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `country_code` varchar(255) DEFAULT NULL,
  `postcode` varchar(255) DEFAULT NULL,
  `region` varchar(255) DEFAULT NULL,
  `road` varchar(255) DEFAULT NULL,
  `suburb` varchar(255) DEFAULT NULL,
  `ward` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `warehouses_temp`
--

INSERT INTO `warehouses_temp` (`id`, `unique_id`, `warehouse_name`, `warehouse_description`, `location_address`, `location_coordinates`, `iso3166`, `amenity`, `city`, `country`, `country_code`, `postcode`, `region`, `road`, `suburb`, `ward`, `name`, `type`, `created_at`, `updated_at`) VALUES
(55, '23', 'WH1', NULL, 'Urio Grocery, 7, Simba Street, Sinza, Ubungo Municipal, Dar es-Salaam, Coastal Zone, 25195, Tanzania', '-6.78496667422719, 39.221079018319166', 'TZ-02', NULL, 'Dar es-Salaam', 'Tanzania', 'tz', '25195', NULL, 'Simba Street', 'Sinza', NULL, 'Urio Grocery', 'commercial;residential', '2024-07-20 12:09:42', '2024-07-20 12:10:40'),
(56, '23', 'WH2', NULL, 'CHADEMA Office, 20, Togo, Morocco, Kinondoni, Dar es-Salaam, Coastal Zone, 14110, Tanzania', '-6.7870121797247505, 39.265387279360745', 'TZ-02', NULL, 'Dar es-Salaam', 'Tanzania', 'tz', '14110', NULL, 'Togo', 'Morocco', NULL, 'CHADEMA Office', 'political_party', '2024-07-20 12:09:48', '2024-07-20 12:10:40'),
(57, '24', 'WH99', 'Vero voluptate molli', 'TAG Church, Kijijini Road, Morocco, Kinondoni, Dar es-Salaam, Coastal Zone, 14110, Tanzania', '-6.784881444642891, 39.267592002616986', 'TZ-02', 'TAG Church', 'Dar es-Salaam', 'Tanzania', 'tz', '14110', 'Excepteur sint omni', 'Kijijini Road', 'Morocco', 'Commodi veritatis ac', 'TAG Church', 'place_of_worship', '2024-07-28 23:21:26', '2024-07-28 23:21:37'),
(58, '24', 'WH99', 'Vero voluptate molli', 'Mwembe Sindima, Ufipa Kipande, Morocco, Kinondoni, Dar es-Salaam, Coastal Zone, 14110, Tanzania', '-6.785589915103937, 39.26867608967443', 'TZ-02', NULL, 'Dar es-Salaam', 'Tanzania', 'tz', '14110', 'Excepteur sint omni', 'Ufipa Kipande', 'Morocco', 'Commodi veritatis ac', 'Mwembe Sindima', 'company', '2024-07-28 23:21:33', '2024-07-28 23:21:37'),
(59, '25', 'Sage Martinez', 'Cum sed et ad dolor', 'Soka City Bar, Kifaru Street, University Residential Houses, Kijitonyama, Kinondoni Municipal, Dar es-Salaam, Coastal Zone, 25195, Tanzania', '-6.775506098323657, 39.228431552986585', 'TZ-02', 'Soka City Bar', 'Dar es-Salaam', 'Tanzania', 'tz', '25195', 'Aliqua Ad et repudi', 'Kifaru Street', 'Kijitonyama', 'Expedita dolorum tem', 'Soka City Bar', 'bar', '2024-07-28 23:29:46', '2024-07-28 23:30:38'),
(60, '25', 'Sage Martinez', 'Cum sed et ad dolor', 'Ardhi University, Changanyikeni Road, Chuo Kikuu, Makongo, Kinondoni Municipal, Dar es-Salaam, Coastal Zone, 14112, Tanzania', '-6.764596374995009, 39.21322520222577', 'TZ-02', 'Ardhi University', 'Dar es-Salaam', 'Tanzania', 'tz', '14112', 'Aliqua Ad et repudi', 'Changanyikeni Road', 'Makongo', 'Expedita dolorum tem', 'Ardhi University', 'university', '2024-07-28 23:30:07', '2024-07-28 23:30:38'),
(61, '25', 'Sage Martinez', 'Cum sed et ad dolor', 'Ardhi University, Changanyikeni Road, Chuo Kikuu, Makongo, Kinondoni Municipal, Dar es-Salaam, Coastal Zone, 14112, Tanzania', '-6.764596374995009, 39.21322520222577', 'TZ-02', 'Ardhi University', 'Dar es-Salaam', 'Tanzania', 'tz', '14112', 'Aliqua Ad et repudi', 'Changanyikeni Road', 'Makongo', 'Expedita dolorum tem', 'Ardhi University', 'university', '2024-07-28 23:30:16', '2024-07-28 23:30:38'),
(62, '26', 'Shelly Hayes', 'Iusto amet facilis', 'Reality of Christ Church, Sinza Mori Road, University Residential Houses, Sinza, Ubungo Municipal, Dar es-Salaam, Coastal Zone, 14113, Tanzania', '-6.779639796226174, 39.22910464157273', 'TZ-02', 'Reality of Christ Church', 'Dar es-Salaam', 'Tanzania', 'tz', '14113', 'Provident nemo sit', 'Sinza Mori Road', 'Sinza', 'Natus harum quidem c', 'Reality of Christ Church', 'place_of_worship', '2024-07-29 00:08:30', '2024-07-29 00:08:44'),
(63, '26', 'Shelly Hayes', 'Iusto amet facilis', 'Mahakama ya Mwanzo Sinza, 23, Mtaa wa Sinza Road, Sinza, Ubungo Municipal, Dar es-Salaam, Coastal Zone, 25195, Tanzania', '-6.781131328003204, 39.221504223855185', 'TZ-02', 'Mahakama ya Mwanzo Sinza', 'Dar es-Salaam', 'Tanzania', 'tz', '25195', 'Provident nemo sit', 'Mtaa wa Sinza Road', 'Sinza', 'Natus harum quidem c', 'Mahakama ya Mwanzo Sinza', 'courthouse', '2024-07-29 00:08:35', '2024-07-29 00:08:44'),
(64, '893702', 'Dana Chandler', 'Tempor illo duis ut', 'Tauba Mosque, Kijijini Road, Morocco, Kinondoni, Dar es-Salaam, Coastal Zone, 14110, Tanzania', '-6.784465950203428, 39.26727007266533', 'TZ-02', 'Tauba Mosque', 'Dar es-Salaam', 'Tanzania', 'tz', '14110', 'Quod eum et harum es', 'Kijijini Road', 'Morocco', 'Aliquip dignissimos', 'Tauba Mosque', 'place_of_worship', '2024-07-29 04:26:48', '2024-07-29 04:26:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `approvals`
--
ALTER TABLE `approvals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checks`
--
ALTER TABLE `checks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `choises`
--
ALTER TABLE `choises`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collateral_managers`
--
ALTER TABLE `collateral_managers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commodities`
--
ALTER TABLE `commodities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farmers`
--
ALTER TABLE `farmers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_policies`
--
ALTER TABLE `password_policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pledges`
--
ALTER TABLE `pledges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `processes`
--
ALTER TABLE `processes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `releases`
--
ALTER TABLE `releases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_checks`
--
ALTER TABLE `service_checks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_parameters`
--
ALTER TABLE `service_parameters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sources`
--
ALTER TABLE `sources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `steps`
--
ALTER TABLE `steps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `step_permissions`
--
ALTER TABLE `step_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_prices`
--
ALTER TABLE `stock_prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_menus`
--
ALTER TABLE `sub_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_permissions`
--
ALTER TABLE `temp_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wards`
--
ALTER TABLE `wards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warehouses`
--
ALTER TABLE `warehouses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warehouses_temp`
--
ALTER TABLE `warehouses_temp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `approvals`
--
ALTER TABLE `approvals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=852;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `checks`
--
ALTER TABLE `checks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `choises`
--
ALTER TABLE `choises`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `collateral_managers`
--
ALTER TABLE `collateral_managers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `commodities`
--
ALTER TABLE `commodities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT for table `farmers`
--
ALTER TABLE `farmers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `password_policies`
--
ALTER TABLE `password_policies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `pledges`
--
ALTER TABLE `pledges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `processes`
--
ALTER TABLE `processes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `releases`
--
ALTER TABLE `releases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `service_checks`
--
ALTER TABLE `service_checks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `service_parameters`
--
ALTER TABLE `service_parameters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sources`
--
ALTER TABLE `sources`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `steps`
--
ALTER TABLE `steps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `step_permissions`
--
ALTER TABLE `step_permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `stock_prices`
--
ALTER TABLE `stock_prices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sub_menus`
--
ALTER TABLE `sub_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `temp_permissions`
--
ALTER TABLE `temp_permissions`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `wards`
--
ALTER TABLE `wards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3645;

--
-- AUTO_INCREMENT for table `warehouses`
--
ALTER TABLE `warehouses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `warehouses_temp`
--
ALTER TABLE `warehouses_temp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
