<?php 
session_start();
include 'include/conn.php';
                    
	         
?>
<!doctype html>
<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2017], Fri, 26 Feb 2021 19:00:05 GMT -->
<head>

<!-- Basic Page Needs
================================================== -->
<title>Quickgig</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/colors/blue.css">

</head>
<body>

<!-- Wrapper -->
<div id="wrapper">

<?php include 'include/header.php';?>
<!-- Header Container / End -->

<!-- Titlebar
================================================== -->

<div id="titlebar" class="gradient">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Log In</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li>Log In</li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
</div>


<!-- Page Content
================================================== -->
<div class="container">
	<div class="row">
		<div class="col-xl-5 offset-xl-3">


			<div class="login-register-page">
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>We're glad to see you again!</h3>
					<span>Don't have an account? <a href="pages-register.php">Sign Up!</a></span>
				</div>
					
				<!-- Form -->
				<form method="post" id="login-form" action="display.php">
					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="text" class="input-text with-border" name="user" id="emailaddress" placeholder="Email Address" required/ >
					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-outline-lock"></i>
						<input type="password" class="input-text with-border" name="password" id="password" placeholder="Password" required/>
					</div>
					<button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit" form="login-form" name="login">Log In <i class="icon-material-outline-arrow-right-alt"></i></button>
					<div class="border-top card-body text-center">if you are admin than <a href="adinlog.php">Log In</a></div>
</div>
				</form>
				
				<!-- Button -->
				
				
				<!-- Social Login -->
				
			</div>

		</div>
	</div>
</div>


<!-- Spacer -->
<div class="margin-top-70"></div>
<!-- Spacer / End-->
<?php
include 'include/footer.php';
 ?>
<!-- Footer / End -->

</div>
<!-- Wrapper / End -->

<!-- Scripts
================================================== -->
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/jquery-migrate-3.1.0.min.html"></script>
<script src="js/mmenu.min.js"></script>
<script src="js/tippy.all.min.js"></script>
<script src="js/simplebar.min.js"></script>
<script src="js/bootstrap-slider.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/snackbar.js"></script>
<script src="js/clipboard.min.js"></script>
<script src="js/counterup.min.js"></script>
<script src="js/magnific-popup.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/custom.js"></script>

<!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
<script>
// Snackbar for user status switcher
$('#snackbar-user-status label').click(function() { 
	Snackbar.show({
		text: 'Your status has been changed!',
		pos: 'bottom-center',
		showAction: false,
		actionText: "Dismiss",
		duration: 3000,
		textColor: '#fff',
		backgroundColor: '#383838'
	}); 
}); 
</script>

</body>

<!-- Mirrored from www.vasterad.com/themes/hireo/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2017], Fri, 26 Feb 2021 19:00:06 GMT -->
</html>