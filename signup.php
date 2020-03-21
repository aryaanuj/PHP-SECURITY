<?php 
define("HEADER", TRUE);
define("FOOTER", TRUE);

require 'database/database_connection.php';
require 'script.php';
$msg = "";
if(isset($_POST['submit']))
{
	$msg = SignUp($con,$_POST['name'],$_POST['email'],$_POST['password']);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP-SECURITY | SIGN UP</title>
	<?php require 'Links/CSSLinks.php'; ?>
</head>
<body>
	<?php require 'include/header.php'; ?>
	
	<!-- sign up section -->

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
								<input type="text" name="name"  class="form-control my-input" id="name" placeholder="Name" pattern='^[A-Za-z]+' title="Only Characters are allowed" required>
							</div>
							<div class="form-group">
								<input type="email" name="email"  class="form-control my-input" id="email" placeholder="Email" required>
							</div>
							<div class="form-group">
								<input type="password" name="password" id="password"  class="form-control my-input" placeholder="Password" required>
							</div>
							<div class="form-group">
								<input type="password" name="con-password" id="con_password"  class="form-control my-input" placeholder="Confirm Password" required>
								<div id="cnf-msg" class="pt-2"></div>
							</div>
							<div class="text-center ">
								<button type="submit" class=" btn btn-block send-button tx-tfm" name="submit">Create Your Free Account</button>
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
									Sign up with Google
								</a>
							</div>
							<p class="mt-3">By signing up, you are indicating that you have read and agree to the <a href="#" class="ps-hero__content__link">Terms of Use</a> and <a href="#">Privacy Policy</a>.
							</p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- footer section -->
	<?php require 'include/footer.php'; ?>

	<!-- javascript libraries -->
	<?php require 'Links/JsLinks.php'; ?>

</body>
</html>