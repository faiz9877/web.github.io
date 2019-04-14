<?php include "head.php"; ?>
			<h2>Data Karyawan &raquo; Tambah Data</h2>
			<hr />
			
			<?php
			if(isset($_POST['add'])){
				$nik				= $_POST['nik'];
				$nama				= $_POST['nama'];
				$tempat_lahir		= $_POST['tempat_lahir'];
				$tanggal_lahir		= $_POST['tanggal_lahir'];
				$alamat				= $_POST['alamat'];
				$no_telpon			= $_POST['no_telpon'];
				$jabatan			= $_POST['jabatan'];
				$status				= $_POST['status'];
				
				$cek = mysqli_query($koneksi, "SELECT * FROM Karyawan WHERE nik='$nik'");
				if(mysqli_num_rows($cek) == 0) {
				
					$insert = mysqli_query($koneksi, "INSERT INTO karyawan(nik, nama, tempat_lahir, tanggal_lahir, alamat,
					no_telpon, jabatan, status)
														VALUES('$nik', '$nama', '$tempat_lahir', '$tanggal_lahir', 'alamat
														', '$no_telpon', '$jabatan', '$status')") or die(mysqli_error(
														$koneksi));
					if($insert){
						echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close"
						data-dismiss="alert"  aria-hidden="true">&times;</button>Data Karyawan Berhasil Di Simpan. </div>';
					}else {
						echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close"
						data-dismiss="alert"  aria-hidden="true">&times;</button>Ups, Data Karyawan Gagal Di Simpan. </div>';
					}
					
				} else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close"
						data-dismiss="alert"  aria-hidden="true">&times;</button>NIK Sudah Ada..! </div>';
				}
			}
					$now = strtotime(date("Y-m-d"));
					$maxage = date('Y=m=d', strtotime('- 16 years', $now));
					$minage = date('Y=m=d', strtotime('- 40 years', $now));
			?>
			
			<form class="form-horizontal" action="" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">NIK</label>
					<div class="col-sm-2">
						<input type="text" name="nik" class="form-control" placeholder="NIK" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Nama</label>
					<div class="col-sm-4">
						<input type="text" name="nama" class="form-control" placeholder="Nama" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Tempat Lahir</label>
					<div class="col-sm-4">
						<input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Tanggal Lahir</label>
					<div class="col-sm-4">
						<input type="date" name="tanggal_lahir" value="" min="<?php echo $minage;?>" max="<?php echo $maxage;?>"
						class="input-group form-control" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Alamat</label>
					<div class="col-sm-3">
						<textarea name="alamat" class="form-control" placeholder="Alamat"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">No Telpon</label>
					<div class="col-sm-3">
						<input type="text" name="no_telpon" class="form-control" placeholder="No Telpon" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Jabatan</label>
					<div class="col-sm-2">
						<select name="jabatan" class="form-control" required>
							<option value=""> ----- </option>
							<option value="Operator">Operator</option>
							<option value="Leader">Leader</option>
							<option value="Supervisior">Supervisior</option>
							<option value="Manager">Manager</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Status</label>
					<div class="col-sm-2">
						<select name="status" class="form-control">
							<option value=""> ----- </option>
							<option value="Outsourcing">Outsourcing</option>
							<option value="Kontrak">Kontrak</option>
							<option value="Tetap">Tetap</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="add" class="btn btn-sm btn-primary" value="simpan">
						<a href="index.php" class="btn-sm btn-danger">Batal</a>
					</div>
				</div>
			</form>
	<?php include "foot.php"; ?>