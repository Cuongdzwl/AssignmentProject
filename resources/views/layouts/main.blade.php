<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shopping Page</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <!-- Header -->
  <header>
    <div class="logo">
      <a href="{{ route('home') }}">Shopping Page</a>
    </div>
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Shop</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
  </header>

  <!-- Main Content -->
  <main>
    @yield('content')
  </main>

  <!-- Footer -->
  <footer>
    <p>&copy; 2023 Shopping Page. All rights reserved.</p>
  </footer>
</body>

</html>
