@extends('layouts.frontend.app')
@push('css')
<!-- slick-slider-css -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<!-- Font-Awesome -->
<script src="https://kit.fontawesome.com/c1b498439e.js" crossorigin="anonymous"></script>
<style>
   #header{
      height: 100%;
   }
</style>
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

      <div class="teeth">
         <img src="{{asset('assets/images/home/Teeth.png')}}" alt="">
      </div>
   </header> <!-- ./Header -->
   <main>
      <div class="team">
         <div class="container">
            <div class="row my-5">
               <div class="col-md-10 mx-auto">
                  <div class="team-header">
                     <div class="row d-flex align-items-center mb-5">
                        <div class="col-md-7 mb-5 mb-md-0">
                           <h1 class="mb-5">Message from CEO</h1>
                           <p class="mb-5">Et has minim elitr intellegat. Mea aeterno eleifend antiopam ad, nam no suscipit quaerendum. At nam minimum ponderum. Est audiam animal molestiae te. Ex duo eripuit mentitum.Et has minim elitr intellegat. Mea aeterno eleifend antiopam ad, nam no suscipit molestiae te. Ex duo eripuit mentitum.Et has minim elitr intellegat. Mea aeterno eleifend antiopam ad, nam no suscipit.</p>
                           <p>Et has minim elitr intellegat. Mea aeterno eleifend antiopam ad, nam no suscipit quaerendum. At nam minimum ponderum. Est audiam </p>
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
            <div class="row my-5">
               <div class="col-md-10 mx-auto">
                  <h1 class="mb-5">Team of dream makers</h1>
                  <div class="row">
                     <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card border-0">
                           <div class="card-header  p-0 border-0">
                              <img class="card-img-top img-fluid" src="{{asset('assets/images/team/shovon_shaha.png')}}" alt="Card image">
                           </div>
                           <div class="card-body text-center">
                              <p class="card-text font-weight-bold text-dark">Kawsar Ahmed</p>
                              <p class="font-weight-light">HR Manager</p>
                           </div>
                        </div> <!-- ./Card -->
                     </div> <!-- ./col -->
                     <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card border-0">
                           <div class="card-header  p-0 border-0">
                              <img class="card-img-top img-fluid" src="{{asset('assets/images/team/shovon_shaha.png')}}" alt="Card image">
                           </div>
                           <div class="card-body text-center">
                              <p class="card-text font-weight-bold text-dark">Shovon Saha</p>
                              <p class="font-weight-light">CEO, SCAPE Development Engineers</p>
                           </div>
                        </div> <!-- ./Card -->
                     </div> <!-- ./col -->
                     <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card border-0">
                           <div class="card-header  p-0 border-0">
                              <img class="card-img-top img-fluid" src="{{asset('assets/images/team/shovon_shaha.png')}}" alt="Card image">
                           </div>
                           <div class="card-body text-center">
                              <p class="card-text font-weight-bold text-dark">Shimul Afefin</p>
                              <p class="font-weight-light">Senior Architect</p>
                           </div>
                        </div> <!-- ./Card -->
                     </div> <!-- ./col -->
                     <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card border-0">
                           <div class="card-header  p-0 border-0">
                              <img class="card-img-top img-fluid" src="{{asset('assets/images/team/shovon_shaha.png')}}" alt="Card image">
                           </div>
                           <div class="card-body text-center">
                              <p class="card-text font-weight-bold text-dark">Kawsar Ahmed</p>
                              <p class="font-weight-light">HR Manager</p>
                           </div>
                        </div> <!-- ./Card -->
                     </div> <!-- ./col -->
                     <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card border-0">
                           <div class="card-header  p-0 border-0">
                              <img class="card-img-top img-fluid" src="{{asset('assets/images/team/shovon_shaha.png')}}" alt="Card image">
                           </div>
                           <div class="card-body text-center">
                              <p class="card-text font-weight-bold text-dark">Shovon Saha</p>
                              <p class="font-weight-light">CEO, SCAPE Development Engineers</p>
                           </div>
                        </div> <!-- ./Card -->
                     </div> <!-- ./col -->
                     <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card border-0">
                           <div class="card-header  p-0 border-0">
                              <img class="card-img-top img-fluid" src="{{asset('assets/images/team/shovon_shaha.png')}}" alt="Card image">
                           </div>
                           <div class="card-body text-center">
                              <p class="card-text font-weight-bold text-dark">Shimul Afefin</p>
                              <p class="font-weight-light">Senior Architect</p>
                           </div>
                        </div> <!-- ./Card -->
                     </div> <!-- ./col -->
                     <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card border-0">
                           <div class="card-header  p-0 border-0">
                              <img class="card-img-top img-fluid" src="{{asset('assets/images/team/shovon_shaha.png')}}" alt="Card image">
                           </div>
                           <div class="card-body text-center">
                              <p class="card-text font-weight-bold text-dark">Kawsar Ahmed</p>
                              <p class="font-weight-light">HR Manager</p>
                           </div>
                        </div> <!-- ./Card -->
                     </div> <!-- ./col -->
                     <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card border-0">
                           <div class="card-header  p-0 border-0">
                              <img class="card-img-top img-fluid" src="{{asset('assets/images/team/shovon_shaha.png')}}" alt="Card image">
                           </div>
                           <div class="card-body text-center">
                              <p class="card-text font-weight-bold text-dark">Shovon Saha</p>
                              <p class="font-weight-light">CEO, SCAPE Development Engineers</p>
                           </div>
                        </div> <!-- ./Card -->
                     </div> <!-- ./col -->
                     <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card border-0">
                           <div class="card-header  p-0 border-0">
                              <img class="card-img-top img-fluid" src="{{asset('assets/images/team/shovon_shaha.png')}}" alt="Card image">
                           </div>
                           <div class="card-body text-center">
                              <p class="card-text font-weight-bold text-dark">Shimul Afefin</p>
                              <p class="font-weight-light">Senior Architect</p>
                           </div>
                        </div> <!-- ./Card -->
                     </div> <!-- ./col -->
                     <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card border-0">
                           <div class="card-header  p-0 border-0">
                              <img class="card-img-top img-fluid" src="{{asset('assets/images/team/shovon_shaha.png')}}" alt="Card image">
                           </div>
                           <div class="card-body text-center">
                              <p class="card-text font-weight-bold text-dark">Kawsar Ahmed</p>
                              <p class="font-weight-light">HR Manager</p>
                           </div>
                        </div> <!-- ./Card -->
                     </div> <!-- ./col -->
                     <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card border-0">
                           <div class="card-header  p-0 border-0">
                              <img class="card-img-top img-fluid" src="{{asset('assets/images/team/shovon_shaha.png')}}" alt="Card image">
                           </div>
                           <div class="card-body text-center">
                              <p class="card-text font-weight-bold text-dark">Shovon Saha</p>
                              <p class="font-weight-light">CEO, SCAPE Development Engineers</p>
                           </div>
                        </div> <!-- ./Card -->
                     </div> <!-- ./col -->
                     <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card border-0">
                           <div class="card-header  p-0 border-0">
                              <img class="card-img-top img-fluid" src="{{asset('assets/images/team/shovon_shaha.png')}}" alt="Card image">
                           </div>
                           <div class="card-body text-center">
                              <p class="card-text font-weight-bold text-dark">Shimul Afefin</p>
                              <p class="font-weight-light">Senior Architect</p>
                           </div>
                        </div> <!-- ./Card -->
                     </div> <!-- ./col -->
                  </div>
               </div>
            </div> <!-- ./row -->
         </div> <!-- ./container -->
      </div> <!-- ./about-us -->
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

@endpush


@endsection