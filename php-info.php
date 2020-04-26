<?php 
	session_start();

	//ALL SCRIPTS
	require 'script.php';

	//HEAD CONTAINER (CSS LINKS)
	require 'include/head_container.php';

	//PAGE TITLE
	echo "<title>PHP-SECURITY</title>";

	//HEADER 
	require 'include/php-info-header.php'; 
?>
<style type="text/css">
	li, a, p
	{
		font-size:16px;
	}
</style>
	<!-- PAGE BODY -->
	<section class="php-info bg-dark">
	<div class="row php-info-content">
		<div class="col-md-7">
			<img src="WebImage/4.png" class="img-fluid">
		</div>
		<div class="col-md-5">
			<h2 class="text-white my-5">WE ARE WEB <span class="text-warning">DEVELOPER</span></h2>
			<p class="text-warning text-left text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
			</p>
			<ul class="text-white ml-3">
				<li>Profesional Developer</li>
				<li>SEO Professional</li>
				<li>Experienced Employee</li>
				<li>100% Secure Web Applications</li>
				<li>Profesional Developer</li>
				<li>SEO Professional</li>
				<li>Experienced Employee</li>
				<li>100% Secure Web Applications</li>
			</ul>
		</div>
	</div>
	</section>
	<section class="services py-5">
		<h2 class="text-center">SERVICES</h2>
		<div class="row my-5 php-info-content">
			<div class="col-md-6">
				<img class="img-fluid" src="WebImage/4.png">
			</div>
			<div class="col-md-5">
				<p class="text-primary" style="font-size:22px;">Build Website</p>
				<p class="text-justify">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>
		</div>
		<div class="row my-5 ml-5 p-content">
			<div class="col-md-5">
				<p class="text-primary" style="font-size:22px;">Build Android App</p>
				<p class="text-justify">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>
			<div class="col-md-6 ">
				<img class="img-fluid" src="WebImage/7.png">
			</div>
		</div>
	</section>
<?php

	//FOOTER CONTAINER (JS LINKS)
	require 'include/footer_container.php';
?>
