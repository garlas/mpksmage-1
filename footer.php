<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MPK Komisi Aspirasi</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
        /* Menjaga footer tetap di bawah */
        html, body {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        /* Membuat footer sticky jika halaman kosong */
        .content {
            min-height: 100%; /* Membuat konten mengambil seluruh tinggi layar */
            padding-bottom: 80px; /* Memberikan ruang untuk footer */
        }

        #sub-footer {
            position: relative;
            width: 100%;
            padding: 20px 0;
            background-color: #333;
            color: #fff;
            text-align: center;
            margin-top: auto; /* Memastikan footer berada di bawah jika halaman lebih panjang */
        }

        .copyright p {
            margin: 0;
        }

        .social-network {
            list-style: none;
            padding: 0;
            margin: 10px 0 0;
            text-align: center;
        }

        .social-network li {
            display: inline-block;
            margin: 0 10px;
        }

        .social-network li a {
            color: #fff;
            font-size: 24px;
            text-decoration: none;
        }

        .scrollup {
            position: fixed;
            right: 20px;
            bottom: 20px;
            background-color: #333;
            color: #fff;
            border-radius: 50%;
            padding: 10px;
            font-size: 20px;
            display: none;
            cursor: pointer;
        }

        .scrollup:hover {
            background-color: #444;
        }

    </style>
</head>
<body>

    <!-- Konten utama bisa ditambahkan di sini -->
    <div class="content">
        <!-- Isi halaman, bisa kosong atau ada konten lain -->
    </div>

    <!-- Footer -->
    <footer>
        <div id="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="copyright">
                            <p>&copy; MPK Komisi Aspirasi SMAN 1 GEDEG.</p>
                        </div>
                        <!-- Hanya ikon Instagram -->
                        <ul class="social-network">
                            <li><a href="#" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Tombol Scroll Ke Atas -->
    <a href="#" class="scrollup waves-effect waves-dark"><i class="fa fa-angle-up active"></i></a>

    <!-- Script -->
    <script src="assets2/js/jquery.js"></script>
    <script src="assets2/js/jquery.easing.1.3.js"></script>
    <script src="assets2/materialize/js/materialize.min.js"></script>
    <script src="assets2/js/bootstrap.min.js"></script>
    <script src="assets2/js/jquery.fancybox.pack.js"></script>
    <script src="assets2/js/jquery.fancybox-media.js"></script>  
    <script src="assets2/js/jquery.flexslider.js"></script>
    <script src="assets2/js/animate.js"></script>
    <script src="assets2/js/modernizr.custom.js"></script>
    <script src="assets2/js/jquery.isotope.min.js"></script>
    <script src="assets2/js/jquery.magnific-popup.min.js"></script>
    <script src="assets2/js/animate.js"></script> 
    <script src="assets2/js/custom.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('body').on("keyup",".id_pasien",function(){
                var ketik = $(this).val();                
                var data = "data="+ketik;
                $.ajax({
                    type: 'POST',
                    url: "ajax.php",
                    data: data,
                    success: function(html) {        
                        if(html != "0"){
                            $('.tempat_id_pasien').html(html);
                        }else{
                            $('.tempat_id_pasien').html("");
                        }            
                    }
                });
            });
        });
    </script>

</body>
</html>
