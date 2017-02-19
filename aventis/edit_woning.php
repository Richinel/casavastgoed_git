<?php
	session_start();

	if(!isset($_SESSION['email'])){ //if login in session is not set
	    header("Location: admin_login.php");
	}	
	
	$title= "Wijzigen"; 
	include('header_aventis.php');
	include('controllers/dbconnect.php');
	include('admin_nav.php'); 
?>
<div class="admin_gui admin">
	<div class="wrapper_admin">
		<div class="cms_navbar">
			<a href="adminview_woningen" class='admin'>
				<i class="fa fa-long-arrow-left" aria-hidden="true"></i> 
			</a>
			Pagina-inhoud wijzigen
		</div>

		<?php

			$id 	= $_GET['id'];

			$sql 	= "SELECT * FROM aanbod WHERE id = '$id'";
			$result	= mysqli_query($conn, $sql);


			if ($result->num_rows > 0) {
				while ($row =mysqli_fetch_assoc($result)) {
					echo 
					"
						<form action='update/update_woning.php' method='post' class='edit_form'>

							<input type='hidden' name='id' value='" . $row['id'] . "'>

							<div class='form-item'>
						        <label><b>Adres</b></label><br>
						        <input type='text' name='adres' value='" . $row['adres'] . "' placeholder='" . $row['adres'] . "'>
						    </div>

						    <div class='form-item'>
						        <label><b>Stad</b></label><br>
						        <input type='text' name='stad' value='" . $row['stad'] . "' placeholder='" . $row['stad'] . "'>
						    </div>

						    <div class='form-item'>
						        <label><b>Type</b></label><br>
						        <input type='text' name='type' value='" . $row['type'] . "' placeholder='" . $row['type'] . "'>
						    </div>

						    <div class='form-item'>
						        <label><b>Betaalwijze</b></label><br>
						        <input type='text' name='betaalwijze' value='" . $row['betaalwijze'] . "' placeholder='" . $row['betaalwijze'] . "'>
						    </div>

						    <div class='form-item'>
						        <label><b>Prijs</b></label><br>
						        <input type='text' name='prijs' value='" . $row['prijs'] . "' placeholder='" . $row['prijs'] . "'>
						    </div>

						    <div class='form-item'>
						        <label><b>Status</b></label><br>
						        <input type='text' name='status' value='" . $row['status'] . "' placeholder='" . $row['status'] . "'>
						    </div>

						    <div class='form-item'>
						        <label><b>Labelstatus</b></label><br>
						        <input type='text' name='labelstatus' value='" . $row['labelstatus'] . "' placeholder='" . $row['labelstatus'] . "'>
						    </div>

						    <div class='form-item'>
						        <label><b>Kamers</b></label><br>
						        <input type='text' name='kamers' value='" . $row['kamers'] . "' placeholder='" . $row['kamers'] . "'>
						    </div>

						    <div class='form-item'>
						        <label><b>Afbeelding</b></label><br>
						        <input type='text' name='afbeelding' value='" . $row['afbeelding'] . "' placeholder='" . $row['afbeelding'] . "'>
						    </div>

						    <div class='form-item'>
						        <label><b>Beschrijving</b></label><br>
						        <textarea name='beschrijving' class='ti_edit' id='textarea1'>
						        	".$row['beschrijving']."
						        </textarea>
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