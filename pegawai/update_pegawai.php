<?php
include 'koneksi.php';
$nip          = $_POST['nip'];
$nama_lengkap = $_POST['Nama_Lengkap'];
$alamat       = $_POST['Alamat'];
$agama        = $_POST['Agama'];
$gol_darah    = $_POST['Gol_Darah'];
$no_hp        = $_POST['No_Hp'];
$email        = $_POST['Email'];
$foto         = $_POST['Foto']['name'];
$query_gmbr  = mysqli_query($link, "Select foto from tb_pegawai where nip ='$nip'");
$gambarlama  = mysqli_fetch_array($query_gmbr);
if($_POST['update']){
  if ($foto){
    $extensi_diperbolehkan = array('png','jpg','jpeg');
    $namafoto = $_FILES['Foto']['name'];
    $x = explode('.', $namafoto);
    $extensi = strtolower(end($x));
    $ukuran = $_FILES['Foto']['size'];
     $file_tmp = $_FILES['Foto']['tmp_name'];
     if(in_array($extensi, $extensi_diperbolehkan) === true){
       if ($ukuran < 5000000000) {
         move_uploaded_file($file_tmp, 'assets/dist/img/'.$namafoto);
         $target = $gambarlama['Foto'];
         if (file_exists("assets/dist/img/".$target)){
           unlink("assets/dist/img/".$target);
         }
         $sqlQuery  =  "update  tb_pegawai  set  Nama_Lengkap  ='$namalengkap',  Alamat  ='$alamat', Agama ='$agama', Gol_Darah ='$gol_darah',
         No_Hp  ='$no_hp',  Foto  ='$namafoto'  where nip ='$nip'";
          $query = mysqli_query($link, $sqlQuery);
          if (!$query){
                     $isi = "Terjadi kesalahan!".mysqli_error($link)."-".mysqli_errno($link);
                     echo "<script>alert('terjadi kesalahan update data pengurus ')</script>";
                     echo "<meta http-equiv='refresh' content='0; url=index.php?page=tambah_pegawai&status=$isi'>";
                   }else{
                     echo "<script>alert('Data pengurus berhasil diperbaharui!')</script>";
                     echo "<meta http-equiv='refresh' content='0; url=index.php?page=tampil_pegawai'>";
                   }
                 }else{
                       echo "<script>alert('File foto terlalu besar!')</script>";
                       echo "<meta http-equiv='refresh' content='0; url=index.php?page=edit_pegawai&nip=$nip'>";
                     }
                   }else{
                      echo "<script>alert('Extensi File Tidak Diperbolehkan!'".mysqli_error($link).")</script>";
                      echo "<meta http-equiv='refresh' content='0; url=index.php?page=edit_pegawai&nip=$nip'>";
                    }
                    }else{
                      $sqlQuery = "update tb_pegawai set Nama_Lengkap  ='$namalengkap',  Alamat  ='$alamat', Agama ='$agama', Gol_Darah ='$gol_darah',
                      No_Hp  ='$no_hp',  Foto  ='$namafoto'  where nip='$nip'";
                      $query = mysqli_query($link, $sqlQuery);
                      if (!$query){
                        $isi = "Terjadi kesalahan!".mysqli_error($link)."-".mysqli_errno($link);
                        echo "<script>alert('terjadi kesalahan update data pengurus ')</script>";
                        echo "<meta http-equiv='refresh' content='0; url=index.php?page=edit_pegawai&nip=$nip'>";
                      }else{
                        echo "<script>alert('Data pengurus berhasil diperbaharui!')</script>";
                        echo "<meta http-equiv='refresh' content='0; url=index.php?page=tampil_pegawai'>";
                      }
                     }
                     }else{
                       echo "<script>alert('terjadi kesalahan!')</script>";
                       echo "<meta http-equiv='refresh' content='0; url=index.php?page=tambah_pegawai'>";
                    }
  ?>
