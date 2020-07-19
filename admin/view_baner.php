<style type="text/css">
<!--
.style2 {color: #CCCCCC; font-weight: bold; }
.style3 {color: #000000}
.style4 {
	color: #333333;
	font-weight: bold;
	font-size: 18px;
}
.style5 {
	font-size: 18px;
	color: #333333;
}
-->
</style>
<h4 align="center"><b>GAMBAR BANER</b></h4>
<br />
<table align="center" width="50%" class="table table-hover">
  <tr bgcolor="#FFFFFF">
    <td width="85%" height="50" bordercolor="#0033CC"><div align="center" class="style2 style3 style5">Gambar Baner</div></td>
    <td width="15%" height="50" bordercolor="#0033CC"><div align="center" class="style4">Aksi</div></td>
  </tr>

<?php  // Load file koneksi.php  
include "koneksi.php";   
 
$query = "SELECT * FROM tb_baner"; // Query untuk menampilkan baner

$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query    
while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql    

echo "<tr>";    
echo "<td align='center'><img src='images/".$data['foto']."' width='300' height='400'></td>";    
echo "<td align='center'><a href='?page=edit_baner&id_baner=".$data['id_baner']."'><button type='submit' name='button2' id='button2' class='btn btn-default'><span class='glyphicon glyphicon-pencil'></span>  Edit Baner</button></a></td>";    
echo "</tr>";  }  
?>  
</table>
