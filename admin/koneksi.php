<?php $db_host = 'localhost';
$db_name = 'uniska_latihan_app1'; //sesuaikan dengan nama database yang digunakan
$db_user = 'root';
$db_pass = '';
$link = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$link) {
   die("Gagal Terkoneksi ".mysqli_connect_errno()." - ". mysqli_connect_error());
   exit();
 }
 ?>