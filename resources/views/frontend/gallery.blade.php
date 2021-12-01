@extends('layouts.frontend.app')
@section('title', 'Gallery')
@push('css')
    <!-- fancybox-popup-css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/>
    <!-- Font-Awesome -->
    <script src="https://kit.fontawesome.com/c1b498439e.js" crossorigin="anonymous"></script>


    <style>
        #header {
            height: 100%;
        }

        /* overlay at start */
        .mfp-fade.mfp-bg {
            opacity: 0;

            -webkit-transition: all 0.15s ease-out;
            -moz-transition: all 0.15s ease-out;
            transition: all 0.15s ease-out;
        }

        /* overlay animate in */
        .mfp-fade.mfp-bg.mfp-ready {
            opacity: 0.8;
        }

        /* overlay animate out */
        .mfp-fade.mfp-bg.mfp-removing {
            opacity: 0;
        }

        /* content at start */
        .mfp-fade.mfp-wrap .mfp-content {
            opacity: 0;

            -webkit-transition: all 0.15s ease-out;
            -moz-transition: all 0.15s ease-out;
            transition: all 0.15s ease-out;
        }

        /* content animate it */
        .mfp-fade.mfp-wrap.mfp-ready .mfp-content {
            opacity: 1;
        }

        /* content animate out */
        .mfp-fade.mfp-wrap.mfp-removing .mfp-content {
            opacity: 0;
        }

        /** modal **/

        .modal-content {
            height: 90vh;
            position: relative;
        }

        .modal-body {
            padding: 0px;
        }

        iframe.img-fluid.w-100 {
            height: 100%;
            object-fit: cover;
            object-position: 50% 50%;
        }

        @media (min-width: 576px) {
            .modal-dialog {
                max-width: 80%;
                margin: auto;
                height: 100%;
                align-items: center;
                display: flex;
            }
        }
    </style>
@endpush

@section('content')
    <main>
        <div class="portfolio">
            <div class="container">
                <div class="row my-5">
                    <div class="col-md-10 mx-auto">
                        <div class="portfolio-wrap">
                            <ul class="nav nav-pills mb-5 w-100 h-100 row mx-0 justify-content-between" id="pills-tab" role="tablist">
                                <li class="col-4 px-0 nav-item h-100 w-100 border-right">
                                    <a class="nav-link active rounded-0 d-flex align-items-center justify-content-center h-100" id="pills-residence-tab" data-toggle="pill"
                                       href="#pills-residence" role="tab" aria-controls="pills-residence"
                                       aria-selected="true">3D VR <br> View</a>
                                </li>
                                <li class="col-4 px-0 nav-item h-100 w-100">
                                    <a class="nav-link rounded-0 d-flex align-items-center justify-content-center h-100" id="p ills-office-tab" data-toggle="pill"
                                       href="#pills-office" role="tab" aria-controls="pills-office"
                                       aria-selected="false">Project Pictures</a>
                                </li>
                                <li class="col-4 px-0 nav-item h-100 w-100 border-left">
                                    <a class="nav-link rounded-0 d-flex align-items-center justify-content-center h-100" id="p ills-hotel-tab" data-toggle="pill"
                                       href="#pills-hotel" role="tab" aria-controls="pills-hotel" aria-selected="false">Activities</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-5">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-residence" role="tabpanel"
                                     aria-labelledby="pills-residence-tab">
                                    <div class="d-md-flex mb-3">
                                        <div class="pr-4 d-flex align-items-center tab-left">
                                           <p class="text-primary">Formal Livingroom</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 col-md-4 mb-4 mb-md-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/residential/1.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/residential/1.jpg')}}" alt="">
                                                    </a>
                                                    <a href="" data-toggle="modal" data-target="#exampleModal"><img
                                                            class="threeD"
                                                            src="{{asset('assets/images/portfolio/360.png')}}" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 mb-4 mb-md-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/residential/2.jpg')}}"><img
                                                            class="img-fluid w-100"
                                                            src="{{asset('assets/images/residential/2.jpg')}}" alt=""></a>
                                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}"
                                                         alt="">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 mb-4 mb-md-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/residential/3.jpg')}}"><img
                                                            class="img-fluid w-100"
                                                            src="{{asset('assets/images/residential/3.jpg')}}" alt=""></a>
                                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}"
                                                         alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-md-flex mb-3">
                                        <div class="pr-4 d-flex align-items-center tab-left">
                                            <p class="text-primary">Family Livingroom</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 col-md-4 mb-4 mb-md-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/residential/1.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/residential/1.jpg')}}" alt="">
                                                    </a>
                                                    <a href="" data-toggle="modal" data-target="#exampleModal"><img
                                                            class="threeD"
                                                            src="{{asset('assets/images/portfolio/360.png')}}" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 mb-4 mb-md-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/residential/2.jpg')}}"><img
                                                            class="img-fluid w-100"
                                                            src="{{asset('assets/images/residential/2.jpg')}}" alt=""></a>
                                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}"
                                                         alt="">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 mb-4 mb-md-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/residential/3.jpg')}}"><img
                                                            class="img-fluid w-100"
                                                            src="{{asset('assets/images/residential/3.jpg')}}" alt=""></a>
                                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}"
                                                         alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-md-flex mb-3">
                                        <div class="pr-4 d-flex align-items-center tab-left">
                                            <p class="text-primary">Main Bedroom</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 col-md-4 mb-4 mb-md-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/residential/1.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/residential/1.jpg')}}" alt="">
                                                    </a>
                                                    <a href="" data-toggle="modal" data-target="#exampleModal"><img
                                                            class="threeD"
                                                            src="{{asset('assets/images/portfolio/360.png')}}" alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 mb-4 mb-md-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/residential/2.jpg')}}"><img
                                                            class="img-fluid w-100"
                                                            src="{{asset('assets/images/residential/2.jpg')}}" alt=""></a>
                                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}"
                                                         alt="">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 mb-4 mb-md-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/residential/3.jpg')}}"><img
                                                            class="img-fluid w-100"
                                                            src="{{asset('assets/images/residential/3.jpg')}}" alt=""></a>
                                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}"
                                                         alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- ./tab-pan -->
                                <div class="tab-pane fade" id="pills-office" role="tabpanel"
                                     aria-labelledby="pills-office-tab">
                                    <div class="d-md-flex">
                                        <div class="pr-4 d-flex align-items-center tab-left">
                                            <p class="text-primary">Formal Livingroom</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 col-md-4 mb-4 mb-md-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup"
                                                       href="{{asset('assets/images/office/1.jpg')}}"><img
                                                            class="img-fluid w-100"
                                                            src="{{asset('assets/images/office/1.jpg')}}" alt=""></a>
{{--                                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}"--}}
{{--                                                         alt="">--}}
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-md-4 mb-4 mb-md-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup"
                                                       href="{{asset('assets/images/office/2.jpg')}}"><img
                                                            class="img-fluid w-100"
                                                            src="{{asset('assets/images/office/2.jpg')}}" alt=""></a>
{{--                                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}"--}}
{{--                                                         alt="">--}}
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-md-4 mb-4 mb-md-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup"
                                                       href="{{asset('assets/images/office/3.jpg')}}"><img
                                                            class="img-fluid w-100"
                                                            src="{{asset('assets/images/office/3.jpg')}}" alt=""></a>
{{--                                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}"--}}
{{--                                                         alt="">--}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- ./tab-pan -->
                                <div class="tab-pane fade" id="pills-hotel" role="tabpanel"
                                     aria-labelledby="pills-hotel-tab">
                                    <div class="d-md-flex">
                                        <div class="pr-4 d-flex align-items-center tab-left">
                                            <p class="text-primary">Formal Livingroom</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 col-md-4 mb-4 mb-md-0">
                                                <div class="view-card">
                                                    <iframe class="w-100 h-100" src="https://www.youtube.com/embed/cRpn8Wrf4Fs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
{{--                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"--}}
{{--                                                       class="view-popup" href="{{asset('assets/images/hotel/1.jpg')}}"><img--}}
{{--                                                            class="img-fluid w-100"--}}
{{--                                                            src="{{asset('assets/images/hotel/1.jpg')}}" alt=""></a>--}}
{{--                                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}"--}}
{{--                                                         alt="">--}}
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 mb-4 mb-md-0">
                                                <div class="view-card">
                                                    <iframe class="h-100 w-100" src="https://www.youtube.com/embed/t3fg7NSnVqg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
{{--                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"--}}
{{--                                                       class="view-popup" href="{{asset('assets/images/hotel/2.jpg')}}"><img--}}
{{--                                                            class="img-fluid w-100"--}}
{{--                                                            src="{{asset('assets/images/hotel/2.jpg')}}" alt=""></a>--}}
{{--                                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}"--}}
{{--                                                         alt="">--}}
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 mb-4 mb-md-0">
                                                <div class="view-card">
                                                    <iframe class="h-100 w-100" src="https://www.youtube.com/embed/b1c0YIb6obc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
{{--                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"--}}
{{--                                                       class="view-popup" href="{{asset('assets/images/hotel/3.jpg')}}"><img--}}
{{--                                                            class="img-fluid w-100"--}}
{{--                                                            src="{{asset('assets/images/hotel/3.jpg')}}" alt=""></a>--}}
{{--                                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}"--}}
{{--                                                         alt="">--}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- ./tab-pan -->
                            </div>
                        </div>
                    </div>
                </div> <!-- ./row -->
            </div> <!-- ./container -->
        </div> <!-- ./about-us -->
    </main> <!-- ./Main -->
    <div class="modal" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <iframe class="img-fluid w-100"
                            src="https://momento360.com/e/u/805ec727bacf478cb1a0c93aa34ebde5?utm_campaign=embed&utm_source=other&heading=1198.55&pitch=-9.76&field-of-view=75&size=medium"
                            alt="">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
@push('custom-scripts')

    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

    <script>
        // Navbar
        $(document).ready(function () {
            //Navbar fixed top
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


