<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>
        @yield('title')
    </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @stack('css')
    <!-- Layout styles -->

    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon-dark.png') }}" />
  </head>
  <body>
    <!--header-->
    <header id="header">
      <div class="header-nav">
          <div class="container px-md-0">
              <nav class="navbar navbar-expand-lg navbar-dark px-0">
                  <a class="navbar-brand mr-5" href="{{ route('home') }}">
                      <img class="img-fluid" src="{{ asset('assets/images/logo-w.png') }}" alt="">
                  </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav mr-auto">
                      <li class="nav-item">
                          <a class="nav-link {{request()->routeIs('home')?'nav-active':''}}" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link {{request()->routeIs('who-we-are')?'nav-active':''}}" href="{{ route('who-we-are') }}">About Us</a>
                      </li>
{{--                      <li class="nav-item dropdown">--}}
{{--                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                              About Us--}}
{{--                          </a>--}}
{{--                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--                             <a class="dropdown-item" href="{{ route('mission-vision') }}">Mission & Vision</a>--}}
{{--                              <a class="dropdown-item" href="{{ route('who-we-are') }}">Who we are</a>--}}
{{--                          </div>--}}
{{--                      </li>--}}
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Portfolio
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item {{request()->routeIs('portfolio-1')?'nav-active':''}}" href="{{ route('portfolio-1') }}">Admission Office</a>
                              <a class="dropdown-item {{request()->routeIs('portfolio-2')?'nav-active':''}}" href="{{ route('portfolio-2') }}">Faculty And Dean Office</a>
                              <a class="dropdown-item {{request()->routeIs('portfolio-3')?'nav-active':''}}" href="{{ route('portfolio-3') }}">Manuel Caffe</a>
                              <a class="dropdown-item {{request()->routeIs('portfolio-4')?'nav-active':''}}" href="{{ route('portfolio-4') }}">Fedex, Khulna</a>
                              <a class="dropdown-item {{request()->routeIs('portfolio-5')?'nav-active':''}}" href="{{ route('portfolio-5') }}">Food Company, Gajipur</a>
                              <a class="dropdown-item {{request()->routeIs('portfolio-6')?'nav-active':''}}" href="{{ route('portfolio-6') }}">Bijoy Residence</a>
                          </div>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link {{request()->routeIs('service')?'nav-active':''}}" href="{{ route('service') }}">Services</a>
                      </li>
{{--                      <li class="nav-item">--}}
{{--                          <a class="nav-link {{request()->routeIs('home')?'nav-active':''}}" href="{{ route('team') }}">Team</a>--}}
{{--                      </li>--}}
                      <li class="nav-item">
                          <a class="nav-link {{request()->routeIs('gallery')?'nav-active':''}}" href="{{ route('gallery') }}">Gallery</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link {{request()->routeIs('contact')?'nav-active':''}}" href=" {{ route('contact') }}">Contacts</a>
                      </li>
                      </ul>
                  </div> <!-- ./Collapse -->
              </nav> <!-- ./Nav -->
          </div><!-- ./Container -->
      </div> <!-- ./Header-nav -->

      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="teeth">
                  <img class="img-fluid" src="{{asset('assets/images/home/Teeth.png')}}" alt="">
              </div>
              </div>
          </div>
      </div>
      @yield('slider')
    </header> <!-- ./Header -->
    <!-- What's App -->
    <div class="whatsapp">
        <a href="https://api.whatsapp.com/send?phone=+8801616182874">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>
    @yield('content')
    @include('layouts.frontend.Partials.footer')
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- End custom js for this page -->
    @stack('custom-scripts')
  </body>
</html>
