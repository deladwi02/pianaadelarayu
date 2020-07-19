<h3 align="center"><b>PERUBAHAN SAMBUTAN KEPALA SEKOLAH</b></h3> <hr>   
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
echo "<p align='center'><img src='admin/images/".$data['foto']."' width='150' height='150'></p> <br>";   
<td><?php echo $data['sambutan']; ?></td>  
</tr>  
<tr height="60">    
<td></td>
  <td>
</tr>  
</table>     
