<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>
  <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
    crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/e39677c136.js" crossorigin="anonymous"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js" />


  <link rel="stylesheet" href="css/layout.css">
  {{-- @vite(['resources/css/layout.css', 'resources/js/home.js']) --}}
</head>

<body>
  <!-- Header -->
  <header class="navbar navbar-expand-lg navbar-light fixed-top bg-transparent" id="header">
    <div class="container-fluid">
      <!-- Logo -->
      <a class="navbar-brand" href="{{ route('home') }}">
        <div class="icon-container">
          <i class="fa-regular fa-gem" id="icon"></i>
        </div>
      </a>

      <!-- Search Bar -->
      <form class="d-flex mx-auto my-auto">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
      </form>

      <!-- User Icon -->
      <div class="d-flex">
        <a class="cart-link" href="{{ url('cart') }}">
          <i class="fa-solid fa-cart-shopping"></i>
          Cart
        </a>
      </div>
      <div class="dropdown">
        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
          aria-expanded="false">
          <i class="fa-regular fa-circle-user" id="icon"></i>
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="#">Profile</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="{{ url('/') }}">Logout</a></li>
        </ul>
      </div>
    </div>
  </header>



  <!-- Main Content -->
  <main>
    @yield('content')
  </main>

  <!-- Footer -->
  <footer>
    <p>&copy; 2023 Shopping Page. All rights reserved.</p>
  </footer>

  <script src="js/layout.js"></script>

</body>

</html>
