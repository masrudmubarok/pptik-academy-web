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
        <form id="c_form-h" method="post" action="<?= base_url('Pembelian/update'); ?>" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="id_ambilkursus" class="col-2 col-form-label">ID*</label>
                <div class="col-3">
                    <input type="text" class="form-control" name="id_ambilkursus" value="<?= $beli->id_ambilkursus ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="order_id" class="col-2 col-form-label">ID Order*</label>
                <div class="col-3">
                    <input type="text" class="form-control" name="order_id" value="<?= $beli->order_id ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama_siswa" class="col-2 col-form-label">Siswa*</label>
                <div class="col-3">
                    <input type="text" class="form-control" name="nama_siswa" value="<?= $beli->id_siswa ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama_kursus" class="col-2 col-form-label">Kursus*</label>
                <div class="col-3">
                    <input type="text" class="form-control" name="nama_kursus" value="<?= $beli->id_kursus ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="gross_amount" class="col-2 col-form-label">Jumlah*</label>
                <div class="col-3">
                    <input type="text" class="form-control" name="gross_amount" value="<?= $beli->gross_amount ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="transaction_time" class="col-2 col-form-label">Waktu*</label>
                <div class="col-3">
                    <input type="text" class="form-control" name="transaction_time" value="<?= $beli->transaction_time ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="transaction_status" class="col-2 col-form-label">Status*</label>
                <div class="col-3">
                    <select name="transaction_status" class="custom-select">
                        <option selected value="<?php echo $beli->transaction_status ?>"><b><?php echo $beli->transaction_status ?></b></option>
                        <option>settlement</option>
                        <option>pending</option>
                        <option>cancel</option>
                        <option>failure</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Ubah Data</button>
        </form>
    </div>
</div>