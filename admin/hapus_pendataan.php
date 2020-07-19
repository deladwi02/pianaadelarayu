<?php 
include "koneksi.php";

$id_pendataan = $_GET['id_pendataan'];
$query = mysql_query("delete from tb_pendataan WHERE id_pendataan ='$id_pendataan'");
	echo "<meta http-equiv='refresh' content='0;url=?page=view_pendataan'>";
	
?>