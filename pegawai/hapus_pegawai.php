<?php
include 'koneksi.php';
$nip= $_GET['nip'];
$query_gmbr = mysqli_query($link, "select * from tb_pegawai where nip='$nip'");
$gambarlama = mysqli_fetch_array($query_gmbr);   $target = $gambarlama['foto'];
//mengambil nama foto dari id masjid yang dipilih
if (file_exists("assets/dist/img/".$target)){ //mencek foto masjid apakah masih ada, jika foto masjid yang ingin dihapus masih ada
  unlink("assets/dist/img/".$target); //maka foto akan dihapus
}
$query = mysqli_query($link, "delete from tb_pegawai WHERE nip='$nip'");    //sintaks sql untuk menghapus data
if ($query) {
  echo "<script>alert('Data berhasil dihapus')</script>";
  echo "<meta http-equiv='refresh' content='0; url=?page=tampil_pegawai'>";
}else {
      echo "Data anda gagal dihapus. Ulangi sekali lagi";
      echo "<meta http-equiv='refresh' content='0; url=?page=tampil_pegawai'>";
}
?>
