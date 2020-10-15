  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Berita</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <form method="post" action="<?= base_url('admin/postBerita') ?>" enctype="multipart/form-data">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-body">
              <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" id="judul" placeholder="Masukkan judul" name="judul" value="<?= $ ?>">
              </div>
              <div class="form-group">
                <label for="kategori" >Kategori</label>
                <select class="form-control" id="kategori" name="kategori">
                  <option value="">-- Pilih kategori --</option>
                  <?php foreach ($kategori as $row) : ?>
                    <option value="<?= $row['id'] ?>"><?= $row['kategori'] ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="form-group">
                <label for="foto">Foto</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="foto" name="foto">
                    <label class="custom-file-label" for="foto"></label>
                  </div>
                </div>
              </div>

              <div class="form-group mt-3">
                <label for="foto">Tulis Berita</label>
                  <div class="mb-3">
                    <textarea class="textarea" name="berita" placeholder="Place some text here"
                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  </div>
              </div>

              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="isPost" name="isPost" value="1">
                <label class="form-check-label" for="isPost">Segera post berita?</label>
              </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-block btn-primary">Submit</button>
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
