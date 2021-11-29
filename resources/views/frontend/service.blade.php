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
             <h1 class="text-center">Services We Provide</h1>
            <div class="row my-3 my-md-5">
               <div class="col-md-8 mx-auto">
                  <p class="text-center">You can dream, make plans, and build the most brilliant spot on the planet. But it expects individuals to make the fantasy a reality. Scape is giving you the power of turning your imagination into reality. Here in Scape Development Engineers, we always keep our best ideas for design concepts, high-quality materials, user-friendly accessories, advanced lighting solutions, and quality assurance for every project.</p>
               </div>
            </div> <!-- ./row -->
            <div class="row my-3 my-md-5">
               <div class="col-md-12 mx-auto">
                  <div class="service-item px-2">
                     <div class="row d-flex mb-4 mb-md-5 shadow-sm rounded-lg py-3">
                        <div class="col-md-6 mb-3 mb-md-0">
                           <img class="img-fluid rounded-lg w-100" src="{{asset('assets/images/service/interior.png')}}" alt="">
                        </div>
                        <div class="col-md-6 mb-3 mb-md-0 py-3">
                           <h1 class="mb-3 mb-md-4">Interior design & development.</h1>
                           <p class="mb-3 mb-md-5">Your home should tell the story of who you are, and be a Collection of what you Love. Our interiors are an insight into our brains. It is a collaboration of design, art, humor, irony, functionality, and the street. This is the section where we have the most potential to show the combination of hard work and creativity of ours as a company.</p>
                            <a href="{{ route('contact')  }}" class="btn btn-outline-primary rounded-lg px-3 py-2">Let's Work</a>
                        </div>
                     </div> <!-- ./row -->
                     <div class="row d-flex mb-4 mb-md-5 shadow-sm rounded-lg py-3">
                        <div class="col-md-6 mb-3 mb-md-0 order-1 order-md-0 py-3">
                           <h1 class="mb-3 mb-md-4">Architectural & Engineering Consultant.</h1>
                           <p class="mb-3 mb-md-3">We believe that successful design originates from listening to the clients’ needs, implementing explicit concepts, and transforming them into physical form. Architectural services, both commercial and residential are provided by Scape Development Engineers. Here we help with the
                               <br>
                               -Preparation of preliminary plans.
                               <br>
                               -Detailed building plans.
                               <br>
                               -Bill of Quantities for the work.
                               <br>
                               -Building supervision.
                               <br>
                               -Planning the work without any deviation.</p>
                           <a href="{{ route('contact')  }}" class="btn btn-outline-primary rounded-lg px-3 py-2">Let's Work</a>
                        </div>
                        <div class="col-md-6 mb-3 mb-md-0 order-0 order-md-1">
                           <img class="img-fluid rounded-lg w-100" src="{{asset('assets/images/service/architect.png')}}" alt="">
                        </div>
                     </div> <!-- ./row -->
                     <div class="row d-flex mb-4 mb-md-5 shadow-sm rounded-lg py-3">
                        <div class="col-md-6 mb-3 mb-md-0">
                           <img class="img-fluid h-100 rounded-lg w-100" src="{{asset('assets/images/service/building.jpg')}}" alt="">
                        </div>
                        <div class="col-md-6 mb-3 mb-md-0 py-3">
                           <h1 class="mb-3 mb-md-4">Pre-engineered Steel Building.</h1>
                           <p class="mb-3 mb-md-5">Pre-engineered Steel Building
                               A pre-engineered steel building is a modern technology where the complete designing is done at the factory and the building components are brought to the site in CKD (completely knock down condition) and then fixed/jointed at the site and raised with the help of cranes. This technology
                               <br>
                               -Take less Construction Time.
                               <br>
                               -Cost is lower than the usual technique.
                               <br>
                               -The quality is assured.
                               <br>
                               -Long durability and low maintenance costs.</p>
                           <a href="{{ route('contact')  }}" class="btn btn-outline-primary rounded-lg px-3 py-2">Let's Work</a>
                        </div>
                     </div> <!-- ./row -->
                     <div class="row d-flex mb-4 mb-md-5 shadow-sm rounded-lg py-3">
                        <div class="col-md-6 mb-3 mb-md-0 order-1 order-md-0 py-3">
                           <h1 class="mb-3 mb-md-4">Landscaping</h1>
                           <p class="mb-3 mb-md-5">Landscape design is the art of arranging the features of an area of land for aesthetic and/or practical reasons. We as a designer, provide landscape designs by combining nature and culture in the development. Landscaping contributes significantly to one’s well-being and quality of life. It provides the broader context within which anyone lives their lives. Living within aesthetically pleasing and culturally meaningful landscapes enhances one's sense of wellbeing. Besides, it'll have a great impact on the environment.</p>
                           <a href="{{ route('contact')  }}" class="btn btn-outline-primary rounded-lg px-3 py-2">Let's Work</a>
                        </div>
                        <div class="col-md-6 mb-3 mb-md-0 order-0 order-md-1">
                           <img class="img-fluid rounded-lg w-100" src="{{asset('assets/images/service/landscaping.png')}}" alt="">
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


