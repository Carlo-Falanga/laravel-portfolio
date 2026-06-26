@extends('layouts.admin')

@section('content')
    <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-3">
        <a href="{{ route('admin.projects.index') }}" class="btn btn-link px-0">
            &larr; Torna all'elenco
        </a>

        <div class="d-flex flex-wrap gap-2">
            <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-warning">
                Modifica
            </a>

            <form action="{{ route('admin.projects.destroy', $project) }}" method="POST"
                onsubmit="return confirm('Sei sicuro di voler eliminare questo progetto?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Elimina</button>
            </form>
        </div>
    </div>

    <div class="card shadow-sm">
        @if ($project->thumbnail)
            <img src="{{ $project->thumbnail }}" alt="{{ $project->title }}"
                class="card-img-top" style="max-height: 320px; object-fit: cover;">
        @endif

        <div class="card-body">
            <h1 class="card-title h3">{{ $project->title }}</h1>

            @if ($project->technologies)
                <div class="mb-3">
                    @foreach (explode(',', $project->technologies) as $tech)
                        <span class="badge bg-secondary">{{ trim($tech) }}</span>
                    @endforeach
                </div>
            @endif

            <p class="card-text">{{ $project->description }}</p>

            <div class="mt-4">
                @if ($project->repository_url)
                    <a href="{{ $project->repository_url }}" target="_blank" class="btn btn-dark">
                        Repository
                    </a>
                @endif

                @if ($project->demo_url)
                    <a href="{{ $project->demo_url }}" target="_blank" class="btn btn-success">
                        Demo live
                    </a>
                @endif
            </div>
        </div>

        <div class="card-footer text-muted small">
            Creato il {{ $project->created_at->format('d/m/Y') }}
        </div>
    </div>
@endsection
