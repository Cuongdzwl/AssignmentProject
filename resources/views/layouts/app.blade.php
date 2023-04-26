<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="token" content="{{Session::get('access_token')}}">
    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css" />
    {{-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js" /> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite(['/resources/js/data/addtoCart.js'])
    <script src="https://kit.fontawesome.com/e39677c136.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>

</head>

<body class="font-sans antialiased">
  <div class="bg-gray-100">
    @include('layouts.navigation')

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>


    @include('layouts.components.footer')
  </div>
  <script>
    $(document).ready(function() {
    // show search results on click of search input
    $('#search').on('click', function() {
      $('#results').show();
    });

    // hide search results when clicked outside of search input or results div
    $(document).on('click', function(e) {
      if (!$(e.target).closest('#search, #results').length) {
        $('#results').hide();
      }
    });
  });
  </script>
</body>

</html>
