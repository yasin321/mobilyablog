@extends("layouts.site.layout")
@section("content")


    <!-- Start Banner
============================================= -->
    <div class="banner-area">
        <div id="sofolbanner" class="carousel slide animate_text carousel-fade" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner text-center text-light carousel-zoom">
                <div class="item active">
                    <div class="slider-thumb bg-fixed" style="background-image: url({{asset('site-assets/img/slider1.webp')}});"></div>
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="content">
                                            <h3 data-animation="animated slideInDown">KIROĞULLARI MOBİLYA</h3>
                                            <h1 data-animation="animated slideInLeft">Tarzınıza Uygun Mobilya Çeşitleri</h1>
                                            <p data-animation="animated slideInUp">
                                                Sizlere özel olarak seçilmiş birbirinden şık ve fonksiyonel mobilya seçeneklerimizle evinizi dilediğiniz gibi düzenleyin
                                            </p>
                                            <a data-animation="animated slideInUp" class="btn btn-light border effect btn-sm" href="#">Daha Fazlası</a>
                                            <a data-animation="animated slideInUp" class="btn btn-theme effect btn-sm" href="#">İletişim</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="slider-thumb bg-fixed" style="background-image: url({{asset('site-assets/img/slider2.webp')}});"></div>
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="content">
                                            <h3 data-animation="animated slideInDown">KIROĞULLARI MOBİLYA</h3>
                                            <h1 data-animation="animated slideInLeft">Zarif Aksesuarlar ve Dekoratif Ürünler</h1>
                                            <p data-animation="animated slideInUp">
                                                Evlerinizi kişiselleştirmek ve öne çıkarmak için zarif aksesuarlar ve dekoratif ürünlerle tanışın.
                                            </p>
                                            <a data-animation="animated slideInUp" class="btn btn-light border effect btn-sm" href="#">Daha Fazlası</a>
                                            <a data-animation="animated slideInUp" class="btn btn-theme effect btn-sm" href="#">İletişim</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="slider-thumb bg-fixed" style="background-image: url({{asset('site-assets/img/slider3.webp')}});"></div>
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="content">
                                            <h3 data-animation="animated slideInDown">KIROĞULLARI MOBİLYA</h3>
                                            <h1 data-animation="animated slideInLeft">Ev Dekorasyonunda Sınırsız Seçenekler!</h1>
                                            <p data-animation="animated slideInUp">
                                                Tarzınıza uygun renk paletleri, mobilya düzenlemeleri ve aydınlatma seçenekleri ile evinizi adeta bir sanat eserine dönüştürün.
                                            </p>
                                            <a data-animation="animated slideInUp" class="btn btn-light border effect btn-sm" href="#">Daha Fazlası</a>
                                            <a data-animation="animated slideInUp" class="btn btn-theme effect btn-sm" href="#">İletişim</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Wrapper for slides -->

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#sofolbanner" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                <span class="sr-only">Geri</span>
            </a>
            <a class="right carousel-control" href="#sofolbanner" data-slide="next">
                <i class="fa fa-angle-right"></i>
                <span class="sr-only">İleri</span>
            </a>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start About
    ============================================= -->
    <div class="about-area about-us double-thumb reverse default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 thumb">
                    <div class="col-md-6 item">
                        <img src="{{asset('site-assets/img/about.webp')}}" alt="Thumb">
                    </div>
                    <div class="col-md-6 item">
                        <img src="{{asset('site-assets/img/about2.webp')}}" alt="Thumb">
                    </div>
                </div>
                <div class="col-md-6 info">
                    <div class="content">
                        <h3>Evinize Hoş Geldiniz</h3>
                        <h2>Hakkımızda</h2>
                        <p>
                            Hoş Geldiniz! Biz Kıroğulları Mobilya olarak, ahşap işleme konusunda uzmanlaşmış,
                            kaliteli ve özgün tasarımlar sunan bir firmayız.
                            Tuzla merkezli şirketimiz, yılların deneyimi ve uzman
                            kadrosuyla müşterilerimize özel ahşap ürünler ve mobilya hizmetleri sunmaktadır.
                               </p>
                        <p>
                            Kıroğulları Mobilya, geniş bir yelpazede mobilya hizmetleri sunmaktadır. Ahşap mobilya
                            tasarımı, özel ahşap dekorasyonlar, kapı ve pencere imalatı, özel projeler ve
                            restorasyon gibi alanlarda uzmanız. Her bir projede müşteri taleplerini öncelikli
                            kılarken, işimizi titizlikle ve özveriyle yapmaktayız.
                               </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Start Why Chose Us
    ============================================= -->
    <div class="we-do about-area bg-dark text-light">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 video bg-cover" style="background-image: url({{asset('site-assets/img/about3.webp')}});">
                </div>
                <div class="col-md-6 info">
                    <div class="content">
                        <h2>Sürdürülebilir <br> Doğa Dostu Mobilya Seçenekleri</h2>
                        <div class="row item-area">
                            <div class="item equal-height col-md-6">
                                <div class="icon">
                                    <i class="flaticon-skyline-2"></i>
                                </div>
                                <div class="info">
                                    <h4>Misyonumuz</h4>
                                    <p>
                                        Bizler, müşterilerimize estetik, fonksiyonel ve kaliteli mobilya çözümleri sunarak, yaşam alanlarını güzelleştirmeyi hedefliyoruz.
                                    </p>
                                </div>
                            </div>
                            <div class="item equal-height col-md-6">
                                <div class="icon">
                                    <i class="flaticon-maintenance"></i>
                                </div>
                                <div class="info">
                                    <h4>Vizyonumuz</h4>
                                    <p>
                                        İnovasyon, kalite ve estetik değerleriyle evlerinizi özel kılacak ürünler sunarak, küresel bir mobilya markası olmayı hedefliyoruz.
                                    </p>
                                </div>
                            </div>
                            <div class="item equal-height col-md-6">
                                <div class="icon">
                                    <i class="flaticon-home"></i>
                                </div>
                                <div class="info">
                                    <h4>Kalite Politikamız</h4>
                                    <p>
                                        Kalite politikamız, müşterilerimize güvenilir, dayanıklı ve şık mobilya sunmaktır.
                                    </p>
                                </div>
                            </div>
                            <div class="item equal-height col-md-6">
                                <div class="icon">
                                    <i class="flaticon-house-sketch"></i>
                                </div>
                                <div class="info">
                                    <h4>Müşteri Memnuniyeti</h4>
                                    <p>
                                        Her müşterimizle uzun vadeli ilişkiler kurmayı hedefleyerek, beklentilerin ötesine geçmek için çalışıyoruz.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Why Chose Us -->


    <!-- Start Portfolio
    ============================================= -->
    <div class="portfolio-area default-padding-top">
        <div class="container-full">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Hizmetlerimiz</h2>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="pf-carousel owl-carousel owl-theme">
                        <div class="pf-item branding photography">
                            <div class="portfolio-effet">
                                <div class="thumb">
                                    <img src="{{asset('site-assets/img/mutfak-dolabi.webp')}}" alt="Thumb"/>
                                    <div class="overlay">
                                        <h4>Mutfak Dolabı</h4>
                                        <a href="{{asset('site-assets/img/mutfak-dolabi.webp')}}" class="item popup-link"><i class="fa fa-eye"></i></a>
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pf-item branding photography">
                            <div class="portfolio-effet">
                                <div class="thumb">
                                    <img src="{{asset('site-assets/img/gardirop.webp')}}" alt="Thumb"/>
                                    <div class="overlay">
                                        <h4>Yatak Odası</h4>
                                        <a href="{{asset('site-assets/img/gardirop.webp')}}" class="item popup-link"><i class="fa fa-eye"></i></a>
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pf-item branding photography">
                            <div class="portfolio-effet">
                                <div class="thumb">
                                    <img src="{{asset('site-assets/img/yemek-masasi.webp')}}" alt="Thumb"/>
                                    <div class="overlay">
                                        <h4>Yemek Masası</h4>
                                        <a href="{{asset('site-assets/img/yemek-masasi.webp')}}" class="item popup-link"><i class="fa fa-eye"></i></a>
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pf-item branding photography">
                            <div class="portfolio-effet">
                                <div class="thumb">
                                    <img src="{{asset('site-assets/img/bilgisayar-masasi.webp')}}" alt="Thumb"/>
                                    <div class="overlay">
                                        <h4>Bilgisayar Masası</h4>
                                        <a href="{{asset('site-assets/img/bilgisayar-masasi.webp')}}" class="item popup-link"><i class="fa fa-eye"></i></a>
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pf-item branding photography">
                            <div class="portfolio-effet">
                                <div class="thumb">
                                    <img src="{{asset('site-assets/img/kapi.webp')}}" alt="Thumb"/>
                                    <div class="overlay">
                                        <h4>Ahşap Kapı Modelleri</h4>
                                        <a href="{{asset('site-assets/img/kapi.webp')}}" class="item popup-link"><i class="fa fa-eye"></i></a>
                                        <a href="#"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Portfolio -->

    <!-- Start Testimonials
    ============================================= -->
    <div class="testimonials-area default-padding text-light bg-fixed shadow dark" style="background-image: url({{asset('site-assets/img/gorus.webp')}});">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Sizden Gelenler</h2>
                        <p>
                            Sorumluluk bilinciyle hareket eden ekibimiz, müşterilerimizin taleplerini dikkatle dinleyerek, özel tasarımlar ve çözümler sunar.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial-items testimonials owl-carousel owl-theme">
                        <div class="item">
                            <div class="content">
                                <p>
                                    Kıroğulları Mobilya'nın teslimat ve montaj ekibi gerçekten profesyonel.
                                    Mobilyalarımız zamanında ve kusursuz bir şekilde monte edildi.
                                    Hiçbir sorun yaşamadan keyifle kullanmaya başladık.
                                    Kıroğulları Mobilya'ya teşekkür ederiz!
                                </p>
                            </div>
                            <div class="bottom">
                                <div class="avatar">
                                    <img src="{{asset('site-assets/img/profil.webp')}}" alt="Author">
                                </div>
                                <div class="info">
                                    <h4>Ahmet Gündoğu</h4>
                                    <span>Proje Danışmanı</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="content">
                                <p>
                                    Kıroğulları Mobilya'nın sürdürülebilir yaklaşımını çok takdir ediyoruz. Doğa dostu malzemeler
                                    ve çevre bilincine sahip üretim süreçleri, bizi markaya daha çok bağladı. Hem kaliteli
                                    hem de çevreye duyarlı ürünler bulmak harika bir deneyimdi.
                                </p>
                            </div>
                            <div class="bottom">
                                <div class="avatar">
                                    <img src="{{asset('site-assets/img/profil-k.webp')}}" alt="Author">
                                </div>
                                <div class="info">
                                    <h4>Gamze Pekşen</h4>
                                    <span>Malimüşavir</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="content">
                                <p>
                                    Kıroğulları Mobilya'nın ekibiyle çalışmak gerçekten keyifliydi. İlk görüşmeden teslimata kadar sürekli
                                    bilgilendirildik. Uzman marangozlar ve tasarımcılar, taleplerimizi anlamak için ellerinden
                                    geleni yaptılar. Sonuç muhteşem oldu, teşekkür ederiz!
                                </p>
                            </div>
                            <div class="bottom">
                                <div class="avatar">
                                    <img src="{{asset('site-assets/img/profil-k.webp')}}" alt="Author">
                                </div>
                                <div class="info">
                                    <h4>Mahmut Bayrak</h4>
                                    <span>Emlak Danışmanı</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials -->



@endsection
