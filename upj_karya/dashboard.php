<!DOCTYPE html>
<html>
<head>
    <title>Dashboard author</title>
</head>
<?php require_once('config.php') ?>
<!-- Retrieve all posts from database  -->
<?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>

<!-- Retrieve all posts from database  -->

<body>
    <h1>halo <?php echo $_SESSION['nama_author'];?></h1>
    <br/>
    <br/>
    Ingin mengunggah artikel?
    <br/>
    <br/>
    <a href='./form_tambah.php?aksi=tambah'>Unggah</a><br><br>
    <?php
$koneksi = mysqli_connect("localhost","root","","upj_karya") or die("Koneksi gagal");
$sql = mysqli_query($koneksi,"SELECT * FROM artikel ORDER BY judul");


while($data=mysqli_fetch_assoc($sql)){
echo $data['id_kategori'];
echo "<br>";
echo $data['judul'];
echo "<br>";
if($data['thumbnail']!=""){
echo "<img src='static/img/".$data['thumbnail']."' width='100px'>";
}else{
echo "<img src='../foto/foto.png' width='100px'>";
}
echo "<br><a href='./proses.php?aksi=delete&id_artikel=$data[id_artikel]'>Hapus</a> | <a href='./form_tambah.php?aksi=edit&id_artikel=$data[id_artikel]'>Edit</a>";
echo "<hr>";
}
?>
    <!-- <button class="button" onclick="document.location.href='/projeksbd/upj_karya/form_tambah.php'">Unggah</button> -->
</body>
</html>