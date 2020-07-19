<?php 
include "koneksi.php";

$id_pelayanan = $_GET['id_pelayanan'];
$query = mysql_query("delete from tb_pelayanan WHERE id_pelayanan ='$id_pelayanan'");
	echo "<meta http-equiv='refresh' content='0;url=?page=view_pelayanan'>";
	
?>