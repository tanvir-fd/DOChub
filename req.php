<?php
$servername = "localhost";
$username = "localhost";
$password = "1234";
// Create connection
$conn = mysqli_connect($servername, $username, $password, 'doch');

session_start();

$sql5="SELECT * FROM `book` WHERE tp='Book Review' AND flag!=1 ORDER BY `time`";
$stmt5=mysqli_query($conn,$sql5);

$sql1="SELECT * FROM `book` WHERE tp='Operation Format' AND flag=0 ORDER BY `time`";
$stmt1=mysqli_query($conn,$sql1);

$sql2="SELECT * FROM `book` WHERE tp='Course Documents' AND flag=0 ORDER BY `time`";
$stmt2=mysqli_query($conn,$sql2);

$sql3="SELECT * FROM `book` WHERE tp='Policies' AND flag=0 ORDER BY `time`";
$stmt3=mysqli_query($conn,$sql3);

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$name=$_POST['b_name'];
	$tp=$_POST['type'];
	$aut=$_POST['aut'];
	$dscp=$_POST['dscp'];
	$pic=$_POST['pic'];
	$id=$_SESSION['id'];
	
	$one="INSERT INTO `book`(`b_name`, `tp`, `aut`, `pic`, `r_by`, `dscp`) VALUES ('$name','$tp','$aut','book1.jpg','$id','$dscp')";
	$two=mysqli_query($conn,$one);

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
  <link rel="stylesheet" href="css/stylepro.css">

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
<video id="background-video" style="filter:opacity(55%);" autoplay loop muted poster="https://assets.codepen.io/6093409/river.jpg">
	<source src="videos/req.mp4" type="video/mp4">
</video>
<section class="page-title bg-2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <h1 class="text-capitalize mb-4 text-lg">Requests</h1>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="index.php" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Requests</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<?php

$id=$_SESSION["id"];
$sql="SELECT * FROM `user` WHERE p_num='$id'";
$stmt=mysqli_query($conn, $sql);

$cot=mysqli_num_rows($stmt);

	if($cot==1){
?>
<div class="row">
	<div class="container position-relative">
		<div class="card" style="padding: 10px 50px; background-color: rgba(250, 186, 126, 0.562);">
			<div class="container-fliud">
				<h6 style="text-align: center;font-weight: bold;font-size: x-large;">New file Request</h6>
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="mt-3 mb-3">
					<span class="row">
						<h6 class="col-sm-2 pt-2">Document's Name:</h6>
						<input class="col-sm-4" name="b_name" type="text" placeholder="Enter Document's Name">
						<h6 class="col-sm-2 pt-2">Document's Writer:</h6>
						<input class="col-sm-4" name="aut" type="text" placeholder="Enter Writer's Name">
					</span>
					<span class="row mt-3">
						<span class="col-sm-6">
							<span class="row">
								<h6 class="col-sm-4 pt-2">Document's Description:</h6>
								<input class="col-sm-8" name="dscp" type="text" placeholder="Enter Document's Description">
							</span>
							<span class="row mt-3">
								<h6 class="col-sm-4 pt-2">Document's Type:</h6>
								<select name="type" id="type">  
									<option value="Book Review"> Book Review </option>  
									<option value="Operation Format"> Operation Format </option>  
									<option value="Course Documents"> Course Documents </option>  
									<option value="Policies"> Policies </option>  
								</select>
							</span>
						</span>
						<span class="col-sm-6">
							<span class="row">
								<h6 class="col-sm-4 pt-2">Upload<br>Document's Cover:</h6>
								<input class="col-sm-8" name="pic" Style="width: 800px; border: dotted 4px rgb(117, 34, 14);padding:10px;" type="file">
							</span>
							<span class="row mt-3">
								<span class="col-sm-6"></span>
								<button class="col-sm-6 btn btn-success pl-1 pr-1" type="submit">REQUEST</button>
							</span>
						</span>
					</span>
				</form>
			</div>
		</div>
	</div>
</div>

<?php } ?>

<section class="position-relative"><form action="docdet.php" method="post">
		

		<h2 class="mt-4 mb-4 position-relative content-title" style="margin:0 50px"><a href="reqdoc.php?typ=Book Review">Book Reviews</a></h2>
		<!--Marker of card-->
		<div class="row" style="margin:0 50px">
		<?php
			$c='0';
			while($row5=mysqli_fetch_assoc($stmt5)){
		?>
		<button class="chide" name="bname" value="<?php echo $row5['b_name']; ?>" type="submit">
		<div class="col-sm-3">
			<div class="profile-card-6"><img src="images/book_cover/c<?php echo(rand(1,10)); ?>.jpg" class="img img-responsive">
				<div class="profile-name"><?php echo $row5['b_name']; ?></div>
				<div class="profile-position" style="color: white;">By <?php echo $row5['aut']; ?></div>
				<div class="profile-overview">
					<div class="text-center">
						<?php echo $row5['dscp']; ?>
					</div>
				</div>
			</div>
		</div>
		</button>
		<?php 
				$c++;
				if($c==10) break;
			}
		?>
		</div>


						
		<h2 class="mt-4 mb-4 position-relative content-title" style="margin:0 50px"><a href="reqdoc.php?typ=Operation Format">Operation Formats</a></h2>
		<!--Marker of card-->
		<div class="row" style="margin:0 50px">
		<?php
			$c='0';
			while($row1=mysqli_fetch_assoc($stmt1)){
		?>
		<button class="chide" name="bname" value="<?php echo $row1['b_name']; ?>" type="submit">
		<div class="col-sm-3">
			<div class="profile-card-6"><img src="images/book_cover/c<?php echo(rand(1,10)); ?>.jpg" class="img img-responsive">
				<div class="profile-name"><?php echo $row1['b_name']; ?></div>
				<div class="profile-position" style="color: white;">By <?php echo $row1['aut']; ?></div>
				<div class="profile-overview">
					<div class="text-center">
						<?php echo $row1['dscp']; ?>
					</div>
				</div>
			</div>
		</div></button>
		<?php 
				$c++;
				if($c==10) break;
			}
		?>
		</div>



		<h2 class="mt-4 mb-4 position-relative content-title" style="margin:0 50px"><a href="reqdoc.php?typ=Course Documents">Course Documents</a></h2>
		<!--Marker of card-->
		<div class="row" style="margin:0 50px">
		<?php
			$c='0';
			while($row2=mysqli_fetch_assoc($stmt2)){
		?>
		<button class="chide" name="bname" value="<?php echo $row2['b_name']; ?>" type="submit">
		<div class="col-sm-3">
			<div class="profile-card-6"><img src="images/book_cover/c<?php echo(rand(1,10)); ?>.jpg" class="img img-responsive">
				<div class="profile-name"><?php echo $row2['b_name']; ?></div>
				<div class="profile-position" style="color: white;">By <?php echo $row2['aut']; ?></div>
				<div class="profile-overview">
					<div class="text-center">
						<?php echo $row2['dscp']; ?>
					</div>
				</div>
			</div>
		</div></button>
		<?php 
				$c++;
				if($c==10) break;
			}
		?>
		</div>



		<h2 class="mt-4 mb-4 position-relative content-title" style="margin:0 50px"><a href="reqdoc.php?typ=Policies">Policies</a></h2>
		<!--Marker of card-->
		<div class="row" style="margin:0 50px">
		<?php
			$c='0';
			while($row3=mysqli_fetch_assoc($stmt3)){
		?>
		<div class="col-sm-3">
		<button class="chide" name="bname" value="<?php echo $row3['b_name']; ?>" type="submit">
			<div class="profile-card-6"><img src="images/book_cover/c<?php echo(rand(1,10)); ?>.jpg" class="img img-responsive">
				<div class="profile-name"><?php echo $row3['b_name']; ?></div>
				<div class="profile-position" style="color: white;">By <?php echo $row3['aut']; ?></div>
				<div class="profile-overview">
					<div class="text-center">
						<?php echo $row3['dscp']; ?>
					</div>
				</div>
			</div>
		</div></button>
		<?php 
				$c++;
				if($c==10) break;
			}
		?>
		</div>

<form>
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
   