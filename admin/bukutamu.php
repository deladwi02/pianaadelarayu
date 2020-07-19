<?php include "koneksi2.php"; ?>
<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title>Elsiati</title> 
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<?php
if (isset($_POST['kirim'])){
$nama_bt   = $_POST['nama'];
$email_bt  = $_POST['email'];
$pesan_bt  = $_POST['pesan'];
$tanggal   = $_POST['tanggal'];

$kirim = mysql_query("INSERT INTO tb_buku(nama,email,pesan,tanggal) VALUES ('$nama','$email','$pesan','tanggal')");
}
?>
<hr>
<?php
$tampil = mysql_query("SELECT * FROM tb_buku ORDER BY no_bt DESC");
while ($data=mysql_fetch_array($tampil)){
?>
<table width="100%" border="0" class="table table-striped table-hover">
  <tr>
    <td><b><?php echo $data['nama']; ?></b></td>
    <td><i><font color="#0000FF"><?php echo $data['email']; ?></font></i></td>
  </tr>
  <tr>
    <td colspan="2"><i>&laquo;  <?php echo $data['pesan']; ?>  &raquo;</i></td>
  </tr>
  <tr>
    <td colspan="2"><i>&laquo;  <?php echo $data['tanggal']; ?>  &raquo;</i></td>
  </tr>
</table>
<?php } ?>
</body>
</html>