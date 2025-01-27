<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Petugas - Sistem Layanan Aspirasi MPK</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="../assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/colors.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="../assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="../assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="../assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<script type="text/javascript" src="../assets/js/plugins/tables/datatables/datatables.min.js"></script>

	<!-- Theme JS files -->
	<script type="text/javascript" src="../assets/js/plugins/visualization/d3/d3.min.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/ui/moment/moment.min.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/pickers/daterangepicker.js"></script>

	<script type="text/javascript" src="../assets/js/core/app.js"></script>
	<!-- <script type="text/javascript" src="../assets/js/pages/dashboard.js"></script> -->
	<!-- /theme JS files -->
	<?php 
	session_start();
	if($_SESSION['status'] != "petugas_login"){
		header("location:../index.php");
	}
	?>

	<?php include '../koneksi.php'; ?>
</head>

<body>

	<div class="bg-primary" style="padding: 20px;text-align: center;">
		<h1>
		SISTEM ASPIRASI SMAN 1 GEDEG
		</h1>
	</div>

	<div class="navbar navbar-default" id="navbar-second">
		<ul class="nav navbar-nav no-border visible-xs-block">
			<li><a class="text-center collapsed" data-toggle="collapse" data-target="#navbar-second-toggle"><i class="icon-menu7"></i></a></li>
		</ul>

		<div class="navbar-collapse collapse" id="navbar-second-toggle">
			<ul class="nav navbar-nav">
				<li class="active"><a href="index.php"><i class="icon-home4"></i> &nbsp; <span>DASHBOARD</span></a></li>								
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-cloud position-left"></i> &nbsp; MASTER DATA <span class="caret"></span>
					</a>

					<ul class="dropdown-menu width-200">
						<li><a href="data_siswa.php"><span><i class="icon-user"></i> &nbsp; Data Layanan</span></a></li>					
						<li><a href="petugas.php"><span><i class="icon-user-tie"></i> &nbsp; Data Petugas</span></a></li>							
						<li><a href="aspirasi.php"><span><i class="icon-file-empty"></i> &nbsp; Aspirasi Siswa</span></a></li>
					</ul>
				</li>				
			</ul>

			<ul class="nav navbar-nav navbar-right">	
				<li class="active"><a href="../index.php" target="_BLANK"><span>LIHAT WEBSITE</span></a></li>						
				<li class="dropdown dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<img src="../assets/images/demo/users/face1.jpg" alt="">
						<span><?php echo $_SESSION['username']; ?> <b>[PETUGAS]</b> </span>
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="gantipassword.php"><i class="icon-user-plus"></i> Ganti Password</a></li>						
						<li class="divider"></li>					
						<li><a href="logout.php"><i class="icon-switch2"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>

	
	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			

			