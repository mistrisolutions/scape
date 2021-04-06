@extends('layouts.Frontend.app')
@section('title')
    Multi Tech  Engineering
@endsection
@section('content')
@push('slider')
           <!-- Revolution slider area-->
           <div class="mfn-main-slider" id="mfn-rev-slider">
            <div id="rev_slider_1_2_wrapper" class="rev_slider_wrapper fullscreen-container" style="padding:0px;">
                <!-- START REVOLUTION SLIDER 5.0.4.1 fullscreen mode -->
                <div id="rev_slider_1_2" class="rev_slider fullscreenbanner" data-version="5.0.4.1">
                    <ul>
                        <!-- SLIDE -->
                        <li data-index="rs-1" data-transition="random" data-slotamount="7" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="{{asset('images/slider1.jpeg')}}" alt="" width="1920" height="1200" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-resizeme" id="slide-1-layer-1" data-x="30" data-y="bottom" data-voffset="270" data-width="" data-height="" data-transform_idle="" data-transform_in="opacity:0;s:300;e:Power3.easeInOut;" data-transform_out="auto:auto;s:300;" data-start="500" data-responsive_offset="on" style="z-index: 5;"><img src="{{asset('images/home_agro_slider_logo.png')}}" alt="" width="561" height="226" data-no-retina>
                            </div>

                            {{-- <!-- LAYER NR. 2 -->
                            <div class="tp-caption tp-resizeme" id="slide-1-layer-2" data-x="30" data-y="bottom" data-voffset="160" data-width="auto" data-height="auto" data-transform_idle="" data-transform_in="opacity:0;s:300;e:Power3.easeInOut;" data-transform_out="auto:auto;s:300;" data-start="500" data-responsive_offset="on" style="z-index: 6;"><img src="{{asset('images/home_agro_slider_play.png')}}" alt="" width="221" height="79" data-no-retina>
                            </div> --}}

                            <!-- LAYER NR. 3 -->
                            {{-- <div class="tp-caption mfnrsagromediumlight tp-resizeme" id="slide-1-layer-3" data-x="287" data-y="bottom" data-voffset="210" data-width="auto" data-height="auto" data-transform_idle="" data-transform_in="opacity:0;s:300;e:Power3.easeInOut;" data-transform_out="auto:auto;s:300;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; min-width: auto; min-height: auto; white-space: nowrap; max-width: auto; max-height: auto; font-size: 18px; line-height: 24px; font-weight: 300; color: rgba(255, 255, 255, 1.00);font-family:Exo;border-color:rgba(0, 0, 0, 1.00);">
                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                <br> elit, sed do eiusmod tempor incididunt ut labore et
                                <br> dolore magna aliqua.
                            </div> --}}
                        </li>
                        <!-- SLIDE -->
                        <li data-index="rs-2" data-transition="random" data-slotamount="7" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="{{asset('images/slider2.png')}}" alt="" width="1920" height="1200" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            {{-- <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-resizeme" id="slide-1-layer-1" data-x="30" data-y="bottom" data-voffset="270" data-width="" data-height="" data-transform_idle="" data-transform_in="opacity:0;s:300;e:Power3.easeInOut;" data-transform_out="auto:auto;s:300;" data-start="500" data-responsive_offset="on" style="z-index: 5;"><img src="{{asset('images/home_agro_slider_logo.png')}}" alt="" width="561" height="226" data-no-retina>
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption tp-resizeme" id="slide-1-layer-2" data-x="30" data-y="bottom" data-voffset="160" data-width="auto" data-height="auto" data-transform_idle="" data-transform_in="opacity:0;s:300;e:Power3.easeInOut;" data-transform_out="auto:auto;s:300;" data-start="500" data-responsive_offset="on" style="z-index: 6;"><img src="{{asset('images/home_agro_slider_play.png')}}" alt="" width="221" height="79" data-no-retina>
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption mfnrsagromediumlight tp-resizeme" id="slide-1-layer-3" data-x="287" data-y="bottom" data-voffset="210" data-width="auto" data-height="auto" data-transform_idle="" data-transform_in="opacity:0;s:300;e:Power3.easeInOut;" data-transform_out="auto:auto;s:300;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; min-width: auto; min-height: auto; white-space: nowrap; max-width: auto; max-height: auto; font-size: 18px; line-height: 24px; font-weight: 300; color: rgba(255, 255, 255, 1.00);font-family:Exo;border-color:rgba(0, 0, 0, 1.00);">
                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                <br> elit, sed do eiusmod tempor incididunt ut labore et
                                <br> dolore magna aliqua.
                            </div> --}}
                        </li>
                        <!-- SLIDE -->
                        <li data-index="rs-3" data-transition="random" data-slotamount="7" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="{{asset('images/home_agro_slider.jpg')}}" alt="" width="1920" height="1200" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
{{-- 
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-resizeme" id="slide-1-layer-1" data-x="30" data-y="bottom" data-voffset="270" data-width="" data-height="" data-transform_idle="" data-transform_in="opacity:0;s:300;e:Power3.easeInOut;" data-transform_out="auto:auto;s:300;" data-start="500" data-responsive_offset="on" style="z-index: 5;"><img src="{{asset('images/home_agro_slider_logo.png')}}" alt="" width="561" height="226" data-no-retina>
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption tp-resizeme" id="slide-1-layer-2" data-x="30" data-y="bottom" data-voffset="160" data-width="auto" data-height="auto" data-transform_idle="" data-transform_in="opacity:0;s:300;e:Power3.easeInOut;" data-transform_out="auto:auto;s:300;" data-start="500" data-responsive_offset="on" style="z-index: 6;"><img src="{{asset('images/home_agro_slider_play.png')}}" alt="" width="221" height="79" data-no-retina>
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption mfnrsagromediumlight tp-resizeme" id="slide-1-layer-3" data-x="287" data-y="bottom" data-voffset="210" data-width="auto" data-height="auto" data-transform_idle="" data-transform_in="opacity:0;s:300;e:Power3.easeInOut;" data-transform_out="auto:auto;s:300;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; min-width: auto; min-height: auto; white-space: nowrap; max-width: auto; max-height: auto; font-size: 18px; line-height: 24px; font-weight: 300; color: rgba(255, 255, 255, 1.00);font-family:Exo;border-color:rgba(0, 0, 0, 1.00);">
                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                <br> elit, sed do eiusmod tempor incididunt ut labore et
                                <br> dolore magna aliqua.
                            </div> --}}
                        </li>
                    </ul>
                    <div class="tp-bannertimer tp-bottom flv_viz_hid"></div>
                </div>
            </div>

        </div> 
@endpush
<div class="content_wrapper clearfix">

  <!-- .sections_group -->
  <div class="sections_group">

      <div class="entry-content">

          <div class="section" style="padding-top:80px; padding-bottom:40px; background-color:#f8f9fb">
              <div class="section_wrapper clearfix">
                  <div class="items_group clearfix">
                      <!-- One full width row-->
                      <div class="column one column_column ">
                          <div class="column_attr align_center">
                              <div class="image_frame no_link scale-with-grid alignnone no_border">
                                  <div class="image_wrapper"><img class="scale-with-grid" src="agro/images/home_agro_heading_icon.png" alt="" width="42" height="38" />
                                  </div>
                              </div>

                              <hr class="no_line hrmargin_b_20" />

                              <h2>Our newest products</h2>
                          </div>
                      </div>
                      <!-- One Third (1/3) Column -->
                      @foreach ($products as $product)
                        <div class="column one-third column_column">
                            <div class="column_attr align_center">
                                <div style="margin-right: -3%;">
                                    <div class="image_frame no_link scale-with-grid alignnone no_border">
                                        <div class="image_wrapper"><img class="scale-with-grid" src="{{asset(Storage::url($product->image))}}" alt="" width="380" height="282" />
                                        </div>
                                    </div>

                                    <hr class="no_line hrmargin_b_20" />

                                    <div style="padding: 20px 6%; background: url({{asset('images/home_agro_sep2.png')}}) repeat-y right top">
                                        <h4>{{$product->name}}</h4>
                                        <p>
                                            {{$product->description}}
                                        </p>
                                        <a class="read_more" href="{{$product->link}}">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                      @endforeach
                      <!-- One Third (1/3) Column -->
                </div>
              </div>
          </div>
          <div class="section" style="padding-top:80px; padding-bottom:40px; ">
              <div class="section_wrapper clearfix">
                  <div class="items_group clearfix">
                      <!-- One Second (1/2) Column -->
                      <div class="column one-second column_hover_box ">
                          <div class="hover_box">
                              <a href="#">
                                  <div class="hover_box_wrapper"><img class="visible_photo scale-with-grid" src="{{asset('images/home_agro_hoverbox_4.png')}}" alt="" width="576" height="641" /><img class="hidden_photo scale-with-grid" src="{{asset('images/home_agro_hoverbox_4.png')}}" alt="">
                                  </div>
                              </a>
                          </div>
                      </div>
                      <!-- One Second (1/2) Column -->
                      <div class="column one-second column_column ">
                          <div class="column_attr">
                              <hr class="no_line" style="margin: 0 auto 50px;" />

                              <h3>60+ YEARS OF TECQUIPMENT </h3>
                              <hr class="no_line hrmargin_b_25" />

                              <p>
                                Since 1979 Amtek Company, Inc. has provided educators with engineering, workforce and technical educational solutions and equipment in Maryland, Virginia, West Virginia, Delaware, and Washington D.C.
                              </p>

                              <hr class="no_line hrmargin_b_40" />

                              <hr class="no_line hrmargin_b_1" />

                              <div style="background: url({{asset('images/home_agro_sep.png')}}) repeat-x; height: 3px; margin-bottom: 30px;"></div>

                              <!-- One Second (1/2) Column -->
                              <div class="column one-second">
                                  <div class="list_item lists_2 clearfix">
                                      <div class="list_left list_icon">
                                          <i class="icon-chart-bar"></i>
                                      </div>
                                      <div class="list_right">
                                          <h4>Lifetime Support</h4>
                                          <div class="desc">
                                            Once an Multitech Engineering customer, always  a Multitech Engineering customer.
                                          </div>
                                      </div>
                                  </div>

                                  <hr class="no_line hrmargin_b_30" />

                                  <div class="list_item lists_2 clearfix">
                                      <div class="list_left list_icon">
                                          <i class="icon-podcast"></i>
                                      </div>
                                      <div class="list_right">
                                          <h4>We Invest in You</h4>
                                          <div class="desc">
                                            We want you to get the most out of your technology investments,
                                          </div>
                                      </div>
                                  </div>

                              </div>

                              <!-- One Second (1/2) Column -->
                              <div class="column one-second">
                                  <div class="list_item lists_2 clearfix">
                                      <div class="list_left list_icon">
                                          <i class="icon-shareable"></i>
                                      </div>
                                      <div class="list_right">
                                          <h4>Help from Start to Finish</h4>
                                          <div class="desc">
                                            We make ourselves available to you from the beginning to end to help you plan.
                                          </div>
                                      </div>
                                  </div>

                                  <hr class="no_line hrmargin_b_30" />

                                  <div class="list_item lists_2 clearfix">
                                      <div class="list_left list_icon">
                                          <i class="icon-stackoverflow"></i>
                                      </div>
                                      <div class="list_right">
                                          <h4>Areas Of Expertises</h4>
                                          <div class="desc">
                                            Multitech Engineering team is a skilled and experienced personnel, professional environment
                                          </div>
                                      </div>
                                  </div>

                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          {{-- <div class="section dark " style="padding-top:80px; padding-bottom:40px; background-color:#323c48; background-image:url({{asset('images/home_agro_section_bg1.jpg')}}); background-repeat:no-repeat; background-position:center top; background-attachment:fixed; background-size:cover; -webkit-background-size:cover" data-stellar-background-ratio="0.5">
              <div class="section_wrapper clearfix">
                  <div class="items_group clearfix">
                      <!-- One full width row-->
                      <div class="column one column_column ">
                          <div class="column_attr align_center">
                              <h3 style="color: #fff; margin: 0 5%;">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur adipisci velit, sed quia non numquam eius modi tempora incidunt ulabore et dolore magnam aliquam quaerat.</h3>
                              <hr class="no_line hrmargin_b_30" />

                              <div style="background: url({{asset('images/home_agro_sep3.png')}}) repeat-x; height: 3px; margin: 0 25%;"></div>
                          </div>
                      </div>
                      <!-- One full width row-->
                      <div class="column one column_faq ">
                          <div class="faq">
                              <div class="mfn-acc faq_wrapper ">
                                  <div class="question">
                                      <div class="title">
                                          <span class="num">1</span><i class="icon-plus acc-icon-plus"></i><i class="icon-minus acc-icon-minus"></i>Sed est elit posuere ac semper at hendrerit a neque. In viverra ipsum ac eros tristique dignissim?
                                      </div>
                                      <div class="answer">
                                          <div class="big">
                                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce velit tortor, dictum in gravida nec, aliquet non lorem.
                                          </div>
                                          <p>
                                              Donec vestibulum justo a diam ultricies pellentesque. Quisque mattis diam vel lacus tincidunt elementum. Sed vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra a, dapibus at dolor. In iaculis viverra neque, ac eleifend ante lobortis id. In viverra ipsum ac eros tristique dignissim. Donec aliquam velit vitae mi dictum.
                                          </p>
                                      </div>
                                  </div>
                                  <div class="question">
                                      <div class="title">
                                          <span class="num">2</span><i class="icon-plus acc-icon-plus"></i><i class="icon-minus acc-icon-minus"></i>Quisque mattis diam vel lacus tincidunt elementum. Sed vitae adipiscing turpis. Aenean ligula nibh, molestie?
                                      </div>
                                      <div class="answer">
                                          Lorem ipsum dolor sit amet tempor ac, laoreet feugiat. Proin id dui. Integer a placerat at, mollis nunc vel neque sollicitudin augue sit amet magna. Donec aliquam dictum quis, tincidunt molestie, neque nibh ultricies nec, aliquam purus. Fusce convallis non, facilisis sodales. Vivamus sem at augue. Nulla et magnis dis parturient montes, nascetur ridiculus mus. Vivamus justo.
                                      </div>
                                  </div>
                                  <div class="question">
                                      <div class="title">
                                          <span class="num">3</span><i class="icon-plus acc-icon-plus"></i><i class="icon-minus acc-icon-minus"></i>Sed vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra a, dapibus at dolor?
                                      </div>
                                      <div class="answer">
                                          Lorem ipsum dolor sit amet tempor ac, laoreet feugiat. Proin id dui. Integer a placerat at, mollis nunc vel neque sollicitudin augue sit amet magna. Donec aliquam dictum quis, tincidunt molestie, neque nibh ultricies nec, aliquam purus. Fusce convallis non, facilisis sodales. Vivamus sem at augue. Nulla et magnis dis parturient montes, nascetur ridiculus mus. Vivamus justo.
                                      </div>
                                  </div>
                                  <div class="question">
                                      <div class="title">
                                          <span class="num">4</span><i class="icon-plus acc-icon-plus"></i><i class="icon-minus acc-icon-minus"></i>Quisque mattis diam vel lacus tincidunt elementum. Sed vitae adipiscing turpis?
                                      </div>
                                      <div class="answer">
                                          <div class="big">
                                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce velit tortor, dictum in gravida nec, aliquet non lorem.
                                          </div>
                                          <p>
                                              Donec vestibulum justo a diam ultricies pellentesque. Quisque mattis diam vel lacus tincidunt elementum. Sed vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra a, dapibus at dolor. In iaculis viverra neque, ac eleifend ante lobortis id. In viverra ipsum ac eros tristique dignissim. Donec aliquam velit vitae mi dictum.
                                          </p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- One full width row-->
                      <div class="column one column_column ">
                          <div class="column_attr align_center">
                              <a style="color: #fff;" class="big read_more" href="#">Read more</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div> --}}
          <div class="section" style="padding-top:80px; padding-bottom:30px; ">
              <div class="section_wrapper clearfix">
                  <div class="items_group clearfix">
                      <!-- One Third (1/3) Column -->
                      <div class="column one-third column_column">
                          <div class="column_attr align_center">
                              <p class="hrmargin_b_7 themecolor">
                                  Etiam ullamcorper suspendis
                              </p>
                              <h4 style="color: #032c27; letter-spacing: 5px">FOR PARTNERS</h4>
                              <div class="image_frame no_link scale-with-grid alignnone no_border">
                                  <div class="image_wrapper"><img class="scale-with-grid" src="agro/images/home_agro_heading_icon2.png" alt="" width="27" height="24" />
                                  </div>
                              </div>

                              <hr class="no_line hrmargin_b_20" />

                              <a class="button button_theme button_js" href="#"><span class="button_label">Read more</span></a>
                          </div>
                      </div>
                      <!-- One Third (1/3) Column -->
                      <div class="column one-third column_column">
                          <div class="column_attr align_center">
                              <p class="hrmargin_b_7 themecolor">
                                  Quisque lorem tortor
                              </p>
                              <h4 style="color: #032c27; letter-spacing: 5px">FOR RETAILERS</h4>
                              <div class="image_frame no_link scale-with-grid alignnone no_border">
                                  <div class="image_wrapper"><img class="scale-with-grid" src="agro/images/home_agro_heading_icon2.png" alt="" width="27" height="24" />
                                  </div>
                              </div>

                              <hr class="no_line hrmargin_b_20" />

                              <a class="button button_theme button_js" href="#"><span class="button_label">Read more</span></a>
                          </div>
                      </div>
                      <!-- One Third (1/3) Column -->
                      <div class="column one-third column_column">
                          <div class="column_attr align_center">
                              <p class="hrmargin_b_7 themecolor">
                                  Integer ultrices posuere
                              </p>
                              <h4 style="color: #032c27; letter-spacing: 5px">SUPPORT CENTRE</h4>
                              <div class="image_frame no_link scale-with-grid alignnone no_border">
                                  <div class="image_wrapper"><img class="scale-with-grid" src="{{asset('images/home_agro_heading_icon2.png')}}" alt="" width="27" height="24" />
                                  </div>
                              </div>

                              <hr class="no_line hrmargin_b_20" />

                              <a class="button button_theme button_js" href="#"><span class="button_label">Read more</span></a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="section the_content no_content">
              <div class="section_wrapper">
                  <div class="the_content_wrapper"></div>
              </div>
          </div>
      </div>

  </div>

  <!-- .four-columns - sidebar -->

</div>
@endsection


@push('custom_js')
<script src="{{asset('plugins/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('plugins/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('plugins/rs-plugin/js/extensions/revolution.extension.video.min.js')}}"></script>
<script src="{{asset('plugins/rs-plugin/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('plugins/rs-plugin/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('plugins/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('plugins/rs-plugin/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('plugins/rs-plugin/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('plugins/rs-plugin/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('plugins/rs-plugin/js/extensions/revolution.extension.parallax.min.js')}}"></script>

<script>
    var tpj = jQuery;
    tpj.noConflict();
    var revapi1;
    tpj(document).ready(function() {
        if (tpj("#rev_slider_1_2").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_1_2");
        } else {
            revapi1 = tpj("#rev_slider_1_2").show().revolution({
                sliderType: "standard",
                sliderLayout: "fullscreen",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    onHoverStop: "on",
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    }
                },
                gridwidth: 1176,
                gridheight: 800,
                lazyType: "none",
                shadow: 0,
                spinner: "spinner3",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                fullScreenAlignForce: "off",
                fullScreenOffsetContainer: "#Action_bar, #Top_bar",
                fullScreenOffset: "",
                disableProgressBar: "on",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: "off",
                }
            });
        }
    });
    /*ready*/
</script>
@endpush