<?php
include 'function.php';
?>




<!DOCTYPE html>
<html lang="id">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/homestyle.css">
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
                <h1 id="NamaPageJudul">HOME</h1>
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
        <div id="ekir_container">
            <a id="judulekir">E-KIR <span>GROBOGAN</span></a>
            <form method="post" action="" id="input_container">
                <div id="inputekir2">
                    <input id="inputkir" name="input_kir" type="text" placeholder="   NOMOR UJI">
                    <div id="petunjuk">
                        <a>Masukkan nomor uji</a>
                        <img src="src/help.png">
                    </div>
                </div>
                <button id="cari_button" type="submit" name="submit">CARI</button>
            </form>

        </div>
        <div id="antrian_container">
            <div id="antrian">
                <a id="judulantrian">ANTRIAN <span>SAAT INI</span></a>
                <div id="tanggal_container">
                    <div>
                        <img src="src/kalender.png">
                    </div>
                    <a id="tgl"><?= tanggal_indonesia(date('Y-m-d')); ?> </a>
                </div>
            </div>
            <div id="jmlantrian">
                <a id="jml">30</a>
                <a>Kendaraan</a>
            </div>
        </div>
        <div class="syarat_box">
            <div id="judul_syarat_container">
                <a id="judul_syarat">Syarat <span>Pengujian</span></a>
                <h6>Penuhi persyaratan berikut agar dapat melakukan pengujian kendaraan bermotor di Dishub Grobogan</h6>
            </div>
            <div id="syaratitem_container">
                <div id="item_container">
                    <div id="containerjudul">
                        <div>
                            <img src="src/ujibaru.png">
                        </div>
                        <a id="judul_item">Uji Baru</a>
                    </div>
                    <div id="item_list">
                        <a>1. STNK Asli</a><br>
                        <a>2. Fotokopi KTP pemilik kendaraan sesuai STNK</a><br>
                        <a>3. SRUT Asli (Surat Registrasi Uji Tipe)</a><br>
                    </div>
                </div>
                <div id="item_container">
                    <div id="containerjudul">
                        <div>
                            <img src="src/ujiberkala.png">
                        </div>
                        <a id="judul_item">Uji Berkala</a>
                    </div>
                    <div id="item_list">
                        <a>1. STNK Asli</a><br>
                        <a>2. Fotokopi KTP pemilik kendaraan sesuai STNK</a><br>
                        <a>3. SRUT Asli (Surat Registrasi Uji Tipe)</a><br>
                    </div>
                </div>
                <div id="item_container">
                    <div id="containerjudul">
                        <div>
                            <img src="src/mutasimasuk.png">
                        </div>
                        <a id="judul_item">Mutasi Masuk</a>
                    </div>
                    <div id="item_list">
                        <a>1. STNK Asli</a><br>
                        <a>2. Fotokopi KTP pemilik kendaraan sesuai STNK</a><br>
                        <a>3. SRUT Asli (Surat Registrasi Uji Tipe)</a><br>
                    </div>
                </div>
                <div id="item_container">
                    <div id="containerjudul">
                        <div>
                            <img src="src/mutasikeluar.png">
                        </div>
                        <a id="judul_item">Mutasi Keluar</a>
                    </div>
                    <div id="item_list">
                        <a>1. STNK Asli</a><br>
                        <a>2. Fotokopi KTP pemilik kendaraan sesuai STNK</a><br>
                        <a>3. SRUT Asli (Surat Registrasi Uji Tipe)</a><br>
                    </div>
                </div>
                <div id="item_container">
                    <div id="containerjudul">
                        <div>
                            <img src="src/numpangmasuk.png">
                        </div>
                        <a id="judul_item">Numpang Uji Masuk</a>
                    </div>
                    <div id="item_list">
                        <a>1. STNK Asli</a><br>
                        <a>2. Fotokopi KTP pemilik kendaraan sesuai STNK</a><br>
                        <a>3. SRUT Asli (Surat Registrasi Uji Tipe)</a><br>
                    </div>
                </div>
                <div id="item_container">
                    <div id="containerjudul">
                        <div>
                            <img src="src/numpangkeluar.png">
                        </div>
                        <a id="judul_item">Numpang Uji Keluar</a>
                    </div>
                    <div id="item_list">
                        <a>1. STNK Asli</a><br>
                        <a>2. Fotokopi KTP pemilik kendaraan sesuai STNK</a><br>
                        <a>3. SRUT Asli (Surat Registrasi Uji Tipe)</a><br>
                    </div>
                </div>
            </div>
        </div>
        <div class="selesai_bg">
            <div id="selesai_container">
                <div id="judul_selesai_container">
                    <a id="judul_selesai">Selesai <span>Uji</span></a>
                    <h6>Jumlah kendaraan yang telah melakukan pengujian di Dishub Grobogan berdasarkan jenis
                        kendaraannya</h6>
                </div>
                <div id="kendaraan_container">
                    <?php
                    foreach ($data_jenis_mobil as $jenis_mobil) : ?>
                        <div id="kendaraan">
                            <div>
                                <img src="src/bakterbuka.png">
                            </div>
                            <div id="jenis_kendaraan">
                                <a> <?= ucwords(strtolower($jenis_mobil['jeniskendaraan'])) ?></a>
                                <h2 id="jmlkendaraan"> <?= $jenis_mobil['jumlah'] ?></h2>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
        <div class="berita_container">
            <div id="judul_berita_container">
                <a>Berita <span>& Informasi</span></a>
                <h6>Mengenal pengujian kendaraan bermotor Dishub Grobogan lebih jauh</h6>
            </div>
            <div id="berita_box">
                <?php foreach ($data_berita as $index => $berita) :
                ?>
                    <div id="berita">
                        <div>
                            <img style="border-radius: 20px" id="fotoberita" src="<?= $berita['fotopertama'] ?>">
                        </div>
                        <div id="isiberita_box">
                            <a id="judul_berita" href="berita.php?index=<?= $index ?>"> <?= $berita['judul'] ?></a>
                            <h6 id="isiberita"><?= $berita['isi'] ?></h6>
                            <a id="selengkapnya" href="berita.php?index=<?= $index ?>">Selengkapnya</a>
                        </div>
                    </div>
                <?php

                    if ($index == '5') {
                        break;
                    }
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
    <script>
        const alert = document.querySelector('.alert');

        function hapus() {
            alert.style.opacity = 0;
        }
        close.onclick = hapus;
        alert.inne
    </script>
</body>


</html>