<?php
	$title = 'Inloggen'; 
	include('header_aventis.php'); 
?>

	<div class="login">
		<div class="login_wrapper">
			<img src="../assets/images/casavastgoed_main.png">

			<h4>
				Om deze pagina te bezoeken moet u eerst inloggen.
			</h4>

			<form action="../controllers/login_controller.php" method='post'>
				<input type="text" name="email" placeholder="E-mailadres" required>

				<input type="password" name="wachtwoord" placeholder="Wachtwoord" required>

				<input type="submit" name="submit" value="Inloggen" class='btn1_admin'>

				<a href="../index" class='admin'>
					<p>
						Ga terug naar de homepage
					</p>
				</a>
			</form>
			
			<hr>

			<p>
				Aventis 0.1 &copy; - <?php echo date('Y');  ?>
			</p>

			<img class='aventis' src="./assets/images/aventis.png">
		</div>
	</div>