<?php include "head.php"; ?>
              <h2>data Karyawan &raquo; Biodata</h2>
              <hr />

              <?php
              $nik = $_GET['nik'];
              $sql = mysqli_query($koneksi, "SELECT * FROM Karyawan WHERE nik=''$nik');
              if(mysqli_num_rows($sql) == 0) {
                header("Location: index.php");
              }else{
                $row = mysqli_fetch_assoc($sql);
              }
               ?>
