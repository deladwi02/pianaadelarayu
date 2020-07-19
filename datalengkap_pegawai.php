<?php include "koneksi2.php"; ?>

<?php
$id_pegawai = $_GET['id_pegawai'];
$query = mysql_query("SELECT * FROM tb_pegawai WHERE id_pegawai ='$id_pegawai'");
$data = mysql_fetch_array($query);
?>
<h3 align="center"><b>DATA PEGAWAI</b></h3><hr />
<form id="form1" name="form1" method="post" action="">
<table class="table table-hover" align="center" width="50%" border="0">
  <tr>
    <td>NIP</td>
    <td><b>:</b></td>
    <td><?php echo $data['nip']; ?></td>
  </tr>
    <tr>
    <td>Nama</td>
    <td><b>:</b></td>
    <td><?php echo $data['nama']; ?></td>
  </tr>
  <tr>
    <td>Pangkat/Golongan</td>
    <td><b>:</b></td>
    <td><?php echo $data['pangkat']; ?></td>
  </tr>
  <tr>
    <td>Jabatan</td>
    <td><b>:</b></td>
    <td><?php echo $data['jabatan']; ?></td>
  </tr>
  <tr>
    <td>Tempat Lahir</td>
    <td><b>:</b></td>
    <td><?php echo $data['tempat']; ?></td>
  </tr>
  <tr>
    <td>Tanggal Lahir</td>
    <td><strong>:</strong></td>
        <td><?php echo $data['tanggal']; ?></td>
 </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td><b>:</b></td>
    <td><?php echo $data['jekel']; ?></td>
  </tr>
 
  <tr>
    <td>Alamat</td>
    <td><b>:</b></td>
    <td><?php echo $data['alamat']; ?></td>
  </tr>
</table>
</form>

<?php
if (isset($_POST['simpan'])){
	$nip    	  = $_POST['nip'];
	$nama	      = $_POST['nama'];
	$pangkat      = $_POST['pangkat'];
	$jabatan      = $_POST['jabatan'];
	$tempat       = $_POST['tempat'];
	$tanggal      = $_POST['thn'].'-'.$_POST['bln'].'-'.$_POST['tgl'];
	$jekel        = $_POST['jekel'];
	$alamat       = $_POST['alamat'];
	
	$edit = mysql_query("UPDATE tb_pegawai SET 
	nip		     = '$nip',
	nama	     = '$nama',
	pangkat		 = '$pangkat',
	jabatan		 = '$jabatan',
	tempat       = '$tempat',
	tanggal      = '$tanggal',
	jekel        = '$jekel',
	alamat       = '$alamat'
	WHERE id_pegawai = '$id_pegawai'");

	if ($edit) {
	echo "<script>alert ('Data berhasil di perbaiki ');document.location='?page=view_pegawai' </script>";}
		else {echo "<script>alert ('Data gagal di perbaiki ');document.location='?page=view_pegawai' </script>";}
}
?>