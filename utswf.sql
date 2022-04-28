-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Apr 2022 pada 09.11
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `utswf`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `drivers`
--

CREATE TABLE `drivers` (
  `id` int(11) NOT NULL,
  `os` varchar(255) NOT NULL,
  `versi` varchar(255) NOT NULL,
  `ukuran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `drivers`
--

INSERT INTO `drivers` (`id`, `os`, `versi`, `ukuran`) VALUES
(1, 'Windows', '2021.2.37', '25.5'),
(2, 'linux', '2021.5.21', '35.5'),
(3, 'Windows', '2022.5.6', '42.6'),
(4, 'linux', '2022.5.7', '45.2'),
(5, 'Mac', '2022.5.4', '53.2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `cpu` varchar(255) NOT NULL,
  `display` varchar(255) NOT NULL,
  `gpu` varchar(255) NOT NULL,
  `memori` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `nama`, `cpu`, `display`, `gpu`, `memori`, `gambar`, `harga`) VALUES
(1, 'ASUS ROG GA401QM', 'Ryzen 9 5900HS', '14\" | 1920 x 1080', 'GeForce RTX 3060', '16GB DDR4-SDRAM', 'asus1.png', 21000000),
(2, 'HP OMEN 15', 'Intel Core i7', '15.6\" | 1920 x 1080', 'GeForce RTX 3070', '16 GB DDR4', 'omen1.png', 24000000),
(3, 'MSI Gaming GF66', 'Intel Core i7-11800H', '15.6\" | 1920 x 1080', 'GeForce RTX 3050 Ti', '16GB DDR4-SDRAM', 'msi1.png', 15000000),
(4, 'MSI Gaming GF63', 'Intel Core i5', '15.6\" | 1920 x 1080', 'GeForce RTX 3050', '8 GB DDR4', 'msi2.png', 18000000),
(5, 'Acer AN515-55-56AP', 'Intel Core i5-10300H', '15.6\" | 1920 x 1080', 'Intel Core i5-10300H', '16GB DDR4-SDRAM', 'acer1.png', 19500000),
(6, 'MSI Crosshair 15', 'Intel Core i7-11800H', '15.6\" | 1920 x 1080', 'Intel Core i7-11800H', '8GB DDR4-SDRAM', 'msi3.png', 20000000),
(7, 'Acer Predator Triton 300 SE', 'Intel Core i7', '14\" | 1920 x 1080', 'GeForce RTX 3050 Ti', '16 GB DDR4', 'acer2.png', 21750000),
(8, 'MSI Crosshair 17', 'Intel Core i7', '17.3\" | 1920 x 1080', 'GeForce RTX 3050 Ti', '16GB DDR4', 'msi4.png', 21550000),
(9, 'MSI Pulse GL66', 'Intel Core i7', '15.6\" | 1920 x 1080', 'GeForce RTX 3050 Ti', '16GB DDR4', 'msi5.png', 23450000),
(10, 'Alienware m15', 'Ryzen 7', '15.6\" | 1920 x 1080', 'GeForce RTX 3050 Ti', '8 GB DDR4', 'alienware1.png', 22125000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
