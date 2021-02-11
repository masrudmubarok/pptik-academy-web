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
                <form id="c_form-h" method="post" action="<?= base_url('Siswa/create2'); ?>" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label for="nama_siswa" class="col-4 col-form-label">Nama Siswa*</label>
                        <div class="col-9">
                            <select name="id_siswa" class="custom-select">
                                <option selected value=""><b>Pilih :</b></option>
                                <?php
                                foreach ($swas_list as $swas) {
                                    echo "<option value='$swas->id_siswa'>$swas->nama_siswa</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_kursus" class="col-4 col-form-label">Nama Kursus*</label>
                        <div class="col-9">
                            <select name="id_kursus" class="custom-select">
                                <option selected value=""><b>Pilih :</b></option>
                                <?php
                                foreach ($krss_list as $krss) {
                                    echo "<option value='$krss->id_kursus'>$krss->nama_kursus</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="status_pembayaran" class="col-4 col-form-label">Status Pembayaran*</label>
                        <div class="col-9">
                            <select name="status_pembayaran" class="custom-select">
                                <option selected value=""><b>Pilih :</b></option>
                                <option value="lunas">Lunas</option>
                                <option value="belum">Belum</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="status_kursus" class="col-4 col-form-label">Status Kursus*</label>
                        <div class="col-9">
                            <select name="status_kursus" class="custom-select">
                                <option selected value=""><b>Pilih :</b></option>
                                <option value="selesai">Selesai</option>
                                <option value="belum">Belum</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sertifikat" class="col-4 col-form-label">Sertifikat*</label>
                        <div class="col-9">
                            <input type="file" name="sertifikat">
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>