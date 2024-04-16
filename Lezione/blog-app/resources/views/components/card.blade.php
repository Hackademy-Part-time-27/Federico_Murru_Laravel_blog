<article class="card mb-2">
    <div class="card-body">
        @foreach($categories as $category)
        <span>{{ $category->name }}</span>
        @endforeach
        <h4>{{ $title }}</h4>
        <p>{{ $description }}</p>
        <div class="text-end"> 
            <a class="" href="{{ $route }}">Read more...</a>
        </div>
    </div>
</article>