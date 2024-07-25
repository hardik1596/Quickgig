<?php 
session_start();
include 'include/conn.php';
                    
	         
?>
<!doctype html>
<html lang="en">

<head>
<title>Quickgig</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/colors/blue.css">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


</head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


<body>
<header id="header-container" class="fullwidth">

	<!-- Header -->
	<div id="header">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="index.php"><img src="images/logo.png" alt="" class="w-25" style="width: 150px !important; height: 60px;"></a>
				</div>
				<!-- Main Navigation -->
				<nav id="navigation">
					<ul id="responsive">

						<li><a href="index.php" class="current">Home</a>
							
						</li>


						<li><a href="freelancers-grid-layout.php">Find freelancer</a>
							
						</li>
                      <li><a href="pages-about.php">About</a></li>
						

						<li><a href="pages-contact.php">Contact</a>
							
						</li>
                         
						
					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
				
			</div>
			<!-- Left Side Content / End -->


			<!-- Right Side Content / End -->
			<div class="right-side">

				<div class="header-widget" style="padding-top: 28px;">
					<a href="pages-login.php"><i class="icon-feather-log-in" ></i> Log In / Register</a>
				</div>

				<!-- Mobile Navigation Button -->
				<span class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</span>

			</div>
			<!-- Right Side Content / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>
<!-- Wrapper -->
<div id="wrapper">

<div class="clearfix"></div>
<div id="titleofregister" class="gradient" style="margin-left:38%; padding:10px;
margin-top:30px; margin-bottom:10px;">
	<h1 style="margin-left:90px; color:#2a41e8;">Register</h1>
	<br />
	<h2>Don't have an account!</h2>
	<h3 style="margin-left:60px;">Register yourself </h3>
</div>

<div class="container">

<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<header class="card-header">
	<a href="" class="float-right btn btn-outline-primary mt-1">Log in</a>
	<h4 class="card-title mt-2">Sign up</h4>
</header>
<article class="card-body">


<form method="post" enctype="multipart/form-data" action="display.php">
	<div class="form-row">
		<div class="col form-group">
			<label>First name </label>   
		  	<input type="text" class="form-control" placeholder="" name="fname">
		</div> <!-- form-group end.// -->
		<div class="col form-group">
			<label>Last name</label>
		  	<input type="text" class="form-control" placeholder=" " name="lname">
		</div> <!-- form-group end.// -->
	</div> <!-- form-row end.// -->
	<div class="form-group">
		<label>Email address</label>
		<input type="email" class="form-control" placeholder="" name="email">
		<small class="form-text text-muted">We'll never share your email with anyone else.</small>
	</div> 
	<div class="form-group">
		<label>Phone number :</label>
		<div class="col form-group" style="display:flex;">
		<input type="text"  value="+91" name="code" style="width:70px;" disabled>
		&nbsp; &nbsp;
		<input type="text" class="form-control" placeholder="" size="10" name="phone">
	</div> 
	<!-- form-group end.// -->
	<div class="form-group">
            <div class="form-check form-check-inline">
                        	<label>Gender : &nbsp;</label>
        
		
		  <input class="form-check-input" type="radio" name="gender" value="male">
		  <span class="form-check-label"> Male &nbsp; </span> 
		  
		  <input class="form-check-input" type="radio" name="gender" value="Female">
		  <span class="form-check-label"> Female</span>
		</div>
	</div> <!-- form-group end.// -->
	<div class="form-row">
		<div class="form-group col-md-6">
		  <label>Post code</label>
		  <input type="text" class="form-control" name="code">
		</div> <!-- form-group end.// -->
		<div class="form-group col-md-6">
		  <label>Date of birth</label>
		  <input type="date" class="form-control" name="dob">
		</div> <!-- form-group end.// -->
	</div> <!-- form-row.// -->
	<div class="form-row">
		<div class="form-group col-md-6">
		  <label><label for="city">City: </label> </label>
			<select name="city" id="" class="form-control">
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
		<div class="form-group col-md-6">
		  <label>Country</label>
		  <select id="inputState" class="form-control" name="country">
		    <option value="1"> Choose...</option>
		      <option value="2">Uzbekistan</option>
		      <option value="3">Russia</option>
		      <option selected="">United States</option>
		      <option value="4">India</option>
		      <option value="5">Afganistan</option>
		  </select>
		</div> <!-- form-group end.// -->
	</div> 
	<div class="form-group">
	
		<label>Create password</label>
	    <input class="form-control" type="password" name="password">
	</div>
   <div class="form-group">
		<label>Confirm password</label>
	    <input class="form-control" type="password" name="cpassword">
	</div>
   <div class="form-group">
	
		<label>Profile photo :</label>
	    <input class="form-control" type="file" name="profilepic">
	</div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block" name="signup"> Register  </button>
    </div> <!-- form-group// -->      
 </div>                                 
</form>
</article> <!-- card-body end .// -->
<div class="border-top card-body text-center">Have an account? <a href="pages-login.php">Log In</a></div>
</div> <!-- card.// -->
</div> <!-- col.//-->

</div> <!-- row.//-->


</div> 

<div class="margin-top-70"></div>
<!-- Spacer / End-->

<?php include 'include/footer.php'; ?>

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
<script>
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

<!-- Mirrored from www.vasterad.com/themes/hireo/pages-register.html by HTTrack Website Copier/3.x [XR&CO'2017], Fri, 26 Feb 2021 19:00:07 GMT -->
</html>
