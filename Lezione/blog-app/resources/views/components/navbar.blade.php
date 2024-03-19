<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<nav class="navbar navbar-expand-sm bg-body-warning">
    <div class="container-fluid">
        <a class="nav-link active py-2 px-3" aria-current="page" href="{{ route('welcome') }}">
           <img class="me-2 img-thumbnail" src="{{ asset('img/logos.png') }}" alt="{{ config('app.name') }}" style="max-width: 40px; max-height: auto;">

           
           <strong>{{ config('app.name') }}</strong></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link py-2 px-3" style=""; href="{{ route('articles') }}">Articoli</a>
                <a class="nav-link py-2 px-3" href="{{ route('about') }}">Chi Sono</a>
                <a class="nav-link py-2 px-3" aria-current="page" href="{{ route('contacts') }}">Contatti</a>
            </div>
    </div>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle nav-link py-2 px-3 mt-1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
            </ul>
          </li>
    </ul>
    </div>
</div>
</nav>



<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>