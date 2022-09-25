<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Pengantar 5 Tahunan - <?= $peminjam['nomor_registrasi']; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
        @media print {
            #toolbarContainer {
                display: none;
            }

            .card-header {
                display: none;
            }
        }

        .container {
            height: auto;
        }

        .kop {
            display: flex;
            justify-content: center;
            height: fit-content;
            width: 100%;
            margin: 0px;
            padding: 10px;
        }

        .logo {
            height: fit-content;
            margin-right: 10px;
        }

        .logo img {
            max-width: 70px;
        }

        .logo-text {
            width: 450px;
            position: relative;
            transform: translateY(10%);
            height: fit-content;
            margin-left: 10px;

            /* or try 50% */
        }

        .logo-text h3 {
            padding: 0px;
            margin: 0px;
            font-size: 14pt;
            font-weight: light;
        }

        .logo-text h2 {
            padding: 0px;
            margin: 0px;
            font-size: 18pt;
            font-weight: bold;
        }

        .hanacaraka {
            margin-bottom: 20px;
        }

        .text-contact p {
            padding: 0px;
            margin: -5px;
            font-size: 12pt;
        }


        .footer {
            display: flex;
            justify-content: center;
            height: fit-content;
            width: 100%;
            margin: 0px;
            bottom: 0px;
        }

        .footer img {
            margin: 10px;
            max-width: 30px;
        }

        .footer .isi {
            margin: 10px;

        }

        .footer p {
            padding: 0px;
            margin: 0px;
        }

        .text-sign {
            width: fit-content;
            float: right;
            margin-bottom: 200px;
        }

        .text-sign p {
            font-size: 12pt;
            padding: 0px;
            margin: 0px;
        }
    </style>
</head>

<body>
    <div class="card-header clearfix">
        <a href="<?php echo $_SERVER['HTTP_REFERER'] ?>" class="btn btn-primary btn-shadow" title="Kembali"><i class="fa fa-arrow-left"></i>&nbsp;Kembali</a>
        <button onclick="window.print()" class="btn btn-warning float-right" title="PRINT">PRINT&nbsp;<i class="fa fa-print"></i></button>
    </div>
    <div class="clearfix"></div>
    <div class="container" style="padding-left: 100px; padding-right: 100px;">
        <div class="kop">
            <div class="logo">
                <img src="<?= base_url('adminlte/dist/img/Logo.png'); ?>">
            </div>
            <div class="logo-text text-center">
                <h3>PEMERINTAH KOTA YOGYAKARTA</h3>
                <h2>BADAN PENGELOLAAN KEUANGAN DAN ASET DAERAH</h3>
            </div>
        </div>
        <div class="hanacaraka text-center">
            <img src="<?= base_url('adminlte/dist/img/hanacaraka.png'); ?>">
        </div>
        <div class="text-contact text-center">
            <p>Jl. Kenari No. 56 Yogyakarta Kode Pos : 55165
            <p> Telp. (0274) 548519, 562835, 515865, 562682 Fax (0274) 548519</p>
            <p>EMAIL : bpkad@jogjakota.go.id </p>
            <p> HOTLINE SMS : 0812 278 0001 HOTLINE E-MAIL : upik@jogjakota.go.id </p>
            <p> WEBSITE : www.jogjakota.go.id</p>
        </div>
        <hr style="border-bottom: 2px solid black; margin-bottom: 2px;">
        <hr style="border-top: 2px solid black; margin-top: 1px;margin-bottom: 20px;">
        <div class="">
            <?php
            $tgl = date_indo($tanggal);
            ?>
            <p style="text-align:right;">Yogyakarta, <?= $tgl; ?></p>
            <p>Yang bertanda tangan di bawah ini :</p>
            <table class="mx-auto" style="width: 800px;">
                <tr>
                    <td class="label" style="padding-left: 50px;">Nama</td>
                    <td class="label" style="padding-left: 50px;">:</td>
                    <td class="label"><?= $pejabat['nama_pejabat']; ?></td>
                </tr>
                <tr>
                    <td class="label" style="padding-left: 50px;">NIP</td>
                    <td class="label" style="padding-left: 50px;">:</td>
                    <td class="label"><?= $pejabat['nip_pejabat']; ?></td>
                </tr>
                <tr>
                    <td class="label" style="padding-left: 50px;">Jabatan</td>
                    <td class="label" style="padding-left: 50px;">:</td>
                    <td class="label"><?= $pejabat['jabatan']; ?></td>
                </tr>
                <tr>
                    <td class="label" style="padding-left: 50px;">Instansi</td>
                    <td class="label" style="padding-left: 50px;">:</td>
                    <td class="label">Badan Pengelolaan Keuangan dan Aset Daerah Kota Yogyakarta</td>
                </tr>
                <tr>
                    <td class="label" style="padding-left: 50px;">Alamat Kantor</td>
                    <td class="label" style="padding-left: 50px;">:</td>
                    <td class="label">Kompleks Balaikota, Jalan Kenari No. 56 Yogyakarta</td>
                </tr>
            </table>
            <br>
            <p>Mohon perpanjangan ganti plat Nomor Kendaraan <b><?= $peminjam['nomor_registrasi']; ?></b> milik Pemerintah
                <br>
                Kota Yogyakarta
                <br>
                Demikian kami sampaikan, atas bantuannya kami sampaikan terima kasih.
            </p>
        </div>
        <br><br><br>
        <div class="text-sign text-center clearfix" style="width: 50%; float: right;">
            <p style="margin-bottom: 100px; ">a.n <br> <?= $pejabat['jabatan']; ?></p>
            <!-- <div class="nama-nip" style="width: 50%; float: right; "> -->
                <p> <u><?= $pejabat['nama_pejabat']; ?></u></p>
                <p>NIP. <?= $pejabat['nip_pejabat']; ?> </p>
            <!-- </div> -->
        </div>
        <div class="footer ">
            <div class="foto-footer">
                <img src="<?= base_url('adminlte/dist/img/segoro.jpg'); ?>">
            </div>
            <div class="isi text-center">
                <p style="font-size: 10pt;"> S E G O R O A M A R T O </p>
                <p style="font-size: 9pt;">SEMANGAT GOTONG ROYONG AGAWE MAJUNE NGAYOGYAKARTA </p>
                <p style="font-size: 9pt;"> KEMANDIRIAN - KEDISIPLINAN - KEPEDULIAN - KEBERSAMAAN</p>
            </div>
        </div>
    </div>


</html>

</body>