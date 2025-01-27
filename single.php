<?php include "header.php"; ?>
<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle">Artikel</h2>
            </div>
        </div>
    </div>
</section>

<section id="content">
    <div class="container content">
        <!-- Artikel Utama -->
        <div class="row">
            <div class="col-md-8">
                <?php 
                $id = $_GET['id'];
                $artikel = mysqli_query($koneksi,"select * from posting,kategori where kategori_id=posting_kategori and posting_id='$id'");
                while($a = mysqli_fetch_array($artikel)){
                ?>
                <div class="artikel-utama">
                    <!-- Gambar Sampul -->
                    <div class="artikel-sampul" style="text-align: center;">
                        <img src="images/posting/<?php echo $a['posting_sampul']; ?>" alt="Sampul Artikel" style="width: 100%; max-height: 400px; object-fit: cover; border-radius: 12px; margin-bottom: 15px; box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);">
                    </div>

                    <!-- Judul Artikel -->
                    <h1 class="artikel-judul" style="font-size: 26px; font-weight: bold; margin-bottom: 8px; color: #333;">
                        <?php echo $a['posting_judul']; ?>
                    </h1>

                    <!-- Info Kategori dan Tanggal -->
                    <p style="font-size: 14px; color: #777; margin-bottom: 15px;">
                        <strong>Kategori:</strong> <?php echo $a['kategori']; ?> |
                        <strong>Tanggal:</strong> <?php echo date('d-m-Y', strtotime($a['posting_tanggal'])); ?>
                    </p>

                    <!-- Konten Artikel -->
                    <div class="artikel-konten" style="font-size: 15px; line-height: 1.7; color: #444; text-align: justify; margin-bottom: 20px;">
                        <?php echo nl2br($a['posting_konten']); ?>
                    </div>
                </div>
                <?php 
                }
                ?>
            </div>

            <!-- Artikel Lainnya -->
            <div class="col-md-4">
                <div class="artikel-lainnya" style="padding: 15px; background: #f9f9f9; border-radius: 12px; box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);">
                    <h3 style="font-size: 18px; font-weight: bold; color: #333; margin-bottom: 10px;">
                        Artikel Lainnya
                    </h3>
                    <ul style="list-style-type: none; padding: 0;">
                        <?php 
                        $x = mysqli_query($koneksi,"select * from posting order by posting_tanggal desc limit 5");
                        while($xx = mysqli_fetch_array($x)){
                        ?>
                        <li style="margin-bottom: 12px; border-bottom: 1px solid #eee; padding-bottom: 8px;">
                            <a href="single.php?id=<?php echo $xx['posting_id']; ?>" style="font-size: 13pt; font-weight: 600; text-decoration: none; color: #007bff;">
                                <?php echo $xx['posting_judul']; ?>
                            </a>
                        </li>
                        <?php 
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php"; ?>
