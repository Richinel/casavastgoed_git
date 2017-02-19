 <?php
 	if(!isset($_SESSION['email'])){ //if login in session is not set
        header("Location: ../aventis/admin_login.php");
    }
    
	include('dbconnect.php');

$id 			= $_POST["id"];
$titel 			= $_POST["titel"];
$stad 			= $_POST["stad"]; 
$type 			= $_POST["type"]; 
$omschrijving	= addslashes($_POST["omschrijving"]); 
$datum 			= date('Y-m-d', strtotime($_POST["datum"]));

$sql="	
		UPDATE 
			agenda 
		SET 
			titel 			= '$titel',
			datum 			= '$datum',  
			stad 			= '$stad',  
			type 			= '$type',  
			omschrijving 	= '$omschrijving' 
		WHERE 
			id='$id'
 		";

if(mysqli_query($conn, $sql)){
	header('Location: ../aventis/admin_events.php');
}else{
	echo 'error'.mysql_errno();
}

 ?>
