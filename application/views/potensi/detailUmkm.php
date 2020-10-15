
<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="card card-solid mx-3 my-3">
    <div class="card-body">
      	<div class="text-center my-4">
			<h4 class="font-weight-bold"><?= $umkm[0]['nama']  ?></h4>
		</div>
	
		<div class="my-4">
			<h6 class="font-weight-bold">Deskripsi Usaha</h6>
			<p><?= $umkm[0]['deskripsi']  ?></p>
		</div>

		<div class="my-4">
			<h6 class="font-weight-bold">Produk</h6>
			<div class="row justify-content-center my-2">
				<?php foreach ($umkm as $row) : ?>
					<div class="col-sm-2 my-2">
						<div class="card text-center" style="max-width: 22rem;">
						  <img src="<?= base_url('assets/img/').$row['gambar'] ?>" class="card-img-top" alt="...">
						  <h6 class="my-2"><?= $row['deskripsi_gambar'] ?></h6>
						</div>
					</div>
				<?php endforeach; ?>
				<?php foreach ($umkm as $row) : ?>
					<div class="col-sm-2 my-2">
						<div class="card text-center" style="max-width: 22rem;">
						  <img src="<?= base_url('assets/img/').$row['gambar'] ?>" class="card-img-top" alt="...">
						  <h5></h5>
						</div>
					</div>
				<?php endforeach; ?>
				<?php foreach ($umkm as $row) : ?>
					<div class="col-sm-2 my-2">
						<div class="card text-center" style="max-width: 22rem;">
						  <img src="<?= base_url('assets/img/').$row['gambar'] ?>" class="card-img-top" alt="...">
						  <h5></h5>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
	<!-- ./card-body -->
  </div>	
  <!-- ./card -->
</section>
<!-- ./content-wrapper -->