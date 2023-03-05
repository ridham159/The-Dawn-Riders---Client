<?php

	session_start();

	$_SESSION['thedawnriders']='blog';

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


  <!-- Bootstrap CSS File -->
  <link href="css/blog.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style1.css" rel="stylesheet">

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
					<h1>Blog</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
    
    
 <!--/ Section Blog Star /-->
  <section id="blog" class="blog-mf sect-pt4 route">
    <div class="container">
      
      <div class="row">
        <div class="col-md-4">
          <div class="card card-blog">
            <div class="card-img">
              <a href="blog-details"><img src="images/test.jpg" style="height: 231px; width: 348px;" alt="Chatbot" class="img-fluid"></a>
            </div>
            <div class="card-body">
              <h3 class="card-title"><a href="blog-details">Why Chatbot is Future?</a></h3>
              <p class="card-description" style=" text-align: justify;">
                Chatbots are small computer programs used to simulate the method of human conversation and interact with real people automatically to help them with their issues and complete their tasks.
              </p>
              <button type="button" style="margin-left:34%; margin-top:10px; font-size: 18px; background-color:#F39C12; border-radius: 8px;"><a href="blog-details">Read More</a>
            </div>
            
            <div class="card-footer">
              <div class="post-author">
                <a href="blog-detail">
                  <span class="author">Ridham Gandhi</span>
                </a>
              </div>
              <div class="post-date">
                <span class="ion-ios-clock-outline"></span> 10 Days Ago 
              </div>
            </div>
          </div>
        </div>
    </div>
  </section>
  <!--/ Section Blog End /-->

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