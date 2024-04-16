<x-layout title="Articoli">
    <h1 class="title" style="color: red">Articoli</h1>


    <div>
        @if($articles)
        @foreach($articles as $article)
            <x-card
                :categories="$article->categories"
                :title="$article->title"
                :description="$article->description"
                :route="route('article', $article)"
            />
        @endforeach
    @else
        <p>Non ci sono articoli disponibili</p>
    @endif
    </div>
        

        </div>
    </div>

</x-layout>