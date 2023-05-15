
<div class="sidenav-header">
  <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
  <a class="navbar-brand m-0" style="    display: flex; justify-content: center;" href="{{ url('/') }}">
    <img style="width: 50% !important" src="{{asset('assets/img/logo.png')}}" class="navbar-brand-img h-100" alt="main_logo">    
  </a>
</div>
<hr class="horizontal dark mt-5">
<div class="collapse navbar-collapse w-auto ps ps--active-y" id="sidenav-collapse-main">
  <ul class="navbar-nav">
    @if(@Auth::user()->role_as==1)
    <li class="nav-item">
      <a class="nav-link" href="{{ url('/') }}">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
          <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">Dashboard</span>
      </a>
    </li>
    @endif

    @if(@Auth::user()->role_as==0 || @Auth::user()->role_as==1 )
    <li class="nav-item">
      <a class="nav-link " href="{{ url('complaint') }}">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
          <img src="{{asset('assets/img/complaint.png')}}">
        </div>
        <span class="nav-link-text ms-1">Complaint</span>
      </a>
    </li>
    @endif
    @if(@Auth::user()->role_as==1)
    <li class="nav-item">
      <a class="nav-link " href="{{ url('Police-Station') }}">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
          <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">Police Station</span>
      </a>
    </li>
    @endif
    

    <li class="nav-item">
      <a class="nav-link " href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
          <i class="ni ni-collection text-info text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">Log Out</span>
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
      </form>
    </li>
  </ul>
