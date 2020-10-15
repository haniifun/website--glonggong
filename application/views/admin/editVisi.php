
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
              <li class="breadcrumb-item active">Edit Visi Desa</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="row">
          <!-- Visi -->
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-calendar"></i>
                  Edit Visi 
                </h3>
              </div>
              <!-- /.card-header -->

              <div class="card-body">
                <form method="post" action="<?= base_url('admin/editVisi') ?>" >
                  <?= form_error('visi', '<small class="text-danger">', '</small>'); ?>
                  <div class="form-group">
                    <textarea id="visi" name="visi" class="form-control" rows="7" autofocus><?= $visi['visi'] ?></textarea>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn-sm btn-primary float-right mx-1">Simpan</button>
                  </div>
                </form>
                <a href="<?= base_url('admin/profilDesa') ?>">
                  <button class="btn-sm btn-danger float-right px-3">Batal</button>
                </a>
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