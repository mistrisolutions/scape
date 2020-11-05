@extends('layouts.frontend.app')
@push('css')
<!-- slick-slider-css -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<!-- fancybox-popup-css -->
<link rel="stylesheet" href="/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
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
         
      <div class="container">
         <div class="row">
               <div class="col-md-12">
                  <div class="teeth">
                  <img class="img-fluid" src="{{asset('assets/images/home/Teeth.png')}}" alt="">
               </div>
               </div>
         </div>
      </div>
   </header> <!-- ./Header -->
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
                                    <a class="view-popup" href="{{asset('assets/images/portfolio/1.png')}}">
                                       <!-- <img class="img-fluid w-100" src="{{asset('assets/images/portfolio/demo-buil.jpg')}}" alt=""> -->
                                       <iframe class="img-fluid w-100" src="https://momento360.com/e/u/350a43f62e744c4ebd9142602eccba2d?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium" alt=""></iframe>
                                    </a>
                                    <a href="https://momento360.com/e/u/350a43f62e744c4ebd9142602eccba2d?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium"><img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt=""></a>
                                    
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a class="view-popup" href="{{asset('assets/images/portfolio/2.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/2.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a class="view-popup" href="{{asset('assets/images/portfolio/3.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/3.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a class="view-popup" href="{{asset('assets/images/portfolio/1.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/1.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a class="view-popup" href="{{asset('assets/images/portfolio/2.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/2.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a class="view-popup" href="{{asset('assets/images/portfolio/3.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/3.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              
                           </div>
                        </div>
                        <div class="tab-pane fade" id="pills-office" role="tabpanel" aria-labelledby="pills-office-tab">
                           <div class="row">
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a class="view-popup" href="{{asset('assets/images/portfolio/1.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/1.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a class="view-popup" href="{{asset('assets/images/portfolio/2.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/2.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a class="view-popup" href="{{asset('assets/images/portfolio/3.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/3.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a class="view-popup" href="{{asset('assets/images/portfolio/1.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/1.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a class="view-popup" href="{{asset('assets/images/portfolio/2.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/2.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a class="view-popup" href="{{asset('assets/images/portfolio/3.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/3.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              
                           </div>
                        </div>
                        <div class="tab-pane fade" id="pills-hotel" role="tabpanel" aria-labelledby="pills-hotel-tab">
                           <div class="row">
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a class="view-popup" href="{{asset('assets/images/portfolio/1.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/1.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a class="view-popup" href="{{asset('assets/images/portfolio/2.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/2.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a class="view-popup" href="{{asset('assets/images/portfolio/3.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/3.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a class="view-popup" href="{{asset('assets/images/portfolio/1.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/1.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a class="view-popup" href="{{asset('assets/images/portfolio/2.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/2.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a class="view-popup" href="{{asset('assets/images/portfolio/3.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/3.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              
                           </div>
                        </div>
                        <div class="tab-pane fade" id="pills-rooftop" role="tabpanel" aria-labelledby="pills-rooftop-tab">
                           <div class="row">
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a class="view-popup" href="{{asset('assets/images/portfolio/1.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/1.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a class="view-popup" href="{{asset('assets/images/portfolio/2.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/2.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a class="view-popup" href="{{asset('assets/images/portfolio/3.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/3.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a class="view-popup" href="{{asset('assets/images/portfolio/1.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/1.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a class="view-popup" href="{{asset('assets/images/portfolio/2.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/2.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a class="view-popup" href="{{asset('assets/images/portfolio/3.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/3.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              
                           </div>
                        </div>
                        <div class="tab-pane fade" id="pills-steel" role="tabpanel" aria-labelledby="pills-steel-tab">
                           <div class="row">
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a class="view-popup" href="{{asset('assets/images/portfolio/1.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/1.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a class="view-popup" href="{{asset('assets/images/portfolio/2.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/2.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a class="view-popup" href="{{asset('assets/images/portfolio/3.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/3.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a class="view-popup" href="{{asset('assets/images/portfolio/1.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/1.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a class="view-popup" href="{{asset('assets/images/portfolio/2.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/2.png')}}" alt=""></a>
                                    <img class="threeD" src="{{asset('assets/images/portfolio/360.png')}}" alt="">
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-4 mb-5">
                                 <div class="view-card">
                                    <a class="view-popup" href="{{asset('assets/images/portfolio/3.png')}}"><img class="img-fluid w-100" src="{{asset('assets/images/portfolio/3.png')}}" alt=""></a>
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

<!-- fancybox-popup-js -->
<script type="text/javascript" src="/fancybox/jquery.fancybox-1.3.4.pack.js"></script>

<script>
   // $(document).ready(function() {
   //    $('.view-popup').magnificPopup({
   //       type:'image',
   //       gallery: {
   //          enabled: true
   //       },
   //       removalDelay: 500,
   //       mainClass: 'mfp-fade'
   //  });
   // });

   $(document).ready(function() {

      /* This is basic - uses default settings */
      
      // $("a#single_image").fancybox();
      
      // /* Using custom settings */
      
      // $("a#inline").fancybox({
      //    'hideOnContentClick': true
      // });

      /* Apply fancybox to multiple items */
      
      $(".view-popup").fancybox({
         'transitionIn'	:	'elastic',
         'transitionOut'	:	'elastic',
         'speedIn'		:	600, 
         'speedOut'		:	200, 
         'overlayShow'	:	false
      });
      
   });
</script>
@endpush


@endsection