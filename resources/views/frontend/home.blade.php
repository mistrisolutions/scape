@extends('layouts.frontend.app')
@section('title', 'Scape')
@endsection
@push('css')
<!-- slick-slider-css -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<!-- Font-Awesome -->
<script src="https://kit.fontawesome.com/c1b498439e.js" crossorigin="anonymous"></script>

@endpush

@section('content')
<main>
    <section class="middle-section">
        <div class="mdl-sec-bg">
            <div class="section-content">
                <div class="container">
                    <div class="row py-5">
                        <div class="col-sm-12 col-md-10 mx-auto pt-4">
                            <h1 class="mb-4">Best Architectural Engineering Consultant in the city lucilius noster postulant philosophia ea usu, qui</h1>
                            <p>SCAPE Development Engineers is a Consultancy firm located in Dhaka which provides Interior Design, Exterior Design & Total Constructions solution for Govt. & Private sectors in Bangladesh.</p>
                            <p>Scape is a team of mordern interior design company. We believe any types of interior is possible like global taste of design.</p>

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
@endsection
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
        autoplay: true,
        autoplaySpeed: 6000,
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
        autoplay: false,
        autoplaySpeed: 6000,
        slidesToShow: 1,
        focusOnSelect: false,
        pauseOnHover: false,
        pauseOnFocus: false,
    });

    $('.clients').slick({
        dots: true,
        arrows: false,
        slidesToShow: 4,
        slidesToScroll: 2,
        autoplay: true,
        autoplaySpeed: 2000,
        focusOnSelect: false,
        pauseOnHover: false,
        pauseOnFocus: false,
    });

</script>
@endpush
