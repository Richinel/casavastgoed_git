<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?> | Casa Vastgoed</title>

	<meta name="viewport" content="width=device-width, maximum-scale=1.0">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/kube.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

	<script src="assets/js/jquery-3.1.1.min.js"></script>
	<script src="assets/js/cycle2.js"></script>
	<script src="assets/js/functions.js"></script>
</head>
<body>
<?php include('includes/mobile_menu.php'); ?>

	<div class="nav">
		<div class="nav_info">
			<div class="wrapper">
				<div class="pre_nav">
					<div class="phone">
						<i class="fa fa-phone" aria-hidden="true"></i>
						Bel direct:  06 - 87 65 72 46
					</div>

					<div class="login">
						<div class="divider"></div>
						<a href="aventis/admin_login">Inloggen</a>
					</div>
				</div>
			</div>
		</div>

		<div class="wrapper">
			<a href="index">
				<img src="assets/images/casavastgoed.png">
			</a>

			<ul>
				<li><a href="index">Home</a></li>
				<li class='_nav'>
					<a href="aanbod">
						Aanbod <i class="fa fa-caret-down down" aria-hidden="true"></i>
					</a>
					<div class="submenu">
						<p>
							<a href="woningen">
								Woningen
							</a>
						</p>
					</div>
				</li>
				<li class='_nav'>
					Diensten
					<div class="submenu">
						<p>
							<a href="huur">
								Huur
							</a>
						</p>
						<p>
							<a href="verhuur">
								Verhuur
							</a>
						</p>
						<p>
							<a href="koop">
								Koop
							</a>
						</p>
					</div>
				</li>
				<li>Inschrijven</li>
				<li>Renovatie & Onderhoud</li>
				<li><a href="contact">Contact</a></li>
			</ul>

			<i class="fa fa-bars menu_btn" aria-hidden="true"></i>
		</div>
	</div>