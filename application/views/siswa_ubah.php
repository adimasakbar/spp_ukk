<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?php echo $title; ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $title; ?></li>
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
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0"><?php echo $subtitle; ?></h5>
              </div>
              <?php foreach ($siswa->result() as $value): ?>
                  <form class="formhorizontal" method="post" action="<?php echo base_url('siswa/update') ?>">
                  <div class="card-body">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">NISN</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" value="<?php echo $value->nisn; ?>" required>
                            </div>
                            <input type="hidden" class="formcontrol" name="nisn" value="<?php echo $value->nisn; ?>">
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">NIS</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nis" placeholder="NIS" required>
                            </div>
                        </div>
                       <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama Siswa</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nama" placeholder="Nama Siswa" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">ID Kelas</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="id_kelas" placeholder="ID_kelas" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="alamat" placeholder="Alamat" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">No Telepon</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="no_telp" placeholder="No Telepon" required>
                            </div> 
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">ID SPP</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="id_spp" placeholder="ID SPP" required>
                            </div>       
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-sm btn-default">Reset</button>
                    </div>
                </form>
              <?php endforeach; ?>

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
