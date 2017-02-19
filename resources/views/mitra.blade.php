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
                    <a href="#">
                        <img src="assets/gobox/img/pats-header.svg">
                    </a>
                </li>
                <li>
                    <a href="index.html"><img src="assets/gobox/img/home.svg"> Home</a>
                </li>
                <li>
                    <a href="terms.html"><img src="assets/gobox/img/terms.svg"> Profil PATS</a>
                </li>
                <li>
                    <a href="blog.html"><i class="fa fa-image"></i> Gallery</a>
                </li>
                <li>
                    <a href="join.html"><i class="fa fa-user-plus"></i> Mitra PATS</a>
                </li>
                <li>
                    <a href="faq.html"><img src="assets/gobox/img/faq.svg"> How to Order</a>
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
                <div class="col-md-4 col-xs-2">
                    <div class="navbar-header">
                        <a href="#menu-toggle" class="btn btn-default menu-btn" id="menu-toggle"><i class="mdi-action-view-headline"></i></a>
                    </div>
                </div>
                <div class="col-md-4 col-xs-8">
                    <div class="top-logo">
                        <a href="index.html" class="main-logo"></a>
                    </div>
                </div>

            </div>

        </div>
        <div class="overlay-toggle"></div>
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <section id="clients">
                <div class="container">
                    <div class="row">
                        <h2>Daftar Mitra Kami</h2>
                        <div class="col-md-12 clients">
                            <div class="col-md-2 col-sm-6 col-xs-6 logo">
                                <img src="assets/gobox/img/pro-client/codeepic.png" class="img-responsive" alt="GO-BOX in Java Jazz Festival">
                            </div>
                            <div class="col-md-2 col-sm-6 col-xs-6 logo">
                                <img src="assets/gobox/img/pro-client/codeepic.png" class="img-responsive" alt="GO-BOX in Indonesia Fashion Week">
                            </div>
                            <div class="col-md-2 col-sm-6 col-xs-6 logo">
                                <img src="assets/gobox/img/pro-client/codeepic.png" class="img-responsive" alt="GO-BOX in International Future & Craft Fair Indonesia">
                            </div>
                            <div class="col-md-2 col-sm-6 col-xs-6 logo">
                                <img src="assets/gobox/img/pro-client/codeepic.png" class="img-responsive" alt="GO-BOX in GFF 2016">
                            </div>
                            <div class="col-md-2 col-sm-6 col-xs-6 logo">
                                <img src="assets/gobox/img/pro-client/codeepic.png" class="img-responsive" alt="GO-BOX in Hyperlink Project 2016">
                            </div>
                            <div class="col-md-2 col-sm-6 col-xs-6 logo">
                                <img src="assets/gobox/img/pro-client/codeepic.png" class="img-responsive" alt="GO-BOX in Pica Fest 2016">
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </section>

            <section id="why-us" class="whyus">
                <article>
                    <div class="container text-center" style="width: 100%; padding-left: 0;">
                        <h2>Mengapa ber-mitra dengan PATS ?</h2>

                        <div class="feature-row row">

                            <div class="col-md-4 col-sm-6">
                                <div class="feature-list">
                                    <img src="assets/gobox/img/dummy.svg" alt="">
                                    <h4 class="normal-font">Benefit Tagline</h4>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non fermentum turpis</p>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6">
                                <div class="feature-list">
                                    <img src="assets/gobox/img/dummy.svg" alt="">
                                    <h4 class="normal-font">Benefit Tagline</h4>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non fermentum turpis</p>
                                </div>
                            </div>

                            <div class="clearfix visible-sm-block"></div>
                            <!--/.clearfix-->

                            <div class="col-md-4 col-sm-6 mobile-desc">
                                <div class="feature-list">
                                    <img src="assets/gobox/img/dummy.svg" alt="">
                                    <h4 class="normal-font">Benefit Tagline</h4>

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
            <section id="form">
                <div class="col-md-4 detail">
                    <div class="skyline">
                        <h2>Daftar</h2>
                        <img src="assets/gobox/img/pats-header.svg" alt="Go-Box pro Business">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non fermentum turpis</p>
                    </div>
                </div>
                <div class="col-md-8 form">
                    <form action="#" method="POST" id="quoteForm">
                        <input type="hidden" name="_token" value="661gRaGZN2CkG2Dt6mXWFaPd3ag5urs6PJ6fIRGI">
                        <div class="col-md-6 form-group">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="name">NAMA*</label>
                                    <label for="" class="desc">Isi dengan nama lengkap Anda</label>
                                    <input type="name" name="name" class="form-control" id="name">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="company">COMPANY*</label>
                                    <input type="name" name="company" class="form-control" id="company">
                                </div>
                                <div class="col-md-12   form-group">
                                    <label for="phone">PHONE</label>
                                    <input type="name" name="phone" class="form-control" id="phone">
                                </div>
                                <div class="col-md-12   form-group">
                                    <label for="city">City</label>
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
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="title">TITLE*</label>
                                    <label for="" class="desc">Isi dengan nama jabatan Anda</label>
                                    <input type="name" name="title" class="form-control" id="title">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="industry">INDUSTRY*</label>
                                    <select name="industry_type" id="industry" class="form-control">
                                        <option>Furniture &amp; Appliance</option>
                                        <option>Construction &amp; MAterial</option>
                                        <option>Food &amp; Catering</option>
                                        <option>Electronics</option>
                                        <option>Manufacturing &amp; Retail</option>
                                        <option>Logistics &amp; Cargo</option>
                                        <option>Textile &amp; Garment</option>
                                        <option>Machinary &amp; Heavy Equipment</option>
                                        <option>Digital Printing &amp; Agencies</option>
                                        <option>Hospitality &amp; Property</option>
                                        <option>Fresh Food Supplies</option>
                                        <option>e-Commerce</option>
                                        <option>Telecommunication</option>
                                        <option>Florist &amp; Agriculture</option>
                                        <option>Laundry &amp; Other Public Services</option>
                                        <option>Banking &amp; Financial Institution</option>
                                        <option>Oil &amp; Gas</option>
                                        <option>Association &amp; Community</option>
                                        <option>Government &amp; NGOs</option>
                                        <option>Event Organizer</option>
                                        <option>Moving &amp; Relocation</option>
                                        <option>Hobbies &amp; Equipments</option>
                                        <option>Media</option>
                                        <option>Exhibition, Concert, Seminar</option>
                                        <option>Others</option>
                                    </select>
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="email">EMAIL</label>
                                    <input type="name" name="email" class="form-control" id="email">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="shipping">SHIPPING PURPOSE</label>
                            <textarea name="shipping_purpose" class="form-control" rows="3" id="shipping"></textarea>
                        </div>
                        <div class="col-md-12 text-right">
                            <script type="text/javascript">
                                var RecaptchaOptions = {
                                    "curl_timeout": 1
                                };
                            </script>
                            <script src='www.google.com/recaptcha/api6469.js?render=onload'></script>
                            <div class="g-recaptcha" data-sitekey="6Lcfix4TAAAAANODocx0XzWTKSwjJyxfEdNutPwM"></div>
                            <noscript>
                                <div style="width: 302px; height: 352px;">
                                    <div style="width: 302px; height: 352px; position: relative;">
                                        <div style="width: 302px; height: 352px; position: absolute;">
                                            <iframe src="https://www.google.com/recaptcha/api/fallback?k=6Lcfix4TAAAAANODocx0XzWTKSwjJyxfEdNutPwM" frameborder="0" scrolling="no" style="width: 302px; height:352px; border-style: none;">
                                            </iframe>
                                        </div>
                                        <div style="width: 250px; height: 80px; position: absolute; border-style: none;
                  bottom: 21px; left: 25px; margin: 0; padding: 0; right: 25px;">
                                            <textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 80px; border: 1px solid #c1c1c1;
                         margin: 0; padding: 0; resize: none;"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </noscript>

                            <button class="btn" id="submitFormButton">Daftar</button>
                        </div>
                    </form>
                </div>
                <div class="clearfix"></div>
            </section>
           
            <footer id="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-1 hidden-sm hidden-xs">
                            &nbsp;
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12 footer-menu">
                            <center><img src="assets/gobox/img/logo-pats.png"></center>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 hidden-xs footer-menu">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="terms.html">Terms &amp; Conditions</a></li>
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
                                <li><a href="#" target="_parent"><i class="fa fa-phone"></i> Call</a></li>
                            </ul>
                        </div>
                        <div class="col-md-1 hidden-sm hidden-xs">
                            &nbsp;
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
    <script src="assets/gobox/build/js/app-955d2ca942.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.modal-title').html('Whoops! looks like something wrong');
            //             $('#myModal div.modal-body').html(errors);
            //             $('#myModal').modal('show');
            var goTo = function goTo(id) {
                $('html,body').animate({
                    scrollTop: $(id).offset().top - 120
                }, 'slow');
                $('#wrapper').removeClass('toggled')
            };

            $('#btn-register').on('click', function() {
                goTo('#form');
            });
        });
    </script>

</body>

</html>