<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('partials.head')
</head>
<body>
  <!-- Navbar -->
  <x-layouts.navbar.default></x-layouts.navbar.default>
  
  <!-- Main Content -->
  <main>
    {{ $slot }}
  </main>

  <!-- Scripts -->
  @include('partials.scripts')
</body>
</html>
