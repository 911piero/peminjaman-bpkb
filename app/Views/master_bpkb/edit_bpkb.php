<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section class="content">
    <div class="container-fluid">
        <form action="<?= site_url('/bpkb/update/' . $bpkb['id_bpkb']); ?>" method="post">
            <?= csrf_field(); ?>
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Form Tambah Data BPKB</h3>
                </div>
                <div class="card-body">
                    <div class="row cols-3">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="inputNomorRegistrasi">Nomor Registrasi</label>
                                <input type="text" class="form-control <?= ($validation->hasError('nomor_regist')) ? 'is-invalid' : ' '; ?>" id="nomor_registrasi" autofocus value="<?= $bpkb['nomor_registrasi']; ?>" name="nomor_regist" placeholder="Masukan Nomor Registrasi"  >
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nomor_regist'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputNamaPemilik">Nama Pemilik</label>
                                <input type="text" value="<?= $bpkb['nama_pemilik']; ?>" class="form-control <?= ($validation->hasError('nama_pem')) ? 'is-invalid' : ' '; ?>" id="nama_pemilik" name="nama_pem" placeholder="Masukan Nama Pemilik"  >
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nama_pem'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAlamat">Alamat</label>
                                <input type="text" value="<?= $bpkb['alamat']; ?>" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ' '; ?>" id="alamat" name="alamat" placeholder="Masukan Alamat">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('alamat'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputMerk">Merk</label>
                                <input type="text" value="<?= $bpkb['merk']; ?>" class="form-control <?= ($validation->hasError('merk')) ? 'is-invalid' : ' '; ?>" id="merk" name="merk" placeholder="Masukan Merk Kendaraan"  >
                                <div class="invalid-feedback">
                                    <?= $validation->getError('merk'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputTipe">Tipe</label>
                                <input type="text" value="<?= $bpkb['tipe']; ?>" class="form-control <?= ($validation->hasError('nama_pem')) ? 'is-invalid' : ' '; ?>" id="Tipe" name="tipe" placeholder="Masukan Tipe Kendaraan"  >
                                <div class="invalid-feedback">
                                    <?= $validation->getError('tipe'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputModel">Model</label>
                                <div class="input-group mb-3">
                                    <select name="model" class="custom-select <?= ($validation->hasError('model')) ? 'is-invalid' : ' '; ?>" id="inputGroupSelect01"  >
                                        <option selected value="<?= $bpkb['model']; ?>">
                                            <?php
                                            $num = $bpkb['model'];
                                            if ($num == 1) {
                                                echo 'Sepeda Motor';
                                            } elseif ($num == 2) {
                                                echo 'Mobil';
                                            } elseif ($num == 3) {
                                                echo 'Truck';
                                            } elseif ($num == 4) {
                                                echo 'Semi Truck';
                                            }
                                            ?>
                                        </option>
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
                                <label for="inputTahunPembuatan">Tahun Pembuatan</label>
                                <input type="text" value="<?= $bpkb['tahun_pembuatan']; ?>" class="form-control <?= ($validation->hasError('tahun_pembuatan')) ? 'is-invalid' : ' '; ?>" id="tahun_pembuatan" name="tahun_pembuatan" placeholder="Masukan Tahun Pembuatan">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('tahun_pembuatan'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputIsiSilinder">Isi Silinder</label>
                                <input type="text" value="<?= $bpkb['isi_silinder']; ?>" class="form-control <?= ($validation->hasError('isi_silinder')) ? 'is-invalid' : ' '; ?>" id="isi_silinder" name="isi_silinder" placeholder="Masukan Isi Silinder"  >
                                <div class="invalid-feedback">
                                    <?= $validation->getError('isi_silinder'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputNomorRangka">Nomor Rangka</label>
                                <input type="text" value="<?= $bpkb['nomor_rangka']; ?>" class="form-control <?= ($validation->hasError('nomor_rangka')) ? 'is-invalid' : ' '; ?>" id="nomor_rangka" name="nomor_rangka" placeholder="Masukan Nomor Rangka"  >
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nomor_rangka'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputNomorMesin">Nomor Mesin</label>
                                <input type="text" value="<?= $bpkb['nomor_mesin']; ?>" class="form-control <?= ($validation->hasError('nomor_mesin')) ? 'is-invalid' : ' '; ?>" id="nomor_mesin" name="nomor_mesin" placeholder="Masukan Nomor Mesin"  >
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nomor_mesin'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputWarna">Warna</label>
                                <input type="text" value="<?= $bpkb['warna']; ?>" class="form-control <?= ($validation->hasError('warna')) ? 'is-invalid' : ' '; ?>" id="warna" name="warna" placeholder="Masukan Warna Kendaraan"  >
                                <div class="invalid-feedback">
                                    <?= $validation->getError('warna'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputBahanBakar">Bahan Bakar</label>
                                <div class="input-group mb-3">
                                    <select name="bahan_bakar" class="custom-select <?= ($validation->hasError('bahan_bakar')) ? 'is-invalid' : ' '; ?>" id="inputGroupSelect01"  >
                                        <option selected value="<?= $bpkb['bahan_bakar']; ?>">
                                            <?php
                                            $num = $bpkb['bahan_bakar'];
                                            if ($num == 1) {
                                                echo 'Bensin';
                                            } elseif ($num == 2) {
                                                echo 'Solar';
                                            }
                                            ?>
                                        </option>
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
                                <label for="inputWarnaPlat">Warna Plat</label>
                                <div class="input-group mb-3">
                                    <select name="warna_plat" class="custom-select <?= ($validation->hasError('warna_plat')) ? 'is-invalid' : ' '; ?>" id="inputGroupSelect01"  >
                                        <option selected value="<?= $bpkb['warna_tnkb']; ?>">
                                            <?php
                                            $num = $bpkb['warna_tnkb'];
                                            if ($num == 1) {
                                                echo 'Hitam';
                                            } elseif ($num == 2) {
                                                echo 'Merah';
                                            } elseif ($num == 3) {
                                                echo 'Kuning';
                                            } elseif ($num == 4) {
                                                echo 'Putih';
                                            }
                                            ?>
                                        </option>
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
                                <label for="inputTahunRegistrasi">Tahun Registrasi</label>
                                <input name="tahun_regist" value="<?= $bpkb['tahun_registrasi']; ?>" type="text" class="form-control <?= ($validation->hasError('tahun_regist')) ? 'is-invalid' : ' '; ?>" id="tahun_registrasi" placeholder="Tahun Registrasi"  >
                                <div class="invalid-feedback">
                                    <?= $validation->getError('tahun_regist'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputNomorBPKB">Nomor BPKB</label>
                                <input type="text" value="<?= $bpkb['nomor_bpkb']; ?>" name="no_bpkb" class="form-control <?= ($validation->hasError('no_bpkb')) ? 'is-invalid' : ' '; ?>" id="nomer_BPKB" placeholder="Nomer BPKB"  >
                                <div class="invalid-feedback">
                                    <?= $validation->getError('no_bpkb'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputKodeLokasi">Kode Lokasi</label>
                                <input type="text" name="kode_lokasi" value="<?= $bpkb['kode_lokasi']; ?>" class="form-control <?= ($validation->hasError('kode_lokasi')) ? 'is-invalid' : ' '; ?>" id="kode_lokasi" placeholder="Kode Lokasi"  >
                                <div class="invalid-feedback">
                                    <?= $validation->getError('kode_lokasi'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 text-right">
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