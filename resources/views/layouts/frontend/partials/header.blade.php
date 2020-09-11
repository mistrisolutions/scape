<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
      <a class="navbar-brand brand-logo" href="index.html"><img src="{{ asset('assets/images/logo.svg') }}" alt="logo" /></a>
      <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{ asset('assets/images/logo-mini.svg') }}" alt="logo" /></a>
    </div>

    <div class="navbar-menu-wrapper d-flex align-items-stretch">
      <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item">
            <p class="mb-1 text-black">Tracking No: </p>
        </li>
        <li class="nav-item">
        <!-- <form class="form-inline" action="" method="POST">
        <div class="form-group mx-sm-3 mb-2" >
          
            <input type="number" name="order_id" placeholder="Enter you order No" class="form-control @error('order_id')is-invalid @enderror">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Submit</button>
        </form> -->
        <form class="form-inline" action="{{ route('shop.order.tracking') }}">
          <div class="input-group input-group-sm">
            <input type="text" class="form-control" placeholder="Enter you order No"  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="orderid">
            <div class="input-group-prepend">
            <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </div>
          </div>
        </form>
        </li>
      </ul>
    </div>
</nav>