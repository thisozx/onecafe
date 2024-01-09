-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 09, 2024 at 09:25 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomeja` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `nama`, `nomeja`, `created_at`, `updated_at`) VALUES
(19, 'hanna', 10, '2024-01-09 02:16:52', '2024-01-09 02:16:52');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `nama`, `deskripsi`, `harga`, `foto`, `created_at`, `updated_at`, `kategori`) VALUES
(1, 'Ayam Geprek', 'Ayam Geprek Goreng dengan Nasi', 15000, 'xNMeSWjuLE3sxscu7YoPHtWGTL4D3HZsVM4S4nev.jpg', '2024-01-01 12:38:14', '2024-01-01 12:38:14', 'makanan'),
(2, 'Ayam Penyet', 'Ayam Penyet Goreng', 10000, 'Y9PBqVPwSfDRYaoHKz88IJa3moO3mpaWqpXMk8yb.jpg', '2024-01-01 12:38:53', '2024-01-01 12:38:53', 'makanan'),
(3, 'Coklat Ice', 'Minuman Coklat Susu Dingin', 17000, 'd8netdHqUjXgpHfO6jvIX3b3A2wAlpm8dHPREBlu.jpg', '2024-01-01 12:39:35', '2024-01-01 12:39:35', 'minuman'),
(4, 'Kopi Gula Aren Panas', 'Kopi dengan rasa gula aren', 15000, 'UXS2iTJ6Ayk7pzWE7MJtKjX5yZLtRNtsWXPdNIzz.jpg', '2024-01-01 12:40:26', '2024-01-01 12:40:26', 'minuman'),
(6, 'Latte Ice', 'Minuman Kopi dengan Susu', 15000, 'I3kXhCXVVsXf3sZTW76Xgn9I2txm0VyF33ctvJpv.jpg', '2024-01-01 12:41:35', '2024-01-01 12:41:35', 'minuman'),
(7, 'Matcha Ice', 'Minuman Susu rasa Matcha', 17000, 'B8rJLwhk99XuzDRaHpubCHLvVxK2YbRmNXym2sIO.jpg', '2024-01-01 12:42:18', '2024-01-01 12:42:18', 'minuman'),
(8, 'Nasi Bukhori', 'Nasi Bukhori, ayam mentega, sambal, acar, kerupuk', 25000, 'gEugnkHabOgmvcbIsd487A2js3VL1enQRbKK4f10.jpg', '2024-01-01 12:42:47', '2024-01-01 12:42:47', 'makanan'),
(9, 'Nasi Goreng Kunyit', 'Nasi goreng, telur dadar', 15000, 'f9Tm2R6yJLsbfE5KpUSi3NyWl5WjiDA72P9vRRpy.jpg', '2024-01-01 12:43:11', '2024-01-01 12:43:11', 'makanan'),
(10, 'Seblak Cuanky', 'Seblak Prasmanan bebas pilih toping', 2000, 'JoHpXbrydhg8DhfY38W7NHq7iXxLlPJtAipFQH3m.jpg', '2024-01-01 12:43:40', '2024-01-01 12:43:40', 'makanan'),
(11, 'Kopi Gula Aren Dingin', 'Kopi dengan rasa gula aren Dingin', 15000, '19kUfx67c7WgK6TJGXpOVcaqNvBZkFyrujyMyySr.jpg', '2024-01-01 21:14:39', '2024-01-01 21:14:39', 'minuman');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_12_06_091027_create_menus_table', 1),
(6, '2023_12_11_134154_create_pesanans_table', 1),
(7, '2023_12_11_140928_create_riwayats_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 2),
(10, '2023_12_30_095637_add_column_to_table', 3),
(11, '2023_12_31_130558_add_meja_to_pesanan', 4),
(12, '2024_01_01_192523_change_data_type_menu_in_pesanan', 5),
(13, '2024_01_01_192923_change_data_type_id_in_menus', 6),
(14, '2024_01_02_001204_create_pesan_sementaras_table', 7),
(15, '2024_01_01_193525_change_data_type_id_in_menus', 8),
(16, '2024_01_02_124635_create_customers_table', 8);

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesanans`
--

CREATE TABLE `pesanans` (
  `id` bigint UNSIGNED NOT NULL,
  `menu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int NOT NULL,
  `total` int NOT NULL,
  `status` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `meja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesanans`
--

INSERT INTO `pesanans` (`id`, `menu`, `jumlah`, `total`, `status`, `created_at`, `updated_at`, `meja`) VALUES
(6, 'Ayam Penyet', 1, 10000, 2, '2024-01-01 20:27:40', '2024-01-01 20:42:47', '3'),
(7, 'Seblak Cuanky', 3, 6000, 2, '2024-01-01 20:30:23', '2024-01-01 20:42:44', '3'),
(8, 'Seblak Cuanky', 3, 6000, 2, '2024-01-01 20:36:41', '2024-01-01 20:42:41', '1'),
(9, 'Seblak Cuanky', 3, 6000, 2, '2024-01-01 20:42:08', '2024-01-01 20:42:39', '1'),
(10, 'Seblak Cuanky', 1, 2000, 2, '2024-01-01 21:29:03', '2024-01-01 21:29:44', '3'),
(11, 'Nasi Goreng Kunyit', 1, 15000, 0, '2024-01-09 02:21:38', '2024-01-09 02:21:38', '10');

-- --------------------------------------------------------

--
-- Table structure for table `pesan_sementaras`
--

CREATE TABLE `pesan_sementaras` (
  `id` bigint UNSIGNED NOT NULL,
  `menu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int NOT NULL,
  `jumlah` int NOT NULL,
  `total` int NOT NULL,
  `status` int NOT NULL,
  `customer` bigint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `riwayats`
--

CREATE TABLE `riwayats` (
  `id` bigint UNSIGNED NOT NULL,
  `pesanan` int NOT NULL,
  `total` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `riwayats`
--

INSERT INTO `riwayats` (`id`, `pesanan`, `total`, `created_at`, `updated_at`) VALUES
(4, 9, 6000, '2024-01-01 20:42:39', '2024-01-01 20:42:39'),
(5, 8, 6000, '2024-01-01 20:42:41', '2024-01-01 20:42:41'),
(6, 7, 6000, '2024-01-01 20:42:44', '2024-01-01 20:42:44'),
(7, 6, 10000, '2024-01-01 20:42:47', '2024-01-01 20:42:47'),
(8, 10, 2000, '2024-01-01 21:29:44', '2024-01-01 21:29:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
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
(1, 'hanna', 'hanna@gmail.com', NULL, '$2y$12$xb6.pU1YQgCmtWfjHZa4Wu2hjLNa3IGpMAC129Us9Z1jtcJfYixDy', NULL, '2023-12-18 18:12:46', '2023-12-18 18:12:46'),
(2, 'Wan Hanna', 'hanna22ti@gmail.com', NULL, '$2y$12$ggWE0pF6WtMbNH4vMRdfFuZWqIBz0LLuhPCcpnShKiunx..h51v9u', NULL, '2024-01-01 07:25:56', '2024-01-01 07:25:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
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
-- Indexes for table `pesanans`
--
ALTER TABLE `pesanans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_pesanan` (`menu`);

--
-- Indexes for table `pesan_sementaras`
--
ALTER TABLE `pesan_sementaras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `riwayats`
--
ALTER TABLE `riwayats`
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
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesanans`
--
ALTER TABLE `pesanans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pesan_sementaras`
--
ALTER TABLE `pesan_sementaras`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `riwayats`
--
ALTER TABLE `riwayats`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
