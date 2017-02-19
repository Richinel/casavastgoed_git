 <?php
 session_start();

 	if(!isset($_SESSION['email'])){ //if login in session is not set
        header("Location: ../admin_login.php");
    }

	include('../controllers/dbconnect.php');

$id				= $_POST["id"];
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

$sql ="	
		UPDATE 
			aanbod 
		SET 
			adres 			= '$adres',
			stad 			= '$stad',
			type 			= '$type',
			betaalwijze 	= '$betaalwijze',
			prijs 			= '$prijs',
			status 			= '$status',
			labelstatus 	= '$labelstatus',
			kamers 			= '$kamers',
			afbeelding 		= '$afbeelding',
			beschrijving 	= '$beschrijving' 
		WHERE 
			id='$id'
 		";

if(mysqli_query($conn, $sql)){
	header('Location: ../adminview_woningen.php');
}else{
	echo 'error'.mysql_errno();
}

$conn->close();

 ?>
