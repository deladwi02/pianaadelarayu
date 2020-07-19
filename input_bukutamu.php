<?php include "koneksi2.php"; ?>
<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title>PUPR</title> 
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<h4 align="center"><b>BUKU TAMU</b></h4><hr>
<form name="form1" method="post" action="">
<table align="center" width="50%" border="0" cellspacing="1" cellpadding="1">
  <tr valign="top">
    <td width="25%"><strong>Nama</strong></td>
    <td width="12%"><div align="center"><strong>:</strong></div></td>
    <td width="63%">
      <label>
        <input type="text" name="nama" id="nama" class="form-control">
        </label>    </td>
  </tr>
  <tr valign="top">
    <td><strong>E-mail</strong></td>
    <td><div align="center"><strong>:</strong></div></td>
    <td>
      <label>
        <input type="text" name="email" id="email" class="form-control">
        </label>    </td>
  </tr>
  <tr valign="top">
    <td><strong>Pesan</strong></td>
    <td><div align="center"><strong>:</strong></div></td>
    <td>
      <label>
        <textarea name="pesan" id="pesan" class="form-control" cols="50" rows="5"></textarea>
        </label>    </td>
  </tr>
   
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" name="kirim" id="kirim" value="Kirim">
     
      <input type="reset" name="reset" id="batal" value="Batal">      </td>
  </tr>
</table>
</form>
<?php
if (isset($_POST['kirim'])){
$nama     = $_POST['nama'];
$email    = $_POST['email'];
$pesan	  = $_POST['pesan'];

$kirim = mysql_query("INSERT INTO tb_buku(nama,email,pesan,tanggal) VALUES ('$nama','$email','$pesan',now())");
}else if(isset($_POST['batal']))
{header("location:dinas_ppkbp3apga/index.php");}
?>
<hr>

<?php
$tampil = mysql_query("SELECT * FROM tb_buku ORDER BY id_buku DESC");
while ($data=mysql_fetch_array($tampil)){
?>
<table width="100%" border="0" class="table table-striped table-hover">
  <tr>
  <b><?php echo $data['nama']; ?></b> || <i><font color="#0000FF"><?php echo $data['email']; ?></font></i> || 
  <i><font color="#FF0000"><?php echo $data['tanggal']; ?> </font></i><br>
  <i>&laquo;  <?php echo $data['pesan']; ?>  &raquo;</i>
  
  </tr>
</table>
<?php } ?>
</body>
</html>