<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title>Dinas PUPR Kota Pagar Alam</title> 
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="ckeditor/ckeditor/ckeditor.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
</head>    
<body>

<h3 align="center"><b>PUPR </b></h3> <hr>   
<?php  
// Load file koneksi.php  
include "koneksi.php";
    
// Ambil data NIS yang dikirim oleh index.php melalui URL  
$id_sambutan = $_GET['id_sambutan'];    
// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim  
$query = "SELECT * FROM tb_sambutan WHERE id_sambutan='".$id_sambutan."'";  
$sql = mysqli_query($connect, $query);  
// Eksekusi/Jalankan query dari variabel $query  
$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql  
?>    
<form method="post" action="?page=proses_edit_sambutan&id_sambutan=<?php echo $id_sambutan; ?>" enctype="multipart/form-data">  
<table width="100%">  
<tr>
<?php echo $data['sambutan']; ?></textarea> 
</tr>  
</table>     
</body>
</html>