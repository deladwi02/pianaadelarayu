-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 19. Juli 2020 jam 10:21
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_pupr`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_album`
--

CREATE TABLE IF NOT EXISTS `tb_album` (
  `ida` int(2) NOT NULL AUTO_INCREMENT,
  `nma` varchar(30) NOT NULL,
  PRIMARY KEY (`ida`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `tb_album`
--

INSERT INTO `tb_album` (`ida`, `nma`) VALUES
(1, 'foto dinas PUPR kota Pagar ala'),
(2, 'pembangunan dinas PUPR');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_baner`
--

CREATE TABLE IF NOT EXISTS `tb_baner` (
  `id_baner` int(3) NOT NULL AUTO_INCREMENT,
  `foto` varchar(200) NOT NULL,
  PRIMARY KEY (`id_baner`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `tb_baner`
--

INSERT INTO `tb_baner` (`id_baner`, `foto`) VALUES
(10, '18072020150052dok1a.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berita`
--

CREATE TABLE IF NOT EXISTS `tb_berita` (
  `id_berita` int(5) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `headline` text NOT NULL,
  `isi` text NOT NULL,
  `pengirim` varchar(20) NOT NULL,
  `tanggal` datetime NOT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data untuk tabel `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `id_kategori`, `judul`, `headline`, `isi`, `pengirim`, `tanggal`) VALUES
(18, 7, 'Pembangunan Jalan Kampung 4', 'Pembangun jalan', 'Pembangunan jalan yang akan dilaksanakan pada tanggal 23 juni 2020', 'Kasi Advokasi & Peng', '2018-06-07 22:02:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_buku`
--

CREATE TABLE IF NOT EXISTS `tb_buku` (
  `id_buku` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pesan` text NOT NULL,
  `tanggal` datetime NOT NULL,
  PRIMARY KEY (`id_buku`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data untuk tabel `tb_buku`
--

INSERT INTO `tb_buku` (`id_buku`, `nama`, `email`, `pesan`, `tanggal`) VALUES
(16, 'rayurafika', 'rayurfaika20@gmail.com', 'bagaimana perkembangan dinas pu kota pagaralam', '2020-07-18 20:03:51'),
(17, 'PIANA', 'piana123@gmail.com', 'kapan membangunan jalan di kota pagaralam dilanjutkan', '2020-07-18 20:04:37'),
(18, 'DELLA DWI SEPTIANTI', 'delladwiseptianti@gmail.com', 'pagaralam semakin maju dengan adanya membangunan', '2020-07-18 20:05:20'),
(19, 'RAYU RAFIKA', 'rayurfaika@gmail.com', 'pagaralam', '2020-07-18 20:23:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gambar`
--

CREATE TABLE IF NOT EXISTS `tb_gambar` (
  `idf` int(3) NOT NULL AUTO_INCREMENT,
  `ida` int(2) NOT NULL,
  `namaf` varchar(30) NOT NULL,
  `ketf` text NOT NULL,
  `tgl` date NOT NULL,
  PRIMARY KEY (`idf`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=142 ;

--
-- Dumping data untuk tabel `tb_gambar`
--

INSERT INTO `tb_gambar` (`idf`, `ida`, `namaf`, `ketf`, `tgl`) VALUES
(136, 1, '151216dok1a.png', 'gedung', '2020-07-18'),
(137, 1, '151216dok2.png', 'pembangunan', '2020-07-18'),
(138, 1, '151216pagaralam.jpg', 'pagaralam', '2020-07-18'),
(139, 1, '151724H.png', 'PEMBANGUNAN', '2020-07-18'),
(140, 1, '151724J.png', 'PEMBANGUNAN JALAN', '2020-07-18'),
(141, 1, '151724dok1a.png', 'PEMBANGUNAN JALAN', '2020-07-18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE IF NOT EXISTS `tb_kategori` (
  `id_kategori` int(5) NOT NULL AUTO_INCREMENT,
  `nm_kategori` varchar(30) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE IF NOT EXISTS `tb_login` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` enum('admin','warga','lurah') NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`id_user`, `username`, `password`, `nama`, `level`) VALUES
(1, 'pupr', 'pupr', 'delarayupiana', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_masuk`
--

CREATE TABLE IF NOT EXISTS `tb_masuk` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` enum('admin','warga','lurah') NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pegawai`
--

CREATE TABLE IF NOT EXISTS `tb_pegawai` (
  `id_pegawai` int(5) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `pangkat` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `tempat` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `jekel` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id_pegawai`, `nip`, `nama`, `pangkat`, `jabatan`, `tempat`, `tanggal`, `jekel`, `alamat`) VALUES
(0, '174200113', 'PIANA', 'Pembina Utama/IV.e', 'Mahasiswa', 'Tegurwangi Lama', '1998-07-25', 'Perempuan', 'Tegurwangi Lama'),
(0, '17420102', 'DELLA DWI SEPTIANTI', 'Pembina Utama/IV.e', 'Mahasiswa', 'Pagar Alam', '1999-09-01', 'Perempuan', 'Bumi Agung'),
(21, '17420114', 'RAYU RAFIKA', 'Pembina Utama/IV.e', 'Mahasiswa', 'Pagar Alam', '1998-06-20', 'Perempuan', 'Tegurwangi Lama Kota Pagar alam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pelayanan`
--

CREATE TABLE IF NOT EXISTS `tb_pelayanan` (
  `id_pelayanan` int(5) NOT NULL AUTO_INCREMENT,
  `nama_file` varchar(100) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_pelayanan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data untuk tabel `tb_pelayanan`
--

INSERT INTO `tb_pelayanan` (`id_pelayanan`, `nama_file`, `deskripsi`, `tanggal`) VALUES
(21, 'dok1a.png', 'bangunan Gedung Dinas PUPR Kota Pagaralam', '2020-07-18'),
(22, 'J.png', 'Rapat Pembangunan Jalan Kota Pagara alam', '2020-07-18'),
(23, 'H.png', 'perbakan bangunan kota pagaralam', '2020-07-18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pendataan`
--

CREATE TABLE IF NOT EXISTS `tb_pendataan` (
  `id_pendataan` int(5) NOT NULL AUTO_INCREMENT,
  `nama_file` varchar(100) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_pendataan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data untuk tabel `tb_pendataan`
--

INSERT INTO `tb_pendataan` (`id_pendataan`, `nama_file`, `deskripsi`, `tanggal`) VALUES
(11, 'dok1a.png', 'pembangunan jalan gunung gare', '2020-07-18'),
(12, 'dok2.png', 'pembanguan jalan rimau', '2020-07-18'),
(13, 'pagaralam.jpg', 'pembangunan jalan tegurwangi lama', '2020-07-18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sambutan`
--

CREATE TABLE IF NOT EXISTS `tb_sambutan` (
  `id_sambutan` int(5) NOT NULL AUTO_INCREMENT,
  `sambutan` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  PRIMARY KEY (`id_sambutan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `tb_sambutan`
--

INSERT INTO `tb_sambutan` (`id_sambutan`, `sambutan`, `foto`) VALUES
(3, '<p style="margin-left:0cm; margin-right:0cm; text-align:justify">ISI SAMBUTAN DINAS PUPR</p>\r\n', '18072020144801dok1a.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sejarah`
--

CREATE TABLE IF NOT EXISTS `tb_sejarah` (
  `id_sejarah` int(5) NOT NULL AUTO_INCREMENT,
  `isi` text NOT NULL,
  PRIMARY KEY (`id_sejarah`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `tb_sejarah`
--

INSERT INTO `tb_sejarah` (`id_sejarah`, `isi`) VALUES
(3, '<p>SEJARAH DINAS PUPR KOTA PAGARALAM</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_struktur`
--

CREATE TABLE IF NOT EXISTS `tb_struktur` (
  `id_struktur` int(5) NOT NULL AUTO_INCREMENT,
  `foto` varchar(100) NOT NULL,
  PRIMARY KEY (`id_struktur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tb_struktur`
--

INSERT INTO `tb_struktur` (`id_struktur`, `foto`) VALUES
(1, '18072020150709Pagar alam.gif');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
