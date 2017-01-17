<?php
	include('dbconnect.php');

	$sql = "SELECT * FROM aanbod";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			echo "	
				<div class='col'>						
					<div class='offer'>
						<div class='info'>
							<img src='assets/images/".$row['afbeelding']."'>
								<h4>".$row['adres'].", ".$row['stad']."</h4>

								<span class='label outline ".$row['labelstatus']."'>".$row['status']."</span>

								Kamers: ".$row['kamers']."

								<p class='price'>
									&euro; ".$row['prijs']."
								</p>

								<div class='btn-sm-o'>
									Meer info
								</div>
						</div>
					</div>
				</div>";
		}
		echo '</div>';
	} 
	else {
		echo "0 results";
	}

	$conn->close();
?>