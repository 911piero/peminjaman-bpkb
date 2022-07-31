<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<style>
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
                                <label for="inputNoRegistLama">Nomor Registrasi</label>
                                <input type="text" class="form-control <?= ($validation->hasError('nomor_registrasi')) ? 'is-invalid' : ' '; ?>" id="nomor_registrasi" name="nomor_registrasi" placeholder="Masukan Nomor Registrasi">
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
</script>



<?php $this->endSection(); ?>