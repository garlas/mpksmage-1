<?php include 'header.php'; ?>
<style>
    @media (max-width: 768px) {
        .about-image img {
            margin: 20px auto; /* Jarak di sekitar gambar dan ditengah */
            display: block; /* Mengubah gambar menjadi elemen block */
            width: 100%; /* Gambar akan menyesuaikan dengan lebar kontainer */
            max-width: 700px; /* Batas maksimal lebar gambar, Anda bisa sesuaikan sesuai kebutuhan */
        }
    }
    .about-image img {
        margin-bottom: 20px;
    }

    .section-padding {
    font-family: 'Arial', sans-serif;
    line-height: 1.8;
    font-size: 16px;
    color: #333;
}

.section-padding h2 {
    font-weight: 700;
    font-size: 28px;
    text-transform: uppercase;
    color: #222;
}

.section-padding p {
    font-weight: 400;
    margin-bottom: 20px;
}

.section-padding ul {
    padding-left: 20px;
}

.section-padding ul li {
    font-weight: 400;
    margin-bottom: 10px;
}

</style>

<section id="banner">
    <!-- Slider -->
    <div id="main-slider" class="flexslider">
        <ul class="slides">
            <li>
                <img src="assets2/img/slides/Mpk.jpg" alt="" />
                <div class="flex-caption">
                </div>
            </li>
            <li>
                <img src="assets2/img/slides/kk.jpg" alt="" />
                <div class="flex-caption">
                </div>
            </li>
        </ul>
    </div>
    <!-- end slider -->
</section>
<section id="content">
    <div class="container">
        <section class="services">
            <div class="row">
                <div class="col-md-12">
                    <a href="pengaduan.php">kirim aspirasi</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="aligncenter"><h2 class="aligncenter">PROGRAM KAMI</h2></div>
                    <br/>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 info-blocks">
                    <i class="icon-info-blocks material-icons">track_changes</i>
                    <div class="info-blocks-in">
                        <h3>Kotak Aspirasi</h3>
                        <p>Tempat untuk menyalurkan aspirasi dan saran siswa demi kemajuan bersama.</p>
                    </div>
                </div>
                <div class="col-sm-4 info-blocks">
                    <i class="icon-info-blocks material-icons">settings_input_svideo</i>
                    <div class="info-blocks-in">
                        <h3>Website Aspirasi</h3>
                        <p>Platform online untuk menyampaikan aspirasi dan saran dengan mudah.</p>
                    </div>
                </div>
                <div class="col-sm-4 info-blocks">
                    <i class="icon-info-blocks material-icons">queue_music</i>
                    <div class="info-blocks-in">
                        <h3>Hari Aspirasi</h3>
                        <p>Kegiatan khusus untuk mendengarkan dan membahas aspirasi siswa.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>
<section class="dishes">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aligncenter"><h2 class="aligncenter">ARTIKEL</h2></div>
                <br/>
            </div>
        </div>
        <div class="row service-v1 margin-bottom-40">
            <?php 
            $artikel = mysqli_query($koneksi,"select * from posting order by posting_id desc limit 3");
            while($a = mysqli_fetch_array($artikel)){
                ?>
                <div class="col-md-4 md-margin-bottom-40">
                    <div class="card small">
                        <div class="card-image">
                            <img class="img-responsive" src="images/posting/<?php echo $a['posting_sampul']; ?>" alt="">  
                            <span class="card-title"><a href="single.php?id=<?php echo $a['posting_id']; ?>"><?php echo $a['posting_judul']; ?></a></span>
                        </div>
                        <div class="card-content">
                            <p>
                                <?php echo substr($a['posting_konten'], 0,200) ?>
                            </p>
                        </div>
                    </div>        
                </div>
                <?php 
            }
            ?>
        </div>
    </div>
</section>
<section class="section-padding gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h2>Tentang Kami</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="about-text">
                    <strong>Salam Pelajar!</strong>
                    <p>Halo teman-teman SMANSAGE!</p>
                    <p>Kami dari MPK Komisi Aspirasi menyediakan form yang ditujukan kepada seluruh siswa sebagai wadah untuk menyampaikan aspirasi terkait fasilitas, kegiatan sekolah, maupun hal lainnya yang dapat meningkatkan kenyamanan dan kemajuan sekolah kita.</p>
                    <p>Diharapkan seluruh siswa SMANSAGE dapat berpartisipasi dalam menyampaikan aspirasi kalian.</p>
                    <p>Kami tunggu aspirasi kalian!</p>
                    <a href="hubungi.php">📌 For more information</a>
                    <a href="tentang.php" class="btn btn-primary waves-effect waves-dark">Learn More</a>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="about-image">
                    <img src="assets2/img/KOMISI D.jpg" alt="About Images">
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
