
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
        <span class="nav-link-text ms-1">Dashboard</span>
      </a>
    </li>
    @endif

    @if(@Auth::user()->role_as==0 || @Auth::user()->role_as==1 )
    <li class="nav-item">
      <a class="nav-link " href="{{ url('complaint') }}">
        <span class="nav-link-text ms-1">Complaint</span>
      </a>
    </li>
    @endif
    @if(@Auth::user()->role_as==1 )
    <li class="nav-item">
      <a class="nav-link " href="{{ url('Police-Station') }}">
        <span class="nav-link-text ms-1">Police Station</span>
      </a>
    </li>
    @endif
    @if(@Auth::user()->role_as==1 || @Auth::user()->role_as==1)
    <li class="nav-item">
      <a class="nav-link " href="{{ url('criminal') }}">
        <span class="nav-link-text ms-1">Criminal</span>
      </a>
    </li>
    @endif

    <li class="nav-item">
      <a class="nav-link " href="{{ url('Section') }}">
        <span class="nav-link-text ms-1">PENAL CODE & Section</span>
      </a>
    </li>
    

    <li class="nav-item">
      <a class="nav-link " href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <span class="nav-link-text ms-1">Log Out</span>
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
      </form>
    </li>
  </ul>
