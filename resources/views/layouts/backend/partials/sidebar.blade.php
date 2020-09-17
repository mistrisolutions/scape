<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
          <div class="nav-profile-image">
            <img src="{{ Storage::url(auth()->user()->profile->avatar) }}" alt="profile">
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
      <li class="nav-item {{ Request::routeIs('app.home') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('app.home') }}">
          <span class="menu-title">Dashboard</span>
          <i class="mdi mdi-view-dashboard menu-icon"></i>
        </a>
      </li>
      @can('view-any',App\Models\Order::class)
      <li class="nav-item {{ Request::routeIs('app.orders.index') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('app.orders.index') }}">
          <span class="menu-title">All orders</span>
          <i class="mdi mdi-view-list menu-icon"></i>
        </a>
      </li>
      @endcan
      @can('view-any',App\Models\User::class)
      <li class="nav-item {{ Request::routeIs('app.users.index') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('app.users.index') }}">
          <span class="menu-title">Users</span>
          <i class="mdi mdi-account-multiple menu-icon"></i>
        </a>
      </li>
      @endcan
      @can('view-any',App\Models\ShopOwner::class)
      <li class="nav-item {{ Request::routeIs('app.shoOwners.index') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('app.shopOwners.index') }}">
          <span class="menu-title">Shop owners</span>
          <i class="mdi mdi mdi-account-convert menu-icon"></i>
        </a>
      </li>
      @endcan
      @if(auth()->user()->isSuperAdmin())
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#settings" aria-expanded="false" aria-controls="general-pages">
          <span class="menu-title">Settings</span>
          <i class="menu-arrow"></i>
          <i class="mdi mdi-settings-box menu-icon"></i>
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