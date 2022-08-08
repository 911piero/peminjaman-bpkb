<?= $this->extend('layout/template_sf'); ?>

<?= $this->section('content'); ?>

<!-- Main content -->
<section class="content">

    <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-cog"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Jumlah Objek Terdaftar</span>
                        <span class="info-box-number">
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <div class="col">
                <!-- MAP & BOX PANE -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><b>Daftar Objek</b></h3>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table>
                            <tbody>
                                <tr>

                                    <td>
                                        <div class="form-group">
                                            <label for="">Kecamatan</label>
                                            <div class="input-group">
                                                <select name="kecamatan" class="custom-select">
                                                    <option selected value="">Semua Kecamatan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="">Kelurahan</label>
                                            <div class="input-group">
                                                <select name="kecamatan" class="custom-select">
                                                    <option selected value="">Semua Kelurahan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="tahunObjek">Tahun Objek</label>
                                            <div class="input-group">
                                                <select class="custom-select">
                                                    <option selected value="">Semua Tahun</option>
                                                </select>
                                            </div>
                                        </div>
                                    </td>



                                    <td>
                                        <div class="form-group">
                                            <label for="">Status</label>
                                            <div class="input-group">
                                                <select name="kecamatan" class="custom-select">
                                                    <option selected value="">Semua Status</option>
                                                </select>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label for="masa_berlaku">Masa Berlaku (Kekancingan)</label>
                                            <div class="input-group">
                                                <input class="form-control" type="date" name="" id="">
                                                <label for="" style="margin: 7px;">&nbsp; - &nbsp;</label>
                                                <input type="date" class="form-control">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="lbl_kategori">Kategori</label>
                                            <div class="input-group">
                                                <select name="kategori" class="custom-select">
                                                    <option selected value="">Semua Kategori</option>
                                                </select>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="tahunObjek">Sub Kategori</label>
                                            <div class="input-group">
                                                <select class="custom-select">
                                                    <option selected value="">Semua Sub Kategori</option>
                                                </select>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <hr>
                        <table id="data_bpkb" class="table table-bordered table-striped">
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