<?php
if(!defined("HEADER")){
  require 'Error_404.php';
	exit(Errors_404());
}
?>

<!-- code start from here -->

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:black;">
  	<a class="navbar-brand" href="index.php">PHP SECURITY</a>
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
  	</button>
  	<div class="collapse navbar-collapse" id="navContent">
  		<!-- <form class="form-inline my-3 my-lg-0 ml-auto">
      		<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      		<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    	</form> -->
    	<ul class="navbar-nav ml-auto ">
      		<li class="nav-item active">
        		<a class="nav-link" href="#intro-sec">HOME <span class="sr-only">(current)</span></a>
      		</li>
      		<li class="nav-item">
        		<a class="nav-link" href="#about-sec">ABOUT US</a>
      		</li>
      		<li class="nav-item dropdown">
        		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img src="WebImage/default_profile.jpg" class="rounded-circle" width="25" height="25">
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item text-danger" href="#"><?php echo $_SESSION['user_id']; ?></a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class='fa fa-user'></i>  My Account</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="./logout.php?status='logout'"><i class="fa fa-sign-out"></i> Logout</a>
            </div>
          </li>
          <?php } ?>
    	</ul>
  	</div>
</nav>