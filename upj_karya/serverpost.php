<?php
session_start();
@include 'config.php';
// initializing variables
$id_kategori = "";
$judul = "";
// $thumbnail = "";
$isi_artikel = "";
$nama_author = "";
$tanggal_upload    = "";
$errors = array(); 
$msg = "";

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'upj_karya');

// REGISTER USER
if (isset($_POST['post_artikel'])) {
  // menerima value yg diinput dari formnya
  $id_kategori = mysqli_real_escape_string($db, $_POST['id_kategori']);
  $judul = mysqli_real_escape_string($db, $_POST['judul']);
  // $thumbnail = $_FILES['thumbnail']['name'];
  // // $thumbnail_text =  mysqli_real_escape_string($db, $_POST['thumbnail_text']);
  // $target = "static/".basename($thumbnail);
  $isi_artikel = mysqli_real_escape_string($db, $_POST['isi_artikel']);
  $nama_author = mysqli_real_escape_string($db, $_POST['nama_author']);
  $tanggal_upload = mysqli_real_escape_string($db, $_POST['tanggal_upload']);
  

  // validasi untuk form --> untuk mengfalidasi data yg dimasukin udah benerr
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($judul)) { array_push($errors, "Diperlukan username"); }
  if (empty($isi_artikel)) { array_push($errors, "Diperlukan email"); }
  // if (empty($thumbnail)) { array_push($errors, "Diperlukan thumbnail"); }
  if (empty($id_artikel)) { array_push($errors, "Diperlukan id artikel"); }
  if (empty($nama_author)) { array_push($errors, "Diperlukan nama author"); }
  if (empty($tanggal_upload)) { array_push($errors, "Diperlukan password"); }

  // if (move_uploaded_file($_FILES['thumbnail']['tmp_name'], $target)) {
  //   $msg = "thumbnail uploaded successfully";
  // }else{
  //   $msg = "Failed to upload thumbnail";
  // }


  // first check the database to make sure 
  // a user does not already exist with the same judul and/or isi_artikel
  $artikel_check_query = "SELECT * FROM artikel WHERE judul='$judul' LIMIT 1";
  $result = mysqli_query($db, $artikel_check_query);
  $artikel = mysqli_fetch_assoc($result);
  
  if ($artikel) { // if artikel exists
    if ($artikel['judul'] === $judul) {
      array_push($errors, "judul sudah digunakan");
    }

  }

  //Kalo dah gaada eror, baru deh bisa register
  if (count($errors) == 0) {
  	// $password = md5($tanggal_upload);//encrypt the password before saving in the database

  	$query = "INSERT INTO artikel  VALUES('', '$id_kategori', '$judul', '$thumbnail', '$isi_artikel', '$nama_author', '$tanggal_upload')";
  	mysqli_query($db, $query);
  	$_SESSION['judul'] = $judul;
  	$_SESSION['success'] = "Berhasil unggah";
  	header('location: afterlogin.php');
  }
}
  
  ?>
  