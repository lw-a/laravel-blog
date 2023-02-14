<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Blog')</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
  </head>
  <body>
    <ul class="nav">
      <li><a class="{{ request()->routeIS('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
      <li><a class="{{ request()->routeIS('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a></li>
      <li><a class="{{ request()->routeIS('posts.create') ? 'active' : '' }}" href="{{ route('posts.create') }}">Post</a></li>

    </ul>

    <div class="main">
    @yield('content')
    </div>
  </body>
</html>
