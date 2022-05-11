<!-- GAJADI YG INI ABAIKAN AJA -->




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
        <div class="all">
            <div class="container">
               
                <div class="home-berita">
                    <!-- a href untuk kembali ke homepage -->
                    <a href="/">Home</a> > <span style="color: #0082C6;">Berita</span>
                </div>
            </div>
            <div class="content">
                <div class="judul">
                <?php echo $posts['judul']; ?>
                    <!-- <%= Berita.judulBerita %> -->
                    <!-- butuh request judul -->
                    <!-- Komentar Pedas Shin Tae-yong Bikin Kaget Pelatih Thailand Jelang Hadapi Timnas Indonesia di Final Piala AFF 2020 -->
                </div>
                <div class="thumbnail">
                    <!-- butuh request thumbnail -->
                    <!-- <img src="<%= Berita.imageBerita %>"> -->
                    <!-- /images/925x621.png -->
                    <img src="<?php echo BASE_URL . '/static/img/' . $posts['thumbnail']; ?>"/>
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
        <?php include( ROOT_PATH . '/includes/footer.php') ?>
        </footer>
        </footer>
    
    </body>
    <!-- <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
    <script src="/js/darkmode.js"></script> -->
    <!-- <script>

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
    </script> -->
</html>