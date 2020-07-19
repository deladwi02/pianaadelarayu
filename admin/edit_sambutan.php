<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title>KOTA PAGAR ALAM</title> 
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="ckeditor/ckeditor/ckeditor.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
</head>    
<body>

<h3 align="center"><b>PERUBAHAN SAMBUTAN KEPALA DINAS PUPR KOTA PAGAR ALAM</b></h3> <hr>   
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
<td><div align="right"><strong>Isi Sambutan</strong></div></td>  
<td align="center"><b>:</b></td>  
<td>
<textarea name="sambutan" class="ckeditor" id="sambutan" ><?php echo $data['sambutan']; ?></textarea></td>  
</tr>  
<tr height="60">    
<td><div align="right"><strong>Foto Gedung dinas PUPR Kota Pagar alam</strong></div>
</td>
<td align="center"><b>:</b></td>    
<td>      
<input type="checkbox" name="ubah_foto" value="true"> Ceklis terlebih dahulu, jika ingin mengubah foto
<br>      
<input type="file" name="foto"></td>  
</tr>
<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>
<input type="submit" value="Simpan" class="btn btn-info">  
<a href="?page=view_sambutan"><input type="button" value="Batal" class="btn btn-danger"></a>  
</form>
</td>
</tr>  
</table>     
</body>
</html>