
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Movies Manager</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">    

    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">

    <!-- Bootstrap core CSS -->
    {!! Html::style('https://blackrockdigital.github.io/startbootstrap-shop-homepage/vendor/bootstrap/css/bootstrap.min.css') !!}
    {!! Html::style('https://blackrockdigital.github.io/startbootstrap-shop-homepage/css/shop-homepage.css') !!}
    {!! Html::style('css/movies.css') !!}
    @yield('styles')
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Movies Manager</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div id="fade">
      <div class="container">
        @yield('content')
      </div>
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    {!! Html::script('https://blackrockdigital.github.io/startbootstrap-shop-homepage/vendor/jquery/jquery.min.js') !!}
    {!! Html::script('https://blackrockdigital.github.io/startbootstrap-shop-homepage/vendor/bootstrap/js/bootstrap.bundle.min.js') !!}
    @yield('scripts')
  </body>
</html>
