<?php
session_start();
@include 'config.php';
// initializing variables
$nama_user = "";
$email_user    = "";
$password_user    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'upj_karya');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // menerima value yg diinput dari formnya
  $nama_user = mysqli_real_escape_string($db, $_POST['nama_user']);
  $email_user = mysqli_real_escape_string($db, $_POST['email_user']);
  // $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // validasi untuk form --> untuk mengfalidasi data yg dimasukin udah benerr
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($nama_user)) { array_push($errors, "Diperlukan username"); }
  if (empty($email_user)) { array_push($errors, "Diperlukan email"); }
  if (empty($password_1)) { array_push($errors, "Diperlukan password"); }
  if ($password_1 != $password_2) {
	array_push($errors, "Konfirmasi password tidak sesuai");
  }

  // first check the database to make sure 
  // a user does not already exist with the same nama_user and/or email_user
  $user_check_query = "SELECT * FROM user WHERE nama_user='$nama_user' OR email_user='$email_user' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['nama_user'] === $nama_user) {
      array_push($errors, "Username sudah digunakan");
    }

    if ($user['email_user'] === $email_user) {
      array_push($errors, "email sudah digunakan");
    }
  }

  //Kalo dah gaada eror, baru deh bisa register
  if (count($errors) == 0) {
  	// $password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO user (nama_user, email_user, password_user) 
  			  VALUES('$nama_user', '$email_user', '$password_1')";
  	mysqli_query($db, $query);
  	$_SESSION['nama_user'] = $nama_user;
  	$_SESSION['success'] = "Berhasil login";
  	header('location: afterlogin.php');
  }
}


//LOGIN

if (isset($_POST['login_user'])) {
    $nama_user = mysqli_real_escape_string($db, $_POST['nama_user']);
    $password_user = $_POST['password_user'];
  
    if (empty($nama_user)) {
        array_push($errors, "Diperlukan username");
    }
    if (empty($password_user)) {
        array_push($errors, "Diperlukan password");
    }
  
    if (count($errors) == 0) {
      $password_user2 = md5($password_user);
        $query = "SELECT * FROM user WHERE nama_user='$nama_user' AND password_user='$password_user'";
        $results = mysqli_query($db, $query);
    
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['nama_user'] = $nama_user;
     
          $_SESSION['success'] = "You are now logged in";
          header('location: afterlogin.php');
        }
        else {
            array_push($errors, "Nama atau password salah");
        }
    }
  //   else {
  //     array_push($errors, "salah");
  // }
  }
  
  ?>
  