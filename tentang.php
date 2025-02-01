<?php include "header.php"; ?>
<style>
    .card.custom-card {
    background: linear-gradient(135deg, #ffffff, #f9f9f9);
    border-radius: 15px;
    padding: 30px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card.custom-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
}

.card-content {
    color: #333;
    font-family: 'Poppins', sans-serif;
    font-size: 25px;
    line-height: 1.8;
    text-align: justify;
}

.card-title {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 15px;
    text-align: center;
    color: #007bff;
}

</style>
<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="pageTitle">Tentang</h2>
            </div>
        </div>
    </div>
</section>

<section id="content">
    <div class="container content">     
        <div class="about">
            <div class="about home-about">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="card custom-card shadow-lg">
                                <div class="card-content">
                                    <h3 class="card-title">Majelis Perwakilan Kelas (MPK)</h3>
                                    <p>
                                        MPK adalah badan yang dibentuk dengan tujuan untuk menampung dan menyalurkan aspirasi siswa. Kami percaya bahwa setiap suara memiliki peran penting dalam membentuk lingkungan belajar yang lebih baik dan inklusif.
                                    </p>
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
