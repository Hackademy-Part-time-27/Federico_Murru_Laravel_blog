<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Articoli</title>
    <link rel="stylesheet" href="{{ asset('/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-sm">
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


        <div class="container">
        <div class="mt-4">
            <h1 class="title">{{ $article['title'] }}</h1>
            <h4 class="title">{{ $article['category'] }}</h4>
            <p>{{ $article['description'] }}</p>

     <a href="{{ route('articles') }}" class="btn btn-primary mb-3">Indietro</a>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>