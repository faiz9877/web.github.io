<?php
include_once('../koneksi.php');
?>
<aside class="right-side">
<div class="content-wrapper">
    <section class="content-header">
       <h1>
          PENGURUS
            <small>Daftar Admin Website</small>
      </h1>
       <ol class="breadcrumb">
       <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
       <li class="active">Data Admin</li>
     </ol>
    </section>

  <a href="?page=tambah_admin" class="btn btn-primary">Tambah admin</a>
  <table class="table table-bordered">
    <?php
    $halaman = 5;
    $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
    $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
    $result = mysqli_query($koneksi,"select from username,created_at from users");
    $total = mysqli_num_rows($result);
    $pages = ceil($total/$halaman);s
    $result = mysqli_query($koneksi,"select username,created_at from users"); or die(mysqli_error);
  ?>
   <thead>
     <tr><th>id_Admin</th><th>username</th><th>password</th><th>created_at</th><th>aksi</th></tr>
   </thead>
    <tbody>
      <?php while ($users=mysqli_fetch_array($query)) { ?>
        <tr><td><?php echo $users[0]; ?></td>
          <td><?php echo $users[1]; ?></td>
          <td><?php echo $users[2]; ?></td>
          <td><?php echo $users[3]; ?></td>
          <!-- <td><a href="?page=edit_users&id=<?php echo $users[0]; ?>"><i class="fa fa-edit"></i></a> || -->
            <a href="?page=hapus_users&id=<?php echo $users[0];?>"
               onclick="return confirm('Anda yakin ingin menghapus users <?php echo $users[1]; ?> ?')">
               <i class="fa fa-trash-o"></i></a>
             </td></tr>
             <?php } ?>
           </tbody>
         </table>
         <!-- <div class="box-footer clearfix">
           <ul class="pagination pagination-sm no-margin pull-right">
             <li><a href="#">Halaman</a></li>
            <?php for($i=1; $i<=$pages; $i++) { ?>
              <li><a href="?page=tampil_admin&halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
              </li> <?php } ?>
              <div class="background">
                  <img src="assets/img/blur-background09.jpg" /> -->
            </ul>
           </div>
          </div>
        </div>
       </div>
     </section>
   </div>
