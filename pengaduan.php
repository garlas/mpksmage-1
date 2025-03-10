<?php include "header.php"; ?>
<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle">LAYANAN ASPIRASI </h2>
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
                        <div class="col-md-6 col-md-offset-3 md-margin-bottom-20">
                            <div class="card small">
                                <div class="card-content">
                                    <?php 
                                    // Tampilkan pesan jika ada
                                    if(isset($_GET['pesan'])){
                                        if($_GET['pesan'] == "sukses"){
                                            echo '<div style="width: 100%" class="alert text-center alert-success">
                                                TERIMA KASIH! ASPIRASI ANDA TELAH MASUK KE SERVER KAMI DAN AKAN SEGERA DI PROSES. INFORMASI SELANJUTNYA DAPAT ANDA CEK PADA MENU "CEK ASPIRASI".
                                            </div>';
                                        } elseif($_GET['pesan'] == "failed"){
                                            echo '<div style="width: 100%" class="alert text-center alert-danger">
                                                MAAF! ID LAYANAN ANDA TIDAK DITEMUKAN ATAU BELUM TERDAFTAR. SILAHKAN HUBUNGI ADMIN.
                                            </div>';
                                        } elseif($_GET['pesan'] == "error_insert"){
                                            echo '<div style="width: 100%" class="alert text-center alert-danger">
                                                MAAF! TERJADI KESALAHAN SAAT MEMASUKKAN ASPIRASI.
                                            </div>';
                                        }
                                    }
                                    ?>

                                    <!-- Menampilkan ID Aspirasi jika sudah terkirim -->
                                    <?php 
                                    if(isset($_GET['id_aspirasi'])){
                                        $id_aspirasi = $_GET['id_aspirasi'];
                                        echo '<div class="alert alert-info text-center">
                                                ID Aspirasi Anda: ' . $id_aspirasi . ' 
                                              </div>';
                                    }
                                    ?>

                                    <br/>
                                    <form action="pengaduan_act.php" method="post">
    <p class="text-center">Silahkan pilih Kategori Masukan Yang Ingin Anda Kirim</p>
    <br/>

    <!-- Input ID Aspirasi (Minimal 4 dan Maksimal 8 Digit) -->
       <label>Buat ID Aspirasi (4-8 Digit Angka)</label>    
       <input type="text" class="form-control" name="id_aspirasi" pattern="\d{4,8}" 
       title="Harus terdiri dari 4 hingga 8 digit angka" required maxlength="8">

    <br/>

    <!-- Dropdown untuk memilih siswa -->
    <label>Pilih Kategori Masukan</label>    
    <select class="form-control" name="id_siswa" required>
        <option value="" disabled selected>-- Pilih Kategori Masukan --</option>
        <?php
        include "koneksi.php";
        $query = "SELECT siswa_id, nama_siswa FROM siswa ORDER BY nama_siswa ASC";
        $result = mysqli_query($koneksi, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<option value="'.$row['siswa_id'].'">'.$row['nama_siswa'].'</option>';
        }
        ?>
    </select>
    <br/>

    <label>Isi Masukan Anda</label>    
    <textarea class="form-control" style="resize: none;" name="isi" required></textarea>
    <br/>

    <input type="submit" value="Kirim" class="btn btn-primary">
</form>


                        

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
