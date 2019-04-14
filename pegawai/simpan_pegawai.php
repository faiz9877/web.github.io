<?php include 'koneksi.php';
 $nip          = $_POST['nip'];
 $nama_lengkap = $_POST['Nama_Lengkap'];
 $alamat       = $_POST['Alamat'];
 $agama        = $_POST['Agama'];
 $gol_darah    = $_POST['Gol_Darah'];
 $no_hp        = $_POST['No_Hp'];
 $email        = $_POST['Email'];
 $foto         = $_POST['Foto'];
 
 if($_POST['simpan']){
   $extensi_diperbolehkan = array('png','jpg','jpeg');
   $namafoto = $_FILES['Foto']['name'];
   $x = explode('.', $namafoto);
   $extensi = strtolower(end($x));
   $ukuran = $_FILES['Foto']['size'];
   $file_tmp = $_FILES['Foto']['tmp_name'];

  if(in_array($extensi, $extensi_diperbolehkan) === true){
    if ($ukuran < 5000000000) {
      move_uploaded_file($file_tmp, 'assets/dist/img/'.$namafoto);
         $sqlQuery = "insert into tb_pegawai(nip, Nama_Lengkap, Alamat, Agama, Gol_Darah, No_Hp, Email, Foto) values ('$nip','$nama_lengkap','$alamat','$agama','$gol_darah','$no_hp','$email','$namafoto')";
         //sintaks sql yg digunakan untuk msenyimpan inputan masjid ke database
         //tbl_masjid adalah nama tabel yang kita gunakan untuk menyimpan data masjid
         $query = mysqli_query($link, $sqlQuery);
         if (!$query){
    $isi = "Terjadi kesalahan!".mysqli_error($link)."-".mysqli_errno($link);
    echo "<script>alert('terjadi kesalahan saat simpan data!   ')</script>";
    echo "<meta http-equiv='refresh' content='0; url=index.php?page=tambah_pengurus&status=$isi'>";
   }else{
    echo "<script>alert('Data berhasil ditambahkan!')</script>";
    echo "<meta http-equiv='refresh' content='0; url=index.php?page=tampil_pegawai'>";
    }
  }else{
    echo "<script>alert('File foto terlalu besar!')</script>";
    echo "<meta http-equiv='refresh' content='0; url=index.php?page=tambah_pegawai'>";
   }
  }else{
   echo "<script>alert('Extensi File Tidak Diperbolehkan!'".mysqli_error($link).")</script>";
   echo "<meta http-equiv='refresh' content='0; url=index.php?page=tambah_pegawai'>";
     }
    }else{
        echo "<script>alert('terjadi kesalahan!')</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php?page=tambah_pegawai'>";
    }
?>
