<?= $this->extend('layout/template_sf'); ?>

<?= $this->section('content'); ?>

<!-- Main content -->
<style>
    table,
    tr,
    td {
        padding-top: 5px;
        padding-left: 20px;
        padding-right: 20px;
        padding-bottom: 5px;

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
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                                Filter Search
                            </div>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <td><b>Kecamatan</b></td>
                                    <td><b>Tahun Objek</b></td>
                                    <td><b>Kelurahan</b></td>
                                    <td><b>Status</b></td>
                                    <td><b>Kategori</b></td>
                                    <td><b>Sub Kategori</b></td>
                                    <td><b>Masa Berlaku (Kekancingan)</b></td>
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
                                        <select name="status" class="custom-select" id="status" onchange="aktif">
                                            <option selected value="">Semua</option>
                                            <?php
                                            $status = [
                                                '1' => "Aktif",
                                                '0' => "Tidak Aktif",
                                            ];
                                            foreach ($status as $key) :
                                            ?>
                                                <option value="<?= $key; ?>"><?= $key; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="nm_kategori" class="custom-select" id="nm_kategori" onchange="nm_kategori">
                                            <option selected value="">Semua</option>
                                            <?php foreach ($kategori as $key) : ?>
                                                <option value="<?= $key['id_kategori']; ?>"><?= $key['nm_kategori']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="sub_kategori" class=" custom-select">
                                            <option selected value="">Semua</option>
                                            <?php foreach ($subKategori as $key) : ?>
                                                <option value="<?= $key['id_subkategori']; ?>"><?= $key['nm_subkategori']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                    <td>
                                        <input class="form-control" type="date" name="" id="">
                                    </td>
                                    <td>
                                        <label for="">s.d</label>
                                    </td>
                                    <td>
                                        <input type="date" class="form-control">
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
                    </div>
                    <!-- MAP & BOX PANE -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><b>Daftar Objek</b></h3>
                            <div class="float-right">
                                <a href="" class="btn btn-success">Print Excel</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="data_sertifikat" class="table" style="width: 100%;">
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