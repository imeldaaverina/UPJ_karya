<?php
echo '
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" id="styles" type="text/css"  href="../public/css/all.css">
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
            <!-- <%- include("../partial/header", {loggedName}, {loggedNameAdmin}) %> -->
           
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
        <div class="all">
            <div class="container">
               
                <div class="home-berita">
                    <!-- a href untuk kembali ke homepage -->
                    <a href="/">Home</a> > <span style="color: #0082C6;">Berita</span>
                </div>
            </div>
            <div class="content">
                <div class="judul">
                    <!-- <%= Berita.judulBerita %> -->
                    <!-- butuh request judul -->
                    <!-- Komentar Pedas Shin Tae-yong Bikin Kaget Pelatih Thailand Jelang Hadapi Timnas Indonesia di Final Piala AFF 2020 -->
                </div>
                <div class="thumbnail">
                    <!-- butuh request thumbnail -->
                    <!-- <img src="<%= Berita.imageBerita %>"> -->
                    <!-- /images/925x621.png -->
                    <img src=""/>
                </div>
                <div class="penulis">
                    <div class="profil">
                        <div class="logo-profil"></div>
                        <div class="penulis-2">
                            <div class="nama-penulis">
                                <!-- <%= Berita.admin_name %> -->
                            </div>
                            <div class="jabatan">Penulis</div>
                        </div>
                    </div>
                    <div class="laporkan">
                        <div class="logo-bendera"></div>
                        <div class="laporkan-berita">
                            <a href="/laporan">Laporkan Berita</a>
                        </div>
                    </div>
                </div>
                <div class="tanggal-komentar">
                    <div class="tanggal-1">
                        <!-- <%= Berita.createdAt %> -->
                        <!-- ini butuh request tanggal dan waktu upload -->
                        <!-- 28 Desember 2021 20:49 WIB -->
                    </div>
                    <!-- <div class="logo-komentar-link">
                        <a href="#komentar"><div class="logo-komentar"></div></a>
                        <div class="logo-link" onclick="copyToClipboard("popUp")">
                        </div>
                    </div> -->
                </div>
                <div class="berita-section">
                    <div class="berita">
                        <div class="isi-berita" id="isi-berita">
                            <!-- <%= Berita.isiBerita %> -->
                        </div>
                    </div>
                    <div class="berita-terkait">
                        <span class="font">Artikel Lainnya</span>
                        <div class="kolom-berita-terkait">
                            <!-- <% dbBerita.slice(-4).forEach(news => { %> -->
                            <div class="baris-berita">
                                <div class="thumbnail-berita">
                                    <!-- ini butuh request thumbnail -->
                                    <!-- <img src="<%= news.imageBerita %>"> -->
                                    <img src=""/>
                                </div>
                                <div class="judul-kategori-berita-terkait">
                                    <div class="judul-berita-terkait">
                                        <!-- ini butuh request judul -->
                                        <a href="/details/<%= news.id %>">
                                            <!-- <%= news.judulBerita %> -->
                                        </a>
                                    </div>
                                    <div class="kategori-berita-terkait">
                                        <!-- ini butuh request kategori -->
                                        <a href="" class="font-2" >
                                            <!-- <%= news.kategori %> -->
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- <% }) %> -->
                            <!--<div class="baris-berita-2">
                                <div class="thumbnail-berita">
                                    
                                    <img src="/images/126x77.png">
                                </div>
                                <div class="judul-kategori-berita-terkait">
                                    <div class="judul-berita-terkait">
                                        
                                        <a href="">judul berita</a>
                                    </div>
                                    <div class="kategori-berita-terkait">
                                        
                                        <a href="" class="font-2">kategori</a>
                                    </div>
                                </div>
                            </div>
                            <div class="baris-berita-2">
                                <div class="thumbnail-berita">
                                    
                                    <img src="/images/126x77.png">
                                </div>
                                <div class="judul-kategori-berita-terkait">
                                    <div class="judul-berita-terkait">
                                        
                                        <a href="">judul berita</a>
                                    </div>
                                    <div class="kategori-berita-terkait">
                                        
                                        <a href="" class="font-2">kategori</a>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div id="komentar">Komentar</div>
            <div class="content-2">
                <div class="komentar-section">
                    <div class="tulis-komentar">
                        <div class="profil-komentar"></div>
                        <form class="kolom-komentar" action="/details/<%= Berita.id %>" method="post" id="hasilKomentar"> 
                            <input type="text" placeholder="Tulis komentar" name="Komentar"/>
                            <input type="text" id="token" hidden name="token">
                            <!-- <a onclick="sendKomentar()"> 
                                <div class="send">
                                    <img src="../public/icon/send_ic.svg"/>
                                </div>
                            </a> -->
                        </form> 
                        <a onclick="sendKomentar()"> 
                            <div class="send">
                                <img src="../public/icon/send_ic.svg"/>
                            </div>
                        </a>
                    </div>
                    <div class="seluruh-komentar">
                        <!-- <% dbKomentar.forEach(comments => { %> -->
                        <div class="tampilan-komentar">
                            <div class="profil-tampilan-komentar"></div>
                            <div class="nama-dan-komentar">
                                <div class="nama">
                                    <!-- ini butuh request nama penulis komentar -->
                                    <!-- <%= comments.user_name %> -->
                                </div>
                                <div class="komentarnya">
                                    <!-- ini butuh request komentar -->
                                    <!-- <%= comments.isi_komen %> -->
                                </div>
                            </div>
                        </div>
                        <!-- <% }) %> -->
                    </div>
                </div>
            </div>
            <div id="popUp" class="popUp">URL berhasil disalin</div>
        </div>

        <footer>
            <!-- <%- include("../partial/footer") %> -->
            <footer>
                <div class="footer-tray">
                    <div class="logo-footer">
                        <p id="rights-footer">© 2021 Kelompok 7 SBD, All Right Reserved</p>
                    </div>
                </div>
            </footer>
        </footer>
    
    </body>
    <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
    <script src="/js/darkmode.js"></script>
    <script>

        function copyToClipboard(element) {
            var $temp = $("<input>");
            var $url = $(location).attr("href");

            var e = document.getElementById(element)

            $("body").append($temp);
            $temp.val($url).select();
            document.execCommand("copy");

            if(e.style.display == "block") {
               e.style.display = "none";
            }
            else {
               e.style.display = "block";
            }
            console.log("clicked");
            setTimeout(function(){
                e.style.display = "none";
            }, 1000);

            $temp.remove();
            return;
        }
        
        //Mendeklarasikan marked pada isi Berita
        marked.setOptions({ gfm: true, breaks: true })
        document.getElementById("isi-berita").innerHTML = 
        marked.parse("<%= Berita.isiBerita %>")

        // Fungsi Onclick Pada Button Komentar
        function sendKomentar() {
            console.log("tes")
            document.getElementById("hasilKomentar").submit()
        }

        // function sendkomentar() {
        //     document.getElementById("hasilkomentar").submit = function () {
        //         location.href = "/details/:id"
        //     }
        // }

        $(".logo").click(function (){
            window.location.href = "/" /* requesting redirect page on logo click */
        })

        $(".logo-footer").click(function (){
            window.location.href = "/" /* requesting redirect page on logo click */
        })

        // PERLU TINJAU ULANG JS UNTUK CLICK LOGIN DAN REGISTER //

        $(".login-button").click(function () {
            window.location.href = "/login"
            return false
        })

        $(".register-button").click(function () {
            window.location.href = "/register"
            return false
        })
    </script>
</html>';
?>