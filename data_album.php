<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script language="javascript">
function tanya() 
{if (confirm ("Apakah Anda yakin akan menghapus album ini ? Semua foto dalam album ini akan dapat tidak tampil.")) 
	{return true;
		} else 
		{return false;
	}
}
</script>
</head>
<?php
include "koneksi2.php";
$tampil=mysql_query("SELECT * from tb_album");
?>
<body>
<h3>Data Album Dinas PUPR Kota Pagar Alam [ <?php $jumlah=mysql_num_rows($tampil); echo"$jumlah";?> ]</h3>
<p><table width="100%" border="0">
</table></p>

<?php

//proses hapus
if (isset ($_GET['hapus']) && $hapus=$_GET['hapus']){
$hapus1=mysql_query("delete from tb_album where ida='$hapus'");
if ($hapus1) {echo"<font color=red>Satu Album Berhasil dihapus</font><br>";} else {die ("Gagal Hapus");}
}
//proses input album
if (isset($_POST['Input'])) {
$nm_alb = addslashes (strip_tags ($_POST['nama_alb']));
if ($nm_alb!=""){//insert ke tabel
$query = "INSERT INTO tb_album VALUES('','$nm_alb')";
$sql = mysql_query ($query);
if ($sql) {echo "<font color=blue>Satu album foto telah berhasil ditambahkan</font><br>";} 
else {echo "<font color=red>Album gagal ditambahkan</font><br>";}
} else {echo "<font color=red>PERINGATAN: Nama album harus diisi</font><br>";}
}
//proses edit
if (isset($_POST['edit'])){
$id_bum=$_POST['kode_alb'];
$nama_bum=$_POST['nama_alb'];
$query1 = "UPDATE tb_album SET nma='$nama_bum' WHERE ida='$id_bum'";
$sql2 = mysql_query ($query1);
if ($sql2){echo "<font color=blue>Satu album foto telah berhasil diedit</font><br>";} 
else {echo "<font color=red>Album gagal diedit</font><br>";}
} 
//penegasan nomor urut awal
$no=0;
//Menampilkan Album
  $show=mysql_query("SELECT * from tb_album");
  while ($data=mysql_fetch_array($show))
{
$id_alb=$data['ida'];
$nama_alb=$data['nma'];
$no=$no+1;
$tampil1=mysql_query("select * from tb_gambar where ida='$id_alb'");
$jumlah1=mysql_num_rows($tampil1); 

echo "$no. ";
echo "<a href='?page=view_galeri&alb=$id_alb'> $nama_alb, </a>";
echo "Jumlah Foto yang tersimpan sebanyak = $jumlah1";
echo "<br>";
echo "<hr>";
}

//form edit

if (isset ($_GET['edit']) && ($edit=$_GET['edit']) && ($edit!=""))
{
$tampil2=mysql_query("SELECT * from tb_album where ida='$edit'");
while ($data=mysql_fetch_array($tampil2))
{
$id_al=$data['ida'];
$nm_al=$data['nma'];
}
?>
<h3 align="left">Edit Album</h3>
<FORM ACTION="" METHOD="POST" NAME="edit">
<table align="left" cellpadding="0" cellspacing="0" border="0" width="50%">
<tr>
<td width="106"><strong>Nama Album </strong></td>
<td width="11">:</td>
<td width="288"><input type="text" name="nama_alb" size="10" class="form-control" value=<?php echo"$nm_al";?>></td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr>
  <td><input name="kode_alb" type="hidden" value=<?php echo"$id_al";?>></td>
  <td>&nbsp;</td>
  <td><input type="submit" name="edit" value="Update" class="btn btn-success">
  <a href="?page=data_album" style="text-decoration:none;"><input type="button" name="clear" value="Cancel" class="btn btn-danger"/></a>
  </td>
</tr>
</table><br />
</FORM>
<?php } else {?>
<?php }?>
</table><br />
</FORM>

</body>
</html>