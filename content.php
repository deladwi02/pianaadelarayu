<?php

switch(@$_GET['page'])
{
//link Sejarah
case 'view_sejarah':
      include("view_sejarah.php");
	  break;


//link struktur organisasi 
case 'view_struktur':
      include("view_struktur.php");
	  break;
	  	  
//link bukutamu 
case 'input_bukutamu':
      include("input_bukutamu.php");
	  break;

	  
//link Berita
case 'data_berita':
      include("data_berita.php");
	  break;
case 'berita_lengkap':
      include("berita_lengkap.php");
	  break;


//link pegawai
case 'view_pegawai':
      include("view_pegawai.php");
	  break; 
case 'datalengkap_pegawai':
      include("datalengkap_pegawai.php");
	  break; 
case 'lengkap_sambutan':
      include("lengkap_sambutan.php");
	  break; 
	  
//link pelayanan
case 'view_pelayanan':
      include("view_pelayanan.php");
	  break; 
	  
//link pendataan
case 'view_pendataan':
      include("view_pendataan.php");
	  break; 
	  
//link galeri 
case 'view_galeri':
      include("view_galeri.php");
	  break; 
case 'data_album':
      include("data_album.php");
	  break; 

//link registrasi
case 'login':
      include("login.php");
	  break; 

default:
      include("home.php");
}
?>

</body>
</html>