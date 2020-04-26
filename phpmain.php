<!DOCTYPE html>
<html>
<head>
  <title></title>
   <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

  <title>PHP INFO</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <style type="text/css">
  li, a, p
  {
    font-size:16px;
  }
</style>
</head>
<body>

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
          <?php if(false){?>
            <li class="nav-item dropdown">
            <a class="nav-link nlink dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img src="WebImage/default_profile.jpg" class="rounded-circle" width="25" height="25">
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item text-center font-weight-bold" href="#">Anuj Arya</a>
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
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>