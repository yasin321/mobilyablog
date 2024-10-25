@extends("layouts.site.layout")
@section("content")
    <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light" style="background-image: url({{asset('site-assets/img/background.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Hakkımızda</h1>

                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->
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


    <!-- Start Featured Services
    ============================================= -->
    <div class="top-featured-services-area default-padding-bottom">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="item">
                        <i class="flaticon-house-sketch"></i>
                        <h4>Kalite Politikası</h4>
                        <p>
                            Kıroğulları Mobilya, kaliteyi bir yaşam tarzı olarak benimser. Her aşamada titiz kalite kontrol süreçleri ve yüksek standartlarda malzeme
                            seçimi ile ürünlerimizi üretiriz. Uzman marangozlarımızın elinden çıkan her ürün, sağlamlık, estetik ve fonksiyonellik açısından en üst düzeyde standartları
                            karşılamak üzere tasarlanmıştır. Kalite politikamız, müşterilerimize güvenilir, dayanıklı ve şık mobilya sunmaktır.
                        </p>
                    </div>
                    <div class="item">
                        <i class="flaticon-skyline-2"></i>
                        <h4>Misyonumuz</h4>
                        <p>
                            Kıroğulları Mobilya, müşterilerimize estetik, fonksiyonel ve kaliteli mobilya çözümleri sunarak, yaşam alanlarını güzelleştirmeyi hedefler.
                            Ahşap işçiliği ve tasarım konusundaki uzmanlığımızı kullanarak, müşteri memnuniyetini en üst düzeye çıkarmayı amaçlıyoruz. Her bir ürünümüzle
                            evleri değil, yaşam tarzlarınızı dönüştürmeyi hedefliyoruz.
                        </p>
                    </div>
                    <div class="item">
                        <i class="flaticon-maintenance"></i>
                        <h4>Vizyonumuz</h4>
                        <p>
                            Kıroğulları Mobilya, mobilya dünyasında öncü bir marka olma vizyonu taşır. Modern tasarım anlayışı, sürdürülebilir üretim süreçleri ve
                            müşteri memnuniyetine verdiğimiz önemle sektörde fark yaratmayı amaçlıyoruz. İnovasyon, kalite ve estetik değerleriyle evlerinizi
                            özel kılacak ürünler sunarak, küresel bir mobilya markası olmayı hedefliyoruz.
                        </p>
                    </div>
                    <div class="item">
                        <i class="flaticon-skyline-2"></i>
                        <h4>Müşteri Memnuniyeti</h4>
                        <p>
                            Müşteri memnuniyeti, Kıroğulları Mobilya'nın öncelikli önceliğidir. Her müşterimizle uzun vadeli ilişkiler kurmayı hedefleyerek, beklentilerin
                            ötesine geçmek için çalışıyoruz. Sorumluluk bilinciyle hareket eden ekibimiz, müşterilerimizin taleplerini dikkatle dinleyerek,
                            özel tasarımlar ve çözümler sunar. Siparişten teslimata kadar olan süreçte şeffaf iletişim ve profesyonel hizmet anlayışımızla
                            müşteri memnuniyetini en üst düzeye çıkarmayı amaçlıyoruz.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Featured Services -->

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
