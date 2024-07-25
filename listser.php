<?php 
session_start();
include 'include/conn.php';
                    
                $id=$_SESSION['uid'];
                  $sql="SELECT * FROM `user` WHERE  user_id='$id'";
                  $result=$con->query($sql);
                  $we=$result->fetch_object();
                  $ids=$_GET['sid'];
                             
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

<div class="clearfix"></div>
<section class="brows-job-category gray-bg">
        <div class="container">
          <div class="col-md-9 col-sm-12">
            <div class="card-body">
              <?php  
                  $sq="SELECT emp.*,u.* FROM employee as emp JOIN user AS u ON emp.user_id=u.user_id WHERE emp.cat_id='$ids' ";
                $result=$con->query($sq);
                while ($we=$result->fetch_object()) {
              ?>
                <article class="advance-search-job">
                  <div class="row no-mrg">
                    <div class="col-md-6 col-sm-6">
                      <a href="new-job-detail.html" title="job Detail">
                        <div class="advance-search-img-box">
                          <img src="assets/img/com-2.jpg" class="img-responsive" alt="">
                        </div>
                      </a>
                      <div class="advance-search-caption">
                        <a href="new-job-detail.html" title="Job Dtail"><h4><?php echo $we->gig_title; ?></h4></a>
                        <span><?php echo "$".$we->price_hour;; ?></span>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <div class="advance-search-job-locat">
                        <p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
                      </div>
                    </div>
                    <div class="col-md-2 col-sm-2">
                      <a href="#"  data-toggle="modal" data-target="#apply-job" class="btn advance-search" title="apply">Apply</a>
                    </div>
                  </div>
                </article>
                <?php } ?>
              </div>
            </div>
          </div>
        </section>

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