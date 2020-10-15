	<section>
		<div class="container-fluid my-4">
			<div class="px-3">
				<h5 class="font-weight-bold">Update Berita Terbaru</h5>
			</div>

			<div class="row px-3">
				<div class="col-md-6">
					<h6 class="font-weight-bold my-3">Berita Terbaru</h6>
					<div id="berita-terbaru" class="carousel slide" data-ride="carousel">
					  <div class="carousel-inner">
					  	<?php $i=1; foreach ($berita as $row) : ?>
					    <div class="carousel-item <?php if($i==1) echo 'active'?>">
					       <div class="card">
							  <img src="<?= base_url('assets/img/berita/').$row['gambar'] ?>" class="card-img-top" alt="...">
							  <div class="card-body">
							    <a href="<?= base_url('berita/post/').$row['url'] ?>"><h5 class=" font-weight-bold my-2"><?= $row['judul'] ?></h5></a>
							  </div>
							</div>
					    </div>
						<?php $i++; endforeach; ?>
					  </div>
					  <a class="carousel-control-prev" href="#berita-terbaru" role="button" data-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#berita-terbaru" role="button" data-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>
				</div>

				<div class="col-md-6">
					<h6 class="font-weight-bold my-3">Infromasi Desa</h6>
					<div id="informasi-desa" class="carousel slide" data-ride="carousel">
					  <div class="carousel-inner">
					  	<?php $i=1; foreach ($informasi as $row) : ?>
					    <div class="carousel-item <?php if($i==1) echo 'active'?>">
					       <div class="card">
							  <img src="<?= base_url('assets/img/berita/').$row['gambar'] ?>" class="card-img-top" alt="...">
							  <div class="card-body">
							    <a href="<?= base_url('berita/post/').$row['url'] ?>"><h5 class=" font-weight-bold my-2"><?= $row['judul'] ?></h5></a>
							  </div>
							</div>
					    </div>
						<?php $i++; endforeach; ?>
					  </div>
					  <a class="carousel-control-prev" href="#informasi-desa" role="button" data-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#informasi-desa" role="button" data-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>
				</div>
			</div>
			<div class="my-4">
				<div class="card-header px-3">
	                  <h4 class="card-title font-weight-bold">Berita Terbaru</h4>
	          	      <h6><a href="<?= base_url('berita/beritaLainnya') ?>" class="text-primary float-right">Lainnya</a></h6>
				</div>
				<div class="row px-3">
					<div class="col-lg col-md-3 my-1">
				       <div class="card">
						  <img src="<?= base_url('assets/') ?>img/gambar5x3.png" class="card-img-top" alt="...">
						  <div class="card-body">
						    <a href="#"><h6 class="card-title  font-weight-bold">Program Dana Desa Penting untuk Dipertahankan</h6></a>
						  </div>
						</div>
					</div>
					<div class="col-lg col-md-3 my-1">
				       <div class="card">
						  <img src="<?= base_url('assets/') ?>img/gambar5x3.png" class="card-img-top" alt="...">
						  <div class="card-body">
						    <a href="#"><h6 class="card-title  font-weight-bold">Program Dana Desa Penting untuk Dipertahankan</h6></a>
						  </div>
						</div>
					</div>
					<div class="col-lg col-md-3 my-1">
				       <div class="card">
						  <img src="<?= base_url('assets/') ?>img/gambar5x3.png" class="card-img-top" alt="...">
						  <div class="card-body">
						    <a href="#"><h6 class="card-title  font-weight-bold">Program Dana Desa Penting untuk Dipertahankan</h6></a>
						  </div>
						</div>
					</div>
					<div class="col-lg col-md-3 my-1">
				       <div class="card">
						  <img src="<?= base_url('assets/') ?>img/gambar5x3.png" class="card-img-top" alt="...">
						  <div class="card-body">
						    <a href="#"><h6 class="card-title  font-weight-bold">Program Dana Desa Penting untuk Dipertahankan</h6></a>
						  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>