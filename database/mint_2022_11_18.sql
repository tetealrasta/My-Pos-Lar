-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2022 at 02:01 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mint`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Ad_Name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ad_Email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ad_Password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blags`
--

CREATE TABLE `blags` (
  `Blag_ID` int(11) UNSIGNED NOT NULL,
  `Blag_Number` bigint(20) DEFAULT NULL,
  `Dev_Type` int(11) DEFAULT NULL,
  `Devv_id` int(11) DEFAULT NULL,
  `Type_Of_Error` int(11) DEFAULT NULL,
  `Unit_Id` int(11) DEFAULT NULL,
  `Device_Status` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blags`
--

INSERT INTO `blags` (`Blag_ID`, `Blag_Number`, `Dev_Type`, `Devv_id`, `Type_Of_Error`, `Unit_Id`, `Device_Status`, `created_at`, `updated_at`) VALUES
(8, 1, 1, 9, 1, 1, 1, '2022-11-17 02:05:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `Brand_id` int(11) NOT NULL,
  `Brand_Name` varchar(150) NOT NULL,
  `Brand_Cat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `Cat_Name` varchar(50) DEFAULT NULL,
  `Cat_Status` int(11) NOT NULL DEFAULT '0',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `Cat_Name`, `Cat_Status`, `updated_at`, `created_at`) VALUES
(1, 'جهاز طرفي', 0, '2022-10-02 10:42:30', '2022-10-02 10:42:30'),
(2, 'أجهزة كمبيوتر', 0, '2022-10-02 10:46:20', '2022-10-02 10:46:20'),
(3, 'أجهزة لاب توب', 0, '2022-11-13 07:46:22', '2022-11-13 07:46:22'),
(4, 'أجهزة هاتف', 0, '2022-11-16 07:00:53', '2022-11-16 07:00:53'),
(6, NULL, 0, '2022-11-17 09:15:19', '2022-11-17 09:15:19');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `Company_id` int(11) NOT NULL,
  `Company_Name` varchar(100) NOT NULL,
  `Company_Desc` varchar(200) DEFAULT NULL,
  `Company_Location` varchar(170) DEFAULT NULL,
  `Company_E-mail` varchar(150) DEFAULT NULL,
  `Company_Phone` varchar(15) DEFAULT NULL,
  `Company_Logo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`Company_id`, `Company_Name`, `Company_Desc`, `Company_Location`, `Company_E-mail`, `Company_Phone`, `Company_Logo`) VALUES
(1, 'Amazon', NULL, NULL, NULL, NULL, NULL),
(2, 'Dell', NULL, NULL, NULL, NULL, NULL),
(3, 'Toshipa', NULL, NULL, NULL, NULL, NULL),
(4, 'Acer', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `device`
--

CREATE TABLE `device` (
  `Dev_Id` int(11) NOT NULL,
  `Dev_Parcode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Dev_Name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Dev_Cat` int(11) NOT NULL,
  `Dev_Unit` int(11) NOT NULL,
  `Dev_Pic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Dev_Status` int(11) NOT NULL,
  `Dev_Mo` int(11) NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `device`
--

INSERT INTO `device` (`Dev_Id`, `Dev_Parcode`, `Dev_Name`, `Dev_Cat`, `Dev_Unit`, `Dev_Pic`, `Dev_Status`, `Dev_Mo`, `Created_at`) VALUES
(9, 'FT-150452', 'Toshipa', 2, 1, 'test', 5, 4, '2022-11-17 09:16:33');

-- --------------------------------------------------------

--
-- Table structure for table `device_cycle`
--

CREATE TABLE `device_cycle` (
  `id` int(11) NOT NULL,
  `Device_id` int(11) NOT NULL,
  `Device_From` int(11) NOT NULL,
  `Device_To` int(11) NOT NULL,
  `Created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `device_status`
--

CREATE TABLE `device_status` (
  `id` int(11) NOT NULL,
  `Status_Name` varchar(150) NOT NULL,
  `Status_Desc` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `device_status`
--

INSERT INTO `device_status` (`id`, `Status_Name`, `Status_Desc`) VALUES
(4, 'معطل', NULL),
(5, 'صرف جديد', NULL),
(6, 'تالف', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `expanse_device`
--

CREATE TABLE `expanse_device` (
  `ID` int(11) NOT NULL,
  `Device_Serial` varchar(250) NOT NULL,
  `Device_Type` int(11) NOT NULL,
  `Device_Name` varchar(250) NOT NULL,
  `User_Name` varchar(250) NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `motahasil`
--

CREATE TABLE `motahasil` (
  `id` int(11) NOT NULL,
  `Mo_Name` varchar(150) NOT NULL,
  `Mo_Phone` varchar(150) DEFAULT NULL,
  `Mo_E-mail` varchar(150) DEFAULT NULL,
  `Mo_Address` varchar(150) DEFAULT NULL,
  `Mo_Unit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `motahasil`
--

INSERT INTO `motahasil` (`id`, `Mo_Name`, `Mo_Phone`, `Mo_E-mail`, `Mo_Address`, `Mo_Unit`) VALUES
(3, 'الخزنة', NULL, NULL, NULL, 0),
(4, 'نصرالدين عثمان', NULL, NULL, NULL, 0),
(5, 'علي الماحي', NULL, NULL, NULL, 0),
(6, 'أسامة النور', NULL, NULL, NULL, 0),
(7, 'محمد عادل', NULL, NULL, NULL, 0),
(8, 'الخزنة', NULL, NULL, NULL, 1),
(9, 'نصرالدين عثمان', NULL, NULL, NULL, 3),
(10, 'علي الماحي', NULL, NULL, NULL, 4),
(11, 'أسامة النور', NULL, NULL, NULL, 2),
(12, 'محمد عادل', NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `problems`
--

CREATE TABLE `problems` (
  `Problem_Id` int(11) NOT NULL,
  `Problem_Name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `problems`
--

INSERT INTO `problems` (`Problem_Id`, `Problem_Name`, `created_at`, `updated_at`) VALUES
(3, 'تحتا الى تروس', '2022-10-02 10:42:56', '2022-10-02 10:42:56'),
(4, 'يحتاج الى ورق', '2022-11-16 07:02:10', '2022-11-16 07:02:10');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `Local_Id` int(11) NOT NULL,
  `Local_Name` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`Local_Id`, `Local_Name`, `created_at`, `updated_at`) VALUES
(1, 'محلية أمبدة', '2022-11-17 06:52:14', '2022-11-17 06:52:14'),
(2, 'محلية شرق النيل', '2022-11-17 06:52:21', '2022-11-17 06:52:21'),
(3, 'محلية كرري', '2022-11-17 06:52:26', '2022-11-17 06:52:26'),
(4, 'محلية الخرطوم', '2022-11-17 06:52:38', '2022-11-17 06:52:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `Photo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test@test.com', '2022-10-06 01:00:00', 'test', 'test', 'test', '2022-10-06 02:00:00', '2022-10-06 04:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blags`
--
ALTER TABLE `blags`
  ADD PRIMARY KEY (`Blag_ID`),
  ADD KEY `unit_for` (`Unit_Id`) USING BTREE,
  ADD KEY `dv` (`Devv_id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`Brand_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`Company_id`);

--
-- Indexes for table `device`
--
ALTER TABLE `device`
  ADD PRIMARY KEY (`Dev_Id`),
  ADD KEY `cat` (`Dev_Cat`),
  ADD KEY `unit` (`Dev_Unit`),
  ADD KEY `status` (`Dev_Status`),
  ADD KEY `mo` (`Dev_Mo`);

--
-- Indexes for table `device_cycle`
--
ALTER TABLE `device_cycle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dev` (`Device_id`),
  ADD KEY `from` (`Device_From`),
  ADD KEY `to` (`Device_To`);

--
-- Indexes for table `device_status`
--
ALTER TABLE `device_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expanse_device`
--
ALTER TABLE `expanse_device`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motahasil`
--
ALTER TABLE `motahasil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `problems`
--
ALTER TABLE `problems`
  ADD PRIMARY KEY (`Problem_Id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`Local_Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blags`
--
ALTER TABLE `blags`
  MODIFY `Blag_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `Brand_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `Company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `device`
--
ALTER TABLE `device`
  MODIFY `Dev_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `device_cycle`
--
ALTER TABLE `device_cycle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `device_status`
--
ALTER TABLE `device_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `expanse_device`
--
ALTER TABLE `expanse_device`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `motahasil`
--
ALTER TABLE `motahasil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `problems`
--
ALTER TABLE `problems`
  MODIFY `Problem_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `Local_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blags`
--
ALTER TABLE `blags`
  ADD CONSTRAINT `dv` FOREIGN KEY (`Devv_id`) REFERENCES `device` (`Dev_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t` FOREIGN KEY (`Unit_Id`) REFERENCES `unit` (`Local_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `device`
--
ALTER TABLE `device`
  ADD CONSTRAINT `cat` FOREIGN KEY (`Dev_Cat`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mo` FOREIGN KEY (`Dev_Mo`) REFERENCES `motahasil` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `status` FOREIGN KEY (`Dev_Status`) REFERENCES `device_status` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `unit` FOREIGN KEY (`Dev_Unit`) REFERENCES `unit` (`Local_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `device_cycle`
--
ALTER TABLE `device_cycle`
  ADD CONSTRAINT `dev` FOREIGN KEY (`Device_id`) REFERENCES `device` (`Dev_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `from` FOREIGN KEY (`Device_From`) REFERENCES `motahasil` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `to` FOREIGN KEY (`Device_To`) REFERENCES `motahasil` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
