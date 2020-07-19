<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title>PUPR</title> 
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<style>
		.clockStyle
{
background-color:#426edd;
border:#999 2px inset;
padding:10px;
color:#0FF;
font-family:"arial black";
font-size:16px
font-weight:bold;
letter-spacing:2px;
display:inline;
}
</style>

<div class="container bg-active"> 
<div class="row">
<div class="col-md-12">
<img src="img/headerdinas.jpg" width="100%"></div>
</div>

<!--menu bar-->
<div class="progress-bar-active">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>      </button>
        
        
        
                                            <p align="center">DINAS PEKERJAAN UMUN DAN PENATAAN RUANG <br><br>
</p>
</div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="col-md-12 bg-primary">
      <ul class="nav navbar-nav">
      <li class="#"><a href="index.php"><span class="glyphicon glyphicon-home" ></span> Home</a></li>
      <li class="dropdown">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profil <span class="caret"></span></a>
          	<ul class="dropdown-menu">
            <li><a href="?page=view_sejarah">Sejarah Dinas PUPR</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="?page=view_struktur">Struktur Organisasi</a></li>
            </ul>
        </li>
        <li><a href="?page=data_berita" >Berita </a></li>
          <li><a href="?page=data_album" >Galery </a></li>
        <li class="dropdown">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Informasi <span class="caret"></span></a>
          	<ul class="dropdown-menu">
            <li><a href="?page=view_pegawai">Data Pegawai PUPR</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="?page=view_pelayanan">Data Pelayanan</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="?page=view_pendataan">Data Pendataan</a></li>
            </ul>
        </li>
        
        <li><a href="?page=input_bukutamu" >Buku Tamu </a></li>
       </ul>
       <ul class="nav navbar-nav navbar-left">
        <li><a href="login.php"> Login <span class="glyphicon glyphicon-log-in"></span></a></li>
        </ul>
          </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
<!--batas menu bar-->

<script>
$(document).ready(function(){
$(".dropdown").hover(            
function() {
$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
$(this).toggleClass('open');        
},
function() {
$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
$(this).toggleClass('open');       
}
);
});
</script>


<div class="row">
<div align="center" class="col-md-3">

<?php include "jam.php"; ?><br>
<?php include "kalender.php"; ?><br>
</div>

<div class="col-md-6">
<?php include "content.php"; ?><hr>
</div>

<div class="col-md-3">
<?php include "link.php"; ?><br>
<?php include "baner.php"; ?><br>
</div>
</div>

<div class="col-md-12 bg-primary"><hr>
<p align="center">
Copy Rights &copy; 2020 @piana.p@Rayurafika2 @delladwiseptianti <br>
</p>
</div>

</div>
</div>
</body> 
</html> 