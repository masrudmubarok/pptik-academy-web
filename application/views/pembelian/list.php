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
                                <th class="text-center" style="width: 100px">ID ORDER</th>
                                <th class="text-center" style="width: 120px">NAMA SISWA</th>
                                <th class="text-center" style="width: 150px">NAMA KURSUS</th>
                                <th class="text-center" style="width: 80px">JUMLAH</th>
                                <th class="text-center" style="width: 80px">WAKTU</th>
                                <th class="text-center" style="width: 80px">STATUS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            $no = 1;
                            foreach ($pembelian_list as $beli) { ?>
                                <tr>
                                    <td class="text-center" style="width: 20px"><?php echo $no++ ?></td>
                                    <td class="text-left"><?php echo $beli->order_id; ?></td>
                                    <td class="text-left"><?php echo $beli->nama_siswa; ?></td>
                                    <td class="text-left" style="width: 230px;"><?php echo $beli->nama_kursus; ?></td>
                                    <td class="text-center"><?php echo $beli->gross_amount; ?></td>
                                    <td class="text-center"><?php echo $beli->transaction_time; ?></td>
                                    <td class="text-center"><?php echo $beli->transaction_status; ?></td>
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