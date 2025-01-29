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
                        <h4 class="panel-title">Update Data Aspirasi</h4>
                        <div class="heading-elements">
                            <a href="aspirasi.php" class="btn btn-sm btn-primary"><i class="icon-arrow-left12"></i> KEMBALI</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <form action="aspirasi_update.php" method="post">

                                <?php 
                                // Ambil ID dari URL dan sanitasi
                                if (isset($_GET['aspirasi_id'])) {
                                    $id = mysqli_real_escape_string($koneksi, $_GET['aspirasi_id']);
                                    
                                    // Query untuk mengambil data aspirasi berdasarkan id
                                    $data = mysqli_query($koneksi, "SELECT * FROM aspirasi WHERE aspirasi_id = '$id'");
                                    
                                    // Cek apakah data ditemukan
                                    if (mysqli_num_rows($data) > 0) {
                                        // Tampilkan data dalam form
                                        while ($d = mysqli_fetch_array($data)) {
                                ?>
                                    <table class="table">
                                        <tr>
                                            <th>WAKTU ASPIRASI</th>
                                            <td><?php echo date('H:i | d-m-Y', strtotime($d['waktu_aspirasi'])); ?></td>
                                        </tr>
                                        <tr>
                                            <th width="20%">NAMA SISWA</th>                                          
                                            <td><?php echo $d['nama_siswa']; ?></td>
                                        </tr>          
                                        <tr>
                                            <th>ISI ASPIRASI</th>
                                            <td><textarea name="isi_aspirasi" class="form-control"><?php echo $d['isi_aspirasi']; ?></textarea></td>
                                        </tr>
                                        <tr>
                                            <th>STATUS ASPIRASI</th>
                                            <td>
                                                <select class="form-control" name="status">
                                                    <option <?php if ($d['status_aspirasi'] == "0") { echo "selected='selected'"; } ?> value="0">Menunggu Konfirmasi</option>
                                                    <option <?php if ($d['status_aspirasi'] == "1") { echo "selected='selected'"; } ?> value="1">Diterima</option>
                                                    <option <?php if ($d['status_aspirasi'] == "2") { echo "selected='selected'"; } ?> value="2">Ditolak</option>
                                                </select>   
                                            </td>
                                        </tr>
                                        <tr>
                                            <th></th>
                                            <td><input type="hidden" name="id" value="<?php echo $d['aspirasi_id']; ?>"><input type="submit" value="SIMPAN" class="btn btn-sm btn-primary"></td>
                                        </tr>        
                                    </table>
                                <?php 
                                        }
                                    } else {
                                        echo "<p>Data tidak ditemukan</p>";
                                    }
                                } else {
                                    echo "<p>ID Aspirasi tidak ditemukan di URL</p>";
                                }
                                ?>

                            </form>
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
