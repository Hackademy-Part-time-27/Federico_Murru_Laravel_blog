<nav class="navbar navbar-expand-sm bg-warning">
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
              <li><a class="dropdown-item" href={{route('articles.index')}}>Manage Articles</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
            </ul>
          </li>
    </ul>
    </div>
</div>
</nav>