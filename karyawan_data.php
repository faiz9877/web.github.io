<?php 
session_start();
if(empty($_SESSION["loggedin"])){
	header("location: login");
    exit;
}
include "head.php"; 
?>

		<h2>Data Karyawan</h2>
		<hr />
<?php
		if(isset($_GET['aksi'])== 'delate'){
			$nik = $_GET['nik'];
			$cek = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE nik='$nik'");
			if(mysqli_num_rows($cek) == 0) {
				echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close"
				data-dismiss="alert" aria-hidden="true">&times;</button> Data tidak ditemukan.</div>';
			}else{
				$delate = mysqli_query($koneksi, "DELETE FROM karyawan WHERE nik='$nik'");
				if($delate){
					echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close"
					data-dismiss="alert" aria-hidden="true">&times;</button> Data berhasil dihapus.</div>';
				}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close"
					data-dismiss="alert" aria-hidden="true">&times;</button> Data gagal dihapus.</div>';
				}
			}
		}
$pageSql="SELECT * FROM karyawan" ;
if(isset($_POST['qcari'])){
	$qcari=$_POST['qcari'];
	$pageSql="SELECT * FROM karyawan WHERE nik like '%$qcari%' or nama like '%$qcari%' or no_telpon like '%
	$qcari%' or tempat_lahir like '%$qcari%' ";
}
?>
<span class="glyphicon glyphicon-plus" aria-hidden="true"></span><a href="karyawan_add">Tambah Data</a>
		<br/>
		<br/>
<div class="form-group">
		<div class="left">
			<form class="form-inline" method="get">
					<select name="filter"class="form-control" onchange="form.submit()">
						<option value="0">Filter Data Karyawan</option>
						<?php $filter = (isset($_GET['filter']) ? strtolower($_GET['filter']) : NULL); ?>
						<option value="Tetap" <?php if($filter == 'Tetap'){ echo 'selected'; } ?>>Tetap</option>
					    <option value="Kontrak" <?php if($filter == 'Kontrak'){ echo 'selected'; } ?>>Kontrak</option>
						<option value="Outsourcing" <?php if($filter == 'Outsourcing'){ echo 'selected'; } ?>>Outsourcing</option>
					</Select>
				</form>
				
			</div>
			<div class="right">
				<form class="" method="POST" action="karyawan_data.php">
							<input type="text" class="form-control" name="qcari" placeholder="cari..." autofocus/>
				</form>
				
		</div>
</div>
		<br />
		<br />
		<div class="table-responsive">
			<table class="table table-striped table-hover">
				<tr>
					<th>NO</th>
					<th>Nik</th>
					<th>Nama</th>
					<th>Tempat Lahir</th>
					<th>Tanggal Lahir</th>
					<th>NO Telpon</th>
					<th>Jabatan</th>
					<th>Status</th>
					<th>Tools</th>
				</tr>
				<?php
				
				if($filter){
					$sql = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE status='$filter' ORDER BY nik ASC");
				}else{
					$sql = mysqli_query($koneksi, $pageSql." ORDER BY nik ASC");
				}
				if(mysqli_num_rows($sql) == 0){
				?>
				<tr><td colspan="8">Data Tidak Ada.</td></tr>
				<?php
				}else{
					$no = 1;
					while($row = mysqli_fetch_assoc($sql)){
				?>
						<tr>
							<td><?php echo $no; ?></td>
							<td><?php echo $row['nik']; ?></td>
							<td><a href="karyawan_detail?nik=<?php echo $row['nik']; ?>"><span class=
							"glyphicon glyphicon-user" aria-hidden="true"></span> <?php echo $row['nama']; ?>
							</a></td>
							<td><?php echo $row['tempat_lahir']; ?></td>
							<td><?php echo indonesiaTgl($row['tanggal_lahir']); ?></td>
							<td><?php echo $row['no_telpon']; ?></td>
							<td><?php echo $row['jabatan']; ?></td>
							<td>
						<?php
							if($row['status']=='Tetap'){
						?>
							<span class="label label-success">Tetap</span>
						<?php }
							else if ($row['status']=='Kontrak'){
						?>
							<span class="label label-info">kontrak</span>
						<?php }
							else if ($row['status'] == 'Outsourcing') {
								
						?>
							<span class="label label-warning">Outsourcing</span>
						<?php } ?>
								</td>
								<td>
									<a href="karyawan_edit?nik=<?php echo $row['nik']; ?>" title="Edit Data"
									class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit"
									aria-hidden="true"></span></a>
									
									<a href="karyawan_data?aksi=delate&nik=<?php echo $row['nik']; ?>"title=
									"Hapus Data" onclick="return confirm('Anda yakin akan menghapus data <?php 
									echo $row['nama']; ?>?')" class="btn btn-danger btn-sm"><span class=
									"glyphicon glyphicon-trash" aria-hidden"true"></span></a?
								</td>
							</tr>
							<?php
							$no++;
					}
				}
				?>
				</table>
				<a href="index" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-refresh" aria-hidden=
              "true"></span> Brenda</a>
				</div>
<?php include "foot.php"; ?>					