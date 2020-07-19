-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15 Mei 2018 pada 09.21
-- Versi Server: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_dppkbp3a`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pendataan`
--

CREATE TABLE IF NOT EXISTS `tb_pendataan` (
`id_pendataan` int(5) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pendataan`
--

INSERT INTO `tb_pendataan` (`id_pendataan`, `nama_file`, `deskripsi`, `tanggal`) VALUES
(1, 'RKA 2016 per oktober 2015skdjhskj.xlsx', 'cdsfds', '2018-03-28'),
(3, 'KARUISK.xlsx', 'wuewuewki', '2018-05-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pendataan`
--
ALTER TABLE `tb_pendataan`
 ADD PRIMARY KEY (`id_pendataan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pendataan`
--
ALTER TABLE `tb_pendataan`
MODIFY `id_pendataan` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
