<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section class="content">
    <div class="container-fluid">
        <form action="/bpkb/save" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Form Tambah Data BPKB</h3>
                </div>
                <div class="card-body">
                    <div class="row cols-3">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nomor Registrasi</label>
                                <input type="text" class="form-control <?= ($validation->hasError('nomor_regist')) ? 'is-invalid' : ' '; ?>" id="nomor_registrasi" name="nomor_regist" placeholder="Masukan Nomor Registrasi">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nomor_regist'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Pemilik</label>
                                <input type="text" class="form-control <?= ($validation->hasError('nama_pem')) ? 'is-invalid' : ' '; ?>" id="nama_pemilik" name="nama_pem" placeholder="Masukan Nama Pemilik">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nama_pem'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Alamat</label>
                                <input type="text" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ' '; ?>" id="alamat" name="alamat" placeholder="Masukan Alamat">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('alamat'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Merk</label>
                                <input type="text" class="form-control <?= ($validation->hasError('merk')) ? 'is-invalid' : ' '; ?>" id="merk" name="merk" placeholder="Masukan Merk Kendaraan">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('merk'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tipe</label>
                                <input type="text" class="form-control <?= ($validation->hasError('tipe')) ? 'is-invalid' : ' '; ?>" id="Tipe" name="tipe" placeholder="Masukan Tipe Kendaraan">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('tipe'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Model</label>
                                <div class="input-group mb-3">
                                    <select name="model" class="custom-select form-control <?= ($validation->hasError('model')) ? 'is-invalid' : ' '; ?>" >
                                        <option selected value="">Pilih Model Kendaraan</option>
                                        <?php foreach ($model as $key) : ?>
                                            <option value="<?= $key['id_model']; ?>"><?= $key['model']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('model'); ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-4">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Tahun Pembuatan</label>
                                <input type="text" class="form-control <?= ($validation->hasError('tahun_pembuatan')) ? 'is-invalid' : ' '; ?>" id="tahun_pembuatan" name="tahun_pembuatan" placeholder="Masukan Tahun Pembuatan">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('tahun_pembuatan'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Isi Silinder</label>
                                <input type="text" class="form-control <?= ($validation->hasError('isi_silinder')) ? 'is-invalid' : ' '; ?>" id="isi_silinder" name="isi_silinder" placeholder="Masukan Isi Silinder">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('isi_silinder'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nomor Rangka</label>
                                <input type="text" class="form-control <?= ($validation->hasError('nomor_rangka')) ? 'is-invalid' : ' '; ?>" id="nomor_rangka" name="nomor_rangka" placeholder="Masukan Nomor Rangka">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nomor_rangka'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nomor Mesin</label>
                                <input type="text" class="form-control <?= ($validation->hasError('nomor_mesin')) ? 'is-invalid' : ' '; ?>" id="nomor_mesin" name="nomor_mesin" placeholder="Masukan Nomor Mesin">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nomor_mesin'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Warna</label>
                                <input type="text" class="form-control <?= ($validation->hasError('warna')) ? 'is-invalid' : ' '; ?>" id="warna" name="warna" placeholder="Masukan Warna Kendaraan">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('warna'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Bahan Bakar</label>
                                <div class="input-group mb-3">
                                    <select name="bahan_bakar" class="custom-select <?= ($validation->hasError('bahan_bakar')) ? 'is-invalid' : ' '; ?>" id="inputGroupSelect01">
                                        <option selected value="">Pilih Bahan Bakar</option>
                                        <?php foreach ($bahan_bakar as $key) : ?>
                                            <option value="<?= $key['id_bahan_bakar']; ?>"><?= $key['bahan_bakar']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('bahan_bakar'); ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Warna Plat</label>
                                <div class="input-group mb-3">
                                    <select name="warna_plat" class="custom-select <?= ($validation->hasError('warna_plat')) ? 'is-invalid' : ' '; ?>" id="inputGroupSelect01">
                                        <option selected value="">Pilih Warna Plat Kendaraan</option>
                                        <?php foreach ($warna_tnkb as $key) : ?>
                                            <option value="<?= $key['id_warna_tnkb']; ?>"><?= $key['warna_tnkb']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <div class="invalid-feedback d-block">
                                        <?= $validation->getError('warna_plat'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Tahun Registrasi</label>
                                <input name="tahun_regist" type="text" class="form-control <?= ($validation->hasError('tahun_regist')) ? 'is-invalid' : ' '; ?>" id="tahun_registrasi" placeholder="Tahun Registrasi">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('tahun_regist'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nomer BPKB</label>
                                <input type="text" name="no_bpkb" class="form-control <?= ($validation->hasError('no_bpkb')) ? 'is-invalid' : ' '; ?>" id="nomer_BPKB" placeholder="Nomer BPKB">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('no_bpkb'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Kode Lokasi</label>
                                <input type="text" name="kode_lokasi" class="form-control <?= ($validation->hasError('kode_lokasi')) ? 'is-invalid' : ' '; ?>" id="kode_lokasi" placeholder="Kode Lokasi">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('kode_lokasi'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Foto BPKB</label> 
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="foto_bpkb" class="custom-file-input <?= ($validation->hasError('foto_bpkb')) ? 'is-invalid' : ' '; ?>" id="foto_bpkb">
                                        <label class="custom-file-label" for="foto_bpkb">Pilih Foto</label>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('foto_bpkb'); ?>
                                        </div>
                                    </div>
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