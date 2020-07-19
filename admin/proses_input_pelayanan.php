<?php include "koneksi.php";
// Baca lokasi file sementar dan nama file dari form (fupload)
$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file   = $_FILES['fupload']['name'];

// Tentukan folder untuk menyimpan file
$folder = "files/$nama_file";

// tanggal sekarang
$tgl_upload = date("Ymd");

// Apabila file berhasil di upload
if (move_uploaded_file($lokasi_file,"$folder")){

  echo "<script>alert ('Nama File : $nama_file sukses di upload');</script>";
  echo "<meta http-equiv='refresh' content='0;url=?page=view_pelayanan'>";
  // Masukkan informasi file ke database


  $query = "INSERT INTO tb_pelayanan (nama_file,deskripsi, tanggal)
            VALUES('$nama_file','$_POST[deskripsi]','$tgl_upload')";
            
  mysql_query($query);
}
else{
  echo "File gagal di upload";
}
?>