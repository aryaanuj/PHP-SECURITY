<?php
	if(!isset($_GET['status'])){exit(header("Location:Error_404.php"));}
	session_start();
	unset($_SESSION['logged_in']);
	unset($_SESSION['user_id']);
	session_destroy();
	header("Location:index.php");
?>