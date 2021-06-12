<div class="py-1">
    <div class="container">
        <div class="row">
            <!-- <div class="col-md-12"><h3 class="display-3">Kursus</h3></div> -->
        </div>
    </div>
</div>
<div class="py-0">
    <div class="container">
        <div class="row">
            <!-- <img src="<?= $krs->icon ?>" alt="icon"> -->
            <table class="table table-borderless">

                <?php foreach ($krs_list as $krs) : ?>

                    <tr>
                        <td rowspan="3" colspan="2"><img src="<?php echo base_url() ?>assets/icon/<?= $krs->icon; ?>" style="width : 50%; margin-top: 20px; margin-left: 20px"></td>
                        <td colspan="3">
                            <h2 style="margin-top: 20px; margin-left: -230px; margin-right: 30px;"><?= $krs->nama_kursus; ?></h2>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="3">
                            <p style="margin-top: -2%; margin-left: -230px; margin-right: 30px; text-align: justify;"><?= $krs->deskripsi; ?></p>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="3">
                            <p style="margin-top: -2%; margin-left: -230px; margin-right: 30px;"><b>Tutor :</b> <?= $krs->nama_tutor; ?> &nbsp&nbsp <b>Harga :</b> Rp <?php echo number_format($krs->harga, 0, ',', '.'); ?></p>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="4"></td>
                    </tr>

                    <tr>
                        <td colspan="4"></td>
                    </tr>

                    <tr>
                        <td colspan="4">
                            <h5><b><?= $krs->judul1; ?></b>
                                <hr>
                            </h5>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <video controls width="530" height="330">
                                <source src="<?php echo base_url() ?>assets/video/<?= $krs->video1; ?>" type="video/mp4">
                            </video>
                        </td>
                        <td colspan="2">
                            <embed type="application/pdf" src="<?php echo base_url() ?>assets/modul/<?= $krs->modul1; ?>" width="530" height="330"></embed>
                        </td>
                    </tr>

                    <tr>
                        <td></td>
                    </tr>

                    <tr>
                        <td colspan="4">
                            <h5><b><?= $krs->judul2; ?></b>
                                <hr>
                            </h5>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <video controls width="530" height="330">
                                <source src="<?php echo base_url() ?>assets/video/<?= $krs->video2; ?>" type="video/mp4">
                            </video>
                        </td>
                        <td colspan="2">
                            <embed type="application/pdf" src="<?php echo base_url() ?>assets/modul/<?= $krs->modul2; ?>" width="530" height="330"></embed>
                        </td>
                    </tr>

                    <tr>
                        <td></td>
                    </tr>

                    <tr>
                        <td colspan="4">
                            <h5><b><?= $krs->judul3; ?></b>
                                <hr>
                            </h5>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <video controls width="530" height="330">
                                <source src="<?php echo base_url() ?>assets/video/<?= $krs->video3; ?>" type="video/mp4">
                            </video>
                        </td>
                        <td colspan="2">
                            <embed type="application/pdf" src="<?php echo base_url() ?>assets/modul/<?= $krs->modul3; ?>" width="530" height="330"></embed>
                        </td>
                    </tr>

                    <tr>
                        <td></td>
                    </tr>

                    <tr>
                        <td colspan="4">
                            <h5><b><?= $krs->judul4; ?></b>
                                <hr>
                            </h5>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <video controls width="530" height="330">
                                <source src="<?php echo base_url() ?>assets/video/<?= $krs->video4; ?>" type="video/mp4">
                            </video>
                        </td>
                        <td colspan="2">
                            <embed type="application/pdf" src="<?php echo base_url() ?>assets/modul/<?= $krs->modul4; ?>" width="530" height="330"></embed>
                        </td>
                    </tr>

                    <tr>
                        <td></td>
                    </tr>

                    <tr>
                        <td colspan="4">
                            <h5><b><?= $krs->judul5; ?></b>
                                <hr>
                            </h5>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <video controls width="530" height="330">
                                <source src="<?php echo base_url() ?>assets/video/<?= $krs->video5; ?>" type="video/mp4">
                            </video>
                        </td>
                        <td colspan="2">
                            <embed type="application/pdf" src="<?php echo base_url() ?>assets/modul/<?= $krs->modul5; ?>" width="530" height="330"></embed>
                        </td>
                    </tr>

                    <tr>
                        <td></td>
                    </tr>

                    <tr>
                        <td colspan="4">
                            <h5><b><?= $krs->judul6; ?></b>
                                <hr>
                            </h5>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <video controls width="530" height="330">
                                <source src="<?php echo base_url() ?>assets/video/<?= $krs->video6; ?>" type="video/mp4">
                            </video>
                        </td>
                        <td colspan="2">
                            <embed type="application/pdf" src="<?php echo base_url() ?>assets/modul/<?= $krs->modul6; ?>" width="530" height="330"></embed>
                        </td>
                    </tr>

                    <tr>
                        <td></td>
                    </tr>

                    <tr>
                        <td colspan="4">
                            <h5><?= $krs->judul7; ?></b>
                                <hr>
                            </h5>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <video controls width="530" height="330">
                                <source src="<?php echo base_url() ?>assets/video/<?= $krs->video7; ?>" type="video/mp4">
                            </video>
                        </td>
                        <td colspan="2">
                            <embed type="application/pdf" src="<?php echo base_url() ?>assets/modul/<?= $krs->modul7; ?>" width="530" height="330"></embed>
                        </td>
                    </tr>

                    <tr>
                        <td></td>
                    </tr>

                    <tr>
                        <td colspan="4">
                            <h5><b><?= $krs->judul8; ?></b>
                                <hr>
                            </h5>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <video controls width="530" height="330">
                                <source src="<?php echo base_url() ?>assets/video/<?= $krs->video8; ?>" type="video/mp4">
                            </video>
                        </td>
                        <td colspan="2">
                            <embed type="application/pdf" src="<?php echo base_url() ?>assets/modul/<?= $krs->modul8; ?>" width="530" height="330"></embed>
                        </td>
                    </tr>

                    <tr>
                        <td></td>
                    </tr>

                    <tr>
                        <td colspan="4">
                            <h5><b><?= $krs->judul9; ?></b>
                                <hr>
                            </h5>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <video controls width="530" height="330">
                                <source src="<?php echo base_url() ?>assets/video/<?= $krs->video9; ?>" type="video/mp4">
                            </video>
                        </td>
                        <td colspan="2">
                            <embed type="application/pdf" src="<?php echo base_url() ?>assets/modul/<?= $krs->modul9; ?>" width="530" height="330"></embed>
                        </td>
                    </tr>

                    <tr>
                        <td></td>
                    </tr>

                    <tr>
                        <td colspan="4">
                            <h5><b><?= $krs->judul10; ?></b>
                                <hr>
                            </h5>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <video controls width="530" height="330">
                                <source src="<?php echo base_url() ?>assets/video/<?= $krs->video10; ?>" type="video/mp4">
                            </video>
                        </td>
                        <td colspan="2">
                            <embed type="application/pdf" src="<?php echo base_url() ?>assets/modul/<?= $krs->modul10; ?>" width="530" height="330"></embed>
                        </td>
                    </tr>

                <?php endforeach; ?>

            </table>

        </div>
    </div>
</div>