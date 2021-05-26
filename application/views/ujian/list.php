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
<div class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped table-borderless" id="newstable">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 20px">NO</th>
                                <th class="text-center" style="width: 150px">NAMA SISWA</th>
                                <th class="text-center" style="width: 150px">NAMA KURSUS</th>
                                <th class="text-center" style="width: 70px">TANGGAL DAFTAR</th>
                                <th class="text-center" style="width: 80px">STATUS UJIAN</th>
                                <th class="text-center" style="width: 80px">STATUS SERTIFIKAT</th>
                                <th class="text-center" style="width: 80px">NO SERTIFIKAT</th>
                                <th class="text-center" style="width: 80px">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            $no = 1;
                            foreach ($ujian_list as $ujian) { ?>
                                <tr>
                                    <td class="text-center" style="width: 20px"><?php echo $no++ ?></td>
                                    <td class="text-left"><?php echo $ujian->nama_siswa; ?></td>
                                    <td class="text-left" style="width: 120px;"><?php echo $ujian->nama_kursus; ?></td>
                                    <td class="text-center"><?php echo $ujian->tanggal_daftar; ?></td>
                                    <td class="text-center"><?php echo $ujian->status_ujian; ?></td>
                                    <td class="text-center"><?php echo $ujian->status_sertifikat; ?></td>
                                    <td class="text-center"><?php echo $ujian->no_sertifikat; ?></td>
                                    <td class="text-center" style="width: 80px">
                                        <a href="<?= base_url('Ujian/edit_ujian/' . $ujian->id_ujian) ?>"><i class="fa fa-pencil text-secondary"></i></a>
                                        <a href="#" data-toggle="modal" data-target="#ModalDelete" data-id="<?php echo $ujian->id_ujian; ?>" data-title="<?php echo $ujian->id_ujian; ?>"><i class="fa fa-trash text-danger"></i></a>
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
                <p>Anda yakin ingin menghapus data ujian yang dipilih?</p>
                <p id="ujiantitle"></p>
            </div>
            <div class="modal-footer">
                <a href="<?php echo base_url() ?>Ujian/delete/<?php echo $ujian->id_ujian ?>" class="btn btn-danger">Delete</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
    $('#ModalDelete').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var ujian_id = button.data('id')
        var modal = $(this)
        var ujian_title = button.data('title');
        document.getElementById('ujiantitle').innerHTML = ujian_title;
        modal.find('.modal-footer a').attr("href", "<?= base_url() ?>Ujian/delete/" + ujian_id)
    })
</script>