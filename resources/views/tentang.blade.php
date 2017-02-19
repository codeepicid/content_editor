@extends('layouts.public')

@section('title')
Pats Towing -
@stop

@section('csspage')
@stop

@section('content')

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
                    <a href="index.html"><i class="fa fa-home"></i> Home</a>
                </li>
                <li>
                    <a href="tentang.html"><i class="fa fa-info-circle"></i> Tentang Kami</a>
                </li>
                <li>
                    <a href="layanan.html"><i class="fa fa-thumbs-up"></i> Layanan Kami</a>
                </li>
                <li>
                    <a href="galeri.html"><i class="fa fa-image"></i> Galeri</a>
                </li>
                <li>
                    <a href="hubungi.html"><i class="fa fa-phone"></i> Hubungi Kami</a>
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
                        <a href="index.html" class="main-logo"></a>
                    </div>
                </div>
                <div class="col-md-10 hidden-md-down">
                    <div class="top-bar-right hidden-sm hidden-xs">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a class="top-download" href="">Home</a>
                            </li>
                            <li>
                                <a class="top-download" href="tentang.html">Tentang Kami</a>
                            </li>
                            <li>
                                <a class="top-download" href="layanan.html">Layanan Kami</a>
                            </li>
                            <li>
                                <a class="top-download" href="galeri.html">Galeri</a>
                            </li>
                            <li>
                                <a class="top-download " href="hubungi.html">Hubungi Kami</a>
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
            <section class="whyus">
                <article>
                    <div class="container text-center" style="width: 100%; padding-left: 0;">
                        <div style="height: 50px"></div>
                        <div class="container">
                            <div class="col-sm-2">
                                <img src="assets/stylepats/img/bar.jpg" align="right"><br><br>
                                <h1 class="text-right">
                                    Our Story
                                </h1>
                            </div>
                            <div class="col-sm-10">
                                <h6 class="f14 text-justify">
                                    <p>We are a Full Service Marketing Partner, which offers Above the Line, Below the Line and Massive Digital Marketing consulting &amp; production services. We have the capacity start from creating strategy and producing TV Commercial and creating Events up to helping clients to create an engaging social media campaign. Operating not solely for education industries but also automotive, financial, consumer goods, etc. throughout Indonesia and overseas.<br></p><p>We were founded by Mr. Ivan Liusaputra, and share his Vision to create a better life through good values and attitude base on love and passion for innovations.</p><p>      We are operating from 4 Creative Houses (Offices); one in Surabaya,Bali, Bandung &amp; the other one is in Jakarta, both have the same capability of giving Full Service Marketing Partnership. Also we have an international network from Singapore and USA.</p><p><strong>The approach that we used is Integrated-Inbound Marketing</strong>, this is one of the most advance approach in marketing activation, combining traditional marketing activity like event management, merchandising and combining them with coordinated community and digital activities.</p><p>      Our focus is to help creating substantial brand experience for your company. In the smaller case to help you execute correctly your corporate business blue print. We are manage professionally with global standard marketing solution partner with aim to have long term partnership with you.</p><p><br></p><p><em>Our dearest regards,</em></p><p><strong>Joey Kenyatta</strong></p><p>Head of Marketing Strategic</p>        
                                </h6>
                            </div>
                        </div>

                        <br><br>

                        <div class="container">
                            <div class="col-sm-2">
                                <img src="assets/stylepats/img/bar.jpg" align="right"><br><br>
                                <h1 class="text-right">
                                    Our Mission
                                </h1>
                            </div>
                            <div class="col-sm-10">
                                <div class="row">
                                    <div class="mission">
                                        <span>Visi Kami</span>
                                    </div>
                                    <div class="owl-carousel" id="visi-slide" style="margin-top: 20px;">
                                        <div class="vision-title col-sm-12 col-md-12 col-xs-12">
                                            <span>1</span> | Lorem Ipsum is simply dummy
                                            <center><img src="https://static1.squarespace.com/static/5716fa148259b535cf2075c5/t/571867ecc2ea51643d939b16/1461217266617/?format=500w" alt="" class="img-responsive"></center>
                                            <div class="vision-content">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s    
                                            </div>
                                        </div>
                                        <div class="vision-title col-sm-12 col-md-12 col-xs-12">
                                            <span>2</span> | Lorem Ipsum is simply dummy
                                            <center><img src="https://static1.squarespace.com/static/5716fa148259b535cf2075c5/t/571867ecc2ea51643d939b16/1461217266617/?format=500w" alt="" class="img-responsive"></center>
                                            <div class="vision-content">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s    
                                            </div>
                                        </div>
                                        <div class="vision-title col-sm-12 col-md-12 col-xs-12">
                                            <span>3</span> | Vision
                                            <br>
                                            <div class="vision-content">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s    
                                            </div>
                                        </div>
                                        <div class="vision-title col-sm-12 col-md-12 col-xs-12">
                                            <span>4</span> | Vision
                                            <br>
                                            <div class="vision-content">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s 
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="margin-top: 30px;">
                                    <div class="mission">
                                        <span>Misi Kami</span>
                                    </div>
                                    <div class="owl-carousel" id="misi-slide" style="margin-top: 20px;">
                                        <div class="vision-title col-sm-12 col-md-12 col-xs-12">
                                            <span>1</span> | Lorem Ipsum is simply dummy
                                            <center><img src="https://static1.squarespace.com/static/5716fa148259b535cf2075c5/t/571867ecc2ea51643d939b16/1461217266617/?format=500w" alt="" class="img-responsive"></center>
                                            <div class="vision-content">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s    
                                            </div>
                                        </div>
                                        <div class="vision-title col-sm-12 col-md-12 col-xs-12">
                                            <span>2</span> | Lorem Ipsum is simply dummy
                                            <center><img src="https://static1.squarespace.com/static/5716fa148259b535cf2075c5/t/571867ecc2ea51643d939b16/1461217266617/?format=500w" alt="" class="img-responsive"></center>
                                            <div class="vision-content">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s    
                                            </div>
                                        </div>
                                        <div class="vision-title col-sm-12 col-md-12 col-xs-12">
                                            <span>3</span> | Vision
                                            <br>
                                            <div class="vision-content">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s    
                                            </div>
                                        </div>
                                        <div class="vision-title col-sm-12 col-md-12 col-xs-12">
                                            <span>4</span> | Vision
                                            <br>
                                            <div class="vision-content">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
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
    <script src="assets/stylepats/build/js/app-955d2ca942.js"></script>
    <script type="text/javascript" src="assets/stylepats/js/owl-carousel.min.js"></script>
    <script>
        $("#visi-slide").owlCarousel({
            items: 1,
            responsive: {
              0: {
                items: 1
              },
              600: {
                items: 1
              },
              1000: {
                items: 2
              }
            },
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

        $("#misi-slide").owlCarousel({
            items: 1,
            responsive: {
              0: {
                items: 1
              },
              600: {
                items: 1
              },
              1000: {
                items: 2
              }
            },
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
    </script>
</body>

</html>