

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Post Berita</h1>
          </div><!-- 
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div> -->
        </div>
        <div class="my-2">
          <a href="<?= base_url('admin/postBerita') ?>" class="btn btn-primary">
            <i class="fa fa-plus px-3"> Post Berita</i> 
          </a>
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
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <table id="berita" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Tanggal Post</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $i=1; foreach ($berita as $row) : ?>
                    <tr>
                      <td><?= $i ?></td>
                      <td><?= $row['judul'] ?></td>
                      <td><?= $row['kategori_id'] ?></td>
                      <td><?= $row['tglPosting'] ?></td>
                      <td>
                        <a href="<?= base_url('admin/preview/'.$row['url']) ?>"><button class="btn-sm btn-primary" data-toggle="modal" data-target="<?= '#edit'.$row['id'] ?>"><i class="fas fa-search"></i></button></a>
                        <a href="<?= base_url('admin/editBerita') ?>"><button class="btn-sm btn-primary" data-toggle="modal" data-target="<?= '#edit'.$row['id'] ?>"><i class="fas fa-pencil-alt"></i></button></a>
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
                            <p>Anda yakin ingin menghapus <b><?= $row['judul'] ?></b>?</p>
                          </div>

                          <form method="post" action="<?= base_url('admin/hapusBerita') ?>" >
                            <div class="modal-footer justify-content-between">
                                <input type="hidden" name="id" value="<?= $row['id'] ?>">
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
