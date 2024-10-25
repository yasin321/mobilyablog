@extends("layouts.site.layout")
@section("content")
    <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light"
         style="background-image: url({{asset('site-assets/img/background.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Galeri</h1>

                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Portfolio
        ============================================= -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center padding-xl">
                <h1>Fotoğraflarımız</h1>
            </div>
        </div>
    </div>

        <div class="container galery">
            <div class="portfolio-item row">

                <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                    <a href="{{asset('site-assets/img/foto4.png')}}"
                       class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid"
                             src="{{asset('site-assets/img/foto4.png')}}" alt="">
                    </a>
                </div>
                <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                    <a href="{{asset('site-assets/img/foto3.png')}}"
                       class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid"
                             src="{{asset('site-assets/img/foto3.png')}}" alt="">
                    </a>
                </div>
                <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                    <a href="{{asset('site-assets/img/foto2.png')}}"
                       class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid"
                             src="{{asset('site-assets/img/foto2.png')}}" alt="">
                    </a>
                </div>
                <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                    <a href="{{asset('site-assets/img/foto1.png')}}"
                       class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid"
                             src="{{asset('site-assets/img/foto1.png')}}" alt="">
                    </a>
                </div>
            </div>
        </div>

    <!-- End Portfolio -->
@endsection
