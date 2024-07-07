<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website - @yield('title')</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
{{-- Navbar --}}

<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('home')}}">Master - @yield('navbar_logo')</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 mx-3">
          <li class="nav-item">
            <a class="nav-link {{request()->routeIs('home') ? 'active' : ''}}" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link {{request()->routeIs('contact') ? 'active' : ''}} " href="{{route('contact')}}">Contact</a>
          </li>
      </div>
    </div>
  </nav>

  {{-- Main Content Will Be appear Here --}}
  <main>
    @yield('content')
  </main>



  <footer>
    <div class="container-fluid">
  <div class="row text-center">
    <div class="col-md-6">
        <ul>
            <h3>Home</h3>
            <li><a href="{{route("home")}}">Home</a></li>
        </ul>
    </div>



    <div class="col-md-6">
        <ul>
            <h3>Contact</h3>
            <li><a href="{{route("contact")}}">Contact</a></li>
        </ul>
    </div>
  </div>
</div>
 
</footer>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>