<?php
include "koneksi2.php";
if($_POST){
	$update = "update tb_gambar set ida='".$_POST['album']."', ketf='".$_POST['deskripsi']."' ";
	if($_FILES['file']['size'] > 0 && $_FILES['file']['error'] == 0){
		$move = move_uploaded_file($_FILES['file']['tmp_name'], "images/".$_FILES['file']['name']);
		if($move){
			$update .= ", namaf='".$_FILES['file']['name']."'";
		}
	}
	$update .= " where idf='".$_POST['id']."'";
	mysql_query($update);
	echo "<script>alert ('Data berhasil di simpan ');document.location='view_galeri.php' </script>";
	exit;
}

?>

<h3 align="center">Edit Galeri MTs Al - Azhar kota Pagar Alam</h3>
<table class="table table-responsive">
<tr>
<form name="form1" action="" method="post" enctype="multipart/form-data">
    <table width="50%"  border="0" align="center">
    <tr>
    <td width="36%"><?php
		$sql = "select * from tb_gambar where idf='".intval($_GET['id'])."'";
		$data = mysql_fetch_array(mysql_query($sql));
		$idalb=$data['ida'];
		?>
		<!-- menampilkan gambar sebelumnya --><br/></td>
    <td width="13%">&nbsp;</td>
    <td width="51%"><img src="images/<?php echo $data['namaf'];?>" alt="" width="200" height="100"/></td>
</tr>
	<tr>
	  <td><div align="right"><strong>Pilih Gambar</strong></div></td>
	  <td><div align="center"><strong>:</strong></div></td>
	  <td><label><input type="file" name="file" id="file"/></label></td>
	  </tr>
	<tr>
	  <td><div align="right"><strong>Pilih Album</strong></div></td>
	  <td><div align="center"><strong>:</strong></div></td>
	  <td><label><select name="album" class="form-control">
<?php
$query = "SELECT * FROM tb_album ORDER BY nma";
$sql = mysql_query ($query);
while ($hasil = mysql_fetch_array ($sql)) {
$selected = ($hasil['ida']==$idalb)?"selected":"";
echo "<option value='$hasil[ida]' $selected>$hasil[nma]</option>";
}
?>
  </select></label></td>
	  </tr>
	
    <tr>
      <td><div align="right"><strong>Deskripsi</strong></div></td>
      <td><div align="center"><strong>:</strong></div></td>
      <td><label><textarea name="deskripsi" id="deskripsi" class="form-control"><?php echo $data['ketf'];?></textarea></label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="hidden" name="id" class="form-control" value="<?php echo $data['idf'];?>"/>
  <input type="submit" name="simpan" id="simpan" class="btn btn-success" value="Update" /></td>
    </tr>
  </table><br />
</form>
