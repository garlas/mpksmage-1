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
                        <h4 class="panel-title">Data Petugas</h4>
                        <div class="heading-elements">
                            <a href="petugas_tambah.php" class="btn btn-sm btn-primary"><i class="icon-plus22"></i> TAMBAH</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped table-datatable">
                                <thead>
                                    <tr>
                                        <th width="1%">No</th>
                                        <th width="15%">Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Alamat</th>
                                        <th>No. Telp</th>
                                        <th>Email</th>
                                        <th>Username</th>
                                        <th width="10%">Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                // Inisialisasi nomor
                                $no = 1;

                                // Query untuk mengambil data dari tabel `petugas`
                                $data = mysqli_query($koneksi, "SELECT * FROM petugas");

                                // Perulangan untuk menampilkan data
                                while ($d = mysqli_fetch_array($data)) {
                                ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo htmlspecialchars($d['nama_petugas']); ?></td>
                                        <td><?php echo htmlspecialchars($d['jenis_kelamin_petugas']); ?></td>
                                        <td><?php echo htmlspecialchars($d['alamat']); ?></td>
                                        <td><?php echo htmlspecialchars($d['no_telp']); ?></td>
                                        <td><?php echo htmlspecialchars($d['email']); ?></td>
                                        <td><?php echo htmlspecialchars($d['username_petugas']); ?></td>
                                        <td>
                                            <a class="btn border-teal text-teal btn-flat btn-icon btn-xs" href="petugas_edit.php?id=<?php echo $d['id_petugas']; ?>"><i class="icon-wrench3"></i></a>
                                            <a class="btn border-danger text-danger btn-flat btn-icon btn-xs" href="petugas_hapus.php?id=<?php echo $d['id_petugas']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus petugas ini?');"><i class="icon-trash-alt"></i></a>
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
