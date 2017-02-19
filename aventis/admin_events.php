<?php
	session_start();

	if(!isset($_SESSION['email'])){ //if login in session is not set
	    header("Location: admin_login.php");
	}	

	$title = 'Evenementen';
	include('header_aventis.php');
	include('modal.php');
	include('warning_modal.php');
	include('edit_modal.php');
	include('../includes/admin_includes/admin_nav.php'); 
?>

		<div class="admin_gui admin">
			<div class="wrapper">
				<div class="cms_navbar">
				<i class="fa fa-bars cms_mnu_btn" aria-hidden="true"></i>
					Evenementen

					<div class="cms_navbar_i">
						<i class="fa fa-plus-circle add_event_btn add" aria-hidden="true"></i>
						<i class="fa fa-search" aria-hidden="true"></i>

						<div class="tooltip">
							<div class="tooltip_add">
								Item toevoegen
							</div>
						</div>
					</div>
				</div>
					<?php include('../controllers/evenement_admin.php'); ?>
			</div>
		</div>
	</div>