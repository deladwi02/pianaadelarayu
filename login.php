<?php
@session_start();
include "akses/koneksi.php";
?>

<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title>Silahkan Login Disini</title> 
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head> 

<body> 

<div class="row">

<style type="text/css">
<body>
{
font-family : Arial;
font-size : 15px;
}
#utama{
width:200px;
margin:auto;
margin-top:16%;
}
#judul{
padding:20px;
text-align:center;
font-size:20px;
background-color:#FFFFFF;
border-top-right-radius:10px;
border-top-left-radius:10px;
}
#inputan{
background-color: #FFFFFF;
padding:10px;
border:1;
border-bottom-right-radius:15px;
border-bottom-left-radius:15px;
}
input{
text-align:center;
padding:10px;
border:10;
}
.lg{
margin-left:5%;
width:160px;
}
body {
	background: #000;
	
}
</style>

<br /><br />
<div id="utama">
<div id="judul">
Silahkan Login Disini
</div>
<div id="inputan">
<form action="" method="post">
<div>
<input type="text" name="user" placeholder="Username" class="lg" />
</div>
<div style="margin-top:50px;">
<input type="password" name="pass" placeholder="Password" class="lg" />
</div>
<div align="center" style="margin-top:50px;">
<input type="submit" name="batal" value="Batal" class="btn btn-danger" />
<input type="submit" name="login" value="Masuk" class="btn btn-success" />
</div>
</form>


<?php
$user=@$_POST['user'];
$pass=@$_POST['pass'];
$login=@$_POST['login'];

if ($login){
	if ($user=="" || $pass==""){
		?><script type="text/javascript">alert("Username / Password Tidak Boleh Kosong");</script><?php
	} else {
		$sql = mysql_query("SELECT * FROM tb_login WHERE username = '$user' AND password = '$pass'") or die (mysql_error());
		$data = mysql_fetch_array($sql);
		$cek = mysql_num_rows($sql);
		if ($cek >=1){
			if($data['level'] == "admin"){
			@$_SESSION['admin'] = $data['id_user'];
			header("location:admin/index.php");
			}else if($data['level'] == "warga"){
			@$_SESSION['warga'] = $data['id_user'];
			header("location:warga/index.php");
			}else if($data['level'] == "lurah"){
			@$_SESSION['lurah'] = $data['id_user'];
			header("location:lurah/index.php");
			}
		}else{
		?><script type="text/javascript">alert("Maaf, Log In Tidak Berhasil...!!!!, cek kembali Username dan Password");</script><?php
		}
	}
}
?>
</div>

</body>
</html>