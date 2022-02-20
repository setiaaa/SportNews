-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Feb 2022 pada 17.38
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `player`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barcelona`
--

CREATE TABLE `barcelona` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `nomor` varchar(2) NOT NULL,
  `asal` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barcelona`
--

INSERT INTO `barcelona` (`id`, `nama`, `nomor`, `asal`) VALUES
(1, 'Messi', '30', 'Argentina'),
(2, 'Neymar', '10', 'Brazil'),
(3, 'Ronaldo', '7', 'Portugal'),
(4, 'Mbappe', '9', 'Perancis'),
(5, 'Salah', '10', 'Mesir'),
(6, 'Juan Mata', '8', 'Spanyol'),
(7, 'Erling Haaland', '9', 'Inggris'),
(8, 'Sergio Ramos', '4', 'Spanyol'),
(9, 'Gerard Pique', '3', 'Spanyol'),
(10, 'Andres Iniesta', '8', 'Spanyol'),
(11, 'Gianluigi Buffon', '1', 'Italia'),
(12, 'Sergio Busquets', '5', 'Spanyol'),
(13, 'Pepe', '3', 'Brazil'),
(14, 'Sergio Aguero', '19', 'Argentina'),
(15, 'Wayne Rooney', '32', 'Inggris'),
(16, 'Paul Pogba', '6', 'Perancis'),
(17, 'Mesut Ozil', '10', 'Jerman'),
(18, 'Zlatan Ibrahimovic', '11', 'Swedia'),
(19, 'Ferran Torres', '9', 'Spanyol'),
(20, 'Ronaldinho', '10', 'Brazik');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barcelona`
--
ALTER TABLE `barcelona`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
