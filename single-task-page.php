<?php session_start(uid);
if (!isset($_SESSION('uid'))) {
	header("location: pages-login.php");
}

 ?>

<!doctype html>
<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo/single-task-page.html by HTTrack Website Copier/3.x [XR&CO'2017], Fri, 26 Feb 2021 18:59:42 GMT -->
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

<div class="clearfix"></div>
<!-- Header Container / End -->
<?php include 'include/header2.php'; ?>


<!-- Titlebar
================================================== -->
<div class="single-page-header" data-background-image="images/single-task.jpg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="single-page-header-inner">
					<div class="left-side">
						<div class="header-image"><a href="single-company-profile.html"><img src="images/browse-companies-02.png" alt=""></a></div>
						<div class="header-details">
							<h3>Food Delivery Mobile Application</h3>
							<h5>About the Employer</h5>
							<ul>
								<li><a href="single-company-profile.html"><i class="icon-material-outline-business"></i> Acue</a></li>
								<li><div class="star-rating" data-rating="5.0"></div></li>
								<li><img class="flag" src="images/flags/de.svg" alt=""> Germany</li>
								<li><div class="verified-badge-with-title">Verified</div></li>
							</ul>
						</div>
					</div>
					<div class="right-side">
						<div class="salary-box">
							<div class="salary-type">Project Budget</div>
							<div class="salary-amount">$2,500 - $4,500</div>
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
			
			<!-- Description -->
			<div class="single-page-section">
				<h3 class="margin-bottom-25">Project Description</h3>
				<p>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</p>

				<p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>

				<p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.</p>
			</div>

			<!-- Atachments -->
			<div class="single-page-section">
				<h3>Attachments</h3>
				<div class="attachments-container">
					<a href="#" class="attachment-box ripple-effect"><span>Project Brief</span><i>PDF</i></a>
				</div>
			</div>

			<!-- Skills -->
			<div class="single-page-section">
				<h3>Skills Required</h3>
				<div class="task-tags">
					<span>iOS</span>
					<span>Android</span>
					<span>mobile apps</span>
					<span>design</span>
				</div>
			</div>
			<div class="clearfix"></div>
			
			<!-- Freelancers Bidding -->
			<div class="boxed-list margin-bottom-60">
				<div class="boxed-list-headline">
					<h3><i class="icon-material-outline-group"></i> Freelancers Bidding</h3>
				</div>
				<ul class="boxed-list-ul">
					<li>
						<div class="bid">
							<!-- Avatar -->
							<div class="bids-avatar">
								<div class="freelancer-avatar">
									<div class="verified-badge"></div>
									<a href="single-freelancer-profile.html"><img src="images/user-avatar-big-01.jpg" alt=""></a>
								</div>
							</div>
							
							<!-- Content -->
							<div class="bids-content">
								<!-- Name -->
								<div class="freelancer-name">
									<h4><a href="single-freelancer-profile.html">Tom Smith <img class="flag" src="images/flags/gb.svg" alt="" title="United Kingdom" data-tippy-placement="top"></a></h4>
									<div class="star-rating" data-rating="4.9"></div>
								</div>
							</div>
							
							<!-- Bid -->
							<div class="bids-bid">
								<div class="bid-rate">
									<div class="rate">$4,400</div>
									<span>in 7 days</span>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="bid">
							<!-- Avatar -->
							<div class="bids-avatar">
								<div class="freelancer-avatar">
									<div class="verified-badge"></div>
									<a href="single-freelancer-profile.html"><img src="images/user-avatar-big-02.jpg" alt=""></a>
								</div>
							</div>
							
							<!-- Content -->
							<div class="bids-content">
								<!-- Name -->
								<div class="freelancer-name">
									<h4><a href="single-freelancer-profile.html">David Peterson <img class="flag" src="images/flags/de.svg" alt="" title="Germany" data-tippy-placement="top"></a></h4>
									<div class="star-rating" data-rating="4.2"></div>
								</div>
							</div>
							
							<!-- Bid -->
							<div class="bids-bid">
								<div class="bid-rate">
									<div class="rate">$2,200</div>
									<span>in 14 days</span>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="bid">
							<!-- Avatar -->
							<div class="bids-avatar">
								<div class="freelancer-avatar">
									<a href="single-freelancer-profile.html"><img src="images/user-avatar-placeholder.png" alt=""></a>
								</div>
							</div>
							
							<!-- Content -->
							<div class="bids-content">
								<!-- Name -->
								<div class="freelancer-name">
									<h4><a href="single-freelancer-profile.html">Marcin Kowalski <img class="flag" src="images/flags/pl.svg" alt="" title="Poland" data-tippy-placement="top"></a></h4>
									<span class="not-rated">Minimum of 3 votes required</span>

								</div>
							</div>
							
							<!-- Bid -->
							<div class="bids-bid">
								<div class="bid-rate">
									<div class="rate">$3,800</div>
									<span>In 20 days</span>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="bid">
							<!-- Avatar -->
							<div class="bids-avatar">
								<div class="freelancer-avatar">
									<a href="single-freelancer-profile.html"><img src="images/user-avatar-placeholder.png" alt=""></a>
								</div>
							</div>
							
							<!-- Content -->
							<div class="bids-content">
								<!-- Name -->
								<div class="freelancer-name">
									<h4><a href="single-freelancer-profile.html">Sebastiano Piccio <img class="flag" src="images/flags/it.svg" alt="" title="Italy" data-tippy-placement="top"></a></h4>
									<div class="star-rating" data-rating="4.5"></div>
								</div>
							</div>
							
							<!-- Bid -->
							<div class="bids-bid">
								<div class="bid-rate">
									<div class="rate">$3,400</div>
									<span>In 10 days</span>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>

		</div>
		

		<!-- Sidebar -->
		<div class="col-xl-4 col-lg-4">
			<div class="sidebar-container">

				<div class="countdown green margin-bottom-35">6 days, 23 hours left</div>

				<div class="sidebar-widget">
					<div class="bidding-widget">
						<div class="bidding-headline"><h3>Bid on this job!</h3></div>
						<div class="bidding-inner">

							<!-- Headline -->
							<span class="bidding-detail">Set your <strong>minimal rate</strong></span>

							<!-- Price Slider -->
							<div class="bidding-value">$<span id="biddingVal"></span></div>
							<input class="bidding-slider" type="text" value="" data-slider-handle="custom" data-slider-currency="$" data-slider-min="2500" data-slider-max="4500" data-slider-value="auto" data-slider-step="50" data-slider-tooltip="hide" />
							
							<!-- Headline -->
							<span class="bidding-detail margin-top-30">Set your <strong>delivery time</strong></span>

							<!-- Fields -->
							<div class="bidding-fields">
								<div class="bidding-field">
									<!-- Quantity Buttons -->
									<div class="qtyButtons">
										<div class="qtyDec"></div>
										<input type="text" name="qtyInput" value="1">
										<div class="qtyInc"></div>
									</div>
								</div>
								<div class="bidding-field">
									<select class="selectpicker default">
										<option selected>Days</option>
										<option>Hours</option>
									</select>
								</div>
							</div>

							<!-- Button -->
							<button id="snackbar-place-bid" class="button ripple-effect move-on-hover full-width margin-top-30"><span>Place a Bid</span></button>

						</div>
						<div class="bidding-signup">Don't have an account? <a href="#sign-in-dialog" class="register-tab sign-in popup-with-zoom-anim">Sign Up</a></div>
					</div>
				</div>

				<!-- Sidebar Widget -->
				<div class="sidebar-widget">
					<h3>Bookmark or Share</h3>

					<!-- Bookmark Button -->
					<button class="bookmark-button margin-bottom-25">
						<span class="bookmark-icon"></span>
						<span class="bookmark-text">Bookmark</span>
						<span class="bookmarked-text">Bookmarked</span>
					</button>

					<!-- Copy URL -->
					<div class="copy-url">
						<input id="copy-url" type="text" value="" class="with-border">
						<button class="copy-url-button ripple-effect" data-clipboard-target="#copy-url" title="Copy to Clipboard" data-tippy-placement="top"><i class="icon-material-outline-file-copy"></i></button>
					</div>

					<!-- Share Buttons -->
					<div class="share-buttons margin-top-25">
						<div class="share-buttons-trigger"><i class="icon-feather-share-2"></i></div>
						<div class="share-buttons-content">
							<span>Interesting? <strong>Share It!</strong></span>
							<ul class="share-buttons-icons">
								<li><a href="#" data-button-color="#3b5998" title="Share on Facebook" data-tippy-placement="top"><i class="icon-brand-facebook-f"></i></a></li>
								<li><a href="#" data-button-color="#1da1f2" title="Share on Twitter" data-tippy-placement="top"><i class="icon-brand-twitter"></i></a></li>
								<li><a href="#" data-button-color="#dd4b39" title="Share on Google Plus" data-tippy-placement="top"><i class="icon-brand-google-plus-g"></i></a></li>
								<li><a href="#" data-button-color="#0077b5" title="Share on LinkedIn" data-tippy-placement="top"><i class="icon-brand-linkedin-in"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>

	</div>
</div>


<!-- Spacer -->
<div class="margin-top-15"></div>
<!-- Spacer / End-->

<!-- Footer
================================================== -->
<div id="footer">
	
	<!-- Footer Top Section -->
	<div class="footer-top-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">

					<!-- Footer Rows Container -->
					<div class="footer-rows-container">
						
						<!-- Left Side -->
						<div class="footer-rows-left">
							<div class="footer-row">
								<div class="footer-row-inner footer-logo">
									<img src="images/logo2.png" alt="">
								</div>
							</div>
						</div>
						
						<!-- Right Side -->
						<div class="footer-rows-right">

							<!-- Social Icons -->
							<div class="footer-row">
								<div class="footer-row-inner">
									<ul class="footer-social-links">
										<li>
											<a href="#" title="Facebook" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-facebook-f"></i>
											</a>
										</li>
										<li>
											<a href="#" title="Twitter" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-twitter"></i>
											</a>
										</li>
										<li>
											<a href="#" title="Google Plus" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-google-plus-g"></i>
											</a>
										</li>
										<li>
											<a href="#" title="LinkedIn" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-linkedin-in"></i>
											</a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
							</div>
							
							<!-- Language Switcher -->
							<div class="footer-row">
								<div class="footer-row-inner">
									<select class="selectpicker language-switcher" data-selected-text-format="count" data-size="5">
										<option selected>English</option>
										<option>Français</option>
										<option>Español</option>
										<option>Deutsch</option>
									</select>
								</div>
							</div>
						</div>

					</div>
					<!-- Footer Rows Container / End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Top Section / End -->

	<!-- Footer Middle Section -->
	<div class="footer-middle-section">
		<div class="container">
			<div class="row">

				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>For Candidates</h3>
						<ul>
							<li><a href="#"><span>Browse Jobs</span></a></li>
							<li><a href="#"><span>Add Resume</span></a></li>
							<li><a href="#"><span>Job Alerts</span></a></li>
							<li><a href="#"><span>My Bookmarks</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>For Employers</h3>
						<ul>
							<li><a href="#"><span>Browse Candidates</span></a></li>
							<li><a href="#"><span>Post a Job</span></a></li>
							<li><a href="#"><span>Post a Task</span></a></li>
							<li><a href="#"><span>Plans & Pricing</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>Helpful Links</h3>
						<ul>
							<li><a href="#"><span>Contact</span></a></li>
							<li><a href="#"><span>Privacy Policy</span></a></li>
							<li><a href="#"><span>Terms of Use</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>Account</h3>
						<ul>
							<li><a href="#"><span>Log In</span></a></li>
							<li><a href="#"><span>My Account</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Newsletter -->
				<div class="col-xl-4 col-lg-4 col-md-12">
					<h3><i class="icon-feather-mail"></i> Sign Up For a Newsletter</h3>
					<p>Weekly breaking news, analysis and cutting edge advices on job searching.</p>
					<form action="#" method="get" class="newsletter">
						<input type="text" name="fname" placeholder="Enter your email address">
						<button type="submit"><i class="icon-feather-arrow-right"></i></button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Middle Section / End -->
	
	<!-- Footer Copyrights -->
	<div class="footer-bottom-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					© 2019 <strong>Hireo</strong>. All Rights Reserved.
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Copyrights / End -->

</div>
<!-- Footer / End -->

</div>
<!-- Wrapper / End -->


<!-- Sign In Popup
================================================== -->
<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

	<!--Tabs -->
	<div class="sign-in-form">

		<ul class="popup-tabs-nav">
			<li><a href="#login">Log In</a></li>
			<li><a href="#register">Register</a></li>
		</ul>

		<div class="popup-tabs-container">

			<!-- Login -->
			<div class="popup-tab-content" id="login">
				
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>We're glad to see you again!</h3>
					<span>Don't have an account? <a href="#" class="register-tab">Sign Up!</a></span>
				</div>
					
				<!-- Form -->
				<form method="post" id="login-form">
					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="text" class="input-text with-border" name="emailaddress" id="emailaddress" placeholder="Email Address" required/>
					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-outline-lock"></i>
						<input type="password" class="input-text with-border" name="password" id="password" placeholder="Password" required/>
					</div>
					<a href="#" class="forgot-password">Forgot Password?</a>
				</form>
				
				<!-- Button -->
				<button class="button full-width button-sliding-icon ripple-effect" type="submit" form="login-form">Log In <i class="icon-material-outline-arrow-right-alt"></i></button>
				
				<!-- Social Login -->
				<div class="social-login-separator"><span>or</span></div>
				<div class="social-login-buttons">
					<button class="facebook-login ripple-effect"><i class="icon-brand-facebook-f"></i> Log In via Facebook</button>
					<button class="google-login ripple-effect"><i class="icon-brand-google-plus-g"></i> Log In via Google+</button>
				</div>

			</div>

			<!-- Register -->
			<div class="popup-tab-content" id="register">
				
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>Let's create your account!</h3>
				</div>

				<!-- Account Type -->
				<div class="account-type">
					<div>
						<input type="radio" name="account-type-radio" id="freelancer-radio" class="account-type-radio" checked/>
						<label for="freelancer-radio" class="ripple-effect-dark"><i class="icon-material-outline-account-circle"></i> Freelancer</label>
					</div>

					<div>
						<input type="radio" name="account-type-radio" id="employer-radio" class="account-type-radio"/>
						<label for="employer-radio" class="ripple-effect-dark"><i class="icon-material-outline-business-center"></i> Employer</label>
					</div>
				</div>
					
				<!-- Form -->
				<form method="post" id="register-account-form">
					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="text" class="input-text with-border" name="emailaddress-register" id="emailaddress-register" placeholder="Email Address" required/>
					</div>

					<div class="input-with-icon-left" title="Should be at least 8 characters long" data-tippy-placement="bottom">
						<i class="icon-material-outline-lock"></i>
						<input type="password" class="input-text with-border" name="password-register" id="password-register" placeholder="Password" required/>
					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-outline-lock"></i>
						<input type="password" class="input-text with-border" name="password-repeat-register" id="password-repeat-register" placeholder="Repeat Password" required/>
					</div>
				</form>
				
				<!-- Button -->
				<button class="margin-top-10 button full-width button-sliding-icon ripple-effect" type="submit" form="register-account-form">Register <i class="icon-material-outline-arrow-right-alt"></i></button>
				
				<!-- Social Login -->
				<div class="social-login-separator"><span>or</span></div>
				<div class="social-login-buttons">
					<button class="facebook-login ripple-effect"><i class="icon-brand-facebook-f"></i> Register via Facebook</button>
					<button class="google-login ripple-effect"><i class="icon-brand-google-plus-g"></i> Register via Google+</button>
				</div>

			</div>

		</div>
	</div>
</div>
<!-- Sign In Popup / End -->


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

<!-- Mirrored from www.vasterad.com/themes/hireo/single-task-page.html by HTTrack Website Copier/3.x [XR&CO'2017], Fri, 26 Feb 2021 18:59:45 GMT -->
</html>