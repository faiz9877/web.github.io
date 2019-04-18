<?php
  require('header.php');
  require('leftmenu.php');
  $page = $_GET['page'];
  switch ($page) {
    default:
      include 'dashboard.php';
      break;
    case 'tambah_masjid':
      include 'tambah_masjid.php';
      break;
      case 'tampil_masjid':
        include 'tampil_masjid.php';
        break;

  }
  require('dashboard.php');
  require('footer.php');
 ?>
