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

<h3 align="center"><b>INPUT SEJARAH</b></h3><hr />
<form id="form1" name="form1" method="post" action="">
<table align="center" width="50%" border="0">
  <tr>
    <td width="36%">&nbsp;</td>
    <td width="3%">&nbsp;</td>
    <td width="61%">&nbsp;</td>
  </tr>
  

  <tr>
    <td><strong>Isi</strong></td>
    <td><b>:</b></td>
    <td>
      <label>
        <textarea name="isi" id="isi" cols="45" rows="5"class="ckeditor"></textarea>
        </label>    </td>
  </tr>
  
  <tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>
  <input name="simpan" type="submit" class="btn btn-success" id="simpan" value="Simpan">
  <a href="?page=view_sejarah"><input type="button" value="Batal" class="btn btn-danger"></a></td>
</tr>  
</table>
</form>

<?php
if (isset($_POST['simpan'])){
	$isi = $_POST['isi'];
	
	$simpan = mysql_query("INSERT INTO tb_sejarah(isi) VALUES ('$isi')");
	
	if ($simpan) {
	echo "<script>alert ('Data berhasil di simpan ');document.location='?page=view_sejarah' </script>";}
		else {echo "<script>alert ('Data gagal di simpan ');document.location='?page=view_sejarah' </script>";}
}
?>
