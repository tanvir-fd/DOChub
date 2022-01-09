<?php
$servername = "localhost";
$username = "localhost";
$password = "1234";
// Create connection
$conn = mysqli_connect($servername, $username, $password, 'doch');

session_start();


if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['type'])){
	$type=$_POST['type'];
}

if(!empty($_GET['typ'])){
	$type=$_GET['typ'];
}

$sql="SELECT * FROM `book` WHERE tp='$type' AND flag=1 ORDER BY `b_name` ASC";
$stmt=mysqli_query($conn, $sql);


?>
<!doctype html>
<html lang="en">
  <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="megakit,business,company,agency,multipurpose,modern,bootstrap4">
  
  <meta name="author" content="themefisher.com">

  <title>DOChub</title>

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
<section class="page-title bg-1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <h1 class="text-capitalize mb-4 text-lg"><?php echo $type; ?></h1>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="index.php" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
			<li class="list-inline-item"><a href="resource.php" class="text-white">Resources</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50"><?php echo $type; ?></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section> 













<section class="cddark">
	<div class="container py-4">
		<h1 class="h1 text-center" id="pageHeaderTitle"><?php echo $type; ?> that have been completed are shown as follows</h1>

		<?php 
		$a="0";
		while($row=mysqli_fetch_assoc($stmt)){
		?>
		
		
		<form action="docdet.php" method="post">
			<button type="submit" name="bname" value="<?php echo $row['b_name'] ?>" style="background: rgba(255, 255, 255, 0); border: none;">
			<?php if($a==0){ ?><article class="postcard light red"><?php } else {?> <article class="postcard dark blue"> <?php } ?>
			
				<img class="postcard__img" src="images/book_cover/c<?php echo(rand(1,10)); ?>.jpg" alt="<?php echo $row['b_name']; ?>" />	
				
				<div class="postcard__text <?php if($a==0){ ?>t-dark<?php } ?>" style="width:900px;">
					<h1 class="postcard__title <?php if($a==0){ ?>red<?php $a='1'; } else $a='0'; ?>"><?php echo $row['b_name']; ?></h1>
					<div class="postcard__subtitle small">
					<?php echo $row['aut']; ?>
					</div>
					<div class="postcard__bar"></div>
					<div class="postcard__preview-txt"><?php echo $row['dscp']; ?></div>
					
				</div>
			</article></button>
		</form>
		<?php } ?>
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