<x-layout title="Article">
        {{-- <div class="container">
        <div class="mt-4">
            <h1 class="title">{{ $article['title'] }}</h1>
            <h4 class="title">{{ $article['category'] }}</h4>
            <p>{{ $article['description'] }}</p>


        </div>
    </div> --}}
    <span>{{ $article->category->name }}</span>
    <h1 class="title">{{ $article->title }}</h1>

    <p>{{ $article->description }}</p>

    @if($article->image)
    <img class="img-fluid" src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}">
    @endif
    
    <a href="{{ route('articles') }}" class="btn btn-primary my-3">Indietro</a>

</x-layout>