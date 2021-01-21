<!doctype html>
<html lang="en">
  <head>
    <title>Free Education Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- rtl & ltr --}}
    @if(App::getLocale() == 'en')
    <link rel="stylesheet" href="//cdn.rawgit.com/morteza/bootstrap-ltr/v3.3.4/dist/css/bootstrap-ltr.min.css">

    @else

    <link rel="stylesheet" href="//cdn.rawgit.com/morteza/bootstrap-rtl/v3.3.4/dist/css/bootstrap-rtl.min.css">

    @endif
     <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

    <link rel="stylesheet" href="web_assets/css/bootstrap.css">
    <link rel="stylesheet" href="web_assets/css/animate.css">
    <link rel="stylesheet" href="web_assets/css/owl.carousel.min.css">

    <link rel="stylesheet" href="web_assets/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="web_assets/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="web_assets/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="web_assets/css/magnific-popup.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="web_assets/css/style.css">

  </head>
  <body>

    <header role="banner">

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand absolute" href="/">University</a>
          {{---{{__('cp.university')}}--}}
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link active" href="/">{{__('cp.home')}}</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="courses" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{__('cp.courses')}}</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="Courses">HTML</a>
                  <a class="dropdown-item" href="Courses">WordPress</a>
                  <a class="dropdown-item" href="Courses">Laravel</a>
                  <a class="dropdown-item" href="Courses">JavaScript</a>
                  <a class="dropdown-item" href="Courses">Python</a>
                </div>

              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{__('cp.categories')}}</a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                  <a class="dropdown-item" href="#">HTML</a>
                  <a class="dropdown-item" href="#">WordPress</a>
                  <a class="dropdown-item" href="#">Laravel</a>
                  <a class="dropdown-item" href="#">JavaScript</a>
                  <a class="dropdown-item" href="#">Python</a>
                </div>

              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog">{{__("cp.blog")}}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about">{{__('cp.about us')}}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact">{{__('cp.contact')}}</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{__('cp.language')}}</a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                  <a class="dropdown-item" href="locale/ar">AR</a>
                  <a class="dropdown-item" href="locale/en">EN</a>


                </div>

              </li>


              @guest
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{__('cp.login')}}</a>
              </li>
              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{__('cp.register')}}</a>
                  </li>
              @endif
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
        </ul> </div>

        </div>
      </nav>

    </header>
    @yield('content')

    <!-- END header -->
    <footer class="site-footer">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
              <h3>{{__('cp.university')}}</h3>
              <p>Perferendis eum illum voluptatibus dolore tempora consequatur minus asperiores temporibus.</p>
            </div>
            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
              <h3 class="heading">{{__('cp.quick link')}}</h3>
              <div class="row">
                <div class="col-md-6">
                  <ul class="list-unstyled">
                    <li><a href="#">{{__('cp.home')}}</a></li>
                    <li><a href="#">{{__('cp.about us')}}</a></li>
                    <li><a href="#">{{__('cp.courses')}}</a></li>
                    <li><a href="#">{{__('cp.pages')}}</a></li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="list-unstyled">
                    <li><a href="#">{{__('cp.news')}}</a></li>
                    <li><a href="#">{{__('cp.support')}}</a></li>
                    <li><a href="#">{{__('cp.contact')}}</a></li>
                    <li><a href="#">{{__('cp.privacy')}}</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
              <h3 class="heading">{{__('cp.blog')}}</h3>
              <div class="block-21 d-flex mb-4">
                <div class="text">
                  <h3 class="heading mb-0"><a href="#">Consectetur Adipisicing Elit</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="ion-android-calendar"></span> May 29, 2018</a></div>
                    <div><a href="#"><span class="ion-android-person"></span> Admin</a></div>
                    <div><a href="#"><span class="ion-chatbubble"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 d-flex mb-4">
                <div class="text">
                  <h3 class="heading mb-0"><a href="#">Dolore Tempora Consequatur</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="ion-android-calendar"></span> May 29, 2018</a></div>
                    <div><a href="#"><span class="ion-android-person"></span> Admin</a></div>
                    <div><a href="#"><span class="ion-chatbubble"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 d-flex mb-4">
                <div class="text">
                  <h3 class="heading mb-0"><a href="#">Perferendis eum illum</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="ion-android-calendar"></span> May 29, 2018</a></div>
                    <div><a href="#"><span class="ion-android-person"></span> Admin</a></div>
                    <div><a href="#"><span class="ion-chatbubble"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
              <h3 class="heading">{{__('cp.contact information')}}</h3>
              <div class="block-23">
                <ul>
                  <li><span class="icon ion-android-pin"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                  <li><a href="#"><span class="icon ion-ios-telephone"></span><span class="text">+2 392 3929 210</span></a></li>
                  <li><a href="#"><span class="icon ion-android-mail"></span><span class="text">info@yourdomain.com</span></a></li>
                  <li><span class="icon ion-android-time"></span><span class="text">Monday &mdash; Friday 8:00am - 5:00pm</span></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row pt-5">
            <div class="col-md-12 text-center copyright">

              <p class="float-md-left"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
              <p class="float-md-right">
                <a href="#" class="fa fa-facebook p-2"></a>
                <a href="#" class="fa fa-twitter p-2"></a>
                <a href="#" class="fa fa-linkedin p-2"></a>
                <a href="#" class="fa fa-instagram p-2"></a>

              </p>
            </div>
          </div>
        </div>
      </footer>
      <!-- END footer -->

      <!-- loader -->
      <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

      <script src="web_assets/js/jquery-3.2.1.min.js"></script>
      <script src="web_assets/js/jquery-migrate-3.0.0.js"></script>
      <script src="web_assets/js/popper.min.js"></script>
      <script src="web_assets/js/bootstrap.min.js"></script>
      <script src="web_assets/js/owl.carousel.min.js"></script>
      <script src="web_assets/js/jquery.waypoints.min.js"></script>
      <script src="web_assets/js/jquery.stellar.min.js"></script>
      <script src="web_assets/js/jquery.animateNumber.min.js"></script>

      <script src="web_assets/js/jquery.magnific-popup.min.js"></script>

      <script src="web_assets/js/main.js"></script>
    </body>
  </html>
