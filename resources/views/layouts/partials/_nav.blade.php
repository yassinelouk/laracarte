<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded" aria-label="Eleventh navbar example">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">{{ config('app.name') }}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample09">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item ">
            <a class="nav-link active" aria-current="page" href="{{ route('home_path') }}">Home</a>
          </li>
          <li class="nav-item" >
            <a class="nav-link" href="{{ route('about_path') }}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link ">Artisan</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown09" data-bs-toggle="dropdown" aria-expanded="false">Planet</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown09">
              <li><a class="dropdown-item" href="https://laravel.com/">Laravel.com</a></li>
              <li><a class="dropdown-item" href="https://laravel.io/">Laravel.io</a></li>
              <li><a class="dropdown-item" href="https://laracasts.com/">Laracasts</a></li>
              <li><a class="dropdown-item" href="https://laravel-news.com/">Laravel News</a></li>
              <li><a class="dropdown-item" href="https://larachat.com/">Larachat</a></li>

            </ul>
          </li>

          <li class="nav-item">
              <a class="nav-link" href="{{ route('contact_path') }}">Contact</a>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a class="dropdown-item" href="#" style="color: white">Login</a></li>
              <li><a class="dropdown-item" href="#" style="color: white">Register</a></li>
        </ul>
      </div>
  </nav>
