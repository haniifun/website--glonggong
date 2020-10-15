

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Strukrur Organisasi</h1>
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
                <h3 class="card-title">LPM</h3>
                <button class="btn-xs btn-primary float-right" data-toggle="modal" data-target="#modal-tambah"><i class="fas fa-plus"></i> Tambah</button>

                <!-- Tambah data -->
                <div class="modal fade" id="modal-tambah">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Tambah Data</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <form method="post" action="<?= base_url('admin/tambahAnggota') ?>" enctype="multipart/form-data">
                        <div class="modal-body">
                            <input type="hidden" name="tabel" value="lpm">
                            <input type="hidden" name="page" value="lpm">
                            <div class="form-group">
                              <label for="nama">Nama</label>
                              <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama lengkap">
                            </div>
                            <div class="form-group">
                              <label for="jabatan">Jabatan</label>
                              <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan">
                            </div>
                            <div class="form-group">
                              <label for="foto">Foto (Ukuran 3x4)</label>
                              <div class="input-group">
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="foto" name="foto">
                                  <label class="custom-file-label" for="foto">Choose file</label>
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
              </div>
              <!-- /.card-header -->

              <div class="card-body">
                <table id="pemdes" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $i=1; foreach ($lpm as $row) : ?>
                    <tr>
                      <td><?= $i; ?></td>
                      <td>
                        <img src="<?= base_url('assets/img/profile/').$row['foto'] ?>" width="70px;">
                      </td>
                      <td><?= $row['nama'] ?></td>
                      <td><?= $row['jabatan'] ?></td>
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
                            <p>Anda yakin ingin menghapus <b><?= $row['nama'] ?></b>?</p>
                          </div>

                          <form method="post" action="<?= base_url('admin/hapusAnggota') ?>" >
                            <div class="modal-footer justify-content-between">
                                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                <input type="hidden" name="page" value="lpm">
                                <input type="hidden" name="tabel" value="lpm">
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
                          <form method="post" action="<?= base_url('admin/editAnggota/'.$row['id']) ?>" enctype="multipart/form-data">
                            <div class="modal-body">
                                <input type="hidden" name="page" value="lpm">
                                <input type="hidden" name="tabel" value="lpm">
                                <div class="form-group">
                                  <label for="nama">Nama</label>
                                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama lengkap" value="<?= $row['nama'] ?>">
                                </div>
                                <div class="form-group">
                                  <label for="jabatan">Jabatan</label>
                                  <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan" value="<?= $row['jabatan'] ?>">
                                </div><!-- 
                                <div class="form-group">
                                  <label for="foto">Foto (Ukuran 3x4)</label>
                                  <div class="input-group">
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="foto" name="foto">
                                      <label class="custom-file-label" for="foto">Choose file</label>
                                    </div>
                                  </div>
                                </div> -->
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
