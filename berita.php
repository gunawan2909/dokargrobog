<?php
include 'function.php';

$counter = intval($_GET['index']);




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/berita.css">
    <link rel="stylesheet" href="css/FF.css">
    <link rel="stylesheet" href="css/cdn.css">
    <title>Dokar Grobog</title>
</head>

<body>
    <header>

        <img id="navbar" @click="showItems=!showItems" src="src/3Bar.png">

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
                <h1 id="NamaPageJudul">BERITA</h1>
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
        <div class="containerberita">
            <img class="Gambar" src="<?= $data_berita[$counter]['fotopertama'] ?>">
            <H1 class="Judul"><?= $data_berita[$counter]['judul'] ?></H1>
            <h5 id="tt">Purwodadi <?= $data_berita[$counter]['tgl'] ?></h5>
            <p id="isi"><?= $data_berita[$counter]['isi'] ?></p>

        </div>
        <div class="berita_container">
            <div id="judul_berita_container">
                <a>Berita <span>& Informasi</span></a>
            </div>
            <div id="berita_box">
            <?php foreach ($data_berita as $index => $berita) :
                 ?>
                    <div id="berita">
                        <div>
                            <img style="border-radius: 20px" id="fotoberita" src="<?= $berita['fotopertama'] ?>">
                        </div>
                        <div id="isiberita_box">
                            <a id="judul_berita" href="berita.php?index=<?= $index ?>"> <?= $berita['judul'] ?></a><br>
                          
                            <a id="selengkapnya" href="berita.php?index=<?= $index ?>">Selengkapnya</a>
                        </div>
                    </div>
                <?php
                
                if($index=='5'){break;}
                endforeach; ?>
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
        <div class="whatsapp">

        </div>

    </footer>
    <script src="unpkg.js"></script>
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