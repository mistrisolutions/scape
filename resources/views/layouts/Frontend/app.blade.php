<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7 "> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>

    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="agro/images/favicon.ico">

    <!-- FONTS -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato:100,100italic,300,400,400italic,500,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Droid+Serif:100,300,400,400italic,500,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Exo:100,300,400,400italic,500,700'>

    <!-- CSS -->
    <link rel='stylesheet' href='{{asset("css/global.css")}}'>
    <link rel='stylesheet' href='{{asset("css/structure.css")}}'>
    <link rel='stylesheet' href='{{asset("css/agro.css")}}'>
    <link rel='stylesheet' href='{{asset("css/custom.css")}}'>


    <!-- Revolution Slider -->
    <link rel="stylesheet" href="{{asset('plugins/rs-plugin/css/settings.css')}}">

</head>

<body class="home template-slider style-simple layout-full-width mobile-tb-left no-content-padding header-classic minimalist-header sticky-header sticky-white ab-show subheader-both-center menu-arrow-bottom menuo-right menuo-no-borders footer-copy-center">

    <!-- Main Theme Wrapper -->
    <div id="Wrapper">

        <!-- Header Wrapper -->
        
      @include('layouts.Frontend.Partials.header')
        <!-- #Content -->
        <!-- Main Content -->
        <div id="Content">
            @yield('content')
        </div>

        <!-- #Footer -->
        @include('layouts.Frontend.Partials.footer')
        <!-- Footer-->
        

    </div>
    <!-- #Wrapper -->

    <!-- JS -->
    <script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>

    <script src="{{asset('js/mfn.menu.js')}}"></script>
    <script src="{{asset('js/jquery.plugins.js')}}"></script>
    <script src="{{asset('js/jquery.jplayer.min.js')}}"></script>
    <script src="{{asset('js/animations/animations.js')}}"></script>
    <script src="{{asset('js/scripts.js')}}"></script>
    @stack('custom_js')
    
    <script>
        //<![CDATA[
        jQuery(window).load(function() {
            var retina = window.devicePixelRatio > 1 ? true : false;
            if (retina) {
                var retinaEl = jQuery("#logo img.logo-main");
                var retinaLogoW = retinaEl.width();
                var retinaLogoH = retinaEl.height();
                retinaEl.attr("src", "{{asset('images/retina-agro.png')}}").width(retinaLogoW).height(retinaLogoH);
                var stickyEl = jQuery("#logo img.logo-sticky");
                var stickyLogoW = stickyEl.width();
                var stickyLogoH = stickyEl.height();
                stickyEl.attr("src", "{{asset('images/retina-agro.png')}}").width(stickyLogoW).height(stickyLogoH);
            }
        });
        //]]>
    </script>

    <script>
        const tar=document.getElementById('date')
        tar.innerText=new Date().getFullYear()
    </script>

</body>

</html>