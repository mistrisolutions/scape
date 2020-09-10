<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    @stack('css')
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
  </head>
  <body class="horizontal-menu horizontal-menu-full-width">
   
  <div id="app" class="container-scroller">
    <nav class="navbar horizontal-full-width-layout-navbar fixed-top navbar-expand-lg">
        @include('layouts.backend.partials.navbar')
    </nav>

    <div class="container-fluid page-body-wrapper">
      <div class="apps-main-panel">
          <div class="content-wrapper">
              @yield('content')
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
        @include('layouts.backend.partials.footer')
      <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
<!-- container-scroller -->

<!-- Scripts -->
   <!-- plugins:js -->
   <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
   <!-- endinject -->
   <!-- Plugin js for this page -->
   <script src="{{ asset('assets/vendors/chart.js/Chart.min.js') }}"></script>
   <!-- End plugin js for this page -->
   <!-- inject:js -->
   <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
   <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
   <script src="{{ asset('assets/js/misc.js') }}"></script>
   <!-- endinject -->
   <!-- Custom js for this page -->
   <script src="{{ asset('assets/js/dashboard.js') }}"></script>
   <script src="{{ asset('assets/js/todolist.js') }}"></script>
   <script src="{{ asset('assets/js/custom.js') }}"></script>
   <!-- End custom js for this page -->
   
  </body>
</html>