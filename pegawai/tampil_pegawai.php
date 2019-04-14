<?php
include 'koneksi.php';
?>
<aside class="right-side">
<div class="content-wrapper">
    <section class="content-header">
       <h1>
          PEGAWAI
            <small>Daftar Pegawai</small>
      </h1>
       <ol class="breadcrumb">
       <li><a href="#"><i class="fa fa-dashboard"></i> Pegawai</a></li>
       <li class="active">Data Pegawai</li>
     </ol>
    </section>

  <a href="?page=tambah_pegawai" class="btn btn-primary">Tambah Pegawai</a>
  <table class="table table-bordered">
    <?php
    $halaman = 5;
    $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
    $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
    $result = mysqli_query($link, "SELECT*FROM tb_pegawai");
    $total = mysqli_num_rows($result);
    $pages = ceil($total/$halaman);
    $query = mysqli_query($link, "SELECT*FROM tb_pegawai LIMIT $mulai, $halaman") or die(mysqli_error);
  ?>
   <thead>
     <tr><th>nip</th><th>Nama_Lengkap</th><th>Alamat</th><th>Agama</th><th>Gol_Darah</th><th>No_Hp</th><th>Email</th><th>Foto</th><th>Aksi</th></tr>
   </thead>
    <tbody>
      <?php while ($pegawai=mysqli_fetch_array($query)) { ?>
        <tr><td><?php echo $pegawai[0]; ?></td>
          <td><?php echo $pegawai[1]; ?></td>
          <td><?php echo $pegawai[2]; ?></td>
          <td><?php echo $pegawai[3]; ?></td>
          <td><?php echo $pegawai[4]; ?></td>
          <td><?php echo $pegawai[5]; ?></td>
          <td><?php echo $pegawai[6]; ?></td>
          <td><?php echo "<img src=assets/dist/img/".$pegawai[7]." width=70px height=70spx>"; ?>
          <td><a href="?page=edit_pegawai&nip=<?php echo $pegawai[0]; ?>"><i class="fa fa-edit"></i></a> ||
            <a href="?page=hapus_pegawai&nip=<?php echo $pegawai[0];?>"
               onclick="return confirm('Anda yakin ingin menghapus Pegawai <?php echo $pegawai[1]; ?> ?')">
               <i class="fa fa-trash-o"></i></a>
             </td></tr>
             <?php } ?>
           </tbody>
         </table>
         <div class="box-footer clearfix">
           <ul class="pagination pagination-sm no-margin pull-right">
             <li><a href="#">Halaman</a></li>
            <?php for($i=1; $i<=$pages; $i++) { ?>
              <li><a href="?page=tampil_pegawaid&halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
              </li> <?php } ?>
              <div class="background">
                  <img src="assets/img/blur-background09.jpg" />
            </ul>
           </div>
          </div>
        </div>
       </div>
     </section>
   </div>
