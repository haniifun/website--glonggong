
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
              <li class="breadcrumb-item active">Profil Desa</li>
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
          <div class="col-md-5">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-calendar"></i>
                  Visi
                  <a class="btn-sm btn-primary mx-2" href="<?= base_url('admin/editVisi') ?>">
                    <i class="fas fa-edit"></i> Edit
                  </a>
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <blockquote>
                  <p class="font-italic">"<?= $visi['visi'] ?>"</p>
                </blockquote>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- ./col -->

          <!-- Misi -->
          <div class="col-md-7">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-text-width"></i>
                  Misi
                  <a class="btn-sm btn-primary mx-2" href="<?= base_url('admin/editMisi') ?>">
                    <i class="fas fa-edit"></i> Edit
                  </a>
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <ol>
                    <?php foreach ($misi as $row) : ?>
                      <li><?= $row['misi'] ?></li>
                    <?php endforeach; ?>
                  </ol>
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <!-- Visi -->
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-calendar"></i>
                  Sejarah Desa Glonggong
                  <a class="btn-sm btn-primary mx-2" href="<?= base_url('admin/editSejarah') ?>">
                    <i class="fas fa-edit"></i> Edit
                  </a>
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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