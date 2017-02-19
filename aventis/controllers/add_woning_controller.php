<?php
if(isset($_POST['submit'])) {
	include('dbconnect.php');

	$adres 			= addslashes($_POST["adres"]);
	$stad 			= addslashes($_POST["stad"]);
	$type 			= addslashes($_POST["type"]);
	$betaalwijze 	= addslashes($_POST["betaalwijze"]);
	$prijs 			= addslashes($_POST["prijs"]);
	$status 		= addslashes($_POST["status"]);
	$labelstatus 	= addslashes($_POST["labelstatus"]);
	$kamers 		= addslashes($_POST["kamers"]);
	$afbeelding 	= addslashes($_POST["afbeelding"]);
	$beschrijving	= addslashes($_POST["beschrijving"]); 


	$conn->query("
			INSERT INTO 
				aanbod(
					adres,
					stad, 
					type,
					betaalwijze, 
					prijs,
					status, 
					labelstatus,
					kamers,
					afbeelding, 
					beschrijving
				) 
			VALUES(
				'$adres',
				'$stad',
				'$type',
				'$betaalwijze',
				'$prijs',
				'$status',
				'$labelstatus',
				'$kamers',
				'$afbeelding',
				'$beschrijving'
			)"
	);

	header("Location: ../adminview_woningen.php");
}
?>