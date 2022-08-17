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
                    <a href="<?= site_url('/sertifikat') ?>" class="small-box-footer bg-primary">More info <i class="fas fa-arrow-circle-right"></i></a>
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
                    <a href="<?= site_url('/peminjamsertifikat') ?>" class="small-box-footer bg-primary">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->

            <!-- ./col -->
        </div>
        <!-- Main row -->
        <!-- /.row -->
    </div>
    <!--/. container-fluid -->
</section>
<!-- /.content -->

<?= $this->endSection(); ?>