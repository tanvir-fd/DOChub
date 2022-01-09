<?php
$servername = "localhost";
$username = "localhost";
$password = "1234";
// Create connection
$conn = mysqli_connect($servername, $username, $password, 'doch');

session_start();


if($_SERVER["REQUEST_METHOD"] == "POST"){
	$bn=$_POST['bname'];

	if(!empty($_POST['cmt'])) {
		$cmt=$_POST['cmt'];
		$id=$_SESSION['id'];
		$sql_cmt="INSERT INTO `cmt`(`b_name`, `c_by`, `des`) VALUES ('$bn','$id','$cmt')";
		$stmt_cmt=mysqli_query($conn,$sql_cmt);
	}
	if(!empty($_POST['var'])) {
		$var=$_POST['var'];
		$des=$_POST['des'];
		$id=$_SESSION['id'];
		
		$one="INSERT INTO `repo`(`b_name`, `des`, `u_by`, `var`) VALUES ('$bn','$des','$id','$var')";
		$two=mysqli_query($conn,$one);

		$three="UPDATE `book` SET `flag`=1 WHERE b_name='$bn'";
		$four=mysqli_query($conn,$three);
	}

}

if(!empty($_GET['bn'])){
	$bn=$_GET['bn'];
}



$sql="SELECT * FROM `book` WHERE b_name='$bn'";
$stmt=mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($stmt);

$sql1="SELECT * FROM `repo` WHERE b_name='$bn'";
$stmt1=mysqli_query($conn, $sql1);
$a=mysqli_num_rows($stmt1);


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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

<!-- Header Close --> 


<div class="main-wrapper ">
	<video id="background-video" style="filter: opacity(70%);" autoplay loop muted poster="https://assets.codepen.io/6093409/river.jpg">
		<source src="videos/btp.mp4" type="video/mp4">
	</video>
<section class="page-title cta">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <h1 class="text-capitalize mb-4 text-lg"><?php echo $row['b_name']; ?></h1>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="index.php" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50"><?php echo $row['b_name']; ?></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section> 

<div class="container">
	<div class="card" style="background-color: rgba(250, 231, 126, 0.562);">
		<div class="container-fliud">
			<div class="wrapper row">
				<div class="preview col-md-6" style="max-height: 400px;">
					
				<div class="preview-pic tab-content">
					<div class="tab-pane active" id="pic-1"><img src="images/book_cover/c<?php echo(rand(1,10)); ?>.jpg"></div>
				</div>
					
					
				</div>
				<div class="details col-md-6">
					<h3 class="product-title"><?php echo $row['b_name']; ?></h3>
					<div class="rating">
						<span class="review-no">Written By <?php echo $row['aut']; ?><br></span>
						<span class="review-no">Document Type: <?php echo $row['tp']; ?><br></span>
						<span class="review-no"><?php echo $a; ?> Document(s) Available<br></span>
					</div>
					<p class="product-description"><?php echo $row['dscp']; ?></p>
					
				</div>
			</div>
				<div class="row">
				
					<h3 style="margin: 20px 0 0 0; font-size: 30px; text-align: center; font-weight: bold;width: 100%;">Download Option</h3>
					
					<div class="card mt-3 col-sm-12" style="padding: 10px 10px 0 10px;overflow-y: scroll;overflow-x: hidden; height: 540px;background-color: rgba(250, 231, 126, 0.788);">
					  
					  <?php 
						while($row1=mysqli_fetch_assoc($stmt1)){
							$v=$row1['var'];
							$sql2="SELECT * FROM `d_count` WHERE b_name='$bn' AND var='$v'";
							$stmt2=mysqli_query($conn, $sql2);
							$a=mysqli_num_rows($stmt2);
					  ?>
					  <!--iteration-->
					  <div class="row"> 
						<div class="mb-1 service-block-two col-lg-12 col-md-12 col-sm-12">
						   
						  <div class="inner-box">
								<div><img class="list_image" src="images/book_cover/c<?php echo(rand(1,10)); ?>.jpg" alt="<?php echo $row1['var']; ?>" /></div>
								<div class="shape-one"></div>
								<div class="shape-two"></div>
								<h5 class="text"><?php echo $row1['var']; ?></h5>
								<div class="text list_details" ><?php echo $row1['des']; ?></div>
						  		<div class="row"><div class="col-sm-6">
								<i class="ml-3 font-weight-bold text ti-download" style="font-size:large;"> <?php echo $a; ?></i>
								<i class="ml-3 font-weight-bold text ti-star"style="font-size:large;"> <?php echo $row1['rate']; ?></i>
								<a class="text ml-4" href="doc/d<?php echo(rand(1,10)); ?>.pdf" download><button class="btn btn-success" style="max-height:30px;max-width: 120px;padding: 2px;" type="button">DOWNLOAD</button></a>
								
								</div>
								<div class="pl-0 pr-0 text col-sm-6" style="height: 32px;">
									<div class="pl-0 pr-0 container d-flex justify-content-center mt-200">
										<a class="font-weight-bold text pl-0 pr-0 pt-2" style="font-size:large;">Rate it:</a>
												<div class="stars">
													<form action="#" method="post">
														<input class="star star-5" id="star-5" type="submit" value="5" name="star" /> <label class="star star-5" for="star-5"></label>
														<input class="star star-4" id="star-4" type="submit" value="4" name="star" /> <label class="star star-4" for="star-4"></label>
														<input class="star star-3" id="star-3" type="submit" value="3" name="star" /> <label class="star star-3" for="star-3"></label> 
														<input class="star star-2" id="star-2" type="submit" value="2" name="star" /> <label class="star star-2" for="star-2"></label> 
														<input class="star star-1" id="star-1" type="submit" value="1" name="star" /> <label class="star star-1" for="star-1"></label> 
													</form>
												</div>
									</div>									
								</div>
							
							</div>

							</div>
						</div>
					  </div>
					  <!--iteration-->
					  <?php } ?>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="container">
					<div class="card" style="padding: 10px 100px; background-color: rgba(250, 186, 126, 0.562);">
						<div class="container-fliud">
							<h6 style="text-align: center;font-weight: bold;font-size: x-large;">Upload File</h6>
							<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
								<input type="hidden" name="bname" value="<?php echo $bn; ?>">
								<span class="row">
									<span class="col-sm-7" style="padding:0;">
										<span class="mt-4" style="font-weight:bold;">Book's Verity: </span>
										<input class="mt-4" Style="width:70%; border: solid 2px rgb(117, 34, 14);" type="text" name="var">
										<br>
										<span class="mt-4" style="font-weight:bold;">Book's Cover: </span>
										<input class="mt-4" Style="border: dotted 4px rgb(117, 34, 14);padding:10px;" type="file" name="cf" id="cf">
									</span>
									<span class="col-sm-5" style="padding:0;">
										<p class="mt-4" style="font-weight:bold;">Book's Description: </p>
										<input class="mt-2" Style="width:100%; height:60%; border: solid 2px rgb(117, 34, 14);" type="text" name="des">
										
									</span>
								</span>
								<span class="row">
								<span class="mt-4" style="font-weight:bold;">Upload <br>Your Book:</span>
									<input class="col-sm-7 ml-4 mt-4 mb-4" Style="border: dotted 4px rgb(117, 34, 14);padding:10px;" type="file" name="af" id="cf">
									<input class="col-sm-2" style="margin: 24px 0 24px 50px; padding-top: 7px; border-radius: 10px; border: none; font-size: x-large; color: white; background: rgb(21, 179, 0);width: 280px; height: 56px;" type="submit" value="UPLOAD">
								</span>
							</form>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="container">
					<div class="card" style="padding: 10px 100px; background-color: rgba(250, 186, 126, 0.562);">
						<div class="container-fliud">
							<h6 style="text-align: center;font-weight: bold;font-size: x-large;">Comments</h6>
							<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
								<input type="hidden" name="bname" value="<?php echo $bn; ?>">
								<h6 class="row" style="font-weight: bold;font-size:large;">Add a Comment:</h6>
								<span class="row">
								<input class="col-sm-9" style="background-color: rgba(250, 235, 215, 0.658);" type="text" name="cmt" placeholder="Type your comment here. . . .">
								<span class="col-sm-1"></span>
								<button type="Submit" class="pt-2 col-sm-2 btn btn-warning text-color2" style="height:45px; font-weight: bolder;font-size:large;">POST</button>
								</span>
							</form>
							<hr size="5">



							<?php
								$sql3="SELECT * FROM `cmt` WHERE b_name='$bn' ORDER BY `time` DESC";
								$stmt3=mysqli_query($conn,$sql3);
								while($row3=mysqli_fetch_assoc($stmt3)){
									$b=$row3['c_by'];
									$sql4="SELECT `pic`,`name` FROM `user` WHERE p_num='$b'";
									$stmt4=mysqli_query($conn,$sql4);
									$row4=mysqli_fetch_assoc($stmt4);
							?>
							<!--Iteration start-->
							<span class="row" style="border-radius: 10px; padding: 10px; overflow: hidden; max-height: 200px; background-color: rgba(165, 122, 42, 0.63);">
								<img class="col-sm-3 pl-0 pr-0" src="images/man_cover/c<?php echo(rand(1,10)); ?>.png" style="height:100px;width:100px;">
								<span class="col-sm-9">
									<span style="font-size:large;font-weight: bold;"><?php echo $row4['name']; ?><span style="font-size:12px;float:right;">(Uploaded on: <?php echo $row3['time']; ?>)</span></span>
									<p><?php echo $row3['des']; ?></p>
								</span>
							</span>
							<hr>
							<!--iteration end-->
							<?php } ?>



						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>




</div>






<!-- footer Start -->
<footer class="footer section" >
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