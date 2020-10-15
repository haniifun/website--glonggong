  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah File Surat atau Formulir</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <form method="post" action="<?= base_url('admin/tambahFile') ?>" enctype="multipart/form-data">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-body">
              <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <input type="text" class="form-control" id="deskripsi" placeholder="Masukkan deskripsi file" name="deskripsi">
              </div>
              <div class="form-group">
                <label for="file">File</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="file" name="file">
                    <label class="custom-file-label" for="file"></label>
                  </div>
                </div>
              </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-block btn-primary">Simpan</button>
            </div>
          </div>
          <!-- /.card -->
          </form> 
        </div>
        <!-- /.col -->
      </div>
      <!-- ./row -->

    </section>
    <!-- /.content -->
