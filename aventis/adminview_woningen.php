<?php
	session_start();

	if(!isset($_SESSION['email'])){ //if login in session is not set
	    header("Location: admin_login.php");
	}	

	$title = "Pagina's";
	include('header_aventis.php');
	include('admin_nav.php'); 
	include('add_woning_modal.php'); 
?>

		<div class="admin_gui admin">
			<div class="wrapper">
				<div class="cms_navbar">
					<i class="fa fa-bars cms_mnu_btn" aria-hidden="true"></i>
					Woningen

					<div class="cms_navbar_i">
						<i class="fa fa-plus-circle add_woning_btn add" aria-hidden="true"></i>

						<i class="fa fa-search" aria-hidden="true"></i>


						<div class="tooltip">
							<div class="tooltip_add">
								Item toevoegen
							</div>
						</div>
					</div>
				</div>
				
				<?php include('controllers/woning_controller.php'); ?>
			</div>
		</div>
	</div>