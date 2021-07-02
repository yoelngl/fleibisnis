-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 02, 2021 at 06:33 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fleibisnis`
--

-- --------------------------------------------------------

--
-- Table structure for table `franchise_directories`
--

CREATE TABLE `franchise_directories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `bussiness_concept` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bussiness_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bussiness_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_outlet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_origin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_brochure` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `investment_value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `initial_cost` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `royalty_fee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `license_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estimated_profit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employees_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `store_area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `store_location_requirements` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL,
  `store_services_requirements` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL,
  `employees_training` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL,
  `sop` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL,
  `crm_system` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL,
  `operational` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL,
  `hki` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL,
  `stpw` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL,
  `nib` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp_contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `store_images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `packet` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`packet`)),
  `contact_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `franchise_directories`
--

INSERT INTO `franchise_directories` (`id`, `slug`, `brand_name`, `brand_description`, `bussiness_concept`, `bussiness_category`, `bussiness_type`, `company_name`, `company_address`, `company_year`, `company_outlet`, `brand_origin`, `brand_country`, `brand_logo`, `brand_image`, `brand_brochure`, `tag`, `currency`, `investment_value`, `initial_cost`, `royalty_fee`, `license_time`, `roi`, `estimated_profit`, `employees_number`, `store_area`, `store_location_requirements`, `store_services_requirements`, `employees_training`, `sop`, `crm_system`, `operational`, `hki`, `stpw`, `nib`, `whatsapp_contact`, `website`, `instagram`, `company_email`, `store_images`, `packet`, `contact_name`, `contact_position`, `contact_phone`, `contact_email`, `user_id`, `created_at`, `updated_at`, `category_id`) VALUES
(1, 'frenta', 'Frenta', '<p>Test</p>', 'Franchise/Waralaba', 'TEST', 'TEST', 'SangerPro', '<p>test</p>', '1', '10', 'Local(Indonesia)', 'Indonesia', 'logo/sD7rl1CEbofLIkGzx4LdfmTWx7BAvnQLNtDZhSen.png', 'brand/4Q8cPlnOQGvyDWGDcFWgJUL4PFHGtx5fgaP8pxPk.png', 'catalog/aOp3wSscXzQwYSAshkGh7jvJEzrCp5ZBFRRBa9Fx.png', 'Rekomendasi', 'Rupiah', '1', '1', '1', '1', '1', '1', '10', '10', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'N', 'N', 'N', '12312312312', 'hajimahmud.id', 'Test', 'kingsmhikee@gmail.com', 'grow/sD7rl1CEbofLIkGzx4LdfmTWx7BAvnQLNtDZhSen.png', '[{\"packet_name\":\"Paket 1\",\"jenis_paket\":\"Gaming\",\"ukuran_gerai\":\"10\",\"harga_investasi\":\"20000\",\"biaya_awal\":\"10000\",\"return_investment\":\"10000\",\"perkiraan_laba\":\"10000\"},{\"packet_name\":\"Paket 2\",\"jenis_paket\":\"Gamng\",\"ukuran_gerai\":\"15\",\"harga_investasi\":\"20000\",\"biaya_awal\":\"20000\",\"return_investment\":\"20000\",\"perkiraan_laba\":\"20000\"}]', 'Yoel Gabriel Nainggolan', 'CTO', '0867-8756-745', 'kingsmhikee@gmail.com', 1, '2021-07-02 08:32:15', '2021-07-02 08:32:15', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `franchise_directories`
--
ALTER TABLE `franchise_directories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `franchise_directories_category_id_foreign` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `franchise_directories`
--
ALTER TABLE `franchise_directories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `franchise_directories`
--
ALTER TABLE `franchise_directories`
  ADD CONSTRAINT `franchise_directories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `franchise_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
