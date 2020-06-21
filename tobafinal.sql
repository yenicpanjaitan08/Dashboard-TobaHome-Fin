-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jun 2020 pada 17.48
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tobafinal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `homestay1s`
--

CREATE TABLE `homestay1s` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_homestay` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_homestay` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `homestay1s`
--

INSERT INTO `homestay1s` (`id`, `nama_homestay`, `status`, `gambar`, `deskripsi_homestay`, `created_at`, `updated_at`) VALUES
(1, 'Victoria Homestay', 'Tersedia', 'public/assets/dist/img/1592740034hs1.jpg', 'Homestay nyaman dengan fasilitas lengkap', '2020-06-21 04:47:14', '2020-06-21 04:47:14'),
(2, 'Alibaba Homestay', 'Tersedia', 'public/assets/dist/img/1592740067hs2.jpg', 'Homestay dengan pemandangan hijau dan harga terjangkau', '2020-06-21 04:47:47', '2020-06-21 04:47:47'),
(3, 'Nauli Homestay', 'Tersedia', 'public/assets/dist/img/1592742377hs3.jpg', 'Homestay  yang letaknya strategis dekat dengan pusat kota Balige sehingga memudahkan visitor dalam menelusuri sekitaran kota', '2020-06-21 05:26:17', '2020-06-21 05:26:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_05_25_111922_create_peralatans_table', 1),
(2, '2020_05_27_024545_create_ruangans_table', 1),
(3, '2020_05_29_165424_create_homestay1s_table', 1),
(5, '2020_06_21_084505_create_orders_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notel` int(11) NOT NULL,
  `nama_homestay` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id`, `nama`, `notel`, `nama_homestay`, `created_at`, `updated_at`) VALUES
(1, 'Yeni Panjaitan', 8888, 'Victoria Homestay', '2020-06-21 04:37:44', '2020-06-21 04:37:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peralatans`
--

CREATE TABLE `peralatans` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_fasilitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `peralatans`
--

INSERT INTO `peralatans` (`id`, `nama_fasilitas`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'AC', 'Disediakan di setiap ruangan kamar serta ruang tamu', '2020-06-21 04:48:37', '2020-06-21 04:48:37'),
(2, 'Dapur', 'Pada setiap homestay disediakan dapur yang dapat digunakan oleh visitor', '2020-06-21 05:29:11', '2020-06-21 05:29:11'),
(3, 'Kendaraan', 'Beberapa Homestay pada Toba Home menyediakan kendaraan yang dapat digunakan oleh visitor namun uang sewa dan bahan bakar dibayarkan secara terpisah', '2020-06-21 05:30:11', '2020-06-21 05:30:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruangans`
--

CREATE TABLE `ruangans` (
  `id` int(10) UNSIGNED NOT NULL,
  `tipe_room` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `ukuran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe_bed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ruangans`
--

INSERT INTO `ruangans` (`id`, `tipe_room`, `kapasitas`, `ukuran`, `tipe_bed`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'Family Room', 6, '16 Square Feet', 'Double Bed', 'Rp.350.000', '2020-06-21 04:36:38', '2020-06-21 04:36:38'),
(2, 'Large Queens Room', 4, '18 Square Feet', 'Extra Bed', 'Rp.400.000', '2020-06-21 04:38:52', '2020-06-21 04:38:52'),
(3, 'Family Room', 4, '18 Square Feet', 'Double Bed', 'Rp.350.000', '2020-06-21 04:39:16', '2020-06-21 04:39:16'),
(4, 'Large Queens Room', 6, '19 Square Feet', 'Extra Bed', 'Rp.500.000', '2020-06-21 04:39:54', '2020-06-21 04:39:54');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `homestay1s`
--
ALTER TABLE `homestay1s`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `peralatans`
--
ALTER TABLE `peralatans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ruangans`
--
ALTER TABLE `ruangans`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `homestay1s`
--
ALTER TABLE `homestay1s`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `peralatans`
--
ALTER TABLE `peralatans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `ruangans`
--
ALTER TABLE `ruangans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
