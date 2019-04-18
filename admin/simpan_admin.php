<?php include 'koneksi.php';
 $namalengkap = $_POST['nama'];
 $alamat = $_POST['alamat'];
 $no_telpon = $_POST['no_telpon'];
 $foto = $_POST['foto'];

 if($_POST['simpan']){
   $extensi_diperbolehkan = array('png','jpg','jpeg');
   $namafoto = $_FILES['foto']['name'];
   $x = explode('.', $namafoto);
   $extensi = strtolower(end($x));
   $ukuran = $_FILES['foto']['size'];
   $file_tmp = $_FILES['foto']['tmp_name'];

  if(in_array($extensi, $extensi_diperbolehkan) === true){
    if ($ukuran < 5000000000) {
      move_uploaded_file($file_tmp, 'assets/dist/img/'.$namafoto);
         $sqlQuery = "insert into tabel_pengurus(Nama_Lengkap, Alamat,No_Telpon, Foto) values ('$namalengkap','$alamat','$no_telpon','$namafoto')";
         //sintaks sql yg digunakan untuk menyimpan inputan masjid ke database
         //tbl_masjid adalah nama tabel yang kita gunakan untuk menyimpan data masjid
         $query = mysqli_query($link, $sqlQuery);
         if (!$query){
    $isi = "Terjadi kesalahan!".mysqli_error($link)."-".mysqli_errno($link);
    echo "<script>alert('terjadi kesalahan saat simpan data!   ')</script>";
    echo "<meta http-equiv='refresh' content='0; url=index.php?page=tambah_pengurus&status=$isi'>";
   }else{
    echo "<script>alert('Data berhasil ditambahkan!')</script>";
    echo "<meta http-equiv='refresh' content='0; url=index.php?page=tampil_pengurus'>";
    }
  }else{
    echo "<script>alert('File foto terlalu besar!')</script>";
    echo "<meta http-equiv='refresh' content='0; url=index.php?page=tambah_pengurus'>";
   }
  }else{
   echo "<script>alert('Extensi File Tidak Diperbolehkan!'".mysqli_error($link).")</script>";
   echo "<meta http-equiv='refresh' content='0; url=index.php?page=tambah_pengurus'>";
     }
    }else{
        echo "<script>alert('terjadi kesalahan!')</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php?page=tambah_pengurus'>";
    }
?>
