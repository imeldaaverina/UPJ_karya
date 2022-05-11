<?php
 $conn = mysqli_connect("localhost", "root", "", "upj_karya");
 $listauthor = mysqli_query($conn, "SELECT * FROM author");

 echo '<h2>Yuk, kenalan dengan penulis kami!</h2>';
 echo '<table border="1">
  <tr>
    <th>Id</th>
    <th>Nama</th>
    <th>Email</th>
   </tr>';
 while ($data = mysqli_fetch_assoc($listauthor)){
	echo '<tr>
		<td>'.$data["id_author"].'</td>
        <td>'.$data["nama_author"].'</td>
        <td>'.$data["email_author"].'</td>';
	echo '</tr>';
}	
echo'</table>';
?>