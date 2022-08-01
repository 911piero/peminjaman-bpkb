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
                <h3 class="card-title">Detail Peminjam </h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">

                    <table class="table m-0" border="1px">
                        <thead>
                            <tr>
                                <td>Nama Lengkap : <p class="card-text"> <?= $peminjam['nama_lengkap']; ?></p>
                                </td>
                                <td>NIK : <p class="card-text"><?= $peminjam['nik']; ?></p>
                                </td>
                                <td>Nomor Registrasi: <p class="card-text"><?= $peminjam['nomor_registrasi']; ?></p>
                                </td>

                            </tr>
                            <tr>
                                <td>Nama Petugas Peminjaman : <p class="card-text"><?= $peminjam['nama_petugas_pinjam']; ?></p>
                                </td>
                                <td>NIP Petugas Pinjaman : <p class="card-text"><?= $peminjam['nip_petugas_pinjam']; ?></p>
                                </td>
                                <td>Nama Petugas Kembali : <p class="card-text"> <?= $peminjam['nama_petugas_kembali']; ?></p>
                                </td>

                            </tr>
                            <tr>
                                <td>NIP Petugas Kembali : <p class="card-text"><?= $peminjam['nip_petugas_kembali']; ?></p>
                                </td>
                                <td>Tanggal Pinjam : <p class="card-text"> <?= $peminjam['tgl_pinjam']; ?></p>
                                </td>
                                <td>Tanggal Kembali : <p class="card-text"> <?= $peminjam['tgl_kembali']; ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td> keterangan Lokasi : <p class="card-text"><?= $peminjam['ket_lokasi']; ?></p>
                                </td>
                                <td>Lokasi Kendaraan : <p class="card-text"> <?= $peminjam['lokasi_kendaraan']; ?></p>
                                </td>
                                <td>Status Kendaraan : <p class="card-text"> <?= $peminjam['status_kendaraan']; ?></p>
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
                                        <center><img style="max-width:100%;" src="<?= base_url('foto_peminjam/' . $link['link']); ?>" alt="">
                                            <br>
                                            <br>
                                            <a href="<?= base_url('GambarPeminjamanController/delete/' . $link['id_gambar']);  ?>" class="btn btn-danger" onclick="return confirm('Are you sure ?')">HAPUS</a>
                                            <center>
                                    </td>
                                <?php endforeach; ?>
                            </tr>
                        </thead>
                    </table>
                    <table class="table mt-2" border="1px">
                        <thead>
                            <tr>
                                <th>
                                    <form action="/GambarPeminjamanController/save/" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="nik" value="<?= $peminjam['nik']; ?>">
                                        <input type="file" name="foto_peminjam" id="foto_peminjam" required>
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