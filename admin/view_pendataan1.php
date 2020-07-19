<ul>
<div class="panel" style="background-color:#CCCCFF">
<div class="panel-heading" style="background-color:#666666">
	<h1 class="panel-title"><center><p style="color:#2A9FFF"> DATA PENDATAAN KELUARGA</p></center></h1>
  </div>
    
<div class="panel-body">
<center class="info">
<form action="?page=input_pendataan" method="post">
<table align="left" width="50%">
  <tr>
    <td>
      <button type="submit" name="button" id="button" class="btn btn-success" >Tambah Data Pendataan Pembangunan</button>
    </td>
    </tr></table>
</form>
<br><hr />
</center>

<table width="70%" border="0" class="table table-striped table-hover">
  <tr>
    <td>
    
<?php
  $konek = mysqli_connect("localhost","root","","db_dppkbp3a");

  $query = "SELECT * FROM tb_pendataan ORDER BY id_pendataan DESC";
  $hasil = mysqli_query($konek, $query);

  while ($r = mysqli_fetch_array($hasil)){
    echo "Nama File : <b>$r[nama_file]</b> <br>";
	echo "Deskripsi : <b>$r[deskripsi]</b> <br>";
	echo "<a href=\"?page=hapus_pendataan&id_pendataan=<?php echo $r[id_pendataan]; ?>\" >Hapus File Pendataan</a><hr>";
	
  }
?>
</td>
  </tr>
</table>
</ul>