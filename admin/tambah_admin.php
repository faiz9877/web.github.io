<aside class="right-side">
  <section class="content-header">
        <h1>
            <small>Tambah Admin</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
            <li class="active">tambah_admin</li>
        </ol>
    </section>
    <section class="content">
           <form action="?page=simpan_pengurus" method="POST" enctype="multipart/form-data">
        <!-- Small boxes (Stat box) -->
            <div class="box-body">
                <label>Nama </label>
                <input type="text" name="nama" class="form-control" required >
            </div>
              <div class="box-body">
                <label>Username</label>
                  <input type="text" name="alamat" class="form-control" required>
                </div>
                <div class="box-body">
                  <label>Password</label>
                    <input type="text" name="No_Telpon" class="form-control" required>
                  </div>
            <div class="box-body">
              <label for="foto">Foto Pengurus</label>
                  <input type="file" name="foto" class="form-control" required >
                 </div>
                  <div class="box-footer">
                    <input type="submit" class="btn btn-primary" name="simpan" value='Simpan'>
            </div>
</form>
      </section>
    </div>
