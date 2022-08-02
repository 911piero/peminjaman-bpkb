<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<style>
    table {
    }
    th {
        text-align: end;
    }
</style>
<div class="content">
    <div class="container-fluid">
        <?= csrf_field(); ?>
        <div class="card card">
            <div class="card-header">
                <h3 class="card-title"><b>Details BPKB</b> </h3>
                <a href="<?= site_url('/bpkb/edit/') . $bpkb['id_bpkb'] ?>" class="btn btn-sm btn-warning float-right">Perubahan Data</a>
            </div>
            <div class="card-body"  >
                <div class="table-striped">
                    <table style="width: 25% ;">
                        <tr>
                            <td><b>Nama Pemilik </b>
                            </td>
                            <td>:</td>
                            <td><?= $bpkb['nama_pemilik']; ?></td>
                        </tr>
                        <tr>
                            <td><b> Nomor Polisi</b>
                            </td>
                            <td>:</td>
                            <td><?= $bpkb['nomor_registrasi']; ?></td>
                        </tr>
                        <tr>
                            <td><b> Alamat</b>
                            </td>
                            <td>:</td>
                            <td><?= $bpkb['alamat']; ?></td>
                        </tr>
                    </table>
                    <table class="table m-0 mt-sm-6">
                        <hr color="black">
                        <tr>
                            <td><b>Merk</b>
                            </td>
                            <td>:</td>
                            <td><?= $bpkb['merk']; ?></td>

                            <td>
                                <table border="1px" >
                                    <td style="font-size: 18px;">
                                        <b>Nomor BPKB : <?= $bpkb['nomor_bpkb']; ?></b>
                                    </td>
                                </table>
                            </td>


                        </tr>
                        <tr>
                            <td><b>Tipe</b>
                            </td>
                            <td>:</td>
                            <td><?= $bpkb['tipe']; ?></td>


                        </tr>
                        <tr>
                            <td><b>Model</b>
                            </td>
                            <td>:</td>
                            <td><?= $bpkb['model']; ?></td>

                            <td><b>Warna</b>
                            </td>
                            <td>:</td>
                            <td><?= $bpkb['warna']; ?></td>
                        </tr>
                        <tr>
                            <td><b>Tahun Pembuatan</b>
                            </td>
                            <td>:</td>
                            <td><?= $bpkb['tahun_pembuatan']; ?></td>

                            <td><b>Bahan Bakar</b>
                            </td>
                            <td>:</td>
                            <td><?= $bpkb['bahan_bakar']; ?></td>
                        </tr>
                        <tr>
                            <td><b>Isi Silinder</b>
                            </td>
                            <td>:</td>
                            <td><?= $bpkb['isi_silinder']; ?></td>

                            <td><b>Warna Plat</b>
                            </td>
                            <td>:</td>
                            <td><?= $bpkb['warna_tnkb']; ?></td>
                        </tr>
                        <tr>
                            <td><b>Nomor Rangka</b>
                            </td>
                            <td>:</td>
                            <td><?= $bpkb['nomor_rangka']; ?></td>

                            <td><b>Tahun Registrasi</b>
                            </td>
                            <td>:</td>
                            <td><?= $bpkb['tahun_registrasi']; ?></td>
                        </tr>
                        <tr>
                            <td><b>Nomor Mesin</b>
                            </td>
                            <td>:</td>
                            <td><?= $bpkb['nomor_mesin']; ?></td>

                            <td><b>Kode Lokasi</b>
                            </td>
                            <td>:</td>
                            <td><?= $bpkb['kode_lokasi']; ?></td>
                        </tr>
                        <tr>

                        </tr>
                    </table>
                </div>
            </div>
            <table class="table m-0 mt-1">
                <td>
                    <b>Gambar</b>
                </td>
            </table>
            <table class="table m-0 mt-1">
                <tr>
                    <?php foreach ($getImg as $key => $link) : ?>
                        <td>
                            <center>
                                <img style="height: 250px;" src="<?= base_url('foto_bpkb/' . $link['link']); ?>" alt="">
                                <br>
                                <br>
                                <a href="<?= base_url('GambarController/delete/' . $link['id_gambar']);  ?>" class="btn btn-danger" onclick="return confirm('Are you sure ?')">HAPUS</a>
                            </center>
                        </td>
                    <?php endforeach; ?>
                </tr>

            </table>
            <table class="table mt-2">
                <thead>
                    <tr>
                        <th>
                            <form action="/GambarController/save/" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="nomor_bpkb" value="<?= $bpkb['nomor_bpkb']; ?>">
                                <input type="file" name="foto_bpkb" id="foto_bpkb" required>
                                <input type="submit" value="Upload" name="submit" class="btn btn-primary">
                            </form>
                        </th>
                    </tr>
                </thead>
            </table>

        </div>
    </div>
</div>
</div>
<?php $this->endSection(); ?>