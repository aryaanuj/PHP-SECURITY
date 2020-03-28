<?php

define('HOST','localhost');
define('DB_USER','root');
define('DB_PASS', '');
define('DB_NAME','php-security');

$con = mysqli_connect(HOST, DB_USER, DB_PASS);
mysqli_select_db($con, DB_NAME);
if(!$con)
{
	die("Connection Error".mysqli_error($con));
}

?>