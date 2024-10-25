@extends("layouts.site.layout")
@section("content")
    <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light" style="background-image: url({{asset('site-assets/img/background.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>İletişim</h1>

                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->
    <!-- Start Contact
    ============================================= -->
    <div class="contact-form-area bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 office-info maps">
                    <!-- Start Tab Contact Info -->
                    <div class="tab-nvas">
                      <h2>İletişim Bilgileri</h2>
                    </div>
                    <div class="tab-content pad-all-20p txt-center-mobile">
                        <div id="id1" class="tab-pane active">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="info">
                                        <p>
                                            Konum
                                            <span>Ankara cad. İçmeler Mah. Tuzla/İstanbul</span>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-envelope-open"></i>
                                    </div>
                                    <div class="info">
                                        <p>
                                            E-Posta
                                            <span>info@kirogullarimobilya.com</span>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-mobile-alt"></i>
                                    </div>
                                    <div class="info">
                                        <p>
                                            Telefon
                                            <span>0547 437 9843</span>
                                        </p>
                                    </div>
                                </li>
                                <li class="google-maps">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12072.280766475258!2d29.3035602!3d40.8483827!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cadc3fc34e552f%3A0x60bbfb4e10b59efb!2zS8Sxcm_En3VsbGFyxLEgTW9iaWx5YQ!5e0!3m2!1str!2str!4v1705066917186!5m2!1str!2str" ></iframe>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- End Tab Contact Info -->
                </div>
                <div class="col-md-6 contact-form text-light">
                    <div class="content">
                        <div class="heading">
                            <h3>İletişim Formu</h3>
                        </div>
                        <form action="#" method="POST" class="contact-form">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Ad Soyad" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Telefon" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="comments" name="comments" placeholder="İletişim Mesajı"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <button type="submit" name="submit" id="submit">
                                        Mesaj Gönder<i class="fa fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-md-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->


@endsection
