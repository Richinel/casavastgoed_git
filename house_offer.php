<?php
	include('controllers/dbconnect.php');

	$id 		= $_GET['id'];

	$sql 	= "SELECT * FROM aanbod WHERE id = '$id'";

	$result	= mysqli_query($conn, $sql);
		if ($result->num_rows > 0) {
			while ($row =mysqli_fetch_assoc($result)) {	
				$title	= $row['adres'];
				include('includes/header.php');
?>

	<div class="content main house_offer">
		<div class="wrapper">

			<?php 
					echo 
						"							
							<div class='row'>
								<div class='col col-4'>
									<img src='assets/images/" . $row['afbeelding'] . "'>
								</div>

								<div class='col col-8'>
									<h3>
										" . $row['adres'] . ", " . $row['stad'] . "
										<span class='label outline " . $row['labelstatus'] . "'>
											" . $row['status'] . "
										</span>
									</h3>
									<hr>

									<h2>&euro; " . $row['prijs'] . "</h2>

									<p>
										<b>Woningtype</b><br>
										" . $row['type'] . "
									</p>

									<p>
										<b>Betaalwijze</b><br>
										" . $row['betaalwijze'] . "
									</p>

									<p>
										<b>Aantal kamers</b><br>
										" . $row['kamers'] . "
									</p>

									<p>
										<b>Beschrijving</b><br>
										" . $row['beschrijving'] . "
									</p>
								</div>
							</div>
					";
					}
				}
			?>

			<a href="woningen">
				<div class="btn">
					Ga terug
				</div>
			</a>
		</div>
	</div>

<?php include('includes/footer.php'); ?>