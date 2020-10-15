	<section>
		<div class="container-fluid">

			<div class="row p-3">
				<div class="col-lg-8">
					<h5 class="text-muted font-italic"><?= $hasil.' : '.$tag ?></h5>
					<div class="row">
						<?php foreach ($berita as $row) : ?>
							<div class="col-lg col-md-3 my-1">
								<div class="card">
								  <img src="<?= base_url('assets/img/berita/').$row['gambar'] ?>" class="card-img-top" alt="...">
								  <div class="card-body">
								    <a href="<?= base_url('berita/post/').$row['url'] ?>"><h5 class=" font-weight-bold my-2"><?= $row['judul'] ?></h5></a>
								  </div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
				<!-- ./col -->


				<div class="col-lg-4">
	              <div class="card">
	                <div class="card-header mb-2">
	                  <h4 class="card-title font-weight-bold">Berita Terbaru</h4>
	                  <h6><a href="" class="text-primary float-right">Lainnya</a></h6>
	                </div>
	                <?php foreach ($terbaru as $row) : ?>
			          <div class="col-12 col-sm-12 col-md-12">
			            <div class="info-box mb-3">
			              <img src="<?= base_url('assets/img/berita/').$row['gambar'] ?>" width="80px">
			              <div class="info-box-content">
						  	<a href=""><span class="text-primary mr-1 text-uppercase font-weight-bold mt-0" style="font-size: 12px"><?= $row['kategori'] ?></span></a>
							<a href="<?= base_url('berita/post/').$row['url'] ?>"><h6 class="font-weight-bold m-0 p-0 text-dark"><?= $row['judul'] ?></h6></a>
			             	<p class="text-muted m-0 p-0" style="font-size: 14px"><?= date('d/m/Y', strtotime($row['tglPosting'])) ?></p> 	
			              </div>
			              <!-- /.info-box-content -->
			            </div>
			            <!-- /.info-box -->
			          </div>
			          <!-- /.col -->
			      <?php endforeach; ?>
	              </div>
	              <!-- /.card -->

	              <div class="card">
	                <div class="card-header mb-2">
	                  <h4 class="card-title font-weight-bold">Informasi Desa</h4>
	                  <h6><a href="" class="text-primary float-right">Lainnya</a></h6>
	                </div>
	                <?php foreach ($info as $row) : ?>
			          <div class="col-12 col-sm-12 col-md-12">
			            <div class="info-box mb-3">
			              <img src="<?= base_url('assets/img/berita/').$row['gambar'] ?>" width="80px">
			              <div class="info-box-content">
						  	<a href="<?= base_url('berita/category/').$row['kategori']?>"><span class="text-primary mr-1 text-uppercase font-weight-bold mt-0" style="font-size: 12px"><?= $row['kategori'] ?></span></a>
							<a href="<?= base_url('berita/post/').$row['url'] ?>"><h6 class="font-weight-bold m-0 p-0 text-dark"><?= $row['judul'] ?></h6></a>
			             	<p class="text-muted m-0 p-0" style="font-size: 14px"><?= date('d/m/Y', strtotime($row['tglPosting'])) ?></p> 	
			              </div>
			              <!-- /.info-box-content -->
			            </div>
			            <!-- /.info-box -->
			          </div>
			          <!-- /.col -->
			      <?php endforeach; ?>
	              </div>
	              <!-- /.card -->
		        </div>
		        <!-- /.col -->
			</div>
			<!-- ./row -->
	</section>
