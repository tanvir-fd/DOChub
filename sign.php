<?php
$servername = "localhost";
$username = "localhost";
$password = "1234";
// Create connection
$conn = mysqli_connect($servername, $username, $password, 'doch');
$err="";

if($_SERVER["REQUEST_METHOD"] == "POST"){
 
  
  $p_num=$_POST['p_num'];
  $rk=$_POST['rk'];
  $course=$_POST['course'];
  $name=$_POST['name'];
  $mob=$_POST['mob'];
  $em=$_POST['em'];
  $adds=$_POST['adds'];
  $dob=$_POST['dob'];
  $pic=$_POST['pic'];
  $pass=$_POST['pass'];
  $sql = "INSERT INTO `user`  VALUES ('$p_num','$rk','$name','$pic','$mob','$em','$adds','$dob','0','0','$pass')";
  $stmt= mysqli_query($conn, $sql); 
  
  session_start();
  $_SESSION["succ"]="Account created Successfully!!";
  

  if($stmt){
      // Redirect to login page
      header("location: log.php?");
    } else{
        $err="Oops! Something went wrong. Please try again later.";
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="megakit,business,company,agency,multipurpose,modern,bootstrap4">
  
  <meta name="author" content="themefisher.com">

  <title>DocHub</title>

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="plugins/themify/css/themify-icons.css">
  <link rel="stylesheet" href="plugins/fontawesome/css/all.css">
  <link rel="stylesheet" href="plugins/magnific-popup/dist/magnific-popup.css">
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body>


<!-- Header Start --> 

<header class="navigation">
	<div class="header-top ">
		<div class="container">
			<div class="row justify-content-between align-items-center">
				<div class="col-lg-2 col-md-4">
					<div class="header-top-socials text-center text-lg-left text-md-left">
						<a href="https://www.facebook.com/" target="_blank"><i class="ti-facebook"></i></a>
						<a href="https://twitter.com/" target="_blank"><i class="ti-twitter"></i></a>
						<a href="https://github.com/" target="_blank"><i class="ti-github"></i></a>
					</div>
				</div>
				<div class="col-lg-10 col-md-8 text-center text-lg-right text-md-right">
					<div class="header-top-info">
						<a href="tel:+880-1622-979454">Call Us : <span>+880-1769-001002</span></a>
						<a href="mailto:support.dochub@gmail.com" ><i class="fa fa-envelope mr-2"></i><span>support.dochub@gmail.com</span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg  py-4" style="padding: 10px 20px" id="navbar">
		<div  class="container">
		  <a class="navbar-brand" href="index.php">
		  	DOC<span>hub.</span>
		  </a>

		  <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
			<span class="fa fa-bars"></span>
		  </button>
	  
		  <div class="collapse navbar-collapse text-center" id="navbarsExample09">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item active">
				<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
			  </li>
			   <li class="nav-item"><a class="nav-link" href="resource.php">Resources</a></li>
			   <li class="nav-item"><a class="nav-link" href="req.php">Requests</a></li>
			   <li class="nav-item"><a class="nav-link" href="log.php">Log In/Sign Up</a></li>
			   <!--li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Log In/Sign Up</a>
				<ul class="dropdown-menu" aria-labelledby="dropdown03">
					<li><a class="dropdown-item" href="about.php">Our company</a></li>
					<li><a class="dropdown-item" href="pricing.php">Pricing</a></li>
				</ul>
		  </li-->
			   <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
			</ul>

			<!--form class="form-lg-inline my-2 my-md-0 ml-lg-4 text-center">
			  <a href="contact.php" class="btn btn-solid-border btn-round-full">Get a Quote</a>
			</form-->
		  </div>
		</div>
	</nav>
</header>

<!-- Header Close -->

<!-- Header Close --> 

<div class="main-wrapper ">
<section class="page-title bg-6">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <h1 class="text-capitalize mb-4 text-lg">Sign Up</h1>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="index.php" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Sign Up</a></li>
          </ul>
          <span class="text-color2" style="background-color: red;"><?php echo $err; ?></span>
  
        </div>
      </div>
    </div>
  </div>

      
  <div class="container">
    <!--Grid row-->
    <div class="row mt-5">
    <!--Grid column-->
      <div class="col-md-6 mb-5 mt-md-0 mt-5 white-text text-center text-md-left">
        <h1 class="h1-responsive font-weight-bold wow fadeInLeft text-color2" data-wow-delay="0.3s">Sign up right now! </h1>
        <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
        <h6 class="mb-3 wow fadeInLeft text-color2" data-wow-delay="0.3s">Something about sign in.</h6>
      </div>
      <!--Grid column-->
      <!--Grid column-->
      <div class="col-md-6 col-xl-5 mb-4">
        <!--Form-->
        <div class="card wow fadeInRight" data-wow-delay="0.3s" style="background: rgba(255, 250, 205, 0.514);">
          <div class="card-body">
            <!--Header-->
            <div class="text-center">
              <h3 class="white-text">
                <i class="fa fa-server white-text"></i> Register yourself:</h3>
              <hr class="hr-light">
            </div>
            <!--Body-->
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="md-form">
                <i class="fa fa-id-card prefix white-text active"></i>
                <input type="text" name="p_num" id="form3" class="white-text form-control">
                <label for="form3" class="active">Your Personal Number</label>
            </div>
            <div class="md-form">
                <i class="fa fa-id-card prefix white-text active"></i>
                <input type="text" name="rk" id="form3" class="white-text form-control">
                <label for="form3" class="active">Your Rank</label>
            </div>
            <div class="md-form">
              <i class="fa fa-user prefix white-text active"></i>
              <input type="text" name="name" id="form3" class="white-text form-control">
              <label for="form3" class="active">Your name</label>
            </div>
            <div class="md-form">
                <i class="fa fa-info-circle prefix white-text active"></i>
                <input type="text" name="course" id="form3" class="white-text form-control">
                <label for="form3" class="active">Your Course Number (eg. 38 BMA SPL)</label>
            </div>
            <div class="md-form">
                <i class="fa fa-info-circle prefix white-text active"></i>
                <input type="date" name="dob" id="form3" class="white-text form-control">
                <label for="form3" class="active">Your Birthday</label>
            </div>
            <div class="md-form">
              <i class="fa fa-envelope prefix white-text active"></i>
              <input type="email" name="em" id="form2" class="white-text form-control">
              <label for="form2" class="active">Your email address</label>
            </div>
            <div class="md-form">
              <i class="fa fa-envelope prefix white-text active"></i>
              <input type="text" name="mob" id="form2" class="white-text form-control">
              <label for="form2" class="active">Your mobile number</label>
            </div>
            <div class="md-form">
              <i class="fa fa-user prefix white-text active"></i>
              <input type="text" name="adds" id="form3" class="white-text form-control">
              <label for="form3" class="active">Your Address</label>
            </div>
            <div class="md-form">
              <i class="fa fa-lock prefix white-text active"></i>
              <input type="password" name="pass" id="form4" class="white-text form-control">
              <label for="form4">Your password</label>
            </div>
            <div class="md-form">
              <i class="fa fa-lock prefix white-text active"></i>
              <input type="password" name="cfmpass" id="form4" class="white-text form-control">
              <label for="form4">Confirm Your password</label>
            </div>
            <div class="md-form">
              <i class="fa fa-lock prefix white-text active"></i>
              <input type="text" name="pic" id="form4" class="white-text form-control">
              <label for="form4">Your Picture</label>
            </div>
            <div class="text-center mt-4">
              <button type="submit" value="submit" class="btn btn-success">Sign up</button>
              
              <hr class="hr-light mb-3 mt-4">
              <a href="log.php"><button type="button" class="btn btn-danger">Back to Log In</button></a>
            </div>
          </div>
        </div>
        </form>
        <!--/.Form-->
      </div>
</section>

<!-- footer Start -->
<footer class="footer section">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="widget">
					<h4 class="text-capitalize mb-4">Website</h4>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="webb.php">Terms & Conditions</a></li>
						<li><a href="webb.php">Privacy Policy</a></li>
						<li><a href="webb.php">Support</a></li>
						<li><a href="webb.php">FAQ</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="widget">
					<h4 class="text-capitalize mb-4">Quick Links</h4>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="index.php">Home</a></li>
						<li><a href="resource.php">Resources</a></li>
						<li><a href="req.php">Requests</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="widget">
					<h4 class="text-capitalize mb-4">Join Us</h4>
					<a href="log.php">log In/ Signup</a>
				</div>
			</div>

			<div class="col-lg-3 ml-auto col-sm-6">
				<div class="widget">
					<div class="logo mb-4">
						<h3>DOC<span>hub.</span></h3>
					</div>
					<h6><a href="tel:+880-17" >Mob: +880-1769-001002</a></h6>
					<a href="mailto:support@gmail.com"><span class="text-color h4">support.dochub@gmail.com</span></a>
				</div>
			</div>
		</div>
		
		<div class="footer-btm pt-4" style="background: rgb(167, 167, 167);">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						&copy; Copyright Reserved to <span class="text-color">megakit</span> by <a href="https://themefisher.com/" target="_blank">Themefisher</a>
					</div>
				</div>
				<div class="col-lg-6 text-left text-lg-right">
					<ul class="list-inline footer-socials">
						<li class="list-inline-item"><a href="https://www.facebook.com/themefisher"><i class="ti-facebook mr-2"></i>Facebook</a></li>
						<li class="list-inline-item"><a href="https://twitter.com/themefisher"><i class="ti-twitter mr-2"></i>Twitter</a></li>
						<li class="list-inline-item"><a href="https://www.pinterest.com/themefisher/"><i class="ti-linkedin mr-2 "></i>Linkedin</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>
   
    </div>

    <!-- 
    Essential Scripts
    =====================================-->

    
    <!-- Main jQuery -->
    <script src="plugins/jquery/jquery.js"></script>
    <script src="js/contact.js"></script>
    <!-- Bootstrap 4.3.1 -->
    <script src="plugins/bootstrap/js/popper.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
   <!--  Magnific Popup-->
    <script src="plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <!-- Slick Slider -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Counterup -->
    <script src="plugins/counterup/jquery.waypoints.min.js"></script>
    <script src="plugins/counterup/jquery.counterup.min.js"></script>

    <!-- Google Map -->
    <script src="plugins/google-map/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>    
    
    <script src="js/script.js"></script>

  </body>
  </html>
   