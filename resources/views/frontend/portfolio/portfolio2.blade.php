@extends('layouts.frontend.app')
@section('title', 'Faculty And Dean Office')
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
                            <img class="img-fluid" src="{{ asset('assets/images/faculty_dean/cover.jpg') }}"
                                 alt="">
                            <div class="overlay"></div>
                            <div class="absolute d-flex justify-content-start align-items-end">
                                <h1 class="text-white px-4 fs-96">Faculty And Dean Office</h1>
                            </div>
                        </div>
                    </div> <!-- ./col -->
                </div> <!-- ./row -->
                <div class="row pt-5">
                    <div class="col-md-11 mx-auto">
                        <div class="row">
                            <div class="col-md-7">
                                <h2 class="mb-2">Project Description: </h2>
                                <p>This is the “<strong class="black">Faculty & Dean Office</strong>” of the <strong class="black">University of Scholars</strong>. Faculty rooms make teachers more relaxed, more efficient and more effective for them to deliver the right kind of lessons. So, instead of a witch hunt against whoever is converting whatever spaces into faculty rooms, we give respect and respite for teachers by providing the space for them.</p>
                                <p>This contemporary interior is designed while keeping in mind lighting & colors. The lighting used in this floor can change the perception of space, the shape, textures of materials and improve their aesthetic features. It also plays an important role in ensuring the comfortability of occupants. About the color, a fusion of white & purple is used in this design. As purple inspires creativity & design and white represents simplicity & enlightenment. Our hard-working & creative team has created this space in order to boost efficiency & motivation in the people working under this roof.</p>
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
                                        <p>3500 sft. (Admission Office)</p>
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
                            <img class="w-100 h-auto" src="{{asset('assets/images/portfolio/portfolio-2.png')  }}"
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
                        <div class="col-sm-6 col-md-6 col-lg-7 px-md-2">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup w-100 h-100"
                                   data-fancybox="gallery" href="{{asset('assets/images/portfolio/F_13 - Photo.png')}}">
                                    <img class="gallery-img-big img-fluid"
                                         src="{{asset('assets/images/portfolio/F_12 - Photo.png')}}" alt="Card image">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-5 mt-3 mt-md-0 px-md-2">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/portfolio/F_11 - Photo.png')}}">
                                    <img class="gallery-img-big img-fluid"
                                         src="{{asset('assets/images/portfolio/F_11 - Photo.png')}}" alt="Card image">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 mt-3 px-md-2">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/portfolio/F_14 - Photo.png')}}">
                                    <img class="gallery-img img-fluid"
                                         src="{{asset('assets/images/portfolio/F_14 - Photo.png')}}" alt="Card image">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 mt-3 px-md-2">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/portfolio/F_15 - Photo.png')}}">
                                    <img class="gallery-img img-fluid"
                                         src="{{asset('assets/images/portfolio/F_15 - Photo.png')}}" alt="Card image">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 mt-3 px-md-2">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/portfolio/F_14 - Photo.png')}}">
                                    <img class="gallery-img img-fluid"
                                         src="{{asset('assets/images/portfolio/F_14 - Photo.png')}}" alt="Card image">
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
                        <div class="col-sm-6 col-md-6 col-lg-7 px-md-2">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/faculty_dean/1.jpg')}}">
                                    <img class="gallery-img-big img-fluid"
                                         src="{{asset('assets/images/faculty_dean/1.jpg')}}" alt="Card image">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-5 mt-3 mt-md-0 px-md-2">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/faculty_dean/2.jpg')}}">
                                    <img class="gallery-img-big img-fluid"
                                         src="{{asset('assets/images/faculty_dean/2.jpg')}}" alt="Card image">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 mt-3 px-md-2">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/faculty_dean/3.jpg')}}">
                                    <img class="gallery-img img-fluid"
                                         src="{{asset('assets/images/faculty_dean/3.jpg')}}" alt="Card image">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 mt-3 px-md-2">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/faculty_dean/4.jpg')}}">
                                    <img class="gallery-img img-fluid"
                                         src="{{asset('assets/images/faculty_dean/4.jpg')}}" alt="Card image">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 mt-3 px-md-2">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/faculty_dean/5.jpg')}}">
                                    <img class="gallery-img img-fluid"
                                         src="{{asset('assets/images/faculty_dean/5.jpg')}}" alt="Card image">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 mt-3 px-md-2">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/faculty_dean/6.jpg')}}">
                                    <img class="gallery-img img-fluid"
                                         src="{{asset('assets/images/faculty_dean/6.jpg')}}" alt="Card image">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 mt-3 px-md-2">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/faculty_dean/7.jpg')}}">
                                    <img class="gallery-img img-fluid"
                                         src="{{asset('assets/images/faculty_dean/7.jpg')}}" alt="Card image">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 mt-3 px-md-2">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/faculty_dean/8.jpg')}}">
                                    <img class="gallery-img img-fluid"
                                         src="{{asset('assets/images/faculty_dean/8.jpg')}}" alt="Card image">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 mt-3 px-md-2">
                            <div class="border-0">
                                <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                   data-fancybox="gallery" href="{{asset('assets/images/faculty_dean/9.jpg')}}">
                                    <img class="gallery-img img-fluid"
                                         src="{{asset('assets/images/faculty_dean/9.jpg')}}" alt="Card image">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- ./row -->
            <div class="text-center">
                <a href="{{ route('gallery') }}" class="btn btn-primary px-4 font-weight-bold">See all</a>
            </div>
        </div> <!-- ./container -->

        <div class="container portfolio-gallery mt-md-5 pt-5">
            <div class="row mb-5">
                <div class="col-md-11 mx-auto">
                    <h2 class="text-center mb-5">3D Video</h2>
                    <iframe class="w-100 video" src="https://www.youtube.com/embed/5hemeiTVIG0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
