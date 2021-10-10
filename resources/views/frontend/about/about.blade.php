@extends('layouts.frontend.app')
@section('title', 'about')
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
@section('slider')
    <div class="about-nav-slider">
        <div class="about-slider-wrap">
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
@endsection
@section('content')
   <main>
      <div class="about-us">
         <div class="container">
            <div class="row pt-5">
               <div class="col-md-10 mx-auto">
                  <div class="we-are">
                     <h1 class="text-center">About Us</h1>
                     <p>Scape Development Engineers, an innovative & inclusive company founded in 2018, is a consultancy firm that provides Interior Design, Exterior Design & Total Constructions solutions for Govt. & Private sectors in Bangladesh. Embracing an unwavering commitment to quality and customer service, Scape Development Engineers has done many projects all over the country. In this short time, we were able to establish our company as one of the most acclaimed companies in the Architectural Engineering & Construction sectors. Our group of young, dynamic & hard-working professionals are always giving their best effort to make your dream into an elegant reality. </p>
                     <p>We are committed to providing our customers with products and services which exactly meet their needs and ensuring they receive the best possible added value. Our goal is to:</p>
                     <ul class="ml-3 ml-md-5">
                        <li>Consistently deliver quality services to our clients.</li>
                        <li>Grow our firm organically.</li>
                        <li>To provide a customer-focused service that delivers
                            high-quality construction projects in a safe, professional
                            and timely manner.</li>
                        <li>To develop long term partnerships with customers,
                            suppliers and sub-contractors.</li>
                     </ul>
                  </div> <!-- ./we-are -->
               </div> <!-- ./col -->
            </div> <!-- ./row -->
         </div> <!-- ./container -->
      </div> <!-- ./about-us -->

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
   $('.about-slider-wrap').slick({
      dots: true,
      arrows: false,
      slidesToShow: 1,
      autoplay: true,
      autoplaySpeed: 2000,
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
