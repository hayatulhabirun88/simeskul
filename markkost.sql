-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 8.0.30 - MySQL Community Server - GPL
-- OS Server:                    Win64
-- HeidiSQL Versi:               12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- membuang struktur untuk table markkost.bookings
CREATE TABLE IF NOT EXISTS `bookings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint NOT NULL,
  `datakost_id` bigint NOT NULL,
  `status_booking` enum('Dipesan','Dibayar','Konfirmasi','Batal') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel markkost.bookings: ~1 rows (lebih kurang)
REPLACE INTO `bookings` (`id`, `user_id`, `datakost_id`, `status_booking`, `created_at`, `updated_at`) VALUES
	(1, 22, 6, 'Konfirmasi', NULL, '2024-05-26 06:36:05');

-- membuang struktur untuk table markkost.datakosts
CREATE TABLE IF NOT EXISTS `datakosts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama_kost` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fasilitas` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` bigint NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maps` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `keterangan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel markkost.datakosts: ~2 rows (lebih kurang)
REPLACE INTO `datakosts` (`id`, `nama_kost`, `fasilitas`, `harga`, `no_telp`, `alamat`, `gambar`, `maps`, `keterangan`, `created_at`, `updated_at`, `user_id`) VALUES
	(6, 'Kost Ridwan', 'sdf', 300000, '0812351615612', 'sdf', 'c148ee19da1d74c16dc890c6cc1d470b.png', '-5.457441, 122.599723', 'sdf', '2024-05-26 01:14:54', '2024-05-26 03:46:52', 8),
	(7, 'Kamil', '1. Kamar\r\n2. WC\r\n3. AC', 200000, '0812351615612', 'jl', '5db9a2e2eafd37b3971b0cc9c332e0ff.jpg', '-5.464119, 122.597228', 'jl', '2024-05-26 03:42:56', '2024-05-26 09:08:46', 9);

-- membuang struktur untuk table markkost.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel markkost.failed_jobs: ~0 rows (lebih kurang)

-- membuang struktur untuk table markkost.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel markkost.migrations: ~0 rows (lebih kurang)
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2024_05_25_105328_create_bookings_table', 1),
	(6, '2024_05_25_105335_create_datakosts_table', 1),
	(7, '2024_05_25_105344_create_transaksis_table', 1);

-- membuang struktur untuk table markkost.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel markkost.password_reset_tokens: ~0 rows (lebih kurang)

-- membuang struktur untuk table markkost.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel markkost.personal_access_tokens: ~0 rows (lebih kurang)

-- membuang struktur untuk table markkost.transaksis
CREATE TABLE IF NOT EXISTS `transaksis` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `booking_id` bigint NOT NULL,
  `tgl_kirim` date NOT NULL,
  `tgl_terima` date NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel markkost.transaksis: ~1 rows (lebih kurang)
REPLACE INTO `transaksis` (`id`, `booking_id`, `tgl_kirim`, `tgl_terima`, `keterangan`, `total`, `created_at`, `updated_at`) VALUES
	(1, 1, '2024-05-26', '2024-05-26', 'ok', 300000, NULL, NULL);

-- membuang struktur untuk table markkost.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_tlp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dok_ktp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('admin','pemilik_kost','penyewa') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel markkost.users: ~8 rows (lebih kurang)
REPLACE INTO `users` (`id`, `name`, `email`, `no_tlp`, `dok_ktp`, `email_verified_at`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'admin@gmail.com', '081212341234', '', NULL, '$2y$12$ahVTibqjRge8HHo703sN1elNPMYcropkPh.Runm2CqlBrFfQetdS6', 'admin', NULL, '2024-05-25 02:57:49', '2024-05-25 02:57:49'),
	(8, 'Ridwan', 'ridwan@gmail.com', '081233211234', '7eee6d2fe2a0b9da21fcc6dd2f8b4da6.jpg', NULL, '123', 'penyewa', NULL, NULL, '2024-05-26 09:13:06'),
	(9, 'Kamil', 'kamil@gmail.com', '081234564515', 'b7f97b387615f736aac988d603d366b0.jpg', NULL, 's', 'pemilik_kost', NULL, NULL, '2024-05-25 14:44:28'),
	(12, 'jimi', 'jimi@gmail.com', '081233334445', 'cda39d5b1f35003518b4bdb5576eee5c.jpg', NULL, '$2y$12$siSJxv3NJkWWBYw5QsvVFOwtkgzMCbgVLAnJR8rqeDMivzWoR1EpG', 'pemilik_kost', NULL, '2024-05-25 11:41:30', '2024-05-25 14:46:11'),
	(13, 'fanisa', 'fanisa@gmail.com', '081231231231', 'd80db2426605cae74f76632d1b034376.jpg', NULL, '$2y$12$pqq51.g9Hx98ha6jMTcMzOeVpjhCC/WXTHa3Swqojz8w4HzpA3JBq', 'pemilik_kost', NULL, '2024-05-25 11:43:01', '2024-05-25 14:46:45'),
	(14, 'Arul', 'arulok@gmail.com', '08123123123123', '32fe51a7efc3062718c5c85b7db0f56a.jpg', NULL, '$2y$12$.YQUxjhL1k0i0dbREUMBVeUxlmN19TYDs1VPz7NNxnV.cD39hRFn2', 'pemilik_kost', NULL, '2024-05-25 11:49:45', '2024-05-26 03:15:38'),
	(22, 'Kadir', 'kadir@gmail.com', '081231231231', '2fb3d34e00ae37e5d673c22b55e06b83.jpg', NULL, '$2y$12$gsQyiI2Lw5lVhfq1Vq1tDunc7GLsKZ/rc5RO021wznFwJ6a7FLKWq', 'penyewa', NULL, '2024-05-25 12:48:24', '2024-05-26 09:11:35'),
	(28, 'Amat Faozi', 'asdf@gmail.com', 'asd', '3894cca7e598fe62d56eeeecd8b9f598.jpg', NULL, '$2y$12$ufbk/4Y.Z4k5.JrXBzFQseNz4fKp3e3Ety9KfeXVOI.y4V.1ufFu6', 'penyewa', NULL, '2024-05-26 08:31:44', '2024-05-26 09:11:30');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
