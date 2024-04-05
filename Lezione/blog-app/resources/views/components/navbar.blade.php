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
                <a class="nav-link py-2" style=""; href="{{ route('articles') }}">Articoli</a>
                <a class="nav-link py-2" href="{{ route('about') }}">Chi Sono</a>
                <a class="nav-link py-2" aria-current="page" href="{{ route('contacts') }}">Contatti</a>
            </div>
    </div>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
   
   
      <ul class="navbar-nav ms-auto mb-lg-0">
        @auth
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ auth()->user()->email }}
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="{{ route('articles.index') }}">Gestione Articoli</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item">Esci</button>
                  </form>
                </li>
              </ul>
          </li>
        @else
        <li class="nav-item">
          <a class="nav-link" href="/register">Registrati</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/login">Accedi</a>
        </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>



