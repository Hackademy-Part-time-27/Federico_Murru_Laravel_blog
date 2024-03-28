<x-layout title="Article">
        {{-- <div class="container">
        <div class="mt-4">
            <h1 class="title">{{ $article['title'] }}</h1>
            <h4 class="title">{{ $article['category'] }}</h4>
            <p>{{ $article['description'] }}</p>


        </div>
    </div> --}}

    <h1 class="title">{{ $article->title }}</h1>

    <p>{{ $article->description }}</p>
    
    <a href="{{ route('articles') }}" class="btn btn-primary mb-3">Indietro</a>

</x-layout>