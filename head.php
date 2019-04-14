<?php
include("koneksi.php");
include("library.php");
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
		<li ><a href="/latihan_appl/">Beranda</a>
		<li ><a href="#">Master Data</a>
			<ul>
			<li ><a href="karyawan_data.php">Data Karyawan</a></li>
		</li>
			</ul>
		<li><a href="#" > Laporan</a>
			<ul>
			<li ><a href="karyawan_cetak.php">Cetak Data Karyawan</a></li>
			<ul>
		</li>
	</ul>
	</div>
	</nav>
</div>
</div>
		<div class="container">
			<div class="content">