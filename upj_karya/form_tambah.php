<?php include('serverpost.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Post artikel</title>
    </head>
    <body>
        <p>
            <strong>Ayo unggah artikelmu!</strong>
            <br/>
            <?php 
            $koneksi = mysqli_connect("localhost","root","","upj_karya") or die("Koneksi gagal");
            $aksi=$_GET['aksi'];

            if($aksi=="tambah"){
               
                echo "<form method='POST' action='./form_tambah.php?aksi=simpan' enctype='multipart/form-data'>
                id kategori : <input type='text' name='id_kategori' value=''/><br/>
                Judul : <input type='text' name='judul' value=''/><br/>
                Thumbnail : <input type='file' name='file' value=''/><br/>
                Isi artikel : <input type='text' name='isi_artikel' value=''/><br/>
                Nama author :  <input type='text' name='nama_author' value=''/><br/>
                tanggal : <input type='text' name='tanggal_upload' value=''/>
                    <input type=submit value='SIMPAN' neme='simpan'>
                </form>";
            }elseif ($aksi=="simpan"){
                $thumbnail = $_FILES['file']['name'];
                $file_tmp = $_FILES['file']['tmp_name'];	
             
                move_uploaded_file($file_tmp, 'static/img/'.$thumbnail);
                $sql = mysqli_query($koneksi, "INSERT INTO artikel (id_kategori, judul, thumbnail, isi_artikel, nama_author, tanggal_upload) VALUES('$_POST[id_kategori]', '$_POST[judul]', '$thumbnail', '$_POST[isi_artikel]', '$_POST[nama_author]', '$_POST[tanggal_upload]')");
                
                header('location:dashboard.php');
            }
            ?>
            <!-- <form action="form_tambah.php" method="POST" enctype="multipart/form-data">
                id kategori : <input type="text" name="id_kategori" value="<?php echo $id_kategori; ?>"/><br/>
                Judul : <input type="text" name="judul" value="<?php echo $judul; ?>"/><br/>
          
                Isi artikel : <input type="text" name="isi_artikel" value="<?php echo $isi_artikel; ?>"/><br/>
                Nama author :  <input type="text" name="nama_author" value="<?php echo $nama_author; ?>"/><br/>
                tanggal : <input type="text" name="tanggal_upload" value="<?php echo $tanggal_upload; ?>"/>
                <br/>
                <br/>
                <input type="submit" value="submit" name="post_artikel"/>
            </form> -->
        </p>
    </body>
</html> 