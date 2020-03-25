<?php 
	session_start();
	require 'script.php';
	define("HEADER", TRUE); 
	define("BODY", TRUE);
	define("FOOTER", TRUE);
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP-SECURITY</title>
	<?php require 'Links/CSSLinks.php'; ?>
</head>
<body>
	
	<?php require 'include/header.php'; ?>
	<?php require 'include/body.php'; ?>
	<?php require 'include/footer.php'; ?>

	<!-- javascript libraries -->
	<?php require 'Links/JsLinks.php'; ?>
</body>
</html>