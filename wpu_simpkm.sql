-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2021 at 11:04 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpu_simpkm`
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
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id` int(10) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id`, `file`, `keterangan`, `created_at`, `updated_at`) VALUES
(4, '1610179052_Epizi-6XIAICTMi.png', 'Test Gambar', '2021-01-08 23:57:32', '2021-01-08 23:57:32');

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
(8, '2014_10_12_000000_create_users_table', 1),
(9, '2014_10_12_100000_create_password_resets_table', 1),
(10, '2019_08_19_000000_create_failed_jobs_table', 1),
(11, '2019_12_06_070206_create_pendaftarans_table', 1),
(14, '2020_06_04_070930_create_roles_table', 2),
(15, '2020_06_04_071243_create_role_user_table', 2),
(16, '2021_01_02_062307_create_foreign_keys_for_role_user_table', 3),
(18, '2021_01_04_100629_create_pengumumans_table', 4),
(19, '2021_01_09_014939_create_gambars_table', 5);

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
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nim` char(8) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telpon` char(12) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `angkatan` char(4) NOT NULL,
  `skimpkm` varchar(50) NOT NULL,
  `judulpkm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id`, `nama`, `nim`, `email`, `telpon`, `jurusan`, `prodi`, `angkatan`, `skimpkm`, `judulpkm`) VALUES
(1, 'Deo Triantama', '10151013', '10151013@student.itk.ac.id', '082198618283', 'Jurusan Matematika dan Teknologi Informasi', 'Sistem Informasi', '2015', 'PKM-AI', 'PENGARUH PIJAT BAYI TERHADAP KUALITAS TIDUR BAYI USIA 0-7 HARI'),
(2, 'Achmad Fadhil Pratama', '10151001', '10151001@student.itk.ac.id', '082198618284', 'Jurusan Matematika dan Teknologi Informasi', 'Sistem Informasi', '2015', 'PKM-AI', 'POTENSI BUAH KURMA SEBAGAI PEMENUHAN NUTRISI IBU MASA BERSALIN');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftarans`
--

CREATE TABLE `pendaftarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` char(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telpon` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `angkatan` char(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anggota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skimpkm` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judulpkm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pendaftarans`
--

INSERT INTO `pendaftarans` (`id`, `nama`, `nim`, `email`, `telpon`, `jurusan`, `prodi`, `angkatan`, `anggota`, `skimpkm`, `judulpkm`, `created_at`, `updated_at`) VALUES
(12, 'Deo Triantama', '10151013', 'admin@admin.com', '082198618283', 'sadasd', 'si', '2015', 'dasdsa', 'pkm gt', 'test', '2021-01-09 01:04:20', '2021-01-09 01:04:20');

-- --------------------------------------------------------

--
-- Table structure for table `pengumumans`
--

CREATE TABLE `pengumumans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skimpkm` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judulpkm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengumumans`
--

INSERT INTO `pengumumans` (`id`, `nama`, `skimpkm`, `judulpkm`, `created_at`, `updated_at`) VALUES
(1, 'Achmad Fadhil Pratama', 'PKM-KC', 'Test Judul PKM', '2021-01-04 02:51:00', '2021-01-04 02:51:00'),
(2, 'Achmad Fadhil Pratama', 'PKM-KC', 'Test Judul PKM', '2021-01-04 02:54:45', '2021-01-04 02:54:45'),
(3, 'Deo Triantama', 'PKM-KC', 'Test Judul PKM', '2021-01-04 03:04:31', '2021-01-04 03:04:31'),
(4, 'Rifqi Fauzi', 'PKM-GFK', 'Smart-Tech Bracelet : Gelang Cerdas Terintegrasi dengan GPS Sebagai Solusi Pencarian Cepat Hilangnya Korban Pesawat Jatuh', '2021-01-07 23:48:54', '2021-01-07 23:48:54');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2021-01-01 22:22:24', '2021-01-01 22:22:24'),
(2, 'dosen', '2021-01-01 22:22:24', '2021-01-01 22:22:24'),
(3, 'user', '2021-01-01 22:22:24', '2021-01-01 22:22:24');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 2, 2, NULL, NULL),
(4, 1, 4, NULL, NULL),
(5, 3, 5, NULL, NULL),
(8, 3, 7, NULL, NULL);

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Dosen User', 'dosen@dosen.com', NULL, '$2y$10$U49o3b5AkJ5UjMgY1DQ1ZOBGR3br3iYlq2vvQLVQ05vrQTLBitJou', NULL, '2021-01-01 22:22:25', '2021-01-01 22:22:25'),
(4, 'Admin', 'admin@admin.com', NULL, '$2y$10$zWJ7mEZulIil16jkrHeHNOkc2l.n3a5cKFEE5ntYWqSjuIH1xpcsq', NULL, '2021-01-02 02:11:33', '2021-01-02 02:11:33'),
(5, 'mahasiswa', 'mahasiswa@mahasiswa.com', NULL, '$2y$10$Bc5K6/h5ddimfhrwoFBjM.AP5D9nFpzSAB9cnFmJU7Bw7fCkMfHs6', NULL, '2021-01-03 01:15:15', '2021-01-03 01:15:15'),
(7, 'Bio', 'bio@bio.gmail.com', NULL, '$2y$10$LM0xq1mky4UjhCb5d.5InOHRmshLIxN679l6.JzwBJVRAXxrxrcVO', NULL, '2021-01-09 00:45:50', '2021-01-09 00:45:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
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
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendaftarans`
--
ALTER TABLE `pendaftarans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pendaftarans_nim_unique` (`nim`),
  ADD UNIQUE KEY `pendaftarans_email_unique` (`email`);

--
-- Indexes for table `pengumumans`
--
ALTER TABLE `pengumumans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

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
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pendaftarans`
--
ALTER TABLE `pendaftarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pengumumans`
--
ALTER TABLE `pengumumans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
