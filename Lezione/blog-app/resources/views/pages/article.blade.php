<x-layout title="Article">
        {{-- <div class="container">
        <div class="mt-4">
            <h1 class="title">{{ $article['title'] }}</h1>
            <h4 class="title">{{ $article['category'] }}</h4>
            <p>{{ $article['description'] }}</p>


        </div>
    </div> --}}
    @foreach($article->categories as $category)
    <span>{{ $category->name }}</span>
    @endforeach
    <h1 class="title">{{ $article->title }}</h1>

    {{-- <div class="my-3">
        Autore: {{ $article->user->name }} 
    </div> --}}

    <p>{{ $article->description }}</p>

    @if($article->image)
    <img class="img-fluid" src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}">
    @endif
    
    <a href="{{ route('articles') }}" class="btn btn-primary my-3">Indietro</a>

</x-layout>