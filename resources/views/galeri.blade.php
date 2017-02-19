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
            <!-- videos -->
            <section id="videos">
                <div class="container">
                    <div class="row">
                        <h2>Galeri</h2>
                        <div class="demo-gallery">
                            <!-- Hidden video div -->
                            <div style="display:none;" id="video1">
                                <video class="lg-video-object lg-html5" controls preload="none">
                                    <source src="http://sachinchoolur.github.io/lightGallery/static/videos/video4.mp4" type="video/mp4">
                                     Your browser does not support HTML5 video.
                                </video>
                            </div>

                            <ul id="lightgallery" class="list-unstyled row">
                                <li class="col-xs-12 col-sm-6 col-md-4" data-sub-html="video caption1" data-html="#video1" >
                                    <a href="">
                                      <img class="img-responsive" src="assets/stylepats/img/2.jpg" />
                                    </a>
                                    <p class="p10">
                                        <h4>Video : Satelit Telkom 3S - GNFI #untukIndonesia</h4>
                                        <span>Satelit Telkom 3S setidaknya membutuhkan waktu 9 hari sebelum bisa beroperasi penuh</span>
                                    </p>
                                </li>
                                <li class="col-xs-12 col-sm-6 col-md-4" data-responsive="assets/stylepats/img/2.jpg 375, assets/stylepats/img/2.jpg 480, assets/stylepats/img/2.jpg 800" data-src="assets/stylepats/img/2.jpg" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                                    <a href="">
                                        <img class="img-responsive" src="assets/stylepats/img/2.jpg">
                                    </a>
                                    <p class="p10">
                                        <h4>Foto : Satelit Telkom 3S - GNFI #untukIndonesia</h4>
                                        <span>Satelit Telkom 3S setidaknya membutuhkan waktu 9 hari sebelum bisa beroperasi penuh</span>
                                    </p>
                                </li>
                                <li class="col-xs-12 col-sm-6 col-md-4" data-responsive="assets/stylepats/img/2.jpg 375, assets/stylepats/img/2.jpg 480, assets/stylepats/img/2.jpg 800" data-src="assets/stylepats/img/2.jpg" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                                    <a href="">
                                        <img class="img-responsive" src="assets/stylepats/img/2.jpg">
                                    </a>
                                    <p class="p10">
                                        <h4>Foto : Satelit Telkom 3S - GNFI #untukIndonesia</h4>
                                        <span>Satelit Telkom 3S setidaknya membutuhkan waktu 9 hari sebelum bisa beroperasi penuh</span>
                                    </p>
                                </li>
                                <li class="col-xs-12 col-sm-6 col-md-4" data-responsive="assets/stylepats/img/2.jpg 375, assets/stylepats/img/2.jpg 480, assets/stylepats/img/2.jpg 800" data-src="assets/stylepats/img/2.jpg" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                                    <a href="">
                                        <img class="img-responsive" src="assets/stylepats/img/2.jpg">
                                    </a>
                                    <p class="p10">
                                        <h4>Foto : Satelit Telkom 3S - GNFI #untukIndonesia</h4>
                                        <span>Satelit Telkom 3S setidaknya membutuhkan waktu 9 hari sebelum bisa beroperasi penuh</span>
                                    </p>
                                </li>
                                <li class="col-xs-12 col-sm-6 col-md-4" data-responsive="assets/stylepats/img/2.jpg 375, assets/stylepats/img/2.jpg 480, assets/stylepats/img/2.jpg 800" data-src="assets/stylepats/img/2.jpg" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                                    <a href="">
                                        <img class="img-responsive" src="assets/stylepats/img/2.jpg">
                                    </a>
                                    <p class="p10">
                                        <h4>Foto : Satelit Telkom 3S - GNFI #untukIndonesia</h4>
                                        <span>Satelit Telkom 3S setidaknya membutuhkan waktu 9 hari sebelum bisa beroperasi penuh</span>
                                    </p>
                                </li>
                                <li class="col-xs-12 col-sm-6 col-md-4" data-responsive="assets/stylepats/img/2.jpg 375, assets/stylepats/img/2.jpg 480, assets/stylepats/img/2.jpg 800" data-src="assets/stylepats/img/2.jpg" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                                    <a href="">
                                        <img class="img-responsive" src="assets/stylepats/img/2.jpg">
                                    </a>
                                    <p class="p10">
                                        <h4>Foto : Satelit Telkom 3S - GNFI #untukIndonesia</h4>
                                        <span>Satelit Telkom 3S setidaknya membutuhkan waktu 9 hari sebelum bisa beroperasi penuh</span>
                                    </p>
                                </li>
                                <li class="col-xs-12 col-sm-6 col-md-4" data-responsive="assets/stylepats/img/2.jpg 375, assets/stylepats/img/2.jpg 480, assets/stylepats/img/2.jpg 800" data-src="assets/stylepats/img/2.jpg" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                                    <a href="">
                                        <img class="img-responsive" src="assets/stylepats/img/2.jpg">
                                    </a>
                                    <p class="p10">
                                        <h4>Foto : Satelit Telkom 3S - GNFI #untukIndonesia</h4>
                                        <span>Satelit Telkom 3S setidaknya membutuhkan waktu 9 hari sebelum bisa beroperasi penuh</span>
                                    </p>
                                </li>
                                <li class="col-xs-12 col-sm-6 col-md-4" data-responsive="assets/stylepats/img/2.jpg 375, assets/stylepats/img/2.jpg 480, assets/stylepats/img/2.jpg 800" data-src="assets/stylepats/img/2.jpg" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                                    <a href="">
                                        <img class="img-responsive" src="assets/stylepats/img/2.jpg">
                                    </a>
                                    <p class="p10">
                                        <h4>Foto : Satelit Telkom 3S - GNFI #untukIndonesia</h4>
                                        <span>Satelit Telkom 3S setidaknya membutuhkan waktu 9 hari sebelum bisa beroperasi penuh</span>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>    
                </div>
            </section>
            <!-- end of videos -->
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

    <script src="assets/stylepats/build/js/app-955d2ca942.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#lightgallery').lightGallery({
                controls: true,
                autoplay: true,
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
    <script src="assets/stylepats/js/jsx/lightgallery.js"></script>
    <script src="assets/stylepats/js/jsx/lg-fullscreen.js"></script>
    <script src="assets/stylepats/js/jsx/lg-thumbnail.js"></script>
    <script src="assets/stylepats/js/jsx/lg-video.js"></script>
    <script src="assets/stylepats/js/jsx/lg-autoplay.js"></script>
    <script src="assets/stylepats/js/jsx/lg-zoom.js"></script>
    <script src="assets/stylepats/js/jsx/lg-hash.js"></script>
    <script src="assets/stylepats/js/jsx/lg-pager.js"></script>
    <script src="assets/stylepats/js/jsx/jquery.mousewheel.min.js"></script>
</body>

</html>