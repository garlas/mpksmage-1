<?php include 'header.php'; ?>
<div class="content-wrapper">

    <div class="content">

        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">

                <div class="row">

                    <div class="col-lg-12">
                        <div class="alert alert-info text-center">ANDA LOGIN SEBAGAI <b>SUPER ADMIN</b></div>
                    </div>

                    <!-- Jumlah Artikel -->
                    <div class="col-lg-4">
                        <div class="panel bg-blue">
                            <div class="panel-body">
                                <?php
                                $posting = mysqli_query($koneksi, "SELECT * FROM posting");
                                $jumlah_posting = $posting ? mysqli_num_rows($posting) : 0;
                                ?>
                                <h3 class="no-margin"><?php echo $jumlah_posting . " Artikel"; ?></h3>
                                Jumlah Artikel Website
                            </div>
                        </div>
                    </div>

                    <!-- Jumlah Petugas -->
                    <div class="col-lg-4">
                        <div class="panel bg-blue">
                            <div class="panel-body">
                                <?php
                                $petugas = mysqli_query($koneksi, "SELECT * FROM petugas");
                                $jumlah_petugas = $petugas ? mysqli_num_rows($petugas) : 0;
                                ?>
                                <h3 class="no-margin"><?php echo $jumlah_petugas . " Petugas"; ?></h3>
                                Jumlah Petugas
                            </div>
                        </div>
                    </div>

                    <!-- Jumlah Aspirasi -->
                    <div class="col-lg-4">
                        <div class="panel bg-blue">
                            <div class="panel-body">
                                <?php
                                $aspirasi = mysqli_query($koneksi, "SELECT * FROM aspirasi");
                                $jumlah_aspirasi = $aspirasi ? mysqli_num_rows($aspirasi) : 0;
                                ?>
                                <h3 class="no-margin"><?php echo $jumlah_aspirasi . " Aspirasi"; ?></h3>
                                Jumlah Aspirasi
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-lg-6">
                        <div class="panel bg-pink">
                            <div class="panel-body">
                                <?php
                                $pending = mysqli_query($koneksi, "SELECT * FROM aspirasi WHERE status_aspirasi='0'");
                                $jumlah_pending = $pending ? mysqli_num_rows($pending) : 0;
                                ?>
                                <p class="no-margin"><b><?php echo $jumlah_pending; ?> Aspirasi </b> menunggu konfirmasi.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="panel bg-pink">
                            <div class="panel-body">
                                <?php
                                $selesai = mysqli_query($koneksi, "SELECT * FROM aspirasi WHERE status_aspirasi='1'");
                                $jumlah_selesai = $selesai ? mysqli_num_rows($selesai) : 0;
                                ?>
                                <p class="no-margin"><b><?php echo $jumlah_selesai; ?> Aspirasi </b> selesai.</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="panel panel-flat">

                    <div class="panel-body">
                        <h4>10 Aspirasi Terbaru</h4>
                        <center>
                            <br />
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th width="1%">NO</th>
                                            <th>WAKTU ASPIRASI</th>
                                            <th>ID SISWA</th>
                                            <th width="15%">NAMA PENGIRIM</th>
                                            <th>STATUS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        $data = mysqli_query($koneksi, "SELECT a.id_aspirasi, a.waktu_aspirasi, a.id_siswa, a.status_aspirasi, s.nama_siswa
                                                                        FROM aspirasi a 
                                                                        JOIN siswa s ON a.id_siswa = s.siswa_id
                                                                        ORDER BY a.waktu_aspirasi DESC LIMIT 10");
                                        while ($d = mysqli_fetch_array($data)) {
                                        ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo date('H:i | d-m-Y', strtotime($d['waktu_aspirasi'])); ?></td>
                                                <td><?php echo $d['id_siswa']; ?></td>
                                                <td><?php echo $d['nama_siswa']; ?></td>
                                                <td>
                                                    <center>
                                                        <?php
                                                        if ($d['status_aspirasi'] == "0") {
                                                            echo "<span class='badge badge-danger'>Menunggu konfirmasi</span>";
                                                        } elseif ($d['status_aspirasi'] == "1") {
                                                            echo "<span class='badge badge-success'>Diterima</span>";
                                                        } else {
                                                            echo "<span class='badge badge-warning'>Ditolak</span>";
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
                            <br />
                        </center>
                    </div>

                </div>

            </div>
        </div>

        <div class="footer text-muted"></div>

    </div>

</div>

<?php include 'footer.php'; ?>
