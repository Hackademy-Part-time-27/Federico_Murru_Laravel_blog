<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
</head>
<body>

    <nav class="nav">
        <a class="nav-link" href="{{ route('welcome') }}">Home</a>
        <a class="nav-link" href="{{ route('articles') }}">Articles</a>
        <a class="nav-link" href="{{ route('about') }}">Chi Sono</a>
        <a class="nav-link" href="{{ route('contacts') }}">Contatti</a>
    </nav>

    <h1>{{$title}}</h1>
    
    <p>{{$description}}</p>
</body>
</html>