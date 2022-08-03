<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<style>
    @media print {
        .card-header {
            display: none;
        }

        .foto {
            display: none;
        }

        .btn {
            display: none;
        }

        .upload {
            display: none;
        }

        .gambar {
            display: list-item;
        }

        .main-footer {
            display: none;
        }
    }

    .sub-label {
        font-weight: bold;
    }

    th {
        text-align: end;
    }
</style>
<div class="content">
    <div class="container-fluid">
        <?= csrf_field(); ?>
        <div class="card-header">
            <button onclick="window.print()" class="btn btn-outline-secondary btn-shadow float-right">PRINT<i class="fa fa-print"></i></button>
            <a href="<?= site_url('/bpkb/edit/') . $bpkb['id_bpkb'] ?>" class="btn btn-sm btn-warning">Perubahan Data</a>
        </div>
        <div class="row">
            <div class="col">
                <div class="card card-body">
                    <div class="row">
                        <div class="col">
                            <hr>
                            <table class="table table-striped" style="width: 400px">
                                <tr>
                                    <td class="sub-label">Nama Pemilik</td>
                                    <td class="sub-label">:</td>
                                    <td><?= $bpkb['nama_pemilik']; ?></td>
                                </tr>
                                <tr>
                                    <td class="sub-label">Nomor Polisi</td>
                                    <td class="sub-label">:</td>
                                    <td><?= $bpkb['nomor_registrasi']; ?></td>
                                </tr>
                                <tr>
                                    <td class="sub-label">Alamat</td>
                                    <td class="sub-label">:</td>
                                    <td><?= $bpkb['alamat']; ?></td>
                                </tr>
                            </table>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="card" style="height: 403px;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <table class="table table-striped">
                                    <tr>
                                        <td class="sub-label">Merk</td>
                                        <td class="sub-label">:</td>
                                        <td><?= $bpkb['merk']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="sub-label">Tipe</td>
                                        <td class="sub-label">:</td>
                                        <td><?= $bpkb['tipe']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="sub-label">Model</td>
                                        <td class="sub-label">:</td>
                                        <td><?= $bpkb['model']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="sub-label">Tahun Pembuatan</td>
                                        <td class="sub-label">:</td>
                                        <td><?= $bpkb['tahun_pembuatan']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="sub-label">Isi Silinder</td>
                                        <td class="sub-label">:</td>
                                        <td><?= $bpkb['isi_silinder']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="sub-label">Nomor Rangka</td>
                                        <td class="sub-label">:</td>
                                        <td><?= $bpkb['nomor_rangka']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="sub-label">Nomor Mesin</td>
                                        <td class="sub-label">:</td>
                                        <td><?= $bpkb['nomor_mesin']; ?></td>
                                </table>
                            </div>
                            <div class="col">
                                <table class="table table-striped" style="width:350px text-align=right">
                                    <tr>
                                        <td>
                                            <h4><b>Nomor BPKB</b> : <?= $bpkb['nomor_registrasi']; ?></h4>
                                        </td>
                                    </tr>
                                </table>
                                <hr>
                                <table class="table table-striped">
                                    <tr>
                                        <td class="sub-label">Warna</td>
                                        <td class="sub-label">:</td>
                                        <td><?= $bpkb['warna']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="sub-label">Bahan Bakar</td>
                                        <td class="sub-label">:</td>
                                        <td><?= $bpkb['bahan_bakar']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="sub-label">Warna Plat</td>
                                        <td class="sub-label">:</td>
                                        <td><?= $bpkb['warna_tnkb']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="sub-label">Tahun Registrasi</td>
                                        <td class="sub-label">:</td>
                                        <td><?= $bpkb['tahun_registrasi']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="sub-label">Kode Lokasi</td>
                                        <td class="sub-label">:</td>
                                        <td><?= $bpkb['kode_lokasi']; ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card card-body">
                    <div class="row">
                        <div class="col">
                            <table>
                                <b class="foto">Foto : </b>
                            </table>
                            <hr>
                            <table class="gambar table-bordered">
                                <?php foreach ($getImg as $key => $link) : ?>
                                    <td>
                                        <center><img style="height:250px ; width:100%" src="<?= base_url('foto_bpkb/' . $link['link']); ?>" alt="">
                                            <br>
                                            <br>
                                            <a href="<?= base_url('GambarController/delete/' . $link['id_gambar']);  ?>" class="btn btn-danger" onclick="return confirm('Are you sure ?')">HAPUS</a>
                                            <center>
                                                <br>
                                    </td>
                                <?php endforeach; ?>
                            </table>
                            <table class="table mt-3">
                                <th>
                                    <form class="upload" action="/GambarController/save/" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="nomor_bpkb" value="<?= $bpkb['nomor_bpkb']; ?>">
                                        <input type="file" name="foto_bpkb" id="foto_bpkb" required>
                                        <input type="submit" value="Upload" name="submit" class="btn btn-primary">
                                    </form>
                                </th>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php $this->endSection(); ?>