@extends('layouts.frontend.app')
@section('title', 'The Food Company, Gajipur')
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
                            <img class="img-fluid w-100" src="{{ asset('assets/images/portfolio/food-1.png') }}"
                                 alt="">
                            <div class="overlay"></div>
                            <div class="absolute d-flex justify-content-start align-items-end">
                                <h1 class="text-white px-4 fs-96">The Food Company, Gajipur</h1>
                            </div>
                        </div>
                    </div> <!-- ./col -->
                </div> <!-- ./row -->
                <div class="row pt-5">
                    <div class="col-md-11 mx-auto">
                        <div class="row">
                            <div class="col-md-7">
                                <h2 class="mb-2">Project Description: </h2>
                                <p>A restaurant with good food & a green scenario can be an ideal environment for a meeting & gossiping place. Interior design in restaurants impacts customer psychology. The highlight of this project is Plants & the color green. Now-a-days, Restaurants are very popular among this generation & a demanding business. To stand out in an already crowded industry, restaurants have to provide not only good food and service but also a unique dining environment to enhance customer satisfaction. Designing this project was our ultimate goal.</p>
                                <p>We tried to enhance the beauty of the restaurant not only with our structural design but also with greenery. This place will be a center of attention in Gazipur because of its food & equally for its eye-soothing design which will connect everyone to nature.</p>
                            </div>
                            <div class="col-md-5">
                                <div class="row">
                                    <div class="col-3 text-center">
                                        <img class="h-auto w-50 mx-auto mt-1" src="/assets/images/portfolio/customer.svg" alt="">
                                    </div>
                                    <div class="col-9">
                                        <h5>Client:</h5>
                                        <p>Mr. Hasib Siddique</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3 text-center">
                                        <img class="h-auto w-50 mx-auto mt-1" src="/assets/images/portfolio/location.svg" alt="">
                                    </div>
                                    <div class="col-9">
                                        <h5>Location:</h5>
                                        <p>Deona-Jaydebpur Rd, Near Gazipur Dist. Graveyard, Jaydebpur, Gazipur.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3 text-center">
                                        <img class="h-auto w-50 mx-auto mt-1" src="/assets/images/portfolio/expand.svg" alt="">
                                    </div>
                                    <div class="col-9">
                                        <h5>Project Area:</h5>
                                        <p>3900 sft.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3 text-center">
                                        <img class="h-auto w-50 mx-auto mt-1" src="/assets/images/portfolio/money-bag.svg" alt="">
                                    </div>
                                    <div class="col-9">
                                        <h5>Budget:</h5>
                                        <p>3.5 Million BDT</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- ./col -->
                </div> <!-- ./row -->
                <div class="row py-5">
                    <div class="col-md-11 mx-auto">
                        <div>
                            <h2 class="text-center mb-5">Floor Planning</h2>
                            <img class="w-100 h-auto" src="{{asset('assets/images/food/food-factory-plan.jpg')  }}"
                                 alt="">
                        </div>
                    </div> <!-- ./col -->
                </div> <!-- ./row -->
            </div> <!-- ./container -->
        </div> <!-- ./about-us -->
        <div class="container portfolio-gallery portfolio-5">
            <div class="row mb-5">
                <div class="col-md-11 mx-auto">
                    <h2 class="text-center mb-5">3D View</h2>
                    <div class="row justify-content-center">
                        <div class="col-sm-6 col-md-6 col-lg-7 img-box mb-3 mb-md-0 px-md-2">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup w-100 h-100"
                                   data-fancybox="gallery" href="{{asset('assets/images/portfolio/food-1.png')}}">
                                    <img class="gallery-img-big img-fluid"
                                         src="{{asset('assets/images/portfolio/food-1.png')}}" alt="Card image">
                                </a>
                            </div>
                            <div class="border-0 mt-3">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/portfolio/food-2.png')}}">
                                    <img class="gallery-img-big img-fluid"
                                         src="{{asset('assets/images/portfolio/food-2.png')}}" alt="Card image">
                                </a>
                            </div>
                            <div class="border-0 mt-3">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/portfolio/food-3.png')}}">
                                    <img class="gallery-img-big img-fluid"
                                         src="{{asset('assets/images/portfolio/food-3.png')}}" alt="Card image">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-5 img-box px-md-2">
                            <div class="border-0 mb-3">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/portfolio/food-4.png')}}">
                                    <img class="gallery-img img-fluid"
                                         src="{{asset('assets/images/portfolio/food-4.png')}}" alt="Card image">
                                </a>
                            </div>
                            <div class="border-0 mb-3">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/portfolio/food-5.png')}}">
                                    <img class="gallery-img img-fluid"
                                         src="{{asset('assets/images/portfolio/food-5.png')}}" alt="Card image">
                                </a>
                            </div>
                            <div class="border-0 mb-3">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/portfolio/food-6.png')}}">
                                    <img class="gallery-img img-fluid"
                                         src="{{asset('assets/images/portfolio/food-6.png')}}" alt="Card image">
                                </a>
                            </div>
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/portfolio/food-7.png')}}">
                                    <img class="gallery-img img-fluid"
                                         src="{{asset('assets/images/portfolio/food-7.png')}}" alt="Card image">
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
