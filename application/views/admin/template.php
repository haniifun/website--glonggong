

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">

              <!-- /.card-header -->
              <div class="card-body">

					  <img src="<?= base_url('assets/img/berita/').$berita['gambar'] ?>" class="card-img-top" alt="...">
					  <div class="card-body">
					  	<a href="#">
					  		<span class="text-primary mr-2 text-uppercase font-weight-bold" style="font-size: 14px"><?= $berita['kategori'] ?></span>
					  	</a>
						<h3 class="font-weight-bold my-2"><?= $berita['judul'] ?></h3>
					    <p class="text-muted" style="font-size: 14px">Dipublish pada <?= date('d/m/Y', strtotime($berita['tglPosting'])) ?></p>
					    <p><?= $berita['konten'] ?></p>
					    <span class="font-weight-bold">Tags : </span>
					    <?php for($i=0; $i<count($tags); $i++) : ?>
					    	<a href="#"><span class="text-primary" style="font-size: 14px"><?= $tags[$i] ?>,</span></a>
					    <?php endfor; ?>
					  </div>
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


