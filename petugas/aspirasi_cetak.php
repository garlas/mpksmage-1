<!DOCTYPE html>
<html>
<head>
    <title>Data Aspirasi</title>
    <style type="text/css">
        table {
            border-collapse: collapse;
            width: 100%;
        }

        table, th, td {
            border: 1px solid black;
            font-size: 11pt;
            text-align: center;
        }

        h4 {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <center>
        <h3>Data Aspirasi</h3>
    </center>

    <!-- Tabel Data Aspirasi -->
    <h4>DATA MASUKAN</h4>
    <table>
        <thead>
            <tr>
                <th width="1%">NO</th>
                <th width="15%">KATEGORI MASUKAN</th>
                <th>ISI</th>
                <th>TANGGAL</th>
                <th>STATUS</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include '../koneksi.php';

            // Query untuk data aspirasi
            $no = 1;
            $queryAspirasi = "
                SELECT 
                    a.id_aspirasi, 
                    a.isi_aspirasi, 
                    a.waktu_aspirasi, 
                    a.status_aspirasi, 
                    s.nama_siswa 
                FROM aspirasi a
                JOIN siswa s ON a.id_siswa = s.siswa_id
            ";
            $resultAspirasi = mysqli_query($koneksi, $queryAspirasi);

            if ($resultAspirasi) {
                while ($aspirasi = mysqli_fetch_assoc($resultAspirasi)) {
                    $status = ($aspirasi['status_aspirasi'] == 0) ? 'Pending' : 'Diterima';
                    // Format waktu hanya menampilkan tanggal
                    $tanggal = date("Y-m-d", strtotime($aspirasi['waktu_aspirasi']));
                    echo "<tr>
                        <td>{$no}</td>
                        <td>{$aspirasi['nama_siswa']}</td>
                        <td>{$aspirasi['isi_aspirasi']}</td>
                        <td>{$tanggal}</td>
                        <td></td>
                    </tr>";
                    $no++;
                }
            } else {
                echo "<tr><td colspan='5'>Tidak ada data aspirasi.</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <?php
    // Include DOMPDF library
    require_once("../assets/dompdf/autoload.inc.php");
    use Dompdf\Dompdf;

    // Buat PDF dari output halaman
    ob_start(); // Mulai menangkap output
    ?>

    <h3 style="text-align: center;">Laporan Data Aspirasi</h3>
    <!-- Salin tabel aspirasi jika ingin diproses khusus di PDF -->

    <?php
    $html = ob_get_clean(); // Ambil output HTML
    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait'); // Atur ukuran dan orientasi kertas
    $dompdf->render();
    $dompdf->stream("Data_Aspirasi.pdf", ["Attachment" => false]); // Unduh file tanpa attachment
    ?>
</body>
</html>
