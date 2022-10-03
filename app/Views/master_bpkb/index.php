<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?php

use app\Models\BpkbModel; ?>
<!-- Main content -->
<section class="content">

  <div class="container-fluid">
    <!-- Info boxes -->
    <div class="row">
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
          <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-cog"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Jumlah BPKB</span>
            <span class="info-box-number">

              <?php

              echo $results; ?>
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
            <h3 class="card-title"><b>Data BPKB</b></h3>
            <div id="btnPlace" class="float-right">
            </div>
            <a href="<?= site_url('/bpkb/create') ?>" class="btn btn-sm btn-primary float-right" title="Tambah BPKB">Tambah BPKB</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="data_bpkb" class="table table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>No Arsip</th>
                  <th>Nomor Registrasi</th>
                  <th>Merk</th>
                  <th>Nama Pemilik</th>
                  <th>Model</th>
                  <th>Warna</th>
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
  </div>
</section>
<!-- /.content -->

<?= $this->endSection(); ?>