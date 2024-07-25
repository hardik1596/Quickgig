<?php 

session_start();
include 'include/conn.php';

$id = $_GET['id'];
$sql= "SELECT * FROM `user` WHERE user_id='$id'";
		$res=$con->query($sql);
	    $re= mysqli_fetch_assoc($res);
        
?>
<!doctype html>
<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo/single-freelancer-profile.html by HTTrack Website Copier/3.x [XR&CO'2017], Fri, 26 Feb 2021 18:59:46 GMT -->
<head>

<!-- Basic Page Needs
================================================== -->
<title>Hireo</title>
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
<?php 
include 'include/header1.php';
?>
<div class="clearfix"></div>
<!-- Header Container / End -->



<!-- Titlebar
================================================== -->
<div class="single-page-header freelancer-header" data-background-image="images/single-freelancer.jpg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="single-page-header-inner">
					<div class="left-side">
						<div class="header-image freelancer-avatar"><img src="upload/<?php echo $re['profile'] ?>" alt=""></div>
						<div class="header-details">
							<h3><?php echo $re['fname']." ".$re['lname'] ?></h3>
							<ul>
								<li><div class="star-rating" data-rating="5.0"></div></li>
								<li> india</li>
								<li><div class="verified-badge-with-title">Verified</div></li>
							</ul>
						</div>
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
			
			<!-- Page Content -->
			

			<!-- Boxed List -->
			<div class="boxed-list margin-bottom-60">
				<div class="boxed-list-headline">
					<h3><i class="icon-material-outline-thumb-up"></i> Work History and Feedback</h3>
				</div>
				<ul class="boxed-list-ul">
					<?php 


  $sql="SELECT * FROM `employee` where  user_id='$id'";
							                  $res=$con->query($sql);
							                  while ($re=$res->fetch_object()) 
							                    {
					 ?>
					<li>
						<div class="boxed-list-item">
							<!-- Content -->
							<div class="item-content">
								<h4><?php echo  $re->gig_title ?></h4>
								<div class="item-details margin-top-10">
									<div class="star-rating" data-rating="5.0"></div>
									<div class="detail-item"><i class="icon-material-outline-date-range"></i> August 2019</div>
								</div>
								<div class="item-description">
									<p><?php echo $re->description; ?> </p>
								</div>
							</div>
						</div>
					</li>
					<?php } ?>
				</ul>

				<!-- Pagination -->
				<div class="clearfix"></div>

				<div class="clearfix"></div>
				<!-- Pagination / End -->

			</div>
			<!-- Boxed List / End -->
			
			<!-- Boxed List -->
			
			<!-- Boxed List / End -->

		</div>
		

		<!-- Sidebar -->
		

	</div>
</div>


<!-- Spacer -->
<div class="margin-top-15"></div>
<!-- Spacer / End-->

<!-- Footer
================================================== -->
<?php include 'include/footer.php'; ?>
<!-- Footer / End -->

</div>
<!-- Wrapper / End -->


<!-- Make an Offer Popup
================================================== -->
<div id="small-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

	<!--Tabs -->
	<div class="sign-in-form">

		<ul class="popup-tabs-nav">
			<li><a href="#tab">Make an Offer</a></li>
		</ul>

		<div class="popup-tabs-container">

			<!-- Tab -->
			<div class="popup-tab-content" id="tab">
				
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>Discuss your project with David</h3>
				</div>
					
				<!-- Form -->
				<form method="post">

					<div class="input-with-icon-left">
						<i class="icon-material-outline-account-circle"></i>
						<input type="text" class="input-text with-border" name="name" id="name" placeholder="First and Last Name"/>
					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="text" class="input-text with-border" name="emailaddress" id="emailaddress" placeholder="Email Address"/>
					</div>

					<textarea name="textarea" cols="10" placeholder="Message" class="with-border"></textarea>

					<div class="uploadButton margin-top-25">
						<input class="uploadButton-input" type="file" accept="image/*, application/pdf" id="upload" multiple/>
						<label class="uploadButton-button ripple-effect" for="upload">Add Attachments</label>
						<span class="uploadButton-file-name">Allowed file types: zip, pdf, png, jpg <br> Max. files size: 50 MB.</span>
					</div>

				</form>
				
				<!-- Button -->
				<button class="button margin-top-35 full-width button-sliding-icon ripple-effect" type="submit">Make an Offer <i class="icon-material-outline-arrow-right-alt"></i></button>

			</div>
			<!-- Login -->
			<div class="popup-tab-content" id="loginn">
				
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>Discuss Your Project With Tom</h3>
				</div>
					
				<!-- Form -->
				<form method="post" id="make-an-offer-form">

					<div class="input-with-icon-left">
						<i class="icon-material-outline-account-circle"></i>
						<input type="text" class="input-text with-border" name="name2" id="name2" placeholder="First and Last Name" required/>
					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="text" class="input-text with-border" name="emailaddress2" id="emailaddress2" placeholder="Email Address" required/>
					</div>

					<textarea name="textarea" cols="10" placeholder="Message" class="with-border"></textarea>

					<div class="uploadButton margin-top-25">
						<input class="uploadButton-input" type="file" accept="image/*, application/pdf" id="upload-cv" multiple/>
						<label class="uploadButton-button" for="upload-cv">Add Attachments</label>
						<span class="uploadButton-file-name">Allowed file types: zip, pdf, png, jpg <br> Max. files size: 50 MB.</span>
					</div>

				</form>
				
				<!-- Button -->
				<button class="button full-width button-sliding-icon ripple-effect" type="submit" form="make-an-offer-form">Make an Offer <i class="icon-material-outline-arrow-right-alt"></i></button>

			</div>

		</div>
	</div>
</div>
<!-- Make an Offer Popup / End -->



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

</body>

<!-- Mirrored from www.vasterad.com/themes/hireo/single-freelancer-profile.html by HTTrack Website Copier/3.x [XR&CO'2017], Fri, 26 Feb 2021 18:59:47 GMT -->
</html>