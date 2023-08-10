<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="Web Dpmptsp."
        />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>
        <?php echo e($title); ?>

        </title>
        <!-- Bootstrap -->
        <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
        crossorigin="anonymous"
        />

        <!-- Style Custom CSS -->
        <link type="text/css" href="<?php echo e(asset('css/font-awesome.min.css')); ?>" rel="stylesheet" />
        <!-- Fontello CSS -->
        <link type="text/css" href="<?php echo e(asset('css/fontello.css')); ?>" rel="stylesheet" />
        <!-- Style Custom CSS -->
        <link type="text/css" href="<?php echo e(asset('/css/style.css')); ?>" rel="stylesheet" />
        <!-- Font CSS -->
        <link
        href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i"
        rel="stylesheet"
        />
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css"
        />
        <link type="text/css" rel="stylesheet" href="<?php echo e(asset('/css/slider/Simple-Slider.css')); ?>" />
        <link type="text/css" rel="stylesheet" href="<?php echo e(asset('/css/slider/style.css')); ?>" />
        <link rel="icon" href="images/sarolangun.png" />
    </head>

    <body>

        
        <div class="top-header">
        <div class="container">
            <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                <div class="top-social">
                <ul class="listnone">
                    <li>
                    <a href="#"><i class="fa fa-facebook-square"></i></a>
                    </li>
                    <li>
                    <a href="#"><i class="fa fa-linkedin-square"></i></a>
                    </li>
                    <li>
                    <a href="#"><i class="fa fa-twitter-square"></i></a>
                    </li>
                    <li>
                    <a href="#"><i class="fa fa-google-plus-square"></i></a>
                    </li>
                </ul>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-6">
                <div class="top-text">
                <span class="text-block mail-block hidden-xs hidden-sm">
                    <i class="icon-envelope-1"></i>
                    <span class="mail-text">dpmptsp@sarolangunkab.go.id</span>
                </span>
                <span class="text-block time-block">
                    <i class="icon-time"></i>
                    <span class="time-text"
                    >Senin-Kamis 8:00-16:00, Jumat 8:00-11:00</span
                    >
                </span>
                </div>
            </div>
            </div>
        </div>
        </div>
        

        
        <div class="header">
        <div class="container-fluid">
            <div class="row">
            <div class="col-lg-4 col-md-5 col-sm-5 col-xs-5">
                <div class="logo">
                <a href="index.html"><img src="<?php echo e(asset('/img/DPMPTSP3.png')); ?>" alt="" /></a>
                </div>
            </div>
            <div class="col-lg-8 col-md-7 col-sm-7 col-xs-7">
                <!-- navigation -->
                <div class="navigation">
                <div id="navigation">
                    <ul>
                    <li class="active">
                        <a href="index.html" title="Menu">Beranda</a>
                    </li>
                    <li class="has-sub">
                        <a href="#" title="Profil">Profil</a>
                        <ul>
                        <li>
                            <a href="Struktur-Organisasi.html" title="Struktur"
                            >Struktur Organisasi</a
                            >
                        </li>
                        <li>
                            <a href="Visi-Misi.html" title="Service Detail"
                            >Visi Misi</a
                            >
                        </li>
                        <li>
                            <a href="maklumat.html" title="Service Detail"
                            >Maklumat Pelayanan</a
                            >
                        </li>
                        <li>
                            <a href="penghargaan.html" title="Service Detail"
                            >Penghargaan</a
                            >
                        </li>
                        <li>
                            <a href="sp-sop.html" title="Service Detail"
                            >SP Dan SOP</a
                            >
                        </li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="#" title="Blog">Perizinan Online</a>
                        <ul>
                        <li>
                            <a
                            href="https://sicantikui.layanan.go.id"
                            target="_blank"
                            title="Si Cantik"
                            >Si Cantik</a
                            >
                        </li>
                        <li>
                            <a href="https://oss.go.id" target="_blank" title="OSS"
                            >OSS</a
                            >
                        </li>
                        </ul>
                    </li>
                    <li>
                        <a href="Jenis-Izin.html" title="Jenis Izin">Jenis Izin</a>
                    </li>
                    <li>
                        <a href="layananPengaduan.html" title="Layanan Pengaduan"
                        >Layanan Pengaduan</a
                        >
                        <ul>
                        <li>
                            <a href="sk-pengaduan.html" title="Service Detail"
                            >SK Pengaduan</a
                            >
                        </li>
                        <li>
                            <a href="survey.html" title="Layanan Pengaduan"
                            >Survei Kepuasan Masyarakat</a
                            >
                        </li>
                        </ul>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>

        

        
        <div class="row">
            <div class="container-fluid">
                <div class="simple-slider">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                        <div
                            class="swiper-slide"
                            style="
                            background: no-repeat center/100% 100%
                                url(/img/slider/OSS1.jpg);
                            "
                        ></div>
                        <div
                            class="swiper-slide"
                            style="
                            background: no-repeat center/100% 100%
                                url(/img/slider/visi-misi.jpeg);
                            "
                        ></div>
                        <div
                            class="swiper-slide"
                            style="
                            background: no-repeat center/100% 100%
                                url(/img/slider/mekanisme-oss.jpeg);
                            "
                        ></div>
                        <div
                            class="swiper-slide"
                            style="
                            background: no-repeat center/100% 100%
                                url(/img/slider/mekanisme-pengaduan.jpeg);
                            "
                        ></div>
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </div>
        


        <div class="cta-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h1 class="cta-title">DPMPTSP</h1>
                        <p class="cta-text">
                        Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu
                        </p>
                    </div>
                </div>
            </div>
        </div>


        
<h1>test</h1>
        

        
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="footer-widget mb30">
                            <h2 class="footer-title">DPMPTSP</h2>
                            <div class="logo">
                                <a href="index.html"
                                ><img src="/img/DPMPTSP3.png" alt=""
                                /></a>
                            </div>
                            <div class="footer-social mb60 mt30">
                                <ul class="listnone">
                                <li>
                                    <a href="#"><i class="fa fa-facebook-square"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-linkedin-square"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter-square"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-google-plus-square"></i></a>
                                </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="footer-widget footer-contact mb30">
                            <h2 class="footer-title">Kontak Kami</h2>
                            <ul class="listnone">
                                <li>
                                <i class="fa fa-map-marker"></i>
                                <p>
                                    Jl. Sarolangun - Jambi KM. 1, Kelurahan Sarolangun Kembang,
                                    Kec. Sarolangun
                                </p>
                                </li>

                                <li>
                                <i class="fa fa-envelope-o"></i>
                                <p>dpmptsp@sarolangunkab.go.id</p>
                                </li> 
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        


        <div class="tiny-footer">
        <div class="container">
            <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <p>Copyright © All Rights Reserved. 2021</p>
            </div>
            </div>
        </div>
        </div>
        

        <a href="#0" class="cd-top" title="Go to top">Top</a>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

        <script src="/js/atn/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="/js/atn/bootstrap.min.js"></script>
        <script src="https://unpkg.com/@popperjs/core@2"></script>
        <!-- Sticky Header -->
        <script src="/js/atn/jquery.sticky.js"></script>
        <script src="js/sticky-header.js"></script>
        <!-- Menu Maker - Navigations -->
        <script src="/js/atn/menumaker.js"></script>
        <!-- Back to top -->
        <script src="/js/atn/back-to-top.js" type="text/javascript"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
        <!-- untuk slider -->
        <script src="/js/slider/Simple-Slider.js"></script>
    </body>
</html>
<?php /**PATH D:\aplikasi\web_dpmptsp\resources\views/lays/main.blade.php ENDPATH**/ ?>