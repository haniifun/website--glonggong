	<section>
		<div class="container-fluid">

			<div class="row p-3">
				<div class="col-lg-8">
					<div class="card mb-2">
					  <img src="<?= base_url('assets/img/berita/').$berita['gambar'] ?>" class="card-img-top" alt="...">
					  <div class="card-body">
					  	<a href="<?= base_url('berita/category/').$berita['kategori']?>">
					  		<span class="text-primary mr-2 text-uppercase font-weight-bold" style="font-size: 14px"><?= $berita['kategori'] ?></span>
					  	</a>
						<h3 class="font-weight-bold my-2"><?= $berita['judul'] ?></h3>
					    <p class="text-muted" style="font-size: 14px">Dipublish pada <?= date('d/m/Y', strtotime($berita['tglPosting'])) ?></p>
					    <p><?= $berita['konten'] ?></p>
					    <span class="font-weight-bold">Tags : </span>
					    <?php for($i=0; $i<count($tags); $i++) : ?>
					    	<a href="<?= base_url('berita/tags/').$tags[$i]?>"><span class="text-primary" style="font-size: 14px"><?= $tags[$i] ?>,</span></a>
					    <?php endfor; ?>
					  </div>
					</div>
					<div class="card mb-2">
					  <div class="card-body">
						<div class="col-sm-12">
							<p class="h4 font-weight-bold">Tinggalkan Balasan</p>
							<p>Alamat email Anda tidak akan dipublikasikan</p>
						  <form method="<?= base_url('berita/komen') ?>" >
		                      <!-- textarea -->
		                      <div class="form-group">
		                        <label>Komentar</label>
		                        <textarea class="form-control" rows="3" placeholder="Enter ..." name="komentar"></textarea>
		                      </div>
		                      <div class="form-group">
		                        <label>Nama<span class="text-danger">*</span></label> 
		                        <input type="text" class="form-control" name="nama">
		                      </div>
		                      <div class="form-group">
		                        <label>Email<span class="text-danger">*</span></label>
		                        <input type="email" class="form-control" name="email">
		                      </div>
		                      <div class="form-group">
		                      	<button class="btn btn-primary px-4">Kirim Komentar</button>
		                      </div>
					      </form>
						</div>
					  </div>
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
