<?php  // Load file koneksi.php  
include "koneksi.php";   ?> 
   
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


<style type="text/css">
<!--
.style4 {
	font-size: 18px;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
}
.style6 {color: #0099CC; font-weight: bold; }
-->
</style>
<?php
$query = "SELECT * FROM tb_sambutan"; // Query untuk menampilkan semua data siswa  

$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query    
while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql    
?>
<div class="panel panel-info">
  <div class="panel-heading">
    <h3 align="center" class="panel-title">Sambutan Kepala Dinas PPKBP3A Kota Pagar Alam</h3>
  </div>
  <div class="panel-body">
  <table width="100%" border="0"class="table table-striped table-hover">
<tr bgcolor="#FFFFFF">
  <td colspan="3">
<?php 
echo "<p align='center'><img src='admin/images/".$data['foto']."' width='150' height='150'></p> <br>";       
echo "<p align='center'><a href='?page=lengkap_sambutan&id_sambutan=".$data['id_sambutan']."'> Sambutan Kepala Dinas</a></p>";    
  
}  
?>  
</td>
</tr>
  </table>
  </div>
  </div>
  
</body>
</html> 