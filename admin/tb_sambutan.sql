-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02 Mei 2018 pada 05.33
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_alazhar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sambutan`
--

CREATE TABLE `tb_sambutan` (
  `id_sambutan` int(5) NOT NULL,
  `sambutan` text NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_sambutan`
--

INSERT INTO `tb_sambutan` (`id_sambutan`, `sambutan`, `foto`) VALUES
(2, '<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">P</span></span><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">erkembangan teknologi informasi yang semakin pesat saat ini telah membawa kita memasuki sebuah dunia baru, dunia dimana komunikasi memegang peranan penting dalam berbagai aspek kehidupan. Kemajuan teknologi informasi terus meningkat dengan adanya <em>internet,</em> berbagai macam fasilitas yang disediakan <em>internet </em>beserta aplikasi-aplikasinya sudah tidak asing lagi bagi yang menggunakan karena kemampuannya dalam menyajikan informasi secara cepat dan tepat.&nbsp; </span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">Teknologi <em>Internet</em> dapat mendukung penggunaan teknologi informasi sebagai sarana pembelajaran maupun penyebaran informasi itu sendiri.&nbsp; Aktivitas yang baik dari penerapan teknologi dalam mengelola informasi yaitu dengan tersedia</span></span><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">nya</span></span><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\"> sistem yang terorganisir dengan baik secara terstruktur dan mudah dipahami</span></span> <span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">oleh penggunanya </span></span><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">terutama dalam administrsi untuk memudahkan </span></span><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">dalam mengakses data yang dibutuhkan</span></span><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\"> contohnya yaitu <em>website</em></span></span><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">.&nbsp; </span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">peranan <em>internet</em> mempunyai peranan penting dalam</span></span> <span style=\"font-size:12.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,&quot;serif&quot;\">menunjang proses penyampaian informasi pendidikan secara <em>global</em>,&nbsp; <em>Website</em> berfungsi sebagai penyedia informasi juga sebagai pengelola data yang menyajikan informasi yang interaktif dan komunikatif,&nbsp; dengan adanya <em>website</em> oleh suatu lembaga atau instansi akan memudahkan proses penyampaian dan pencarian informasi secara terstruktur tanpa harus datang ke objek informasi secara langsung. Salah satu aplikasi <em>Internet</em> yang sekarang sering digunakan adalah <em>website.</em>Saat ini bisa kita jumpai semua sekolah mulai dari tingkat dasar hingga perguruan tinggi telah memiliki sistem jaringan yang terhubung satu dengan yang lainnya. Masyarakat dapat lebih mudah mendapatkan informasi tentang sekolah yang mereka minati dengan cepat dan <em>efisien</em> tanpa harus datang secara langsung ke sekolah tersebut.&nbsp;&nbsp; </span></span></p>\r\n', '07042018161336ustadz.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_sambutan`
--
ALTER TABLE `tb_sambutan`
  ADD PRIMARY KEY (`id_sambutan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_sambutan`
--
ALTER TABLE `tb_sambutan`
  MODIFY `id_sambutan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
