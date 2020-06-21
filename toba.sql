-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jun 2020 pada 10.06
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
-- Database: `toba`
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
(1, 'Pelangi Homestay', 'Tersedia', 'public/assets/dist/img/1591872101hs1.jpg', 'Homestay ini  berada di Jl.Silimakuta, Balige tepatnya berada disamping Cafe Gembira', '2020-06-11 03:41:41', '2020-06-11 03:41:41'),
(2, 'Sidauruk Homestay', 'Tersedia', 'public/assets/dist/img/1591872146hs2.jpg', 'Homestay ini berada di kawasan perumahan elit disamping mall hasugian', '2020-06-11 03:42:26', '2020-06-11 03:42:26'),
(3, 'Butet Homestay', 'Tersedia', 'public/assets/dist/img/1591872212hs3.jpg', 'Homestay ini berada di dekat smp Bintang Timur, homestay ini memiliki pemandangan yang asri', '2020-06-11 03:43:32', '2020-06-11 03:43:32'),
(4, 'Panjaitan Homestay', 'Tidak Tersedia', 'public/assets/dist/img/1591872277hs4.jpg', 'Homestay dengan nuansa rumahan yang sederhana namun memiliki suasana yang  menenangkan jiwa', '2020-06-11 03:44:37', '2020-06-11 03:44:37'),
(5, 'Victoria Homestay', 'Tidak Tersedia', 'public/assets/dist/img/1591872312hs5.jpg', 'Nuansa homestay ini seperti berada di tengah hutan', '2020-06-11 03:45:12', '2020-06-11 03:45:12'),
(6, 'Melody Homestay', 'Tidak Tersedia', 'public/assets/dist/img/1591872771hs6.jpg', 'Homestay dengan nuansa kayu yang sederhana namun memiliki suasana dan fasilitas yang  modern dan lengkap', '2020-06-11 03:52:51', '2020-06-11 03:52:51');

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
(6, '2020_05_25_111922_create_peralatans_table', 1),
(7, '2020_05_27_024545_create_ruangans_table', 2),
(11, '2020_05_29_165424_create_homestay1s_table', 3),
(13, '2020_06_12_013028_create_orders_table', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notel` int(11) NOT NULL,
  `arrive` datetime NOT NULL,
  `jumlah` int(11) NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jeniskelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `depart` datetime NOT NULL,
  `tipe_room` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_homestay` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, 'keset kaki', 'lap', '2020-05-25 21:16:00', '2020-05-26 03:37:20'),
(3, 'Ac', 'Pendingin ruangan dimana harga fasilitas ini sudah terdaftar ke dalam biaya permalamnya', '2020-05-26 04:40:02', '2020-05-26 04:40:02'),
(4, 'kereta', 'blabla', '2020-05-26 00:08:03', '2020-05-26 00:08:03');

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
(2, 'Standard Queen Room', 3, '18 Square feet', 'King size bed', 'Rp.350.000', NULL, NULL),
(3, 'kamar besar', 4, '17 Square Feet', 'Double Bed', 'Rp.350.000', '2020-05-26 22:40:27', '2020-05-26 22:40:27'),
(4, 'Family Room', 6, '17 Square Feet', 'Double Bed', 'Rp.350.000', '2020-06-07 11:32:38', '2020-06-07 11:32:38'),
(5, 'Family Room', 6, '18 Square Feet', 'Extra Bed', 'Rp.400.000', '2020-06-10 08:42:49', '2020-06-10 08:42:49'),
(6, 'Single Room', 6, '16 Square Feet', 'Single Bed', 'Rp.150.000', '2020-06-10 08:43:20', '2020-06-10 08:43:20');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `peralatans`
--
ALTER TABLE `peralatans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `ruangans`
--
ALTER TABLE `ruangans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
