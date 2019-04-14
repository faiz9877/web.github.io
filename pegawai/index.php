<?php
  include('header.php');
  include('leftmenu.php');
  $page = $_GET['page'];
  switch ($page) {
      default:
        include 'dashboard.php';
        break;
    case 'tambah_pegawai':
      include 'tambah_pegawai.php';
      break;
    case 'simpan_pegawai':
      include 'simpan_pegawai.php';
      break;
    case 'tampil_pegawai':
      include 'tampil_pegawai.php';
      break;
    case 'hapus_pegawai':
      include 'hapus_pegawai.php';
      break;
    case 'edit_pegawai':
      include 'edit_pegawai.php';
      break;
    case 'update_pegawai':
      include 'update_pegawai.php';
      break;

  }
  include'footer.php';
 ?>
