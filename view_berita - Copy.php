<?php include "koneksi2.php"; ?>
<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title>Dinas PPKBP3A Kota Pagar Alam</title> 
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="ckeditor/ckeditor/ckeditor.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
	$query = mysql_query("SELECT * FROM tb_berita ORDER BY id_berita asc");
	$no = 1;
?>
<h3 align="center"><strong>BERITA</strong></h3>
<hr>
<br>
<table width="100%" class="table-bordered table-hover">
  <tr bgcolor="#FFFFFF">
    <td width="113"bordercolor="#0033CC"><div align="center"><strong>No</strong></div></td>
    <td width="230" bordercolor="#0033CC"><div align="center"><strong>Judul Berita</strong></div></td>
    <td width="830" bordercolor="#0033CC"><div align="center"><strong>Headline</strong></div></td>
    <td width="830" bordercolor="#0033CC"><div align="center"><strong>Isi</strong></div></td>
    <td width="830" bordercolor="#0033CC"><div align="center"><strong>Pengirim</strong></div></td>
    <td width="830" bordercolor="#0033CC"><div align="center"><strong>Tanggal</strong></div></td>
    </tr>
  
  <?php while ($data = mysql_fetch_array($query)){
	?>

    <tr>
    <td align="center"><?php echo $no++; ?></td>
    <td align="center"><?php echo $data['judul']; ?></td>
    <td align="center"><?php echo $data['headline']; ?></td>
    <td align="center"><?php echo $data['isi']; ?></td>
    <td align="center"><?php echo $data['pengirim']; ?></td>
    <td align="center"><?php echo $data['tanggal']; ?></td>
    <td align="center" width="144">
    <form action="?page=edit_berita&id_berita=<?php echo $data['id_berita']; ?>" method="post" >
      <label>
        <button type="submit" name="button2" id="button2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span> Edit </button>
        </label>
    </form></td>
  </tr>
<?php } ?>  
</table>
</body>
</html>