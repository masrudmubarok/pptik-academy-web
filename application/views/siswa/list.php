<div class="py-1">
  <div class="container">
    <div class="row">
      <!-- <div class="col-md-12"><h3 class="display-3">Siswa</h3></div> -->
    </div>
  </div>
</div>
<div class="py-0">
  <?php if ($this->session->flashdata('success_message')) { ?>
    <div class="container">
      <div class="alert alert-success" role="alert">
        <h5 class="alert-heading">Sukses!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></h5>
        <p><?= $this->session->flashdata('success_message') ?></p>
      </div>
    </div>
  <?php }
  if ($this->session->flashdata('error_message')) { ?>
    <div class="container">
      <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">Oh snap!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></h4>
        <p><?= $this->session->flashdata('error_message') ?></p>
      </div>
    </div>
  <?php } ?>
</div>
<div class="py-0">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mt-2">
        <a class="btn btn-success" href="<?php echo base_url('Siswa/add_swa'); ?>"><i class="fa fa-plus"></i>&ensp;Tambah Siswa</a>
      </div>
    </div>
  </div>
</div>
<div class="py-4">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="table-responsive">
          <table class="table table-striped table-borderless" id="newstable">
            <thead>
              <tr>
                <th class="text-center" style="width: 20px">NO</th>
                <th class="text-center" style="width: 200px">NAMA SISWA</th>
                <th class="text-center" style="width: 100px">USERNAME</th>
                <th class="text-center" style="width: 100px">PASSWORD</th>
                <th class="text-center" style="width: 150px">EMAIL</th>
                <th class="text-center" style="width: 50px">KOTA</th>
                <th class="text-center" style="width: 50px">NEGARA</th>
                <th class="text-center" style="width: 80px">AKSI</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $i = 1;
              $no = 1;
              foreach ($swa_list as $swa) { ?>
                <tr>
                  <td class="text-center" style="width: 20px"><?php echo $no++ ?></td>
                  <td class="text-left"><?php echo $swa->nama_siswa; ?></td>
                  <td class="text-center"><?php echo $swa->username; ?></td>
                  <td class="text-center"><?php echo $swa->password; ?></td>
                  <td class="text-left" style="width: 250px"><?php echo $swa->email; ?></td>
                  <td class="text-center"><?php echo $swa->kota; ?></td>
                  <td class="text-center"><?php echo $swa->negara; ?></td>
                  <td class="text-center" style="width: 80px">
                    <a href="<?= base_url('Siswa/lihat_detail/' . $swa->id_siswa) ?>"><i class="fa fa-eye text-secondary"></i></a>
                    <a href="<?= base_url('Siswa/edit_swa/' . $swa->id_siswa) ?>"><i class="fa fa-pencil text-secondary"></i></a>
                  </td>
                </tr>
              <?php $i++;
              } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>