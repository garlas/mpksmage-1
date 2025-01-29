<?php include "header.php"; ?>
<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle">CEK ASPIRASI</h2>
            </div>
        </div>
    </div>
</section>

<section id="content">
    <div class="container content">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 md-margin-bottom-20">
                <div class="card small">
                    <div class="card-content">
                        <form action="" method="post">
                            <label>Masukkan ID Aspirasi</label>
                            <input type="number" class="form-control" name="id_aspirasi" required>
                            <br/>
                            <input type="submit" value="Cek Aspirasi" class="btn btn-primary btn-block">
                        </form>

                        <?php
                        if(isset($_POST['id_aspirasi'])){
                            include "koneksi.php";
                            $id_aspirasi = mysqli_real_escape_string($koneksi, $_POST['id_aspirasi']);

                            // Ambil semua data aspirasi yang memiliki ID yang sama
                            $query = "SELECT a.*, s.nama_siswa AS jenis_aspirasi FROM aspirasi a 
                                      LEFT JOIN siswa s ON a.id_siswa = s.siswa_id
                                      WHERE a.id_aspirasi='$id_aspirasi'";
                            $result = mysqli_query($koneksi, $query);

                            if(mysqli_num_rows($result) > 0){
                                while($data = mysqli_fetch_assoc($result)) {
                                    // Konversi waktu ke format tanggal/bulan/tahun
                                    $tanggal = date("d/m/Y", strtotime($data['waktu_aspirasi']));

                                    // Menentukan warna dan teks berdasarkan status aspirasi
                                    $status_class = "alert";
                                    $status_text = "";

                                    if ($data['status_aspirasi'] == 0) {
                                        $status_class .= " alert-warning"; // Oren
                                        $status_text = "Sedang Diproses";
                                    } elseif ($data['status_aspirasi'] == 1) {
                                        $status_class .= " alert-success"; // Hijau
                                        $status_text = "Diterima";
                                    } elseif ($data['status_aspirasi'] == 2) {
                                        $status_class .= " alert-danger"; // Merah
                                        $status_text = "Ditolak";
                                    }

                                    // Menyesuaikan label berdasarkan tabel siswa
                                    $jenis = ucfirst($data['jenis_aspirasi']); // Kapital di awal

                                    echo '<div class="'.$status_class.' text-center" style="margin-top: 10px; padding: 10px;">
                                        <strong>Status '.$jenis.':</strong> '.$status_text.'<br>
                                        <strong>Kategori:</strong> '.$jenis.'<br>
                                        <strong>Isi '.$jenis.':</strong> '.htmlspecialchars($data['isi_aspirasi']).'<br>
                                        <strong>Waktu:</strong> '.$tanggal.'
                                    </div>';
                                }
                            } else {
                                echo '<div class="alert alert-danger text-center">
                                    ID Aspirasi tidak ditemukan. Silakan coba lagi.
                                </div>';
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "footer.php"; ?>
