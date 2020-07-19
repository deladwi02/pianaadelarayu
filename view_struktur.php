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
    

<?php  // Load file koneksi.php  
include "koneksi.php";   
 
$query = "SELECT * FROM tb_struktur"; // Query untuk menampilkan struktur

$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query    
while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql    

echo "<tr>";    
echo "<td align='center'><img src='admin/images/".$data['foto']."' width='300' height='400'></td>";    
echo "<td align='center'><a href='?page=edit_struktur&id_struktur=".$data['id_struktur']."'>";    
echo "</tr>";  }  
?>  
</table>
