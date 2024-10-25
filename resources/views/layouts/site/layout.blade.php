<!DOCTYPE html>
<html lang="tr">

<head>

    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ottrali - Construction Building Company">

    <!-- ========== Page Title ========== -->
    <title>Kıroğulları Mobilya</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{asset('site-assets/img/favicon.png')}}" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{asset('site-assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('site-assets/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{asset('site-assets/css/flaticon-construction-set.css')}}" rel="stylesheet" />
    <link href="{{asset('site-assets/css/magnific-popup.css')}}" rel="stylesheet" />
    <link href="{{asset('site-assets/css/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('site-assets/css/owl.theme.default.min.css')}}" rel="stylesheet" />
    <link href="{{asset('site-assets/css/animate.css')}}" rel="stylesheet" />
    <link href="{{asset('site-assets/css/bootsnav.css')}}" rel="stylesheet" />
    <link href="{{asset('site-assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('site-assets/css/responsive.css')}}" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="{{asset('site-assets/assets/js/html5/html5shiv.min.js')}}"></script>
    <script src="{{asset('site-assets/assets/js/html5/respond.min.js')}}"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,900" rel="stylesheet">

</head>

<body>

<!-- Preloader Start -->
<div class="se-pre-con" style="background: url({{asset('site-assets/img/preloader.gif')}}) center no-repeat #fff;"></div>
<!-- Preloader Ends -->

<!-- Start Header Top
============================================= -->
<div class="top-bar-area bg-dark text-light">
    <div class="container">
        <div class="row">
            <div class="topbar-info">
                <div class="top-address col-md-8 col-sm-9">
                    <ul>
                        <li><a href="#"><i class="fas fa-mobile-alt"></i>0537 437 9843</a></li>
                        <li><a href="#"><i class="fas fa-envelope-open"></i>info@kirogullarimobilya.com</a></li>
                        <li><i class="fas fa-map-marker-alt"></i>Tuzla/İstanbul</li>
                    </ul>
                </div>
                <div class="topbar-social col-md-4 col-sm-3">
                    <ul class="text-right">
                        <li>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-dribbble"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-pinterest"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Header Top -->

<!-- Header
============================================= -->
<header>
    <!-- Start Navigation -->
    <nav class="navbar navbar-default navbar-sticky bootsnav">
        <div class="container">

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="{{asset('site-assets/img/logo.png')}}" class="logo logo-display" alt="Logo">
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                    <li >
                        <a href="/"  >Anasayfa</a>

                    </li>
                    <li>
                        <a href="{{route("about")}}">Hakkımızda</a>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Hizmetlerimiz</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Mutfak Dolabı</a></li>
                            <li><a href="#">Yatak Odası</a></li>
                            <li><a href="#">Yemek Masası</a></li>
                            <li><a href="#">Bilgisayar Masası</a></li>
                            <li><a href="#">Kapı Çeşitleri</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route("galery")}}">Galeri</a>
                    </li>
                    <li>
                        <a href="{{route("contact")}}">İletişim</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
    <!-- End Navigation -->
</header>
<!-- End Header -->

@yield("content")

<!-- Start Footer
============================================= -->
<footer class="default-padding text-light">
    <div class="container">
        <div class="row">
            <div class="f-items fv1">
                <div class="col-md-4 item">
                    <div class="f-item">
                        <h4>Hakkımızda</h4>
                        <p>
                            Hoş Geldiniz! Biz Kıroğulları Mobilya olarak,
                            ahşap işleme konusunda uzmanlaşmış, kaliteli ve özgün tasarımlar
                            sunan bir firmayız. Tuzla merkezli şirketimiz, yılların deneyimi ve
                            uzman kadrosuyla müşterilerimize özel ahşap ürünler ve mobilya hizmetleri sunmaktadır.
                        </p>
                        <div class="address">
                            <ul>
                                <li><i class="fas fa-envelope-open"></i> <span>info@kirogullarimobilya.com</span></li>
                                <li><i class="fas fa-map-marked-alt"></i> <span>Ankara cad. İçmeler Mah. Tuzla/İstanbul</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 item">
                    <div class="f-item link full">
                        <h4>Hizmetlerimiz</h4>
                        <ul>
                            <li><a href="#">Mutfak Dolabı</a></li>
                            <li><a href="#">Yemek Masası</a></li>
                            <li><a href="#">Bilgisayar Masası</a></li>
                            <li><a href="#">Yatak Odası</a></li>
                            <li><a href="#">Kapı Çeşitleri</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 item">
                    <div class="f-item business-hours">
                        <h4>Çalışma Saatlerimiz</h4>

                        <ul>
                            <li>Pazartesi - Cuma <span>08:00 - 19-00</span></li>
                            <li>Cumartesi  <span>08:00 - 18:00</span></li>
                            <li>Pazar <span>Kapalı</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-6">
                        <p>&copy; Copyright 2024. Tüm Hakları Saklıdır By <a href="#">Kıroğulları Mobilya</a></p>
                    </div>
                    <div class="col-md-6 footer-bottom-menu text-right">
                        <ul>
                            <li><a href="#">Kalite Politikası</a></li>
                            <li><a href="{{route("contact")}}">İletişim</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </div>
</footer>
<!-- End Footer -->

<!-- jQuery Frameworks
============================================= -->
<script src="{{asset('site-assets/js/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('site-assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('site-assets/js/equal-height.min.js')}}"></script>
<script src="{{asset('site-assets/js/jquery.appear.js')}}"></script>
<script src="{{asset('site-assets/js/jquery.easing.min.js')}}"></script>
<script src="{{asset('site-assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('site-assets/js/modernizr.custom.13711.js')}}"></script>
<script src="{{asset('site-assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('site-assets/js/wow.min.js')}}"></script>
<script src="{{asset('site-assets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('site-assets/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('site-assets/js/count-to.js')}}"></script>
<script src="{{asset('site-assets/js/bootsnav.js')}}"></script>
<script src="{{asset('site-assets/js/main.js')}}"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
<script>
    // $('.portfolio-item').isotope({
    //  	itemSelector: '.item',
    //  	layoutMode: 'fitRows'
    //  });
    $('.portfolio-menu ul li').click(function(){
        $('.portfolio-menu ul li').removeClass('active');
        $(this).addClass('active');

        var selector = $(this).attr('data-filter');
        $('.portfolio-item').isotope({
            filter:selector
        });
        return  false;
    });
    $(document).ready(function() {
        var popup_btn = $('.popup-btn');
        popup_btn.magnificPopup({
            type : 'image',
            gallery : {
                enabled : true
            }
        });
    });
</script>
</body>
</html>
