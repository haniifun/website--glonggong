<div class="container">
	<div class="row justify-content-center py-3">
		<?php foreach ($umkm as $row) : ?>
			<div class="col-sm-4 my-2">
				<div class="card text-center" style="max-width: 20rem;">
				  <img src="<?= base_url('assets/') ?>img/gambar3x3.png" class="card-img-top" alt="...">
				  <div class="card-body">
				    <a href="<?= base_url('potensi/detailUmkm/'.$row['id']) ?>" class="h5 "><?= $row['nama'] ?></a>
				  </div>
				</div>
			</div>
		<?php endforeach; ?><!-- 
		<div class="col-sm-4 my-2">
			<div class="card text-center" style="max-width: 20rem;">
			  <img src="<?= base_url('assets/') ?>img/gambar3x3.png" class="card-img-top" alt="...">
			  <div class="card-body">
			    <a href="#" class="h5">UMKM 1</a>
			  </div>
			</div>
		</div>
		<div class="col-sm-4 my-2">
			<div class="card text-center" style="max-width: 20rem;">
			  <img src="<?= base_url('assets/') ?>img/gambar3x3.png" class="card-img-top" alt="...">
			  <div class="card-body">
			    <a href="#" class="h5">UMKM 1</a>
			  </div>
			</div>
		</div>
		<div class="col-sm-4 my-2">
			<div class="card text-center" style="max-width: 20rem;">
			  <img src="<?= base_url('assets/') ?>img/gambar3x3.png" class="card-img-top" alt="...">
			  <div class="card-body">
			    <a href="#" class="h5">UMKM 1</a>
			  </div>
			</div>
		</div>
		<div class="col-sm-4 my-2">
			<div class="card text-center" style="max-width: 20rem;">
			  <img src="<?= base_url('assets/') ?>img/gambar3x3.png" class="card-img-top" alt="...">
			  <div class="card-body">
			    <a href="#" class="h5">UMKM 1</a>
			  </div>
			</div>
		</div> -->
	</div>
	
</div>