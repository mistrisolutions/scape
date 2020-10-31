@extends('layouts.frontend.app')
@push('css')
<!-- slick-slider-css -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

@endpush

@section('content')
<header id="header">
    <div class="header-nav">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="#">
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
        <div class="teeth">
            <img src="{{asset('assets/images/home/Teeth.png')}}" alt="">
        </div>
    </div><!-- ./Nav-slider -->

</header> <!-- ./Header -->
<main>
    <section class="middle-section">
        <div class="mdl-sec-bg">
            <div class="section-content">
                <div class="container">
                    <div class="row py-5">
                        <div class="col-11 mx-auto pt-4">
                            <h1 class="mb-4">Best Architectural Engineering Consultant in the city lucilius noster postulant philosophia ea usu, qui</h1>
                            <p>Et has minim elitr intellegat. Mea aeterno eleifend antiopam ad, nam no suscipit quaerendum. At nam minimum ponderum. Est audiam animal molestiae te. Ex duo eripuit mentitum. Et has minim elitr intellegat. Mea aeterno eleifend antiopam ad, nam no suscipit quaerendum. At nam minimum ponderum. Est audiam animal molestiae te. Ex duo eripuit mentitum. Et has minim elitr intellegat.</p>
                            <p>we provide one stop architecture & realestate solution including:</p>

                            <ul class="navbar-nav">
                                <li class="nav-item" ><img src="{{asset('assets/images/home/Vector.svg')}}" alt="">Interior design & development.</li>
                                <li class="nav-item" ><img src="{{asset('assets/images/home/Vector.svg')}}" alt="">Architectural & engineering consultant.</li>
                                <li class="nav-item" ><img src="{{asset('assets/images/home/Vector.svg')}}" alt="">Pre-engineered steel building.</li>
                                <li class="nav-item" ><img src="{{asset('assets/images/home/Vector.svg')}}" alt="">Civil & building construction.</li>
                                <li class="nav-item" ><img src="{{asset('assets/images/home/Vector.svg')}}" alt="">Real estate.</li>
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
                <div class="col-11 mx-auto"></div>
            </div>
        </div>
    </section><!-- ./Project -->
</main> <!-- ./Main -->
<footer>

</footer> <!-- ./Footer -->

@push('custom-scripts')
<!-- slick-slider js-->
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    $('.slider-wrap').slick({
    dots: true,
    arrows: false,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true
    });
</script>
@endpush


@endsection