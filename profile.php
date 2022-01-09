<?php
  session_start();
  $servername = "localhost";
$username = "localhost";
$password = "1234";
$db = "doch";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);


$id=$_SESSION["id"];
$sql="SELECT * FROM `user` WHERE p_num='$id'";
$stmt=mysqli_query($conn, $sql);

$cot=mysqli_num_rows($stmt);

	if($cot==1){
    $row=mysqli_fetch_assoc($stmt);
  }
else{
  $_SESSION["succ"]="Sign in at first.";
  header("location: log.php");
}



$sql="SELECT * FROM `repo` WHERE u_by='$id' ORDER BY `time` DESC";
$stmt=mysqli_query($conn, $sql);
$cot=mysqli_num_rows($stmt);


$sql1="SELECT sum(rate) as s_rt FROM `repo` WHERE u_by='$id'";
$stmt1=mysqli_query($conn, $sql1);
$row2=mysqli_fetch_assoc($stmt1);

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
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
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
			   
			   <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
			</ul>

			
		  </div>
		</div>
	</nav>
</header>

<!-- Header Close -->

<!-- Main wrapper start --> 

<div class="main-wrapper ">
<section class="page-title bg-1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <h1 class="text-capitalize mb-4 text-lg">Hi <?php echo $row["name"] ?>!!</h1>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="index.php" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">My Account</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section> 









<!--PROFILE INFO START-->

<div class="container hihi">
    <div class="main-body">
    
      <div class="row gutters-sm">
            <!--first row start-->
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php echo $row["name"] ?></h4>
                      <p class="text-secondary mb-1"><?php echo $row["rk"] ?></p>
                      <p class="text-muted font-size-sm"><?php echo $row["adds"] ?></p>
                      </div>
                  </div>
                </div>
              </div>
              
                <div class="card mt-3" style="padding: 10px 10px 0 10px;">
                    <h3 class="progress-title">Overall Rating</h3>
                    <div class="progress">
                        <div class="progress-bar" style="width:<?php echo ($row2["s_rt"]*20/$cot); ?>%; background:#97c513;">
                            <div class="progress-value"><?php echo ($row2["s_rt"]/$cot); ?>/<sub>5</sub></div>
                        </div>
                    </div>
                </div>
                <div class="card mt-3" style="padding: 10px 10px 0 10px;">
                  <h3 class="progress-title">Contribution</h3>
                  <div class="progress">
                      <div class="progress-bar" style="width:<?php echo $cot*100/5; ?>%; background:#c52e13;">
                          <div class="progress-value"><?php echo $cot; ?><sub>DOCS</sub></div>
                      </div>
                  </div>
              </div>

              <div class="card mt-3" style="padding: 20px 10px;">
                <ul class="list-group list-group-flush">
                  <li class="list-group">
                    <h6 class="mb-0" style="text-align: center; font-size: 30px;">Contact Address</h6>
                  
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><i class="ti-email mr-2 color-one"></i>Email to:</h6>
                    <span class="text-secondary"><a href="mailto:<?php echo $row["em"] ?>"><?php echo $row["em"] ?></a></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><i class="ti-mobile mr-2 color-two"></i>Call at:</h6>
                    <span class="text-secondary"><a href="tel:+880<?php echo $row["mob"] ?>">+880<?php echo $row["mob"] ?></a></span>
                  </li>
                </li>
                </ul>
              </div>
          </div>
          <!--first row end-->  
          
          
          <!--open 2nd row-->
          <div class="col-md-8">
              <div class="card mb-3 pt-0 pb-0">
                <h3 style="margin: 20px 0 0 0; font-size: 30px; font-weight: bold; text-align: center;">Personal Info</h3>
              <div class="card-body">
                  <div class="row">
                    <div class="col-sm-5">
                      <h6 class="mb-0">Personal Number:</h6>
                    </div>
                    <div class="col-sm-7 text-secondary">
                    <?php echo $row["p_num"] ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-5">
                      <h6 class="mb-0">Rank and Name:</h6>
                    </div>
                    <div class="col-sm-7 text-secondary">
                    <?php echo $row["name"] ?>
                    </div>
                  </div>
                  
                  <hr>
                  <div class="row">
                    <div class="col-sm-5">
                      <h6 class="mb-0">Date of Birth:</h6>
                    </div>
                    <div class="col-sm-7 text-secondary">
                    <?php echo $row["dob"] ?>
                    </div>
                  </div>
                  
                  <hr>
                  <div class="row">
                    <div class="col-sm-5">
                      <h6 class="mb-0">Address:</h6>
                    </div>
                    <div class="col-sm-7 text-secondary">
                    <?php echo $row["adds"] ?>
                    </div>
                  </div>
                  
                </div>
              </div>

              
              

            <div class="container">
              <h3 style="margin: 20px 0 0 0; font-size: 30px; text-align: center; font-weight: bold;">Contributed Documents</h3>
              <div class="row">
              <div class="card mt-3 col-sm-12" style="padding: 10px 10px 0 10px;overflow-y: scroll;overflow-x: hidden; height: 540px;">
                
                
                <!--iteration-->
                <?php while($row1=mysqli_fetch_assoc($stmt)){ 
                  $t1=$row1['b_name'];
                  $t2=$row1['var'];
                  $sql2="SELECT `var` FROM `d_count` WHERE b_name='$t1' AND var='$t2'";
                  $stmt2=mysqli_query($conn, $sql2);
                  $s_d=mysqli_num_rows($stmt2);
                  ?>


                <div class="row"> 
                  <div class="mb-1 service-block-two col-lg-12 col-md-12 col-sm-12">
                    <form action="docdet.php" method="post"><button class="chide">  
                    <div class="inner-box">
                          <div><img class="list_image" src="https://picsum.photos/501/500<?php //echo $row1['pic'] ?>" alt="<?php echo $row1['var'] ?>" /></div>
                          <div class="shape-one"></div>
                          <div class="shape-two"></div>
                          <h5 class="text"><?php echo $row1['var'] ?></h5>
                          <div class="text" style="list_details"><?php echo $row1['des'] ?></div>
                          <i class="ml-3 text ti-download"> <?php echo $s_d ?></i>
                          <i class="ml-3 text ti-star"> <?php echo $row1['rate'] ?></i>
                      </div></button></form>
                  </div>
                </div>
                <?php } ?>
                <!--iteration-->
              </div>
            </div> 
          </div>

        </div>
        <!--close second row-->
      </div>
    </div>
</div>

<!--PROFILE INFO end-->
        </div>
<!-- Main wrapper end -->

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
		
		<div class="footer-btm pt-4" style="background: rgb(167, 167,167);">
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
	<script src="code.jquery.com/jquery-1.11.1.min.js"></script>

    <script src="js/script.js"></script>

  </body>
  </html>