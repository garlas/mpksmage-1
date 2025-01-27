<?php
include '../koneksi.php';

// Ambil data dari form
$judul = $_POST['judul'];
$kategori = $_POST['kategori'];
$konten = $_POST['konten'];
$tanggal = date('Y-m-d');

// Validasi file sampul
$ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg'); // Ekstensi yang diperbolehkan
$sampul = $_FILES['sampul']['name'];
$x = explode('.', $sampul);
$ekstensi = strtolower(end($x));
$ukuran = $_FILES['sampul']['size'];
$file_tmp = $_FILES['sampul']['tmp_name'];

// Cek apakah file sesuai ekstensi yang diizinkan
if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
    // Cek ukuran file
    if ($ukuran < 1044070) { // Batas ukuran file 1MB
        // Buat folder tujuan jika belum ada
        $target_dir = '../images/posting/';
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        // Pindahkan file ke folder tujuan
        $file_path = $target_dir . $sampul;
        if (move_uploaded_file($file_tmp, $file_path)) {
            // Simpan data ke database
            $query = "INSERT INTO posting (posting_id, posting_judul, posting_tanggal, posting_konten, posting_sampul, posting_kategori) 
                      VALUES (NULL, '$judul', '$tanggal', '$konten', '$sampul', '$kategori')";
            
            $result = mysqli_query($koneksi, $query);

            // Cek hasil query
            if ($result) {
                header("Location: posting.php"); // Redirect ke halaman posting
                exit();
            } else {
                echo "Gagal menyimpan data: " . mysqli_error($koneksi);
            }
        } else {
            echo "Gagal mengunggah file.";
        }
    } else {
        echo "UKURAN FILE TERLALU BESAR. Maksimal 1MB.";
    }
} else {
    echo "EKSTENSI FILE YANG DI UPLOAD TIDAK DIIZINKAN. Hanya png, jpg, dan jpeg.";
}
?>
