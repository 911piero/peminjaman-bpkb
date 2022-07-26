<?= $this->extend('layout/template_sf'); ?>

<?= $this->section('content'); ?>
<section class="content">
    <div class="container-fluid">
        <form action="<?= site_url('/peminjamsertifikat/update/' . $peminjamsertifikat['id_peminjam_sertifikat']); ?>" method="post">
            <?= csrf_field(); ?>
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Form Pengembalian Sertifikat</h3>
                </div>
                <div class="card-body">
                    <div class="row cols-3">
                        <div class="col">
                            <div class="form-group">
                                <input type="hidden" class="form-control" id="nama_lengkap" value="<?= $peminjamsertifikat['nama_lengkap']; ?>" name="nama_lengkap">
                                <input type="hidden" class="form-control" id="nik" value="<?= $peminjamsertifikat['nik']; ?>" name="nik" placeholder="Masukan NIK">
                                <input type="hidden" class="form-control" id="nama_petugas_pinjam" value="<?= $peminjamsertifikat['nama_petugas_pinjam']; ?>" name="nama_petugas_pinjam">
                                <input type="hidden" class="form-control" id="nip_petugas_pinjam" value="<?= $peminjamsertifikat['nip_petugas_pinjam']; ?>" name="nip_petugas_pinjam">
                                <input type="hidden" value="<?= $peminjamsertifikat['id_sertifikat'] ?>" name="id_sertifikat">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Petugas Pengembalian</label>
                                <input type="text" class="form-control <?= ($validation->hasError('nama_petugas_kembali')) ? 'is-invalid' : ' '; ?>" id="nama_petugas_kembali" value="" name="nama_petugas_kembali" placeholder="Masukan Nama">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nama_petugas_kembali'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">NIP Petugas Pengembalian</label>
                                <input type="text" class="form-control <?= ($validation->hasError('nip_petugas_kembali')) ? 'is-invalid' : ' '; ?>" id="nip_petugas_kembali" value="" name="nip_petugas_kembali" placeholder="Masukan NIP">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nip_petugas_kembali'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="md-form md-outline input-with-post-icon datepicker" inline="true">
                                    <label for="example">Tanggal Kembali</label>
                                    <input type="date" class="form-control <?= ($validation->hasError('tgl_kembali')) ? 'is-invalid' : ' '; ?>" name="tgl_kembali">
                                </div>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('tgl_kembali'); ?>
                                </div>
                            </div>
                            <div class="col-md-12 mt-5 text-right">
                                <button type="submit" class="btn btn-primary ">Simpan</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>


</section>



<?php $this->endSection(); ?>