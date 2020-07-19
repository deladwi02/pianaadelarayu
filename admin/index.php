<?php
@session_start();
include "../akses/koneksi.php";

if(@$_SESSION['admin'] || @$_SESSION['guru'] || @$_SESSION['kepsek']){
?>

<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title>PUPR</title> 
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<style type="text/css">
<!--
.style4 {font-family: Georgia, "Times New Roman", Times, serif}
.style5 {
	font-size: 10px
}
.style6 {color: #A52A2A}
-->
</style>
</head> 
<body bgcolor="#A52A2A">  
<div class="row">
<div class="col-md-12">
<img src="img/a.jpg" width="100%" />
</div>
<br />
<hr />
<div class="row">
<div class="col-md-2">
<?php include "list_menu.php"; ?>
</div>
<div align="center" class="col-md-10">
<?php include "content.php"; ?>
</div>
</div>
<br>

<div  align="center" class="row">
<div class="col-md-12 bg-success">
<p>
Copyright @ 2020 All Reserverd<br>@Piana.p @RayuRafika @Delladwiseptianti<br><hr>
</p>
</div>
</div>
</body> 
</html> 

<?php
}else {
header("location: login.php");
}
?>