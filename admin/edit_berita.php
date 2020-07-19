<?php
include "koneksi2.php";
if (isset($_GET['id_berita'])) {
$id_berita = $_GET['id_berita'];
} else {
die ("Error. No Id Selected! ");
}
$query = "SELECT id_berita, id_kategori, judul, headline, isi, pengirim, tanggal FROM tb_berita WHERE id_berita='$id_berita'";
$sql = mysql_query ($query);
$hasil = mysql_fetch_array ($sql);
$id_berita = $hasil['id_berita'];
$id_kategori = stripslashes ($hasil['id_kategori']);
$judul = stripslashes ($hasil['judul']);
$headline = stripslashes ($hasil['headline']);
$isi = stripslashes ($hasil['isi']);
$pengirim = stripslashes ($hasil['pengirim']);
$tanggal = stripslashes ($hasil['tanggal']);
//proses edit berita
if (isset($_POST['Edit'])) {
$id_berita = $_POST['hidberita'];
$judul = addslashes (strip_tags ($_POST['judul']));
$kategori = $_POST['kategori'];
$headline = addslashes (strip_tags ($_POST['headline']));
$isi_berita = addslashes (strip_tags ($_POST['isi']));
$pengirim = addslashes (strip_tags ($_POST['pengirim']));
//update berita
$query = "UPDATE tb_berita SET id_kategori='$kategori',judul='$judul',headline='$headline',isi='$isi_berita',pengirim='$pengirim' WHERE id_berita='$id_berita'";
$sql = mysql_query ($query);
if ($sql) {
echo "<script>alert ('Data berhasil di perbaiki ');document.location='?page=view_berita' </script>";
} else {
echo "<script>alert ('Data gagal di perbaiki ');document.location='?page=view_berita' </script>";
}
}
?>

<html>
<head><title>Edit Berita</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<br><br>
<FORM ACTION="" METHOD="POST" NAME="input">
<table cellpadding="0" cellspacing="0" border="0"
width="700">
<tr>
<td colspan="2"><h2>Edit  Berita</h2></td>
</tr>
<tr>
<td width="200">Judul Berita</td>
<td>: <input type="text" name="judul"size="30" value="<?php echo $judul ?>"></td>
</tr>
<tr>
<td>Kategori</td>
<td>:
<select name="kategori">

<?php
$query = "SELECT id_kategori,nm_kategori FROM tb_kategori ORDER BY nm_kategori";
$sql = mysql_query ($query);
while ($hasil = mysql_fetch_array
($sql)) {
$selected = ($hasil['id_kategori']==
$id_kategori) ? "selected" : "";
echo "<option value='$hasil[id_kategori]' $selected>$hasil[nm_kategori]</option>";
}
?>
</select></td>
</tr>
<tr>
<td>Headline Berita</td>
<td>: <textarea name="headline" cols="50"
rows="4"><?=$headline?></textarea></td>
</tr>
<tr>
<td>Isi Berita</td>
<td>: <textarea name="isi" cols="50"
rows="10"><?=$isi?></textarea></td>
</tr>
<tr>
<td>Pengirim</td>
<td>: <input type="text" name="pengirim"
size="20" value="<?=$pengirim?>"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;&nbsp;
<input type="hidden" name="hidberita"
value="<?=$id_berita?>">
<input type="submit" name="Edit" value="Edit
Berita">&nbsp;
<a href="?page=view_berita"><input type="button" value="Batal" class="btn btn-danger"></a></td>
</tr>
</table>
</FORM>

</body>
</html>