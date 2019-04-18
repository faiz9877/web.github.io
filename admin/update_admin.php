<?php
include 'koneksi.php';
$idpengurus = $_POST['id_Pengurus'];
$namalengkap = $_POST['Nama'];
$alamat = $_POST['Alamat'];
$notelpon = $_POST['No_Telpon'];
$foto = $_FILES['foto']['name'];
$query_gmbr = mysqli_query($link, "Select foto from tabel_pengurus where id_Pengurus ='$id_Pengurus'");
$gambarlama = mysqli_fetch_array($query_gmbr);
if($_POST['update']){
  if ($foto){
    $extensi_diperbolehkan = array('png','jpg','jpeg');

    $namafoto = $_FILES['foto']['name'];
    $x = explode('.', $namafoto);
    $extensi = strtolower(end($x));
    $ukuran = $_FILES['foto']['size'];
     $file_tmp = $_FILES['foto']['tmp_name'];
     if(in_array($extensi, $extensi_diperbolehkan) === true){
       if ($ukuran < 5000000000) {
         move_uploaded_file($file_tmp, 'assets/dist/img/'.$namafoto);
         $target = $gambarlama['foto'];
         if (file_exists("assets/dist/img/".$target)){
           unlink("assets/dist/img/".$target);
         }
         $sqlQuery  =  "update  tabel_pengurus  set  Nama_Lengkap  ='$namalengkap',  Alamat  ='$alamat', No_Telpon  ='$notelpon',  Foto  ='$namafoto'  where id_Pengurus='$idpengurus'";
          $query = mysqli_query($link, $sqlQuery);
          if (!$query){
                     $isi = "Terjadi kesalahan!".mysqli_error($link)."-".mysqli_errno($link);
                     echo "<script>alert('terjadi kesalahan update data pengurus ')</script>";
                     echo "<meta http-equiv='refresh' content='0; url=index.php?page=tambah_pengurus&status=$isi'>";
                   }else{
                     echo "<script>alert('Data pengurus berhasil diperbaharui!')</script>";
                     echo "<meta http-equiv='refresh' content='0; url=index.php?page=tampil_pengurus'>";
                   }
                 }else{
                       echo "<script>alert('File foto terlalu besar!')</script>";
                       echo "<meta http-equiv='refresh' content='0; url=index.php?page=edit_pengurus&id=$idpengurus'>";
                     }
                   }else{
                      echo "<script>alert('Extensi File Tidak Diperbolehkan!'".mysqli_error($link).")</script>";
                      echo "<meta http-equiv='refresh' content='0; url=index.php?page=edit_pengurus&id=$idpengurus'>";
                    }
                    }else{
                      $sqlQuery = "update tabel_pengurus set Nama_Lengkap ='$namapengurus', Alamat ='$alamat', No_Telpon ='$notelpon' where id_pengurus='$idpengurus'";
                      $query = mysqli_query($link, $sqlQuery);
                      if (!$query){
                        $isi = "Terjadi kesalahan!".mysqli_error($link)."-".mysqli_errno($link);
                        echo "<script>alert('terjadi kesalahan update data pengurus ')</script>";
                        echo "<meta http-equiv='refresh' content='0; url=index.php?page=edit_pengurus&id=$idpengurus'>";
                      }else{
                        echo "<script>alert('Data pengurus berhasil diperbaharui!')</script>";
                        echo "<meta http-equiv='refresh' content='0; url=index.php?page=tampil_pengurus'>";
                      }
                     }
                     }else{
                       echo "<script>alert('terjadi kesalahan!')</script>";
                       echo "<meta http-equiv='refresh' content='0; url=index.php?page=tambah_pengurus'>";
                    }
  ?>
