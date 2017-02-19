@extends('layouts.public')

@section('title')
Pats Towing -
@stop

@section('csspage')
@stop

@section('content')    <link rel="stylesheet" type="text/css" href="assets/stylepats/css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="assets/stylepats/css/owl.theme.css" />
    <link rel="stylesheet" type="text/css" href="assets/stylepats/css/slick.css" />
    <link rel="stylesheet" type="text/css" href="assets/stylepats/css/slick-theme.css" />
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

</head>

<body>

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
            <section id="why-us" class="whyus">
                <article>
                    <div class="container text-center" style="width: 100%; padding-left: 0;">
                        <h2 class="form-pesan">Bagaimana Cara Pesan PATS</h2>

                        <div class="feature-row row">

                            <div class="col-md-4 col-sm-6">
                                <div class="feature-list">
                                    <img src="assets/stylepats/img/dummy.svg" alt="">
                                    <h4 class="normal-font">Alur 1</h4>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non fermentum turpis</p>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6">
                                <div class="feature-list">
                                    <img src="assets/stylepats/img/dummy.svg" alt="">
                                    <h4 class="normal-font">Alur 2</h4>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non fermentum turpis</p>
                                </div>
                            </div>

                            <div class="clearfix visible-sm-block"></div>
                            <!--/.clearfix-->

                            <div class="col-md-4 col-sm-6 mobile-desc">
                                <div class="feature-list">
                                    <img src="assets/stylepats/img/dummy.svg" alt="">
                                    <h4 class="normal-font">Alur 3</h4>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non fermentum turpis</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </section>
            <!-- end of benefit -->
            <div class="clearfix"></div>
            <!-- form -->
            <section id="form" class="centering">
                <div class="col-md-12 form">
                    <h2 class="form-pesan">Form Pemesanan</h2>
                    <form action="#" method="POST" id="">
                        <div class="col-md-6 form-group">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="name">NAMA*</label>
                                    <input type="name" name="name" class="form-control" id="name" placeholder="Nama Lengkap">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="email">EMAIL</label>
                                    <input type="name" name="email" class="form-control" id="email" placeholder="example@domain.com">
                                </div>
                                <div class="col-md-12   form-group">
                                    <label for="phone">PHONE</label>
                                    <input type="name" name="phone" class="form-control" id="phone" placeholder="08xxxxxxxxx">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 form-group">
                            <div class="row">
                                <div class="col-md-12   form-group">
                                    <label for="city">Kota Asal</label>
                                    <select name="city" id="city" class="form-control">
                                        <option value="Jabodetabek">Jabodetabek</option>
                                        <option value="Bandung">Bandung</option>
                                        <option value="Semarang">Semarang</option>
                                        <option value="Yogyakarta">Yogyakarta</option>
                                        <option value="Surabaya">Surabaya</option>
                                        <option value="Bali">Bali</option>
                                        <option value="Medan">Medan</option>
                                        <option value="Palembang">Palembang</option>
                                        <option value="Balikpapan">Balikpapan</option>
                                        <option value="Makassar">Makassar</option>
                                        <option value="Malang">Malang</option>
                                        <option value="Solo">Solo</option>
                                    </select>
                                </div>
                                <div class="col-md-12   form-group">
                                    <label for="city">Kota Tujuan</label>
                                    <select name="city" id="city" class="form-control">
                                        <option value="Jabodetabek">Jabodetabek</option>
                                        <option value="Bandung">Bandung</option>
                                        <option value="Semarang">Semarang</option>
                                        <option value="Yogyakarta">Yogyakarta</option>
                                        <option value="Surabaya">Surabaya</option>
                                        <option value="Bali">Bali</option>
                                        <option value="Medan">Medan</option>
                                        <option value="Palembang">Palembang</option>
                                        <option value="Balikpapan">Balikpapan</option>
                                        <option value="Makassar">Makassar</option>
                                        <option value="Malang">Malang</option>
                                        <option value="Solo">Solo</option>
                                    </select>
                                </div>
                                <div class="col-md-12   form-group">
                                    <label for="city">Jenis Kendaraan</label>
                                    <select name="city" id="city" class="form-control">
                                        <option value="Jabodetabek">Mobil</option>
                                        <option value="Bandung">Motor</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 form-group">
                                <label for="shipping">Pesan</label>
                                <textarea name="shipping_purpose" class="form-control" rows="3" id="shipping" placeholder="Jika ada pesan tambahan"></textarea>
                            </div>
                        <div class="col-md-12 text-right">
                            <button class="btn" id="submitFormButton">Pesan Sekarang</button>
                        </div>
                    </form>
                </div>
                <div class="clearfix"></div>
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
</body>

</html>