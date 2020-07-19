<?php
include "koneksi2.php";
//proses input berita
if (isset($_POST['Input'])) {
$judul = addslashes (strip_tags ($_POST['judul']));
$kategori = $_POST['kategori'];
$headline = addslashes (strip_tags ($_POST['headline']));
$isi_berita = addslashes (strip_tags ($_POST['isi']));
$pengirim = addslashes (strip_tags ($_POST['pengirim']));
//insert ke tabel
$query = "INSERT INTO tb_berita VALUES('','$kategori','$judul','$headline','$isi_berita','$pengirim', now())";
$sql = mysql_query ($query);
if ($sql) {
echo "<script>alert ('Data berhasil di simpan ');document.location='?page=view_berita' </script>";
} else {
echo "<script>alert ('Data berhasil di simpan ');document.location='?page=view_berita' </script>";
}
}
?>

<html>
<head><title>Input Berita</title>
<link rel="stylesheet" href="style.css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body>
<br><br>
<FORM ACTION="" METHOD="POST" NAME="input">
<table cellpadding="0" cellspacing="0" border="0"
width="700">
<tr>
<td colspan="3"><h2>Input Berita</h2></td>
</tr>
<tr>
<td width="200">Judul Berita</td>
<td>:</td>
<td><input type="text" name="judul" class="form-control"
size="30"></td>
</tr>
<tr>
<td>Kategori</td>
<td>:</td>
<td><select name="kategori" class="form-control">
  <option value="1">Ekonomi</option>
  <option value="2">Olah raga</option>
  <option value="3">Politik</option>
  <option value="4">Sosial</option>
  <option value="5">Pendidikan</option>
  <option value="6">Kelembagaan</option>
  <option value="7">Pemerintah</option>
  <option value="8">Budaya</option>
<?
$query = "SELECT id_kategori, nm_kategori
FROM kategori ORDER BY nm_kategori";
$sql = mysql_query ($query);
while ($hasil = mysql_fetch_array ($sql)) {
echo "<option
value='$hasil[id_kategori]'>$hasil[nm_kategori]</option>";
}
?>
</select></td>
</tr>
<tr>
<td>Headline Berita</td>
<td>:</td>
<td><textarea name="headline" cols="50" rows="4" class="form-control">
</textarea></td>
</tr>
<tr>
<td>Isi Berita</td>
<td>:</td>
<td><textarea name="isi" cols="50" rows="10" class="form-control">
</textarea></td>
</tr>
<tr>
<td>Pengirim</td>
<td>:</td>
<td><input type="text" name="pengirim" size="20" class="form-control"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;&nbsp;<input type="submit" name="Input"
value="Input Berita">&nbsp;
<input type="reset" name="reset" value="Cancel"></td>
</tr>
</table>
</FORM>
</body>
</html>
