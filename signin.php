<?php
session_start();
require 'database/database_connection.php';
require 'script.php'; // FOR SignIn() function
$msg = "";
if(isset($_POST['signin'])){
	$msg = SignIn($con, $_POST['email'], $_POST['password']);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP-SECURITY | SIGN IN</title>
	<?php require 'Links/CSSLinks.php'; ?>
</head>
<body>
	<?php define("HEADER", TRUE); ?>
	<?php define("FOOTER", TRUE); ?>
	<?php require 'include/header.php'; ?>

	<!-- sign in section  -->
	<section id="signup-sec">
		<div class="container">
			<div class="section-header">SIGN UP</div><br><br>
			<div class="row">
				<div class="col-md-6">
					<img src="WebImage/1.png" class="img-fluid" id="signup-img">
				</div>
				<div class="col-md-6 mx-auto" id="signup-form">
					<div class="myform form ">
						<form action="" method="post">
							<?php echo $msg; ?>
							<div class="form-group">
								<input type="email" name="email"  class="form-control my-input" id="email" placeholder="Email" required>
							</div>
							<div class="form-group">
								<input type="password" name="password" id="password"  class="form-control my-input" placeholder="Password" required>
							</div>
							<div class="text-center ">
								<button type="submit" class=" btn btn-block btn-outline-primary tx-tfm" name="signin">Sign In Here</button>
							</div>
							<div class="col-md-12 ">
								<div class="login-or">
									<hr class="hr-or">
									<span class="span-or">or</span>
								</div>
							</div>
							<div class="form-group">
								<a class="btn btn-block g-button" href="#">
									<i class="fa fa-google"></i> 
									Sign in with Google
								</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- signin section end -->

	<?php require 'include/footer.php'; ?>
	<!-- javascript libraries -->
	<?php require 'Links/JsLinks.php'; ?>
</body>
</html>

