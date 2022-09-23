<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

        .kop {
            display: flex;
            justify-content: center;
        }
    </style>
</head>

<body>
    <div class="card-header">
        <button onclick="window.print()" class="btn btn-outline-secondary btn-shadow" title="PRINT">PRINT&nbsp;<i class="fa fa-print"></i></button>
    </div>
    <div class="container" style="max-width:fit-content; border: 1px solid;">
        <div class="kop mt-5">
            <div class="logo">
                <img src="<?= base_url('adminlte/dist/img/Logo.png'); ?>" height="120" width="100">
            </div>
            <div class="logo-text text-center">
                <p style="font-size: 14pt;">PEMERINTAH KOTA YOGYAKARTA
                    <br>
                    <span style="font-size: 18pt;"><b>BADAN PENGELOLAAN KEUANGAN <br>DAN ASET DAERAH</b></span>
                    <br>
                    <img src="<?= base_url('adminlte/dist/img/hanacaraka.png'); ?>" height="50">
                    <br>
                    <span style="font-size: 10pt;">Jl. Kenari No. 56 Yogyakarta Kode Pos : 55165 Telp. (0274) 548519, 562835, 515865, 562682<br>Fax (0274) 548519
                        <br>EMAIL : <a href="">bpkad@jogjakota.go.id</a>
                        <br>HOTLINE SMS : 0812 278 0001 HOTLINE E-MAIL : upik@jogjakota.go.id
                        <br>WEBSITE : www.jogjakota.go.id</span>
                </p>
            </div>
        </div>
        <hr style="border-top: 5px solid black;">
        <div class="justify" style="font: 12pt;">
            <div class="row">
                <div class="col-md-4" style="">
                    <table class="mx-auto" style="width: 400px;">
                        <tr>
                            <td class="label">Nomor</td>
                            <td class="label" style="padding-left: 20px;">:</td>
                            <td class="label" style="padding-left: 10px;">024/</td>
                        </tr>
                        <tr>
                            <td class="label">Sifat</td>
                            <td class="label" style="padding-left: 20px;">:</td>
                            <td class="label" style="padding-left: 10px;">-</td>
                        </tr>
                        <tr>
                            <td class="label">Lamp</td>
                            <td class="label" style="padding-left: 20px;">:</td>
                            <td class="label" style="padding-left: 10px;">1 Eksemplar</td>
                        </tr>
                        <tr>
                            <td class="label">Hal</td>
                            <td class="label" style="padding-left: 20px;">:</td>
                            <td class="label" style="padding-left: 10px;">Permohonan untuk memproses Penggantian/Perpanjangan STNK</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-4 offset-md-4">
                    <p style="">Yogyakarta, 14 September 2022</p>
                    <p style="">Kepada
                        <br>Yth. Direktur Lalu Lintas POLDA
                        <br><span style="text-align:center;">Daerah Istimewa Yogyakarta</span>
                    </p>
                </div>
            </div>
            <br>
            <p>Yang bertanda tangan di bawah ini :</p>
            <table class="mx-auto" style="width: 800px;">
                <tr>
                    <td class="label">Nama</td>
                    <td class="label" style="padding-left: 100px;">:</td>
                    <td class="label" style="padding-left: 30px;"><?= $pejabat['nama_pejabat']; ?></td>
                </tr>
                <tr>
                    <td class="label">NIP</td>
                    <td class="label" style="padding-left: 100px;">:</td>
                    <td class="label" style="padding-left: 30px;"><?= $pejabat['nip_pejabat']; ?></td>
                </tr>
                <tr>
                    <td class="label">Jabatan</td>
                    <td class="label" style="padding-left: 100px;">:</td>
                    <td class="label" style="padding-left: 30px;"><?= $pejabat['jabatan']; ?></td>
                </tr>
                <tr>
                    <td class="label">Instansi</td>
                    <td class="label" style="padding-left: 100px;">:</td>
                    <td class="label" style="padding-left: 30px;">Badan Pengelolaan Keuangan dan Aset Daerah Kota Yogyakarta</td>
                </tr>
                <tr>
                    <td class="label">Alamat Kantor</td>
                    <td class="label" style="padding-left: 100px;">:</td>
                    <td class="label" style="padding-left: 30px;">Kompleks Balaikota, Jalan Kenari No. 56 Yogyakarta</td>
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
        <br>
        <div class="bot" style="font: size 12pt ;">
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4 offset-md-6">
                    <table class="mx-auto" style="width: 300px;">
                        <tr>
                            <td class="label" style="text-align: center ;">a.n</td>
                        </tr>
                        <tr>
                            <td class="label" style="text-align: center ;"><?= $pejabat['jabatan']; ?></td>
                        </tr>
                    </table>
                    <br>
                    <br>
                    <br>
                    <table class="mx-auto" style="width: 300px;">
                        <tr>
                            <td class="label" style="text-align: center ;"><u> <?= $pejabat['nama_pejabat']; ?></u></td>
                        </tr>
                        <tr>
                            <td class="label" style="text-align: center ;">NIP. <?= $pejabat['nip_pejabat']; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-md-0 offset-md-3">
                    <img src="<?= base_url('adminlte/dist/img/segoro.jpg'); ?>" height="60">
                </div>
                <div class="col-md-6 offset-md-0" style="text-align: center; font-size: 9pt; ">S E G O R O A M A R T O<br>
                    SEMANGAT GOTONG ROYONG AGAWE MAJUNE NGAYOGYAKARTA
                    <br>
                    KEMANDIRIAN - KEDISIPLINAN - KEPEDULIAN - KEBERSAMAAN
                </div>
            </div>
        </div>


    </div>

</html>

</body>