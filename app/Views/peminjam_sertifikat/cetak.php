<?php
date_default_timezone_set('Asia/Jakarta');

use App\Controllers\PeminjamSertifikat;
?>
<!DOCTYPE html>
<html lang="en">


<head>

    <style>
        @media print {

            .card-header {
                display: none;
            }

            #toolbarContainer {
                display: none;
            }
        }

        .table {
            border-style: hidden;
        }

        .title {
            text-align: center;
        }

        .isi {
            text-align: justify;
        }

        .justify {
            text-align: justify;
        }

        .sub-label {
            text-align: center;
            font-size: 21.2px;
        }

        p {
            font-size: 21.2px;
            text-align: justify;
        }

        .isi {
            margin: 70px;
        }
    </style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
    <a href="<?php echo $_SERVER['HTTP_REFERER'] ?>" class="btn btn-outline-info btn-shadow" title="Kembali"><i class="fa fa-arrow-left"></i>&nbsp;Kembali</a>
    <button onclick="window.print()"class="btn btn-outline-secondary btn-shadow float-right" title="PRINT">PRINT&nbsp;<i class="fa fa-print"></i></button>
</div>
<div class="container">
    <div class="foto mt-5">
        <table class="table">
            <center><img src="<?= base_url('adminlte/dist/img/Logo.png'); ?>" alt="" height="100" width="90" class="foto"></center>
        </table>
        <br>
        <p class="title">Tanda Terima Dokumen</p>
        <p class="title">Nomor : <?= $peminjamsertifikat['nomor_surat'] ?></p>
    </div>
    <div class="isi">
        <?php
        $tgl_pinjam = longdate_indo($peminjamsertifikat['tgl_pinjam']);
        ?>


        <p><?= $tgl_pinjam ?> telah diterima dokumen sertifikat/surat kekancingan tanah milik/dikuasai dengan nomor <b><?= $peminjamsertifikat['nama_proyek'] ?> (<?= $peminjamsertifikat['intro'] ?>) </b> berlokasi di <b><?= $peminjamsertifikat['kelurahan'] ?></b> dari : </p>

        <div class="justify">
            <table class="mx-auto" style="width: 800px; font-size:21.2px">
                <tr>
                    <td class="label">Nama</td>
                    <td class="label">:</td>
                    <td class="label">&nbsp;&nbsp;&nbsp;<?= $peminjamsertifikat['nama_lengkap'] ?>.</td>
                </tr>
                <tr>
                    <td class="label">NIP</td>
                    <td class="label">:</td>
                    <td class="label">&nbsp;&nbsp;&nbsp;<?= $peminjamsertifikat['nik'] ?>.</td>
                </tr>
                <tr>
                    <td class="label">Instansi</td>
                    <td class="label">:</td>
                    <td class="label">&nbsp;&nbsp;&nbsp;Pemerintah Kota.</td>
                </tr>
                <tr>
                    <td class="label">Keperluan</td>
                    <td class="label">:</td>
                    <td class="label">&nbsp;&nbsp;&nbsp;<?= $peminjamsertifikat['keperluan'] ?>.</td>
                </tr>
            </table>
        </div>
        <br>
        <p class="justify">Dokumen Tersebut telah diterima dalam keadaan baik untuk dapat ditindaklanjuti sesuai isi surat.</p>
    </div>
    <br>
    <br>
    <div class="justify">
        <table class="mx-auto" style="width: 800px;">
            <tr>
                <td class="sub-label">Yang menyerahkan</td>
                <td class="sub-label">Penerima</td>
            </tr>
            <tr>
                <td class="sub-label"><br></td>
                <td class="sub-label"><br></td>
            </tr>
            <tr>
                <td class="sub-label "><br></td>
                <td class="sub-label "><br></td>
            </tr>
            <tr>
                <td class="sub-label "><br></td>
                <td class="sub-label "><br></td>
            </tr>
            <tr>
                <td class="sub-label">(.........................)</td>
                <td class="sub-label">(.........................)</td>
            </tr>

            <tr>
                <td class="sub-label mt-5"><?= $peminjamsertifikat['nama_petugas_pinjam'] ?></td>
                <td class="sub-label mt-5"><?= $peminjamsertifikat['nama_lengkap'] ?></td>
            </tr>
        </table>
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