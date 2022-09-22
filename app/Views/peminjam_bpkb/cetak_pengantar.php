<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="content">
    <div class="container-fluid">
        <form action="<?= site_url('/peminjam/print_pengantar') ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Form Cetak Pengantar</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <input type="hidden" name="id_bpkb" value="">
                                <label for="exampleInputEmail1">Pilih Pejabat Penandatangan </label>
                                <div class="input-group mb-3">
                                    <select class="form-control select2" name="id_pengantar" <?= ($validation->hasError('id_pengantar')) ? 'is-invalid' : ' '; ?> required autocomplete="on">
                                        <option selected value="Cari ">Pilih Nama</option>
                                        <?php foreach ($getPengantar as $b) : ?>
                                            <option value="<?= $b['id_pengantar']; ?>"><?= $b['nama_pejabat']; ?> </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('model'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-grup">
                                <label for="exampleInputEmail1">Pilih Surat Pengantar </label>
                                <div class="input-group mb-3">
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="suratpengantar" value="1">Pengantar 1 Tahunan
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="suratpengantar" value="5">Pengantar 5 Tahunan
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit" value="cetak">Cetak</button>
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