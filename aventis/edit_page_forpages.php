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
			<a href="admin_pages" class='admin'>
				<i class="fa fa-long-arrow-left" aria-hidden="true"></i> 
			</a>
			Pagina-inhoud wijzigen
		</div>

		<?php

			$id 	= $_GET['id'];

			$sql 	= "SELECT * FROM pages WHERE id = '$id'";
			$result	= mysqli_query($conn, $sql);


			if ($result->num_rows > 0) {
				while ($row =mysqli_fetch_assoc($result)) {
					echo 
					"
						<form action='update/update_pages.php' method='post' class='edit_form'>

							<input type='hidden' name='id' value='" . $row['id'] . "'>

							<div class='form-item'>
						        <label><b>Titel</b></label><br>
						        <input type='text' name='titel' value='" . $row['titel'] . "' placeholder='" . $row['titel'] . "'>
						    </div>

						    <div class='form-item'>
						        <label><b>Content</b></label><br>
						        <textarea name='content' class='ti_edit' id='textarea1'>
						        	".$row['content']."
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