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
      @auth
      <li><a class="{{ request()->routeIS('posts.create') ? 'active' : '' }}" href="{{ route('posts.create') }}">Post</a></li>
      <li><a href="{{ route('logout') }}">Logout</a></li>
      <li><p>Logged in as <b>{{ Auth::user()->name }}</b></p></li>
      @else
      <li><a class="{{ request()->routeIS('register') ? 'active' : '' }}" href="{{ route('register') }}">Register</a></li>
      <li><a class="{{ request()->routeIS('login') ? 'active' : '' }}" href="{{ route('login') }}">Login</a></li>
      @endauth
    </ul>

    @if (session('success'))
    <div class="flash-success">
      {{ session('success') }}
    </div>
    @endif

    @includeWhen($errors->any(), '_errors')

    <div class="main">
    @yield('content')
    </div>
  </body>
</html>
