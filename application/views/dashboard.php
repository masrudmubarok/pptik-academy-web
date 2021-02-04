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
    <p></p>
    <script type="text/javascript">
        window.onload = function() {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                title: {
                    text: "Cashflow per Semester"
                },
                axisY: {
                    title: "Pemasukan",
                    titleFontColor: "#4F81BC",
                    lineColor: "#4F81BC",
                    labelFontColor: "#4F81BC",
                    tickColor: "#4F81BC"
                },
                axisY2: {
                    title: "Pengeluaran",
                    titleFontColor: "#C0504E",
                    lineColor: "#C0504E",
                    labelFontColor: "#C0504E",
                    tickColor: "#C0504E"
                },
                toolTip: {
                    shared: true
                },
                legend: {
                    cursor: "pointer",
                    itemclick: toggleDataSeries
                },
                data: [{
                        type: "column",
                        name: "Pemasukan",
                        legendText: "Pemasukan",
                        showInLegend: true,
                        dataPoints: [{
                                label: "Agustus",
                                y: <?php echo $in_agustus; ?>
                            },
                            {
                                label: "September",
                                y: <?php echo $in_september; ?>
                            },
                            {
                                label: "Oktober",
                                y: <?php echo $in_oktober; ?>
                            },
                            {
                                label: "November",
                                y: <?php echo $in_november; ?>
                            },
                            {
                                label: "Desember",
                                y: <?php echo $in_desember; ?>
                            },
                            {
                                label: "January",
                                y: <?php echo $in_januari; ?>
                            }
                        ]
                    },
                    {
                        type: "column",
                        name: "Pengeluaran",
                        legendText: "Pengeluaran",
                        axisYType: "secondary",
                        showInLegend: true,
                        dataPoints: [{
                                label: "Agustus",
                                y: <?php echo $out_agustus; ?>
                            },
                            {
                                label: "September",
                                y: <?php echo $out_september; ?>
                            },
                            {
                                label: "Oktober",
                                y: <?php echo $out_oktober; ?>
                            },
                            {
                                label: "November",
                                y: <?php echo $out_november; ?>
                            },
                            {
                                label: "Desember",
                                y: <?php echo $out_desember; ?>
                            },
                            {
                                label: "January",
                                y: <?php echo $out_januari; ?>
                            }
                        ]
                    }
                ]
            });
            chart.render();

            function toggleDataSeries(e) {
                if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                    e.dataSeries.visible = false;
                } else {
                    e.dataSeries.visible = true;
                }
                chart.render();
            }

        }
    </script>
</head>

<body>
    <div id="chartContainer" style="height: 300px; width: 100%;"></div>
    <script src="<?= base_url('assets/canvasjs/js/canvasjs.min.js') ?>"></script>
</body>

</html>