<div class="py-1">
  <div class="container">
    <div class="row">
      <!-- <div class="col-md-12"><h3 class="display-3">Kursus</h3></div> -->
    </div>
  </div>
</div>
<div class="py-0">
  <?php if ($this->session->flashdata('success_message')) { ?>
    <div class="container">
      <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Sukses!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></h4>
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
      <div class="col-md-12 mt-2"><a class="btn btn-success" href="<?php echo base_url('Kursus/add_krs'); ?>"><i class="fa fa-plus"></i>&ensp;Tambah Kursus</a></div>
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
                <th class="text-center" style="width: 30px">NO</th>
                <th class="text-center">NAMA KURSUS</th>
                <th class="text-center" style="width: 280px">NAMA TUTOR</th>
                <th class="text-center">HARGA</th>
                <th class="text-center" style="width: 150px">AKSI</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1;
              foreach ($krs_list as $krs) { ?>
                <tr>
                  <td class="text-center"><?php echo $krs->id_kursus; ?></td>
                  <td class="text-left"><?php echo $krs->nama_kursus ?></td>
                  <td class="text-left"><?php echo $krs->nama_tutor ?></td>
                  <td class="text-center">Rp <?php echo number_format($krs->harga, 0, ',', '.'); ?></td>
                  <td class="text-center">
                    <a href="<?= base_url('Kursus/edit_krs/' . $krs->id_kursus) ?>"><i class="fa fa-pencil text-secondary"></i></a>
                    <a href="#" data-toggle="modal" data-target="#ModalDelete" data-id="<?php echo $krs->id_kursus; ?>" data-title="<?php echo $krs->id_kursus; ?>"><i class="fa fa-trash text-danger"></i></a>
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
<div class="modal fade" id="ModalDelete" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Konfirmasi Penghapusan</h5> <button type="button" class="close" data-dismiss="modal"> <span>×</span> </button>
      </div>
      <div class="modal-body">
        <p>Anda yakin ingin menghapus data kursus yang dipilih?</p>
        <p id="krstitle"></p>
      </div>
      <div class="modal-footer">
        <a href="<?php echo base_url() ?>Kursus/delete/<?php echo $krs->id_kursus ?>" class="btn btn-danger">Delete</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script>
  $('#ModalDelete').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget)
    var krs_id = button.data('id')
    var modal = $(this)
    var krs_title = button.data('title');
    document.getElementById('krstitle').innerHTML = krs_title;
    modal.find('.modal-footer a').attr("href", "<?= base_url() ?>Kursus/delete/" + krs_id)
  })
</script>