<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" id="styles" type="text/css" href="../public/css/all.css">
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
            <div class="navbar-tray">
                <div class="logo"><img src="../public/img/Karya.png" width="100%"/>
                </div>
        
                <!-- <%# highlight category tray request direct page sesuai kategori %> -->
                <div class="highlight-ctgr">
                    <ul>
                        <li class="highlight-ctgr-items"><a href="/sepakbola">UPJ</a></li>
                        <li class="highlight-ctgr-items"><a href="/bulutangkis">Kewirausahaan</a></li>
                        <li class="highlight-ctgr-items" id="select-sizing" style="color: white;">
                            <a href="#!" class="head"> FTD &nbsp;
                                <div class="arrow-down"></div>
                            </a>
                            <div class="dropdownContain">
                                <div class="dropOut">
                                    <div class="triangle"></div>
                                    <ul>
                                        <li><a href="/bolavoli">Desain Komunikasi Visual</a></li>
                                        <li><a href="/panahan">Desain Product</a></li>
                                        <li><a href="/renang">Teknik Informatika</a></li>
                                        <li><a href="/beladiri">Sistem Informasi</a></li>
                                        <li><a href="/angkatbesi">Arsitektur</a></li>
                                        <li><a href="/otomotif">Teknik Sipil</a></li>
                                    </ul>
                                </div>
                            </div>
                            
                        </li>
                        <li class="highlight-ctgr-items" id="select-sizing">
                            <a href="#!" class="head"> FHB &nbsp;
                                <div class="arrow-down"></div>
                            </a>
                            <div class="dropdownContain">
                                <div class="dropOut">
                                    <div class="triangle"></div>
                                    <ul>
                                        <li><a href="/bolavoli">Manajemen</a></li>
                                        <li><a href="/panahan">Akuntansi</a></li>
                                        <li><a href="/renang">Psikologi</a></li>
                                        <li><a href="/beladiri">Ilmu Komunikasi</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
        
                <!-- <%# search bar request direct page sesuai yang dicari %> -->
                <form class="search-bar">
                    <input type="text" placeholder="Search...">
                    <button type="submit">
                        <img src="../public/icon/search_ic.svg"/>
                    </button>
                </form>
                <!-- <% if (loggedName) { %> -->
                <div class="access-user">
                    <!-- <div class="sublogo" id="user">
                         <%# request profile pict from database on the css %> -->
<!--         
                    </div>
                    <ul>
                        <li id="select-sizing-user">
                            <a href="#!" class="nama-user">
                                 <%= loggedName %> -->
                                <!-- <div class="arrow-down-user"></div>
                            </a>
                            <div class="access-user-dropdownContain">
                                <div class="dropOut">
                                    <div class="triangle"></div>
                                    <ul> --> 
                                        <!-- <%# request direct page to lists below %> -->
                                        <!-- <li><a href="/logout">Keluar</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div> -->
                <!-- <% } else if (loggedNameAdmin) { %> -->
                    <!-- <div class="access-user">
                        <div class="sublogo" id="user"> -->
                            <!-- <%# request profile pict from database on the css %> -->
<!--             
                        </div>
                        <ul>
                            <li id="select-sizing-user">
                                <a href="#!" class="nama-user"> -->
                                    <!-- <%= loggedNameAdmin %> -->
                                    <!-- <div class="arrow-down-user"></div>
                                </a>
                                <div class="access-user-dropdownContain">
                                    <div class="dropOut">
                                        <div class="triangle"></div>
                                        <ul> -->
                                            <!-- <%# request direct page to lists below %> -->
                                            <!-- <li><a href="/logout">Keluar</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div> -->
                <!-- <% } else { %> -->
                    <form class="access">
                        <button type="submit" class="login-button"> Log In </button>
                        <button type="submit" class="register-button"> Register </button>
                    </form>
                    </div>
                <!-- <% } %> -->
        </header>
        <body>
<div class="homecontainer">
        <div class="homepage">
            <div class="flex-container-2">
                <!-- <% dbBerita.slice(0, 1).forEach(news => { %> -->
                <div class="flex-item-2-1">';
                     <!-- <%# ini butuh request thumbnail %> -->
                 <a href=''><img src="<?php echo $data['thumbnail'] ?>" style='width: 764px; height: 437px;'></a>
             </div>
                <div class="flex-item-2-2">
                    <div class="flex-item-2-2-1">';
                         <!-- <%# ini butuh request judul %> -->
                 <a href='/sbd-kel7-2021/pages/newspage.php'><?php echo $data['judul']; ?></a>
             </div>
                    <div class="flex-item-2-2-2">
                        <div class="sepak-bola">
                            <!-- <%# ini butuh request kategori berita di "sepak bola"nya %> -->
                            <a href=""><span style="color:#0082C6"><?php echo $data['kategori']; ?></span></a> | UPJKarya
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
                <!-- <% dbBerita.slice(0, 4).forEach(newsEdu => { %> -->
                <div class="edunews-2">
                    <div class="thumbnail-edu">
                        <!-- <%# ini butuh request thumbnail %> -->
                        <img style="width: 126px; height: 77px;" src="">
                    </div>
                    <div class="berita-edu">
                        <div class="edu-judul-berita">
                            <!-- <%# ini butuh request judul %> -->
                            <a href=""><?php echo $data['judul']; ?></a>
                        </div>
                        <div class="edu-jenis-berita">
                            <!-- <%# ini butuh request kategori %> -->
                            <a href="" class="font-2"><?php echo $data['kategori']; ?></a>
                        </div>
                    </div>
                </div>
                
            </div>
        
        </div>

        <div class="homepage-2">
            <div class="bagian-berita">
                <div class="trending-section">
                    <div class="judul-trending">Artikel Terbaru</div>
                    <div class="berita-trending">
                        <!-- <% betren.slice(0, 3).forEach(newsTrend => { %> -->
                        <div class="kolom-berita-2">
                            <div class="thumbnail-trending">
                                <!-- <%# ini butuh request thumbnail %> -->
                                <img style="width: 286px; height: 171px;" src="">
                            </div>
                            <div class="trending-jenis-berita">
                                <!-- <%# ini butuh request kategori %> -->
                                <a href="" class="font-2"><span style="color:#0082C6">Sistem Informasi </span></a> | UPJKarya</div>
                            <div class="trending-judul-berita">
                                <!-- <%# ini butuh request judul %> -->
                                <a href="">Judul Artikel</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>  
    </div>
        <footer>
            <div class="footer-tray">
                <div class="logo-footer">
                    <p id="rights-footer">© 2021 Kelompok 7 SBD, All Right Reserved</p>
                </div>
            </div>
        </footer>
    </body>
</html>';
?>