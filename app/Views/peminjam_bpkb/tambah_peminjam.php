<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<style>
    .select2-container .select2-selection--single {
        height: 40px !important;
    }

    .select2-container--default .select2-selection--single {
        border: 1px solid #ccc !important;
        border-radius: 4px !important;
    }
</style>
<section class="content">
    <div class="container-fluid">
        <form action="<?= site_url('/peminjam/save') ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Form Tambah Data Peminjam</h3>
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
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nomor Surat Tanda Terima</label>
                                <input type="text" class="form-control <?= ($validation->hasError('nomor_surat')) ? 'is-invalid' : ' '; ?>" id="nomor_surat" name="nomor_surat" placeholder="Masukan Nomor Surat">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nomor_surat'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nomor Registrasi </label>
                                    <div class="input-group mb-3">
                                        <select class="form-control select2" name="id_bpkb" <?= ($validation->hasError('id_bpkb')) ? 'is-invalid' : ' '; ?> required autocomplete="on">
                                            <option selected value="Cari ">Pilih Kendaraan</option>
                                            <?php foreach ($getBpkb as $b) : ?>
                                                <option value="<?= $b['id_bpkb']; ?>"><?= $b['nomor_registrasi']; ?> </option>
                                            <?php endforeach; ?>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('model'); ?>
                                        </div>
                                    </div>
                                </div>
                                <label for="exampleInputEmail1">Status Kendaraan</label>
                                <div class="input-group mb-3">
                                    <select name="status_kendaraan" class="custom-select form-control <?= ($validation->hasError('status_kendaraan')) ? 'is-invalid' : ' '; ?>" required>
                                        <option value="">Pilih Status Kendaraan</option>
                                        <option value="Pakai">Pakai</option>
                                        <option value="Pinjam Pakai">Pinjam Pakai</option>
                                        
                                    </select>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('model'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Lokasi Kendaraan</label>
                                <div class="input-group mb-3">
                                    <select name="lokasi_kendaraan" class="custom-select form-control <?= ($validation->hasError('lokasi_kendaraan')) ? 'is-invalid' : ' '; ?>" required>
                                        <option selected value=" ">Pilih Lokasi Kendaraan</option>
                                        <option value="Internal Pemkot">Internal Pemkot</option>
                                        <option value="Eksternal Pemkot">Eksternal Pemkot</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('model'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Keterangan Lokasi</label>
                                <input type="text" class="form-control <?= ($validation->hasError('ket_lokasi')) ? 'is-invalid' : ' '; ?>" id="ket_lokasi" name="ket_lokasi" placeholder="Masukan Keterangan Lokasi">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('ket_lokasi'); ?>
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
                                <div class="md-form md-outline" inline="true">
                                    <label for="example">Foto KTP</label>
                                    <input style="height:45px" type="file" class="form-control <?= ($validation->hasError('foto_ktp')) ? 'is-invalid' : ' '; ?>" name="foto_ktp">
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
<script>
    $('.select2').select2();
</script>


<?php $this->endSection(); ?>