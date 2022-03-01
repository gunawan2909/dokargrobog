<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/pelayanan.css">
    <link rel="stylesheet" href="css/FF.css">
    <link rel="stylesheet" href="css/cdn.css" />
    <title>Dokar Grobog</title>
</head>

<body>
    <header>
        <div>
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
        <div class="login">
            <a class="boxlogin" href="http://dokar.dishub.grobogan.go.id/dokar/ekir/">
                <p>Login</p>
            </a>
        </div>
        <div>
            <div class="logo_box">
                <img id="logo" src="src/image 23.png">
                <div class="tekslogo_container">
                    <h1 id="judul">DOKAR <span>GROBOG</span></h1>
                    <h6 id="deskripsi">Data Online Kendaraan Bermotor Dishub Kabupaten Grobogan</h6>
                </div>
            </div>
            <div class="NamaPage">
                <h1 id="NamaPageJudul">PELAYANAN</h1>
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
        <div class="JenisPengujian">
            <div id="JenisPenujianKonteks">
                <h1 id="judulKonteks">Jenis <span>Pengujian</span></h1>
                <p id="KeteranganKonteks">Jenis Pengujian yang dilakukan di Pengujian Kendaraan Bermotor Dishub Grobogan
                </p>

                <div id="KolomJenis">
                    <div id="JenisKonteks">
                        <img id="IconJenis" src="src/ujibaru.png">
                        <h1 id="TeksKonteks">Uji<br>Baru</h1>
                    </div>
                    <div id="JenisKonteks">
                        <img id="IconJenis" src="src/ujiberkala.png">
                        <h1 id="TeksKonteks">Uji<br>Berkala</h1>
                    </div>
                    <div id="JenisKonteks">
                        <img id="IconJenis" src="src/numpangmasuk.png">
                        <h1 id="TeksKonteks">NU<br>Masuk</h1>
                    </div>
                    <div id="JenisKonteks">
                        <img id="IconJenis" src="src/numpangkeluar.png">
                        <h1 id="TeksKonteks">NU<br>Keluar</h1>
                    </div>
                    <div id="JenisKonteks">
                        <img id="IconJenis" src="src/mutasimasuk.png">
                        <h1 id="TeksKonteks">Mutasi<br>Masuk</h1>
                    </div>
                    <div id="JenisKonteks">
                        <img id="IconJenis" src="src/mutasikeluar.png">
                        <h1 id="TeksKonteks">Mutasi<br>Keluar</h1>
                    </div>
                </div>
            </div>
        </div>
        <div id="AlurPengujian">
            <div id="JenisPenujianKonteks">
                <h1 id="judulKonteks">Penguji <span>Kendaaan</span></h1>
                <p id="KeteranganKonteks">Alur pengujian yang dilakukan di Pengujian Kendaraan Bermotor Dishub Grobogan
                </p>
                <img id="poster" src="src/Poster Masuk.png">
                <img id="poster" src="src/Poster keluar.png">
            </div>

            <div id="JenisPenujianKonteks">
                <h1 id="judulKonteks">Tarif <span>Retribusi</span></h1>
                <p id="KeteranganKonteks">Besaran tarif retribusi berdasarkan penggolongan kendaraan adalah sebagai
                    berikut</p>
                <img id="poster" src="src/Poster Tarif.png">
            </div>

            <div id="JenisPenujianKonteks">
                <h1 id="judulKonteks">Syarat <span>Pengujian</span></h1>
                <p id="KeteranganKonteks">Penuhi persyaratan berikut agar dapat melakukan pengujian kendaraan bermotor
                    di Dishub Grobogan</p>
                <img id="poster" src="src/Poster Syarat.png">

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