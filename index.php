<?php 
	session_start();

	//ALL SCRIPTS
	require 'script.php';

	//HEAD CONTAINER (CSS LINKS)
	require 'include/head_container.php';

	//PAGE TITLE
	echo "<title>PHP-SECURITY</title>";

	//HEADER 
	require 'include/header.php'; 

	//PAGE BODY
	require 'include/body.php'; 

	//FOOTER CONTAINER (JS LINKS)
	require 'include/footer_container.php';
?>

