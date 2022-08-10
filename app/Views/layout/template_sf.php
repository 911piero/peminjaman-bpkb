<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url('adminlte/plugins/fontawesome-free/css/all.min.css'); ?>">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css'); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('adminlte/dist/css/adminlte.min.css'); ?>">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css'); ?>">

    <style>

    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?= base_url(); ?>" class="nav-link">Main Menu</a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?= base_url('sertifikat'); ?>" class="brand-link">
                <img src="<?= base_url('adminlte/dist/img/AdminLTELogo.png'); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Menu Sertifikat</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div> -->

                <!-- SidebarSearch Form -->
                <!-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> -->

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="<?= site_url('/sertifikat'); ?>" class="nav-link active">
                                <i class="nav-icon fas fa-book"></i>
                                <p>Cari Sertifikat</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url('/peminjam_sertifikat'); ?>" class="nav-link active">
                                <i class="nav-icon fas fa-users"></i>
                                <p>Peminjaman Sertifikat</p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="<?= site_url('#'); ?>" class="nav-link active">
                                <i class="nav-icon fas fa-file"></i>
                                <p>Report</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"><?= $page_title; ?></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
                                <li class="breadcrumb-item active"><?= $page_title; ?></li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <?= $this->renderSection('content'); ?>
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="<?= base_url('adminlte/plugins/jquery/jquery.min.js'); ?>"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <!-- overlayScrollbars -->
    <script src="<?= base_url('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'); ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('adminlte/dist/js/adminlte.js'); ?>"></script>

    <!-- PAGE PLUGINS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- jQuery Mapael -->
    <script src="<?= base_url('adminlte/plugins/jquery-mousewheel/jquery.mousewheel.js'); ?>"></script>
    <script src="<?= base_url('adminlte/plugins/raphael/raphael.min.js'); ?>"></script>
    <script src="<?= base_url('adminlte/plugins/jquery-mapael/jquery.mapael.min.js'); ?>"></script>
    <script src="<?= base_url('adminlte/plugins/jquery-mapael/maps/usa_states.min.js'); ?>"></script>
    <!-- ChartJS -->
    <script src="<?= base_url('adminlte/plugins/chart.js/Chart.min.js'); ?>"></script>
    <!-- DataTables -->
    <script src="<?= base_url('adminlte/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?= base_url('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
    <script src="<?= base_url('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js'); ?>"></script>
    <script src="<?= base_url('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js'); ?>"></script>
    <script src="<?= base_url('adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.j'); ?>s"></script>
    <script src="<?= base_url('adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js'); ?>"></script>
    <script src="<?= base_url('adminlte/plugins/jszip/jszip.min.js'); ?>"></script>
    <script src="<?= base_url('adminlte/plugins/pdfmake/pdfmake.min.js'); ?>"></script>
    <script src="<?= base_url('adminlte/plugins/pdfmake/vfs_fonts.js'); ?>"></script>
    <script src="<?= base_url('adminlte/plugins/datatables-buttons/js/buttons.html5.min.js'); ?>"></script>
    <script src="<?= base_url('adminlte/plugins/datatables-buttons/js/buttons.print.min.js'); ?>"></script>
    <script src="<?= base_url('adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js'); ?>"></script>
    <script>

        $(document).ready(function() {

            
            table = $('#data_sertifikat').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '/sertifikat/listData',
                    data: function(d) {
                        d.kecamatan = $('#kecamatan').val();
                        d.tahun_objek = $('#tahun_objek').val();
                        d.kelurahan = $('#kelurahan').val();
                        d.kategori = $('#kategori').val();
                        d.sub_kategori = $('#sub_kategori').val();
                        d.status = $('#status').val();
                    }
                },
                columns: [{
                        data: 'nama_proyek'
                    },
                    {
                        data: 'intro'
                    },
                    {
                        data: 'intro2'
                    },
                    {
                        data: 'kecamatan'
                    },
                    {
                        data: 'kelurahan'
                    },
                    {
                        data: 'nm_kategori'
                    },
                    {
                        data: 'nm_subkategori'
                    },
                    {
                        data: 'tahun'
                    },
                    {
                        data: 'tgl_akhir'
                    },
                    {
                        data: 'action',
                        orderable: false
                    },
                    {
                        data: 'status',
                        visible: false
                    }
                ]
            });

            $('#kecamatan').change(function(event) {
                table.ajax.reload();
            });

            $('#tahun_objek').change(function(event) {
                table.ajax.reload();
            });

            $('#kelurahan').change(function(event) {
                table.ajax.reload();
            });
            $('#kategori').change(function(event) {
                table.ajax.reload();
            });

            $('#sub_kategori').change(function(event) {
                table.ajax.reload();
            });

            $('#status').change(function(event) {
                table.ajax.reload();
            });

            $('#minDate, #maxDate').on('change', function () {
                table.draw();
                table.ajax.reload();
            });


        })

        // $(document).ready(function() {
        //     $('#data_sertifikat').DataTable({
        //         processing: true,
        //         serverSide: true,
        //         ajax: '/sertifikat/listData',
        //         columns: [{
        //                 data: 'nama_proyek'
        //             },
        //             {
        //                 data: 'intro'
        //             },
        //             {
        //                 data: 'intro2'
        //             },
        //             {
        //                 data: 'kecamatan'
        //             },
        //             {
        //                 data: 'kelurahan'
        //             },
        //             {
        //                 data: 'nm_kategori'
        //             },
        //             {
        //                 data: 'nm_subkategori'
        //             },
        //             {
        //                 data: 'tahun'
        //             },
        //             {
        //                 data: 'tgl_akhir'
        //             },
        //             {
        //                 data: 'action',
        //                 orderable: false
        //             }

        //         ]
        //     });

        // });
    </script>
</body>


</html>