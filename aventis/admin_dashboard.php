<?php
	session_start();

	if(!isset($_SESSION['email'])){ //if login in session is not set
	    header("Location: admin_login.php");
	}

	$title = 'Dashboard';
	include('header_aventis.php');
	include('admin_nav.php'); 
?>	

		<div class="admin_gui">
			<div class="wrapper_admin">
				<div class="cms_navbar">
					<i class="fa fa-bars cms_mnu_btn" aria-hidden="true"></i>
					Dashboard
				</div>
				<h1 class='admin'>Welkom, <?php echo $_SESSION['voornaam']; ?>!</h1>

				<fieldset>
					<legend>Melding</legend>
					Het CMS is nog verre van af! Dingen zoals items verwijderen, foto's toevoegen en data wijzigen werken nog niet optimaal!  =)
				</fieldset>	
			</div>
		</div>
	</div>
</div>