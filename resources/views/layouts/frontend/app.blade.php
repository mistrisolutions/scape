<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        @yield('title')
    </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    @stack('css')
    <!-- Layout styles -->
   
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
  </head>
  <body>
    @yield('content')
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- End custom js for this page -->
    @stack('custom-scripts')
  </body>
</html>