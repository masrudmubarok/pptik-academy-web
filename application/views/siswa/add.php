<div class="py-1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <!-- <h3 class="display-3">Tambah Siswa</h3> -->
      </div>
    </div>
  </div>
</div>
<?php if ($this->session->flashdata('error_message')) { ?>
  <div class="py-1">
    <div class="container">
      <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">Oh snap!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></h4>
        <p><?= $this->session->flashdata('error_message') ?></p>
      </div>
    </div>
  </div>
<?php } ?>
<div class="py-1">
  <div class="container">
    <div class="alert alert-primary" role="alert">
      <p><b>Informasi!</b> Field yang ditandai harus diisi dengan benar.</p>
    </div>
  </div>
</div>
<div class="py-4">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <form id="c_form-h" method="post" action="<?= base_url('Siswa/create1'); ?>" enctype="multipart/form-data">
          <div class="form-group row">
            <label for="nama_siswa" class="col-4 col-form-label">Nama Siswa*</label>
            <div class="col-9">
              <input type="text" class="form-control" name="nama_siswa">
            </div>
          </div>
          <div class="form-group row">
            <label for="username" class="col-4 col-form-label">Username*</label>
            <div class="col-9">
              <input type="text" class="form-control" name="username">
            </div>
          </div>
          <div class="form-group row">
            <label for="password" class="col-4 col-form-label">Password*</label>
            <div class="col-9">
              <input type="password" class="form-control" name="password">
            </div>
          </div>
          <div class="form-group row">
            <label for="email" class="col-4 col-form-label">Email*</label>
            <div class="col-9">
              <input type="text" class="form-control" name="email">
            </div>
          </div>
          <div class="form-group row">
            <label for="kota" class="col-4 col-form-label">Kota*</label>
            <div class="col-9">
              <input type="text" class="form-control" name="kota">
            </div>
          </div>
          <div class="form-group row">
            <label for="negara" class="col-4 col-form-label">Negara*</label>
            <div class="col-9">
              <input type="text" class="form-control" name="negara">
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Lanjut</button>
      </div>
      </form>
    </div>
  </div>
</div>