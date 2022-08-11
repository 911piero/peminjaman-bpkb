<?= $this->extend('layout/template_sf'); ?>

<?= $this->section('content'); ?>

<!-- Main content -->
<style>
    table,
    tr,
    td {
        padding: 5px;

    }
</style>
<section class="content">

    <div class="container-fluid">

        <!-- /.row -->

        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <div class="col">
                <form action="cari" method="POST">
                    <?= csrf_field(); ?>
                    <table>
                        <thead>
                            <tr>
                                <td style="width: 150px;"><b>Kecamatan</b></td>
                                <td style="width: 150px;"><b>Tahun Objek</b></td>
                                <td style="width: 150px;"><b>Kelurahan</b></td>
                                <td style="width: 150px;"><b>Status</b></td>
                                <td style="width: 150px;"><b>Kategori</b></td>
                                <td style="width: 150px;"><b>Sub Kategori</b></td>
                                <td style="width: 150px;"><b>Masa Berlaku (Kekancingan)</b></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <select name="kecamatan" class="custom-select" id="kecamatan" onchange="kecamatan">
                                        <option selected value="">Semua</option>
                                        <?php foreach ($kecamatan as $key) : ?>
                                            <option value="<?= $key['kecamatan']; ?>"><?= $key['kecamatan']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </td>
                                <td>
                                    <select name="tahun_objek" class="custom-select" id="tahun_objek" onchange="tahun_objek">
                                        <option selected value="">Semua</option>
                                        <?php foreach ($tahunObjek as $k) : ?>
                                            <option value="<?= $k ?>"><?= $k ?></option>
                                        <?php endforeach; ?>

                                    </select>
                                </td>
                                <td>
                                    <select name="kelurahan" class="custom-select" id="kelurahan" onchange="kelurahan">
                                        <option selected value="">Semua </option>
                                        <?php foreach ($kelurahan as $key) : ?>
                                            <option value="<?= $key['kelurahan']; ?>"><?= $key['kelurahan']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </td>
                                <td>
                                    <select name="status" class="custom-select" id="status" onchange="status">
                                        <option selected value="">Semua</option>
                                        <option value="Aktif">Aktif</option>
                                        <option value="Tidak Aktif">Tidak Aktif</option>
                                    </select>
                                </td>
                                <td>
                                    <select name="kategori" class="custom-select" id="kategori" onchange="kategori">
                                        <option selected value="">Semua</option>
                                        <?php foreach ($kategori as $key) : ?>
                                            <option value="<?= $key['nm_kategori']; ?>"><?= $key['nm_kategori']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </td>
                                <td>
                                    <select name="sub_kategori" class=" custom-select" id="sub_kategori" onchange="sub_kategori">
                                        <option selected value="">Semua</option>
                                        <?php foreach ($subKategori as $key) : ?>
                                            <option value="<?= $key['nm_subkategori']; ?>"><?= $key['nm_subkategori']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </td>
                                <td>
                                    <input type="date" class="form-control" name="minDate" id="minDate" onchange="minDate">
                                </td>
                                <td>
                                    <label for="">s.d</label>
                                </td>
                                <td>
                                    <input type="date" class="form-control" name="maxDate" id="maxDate" onchange="maxDate">
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                        </tbody>
                    </table>
                    <!-- MAP & BOX PANE -->
                    <div class="card" style="width: 100%;">
                        <div class="card-header">
                            <h3 class="card-title"><b>Daftar Objek</b></h3>
                            <div class="float-right">
                                <a href="" class="btn btn-success">Print Excel</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="data_sertifikat" class="table table-bordered" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>No Objek</th>
                                        <th>Nama Objek</th>
                                        <th>Alamat</th>
                                        <th>Kecamatan</th>
                                        <th>Kelurahan</th>
                                        <th>Kategori</th>
                                        <th>Sub Kategori</th>
                                        <th>Tahun Objek</th>
                                        <th>Masa Berlaku (Kekancingan)</th>
                                        <th>Action</th>
                                        <th style="display:none;">Status</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>

                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </form>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!--/. container-fluid -->
    </div>
</section>
<!-- /.content -->

<?= $this->endSection(); ?>