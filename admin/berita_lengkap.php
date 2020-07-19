<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dinas PUPR Kota Pagar Alam</title>
</head>

<body>
<?php
include "koneksi2.php";
if (isset($_GET['id'])) {
$id_berita = $_GET['id'];
} else {
die ("Error. No Id Selected! ");
}
?>

<html>
<head><title>Berita Lengkap</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<a href="?page=arsip_berita">Arsip Berita</a> |
<a href="?page=input_berita">Input Berita</a>
<br><br>
<h2>Berita Lengkap</h2>
<?php
$query = "SELECT A.id_berita, B.nm_kategori, A.judul, A.isi, A.pengirim, A.tanggal FROM tb_berita A, tb_kategori B WHERE A.id_kategori=B.id_kategori && A.id_berita='$id_berita'";
$sql = mysql_query ($query);
$hasil = mysql_fetch_array ($sql);
$id_berita = $hasil['id_berita'];
$kategori = stripslashes ($hasil['nm_kategori']);
$judul = stripslashes ($hasil['judul']);
$isi = nl2br(stripslashes ($hasil['isi']));
$pengirim = stripslashes ($hasil['pengirim']);
$tanggal = stripslashes ($hasil['tanggal']);
//
//tampilkan berita
echo "<font size=5 color=blue>$judul</font><br>";
echo "<small>Berita dikirimkan oleh <b>$pengirim</b>pada tanggal <b>$tanggal</b> dalam kategori<b>$kategori</b></small>";
echo "<p>$isi</p>";
?>
</body>
</html>
