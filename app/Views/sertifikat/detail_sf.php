<?= $this->extend('layout/template_sf'); ?>

<?= $this->section('content'); ?>

<style>
    .sub-label {
        font-weight: bold;
    }
</style>

<div class="content">
    <div class="container-fluid">
        <?= csrf_field(); ?>
        <div class="row">
            <div class="col">
                <div class="card card=body">
                    <div class="col d-flex align-items-center justify-content-center">
                        <div class="d-flex align-items-center justify-content-center rounded bg-dark p-2" style="width: 100%;">
                            <h4><b>No. Object</b> : <?= $sertifikat['nama_proyek']; ?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <hr>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <table class="table table-striped">
                            <tr>
                                <td class="sub-label">Nama Objek</td>
                                <td class="sub-label">:</td>
                                <td><?= $sertifikat['intro']; ?></td>
                            </tr>
                            <tr>
                                <td class="sub-label">Alamat</td>
                                <td class="sub-label">:</td>
                                <td><?= $sertifikat['intro2']; ?></td>
                            </tr>
                            <tr>
                                <td class="sub-label">Kecamatan</td>
                                <td class="sub-label">:</td>
                                <td><?= $sertifikat['kecamatan']; ?></td>
                            </tr>
                            <tr>
                                <td class="sub-label">Kelurahan</td>
                                <td class="sub-label">:</td>
                                <td><?= $sertifikat['kelurahan']; ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col">
                        <table class="table table-striped">

                            <tr>
                                <td class="sub-label">Kategori</td>
                                <td class="sub-label">:</td>
                                <td><?= $sertifikat['nm_kategori']; ?></td>
                            </tr>
                            <tr>
                                <td class="sub-label">Sub-Kategori</td>
                                <td class="sub-label">:</td>
                                <td><?= $sertifikat['nm_subkategori']; ?></td>
                            </tr>
                            <tr>
                                <td class="sub-label">Tahun-Objek</td>
                                <td class="sub-label">:</td>
                                <td><?= $sertifikat['tahun']; ?></td>
                            </tr>
                            <tr>
                                <td class="sub-label">Masa Berlaku</td>
                                <td class="sub-label">:</td>
                                <td><b>Tanggal Awal : </b> <?= $sertifikat['tgl_awal']; ?>
                                    <b>s.d Tanggal Akhir : </b> <?= $sertifikat['tgl_awal']; ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>