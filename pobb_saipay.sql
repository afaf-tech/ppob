-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2020 at 10:28 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pobb_saipay`
--

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_10_03_125517_create_table_nominal', 1),
(5, '2020_10_03_125541_create_table_pulsa', 1),
(6, '2020_10_03_125555_create_table_kategori', 1),
(7, '2020_10_03_125611_create_table_data', 1),
(8, '2020_10_03_125622_create_table_paket_data', 1),
(9, '2020_10_03_125637_create_table_pln', 1),
(10, '2020_10_03_125655_create_table_nominal_pln', 1),
(11, '2020_10_03_125706_create_table_informasi', 1),
(12, '2020_10_03_133410_create_table_provider', 1),
(13, '2020_10_04_054139_create_table_pln_customer', 2);

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
-- Table structure for table `table_kategori`
--

CREATE TABLE `table_kategori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_nominal_data`
--

CREATE TABLE `table_nominal_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_provider` int(11) NOT NULL,
  `nama_paket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fixed_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `table_nominal_data`
--

INSERT INTO `table_nominal_data` (`id`, `id_provider`, `nama_paket`, `fixed_price`, `created_at`, `updated_at`) VALUES
(1, 2, 'Paket 25 GB 1 Bulan', 100000, '2020-10-04 02:56:45', '2020-10-04 02:56:45'),
(2, 1, '1 GB 1 minggu', 20000, '2020-10-04 02:56:45', '2020-10-04 02:56:45'),
(3, 3, '1.5 GB 1 Minggu', 10000, '2020-10-04 03:33:18', '2020-10-04 03:33:18'),
(4, 2, '3 GB 1 Bulan Unlimited Social Media', 25000, '2020-10-04 03:33:18', '2020-10-04 03:33:18'),
(7, 1, '3 GB 1 Bulan', 25000, '2020-10-04 04:48:11', '2020-10-04 04:48:11'),
(8, 1, '7 GB 1 Bulan', 50000, '2020-10-04 04:48:11', '2020-10-04 04:48:11'),
(9, 2, '10 GB & Unlimited Social Media', 50000, '2020-10-04 04:50:54', '2020-10-04 04:50:54');

-- --------------------------------------------------------

--
-- Table structure for table `table_nominal_pln`
--

CREATE TABLE `table_nominal_pln` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `paket_pln` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fixed_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `table_nominal_pln`
--

INSERT INTO `table_nominal_pln` (`id`, `paket_pln`, `fixed_price`, `created_at`, `updated_at`) VALUES
(1, '20Rb', 20000, '2020-10-04 05:29:41', '2020-10-04 05:29:41'),
(2, '50Rb', 50000, '2020-10-04 05:29:41', '2020-10-04 05:29:41'),
(3, '100Rb', 100000, '2020-10-04 05:29:41', '2020-10-04 05:29:41'),
(4, '200Rb', 200000, '2020-10-04 05:29:41', '2020-10-04 05:29:41'),
(5, '500Rb', 5004500, '2020-10-04 05:29:41', '2020-10-04 05:29:41'),
(6, '1Jt', 1005000, '2020-10-04 05:29:41', '2020-10-04 05:29:41');

-- --------------------------------------------------------

--
-- Table structure for table `table_nominal_pulsa`
--

CREATE TABLE `table_nominal_pulsa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nominal` int(11) NOT NULL,
  `fixed_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `table_nominal_pulsa`
--

INSERT INTO `table_nominal_pulsa` (`id`, `nominal`, `fixed_price`, `created_at`, `updated_at`) VALUES
(1, 5000, 6500, '2020-10-03 16:24:19', '2020-10-03 16:24:19'),
(2, 10000, 11500, '2020-10-03 16:24:19', '2020-10-03 16:24:19'),
(3, 20000, 21500, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 15000, 16500, '2020-10-03 14:51:55', '2020-10-03 14:51:55'),
(5, 25000, 26000, '2020-10-03 16:52:41', '2020-10-03 16:52:41');

-- --------------------------------------------------------

--
-- Table structure for table `table_paket_data`
--

CREATE TABLE `table_paket_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomor_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_paket_data` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_provider` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `table_paket_data`
--

INSERT INTO `table_paket_data` (`id`, `nomor_hp`, `id_paket_data`, `id_provider`, `price`, `created_at`, `updated_at`) VALUES
(1, '085111222333', '1', '2', '100000', '2020-10-04 04:17:44', '2020-10-04 04:17:44'),
(2, '083555444777', '3', '3', '10000', '2020-10-04 04:51:50', '2020-10-04 04:51:50'),
(3, '087555444111', '3', '3', '10000', '2020-10-04 04:53:59', '2020-10-04 04:53:59'),
(4, '085654785215', '3', '3', '10000', '2020-10-04 04:54:25', '2020-10-04 04:54:25'),
(5, '085654785215', '1', '3', '10000', '2020-10-04 04:56:44', '2020-10-04 04:56:44'),
(6, '085888999777', '7', '3', '10000', '2020-10-04 04:58:15', '2020-10-04 04:58:15'),
(7, '085654785215', '1', '3', '10000', '2020-10-04 05:01:16', '2020-10-04 05:01:16'),
(8, '08565478544', '9', '3', '50000', '2020-10-04 05:06:29', '2020-10-04 05:06:29'),
(9, '085111222333', '9', '3', '50000', '2020-10-04 08:20:36', '2020-10-04 08:20:36');

-- --------------------------------------------------------

--
-- Table structure for table `table_pln`
--

CREATE TABLE `table_pln` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_customer` int(30) NOT NULL,
  `id_paket_pln` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `informasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `table_pln`
--

INSERT INTO `table_pln` (`id`, `id_customer`, `id_paket_pln`, `price`, `informasi`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 20000, 'pembayaran masuk 1 jam setelah checkout!', '2020-10-04 06:24:00', '2020-10-04 06:24:00'),
(2, 2, 2, 50000, 'pembayaran masuk 1 jam setelah checkout!', '2020-10-04 06:30:42', '2020-10-04 06:30:42'),
(3, 1, 4, 200000, 'pembayaran masuk 1 jam setelah checkout!', '2020-10-04 06:39:25', '2020-10-04 06:39:25'),
(4, 6, 2, 50000, 'pembayaran masuk 1 jam setelah checkout!', '2020-10-04 08:21:53', '2020-10-04 08:21:53');

-- --------------------------------------------------------

--
-- Table structure for table `table_pln_customer`
--

CREATE TABLE `table_pln_customer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_pelanggan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_meteran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batas_daya` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `table_pln_customer`
--

INSERT INTO `table_pln_customer` (`id`, `nama`, `id_pelanggan`, `no_meteran`, `batas_daya`, `created_at`, `updated_at`) VALUES
(1, 'Andhika', '434234324234', '111212454', '400 VA', '2020-10-04 05:50:14', '2020-10-04 05:50:14'),
(2, 'Arda', '465467867', '555222111', '1200 VA', '2020-10-04 06:21:22', '2020-10-04 06:21:22'),
(3, 'Yanto', '46464546456', '888777999', '450 VA', '2020-10-04 06:21:22', '2020-10-04 06:21:22'),
(4, 'Yudha', '11133366699', '46464648', '1200 VA', '2020-10-04 08:09:50', '2020-10-04 08:09:50'),
(5, 'Budi santoso', '123454656', '444777888', '450 VA', '2020-10-04 08:10:23', '2020-10-04 08:10:23'),
(6, 'Lathifa', '423443444555', '43432434', '1200 VA', '2020-10-04 08:14:19', '2020-10-04 08:14:19');

-- --------------------------------------------------------

--
-- Table structure for table `table_provider`
--

CREATE TABLE `table_provider` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_provider` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_provider` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `table_provider`
--

INSERT INTO `table_provider` (`id`, `nama_provider`, `kode_provider`, `created_at`, `updated_at`) VALUES
(1, 'Telkom', '007', '2020-10-03 16:17:48', '2020-10-03 16:17:48'),
(2, 'Indosat Oredooo', '001', '2020-10-03 16:17:48', '2020-10-03 16:17:48'),
(3, '3 Indonesia', '002', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `table_pulsa`
--

CREATE TABLE `table_pulsa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomor_hp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_nominal` int(11) NOT NULL,
  `id_provider` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `table_pulsa`
--

INSERT INTO `table_pulsa` (`id`, `nomor_hp`, `id_nominal`, `id_provider`, `price`, `created_at`, `updated_at`) VALUES
(1, '0645645645654', 2, 1, 11500, '2020-10-03 17:04:57', '2020-10-03 17:04:57'),
(10, '085654785215', 2, 2, 11500, '2020-10-03 17:35:45', '2020-10-03 17:35:45'),
(11, '085654785215', 1, 2, 6500, '2020-10-03 17:38:50', '2020-10-03 17:38:50'),
(12, '085654785215', 2, 1, 11500, '2020-10-04 02:44:13', '2020-10-04 02:44:13'),
(13, '085888999777', 5, 2, 26000, '2020-10-04 03:52:29', '2020-10-04 03:52:29'),
(14, '08565478544', 5, 2, 26000, '2020-10-04 05:06:58', '2020-10-04 05:06:58'),
(15, '083555444777', 5, 3, 26000, '2020-10-04 05:07:24', '2020-10-04 05:07:24'),
(16, '085654785215', 2, 2, 11500, '2020-10-04 05:07:50', '2020-10-04 05:07:50'),
(17, '085654785215', 5, 2, 26000, '2020-10-04 08:16:05', '2020-10-04 08:16:05');

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
  `saldo` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `saldo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user', 'user@gmail.com', NULL, '$2y$10$2anSO8sPAbKuzg3kVazG9.TKEF82gJN96uA4qH0xTbbj4izkx0LP.', 3937500, NULL, NULL, '2020-10-04 08:21:53');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `table_kategori`
--
ALTER TABLE `table_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_nominal_data`
--
ALTER TABLE `table_nominal_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_nominal_pln`
--
ALTER TABLE `table_nominal_pln`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_nominal_pulsa`
--
ALTER TABLE `table_nominal_pulsa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_paket_data`
--
ALTER TABLE `table_paket_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_pln`
--
ALTER TABLE `table_pln`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_pln_customer`
--
ALTER TABLE `table_pln_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_provider`
--
ALTER TABLE `table_provider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_pulsa`
--
ALTER TABLE `table_pulsa`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `table_kategori`
--
ALTER TABLE `table_kategori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_nominal_data`
--
ALTER TABLE `table_nominal_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `table_nominal_pln`
--
ALTER TABLE `table_nominal_pln`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `table_nominal_pulsa`
--
ALTER TABLE `table_nominal_pulsa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `table_paket_data`
--
ALTER TABLE `table_paket_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `table_pln`
--
ALTER TABLE `table_pln`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `table_pln_customer`
--
ALTER TABLE `table_pln_customer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `table_provider`
--
ALTER TABLE `table_provider`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `table_pulsa`
--
ALTER TABLE `table_pulsa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
