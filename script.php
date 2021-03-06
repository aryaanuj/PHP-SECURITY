<?php
require 'database/database_connection.php';

//################### FOR USER SIGN UP #########################
function SignUp()
{
	global $con;
	if(isset($_POST['signup']))
	{	
		$token = @$_POST['token'];
		if(check_csrf_token($token)!="true")
		{
			return showErrorMsg(check_csrf_token($token));
			exit();
		}
		$email = $_POST['email'];
		$name = $_POST['name'];
		$password = $_POST['password'];

		//check email already exist or not
		if(isEmailExist($email))
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
}

//############################ FOR USER SIGN IN #############################

function SignIn()
{
	global $con;
	if(isset($_POST['signin']))
	{
		$token = @$_POST['token'];
		if(check_csrf_token($token)!="true")
		{
			return showErrorMsg(check_csrf_token($token));
			exit();
		}
		$email = $_POST['email'];
		$password = $_POST['password'];
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
						session_regenerate_id(true);
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
}

//########################## FOR CHECK USER LOGGED IN OR NOT ##################
function isLoggedIn()
{
	if(isset($_SESSION['logged_in']) && isset($_SESSION['user_id'])){
		@session_regenerate_id(true);
		return true;
	}
	else{return false;}
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
function isEmailExist($email)
{
	global $con;
	$QUERY = "SELECT * FROM users WHERE email=?";
	$RESULT = mysqli_prepare($con,$QUERY);
	mysqli_stmt_bind_param($RESULT,"s", $email);
	mysqli_stmt_execute($RESULT);
	mysqli_stmt_store_result($RESULT);
	if(mysqli_stmt_num_rows($RESULT)>0)
	{return true;}
	else
	{return false;}
	mysqli_stmt_close($RESULT);
}

//################### GENERATE CSRF TOKEN ##########################

function csrf_token(){
	$token = bin2hex( random_bytes(32) );
	$_SESSION['csrf-token'] = $token;
	return $token;
}

// CHECK CSRF TOKEN
function check_csrf_token($token)
{
	if(empty($token))
	{
		return "Token Missing!!";
	}
	else if($token != $_SESSION['csrf-token'])
	{
		return "Token Not Matched!!";
	}
	else
	{
		return true;
	}
}

//######################### GET USER NAME ###################
function getUsername($email)
{
	global $con;
	$res = mysqli_query($con, "SELECT username FROM users WHERE email='$email'");
	return ucwords(mysqli_fetch_array($res)['username']);
}
?>