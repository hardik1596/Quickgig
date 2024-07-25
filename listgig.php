<?php session_start();
include 'include/conn.php';
if (!isset($_SESSION['uid'])) {
	header("location: pages-login.php");
}
$id=$_SESSION['uid'];
$sq="SELECT * FROM `user` WHERE  user_id='$id'";
$result=$con->query($sq);
$we=$result->fetch_object();
?>

<!doctype html>
<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo/dashboard-manage-jobs.html by HTTrack Website Copier/3.x [XR&CO'2017], Fri, 26 Feb 2021 18:59:48 GMT -->
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
<body class="gray">

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<?php include 'include/header1.php';?>
<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Dashboard Container -->
<div class="dashboard-container">

	<!-- Dashboard Sidebar
	================================================== -->
	<div class="dashboard-sidebar">
		<div class="dashboard-sidebar-inner" data-simplebar>
			<div class="dashboard-nav-container">

				<!-- Responsive Navigation Trigger -->
				<a href="#" class="dashboard-responsive-nav-trigger">
					<span class="hamburger hamburger--collapse" >
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</span>
					<span class="trigger-title">Dashboard Navigation</span>
				</a>
				
				<!-- Navigation -->
				<div class="dashboard-nav">
					<div class="dashboard-nav-inner">

						<ul data-submenu-title="Start">
							<li class="active"><a href="dashboard.php"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
							
							
						</ul>
						
						<ul data-submenu-title="Organize and Manage">
							<li><a href="#"><i class="icon-material-outline-business-center"></i> Jobs</a>
								<ul>
									<li><a href="listgig.php">Manage Jobs <span class="nav-tag">3</span></a></li>
									<li><a href="post-job.php">Post a Job</a></li>
								</ul>	
							</li>
							
						</ul>

						<ul data-submenu-title="Account">
							<li><a href="dashboard-settings.php"><i class="icon-material-outline-settings"></i> Settings</a></li>
							<li><a href="changepass.php"><i class="icon-material-outline-dashboard"></i> Change Password</a></li>
							<li><a href="logout.php"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
						</ul>
						
					</div>
				</div>
				<!-- Navigation / End -->

			</div>
		</div>
	</div>
	<!-- Dashboard Sidebar / End -->


	<!-- Dashboard Content
	================================================== -->
	<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Gig Manage</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="#">Dashboard</a></li>
						<li>Gig</li>
					</ul>
				</nav>
			</div>
	
			<!-- Row -->
			<div class="row">

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box margin-top-0">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-material-outline-business-center"></i> My Gigs Listings</h3>
						</div>

						<div class="content">
							<ul class="dashboard-box-list">
								<?php 
							                  
							                  $sql="SELECT * FROM `employee` where  user_id='$id'";
							                  $res=$con->query($sql);
							                  while ($re=$res->fetch_object()) 
							                    {
							                    	?>
								<li>
									<!-- Job Listing -->
									<div class="job-listing">

										<!-- Job Listing Details -->
										<div class="job-listing-details">

											<!-- Details -->
											<div class="job-listing-description">
												<h3 class="job-listing-title"><a href="#"><?php echo $re->gig_title; ?></a> </h3>

												<!-- Job Listing Footer -->
												<div class="job-listing-footer">
													<ul>
														<li><i class="icon-material-outline-date-range"></i> Posted on 16 May, 2019</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<form action="display.php">
										<div class="buttons-to-right always-visible" style="display: flex;">
										<a class="button gray ripple-effect ico" href="edit-gig.php?edit=<?php echo $re->e_id; ?>"><i class="icon-feather-edit"></i></a>
										<a class="button gray ripple-effect ico" href="display.php?did=<?php echo $re->e_id; ?>"><i class="icon-feather-trash-2"></i></a>
									</div>
										
									</form>
								</li>
								<?php } ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- Row / End -->

			<!-- Footer -->
			<div class="dashboard-footer-spacer"></div>
			<div class="small-footer margin-top-15">
				<div class="small-footer-copyrights">
					© 2019 <strong>Hireo</strong>. All Rights Reserved.
				</div>
				<ul class="footer-social-links">
					<li>
						<a href="#" title="Facebook" data-tippy-placement="top">
							<i class="icon-brand-facebook-f"></i>
						</a>
					</li>
					<li>
						<a href="#" title="Twitter" data-tippy-placement="top">
							<i class="icon-brand-twitter"></i>
						</a>
					</li>
					<li>
						<a href="#" title="Google Plus" data-tippy-placement="top">
							<i class="icon-brand-google-plus-g"></i>
						</a>
					</li>
					<li>
						<a href="#" title="LinkedIn" data-tippy-placement="top">
							<i class="icon-brand-linkedin-in"></i>
						</a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<!-- Footer / End -->

		</div>
	</div>
	<!-- Dashboard Content / End -->

</div>
<!-- Dashboard Container / End -->

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

<!-- Mirrored from www.vasterad.com/themes/hireo/dashboard-manage-jobs.html by HTTrack Website Copier/3.x [XR&CO'2017], Fri, 26 Feb 2021 18:59:48 GMT -->
</html>