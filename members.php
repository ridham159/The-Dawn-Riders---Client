<?php

	session_start();

	$_SESSION['thedawnriders']='members';

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

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

	<!-- Start header -->
	<?php include "header.php"; ?>
	<!-- End header -->
	
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Our Members</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Stuff -->
	<div class="stuff-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="our-team">
						<img src="images/stuff-img-01.jpg">
						<div class="team-content">
							<h3 class="title">Ridham Gandhi</h3>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-6">
					<div class="our-team">
						<img src="images/stuff-img-02.jpg">
						<div class="team-content">
							<h3 class="title">Abc Xyz</h3>
						</div>
					</div>
				</div>
                				
				<div class="col-md-4 col-sm-6">
					<div class="our-team">
						<img src="images/stuff-img-01.jpg">
						<div class="team-content">
							<h3 class="title">Def Ghi</h3>
						</div>
					</div>
				</div>				
			</div>
		</div>
	</div>
	<!-- End Stuff -->

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