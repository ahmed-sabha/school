@extends('layout.app')

@section('content')

    <section class="site-hero site-sm-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(web_assets/web_assets/images/big_image_2.jpg);">
      <div class="container">
        <div class="row align-items-center justify-content-center site-hero-sm-inner">
          <div class="col-md-7 text-center">

            <div class="mb-5 element-animate">
              <h1 class="mb-2">Register</h1>
              <p class="bcrumb"><a href="index.html">Home</a> <span class="sep ion-android-arrow-dropright px-2"></span>  <span class="current">Register</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7">
            <div class="form-wrap">
              <h2 class="mb-5">Register new account</h2>
              <form method="POST" action="{{ route('register') }}">
                @csrf

                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Email Address</label>
                      <input type="text" id="name" class="form-control py-2">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 form-group">
                    <label for="name" >{{ __('Name') }}</label>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
            </div>

                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">{{ __('Password') }}</label>

                      <input id="password" type="password" class="form-control py-2 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
                    </div>
                  </div>
                  <div class="row mb-5">
                    <div class="col-md-12 form-group">
                      <label for="name">{{ __('Confirm Password') }}</label>
                      <input id="password-confirm" type="password" class="form-control py-2" name="password_confirmation" required autocomplete="new-password">

                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 form-group">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
                  </div>
                </form>
              </div>
          </div>
        </div>
      </div>
    </section>

    @endsection
