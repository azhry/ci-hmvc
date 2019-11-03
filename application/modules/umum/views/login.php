<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="../assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Login</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<!--     Fonts and icons     -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<!-- CSS Files -->
	<link href="<?= base_url('assets/now-ui-dashboard-master') ?>/assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?= base_url('assets/now-ui-dashboard-master') ?>/assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="<?= base_url('assets/now-ui-dashboard-master') ?>/assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
	<div class="wrapper ">

		<!-- Navbar -->
		<nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
			<div class="container-fluid">
				<div class="navbar-wrapper">
					<div class="navbar-toggle">
						<button type="button" class="navbar-toggler">
							<span class="navbar-toggler-bar bar1"></span>
							<span class="navbar-toggler-bar bar2"></span>
							<span class="navbar-toggler-bar bar3"></span>
						</button>
					</div>
					<a class="navbar-brand text-center" style="margin-left: 300px;" href="#MAUT">SISTEM PENDUKUNG KEPUTUSAN PEMILIHAN MEKANIK PADA PT TUNAS AUTO GRAHA PALEMBANG <br>DENGAN METODE MULTI-ATTRIBUTE UTILITY THEORY (MAUT)</a>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-bar navbar-kebab"></span>
					<span class="navbar-toggler-bar navbar-kebab"></span>
					<span class="navbar-toggler-bar navbar-kebab"></span>
				</button>
			</div>
		</nav>
		<!-- End Navbar -->

		<div class="panel-header panel-header-lg" style="height: 50px !important;">
		</div>
		<div class="content">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<?= form_open_multipart('umum/main') ?>
						<div class="card-header text-center">
							<h4 class="card-title"> Login</h4>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-md-3"></div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Username</label>
										<input type="text" name="username" class="form-control">
									</div>
								</div>
								<div class="col-md-3"></div>
							</div>
							<div class="row">
								<div class="col-md-3"></div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Password</label>
										<input type="password" name="password" class="form-control">
									</div>
								</div>
								<div class="col-md-3"></div>
							</div>
						</div>
						<div class="card-footer text-center">
							<button type="submit" id="login" name="login" value="Login" class="btn btn-primary">Login</button>
						</div>
						<?= form_close() ?>
					</div>
				</div>
			</div>
		</div>
		<!--   Core JS Files   -->
		<script src="<?= base_url('assets/now-ui-dashboard-master') ?>/assets/js/core/jquery.min.js"></script>
		<script src="<?= base_url('assets/now-ui-dashboard-master') ?>/assets/js/core/popper.min.js"></script>
		<script src="<?= base_url('assets/now-ui-dashboard-master') ?>/assets/js/core/bootstrap.min.js"></script>
		<script src="<?= base_url('assets/now-ui-dashboard-master') ?>/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
		<!--  Google Maps Plugin    -->
		<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
		<!-- Chart JS -->
		<script src="<?= base_url('assets/now-ui-dashboard-master') ?>/assets/js/plugins/chartjs.min.js"></script>
		<!--  Notifications Plugin    -->
		<script src="<?= base_url('assets/now-ui-dashboard-master') ?>/assets/js/plugins/bootstrap-notify.js"></script>
		<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
		<script src="<?= base_url('assets/now-ui-dashboard-master') ?>/assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
		<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
		<script src="<?= base_url('assets/now-ui-dashboard-master') ?>/assets/demo/demo.js"></script>
		<script>
			$(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

  });
</script>
</body>

</html>