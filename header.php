<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Website MPK Komisi Aspirasi</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="assets2/materialize/css/materialize.min.css" media="screen,projection" />
	<link href="assets2/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="assets2/css/fancybox/jquery.fancybox.css" rel="stylesheet"> 
	<link href="assets2/css/flexslider.css" rel="stylesheet" /> 
	<link href="assets2/css/style.css" rel="stylesheet" />
	<?php include 'koneksi.php'; ?>
</head>
<body>
	<?php error_reporting(0); ?>
	<div id="wrapper" class="home-page"> 
		<!-- start header -->
		<header>
			<div class="navbar navbar-default navbar-static-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.php"><i class="icon-info-blocks material-icons">MPK</i>Aspirasi</b></a>
					</div>
					<div class="navbar-collapse collapse ">
						<ul class="nav navbar-nav">
							<li class="active"><a class="waves-effect waves-dark" href="index.php">Home</a></li>
							<li><a class="waves-effect waves-dark" href="tentang.php">Tentang</a></li>
							<li><a class="waves-effect waves-dark" href="hubungi.php">Hubungi Kami</a></li>
							<li><a class="waves-effect waves-dark" href="pengaduan.php">Kirim Aspirasi</a></li>
							<li><a class="waves-effect waves-dark" href="cek_pengaduan.php">Cek Aspirasi</a></li>
							<li><a class="waves-effect waves-dark" href="login.php">Login</a></li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<!-- end header -->