<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>

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

<body class="sidebar-collapse">
    <div class="wrapper ">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?= base_url('adminlte/dist/img/AdminLTELogo.png') ?>" alt="AdminLTELogo" height="60" width="60">
        </div>
        <!-- Main Sidebar Container -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper d-flex align-items-center justify-content-center">
            <!-- Main content -->
            <section class="content">
                <div class="container">
                    <div class="p-3 mb-5">
                        <h2 class="d-flex align-items-center justify-content-center" style="font-size:100px;">Aplikasi Digitalisasi</h2>
                    </div>

                    <div class="row">
                        <div class="col">
                            <a href="<?= base_url('/bpkb'); ?>" class="btn btn-app bg-primary justify-content-center align-items-center float-right" style="padding:30px; height:fit-content; width: 300px;">
                                <i class="fas fa-car " style="font-size: 70px;"></i>
                                <p style="font-size: 30px;">Master BPKB</p>
                            </a>
                        </div>
                        <div class="col">
                            <a class="btn btn-app bg-primary justify-content-center align-items-center" style="padding:30px; height:fit-content; width: 300px;">
                                <i class="fas fa-book " style="font-size: 70px;"></i>
                                <p style="font-size: 30px;">Master Sertifikat</p>
                            </a>
                        </div>
                    </div>
                    <div class="mt-5" style="text-align: center;">
                        <footer>
                            <small>
                                <strong>Copyright &copy; 2022 <a href="#">Sup Team UTY</a>. </strong>All rights reserved.
                                <div class=""><strong>Powered By</strong> AdminLTE <b>Version</b> 3.2.0 and Codeigniter 4. </div>
                            </small>
                        </footer>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

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