-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2022 at 12:03 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_Id` bigint(20) UNSIGNED NOT NULL,
  `Admin_Name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Admin_Email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Admin_Password` varchar(100) CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_Id`, `Admin_Name`, `Admin_Email`, `Admin_Password`, `created_at`, `updated_at`) VALUES
(1, 'Nasr', 'Nasr@Nasr.com', '123', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `Brand_Id` int(11) NOT NULL,
  `Brand_Name` varchar(100) NOT NULL,
  `Brand_Cat` int(11) NOT NULL,
  `Brand_Status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`Brand_Id`, `Brand_Name`, `Brand_Cat`, `Brand_Status`) VALUES
(1, 'Toshipa', 1, 1),
(2, 'Dell', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Cat_Id` int(11) NOT NULL,
  `Cat_Name` varchar(50) NOT NULL,
  `Cat_Status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Cat_Id`, `Cat_Name`, `Cat_Status`) VALUES
(1, 'لاب توب', 0),
(2, 'جهاز طرفي', 0),
(3, 'جهاز كمبيوتر', 0),
(4, 'جهاز تلفون', 0);

-- --------------------------------------------------------

--
-- Table structure for table `device`
--

CREATE TABLE `device` (
  `Dev_Id` int(11) NOT NULL,
  `Dev_Name` varchar(70) NOT NULL,
  `Dev_Cat` int(11) NOT NULL,
  `Dev_Brand` int(11) NOT NULL,
  `Dev_User` int(11) NOT NULL,
  `Dev_local_Unit` int(11) NOT NULL,
  `Dev_Unit` varchar(100) NOT NULL,
  `Dev_Problem` varchar(255) NOT NULL,
  `Dev_Pic` varchar(100) NOT NULL,
  `Dev_Pic_User` varchar(100) NOT NULL,
  `Dev_Status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `device`
--

INSERT INTO `device` (`Dev_Id`, `Dev_Name`, `Dev_Cat`, `Dev_Brand`, `Dev_User`, `Dev_local_Unit`, `Dev_Unit`, `Dev_Problem`, `Dev_Pic`, `Dev_Pic_User`, `Dev_Status`) VALUES
(1, 'Toshipa-0001', 1, 1, 1, 1, 'محليه الخرطوم شرق', '', '12121521', '121545121', 0),
(2, 'Toshipa-0002', 1, 1, 121, 2, 'أمبده شرق', '', '2111', '42454', 0);

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
-- Table structure for table `local`
--

CREATE TABLE `local` (
  `Local_Id` int(11) NOT NULL,
  `Local_Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `local`
--

INSERT INTO `local` (`Local_Id`, `Local_Name`) VALUES
(1, 'الخرطوم'),
(2, 'أمبدة'),
(3, 'شرق النيل'),
(4, 'كرري'),
(5, 'بحري'),
(6, 'جبل أولياء'),
(7, 'أمدرمان');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_08_08_204841_create_admins_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `name_device`
--

CREATE TABLE `name_device` (
  `Device_Name_Id` int(11) NOT NULL,
  `Device_Name_Name` varchar(50) NOT NULL,
  `Device_Name_Status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `name_device`
--

INSERT INTO `name_device` (`Device_Name_Id`, `Device_Name_Name`, `Device_Name_Status`) VALUES
(1, 'أجهزه طرفيه', '0'),
(2, 'لاب توب', '0'),
(3, 'أجهزه كمبيوتر', '0'),
(4, 'تلفون', '0');

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(1, 'Tete', 'tete@tete.com', '2022-08-08 08:17:00', '123', '123', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_Id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`Brand_Id`),
  ADD KEY `Brand_To_Cat` (`Brand_Cat`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Cat_Id`);

--
-- Indexes for table `device`
--
ALTER TABLE `device`
  ADD PRIMARY KEY (`Dev_Id`),
  ADD KEY `Device_To_Brand` (`Dev_Brand`),
  ADD KEY `Device_To_Cat` (`Dev_Cat`),
  ADD KEY `Device_To_Local` (`Dev_local_Unit`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `local`
--
ALTER TABLE `local`
  ADD PRIMARY KEY (`Local_Id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `name_device`
--
ALTER TABLE `name_device`
  ADD PRIMARY KEY (`Device_Name_Id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_Id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `Brand_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Cat_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `device`
--
ALTER TABLE `device`
  MODIFY `Dev_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `local`
--
ALTER TABLE `local`
  MODIFY `Local_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `name_device`
--
ALTER TABLE `name_device`
  MODIFY `Device_Name_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `brand`
--
ALTER TABLE `brand`
  ADD CONSTRAINT `Brand_To_Cat` FOREIGN KEY (`Brand_Cat`) REFERENCES `category` (`Cat_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `device`
--
ALTER TABLE `device`
  ADD CONSTRAINT `Device_To_Brand` FOREIGN KEY (`Dev_Brand`) REFERENCES `brand` (`Brand_Cat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Device_To_Cat` FOREIGN KEY (`Dev_Cat`) REFERENCES `category` (`Cat_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Device_To_Local` FOREIGN KEY (`Dev_local_Unit`) REFERENCES `local` (`Local_Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
