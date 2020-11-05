@extends('layouts.frontend.app')
@push('css')
<!-- fancybox-popup-css -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<!-- Font-Awesome -->
<script src="https://kit.fontawesome.com/c1b498439e.js" crossorigin="anonymous"></script>


<style>
   #header{
      height: 100%;
   }
   /* overlay at start */
   .mfp-fade.mfp-bg {
   opacity: 0;

   -webkit-transition: all 0.15s ease-out;
   -moz-transition: all 0.15s ease-out;
   transition: all 0.15s ease-out;
   }
   /* overlay animate in */
   .mfp-fade.mfp-bg.mfp-ready {
   opacity: 0.8;
   }
   /* overlay animate out */
   .mfp-fade.mfp-bg.mfp-removing {
   opacity: 0;
   }

   /* content at start */
   .mfp-fade.mfp-wrap .mfp-content {
   opacity: 0;

   -webkit-transition: all 0.15s ease-out;
   -moz-transition: all 0.15s ease-out;
   transition: all 0.15s ease-out;
   }
   /* content animate it */
   .mfp-fade.mfp-wrap.mfp-ready .mfp-content {
   opacity: 1;
   }
   /* content animate out */
   .mfp-fade.mfp-wrap.mfp-removing .mfp-content {
   opacity: 0;
   }

   /** modal **/

   .modal-content {
      height: 90vh;
      position: relative;
   }
   .modal-body {
      padding: 0px;
   }
   iframe.img-fluid.w-100 {
      height: 100%;
      object-fit: cover;
      object-position: 50% 50%;
   }
   @media (min-width: 576px){
      .modal-dialog {
         max-width: 80%;
         margin: auto;
         height: 100%;
         align-items: center;
         display: flex;
      }
   }
</style>
@endpush

@section('content')
   <main>
      <div class="portfolio">
         <div class="container">
            <div class="row my-5">
               <div class="col-md-10 mx-auto">
                  <div class="portfolio-wrap">
                     <ul class="nav nav-pills mb-5 w-100 justify-content-between" id="pills-tab" role="tablist">
                        <li class="nav-item mb-3">
                           <a class="nav-link active rounded-0" id="pills-residence-tab" data-toggle="pill" href="#pills-residence" role="tab" aria-controls="pills-residence" aria-selected="true">Residence Interior</a>
                        </li>
                        <li class="nav-item mb-3">
                           <a class="nav-link rounded-0" id="pills-office-tab" data-toggle="pill" href="#pills-office" role="tab" aria-controls="pills-office" aria-selected="false">Office Interior</a>
                        </li>
                        <li class="nav-item mb-3">
                           <a class="nav-link rounded-0" id="pills-hotel-tab" data-toggle="pill" href="#pills-hotel" role="tab" aria-controls="pills-hotel" aria-selected="false">Hotel & Commercial</a>
                        </li>
                        <li class="nav-item mb-3">
                           <a class="nav-link rounded-0" id="pills-rooftop-tab" data-toggle="pill" href="#pills-rooftop" role="tab" aria-controls="pills-rooftop" aria-selected="false">Rooftop ladscaping</a>
                        </li>
                        <li class="nav-item mb-3">
                           <a class="nav-link rounded-0" id="pills-steel-tab" data-toggle="pill" href="#pills-steel" role="tab" aria-controls="pills-steel" aria-selected="false">Pre-engineered steel building</a>
                        </li>
                     </ul>
                     <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-residence" role="tabpanel" aria-labelledby="pills-residence-tab"> 
                           <div class="row">
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup" data-fancybox="gallery" href="{{asset('assets/images/portfolio/demo-buil.jpg')}}">
                                       <img class="img-fluid w-100" src="{{asset('assets/images/portfolio/demo-buil.jpg')}}" alt="">
                                    </a>
                                    <a href=""  data-toggle="modal" data-target="#exampleModal"><img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt=""></a>
                                    
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup" data-fancybox="gallery"  href="{{asset('assets/images/portfolio/2.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/2.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup" data-fancybox="gallery" href="{{asset('assets/images/portfolio/3.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/3.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"  class="view-popup" href="{{asset('assets/images/portfolio/1.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/1.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"  class="view-popup" href="{{asset('assets/images/portfolio/2.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/2.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"  class="view-popup" href="{{asset('assets/images/portfolio/3.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/3.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              
                           </div>
                        </div>
                        <div class="tab-pane fade" id="pills-office" role="tabpanel" aria-labelledby="pills-office-tab">
                           <div class="row">
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"  class="view-popup" href="{{asset('assets/images/portfolio/1.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/1.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup" href="{{asset('assets/images/portfolio/2.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/2.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"  class="view-popup" href="{{asset('assets/images/portfolio/3.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/3.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"  class="view-popup" href="{{asset('assets/images/portfolio/1.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/1.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"  class="view-popup" href="{{asset('assets/images/portfolio/2.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/2.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"  class="view-popup" href="{{asset('assets/images/portfolio/3.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/3.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              
                           </div>
                        </div>
                        <div class="tab-pane fade" id="pills-hotel" role="tabpanel" aria-labelledby="pills-hotel-tab">
                           <div class="row">
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"  class="view-popup" href="{{asset('assets/images/portfolio/1.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/1.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"  class="view-popup" href="{{asset('assets/images/portfolio/2.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/2.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"  class="view-popup" href="{{asset('assets/images/portfolio/3.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/3.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"  class="view-popup" href="{{asset('assets/images/portfolio/1.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/1.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"  class="view-popup" href="{{asset('assets/images/portfolio/2.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/2.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"  class="view-popup" href="{{asset('assets/images/portfolio/3.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/3.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              
                           </div>
                        </div>
                        <div class="tab-pane fade" id="pills-rooftop" role="tabpanel" aria-labelledby="pills-rooftop-tab">
                           <div class="row">
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"  class="view-popup" href="{{asset('assets/images/portfolio/1.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/1.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"  class="view-popup" href="{{asset('assets/images/portfolio/2.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/2.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"  class="view-popup" href="{{asset('assets/images/portfolio/3.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/3.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"  class="view-popup" href="{{asset('assets/images/portfolio/1.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/1.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"  class="view-popup" href="{{asset('assets/images/portfolio/2.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/2.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"  class="view-popup" href="{{asset('assets/images/portfolio/3.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/3.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              
                           </div>
                        </div>
                        <div class="tab-pane fade" id="pills-steel" role="tabpanel" aria-labelledby="pills-steel-tab">
                           <div class="row">
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"  class="view-popup" href="{{asset('assets/images/portfolio/1.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/1.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"  class="view-popup" href="{{asset('assets/images/portfolio/2.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/2.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"  class="view-popup" href="{{asset('assets/images/portfolio/3.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/3.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"  class="view-popup" href="{{asset('assets/images/portfolio/1.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/1.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"  class="view-popup" href="{{asset('assets/images/portfolio/2.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/2.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"  class="view-popup" href="{{asset('assets/images/portfolio/3.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/3.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div> <!-- ./row -->
         </div> <!-- ./container -->
      </div> <!-- ./about-us -->
   </main> <!-- ./Main -->
   <div class="modal" id="exampleModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-body">
               <iframe class="img-fluid w-100" src="https://momento360.com/e/u/350a43f62e744c4ebd9142602eccba2d?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium" alt="">
               </iframe>
            </div>
            </div>
         </div>
      </div>
   </div>

@endsection
@push('custom-scripts')

<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

<script>
   
      $('.view-popup').fancybox({
         
      });

</script>
@endpush


