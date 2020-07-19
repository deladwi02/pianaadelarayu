<h3 align="center"><b>EDIT STRUKTUR</b> ORGANISASI</h3> <hr />   
<?php  
// Load file koneksi.php  
include "koneksi.php";
    
// Ambil data NIS yang dikirim oleh index.php melalui URL  
$id_struktur = $_GET['id_struktur'];    
// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim  
$query = "SELECT * FROM tb_struktur WHERE id_struktur='".$id_struktur."'";  $sql = mysqli_query($connect, $query);  
// Eksekusi/Jalankan query dari variabel $query  
$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql  
?>    
<form method="post" action="?page=proses_edit_struktur&id_struktur=<?php echo $id_struktur; ?>" enctype="multipart/form-data">  
<table align="center" width="50%">  
<tr>    
<td width="38%"><b>Pilih Struktur Organisasi</b></td>    
<td width="62%">      
<input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto
<br>      
<input type="file" name="foto"></td>  
</tr>
<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td><input type="submit" value="Simpan" class="btn btn-success">  
  <a href="?page=view_struktur"><input type="button" value="Batal" class="btn btn-danger"></a>  
</form>
</td>
</tr>  
</table>    