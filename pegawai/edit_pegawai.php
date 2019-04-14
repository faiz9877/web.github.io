<?php
  include 'koneksi.php';
  $nip = $_GET['nip'];
  $query = mysqli_query($link, "select * from tb_pegawai where nip='$nip'");
  $data = mysqli_fetch_array($query);
  ?>
  <aside class="right-side">
  <div class="content-wrapper">
    <section class="content-header">
      <h1>PEGAWAI
        <small>Ubah Data Pegawai</small>
       </h1>
       <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-dashboard"></i> Pegawai</a></li>
         <li class="active">Ubah_Pegawai</li>
       </ol>
     </section>
     <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Ubah Data Pegawai</h3>
              </div>
              <form action="?page=update_pegawai" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="nip" class="form-control" value="<?php echo $data['nip'];?>" >

            <div class="box-body">
              <label>Nama Lengkap</label>
              <input type="text" name="nama" class="form-control" value="<?php echo $data['Nama_Lengkap'];?>"  required>
            </div>
            <div class="box-body">
              <label>Alamat Pegawai </label>
              <input type="text" name="alamat" class="form-control" value="<?php echo $data['Alamat'];?>" required>
            </div>
            <div class="box-body">
              <label>Agama </label>
              <input type="text" name="agama" class="form-control" value="<?php echo $data['Agama'];?>" required>
            </div>
            <div class="box-body">
              <label>Golongan Darah </label>
              <input type="text" name="gol_darah" class="form-control" value="<?php echo $data['Gol_Darah'];?>" required>
            </div>
            <div class="box-body">
              <label>No Hp</label>
              <input type="text" name="No_Telpon" class="form-control" value="<?php echo $data['No_Hp'];?>" required>
            </div>
            <div class="box-body">
              <label>Alamat Email </label>
              <input type="text" name="email" class="form-control" value="<?php echo $data['Email'];?>" required>
            </div>
            <div class="box-body">
              <label>Foto Pegawai</label>
              <img src="assets/dist/img/<?php echo $data['Foto'] ?>" width="190" height="170"><br>
              <input type="file" name="Foto" class="form-control" >
            </div>
            <div class="box-footer">
              <input type="submit" class="btn btn-primary" name="update" value='Update'>
              <a href="javascript:history.back()" class="btn btn-danger">Kembali</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>
