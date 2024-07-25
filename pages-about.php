<?php 
session_start();
include 'include/conn.php';
                    
	         
?>
<!doctype html>
<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo/single-company-profile.html by HTTrack Website Copier/3.x [XR&CO'2017], Fri, 26 Feb 2021 18:59:45 GMT -->
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

<!-- Header Container
================================================== -->
<?php include 'include/header1.php'; ?>
<div class="clearfix"></div>
<!-- Header Container / End -->



<!-- Titlebar
================================================== -->
<div class="single-page-header" data-background-image="images/single-company.jpg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="single-page-header-inner">
				
					<div class="right-side">
						<!-- Breadcrumbs -->
						<nav id="breadcrumbs" class="white">
							<ul>
								<li><a href="index.php">Home</a></li>
								<li><a href="pages-about.php">about us</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Page Content
================================================== -->
<div class="container">
	<div class="row">
		
		<!-- Content -->
		<div class="col-xl-8 col-lg-8 content-right-offset">

			<div class="single-page-section">
				<h3 class="margin-bottom-25">About Quickgig</h3>
				<p>At Quickgig.com, we are on a mission to build a global community of Trusted Freelancers.

Quickgig.com is an Online Platform for Employers to Hire Professionals to get their work done and Freelancers and Professionals can Search Jobs and Earn money by working with real clients across the world.

</p>

				<p>Customers can find Developers, Designers, Content Writers, Virtual Assistants, Mobile App Developer and many other professionals.

Projects on various categories like IT & Programming, Graphic Design, Content Writing, Data Entry, Finance, Sales, Marketing and many more can be posted and found on Quickgig.com

Creating an account, finding work or posting a project is free of cost on Quickgig.com</p>
<p>To contact Us <a href="pages-contact.php" >Click Here</a></p>
			</div>
			<div>
				
				
			</div>
			

		</div>
		


	</div>
</div>


<!-- Spacer -->
<div class="margin-top-15"></div>
<!-- Spacer / End-->
<?php include 'include/footer.php' ?>
</div>
<!-- Wrapper / End -->


<!-- Leave a Review Popup
================================================== -->
<div id="small-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

	<!--Tabs -->
	<div class="sign-in-form">

		<ul class="popup-tabs-nav">
			<li><a href="#tab">Leave a Review</a></li>
		</ul>

		<div class="popup-tabs-container">

			<!-- Tab -->
			<div class="popup-tab-content" id="tab">
				
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>What is it like to work at Acodia?</h3>
					
				<!-- Form -->
				<form method="post" id="leave-company-review-form">

					<!-- Leave Rating -->
					<div class="clearfix"></div>
					<div class="leave-rating-container">
						<div class="leave-rating margin-bottom-5">
							<input type="radio" name="rating" id="rating-1" value="1" required>
							<label for="rating-1" class="icon-material-outline-star"></label>
							<input type="radio" name="rating" id="rating-2" value="2" required>
							<label for="rating-2" class="icon-material-outline-star"></label>
							<input type="radio" name="rating" id="rating-3" value="3" required>
							<label for="rating-3" class="icon-material-outline-star"></label>
							<input type="radio" name="rating" id="rating-4" value="4" required>
							<label for="rating-4" class="icon-material-outline-star"></label>
							<input type="radio" name="rating" id="rating-5" value="5" required>
							<label for="rating-5" class="icon-material-outline-star"></label>
						</div>
					</div>
					<div class="clearfix"></div>
					<!-- Leave Rating / End-->

				</div>


					<div class="row">
						<div class="col-xl-12">
							<div class="input-with-icon-left" title="Leave blank to add review anonymously" data-tippy-placement="bottom">
								<i class="icon-material-outline-account-circle"></i>
								<input type="text" class="input-text with-border" name="name" id="name" placeholder="First and Last Name"/>
							</div>
						</div>

						<div class="col-xl-12">
							<div class="input-with-icon-left">
								<i class="icon-material-outline-rate-review"></i>
								<input type="text" class="input-text with-border" name="reviewtitle" id="reviewtitle" placeholder="Review Title"  required/>
							</div>
						</div>
					</div>

					<textarea class="with-border" placeholder="Review" name="message" id="message" cols="7"  required></textarea>

				</form>
				
				<!-- Button -->
				<button class="button margin-top-35 full-width button-sliding-icon ripple-effect" type="submit" form="leave-company-review-form">Leave a Review <i class="icon-material-outline-arrow-right-alt"></i></button>

			</div>

		</div>
	</div>
</div>
<!-- Leave a Review Popup / End -->


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

// Snackbar for "place a bid" button
$('#snackbar-place-bid').click(function() { 
	Snackbar.show({
		text: 'Your bid has been placed!',
	}); 
}); 


// Snackbar for copy to clipboard button
$('.copy-url-button').click(function() { 
	Snackbar.show({
		text: 'Copied to clipboard!',
	}); 
}); 
</script>

<!-- Google API & Maps -->
<!-- Geting an API Key: https://developers.google.com/maps/documentation/javascript/get-api-key -->
<script src="../../../external.html?link=https://maps.googleapis.com/maps/api/js?key=AIzaSyAaoOT9ioUE4SA8h-anaFyU4K63a7H-7bc&amp;libraries=places"></script>
<script src="js/infobox.min.js"></script>
<script src="js/markerclusterer.js"></script>
<script src="js/maps.js"></script>

</body>

<!-- Mirrored from www.vasterad.com/themes/hireo/single-company-profile.html by HTTrack Website Copier/3.x [XR&CO'2017], Fri, 26 Feb 2021 18:59:46 GMT -->
</html>