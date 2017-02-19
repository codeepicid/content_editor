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
            <section id="why-us" class="whyus">
                <article>
                    <div class="container text-center" style="width: 100%; padding-left: 0;">
                        <div style="height: 30px"></div>
                        <div id="form" class="centering">
                            <div class="col-md-12 form" style="border-top: transparent;">
                                <div>
                                    <h2>Anda memiliki pertanyaan?</h2>
                                    <p>Isi Form pada halaman ini kemudian Tim <em>Support </em>kami akan menghubungi Anda di hari kerja, dari Senin hingga Jum’at, pukul 09:00 WIB – 21:00 WIB dan Sabtu pukul 09:00-17:00 WIB.</p>
                                    <p>Anda juga dapat mengirimkan <em>email</em> ke <strong><a href="">domain@domain.com</a></strong></p>
                                </div>
                                <div style="height: 30px"></div>
                                <form action="#" method="POST">
                                    <div class="col-md-12 form-group">
                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <label for="city" class="pull-left">JENIS KEPERLUAN*</label>
                                                <select name="city" id="city" class="form-control">
                                                    <option value="Kerjasama">Kerjasama</option>
                                                    <option value="Keluhan">Keluhan</option>
                                                    <option value="Lainnya">Lainnya</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <label for="name" class="pull-left">NAMA*</label>
                                                <input type="name" name="name" class="form-control" id="name" placeholder="Nama Lengkap">
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <label for="email" class="pull-left">EMAIL</label>
                                                <input type="name" name="email" class="form-control" id="email" placeholder="example@domain.com">
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <label for="phone" class="pull-left">PHONE</label>
                                                <input type="name" name="phone" class="form-control" id="phone" placeholder="08xxxxxxxxx">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 form-group">
                                            <label for="shipping" class="pull-left">Pesan</label>
                                            <textarea name="shipping_purpose" class="form-control" rows="3" id="shipping" placeholder="Jika ada pesan tambahan"></textarea>
                                        </div>
                                    <div class="col-md-12 text-right">
                                        <button class="btn" id="submitFormButton">Kirim</button>
                                    </div>
                                </form>
                                <p>Atau bisa datang ke kantor kami di </p>
                                <p>
                                    <span>
                                        <h4 class="p10">Kantor Surabaya</h4>
                                        <p>Jl. Kebraon II No.36 Surabaya</p>
                                    </span>
                                    <span>
                                        <h4 class="p10">Kantor Surabaya</h4>
                                        <p>Jl. Kebraon II No.36 Surabaya</p>
                                    </span>
                                    <span>
                                        <h4 class="p10">Kantor Surabaya</h4>
                                        <p>Jl. Kebraon II No.36 Surabaya</p>
                                    </span>
                                </p>
                            </div>
                        </div>
                </article>
            </section>

            <div class="clearfix"></div>
           
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