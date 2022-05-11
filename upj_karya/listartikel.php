<?php
 $conn = mysqli_connect("localhost", "root", "", "upj_karya");
 $listartikel = mysqli_query($conn, "SELECT nama_author, judul, tanggal_upload FROM artikel");

 echo '<h2>Mari, lihat-lihat artikel kami lainnya!</h2>';
 echo '<table border="1">
  <tr>
    <th>Nama Author</th>
    <th>Judul</th>
    <th>Tanggal_upload</th>
   </tr>';
 while ($data = mysqli_fetch_assoc($listartikel)){
	echo '<tr>
		<td>'.$data["nama_author"].'</td>
        <td>'.$data["judul"].'</td>
        <td>'.$data["tanggal_upload"].'</td>';
	echo '</tr>';
}	
echo'</table>';
?>