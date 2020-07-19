<ul>
<div class="panel" style="background-color:#CCCCFF">
<div class="panel-heading" style="background-color:#666666">
	<h1 class="panel-title"><center><p style="color:#2A9FFF"> DATA PELAYANAN</p></center></h1>
  </div>
    
<div class="panel-body">
<center class="info">
<br><hr />
</center>

<table width="70%" border="0" class="table table-striped table-hover">
  <tr>
    <td>
    
<?php
  $konek = mysqli_connect("localhost","root","","db_dppkbp3a");

  $query = "SELECT * FROM tb_pelayanan ORDER BY id_pelayanan DESC";
  $hasil = mysqli_query($konek, $query);

  while ($r = mysqli_fetch_array($hasil)){
    echo "Nama File : <b>$r[nama_file]</b> <br>";
	echo "Deskripsi : <b>$r[deskripsi]</b> <br>";
    echo "<a href=\"donlot.php?file=$r[nama_file]\"> Download File Pelayanan</a><br><hr>";
  }
?></td>
  </tr>
</table>
</ul>