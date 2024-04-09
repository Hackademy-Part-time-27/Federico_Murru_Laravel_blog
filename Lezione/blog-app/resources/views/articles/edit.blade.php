<x-layout title="Modifica Categoria">
    <a href="{{ route('categories.index') }}" class="text-secondary">indietro</a>
    <h1>Modifica Articoli</h1>

    <x-success />

    <form action="{{ route('articles.update', $article) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row g-3">
            <div class="col-12">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title"
                                class="form-control @error('title') is-invalid @enderror" maxlength="150" value="{{ old('title') }}">
                            @error('title') <span class="text-danger small fw-bold">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-12">
                            <label for="article">Category</label>
                            <input type="text" name="title" id="title"
                                class="form-control @error('category') is-invalid @enderror" maxlength="150" value="{{ old('category') }}">
                            @error('category') <span class="text-danger small fw-bold">{{ $message }}</span> @enderror
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
                <button type="submit" class="btn btn-primary">Modifica</button>
            </div>
        </div>
    </form>
</x-layout>