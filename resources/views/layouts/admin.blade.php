<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <title>Dashboard</title>
  </head>
  <body>
<!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Hoşgeldiniz {{ Auth::user()->name . " " . Auth::user()->surname }}</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('/') }}">Home
                  <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('admin/posts') }}">Posts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('admin/departments') }}">Departments</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('admin/workers') }}">Workers</a>
          </li>
          @if(Auth::user()->hasRole('Admin'))
          <li class="nav-item">
            <a class="nav-link" href="{{ url('admin/managers') }}">Managers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('admin/roles') }}">Roles</a>
          </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>
  <div class="container mt-5">
    @yield('content')
  </div>

  </body>
</html>