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
                        <td rowspan="3" colspan="2"><img src="<?php echo base_url('assets/uploads/') . $krs->icon ?>" style="width : 50%; margin-top: 20px; margin-left: 20px"></td>
                        <td colspan="3">
                            <h2 style="margin-top: 20px; margin-left: -190px">Belajar Pemrograman Website Fundamental</h2>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="3">
                            <p style="margin-top: -2%; margin-left: -190px; text-align: justify;">Web Programming atau Pemrograman Web merupakan istilah yang erat kaitannya dengan internet dan website. Memang benar, karena pemrograman web merupakan suatu proses pembuatan website untuk keperluan internet.
                                Pada tingkatan dasar, kita akan mempelajari beberapa teknologi yang membentuk suatu website yaitu HTML (<i>Hypertext Markup Language</i>) dan CSS (<i>Cascading Style Sheets</i>) serta bahasa pemrograman PHP (<i>PHP Hypertext Preprocessor</i>) yang digunakan dalam pembuatan website.</p>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="3">
                            <p style="margin-top: -2%; margin-left: -190px"><b>Materi :</b> 10 &nbsp&nbsp <b>Durasi :</b> 20 Jam</p>
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
                            <h5><b>PERTEMUAN 1 : <?= $krs->judulvid1; ?></b>
                                <hr>
                            </h5>
                        </td>
                    </tr>

                    <tr>
                        <td><iframe width="450" height="253" src="https://www.youtube.com/embed/<?= $krs->video1; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    </tr>

                    <tr>
                        <td></td>
                    </tr>

                    <tr>
                        <td colspan="4">
                            <h5><b>PERTEMUAN 2 : <?= $krs->judulvid2; ?></b>
                                <hr>
                            </h5>
                        </td>
                    </tr>
                    <tr>
                        <td><iframe width="450" height="253" src="https://www.youtube.com/embed/<?= $krs->video2; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    </tr>

                    <tr>
                        <td></td>
                    </tr>

                    <tr>
                        <td colspan="4">
                            <h5><b>PERTEMUAN 3 : <?= $krs->judulvid3; ?></b>
                                <hr>
                            </h5>
                        </td>
                    </tr>
                    <tr>
                        <td><iframe width="450" height="253" src="https://www.youtube.com/embed/<?= $krs->video3; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    </tr>

                    <tr>
                        <td></td>
                    </tr>

                    <tr>
                        <td colspan="4">
                            <h5><b>PERTEMUAN 4 : <?= $krs->judulvid4; ?></b>
                                <hr>
                            </h5>
                        </td>
                    </tr>
                    <tr>
                        <td><iframe width="450" height="253" src="https://www.youtube.com/embed/<?= $krs->video4; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    </tr>

                    <tr>
                        <td></td>
                    </tr>

                    <tr>
                        <td colspan="4">
                            <h5><b>PERTEMUAN 5 : <?= $krs->judulvid5; ?></b>
                                <hr>
                            </h5>
                        </td>
                    </tr>
                    <tr>
                        <td><iframe width="450" height="253" src="https://www.youtube.com/embed/<?= $krs->video5; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    </tr>

                    <tr>
                        <td></td>
                    </tr>

                    <tr>
                        <td colspan="4">
                            <h5><b>PERTEMUAN 6 : <?= $krs->judulvid6; ?></b>
                                <hr>
                            </h5>
                        </td>
                    </tr>
                    <tr>
                        <td><iframe width="450" height="253" src="https://www.youtube.com/embed/<?= $krs->video6; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    </tr>

                    <tr>
                        <td></td>
                    </tr>

                    <tr>
                        <td colspan="4">
                            <h5><b>PERTEMUAN 7 : <?= $krs->judulvid7; ?></b>
                                <hr>
                            </h5>
                        </td>
                    </tr>
                    <tr>
                        <td><iframe width="450" height="253" src="https://www.youtube.com/embed/<?= $krs->video7; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    </tr>

                    <tr>
                        <td></td>
                    </tr>

                    <tr>
                        <td colspan="4">
                            <h5><b>PERTEMUAN 8 : <?= $krs->judulvid8; ?></b>
                                <hr>
                            </h5>
                        </td>
                    </tr>
                    <tr>
                        <td><iframe width="450" height="253" src="https://www.youtube.com/embed/<?= $krs->video8; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    </tr>

                    <tr>
                        <td></td>
                    </tr>

                    <tr>
                        <td colspan="4">
                            <h5><b>PERTEMUAN 9 : <?= $krs->judulvid9; ?></b>
                                <hr>
                            </h5>
                        </td>
                    </tr>
                    <tr>
                        <td><iframe width="450" height="253" src="https://www.youtube.com/embed/<?= $krs->video9; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    </tr>

                    <tr>
                        <td></td>
                    </tr>

                    <tr>
                        <td colspan="4">
                            <h5><b>PERTEMUAN 10 : <?= $krs->judulvid10; ?></b>
                                <hr>
                            </h5>
                        </td>
                    </tr>
                    <tr>
                        <td><iframe width="450" height="253" src="https://www.youtube.com/embed/<?= $krs->video10; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    </tr>

                <?php endforeach; ?>

            </table>

        </div>
    </div>
</div>