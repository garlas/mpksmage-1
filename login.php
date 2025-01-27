<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LOGIN - SISTEM PENGADUAN LAYANAN SEKOLAH</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/validation/validate.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/styling/uniform.min.js"></script>	
	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<script type="text/javascript" src="assets/js/pages/login.js"></script>

	<?php 
	session_start();

	if(isset($_SESSION['status'])){
		if($_SESSION['status'] == "admin_login"){
			header("location:admin/");
		}else if($_SESSION['status'] == "petugas_login"){
			header("location:petugas/");
		}
	}
	?>
</head>

<body class="login-container bg-slate-800">

	<div class="page-container">

		<div class="page-content">

			<div class="content-wrapper">

				<div class="content">
					<br/>

					<form action="login_act.php" method="post">
						<div class="panel panel-body login-form">
							<br>
							<br>
							<div class="text-center">								
								<h4 class="content-group-lg">SISTEM PENGADUAN ASPIRASI <br> SMA NEGERI 1 GEDEG</h4>
								<small class="display-block">SILAHKAN LOGIN</small>
								<br>
							</div>
							<div class="form-group has-feedback has-feedback-left">
								<input type="text" class="form-control" placeholder="Username" name="username" required="required">
								<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>
							</div>

							<div class="form-group has-feedback has-feedback-left">
								<input type="password" class="form-control" placeholder="Password" name="password" required="required">
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
							</div>

							<div class="form-group">
								<select class="form-control" name="hak_akses" required="required">
									<option value="superadmin">Super Admin</option>
									<option value="petugas">Petugas</option>
								</select>
							</div>

							<div class="form-group">
								<button type="submit" class="btn bg-blue btn-block">LOGIN</button>								
							</div>

							<center>
								<a href="index.php">Kembali</a>
							</center>		
							<br>				
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
