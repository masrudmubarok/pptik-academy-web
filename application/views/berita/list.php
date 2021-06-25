<div class="py-1">
    <div class="container">
        <div class="row">
            <!-- <div class="col-md-12"><h3 class="display-3">Tutor</h3></div> -->
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
            <div class="col-md-12 mt-2"><a class="btn btn-success" href="<?php echo base_url('berita/add_berita'); ?>"><i class="fa fa-plus"></i>&ensp;Tambah Berita</a></div>
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
                                <th class="text-center" style="width: 280px">JUDUL</th>
                                <th class="text-center" style="width: 280px">KETERANGAN</th>
                                <th class="text-center" style="width: 280px">TANGGAL</th>
                                <th class="text-center" style="width: 280px">LINK</th>
                                <th class="text-center" style="width: 150px">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            $no = 1;
                            foreach ($berita_list as $berita) { ?>
                                <tr>
                                    <td class="text-center"><?php echo $no++ ?></td>
                                    <td class="text-left"><?php echo $berita->judul_berita ?></td>
                                    <td class="text-left"><?php echo $berita->keterangan ?></td>
                                    <td class="text-center"><?php echo $berita->tanggal_berita ?></td>
                                    <td class="text-center"><?php echo $berita->link_berita ?></td>
                                    <td class="text-center">
                                        <a href="<?= base_url('berita/edit_berita/' . $berita->id_berita) ?>"><i class="fa fa-pencil text-secondary"></i></a>
                                        <a href="#" data-toggle="modal" data-target="#ModalDelete" data-id="<?php echo $berita->id_berita; ?>" data-title="<?php echo $berita->id_berita; ?>"><i class="fa fa-trash text-danger"></i></a>
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
                <p>Anda yakin ingin menghapus data berita yang dipilih?</p>
                <p id="krstitle"></p>
            </div>
            <div class="modal-footer">
                <a href="<?php echo base_url() ?>berita/delete/<?php echo $berita->id_berita ?>" class="btn btn-danger">Delete</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
    $('#ModalDelete').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var berita_id = button.data('id')
        var modal = $(this)
        var ttr_title = button.data('title');
        document.getElementById('ttrtitle').innerHTML = ttr_title;
        modal.find('.modal-footer a').attr("href", "<?= base_url() ?>Berita/delete/" + berita_id)
    })
</script>