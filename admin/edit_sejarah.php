<?php include "koneksi.php"; ?>
<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title>Dinas PPKBP3A Kota Pagar Alam</title> 
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="ckeditor/ckeditor/ckeditor.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
</head>    
<body>
<?php
$id_sejarah = $_GET['id_sejarah'];
$query = mysql_query("SELECT * FROM tb_sejarah WHERE id_sejarah ='$id_sejarah'");
$data = mysql_fetch_array($query);
?>

<h3 align="center"><b>EDIT SEJARAH</b></h3><hr>
<form id="form1" name="form1" method="post" action="">
<table align="center" width="100%" border="0">
  
  <tr>
    <td><textarea name="isi" class="ckeditor" id="isi" ><?php echo $data['isi']; ?></textarea></td>
  </tr>
  <tr>
    <td><div align="right"></div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><input type="submit" name="simpan" id="simpan" value="Simpan" class="btn btn-success" />  
    <a href="?page=view_sejarah"><input type="button" value="Batal" class="btn btn-danger"></a></td>
  </tr>
</table>
</form>

<?php
if (isset($_POST['simpan'])){
	
	$isi		= $_POST['isi'];
	
	
	$edit = mysql_query("UPDATE tb_sejarah SET
	
	isi					= '$isi'
	
	WHERE id_sejarah		= '$id_sejarah'");
	
	if ($edit) {
	echo "<script>alert ('Data berhasil di perbaiki ');document.location='?page=view_sejarah' </script>";}
		else {echo "<script>alert ('Data gagal di perbaiki ');document.location='?page=view_sejarah' </script>";}
}
?>
</body>
</html>