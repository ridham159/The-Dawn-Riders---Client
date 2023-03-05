<?php

	session_start();

	$_SESSION['thedawnriders']='login/signup';

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
	<!-- SIgnup CSS -->
    <link rel="stylesheet" href="css/signup.css">  



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
					<h1>Membership SignUp Form</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Form Section-->

<section class="testimonial py-5" id="testimonial">
    <div class="container">
        <div class="row ">
            <div class="col-md-4 py-5 bg-primary text-white text-center ">
                <div class=" ">
                    <div class="card-body">
                        <img src="images/Login.jpg" style="width:80%">
                        <h2 class="py-3" style="font-weight:bold;"> Membership Registration</h2>
                        <p>Tation argumentum et usu, dicit viderer evertitur te has. Eu dictas concludaturque usu, facete detracto patrioque an per, lucilius pertinacia eu vel.

</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8 py-5 border">
                <h4 class="pb-4" style="font-weight:bold;font-size:24px;margin-left:20%;">PLEASE FILL WITH YOUR PERSONAL DETAILS</h4>
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <input id="Full Name" name="Full Name" placeholder="First Name" class="form-control" type="text">
                        </div>
                        <div class="form-group col-md-6">
                          <input id="Full Name" name="Full Name" placeholder="Last Name" class="form-control" type="text">
                        </div>
                        <div class="form-group col-md-6">
                          <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                          <input type="file" class="form-control" id="inputEmail4" placeholder="File">
                        </div>
                        <div class="form-group col-md-6">
                          <input type="date" class="form-control" id="inputEmail4" placeholder="Date Of Birth">
                        </div>
                         <div style="margin-top:13px;margin-left:15%;margin-bottom:20px;">                
								<div class="custom-control custom-radio custom-control-inline">
  								<input type="radio" class="custom-control-input" id="defaultInline2" name="inlineDefaultRadiosExample">
  								<label class="custom-control-label" for="defaultInline2">Male</label>
								</div>

								<div class="custom-control custom-radio custom-control-inline">
  								<input type="radio" class="custom-control-input" id="defaultInline3" name="inlineDefaultRadiosExample">
  								<label class="custom-control-label" for="defaultInline3">Female</label>
								</div>
						</div> 
                      </div>
                      
                    <div class="form-row">
                     <div class="form-group col-md-6">
                     <input id="Mobile No." name="Mobile No." placeholder="Primary Mobile No." class="form-control" required="required" type="text">
                     </div>
  					 <div class="form-group col-md-6">
                     <input id="Mobile No." name="Mobile No." placeholder="Secondary Mobile No." class="form-control" required="required" type="text">
                     </div>


                        <div class="form-group col-md-6">
                                  
                                  <select id="inputState" class="form-control">
                                    <option selected>Select Your Blood Group...</option>
                                    <option> A+ </option>
                                    <option> O+ </option>
                                    <option> B+ </option>
                                    <option> AB+ </option>
                                    <option> A- </option>
                                    <option> O- </option>
                                    <option> B- </option>
                                    <option> AB- </option>
                                  </select>
                        </div>
                        <div class="form-group col-md-6">
                                  
                                  <select id="inputState" class="form-control">
                                    <option selected>Select Royal Enfield Bike Model...</option>
                                    <option> CLASSIC 350 </option>
                                    <option> THUNDER BIRD </option>
                                    <option> HIMALAYAN </option>
                                    <option> CLASSIC 500 </option>
                                    <option> BULLET STANDARD </option>
                                    <option> OTHER </option>
                                  </select>
                        </div>
                   <div class="form-group col-md-6">
                   <input id="Mobile No." name="Mobile No." placeholder="Write The Address " class="form-control" required="required" type="text">
                   </div>
                    
                   <div class="form-group col-md-6">
                   <input id="Mobile No." name="Mobile No." placeholder="Type Your Password " class="form-control" required="required" type="password">
                   </div>
                   
             </div>
                   
                   
                    <div class="form-row" style="margin-left:10px;">
                        <div class="form-group">
                            <div class="form-group">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                  <label class="form-check-label" for="invalidCheck2">
                                    <small>By clicking Submit, you agree to our Terms & Conditions and Privacy Policy.</small>
                                  </label>
                                </div>
                              </div>
                    
                          </div>
                    </div>
                    
                    <div style="margin-left:40%;" class="form-row">
                        <button type="button" class="btn btn-danger">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- End Form Section -->
	
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