<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tambah Foto</title>
</head>
<body>
<table align="center">
<tr>
<?php
	include "koneksi2.php";
	$namafolder="images/"; //tempat menyimpan file
	if (isset($_POST['kirim'])) {
	$album_ft=$_POST['album'];
	for($i=0; $i<count($_FILES['nama_file']); $i++) 
	{
		if (!empty($_FILES["nama_file"]["tmp_name"][$i]))
		{
			$tgl=date("His");
			$jenis_gambar=$_FILES['nama_file']['type'][$i];
			$ket_gambar=$_POST['ket'][$i];
			
			if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
			{           
				$gambar = $namafolder.$tgl.basename($_FILES['nama_file']['name'][$i]);
				$nama_gbr= $tgl.basename($_FILES['nama_file']['name'][$i]);      
				if (move_uploaded_file($_FILES['nama_file']['tmp_name'][$i], $gambar)) {
					//tampilkan ke layar
					echo "<td><img src=\"$namafolder$nama_gbr\" width=\"100\" alt=\"$ket_gambar\" /><br />";
					echo "".$ket_gambar."<br /></td>";
					//proses menyimpan database berikut ini 
					mysql_query("insert into tb_gambar(ida,namaf,ketf,tgl) values('$album_ft','$nama_gbr','$ket_gambar',now())") or die(mysql_error());
					
					} 
		   } 
		   else 
		   {
				echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png<br />";
		   }
	   }
	}
	echo "<td>Galeri berhasil disimpan<a href=\"?page=data_album\">  OK</a></td>";
	}
?>
		</tr>
	</table>
<form action="" method="post" enctype="multipart/form-data">
  <h3 align="center">Input Galeri Dinas PPKBP3A Kota Pagar Alam  </h3>
  <table width="50%"  border="0" align="center">
    <tr>
   <td>&nbsp;</td>
      <td align="center"><b>Pilih Album  : </b></td>
      <td><select name="album" class="form-control">
      <?php
$query = "SELECT ida, nma FROM tb_album ORDER BY nma";
$sql = mysql_query ($query);
while ($hasil = mysql_fetch_array ($sql)) {
echo "<option value='$hasil[ida]'>$hasil[nma]</option>";
}
?>
    </select></td></tr>
	<tr>
      <td width="8%"><div align="center"><strong>No.</strong></div></td>
      <td width="48%"><div align="left"><strong>File Gambar</strong></div></td>
      <td width="44%"><div align="left"><strong>Keterangan Gambar </strong></div></td>
    </tr>
    <tr>
      <td><div align="center">1.</div></td>
      <td><input name="nama_file[]" type="file"  /></td>
      <td><label><textarea name="ket[]" class="form-control"></textarea></label></td>
    </tr>
    <tr>
      <td><div align="center">2.</div></td>
      <td><input name="nama_file[]" type="file" /></td>
      <td><label><textarea name="ket[]" class="form-control"></textarea></label></td>
    </tr>
    <tr>
      <td><div align="center">3.</div></td>
      <td><input name="nama_file[]" type="file" /></td>
      <td><label><textarea name="ket[]" class="form-control"></textarea></label></td>
    </tr>
    <tr>
      <td><div align="center"></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <p align="center">
    <input name="kirim" type="submit" id="btnKirim" value="Kirim File" class="btn btn-success" />
  <a href="?page=data_album"><input type="button" value="Batal" class="btn btn-danger"></a>
</form>
</body>
</html>
