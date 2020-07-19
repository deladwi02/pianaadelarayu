<?php
include "koneksi2.php";
if(isset($_GET['id']))
{
	$id = (int) $_GET['id'];
	$namafolder="images/"; //tempat menyimpan file
	$sql = "select * from tb_gambar where idf='$id'";
	$result = mysql_query($sql);
	if(mysql_num_rows($result) > 0 )
	{
		$data = mysql_fetch_array($result);
		//delete file
		@unlink($namafolder.$data['namaf']);
		//delete data di database
		mysql_query("delete from tb_gambar where idf='$id'");
	}
} 
header("Location: ?page=view_galeri");
?>