	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container" style="margin-top:-17px;margin-bottom:-15px;">
				<a class="navbar-brand" href="index.php">
					<img style="height:120px;width:120px;" src="images/logo.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
                    
                    <!--<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>--->
					
                    	<li class="nav-item"><a class="nav-link" href="index" <?php if($_SESSION['thedawnriders']=='home') echo "class='active'"; ?>>Home</a></li>
						<li class="nav-item"><a class="nav-link" href="about" <?php if($_SESSION['thedawnriders']=='about') echo "class='active'"; ?>>About</a></li>
                        <li class="nav-item"><a class="nav-link" href="members" <?php if($_SESSION['thedawnriders']=='members') echo "class='active'"; ?>>Members</a></li>
                        <li class="nav-item"><a class="nav-link" href="event-list" <?php if($_SESSION['thedawnriders']=='event') echo "class='active'"; ?>>Event</a></li>
                        <li class="nav-item"><a class="nav-link" href="gallery" <?php if($_SESSION['thedawnriders']=='gallery') echo "class='active'"; ?>>Gallery</a></li>
                        <li class="nav-item"><a class="nav-link" href="blog" <?php if($_SESSION['thedawnriders']=='blog') echo "class='active'"; ?>>Blog</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact" <?php if($_SESSION['thedawnriders']=='contact') echo "class='active'"; ?>>Contact Us</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown" <?php if($_SESSION['thedawnriders']=='login/signup') echo "class='active'"; ?>>Login/SignUp</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
	                            <a class="dropdown-item" href="signup">SignUp</a>
								<a class="dropdown-item" href="login">Login</a>							
							</div>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->