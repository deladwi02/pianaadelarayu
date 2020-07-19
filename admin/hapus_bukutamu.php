<?php 
include "koneksi2.php";

$id_buku = $_GET['id_buku'];
$query = mysql_query("delete from tb_buku WHERE id_buku ='$id_buku'");
	echo "<meta http-equiv='refresh' content='0;url=?page=view_bukutamu'>";
	
?>