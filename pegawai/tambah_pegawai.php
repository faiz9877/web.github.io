<aside class="right-side">
  <section class="content-header">
        <h1>
            <small>Tambah Pegawai</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Pengurus</a></li>
            <li class="active">tambah_pegawai</li>
        </ol>
    </section>
    <section class="content">
           <form action="?page=simpan_pegawai" method="POST" enctype="multipart/form-data">
        <!-- Small boxes (Stat box) -->
        <div class="box-body">
            <label>NiP Pegawai</label>
            <input type="text" name="nip" class="form-control" required >
        </div>
            <div class="box-body">
                <label>Nama Pegawai</label>
                <input type="text" name="Nama_Lengkap" class="form-control" required >
            </div>
              <div class="box-body">
                <label>Alamat </label>
                  <input type="text" name="Alamat" class="form-control" required>
                </div>
                <div class="form-group">
        <label>Agama</label>
        <div class="box-body">
          <select name="Agama" class="form-control" required>
            <option value=""> - Agama - </option>
            <option value="Islam">Islam</option>
            <option value="Kristen">kristen</option>
            <option value="Hindu">Hindu</option>
          </select>
        </div>
        <div class="form-group">
        <label>Gol darah</label>
        <div class="combobox">
          <select name="Gol_Darah" class="form-control" required>
            <option value=""> - Golongan Darah - </option>
            <option value="A">A</option>
            <option value="AB">AB</option>
            <option value="O">O</option>
          </select>
        </div>
        <div class="box-body">
          <label>No Hp</label>
            <input type="text" name="No_Hp" class="form-control" required>
        </div>
        <div class="box-body">
          <label>Email</label>
          <input type="text" name="Email" class="form-control" required>
        </div>
        <div class="box-body">
          <label for="Foto">Foto Pegawai</label>
              <input type="file" name="Foto" class="form-control" required >
        </div>
        <div class="box-footer">
            <input type="submit" class="btn btn-primary" name="simpan" value='Simpan'>
        </div>
</form>
      </section>
    </div>
