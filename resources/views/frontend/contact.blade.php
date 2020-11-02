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
      <div class="portfolio">
         <div class="container">
            <div class="row my-5">
               <div class="col-md-10 mx-auto">
                  <div class="contact-wrap">
                     <h1 class="mb-5">Contact us</h1>
                     <div class="row">
                        <div class="col-sm-12 col-md-6 mb-5 mb-md-2">
                           <h4>Contact Number</h4>
                           <ul class="navbar-nav navbar-expand-sm mt-3 mb-sm-5">
                              <li class="nav-item mr-5">
                                 <img class="img-fluid mr-2" src="{{asset('assets/images/contact/phone.png')}}" alt="">
                                 <span>+88 01616182874</span>
                              </li>
                              <li class="nav-item">
                                 <img class="img-fluid mr-2" src="{{asset('assets/images/contact/phone.png')}}" alt="">
                                 <span>+88 0123456789</span>
                              </li>
                           </ul>
                        </div>
                        <div class="col-sm-12 col-md-6 mb-5 mb-md-2">
                           <h4>Email Address</h4>
                           <ul class="navbar-nav navbar-expand-lg mt-3 justify-content-between">
                              <li class="nav-item mr-3 d-flex align-items-center">
                                 <img class="img-fluid mr-2" src="{{asset('assets/images/contact/email.png')}}" alt="">
                                 <span>info.scapebd@gmail.com</span>
                              </li>
                              <li class="nav-item d-flex align-items-center">
                                 <img class="img-fluid mr-2" src="{{asset('assets/images/contact/email.png')}}" alt="">
                                 <span>info.scapebd@gmail.com</span>
                              </li>
                           </ul>
                        </div>
                        <div class="col-md-12  mb-5 mb-md-2">
                           <h4>Address</h4>
                           <ul class="navbar-nav navbar-expand-lg mt-3 justify-content-between">
                              <li class="nav-item mr-3 d-flex align-items-center">
                                 <img class="img-fluid mr-2" src="{{asset('assets/images/contact/location.png')}}" alt="">
                                 <span>44/F/7 (2nd floor), Rangan Tower, West Panthapath,
                                 Dhaka-1215, Bangladesh.</span>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div> <!-- ./row -->
            <div class="row mb-5">
               <div class="col-md-10 mx-auto">
                  <div class="row">
                     <div class="col-md-6 mb-5">
                        <div class="map">
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.844422969521!2d90.38167421429699!3d23.752926694598216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b96dc43deffb%3A0x4045bef8b05f468b!2sScape%20Development%20Engineers!5e0!3m2!1sen!2sbd!4v1604337396210!5m2!1sen!2sbd" width="100%" height="450px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form">
                           <h4>Send a message</h4>
                           <p>Praesent faucibus diam id varius dapibus. In hac habitasse platea dictumst. Nullam rhoncus auctor neque et pulvinar.</p>
                           <form>
                              <div class="form-group">
                                 <label for="textarea"></label>
                                 <textarea class="form-control rounded-0" id="textarea" rows="3" placeholder="Message (required)"></textarea>
                              </div>
                              <div class="form-group">
                                 <label for="name"></label>
                                 <input type="text" class="form-control rounded-0" id="name" placeholder="Your email (required)">
                              </div>
                              <div class="form-group">
                                 <label for="email"></label>
                                 <input type="email" class="form-control rounded-0" id="email" placeholder="Your email (required)">
                              </div>
                              <button type="submit" class="btn btn-primary btn-lg rounded-0">Send message</button>
                           </form>
                        </div>
                     </div>
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