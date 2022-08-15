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
        @media print {
            .card-header {
                display: none;
            }
        }
    </style>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('adminlte/plugins/fontawesome-free/css/all.min.css'); ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= base_url('adminlte/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'); ?>">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?= base_url('adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'); ?>">
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

<div class="card-header">
    <button onclick="window.print()" class="btn btn-outline-secondary btn-shadow float-right">PRINT<i class="fa fa-print"></i></button>
</div>
<div class="card">
    <div class="row">
        <div class="col">
            <table class="table table-bordered" border="1px">

                <tr>
                    <td>
                        <center><img src="<?= base_url('adminlte/dist/img/Logo.png'); ?>" alt="" height="100" width="90"></center>
                        <hr>
                        <center><img src="<?= base_url('adminlte/dist/img/AdminLTELogo.png'); ?>" alt="" height="100" width="90"></center>
                        <img src="<?= $sertifikat['img1']; ?>" style="height:250px; width:50%" alt="">
                        <img src="<?= $sertifikat['img1']; ?>" style="height:250px; width:50%" alt="">
                    </td>
                    <td>
                        <center><img src="<?= base_url('adminlte/dist/img/Logo.png'); ?>" alt="" height="100" width="90"></center>
                        <hr>
                        <center><img src="<?= base_url('adminlte/dist/img/Logo.png'); ?>" alt="" height="100" width="90"></center>
                        <img src="<?= $sertifikat['img1']; ?>" style="height:250px; width:50%" alt="">
                        <img src="<?= $sertifikat['img1']; ?>" style="height:250px; width:50%" alt="">
                    </td>
                    <td>
                        <center><img src="<?= base_url('adminlte/dist/img/Logo.png'); ?>" alt="" height="100" width="90"></center>
                        <hr>
                        <center><img src="<?= base_url('adminlte/dist/img/Logo.png'); ?>" alt="" height="100" width="90"></center>
                        <img src="<?= $sertifikat['img1']; ?>" style="height:250px; width:50%" alt="">
                        <img src="<?= $sertifikat['img1']; ?>" style="height:250px; width:50%" alt="">
                    </td>
                </tr>
            </table>
        </div>
    </div>

</div>


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
<script src="<?= base_url('adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'); ?>"></script>
<!-- Summernote -->
<script src="<?= base_url('adminlte/plugins/summernote/summernote-bs4.min.js'); ?>"></script>
<!-- overlayScrollbars -->
<!-- AdminLTE App -->
<script src="<?= base_url('adminlte/dist/js/adminlte.js'); ?>"></script>
<!-- AdminLTE for demo purposes -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->

</body>

</html>