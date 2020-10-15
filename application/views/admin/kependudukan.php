

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Kependudukan</h1>
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
                <h3 class="card-title">Data Kependudukan</h3>

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
                      <form method="post" action="<?= base_url('admin/tambahDataKependudukan') ?>">
                        <div class="modal-body">
                            <input type="hidden" name="tabel" value="pemerintahan_desa">
                            <div class="form-group">
                              <label for="rw">RW</label>
                              <input type="number" class="form-control" id="rw" name="rw" placeholder="Nomor RW">
                            </div>
                            <div class="form-group">
                              <label for="jumlahKepalaKeluarga">Jumlah Kepala Keluarga</label>
                              <input type="number" class="form-control" id="jumlahKepalaKeluarga" name="jumlahKepalaKeluarga" placeholder="Masukkan jumlah kepala keluarga">
                            </div>
                            <div class="form-group">
                              <label for="jumlahLakiLaki">Jumlah Laki-Laki</label>
                              <input type="number" class="form-control" id="jumlahLakiLaki" name="jumlahLakiLaki" placeholder="Masukkan jumlah laki-laki">
                            </div>
                            <div class="form-group">
                              <label for="jumlahPerempuan">Jumlah Perempuan</label>
                              <input type="number" class="form-control" id="jumlahPerempuan" name="jumlahPerempuan" placeholder="Masukkan jumlah perempuan">
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
                <table id="file" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>RW</th>
                    <th>Jumlah KK</th>
                    <th>Jumlah Laki-Laki</th>
                    <th>Jumlah Perempuan</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $i=1; foreach ($kependudukan as $row) : ?>
                    <tr>
                      <td><?= $row['rw'] ?></td>
                      <td><?= $row['kk'] ?></td>
                      <td><?= $row['laki-laki'] ?></td>
                      <td><?= $row['perempuan'] ?></td>
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
                            <p>Anda yakin ingin menghapus <b><?= $row['rw'] ?></b>?</p>
                          </div>

                          <form method="post" action="<?= base_url('admin/hapusAnggota') ?>" >
                            <div class="modal-footer justify-content-between">
                                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                <input type="hidden" name="page" value="kependudukan">
                                <input type="hidden" name="tabel" value="kependudukan">
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
                          <form method="post" action="<?= base_url('admin/editKependudukan/'.$row['id']) ?>">
                            <div class="modal-body">
                                <div class="form-group">
                                  <label for="rw">RW</label>
                                  <input type="number" class="form-control" id="rw" name="rw" placeholder="Nomor RW" value="<?= $row['rw'] ?>">
                                </div>
                                <div class="form-group">
                                  <label for="kk">Jumlah Kepala Keluarga</label>
                                  <input type="number" class="form-control" id="kk" name="kk" placeholder="Masukkan jumlah kepala keluarga" value="<?= $row['kk'] ?>">
                                </div>
                                <div class="form-group">
                                  <label for="laki-laki">Jumlah Laki-Laki</label>
                                  <input type="number" class="form-control" id="laki-laki" name="laki-laki" placeholder="Masukkan jumlah laki-laki" value="<?= $row['laki-laki'] ?>">
                                </div>
                                <div class="form-group">
                                  <label for="perempuan">Jumlah Perempuan</label>
                                  <input type="number" class="form-control" id="perempuan" name="perempuan" placeholder="Masukkan jumlah perempuan" value="<?= $row['perempuan'] ?>">
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
