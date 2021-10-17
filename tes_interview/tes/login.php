<?php
session_start();
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sistem Informasi Klinik Sukolilo</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>
				<a class="brand" href="index.html">
					Sistem Informasi Klinik Sukolilo
				</a>
				<div class="nav-collapse collapse navbar-inverse-collapse">
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->



	<div class="wrapper">
		
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4">
					<form class="form-vertical" method="POST" action="">
						<div class="module-head">
							<h3>Login</h3>
						</div>
						<div class="module-body">
							<?php
							if(isset($_POST['login'])){
								$username=$_POST['username'];
								$password=md5($_POST['password']);
								if(empty($username) || empty($password)){
									echo "<div class='alert'>
									<button type='button' class='close' data-dismiss='alert'>×</button>
									<strong>Peringatan!</strong> Username atau password anda belum diisi!</div>";
								}else{
									$a="select * from user where username='$username'";
									$b=mysqli_query($koneksi,$a);
									$c=mysqli_fetch_array($b);
									if($username<>$c['username']){
										echo "<div class='alert'>
										<button type='button' class='close' data-dismiss='alert'>×</button>
										<strong>Peringatan!</strong> Username anda salah!</div>";
									}elseif($password<>$c['password']){
										echo "<div class='alert'>
										<button type='button' class='close' data-dismiss='alert'>×</button>
										<strong>Peringatan!</strong> Password anda salah!</div>";
									}else{
										$_SESSION['username']=$c['username'];
										$_SESSION['level']=$c['level'];
										header("location:home.php");
									}
								}
							}
							?>
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" name="username" type="text" id="inputEmail" placeholder="Username">
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" name="password" type="password" id="inputPassword" placeholder="Password">
								</div>
							</div>
						</div>
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<button type="submit" name="login" class="btn btn-primary pull-right">Login</button>
									
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container">
			

			<b class="copyright">&copy; 2021 Sistem Klinik Sukolilo </b> All rights reserved.
		</div>
	</div>
	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>