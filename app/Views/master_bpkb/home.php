<?= $this->extend('layout/template'); ?>

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
            <h3><?= $resultBpkb ?></h3>

            <p>Jumlah BPKB</p>
          </div>
          <div class="icon">
            <i class="fas fa-car"></i>
          </div>
          <a href="<?= site_url('bpkb/') ?>" class="small-box-footer bg-primary">More info <i class="fas fa-arrow-circle-right"></i></a>
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
          <a href="<?= site_url('/peminjam') ?>" class="small-box-footer bg-primary">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-default">
          <div class="inner">
            <h3><?= $resultMutasi ?></h3>

            <p>Jumlah Mutasi</p>
          </div>
          <div class="icon">
            <i class="fas fa-edit"></i>
          </div>
          <a href="<?= site_url('/mutasi') ?>" class="small-box-footer bg-primary">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- Main row -->
    <div class="row">
      <!-- Left col -->
      <div class="col">
        <!-- MAP & BOX PANE -->
        <div class="card">
          <div class="card-header bg-danger">
            <h3 class="card-title"><b>Peminjam Yang Melebihi Estimasi Waktu</b></h3>

          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="data_peminjam_overdate" class="table table-striped  r">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Peminjam</th>
                  <th>NIK</th>
                  <th>Nomor Registrasi</th>
                  <th>Tanggal Pinjam</th>
                  <th>Estimasi Kembali</th>
                  <th>Status</th>
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
</section>
<!-- /.content -->

<?= $this->endSection(); ?>