-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2017 at 01:06 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectfw`
--

-- --------------------------------------------------------

--
-- Table structure for table `akta`
--

CREATE TABLE `akta` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tgl_terbit` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `akta`
--

INSERT INTO `akta` (`id`, `nama`, `tgl_lahir`, `tgl_terbit`, `created_at`, `updated_at`) VALUES
(3, 'Muhammad Iqbal', '1996-12-02', '2017-05-20', '2017-05-19 18:24:11', '2017-05-19 18:24:11'),
(4, 'Haykal', '2010-10-12', '2017-05-20', '2017-05-19 19:23:28', '2017-05-19 19:23:28'),
(5, 'prayogo', '2017-05-17', '2017-05-18', '2017-05-19 21:59:50', '2017-05-19 21:59:50'),
(6, 'yogo', '2017-05-21', '2017-05-30', '2017-05-19 22:03:07', '2017-05-19 22:03:07');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_kk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jumlah_ak` int(10) UNSIGNED NOT NULL,
  `id_kk` int(10) UNSIGNED NOT NULL,
  `id_akta` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kartu_keluarga`
--

CREATE TABLE `kartu_keluarga` (
  `id` int(10) UNSIGNED NOT NULL,
  `no_kk` int(10) UNSIGNED NOT NULL,
  `tgl_terbit` date NOT NULL,
  `id_dk` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kelahiran`
--

CREATE TABLE `kelahiran` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kelahiran`
--

INSERT INTO `kelahiran` (`id`, `nama`, `tempat_lahir`, `tgl_lahir`, `created_at`, `updated_at`) VALUES
(3, 'Siapa', 'samarinda', '2017-05-03', '2017-05-19 19:30:13', '2017-05-19 19:58:47'),
(4, 'Dia', 'Samarinda', '2000-05-27', '2017-05-19 19:58:37', '2017-05-19 19:58:37'),
(5, 'Maka', 'Sangata', '2002-08-25', '2017-05-19 19:59:15', '2017-05-19 19:59:15'),
(6, 'Dian', 'Samarinda', '2000-01-29', '2017-05-19 19:59:59', '2017-05-19 19:59:59'),
(7, 'Lo', 'Bontang', '2012-08-03', '2017-05-19 20:03:21', '2017-05-19 20:03:21');

-- --------------------------------------------------------

--
-- Table structure for table `kelahiran_pend`
--

CREATE TABLE `kelahiran_pend` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_kelahiran` int(10) UNSIGNED NOT NULL,
  `id_dk` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kematian`
--

CREATE TABLE `kematian` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tempat_kematian` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_kematian` date NOT NULL,
  `sebab` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kematian`
--

INSERT INTO `kematian` (`id`, `nama`, `tempat_kematian`, `tgl_kematian`, `sebab`, `created_at`, `updated_at`) VALUES
(1, 'Lala', 'samarinda', '2017-05-02', 'serangan jantung', '2017-05-19 14:44:06', '2017-05-19 20:01:12'),
(2, 'Fati', 'Samarinda', '2006-04-26', 'Salahh Urat', '2017-05-19 20:00:55', '2017-05-19 20:00:55'),
(3, 'Po', 'Balikpapan', '2002-02-02', 'Demam', '2017-05-19 20:01:47', '2017-05-19 20:01:47'),
(4, 'Dibsi', 'Samarinda', '2003-02-03', 'Jatuh', '2017-05-19 20:02:21', '2017-05-19 20:02:21'),
(5, 'Tinki', 'Sangata', '2004-04-04', 'Kecelakaan', '2017-05-19 20:02:52', '2017-05-19 20:02:52');

-- --------------------------------------------------------

--
-- Table structure for table `kematian_pend`
--

CREATE TABLE `kematian_pend` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_kematian` int(10) UNSIGNED NOT NULL,
  `id_dk` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_05_18_113712_table_akta', 1),
('2017_05_18_113802_table_pengguna', 1),
('2017_05_18_113830_table_data_kependudukan', 1),
('2017_05_18_113835_table_kartu_keluarga', 1),
('2017_05_18_113840_table_anggota_keluarga', 1),
('2017_05_18_113936_table_kelahiran', 1),
('2017_05_18_113955_table_kematian', 1),
('2017_05_18_114015_table_kematian_penduduk', 1),
('2017_05_18_114031_table_kelahiran_penduduk', 1),
('2017_05_18_114124_table_pindah', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`id`, `nama`, `tgl_lahir`, `alamat`, `status`, `created_at`, `updated_at`) VALUES
(7, 'Reza Akbar', '1997-03-24', 'bontang', 'Mahasiswa', '2017-05-19 19:54:48', '2017-05-19 19:54:48'),
(8, 'Rahmat Hidayat', '1997-04-25', 'Bunyu', 'Mahasiswa', '2017-05-19 19:55:48', '2017-05-19 19:55:48'),
(9, 'Rizky Fadillah', '1997-07-05', 'Bontang', 'Karyawan', '2017-05-19 19:56:33', '2017-05-19 19:56:33'),
(10, 'Dina Fadillah', '1997-02-22', 'Balikpapan', 'Mahasiswa', '2017-05-19 19:57:24', '2017-05-19 19:57:24');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pindah`
--

CREATE TABLE `pindah` (
  `id` int(10) UNSIGNED NOT NULL,
  `tgl_pindah` date NOT NULL,
  `alamat_asal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat_tujuan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_dk` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akta`
--
ALTER TABLE `akta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`),
  ADD KEY `anggota_id_kk_foreign` (`id_kk`),
  ADD KEY `anggota_id_akta_foreign` (`id_akta`);

--
-- Indexes for table `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kartu_keluarga_id_dk_foreign` (`id_dk`);

--
-- Indexes for table `kelahiran`
--
ALTER TABLE `kelahiran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelahiran_pend`
--
ALTER TABLE `kelahiran_pend`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kelahiran_pend_id_kelahiran_foreign` (`id_kelahiran`),
  ADD KEY `kelahiran_pend_id_dk_foreign` (`id_dk`);

--
-- Indexes for table `kematian`
--
ALTER TABLE `kematian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kematian_pend`
--
ALTER TABLE `kematian_pend`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kematian_pend_id_kematian_foreign` (`id_kematian`),
  ADD KEY `kematian_pend_id_dk_foreign` (`id_dk`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pindah`
--
ALTER TABLE `pindah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pindah_id_dk_foreign` (`id_dk`);

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
-- AUTO_INCREMENT for table `akta`
--
ALTER TABLE `akta`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kelahiran`
--
ALTER TABLE `kelahiran`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `kelahiran_pend`
--
ALTER TABLE `kelahiran_pend`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kematian`
--
ALTER TABLE `kematian`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kematian_pend`
--
ALTER TABLE `kematian_pend`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pindah`
--
ALTER TABLE `pindah`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `anggota`
--
ALTER TABLE `anggota`
  ADD CONSTRAINT `anggota_id_akta_foreign` FOREIGN KEY (`id_akta`) REFERENCES `akta` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `anggota_id_kk_foreign` FOREIGN KEY (`id_kk`) REFERENCES `kartu_keluarga` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  ADD CONSTRAINT `kartu_keluarga_id_dk_foreign` FOREIGN KEY (`id_dk`) REFERENCES `penduduk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kelahiran_pend`
--
ALTER TABLE `kelahiran_pend`
  ADD CONSTRAINT `kelahiran_pend_id_dk_foreign` FOREIGN KEY (`id_dk`) REFERENCES `penduduk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kelahiran_pend_id_kelahiran_foreign` FOREIGN KEY (`id_kelahiran`) REFERENCES `kelahiran` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kematian_pend`
--
ALTER TABLE `kematian_pend`
  ADD CONSTRAINT `kematian_pend_id_dk_foreign` FOREIGN KEY (`id_dk`) REFERENCES `penduduk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kematian_pend_id_kematian_foreign` FOREIGN KEY (`id_kematian`) REFERENCES `kematian` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pindah`
--
ALTER TABLE `pindah`
  ADD CONSTRAINT `pindah_id_dk_foreign` FOREIGN KEY (`id_dk`) REFERENCES `penduduk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
