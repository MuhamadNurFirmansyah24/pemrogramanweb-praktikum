-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Apr 2020 pada 12.23
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_193040088`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `Judul Buku` varchar(100) NOT NULL,
  `Pengarang` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `Harga` varchar(100) NOT NULL,
  `Gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `Judul Buku`, `Pengarang`, `ket`, `Harga`, `Gambar`) VALUES
(1, 'Laskar Pelangi', 'Andrea Hirata', 'Tersedia', '125.000', 'Laskarpelangi.jpg'),
(2, 'Dear Nathan', 'Erisca Febriani', 'Tersedia', '125.000', 'dearnathan.jpg'),
(3, 'Kola Kumal', 'Raditya Dika', 'Tersedia', '125.000', 'koalakumal.jpg'),
(4, 'Dilan 1990', 'Pidi Baiq', 'Tersedia', '125.000', 'dilan.jpg'),
(5, 'Rindu', 'Tere Liye', 'Tersedia', '125.000', 'rindu.jpg'),
(6, 'Bulan', 'Tere Liye', 'Tersedia', '125.000', 'bulan.jpg'),
(7, 'Matahari', 'Tere Liye', 'Tersedia', '125.000', 'matahari.jpg'),
(8, 'Bintang', 'Tere Liye', 'Tersedia', '125.000', 'bintang.jpg'),
(9, 'Hujan', 'Tere Liye', 'Tersedia', '125.000', 'hujan.jpg'),
(10, 'Bumi', 'Tere Liye', 'Tersedia', '125.000', 'bumi.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
