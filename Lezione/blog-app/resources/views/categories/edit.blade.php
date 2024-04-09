<x-layout title="Modifica Categoria">
    <a href="{{ route('categories.index') }}" class="text-secondary">indietro</a>
    <h1>Modifica Categoria</h1>

    <x-success />

    <form action="{{ route('categories.update', $category) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row g-3">
            <div class="col-12">
                <label for="name">Nome</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $category->name) }}">
                @error('name') <span class="small text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Modifica</button>
            </div>
        </div>
    </form>
</x-layout>