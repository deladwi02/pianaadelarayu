<?php include "koneksi2.php"; ?>

<?php
$id_pegawai = $_GET['id_pegawai'];
$query = mysql_query("SELECT * FROM tb_pegawai WHERE id_pegawai ='$id_pegawai'");
$data = mysql_fetch_array($query);
?>
<h3 align="center"><b>EDIT PEGAWAI</b></h3><hr />
<form id="form1" name="form1" method="post" action="">
<table align="center" width="50%" border="0">
  <tr>
    <td width="36%">&nbsp;</td>
    <td width="3%">&nbsp;</td>
    <td width="61%">&nbsp;</td>
  </tr>
  <tr>
    <td>NIP</td>
    <td><b>:</b></td>
    <td>
      <label>
        <input name="nip" type="text" class="form-control" id="nip" value="<?php echo $data['nip']; ?>" size="35"/>
        </label>    </td>
  </tr>
    <tr>
    <td>Nama</td>
    <td><b>:</b></td>
    <td>
      <label>
      <input name="nama" type="text"class="form-control" id="nama" value="<?php echo $data['nama']; ?>" size="35" />
      </label>    </td>
  </tr>
  <tr>
    <td>Pangkat</td>
    <td><b>:</b></td>
    <td>
      <label>
      <select name="pangkat" id="pangkat">
        <option><?php echo $data['pangkat']; ?></option>
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
    <td>Jabtan</td>
    <td><b>:</b></td>
    <td>
      <label>
      <input name="jabatan" type="text"class="form-control" id="jabatan" value="<?php echo $data['jabatan']; ?>" size="35" />
      </label>    </td>
  </tr>
  <tr>
    <td>Tempat Lahir</td>
    <td><b>:</b></td>
    <td>
      <label>
        <input name="tempat" type="text"class="form-control" id="tempat" value="<?php echo $data['tempat']; ?>" />
        </label>    </td>
  </tr>
  <tr>
    <td>Tanggal Lahir</td>
    <td><strong>:</strong></td>
        <td>
      
	  <?php
	  //memecah tanggal dari mysql untuk tanggal lahir
	  //menggunakan separator
	  $PecahTglMulai=explode("-",$data['tanggal']);
	  $tgl_mulai=$PecahTglMulai[2];
	  $bln_mulai=$PecahTglMulai[1];
	  $thn_mulai=$PecahTglMulai[0];
		
	  //konfigurasi untuk tgl_lahir
	  
	  echo "<select name='tgl'>";
	  
	  for ($tgl=1;$tgl<=31;$tgl++)
	  	{
			if($tgl==$tgl_mulai){
				echo "<option value=$tgl selected>$tgl</option>";}
			else{
				echo "<option value=$tgl>$tgl</option>";}
		}
	  echo "</select>";
	  echo"-";
	  
	  //konfigurasi pilihan combobox untuk bulan lahir
	  echo "<select name ='bln'>";
	  $bulan=array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
	  for ($bln=1;$bln<=12;$bln++)
	  {
		  if($bln ==$bln_mulai){
			  echo "<option value=$bln selected>$bulan[$bln]</option>";}
		else{
			echo  "<option value =$bln>$bulan[$bln]</option>";}
	  }
	  echo "</select>";
	  echo "-";
	  
	  //konfirmasi pilihan untuk tahun lahir
	  echo "<select name='thn'>";
	  for ($thn=1980;$thn <=2016;$thn++)
	  {
		  if ($thn==$thn_mulai){
			  echo "<option value=$thn selected>$thn</option>";}
			  else{
				  echo "<option  value=$thn>$thn</option>";}
	  }
	  echo"</select>";
	  ?> </td>
 </tr>

  <tr>
    <td>Jenis Kelamin</td>
    <td><b>:</b></td>
    <td>
        <label>
        <select name="jekel" id="jekel"class="form-control">
        <option><?php echo $data['jekel']; ?></option>
          <option>Laki-laki</option>
          <option>Perempuan</option>
        </select>
        </label>    </td>
  </tr>
 
  <tr>
    <td>Alamat</td>
    <td><b>:</b></td>
    <td>
      <label>
        <textarea name="alamat" id="alamat" cols="45" rows="5"class="form-control"><?php echo $data['alamat']; ?></textarea>
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
	$nip    	  = $_POST['nip'];
	$nama	      = $_POST['nama'];
	$pangkat      = $_POST['pangkat'];
	$jabatan      = $_POST['jabatan'];
	$tempat       = $_POST['tempat'];
	$tanggal      = $_POST['thn'].'-'.$_POST['bln'].'-'.$_POST['tgl'];
	$jekel        = $_POST['jekel'];
	$alamat       = $_POST['alamat'];
	
	$edit = mysql_query("UPDATE tb_pegawai SET 
	nip		     = '$nip',
	nama	     = '$nama',
	pangkat		 = '$pangkat',
	jabatan		 = '$jabatan',
	tempat       = '$tempat',
	tanggal      = '$tanggal',
	jekel        = '$jekel',
	alamat       = '$alamat'
	WHERE id_pegawai = '$id_pegawai'");

	if ($edit) {
	echo "<script>alert ('Data berhasil di perbaiki ');document.location='?page=view_pegawai' </script>";}
		else {echo "<script>alert ('Data gagal di perbaiki ');document.location='?page=view_pegawai' </script>";}
}
?>