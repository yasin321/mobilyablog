@extends("layouts.site.layout")
@section("content")
<!-- Start Breadcrumb
    ============================================= -->
<div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light" style="background-image: url(assets/img/2440x1578.png);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Sayfa Bulunamadı</h1>

            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start 404
============================================= -->
<div class="error-page-area text-center default-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>404</h1>
                <h2>Sayfa Bulunamadı</h2>
                <p>
                    Aradığınız sayfa mevcut değil veya kaldırılmış. Aşağıdaki düğmeyi kullanarak Ana Sayfaya gitmeyi deneyin.
                </p>
                <a class="btn btn-dark border btn-md" href="{{route("home")}}">Anasayfa Dön</a>
            </div>
        </div>
    </div>
</div>
<!-- End 404 -->
@endsection
