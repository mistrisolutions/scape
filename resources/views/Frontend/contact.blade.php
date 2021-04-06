@extends('layouts.Frontend.app')
@section('title')
    Multi Tech  Engineering
@endsection
@push('subheader')
<div id="Subheader">
    <div class="container">
        <div class="column one">
            <h1 class="title">Contact and support</h1>
        </div>
    </div>
</div> 
@endpush
@section('content')
<div class="content_wrapper clearfix">
    <div class="sections_group">
        <div class="entry-content">
            <div class="section dark " style="padding-top:110px; padding-bottom:70px; background-image:url({{asset('images/support.jpg')}}); background-repeat:no-repeat; background-position:center top; background-attachment:fixed; background-size:cover; -webkit-background-size:cover" data-stellar-background-ratio="0.5">
                <div class="section-divider triangle down"></div>
                <div class="section_wrapper clearfix">
                    <div class="items_group clearfix">
                        <!-- One Sixth (1/6) Column -->
                        <div class="column one-sixth column_placeholder">
                            <div class="placeholder">
                                &nbsp;
                            </div>
                        </div>
                        <!-- Two Third (2/3) Column -->
                        <div class="column two-third column_column ">
                            <div class="column_attr align_center">
                                <h2>Want a FREE lab design and layout consultation?</h2>
                                <hr class="no_line hrmargin_b_40" />
                                <a class="button scroll button_large button_theme button_js" href="#form"><span class="button_label">Contact form</span></a>
                                <hr class="no_line hrmargin_b_40" />
                                <h3 style="color: #afb3be; font-style: italic;">or</h3>
                                <hr class="no_line hrmargin_b_30" />
                                <h3>Call us for help and support +23 120 230 340</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column one column_column ">
                <div class="column_attr">
                    <hr class="no_line hrmargin_b_20" />
                    <div style="background: url(images/home_agro_sep.png) repeat-x; height: 3px;"></div>
                </div>
            </div>
            <div class="section sections_style_0 ">
                <div class="section_wrapper clearfix">
                    <div class="items_group clearfix">
                        <!-- One Third (1/3) Column -->
                        <div class="column one-third column_column">
                            <div class="column_attr align_right">
                                <h2 class="themecolor" style="margin-right: 6%;">Multitech Engineering</h2>
                            </div>
                        </div>
                        <!-- Two Third (2/3) Column -->
                        <div class="column two-third column_accordion ">
                            <div class="accordion">
                                <div class="mfn-acc accordion_wrapper open1st">
                                    <div class="question">
                                        <div class="title">
                                            Our Address
                                        </div>
                                        <div class="answer">
                                                    <p>
                                                        Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.
                                                    </p>
                                                    <p class="hrmargin_b_5">
                                                        <a style="color: #616A6F;" href="#">+61 (0) 3 8376 6284</a>
                                                    </p>
                                                    <p>
                                                        <a style="color: #616A6F;" href="mailto:noreply@envato.com">noreply@envato.com</a>
                                                    </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- One full width row-->
                        <div class="column one column_column ">
                            <div class="column_attr">
                                <hr class="no_line hrmargin_b_20" />
                                <div style="background: url(images/home_agro_sep.png) repeat-x; height: 3px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section" id="form" style="padding-top:20px; padding-bottom:0px; ">
                <div class="section_wrapper clearfix">
                    <div class="items_group clearfix">
                        <!-- One full width row-->
                        <div class="column one column_column ">
                            <div class="column_attr align_center">
                                @if(session('success'))
                                    <h3>{{session('success')}}</h3>
                                @else
                                <h3>Send as a message via contact form</h3>
                                @endif
                            </div>
                        </div>
                        <!-- One Sixth (1/6) Column -->
                        <div class="column one-sixth column_placeholder">
                            <div class="placeholder">
                                &nbsp;
                            </div>
                        </div>
                        <!-- Two Third (2/3) Column -->
                        <div class="column two-third column_column ">
                            <div class="column_attr align_center">
                                <div id="contactWrapper">
                                    <form id="contactform" actions="{{route('contact.store')}}" method="POST">
                                        @csrf
                                        <!-- One Second (1/2) Column -->
                                        <div class="column one-second">
                                            <input required placeholder="Your name" type="text" name="name" id="name" size="40" aria-required="true" aria-invalid="false" />
                                        </div>
                                        <!-- One Second (1/2) Column -->
                                        <div class="column one-second">
                                            <input required placeholder="Your Phone" type="text" name="phone" id="phone" size="40" aria-required="true" aria-invalid="false" />
                                        </div>
                                        <div class="column one">
                                            <input required placeholder="Your e-mail" type="email" name="email" id="email" size="40" aria-required="true" aria-invalid="false" />
                                        </div>
                                        <div class="column one">
                                            <textarea required placeholder="Message" name="message" id="body" style="width:100%;" rows="10" aria-invalid="false"></textarea>
                                        </div>
                                        <div class="column one">
                                            <input  type="submit" value="Send A Message" id="submit">
                                        </div>
                                    </form>
                                </div>
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
</div>
@endsection
@push('custom_js')
<script src="http://maps.google.com/maps/api/js?sensor=false&ver=5.9"></script>

<script>
    function google_maps_563b55b92a3f5() {
        var latlng = new google.maps.LatLng(-33.8710, 151.2039);
        var draggable = true;
        var myOptions = {
            zoom: 13,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            styles: [{
                "featureType": "administrative",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#444444"
                }]
            }, {
                "featureType": "administrative.country",
                "elementType": "geometry",
                "stylers": [{
                    "visibility": "off"
                }, {
                    "hue": "#ff0000"
                }, {
                    "saturation": "94"
                }, {
                    "lightness": "88"
                }, {
                    "weight": "3.01"
                }, {
                    "invert_lightness": true
                }]
            }, {
                "featureType": "landscape",
                "elementType": "all",
                "stylers": [{
                    "color": "#f2f2f2"
                }]
            }, {
                "featureType": "poi",
                "elementType": "all",
                "stylers": [{
                    "visibility": "off"
                }]
            }, {
                "featureType": "road",
                "elementType": "all",
                "stylers": [{
                    "saturation": -100
                }, {
                    "lightness": 45
                }]
            }, {
                "featureType": "road.highway",
                "elementType": "all",
                "stylers": [{
                    "visibility": "simplified"
                }]
            }, {
                "featureType": "road.arterial",
                "elementType": "labels.icon",
                "stylers": [{
                    "visibility": "off"
                }]
            }, {
                "featureType": "transit",
                "elementType": "all",
                "stylers": [{
                    "visibility": "off"
                }]
            }, {
                "featureType": "water",
                "elementType": "all",
                "stylers": [{
                    "color": "#fff"
                }, {
                    "visibility": "on"
                }]
            }],
            draggable: draggable,
            zoomControl: true,
            mapTypeControl: false,
            streetViewControl: false,
            scrollwheel: false
        };
        var map = new google.maps.Map(document.getElementById("google-map-area-563b55b92a3f5"), myOptions);
        var marker = new google.maps.Marker({
            position: latlng,
            icon: "images/home_agro_pin.png",
            map: map
        });
    }


    jQuery(document).ready(function($) {
        google_maps_563b55b92a3f5();
    });
</script>

@endpush