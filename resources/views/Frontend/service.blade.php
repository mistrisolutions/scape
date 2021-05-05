@extends('layouts.frontend.app')
@section('title','Services')
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
      <div class="service">
         <div class="container">
            <div class="row my-5">
               <div class="col-md-10 mx-auto">
                  <p>Bangladeshi corporate culture have a demand on modern, luxurious & contemporary office interior. Scape is providing the service at a optimum cost which reaches the client's requirement. Scape Development Engineers always keep their best idea for design concept,high quality materials, user friendly accessories,advance lighting solution and quality assurance for every project.</p>
               </div>
            </div> <!-- ./row -->
            <div class="row my-5">
               <div class="col-md-10 mx-auto">
                  <div class="service-item">
                     <div class="row d-flex align-items-center mb-5">
                        <div class="col-md-5 mb-5 mb-md-0">
                           <img class="img-fluid w-100" src="{{asset('assets/images/service/interior.png')}}" alt="">
                        </div>
                        <div class="col-md-7 mb-5 mb-md-0">
                           <h1 class="mb-5">Interior design & development.</h1>
                           <p class="mb-5">This is where we love to explore personalized interior design options in much greater detail so you can begin to “see” what the end result will look like.</p>
                           <button class="btn btn-primary rounded-0 px-3 py-2 mr-3">View Gallery</button>
                           <button class="btn btn-outline-primary rounded-0 px-3 py-2">Let's Work</button>
                        </div>
                     </div> <!-- ./row -->
                     <div class="row d-flex align-items-center mb-5">
                        <div class="col-md-7 mb-5 mb-md-0">
                           <h1 class="mb-5">Architectural & Engineering Consultant.</h1>
                           <p class="mb-5">We believe that successful design originates from listening to the clients’ needs, implementing explicit concepts and transforming them into physical form.  Architectural services, both commercial and residential are provided by Scape Development Engineers.  Our Architectural Staff is well trained in current building codes, Fair Housing Act and other safety issues that may arise in your project.</p>
                           <button class="btn btn-primary rounded-0 px-3 py-2 mr-3">View Gallery</button>
                           <button class="btn btn-outline-primary rounded-0 px-3 py-2">Let's Work</button>
                        </div>
                        <div class="col-md-5 mb-5 mb-md-0">
                           <img class="img-fluid  w-100" src="{{asset('assets/images/service/architect.png')}}" alt="">
                        </div>
                     </div> <!-- ./row -->
                     <div class="row d-flex align-items-center mb-5">
                        <div class="col-md-5 mb-5 mb-md-0">
                           <img class="img-fluid  w-100" src="{{asset('assets/images/service/building.png')}}" alt="">
                        </div>
                        <div class="col-md-7 mb-5 mb-md-0">
                           <h1 class="mb-5">Pre-engineered Steel Building.</h1>
                           <p class="mb-5">An efficiently designed pre-engineered building can be lighter than the conventional steel buildings by up to 30%. Lighter weight equates to less steel and potential price savings in structural framework.</p>
                           <button class="btn btn-primary rounded-0 px-3 py-2 mr-3">View Gallery</button>
                           <button class="btn btn-outline-primary rounded-0 px-3 py-2">Let's Work</button>
                        </div>
                     </div> <!-- ./row -->
                     <div class="row d-flex align-items-center mb-5">
                        <div class="col-md-7 mb-5 mb-md-0">
                           <h1 class="mb-5">Civil & Building Construction.</h1>
                           <p class="mb-5">Civil construction falls in the category of civil engineering which is all about designing, constructing and maintaining the physical and naturally built environment. Civil construction is the art of building bridges, dams, roads, airports, canals, and buildings.</p>
                           <button class="btn btn-primary rounded-0 px-3 py-2 mr-3">View Gallery</button>
                           <button class="btn btn-outline-primary rounded-0 px-3 py-2">Let's Work</button>
                        </div>
                        <div class="col-md-5 mb-5 mb-md-0">
                           <img class="img-fluid  w-100" src="{{asset('assets/images/service/civil.png')}}" alt="">
                        </div>
                     </div> <!-- ./row -->
                     <div class="row d-flex align-items-center mb-5">
                        <div class="col-md-5 mb-5 mb-md-0">
                           <img class="img-fluid  w-100" src="{{asset('assets/images/service/real-estate.png')}}" alt="">
                        </div>
                        <div class="col-md-7 mb-5 mb-md-0">
                           <h1 class="mb-5">Real Estate</h1>
                           <p class="mb-5">Find your dream property from our featured properties built at prime locations in Dhaka. From this featured list of ongoing, upcoming and completed properties, choose the one that best resonates with your heart.</p>
                           <button class="btn btn-primary rounded-0 px-3 py-2 mr-3">View Gallery</button>
                           <button class="btn btn-outline-primary rounded-0 px-3 py-2">Let's Work</button>
                        </div>
                     </div> <!-- ./row -->
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


