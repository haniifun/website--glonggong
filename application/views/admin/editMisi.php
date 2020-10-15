
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profil Desa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Edit Misi Desa</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="row">
          <!-- Misi -->
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-calendar"></i>
                  Edit Misi 
                  <button class="btn-xs btn-primary mx-2 tambahMisi" data-toggle="modal" data-target="#tambah">
                    <i class="fas fa-plus"></i> Tambah
                  </button>

                <div class="small my-2 toastsDefaultDanger">
                  <?= $this->session->flashdata('message') ?>
                </div>
                </h3>
                <!-- Tambah data -->
                <div class="modal fade" id="tambah">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Tambah Misi</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <form method="post" action="<?= base_url('admin/tambahMisi') ?>" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="form-group">
                              <label for="nomor">Nomor</label>
                              <input type="number" class="form-control" id="nomor" name="nomor" placeholder="Nomor misi">
                            </div>
                            <div class="form-group">
                              <label for="misi">Misi</label>
                              <input type="text" class="form-control" id="misi" name="misi" placeholder="Misi">
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
                <form method="post" action="<?= base_url('admin/editMisi') ?>" >
                  <?php foreach ($misi as $row) : ?>
                    <div class="input-group mb-1">
                      <div class="input-group-prepend col-2">
                        <input type="number" class="form-control px-2" name="nomor[]" value="<?= $row['id'] ?>">
                      </div>
                      <input type="text" class="form-control" name="misi[]" value="<?= $row['misi'] ?>">
                      <div class="input-group-append">
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="<?= '#hapus'.$row['id'] ?>">
                          <small ><i class="fas fa-trash"></i></small>
                        </button>
                      </div>
                    </div>

                    <!-- Hapus Data -->
                    <div class="modal fade" id="<?= 'hapus'.$row['id']?>">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Hapus Misi</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>

                          <div class="modal-body">
                            <p>Anda yakin ingin menghapus misi : <b><?= $row['misi'] ?></b>?</p>
                          </div>

                          <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                              <a href="<?= base_url('admin/hapusMisi/'.$row['id']) ?>">
                                <button type="button" class="btn btn-danger">Hapus</button>
                              </a>
                          </div>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->

                  <?php endforeach; ?>


                  <div class="form-group my-3">
                    <button type="submit" class="btn-sm btn-primary float-right mx-1">Simpan</button>
                    <a href="<?= base_url('admin/profilDesa') ?>">
                      <button type="button" class="btn-sm btn-danger float-right px-3 py-1">Batal</button>
                    </a>
                  </div>
                </form>
              </div>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- ./col -->

        </div>
        <!-- /.row -->


      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
