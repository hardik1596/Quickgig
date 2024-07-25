<!DOCTYPE html>
<html>
<head>
  <title>Admin-login</title>
  <link rel="stylesheet" type="text/css" href="css/custom.css">
  <link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/colors/blue.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<style type="text/css">
  div i{
    position: absolute;
    padding: 10px;
  }
</style>
</head>
<body>

<div id="stars-container">
  <div class="center" style="position: absolute;font-size: 30px;  left:40%; top: 20%;">
    <i class="fa fa-user-circle fa-2x" style="position: relative; left: 45%; color: blue;"></i>
    <div class="head" style="position: relative;font-size: 30px; left: 25%;">Admin Login</div>
    <div class="form">
      <form method="Post" action="display.php">
        <div style=" padding: 30px 0px 0 0px; width: 140%; display: flex;">
          <i class="far fa-user fa-sm"></i>
          <input type="text" name="user" placeholder="Username" style="border: 1px solid black; padding: 0 0 0 50px;" />
        </div>
        <div style=" padding: 20px 0px; width: 140%; display: flex;">
          <i class="fas fa-fingerprint fa-sm"></i>
          <input type="Password" name="pass" placeholder="Password" style="border: 1px solid black; padding: 0 0 0 50px;"/>
        </div>
        <button name="admin" class="button ripple-effect big margin-top-30" style="position: absolute; top:80%; left: 40%; width: 70% ">Login<button>
      </form>
    </div>
  </div>
      <div id='stars'></div>
      <div id='stars2'></div>
      <div id='stars3'></div>
</div>

</body>
</html>