-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 Nov 2018 pada 13.36
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `universitas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa_ilkom`
--

CREATE TABLE `mahasiswa_ilkom` (
  `nim` char(9) NOT NULL,
  `nama` char(50) DEFAULT NULL,
  `umur` int(11) DEFAULT NULL,
  `tempat_lahir` char(50) DEFAULT NULL,
  `IPK` decimal(3,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa_ilkom`
--

INSERT INTO `mahasiswa_ilkom` (`nim`, `nama`, `umur`, `tempat_lahir`, `IPK`) VALUES
('089023013', 'Alex Supriyanto', 23, 'Surabaya', '2.90'),
('089023020', 'Naira Alika', 20, 'Padang', '3.90'),
('089045001', 'Andi Suryo', 23, 'Jakarta', '2.70'),
('099145055', 'Neil Situmorang', 22, 'Medan', '1.90'),
('109223041', 'Rani Sabrina', 21, 'Padang', '3.70'),
('109245021', 'Santi Syanum', 21, 'Malang', '3.20'),
('141241242', 'Mario adhi bahenda', 19, 'Bantul', '3.70'),
('19839242', 'Sulasmi', 22, 'Yogyakarta', '3.23'),
('19839292', 'Subiono', 26, 'Yogyakarta', '3.56'),
('23523525', 'Aldo Mustofa', 19, 'Jogja', '3.20'),
('465092590', 'Subi Subroto', 20, 'Jambi', '3.50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa_ilkom`
--
ALTER TABLE `mahasiswa_ilkom`
  ADD PRIMARY KEY (`nim`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
