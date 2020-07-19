<?php include "koneksi2.php"; 

$tampil=mysql_query("SELECT * from tb_gambar order by idf desc");?>


<h2 align="center">Foto - Foto Dinas Pupr Kota Pagar Alama ( <?php $jumlah=mysql_num_rows($tampil); echo"$jumlah";?> foto )</h2>
<table align="center" width="100%" border="0">
  <tr>
  </tr>
</table><p>
<?php 
$dataPerPage = 3; //jumlah foto dalam satu halaman

// apabila $_GET['page'] sudah didefinisikan, gunakan nomor halaman tersebut,
// sedangkan apabila belum, nomor halamannya 1.

if(isset($_GET['hal']))
{
    $noPage = $_GET['hal'];
}
else $noPage = 1;

// perhitungan offset

$offset = ($noPage - 1) * $dataPerPage;

// query SQL untuk menampilkan data perhalaman sesuai offset

if (isset($_GET['alb']) && ($id_al=$_GET['alb']) && ($id_al !="")){
$hasil		=mysql_query("SELECT * FROM tb_album WHERE ida='$id_al'") or die ('ERROR');
$data 		= mysql_fetch_array ($hasil);
$nama_alb	=$data['nma']; echo "<h2>Foto Album: $nama_alb</h2>";
$query		="SELECT * FROM tb_gambar WHERE ida=$id_al order by idf desc LIMIT $offset, $dataPerPage";
$que   		= "SELECT COUNT(*) AS jumData FROM tb_gambar WHERE idf=$id_al";}
else {$query="SELECT * FROM tb_gambar order by idf desc LIMIT $offset, $dataPerPage";
$que   		= "SELECT COUNT(*) AS jumData FROM tb_gambar";
$id_al		="";}
$result 	= mysql_query($query) or die('Error');

// menampilkan data 
?>
<table align="center">
		<tr>
		<?php
$i = 1;
while ($row = mysql_fetch_array ($result)) 
{?>
<td>
			<a href="admin/images/<?php echo $row['namaf'];?>">
			<img src="admin/images/<?php echo $row['namaf'];?>" alt="" width="200" height="150"/></a>
			<br/><?php echo $row['ketf'];?><br/> Diupload tanggal: <?php echo $row['tgl'];?><br>
			
</td>
		<?php
			if($i % 3 == 0){
				echo '</tr><tr>';
			}
			$i++;
		}
		?>
		</tr>
	</table>
<?php 
// mencari jumlah semua data dalam tabel

$hasi  = mysql_query($que);
$data     = mysql_fetch_array($hasi);

$jumData = $data['jumData'];

// menentukan jumlah halaman yang muncul berdasarkan jumlah semua data

$jumPage = ceil($jumData/$dataPerPage);

