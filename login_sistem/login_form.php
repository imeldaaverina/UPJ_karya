<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   // $nama_user = mysqli_real_escape_string($conn, $_POST['nama_user']);
   $email_user = mysqli_real_escape_string($conn, $_POST['email_user']);
   $password_user = md5($_POST['password_user']);
   // $cpass = md5($_POST['cpassword']);
   // $user_type = $_POST['user_type'];

   $password_user2 = md5($password_user);

   $select = " SELECT * FROM user WHERE email_user = '$email_user' && password_user = '$password_user2' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);
      // $_SESSION['nama_user'] = $row['nama_user'];
      header('location:user_page.php');
      
     
   }else{
      $error[] = 'incorrect email or password!';
   }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email_user" required placeholder="enter your email">
      <input type="password" name="password_user" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="register_form.php">register now</a></p>
   </form>

</div>

</body>
</html>