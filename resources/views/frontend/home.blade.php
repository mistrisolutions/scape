@extends('layouts.frontend.app')
@push('css')
<!-- slick-slider-css -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<!-- Font-Awesome -->
<script src="https://kit.fontawesome.com/c1b498439e.js" crossorigin="anonymous"></script>

@endpush

@section('content')
<header id="header">
    <div class="header-nav">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand mr-5" href="#">
                    <img class="img-fluid" src="{{ asset('assets/images/logo_web.png') }}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacts</a>
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
    <div class="nav-slider">
        <div class="slider-wrap">
            <div>
                <img src="{{asset('assets/images/home/slider1.png')}}" alt="">
            </div>
            <div>
                <img src="{{asset('assets/images/home/slider1.png')}}" alt="">
            </div>
            <div>
                <img src="{{asset('assets/images/home/slider1.png')}}" alt="">
            </div>
        </div><!-- ./Slider-wrap -->
    </div><!-- ./Nav-slider -->

</header> <!-- ./Header -->
<main>
    <section class="middle-section">
        <div class="mdl-sec-bg">
            <div class="section-content">
                <div class="container">
                    <div class="row py-5">
                        <div class="col-sm-12 col-md-10 mx-auto pt-4">
                            <h1 class="mb-4">Best Architectural Engineering Consultant in the city lucilius noster postulant philosophia ea usu, qui</h1>
                            <p>Et has minim elitr intellegat. Mea aeterno eleifend antiopam ad, nam no suscipit quaerendum. At nam minimum ponderum. Est audiam animal molestiae te. Ex duo eripuit mentitum. Et has minim elitr intellegat. Mea aeterno eleifend antiopam ad, nam no suscipit quaerendum. At nam minimum ponderum. Est audiam animal molestiae te. Ex duo eripuit mentitum. Et has minim elitr intellegat.</p>
                            <p>we provide one stop architecture & realestate solution including:</p>

                            <ul class="navbar-nav">
                                <li class="nav-item" ><img src="{{asset('assets/images/home/list-arrow.svg')}}" alt="">Interior design & development.</li>
                                <li class="nav-item" ><img src="{{asset('assets/images/home/list-arrow.svg')}}" alt="">Architectural & engineering consultant.</li>
                                <li class="nav-item" ><img src="{{asset('assets/images/home/list-arrow.svg')}}" alt="">Pre-engineered steel building.</li>
                                <li class="nav-item" ><img src="{{asset('assets/images/home/list-arrow.svg')}}" alt="">Civil & building construction.</li>
                                <li class="nav-item" ><img src="{{asset('assets/images/home/list-arrow.svg')}}" alt="">Real estate.</li>
                            </ul>

                            <div class="row pt-5">
                                <div class="col-12">
                                    <div class="quote">
                                        <h1>Details are not the details, They make the design.</h1>
                                        <p>Charles Eames.</p>
                                    </div>
                                </div>
                            </div><!-- ./Row -->
             
                        </div><!-- ./Col -->
                    </div><!-- ./Row -->
                </div><!-- ./Container -->
            </div><!-- ./Section-content -->
        </div><!-- ./Mdl-sec-bg -->
    </section> <!-- ./Middle-section -->
    <section class="project">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-10 mx-auto">
                    <h1>Feature projects</h1>
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <div class="card border-0">
                                <div class="card-header">
                                    <img class="card-img-top" src="{{asset('assets/images/home/project1.png')}}" alt="Card image">
                                </div>
                                <div class="card-body text-center">
                                    <p class="card-text font-weight-bold text-dark">Project 1</p>
                                    <span class="card-text">Location</span>
                                </div>
                            </div> <!-- ./Card -->
                        </div> <!-- ./col -->
                        <div class="col-sm-6 col-md-4">
                            <div class="card border-0">
                                <div class="card-header">
                                    <img class="card-img-top" src="{{asset('assets/images/home/project2.png')}}" alt="Card image">
                                </div>
                                <div class="card-body text-center">
                                    <p class="card-text font-weight-bold text-dark">Project Laximi Vander</p>
                                    <span class="card-text">Pabna</span>
                                </div>
                            </div> <!-- ./Card -->
                        </div> <!-- ./col -->
                        <div class="col-sm-6 col-md-4">
                            <div class="card border-0">
                                <div class="card-header">
                                    <img class="card-img-top" src="{{asset('assets/images/home/project3.png')}}" alt="Card image">
                                </div>
                                <div class="card-body text-center">
                                    <p class="card-text font-weight-bold text-dark">Project 3</p>
                                    <span class="card-text">Gulsan</span>
                                </div>
                            </div> <!-- ./Card -->
                        </div> <!-- ./col -->                       
                    </div><!-- ./Row --> 
                    <div class="more mt-5">
                        <button class="btn mx-auto d-block px-3 py-3 rounded-0">
                            View more projects <i class="fas fa-arrow-right ml-3"></i>
                        </button>
                    </div>
                </div><!-- ./col --> 
            </div><!-- ./Row --> 
        </div><!-- ./Container --> 
    </section><!-- ./Project -->
    <section class="happy-client">
        <div class="happy-bg">
            <div class="overlay d-flex align-items-center">
                <div class="container py-5">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="client-content text-center">
                                <h1>Our happy clients</h1>
                                <div class="review">
                                    <div class="single-review">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae pretium sed aliquet nisi. Ut id faucibus est eget. Odio faucibus leo congue viverra nec lacus, sed sem. Habitasse vel habitant aenean vitae natoque.</p>
                                        <h3>MD Sofique</h3>
                                        <span>CEO, XYZ Corporation</span>
                                    </div>
                                    <div class="single-review">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae pretium sed aliquet nisi. Ut id faucibus est eget. Odio faucibus leo congue viverra nec lacus, sed sem. Habitasse vel habitant aenean vitae natoque.</p>
                                        <h3>MD Rafiq</h3>
                                        <span>CEO, XYZ Corporation</span>
                                    </div>
                                    <div class="single-review">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae pretium sed aliquet nisi. Ut id faucibus est eget. Odio faucibus leo congue viverra nec lacus, sed sem. Habitasse vel habitant aenean vitae natoque.</p>
                                        <h3>MD Rafiq</h3>
                                        <span>CEO, XYZ Corporation</span>
                                    </div>
                                </div> <!-- ./Review -->
                            </div> <!-- ./Client-content -->
                        </div> <!-- ./Col -->
                    </div> <!-- ./Row -->
                </div> <!-- ./Container -->
            </div> <!-- ./overlay -->
        </div> <!-- ./Happy-bg -->
    </section> <!-- Happy-client -->
    <section class="our-clients py-md-5 py-0">
        <div class="container">
            <div class="row py-5 justify-content-center text-center">
                <div class="col-md-12">
                    <h1>Our Clients</h1>
                    <div class="clients">
                        <div class="clients-logo">
                            <img class="img-fluid" src="{{asset('assets/images/home/1.png')}}" alt="Brand Logo">
                        </div>
                        <div class="clients-logo">
                            <img class="img-fluid" src="{{asset('assets/images/home/2.png')}}" alt="Brand Logo">
                        </div>
                        <div class="clients-logo">
                            <img class="img-fluid" src="{{asset('assets/images/home/3.png')}}" alt="Brand Logo">
                        </div>
                        <div class="clients-logo">
                            <img class="img-fluid" src="{{asset('assets/images/home/4.png')}}" alt="Brand Logo">
                        </div>
                        <div class="clients-logo">
                            <img class="img-fluid" src="{{asset('assets/images/home/2.png')}}" alt="Brand Logo">
                        </div>
                    </div> <!-- ./Clients -->
                </div> <!-- ./Col -->
            </div> <!-- ./Row -->
        </div> <!-- ./Container -->
    </section> <!-- ./Our-clients -->
</main> <!-- ./Main -->
<footer>
    <div class="footer-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="company">
                        <img class="img-fluid mb-3" src="{{asset('assets/images/logo_web.png')}}" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem velit id scelerisque purus at vulputate sed etiam. Rhoncus mauris iaculis sed felis. Quis cras sed orci dui sed. Elementum.</p>
                    </div>
                </div> <!-- ./col -->
                <div class="col-md-3">
                    <div class="services">
                        <h4>Services</h4>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="#">
                                    <img class="mr-2"src="{{asset('assets/images/home/footer-arrow.svg')}}" alt="">Interior design & development.
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#">
                                    <img class="mr-2"src="{{asset('assets/images/home/footer-arrow.svg')}}" alt="">Architectural & engineering consultant.
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#">
                                    <img class="mr-2" src="{{asset('assets/images/home/footer-arrow.svg')}}" alt="">Pre-engineered steel building.
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#">
                                    <img class="mr-2"src="{{asset('assets/images/home/footer-arrow.svg')}}" alt="">Civil & building construction.
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#">
                                    <img class="mr-2" src="{{asset('assets/images/home/footer-arrow.svg')}}" alt="">Real estate
                                </a>
                            </li>
                        </ul>
                    </div>
                </div> <!-- ./col -->
                <div class="col-md-3">
                    <div class="contact">
                        <h4>Contact us</h4>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <img class="mr-2"src="{{asset('assets/images/home/phone.svg')}}" alt="">+88 01616182874
                            </li>
                            <li class="nav-item">
                                <img class="mr-2"src="{{asset('assets/images/home/phone.svg')}}" alt="">+88 01616182874
                            </li>
                            <li class="nav-item">
                                <img class="mr-2"src="{{asset('assets/images/home/mail.svg')}}" alt="">info.scapebd@gmail.com
                            </li>
                            <li class="nav-item d-flex align-items-start">
                                <img class="mr-2"src="{{asset('assets/images/home/location.png')}}" alt="">
                                <span>44/F/7 (2nd floor), Rangan Tower,West Panthapath,Dhaka-1215, Bangladesh.</span>
                            </li>
                        </ul>
                    </div>
                </div> <!-- ./col -->
                <div class="col-md-2">
                    <div class="social">
                        <h4>Connect with us</h4>
                        <ul class="navbar-nav d-flex navbar-expand">
                            <li class="nav-item mr-3"><img src="{{asset('assets/images/home/facebook.svg')}}" alt=""></li>
                            <li class="nav-item mr-3"><img src="{{asset('assets/images/home/instagram.svg')}}" alt=""></li>
                            <li class="nav-item mr-3"><img src="{{asset('assets/images/home/linkedin.svg')}}" alt=""></li>
                        </ul>
                    </div>
                </div> <!-- ./col -->
            </div> <!-- ./row -->
        </div> <!-- ./container -->
    </div> <!-- ./footer-bg -->
</footer> <!-- ./Footer -->

@push('custom-scripts')
<!-- slick-slider js-->
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    // Navbar
    $(document).ready(function() {
        $(window).scroll(function () { 

            if ($(window).scrollTop() > 550) {
                $('.header-nav').addClass('navbar-fixed-top');
                $('.teeth').addClass('teeth-fixed-top');
            }

            if ($(window).scrollTop() < 551) {
                $('.header-nav').removeClass('navbar-fixed-top');
                $('.teeth').removeClass('teeth-fixed-top');
            }
        });
    });

    // slider
    $('.slider-wrap').slick({
        dots: true,
        arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true,
        focusOnSelect: false,
        pauseOnHover: false,
        pauseOnFocus: false,
    });
    
    $('.review').slick({
        dots: false,
        arrows: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true,
        focusOnSelect: false,
        pauseOnHover: false,
        pauseOnFocus: false,
    });

    $('.clients').slick({
        dots: true,
        arrows: false,
        slidesToShow: 4,
        slidesToScroll: 2,
        autoplay: false,
        autoplaySpeed: 2000,
        focusOnSelect: false,
        pauseOnHover: false,
        pauseOnFocus: false,
    });

</script>
@endpush


@endsection