<?php
	session_start();
	session_destroy();
	header('Location: ../aventis/admin_login.php');
?>