<?php 
include "koneksi.php";

$id_pegawai = $_GET['id_pegawai'];
$query = mysql_query("delete from tb_pegawai WHERE id_pegawai ='$id_pegawai'");
	echo "<meta http-equiv='refresh' content='0;url=?page=view_pegawai'>";
	
?>