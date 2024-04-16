<x-layout title="Create Articles">

    <div class="row">
        <div class="col-lg-6 mx-auto">
          
<h1>Create your Articles</h1>

  <a href="{{ route('articles.index') }}" class="small text-secondary">Back</a>
    
<x-success />

{{--
@if($errors->any())
<ul class="alert alert-danger">
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif
--}}
<div class="mt-5">
    <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row g-3">
            <div class="col-12">
                <label for="title">Title</label>
                <input type="text" name="title" id="title"
                    class="form-control @error('title') is-invalid @enderror" maxlength="150" value="{{ old('title') }}">
                @error('title') <span class="text-danger small fw-bold">{{ $message }}</span> @enderror
            </div>
            <div class="col-12">
                <label for="categories">Category</label>
                @foreach($categories as $category)
                <div class="form-check">
                    <input class="form-check-input" name="categories[]" type="checkbox" value="{{ $category->id }}">
                    <label class="form-check-label" for="flexCheckDefault">
                        {{ $category->name }}
                    </label>
                </div>
                @endforeach
                @error('categories') <span class="text-danger small fw-bold">{{ $message }}</span> @enderror
            </div>
            <div class="col-12">
                <label for="description">Description</label>
                <textarea name="description" id="description"
                    class="form-control @error('description') is-invalid @enderror"
                    rows="5" maxlength="255">{{ old('description') }}</textarea>
                @error('description') <span class="text-danger small fw-bold">{{ $message }}</span> @enderror
            </div>
            <div class="col-12">
                <label for="image">Image</label>
                <input type="file" name="image" id="image"
                    class="form-control @error('image') is-invalid @enderror">
                @error('image') <span class="text-danger small fw-bold">{{ $message }}</span> @enderror
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </div>
    </form>
</div>
</div>
</div>
</x-layout>