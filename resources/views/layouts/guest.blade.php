<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/welcome.css">
  <!-- Scripts -->
  <script src="https://kit.fontawesome.com/e39677c136.js" crossorigin="anonymous"></script>
  @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans text-gray-900 antialiased">
  <div class="-z-20" id="blob"></div>
  <div class="-z-10" id="blur"></div>
  <div class="flex min-h-screen flex-col items-center pt-6 sm:justify-center sm:pt-0">

    <a href="/">
      <i class="fa-brands fa-pagelines fa-2xl text-slate-50"></i>
    </a>

    <div class="mt-6 w-full overflow-hidden bg-white px-6 py-4 shadow-md sm:max-w-md sm:rounded-lg">
      {{ $slot }}
    </div>

    <script src="{{ asset('js/guest.js') }}"></script>
</body>

</html>
