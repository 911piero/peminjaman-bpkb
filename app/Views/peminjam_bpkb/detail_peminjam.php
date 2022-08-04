<?= $this->extend('layout/template'); ?>

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
        <div class="card-header">
        <a href="<?= site_url('/peminjam/edit/') . $peminjam['id_bpkb'] ?>" class="btn btn-sm btn-warning float-rightN">Perubahan Data</a>
        </div>
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
                                        <td><?= $peminjam['nama_lengkap']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="sub-label">NIK</td>
                                        <td class="sub-label">:</td>
                                        <td><?= $peminjam['nik']; ?></td>
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
                                            <h4>Kendaraan</h4>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="sub-label">Kendaraan Dipinjam</td>
                                        <td class="sub-label">:</td>
                                        <td><?= $peminjam['nomor_registrasi']; ?></td>
                                    </tr>

                                    <tr>
                                        <td class="sub-label">Status Kendaraan</td>
                                        <td class="sub-label">:</td>
                                        <td><?= $peminjam['status_kendaraan']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="sub-label">Lokasi Kendaraan</td>
                                        <td class="sub-label">:</td>
                                        <td><?= $peminjam['lokasi_kendaraan']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="sub-label">Keterangan Lokasi</td>
                                        <td class="sub-label">:</td>
                                        <td><?= $peminjam['ket_lokasi']; ?></td>
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

                                <div class="images">
                                    <?php foreach ($getImg as $key => $link) : ?>
                                        <img src="<?= base_url('foto_peminjam/' . $link['link']); ?>" alt="" class="card" style="max-height: 250px;">
                                    <?php endforeach; ?>
                                </div>
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
                                            $status = $peminjam['status'];

                                            if ($status == "Dikembalikan") {
                                                $style = 'badge badge-success';
                                            } else if ($status == "Pinjam") {
                                                $style = 'badge badge-warning';
                                            }
                                            ?>
                                            <td class="<?= $style; ?>">
                                                <h5 style="margin: 0;">
                                                    <?= $peminjam['status']; ?>
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
                                        <td><?= $peminjam['nama_petugas_pinjam']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="sub-label">NIP</td>
                                        <td class="sub-label">:</td>
                                        <td><?= $peminjam['nip_petugas_pinjam']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="sub-label">Tanggal Pinjam</td>
                                        <td class="sub-label">:</td>
                                        <td><?= $peminjam['tgl_pinjam']; ?></td>
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
                                            <p class="card-text"> <?= $peminjam['nama_petugas_kembali']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="sub-label">NIP</td>
                                        <td class="sub-label">:</td>
                                        <td><?= $peminjam['nip_petugas_kembali']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="sub-label">Tanggal Pengembalian</td>
                                        <td class="sub-label">:</td>
                                        <td>
                                            <p class="card-text"> <?= $peminjam['tgl_kembali']; ?>
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