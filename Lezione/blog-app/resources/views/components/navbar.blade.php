<nav class="navbar navbar-expand-sm bg-body-warning">
    <div class="container-fluid">
        <a class="nav-link active py-2 px-3" aria-current="page" href="{{ route('welcome') }}">Home</a>
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
    </div>
</nav>