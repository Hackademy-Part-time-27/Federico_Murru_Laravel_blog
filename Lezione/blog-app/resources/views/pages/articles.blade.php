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
    <x-navbar/>

        <div class="container">

            <h1>{{$title}}</h1>
    
        <div>
            @if($articles)
            @if(count($articles) > 0)
                @foreach($articles as $index => $article)
                    @if($article['visible'])
                        <article class="card mb-3">
                            <div class="card-body">
                                <h4>{{$article['title']}}</h4>
                                <span>{{$article['category']}}</span>
                                <p>{{$article['description']}}</p>
                                <div class="text-end">
                                    <a class="stretched-link" href="{{ route('article', $index) }}">Read more...</a>
                                </div>
                            </div>
                        </article>
                    @endif
                @endforeach
            @else
                <p>Non ci sono articoli disponibili</p>
            @endif
        @endif
        

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>