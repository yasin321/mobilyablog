@extends('admin.layout.master2')

@section('content')
<div class="page-content d-flex align-items-center justify-content-center">

  <div class="row w-100 mx-0 auth-page">
    <div class="col-md-8 col-xl-6 mx-auto">
      <div class="card">
        <div class="row">
          <div class="col-md-4 pe-md-0">
            <div class="auth-side-wrapper" style="background-image: url({{ url('https://via.placeholder.com/219x452') }})">

            </div>
          </div>
          <div class="col-md-8 ps-md-0">
            <div class="auth-form-wrapper px-4 py-5">
              <a href="#" class="noble-ui-logo d-block mb-2">Kırogulları <span>Mobilya</span></a>
              <h5 class="text-muted fw-normal mb-4">Merhabalar admin paneline hoşgeldiniz.</h5>
              <form action="{{route("login")}}" method="post">
                  @csrf
                <div class="mb-3">
                  <label for="userEmail" class="form-label">Email Adresi</label>
                  <input type="email" class="form-control" id="userEmail" name="email" placeholder="Email">
                </div>
                <div class="mb-3">
                  <label for="userPassword" class="form-label">Şifre</label>
                  <input type="password" class="form-control" id="userPassword" name="password" autocomplete="current-password" placeholder="Şifre">
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
