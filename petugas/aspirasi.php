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
                        <h4 class="panel-title">Data Aspirasi</h4>
                        <div class="heading-elements">
                            <a href="aspirasi_cetak.php" target="_blank" class="btn btn-sm btn-primary"><i class="icon-file-empty"></i> CETAK</a>
                            <a href="aspirasi_print.php" target="_blank" class="btn btn-sm btn-primary"><i class="icon-file-empty"></i> PRINT</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped table-datatable">
                                <thead>
                                    <tr>
                                        <th width="1%">No</th>
                                        <th width="15%">WAKTU MASUKAN</th>
                                        <th width="12%">JENIS MASUKAN</th>
                                        <th>ISI ASPIRASI</th>
                                        <th width="10%">STATUS</th>
                                        <th width="15%">OPSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include '../koneksi.php'; // Pastikan file koneksi sudah terhubung
                                    $no = 1;
                                    $data = mysqli_query($koneksi, "SELECT 
                                        a.id_aspirasi, 
                                        a.waktu_aspirasi, 
                                        s.nama_siswa, 
                                        a.isi_aspirasi, 
                                        a.status_aspirasi 
                                        FROM aspirasi a 
                                        INNER JOIN siswa s ON a.id_siswa = s.siswa_id");
                                    while ($d = mysqli_fetch_array($data)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo date('H:i | d-m-Y', strtotime($d['waktu_aspirasi'])); ?></td>
                                            <td><?php echo $d['nama_siswa']; ?></td>
                                            <td><?php echo $d['isi_aspirasi']; ?></td>
                                            <td>
                                                <center>
                                                    <?php
                                                    if ($d['status_aspirasi'] == 0) {
                                                        echo "<span class='badge badge-warning'>Menunggu</span>";
                                                    } elseif ($d['status_aspirasi'] == 1) {
                                                        echo "<span class='badge badge-success'>Diterima</span>";
                                                    } else {
                                                        echo "<span class='badge badge-danger'>Ditolak</span>";
                                                    }
                                                    ?>
                                                </center>
                                            </td>

                                            <td>
                                                <a class="btn border-teal text-teal btn-flat btn-icon btn-xs" href="aspirasi_edit.php?id_aspirasi=<?php echo $d['aspirasi_id']; ?>"><i class="icon-wrench3"></i> UBAH STATUS</a>
                                                <a class="btn border-danger text-danger btn-flat btn-icon btn-xs" href="aspirasi_hapus.php?id_aspirasi=<?php echo $d['aspirasi_id']; ?>"><i class="icon-trash-alt"></i> HAPUS</a>
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
            <!-- Footer Content -->
        </div>

    </div>
</div>

<?php include 'footer.php'; ?>
