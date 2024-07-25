<?php include 'include/conn.php'; session_start();
if (!isset($_SESSION['uid'])) {
	header("location: pages-login.php");
} ?>

<!doctype html>
<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo/dashboard-settings.html by HTTrack Website Copier/3.x [XR&CO'2017], Fri, 26 Feb 2021 18:59:50 GMT -->
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
<?php include 'include/header1.php'; ?>
<?php 
                    
	              $id=$_SESSION['uid'];
                  $sql="SELECT * FROM `user` WHERE  user_id='$id'";
                  $result=$con->query($sql);
                  $we=$result->fetch_object();
                             
?>

<body class="gray">

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->

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
							<li class="active"><a href="dashboard.html"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
							
							
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
				<h3>Settings</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>s
						<li><a href="#">Home</a></li>
						<li><a href="#">Dashboard</a></li>
						<li>Settings</li>
					</ul>
				</nav>
			</div>
	
			<!-- Row -->
			<div class="row">
			<form method="POST" action="display.php" enctype="multipart/foem-data">
				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box margin-top-0">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-material-outline-account-circle"></i> My Account</h3>
						</div>

						<div class="content with-padding padding-bottom-0">
		
							<div class="row">
	
								<div class="col-auto">
									<div class="avatar-wrapper" data-tippy-placement="bottom" title="Change Avatar">
										<img class="profile-pic" src="upload/<?php echo $we->profile?>" alt="" />
										<div class="upload-button"></div>
										<input class="file-upload" type="file" accept="image/*" name="profilepic" />
									</div>
								</div>

								<div class="col">
									
									<div class="row">

										<div class="col-xl-6">
											<div class="submit-field" >
												<h5>First Name</h5>
												<input type="text" class="with-border" value="<?php echo $we->fname; ?>" name="fname">
											</div>
										</div>

										<div class="col-xl-6">
											<div class="submit-field" style="padding-left: 17px;">
												<h5>Last Name</h5>
												<input type="text" class="with-border" value="<?php  echo $we->lname; ?>" name="lname">
											</div>
										</div>

										

										<div class="col-xl-6">
											<div class="submit-field">
												<h5>Post code</h5>
												<input type="text" class="with-border" value="<?php echo $we->pincode; ?>" name="code">
											</div>
									  	 </div>
	                                       <div class="col-xl-6">
											<div class="form-group col-md-6" style="padding-top: 4px;">
		                                     <label style="font-weight:bolder; color: black;">Date of birth</label>
	                                   	  <input type="date" class="form-control" name="dob" value="<?php echo $we->dob; ?>">
		                                   </div>

									  	 </div>
										<div class="col-xl-6">
											 <label style="font-weight:bolder; color: black;">City</label>
											<select name="city" id="" class="form-control">
												  <label>cit</label>
							                  <option value="">====== Select Your City ======</option>
							                  <?php 
							                  
							                  $sql="select * from city";
							                  $res=$con->query($sql);
							                  while ($re=$res->fetch_object()) 
							                    {
							                        if($we->city == $re->cid)
							                        {
							                  ?>
							                  <option value="<?php echo $re->cid; ?>" selected="selected"><?php echo $re->cname; ?></option>
							                <?php 
							                        }
							                        else
							                        {
							                ?>
							                  <option value="<?php echo $re->cid; ?>"><?php echo $re->cname; ?></option>
							                <?php 
							                    }}
							                 ?>
							                </select>
							                
									  	 
										 </div>
										 <div class="col-xl-6" style="display: flex; padding-left: 30px; ">
							                		<label style="font-weight:bolder; color: black;" >Gender : &nbsp;</label>
							                		<?php 

							                		
							                		$gen= $we->gen;
							                		if ($gen==='option1') {
							                		?>
							                		<div style=" padding-top: 45px; display: flex; padding-left: 5px; position:absolute;">
												  	<input class="form-check-input" type="radio" name="gender" value="option1" checked="" >
												  	<span class="form-check-label" >&nbsp; Male &nbsp; </span> 
												  
												  	<input class="form-check-input" type="radio" name="gender" value="option2">
												  	<span class="form-check-label">&nbsp; Female </span>
												  	</div>
												  	<?php }else{?>
												  		<div  style=" padding-top: 45px; display: flex;">
												  		<input class="form-check-input" type="radio" name="gender" value="option1" >
												  	<span class="form-check-label"> &nbsp;Male &nbsp; </span> 
												  
												  	<input class="form-check-input" type="radio" name="gender" value="option2" checked="">
												  	<span class="form-check-label">&nbsp; Female</span>
                                                      </div>
												  	<?php }?>
							                </div>
										 <div class="col-xl-6">
											<div class="submit-field">
												<h5>Phone No.</h5>
												<input type="number" class="with-border" value="<?php  echo $we->phnumber; ?>" name="phone">
											</div>
										</div>
										<div class="col-xl-6">
											<div class="submit-field" style="padding-left: 16px;">
												<h5>Email:</h5>
												<input type="text" class="with-border" value="<?php  echo $we->email; ?>" name="email">
											</div>
										</div>
										<div  style="display: flex; justify-content: center; align-items: center;">
											<button class="button button-sliding-icon ripple-effect margin-bottom-30"  name="update">Save Change</button>
										</div>
									</div>

								</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
				<!-- Button -->
				<div class="col-xl-4">
					
				</div>
			</form>	
			</div><!-- Row / End -->

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

<!-- Chart.js // documentation: http://www.chartjs.org/docs/latest/ -->
<script src="js/chart.min.js"></script>
<script>
	Chart.defaults.global.defaultFontFamily = "Nunito";
	Chart.defaults.global.defaultFontColor = '#888';
	Chart.defaults.global.defaultFontSize = '14';

	var ctx = document.getElementById('chart').getContext('2d');

	var chart = new Chart(ctx, {
		type: 'line',

		// The data for our dataset
		data: {
			labels: ["January", "February", "March", "April", "May", "June"],
			// Information about the dataset
	   		datasets: [{
				label: "Views",
				backgroundColor: 'rgba(42,65,232,0.08)',
				borderColor: '#2a41e8',
				borderWidth: "3",
				data: [196,132,215,362,210,252],
				pointRadius: 5,
				pointHoverRadius:5,
				pointHitRadius: 10,
				pointBackgroundColor: "#fff",
				pointHoverBackgroundColor: "#fff",
				pointBorderWidth: "2",
			}]
		},

		// Configuration options
		options: {

		    layout: {
		      padding: 10,
		  	},

			legend: { display: false },
			title:  { display: false },

			scales: {
				yAxes: [{
					scaleLabel: {
						display: false
					},
					gridLines: {
						 borderDash: [6, 10],
						 color: "#d8d8d8",
						 lineWidth: 1,
	            	},
				}],
				xAxes: [{
					scaleLabel: { display: false },  
					gridLines:  { display: false },
				}],
			},

		    tooltips: {
		      backgroundColor: '#333',
		      titleFontSize: 13,
		      titleFontColor: '#fff',
		      bodyFontColor: '#fff',
		      bodyFontSize: 13,
		      displayColors: false,
		      xPadding: 10,
		      yPadding: 10,
		      intersect: false
		    }
		},


});

</script>


<!-- Google Autocomplete -->
<script>
	function initAutocomplete() {
		 var options = {
		  types: ['(cities)'],
		  // componentRestrictions: {country: "us"}
		 };

		 var input = document.getElementById('autocomplete-input');
		 var autocomplete = new google.maps.places.Autocomplete(input, options);

		if ($('.submit-field')[0]) {
		    setTimeout(function(){ 
		        $(".pac-container").prependTo("#autocomplete-container");
		    }, 300);
		}
	}
</script>

<!-- Google API -->
<script src="../../../external.html?link=https://maps.googleapis.com/maps/api/js?key=AIzaSyAaoOT9ioUE4SA8h-anaFyU4K63a7H-7bc&amp;libraries=places&amp;callback=initAutocomplete"></script>


</body>

<!-- Mirrored from www.vasterad.com/themes/hireo/dashboard-settings.html by HTTrack Website Copier/3.x [XR&CO'2017], Fri, 26 Feb 2021 18:59:50 GMT -->
</html>