<h3 align="center"><b>UBAH BANER</b></h3> <hr />   
<?php  
// Load file koneksi.php  
include "koneksi.php";
    
// Ambil data NIS yang dikirim oleh index.php melalui URL  
$id_baner = $_GET['id_baner'];    
// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim  
$query = "SELECT * FROM tb_baner WHERE id_baner='".$id_baner."'";  $sql = mysqli_query($connect, $query);  
// Eksekusi/Jalankan query dari variabel $query  
$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql  
?>    
<form method="post" action="?page=proses_edit_baner&id_baner=<?php echo $id_baner; ?>" enctype="multipart/form-data">  
<table align="center" width="100%">  
<tr>    
<td width="38%"><div align="right"><b>Pilih Gambar Baner</b>
</div>
</td>
<td width="10%"><div align="center"><b>:</b>
</div></td><td width="62%">      
<input type="checkbox" name="ubah_foto" value="true"> Ceklis terlebih dahulu, jika ingin mengubah gambar baner
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
  <td><input type="submit" value="Simpan" class="btn btn-info">  
  <a href="?page=view_baner"><input type="button" value="Batal" class="btn btn-danger"></a>  
</form>
</td>
</tr>  
</table>    