<div class="py-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- <h3 class="display-3">Ubah Data Detail Siswa</h3> -->
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
        <form id="c_form-h" method="post" action="<?= base_url('Siswa/update2'); ?>" enctype="multipart/form-data">
            <div class="form-group row">
                <!-- <label for="id_ambilkursus" class="col-2 col-form-label">ID Ambil Kursus*</label> -->
                <div class="col-3">
                    <input type="hidden" class="form-control" name="id_ambilkursus" value="<?= $akrs->id_ambilkursus ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <!-- <label for="id_siswa" class="col-2 col-form-label">ID Siswa*</label> -->
                <div class="col-3">
                    <input type="hidden" class="form-control" name="id_siswa" value="<?= $akrs->id_siswa ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="id_kursus" class="col-2 col-form-label">ID Kursus*</label>
                <div class="col-3">
                    <input type="text" class="form-control" name="id_kursus" value="<?= $akrs->id_kursus ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="status_pembayaran" class="col-2 col-form-label">Pembayaran*</label>
                <div class="col-3">
                    <select name="status_pembayaran" class="form-control">
                        <option selected value="<?= $akrs->status_pembayaran ?>">
                            <?php echo $akrs->status_pembayaran ?>
                        </option>
                        <option value="lunas"><b>lunas</b></option>
                        <option value="belum"><b>belum</b></option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="status_kursus" class="col-2 col-form-label">Status Kursus*</label>
                <div class="col-3">
                    <select name="status_kursus" class="form-control">
                        <option selected value="<?= $akrs->status_kursus ?>">
                            <?php echo $akrs->status_kursus ?>
                        </option>
                        <option value="selesai"><b>selesai</b></option>
                        <option value="belum"><b>belum</b></option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="sertifikat" class="col-2 col-form-label">Sertifikat*</label>
                <div class="col-3">
                    <input type="file" name="sertifikat" value="<?= $akrs->sertifikat ?>">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Ubah Data</button>
        </form>
    </div>
</div>