<?php
$db_host = "localhost";
$db_user = "id9273927_admin";
$db_pass = "NetBr0k3r64";
$db_name = "id9273927_pegawai";

$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_errno()){
	echo 'Gagal melakukan koneksi ke database : '.mysqli_connect_error();
}
?>