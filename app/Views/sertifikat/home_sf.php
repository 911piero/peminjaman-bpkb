<?= $this->extend('layout/template_sf'); ?>

<?= $this->section('content'); ?>

<!-- Main content -->
<section class="content">

    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-default">
                    <div class="inner">
                        <h3><?= $resultSf ?></h3>
                        <p>Jumlah Sertifikat</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <a href="<?= site_url('/sertifikat') ?>" title="Data Sertifikat"  class="small-box-footer bg-primary">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-default">
                    <div class="inner">
                        <h3><?= $resultPeminjam ?></h3>

                        <p>Jumlah Peminjam</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <a href="<?= site_url('/peminjamsertifikat') ?>"title="Jumlah Peminjam"  class="small-box-footer bg-primary">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->

            <div class="col-lg-3 col-6">
            <a href="<?= '/digitalisasi' ?>" class="small-box-footer bg-primary p5-">
                <div class="small-box bg-primary" title="Digitalisasi Sertifikat" >

                    <div class="inner p-4">
                        <h4>Digitalisasi <br> Sertifikat</h4>  
                        <div class="icon">
                        <i class="fas fa-arrow-circle-right"></i>
                    </div> 
                    </div>



                </div>
                </a>
            </div>

        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <div class="col">
                <!-- MAP & BOX PANE -->
                <div class="card">
                    <div class="card-header bg-danger">
                        <h3 class="card-title"><b>Kekancingan Yang Harus Segera Diperpanjang</b></h3>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="data_kekancingan_reminder" class="table table-striped ">
                            <thead>
                                <tr>
                                    <th>No.</th>
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
        <!-- Main row -->
        <!-- /.row -->
    </div>
    <!--/. container-fluid -->
</section>

<?= $this->endSection(); ?>