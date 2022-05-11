<?php 
/* * * * * * * * * * * * * * *
* Returns all published posts
* * * * * * * * * * * * * * */

function getPost() {
	// use global $conn object in function
	// global $conn;
    $server =  "localhost";
    $username = "root";
    $password = "";
    $database = "upj_karya";

    $conn = mysqli_connect($server,$username,$password,$database) or die("Koneksi gagal");
	$sql = "SELECT * FROM Artikel";
	$result = mysqli_query($conn, $sql);

	// fetch all posts as an associative array called $posts
	$posts = mysqli_fetch_assoc($result);

	// $trend = "SELECT * FROM Artikel WHERE trending=true";
	// $result = mysqli_query($conn, $trend);
	// $trending = mysqli_fetch_assoc($result);

	// return [$posts, $trending];
	return $posts;
}




// more functions to come here ...
?>