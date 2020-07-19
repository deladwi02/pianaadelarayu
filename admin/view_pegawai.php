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
	$query = mysql_query("SELECT * FROM tb_pegawai ORDER BY id_pegawai asc");
	$no = 1;
?>
<h3 align="center"><b>DAFTAR PEGAWAI</b></h3><hr>

<form action="?page=input_pegawai" method="post">
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
<table width="100%" class="table table-hover">
  <tr bgcolor="#FFFFFF">
    <td width="3%"bordercolor="#0033CC"><div align="center"><strong>No</strong></div></td>
    <td width="4%" bordercolor="#0033CC"><div align="center"><strong>NIP</strong></div></td>
    <td width="18%" bordercolor="#0033CC"><div align="center"><strong>Nama</strong></div></td>
    <td width="18%" bordercolor="#0033CC"><div align="center"><strong>Pangkat/Golongan</strong></div></td>
    <td width="18%" bordercolor="#0033CC"><div align="center"><strong>Jabatan</strong></div></td>
    <td width="5%" bordercolor="#0033CC"><div align="center"><strong>Tempat Lahir</strong></div></td>
    <td width="5%" bordercolor="#0033CC"><div align="center"><strong>Tanggal lahir</strong></div></td>
    <td width="5%" bordercolor="#0033CC"><div align="center"><strong>Jenis Kelamin</strong></div></td>
    <td width="17%" bordercolor="#0033CC"><div align="center"><strong>Alamat</strong></div></td>
    <td colspan="2" bordercolor="#0033CC"><div align="center"><strong>Aksi</strong></div></td>
  </tr>
  
  <?php while ($data = mysql_fetch_array($query)){
	?>

    <tr>
    <td align="center"><?php echo $no++; ?></td>
    <td align="center"><?php echo $data['nip']; ?></td>
    <td align="center"><?php echo $data['nama']; ?></td>
    <td align="center"><?php echo $data['pangkat']; ?></td>
    <td align="center"><?php echo $data['jabatan']; ?></td>
    <td align="center"><?php echo $data['tempat']; ?></td>
    <td align="center"><?php echo $data['tanggal']; ?></td>
    <td align="center"><?php echo $data['jekel']; ?></td>
    <td align="center" width="17%"><?php echo $data['alamat']; ?></td>
    <td align="center" width="6%">
    <form action="?page=edit_pegawai&id_pegawai=<?php echo $data['id_pegawai']; ?>" method="post" >
      <label>
        <button type="submit" name="button2" id="button2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span> Edit</button>
        </label>
    </form></td>
      <td align="center" width="6%">
      <form action="?page=hapus_pegawai&id_pegawai=<?php echo $data['id_pegawai']; ?>" method="post" >
      <label>
        <button type="submit" name="button2" id="button2" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Hapus</button>
        </label>
    </form>    </td>
  </tr>
<?php } ?>  
</table>
</body>
</html>