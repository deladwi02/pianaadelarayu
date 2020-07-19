<?php
$host='localhost';
$user='root';//username
$pass='';//password root
$db='db_pupr';//nama database
$ok=mysql_connect($host,$user,$pass) or die ('gagal Sanak'.mysql_error());//perintah menghubungkan ke server
mysql_select_db($db,$ok);//perintah menyeleksi database

?>