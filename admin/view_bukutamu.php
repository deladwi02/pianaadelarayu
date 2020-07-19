<?php include "koneksi2.php"; ?>

<style type="text/css">
<!--
.style6 {
	color: #CCCCCC;
	font-weight: bold;
}
-->
</style>
<?php
	$tampil = mysql_query("SELECT * FROM tb_buku ORDER BY id_buku DESC");
	$no = 1;
?>
<h3 align="center"><b>DAFTAR TAMU Dinas PPKBP3A KOTA PAGAR ALAM</b></h3><hr>
  
<table class="table table-hover" width="100%">
  <tr bgcolor="#000066">
    <td width="3%" height=50"bordercolor="#0033CC"><div align="center" class="style6">No</div></td>
    <td width="15%" bordercolor="#0033CC"><div align="center" class="style6">Nama</div></td>
    <td width="20%" bordercolor="#0033CC"><div align="center" class="style6">Email</div></td>
    <td width="53%" bordercolor="#0033CC"><div align="center" class="style6">Pesan</div></td>
    <td width="53%" bordercolor="#0033CC"><div align="center" class="style6">Tanggal</div></td>
    <td width="9%" bordercolor="#0033CC"><div align="center" class="style6">Aksi</div></td>
  </tr>
  
  <?php 
  while ($data=mysql_fetch_array($tampil)){
  ?>

    <tr>
    <td align="center"><?php echo $no++; ?></td>
    <td align="center"><?php echo $data['nama']; ?></td>
    <td align="center" width="14%"><?php echo $data['email']; ?></td>
    <td align="justify" width="17%"><?php echo $data['pesan']; ?></td>
    <td align="justify" width="17%"><?php echo $data['tanggal']; ?></td>
    <td align="center" width="6%">
      <form action="?page=hapus_bukutamu&id_buku=<?php echo $data['id_buku']; ?>" method="post" >
      <label>
        <button type="submit" name="button2" id="button2" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Hapus</button>
        </label>
    </form>    </td>
  </tr>
<?php } ?>  
</table>
