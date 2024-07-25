<?php 
session_start();
include 'include/conn.php';
                    
	         
?>

<!doctype html>
<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo/index-2.html by HTTrack Website Copier/3.x [XR&CO'2017], Fri, 26 Feb 2021 19:02:06 GMT -->
<head>

<!-- Basic Page Needs
================================================== -->
<title>Quickgig</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/colors/blue.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
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

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<!-- Wrapper -->
<div id="wrapper" class="wrapper-with-transparent-header">

<!-- Header Container
================================================== -->
<?php include 'include/header.php';?>


<div class="clearfix"></div>
<!-- Header Container / End -->



<!-- Intro Banner
================================================== -->
<div class="intro-banner dark-overlay" data-background-image="images/bghome.jpg">

	<!-- Transparent Header Spacer -->
	<div class="transparent-header-spacer"></div>

	<div class="container">
		
		<!-- Intro Headline -->
		<div class="row">
			<div class="col-md-12">
				<div class="banner-headline" style="margin-top: 40px;">
					<h3>
						<strong>Hire experts freelancers for any job, any time.</strong>
						<br>
						<span>Huge community of designers, developers and creatives ready for your project.</span>
					</h3>
				</div>
			</div>
		</div>
		
		<!-- Search Bar -->
<div class="row">
			<div class="col-md-12">
				<div class="intro-banner-search-form margin-top-95" style="    height: 70px; border-radius: 8px" >
					<form action="freelancers-grid-layout.php" method="POST" style="display: flex; ">
					<!-- Search Field -->
					<div class="intro-search-field with-autocomplete">

			<select name="city" id="" class="form-control" style="width: 399px; margin-top: 18px;">
                  <option value="">====== Select Your City ======</option>
                  <?php 
                   $conn = mysqli_connect("localhost","root","","test2");
                  $sql="select * from city";
                  $result=$conn->query($sql);
                  while ($we=$result->fetch_object()) {
                  ?>
                  <option value="<?php echo $we->cid; ?>"><?php echo $we->cname; ?></option>
                <?php } ?>
                </select>
					</div>

					<!-- Search Field -->
					<div class="intro-search-field">
						<input id="intro-keywords" type="text" placeholder="Price limit" name="price" style="">
					</div>

					<!-- Search Field -->
					<div class="intro-search-field" style="width: 380px;">
						<select class="selectpicker default" data-size="7" title="All Categories" name="cat" >
							<?php 
							$cat="SELECT * FROM `category` ";
							$result=$con->query($cat);
							while ($res=$result->fetch_object()) {
							
							 ?>
							 <option value="<?php echo $res->c_id ?>"><?php echo $res->name ?></option>

							<?php } ?>
						</select>
					</div>

					<!-- Button -->
					<div class="intro-search-button">
						<button class="button ripple-effect" name="homesearch">Search</button>
					</div>
				</form>
				</div>
			</div>
			
		</div>
	</div>

					<!-- Search Field -->
					<div class="intro-search-field">
						<label for ="intro-keywords" class="field-title ripple-effect">What you need done?</label>
						<input id="intro-keywords" type="text" placeholder="e.g. build me a website">
					</div>

					<!-- Search Field -->
					<div class="intro-search-field">
						
						<select name="category" id="" class="form-control">
                  <option value="">====== Select Your category ======</option>
                  <?php 
                   $conn = mysqli_connect("localhost","root","","test2");
                  $sql="select * from category";
                  $result=$conn->query($sql);
                  while ($we=$result->fetch_object()) {
                  ?>
                  <option value="<?php echo $we->c_id; ?>"><?php echo $we->name; ?></option>
                <?php } ?>
                </select>
					</div>

					<!-- Button -->
					<div class="intro-search-button">
						<button class="button ripple-effect"name="search" onclick="window.location.href='listaftersearch.php'">Search</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Stats -->
		

	</div>
</div>


<!-- Content
================================================== -->

<!-- Popular Job Categories -->
<div class="section margin-top-65 margin-bottom-30">
	<div class="container">
		<div class="row">

			<!-- Section Headline -->
			<div class="col-xl-12">
				<div class="section-headline centered margin-top-0 margin-bottom-45">
					<h3>Popular Categories</h3>
				</div>
			</div>
			<?php 
			$sql="select * from category";
                  $result=$conn->query($sql);
				 while ($we=$result->fetch_object()) {

			 ?>

			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				<a  class="photo-box small" data-background-image="images/job-category-01.jpg">
					<div class="photo-box-content">
						<h3><?php echo $we->name; ?></h3>
					</div>
				</a>
			</div>
			
			<?php } ?>

		</div>
	</div>
</div>
<!-- Features Cities / End -->


<section id="partition" style="margin-left: 130px;">
        <div class="container">
        	<br>
        	<br>
        	<h1 style="margin-left: 326px;" >What's great about Quickgig?</h1>
        	<br>
        	<br>
            <div class="box">
                <i class="fa fa-picture-o fa-3x"></i>
                <h3 style="color:#2B65EC">Browse portfolios </h3>
                <p>Find professionals you can trust by browsing their samples of previous work and reading their profile reviews. </p>
            </div>
            <div class="box">
                <i class="fa fa-address-card fa-3x"></i>
                <h3 style="color:#2B65EC">View bids</h3>
                <p> 
Receive free bids from our talented freelancers within seconds. </p>
            </div>
            <div class="box">
                <i class="fa fa-comments-o fa-3x"></i>
                <h3 style="color:#2B65EC"> Live chat</h3>
                <p>
You can live chat with your freelancers to get constant updates on the progress of your work. </p>
            </div>
        </div>
    </section>
<section id="partition" style="margin-left: 130px;">
        <div class="container">
        	
        	<br>
        	<br>
            <div class="box">
                <i class="fa fa-graduation-cap fa-3x"></i>
                <h3 style="color:#2B65EC">Pay for quality </h3>
                <p> 
Pay for work when it has been completed and you're 100% satisfied.  </p>
            </div>
            <div class="box">
                <i class="fa fa-ravelry fa-3x"></i>
                <h3 style="color:#2B65EC">  Track progress</h3>
                <p>
Keep up-to-date and on-the-go with our time tracker, and mobile app.  </p>
            </div>
            <div class="box">
                <i class="fa fa-users fa-3x"></i>
                <h3 style="color:#2B65EC">  24/7 support</h3>
                <p> 24/7 support
We're always here to help. Our support consists of real people who are available 24/7.  </p>
            </div>
        </div>
    </section>

<!-- Features Cities -->
<div class="section margin-top-65 margin-bottom-65">
	<div class="container">
		<div class="row">

			<!-- Section Headline -->
			<div class="col-xl-12">
				<div class="section-headline centered margin-top-0 margin-bottom-45">
					<h3>Featured Cities</h3>
				</div>
			</div>

			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				<a  class="photo-box" data-background-image="images/featured-city-01.jpg">
					<div class="photo-box-content">
						<h3>Rajkot</h3>
					</div>
				</a>
			</div>
			
			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				<a  class="photo-box" data-background-image="images/featured-city-02.jpg">
					<div class="photo-box-content">
						<h3>Ahemadabad</h3>
					</div>
				</a>
			</div>
			
			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				<a href="jobs-grid-layout-full-page.html" class="photo-box" data-background-image="images/featured-city-03.jpg">
					<div class="photo-box-content">
						<h3>Baroda</h3>
					</div>
				</a>
			</div>

			<div class="col-xl-3 col-md-6">
				<!-- Photo Box -->
				<a  class="photo-box" data-background-image="images/featured-city-04.jpg">
					<div class="photo-box-content">
						<h3>Surat</h3>
					</div>
				</a>
			</div>

		</div>
	</div>
</div>
<!-- Features Cities / End -->


<!-- Highest Rated Freelancers -->
<div class="section gray padding-top-65 padding-bottom-70 full-width-carousel-fix">
	<div class="container">
		<div class="row">

			<div class="col-xl-12">
				<!-- Section Headline -->
				<div class="section-headline margin-top-0 margin-bottom-25">
					<h3 style="margin-left:55%;">Freelancers</h3>
				</div>
			</div>

			<div class="col-xl-12">
				<div class="default-slick-carousel freelancers-container freelancers-grid-layout">
				<?php
					$sq="SELECT * FROM `user` WHERE 1 ";
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
									<a href="single-freelancer-profile.php?id=<?php echo $we->user_id ?>"><img src="upload/<?php echo $we->profile ?>" alt=""></a>
								</div>

								<!-- Name -->
								<div class="freelancer-name">
									<h4><a href="single-freelancer-profile.php?id=<?php echo $we->user_id ?>"><?php echo $we->fname." ".$we->lname; ?></a></h4>
									
								</div>

								<!-- Rating -->
								<div class="freelancer-rating">
									<div class="star-rating" data-rating="<?php echo rand(4,5); ?>"></div>
								</div>
							</div>
						</div>
						
						<!-- Details -->
						<div class="freelancer-details">
							<div class="freelancer-details-list">
								<ul>
									<li>Location <strong><i class="icon-material-outline-location-on"></i> Gujarat</strong></li>
									<li>Rate <strong>$60 / hr</strong></li>
									<li>Job Success <strong><?php echo rand(90,100); ?></strong></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Freelancer / End -->
				<?php } ?>
				</div>
			</div>

		</div>
	</div>
</div>
<!-- Highest Rated Freelancers / End-->

<!-- Membership Plans / End-->


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

<!-- Leaflet // Docs: https://leafletjs.com/ -->
<script src="js/leaflet.min.js"></script>

<!-- Leaflet Geocoder + Search Autocomplete // Docs: https://github.com/perliedman/leaflet-control-geocoder -->
<script src="js/leaflet-autocomplete.js"></script>
<script src="js/leaflet-control-geocoder.js"></script>

</body>

<!-- Mirrored from www.vasterad.com/themes/hireo/index-2.html by HTTrack Website Copier/3.x [XR&CO'2017], Fri, 26 Feb 2021 19:02:06 GMT -->
</html>