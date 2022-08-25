<?= $this->extend('layout/template_sf'); ?>

<?= $this->section('content'); ?>


<!-- Main content -->
<section class="content">
    <div class="container-fluid">


        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <div class="col">

                <!-- MAP & BOX PANE -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><b>Peminjam Sertifikat</b></h3>
                        <div id="btnPlace" class="float-right">

                        </div>
                        <a href="/peminjamsertifikat/create" class="btn btn-sm btn-primary float-right">Tambah Peminjam Sertifikat</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="data_peminjam_sertifikat" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Peminjam</th>
                                    <th>NIK</th>
                                    <th>Nama Objek</th>
                                    <th>Keperluan Peminjaman</th>
                                    <th>Tanggal Pinjam</th>
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