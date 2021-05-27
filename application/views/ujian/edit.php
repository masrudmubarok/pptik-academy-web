<div class="py-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- <h3 class="display-3">Ubah Data Siswa</h3> -->
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
        <form id="c_form-h" method="post" action="<?= base_url('Ujian/update'); ?>" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="id_ujian" class="col-2 col-form-label">ID*</label>
                <div class="col-3">
                    <input type="text" class="form-control" name="id_ujian" value="<?= $ujian->id_ujian ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama_siswa" class="col-2 col-form-label">Siswa*</label>
                <div class="col-3">
                    <input type="text" class="form-control" name="nama_siswa" value="<?= $ujian->id_siswa ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama_kursus" class="col-2 col-form-label">Kursus*</label>
                <div class="col-3">
                    <input type="text" class="form-control" name="nama_kursus" value="<?= $ujian->id_kursus ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="tanggal_daftar" class="col-2 col-form-label">Tanggal Daftar*</label>
                <div class="col-3">
                    <input type="text" class="form-control" name="tanggal_daftar" value="<?= $ujian->tanggal_daftar ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="status_ujian" class="col-2 col-form-label">Status Ujian*</label>
                <div class="col-3">
                    <select name="status_ujian" class="custom-select">
                        <option selected value="<?php echo $ujian->status_sertifikat ?>"><b><?php echo $ujian->status_ujian ?></b></option>
                        <option>selesai</option>
                        <option>belum</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="status_sertifikat" class="col-2 col-form-label">Status Sertifikat*</label>
                <div class="col-3">
                    <select name="status_sertifikat" class="custom-select">
                        <option selected value="<?php echo $ujian->status_sertifikat ?>"><b><?php echo $ujian->status_sertifikat ?></b></option>
                        <option>selesai</option>
                        <option>belum</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="no_sertifikat" class="col-2 col-form-label">No Sertifikat*</label>
                <div class="col-3">
                    <input type="text" class="form-control" name="no_sertifikat" value="<?= $ujian->no_sertifikat ?>">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Ubah Data</button>
        </form>
    </div>
</div>