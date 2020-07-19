<style type="text/css">
<!--
.style2 {color: #CCCCCC; font-weight: bold; }
.style3 {color: #000000}
.style4 {color: #000000; font-weight: bold; }
-->
</style>
<h3 align="center"><b>STRUKTUR ORGANISASI</b></h3>
<hr />
<table align="center" width="50%" class="table-bordered">
  <tr bgcolor="#CCCCCC">
    <td width="85%" height="50" bordercolor="#0033CC"><div align="center" class="style2 style3">Struktur Organisasi</div></td>
    <td width="15%" height="50" bordercolor="#0033CC"><div align="center" class="style4">Aksi</div></td>
  </tr>

<?php  // Load file koneksi.php  
include "koneksi.php";   
 
$query = "SELECT * FROM tb_struktur"; // Query untuk menampilkan struktur

$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query    
while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql    

echo "<tr>";    
echo "<td align='center'><img src='images/".$data['foto']."' width='300' height='400'></td>";    
echo "<td align='center'><a href='?page=edit_struktur&id_struktur=".$data['id_struktur']."'><button type='submit' name='button2' id='button2' class='btn btn-primary'><span class='glyphicon glyphicon-pencil'></span>  Edit</button></a></td>";    
echo "</tr>";  }  
?>  
</table>
