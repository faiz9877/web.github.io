<?php
session_start();
if(empty($_SESSION["loggedin"])){
	header("location: ../login");
    exit;
}
  require('header.php');
  require('leftmenu.php');
  $page = $_GET['page'];
  switch ($page) {
    default:
      include 'dashboard.php';
      break;
    case 'tambah_admin':
      include 'tambah_admin.php';
      break;
      case 'tampil_admin':
        include 'tampil_admin.php';
        break;

  }
  // require('dashboard.php');
  // require('footer.php');
  include'footer.php';
 ?>
