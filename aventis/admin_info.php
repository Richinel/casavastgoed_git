<?php
	session_start();

	if(!isset($_SESSION['email'])){ //if login in session is not set
	    header("Location: admin_login.php");
	}	

	$title = 'Informatie';
	include('header_aventis.php');
	include('../includes/admin_includes/admin_nav.php'); 
?>

		<div class="admin_gui admin">
			<div class="wrapper">
				<div class="cms_navbar">
				<i class="fa fa-bars cms_mnu_btn" aria-hidden="true"></i>
					Informatie
				</div>

				<img src="../assets/images/aventis.png">

				<h3 class='admin'>Aventis</h3>

				<p class='info_p'>
					<b>Versie</b><br>
					0.1
				</p>	
			</div>
		</div>
	</div>