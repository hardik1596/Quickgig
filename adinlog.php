<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

	<style type="text/css">
		@import url("https://fonts.googleapis.com/css?family=Montserrat:700");
    body{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
.hero {
  background-color: /*#0040C1;*/#366CD5;
  position: relative;
  height: 100vh;
  overflow: hidden;
  font-family: "Montserrat", sans-serif;
}

.hero__title {
  color: #fff;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 50px;
  z-index: 1;
}

.cube {
  position: absolute;
  top: 80vh;
  left: 45vw;
  width: 10px;
  height: 10px;
  border: solid 1px #143679;
  transform-origin: top left;
  transform: scale(0) rotate(0deg) translate(-50%, -50%);
  -webkit-animation: cube 12s ease-in forwards infinite;
          animation: cube 12s ease-in forwards infinite;
}
.cube:nth-child(2n) {
  border-color: #0051f4;
}
.cube:nth-child(2) {
  -webkit-animation-delay: 2s;
          animation-delay: 2s;
  left: 25vw;
  top: 40vh;
}
.cube:nth-child(3) {
  -webkit-animation-delay: 4s;
          animation-delay: 4s;
  left: 75vw;
  top: 50vh;
}
.cube:nth-child(4) {
  -webkit-animation-delay: 6s;
          animation-delay: 6s;
  left: 90vw;
  top: 10vh;
}
.cube:nth-child(5) {
  -webkit-animation-delay: 8s;
          animation-delay: 8s;
  left: 10vw;
  top: 85vh;
}
.cube:nth-child(6) {
  -webkit-animation-delay: 10s;
          animation-delay: 10s;
  left: 50vw;
  top: 10vh;
}

@-webkit-keyframes cube {
  from {
    transform: scale(0) rotate(0deg) translate(-50%, -50%);
    opacity: 1;
  }
  to {
    transform: scale(20) rotate(960deg) translate(-50%, -50%);
    opacity: 0;
  }
}

@keyframes cube {
  from {
    transform: scale(0) rotate(0deg) translate(-50%, -50%);
    opacity: 1;
  }
  to {
    transform: scale(20) rotate(960deg) translate(-50%, -50%);
    opacity: 0;
  }
}
form div i{
    position: absolute;
    padding: 10px;
    color: black;

  }
	</style>
  

</head>
<body>

<div class="hero"> 
  <div class="hero__title">
  	<div class="center">
      <i class="fa fa-user-circle fa-2x" style="margin: 0 0 30px 115px; color: white; padding: 0; "></i>
    <div class="head" style="margin: 0 0 30px 0px; ">Admin Login</div>
    <div class="form">
      <form method="Post" action="display.php">
        <div style="display: flex; ">
          <i class="far fa-user fa-sm" style="font-size: .700em"></i>
          <input type="text" name="user" placeholder="Username" style="width: 100%; padding: 10px 0px 20px 60px; font-size: 20px; width: 100%" />
        </div>
        <div style="display: flex; padding-top: 40px;">
          <i class="fas fa-fingerprint fa-sm" style="font-size: .700em"></i>
          <input type="Password" name="pass" placeholder="Password" style="width: 100%; padding: 10px 0 20px 60px; font-size: 20px;" />
        </div>
        <button name="admin" class="" style="background: white; font-size: 20px; margin-top: 10px; padding: 10px 15px; color: #0040C1; border: 1px solid black; border-radius: 7px; font-weight: bolder; margin-left: 35%; cursor: pointer;">Login</button>
      </form>
    </div>
  </div>
  </div>
  <div class="cube"></div>
  <div class="cube"></div>
  <div class="cube"></div>
  <div class="cube"></div>
  <div class="cube"></div>
  <div class="cube"></div>
</div>
</body>
</html>
