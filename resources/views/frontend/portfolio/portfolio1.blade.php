@extends('layouts.Frontend.app')
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
                            <img class="img-fluid" src="{{ asset('assets/images/portfolio/admission-office.png') }}"
                                 alt="">
                            <div class="overlay"></div>
                            <div class="absolute d-flex justify-content-start align-items-end">
                                <h1 class="text-white px-4 fs-96">Admission Office</h1>
                            </div>
                        </div>
                    </div> <!-- ./col -->
                </div> <!-- ./row -->
                <div class="row pt-5">
                    <div class="col-md-11 mx-auto">
                        <div class="row">
                            <div class="col-md-7">
                                <h2 class="mb-2">Project Description: </h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. </p>
                                <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                                    Ipsum passages, and more recently with desktop publishing software like Aldus
                                    PageMaker including versions of Lorem Ipsum.</p>
                            </div>
                            <div class="col-md-5">
                                <div class="row">
                                    <div class="col-md-3 text-center">
                                        <img class="h-auto w-50 mx-auto" src="/assets/images/portfolio/customer.svg" alt="">
                                    </div>
                                    <div class="col-md-7">
                                        <h5>Client:</h5>
                                        <p>Reveire Power and Automation Company Ltd.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 text-center">
                                        <img class="h-auto w-50 mx-auto" src="/assets/images/portfolio/location.svg" alt="">
                                    </div>
                                    <div class="col-md-9">
                                        <h5>Location:</h5>
                                        <p>Blue Ocean Tower, KamalAtaturk Avenue, Banani</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 text-center">
                                        <img class="h-auto w-50 mx-auto" src="/assets/images/portfolio/expand.svg" alt="">
                                    </div>
                                    <div class="col-md-7">
                                        <h5>Project Area:</h5>
                                        <p>3500 sft. (Admission Office)</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 text-center">
                                        <img class="h-auto w-50 mx-auto" src="/assets/images/portfolio/money-bag.svg" alt="">
                                    </div>
                                    <div class="col-md-7">
                                        <h5>Project Area:</h5>
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
                            <img class="w-100 h-auto" src="{{asset('assets/images/portfolio/portfolio-1.png')  }}"
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
                        <div class="col-sm-6 col-md-6 col-lg-7">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/portfolio/R_1 - Photo.png')}}">
                                    <img class="gallery-img-big img-fluid"
                                         src="{{asset('assets/images/portfolio/R_1 - Photo.png')}}" alt="Card image">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-5 mt-3 mt-md-0">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/portfolio/R_2 - Photo.png')}}">
                                    <img class="gallery-img-big img-fluid"
                                         src="{{asset('assets/images/portfolio/R_2 - Photo.png')}}" alt="Card image">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 mt-3">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/portfolio/R_3 - Photo.png')}}">
                                    <img class="gallery-img img-fluid"
                                         src="{{asset('assets/images/portfolio/R_3 - Photo.png')}}" alt="Card image">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 mt-3">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/portfolio/R_4 - Photo.png')}}">
                                    <img class="gallery-img img-fluid"
                                         src="{{asset('assets/images/portfolio/R_4 - Photo.png')}}" alt="Card image">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 mt-3">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/portfolio/R_5 - Photo.png')}}">
                                    <img class="gallery-img img-fluid"
                                         src="{{asset('assets/images/portfolio/R_5 - Photo.png')}}" alt="Card image">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 mt-3">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/portfolio/R_6 - Photo.png')}}">
                                    <img class="gallery-img img-fluid"
                                         src="{{asset('assets/images/portfolio/R_6 - Photo.png')}}" alt="Card image">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 mt-3">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/portfolio/R_7 - Photo.png')}}">
                                    <img class="gallery-img img-fluid"
                                         src="{{asset('assets/images/portfolio/R_7 - Photo.png')}}" alt="Card image">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 mt-3">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/portfolio/R_9 - Photo.png')}}">
                                    <img class="gallery-img img-fluid"
                                         src="{{asset('assets/images/portfolio/R_9 - Photo.png')}}" alt="Card image">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 mt-3">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/portfolio/R_10 - Photo.png')}}">
                                    <img class="gallery-img img-fluid"
                                         src="{{asset('assets/images/portfolio/R_10 - Photo.png')}}" alt="Card image">
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
