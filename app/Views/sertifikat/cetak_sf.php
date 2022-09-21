<?php
date_default_timezone_set('Asia/Jakarta');

use App\Controllers\Peminjam;
?>
<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
    .sub-page {
        height: 300mm;
    }

    .page {
        justify-items: center;
        border: 1px solid;
    }

    @page {
        size: A4;
        margin: 0;
    }
    .img {
        width: 210mm;
        height: 297mm;
    }
    @media print {
        #toolbarContainer {
            display: none;
        }

        .card-header {
            display: none;
        }

        .img {
            width: 300mm;
            height: 400mm;
        }
    }
    </style>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('adminlte/plugins/fontawesome-free/css/all.min.css'); ?>">
    <!-- Ionicons -->
    <link rel="stylesheet"
        href="<?= base_url('adminlte/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'); ?>">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="<?= base_url('adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'); ?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= base_url('adminlte/plugins/jqvmap/jqvmap.min.css'); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('adminlte/dist/css/adminlte.min.css'); ?>">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css'); ?>">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url('adminlte/plugins/daterangepicker/daterangepicker.css'); ?>">
    <!-- summernote -->
</head>

<body>
    <div class="card-header">
        <a href="<?php echo $_SERVER['HTTP_REFERER'] ?>" class="btn btn-outline-info btn-shadow">Kembali</a>
        <button onclick="window.print()" class="btn btn-outline-secondary btn-shadow float-right">PRINT<i
                class="fa fa-print"></i></button>
    </div>
    <div class="book">
        <div class="page">
            <div class="sub-page">
                <?php
                $link = $sertifikat['img1'];
                if ($sertifikat['img1'] == null) {
                    echo '';
                } else {
                    echo '<center><center><img class="img" src="' . base_url('BPKAD/') . '/' .  $sertifikat['img1'] . '.jpg' . '" ></center>';
                }
                ?>
            </div>
        </div>
        <div class="page">
            <?php
            $link = $sertifikat['img2'];
            if ($sertifikat['img2'] == null) {
                echo '';
            } else {
                echo '<center><img class="img" src="' . base_url('BPKAD/') . '/' .  $sertifikat['img2'] . '.jpg' . '"></center>';
            }
            ?>
        </div>
        <div class="page">
            <?php
            $link = $sertifikat['img3'];
            if ($sertifikat['img3'] == null) {
                echo '';
            } else {
                echo '<center><img class="img" src="' . base_url('BPKAD/') . '/' .  $sertifikat['img3'] . '.jpg' . '" ></center>';
            }
            ?>
        </div>
        <div class="page">
            <?php
            $link = $sertifikat['img4'];
            if ($sertifikat['img4'] == null) {
                echo '';
            } else {
                echo '<center><img class="img" src="' . base_url('BPKAD/') . '/' .  $sertifikat['img4'] . '.jpg' . '" ></center>';
            }
            ?>
        </div>
        <div class="page">
            <?php
            $link = $sertifikat['img5'];
            if ($sertifikat['img5'] == null) {
                echo '';
            } else {
                echo '<center><img class="img" src="' . base_url('BPKAD/') . '/' .  $sertifikat['img5'] . '.jpg' . '" ></center>';
            }
            ?>
        </div>
        <div class="page">
            <?php
            $link = $sertifikat['img6'];
            if ($sertifikat['img6'] == null) {
                echo '';
            } else {
                echo '<center><img class="img" src="' . base_url('BPKAD/') . '/' .  $sertifikat['img6'] . '.jpg' . '" ></center>';
            }
            ?>
        </div>
    </div>
</body>


<!-- jQuery -->
<script src="<?= base_url('adminlte/plugins/jquery/jquery.min.js'); ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url('adminlte/plugins/jquery-ui/jquery-ui.min.js'); ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- ChartJS -->
<script src="<?= base_url('adminlte/plugins/chart.js/Chart.min.js'); ?>"></script>
<!-- Sparkline -->
<script src="<?= base_url('adminlte/plugins/sparklines/sparkline.js'); ?>"></script>
<!-- JQVMap -->
<script src="<?= base_url('adminlte/plugins/jqvmap/jquery.vmap.min.js'); ?>"></script>
<script src="<?= base_url('adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js'); ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url('adminlte/plugins/jquery-knob/jquery.knob.min.js'); ?>"></script>
<!-- daterangepicker -->
<script src="<?= base_url('adminlte/plugins/moment/moment.min.js'); ?>"></script>
<script src="<?= base_url('adminlte/plugins/daterangepicker/daterangepicker.js'); ?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url('adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'); ?>">
</script>
<!-- Summernote -->
<script src="<?= base_url('adminlte/plugins/summernote/summernote-bs4.min.js'); ?>"></script>
<!-- overlayScrollbars -->
<!-- AdminLTE App -->
<script src="<?= base_url('adminlte/dist/js/adminlte.js'); ?>"></script>
<!-- AdminLTE for demo purposes -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->

</body>

</html>