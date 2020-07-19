<?php include "koneksi2.php"; ?>
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
	$query = mysql_query("SELECT * FROM tb_pegawai ORDER BY id_pegawai asc");
	$no = 1;
?>
<h3 align="center"><b>DAFTAR PEGAWAI</b></h3><hr>

<br>
<table width="96%" class="table table-hover">
  <tr bgcolor="#FFFFFF">
    <td width="11%"bordercolor="#0033CC"><div align="center"><strong>No</strong></div></td>
    <td width="12%" bordercolor="#0033CC"><div align="center"><strong>NIP</strong></div></td>
    <td width="23%" bordercolor="#0033CC"><div align="center"><strong>Nama</strong></div></td>
    <td width="14%" bordercolor="#0033CC"><div align="center"><strong>Jenis Kelamin</strong></div></td>
    <td width="23%" bordercolor="#0033CC"><div align="center"><strong>Alamat</strong></div></td>
    <td colspan="2" bordercolor="#0033CC"><div align="center"><strong>Aksi</strong></div></td>
  </tr>
  <?php while ($data = mysql_fetch_array($query)){
	?>
  <tr>
    <td align="center"><?php echo $no++; ?></td>
    <td align="center"><?php echo $data['nip']; ?></td>
    <td align="center"><?php echo $data['nama']; ?></td>
    <td align="center"><?php echo $data['jekel']; ?></td>
    <td align="center" width="23%"><?php echo $data['alamat']; ?></td>
    <td align="center" width="17%"><form action="?page=datalengkap_pegawai&id_pegawai=<?php echo $data['id_pegawai']; ?>" method="post" >
      <label>
        <button type="submit" name="button2" id="button2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-search"></span> View</button>
        </label>
    </form></td>
  </tr>
  <?php } ?>
</table>
</body>
</html>