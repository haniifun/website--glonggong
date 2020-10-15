

  <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid p-3">
            <h1 class="text-center">Blangko Pembuatan KTP</h1>
      </div><!-- /.container-fluid -->
      <div class="p-3">
        <?= $this->session->flashdata('message'); ?>
      </div>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid px-3">
        <div class="row">
          <div class="col-12">

             <div class="card">

              <!-- /.card-header -->
              <div class="card-body">


                <form method="post" action="<?= base_url('pelayanan/ktp') ?>" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="jenisPermohonan" >Jenis Permohonan<span class="text-danger">*</span></label>
                    <select class="form-control" id="jenisPermohonan" name="jenisPermohonan">
                        <option value="Baru">Baru</option>
                        <option value="Perpanjangan">Perpanjangan</option>
                        <option value="Penggantian">Penggantian</option>
                    </select>
                     <?= form_error('jenisPermohonan', '<small class="text-danger">', '</small>'); ?>
                  </div>
                  <div class="form-group">
                    <label>Nama<span class="text-danger">*</span></label> 
                    <input type="text" class="form-control" name="nama" placeholder="Masukkan nama lengkap" autofocus="" alt="input nama" value="<?= set_value('nama') ?>">
                     <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                  </div>
                  <div class="form-group">
                    <label>Nomor KK<span class="text-danger">*</span></label> 
                    <input type="text" class="form-control" name="noKK" placeholder="Masukkan nomor KK" alt="input nomor kartu keluarga" value="<?= set_value('noKK') ?>">
                     <?= form_error('noKK', '<small class="text-danger">', '</small>'); ?>
                  </div>
                  <div class="form-group">
                    <label>NIK<span class="text-danger">*</span></label> 
                    <input type="text" class="form-control" name="nik" placeholder="Masukkan nomor NIK" alt="input nomor NIK" value="<?= set_value('nik') ?>">
                     <?= form_error('nik', '<small class="text-danger">', '</small>'); ?>
                  </div>
                  <div class="form-row mb-2">
                    <div class="col">
                      <label>RT</label>
                      <input type="text" class="form-control" name="rt" placeholder="Masukkan nomor RT" value="<?= set_value('rt') ?>">
                       <?= form_error('rt', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="col">
                      <label>RW</label>
                      <input type="text" class="form-control" name="rw" placeholder="Masukkan nomor RW" value="<?= set_value('rw') ?>">
                       <?= form_error('rw', '<small class="text-danger">', '</small>'); ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="foto">Foto Kartu Keluarga</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="foto" name="foto">
                        <label class="custom-file-label" for="foto">Choose file</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-primary btn-block">Kirim</button>
                  </div>
                </form>
              </div>
              <!-- ./card-body -->
            </div>
            <!-- ./card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>


