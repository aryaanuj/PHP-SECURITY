<?php

function SignUp($con, $name, $email, $password)
{
	$SQL = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
	$RES = mysqli_prepare($con, $SQL);
}





?>