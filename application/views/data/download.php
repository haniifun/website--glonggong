

  <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid p-3">
            <h1 class="text-center">Surat dan Formulir</h1>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid px-4">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title text-center">Surat dan Formulir</h3>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <table id="file" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Deskripsi</th>
                    <th>Download</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $i=1; foreach ($file as $row) : ?>
                    <tr>
                      <td><?= $i ?></td>
                      <td><?= $row['deskripsi'] ?></td>
                      <td><a href="<?= base_url('assets/file/'.$row['file']) ?>" target="_blank">Download</a></td>
                    </tr>


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
