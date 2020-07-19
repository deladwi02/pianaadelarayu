<?php
include "koneksi2.php";
if (isset($_GET['id_berita'])) {
$id_berita = $_GET['id_berita'];
} else {
die ("Error. No Id Selected! ");
}
?>
<?php
//proses delete berita
if (!empty($id_berita) && $id_berita != "") {
$query = "DELETE FROM tb_berita WHERE id_berita='$id_berita'";
$sql = mysql_query ($query);
if ($sql) {
echo "<script>alert ('Data berhasil di hapus ');document.location='?page=view_berita' </script>";
} else {
echo "<script>alert ('Data tidak berhasil di hapus ');document.location='?page=view_berita' </script>";
}
echo "Klik <a href='arsip_berita.php'>di sini</a> untuk kembali ke halaman arsip berita";
} else {
die ("Access Denied");
}
?>
</body>
</html>