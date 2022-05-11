<?php
   //  $conn = mysqli_connect("localhost", "root", "", "upj_karya");
   //  mysqli_query($conn, "INSERT INTO User VALUES ('$nama_user', '$isi_artikel', '$password')");
   $conn = mysqli_connect("localhost", "root", "", "upj_karya");

   $judul = $_POST['judul'];
   $isi_artikel = $_POST['isi_artikel'];
   $tanggal_upload = $_POST['tanggal_upload'];
   
   // $conn = mysqli_connect("localhost", "root", "", "upj_karya");
   mysqli_query($conn, "INSERT INTO User VALUES ('', '$judul', '$isi_artikel', '$tanggal_upload')");

   // echo "Data User";
   // echo "<br/> <br/>";
   // echo  $_POST['judul'];

   $query = "INSERT INTO User VALUES ('', '$judul', '$isi_artikel', '$tanggal_upload')";
mysqli_query($conn, $query);
$_SESSION['judul'] = $judul;
$_SESSION['success'] = "Berhasil login";
header('location: newspage.php');
?>

