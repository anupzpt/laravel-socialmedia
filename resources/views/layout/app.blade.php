<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Social Media App</title>
    @vite(['resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav class="navbar navbar-expand-lg text-white navbar-light" style="background-color: #b9ddf8;">
        <div class="container-fluid ml-5">
          <a class="navbar-brand" href="#">Social Media App</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarNavDropdown">
            <div class="container d-flex justify-content-end">

            <ul class="navbar-nav text-white">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('Dashboard')}}">Dashboard</a>
              </li>
              @auth
                  <a href="{{route('login')}}" class="p-2 nav-link">{{auth()->user()->name}}</a>
                 <a class="btn btn-danger" href="{{route('logout')}}" role="button">LogOut</a>

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
    @include('sweetalert::alert')
</body>
</html>
