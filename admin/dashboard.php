<?php
    include_once('../koneksi.php');
    $wkwk1=mysqli_query($koneksi, "SELECT COUNT(id) AS total1 FROM users");
    $val=mysqli_fetch_assoc($wkwk1);
    $sql_hitung=$val['total1'];
    $wkwk2=mysqli_query($koneksi, "SELECT COUNT(id) AS total2 FROM karyawan");
    $val=mysqli_fetch_assoc($wkwk2);
    $sql_hitung2=$val['total2'];
?>
<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>
                            <?php echo $sql_hitung; ?>
                        </h3>
                        <p>
                            admin
                        </p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-building-o"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>
                        <?php echo $sql_hitung; ?>
                        </h3>
                        <p>
                            Total Karyawan
                        </p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-user"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>



    </section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->
