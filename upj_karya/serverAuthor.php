<?php
session_start();
@include 'config.php';
// initializing variables
$id_author = "";
$nama_author = "";
$email_author    = "";
$password_author    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'upj_karya');

// REGISTER author
if (isset($_POST['reg_author'])) {
  // menerima value yg diinput dari formnya
  $id_author = mysqli_real_escape_string($db, $_POST['id_author']);
  $nama_author = mysqli_real_escape_string($db, $_POST['nama_author']);
  $email_author = mysqli_real_escape_string($db, $_POST['email_author']);
  // $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // validasi untuk form --> untuk mengfalidasi data yg dimasukin udah benerr
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($id_author)) { array_push($errors, "Diperlukan NIM"); }
  if (empty($nama_author)) { array_push($errors, "Diperlukan username"); }
  if (empty($email_author)) { array_push($errors, "Diperlukan email"); }
  if (empty($password_1)) { array_push($errors, "Diperlukan password"); }
  if ($password_1 != $password_2) {
	array_push($errors, "Konfirmasi password tidak sesuai");
  }

  // first check the database to make sure 
  // a user does not already exist with the same nama_user and/or email_user
  $user_check_query = "SELECT * FROM author WHERE id_author='$id_author' OR nama_author='$nama_author' OR email_author='$email_author' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['id_author'] === $id_author) {
      array_push($errors, "NIM sudah digunakan");
    }

    if ($user['nama_author'] === $nama_author) {
      array_push($errors, "username sudah digunakan");
    }

    if ($user['email_author'] === $email_author) {
      array_push($errors, "email sudah digunakan");
    }
    
  }

  //Kalo dah gaada eror, baru deh bisa register
  if (count($errors) == 0) {
  	// $password = md5($password_1);//encrypt the password before saving in the database
    if(preg_match("/@student.upj.ac.id\z/i", $email_author)) {
  	$query = "INSERT INTO author (id_author, nama_author, email_author, password_author) 
  			  VALUES('$id_author', '$nama_author', '$email_author', '$password_1')";
  	mysqli_query($db, $query);
  	$_SESSION['nama_author'] = $nama_author;
  	$_SESSION['success'] = "Berhasil login";
  	header('location: dashboard.php');
    }else{
      array_push($errors, "Harus menggunakan email UPJ");
    }
  }
}


//LOGIN

if (isset($_POST['login_author'])) {
    $id_author = mysqli_real_escape_string($db, $_POST['id_author']);
    $nama_author = mysqli_real_escape_string($db, $_POST['nama_author']);
    $password_author = $_POST['password_author'];
  
    if (empty($id_author)) {
        array_push($errors, "Masukkan NIM");
    }
    if (empty($nama_author)) {
      array_push($errors, "Masukkan nama author");
  }
    if (empty($password_author)) {
        array_push($errors, "Masukkan password");
    }
  
    if (count($errors) == 0) {
     
        $query = "SELECT * FROM author WHERE id_author='$id_author' AND password_author='$password_author'";
        $results = mysqli_query($db, $query);
    
          if (mysqli_num_rows($results) == 1) {
            $_SESSION['id_author'] = $id_author;
            $_SESSION['nama_author'] = $nama_author;
            $_SESSION['success'] = "You are now logged in";
            header('location: dashboard.php');
          }
          else {
  
              array_push($errors, "Nama atau password salah");
          }
       

        // if (mysqli_num_rows($results) == 1) {
        //   $_SESSION['nama_author'] = $nama_author;
     
        //   $_SESSION['success'] = "You are now logged in";
        //   header('location: index.php');
        // }
        // else {

        //     array_push($errors, "Wrong username/password combination");
        // }
    }
  //   else {
  //     array_push($errors, "salah");
  // }
  }

  ?>
  