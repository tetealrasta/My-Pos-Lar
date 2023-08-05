-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2023 at 02:49 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mypos`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `account_type` varchar(50) DEFAULT NULL COMMENT 'نوع الحساب هل هو رأس مال ,عميل,مورد',
  `parrent_account_` int(11) DEFAULT NULL COMMENT 'حساب الأب',
  `account_number` int(11) DEFAULT NULL COMMENT 'رقم الحساب ويجب ان يكون مميز',
  `start_balance` int(11) DEFAULT NULL COMMENT 'رصيد الحساب اول المده',
  `current_balance` int(11) DEFAULT NULL COMMENT 'رصيد الحساب الحالي',
  `is_archived` int(11) DEFAULT NULL COMMENT 'هل تمت أرشفته لان الحسابات المالية لا تحذف',
  `com_code` int(11) DEFAULT NULL COMMENT 'كود الشركة',
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `other_table_FK` int(11) DEFAULT NULL COMMENT 'جميع الحركات التي تأتي من الجداول الداخلية بيكون معاها  \r\nID \r\nيتم تسجيل هذا ال\r\nID \r\n',
  `notes` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `account_tree`
--

CREATE TABLE `account_tree` (
  `id` int(11) DEFAULT NULL,
  `account_type` varchar(50) DEFAULT NULL COMMENT 'نوع الحساب المالي (راس مال, مورد ,عميل)',
  `account_type_name` varchar(50) DEFAULT NULL,
  `account_type_number` int(11) DEFAULT NULL,
  `account_start_blance` float DEFAULT NULL COMMENT 'رصيد الحساب الإبتدائي',
  `account_start_blance_status` int(11) DEFAULT NULL COMMENT 'حالة الحساب هل هو دائن او مدين او متزن',
  `account_status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='شجرة الحسابات\r\n';

-- --------------------------------------------------------

--
-- Table structure for table `bill_type`
--

CREATE TABLE `bill_type` (
  `id` int(11) NOT NULL,
  `bill_type_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bill_type`
--

INSERT INTO `bill_type` (`id`, `bill_type_name`) VALUES
(1, 'فاتورة مبدئية'),
(2, 'فاتورة مشتريات'),
(3, 'فاتورة مبيعات'),
(4, 'فاتورة  مردود مشتريات'),
(5, 'فاتورة  مردود مبيعات');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_name` varchar(191) NOT NULL,
  `cat_description` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_name`, `cat_description`, `created_at`, `updated_at`) VALUES
(1, 'watches', NULL, NULL, NULL),
(2, 'cats', NULL, NULL, NULL),
(3, 'Laptops', NULL, NULL, NULL),
(4, 'Phones', NULL, NULL, NULL),
(5, 'New Clothes', 'Sprint Clothes', '2023-06-30 12:47:19', '2023-06-30 12:47:19');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(191) NOT NULL,
  `customer_address` varchar(191) DEFAULT NULL,
  `customer_phone` varchar(191) DEFAULT NULL,
  `customer_imge` varchar(191) DEFAULT NULL,
  `customer_email` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customer_name`, `customer_address`, `customer_phone`, `customer_imge`, `customer_email`, `created_at`, `updated_at`) VALUES
(1, 'نصرالدين عثمان محمد', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'نصرالدين عثمان محمد', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'نصرالدين عثمان محمد', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mony_account_type`
--

CREATE TABLE `mony_account_type` (
  `id` int(11) NOT NULL,
  `account_name` varchar(50) DEFAULT NULL,
  `active` tinyint(4) DEFAULT NULL,
  `related_internal_account` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='أنواع الحسابات المالية';

--
-- Dumping data for table `mony_account_type`
--

INSERT INTO `mony_account_type` (`id`, `account_name`, `active`, `related_internal_account`) VALUES
(1, 'رأس المال', 1, NULL),
(2, 'مورد', 1, NULL),
(3, 'عميل', 1, NULL),
(4, 'مندوب', 1, NULL),
(5, 'موظف', 1, NULL),
(6, 'بنكي', 1, NULL),
(7, 'مصروفات', 1, NULL),
(8, 'قسم داخلي', 1, NULL),
(9, 'عام', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mony_move_type`
--

CREATE TABLE `mony_move_type` (
  `id` int(11) NOT NULL,
  `mony_move_type` varchar(50) DEFAULT NULL,
  `screen_show` varchar(50) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='انواع الحركات المالية';

--
-- Dumping data for table `mony_move_type`
--

INSERT INTO `mony_move_type` (`id`, `mony_move_type`, `screen_show`, `status`) VALUES
(1, ' مراجعة واستلام نقدية شفت على نفس الخزينة', 'بشاشة التحصيل', 1),
(2, 'مراجعة واستلام نقدية شفت خزنة اخرى', 'بشاشة التحصيل', 1),
(3, 'صرف مبلغ لحساب مالي', 'بشاشة الصرف', 1),
(4, 'تحصيل مبلغ من حساب مالي', 'بشاشة التحصيل', 1),
(5, 'تحصيل ايراد مبيعات', 'بشاشة التحصيل', 1),
(6, 'صرف نظير مرتجع مبيعات', 'بشاشة الصرف', 1),
(7, 'صرف نظير مشتريات من مورد', 'بشاشة الصرف', 1),
(8, 'تحصيل نظير مرتجع مشتريات الى مورد', 'بشاشة التحصيل', 1),
(9, 'ايراد زيادة رأس المال', 'بشاشة التحصيل', 1),
(10, 'مصاريف شراء مثل تكاليف شراء البضاعة(مصاريف السيارة', 'بشاشة الصرف', 1),
(11, 'صرف للإيداع البنكي', 'بشاشة الصرف', 1),
(12, 'سحب من البنك', 'بشاشة التحصيل', 1),
(13, 'صرف لرد رأس المال', 'بشاشة الصرف', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(191) DEFAULT NULL,
  `Total` int(11) DEFAULT NULL,
  `customer_email` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `customer_name`, `Total`, `customer_email`, `created_at`, `updated_at`) VALUES
(46, 'NASR ALDEN Osman Mohamed', 6850, 'oumdurman', '2023-06-30 11:21:54', '2023-06-30 11:21:54'),
(47, NULL, 635, NULL, '2023-06-30 11:58:07', '2023-06-30 11:58:07');

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `order_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`id`, `product_id`, `order_id`, `quantity`, `price`) VALUES
(31, 1, 46, 2, 15),
(32, 15, 46, 11, 400),
(33, 16, 46, 1, 20),
(34, 18, 46, 1, 200),
(35, 20, 46, 2, 200),
(36, 22, 46, 2, 200),
(37, 17, 46, 1, 200),
(38, 19, 46, 2, 200),
(39, 21, 46, 1, 200),
(40, 23, 46, 2, 200),
(41, 25, 46, 1, 200),
(42, 1, 47, 1, 15),
(43, 15, 47, 1, 400),
(44, 16, 47, 1, 20),
(45, 18, 47, 1, 200);

-- --------------------------------------------------------

--
-- Table structure for table `pay_type`
--

CREATE TABLE `pay_type` (
  `id` int(11) NOT NULL,
  `pay_type_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pay_type`
--

INSERT INTO `pay_type` (`id`, `pay_type_name`) VALUES
(1, 'كاش'),
(2, 'أجل');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(191) NOT NULL,
  `product_description` varchar(191) DEFAULT NULL,
  `purshace_price` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `risk` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `product_name`, `product_description`, `purshace_price`, `price`, `stock`, `risk`, `created_at`, `updated_at`) VALUES
(1, 1, 'samsung', NULL, 10, 15, 100, 5, '2023-06-30 18:10:24', NULL),
(15, 2, 'catti', NULL, 200, 400, 52, 6, '2023-06-30 18:10:24', NULL),
(16, 3, 'acer', NULL, 15, 20, 10, 5, '2023-06-30 18:10:24', NULL),
(17, 4, 'samsung', NULL, 150, 200, 30, 20, '2023-06-30 18:10:24', NULL),
(18, 3, 'toshipa', NULL, 150, 200, 10, 5, '2023-06-30 18:10:24', NULL),
(19, 4, 'shaoumi', NULL, 150, 200, 30, 20, '2023-06-30 18:10:24', NULL),
(20, 3, 'hp', NULL, 150, 200, 10, 5, '2023-06-30 18:10:24', NULL),
(21, 4, 'lenovo', NULL, 150, 200, 30, 20, '2023-06-30 18:10:24', NULL),
(22, 3, 'sony', NULL, 150, 200, 10, 5, '2023-06-30 18:10:24', NULL),
(23, 4, 'itel', NULL, 150, 200, 30, 20, '2023-06-30 18:10:24', NULL),
(24, 3, 'dell', NULL, 150, 200, 10, 5, '2023-06-30 18:10:24', NULL),
(25, 4, 'hawauit', NULL, 150, 200, 30, 20, '2023-06-30 18:10:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `purshace`
--

CREATE TABLE `purshace` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serial` varchar(191) NOT NULL,
  `amil_id` bigint(20) UNSIGNED NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purshace_detailse`
--

CREATE TABLE `purshace_detailse` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `sub_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `salse`
--

CREATE TABLE `salse` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serial` varchar(191) NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `bill_type` int(11) DEFAULT NULL,
  `pay_type` int(11) DEFAULT NULL,
  `total` int(11) NOT NULL,
  `what_paid` int(11) DEFAULT NULL,
  `what_not_yet_paid` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT curdate(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `salse`
--

INSERT INTO `salse` (`id`, `serial`, `customer_id`, `bill_type`, `pay_type`, `total`, `what_paid`, `what_not_yet_paid`, `created_at`, `updated_at`) VALUES
(1, '1245', 1, 3, 1, 1500, 1000, 500, '2023-07-13 20:37:30', NULL),
(2, '1245', 1, 3, 1, 1500, 1000, 500, '2023-07-13 20:37:36', NULL),
(3, '1245', 1, 3, 1, 1500, 1000, 500, '2023-07-13 20:37:38', NULL),
(4, '1245', 1, 3, 1, 1500, 1000, 500, '2023-07-13 20:37:40', NULL),
(5, '1245', 1, 3, 1, 1500, 1000, 500, '2023-07-13 20:37:41', NULL),
(6, '1245', 1, 3, 1, 1500, 1000, 500, '2023-07-13 20:37:43', NULL),
(7, '1245', 1, 3, 1, 1500, 1000, 500, '2023-07-13 20:37:44', NULL),
(8, '1245', 1, 3, 1, 1500, 1000, 500, '2023-07-13 20:37:46', NULL),
(9, '1245', 1, 3, 1, 1500, 1000, 500, '2023-07-13 20:37:47', NULL),
(10, '1245', 1, 3, 1, 1500, 1000, 500, '2023-07-13 20:37:48', NULL),
(11, '1245', 1, 3, 1, 1500, 1000, 500, '2023-07-13 20:37:58', NULL),
(12, '1245', 1, 3, 1, 1500, 1000, 500, '2023-07-13 20:37:59', NULL),
(13, '1245', 1, 3, 1, 1500, 1000, 500, '2023-07-13 20:38:00', NULL),
(14, '1245', 1, 3, 1, 1500, 1000, 500, '2023-07-13 20:38:01', NULL),
(15, '1245', 1, 3, 1, 1500, 1000, 500, '2023-07-13 20:38:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `salse_detailse`
--

CREATE TABLE `salse_detailse` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `sub_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings_company`
--

CREATE TABLE `settings_company` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(191) NOT NULL,
  `company_logo` varchar(191) NOT NULL,
  `company_address` varchar(191) NOT NULL,
  `company_phone` varchar(191) NOT NULL,
  `company_description` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `stock_name` varchar(50) NOT NULL DEFAULT '',
  `stock_address` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `stock_name`, `stock_address`) VALUES
(1, 'المعرض', NULL),
(2, 'المخزن الرئيسي', NULL),
(3, 'المخزن الفرعي', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stock_data`
--

CREATE TABLE `stock_data` (
  `id` int(11) NOT NULL,
  `cat_id` int(10) UNSIGNED DEFAULT NULL,
  `pro_id` int(10) UNSIGNED DEFAULT NULL,
  `unit_id` int(10) UNSIGNED DEFAULT NULL,
  `qty` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL,
  `sup_code` bigint(20) DEFAULT NULL,
  `sup_name` varchar(155) NOT NULL,
  `sup_phone` varchar(155) NOT NULL,
  `sup_address` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `treasures`
--

CREATE TABLE `treasures` (
  `id` int(11) NOT NULL,
  `treasures_name` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `treasures`
--

INSERT INTO `treasures` (`id`, `treasures_name`) VALUES
(1, 'الخزنة الرئيسية'),
(2, 'الخزنة الفرعية');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unit_name` varchar(50) DEFAULT NULL,
  `unit_number` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `unit_name`, `unit_number`, `created_at`, `updated_at`) VALUES
(1, 'حبة', 1, NULL, NULL),
(2, 'دستة', 12, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill_type`
--
ALTER TABLE `bill_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mony_account_type`
--
ALTER TABLE `mony_account_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mony_move_type`
--
ALTER TABLE `mony_move_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_key` (`product_id`),
  ADD KEY `order_key` (`order_id`);

--
-- Indexes for table `pay_type`
--
ALTER TABLE `pay_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `purshace`
--
ALTER TABLE `purshace`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purshace_detailse`
--
ALTER TABLE `purshace_detailse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salse`
--
ALTER TABLE `salse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salse_detailse`
--
ALTER TABLE `salse_detailse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings_company`
--
ALTER TABLE `settings_company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_data`
--
ALTER TABLE `stock_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treasures`
--
ALTER TABLE `treasures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
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
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bill_type`
--
ALTER TABLE `bill_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mony_move_type`
--
ALTER TABLE `mony_move_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `pay_type`
--
ALTER TABLE `pay_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `purshace`
--
ALTER TABLE `purshace`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purshace_detailse`
--
ALTER TABLE `purshace_detailse`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `salse`
--
ALTER TABLE `salse`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `salse_detailse`
--
ALTER TABLE `salse_detailse`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings_company`
--
ALTER TABLE `settings_company`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stock_data`
--
ALTER TABLE `stock_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `treasures`
--
ALTER TABLE `treasures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `order_id` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
