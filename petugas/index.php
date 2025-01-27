<?php include 'header.php'; ?>
<div class="content-wrapper">

    <div class="content">

        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">

                <div class="row">

                    <div class="col-lg-12">
                        <div class="alert alert-info text-center">ANDA LOGIN SEBAGAI <b>PETUGAS</b></div>
                    </div>

                    <div class="col-lg-3">
                        <div class="panel bg-blue">
                            <div class="panel-body">
                                <?php $posting=mysqli_query($koneksi,"SELECT * FROM posting"); ?>
                                <h3 class="no-margin"><?php echo mysqli_num_rows($posting) . " Artikel"; ?></h3>
                                Jumlah Artikel Website
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="panel bg-blue">
                            <div class="panel-body">
                                <?php $petugas=mysqli_query($koneksi,"SELECT * FROM petugas"); ?>
                                <h3 class="no-margin"><?php echo mysqli_num_rows($petugas) . " Petugas"; ?></h3>
                                Jumlah Petugas
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="panel bg-blue">
                            <div class="panel-body">
                                <?php $aspirasi=mysqli_query($koneksi,"SELECT * FROM aspirasi"); ?>
                                <h3 class="no-margin"><?php echo mysqli_num_rows($aspirasi) . " Aspirasi"; ?></h3>
                                Jumlah Aspirasi
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="panel bg-blue">
                            <div class="panel-body">
                                <?php $siswa=mysqli_query($koneksi,"SELECT * FROM siswa"); ?>
                                <h3 class="no-margin"><?php echo mysqli_num_rows($siswa) . " Layanan"; ?></h3>
                                Jumlah Layanan
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel bg-pink">
                            <div class="panel-body">
                                <?php $pendingAspirasi=mysqli_query($koneksi,"SELECT * FROM aspirasi WHERE status_aspirasi='0'"); ?>
                                <p class="no-margin"><b><?php echo mysqli_num_rows($pendingAspirasi); ?> Aspirasi </b> menunggu konfirmasi.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="panel bg-pink">
                            <div class="panel-body">
                                <?php $completedAspirasi=mysqli_query($koneksi,"SELECT * FROM aspirasi WHERE status_aspirasi='1'"); ?>
                                <p class="no-margin"><b><?php echo mysqli_num_rows($completedAspirasi); ?> Aspirasi </b> selesai.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-flat">
                    <div class="panel-body">
                        <h4>10 Aspirasi Terbaru Dari Siswa</h4>
                        <center>
                            <br/>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>WAKTU ASPIRASI</th>
                                            <th>ISI ASPIRASI</th>
                                            <th>STATUS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        // Query untuk mendapatkan data aspirasi dan siswa
                                        $data = mysqli_query($koneksi,"SELECT * FROM aspirasi a JOIN siswa s ON a.id_siswa = s.siswa_id ORDER BY a.waktu_aspirasi DESC LIMIT 10");
                                        while($d = mysqli_fetch_array($data)){
                                            ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo date('H:i | d-m-Y', strtotime($d['waktu_aspirasi'])); ?></td>
                                                <td><?php echo $d['isi_aspirasi']; ?></td>
                                                <td>
                                                    <center>
                                                        <?php 
                                                        if($d['status_aspirasi'] == "0"){
                                                            echo "<span class='badge badge-warning'>Menunggu konfirmasi</span>";
                                                        } elseif($d['status_aspirasi'] == "1"){
                                                            echo "<span class='badge badge-success'>Diterima</span>";
                                                        } else {
                                                            echo "<span class='badge badge-danger'>Ditolak</span>";
                                                        }
                                                        ?>
                                                    </center>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <br/>
                        </center>
                    </div>
                </div>

            </div>
        </div>

        <div class="footer text-muted">

        </div>

    </div>

</div>

<?php include 'footer.php'; ?>
