<div class="container my-4">
	<div class="my-3">
		<h4 class="text-center font-weight-bold">Struktur Organisasi Karang Taruna</h4>
	</div>

	<div class="row">
		<?php foreach ($struktur as $row) : ?>
	      <div class="col-12 col-sm-12 col-md-6">
	        <div class="info-box mb-3">
	          <img src="<?= base_url('assets/') ?>img/gambar3x4.png" width="150px">
	          <div class="info-box-content">
	        	<h5 class="text-uppercase font-weight-bold text-center"><?= $row['jabatan'] ?></h5>
	        	<h5 class="m-0 text-center"><?= $row['nama'] ?></h5>
	          </div>
	          <!-- /.info-box-content -->
	        </div>
	        <!-- /.info-box -->
	      </div>
	      <!-- /.col -->
		<?php endforeach; ?>
	</div>

</div>