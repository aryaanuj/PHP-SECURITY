<?php
	session_start();

	if(!(isset($_SESSION['logged_in']) && isset($_SESSION['user_id'])))
	{
		header("Location:index.php");
		exit();
	}
	
?>