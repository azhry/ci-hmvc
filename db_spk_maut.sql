-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Nov 2019 pada 07.31
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spk_maut`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `criteria`
--

CREATE TABLE `criteria` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `weight` int(11) NOT NULL,
  `key` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `details` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `criteria`
--

INSERT INTO `criteria` (`id`, `title`, `description`, `weight`, `key`, `type`, `details`, `created_at`, `updated_at`) VALUES
(1, 'Tes Wawancara', '', 3, 'C1', 'option', '[{\"label\": \"Sangat Disarankan\", \"value\": \"40\"}, {\"label\": \"Disarankan\", \"value\": \"30\"}, {\"label\": \"Cukup Disarankan\", \"value\": \"20\"}, {\"label\": \"Tidak Disarankan\", \"value\": \"10\"}]', '2019-10-20 11:14:26', '2019-10-20 11:14:26'),
(2, 'Tes Psikotes', '', 1, 'C2', 'range', '[{\"label\": \"100 - 81\", \"max\": 100, \"min\": 81, \"value\": 40}, {\"label\": \"80 - 61\", \"max\": 80, \"min\": 61, \"value\": 30}, {\"label\": \"60 - 41\", \"max\": 60, \"min\": 41, \"value\": 20}, {\"label\": \"40 - 0\", \"max\": 40, \"min\": 0, \"value\": 10}]', '2019-10-20 11:18:34', '2019-10-20 11:18:34'),
(3, 'Pendidikan', '', 2, 'C3', 'option', '[{\"label\": \"SMA/SMK\", \"value\": 20}, {\"label\": \"D3\", \"value\": 30}, {\"label\": \"S1\", \"value\": 50}]', '2019-10-20 11:21:05', '2019-10-20 11:21:05'),
(4, 'Usia', '', 1, 'C4', 'range', '[{\"label\": \"18 - 20 tahun\", \"max\": 20, \"min\": 18, \"value\": 20}, {\"label\": \"21 - 23 tahun\", \"max\": 23, \"min\": 21, \"value\": 35}, {\"label\": \"24 - 26 tahun\", \"max\": 26, \"min\": 24, \"value\": 45}]', '2019-10-20 11:22:40', '2019-10-20 11:22:40'),
(5, 'Pengalaman', '', 3, 'C5', 'range', '[{\"label\": \"0 - 1 tahun\", \"max\": 1, \"min\": 0, \"value\": 20}, {\"label\": \"1 - 2 tahun\", \"max\": 2, \"min\": 1, \"value\": 35}, {\"label\": \"2 - 3 tahun\", \"max\": 3, \"min\": 2, \"value\": 45}]', '2019-10-20 11:25:28', '2019-10-20 11:25:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Ridho', '2019-10-20 12:25:21', '2019-10-20 12:25:21', NULL),
(2, 'Aril', '2019-10-21 00:46:06', '2019-10-21 00:46:06', NULL),
(3, 'Rozi', '2019-10-21 02:29:08', '2019-10-21 02:29:08', NULL),
(4, 'Budi', '2019-10-21 07:05:27', '2019-10-21 07:05:27', NULL),
(5, 'Abid', '2019-10-21 07:06:04', '2019-10-21 07:06:04', NULL),
(6, 'Vero', '2019-10-21 07:14:30', '2019-10-21 07:14:30', NULL),
(7, 'Reynol', '2019-10-21 07:14:59', '2019-10-21 07:14:59', NULL),
(8, 'Risky', '2019-10-21 07:15:19', '2019-10-21 07:15:19', NULL),
(9, 'Dani', '2019-10-21 07:15:42', '2019-10-21 07:15:42', NULL),
(10, 'Yanto', '2019-10-21 07:16:00', '2019-10-21 16:16:23', NULL),
(11, 'qeeqwe', '2019-10-21 16:21:28', '2019-10-21 16:22:35', '2019-10-21 16:22:35'),
(12, 'tika', '2019-10-27 02:35:07', '2019-10-27 02:35:42', '2019-10-27 02:35:42'),
(13, 'Testxxxxxx', '2019-11-03 04:02:41', '2019-11-03 04:07:38', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_value`
--

CREATE TABLE `data_value` (
  `id` int(11) NOT NULL,
  `criteria_id` int(11) NOT NULL,
  `data_id` int(11) NOT NULL,
  `value` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_value`
--

INSERT INTO `data_value` (`id`, `criteria_id`, `data_id`, `value`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'Sangat Disarankan', '2019-10-20 12:25:21', '2019-10-21 14:36:22', NULL),
(2, 2, 1, '55', '2019-10-20 12:25:21', '2019-10-20 12:25:21', NULL),
(3, 3, 1, 'D3', '2019-10-20 12:25:21', '2019-10-21 14:38:11', NULL),
(4, 4, 1, '22', '2019-10-20 12:25:21', '2019-10-20 12:25:21', NULL),
(5, 5, 1, '0.66666666666667', '2019-10-20 12:25:21', '2019-10-20 12:25:21', NULL),
(6, 1, 2, 'Cukup Disarankan', '2019-10-21 00:46:06', '2019-10-21 14:37:10', NULL),
(7, 2, 2, '75', '2019-10-21 00:46:06', '2019-10-21 00:46:06', NULL),
(8, 3, 2, 'SMA/SMK', '2019-10-21 00:46:06', '2019-10-21 14:37:58', NULL),
(9, 4, 2, '19', '2019-10-21 00:46:06', '2019-10-21 00:46:06', NULL),
(10, 5, 2, '1', '2019-10-21 00:46:06', '2019-10-21 00:46:06', NULL),
(11, 1, 3, 'Disarankan', '2019-10-21 02:29:08', '2019-10-21 14:36:41', NULL),
(12, 2, 3, '83', '2019-10-21 02:29:08', '2019-10-21 02:29:08', NULL),
(13, 3, 3, 'D3', '2019-10-21 02:29:08', '2019-10-21 14:38:11', NULL),
(14, 4, 3, '23', '2019-10-21 02:29:08', '2019-10-21 02:29:08', NULL),
(15, 5, 3, '1.1666666666667', '2019-10-21 02:29:08', '2019-10-21 02:29:08', NULL),
(16, 1, 4, 'Sangat Disarankan', '2019-10-21 07:05:27', '2019-10-21 14:36:22', NULL),
(17, 2, 4, '58', '2019-10-21 07:05:27', '2019-10-21 07:05:27', NULL),
(18, 3, 4, 'S1', '2019-10-21 07:05:27', '2019-10-21 14:38:20', NULL),
(19, 4, 4, '24', '2019-10-21 07:05:27', '2019-10-21 07:05:27', NULL),
(20, 5, 4, '0.33333333333333', '2019-10-21 07:05:27', '2019-10-21 07:05:27', NULL),
(21, 1, 5, 'Sangat Disarankan', '2019-10-21 07:06:04', '2019-10-21 14:36:22', NULL),
(22, 2, 5, '76', '2019-10-21 07:06:04', '2019-10-21 07:06:04', NULL),
(23, 3, 5, 'D3', '2019-10-21 07:06:04', '2019-10-21 14:38:11', NULL),
(24, 4, 5, '22', '2019-10-21 07:06:04', '2019-10-21 07:06:04', NULL),
(25, 5, 5, '0.5', '2019-10-21 07:06:04', '2019-10-21 07:06:04', NULL),
(26, 1, 6, 'Tidak Disarankan', '2019-10-21 07:14:30', '2019-10-21 14:37:21', NULL),
(27, 2, 6, '55', '2019-10-21 07:14:30', '2019-10-21 07:14:30', NULL),
(28, 3, 6, 'SMA/SMK', '2019-10-21 07:14:30', '2019-10-21 14:37:58', NULL),
(29, 4, 6, '18', '2019-10-21 07:14:30', '2019-10-21 07:14:30', NULL),
(30, 5, 6, '0', '2019-10-21 07:14:30', '2019-10-21 07:14:30', NULL),
(31, 1, 7, 'Sangat Disarankan', '2019-10-21 07:14:59', '2019-10-21 14:36:22', NULL),
(32, 2, 7, '70', '2019-10-21 07:14:59', '2019-10-21 07:14:59', NULL),
(33, 3, 7, 'SMA/SMK', '2019-10-21 07:14:59', '2019-10-21 14:37:58', NULL),
(34, 4, 7, '20', '2019-10-21 07:14:59', '2019-10-21 07:14:59', NULL),
(35, 5, 7, '0.66666666666667', '2019-10-21 07:14:59', '2019-10-21 07:14:59', NULL),
(36, 1, 8, 'Disarankan', '2019-10-21 07:15:19', '2019-10-21 14:36:41', NULL),
(37, 2, 8, '72', '2019-10-21 07:15:19', '2019-10-21 07:15:19', NULL),
(38, 3, 8, 'D3', '2019-10-21 07:15:19', '2019-10-21 14:38:11', NULL),
(39, 4, 8, '22', '2019-10-21 07:15:19', '2019-10-21 07:15:19', NULL),
(40, 5, 8, '1.25', '2019-10-21 07:15:19', '2019-10-21 07:15:19', NULL),
(41, 1, 9, 'Cukup Disarankan', '2019-10-21 07:15:42', '2019-10-21 14:37:10', NULL),
(42, 2, 9, '40', '2019-10-21 07:15:42', '2019-10-21 07:15:42', NULL),
(43, 3, 9, 'S1', '2019-10-21 07:15:42', '2019-10-21 14:38:20', NULL),
(44, 4, 9, '22', '2019-10-21 07:15:42', '2019-10-21 07:15:42', NULL),
(45, 5, 9, '0.41666666666667', '2019-10-21 07:15:42', '2019-10-21 07:15:42', NULL),
(76, 1, 11, 'Cukup Disarankan', '2019-10-21 16:21:28', '2019-10-21 16:21:28', NULL),
(77, 2, 11, '32', '2019-10-21 16:21:28', '2019-10-21 16:21:28', NULL),
(78, 3, 11, 'S1', '2019-10-21 16:21:28', '2019-10-21 16:21:28', NULL),
(79, 4, 11, '32', '2019-10-21 16:21:28', '2019-10-21 16:21:28', NULL),
(80, 5, 11, '13', '2019-10-21 16:21:28', '2019-10-21 16:21:28', NULL),
(81, 1, 12, 'Sangat Disarankan', '2019-10-27 02:35:07', '2019-10-27 02:35:07', NULL),
(82, 2, 12, '99', '2019-10-27 02:35:07', '2019-10-27 02:35:07', NULL),
(83, 3, 12, 'S1', '2019-10-27 02:35:07', '2019-10-27 02:35:07', NULL),
(84, 4, 12, '21', '2019-10-27 02:35:07', '2019-10-27 02:35:07', NULL),
(85, 5, 12, '2', '2019-10-27 02:35:07', '2019-10-27 02:35:07', NULL),
(86, 1, 10, 'Cukup Disarankan', '2019-11-03 03:22:04', '2019-11-03 03:22:04', NULL),
(87, 2, 10, '76', '2019-11-03 03:22:04', '2019-11-03 03:22:04', NULL),
(88, 3, 10, 'D3', '2019-11-03 03:22:04', '2019-11-03 03:22:04', NULL),
(89, 4, 10, '20', '2019-11-03 03:22:04', '2019-11-03 03:22:04', NULL),
(90, 5, 10, '1.75', '2019-11-03 03:22:04', '2019-11-03 03:22:04', NULL),
(96, 1, 13, 'Cukup Disarankan', '2019-11-03 04:12:13', '2019-11-03 04:12:13', NULL),
(97, 2, 13, '21', '2019-11-03 04:12:13', '2019-11-03 04:12:13', NULL),
(98, 3, 13, 'D3', '2019-11-03 04:12:13', '2019-11-03 04:12:13', NULL),
(99, 4, 13, '32', '2019-11-03 04:12:13', '2019-11-03 04:12:13', NULL),
(100, 5, 13, '1.25', '2019-11-03 04:12:13', '2019-11-03 04:12:13', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `role`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', '2019-11-03 01:35:50', '2019-11-03 01:35:50', NULL),
(2, 'Panitia', '2019-11-03 01:35:50', '2019-11-03 01:35:50', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` char(32) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `role_id`, `username`, `password`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', '2019-11-03 01:37:49', '2019-11-03 01:37:49', NULL),
(2, 2, 'panitia', 'e10adc3949ba59abbe56e057f20f883e', '2019-11-03 01:37:49', '2019-11-03 01:37:49', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `criteria`
--
ALTER TABLE `criteria`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_value`
--
ALTER TABLE `data_value`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_dv_criteria` (`criteria_id`),
  ADD KEY `fk_dv_data` (`data_id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `criteria`
--
ALTER TABLE `criteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `data_value`
--
ALTER TABLE `data_value`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_value`
--
ALTER TABLE `data_value`
  ADD CONSTRAINT `fk_dv_criteria` FOREIGN KEY (`criteria_id`) REFERENCES `criteria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_dv_data` FOREIGN KEY (`data_id`) REFERENCES `data` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
