<?php 
  if (!isset($_SESSION['uid'])) {
  	# code...
?>
<header id="header-container" class="fullwidth">

	<!-- Header -->
	<div id="header">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="index.php"><img src="images/logo.png" alt="" class="w-25" style="width: 150px; height: 60px;"></a>
				</div>
				<!-- Main Navigation -->
				<nav id="navigation">
					<ul id="responsive">

						<li><a href="index.php" >Home</a>
							
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
<?php 
  }
else{

include 'include/conn.php';
  $id=$_SESSION['uid'];
                  $sql="SELECT * FROM `user` WHERE  user_id='$id'";
                   
                  $result=$con->query($sql);
                  $we=$result->fetch_object();
	?>

<header id="header-container" class="fullwidth">

	<!-- Header -->
	<div id="header">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="index.php"><img src="images/logo.png" alt="" style="width: 150px;
height: 60px;"></a>
				</div>

				<!-- Main Navigation -->
				<nav id="navigation">
					<ul id="responsive">

						<li><a href="index.php" class="current">Home</a>
							
						</li>


						<li><a href="freelancers-grid-layout.php">Find freelancer</a>
							
						</li>
						<li><a href="post-job.php">Post job</a>
							
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

				<!--  User Notifications -->
				
				<!--  User Notifications / End -->

				<!-- User Menu -->
				<div class="header-widget">

					<!-- Messages -->
					<div class="header-notifications user-menu">
						<div class="header-notifications-trigger">
							<a href="#"><div class="user-avatar status-online"><img src="upload/<?php echo $we->profile; ?>" alt=""></div></a>
						</div>

						<!-- Dropdown -->
						<div class="header-notifications-dropdown">

							<!-- User Status -->
							<div class="user-status">

								<!-- User Name / Avatar -->
								<div class="user-details">
									<div class="user-avatar status-online"><img src="upload/<?php echo $we->profile; ?>" alt=""></div>
									<div class="user-name"><?php echo $we->fname; echo ' '; echo $we->lname?> <span>Freelancer</span>
									</div>w
								</div>
								
								<!-- User Status Switcher -->
								<div class="status-switch" id="snackbar-user-status">
									<label class="user-online current-status">Online</label>
									<label class="user-invisible">Invisible</label>
									<!-- Status Indicator -->
									<span class="status-indicator" aria-hidden="true"></span>
								</div>	
						</div>
						
						<ul class="user-menu-small-nav">
							<li><a href="dashboard.php"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
							<li><a href="dashboard-settings.php"><i class="icon-material-outline-settings"></i> Edit profile</a></li>
							<li><a href="logout.php"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
						</ul>

						</div>
					</div>

				</div>
				<!-- User Menu / End -->

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
<?php  } ?>