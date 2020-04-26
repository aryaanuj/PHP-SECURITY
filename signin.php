<?php
session_start();
require 'script.php';

//IF USER LOGGED IN THEN HE WILL NOT ACCESS SIGN IN PAGE
if(isLoggedIn()){exit(header("Location:index.php"));}
$msg = "";

//FOR USER SIGN IN
$msg = SignIn();

//HEAD CONTAINER (CSS LINKS)
require 'include/head_container.php';

//PAGE TITLE
echo "<title>PHP-SECURITY | SIGN IN</title>";

//HEADER 
require 'include/header.php'; 

?>
	<!-- sign in section  -->
	<section id="signup-sec">
		<div class="container">
			<div class="section-header">SIGN IN</div><br><br>
			<div class="row">
				<div class="col-md-6">
					<img src="WebImage/1.png" class="img-fluid" id="signup-img">
				</div>
				<div class="col-md-6 mx-auto" id="signup-form">
					<div class="myform form ">
						<form action="" method="post">
							<?php echo $msg; ?>
							<!-- CSRF TOKEN -->
							<input type="hidden" name="token" value="<?= csrf_token(); ?>">
							<div class="form-group">
								<input type="email" name="email"  class="form-control my-input" id="email" placeholder="Email" autocomplete="off" required>
							</div>
							<div class="form-group">
								<input type="password" name="password" id="password"  class="form-control my-input" autocomplete="off" placeholder="Password" required>
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
<?php
//FOOTER CONTAINER (JS LINKS)
require 'include/footer_container.php';
?>

