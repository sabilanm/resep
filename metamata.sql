-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jul 2023 pada 17.52
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `metamata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `nama`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Sabila Neilil Muna', 'sabila', 'sabila101099', '2023-07-07 05:00:01', '2023-07-07 05:00:01'),
(2, 'Sabila Neilil Muna', 'neilil', '$2y$10$gCKXWle74KP2YlMbadcnmO5hxYmKn1m3df1NYAZ13leJ34fFNVI6W', '2023-07-08 08:04:32', '2023-07-08 08:04:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `resep`
--

CREATE TABLE `resep` (
  `id_resep` int(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `diskripsi` varchar(1000) NOT NULL,
  `bahan` varchar(1000) NOT NULL,
  `langkah` varchar(1000) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `resep`
--

INSERT INTO `resep` (`id_resep`, `judul`, `diskripsi`, `bahan`, `langkah`, `foto`, `created_at`, `updated_at`) VALUES
(7, 'Tempe Goreng Bumbu Bawang', 'Cara termudah mengolah tempe mungkin dengan cara digoreng.', '1 papan tempe|2 siung bawang|1 sdt garam/secukupnya|air secukupnya', 'Haluskan bawang putih dan garam. Tuang sedikit air secukupnya.|Masukkan tempe yang telah diiris sesuai selera ke dalam bumbu, diamkan kira-kira selama 5 menit agar bumbu meresap.|Panaskan minyak goreng, goreng tempe hingga berwarna kuning kecokelatan dan matang. Jika sudah renyah, angkat.|Sajikan tempe goreng bawang selagi masih hangat.', 'fotoResep\\CPDYD6udcV2iuqnegzQ5ZSuVTRyimOuEvfOBfNzc.jpg', '2023-07-08 07:49:13', '2023-07-08 07:49:13'),
(8, 'Resep Nasi Goreng Rice Cooker', 'Cara membuat nasi goreng yang enak dan sederhana bisa kamu praktikkan di rumah.', 'Bawang merah goreng (opsional)|Sedikit garam|1 gelas beras putih|1 bungkus Bumbu nasi goreng instan|Topping sesuai selera Sosis, bakso, ayam, telur, sayuran (bebas)', 'Cuci beras seperti saat akan menanak nasi. Masukkan ke dalam rice cooker, tuang air secukupnya dan tutup. Tekan \"cook\" untuk memasak nasi.|Saat rice cooker mulai mengeluarkan asap (belum matang), buka rice cooker lalu masukkan sebungkus bumbu nasi goreng instan. Tambahkan bahan pelengkap lainnya seperti sosis, bakso, daging, sayuran, dan sedikit garam. Aduk hingga merata.|Tutup rice cooker. Bila sudah kembali ke posisi \"warm\", biarkan sekitar 10 menit.', 'fotoResep\\CB7TA0usBa0XXKiqDbRuQv7zl2fYNMimUwQ2tLWo.jpg', '2023-07-08 07:51:25', '2023-07-08 07:51:25'),
(9, 'Mie sedap bumbu sendiri(super pedas)', 'kelaparan jadi masak emie (masakan paling lezat anak kosan)', '1 bungkus mie sedap goreng duo|3 siung bawang putih|3 biji bawang merah|penyedap rasa (terserah)|10 biji cabe rawit (selera)', 'Pertama2 kita panaskan air, lalu kita cemplungin mie sedapnya ke dalam panci|Kemudian tiriskan (pakek saringane emie)|Lalu panaskan belanga(wajan)kemudian tuangkan minyak menurut selera|Kalau sudah minyak panas.. cemplungin bumbu2nya yang sudah di rajang atau di potong.. kedalam wajan (srienggggg)|Bumbu bawangnya kalau sudah layu.. cemplungin mie yang di tiriskan itu ke dalam belanga (wajan)|Beri sedikit bumbu penyedap rasa.... (jangan lupa micin)hahaaa', 'fotoResep\\r3Khiy6gO8P4ztwT8plbx8XpW6A5TPkGnyUuaIaA.jpg', '2023-07-08 07:53:56', '2023-07-08 07:53:56');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`id_resep`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `resep`
--
ALTER TABLE `resep`
  MODIFY `id_resep` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
