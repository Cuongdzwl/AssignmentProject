<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="header">
  <div class="container-fluid">
    <!-- Logo -->
    <a class="navbar-brand" href="{{ route('home') }}">
      <div class="icon-container">
        <i class="fa-brands fa-pagelines fa-xl" style="color: #636363;"></i>
      </div>
    </a>

    <!-- Search Bar -->
    <form class="d-flex mx-auto my-auto">
      <input class="form-control border-none" type="search" placeholder="Search" aria-label="Search"
        style="border-radius: 0; border: 1px solid black">
      <button class="bg-black px-3" type="submit"><i class="fa-solid fa-magnifying-glass"
          style="color: white;"></i></button>
    </form>

    <!-- User Icon -->
    @if (Auth::check())
      <div class="flex">
        <a class="cart-link" href="{{ url('cart') }}">
          <i class="fa-solid fa-cart-shopping text-black"></i>
        </a>
      </div>

      <div>{{ Auth::user()->name }}</div>
      <div class="dropdown">
        <a href="" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
          aria-expanded="false">
          <i class="fa-regular fa-circle-user" id="icon"></i>
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
          <hr class="dropdown-divider">
          @role('admin')
            <li><a class="dropdown-item" href="#">Dashboard</a></li>
            <hr class="dropdown-divider">
          @endrole

          <li>
            <form class="mb-0" method="POST" action="{{ route('logout') }}">
              @csrf
              <a :href="route('logout')" class="dropdown-item"
                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                Log Out
              </a>
            </form>
          </li>
        </ul>
      </div>
    @else
      <ul class="nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link text-black" href="{{ route('login') }}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link bg-black text-white" href="{{ route('register') }}">Register</a>
        </li>
      </ul>
    @endif
  </div>
</nav>
