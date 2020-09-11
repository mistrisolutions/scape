<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
          <div class="nav-profile-image">
            <img src="{{ asset(auth()->user()->profile->avatar) }}" alt="profile">
            <span class="login-status online"></span>
            <!--change to offline or busy as needed-->
          </div>
          <div class="nav-profile-text d-flex flex-column">
            <span class="font-weight-bold mb-2">{{ auth()->user()->name }}</span>
            <span class="text-secondary text-small">{{ auth()->user()->role->title }}</span>
          </div>
          <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#dashboard" aria-expanded="false" aria-controls="general-pages">
          <span class="menu-title">Dashboard</span>
          <i class="menu-arrow"></i>
          <i class="mdi mdi-medical-bag menu-icon"></i>
        </a>
        <div class="collapse" id="dashboard">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('app.home') }}">Dashboard</a></li>
          </ul>
        </div>
      </li>
      @can('view-any',App\Models\Order::class)
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#orders" aria-expanded="false" aria-controls="general-pages">
          <span class="menu-title">Orders</span>
          <i class="menu-arrow"></i>
          <i class="mdi mdi-medical-bag menu-icon"></i>
        </a>
        <div class="collapse" id="orders">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('app.orders.index') }}">All Orders</a></li>
          </ul>
        </div>
      </li>
      @endcan
      @can('view-any',App\Models\User::class)
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#user" aria-expanded="false" aria-controls="general-pages">
          <span class="menu-title">Users</span>
          <i class="menu-arrow"></i>
          <i class="mdi mdi-medical-bag menu-icon"></i>
        </a>
        <div class="collapse" id="user">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('app.users.index') }}">Users List</a></li>
          </ul>
        </div>
      </li>
      @endcan
      @can('view-any',App\Models\ShopOwner::class)
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#owner" aria-expanded="false" aria-controls="general-pages">
          <span class="menu-title">Shop Owner</span>
          <i class="menu-arrow"></i>
          <i class="mdi mdi-medical-bag menu-icon"></i>
        </a>
        <div class="collapse" id="owner">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('app.shopOwners.index') }}">Shop Owners</a></li>
          </ul>
        </div>
      </li>
      @endcan
      @if(auth()->user()->isSuperAdmin())
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#settings" aria-expanded="false" aria-controls="general-pages">
          <span class="menu-title">Settings</span>
          <i class="menu-arrow"></i>
          <i class="mdi mdi-medical-bag menu-icon"></i>
        </a>
        <div class="collapse" id="settings">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('app.settings.role.index') }}"> User Roles </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('app.settings.statuss.index') }}"> Status Type </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('app.settings.paymentMethods.index') }}"> Payment Methods </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('app.settings.zones.index') }}"> Zones</a></li>
          </ul>
        </div>
      </li>
      @endif
    </ul>
  </nav>