<!-- GAJADI YG INI ABAIKAN AJA -->




<?php 
// $koneksi = mysqli_connect("localhost","root","","upj_karya") or die("Koneksi gagal");
// $sql = mysqli_query($koneksi,"SELECT * FROM artikel");
// $sqlcon = mysqli_fetch_assoc(mysqli_query($koneksi,"SELECT COUNT(judul) as jumlah FROM artikel "));
	session_start();

	// connect to database
    $conn = mysqli_connect("localhost", "root", "", "upj_karya");

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}

	define ('ROOT_PATH', realpath(dirname(__FILE__)'/../includes/newspage.php'));
	define('BASE_URL', 'http://localhost/sbd-kel7-2021/upj_karya/includes/');
?>