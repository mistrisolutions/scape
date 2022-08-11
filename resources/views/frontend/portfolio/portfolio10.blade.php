@extends('layouts.frontend.app')
@section('title', 'Library & Register Floor')
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
{{--                            <img class="img-fluid" src="{{ asset('assets/images/portfolio/admission-office.png') }}"--}}
{{--                                 alt="">--}}
                            <img class="img-fluid hero-img" src="{{ asset('assets/images/library/banner.png') }}"
                                 alt="">
                            <div class="overlay"></div>
                            <div class="absolute d-flex justify-content-start align-items-end">
                                <h1 class="text-white px-4 fs-96">Library & Register Floor</h1>
                            </div>
                        </div>
                    </div> <!-- ./col -->
                </div> <!-- ./row -->
                <div class="row pt-5">
                    <div class="col-md-11 mx-auto">
                        <div class="row">
                            <div class="col-md-7">
                                <h2 class="mb-2">Project Description: </h2>
                                <p>Knowledge is progression, the more we read the more our knowledge progresses. The library is the most significant access toward this progression.University of Scholars Aimed to provide a calm and paecefull environment to their students for their better experience of study and discussion.</p>

                                <p>Considering the fixed space with few diffrent arena,we emplimented the most prefarable idea and design to bring out the maximum usage of the space.We successfully meet the desier of our client with smooth finishing satisfaction. </p>
                            </div>
                            <div class="col-md-5">
                                <div class="row">
                                    <div class="col-3 text-center">
                                        <img class="h-auto w-50 mx-auto mt-1" src="/assets/images/portfolio/customer.svg" alt="">
                                    </div>
                                    <div class="col-9">
                                        <h5>Client:</h5>
                                        <p>Reveire Power and Automation Company Ltd.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3 text-center">
                                        <img class="h-auto w-50 mx-auto mt-1" src="/assets/images/portfolio/location.svg" alt="">
                                    </div>
                                    <div class="col-9">
                                        <h5>Location:</h5>
                                        <p>Blue Ocean Tower, KamalAtaturk Avenue, Banani</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3 text-center">
                                        <img class="h-auto w-50 mx-auto mt-1" src="/assets/images/portfolio/expand.svg" alt="">
                                    </div>
                                    <div class="col-9">
                                        <h5>Project Area:</h5>
                                        <p>3500 sft. (Library & Register Floor)</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3 text-center">
                                        <img class="h-auto w-50 mx-auto mt-1" src="/assets/images/portfolio/money-bag.svg" alt="">
                                    </div>
                                    <div class="col-9">
                                        <h5>Budget:</h5>
                                        <p>35,00,000 BDT</p>
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
                            <h2 class="text-center mb-5">10th Floor (Library & Registration Floor)</h2>
                            <img class="w-100 h-auto" src="{{asset('assets/images/library/floor_planning.png')  }}"
                                 alt="">
                        </div>
                    </div> <!-- ./col -->
                </div> <!-- ./row -->
            </div> <!-- ./container -->
        </div> <!-- ./about-us -->

        <div class="container portfolio-gallery mt-md-5 pt-md-5">
            <div class="row mb-5">
                <div class="col-md-11 mx-auto">
                    <h2 class="text-center mb-5">3D View</h2>
                    <div class="row justify-content-center">
                        <div class="col-sm-6 col-md-6 col-lg-6 px-md-2">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/library/3d1.png')}}">
                                    <img class="gallery-img-big img-fluid"
                                         src="{{asset('assets/images/library/3d1.png')}}" alt="Card image">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 mt-3 mt-md-0 px-md-2">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/library/3d2.png')}}">
                                    <img class="gallery-img-big img-fluid"
                                         src="{{asset('assets/images/library/3d2.png')}}" alt="Card image">
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-sm-6 col-md-6 col-lg-4 mt-3 px-md-2">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/library/3d3.png')}}">
                                    <img class="gallery-img img-fluid"
                                         src="{{asset('assets/images/library/3d3.png')}}" alt="Card image">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 mt-3 px-md-2">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/library/3d4.png')}}">
                                    <img class="gallery-img img-fluid"
                                         src="{{asset('assets/images/library/3d4.png')}}" alt="Card image">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 mt-3 px-md-2">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/library/3d5.png')}}">
                                    <img class="gallery-img img-fluid"
                                         src="{{asset('assets/images/library/3d5.png')}}" alt="Card image">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 mt-3 px-md-2">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/library/3d6.png')}}">
                                    <img class="gallery-img-big img-fluid"
                                         src="{{asset('assets/images/library/3d6.png')}}" alt="Card image">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 mt-3 px-md-2">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/library/3d7.png')}}">
                                    <img class="gallery-img-big img-fluid"
                                         src="{{asset('assets/images/library/3d7.png')}}" alt="Card image">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- ./row -->
        </div> <!-- ./container -->

        <div class="container portfolio-gallery mt-md-5 pt-md-5">
            <div class="row mb-5">
                <div class="col-md-11 mx-auto">
                    <h2 class="text-center mb-5">Live Pictures</h2>
                    <div class="row justify-content-center">
                        <div class="col-sm-6 col-md-6 col-lg-9 px-md-2">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/library/live1.png')}}">
                                    <img class="gallery-img-big img-fluid"
                                         src="{{asset('assets/images/library/live1.png')}}" alt="Card image">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3 mt-md-0 px-md-2">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/library/live2.png')}}">
                                    <img class="gallery-img-big img-fluid"
                                         src="{{asset('assets/images/library/live2.png')}}" alt="Card image">
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-sm-6 col-md-6 col-lg-4 mt-3 px-md-2">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/library/live3.png')}}">
                                    <img class="gallery-img img-fluid"
                                         src="{{asset('assets/images/library/live3.png')}}" alt="Card image">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 mt-3 px-md-2">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/library/live4.png')}}">
                                    <img class="gallery-img img-fluid"
                                         src="{{asset('assets/images/library/live4.png')}}" alt="Card image">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 mt-3 px-md-2">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/library/live5.png')}}">
                                    <img class="gallery-img img-fluid"
                                         src="{{asset('assets/images/library/live5.png')}}" alt="Card image">
                                </a>
                            </div>
                        </div>
                         <div class="col-sm-6 col-md-6 col-lg-4 mt-3 px-md-2">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/library/live6.png')}}">
                                    <img class="gallery-img img-fluid"
                                         src="{{asset('assets/images/library/live6.png')}}" alt="Card image">
                                </a>
                            </div>
                        </div>
                         <div class="col-sm-6 col-md-6 col-lg-4 mt-3 px-md-2">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/library/live7.png')}}">
                                    <img class="gallery-img img-fluid"
                                         src="{{asset('assets/images/library/live7.png')}}" alt="Card image">
                                </a>
                            </div>
                        </div>
                         <div class="col-sm-6 col-md-6 col-lg-4 mt-3 px-md-2">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/library/live8.png')}}">
                                    <img class="gallery-img img-fluid"
                                         src="{{asset('assets/images/library/live8.png')}}" alt="Card image">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 mt-3 px-md-2">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/library/live9.png')}}">
                                    <img class="gallery-img img-fluid"
                                         src="{{asset('assets/images/library/live9.png')}}" alt="Card image">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 mt-3 px-md-2">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/library/live10.png')}}">
                                    <img class="gallery-img img-fluid"
                                         src="{{asset('assets/images/library/live10.png')}}" alt="Card image">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- ./row -->
            <div class="text-center my-3 mb-md-5">
                <a href="/gallery/#library" class="btn btn-primary px-4 font-weight-bold">See all</a>
            </div>
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
