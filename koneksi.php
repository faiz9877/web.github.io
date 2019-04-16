<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "M4K4nM4L4m";
$db_name = "uniska_latihan_app1";

$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_errno()){
	echo 'Gagal melakukan koneksi ke database : '.mysqli_connect_error();
}
?>