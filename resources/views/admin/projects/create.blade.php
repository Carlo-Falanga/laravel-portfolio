@extends("layouts.admin")

@section("content")
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0">Nuovo progetto</h1>
    <a href="{{ route('admin.projects.index') }}" class="btn btn-outline-secondary">Torna alla lista</a>
</div>

<form action="{{ route('admin.projects.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" name="title" id="title" class="form-control">
    </div>

    <div class="mb-3">
        <label for="category_id" class="form-label">Categoria</label>
        <select name="category_id" id="category_id" class="form-select">
            <option value="">Seleziona una categoria</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea name="description" id="description" rows="5" class="form-control"></textarea>
    </div>

    <div class="mb-3">
        <label for="technologies" class="form-label">Tecnologie</label>
        <select name="technologies[]" id="technologies" class="form-select" multiple>
            @foreach ($technologies as $technology)
                <option value="{{ $technology->id }}">{{ $technology->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="thumbnail" class="form-label">Thumbnail (URL)</label>
        <input type="text" name="thumbnail" id="thumbnail" class="form-control">
    </div>

    <div class="mb-3">
        <label for="repository_url" class="form-label">URL Repository</label>
        <input type="url" name="repository_url" id="repository_url" class="form-control">
    </div>

    <div class="mb-3">
        <label for="demo_url" class="form-label">URL Demo</label>
        <input type="url" name="demo_url" id="demo_url" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Salva</button>
</form>
@endsection
