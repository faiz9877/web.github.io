<?php include "head.php"; 
include_once('koneksi.php');
?>
            <h2>Laporan Data Karyawan</h2>
            <hr />
            <br />
            <div class="table-responsive">
            <table class="table table-striped table-hover">
                <tr>
                    <th>No</th>
                    <th>NIk</th>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>  
                    <th>No Telpon</th>
                    <th>Jabatan</th>
                    <th>status</th>
                </tr>
                <?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM karyawan ORDER BY nik ASC");
                    $no = 1;
                    while($row = mysqli_fetch_assoc($sql)) {
                        echo '
                        <tr>
                            <td>'.$no.'</td>
                            <td>'.$row['nik'].'</td>
                            <td>'.$row['nama'].'</td>
                            <td>'.$row['tempat_lahir'].'</td>
                            <td>'.indonesiaTgl($row['tanggal_lahir']).'</td>
                            <td>'.$row['no_telpon'].'</td>
                            <td>'.$row['jabatan'].'</td>
                            <td>'.$row['status'].'</td>

                        </tr>
                        ';
                        $no++;
                    }  
                ?>
            </table>
            </div>
            <br>
            <center>
            <img src="img/btn_print.png" width="25" onClick="window.print();">
            <!-- <a href="karyawan_data.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-refresh" aria-hidden=
              "true"></span> kembali</a> -->
            <a href="karyawan_data.php" class="btn-sm btn-danger">Kembali</a> 
            </center>
<?php include "foot.php"; ?>
