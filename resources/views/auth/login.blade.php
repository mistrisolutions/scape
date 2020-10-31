<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
      Admin Login
    </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    @stack('css')
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/style2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
   
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="index.html"><img src="@if(isset($shop)){{ Storage::url($shop->logo )}} @elseif(isset($order)){{ Storage::url($order->shopOwner->logo )}}@else {{ asset('assets/images/logo.png') }} @endif" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="@if(isset($shop)){{ Storage::url($shop->logo )}} @elseif(isset($order)){{ Storage::url($order->shopOwner->logo )}}@else {{ asset('assets/images/logo-mini.svg') }} @endif" alt="logo" /></a>
        </div>
    
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item">
            <!-- <form class="form-inline" action="" method="POST">
            <div class="form-group mx-sm-3 mb-2" >
              
                <input type="number" name="order_id" placeholder="Enter you order No" class="form-control @error('order_id')is-invalid @enderror">
            </div>
            <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </form> -->
            </li>
          </ul>
        </div>
    </nav>
      <!-- partial -->
      <div class="login-content-area">
        <div class="container-scroller">
              <div class="container-fluid page-body-wrapper full-page-wrapper">
                <div class="content-wrapper d-flex align-items-center auth">
                  <div class="row flex-grow px-4">
                    <div class="col-lg-4 col-md-6 mx-auto fastfly-content-area">
                      <h2>Scape Engineers </h2>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis totam, tenetur eveniet ea natus laboriosam velit a consequuntur necessitatibus, consequatur recusandae. Impedit enim rerum non, assumenda quasi aperiam architecto distinctio?</p>
                    </div>
                    <div class="col-lg-4 col-md-6 mx-auto">
                      <div class="auth-form-light text-left p-5">
                        <h4>Hello! let's get started</h4>
                        <h6 class="font-weight-light">Sign in to continue.</h6>
                        <form class="pt-3"  method="POST" action="{{ route('login') }}">
                            @csrf
                          <div class="form-group">
                            <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus id="exampleInputEmail1" placeholder="Email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                          <div class="form-group">
                            <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" id="exampleInputPassword1" placeholder="Password" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                          <div class="mt-3">
                            <button class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                          </div>                
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- content-wrapper ends -->
              </div>
              <!-- page-body-wrapper ends -->
            </div>
        </div>
    </div>
        
    <!-- container-scroller -->
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
    <script src="{{ asset('assets/vendors/inputmask/jquery.inputmask.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/inputmask.js') }}"></script>
    <!-- End custom js for this page -->
    @stack('custom-scripts')
  </body>
</html>

