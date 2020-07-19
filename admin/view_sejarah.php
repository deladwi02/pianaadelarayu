<?php include "koneksi.php"; ?>
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
	$query = mysql_query("SELECT * FROM tb_sejarah ORDER BY id_sejarah asc");
	$no = 1;
?>
<h3 align="center"><strong>SEJARAH</strong></h3>
<hr>

 <?php while ($data = mysql_fetch_array($query)){
	?>

<table width="100%">
  <tr>
   <td align="center" width="144">
    <form action="?page=edit_sejarah&id_sejarah=<?php echo $data['id_sejarah']; ?>" method="post" >
      <label>
        <button type="submit" name="button2" id="button2" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span> Edit </button>
        </label>
    </form></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr></table>
<br>
<table width="100%" class="table-bordered table-hover">
  
  
 

    <tr>
    <td width="830" align="center"><?php echo $data['isi']; ?></td>
  </tr>
<?php } ?>  
</table>
</body>
</html>