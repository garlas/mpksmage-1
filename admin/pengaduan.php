<?php include 'header.php'; ?>
<!-- Main content -->
<div class="content-wrapper">

    <!-- Content area -->
    <div class="content">

        <!-- Main charts -->
        <div class="row">
            <div class="col-lg-12">
                <!-- Traffic sources -->
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h4 class="panel-title">Data Aspirasi Siswa</h4>
                        <div class="heading-elements"></div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped table-datatable">
                                <thead>
                                    <tr>
                                        <th width="1%">No</th>
                                        <th width="15%">WAKTU ASPIRASI</th>
                                        <th width="10%">ID SISWA</th>
                                        <th width="17%">DATA SISWA</th>
                                        <th>ISI ASPIRASI</th>
                                        <th width="16%">STATUS ASPIRASI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    // Mengambil data aspirasi dari database
                                    $data = mysqli_query($koneksi, "SELECT a.*, s.nama_siswa, s.kelas, s.jenis_kelamin, s.alamat, s.telepon 
                                        FROM aspirasi a 
                                        INNER JOIN siswa s ON a.id_siswa = s.siswa_id");
                                    while ($d = mysqli_fetch_array($data)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo date('H:i | d-m-Y', strtotime($d['waktu_aspirasi'])); ?></td>
                                            <td><?php echo $d['id_siswa']; ?></td>
                                            <td>
                                                <b>NAMA: </b><?php echo $d['nama_siswa']; ?><br>
                                                <b>KELAS: </b><?php echo $d['kelas']; ?><br>
                                                <b>JENIS KELAMIN: </b><?php echo $d['jenis_kelamin']; ?><br>
                                                <b>ALAMAT: </b><?php echo $d['alamat']; ?><br>
                                                <b>TELEPON: </b><?php echo $d['telepon']; ?>
                                            </td>
                                            <td><?php echo $d['isi_aspirasi']; ?></td>
                                            <td>
                                                <center>
                                                    <?php
                                                    if ($d['status_aspirasi'] == 0) {
                                                        echo '<a href="/admin/konfirmasi_pengaduan.php?id=' . $d['id_aspirasi'] . '&status=1" class="btn btn-success">Konfirmasi</a>
                                                        <a href="/admin/konfirmasi_pengaduan.php?id=' . $d['id_aspirasi'] . '&status=2" class="btn btn-danger">Tolak</a>';
                                                    } elseif ($d['status_aspirasi'] == 1) {
                                                        echo '<span class="label label-success">Dikonfirmasi</span>';
                                                    } elseif ($d['status_aspirasi'] == 2) {
                                                        echo '<span class="label label-danger">Ditolak</span>';
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
                    </div>
                </div>
            </div>
        </div>

        <div class="footer text-muted">
            <!-- Footer -->
        </div>

    </div>
</div>

<?php include 'footer.php'; ?> 
