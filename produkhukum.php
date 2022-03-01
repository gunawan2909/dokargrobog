<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/produkstyle.css">
    <link rel="stylesheet" href="css/FF.css">
    <link rel="stylesheet" href="css/cdn.css" />
    <title>Dokar Grobog</title>
</head>
<body>
    <header>
        <div class="login">
            <a class="boxlogin" href="http://dokar.dishub.grobogan.go.id/dokar/ekir/">
                <p>Login</p>
            </a>
        </div>
        <div >
            <img id="navbar" @click="showItems=!showItems" src="src/3Bar.png">
        </div>
        <transition name="slide">
        <div v-show="showItems" class="slidebar">
            <div id="closebtn">
                <button @click="showItems=!showItems" id="closebtn">X</button>
            </div>
            <div>
                <img src="src/image 23.png">
            </div>
            <a href="home.php">Home</a>
                <a href="profile.php">Profil</a>
                <a href="pelayanan.php">Pelayanan</a>
                <a href="produkhukum.php">Produk Hukum</a>
                <a href="hubungi.php">Hubungi Kami</a>
        </div>
        </transition>
        <div>
            <div class="logo_box">
                <img id="logo" src="src/image 23.png">
                <div class="tekslogo_container">
                    <h1 id="judul">DOKAR <span>GROBOG</span></h1>
                    <h6 id="deskripsi">Data Online Kendaraan Bermotor Dishub Kabupaten Grobogan</h6>
                </div>
            </div>
            <div class="NamaPage">
                <h1 id="NamaPageJudul">PRODUK HUKUM</h1>
                <div id="garisbawah"></div>

            </div>
        </div>
        <div>
            <div class="search_box">
                <input id="input" type="text" placeholder="Search">
                <img id="search" src="src/Search Icon.png">
            </div>
        </div>
    </header>
    <main>
            <div id="judul_box">
                <a>Download <span>Produk</span></a>
                <h6>Silahkan lihat atau unduh dokumen terkait produk hukum di bawah ini</h6>
            </div>
            <div id="produk_container">
                <div id="item_container">
                    <a id="judul_item">Deskripsi File</a>
                    <a id="format_item">.pdf</a>
                    <button id="downloadb">Download</button>
                </div>
                <div id="item_container">
                    <a id="judul_item">Deskripsi File</a>
                    <a id="format_item">.pdf</a>
                    <button id="downloadb">Download</button>
                </div>
                <div id="item_container">
                    <a id="judul_item">Deskripsi File</a>
                    <a id="format_item">.pdf</a>
                    <button id="downloadb">Download</button>
                </div>
            </div>
    </main>
    <footer>
    
            <div id="footer_info">
                <div>
                    <img src="src/image 23.png">
                </div>
                <div id="alamat">
                    <a id="judul_footer">Dinas Perhubungan</a>
                    <a id="judul_footer">Kabupaten Grobogan</a><br>
                    <a>Jl. Raya Solo No.151</a>
                    <a>Toroh, 58172</a>
                    <a>Telp. (0292) 422195</a>
                </div>
            </div>
            <div id="pelayanan">
                <a id="judul_footer">Pelayanan</a><br>
                <a>Uji Baru</a><br>
                <a>Uji Berkala</a><br>
                <a>Numpang Uji Masuk</a><br>
                <a>Numpang Uji Keluar</a><br>
                <a>Mutasi Masuk</a><br>
                <a>Mutasi Keluar</a><br>
            </div>
            <div id="jam">
                <a id="judul_footer">Jam Operasional</a><br>
                <a>Senin s/d kamis</a>
                <a>pukul 07.30 s/d 13.00</a>
                <a>Jumat</a>
                <a>pukul 07.30 sd 11.00</a>
                <a>Sabtu, minggu, dan tanggal merah</a>
                <a>libur</a>
            </div>
            <div id="icon_footer">
                <div id="sosmed_box">
                    <div id="sosmed">
                        <a href=""><img src="src/Linkedin.png"></a>
                        <a href="https://web.facebook.com/profile.php?id=100069166300956"><img src="src/FB.png"></a>
                        <a href="https://www.instagram.com/pkbdishubgrobogan/"><img src="src/IG.png" href></a>
                    </div>
                    <a>Copyright<span>&copy;</span> 2022 Dishub Grobogan</a>
                </div>
                <div>
                    <img src="src/TUGU.png">
                </div>
         
        </div>
    </footer>
    <script src="https://unpkg.com/vue@next"></script>
    <script>
        Vue.createApp({
            data() {
                return {
                    showItems: false,
                }
            }
        }).mount('body')
    </script>
</body>

</html>