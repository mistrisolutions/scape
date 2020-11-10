@extends('layouts.frontend.app')
@section('title', 'About')
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
<div class="container">
   <div class="row">
      <div class="col-md-10 mx-auto">
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
      </div>
   </div>
</div>
@endsection
@section('content')
   <main>
      <div class="about-us">
         <div class="container">
            <div class="row pt-5">
               <div class="col-md-10 mx-auto">
                  <div class="we-are">
                     <h1>Who we are?</h1>
                     <p>SCAPE Development Engineers is a Consultancy firm located in Dhaka which provides Interior Design, Exterior Design & Total Constructions solution for Govt. & Private sectors in Bangladesh.</p>
                     <p>Scape is a team of mordern interior design company. We believe any types of interior is possible like global taste of design.</p>
                     <ol>
                        <li>Interior design & development.</li>
                        <li>Architectural & engineering consultant.</li>
                        <li>Pre-engineered steel building.</li>
                        <li>Civil & building construction.</li>
                        <li>Real estate.</li>
                     </ol>
                  </div> <!-- ./we-are -->
               </div> <!-- ./col -->
            </div> <!-- ./row -->
            <div class="row pt-5">
               <div class="col-md-10 mx-auto">
                  <div class="mission">
                     <h1>Our mission?</h1>
                     <p>Our mission is to positively influence the lives of all customers with whom we have the pleasure of working, and leave a lasting impression on their minds and imagination. Our designs must inspire and elevate the hearts and minds of all those who lay eyes on it. Our long-term goals are always in line with our core values. Our mission is to always go one step further – to offer an exclusive customer service to our clients.</p>
                  </div> <!-- ./mission -->
               </div> <!-- ./col -->
            </div> <!-- ./row -->
            <div class="row py-5">
               <div class="col-md-10 mx-auto">
                  <div class="vission pb-5">
                     <h1>Our vision?</h1>
                     <p>Our vision aim to shape spaces with “timeless designs” and want to be a globally recognized professional interior design company, providing solutions in the field of high-end corporate, commercial & residential interiors.</p> 
                  </div> <!-- ./vission -->
               </div> <!-- ./col -->
            </div> <!-- ./row -->
         </div> <!-- ./container -->
      </div> <!-- ./about-us -->
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
    

</script>
@endpush
