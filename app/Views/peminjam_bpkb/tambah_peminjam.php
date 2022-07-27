<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section class="content">
    <div class="container-fluid">
        <form action="<?= site_url('/peminjam/save') ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Form Tambah Data Peminjam BPKB</h3>
                </div>
                <div class="card-body">
                    <div class="row cols-3">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Lengkap</label>
                                <input type="text" class="form-control <?= ($validation->hasError('nama_lengkap')) ? 'is-invalid' : ' '; ?>" id="nama_lengkap" name="nama_lengkap" placeholder="Masukan Nama Lengkap">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nama_lengkap'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">NIK</label>
                                <input type="text" class="form-control <?= ($validation->hasError('nik')) ? 'is-invalid' : ' '; ?>" id="nik" name="nik" placeholder="Masukan NIK">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nik'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Petugas Peminjaman</label>
                                <input type="text" class="form-control <?= ($validation->hasError('nama_petugas_pinjam')) ? 'is-invalid' : ' '; ?>" id="nama_petugas_pinjam" name="nama_petugas_pinjam" placeholder="Masukan Nama">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nama_petugas_pinjam'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">NIP Petugas Peminjaman</label>
                                <input type="text" class="form-control <?= ($validation->hasError('nip_petugas_pinjam')) ? 'is-invalid' : ' '; ?>" id="nip_petugas_pinjam" name="nip_petugas_pinjam" placeholder="Masukan NIP">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nip_petugas_pinjam'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputEmail1">BPKB</label>
                                <div class="input-group mb-3">
                                    <select name="id_bpkb" class="custom-select form-control <?= ($validation->hasError('id_bpkb')) ? 'is-invalid' : ' '; ?>" autocomplete="on" >
                                        <option selected value=" ">Pilih Kendaraan</option>
                                        <?php foreach ($getBpkb as $b) : ?>
                                            <option value="<?= $b['id_bpkb']; ?>"><?= $b['nomor_bpkb']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('model'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" inline="true">
                                    <label for="example">Tanggal Pinjam</label>
                                    <input type="date" class="form-control <?= ($validation->hasError('tgl_pinjam')) ? 'is-invalid' : ' '; ?>" name="tgl_pinjam">
                                </div>  
                                <div class="invalid-feedback">
                                    <?= $validation->getError('tgl_pinjam'); ?>
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
                            <div class="form-group">
                                <div class="md-form md-outline" inline="true">
                                    <label for="example">Foto KTP</label>
                                    <input type="file" class="form-control <?= ($validation->hasError('foto_ktp')) ? 'is-invalid' : ' '; ?>" name="foto_ktp">
                                </div>        
                                <div class="invalid-feedback">
                                    <?= $validation->getError('foto_ktp'); ?>
                                </div>
                            </div>
                            <div class="col-md-12 mt-5 text-right">
                                <button type=" submit" class="btn btn-primary ">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>


</section>



<?php $this->endSection(); ?>