<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Profile.css">
    <link rel="stylesheet" href="css/FF.css">
    <link rel="stylesheet" href="css/cdn.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" />
    <script src="jQuery.js"></script>


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
                <h1 id="NamaPageJudul">PROFILE</h1>
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
        <div class="PofileDokar">

            <div class="GrobogDokar">
                <img class="KetuaGrobogDokar" src="src/Foto Pengawai/Ketua.png">
                <div class="teksGrobogDokar_container">
                    <h1 id="judulGrobogDokar">DOKAR <span>GROBOG</span></h1>
                    <p id="deskripsiGrobogDokar">Adalah sebuah layanan untuk masyarakat berupa aplikasi pendaftaran
                        online guna memudahkan masyarakat yang akan melakukan Pengujian Kendaraan Bermotor di Dishub Kabupaten
                        Grobogan.</><br>
                    <div id="GrobogDokarKelebihan">
                        <div id="Kelebihan">
                            <img id="LogoKelebihan" src="src/Pendaftaran Online.png">
                            Pendaftaran Online
                        </div>

                        <div id="Kelebihan">
                            <img id="LogoKelebihan" src="src/pembayaran Nontunai.svg">
                            Pembayaran Non-Tunai
                        </div>

                        <div id="Kelebihan">
                            <img id="LogoKelebihan" src="src/Informasi Kendaraan .svg">
                            Informasi kendaraan
                        </div>

                        <div id="Kelebihan">
                            <img id="LogoKelebihan" src="src/Akreditasi Pengujian .svg">
                            Akreditasi Pengujian
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="VisiMisi">
            <div id="VisiMisiKonteks">
                <h1 id="JudulVisiMisi">Visi</h1>
                <p id="DeskripsiVisiMisi">Terciptanya Pengujian Kendaraan Bermotor Yang Akurat dan Akuntabel.</p>
                <h1 id="JudulVisiMisi">Misi</h1>
                <p id="DeskripsiVisiMisi">Menciptakan Lingkungan Kerja Yang Lebih Nyaman Dalam Rangka Meningkatkan
                    Keselamatan Kendaraan Bermotor Wajib Uji, Peningkatan Kompetensi Penguji Yang Professional,
                    Perbaikan
                    Sarana Dan Prasarana Serta Mutu Pelayanan Pengujian Kendaraan Bermotor..</p>
            </div>
        </div>
        <div class="MengapaHarusKami">
            <div id="MengapaHarusKamiKonteks">
                <h1 id="judulGrobogDokar">Mangapa <span>Kami?</span></h1>
                <div id="Keunggulan">
                    <div id="KeunggulanKonteks">
                        <h1 id="JudulKeunggulan">KUALIFIKASI<br>PENGUJI</h1>
                        <p id="KonteksKeunggulan">Kami memiliki penguji kendaraan yang berkompeten dalam bidang
                            pengujian
                            kendaraan.</p>
                        <img id="IconKeunggulan1" src="src/Kualifikasi Penguji .svg">
                    </div>

                    <div id="KeunggulanKonteks">
                        <h1 id="JudulKeunggulan">ONLINE<br>SYSTEM</h1>
                        <p id="KonteksKeunggulan">Dukungan sistem online mampu mempermudah dan mempercepat proses
                            pelayanan
                            dan keterbukaan informasi.</p>
                        <img id="IconKeunggulan2" src="src/Online System .png">
                    </div>

                    <div id="KeunggulanKonteks">
                        <h1 id="JudulKeunggulan">BEBAS<br>KONSULTASI</h1>
                        <p id="KonteksKeunggulan">Kami siap menerima konsultasi terkait kendaraan yang akan diuji jika
                            mengalami permasalahan secara teknis.</p>
                        <img id="IconKeunggulan3" src="src/Bebas Konsultasi .png">
                    </div>

                    <div id="KeunggulanKonteks">
                        <h1 id="JudulKeunggulan">FASILITAS<br>MODEREN</h1>
                        <p id="KonteksKeunggulan">Penggunaan alat uji yang modern, komputerisasi administrasi, dan
                            online
                            sistem merupakan usaha kami dalam meningkatkan pelayanan kepada masyarakat.</p>
                        <img id="IconKeunggulan4" src="src/moderen.png">
                    </div>
                </div>
            </div>
        </div>

        <div class="PengujiKendaraan">
            <div id="PengujiKendaraanKonteks">
                <h1 id="judulGrobogDokar">Penguji <span>Kendaaan</span></h1>
                <p id="KetPenguji">Penguji berkompeten dibalik operasional Pengujian Kendaraan Bermotor Dishub Grobogan
                </p>
                <div id="Penguji">
                    <div id="PengujiKonteks">
                        <img id="FotoPenguji" src="src/Foto Pengawai/FIRDAUSA AULADI AGANT, A.Ma.png">
                        <h1 id="NamaPenguji">FIRDAUSA AULADI <br>AGANT, A.Ma.PKB</h1><br><br>
                        <p id="JabatanPenguji">PENGUJI PELAKSANA LANJUTAN</p>
                        <div id="sosmed">
                            <img src="src/Linkedin.png">
                            <img src="src/FB.png">
                            <img src="src/IG.png">
                        </div>
                    </div>
                    <div id="PengujiKonteks">
                        <img id="FotoPenguji" src="src/Foto Pengawai/Bari, A.Ma.png">
                        <h1 id="NamaPenguji">BARI, AMA.PKB</h1><br><br><br>
                        <p id="JabatanPenguji">PENGUJI PENYELIA</p>
                        <div id="sosmed">
                            <img src="src/Linkedin.png">
                            <img src="src/FB.png">
                            <img src="src/IG.png">
                        </div>
                    </div>
                    <div id="PengujiKonteks">
                        <img id="FotoPenguji" src="src/Foto Pengawai/ALFA SEPTIYAN ABDURROHMAN, A.Ma.png">
                        <h1 id="NamaPenguji">ALFA SEPTIYAN <br>ABDURROHMAN,<br> A.Ma.PKB</h1><br>
                        <p id="JabatanPenguji">PENGUJI TINGKAT DUA</p>
                        <div id="sosmed">
                            <img src="src/Linkedin.png">
                            <img src="src/FB.png">
                            <img src="src/IG.png">
                        </div>
                    </div>
                    <div id="PengujiKonteks">
                        <img id="FotoPenguji" src="src/Foto Pengawai/AMIN FAUZAN _.png">
                        <h1 id="NamaPenguji">AMIN FAUZAN <br></h1><br><br><br>
                        <p id="JabatanPenguji">PEMBANTU PENGUJI</p>
                        <div id="sosmed">
                            <img src="src/Linkedin.png">
                            <img src="src/FB.png">
                            <img src="src/IG.png">
                        </div>
                    </div>
                    <div id="PengujiKonteks">
                        <img id="FotoPenguji" src="src/Foto Pengawai/FIQRI HAIKAL HIDAYATULLAH, S.png">
                        <h1 id="NamaPenguji">FIQRI HAIKAL <br>HIDAYATULLAH, S.ST</h1><br><br>
                        <p id="JabatanPenguji">PENGUJI PELAKSANA LANJUTAN</p>
                        <div id="sosmed">
                            <img src="src/Linkedin.png">
                            <img src="src/FB.png">
                            <img src="src/IG.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="PengujiKendaraan">
            <div id="PengujiKendaraanKonteks">
                <h1 id="judulGrobogDokar">Petugas <span>Penguji</span></h1>
                <p id="KetPenguji">Petugas berkompeten dibalik operasional Pengujian Kendaraan Bermotor Dishub Grobogan
                </p>

                <div id="Penguji">
                <div id="PengujiKonteks">
                    <img id="FotoPenguji" src="src/Foto Pengawai/Misbahul Munir.png">
                    <h1 id="NamaPenguji">MISBAHUL MUNIR, S.KOM.</h1>
                    <p id="JabatanPenguji">PRANATA KOMPUTER PERTAMA</p>
                    <div id="sosmed">
                        <img src="src/Linkedin.png">
                        <img src="src/FB.png">
                        <img src="src/IG.png">
                    </div>
                </div>

                <div id="PengujiKonteks">
                    <img id="FotoPenguji" src="src/Foto Pengawai/KHOIRUS SAID S.Si.T.,M.T 1.png">
                    <h1 id="NamaPenguji">KHOIRUS SAID S.Si.T.,M.T.</h1>
                    <p id="JabatanPenguji">KEPALA SUB KOORDINATOR PKB</p>
                    <div id="sosmed">
                        <img src="src/Linkedin.png">
                        <img src="src/FB.png">
                        <img src="src/IG.png">
                    </div>
                </div>

                <div id="PengujiKonteks">
                    <img id="FotoPenguji" src="src/Foto Pengawai/SUDARTO 1.png">
                    <h1 id="NamaPenguji">SUDARTO </h1>
                    <p id="JabatanPenguji">STAFF ADMINISTRASI</p>
                    <div id="sosmed">
                        <img src="src/Linkedin.png">
                        <img src="src/FB.png">
                        <img src="src/IG.png">
                    </div>
                </div>

                <div id="PengujiKonteks">
                    <img id="FotoPenguji" src="src/Foto Pengawai/ENDANG SUSILOWATI, SE _ 1.png">
                    <h1 id="NamaPenguji">ENDANG SUSILOWATI</h1>
                    <p id="JabatanPenguji">PENGAWAS PKB</p>
                    <div id="sosmed">
                        <img src="src/Linkedin.png">
                        <img src="src/FB.png">
                        <img src="src/IG.png">
                    </div>
                </div>

            </div>

        </div>

        </div>

        <!-- <script>
                    $(document).ready(function () {
                        var itemsMainDiv = ('.MultiCarousel');
                        var itemsDiv = ('.MultiCarousel-inner');
                        var itemWidth = "";

                        $('.leftLst, .rightLst').click(function () {
                            var condition = $(this).hasClass("leftLst");
                            if (condition)
                                click(0, this);
                            else
                                click(1, this)
                        });

                        ResCarouselSize();




                        $(window).resize(function () {
                            ResCarouselSize();
                        });

                        //this function define the size of the items
                        function ResCarouselSize() {
                            var incno = 0;
                            var dataItems = ("data-items");
                            var itemClass = ('.item');
                            var id = 0;
                            var btnParentSb = '';
                            var itemsSplit = '';
                            var sampwidth = $(itemsMainDiv).width();
                            var bodyWidth = $('body').width();
                            $(itemsDiv).each(function () {
                                id = id + 1;
                                var itemNumbers = $(this).find(itemClass).length;
                                btnParentSb = $(this).parent().attr(dataItems);
                                itemsSplit = btnParentSb.split(',');
                                $(this).parent().attr("id", "MultiCarousel" + id);


                                if (bodyWidth >= 1200) {
                                    incno = itemsSplit[3];
                                    itemWidth = sampwidth / incno;
                                }
                                else if (bodyWidth >= 992) {
                                    incno = itemsSplit[2];
                                    itemWidth = sampwidth / incno;
                                }
                                else if (bodyWidth >= 768) {
                                    incno = itemsSplit[1];
                                    itemWidth = sampwidth / incno;
                                }
                                else {
                                    incno = itemsSplit[0];
                                    itemWidth = sampwidth / incno;
                                }
                                $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
                                $(this).find(itemClass).each(function () {
                                    $(this).outerWidth(itemWidth);
                                });

                                $(".leftLst").addClass("over");
                                $(".rightLst").removeClass("over");

                            });
                        }


                        //this function used to move the items
                        function ResCarousel(e, el, s) {
                            var leftBtn = ('.leftLst');
                            var rightBtn = ('.rightLst');
                            var translateXval = '';
                            var divStyle = $(el + ' ' + itemsDiv).css('transform');
                            var values = divStyle.match(/-?[\d\.]+/g);
                            var xds = Math.abs(values[4]);
                            if (e == 0) {
                                translateXval = parseInt(xds) - parseInt(itemWidth * s);
                                $(el + ' ' + rightBtn).removeClass("over");

                                if (translateXval <= itemWidth / 2) {
                                    translateXval = 0;
                                    $(el + ' ' + leftBtn).addClass("over");
                                }
                            }
                            else if (e == 1) {
                                var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
                                translateXval = parseInt(xds) + parseInt(itemWidth * s);
                                $(el + ' ' + leftBtn).removeClass("over");

                                if (translateXval >= itemsCondition - itemWidth / 2) {
                                    translateXval = itemsCondition;
                                    $(el + ' ' + rightBtn).addClass("over");
                                }
                            }
                            $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
                        }

                        //It is used to get some elements from btn
                        function click(ell, ee) {
                            var Parent = "#" + $(ee).parent().attr("id");
                            var slide = $(Parent).attr("data-slide");
                            ResCarousel(ell, Parent, slide);
                        }

                    });
                </script> -->


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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script type="text/javascript">
        $('.').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3
        });
    </script>
</body>

</html>