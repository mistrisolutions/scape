@extends('layouts.frontend.app')
@section('title', 'Radiance Bangladesh')
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
                            <img class="img-fluid hero-img" src="{{ asset('assets/images/radiance/banner.png') }}"
                                 alt="">
                            <div class="overlay"></div>
                            <div class="absolute d-flex justify-content-start align-items-end">
                                <h1 class="text-white px-4 fs-96">Radiance Bangladesh</h1>
                            </div>
                        </div>
                    </div> <!-- ./col -->
                </div> <!-- ./row -->
                <div class="row pt-5">
                    <div class="col-md-11 mx-auto">
                        <div class="row">
                            <div class="col-md-7">
                                <h2 class="mb-2">Project Description: </h2>
                                <p>Office interior design is not a trend, it is a style that fills the work environment with glamor,energy and excitement.Rediance Bangladesh is working with abroad study solutions for Bangladeshi students along with the foreing language trainings.They belived on us and they were satisfied with their new office.</p>

                                <p>We redesigned this small-scale space to a compact and full-functioning work space for the emploees to work comfortably and made a smooth circulation area for them.Colors were picked from their company profile to keep the acknowledgement and etnicity.We enhanched the view with several lighting arrangements along with some nature toppings.</p>
                            </div>
                            <div class="col-md-5">
                                <div class="row">
                                    <div class="col-3 text-center">
                                        <img class="h-auto w-50 mx-auto mt-1" src="/assets/images/portfolio/customer.svg" alt="">
                                    </div>
                                    <div class="col-9">
                                        <h5>Client:</h5>
                                        <p>Rezaun Nabi</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3 text-center">
                                        <img class="h-auto w-50 mx-auto mt-1" src="/assets/images/portfolio/location.svg" alt="">
                                    </div>
                                    <div class="col-9">
                                        <h5>Location:</h5>
                                        <p>Mirpur Road, Dhaka</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3 text-center">
                                        <img class="h-auto w-50 mx-auto mt-1" src="/assets/images/portfolio/expand.svg" alt="">
                                    </div>
                                    <div class="col-9">
                                        <h5>Project Area:</h5>
                                        <p>850 sft.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3 text-center">
                                        <img class="h-auto w-50 mx-auto mt-1" src="/assets/images/portfolio/money-bag.svg" alt="">
                                    </div>
                                    <div class="col-9">
                                        <h5>Project Cost: </h5>
                                        <p>8,50,000 BDT</p>
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
                            <img class="w-100 h-auto" src="{{asset('assets/images/radiance/Radiance-floor.png')  }}"
                                 alt="">
                        </div>
                    </div> <!-- ./col -->
                </div> <!-- ./row -->
            </div> <!-- ./container -->
        </div> <!-- ./about-us -->
        <div class="container portfolio-gallery">
            <div class="row mb-5">
                <div class="col-md-11 mx-auto">
                    <h2 class="text-center mb-5">3D View</h2>
                    <div class="row justify-content-center">
                        <div class="col-sm-6 col-md-6 col-lg-6 px-md-2">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/radiance/3d-1.png')}}">
                                    <img class="gallery-img-big img-fluid"
                                         src="{{asset('assets/images/radiance/3d-1.png')}}" alt="Card image">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 mt-3 mt-md-0 px-md-2">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/radiance/3d-3.png')}}">
                                    <img class="gallery-img-big img-fluid"
                                         src="{{asset('assets/images/radiance/3d-3.png')}}" alt="Card image">
                                </a>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-6 mt-3 px-md-2">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/radiance/3d-2.png')}}">
                                    <img class="gallery-img-big img-fluid"
                                         src="{{asset('assets/images/radiance/3d-2.png')}}" alt="Card image">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 mt-3  px-md-2">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/radiance/3d-4.png')}}">
                                    <img class="gallery-img-big img-fluid"
                                         src="{{asset('assets/images/radiance/3d-4.png')}}" alt="Card image">
                                </a>
                            </div>
                        </div>

                        
                            <div class="col-sm-6 col-md-6 col-lg-6 mt-3 px-md-2">
                                <div class="border-0">
                                    <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                    data-fancybox="gallery" href="{{asset('assets/images/radiance/3d-5.png')}}">
                                        <img class="gallery-img-big img-fluid"
                                            src="{{asset('assets/images/radiance/3d-5.png')}}" alt="Card image">
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
                        <div class="col-sm-6 col-md-6 col-lg-6 px-md-2">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/radiance/real-1.png')}}">
                                    <img class="gallery-img-big img-fluid" style="height: 304px" 
                                         src="{{asset('assets/images/radiance/real-1.png')}}" alt="Card image">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 mt-3 mt-md-0 px-md-2">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/radiance/real-2.png')}}">
                                    <img class="gallery-img-big img-fluid" style="height: 304px" 
                                         src="{{asset('assets/images/radiance/real-2.png')}}" alt="Card image">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 mt-3 px-md-2">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/radiance/real-3.png')}}">
                                    <img class="gallery-img img-fluid radiance-real-image"
                                         src="{{asset('assets/images/radiance/real-3.png')}}" alt="Card image">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 mt-3 px-md-2">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/radiance/real-4.png')}}">
                                    <img class="gallery-img img-fluid radiance-real-image"
                                         src="{{asset('assets/images/radiance/real-4.png')}}" alt="Card image">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 mt-3 px-md-2">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/radiance/real-5.png')}}">
                                    <img class="gallery-img img-fluid radiance-real-image"
                                         src="{{asset('assets/images/radiance/real-5.png')}}" alt="Card image">
                                </a>
                            </div>
                        </div> 
                    </div>
                </div>
            </div> <!-- ./row -->
            {{-- <div class="text-center mb-3 mb-md-0 pb-4">
                <a href="{{ route('gallery') }}" class="btn btn-primary px-4 font-weight-bold">See all</a>
            </div> --}}
         </div> <!-- ./container -->

        
        <style>
            .radiance-real-image{
                height: 567px !important;
            }

            @media only screen and (max-width: 576px){
                .radiance-real-image{
                    height: 250px !important;
                }
            }
        </style>

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
