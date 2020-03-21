<?php
require 'database/database_connection.php';

function SignUp($con, $name, $email, $password)
{
	if(isEmailExist($con, $email))
	{
		return "<div class='alert alert-danger alert-dismissable'>
					<a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					Email Address already Exist.</div>";

	}
	else
	{
		$SQL = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
		$RES = mysqli_prepare($con, $SQL);

		if($RES)
		{
			mysqli_stmt_bind_param($RES,"sss",$NAMES,$EMAILS,$PASSWORDS);
			$NAMES = mysqli_real_escape_string($con, $name);
			$EMAILS = mysqli_real_escape_string($con, $email);
			$PASSWORDS = password_hash(mysqli_real_escape_string($con, $password),PASSWORD_BCRYPT,["cost"=>8]);
			if(mysqli_stmt_execute($RES))
			{
				return "<div class='alert alert-success alert-dismissable'>
						<a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						SignUp Successfully!!</div>";
			}
			else
			{
				return "<div class='alert alert-danger alert-dismissable'>
						<a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						OOPS! Something went wrong.</div>";
			}
		}
		mysqli_stmt_close($RES);
	}
}


function dummy($con)
{
	$res  = mysqli_query($con, "select * from users where email='anb@gmail.com'");
	while($row = mysqli_fetch_array($res))
	{	
		if(password_verify('abcd',$row['password']))
		{
			echo "done";
		}
		else
		{
			echo "not done";
		}
	}
}


function isEmailExist($con, $email)
{
	$QUERY = "SELECT * FROM users WHERE email=?";
	$RESULT = mysqli_prepare($con,$QUERY);
	mysqli_stmt_bind_param($RESULT,"s", $email);
	mysqli_stmt_execute($RESULT);
	mysqli_stmt_store_result($RESULT);
	if(mysqli_stmt_num_rows($RESULT)>0)
	{
		return true;
	}
	else
	{
		return false;
	}
	mysqli_stmt_close($RESULT);
}



?>