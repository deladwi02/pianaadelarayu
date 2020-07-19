<?php include "koneksi.php"; ?>
<?php $no=1 ;?>
<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title>Dinas PPKBP3A Kota Pagar Alam</title> 
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script></head>
<body>
<?php
	$query = mysql_query("SELECT * FROM tb_pendataan ORDER BY id_pendataan asc");
	$no = 1;
?>
<h3 align="center"><b>DAFTAR PENDATAAN KELUARGA</b></h3><hr>

<form action="?page=input_pendataan" method="post">
<table width="100%">
  <tr>
    <td>
      <button type="submit" name="button" id="button" class="btn btn-success" ><span class="glyphicon glyphicon-plus"></span> Tambah Data</button>
    </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr></table>
</form>
<br>
<table width="100%" class="table-bordered table-hover">
  <tr bgcolor="#FFFFFF">
    <td width="12%"bordercolor="#0033CC"><div align="center"><strong>No</strong></div></td>
    <td width="31%" bordercolor="#0033CC"><div align="center"><strong>Deskripsi</strong></div></td>
    <td bordercolor="#0033CC"><div align="center"><strong>Nama File</strong></div></td>
    <td bordercolor="#0033CC"><div align="center"><strong>Aksi</strong></div></td>
  </tr>
  
  <?php while ($data = mysql_fetch_array($query)){
	?>

    <tr>
    <td align="center"><?php echo $no++; ?></td>
    <td align="center"><?php echo $data['deskripsi']; ?></td>
    <td align="center" width="48%"><div align="left"><?php echo $data['nama_file']; ?></td>
    <td align="center" width="9%"><form action="?page=hapus_pendataan&id_pendataan=<?php echo $data['id_pendataan']; ?>" method="post" class="style4"> 
    <label>
        <button type="submit" name="button2" id="button2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-trash"></span></button>
        </label>
    </form></td>
  </tr>
<?php } ?>  
</table>
</body>
</html>