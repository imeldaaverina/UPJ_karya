
<?php require_once('config.php') ?>

<?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>

<!-- Retrieve all posts from database  -->
<?php $posts = getPost(); ?>
<?php require_once( ROOT_PATH . '/includes/head_section.php') ?>

<style>
    @font-face {
    font-family: Montserrat;
    src: url("../public/font/Montserrat-Regular.ttf");
  }

  @font-face {
    font-family: Montserrat-Bold;
    src: url("../public/font/Montserrat-ExtraBold.ttf");
  }

  @font-face {
    font-family: Montserrat-B;
    src: url("../public/font/Montserrat-Bold.ttf");
  }

  @font-face {
    font-family: Montserrat-Med;
    src: url("../public/font/Montserrat-Medium.ttf");
  }
        </style>
    </head>

    <body>  
        <header>
        <?php include( ROOT_PATH . '/includes/navbar.php') ?>
        
        </header>
        <body>
<div class="homecontainer">
        <div class="homepage">
            <div class="flex-container-2">
                <!-- <% dbBerita.slice(0, 1).forEach(news => { %> -->
                <div class="flex-item-2-1">
                     <!-- <%# ini butuh request thumbnail %> -->
                 <a href='/projeksbd/upj_karya/newspage.php'><img src="<?php echo BASE_URL . '/static/img/' . $posts['thumbnail']; ?>" style='width: 764px; height: 437px;'></a>
             </div>
                <div class="flex-item-2-2">
                    <div class="flex-item-2-2-1">
                         <!-- <%# ini butuh request judul %> -->
                 <a href='/projeksbd/upj_karya/newspage.php'><?php echo $posts['judul']; ?></a>
             </div>
                    <div class="flex-item-2-2-2">
                        <div class="sepak-bola">
                            <!-- <%# ini butuh request kategori berita di "sepak bola"nya %> -->
                            <a href=""><span style="color:#0082C6"><?php echo $posts['id_kategori']; ?></span></a> | UPJKarya
                        </div>
                        <div class="tanggal">
                            <!-- <%# ini butuh request tanggal dan jam upload berita %> -->
                            <!-- <%= news.updatedAt %> -->
                        </div>
                    </div>
                </div>
                <!-- <% }) %> -->
            </div>
    
            <div class="edusport">
                <p class="font-1">Artikel Trending</p>
                <?php 
                $koneksi = mysqli_connect("localhost", "root", "", "upj_karya");
                $trend = "SELECT * FROM Artikel WHERE trending=0";
                $hasil = mysqli_query($koneksi, $trend);
                
                $trendings = 1; 
                while($trending = mysqli_fetch_assoc($hasil)){
                     ?>
                    
                    <div class="edunews-2">
                    <div class="thumbnail-edu"> 
                    <?php echo "<img src='static/img/".$posts['thumbnail']."' width='126px' height='77px'>"; ?>
                    </div>
                    <div class="berita-edu">
                        <div class="edu-judul-berita">
                            
                            <a href=""><?php echo $trending["judul"]; ?>
                            </a>
                        </div>
                       <div class="edu-jenis-berita">
                            
                            <a href="" class="font-2">
                         <?php echo $trending["id_kategori"]; ?>
                            </a>
                        </div>
                    </div>
                </div>
                <?php if($trendings == 4){break;} ?>
                <?php 
                $trendings++;
               
                }
                ?>
                
                
            </div>
        
        </div>

        <div class="homepage-2">
            <div class="bagian-berita">
                <div class="trending-section">
                    <div class="judul-trending">Artikel Terbaru</div>
                    <div class="berita-trending">
                    <!-- $trendings = 1; do{
                    $trendings++; -->
                    
                    <?php 
                    // $post = $posts;
                    $post = 1;
                    
                    // $conn = mysqli_connect($server,$username,$password,$database) or die("Koneksi gagal");
                    $sql = "SELECT * FROM Artikel ORDER BY tanggal_upload DESC";
                    $result = mysqli_query($conn, $sql);
                    while ($posts = mysqli_fetch_assoc($result)) {
                        ?>
                        
                        <div class="kolom-berita-2">
                            <div class="thumbnail-trending">
                                <!-- <%# ini butuh request thumbnail %> -->
                                <?php echo "<img src='static/img/".$posts['thumbnail']."' width='286px' height='171px'>"; ?>                            </div>
                            <div class="trending-jenis-berita">
                                <!-- <%# ini butuh request kategori %> -->
                                <a href="" class="font-2"><span style="color:#0082C6"><?php echo $posts['id_kategori']; ?> </span></a> | UPJKarya</div>
                            <div class="trending-judul-berita">
                                <!-- <%# ini butuh request judul %> -->
                                <a href="/projeksbd/upj_karya/newspage.php" ><?php echo $posts['judul']; ?></a>
                            </div>
                        </div>
                       <?php if($post == 4){break;} ?>
                    <?php $post++;
                } ?>
                       
                    <!-- } 
                while ($trendings <= 4); -->
                    </div>
                </div>
            </div>
        </div>  
    </div>
        <footer>
        <?php include( ROOT_PATH . '/includes/footer.php') ?>
        </footer>
    </body>
</html>