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
                    <a href="<?= base_url(); ?>" class="nav-link" title="Main Menu">Main Menu</a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?= base_url('/sertifikat/home'); ?>" class="brand-link" title="Dashboard Sertifikat">
                <img src="<?= base_url('adminlte/dist/img/AdminLTELogo.png'); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Dashboard Sertifikat</span>
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
                        <li class="nav-item menu-open" title="Data Sertifikat">
                            <a href="<?= site_url('/sertifikat'); ?>" class="nav-link active">
                                <i class="nav-icon fas fa-book"></i>
                                <p>Cari Sertifikat</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url('/peminjamsertifikat'); ?>" class="nav-link active" title="Data Peminjam Sertifikat">
                                <i class="nav-icon fas fa-users"></i>
                                <p>Peminjaman Sertifikat</p>
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
            /* For Export Buttons available inside jquery-datatable "server side processing" - Start
            - due to "server side processing" jquery datatble doesn't support all data to be exported
            - below function makes the datatable to export all records when "server side processing" is on */
            function newexportaction(e, dt, button, config) {
                var self = this;
                var oldStart = dt.settings()[0]._iDisplayStart;
                dt.one('preXhr', function(e, s, data) {
                    // Just this once, load all data from the server...
                    data.start = 0;
                    data.length = 2147483647;
                    dt.one('preDraw', function(e, settings) {
                        // Call the original action function
                        if (button[0].className.indexOf('buttons-copy') >= 0) {
                            $.fn.dataTable.ext.buttons.copyHtml5.action.call(self, e, dt, button, config);
                        } else if (button[0].className.indexOf('buttons-excel') >= 0) {
                            $.fn.dataTable.ext.buttons.excelHtml5.available(dt, config) ?
                                $.fn.dataTable.ext.buttons.excelHtml5.action.call(self, e, dt, button, config) :
                                $.fn.dataTable.ext.buttons.excelFlash.action.call(self, e, dt, button, config);
                        } else if (button[0].className.indexOf('buttons-csv') >= 0) {
                            $.fn.dataTable.ext.buttons.csvHtml5.available(dt, config) ?
                                $.fn.dataTable.ext.buttons.csvHtml5.action.call(self, e, dt, button, config) :
                                $.fn.dataTable.ext.buttons.csvFlash.action.call(self, e, dt, button, config);
                        } else if (button[0].className.indexOf('buttons-pdf') >= 0) {
                            $.fn.dataTable.ext.buttons.pdfHtml5.available(dt, config) ?
                                $.fn.dataTable.ext.buttons.pdfHtml5.action.call(self, e, dt, button, config) :
                                $.fn.dataTable.ext.buttons.pdfFlash.action.call(self, e, dt, button, config);
                        } else if (button[0].className.indexOf('buttons-print') >= 0) {
                            $.fn.dataTable.ext.buttons.print.action(e, dt, button, config);
                        }
                        dt.one('preXhr', function(e, s, data) {
                            // DataTables thinks the first item displayed is index 0, but we're not drawing that.
                            // Set the property to what it was before exporting.
                            settings._iDisplayStart = oldStart;
                            data.start = oldStart;
                        });
                        // Reload the grid with the original page. Otherwise, API functions like table.cell(this) don't work properly.
                        setTimeout(dt.ajax.reload, 0);
                        // Prevent rendering of the full data to the DOM
                        return false;
                    });
                });
                // Requery the server with the new one-time export settings
                dt.ajax.reload();
            };
            //For Export Buttons available inside jquery-datatable "server side processing" - End

            table = $('#data_sertifikat').DataTable({
                dom: 'Bfrtlip',
                buttons: [{
                    "extend": 'excel',
                    "text": 'Print Excel',
                    "titleAttr": 'Excel',
                    "className": 'btn btn-sm btn-success',
                    "action": newexportaction,
                    exportOptions: {
                        columns: [1, 2, 3, 4, 5, 6, 7, 8, 9, 11]
                    }
                }, ],
                order: [
                    [8, 'desc']
                ],
                processing: true,
                serverSide: true,
                ajax: {
                    url: '<?= site_url('/sertifikat/listData') ?>',
                    data: function(d) {
                        d.kecamatan = $('#kecamatan').val();
                        d.tahun_objek = $('#tahun_objek').val();
                        d.kelurahan = $('#kelurahan').val();
                        d.kategori = $('#kategori').val();
                        d.sub_kategori = $('#sub_kategori').val();
                        d.status = $('#status').val();
                        d.minDate = $('#minDate').val();
                        d.maxDate = $('#maxDate').val();
                    }
                },
                columns: [{
                        data: null,
                        "sortable": false,
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        },
                        searchable: false,
                    }, {
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
                        "data": null,
                        "render": function(data, type, full) {
                            if (full['tgl_awal'] == "0000-00-00") {
                                return '-';
                            }
                            return full['tgl_awal'] + '&nbsp;<b>s.d</b>&nbsp;' + full['tgl_akhir'];
                        },
                        searchable: false
                    },
                    {
                        data: 'action',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'status',
                        visible: false,
                        searchable: false
                    }
                ]
            });
            table.buttons().container().appendTo($('#test'));

        });
        $(document).ready(function() {
            /* For Export Buttons available inside jquery-datatable "server side processing" - Start
            - due to "server side processing" jquery datatble doesn't support all data to be exported
            - below function makes the datatable to export all records when "server side processing" is on */
            function newexportaction(e, dt, button, config) {
                var self = this;
                var oldStart = dt.settings()[0]._iDisplayStart;
                dt.one('preXhr', function(e, s, data) {
                    // Just this once, load all data from the server...
                    data.start = 0;
                    data.length = 2147483647;
                    dt.one('preDraw', function(e, settings) {
                        // Call the original action function
                        if (button[0].className.indexOf('buttons-copy') >= 0) {
                            $.fn.dataTable.ext.buttons.copyHtml5.action.call(self, e, dt, button, config);
                        } else if (button[0].className.indexOf('buttons-excel') >= 0) {
                            $.fn.dataTable.ext.buttons.excelHtml5.available(dt, config) ?
                                $.fn.dataTable.ext.buttons.excelHtml5.action.call(self, e, dt, button, config) :
                                $.fn.dataTable.ext.buttons.excelFlash.action.call(self, e, dt, button, config);
                        } else if (button[0].className.indexOf('buttons-csv') >= 0) {
                            $.fn.dataTable.ext.buttons.csvHtml5.available(dt, config) ?
                                $.fn.dataTable.ext.buttons.csvHtml5.action.call(self, e, dt, button, config) :
                                $.fn.dataTable.ext.buttons.csvFlash.action.call(self, e, dt, button, config);
                        } else if (button[0].className.indexOf('buttons-pdf') >= 0) {
                            $.fn.dataTable.ext.buttons.pdfHtml5.available(dt, config) ?
                                $.fn.dataTable.ext.buttons.pdfHtml5.action.call(self, e, dt, button, config) :
                                $.fn.dataTable.ext.buttons.pdfFlash.action.call(self, e, dt, button, config);
                        } else if (button[0].className.indexOf('buttons-print') >= 0) {
                            $.fn.dataTable.ext.buttons.print.action(e, dt, button, config);
                        }
                        dt.one('preXhr', function(e, s, data) {
                            // DataTables thinks the first item displayed is index 0, but we're not drawing that.
                            // Set the property to what it was before exporting.
                            settings._iDisplayStart = oldStart;
                            data.start = oldStart;
                        });
                        // Reload the grid with the original page. Otherwise, API functions like table.cell(this) don't work properly.
                        setTimeout(dt.ajax.reload, 0);
                        // Prevent rendering of the full data to the DOM
                        return false;
                    });
                });
                // Requery the server with the new one-time export settings
                dt.ajax.reload();
            };
            //For Export Buttons available inside jquery-datatable "server side processing" - End

            table2 = $('#data_peminjam_sertifikat').DataTable({
                dom: 'Bfrtip',
                buttons: [{
                    "extend": 'excel',
                    "text": 'Print Excel',
                    "titleAttr": 'Excel',
                    "className": 'btn btn-sm btn-success ml-3',
                    "action": newexportaction,
                    exportOptions: {
                        columns: [1, 2, 3, 4, 5, 6, ]
                    }
                }, ],
                order: [
                    [5, 'desc']
                ],
                processing: true,
                serverSide: true,
                ajax: '<?= site_url('/peminjamsertifikat/listData') ?>',
                columns: [{
                        data: null,
                        "sortable": false,
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        },
                        searchable: false,
                    }, {
                        data: 'nama_lengkap'
                    },
                    {
                        data: 'nik'
                    },
                    {
                        data: 'intro'
                    },
                    {
                        data: 'keperluan'
                    },
                    {
                        data: 'tgl_pinjam'
                    },
                    {
                        data: 'status'
                    },
                    {
                        data: 'action',
                        orderable: false
                    },
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

            $('#minDate, #maxDate').change(function(event) {
                table.draw();
                table.ajax.reload();

            });
            table2.buttons().container().appendTo($('#btnPlace'));

        });

        $(document).ready(function() {

            table3 = $('#data_kekancingan_reminder').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '<?= site_url('/sertifikat/listDataReminder') ?>',
                },
                columns: [{
                        data: null,
                        "sortable": false,
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        },
                        searchable: false,
                    }, {
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
                        "data": null,
                        "render": function(data, type, full) {
                            if (full['tgl_awal'] == "0000-00-00") {
                                return '-';
                            }
                            return full['tgl_awal'] + '&nbsp;<b>s.d</b>&nbsp;' + full['tgl_akhir'];
                        },
                        searchable: false
                    },
                    {
                        data: 'action',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'status',
                        visible: false,
                        searchable: false
                    }
                ]
            });
            table.buttons().container().appendTo($('#test'));

        });
    </script>
</body>


</html>