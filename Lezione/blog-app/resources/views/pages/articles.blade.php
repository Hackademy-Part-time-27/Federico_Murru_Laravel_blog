<x-layout title="Articoli">

        <div class="container">
            <h1>{{$title}}</h1>
            @if($articles)
            @foreach($articles as $index => $article)
                @if($article['visible'])
                <x-card
                :category="$article['category']"
                :title="$article['title']"
                :description="$article['description']"
                :index="$index"
                :route="route('article', $index)"
                />
                @endif
            @endforeach
        @else
            <p>Non ci sono articoli disponibili</p>
        @endif
    </div>
        

        </div>
    </div>


</x-layout>