@extends('admin.layout.master2')

@section('content')
    <div class="page-content d-flex align-items-center justify-content-center">

        <div class="row w-100 mx-0 auth-page">
            <div class="col-md-8 col-xl-6 mx-auto">
                <div class="card">
                    <div class="row" style="justify-content: center">
                        <!--
                        <div class="col-md-4 pe-md-0">
                            <div class="auth-side-wrapper" style="background-image: url({{ url('https://via.placeholder.com/219x452') }})">

                            </div>
                        </div>
                        -->
                        <div class="col-md-8 ps-md-0">
                            <div class="auth-form-wrapper px-4 py-5">
                                <a href="#" class="noble-ui-logo d-block mb-2">Kıroğulları<span>Mobilya</span></a>
                                <h5 class="text-muted fw-normal mb-4">Hoşgeldiniz! Hesabınıza giriş yapın.</h5>
                                <form action="{{route("login")}}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="userEmail" class="form-label">Email Adresi</label>

                                        <input id="userEmail" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    </div>
                                    <div class="mb-3">
                                        <label for="userPassword" class="form-label">Şifre</label>

                                        <input id="userPassword" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    </div>

                                    <div>
                                        <button class="btn btn-primary me-2 mb-2 mb-md-0">Giriş Yap</button>

                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
