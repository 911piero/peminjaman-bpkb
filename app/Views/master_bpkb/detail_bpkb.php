<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }


    th {
        text-align: end;
    }
</style>
<div class="content">
    <div class="container-fluid">
        <?= csrf_field(); ?>
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Details BPKB </h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table m-0" border="1px">
                        <thead>
                            <tr>
                                <td>Nama Pemilik : <p class="card-text"> <?= $bpkb['nama_pemilik']; ?></p>
                                </td>
                                <td>Nomor Registrasi : <p class="card-text"><?= $bpkb['nomor_registrasi']; ?></p>
                                </td>
                                <td>Alamat : <p class="card-text"><?= $bpkb['alamat']; ?></p>
                                </td>
                                <td>Merk : <p class="card-text"><?= $bpkb['merk']; ?></p>
                                </td>

                            </tr>
                            <tr> 
                                <td>Tipe : <p class="card-text"><?= $bpkb['tipe']; ?></p>
                                </td>
                                <td>Model : <p class="card-text"> <?= $bpkb['model']; ?></p>
                                </td>
                                <td>Tahun Pembuatan : <p class="card-text"><?= $bpkb['tahun_pembuatan']; ?></p>
                                </td>
                                <td>Isi Silinder : <p class="card-text"> <?= $bpkb['isi_silinder']; ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td>Nomor Rangka : <p class="card-text"><?= $bpkb['nomor_rangka']; ?></p>
                                </td>
                                <td>Nomor Mesin : <p class="card-text"> <?= $bpkb['nomor_mesin']; ?></p>
                                </td>
                                <td>Warna : <p class="card-text"><?= $bpkb['warna']; ?></p>
                                </td>
                                <td>Bahan Bakar : <p class="card-text"><?= $bpkb['bahan_bakar']; ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td>Warna Plat : <p class="card-text"><?= $bpkb['warna_tnkb']; ?></p>
                                </td>
                                <td>Tahun Registrasi: <p class="card-text"><?= $bpkb['tahun_registrasi']; ?></p>
                                </td>
                                <td>Nomor BPKB : <p class="card-text"><?= $bpkb['nomor_bpkb']; ?></p>
                                </td>
                                <td>Kode Lokasi : <p class="card-text"> <?= $bpkb['kode_lokasi']; ?></p>
                                </td>
                            </tr>
                        </thead>
                    </table>
                    <table class="table m-0 mt-sm-4" border="1px">
                        <thead>
                            <tr>
                                <td>
                                    Gambar
                                </td>
                            </tr>
                        </thead>
                    </table>
                    <table class="table m-0 mt-1" border="1px">
                        <thead>
                            <tr>
                                <?php foreach ($getImg as $key => $link) : ?>
                                    <td>
                                        <center>
                                            <img style="width: 100%;" src="<?= base_url('foto_bpkb/' . $link['link']); ?>" alt="">
                                            <br>
                                            <br>
                                            <a href="<?= base_url('GambarController/delete/' . $link['id_gambar']);  ?>" class="btn btn-danger" onclick="return confirm('Are you sure ?')">HAPUS</a>
                                        </center>
                                    </td>
                                <?php endforeach; ?>
                            </tr>
                        </thead>
                    </table>
                    <table class="table mt-2" border="1px">
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
</div>
<?php $this->endSection(); ?>