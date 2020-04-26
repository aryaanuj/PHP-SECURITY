<?php
if(!defined("HEADER")){
  require 'Error_404.php';
	exit(Errors_404());
}
?>

<!-- code start from here -->
<nav class="navbar navbar-expand-lg bg-dark" style="height:60px;">
  	<a class="navbar-brand font-weight-bold text-white" href="index.php" id="ph" onmouseover='$("#lh").show();$("#rh").show();' onmouseout='$("#lh").hide();$("#rh").hide();'><span style="display:none;" id="lh"><&quest;</span> PHP <span class="text-warning">SECURITY <span id="rh" style="display:none;">&quest;></span></span></a>
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon fa fa-bars text-white"></span>
  	</button>
  	<div class="collapse navbar-collapse ncontent" id="navContent" style="z-index:10000;">
    	<ul class="navbar-nav ml-auto nul">
      		<li class="nav-item active  nlink">
        		<a class="nav-link text-white nlink" href="#intro-sec">HOME <span class="sr-only">(current)</span></a>
      		</li>
      		<li class="nav-item">
        		<a class="nav-link text-white nlink" href="#about-sec">ABOUT US</a>
      		</li>
      		<li class="nav-item dropdown">
        		<a class="nav-link nlink dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          		ADMIN
        		</a>
        		<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          			<a class="dropdown-item" href="#">Action</a>
          			<a class="dropdown-item" href="#">Another action</a>
          			<div class="dropdown-divider"></div>
          			<a class="dropdown-item" href="#">Something else here</a>
        		</div>
      		</li>
          <?php if(isLoggedIn()){?>
            <li class="nav-item dropdown">
            <a class="nav-link nlink dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img src="WebImage/default_profile.jpg" class="rounded-circle" width="25" height="25">
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item text-center font-weight-bold" href="#"><?= getUsername($_SESSION['user_id']); ?></a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" text-white><i class='fa fa-user'></i>  My Account</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="./logout.php?status='logout'"><i class="fa fa-sign-out"></i> Logout</a>
            </div>
          </li>
          <?php } ?>
    	</ul>
  	</div>
</nav>
