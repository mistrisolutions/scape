@extends('layouts.frontend.app')
@section('title', 'Contact')
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
                        <div class="map border-10">
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
                                 <textarea class="form-control border-10" id="textarea" rows="3" placeholder="Message (required)"></textarea>
                              </div>
                              <div class="form-group">
                                 <label for="name"></label>
                                 <input type="text" class="form-control border-10 py-4" id="name" placeholder="Your email (required)">
                              </div>
                              <div class="form-group">
                                 <label for="email"></label>
                                 <input type="email" class="form-control border-10 py-4" id="email" placeholder="Your email (required)">
                              </div>
                              <button type="submit" class="btn btn-primary btn-lg border-10">Send message</button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div> <!-- ./row -->
         </div> <!-- ./container -->
      </div> <!-- ./about-us -->
   </main> <!-- ./Main -->
@endsection
@push('custom-scripts')
    <script>
        // Navbar
        $(document).ready(function() {
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
    </script>
@endpush


