<?php
	session_start();

	if(!isset($_SESSION['email'])){ //if login in session is not set
	    header("Location: admin_login.php");
	}	

	$title = "Pagina's";
	include('header_aventis.php');
	include('admin_nav.php'); 
?>

		<div class="admin_gui admin">
			<div class="wrapper">
				<div class="cms_navbar">
					<i class="fa fa-bars cms_mnu_btn" aria-hidden="true"></i>
					Pagina's
				</div>
				
				<h3 class='admin'>Hier kunt u de inhoud van de pagina's beheren pagina's beheren</h3>

				<?php include('controllers/pages_controller.php'); ?>
			</div>
		</div>
	</div>