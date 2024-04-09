<x-layout title="Articoli">
    <h1 class="title" style="color: red">Articoli</h1>


        <div class="container">
            @if($articles)
            @foreach($articles as $index => $article)
                @if($article['visible'])
                
                <x-card
                :category="$article->category"
                :title="$article->title"
                :description="$article->description"
                :route="route('article', $article)"
                
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