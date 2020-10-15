<!-- Main content -->
    <section class="content my-3">
      <div class="container-fluid">

        <div class="row">
          <!-- Visi -->
          <div class="col-md-5 my-1">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title text-center">
                  <i class="fas fa-calendar"></i>
                  Visi
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
          <div class="col-md-7 my-1">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title text-center">
                  <i class="fas fa-text-width"></i>
                  Misi
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

        <div class="row mt-3">
          <!-- Visi -->
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title text-center">
                  <i class="fas fa-calendar"></i>
                  Sejarah Desa Glonggong
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              	  <img src="<?= base_url('assets/') ?>img/gambar3x3.png" class="float-left mx-2" width="220px">
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