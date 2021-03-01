<!DOCTYPE HTML>
<html>

<head>

    <div class="row" style="margin-top: 20px; margin-left: 0px;">
        <!-- Courses Card -->
        <div class="col-md-4 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h4 class="mt-4 mr-2"><b>Courses</b></h4>
                    <h6><?php echo $sum_kursus ?> Class</h6>
                </div>
                <div class="icon">
                    <i class="fa fa-book ml-2"></i>
                </div>
                <a href="<?= base_url('Kursus'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <!-- Tutors Card -->
        <div class="col-md-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h4 class="mt-4 mr-2"><b>Tutors</b></h4>
                    <h6><?php echo $sum_tutor ?> People</h6>
                </div>
                <div class="icon">
                    <i class="fa fa-user ml-2"></i>
                </div>
                <a href="<?= base_url('Tutor'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <!-- Students Card -->
        <div class="col-md-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h4 class="mt-4 mr-2"><b>Students</b></h4>
                    <h6><?php echo $sum_siswa ?> People</h6>
                </div>
                <div class="icon">
                    <i class="fa fa-users ml-2"></i>
                </div>
                <a href="<?= base_url('Siswa'); ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>

    <br>
    <center>
        <h2>Top Courses</h2>
    </center>
    <div class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-borderless">
                            <tbody>
                                <?php
                                $i = 1;
                                $no = 1;
                                foreach ($top as $tpk) { ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no++; ?></td>
                                        <td class="text-left"><?php echo $tpk->nama_kursus ?></td>
                                        <td class="text-center"><?php echo $tpk->jumlah ?> <sub style="color: #778899;">intakes</sub></td>
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
</head>

<body>

</body>

</html>