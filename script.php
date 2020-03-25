<?php
require 'database/database_connection.php';


//############################ FOR USER SIGN UP ###############################
function SignUp($con, $name, $email, $password)
{
	if(isEmailExist($con, $email))
	{
		return showErrorMsg("Email Address already Exist.");
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
				return showSuccessMsg("SignUp Successfully!!");
			}
			else
			{
				return showErrorMsg("OOPS! Something went wrong.");
			}
		}
		mysqli_stmt_close($RES);
	}
}

//############################ FOR USER SIGN IN #############################

function SignIn($con, $email, $password)
{
	$QUERY  = "SELECT * FROM users WHERE email=?";
	$RESULT = mysqli_prepare($con,$QUERY);
	mysqli_stmt_bind_param($RESULT,'s',$EMAIL);
	$EMAIL = mysqli_real_escape_string($con,htmlspecialchars(trim($email)));
	if(mysqli_stmt_execute($RESULT))
	{
		mysqli_stmt_store_result($RESULT);
		if(mysqli_stmt_num_rows($RESULT)==1)
		{
			mysqli_stmt_bind_result($RESULT,$ID,$USERNAME,$EMAILS,$PASSWORD);
			while(mysqli_stmt_fetch($RESULT))
			{
				if(password_verify($password, $PASSWORD))
				{
					$_SESSION['logged_in'] = true;
					$_SESSION['user_id'] = $EMAILS;
					// session_regenerate_id();
					header("Location:index.php");
				}
				else
				{
					return showErrorMsg("Invalid Username and Password.");
				}
			}
		}
		else
		{
			return showErrorMsg("Invalid Username and Password.");
		}
	}
	mysqli_stmt_close($RESULT);
}

//########################## FOR CHECK USER LOGGED IN OR NOT ##################
function isLoggedIn()
{
	if(isset($_SESSION['logged_in']) && isset($_SESSION['user_id'])){
		return true;
	}
	else{
		return false;
	}
}

//###################### FOR SHOWING ERROR ALERT MESSAGE ######################
function showErrorMsg($msg) 
{
	return "<div class='alert alert-danger alert-dismissable'>
			<a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			".$msg."
			</div>";
}

//#################### FOR SHOWING SUCCESS ALERT MESSAGE ######################
function showSuccessMsg($msg)
{
	return "<div class='alert alert-success alert-dismissable'>
			<a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			".$msg."
			</div>";
}

//################### FOR CHECKING IF EMAIL EXIST OR NOT #################
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