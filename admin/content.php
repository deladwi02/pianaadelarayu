<?php
switch(@$_GET['page'])
{
// guru
case 'view_guru':
      include("view_guru.php");
	  break;
case 'input_guru':
      include("input_guru.php");
	  break;
case 'edit_guru':
      include("edit_guru.php");
	  break;
case 'hapus_guru':
      include("hapus_guru.php");
	  break;
// profil
case 'view_sejarah':
      include("view_sejarah.php");
	  break;
case 'input_sejarah':
      include("input_sejarah.php");
	  break;
case 'edit_sejarah':
      include("edit_sejarah.php");
	  break;
// pegawai
case 'view_pegawai':
      include("view_pegawai.php");
	  break;
case 'input_pegawai':
      include("input_pegawai.php");
	  break;
case 'edit_pegawai':
      include("edit_pegawai.php");
	  break;
case 'hapus_pegawai':
      include("hapus_pegawai.php");
	  break;
// struktur organisasi
case 'view_struktur':
      include("view_struktur.php");
	  break;
case 'input_struktur':
      include("input_struktur.php");
	  break;
case 'edit_struktur':
      include("edit_struktur.php");
	  break;
case 'proses_input_struktur':
      include("proses_input_struktur.php");
	  break;
case 'proses_edit_struktur':
      include("proses_edit_struktur.php");
	  break;
// Berita
case 'view_berita':
      include("view_berita.php");
	  break;
case 'data_berita':
      include("data_berita.php");
	  break;
case 'berita_lengkap':
      include("berita_lengkap.php");
	  break;
case 'input_berita':
      include("input_berita.php");
	  break;
case 'arsip_berita':
      include("arsip_berita.php");
	  break;
case 'edit_berita':
      include("edit_berita.php");
	  break;
case 'hapus_berita':
      include("hapus_berita.php");
	  break;
// Pelayanan
case 'view_pelayanan':
      include("view_pelayanan.php");
	  break;
case 'input_pelayanan':
      include("input_pelayanan.php");
	  break;
case 'hapus_pelayanan':
      include("hapus_pelayanan.php");
	  break;
case 'proses_input_pelayanan':
      include("proses_input_pelayanan.php");
	  break;
// Pendataan
case 'view_pendataan':
      include("view_pendataan.php");
	  break;
case 'input_pendataan':
      include("input_pendataan.php");
	  break;
case 'hapus_pendataan':
      include("hapus_pendataan.php");
	  break;
case 'proses_input_pendataan':
      include("proses_input_pendataan.php");
	  break;
// Buku Tamu
case 'view_bukutamu':
      include("view_bukutamu.php");
	  break;
case 'hapus_bukutamu':
      include("hapus_bukutamu.php");
	  break;
case 'bukutamu':
      include("bukutamu.php");
	  break;
case 'input_bukutamu':
      include("input_bukutamu.php");
	  break;
// Galeri
case 'view_galeri':
      include("view_galeri.php");
	  break;
case 'proses_edit_galeri':
      include("proses_edit_galeri.php");
	  break;
case 'input_galeri':
      include("input_galeri.php");
	  break;
case 'hapus_galeri':
      include("hapus_galeri.php");
	  break;
case 'edit_galeri':
      include("edit_galeri.php");
	  break;
case 'data_album':
      include("data_album.php");
	  break;	  
// Sambutan
case 'view_sambutan':
      include("view_sambutan.php");
	  break;
case 'edit_sambutan':
      include("edit_sambutan.php");
	  break;
case 'proses_edit_sambutan':
      include("proses_edit_sambutan.php");
	  break;
case 'edit_sambutan':
      include("edit_sambutan.php");
	  break;
// Baner
case 'view_baner':
      include("view_baner.php");
	  break;
case 'edit_baner':
      include("edit_baner.php");
	  break;
case 'proses_edit_baner':
      include("proses_edit_baner.php");
	  break;
	  	  	  	  	  	  
default:
      include("home.php");
}
?>