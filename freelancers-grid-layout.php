<?php 
session_start();
include 'include/conn.php';

$id=$_SESSION['uid'];


?>


<!doctype html>
<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo/freelancers-list-layout-1.html by HTTrack Website Copier/3.x [XR&CO'2017], Fri, 26 Feb 2021 18:59:46 GMT -->
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
<?php include 'include/header1.php';
include 'include/conn.php';

?>

<div class="clearfix"></div>
<!-- Header Container / End -->

<!-- Spacer -->
<div class="margin-top-90"></div>
<!-- Spacer / End-->

<!-- Page Content
================================================== -->
<div class="container">
	<div class="row">
		<div class="col-xl-3 col-lg-4">
			<form method="POST" action="freelancers-grid-layout.php">
					<div class="sidebar-container">
						
						<!-- Location -->
						<div class="sidebar-widget">
							<h3>Location</h3>
							<div class="input-with-icon">
								<div id="autocomplete-container">
									<input id="autocomplete-input" type="text" name="loca" placeholder="Location">
								</div>
								<i class="icon-material-outline-location-on"></i>
							</div>
						</div>

						<!-- Category -->
						<div class="sidebar-widget">
							<h3>Category</h3>
							<select class="selectpicker default" multiple data-selected-text-format="count" data-size="7" title="All Categories" name="cat">
								<?php
								$sqls="SELECT * FROM `category`";
								$res=$con->query($sqls);
								while ($re=$res->fetch_object()) 
								   {?>
								   	<option value="<?php echo($re->c_id) ?>"><?php echo($re->name) ?></option>
								   <?php } ?>
								
							</select>
						</div>

						<!-- Keywords -->
						<div class="sidebar-widget">
							<h3>Keywords</h3>
							<div class="keywords-container">
								<div class="keyword-input-container">
									<input type="text" class="keyword-input" name="search" placeholder="e.g. task title"/>
									<button class="keyword-input-button ripple-effect"><i class="icon-material-outline-add"></i></button>
								</div>
								<div class="keywords-list"><!-- keywords go here --></div>
								<div class="clearfix"></div>
							</div>
						</div>

						<!-- Hourly Rate -->
						<div class="sidebar-widget">
							<h3>Hourly Rate</h3>
							<div class="margin-top-55"></div>

							<!-- Range Slider -->
							<input class="range-slider" type="text" value="" data-slider-currency="$" min="10" max="250" data-slider-step="5" data-slider-value="[10,250]" name="price" />
						</div>

						<!-- Tags -->
					
						<div class="clearfix">
							<button class="button button-sliding-icon ripple-effect" name="serc">Search</button>
						</div>

					</div>
			</form>
		</div>

		<div class="col-xl-9 col-lg-8 content-left-offset">

			<h3 class="page-title">Search Results</h3>

			
			
			<!-- Freelancers List Container -->
			<div class="freelancers-container freelancers-list-layout compact-list margin-top-35">
				<?php  
					if (isset($_POST['homesearch'])) {
						$loc=$_POST['city'];
						$cat=$_POST['cat'];
						$price=$_POST['price'];
					
						 $sq="SELECT emp.*,u.* FROM employee as emp JOIN user AS u ON emp.user_id=u.user_id WHERE emp.cat_id='$cat' AND (u.city='$loc' OR u.state='gujarat' OR u.country='india') AND emp.price_hour>='$price'";
					$result=$con->query($sq);
					while ($we=$result->fetch_object()) {
					
				?>	
				<!--Freelancer -->
				<div class="freelancer">

					<!-- Overview -->
					<div class="freelancer-overview">
						<div class="freelancer-overview-inner">
							
							<!-- Bookmark Icon -->
							<span class="bookmark-icon"></span>
							
							<!-- Avatar -->
							<div class="freelancer-avatar">
								<div class="verified-badge"></div>

								<a href="single-freelancer-profile.html"><img src="upload/<?php echo $we->profile ?>" alt=""></a>
							</div>

							<!-- Name -->
							<div class="freelancer-name">
								<h4><a href="#"><?php echo $we->gig_title; ?></a></h4>
								
								<!-- Rating -->
								<div class="freelancer-rating">
									<div class="star-rating" data-rating="<?php echo rand(0,5); ?>"></div>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Details -->
					<div class="freelancer-details">
						<div class="freelancer-details-list">
							<ul>
										<li>Rate <strong><?php echo $we->price_hour; ?></strong></li>
								<li>Job Success <strong>95%</strong></li>
							</ul>
						</div>
						<a href="single-freelancer-profile.php?id=<?php echo $we->user_id ?>" class="button button-sliding-icon ripple-effect">View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
					</div>
				</div>
				<?php } }?>
				<?php 
					if (isset($_POST['serc'])) {
						$loca=$_POST['loca'];
						$cat=$_POST['cat'];
						$price=$_POST['price'];
						$parr=explode(",", $price);
						$sq="SELECT emp.*,u.* FROM employee as emp JOIN user AS u ON emp.user_id=u.user_id WHERE emp.cat_id='$cat' AND (u.city='$loca' OR u.state='gujarat' OR u.country='india') AND emp.price_hour>='$parr[1]' OR emp.search=''";
					$result=$con->query($sq);
					while ($we=$result->fetch_object()) {
					
				?>	
				<!--Freelancer -->
				<div class="freelancer">

					<!-- Overview -->
					<div class="freelancer-overview">
						<div class="freelancer-overview-inner">
							
							<!-- Bookmark Icon -->
							<span class="bookmark-icon"></span>
							
							<!-- Avatar -->
							<div class="freelancer-avatar">
								<div class="verified-badge"></div>

								<a href="single-freelancer-profile.php"><img src="upload/<?php echo $we->profile ?>" alt=""></a>
							</div>

							<!-- Name -->
							<div class="freelancer-name">
								<h4><a href="#"><?php echo $we->gig_title; ?></a></h4>
								
								<!-- Rating -->
								<div class="freelancer-rating">
									<div class="star-rating" data-rating="<?php echo rand(0,5); ?>"></div>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Details -->
					<div class="freelancer-details">
						<div class="freelancer-details-list">
							<ul>
								<li>Location <strong><i class="icon-material-outline-location-on"></i> <?php echo $_POST['loca'] ?></strong></li>
								<li>Rate <strong><?php echo $we->price_hour; ?></strong></li>
								<li>Job Success <strong>95%</strong></li>
							</ul>
						</div>
						<a href="single-freelancer-profile.html" class="button button-sliding-icon ripple-effect">View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
					</div>
				</div>
				<?php } }?>
				<!-- Freelancer / End -->
	
			</div>
			<!-- Freelancers Container / End -->


			<!-- Pagination -->
			<div class="clearfix"></div>
			<div class="row">
				<div class="col-md-12">
					<!-- Pagination -->
				
				</div>
			</div>
			<!-- Pagination / End -->

		</div>
	</div>
</div>


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

<!-- Google Autocomplete -->
<script>
	function initAutocomplete() {
		 var options = {
		  types: ['(cities)'],
		  // componentRestrictions: {country: "us"}
		 };

		 var input = document.getElementById('autocomplete-input');
		 var autocomplete = new google.maps.places.Autocomplete(input, options);
	}
</script>

<!-- Google API & Maps -->
<!-- Geting an API Key: https://developers.google.com/maps/documentation/javascript/get-api-key -->
<script src="../../../external.html?link=https://maps.googleapis.com/maps/api/js?key=AIzaSyAaoOT9ioUE4SA8h-anaFyU4K63a7H-7bc&amp;libraries=places"></script>

</body>

<!-- Mirrored from www.vasterad.com/themes/hireo/freelancers-list-layout-1.html by HTTrack Website Copier/3.x [XR&CO'2017], Fri, 26 Feb 2021 18:59:46 GMT -->
</html>