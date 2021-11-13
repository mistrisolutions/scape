@extends('layouts.frontend.app')
@section('title', 'about')
@push('css')
    <!-- fancybox-popup-css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/>
    <!-- slick-slider-css -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Font-Awesome -->
    <script src="https://kit.fontawesome.com/c1b498439e.js" crossorigin="anonymous"></script>
    <style>
        #header {
            height: 100%;
        }
    </style>
@endpush
@section('content')
    <main>
        <div class="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-md-11 mx-auto">
                        <div class="h-100 w-100 relative">
                            <img class="img-fluid" src="{{ asset('assets/images/portfolio/fedex.png') }}"
                                 alt="">
                            <div class="overlay"></div>
                            <div class="absolute d-flex justify-content-start align-items-end">
                                <h1 class="text-white px-4 fs-96">Fedex, Khulna</h1>
                            </div>
                        </div>
                    </div> <!-- ./col -->
                </div> <!-- ./row -->
                <div class="row pt-5">
                    <div class="col-md-11 mx-auto">
                        <div class="row">
                            <div class="col-md-7">
                                <h2 class="mb-2">Project Description: </h2>
                                <p>FedEx Corporation, formerly Federal Express Corporation and later FDX Corporation, is an American multinational conglomerate holding company that focuses on transportation, e-commerce and business services. After starting its journey in Bangladesh, recently they opened a branch in Khulna. It was a very challenging task as the area was small. But we don’t compromise about our design. </p>
                                <p>We’ve turned this little space into a full-functioning office where employees can work comfortably & have a pleasant experience working under this roof. We tried to express the identity of FedEx through their theme color purple & orange from their logo. And the main focus was lighting & the color white. As these will make the whole environment friendly for employees.</p>
                            </div>
                            <div class="col-md-5">
                                <div class="row">
                                    <div class="col-md-3 text-center">
                                        <img class="h-auto w-50 mx-auto" src="/assets/images/portfolio/customer.svg" alt="">
                                    </div>
                                    <div class="col-md-7">
                                        <h5>Client:</h5>
                                        <p>MGH Group</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 text-center">
                                        <img class="h-auto w-50 mx-auto" src="/assets/images/portfolio/location.svg" alt="">
                                    </div>
                                    <div class="col-md-9">
                                        <h5>Location:</h5>
                                        <p>Sher-E-Bangla Rd, Khulna</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 text-center">
                                        <img class="h-auto w-50 mx-auto" src="/assets/images/portfolio/expand.svg" alt="">
                                    </div>
                                    <div class="col-md-7">
                                        <h5>Project Area:</h5>
                                        <p>380 sft.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 text-center">
                                        <img class="h-auto w-50 mx-auto" src="/assets/images/portfolio/money-bag.svg" alt="">
                                    </div>
                                    <div class="col-md-7">
                                        <h5>Budget:</h5>
                                        <p>1 Million BDT</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- ./col -->
                </div> <!-- ./row -->
{{--                <div class="row py-5">--}}
{{--                    <div class="col-md-11 mx-auto">--}}
{{--                        <div>--}}
{{--                            <h2 class="text-center mb-5">Live Pictures</h2>--}}
{{--                            <img class="w-100 h-auto" src="{{asset('assets/images/portfolio/portfolio-2.png')  }}"--}}
{{--                                 alt="">--}}
{{--                        </div>--}}
{{--                    </div> <!-- ./col -->--}}
{{--                </div> <!-- ./row -->--}}
            </div> <!-- ./container -->
        </div> <!-- ./about-us -->
        <div class="container portfolio-gallery portfolio-4">
            <div class="row mb-5">
                <div class="col-md-11 mx-auto">
                    <h2 class="text-center mb-5">Live Pictures</h2>
                    <div class="row justify-content-center">
                        <div class="col-sm-6 col-md-6 col-lg-7 img-box">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup w-100 h-100"
                                   data-fancybox="gallery" href="{{asset('assets/images/portfolio/fedex-1.png')}}">
                                    <img class="gallery-img-big img-fluid"
                                         src="{{asset('assets/images/portfolio/fedex-1.png')}}" alt="Card image">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-5 mt-3 mt-md-0 img-box">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/portfolio/fedex-6.png')}}">
                                    <img class="gallery-img-big img-fluid"
                                         src="{{asset('assets/images/portfolio/fedex-6.png')}}" alt="Card image">
                                </a>
                            </div>
                            <div class="border-0 mt-3">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/portfolio/fedex-2.png')}}">
                                    <img class="gallery-img-big img-fluid"
                                         src="{{asset('assets/images/portfolio/fedex-2.png')}}" alt="Card image">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 mt-3 img-box">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/portfolio/fedex-3.png')}}">
                                    <img class="gallery-img img-fluid"
                                         src="{{asset('assets/images/portfolio/fedex-3.png')}}" alt="Card image">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 mt-3 img-box">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/portfolio/fedex-5.png')}}">
                                    <img class="gallery-img img-fluid"
                                         src="{{asset('assets/images/portfolio/fedex-5.png')}}" alt="Card image">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 mt-3 img-box">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/portfolio/fedex-4.png')}}">
                                    <img class="gallery-img img-fluid"
                                         src="{{asset('assets/images/portfolio/fedex-4.png')}}" alt="Card image">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- ./row -->
        </div> <!-- ./container -->
    </main> <!-- ./Main -->
@endsection
@push('custom-scripts')
    <!-- slick-slider js-->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script>
        // Navbar
        $(document).ready(function () {
            $(window).scroll(function () {

                if ($(window).scrollTop() > 50) {
                    $('.header-nav').addClass('navbar-fixed-top');
                    $('.teeth').addClass('teeth-fixed-top');
                }

                if ($(window).scrollTop() < 51) {
                    $('.header-nav').removeClass('navbar-fixed-top');
                    $('.teeth').removeClass('teeth-fixed-top');
                }
            });

            //Fancybox
            $('.view-popup').fancybox({});
        });
    </script>
@endpush
