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

    #hideValuesOnSelect {
        display: none;
    }
</style>
<section class="content">
    <div class="container-fluid">
        <form action="<?= site_url('mutasi/save') ?>" method="post">
            <?= csrf_field(); ?>
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Form Mutasi BPKB</h3>
                </div>
                <div class="card-body">
                    <div class="row cols-3">
                        <div class="col">
                            <div class="form-group">
                                <label for="jenismutasi">Jenis Mutasi</label>
                                <div class="input-group mb-3">
                                    <select name="jenis_mutasi" class="custom-select <?= ($validation->hasError('')) ? 'is-invalid' : ' '; ?>" onchange="displayDivDemo('hideValuesOnSelect', this)" required>
                                        <option selected>Pilih Jenis Mutasi</option>
                                        <option value="0">Perubahan Nomor Registrasi</option>
                                        <option value="1">Penghapusan Nomor Registrasi</option>
                                    </select>
                                    <div class="invalid-feedback d-block">
                                        <?= $validation->getError(''); ?>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="">Pilih Kendaraan</label>
                                <select class="form-control select2" name="nomor_registrasi" <?= ($validation->hasError('nomor_registrasi')) ? 'is-invalid' : ' '; ?> required autocomplete="on">
                                    <option selected value="Cari ">Pilih Kendaraan</option>
                                    <?php foreach ($getBpkb as $b) : ?>
                                        <option value="<?= $b['nomor_registrasi']; ?>"><?= $b['nomor_registrasi']; ?> </option>
                                    <?php endforeach; ?>
                                </select>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nomor_registrasi'); ?>
                                </div>
                            </div>
                            <div id="hideValuesOnSelect">
                                <div class="form-group">
                                    <label for="inputNoRegistBaru">Nomor Registrasi Baru</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('nomor_registrasi_baru')) ? 'is-invalid' : ' '; ?>" id="nomor_registrasi_baru" name="nomor_registrasi_baru" placeholder="Masukan Nomor Registrasi Baru">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('nomor_registrasi_baru'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <input type="submit" value="Konfirm Mutasi" class="btn btn-primary float-right">
                    </div>
                </div>

            </div>
        </form>
    </div>


</section>

<script>
    function displayDivDemo(id, elementValue) {
        document.getElementById(id).style.display = elementValue.value == 0 ? 'block' : 'none';
    }
    $('.select2').select2();
</script>



<?php $this->endSection(); ?>