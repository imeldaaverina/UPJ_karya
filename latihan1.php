<?php
$server =  "localhost";
$username = "root";
$password = "";
$database = "upj_karya";

// Koneksi dan memilih database di server
$kon = mysqli_connect($server,$username,$password,$database) or die("Koneksi gagal");

$query = mysqli_query($kon,"SELECT * FROM artikel");
echo '<table border="1">
  <tr>
    <th>NAMA</th>
    <th>NO. TLP</th>
    <th>FOTO</th>
   </tr>';
while ($data = mysqli_fetch_assoc($query)){
	echo '<tr>
		<td>'.$data["judul"].'</td>
		<td>'.$data["nama_author"].'</td>';
	echo '</tr>';
}	
echo'</table>';

?>
