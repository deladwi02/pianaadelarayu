<style type="text/css">
<!--
.style1 {font-size: 18px}
.style2 {font-family: Arial, Helvetica, sans-serif}
-->
</style>
<h4 align="center"><b>DINAS PUPR KOTA PAGAR ALAM</b></h4>
<br />
<?php  // Load file koneksi.php  
include "koneksi.php";    
$query = "SELECT * FROM tb_sambutan"; // Query untuk menampilkan semua data siswa  

$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query    
while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql    

echo "<tr>";    
echo "<td align='center'><img src='admin/images/".$data['foto']."' width='200' height='300'></td>";    
echo "<td align='left'>".$data['sambutan']."</td>";    
}  
?> 
</table>
</body>
</html>