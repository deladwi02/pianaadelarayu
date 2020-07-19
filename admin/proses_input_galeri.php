<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$id_struktur = $_POST['id_struktur'];

$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];  

// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis').$foto;

// Set path folder tempat menyimpan fotonya
$path = "images/".$fotobaru;

// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
  
// Proses simpan ke Database  
$query = "INSERT INTO tb_struktur VALUES('".$id_struktur."','".$fotobaru."')";  
$sql = mysqli_query($connect, $query); 
// Eksekusi/ Jalankan query dari variabel $query 
 
if($sql){ // Cek jika proses simpan ke database sukses atau tidak   
 // Jika Sukses, Lakukan :    
 header("location: index.php"); 
 
 // Redirect ke halaman index.php  
 }else{  
   
 // Jika Gagal, Lakukan :    
 echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";    
 }
 }else{  
 
 // Jika gambar gagal diupload, Lakukan :  
 echo "Maaf, Gambar gagal untuk diupload.";  
 }
 ?>