<!DOCTYPE html>

<?php

	include "config.php";
    $menuActive_about = "active";
    define("MY_INC_CODE", 888);
    define("APPLICATION_PATH", "app");
    define("VIEW_PATH", APPLICATION_PATH . "/view");
    include (APPLICATION_PATH . "/inc/config.inc.php");
?>

<html lang="en">
<head>

<title> GER GARAGE </title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="css/slider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
	<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>

	<!----- Scroll top --------->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>

	<!-----End  Scroll top --------->

	<script type="text/javascript">
		$(window).load(function () {
			$('#slider').nivoSlider();
		});
	</script>
	<style type="text/css">
		< !-- .style1 {
			color: #CCCCCC;
			font-weight: bold;
			font-family: Arial, Helvetica, sans-serif;
			font-size: 20px;
		}
	</style>
    
</head>
        
<!-- HEADER ------------------------------------------------>
        
<body>
	<link href="/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="/css/slider.css" type="text/css" media="screen" />
	<style type="text/css">
		< !-- .style1 {
			color: #CCCCCC;
			font-weight: bold;
			font-family: Arial, Helvetica, sans-serif;
			font-size: 22px;
		}

		-->
	</style>
	<script type="text/javascript" src="/js/jquery-1.9.0.min.js"></script>
	<script type="text/javascript" src="/js/jquery.nivo.slider.js"></script>
	<script type="text/javascript" src="/js/move-top.js"></script>
	<script type="text/javascript" src="/js/easing.js"></script>
	<script type="text/javascript">
		$(window).load(function () {
			$('#slider').nivoSlider();
		});
	</script>
	<!----- presentation menu --------->
	<div class="header">
		<div class="header_top">
			<div class="wrap">
				<div class="logo">
					<a href="/index.html"><img src="img/logo.png" alt="" /></a>
				</div>
				<div class="logo2">
					<p align="center"><a href="/index.html" class="style1"> GER GARAGE </a> </p>
				</div>
				<div class="dail">
					<h4>Call us Now!</h4>
					<p><img src="/images/mobile.png">+353 89 974 1520</p>
				</div>
				<div class="clear"></div>
			</div>
		</div>

		<div class="header-bottom">
			<div class="wrap">
				<div class="menu">
					<ul>
						<li><a href="Index.html">Home</a></li>
						<li><a href="aboutus.html">About Us</a></li>
						<li><a href="services.html">Services</a></li>
						<li><a href="contactus.html">Contact us</a></li>
						<li><a href="Bookings.php">Bookings</a></li>
						<li><a href="adminpage.php">Administrator</a></li>
						<div class="clear"></div>
					</ul>
				</div>
				<div class="social-icons">
					<ul>
						<li><a class="facebook" href="#" target="_blank"> </a></li>
						<li><a class="twitter" href="#" target="_blank"></a></li>
						<li><a class="googleplus" href="#" target="_blank"></a></li>
						<li></li>
						<li></li>
						<div class="clear"></div>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<!----- end presentation menu --------->


	<!----- MAIN content--------->

	<main class="margin-top-6 horizontal-center">
		<div class="container">
			<br>
			<section id="featured">

				<!-- ROW 1 -->
				<div class="row">
					<div class="col-sm-6">
						<br>
						<p></p>
						<div class="container">
							<h2>Login</h2>

							<form action="login_check.php" method="POST" id="formlogin" name="formlogin" >
								<div class="form-group">
									<label for="username">Username:</label>
									<input type="text" class="form-control" id="username" placeholder="Enter Username" name="username">
								</div>
								<div class="form-group">
									<label for="pwd">Password:</label>
									<input type="password" class="form-control" id="password" placeholder="Enter password" 
										name="password">
								</div>
								<div class="checkbox">
									<label><input type="checkbox" name="remember"> Remember me</label>
								</div>
								<br>
								<br>
								<button type:"submit" class="button button-icon button-icon-demo"  name="enter" id="enter" >Submit</button>	
								<br>			
								<br>
								<br>
							</form>
							<h6>If you are not user, sing up</h6>
						</div>
					</div>
					<div class="col-sm-6">
						<h2>Sing up</h2>

						<form action="validation.php" method="POST" method="POST">
						<div class="form-group">
								<label for="name">*Full Name:</label>
								<input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
							</div>
							<div class="form-group">
								<label for="username">*Username:</label>
								<input type="text" class="form-control" id="username" placeholder="Enter Username" name="username">
							</div>

							<div class="form-group">
								<label for="Address">*Address:</label>
								<input type="text" class="form-control" id="address" placeholder="Enter Address" name="address">
							</div>

							
							<div class="form-group">
								<label for="city">*City:</label>
								<input type="text" class="form-control" id="city" placeholder="City" name="city">
							</div>

							<div class="form-group">
								<label for="Postcode">*Postcode:</label>
								<input type="text" class="form-control" id="postCode" placeholder="Postcode" name="postCode">
							</div>

							<div class="form-group">
								<label for="phonenumber">*Phone Number:</label>
								<input type="text" class="form-control" id="phoneNumber" placeholder="Phone Number" name="phonenumber">
							</div>

							<div class="form-group">
								<label for="Email">*E-mail:</label>
								<input type="text" class="form-control" id="email" placeholder="Enter Email" name="email">
							</div>
							<div class="form-group">
								<label for="pwd">*Password:</label>
								<input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
							</div>
							<div class="form-group">
								<label for="rpassword">*Reapet Password:</label>
								<input type="password" class="form-control" id="rpassword" placeholder="Enter password" name="rpassword">
							</div>
							<h6>* All thoses fields can not be empty</h6>
							<input type="submit" class="button button-icon button-icon-demo" value="Submit"  name="submt" id="submit">
						</form>
					</div>

				</div>

			</section>
		</div>
	</main>



	<!----- end MAIN CONTENT--------->

	<!---- footer---->

	<div class="footer">
        <hr>
		<div class="wrap">
			<div class="footer_grides">
                <div class="row">
                    
				<div class="col-sm">
					<h3>Social Media</h3>
					<div class="social_icons">
						<ul>
							<li><a href="#" class="facebook">
									<span class="icon"> &nbsp;</span> <span class="inner"><strong>Facebook</strong></span></a></li>
							<li><a href="#" class="twitter">
									<span class="icon"> &nbsp;</span> <span class="inner"><strong>Twitter</strong></span></a></li>
							<li><a href="#" class="rss">
									<span class="icon"> &nbsp;</span> <span class="inner"><strong>LINKEDIN</strong></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm">
					<h3>Menu</h3>
					<ul>
						<li><a href="/index.php">Home</a></li>
						<li><a href="/aboutus.html">About us</a></li>
						<li><a href="/services.php">Services</a></li>
						<li><a href="/products.php">Products</a></li>
						<li><a href="/contact.php">Contact us</a></li>
						<li><a href="/invoices.php">Invoices</a></li>
					</ul>
				</div>
				<div class="col-sm">
					<h3>Where we are</h3>
					<ul>
						<li>302, South Circular Road</li>
						<li>Dublin 08</li>
						<li>Liesten - Ireland</li>
						<li><span>E-mail :</span> contact@gergarage.ie</li>
						<li><span>Mobile :</span> +353 0899 741 520</li>
						<li><span>Phone :</span> (1) 335 225 91</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
        </div>
	<!------------ scroll Top ------------>
	<script type="text/javascript">
		$(document).ready(function () {
			/*
			var defaults = {
	  			containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
	 		};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

		});
	</script>
	<a href="#" id="toTop"><span id="toTopHover"> </span></a>
	<!------------ End scroll Top ------------>
</body>

</html>