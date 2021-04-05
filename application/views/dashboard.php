  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Halaman Utama</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('Dashboard') ?>">Home</a></li>
              <li class="breadcrumb-item active">Pembayaran SPP</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">DATA SISWA</h5>

                <p class="card-text">
                  Untuk input data siswa silahkan klik link dibawah ini.
                </p>

                <a href="<?php echo base_url('siswa') ?>">Data Siswa</a>
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title">DATA KELAS</h5>

                <p class="card-text">
                 Menampilkan Tabel data,klik link dibawah 
                </p>
                <a href="<?php echo base_url('kelas') ?>">Data Kelas</a>
                
              </div>
            </div><!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h5 class="m-0">Pembayaran</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Pembayaran</h6>

                <p class="card-text">Menampilkan isi transaksi pembayaran</p>
                <a href="<?php echo base_url('pembayaran') ?>" class="btn btn-primary">Pembayaran</a>
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Data SPP</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Menampilkan isi data spp </h6>

                <p class="card-text">Klik link dibawa untuk menampilkan data spp</p>
                <a href="<?php echo base_url('spp') ?>" class="btn btn-primary">DATA SPP</a>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->