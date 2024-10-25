@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    Tabii ki, işte mobilya firması için misyon, vizyon, kalite politikası ve müşteri memnuniyeti ile ilgili kısa metin örnekleri:

    Misyonumuz
    [Firma Adı], müşterilerimize estetik, fonksiyonel ve kaliteli mobilya çözümleri sunarak, yaşam alanlarını güzelleştirmeyi hedefler. Ahşap işçiliği ve tasarım konusundaki uzmanlığımızı kullanarak, müşteri memnuniyetini en üst düzeye çıkarmayı amaçlıyoruz. Her bir ürünümüzle evleri değil, yaşam tarzlarınızı dönüştürmeyi hedefliyoruz.

    Vizyonumuz
    [Firma Adı], mobilya dünyasında öncü bir marka olma vizyonu taşır. Modern tasarım anlayışı, sürdürülebilir üretim süreçleri ve müşteri memnuniyetine verdiğimiz önemle sektörde fark yaratmayı amaçlıyoruz. İnovasyon, kalite ve estetik değerleriyle evlerinizi özel kılacak ürünler sunarak, küresel bir mobilya markası olmayı hedefliyoruz.

    Kalite Politikamız
    [Firma Adı], kaliteyi bir yaşam tarzı olarak benimser. Her aşamada titiz kalite kontrol süreçleri ve yüksek standartlarda malzeme seçimi ile ürünlerimizi üretiriz. Uzman marangozlarımızın elinden çıkan her ürün, sağlamlık, estetik ve fonksiyonellik açısından en üst düzeyde standartları karşılamak üzere tasarlanmıştır. Kalite politikamız, müşterilerimize güvenilir, dayanıklı ve şık mobilya sunmaktır.

    Müşteri Memnuniyeti
    Müşteri memnuniyeti, [Firma Adı]'nın öncelikli önceliğidir. Her müşterimizle uzun vadeli ilişkiler kurmayı hedefleyerek, beklentilerin ötesine geçmek için çalışıyoruz. Sorumluluk bilinciyle hareket eden ekibimiz, müşterilerimizin taleplerini dikkatle dinleyerek, özel tasarımlar ve çözümler sunar. Siparişten teslimata kadar olan süreçte şeffaf iletişim ve profesyonel hizmet anlayışımızla müşteri memnuniyetini en üst düzeye çıkarmayı amaçlıyoruz.


@endsection
