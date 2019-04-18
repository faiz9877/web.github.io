<?php
include 'koneksi.php';
?>
<aside class="right-side">
<div class="content-wrapper">
    <section class="content-header">
       <h1>
          PENGURUS
            <small>Daftar Pengurus</small>
      </h1>
       <ol class="breadcrumb">
       <li><a href="#"><i class="fa fa-dashboard"></i> Pengurus</a></li>
       <li class="active">Data Pengurus</li>
     </ol>
    </section>

  <a href="?page=tambah_pengurus" class="btn btn-primary">Tambah Pengurus</a>
  <table class="table table-bordered">
    <?php
    $halaman = 5;
    $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
    $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
    $result = mysqli_query($link, "SELECT*FROM tabel_pengurus");
    $total = mysqli_num_rows($result);
    $pages = ceil($total/$halaman);
    $query = mysqli_query($link, "SELECT*FROM tabel_pengurus LIMIT $mulai, $halaman") or die(mysqli_error);
  ?>
   <thead>
     <tr><th>id_Pengurus</th><th>Nama_Lengkap</th><th>Alamat</th><th>No_Telpon</th><th>Foto</th><th>Aksi</th></tr>
   </thead>
    <tbody>
      <?php while ($pengurus=mysqli_fetch_array($query)) { ?>
        <tr><td><?php echo $pengurus[0]; ?></td>
          <td><?php echo $pengurus[1]; ?></td>
          <td><?php echo $pengurus[2]; ?></td>
          <td><?php echo $pengurus[3]; ?></td>
          <td><?php echo "<img src=assets/dist/img/".$pengurus[4]." width=70px height=70spx>"; ?>
          <td><a href="?page=edit_pengurus&id=<?php echo $pengurus[0]; ?>"><i class="fa fa-edit"></i></a> ||
            <a href="?page=hapus_pengurus&id=<?php echo $pengurus[0];?>"
               onclick="return confirm('Anda yakin ingin menghapus Pengurus <?php echo $pengurus[1]; ?> ?')">
               <i class="fa fa-trash-o"></i></a>
             </td></tr>
             <?php } ?>
           </tbody>
         </table>
         <div class="box-footer clearfix">
           <ul class="pagination pagination-sm no-margin pull-right">
             <li><a href="#">Halaman</a></li>
            <?php for($i=1; $i<=$pages; $i++) { ?>
              <li><a href="?page=tampil_pengurusd&halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
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
