@extends("layouts.admin")

@section("content")
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0">Modifica il progetto</h1>
    <a href="{{ route('admin.projects.index') }}" class="btn btn-outline-secondary">Torna alla lista</a>
</div>

<form action="{{ route('admin.projects.update', $project) }}" method="POST">
    @csrf
    @method("PUT")

    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" name="title" id="title" class="form-control" value="{{ $project->title }}">
    </div>

    <div class="mb-3">
        <label for="category" class="form-label">Categoria</label>
        <select name="category" id="category" class="form-select">
            <option value="front end" @selected($project->category === 'front end')>Front end</option>
            <option value="back end" @selected($project->category === 'back end')>Back end</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea name="description" id="description" rows="5" class="form-control">{{ $project->description }}</textarea>
    </div>

    <div class="mb-3">
        <label for="technologies" class="form-label">Tecnologie</label>
        <input type="text" name="technologies" id="technologies" class="form-control" placeholder="Es. Laravel, Vue, MySQL" value="{{ $project->technologies }}">
    </div>

    <div class="mb-3">
        <label for="thumbnail" class="form-label">Thumbnail (URL)</label>
        <input type="text" name="thumbnail" id="thumbnail" class="form-control" value="{{ $project->thumbnail }}">
    </div>

    <div class="mb-3">
        <label for="repository_url" class="form-label">URL Repository</label>
        <input type="url" name="repository_url" id="repository_url" class="form-control" value="{{ $project->repository_url }}">
    </div>

    <div class="mb-3">
        <label for="demo_url" class="form-label">URL Demo</label>
        <input type="url" name="demo_url" id="demo_url" class="form-control" value="{{ $project->demo_url }}">
    </div>

    <button type="submit" class="btn btn-primary">Salva</button>
</form>
@endsection