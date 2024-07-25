<?php 
session_start();
include 'include/conn.php';
                    
	         
?>
<!doctype html>
<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo/pages-contact.html by HTTrack Website Copier/3.x [XR&CO'2017], Fri, 26 Feb 2021 19:00:06 GMT -->
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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
	#partition
{
    margin-top: 20px;
}

#partition .box
{

    float: left;
    width: 30%;
    padding:10px;
    text-align: center;
}
</style>
</head>
<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<?php include 'include/header1.php';?>
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
								<li><a href="pages-contact.php">contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Content
================================================== -->
<section id="partition">
        <div class="container" style="
	margin-left: 240px;">
            <div class="box">
                <i class="fa fa-map-marker fa-5x"></i>
                <h3 style="color:#2B65EC">Address</h3>
                <p>Quickgig , Gondal Road, Rajkot - 360020, Gujarat, India.</p>
            </div>
            <div class="box">
                <i class="fa fa-mobile fa-5x"></i>
                <h3 style="color:#2B65EC">Mobile</h3>
                <p>+91 7984331818</p>
            </div>
            <div class="box">
                <i class="fa fa-envelope fa-5x"></i>
                <h3 style="color:#2B65EC">Email ID</h3>
                <p>Quickgig@gmail.com</p>
            </div>
        </div>
    </section>
<br><br>
<!-- Container -->
<div class="container">
	<div class="row">

		
		<div class="col-xl-8 col-lg-8 offset-xl-2 offset-lg-2">

			<section id="contact" class="margin-bottom-60">
				<h3 class="headline margin-top-15 margin-bottom-35">Any questions? Feel free to contact us!</h3>

				<form method="post"  action="display.php" 	name="contactform" id="contactform" autocomplete="on">
					<div class="row">
						<div class="col-md-6">
							<div class="input-with-icon-left">
								<input class="with-border" name="yname" type="text" id="name" placeholder="Your Name" required="required" />
								<i class="icon-material-outline-account-circle"></i>
							</div>
						</div>

						<div class="col-md-6">
							<div class="input-with-icon-left">
								<input class="with-border" name="yemail" type="email" id="email" placeholder="Email Address" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" required="required" />
								<i class="icon-material-outline-email"></i>
							</div>
						</div>
					</div>

					<div class="input-with-icon-left">
						<input class="with-border" name="ysubject" type="text" id="subject" placeholder="Subject" required="required" />
						<i class="icon-material-outline-assignment"></i>
					</div>

					<div>
						<textarea class="with-border" name="comments" cols="40" rows="5" id="comments" placeholder="Message" spellcheck="true" required="required"></textarea>
					</div>

					<input type="submit	" class="submit button margin-top-15" id="submit" name="contact" />

				</form>
			</section>

		</div>

	</div>
</div>
<!-- Container / End -->

<!-- Footer
================================================== -->

<?php include 'include/footer.php'; ?>
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

<!-- Google API & Maps -->
<!-- Geting an API Key: https://developers.google.com/maps/documentation/javascript/get-api-key -->
<script src="../../../external.html?link=https://maps.googleapis.com/maps/api/js?key=AIzaSyAaoOT9ioUE4SA8h-anaFyU4K63a7H-7bc&amp;libraries=places"></script>
<script src="js/infobox.min.js"></script>
<script src="js/markerclusterer.js"></script>
<script src="js/maps.js"></script>

</body>

<!-- Mirrored from www.vasterad.com/themes/hireo/pages-contact.html by HTTrack Website Copier/3.x [XR&CO'2017], Fri, 26 Feb 2021 19:00:06 GMT -->
</html>