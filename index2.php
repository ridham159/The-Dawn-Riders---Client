<?php

	session_start();

	$_SESSION['thedawnriders']='home';

?>

<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Yamifood Restaurant - Responsive HTML5 Template</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

</head>

<body>
	<!-- Start header -->
	<?php include "header.php"; ?>
	<!-- End header -->
	
	<!-- Start slides -->
	<div id="slides" class="cover-slides">
		<ul class="slides-container">
			<li class="text-center">
				<img src="images/slider-01.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12" style="margin-top:200px;">
							<h1 class="m-b-20"><strong>Welcome To <br> The Dawn Riders</strong></h1>
<!--							<p class="m-b-40">See how your users experience your website in realtime or view  <br> 
							trends to see any changes in performance over time.</p>-->
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="signup">Join Us</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-center">
				<img src="images/slider-02.jpg" alt="">
				<div class="container">
					<div class="row">
<div class="col-md-12" style="margin-top:200px;">
							<h1 class="m-b-20"><strong>Welcome To <br> The Dawn Riders</strong></h1>
<!--							<p class="m-b-40">See how your users experience your website in realtime or view  <br> 
							trends to see any changes in performance over time.</p>-->
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="signup">Join Us</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-center">
				<img src="images/slider-03.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12" style="margin-top:200px;">
							<h1 class="m-b-20"><strong>Welcome To <br> The Dawn Riders</strong></h1>
<!--							<p class="m-b-40">See how your users experience your website in realtime or view  <br> 
							trends to see any changes in performance over time.</p>-->
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="signup">Join Us</a></p>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<div class="slides-navigation">
			<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
		</div>
	</div>
	<!-- End slides -->
	

    
	<!-- Start About -->
	<div class="about-section-box">
		<div class="container">
        
        <p style="margin-top:-10px; text-align:center; color:#f39c12; font-size:45px; font-weight:600;">Check out our previous event </p>	
        	<hr style="width:25%; margin-left:38%; height:5px; border-width:0; color:black; background-color:black;">
        
			<div class="row" style="margin-top:70px;">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img src="images/about-img.jpg" alt="" class="img-fluid">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 text-center">
					<div class="inner-column">
						<h1>Trip To <span>The GOA</span></h1>
						<h2 style="font-weight:500;">26 January 2021</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor suscipit feugiat. Ut at pellentesque ante, sed convallis arcu. Nullam facilisis, eros in eleifend luctus, odio ante sodales augue, eget lacinia lectus erat et sem. Sed semper orci sit amet porta placerat. Etiam quis finibus eros. Sed aliquam metus lorem, a pellentesque tellus pretium a. Nulla placerat elit in justo vestibulum, et maximus sem pulvinar.</p>
						
                        <a class="btn btn-lg btn-circle btn-outline-new-white" href="gallery">Check out our photos</a>
					
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- End About -->

	<!-- Contact Footer -->
    <?php include "contactfooter.php"; ?>
    <!-- Contact Footer End-->
	
    <!-- Footer -->
    <?php include "footer.php"; ?>
    <!-- Footer End-->
    
    
	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>