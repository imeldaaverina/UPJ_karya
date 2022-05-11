<?php
// $koneksi = mysqli_connect("localhost","root","","upj_karya") or die("Koneksi gagal");
// $sql = mysqli_query($koneksi,"SELECT * FROM artikel");
// $sqlcon = mysqli_fetch_assoc(mysqli_query($koneksi,"SELECT COUNT(nama) as jumlah FROM phonebook "));

// echo $data['judul'];


$koneksi = mysqli_connect("localhost","root","","upj_karya") or die("Koneksi gagal");
$sql = mysqli_query($koneksi,"SELECT * FROM artikel");
$sqlcon = mysqli_fetch_assoc(mysqli_query($koneksi,"SELECT COUNT(judul) as jumlah FROM artikel "));
echo "<h2>Judul Artikel :</h2><br>";
// echo "<a href='./proses.php?aksi=tambah'>TAMBAH</a><br><br> ";
while($data=mysqli_fetch_assoc($sql)){
echo $data['judul'];
echo "<br>";
echo $data['nama_author'];
echo "<br>";
if($data['foto']!=""){
echo "<img src='foto/".$data['foto']."' width='100px'>";
}else{
echo "<img src='foto/foto.png' width='100px'>";
}
echo "<br><a href='./proses.php?aksi=delete&id=$data[id]'>Hapus</a> | <a href='./proses.php?aksi=edit&id=$data[id]'>Edit</a>";
echo "<hr>";
}
?>
