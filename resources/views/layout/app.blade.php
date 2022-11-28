<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Social Media App</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid ml-5">
          <a class="navbar-brand" href="#">Social Media App</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarNavDropdown">
            <div class="d-flex">

            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('Dashboard')}}">Dashboard</a>
              </li>
              @auth
                  <a href="{{route('login')}}" class="p-2 nav-link">{{auth()->user()->name}}</a>
              @endauth
              @guest
              <li class="nav-item">
                <a class="nav-link " href="{{route('login')}}">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('register')}}">Register</a>
              </li>
              @endguest

            </ul>
        </div>

          </div>
        </div>
      </nav>
    {{-- dynamic content --}}
    {{-- name matra ho content --}}
    @yield('content')

</body>
</html>
