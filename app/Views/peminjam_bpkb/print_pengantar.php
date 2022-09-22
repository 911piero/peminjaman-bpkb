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
        <button onclick="window.print()" class="btn btn-outline-secondary btn-shadow float-right" title="PRINT">PRINT&nbsp;<i class="fa fa-print"></i></button>
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
        <hr style="border-top: 5px solid cadetblue;">
        <div class="justify" style="font: 12pt;">
            <p style="text-align:right;">Yogyakarta, 14 September 2022</p>
            <p>Yang bertanda tangan di bawah ini :</p>
            <table class="mx-auto" style="width: 800px;">
                <tr>
                    <td class="label">Nama</td>
                    <td class="label" style="padding-left: 100px;">:</td>
                    <td class="label" style="padding-left: 30px;">Ridha Hasan, S.E., M.M.</td>
                </tr>
                <tr>
                    <td class="label">NIP</td>
                    <td class="label" style="padding-left: 100px;">:</td>
                    <td class="label" style="padding-left: 30px;">198212052006041007</td>
                </tr>
                <tr>
                    <td class="label">Jabatan</td>
                    <td class="label" style="padding-left: 100px;">:</td>
                    <td class="label" style="padding-left: 30px;">Kepala Sub Bid Pemanfaatan Aset Daerah BPKAD Kota Yogyakarta.</td>
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
            <p>Mohon perpanjangan ganti plat Nomor Kendaraan AB 2040 IA milik Pemerintah
                <br>
                Kota Yogyakarta
                <br>
                Demikian kami sampaikan, atas bantuannya kami sampaikan terima kasih.
            </p>
        </div>
        <br><br><br>
        <div class="table">
            <p style="text-align: center; width: 30%; float: right;">a.n Kepala
                <br>Ka. Sub Bidang Pemanfaatan Aset Daerah
            <div class="table table-bordered mt-4" style="height: 150px;">
            </div>
            <span style="text-align: center; float: right;"> <u> Ridha Hasan, S.E., M.M</u>
                <br>NIP. 198212052006041007</span>
            </p>
        </div>
    </div>
    <div class="footer mt-5" style="border: 1px solid; text-align: center;">
        <div class="foto-footer">
            <img src="<?= base_url('adminlte/dist/img/segoro.jpg'); ?>" height="50">
        </div>
        <div class="isi">
            <p> S E G O R O A M A R T O
                <br>
                SEMANGAT GOTONG ROYONG AGAWE MAJUNE NGAYOGYAKARTA
                <br>
                KEMANDIRIAN - KEDISIPLINAN - KEPEDULIAN - KEBERSAMAAN
            </p>
        </div>
    </div>

</html>

</body>