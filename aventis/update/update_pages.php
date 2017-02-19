 <?php
 session_start();

 	if(!isset($_SESSION['email'])){ //if login in session is not set
        header("Location: ../admin_login.php");
    }

	include('../controllers/dbconnect.php');

$id				= $_POST["id"];
$titel 			= addslashes($_POST["titel"]);
$content		= addslashes($_POST["content"]); 

$sql ="	
		UPDATE 
			pages 
		SET 
			titel 			= '$titel',
			content 		= '$content' 
		WHERE 
			id='$id'
 		";

if(mysqli_query($conn, $sql)){
	header('Location: ../admin_pages.php');
}else{
	echo 'error'.mysql_errno();
}

$conn->close();

 ?>
