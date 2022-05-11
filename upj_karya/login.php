<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>
	  Login yuk!</title>
  <link rel="stylesheet" type="text/css" href="static/css/styles.css">
  <style>
	  @font-face {
    font-family: Montserrat-B;
    src: url("../public/font/Montserrat-Bold.ttf");
  }
  @font-face {
    font-family: Montserrat-Med;
    src: url("../public/font/Montserrat-Medium.ttf");
  }
	  .bg {
  /* The image used */
  background-image: url("upjbg.png");

  /* Full height */
  height: 100%;
  margin-top: 140px; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
*{
	font-family: Montserrat-B;
}
  </style>
</head>
<body  class="bg">
	<!-- <div class="bg"> -->
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="nama_user"  style='font-family:Montserrat-Med'>
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password_user"  style='font-family:Montserrat-Med'>
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p  style='font-family:Montserrat-Med'>
  		Belum punya akun? <a href="register.php">Sign up</a>
  	</p>
  </form>
<!-- </div> -->
</body>
</html>