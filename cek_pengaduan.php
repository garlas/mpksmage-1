<?php include "header.php"; ?>
<style>
    /* Menentukan warna untuk setiap status */
    .status-konfirmasi {
        background-color: #FFA500; /* Oranye */
        color: #fff;
        padding: 5px 10px;
        border-radius: 5px;
        font-weight: bold;
        text-align: center;
    }

    .status-diterima {
        background-color: #28a745; /* Hijau */
        color: #fff;
        padding: 5px 10px;
        border-radius: 5px;
        font-weight: bold;
        text-align: center;
    }

    .status-ditolak {
        background-color: #dc3545; /* Merah */
        color: #fff;
        padding: 5px 10px;
        border-radius: 5px;
        font-weight: bold;
        text-align: center;
    }

    .status-tidak-diketahui {
        background-color: #6c757d; /* Abu-abu */
        color: #fff;
        padding: 5px 10px;
        border-radius: 5px;
        font-weight: bold;
        text-align: center;
    }

    /* Responsivitas untuk layar kecil */
    @media (max-width: 760px) {
        .table th, .table td {
            font-size: 10px;
            padding: 8px;
            font-weight: bold;
        }
    }
    .status-konfirmasi, .status-diterima, .status-ditolak, .status-tidak-diketahui {
        padding: 5px;
        word-wrap: break-word;
        max-width: 120px; /* Membatasi lebar status */
        display: inline-block;
        overflow: hidden;
        text-overflow: ellipsis; /* Menambahkan elipsis jika teks terlalu panjang */
        height: 30px; /* Batas tinggi status agar tidak terlalu memanjang ke bawah */
        font-size: 7px;
    }
</style>

<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle">CEK LAYANAN ASPIRASI</h2>
            </div>
        </div>
    </div>
</section>

<section id="content">
    <div class="container content">
        <div class="about">
            <div class="about home-about">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="card small">
                                <div class="card-content">
                                    <?php 
                                    if (isset($_GET['jenis_aspirasi'])) {
                                        $jenis_aspirasi = $_GET['jenis_aspirasi'];

                                        // Tentukan judul tabel berdasarkan jenis aspirasi
                                        $table_title = $jenis_aspirasi == 1 ? "Aspirasi" : "Aspirasi";
                                        ?>

                                        <h4>Status Layanan <?php echo $table_title; ?></h4>

                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th width="5%">No</th>
                                                    <th>Isi</th>
                                                    <th width="25%">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                // Query untuk mengambil data sesuai jenis aspirasi kecuali siswa dengan ID 6
                                                $data = mysqli_query($koneksi, "SELECT isi_aspirasi, status_aspirasi FROM aspirasi WHERE id_siswa = '$jenis_aspirasi' AND id_siswa != 6 ORDER BY id_aspirasi DESC");
                                                if (mysqli_num_rows($data) > 0) {
                                                    while ($d = mysqli_fetch_array($data)) {
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $no++; ?></td>
                                                            <td><?php echo htmlspecialchars($d['isi_aspirasi']); ?></td>
                                                            <td>
                                                                <?php 
                                                                // Menampilkan status
                                                                switch ($d['status_aspirasi']) {
                                                                    case "0":
                                                                        echo "<span class='status-konfirmasi'>Menunggu Konfirmasi</span>";
                                                                        break;
                                                                    case "1":
                                                                        echo "<span class='status-diterima'>Diterima</span>";
                                                                        break;
                                                                    case "2":
                                                                        echo "<span class='status-ditolak'>Ditolak</span>";
                                                                        break;
                                                                    default:
                                                                        echo "<span class='status-tidak-diketahui'>Status Tidak Diketahui</span>";
                                                                        break;
                                                                }
                                                                ?>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                    }
                                                } else {
                                                    ?>
                                                    <tr>
                                                        <td colspan="3" class="text-center">DATA TIDAK DITEMUKAN.</td>
                                                    </tr>
                                                    <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>

                                        <a href="cek_pengaduan.php" class="btn btn-primary">CEK LAGI</a>

                                    <?php } else { ?>
                                        <form action="cek_pengaduan.php" method="get">
                                            <p class="text-center">Silahkan Pilih Jenis Masukan Yang Telah Anda Kirim</p>
                                            <br/>
                                            
                                            <label>Pilih Jenis Masukan</label>
                                            <select class="form-control" name="jenis_aspirasi" required>
                                                <option value="" disabled selected>-- Pilih Jenis Masukan --</option>
                                                <?php
                                                // Ambil data siswa untuk dropdown, kecuali siswa dengan ID 6
                                                $result = mysqli_query($koneksi, "SELECT siswa_id, nama_siswa FROM siswa WHERE siswa_id != 6");
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo "<option value='" . $row['siswa_id'] . "'>" . $row['nama_siswa'] . "</option>";
                                                }
                                                ?>
                                            </select>
                                            <br/>
                                            <input type="submit" value="CEK" class="btn btn-primary">
                                        </form>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "footer.php"; ?>
