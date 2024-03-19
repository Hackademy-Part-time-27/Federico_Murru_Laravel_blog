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