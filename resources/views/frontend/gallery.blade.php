@extends('layouts.frontend.app')
@section('title', 'Gallery')
@push('css')
    <!-- fancybox-popup-css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/>
    <!-- Font-Awesome -->
    <script src="https://kit.fontawesome.com/c1b498439e.js" crossorigin="anonymous"></script>


    <style>
        #header {
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

        @media (min-width: 576px) {
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
        <div class="portfolio gallery-wrapper">
            <div class="container">
                <div class="row my-5">
                    <div class="col-md-10 mx-auto">
                        <div class="portfolio-wrap">
                            <ul class="nav nav-pills mb-5 w-100 h-100 row mx-0 justify-content-between" id="pills-tab" role="tablist">
                                <li class="col-4 px-0 nav-item h-100 w-100 border-right">
                                    <a class="nav-link active rounded-0 d-flex align-items-center justify-content-center h-100" id="pills-residence-tab" data-toggle="pill"
                                       href="#pills-residence" role="tab" aria-controls="pills-residence"
                                       aria-selected="true">3D VR <br> View</a>
                                </li>
                                <li class="col-4 px-0 nav-item h-100 w-100">
                                    <a class="nav-link rounded-0 d-flex align-items-center justify-content-center h-100" id="p ills-office-tab" data-toggle="pill"
                                       href="#pills-office" role="tab" aria-controls="pills-office"
                                       aria-selected="false">Project Pictures</a>
                                </li>
                                <li class="col-4 px-0 nav-item h-100 w-100 border-left">
                                    <a class="nav-link rounded-0 d-flex align-items-center justify-content-center h-100" id="p ills-hotel-tab" data-toggle="pill"
                                       href="#pills-hotel" role="tab" aria-controls="pills-hotel" aria-selected="false">Activities</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-5">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-residence" role="tabpanel"
                                     aria-labelledby="pills-residence-tab">
                                    <div class="d-md-flex mb-3">
                                        <div class="pr-md-4 d-flex flex-shrink-0 tab-left">
                                            <p class="text-primary">Bedroom</p>
                                        </div>
                                        <div class="row mx-0 gap-5 custom-grid w-100">
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/vr/bedroom/1.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/vr/bedroom/1.jpg')}}" alt="">
                                                    </a>
                                                    <img
                                                        class="threeD"
                                                        onclick="showVR('https://momento360.com/e/u/b8f65d588b614c8f975edf1ddc2bdc80?utm_campaign=embed&utm_source=other&heading=3.9&pitch=5.5&field-of-view=75&size=medium')"
                                                        src="{{asset('assets/images/portfolio/360.png')}}"
                                                        alt="Show VR"
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/vr/bedroom/2.jpg')}}"><img
                                                            class="img-fluid w-100"
                                                            src="{{asset('assets/images/vr/bedroom/2.jpg')}}" alt=""></a>
                                                    <img
                                                        class="threeD"
                                                        onclick="showVR('https://momento360.com/e/u/c4392a0f39df44afb2b6d08345d74dc2?utm_campaign=embed&utm_source=other&heading=69.1&pitch=-9.8&field-of-view=75&size=medium')"
                                                        src="{{asset('assets/images/portfolio/360.png')}}"
                                                        alt="Show VR"
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/vr/bedroom/3.jpg')}}"><img
                                                            class="img-fluid w-100"
                                                            src="{{asset('assets/images/vr/bedroom/3.jpg')}}" alt=""></a>
                                                    <img
                                                        class="threeD"
                                                        onclick="showVR('https://momento360.com/e/u/a18c25f7919f446080e81956656f019e?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium')"
                                                        src="{{asset('assets/images/portfolio/360.png')}}"
                                                        alt="Show VR"
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/vr/bedroom/4.jpg')}}"><img
                                                            class="img-fluid w-100"
                                                            src="{{asset('assets/images/vr/bedroom/4.jpg')}}" alt=""></a>
                                                    <img
                                                        class="threeD"
                                                        onclick="showVR('https://momento360.com/e/u/dd9f6a8e9f7c45ccb1eed04755df6885?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium')"
                                                        src="{{asset('assets/images/portfolio/360.png')}}"
                                                        alt="Show VR"
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/vr/bedroom/5.jpg')}}"><img
                                                            class="img-fluid w-100"
                                                            src="{{asset('assets/images/vr/bedroom/5.jpg')}}" alt=""></a>
                                                    <img
                                                        class="threeD"
                                                        onclick="showVR('https://momento360.com/e/u/47fc3936aaeb42cc88f2483dcc5dc3f5?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium')"
                                                        src="{{asset('assets/images/portfolio/360.png')}}"
                                                        alt="Show VR"
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/vr/bedroom/6.jpg')}}"><img
                                                            class="img-fluid w-100"
                                                            src="{{asset('assets/images/vr/bedroom/6.jpg')}}" alt=""></a>
                                                    <img
                                                        class="threeD"
                                                        onclick="showVR('https://momento360.com/e/u/0a6976bd46fb4d418c04b5dfa2e66f0f?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium')"
                                                        src="{{asset('assets/images/portfolio/360.png')}}"
                                                        alt="Show VR"
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/vr/bedroom/7.jpg')}}"><img
                                                            class="img-fluid w-100"
                                                            src="{{asset('assets/images/residential/7.jpg')}}" alt=""></a>
                                                    <img
                                                        class="threeD"
                                                        onclick="showVR('https://momento360.com/e/u/d50d1c2246a64df6b87ee775f218a245?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium')"
                                                        src="{{asset('assets/images/portfolio/360.png')}}"
                                                        alt="Show VR"
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-md-flex mb-3">
                                        <div class="pr-md-4 d-flex flex-shrink-0 tab-left">
                                            <p class="text-primary">Kitchen & Washroom</p>
                                        </div>
                                        <div class="row mx-0 gap-5 custom-grid w-100">
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/vr/kitchenwashroom/1.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/vr/kitchenwashroom/1.jpg')}}" alt="">
                                                    </a>
                                                    <img
                                                        class="threeD"
                                                        onclick="showVR('https://momento360.com/e/u/ed1d015d92234a97a8fd388f91cfdc91?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium')"
                                                        src="{{asset('assets/images/portfolio/360.png')}}"
                                                        alt="Show VR"
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/vr/kitchenwashroom/2.jpg')}}"><img
                                                            class="img-fluid w-100"
                                                            src="{{asset('assets/images/vr/kitchenwashroom/2.jpg')}}" alt=""></a>
                                                    <img
                                                        class="threeD"
                                                        onclick="showVR('https://momento360.com/e/u/ce6e3591651f456e84c9da1b418f70a0?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium')"
                                                        src="{{asset('assets/images/portfolio/360.png')}}"
                                                        alt="Show VR"
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/vr/kitchenwashroom/3.jpg')}}"><img
                                                            class="img-fluid w-100"
                                                            src="{{asset('assets/images/vr/kitchenwashroom/3.jpg')}}" alt=""></a>
                                                    <img
                                                        class="threeD"
                                                        onclick="showVR('https://momento360.com/e/u/83b5a9af0d214fb0967c26351639ac67?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium')"
                                                        src="{{asset('assets/images/portfolio/360.png')}}"
                                                        alt="Show VR"
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-md-flex mb-3">
                                        <div class="pr-md-4 d-flex flex-shrink-0 tab-left">
                                            <p class="text-primary">VR Files (Dining & Living)</p>
                                        </div>
                                        <div class="row mx-0 gap-5 custom-grid w-100">
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/vr/dinning-living-room/1.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/vr/dinning-living-room/1.jpg')}}" alt="">
                                                    </a>
                                                    <img
                                                        class="threeD"
                                                        onclick="showVR('https://momento360.com/e/u/579883d83aa34f9ba16359a602ccaa2d?utm_campaign=embed&utm_source=other&heading=142.95&pitch=-15.19&field-of-view=75&size=medium')"
                                                        src="{{asset('assets/images/portfolio/360.png')}}"
                                                        alt="Show VR"
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/vr/dinning-living-room/2.jpg')}}"><img
                                                            class="img-fluid w-100"
                                                            src="{{asset('assets/images/vr/dinning-living-room/2.jpg')}}" alt=""></a>
                                                    <img
                                                        class="threeD"
                                                        onclick="showVR('https://momento360.com/e/u/c362c38f497548d09101dc86a5cefbd5?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium')"
                                                        src="{{asset('assets/images/portfolio/360.png')}}"
                                                        alt="Show VR"
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/vr/dinning-living-room/3.jpg')}}"><img
                                                            class="img-fluid w-100"
                                                            src="{{asset('assets/images/vr/dinning-living-room/3.jpg')}}" alt=""></a>
                                                    <img
                                                        class="threeD"
                                                        onclick="showVR('https://momento360.com/e/u/b425901a1be54333be2d160b4bdc9087?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium')"
                                                        src="{{asset('assets/images/portfolio/360.png')}}"
                                                        alt="Show VR"
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/vr/dinning-living-room/4.jpg')}}"><img
                                                            class="img-fluid w-100"
                                                            src="{{asset('assets/images/vr/dinning-living-room/4.jpg')}}" alt=""></a>
                                                    <img
                                                        class="threeD"
                                                        onclick="showVR('https://momento360.com/e/u/a8cd0030f87d4b339070dadcd9e0e36a?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium')"
                                                        src="{{asset('assets/images/portfolio/360.png')}}"
                                                        alt="Show VR"
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/vr/dinning-living-room/5.jpg')}}"><img
                                                            class="img-fluid w-100"
                                                            src="{{asset('assets/images/vr/dinning-living-room/5.jpg')}}" alt=""></a>
                                                    <img
                                                        class="threeD"
                                                        onclick="showVR('https://momento360.com/e/u/5dc6c108cc1545758d90c8cc760403cf?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium')"
                                                        src="{{asset('assets/images/portfolio/360.png')}}"
                                                        alt="Show VR"
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/vr/dinning-living-room/6.jpg')}}"><img
                                                            class="img-fluid w-100"
                                                            src="{{asset('assets/images/vr/dinning-living-room/6.jpg')}}" alt=""></a>
                                                    <img
                                                        class="threeD"
                                                        onclick="showVR('https://momento360.com/e/u/b3f7652e0b09448dbd8cc9f87ee9427b?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium')"
                                                        src="{{asset('assets/images/portfolio/360.png')}}"
                                                        alt="Show VR"
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/vr/dinning-living-room/7.jpg')}}"><img
                                                            class="img-fluid w-100"
                                                            src="{{asset('assets/images/vr/dinning-living-room/7.jpg')}}" alt=""></a>
                                                    <img
                                                        class="threeD"
                                                        onclick="showVR('https://momento360.com/e/u/784adc06d7634d419955dd09619b5f4b?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium')"
                                                        src="{{asset('assets/images/portfolio/360.png')}}"
                                                        alt="Show VR"
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/vr/dinning-living-room/8.jpg')}}"><img
                                                            class="img-fluid w-100"
                                                            src="{{asset('assets/images/vr/dinning-living-room/8.jpg')}}" alt=""></a>
                                                    <img
                                                        class="threeD"
                                                        onclick="showVR('https://momento360.com/e/u/e6fb9e0e2fff42ed8d2f11afe64ea5f8?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium')"
                                                        src="{{asset('assets/images/portfolio/360.png')}}"
                                                        alt="Show VR"
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- ./tab-pan -->
                                <div class="tab-pane fade" id="pills-office" role="tabpanel"
                                     aria-labelledby="pills-office-tab">
                                    <div class="d-md-flex mb-3">
                                        <div class="pr-md-4 d-flex flex-shrink-0 tab-left">
                                            <p class="text-primary">Admission Office</p>
                                        </div>
                                        <div class="row mx-0 gap-5 custom-grid w-100">
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/1.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/1.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/2.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/2.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/3.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/3.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/4.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/4.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/5.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/5.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/6.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/6.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/7.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/7.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/8.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/8.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/9.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/9.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/10.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/10.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/11.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/11.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/12.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/12.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/13.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/13.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/14.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/14.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/15.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/15.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/16.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/16.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/17.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/17.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/18.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/18.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/19.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/19.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/20.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/20.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/21.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/21.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/22.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/22.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/23.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/23.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/24.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/24.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/25.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/25.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/26.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/26.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/27.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/27.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/28.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/28.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/29.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/29.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/30.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/30.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/31.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/31.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/32.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/32.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/33.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/33.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/34.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/34.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/35.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/35.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/36.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/36.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/37.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/37.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/38.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/38.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/39.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/39.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/40.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/40.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-md-flex mb-3">
                                        <div class="pr-md-4 d-flex flex-shrink-0 tab-left">
                                            <p class="text-primary">Faculty And Dean Office</p>
                                        </div>
                                        <div class="row mx-0 gap-5 custom-grid w-100">
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/faculty_dean/1.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/faculty_dean/1.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/faculty_dean/2.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/faculty_dean/2.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/faculty_dean/3.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/faculty_dean/3.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/faculty_dean/4.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/faculty_dean/4.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/faculty_dean/5.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/faculty_dean/5.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/faculty_dean/6.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/faculty_dean/6.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/faculty_dean/7.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/faculty_dean/7.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/faculty_dean/8.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/faculty_dean/8.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/faculty_dean/9.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/faculty_dean/9.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/faculty_dean/10.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/faculty_dean/10.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/faculty_dean/11.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/faculty_dean/11.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/faculty_dean/12.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/faculty_dean/12.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/faculty_dean/13.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/faculty_dean/13.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/faculty_dean/14.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/faculty_dean/14.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/faculty_dean/15.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/faculty_dean/15.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/faculty_dean/16.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/faculty_dean/16.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/faculty_dean/17.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/faculty_dean/17.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/faculty_dean/18.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/faculty_dean/18.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- sujon kabir residen start  --}}
                                    <div class="d-md-flex mb-3">
                                        <div class="pr-md-4 d-flex flex-shrink-0 tab-left kobir">
                                            <p class="text-primary" style="font-size: 14px!important">Mr. Sujan Kabir Residence</p>
                                        </div>
                                        
                                        <div class="row mx-0 custom-grid w-100 ">
                                            <div class="col-sm-5 col-md-5 col-lg-5 img-box mb-3 mb-md-0 px-md-0">
                                                <div class="border-0">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup w-100 h-100"
                                                    data-fancybox="gallery" href="{{asset('assets/images/gallery/sujon/Residence (Sujon vai) 19.png')}}">
                                                        <img class="gallery-img-big img-fluid"
                                                            src="{{asset('assets/images/gallery/sujon/Residence (Sujon vai) 19.png')}}" alt="Card image">
                                                    </a>
                                                </div>
                                                <div class="border-0 mt-2">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                                    data-fancybox="gallery" href="{{asset('assets/images/gallery/sujon/Residence (Sujon vai) 5.png')}}">
                                                        <img class="gallery-img-big img-fluid"
                                                            src="{{asset('assets/images/gallery/sujon/Residence (Sujon vai) 5.png')}}" alt="Card image">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-md-6 col-lg-7 img-box">
                                                <div class="row pl-1">
                                                    <div class="col-sm-6 col-md-6 col-lg-6 px-1">
                                                         <div class="border-0 mb-2">
                                                            <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                                            data-fancybox="gallery" href="{{asset('assets/images/gallery/sujon/Residence (Sujon vai) 11.png')}}">
                                                                <img class="gallery-img img-fluid w-100 k-i-1"
                                                                    src="{{asset('assets/images/gallery/sujon/Residence (Sujon vai) 11.png')}}" alt="Card image">
                                                            </a>
                                                        </div>
                                                        <div class="border-0 mb-2">
                                                            <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                                            data-fancybox="gallery" href="{{asset('assets/images/gallery/sujon/Residence (Sujon vai) 2.png')}}">
                                                                <img class="gallery-img img-fluid w-100 k-i-2" style="height:152px"
                                                                    src="{{asset('assets/images/gallery/sujon/Residence (Sujon vai) 2.png')}}" alt="Card image">
                                                            </a>
                                                        </div>

                                                        <div class="border-0 mb-2">
                                                            <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                                            data-fancybox="gallery" href="{{asset('assets/images/gallery/sujon/Residence (Sujon vai) 8.png')}}">
                                                                <img class="gallery-img img-fluid w-100 k-i-3" style="height: 135px"
                                                                    src="{{asset('assets/images/gallery/sujon/Residence (Sujon vai) 8.png')}}" alt="Card image">
                                                            </a>
                                                        </div>
                                                    </div>

                                                     <div class="col-sm-6 col-md 6 col-lg-6 px-1">
                                                        <div class="border-0 mb-2">
                                                            <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                                            data-fancybox="gallery" href="{{asset('assets/images/gallery/sujon/Residence (Sujon vai) 4.png')}}">
                                                                <img class="gallery-img img-fluid h-100"
                                                                    src="{{asset('assets/images/gallery/sujon/Residence (Sujon vai) 4.png')}}" alt="Card image">
                                                            </a>
                                                        </div>
                                                        <div class="border-0 mb-2">
                                                            <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                                            data-fancybox="gallery" href="{{asset('assets/images/gallery/sujon/Residence (Sujon vai) 15.png')}}">
                                                                <img class="gallery-img img-fluid h-100"
                                                                    src="{{asset('assets/images/gallery/sujon/Residence (Sujon vai) 15.png')}}" alt="Card image">
                                                            </a>
                                                        </div>

                                                        <div class="border-0 mb-2">
                                                            <a data-fancybox="gallery" data-width="2048" data-height="1365" class="view-popup"
                                                            data-fancybox="gallery" href="{{asset('assets/images/gallery/sujon/Residence (Sujon vai) 1.png')}}">
                                                                <img class="gallery-img img-fluid h-100"
                                                                    src="{{asset('assets/images/gallery/sujon/Residence (Sujon vai) 1.png')}}" alt="Card image">
                                                            </a>
                                                        </div>
                                                    </div>

                                                </div>
                                                
                                            </div>
                                            <div class="row mx-0 custom-grid w-100 " style="background-color: red">
                                                <div class="col">
                                                    hello
                                                </div>
                                                <div>
                                                    hello
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    {{-- sujon kabir residen end  --}}

                                    <div class="d-md-flex mb-3">
                                        <div class="pr-md-4 d-flex flex-shrink-0 tab-left">
                                            <p class="text-primary">Library & Register Floor</p>
                                        </div>
                                        <div class="row mx-0 gap-5 custom-grid w-100">
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/1.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/1.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/14.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/14.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/15.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/15.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/16.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/16.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/17.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/17.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/18.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/18.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                           
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/27.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/27.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/28.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/28.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/29.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/29.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/30.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/30.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/40.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/40.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-md-flex mb-3">
                                        <div class="pr-md-4 d-flex flex-shrink-0 tab-left">
                                            <p class="text-primary">Classroom Floor</p>
                                        </div>
                                        <div class="row mx-0 gap-5 custom-grid w-100">
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/1.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/1.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/13.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/13.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/20.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/20.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/21.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/21.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/22.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/22.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                           
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/27.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/27.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/28.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/28.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/29.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/29.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/30.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/30.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/31.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/31.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                           
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/39.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/39.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/admission/40.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/admission/40.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- ./tab-pan -->
                                <div class="tab-pane fade" id="pills-hotel" role="tabpanel"
                                     aria-labelledby="pills-hotel-tab">
                                    <div class="d-md-flex mb-3">
                                        <div class="pr-md-4 d-flex flex-shrink-0 tab-left">
                                            <p class="text-primary">1st Year Anniversary</p>
                                        </div>
                                        <div class="row mx-0 gap-5 custom-grid w-100">
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/activities/1st-anniversary/1.jpeg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/activities/1st-anniversary/1.jpeg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/activities/1st-anniversary/2.jpeg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/activities/1st-anniversary/2.jpeg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/activities/1st-anniversary/3.jpeg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/activities/1st-anniversary/3.jpeg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/activities/1st-anniversary/4.jpeg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/activities/1st-anniversary/4.jpeg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/activities/1st-anniversary/5.jpeg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/activities/1st-anniversary/5.jpeg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/activities/1st-anniversary/6.jpeg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/activities/1st-anniversary/6.jpeg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/activities/1st-anniversary/7.jpeg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/activities/1st-anniversary/7.jpeg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/activities/1st-anniversary/8.jpeg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/activities/1st-anniversary/8.jpeg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/activities/1st-anniversary/9.jpeg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/activities/1st-anniversary/9.jpeg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/activities/1st-anniversary/10.jpeg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/activities/1st-anniversary/10.jpeg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/activities/1st-anniversary/11.jpeg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/activities/1st-anniversary/11.jpeg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/activities/1st-anniversary/12.jpeg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/activities/1st-anniversary/12.jpeg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/activities/1st-anniversary/13.jpeg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/activities/1st-anniversary/13.jpeg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/activities/1st-anniversary/14.jpeg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/activities/1st-anniversary/14.jpeg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/activities/1st-anniversary/15.jpeg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/activities/1st-anniversary/15.jpeg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/activities/1st-anniversary/16.jpeg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/activities/1st-anniversary/16.jpeg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/activities/1st-anniversary/17.jpeg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/activities/1st-anniversary/17.jpeg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-md-flex mb-3">
                                        <div class="pr-md-4 d-flex flex-shrink-0 tab-left">
                                            <p class="text-primary">Cricket Carnival (Univrsity of Scholars)</p>
                                        </div>
                                        <div class="row mx-0 gap-5 custom-grid w-100">
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/activities/cricket-carnival/1.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/activities/cricket-carnival/1.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/activities/cricket-carnival/2.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/activities/cricket-carnival/2.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/activities/cricket-carnival/3.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/activities/cricket-carnival/3.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/activities/cricket-carnival/4.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/activities/cricket-carnival/4.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/activities/cricket-carnival/5.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/activities/cricket-carnival/5.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/activities/cricket-carnival/6.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/activities/cricket-carnival/6.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/activities/cricket-carnival/7.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/activities/cricket-carnival/7.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/activities/cricket-carnival/8.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/activities/cricket-carnival/8.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/activities/cricket-carnival/9.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/activities/cricket-carnival/9.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/activities/cricket-carnival/10.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/activities/cricket-carnival/10.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/activities/cricket-carnival/11.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/activities/cricket-carnival/11.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/activities/cricket-carnival/12.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/activities/cricket-carnival/12.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/activities/cricket-carnival/13.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/activities/cricket-carnival/13.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/activities/cricket-carnival/14.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/activities/cricket-carnival/14.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/activities/cricket-carnival/15.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/activities/cricket-carnival/15.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/activities/cricket-carnival/16.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/activities/cricket-carnival/16.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/activities/cricket-carnival/17.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/activities/cricket-carnival/17.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/activities/cricket-carnival/18.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/activities/cricket-carnival/18.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/activities/cricket-carnival/19.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/activities/cricket-carnival/19.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/activities/cricket-carnival/20.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/activities/cricket-carnival/20.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/activities/cricket-carnival/21.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/activities/cricket-carnival/21.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/activities/cricket-carnival/22.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/activities/cricket-carnival/22.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/activities/cricket-carnival/23.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/activities/cricket-carnival/23.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/activities/cricket-carnival/24.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/activities/cricket-carnival/24.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/activities/cricket-carnival/25.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/activities/cricket-carnival/25.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/activities/cricket-carnival/26.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/activities/cricket-carnival/26.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/activities/cricket-carnival/27.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/activities/cricket-carnival/27.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 px-0">
                                                <div class="view-card">
                                                    <a data-fancybox="gallery" data-width="2048" data-height="1365"
                                                       class="view-popup" data-fancybox="gallery"
                                                       href="{{asset('assets/images/activities/cricket-carnival/28.jpg')}}">
                                                        <img class="img-fluid w-100"
                                                             src="{{asset('assets/images/activities/cricket-carnival/28.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- ./tab-pan -->
                            </div>
                        </div>
                    </div>
                </div> <!-- ./row -->
            </div> <!-- ./container -->
        </div> <!-- ./about-us -->
    </main> <!-- ./Main -->
    <div class="modal" id="show-vr-box">
        <div class="modal-dialog">
            <div class="modal-content relative">
                <i class="fas fa-times top-5 right-10 z-10 text-danger fs-50 close-vr" style="position: absolute; cursor: pointer;"></i>
                <div class="modal-body">
                    <iframe class="img-fluid w-100"
                            id="show-vr-iframe"
                            alt="">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
    </div>

    <style>
        
        @media only screen and (min-width:992px){
            .k-i-1{
            height: 131px;
            }

            .k-i-2{
                height: 152px;
            }

            .k-i-3{
                height: 135px;
            }
        }


    </style>

@endsection
@push('custom-scripts')

    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

    <script>
        // Navbar
        $(document).ready(function () {
            //Navbar fixed top
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

            //Fancybox
            $('.view-popup').fancybox({});
        });

        // Set VR View Iframe url
        let showVrIframe = document.getElementById('show-vr-iframe');
        let showVrBox = document.getElementById('show-vr-box');
        let closeVr = document.querySelector('.close-vr');

        function showVR(url){
            event.stopImmediatePropagation()
            showVrIframe.setAttribute('src' , url);
            showVrBox.style.display = 'block'
        }
        // Hide Vr View Iframe when click outside
        closeVr.addEventListener('click' , function (){
            showVrBox.style.display = 'none'
            showVrIframe.setAttribute('src' , '');
        })

    </script>
@endpush


