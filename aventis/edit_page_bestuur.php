<?php
	session_start();

	if(!isset($_SESSION['email'])){ //if login in session is not set
	    header("Location: admin_login.php");
	}	
	
	$title= "Wijzigen"; 
	include('header_aventis.php');
	include('modal.php');
	include('../controllers/dbconnect.php');
	include('../includes/admin_includes/admin_nav.php'); 
?>

<div class="admin_gui admin">
	<div class="wrapper_admin">
		<div class="cms_navbar">
			<a href="admin_bestuur" class='admin'>
				<i class="fa fa-long-arrow-left" aria-hidden="true"></i> 
			</a>
				Bestuurslid wijzigen
		</div>

		<?php

			$id 	= $_GET['id'];

			$sql 	= "SELECT * FROM bestuur WHERE id = '$id'";
			$result	= mysqli_query($conn, $sql);


			if ($result->num_rows > 0) {
				while ($row =mysqli_fetch_assoc($result)) {
					echo 
					"
						<form action='../controllers/update_bestuur.php' method='post' class='edit_form'>
							<input type='hidden' name='id' value='" . $row['id'] . "'>

							<div class='form-item'>
						        <label><b>Naam</b></label><br>
						        <input type='text' name='naam' value='" . $row['naam'] . "' placeholder='" . $row['naam'] . "'>
						    </div>

						    <div class='form-item'>
						        <label><b>Functie</b></label><br>
						        <input type='text' name='functie' value='" . $row['functie'] . "' placeholder='" . $row['functie'] . "' >
						    </div>

						    <div class='form-item'>
						        <label><b>Foto</b></label><br>
						        <input type='text' name='foto' value='" . $row['foto'] . "' placeholder='" . $row['foto'] . "' >
						    </div>

						    <div class='form-item'>
						        <label><b>Telefoon</b></label><br>
						        <input type='text' name='telefoon' value='" . $row['telefoon'] . "' placeholder='" . $row['telefoon'] . "' >
						    </div>						    

						    <div class='form-item'>
						        <label><b>E-mailadres</b></label><br>
						        <input type='text' name='email' value='" . $row['email'] . "' placeholder='" . $row['email'] . "' >
						    </div>	

						    <div class='form-item'>
						    	<div class='row'>
						    		<div class='col'>
						    			<input type='submit' class='btn1 btn1_admin' name='change' value='Accepteren'>
						    		</div>
						    	</div>	        
						    </div>
						</form>
					";
				}
			}
		?>
	</div>
</div>