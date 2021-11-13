@extends('layouts.frontend.app')
@section('title', 'about')
@push('css')
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
@section('slider')
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="who-nav-slider">
                    <div class="who-slider-wrap">
                        <div>
                            <img src="{{asset('assets/images/about/header.png')}}" alt="">
                        </div>
                        <div>
                            <img src="{{asset('assets/images/home/slider1.png')}}" alt="">
                        </div>
                        <div>
                            <img src="{{asset('assets/images/about/header.png')}}" alt="">
                        </div>
                    </div><!-- ./Slider-wrap -->
                </div><!-- ./Nav-slider -->
            </div>
        </div>
    </div>
@endsection
@section('content')
    <main>
        <div class="who-we-are">
            <div class="container">
                <div class="row pt-5">
                    <div class="col-md-10 mx-auto">
                        <div class="we-are">
                            <h1>Who we are?</h1>
                            <p>Scape Development Engineers was founded back in 2018 with a commitment to making cities
                                better places to live. We believe that architecture and design matter, and that through
                                our work, we can make a positive difference in the world. We strive to create buildings
                                that are not just things in themselves but serve as catalysts for positive urban and
                                social change.</p>
                            <p class="font-italic">We look for solutions that can have an impact beyond the project, that can move the
                                needle in some way and, contribute to society and culture.</p>
                            <p>Our design process is open, interactive, and collaborative. We believe that great design
                                need not be created through arrogance and ego, but in a way that can sustain us all and
                                allow each of us to grow and learn.</p>
                            <p>Being the tested best Interior Design, Exterior Design & Architectural Consultancy firm
                                in Bangladesh, Scape Development Enginners portfolio of consists of Top Designers.
                                Multifaceted program to regionally display the great work of country’s top Architects,
                                Interior Designers and Landscape Designers. Our works are our footprints of our
                                quality</p>
                        </div> <!-- ./we-are -->
                    </div> <!-- ./col -->
                </div> <!-- ./row -->
                <div class="row pt-5">
                    <div class="col-md-10 mx-auto">
                        <div class="mission">
                            <h1>Our mission?</h1>
                            <p>It’s our mission at Architectural Design Associates to provide client-focused service
                                through our responsible practice of Architecture. Our tradition of dedication,
                                professionalism, and outstanding customer service is a testament to that mission as we
                                strive each day for excellence in bringing our valued clients’ ideas to life.</p>
                        </div> <!-- ./mission -->
                    </div> <!-- ./col -->
                </div> <!-- ./row -->
                <div class="row py-5">
                    <div class="col-md-10 mx-auto">
                        <div class="vission pb-2">
                            <h1>Our vision?</h1>
                            <p>We earn our clients' confidence through innovative design and sound business decisions that are grounded in collaboration and experience.

                                We bring dynamic design teams together to develop exceptional projects for our clients.

                                Our attention to detail is foundational to the successful completion of our projects.

                                Our unparalleled respectful, knowledgeable and honest service is the prime reason our clients choose to continually do business with us.</p>
                        </div> <!-- ./vission -->
                    </div> <!-- ./col -->
                </div> <!-- ./row -->
            </div> <!-- ./container -->
        </div> <!-- ./about-us -->
        <div class="container">
            <div class="row my-5">
                <div class="col-md-10 mx-auto">
                    <div class="team-header">
                        <div class="row d-flex align-items-center mb-5">
                            <div class="col-md-7 mb-5 mb-md-0">
                                <h1 class="mb-5">Message from CEO</h1>
                                <p class="mb-5">Our company began in 2020 and has continually grown thanks to the outstanding support of our many clients. SDE never stops doing what you need to give you the satisfaction you expect. That's how we became the best.Today as we tread the path of success, we look forward to sharing our story with you.</p>
                                <p>We sincerely hope you will continue to seek inspiration from our history and look forward to a lasting relationship with you.</p>
                                <button class="btn btn-primary rounded-0 px-3 py-2 mr-3">Our Previous Work</button>
                                <button class="btn btn-outline-primary rounded-0 px-3 py-2">Let's Work</button>
                            </div>
                            <div class="col-md-5 mb-5 mb-md-0">
                                <img class="img-fluid w-100" src="{{asset('assets/images/team/ceo.png')}}" alt="">
                            </div>
                        </div> <!-- ./row -->
                    </div>
                </div>
            </div> <!-- ./row -->
            <div class="row my-5 team">
                <div class="col-md-10 mx-auto">
                    <h1 class="mb-5">Team of dream makers</h1>
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="card border-0">
                                <div class="card-header  p-0 border-0">
                                    <img class="card-img-top img-fluid" src="{{asset('assets/images/team/Shawon.jpeg')}}" alt="Saidul Islam Shawon">
                                </div>
                                <div class="card-body text-center">
                                    <p class="card-text font-weight-bold text-dark">Saidul Islam Shawon</p>
                                    <p class="font-weight-light">Project Engineer</p>
                                </div>
                            </div> <!-- ./Card -->
                        </div> <!-- ./col -->
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="card border-0">
                                <div class="card-header  p-0 border-0">
                                    <img class="card-img-top img-fluid" src="{{asset('assets/images/team/Feroz.png')}}" alt="Card image">
                                </div>
                                <div class="card-body text-center">
                                    <p class="card-text font-weight-bold text-dark">Md. Feroz Al Mamun</p>
                                    <p class="font-weight-light">Project Engineer</p>
                                </div>
                            </div> <!-- ./Card -->
                        </div> <!-- ./col -->
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="card border-0">
                                <div class="card-header  p-0 border-0">
                                    <img class="card-img-top img-fluid" src="{{asset('assets/images/team/Kamrul-Hasan.jpeg')}}" alt="Kamrul Hasan">
                                </div>
                                <div class="card-body text-center">
                                    <p class="card-text font-weight-bold text-dark">Kamrul Hasan</p>
                                    <p class="font-weight-light">HR & Accounts Manager</p>
                                </div>
                            </div> <!-- ./Card -->
                        </div> <!-- ./col -->
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="card border-0">
                                <div class="card-header  p-0 border-0">
                                    <img class="card-img-top img-fluid" src="{{asset('assets/images/team/demo.png')}}" alt="Prottaset Ahmed Joy">
                                </div>
                                <div class="card-body text-center">
                                    <p class="card-text font-weight-bold text-dark">Prottaset Ahmed Joy</p>
                                    <p class="font-weight-light">Project Coordinator</p>
                                </div>
                            </div> <!-- ./Card -->
                        </div> <!-- ./col -->

                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="card border-0">
                                <div class="card-header  p-0 border-0">
                                    <img class="card-img-top img-fluid" src="{{asset('assets/images/team/Mashfique.jpg')}}" alt="Card image">
                                </div>
                                <div class="card-body text-center">
                                    <p class="card-text font-weight-bold text-dark">Mashfique Alam</p>
                                    <p class="font-weight-light">Graphic Designer</p>
                                </div>
                            </div> <!-- ./Card -->
                        </div> <!-- ./col -->
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="card border-0">
                                <div class="card-header  p-0 border-0">
                                    <img class="card-img-top img-fluid" src="{{asset('assets/images/team/Akash.jpeg')}}" alt="Card image">
                                </div>
                                <div class="card-body text-center">
                                    <p class="card-text font-weight-bold text-dark">Akash Roy</p>
                                    <p class="font-weight-light">3D Designer</p>
                                </div>
                            </div> <!-- ./Card -->
                        </div> <!-- ./col -->
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="card border-0">
                                <div class="card-header  p-0 border-0">
                                    <img class="card-img-top img-fluid" src="{{asset('assets/images/team/Shashi.JPG')}}" alt="Card image">
                                </div>
                                <div class="card-body text-center">
                                    <p class="card-text font-weight-bold text-dark">Farjana Islam Shashi</p>
                                    <p class="font-weight-light">Content Writer</p>
                                </div>
                            </div> <!-- ./Card -->
                        </div> <!-- ./col -->

                    </div>
                </div>
            </div> <!-- ./row -->
        </div> <!-- ./container -->
    </main> <!-- ./Main -->
@endsection
@push('custom-scripts')
    <!-- slick-slider js-->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
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
        });
        // slider
        $('.who-slider-wrap').slick({
            dots: true,
            arrows: false,
            slidesToShow: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            focusOnSelect: false,
            pauseOnHover: false,
            pauseOnFocus: false,
        });


    </script>
@endpush
