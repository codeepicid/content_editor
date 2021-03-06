<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>@yield('title') | Good Safe Good Time</title>
    <meta name="description" content="PATS adalah layanan ">
    <meta name="theme-color" content="#007dc5">
    <meta http-equiv="cleartype" content="on">

    <!-- Mobile iOS -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <!--320-->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="PATS">

    <!-- Prepended Styles -->
    <!-- END Prepended Styles -->

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('assets/stylepats/build/css/app-703706c0bd.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/stylepats/css/owl.carousel.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/stylepats/css/owl.theme.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/stylepats/css/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/stylepats/css/slick-theme.css') }}" />
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
@yield('csspage')
</head>

<body>
@yield('content')
    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper" class="pattern-bg">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#" style="padding: 14px">
                        <img src="assets/stylepats/img/pats-header.svg" height="50" style="padding-left: 8%">
                    </a>
                </li>
                <li>
                    <a href="{{ url('home') }}"><i class="fa fa-home"></i> Home</a>
                </li>
                <li>
                    <a href="{{ url('about') }}"><i class="fa fa-info-circle"></i> Tentang Kami</a>
                </li>
                <li>
                    <a href="{{ url('service') }}"><i class="fa fa-thumbs-up"></i> Layanan Kami</a>
                </li>
                <li>
                    <a href="{{ url('gallery') }}"><i class="fa fa-image"></i> Galeri</a>
                </li>
                <li>
                    <a href="{{ url('contact') }}"><i class="fa fa-phone"></i> Hubungi Kami</a>
                </li>
                <div>
                    <style>
                        .footer-services svg {
                            width: 36px;
                            height: 36px;
                            display: inline-block;
                            margin: 2px
                        }
                        
                        .sidebar-logos svg {
                            width: 25px;
                            height: 25px;
                        }
                        
                        .dark .footer-services path {
                            fill: rgba(255, 255, 255, 0.6);
                        }
                        
                        .dark .footer-services circle {
                            stroke: rgba(255, 255, 255, 0.6);
                        }
                        
                        .light .footer-services path {
                            fill: rgba(0, 0, 0, 0.3);
                        }
                        
                        .light .footer-services circle {
                            stroke: rgba(0, 0, 0, 0.3);
                        }
                        
                        .footer-services a:hover svg path {
                            fill: #FFF;
                        }
                        
                        .sidebar-logos a:hover svg path {
                            fill: #000;
                        }
                    </style>
                </div>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
        <div class="navbar navbar-default navbar-fixed-top">

            <div class="row">
                <div class="hidden-md col-xs-2">
                    <div class="navbar-header">
                        <a href="#menu-toggle" class="btn btn-default menu-btn" id="menu-toggle"><i class="mdi-action-view-headline"></i></a>
                    </div>
                </div>
                <div class="col-md-2 col-xs-8">
                    <div class="top-logo">
                        <a href="{{ url('home') }}" class="main-logo"></a>
                    </div>
                </div>
                <div class="col-md-10 hidden-md-down">
                    <div class="top-bar-right hidden-sm hidden-xs">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a class="top-download" href="{{ url('home') }}">Home</a>
                            </li>
                            <li>
                                <a class="top-download" href="{{ url('about') }}">Tentang Kami</a>
                            </li>
                            <li>
                                <a class="top-download" href="{{ url('service') }}">Layanan Kami</a>
                            </li>
                            <li>
                                <a class="top-download" href="{{ url('gallery') }}">Galeri</a>
                            </li>
                            <li>
                                <a class="top-download " href="{{ url('contact') }}">Hubungi Kami</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <div class="overlay-toggle"></div>
    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#bs-carousel" data-slide-to="1"></li>
                <li data-target="#bs-carousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item slides active">
                    <div class="slide-1"></div>
                    <div class="hero">
                        <hgroup>
                            <div class="col-md-12">
                                <div class="col-md-2"></div>
                                <div class="col-md-8 text-center">
                                    <a href="#" class="join-pats-link" id="">
                                        <img src="assets/stylepats/img/logo-pats.png" class="img-responsive">
                                    </a>
                                </div>
                            </div>
                        </hgroup>
                        <h1>PATS HADIR DI 8 AREA</h1>
                    </div>
                </div>
                <div class="item slides">
                    <div class="slide-2"></div>
                    <div class="hero">
                        <hgroup>
                            <h1>We are smart</h1>
                            <h3 class="white">Get start your next awesome project</h3>
                        </hgroup>
                    </div>
                </div>
                <div class="item slides">
                    <div class="slide-3"></div>
                    <div class="hero">
                        <hgroup>
                            <h1>We are amazing</h1>
                            <h3>Get start your next awesome project</h3>
                        </hgroup>
                    </div>
                </div>
            </div>
        </div>

        <!--  -->

        <section id="benefit">
            <div class="container">
                <div class="row">
                    <h2>mengapa menggunakan layanan PATS?</h2>
                    <div class="col-md-4">
                        <div class="icon-benefit" style="">
                            <img src="assets/stylepats/img/feature-logo-4.png" class="img-responsive" alt="">
                        </div>
                        <h3>Harga Lebih Kompetitif</h3>
                        <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non fermentum turpis,</p>
                    </div>
                    <div class="col-md-4">
                        <div class="icon-benefit" style="">
                            <img src="assets/stylepats/img/feature-logo-4.png" class="img-responsive" alt="">
                        </div>
                        <h3>Layanan Pengiriman Terpercaya</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non fermentum turpis,</p>
                    </div>
                    <div class="col-md-4">
                        <div class="icon-benefit" style="">
                            <img src="assets/stylepats/img/feature-logo-4.png" class="img-responsive" alt="">
                        </div>
                        <h3>Didukung Armada Terbaik</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non fermentum turpis,</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="icon-benefit" style="">
                            <img src="assets/stylepats/img/feature-logo-4.png" class="img-responsive" alt="">
                        </div>
                        <h3>Keamanan Terjamin</h3>
                        <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non fermentum turpis</p>
                    </div>
                    <div class="col-md-4">
                        <div class="icon-benefit" style="">
                            <img src="assets/stylepats/img/feature-logo-4.png" class="img-responsive" alt="">
                        </div>
                        <h3>Tenaga Ahli Bersertifikat</h3>
                        <p>Memberikan Anda kelebihan untuk memilih driver andalan Anda</p>
                    </div>
                    <div class="col-md-4">
                        <div class="icon-benefit" style="">
                            <img src="assets/stylepats/img/feature-logo-4.png" class="img-responsive" alt="">
                        </div>
                        <h3>Komitmen</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non fermentum turpis</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="empatkota">
            <div class="container">
                <h2>24/7 Ready to Serve</h2>
                <p class="col-md-8 col-md-offset-2">Team PATS siap melayani Anda dari berbagai jalur komunikasi 24 jam sehari 7 hari seminggu
                    <br>
                    <a href="{{ url('order') }}">
                        <button onclick="" class="btn btn-blue" style="font-size: 20px">Pesan Sekarang</button>
                    </a>
                </p>
            </div>
        </section>

        <!-- <section id="gradient">
                <div class="clearfix"></div>
            </section> -->

        <section class="pro" id="stylepats-pro" style="background: #fff">
            <div class="row no-margin">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12 box business-border">
                            <div class="box-desc" style="height: 463px">
                                <h3>Testimonial</h3>
                                <div id="testimonial" class="owl-carousel">
                                    <a href="">
                                        <img src="" class="partner img-responsive" alt="" style="background-image: url('assets/stylepats/img/order.jpg'); width: 100%; background-position: center;">
                                        <p style="padding-top: 15px">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non fermentum turpis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non fermentum turpis
                                        </p>
                                    </a>
                                    <a href="">
                                        <img src="" class="partner img-responsive" alt="" style="background-image: url('assets/stylepats/img/pro-client/codeepic.png'); width: 100%; background-position: center;">
                                        <p style="padding-top: 15px">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non fermentum turpis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non fermentum turpis
                                        </p>
                                    </a>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12 box business-border">
                            <a href="#" class="tag"><span>News</span></a>
                            <img src="assets/stylepats/img/bg-header@2x.jpg" style="background-image: url('assets/stylepats/img/bg-header@2x.jpg');" alt="mitra pats" class="img-responsive">
                            <div class="box-desc">
                                <a href="mitra.html" title="PATS Business">
                                    <h3>Judul Artikel</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non fermentum turpis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non fermentum turpis
                                    </p>
                                    <button class="btn">Lihat Selengkapnya</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12 box business-border">
                            <div class="box-desc" style="height: 463px">
                                <h3>Media Partner</h3>
                                <div id="media-partner" class="owl-carousel">
                                    <a href="">
                                        <img src="" class="partner img-responsive" alt="" style="background-image: url('assets/stylepats/img/order.jpg'); width: 100%; background-position: center;">
                                    </a>
                                    <a href="">
                                        <img src="" class="partner img-responsive" alt="" style="background-image: url('assets/stylepats/img/pro-client/codeepic.png'); width: 100%; background-position: center;">
                                    </a>
                                </div>
                                <p style="padding-top: 15px">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non fermentum turpis Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non fermentum turpis
                                </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="clients">
            <div class="container">
                <div class="row">
                    <h2>Daftar Mitra Kami</h2>
                    <div class="col-md-12 clients kendaraan">
                        <div class="col-md-12 col-sm-6 col-xs-12 logo">
                            <a href="">
                                <img src="assets/stylepats/img/pro-client/codeepic.png" class="img-responsive" alt="">
                            </a>
                        </div>
                        <div class="col-md-12 col-sm-6 col-xs-12 logo">
                            <a href="">
                                <img src="assets/stylepats/img/pro-client/codeepic.png" class="img-responsive" alt="">
                            </a>
                        </div>
                        <div class="col-md-12 col-sm-6 col-xs-12 logo">
                            <a href="">
                                <img src="assets/stylepats/img/pro-client/codeepic.png" class="img-responsive" alt="">
                            </a>
                        </div>
                        <div class="col-md-12 col-sm-6 col-xs-12 logo">
                            <a href="">
                                <img src="assets/stylepats/img/pro-client/codeepic.png" class="img-responsive" alt="">
                            </a>
                        </div>
                        <div class="col-md-12 col-sm-6 col-xs-12 logo">
                            <a href="">
                                <img src="assets/stylepats/img/pro-client/codeepic.png" class="img-responsive" alt="">
                            </a>
                        </div>
                        <div class="col-md-12 col-sm-6 col-xs-12 logo">
                            <a href="">
                                <img src="assets/stylepats/img/pro-client/codeepic.png" class="img-responsive" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    <footer id="">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12 footer-menu">
                    <center><img src="assets/stylepats/img/logo-pats.png"></center>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 hidden-xs footer-menu">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="tentang.html">Tentang Kami</a></li>
                        <li><a href="layanan.html">Layanan Kami</a></li>
                        <li><a href="galeri.html">Galeri</a></li>
                        <li><a href="hubungi.html">Hubungi Kami</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 footer-menu">
                    <h4>FOLLOW US</h4>
                    <ul>
                        <li><a href="#" target="_parent"><i class="fa fa-facebook"></i> Facebook</a></li>
                        <li><a href="#" target="_parent"><i class="fa fa-twitter"></i> Twitter</a></li>
                        <li><a href="#" target="_parent"><i class="fa fa-youtube-play"></i> YouTube</a></li>
                        <li><a href="#" target="_parent"><i class="fa fa-instagram"></i> Instagram</a></li>
                    </ul>
                </div>
                <!-- <div class="clearfix visible-xs"></div> -->
                <div class="col-md-2 col-sm-4 col-xs-6 footer-menu">
                    <h4>Contact Us</h4>
                    <ul>
                        <li><a href="#" target="_parent"><i class="fa fa-whatsapp"></i> Whatsapp</a></li>
                        <li><a href="#" target="_parent"><i class="fa fa-phone"></i> Call</a></li><br>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 footer-menu">
                    <h4>Office</h4>
                    <ul>
                        <li><a href="#" target="_parent"></i> Surabaya Office : Jl. Kebraon II No.36 Surabaya</a></li>
                        <li><a href="#" target="_parent"></i> Jakarta Office : Jl. Benda No.212 Bekasi</a></li>
                        <li><a href="#" target="_parent"></i> Semarang Office : </a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                &copy; 2016 Developed by Code Epic
            </div>
        </div>
    </footer>
    </div>
    <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
    <!-- Prepended script-->

    <!-- END Prepended script -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="assets/stylepats/build/js/app-955d2ca942.js"></script>
    <script type="text/javascript" src="assets/stylepats/js/owl-carousel.min.js"></script>
    <script type="text/javascript" src="assets/stylepats/js/slick.min.js"></script>

    <script>
        $("#media-partner").owlCarousel({
            items: 1,
            loop: true,
            itemsDesktop: [1000, 1],
            itemsDesktopSmall: [979, 1],
            itemsTablet: [768, 1],
            pagination: true,
            navigation: false,
            navigationText: ["", ""],
            slideSpeed: 3000,
            singleItem: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true
        });

        $("#testimonial").owlCarousel({
            items: 1,
            loop: true,
            itemsDesktop: [1000, 1],
            itemsDesktopSmall: [979, 1],
            itemsTablet: [768, 1],
            pagination: true,
            navigation: false,
            navigationText: ["", ""],
            slideSpeed: 3000,
            singleItem: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true
        });

        $('.kendaraan').slick({
            // responsive: [],
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
        });

        // var windowWidth = $(window).width();
        // if(windowWidth > 768)
        // {
        //     jQuery('.kendaraan').slick({
        //         slidesToShow: 5,
        //         slidesToScroll: 5
        //     });
        // }
        // else {
        //     jQuery('.kendaraan').slick({
        //         slidesToShow: 5,
        //         slidesToScroll: 1
        //     });
        // }
    </script>
@yield('jspage')
</body>

</html>
