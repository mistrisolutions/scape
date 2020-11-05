<header id="header">
    <div class="header-nav">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand mr-5" href="#">
                    <img class="img-fluid" src="{{ asset('assets/images/logo-w.png') }}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('service') }}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('team') }}">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=" {{ route('contact') }}">Contacts</a>
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