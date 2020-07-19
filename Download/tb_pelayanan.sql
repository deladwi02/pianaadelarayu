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
-- Struktur dari tabel `tb_pelayanan`
--

CREATE TABLE IF NOT EXISTS `tb_pelayanan` (
`id_pelayanan` int(5) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pelayanan`
--

INSERT INTO `tb_pelayanan` (`id_pelayanan`, `nama_file`, `deskripsi`, `tanggal`) VALUES
(4, 'Peserta KB Aktif Tahun 2017.xlsx', 'Data Peserta KB Aktif Tahun 2017 se Kota Pagar Ala', '2018-05-02'),
(6, 'Peserta KB Baru Tahun 2017.xlsx', 'Data Peserta KB Baru Tahun 2017 Se Kota Pagar Alam', '2018-05-02'),
(8, 'Perkiraan Peserta Masyarakat Menjadi Peserta KB Baru Tahun 2018.xlsx', 'Perkiraan Permintaan Masyarakat menjadi Peserta KB', '2018-05-02'),
(9, 'Perkiraan Permintaan Masyarakat Menjadi Peserta KB Aktif Tahun 2018.xlsx', 'Perkiraan Permintaan Masyarakat menjadi peserta KB', '2018-05-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pelayanan`
--
ALTER TABLE `tb_pelayanan`
 ADD PRIMARY KEY (`id_pelayanan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pelayanan`
--
ALTER TABLE `tb_pelayanan`
MODIFY `id_pelayanan` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
