<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Ayo, daftarkan akunmu!</title>
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
	  *{
	     font-family: Montserrat-B;
       }
	   .bg {
  /* The image used */
  background-image: url("upjbg2.png");

  /* Full height */
  height: 100%;
  margin-top:-40px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
  </style>
</head>
<body class="bg">
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="nama_user" value="<?php echo $nama_user; ?>" style='font-family:Montserrat-Med'>
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email_user" value="<?php echo $email_user; ?>" style='font-family:Montserrat-Med'>
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1" style='font-family:Montserrat-Med'>
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2" style='font-family:Montserrat-Med'>
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p style='font-family:Montserrat-Med'>
  		Sudah punya akun? <a href="login.php">Log in</a>
  	</p>
  </form>
</body>
</html>