@extends('layouts.frontend.app')
@section('title', 'Team')
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
      <div class="team">
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
            <div class="row my-5">
               <div class="col-md-10 mx-auto">
                  <h1 class="mb-5">Team of dream makers</h1>
                  <div class="row">
                     <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card border-0">
                           <div class="card-header  p-0 border-0">
                              <img class="card-img-top img-fluid" src="{{asset('assets/images/team/demo.png')}}" alt="Card image">
                           </div>
                           <div class="card-body text-center">
                              <p class="card-text font-weight-bold text-dark">Al Mamun</p>
                              <p class="font-weight-light">Project Engineer</p>
                           </div>
                        </div> <!-- ./Card -->
                     </div> <!-- ./col -->
                     <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card border-0">
                           <div class="card-header  p-0 border-0">
                              <img class="card-img-top img-fluid" src="{{asset('assets/images/team/demo.png')}}" alt="Card image">
                           </div>
                           <div class="card-body text-center">
                              <p class="card-text font-weight-bold text-dark">Kawser Ahmed</p>
                              <p class="font-weight-light">HR & Accounts</p>
                           </div>
                        </div> <!-- ./Card -->
                     </div> <!-- ./col -->
                     <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card border-0">
                           <div class="card-header  p-0 border-0">
                              <img class="card-img-top img-fluid" src="{{asset('assets/images/team/demo.png')}}" alt="Card image">
                           </div>
                           <div class="card-body text-center">
                              <p class="card-text font-weight-bold text-dark">Ashiujjaman Real</p>
                              <p class="font-weight-light">Graphics Designer</p>
                           </div>
                        </div> <!-- ./Card -->
                     </div> <!-- ./col -->
                     <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card border-0">
                           <div class="card-header  p-0 border-0">
                              <img class="card-img-top img-fluid" src="{{asset('assets/images/team/demo.png')}}" alt="Card image">
                           </div>
                           <div class="card-body text-center">
                              <p class="card-text font-weight-bold text-dark">Rezaul Islam</p>
                              <p class="font-weight-light">Project Engineer</p>
                           </div>
                        </div> <!-- ./Card -->
                     </div> <!-- ./col -->
                     
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


