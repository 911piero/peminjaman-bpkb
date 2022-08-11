<?= $this->extend('layout/template_sf'); ?>

<?= $this->section('content'); ?>
<style>
    .sub-label {
        font-weight: bold;
    }

    .top-label {
        font: bold;
        font-size: large;
    }

    tr,
    td {
        padding-right: 5px;
    }
</style>
<div class="content">
    <div class="container-fluid">
        <?= csrf_field(); ?>
        <div class="row">
            <div class="col">
                <div class="card" style="width:768px; height: 334px;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <table>
                                    <tr>
                                        <td>
                                            <h4>Peminjam</h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="sub-label">Nama Peminjam</td>
                                        <td class="sub-label">:</td>
                                        <td><?= $peminjamsertifikat['nama_lengkap']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="sub-label">NIK</td>
                                        <td class="sub-label">:</td>
                                        <td><?= $peminjamsertifikat['nik']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <hr>
                                        </td>
                                        <td>
                                            <hr>
                                        </td>
                                        <td>
                                            <hr>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4>Sertifikat</h4>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="sub-label">Sertifikat yang Dipinjam</td>
                                        <td class="sub-label">:</td>
                                        <td><?= $peminjamsertifikat['intro']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="sub-label">Kecamatan</td>
                                        <td class="sub-label">:</td>
                                        <td><?= $peminjamsertifikat['kecamatan']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="sub-label">Kelurahan</td>
                                        <td class="sub-label">:</td>
                                        <td><?= $peminjamsertifikat['kelurahan']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="sub-label">Kategori</td>
                                        <td class="sub-label">:</td>
                                        <td><?= $peminjamsertifikat['nm_kategori']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="sub-label">Sertifikat yang Dipinjam</td>
                                        <td class="sub-label">:</td>
                                        <td><?= $peminjamsertifikat['nm_subkategori']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <hr>
                                        </td>
                                        <td>
                                            <hr>
                                        </td>
                                        <td>
                                            <hr>
                                        </td>
                                    </tr>

                                </table>
                            </div>
                            <div class="col">
                                <div>
                                    <table align="center">
                                        <tr>
                                            <td class="sub-label mt-2">
                                                <h5 style="margin: 0;">Status</h5>
                                            </td>
                                            <td class="sub-label">
                                                <h5 style="margin: 0;">:</h5>
                                            </td>
                                            <?php
                                            $status = $peminjamsertifikat['status'];

                                            if ($status == "Dikembalikan") {
                                                $style = 'badge badge-success';
                                            } else if ($status == "Pinjam") {
                                                $style = 'badge badge-warning';
                                            }
                                            ?>
                                            <td class="<?= $style; ?>">
                                                <h5 style="margin: 0;">
                                                    <?= $peminjamsertifikat['status']; ?>
                                                </h5>

                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="height: 334px;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <table>
                                    <tr>
                                        <td>
                                            <h4>Petugas Peminjaman</h4>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="sub-label">Nama Petugas </td>
                                        <td class="sub-label">:</td>
                                        <td><?= $peminjamsertifikat['nama_petugas_pinjam']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="sub-label">NIP</td>
                                        <td class="sub-label">:</td>
                                        <td><?= $peminjamsertifikat['nip_petugas_pinjam']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="sub-label">Tanggal Pinjam</td>
                                        <td class="sub-label">:</td>
                                        <td><?= $peminjamsertifikat['tgl_pinjam']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <hr>
                                        </td>
                                        <td>
                                            <hr>
                                        </td>
                                        <td>
                                            <hr>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4>Petugas Pengembalian</h4>
                                        </td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <td class="sub-label">Nama Petugas </td>
                                        <td class="sub-label">:</td>
                                        <td>
                                            <p class="card-text"> <?= $peminjamsertifikat['nama_petugas_kembali']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="sub-label">NIP</td>
                                        <td class="sub-label">:</td>
                                        <td><?= $peminjamsertifikat['nip_petugas_kembali']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="sub-label">Tanggal Pengembalian</td>
                                        <td class="sub-label">:</td>
                                        <td>
                                            <p class="card-text"> <?= $peminjamsertifikat['tgl_kembali']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <hr>
                                        </td>
                                        <td>
                                            <hr>
                                        </td>
                                        <td>
                                            <hr>
                                        </td>
                                    </tr>
                                </table>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>



    </div>
</div>
<?php $this->endSection(); ?>