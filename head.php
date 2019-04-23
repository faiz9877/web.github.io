<?php
include("library.php");
session_start();
$cek=basename($_SERVER["SCRIPT_FILENAME"], '.php');
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  $usernich="<li><a href='#'>Profile</a><ul><li ><a href='reset_password'>Ubah Sandi Saya</a></li><li><a href='admin'>Admin Portal</a></li><li><a href='logout'>Logout</a></li></ul></li>";
  if($cek=="login"){
    header('location:admin');
  }
}else{
  $usernich="<li><a href='login'>Login</a></li>";
  if($cek=="karyawan_data"){
    header('location:login');
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Praktikum Pemerograman Web</title>
	<link href="css/site.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	
</head>
<body>
<div class="container">
<div class="content">
	<nav class="navbar navbar-inverse ">
	<div id="navbar" >
	<ul class="dropDownMenu">
		<li ><a href="index.php">Beranda</a>
		<li ><a href="#">Master Data</a>
			<ul>
			<li ><a href="karyawan_data">Data Karyawan</a></li>
		</li>
			</ul>
		<li><a href="#" > Laporan</a>
			<ul>
			  <li ><a href="karyawan_cetak">Cetak Data Karyawan</a></li>
			</ul>
		</li>
    <!-- ini punya user -->
      <?php echo $usernich; ?>
    <!-- akhir punya user -->
	</ul>
	</div>
	</nav>
</div>
</div>
<!-- <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <!
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('img/su4.jpg')">
            <div class="carousel-caption d-none d-md-block">

            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('img/su3.jpg')">
            <div class="carousel-caption d-none d-md-block">

            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('img/su5.jpg')">
            <div class="carousel-caption d-none d-md-block">

            </div>
          </div>
          <!-- Slide four - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('img/f1.png')">
            <div class="carousel-caption d-none d-md-block">

            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>
		<div class="container">
			<div class="content">