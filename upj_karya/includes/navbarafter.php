<link rel="stylesheet" id="styles" type="text/css" href="static/css/all.css">

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
                    <form style="color:white; margin-top:30px; font-family: Montserrat; font-size:13px; display:flex;">
                        <p>Halo </p> 
                        <?php echo ", "?>
                        <?php echo $_SESSION["nama_user"];?>
                        <!-- <input type="button" class="login-button" style="height:27px;width:75px;margin-top:25px;border-radius:5px;margin-right:5px;" onClick="document.location.href='/sbd-kel7-2021/upj_karya/pilih_login.html'" value="Log In"/>
                        <input type="button" class="register-button" style="height:27px;width:75px;margin-top:25px;border-radius:5px;" onClick="document.location.href='/sbd-kel7-2021/upj_karya/pilih_register.html'" value="Register"/> -->
                    </form>
                    <!-- <script type=""></script> -->
                    </div>
                <!-- <% } %> -->