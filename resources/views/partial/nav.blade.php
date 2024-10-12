<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
@guest
      
      <li class="nav-item active">
        <a class="nav-link font-weight-bold" href="/login">Login</a>
      </li>

      <li class="nav-item active">
        <a class="nav-link font-weight-bold" href="/register">Register</a>
      </li>
      
@endguest
      

@auth
    
      <li class="nav-item active">
              
        <a class="nav-link font-weight-bold text-danger" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
        Log-Out
      </a>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
      </form>
      </li>

@endauth
      
      

    </ul>

    <!-- Right navbar links -->

</nav>