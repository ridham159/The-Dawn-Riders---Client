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
	
	
    <!--/ Section Blog-Single Star /-->
  <section class="blog-wrapper sect-pt4" id="blog" style="padding-left: 25%;">
    <div class="container" style="padding-right: 50 px ;">
      <div class="row">
        <div class="col-md-8">
          <div class="post-box">
            <div class="post-meta">
              <h1 class="article-title">Why Chatbot is Future?</h1>
              <ul>
                <li>
                  <a> Post By Ridham Gandhi</a>
                </li>
              </ul>
            </div>
            <div class="article-content">

              <p style=" text-align: justify;">
                There are many ways to do digital marketing.  
                During the survey(For email marketing) 20-30% of people open the mail and 5- 10% of people click on the website or content. In comparison to that Chatbot, marketing is very effective because according to a survey it’s success ratio is 50- 60%.
                 Messenger and even after Facebook bought Whats app, they started WhatsApp business in 2018. Like this many, more applications give an opportunity to marketers for marketing.
                 The main purpose of this kind of marketing is personally engaging with the customer or user. It helps in lead generation and promotes our product.
                It is very effective rather than email marketing and other strategies.                
              </p>
             
              <blockquote style=" text-align: justify;" class="blockquote">
                <p class="mb-0">If the developer of the chatbot is available and he/she wants to talk with the customer directly then he/she can interrupt between the talk and communicate. 
                    Users always attract with direct talk and short messages. So, keep it in mind.
                    </p>
              </blockquote>
              
 			        <p style=" text-align: justify;">
                There are mainly 2 types to create a chatbot. 
                (1.)  (a) Flow Base chatbot -: It mainly works on a flow that is predefined by a creator or in the language of the corporate world say that define by a client. 
                       (b) Keyword Base chatbot -: the user talks with the robot or say Algorithm. So, if the robot finds the keyword matching of user message it goes into pre-defined functions, search for that and at the end answers that question. If the robot is not capable to find out the keyword then it returns developer pre define error answer.
              </p>
                           
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Section Blog-Single End /-->

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