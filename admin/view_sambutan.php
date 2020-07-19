<style type="text/css">
<!--
.style1 {font-size: 18px}
.style2 {font-family: Arial, Helvetica, sans-serif}
-->
</style>
<h4 align="center"><b>SAMBUTAN KEPALA DINAS PUPR KOTA PAGAR ALAM</b></h4>
<br />
<table align="center" width="100%" class="table table-hover">
  <tr bordercolor="#FFFFFF" bgcolor="#FFFFFF">
    <td width="19%" height="50"><div align="center" class="style1 style3 style6 style2">
      <div align="left"><strong>Foto Gedung Dinas PUPR kota pagar alam</strong></div>
    </div></td>
    <td width="73%" height="50"><div align="center" class="style1 style7 style2">
      <div align="left"><strong>Isi Sambutan</strong></div>
    </div></td>
    <td width="8%" height="50"><div align="center" class="style1 style7 style2">
      <div align="center"><strong>Aksi</strong></div>
    </div></td>
  </tr>
<?php  // Load file koneksi.php  
include "koneksi.php";    
$query = "SELECT * FROM tb_sambutan"; // Query untuk menampilkan semua data sambutan  

$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query    
while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql    

echo "<tr>";    
echo "<td align='center'><img src='images/".$data['foto']."' width='100' height='100'></td>";    
echo "<td align='left'>".$data['sambutan']."</td>";    
echo "<td align='center'><a href='?page=edit_sambutan&id_sambutan=".$data['id_sambutan']."'><button type='submit' name='button2' id='button2' class='btn btn-default'><span class='glyphicon glyphicon-pencil'></span>  Edit Sambutan Kepala Dinas</button></a></td>";    
echo "</tr>";  
}  
?>  
</table>
</body>
</html>