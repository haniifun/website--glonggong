

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Surat dan Formulir</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Postingan Berita</h3>
                <a href="<?= base_url('admin/tambahFile') ?>" class="btn btn-primary float-right">
                  <i class="fa fa-plus px-3"> Tambah</i> 
                </a>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <table id="file" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Deskripsi</th>
                    <th>Download</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $i=1; foreach ($file as $row) : ?>
                    <tr>
                      <td><?= $i ?></td>
                      <td><?= $row['deskripsi'] ?></td>
                      <td><a href="<?= base_url('assets/file/'.$row['file']) ?>" target="_blank">Download</a></td>
                      <td>
                        <button class="btn-sm btn-primary" data-toggle="modal" data-target="<?= '#edit'.$row['id'] ?>"><i class="fas fa-pencil-alt"></i></button>
                        <button class="btn-sm btn-danger" data-toggle="modal" data-target="<?= '#hapus'.$row['id'] ?>"><i class="fas fa-trash"></i></button>
                      </td>
                    </tr>

                    <!-- Hapus Data -->
                    <div class="modal fade" id="<?= 'hapus'.$row['id']?>">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Hapus Data</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>

                          <div class="modal-body">
                            <p>Anda yakin ingin menghapus <b><?= $row['deskripsi'] ?></b>?</p>
                          </div>

                          <form method="post" action="<?= base_url('admin/hapusAnggota') ?>" >
                            <div class="modal-footer justify-content-between">
                                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                <input type="hidden" name="page" value="formulir">
                                <input type="hidden" name="tabel" value="file">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </div>
                          </form>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->


                    <!-- Edit data -->
                    <div class="modal fade" id="<?= 'edit'.$row['id'] ?>">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Edit Data</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form method="post" action="<?= base_url('admin/editFile/'.$row['id']) ?>" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="form-group">
                                  <label for="deskripsi">Deskripsi</label>
                                  <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Nama lengkap" value="<?= $row['deskripsi'] ?>">
                                </div>
                                <div class="form-group">
                                  <label for="file">File</label>
                                  <div class="input-group">
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="file" name="file">
                                      <label class="custom-file-label" for="file">Choose file</label>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                              <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                          </form>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->

                  <?php $i++; endforeach; ?>
                  </tbody>
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
      <!-- /.container-fluid -->
    </section>
