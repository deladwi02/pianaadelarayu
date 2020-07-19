<?php include "koneksi.php"; ?>

<h3 align="center"><b>INPUT PEGAWAI</b></h3><hr />
<form id="form1" name="form1" method="post" action="">
<table align="center" width="50%" border="0">
  
  
   <tr>
    <td width="36%"><strong>NIP</strong></td>
    <td width="3%"><b>:</b></td>
    <td width="61%">
      <label>
        <input name="nip" type="text" class="form-control" id="nip" size="35"/>
        </label>    </td>
  </tr>
  <tr>
    <td><strong>Nama</strong></td>
    <td><b>:</b></td>
    <td>
      <label>
      <input name="nama" type="text"class="form-control" id="nama" size="35" />
      </label>    </td>
  </tr>
  <tr>
    <td><strong>Pangkat/Golongan</strong></td>
    <td><b>:</b></td>
    <td>
      <label>
      <select name="pangkat" id="pangkat">
        <option>Pembina Utama/IV.e</option>
        <option>Pembina Utama Madya/IV.d</option>
        <option>Pembina Utama Muda/IV.c</option>
        <option>Pembina Tingkat I/IV.b</option>
        <option>Pembina/IV.a</option>
        <option>Penata Tingkat I/III.d</option>
        <option>Penata/III.c</option>
        <option>Penata Muda Tingkat I/III.b</option>
        <option>Penata Muda/III.a</option>
        <option>Pengatur Tingkat I/II.d</option>
        <option>Pengatur/II.c</option>
        <option>Pengatur Muda Tingkat I/II.b</option>
        <option>Pengatur Muda/II.a</option>
        <option>Juru Tingkat I/I.d</option>
        <option>Juru/I.c</option>
        <option>Juru Muda Tingkat I/I.b</option>
        <option>Juru Muda/I.a</option>
      </select>
      </label>    </td>
  </tr>
   <tr>
    <td><strong>Jabatan</strong></td>
    <td><b>:</b></td>
    <td>
      <label>
      <input name="jabatan" type="text"class="form-control" id="jabatan" size="35" />
      </label>    </td>
  </tr>
  <tr>
    <td><strong>Tempat Lahir</strong></td>
    <td><b>:</b></td>
    <td>
      <label>
        <input name="tempat" type="text" id="tempat"class="form-control" />
        </label>    </td>
  </tr>
  <tr>
    <td><strong>Tanggal Lahir</strong></td>
    <td><strong>:</strong></td>
    <td><label>
        <select name="tgl" id="tgl">
          <option>01</option>
          <option>02</option>
          <option>03</option>
          <option>04</option>
          <option>05</option>
          <option>06</option>
          <option>07</option>
          <option>08</option>
          <option>09</option>
          <option>10</option>
          <option>11</option>
          <option>12</option>
          <option>13</option>
          <option>14</option>
          <option>15</option>
          <option>16</option>
          <option>17</option>
          <option>18</option>
          <option>19</option>
          <option>20</option>
          <option>21</option>
          <option>22</option>
          <option>23</option>
          <option>24</option>
          <option>25</option>
          <option>26</option>
          <option>27</option>
          <option>28</option>
          <option>29</option>
          <option>30</option>
          <option>31</option>
        </select>
    -
    <select name="bln" id="bln">
      <option value="01">Januari</option>
      <option value="02">Februari</option>
      <option value="03">Maret</option>
      <option value="04">April</option>
      <option value="05">Mei</option>
      <option value="06">Juni</option>
      <option value="07">Juli</option>
      <option value="08">Agustus</option>
      <option value="09">September</option>
      <option value="10">Oktober</option>
      <option value="11">November</option>
      <option value="12">Desember</option>
    </select>
	-
    <select name="thn" id="thn">
      <option>1960</option>
      <option>1961</option>
      <option>1962</option>
      <option>1963</option>
      <option>1964</option>
      <option>1965</option>
      <option>1966</option>
      <option>1967</option>
      <option>1968</option>
      <option>1969</option>
      <option>1970</option>
      <option>1971</option>
      <option>1972</option>
      <option>1973</option>
      <option>1974</option>
      <option>1975</option>
      <option>1976</option>
      <option>1977</option>
      <option>1978</option>
      <option>1979</option>
      <option>1980</option>
      <option>1981</option>
      <option>1982</option>
      <option>1983</option>
      <option>1984</option>
      <option>1985</option>
      <option>1986</option>
      <option>1987</option>
      <option>1988</option>
      <option>1989</option>
      <option>1990</option>
      <option>1991</option>
      <option>1992</option>
      <option>1993</option>
      <option>1994</option>
      <option>1995</option>
      <option>1996</option>
      <option>1997</option>
      <option>1998</option>
      <option>1999</option>
      <option>2000</option>
      <option>2001</option>
      <option>2002</option>
      <option>2003</option>
      <option>2004</option>
      <option>2005</option>
      <option>2006</option>
      <option>2007</option>
      <option>2008</option>
      <option>2009</option>
      <option>2010</option>
      <option>2011</option>
      <option>2012</option>
      <option>2013</option>
      <option>2014</option>
      <option>2015</option>
      <option>2016</option>
    </select>
    </label></td>
  </tr>

  <tr>
    <td><strong>Jenis Kelamin</strong></td>
    <td><b>:</b></td>
    <td>
        <label>
        <select name="jekel" id="jekel"class="form-control">
          <option>Laki-laki</option>
          <option>Perempuan</option>
        </select>
        </label>    </td>
  </tr>

  <tr>
    <td><strong>Alamat</strong></td>
    <td><b>:</b></td>
    <td>
      <label>
        <textarea name="alamat" id="alamat" cols="45" rows="5"class="form-control"></textarea>
        </label>    </td>
  </tr>
  
  <tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>
  <input name="simpan" type="submit" class="btn btn-success" id="simpan" value="Simpan">
  <a href="?page=view_pegawai"><input type="button" value="Batal" class="btn btn-danger"></a></td>
</tr>  
</table>
</form>

<?php
if (isset($_POST['simpan'])){
	$nip 		= $_POST['nip'];
	$nama 		= $_POST['nama'];
	$pangkat	= $_POST['pangkat'];
	$jabatan 	= $_POST['jabatan'];
	$tempat 	= $_POST['tempat'];
	$tanggal 	= $_POST['thn'].'-'.$_POST['bln'].'-'.$_POST['tgl'];
	$jekel 		= $_POST['jekel'];
	$alamat 	= $_POST['alamat'];
	
	$simpan = mysql_query("INSERT INTO tb_pegawai (nip,nama,pangkat,jabatan,tempat,tanggal,jekel,alamat) VALUES ('$nip','$nama','$pangkat','$jabatan','$tempat','$tanggal','$jekel','$alamat')");
	
	if ($simpan) {
	echo "<script>alert ('Data berhasil di simpan ');document.location='?page=view_pegawai' </script>";}
		else {echo "<script>alert ('Data gagal di simpan ');document.location='?page=view_pegawai' </script>";}
}
?>
