@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>I miei progetti</h1>
    </div>

    <table class="table table-striped table-hover align-middle">
        <thead>
            <tr>
                <th>#</th>
                <th>Titolo</th>
                <th>Tecnologie</th>
                <th class="text-end">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->technologies }}</td>
                    <td class="text-end">
                        <a href="{{ route('admin.projects.show', $project) }}" class="btn btn-sm btn-primary">
                            Dettagli
                        </a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center text-muted">Nessun progetto presente.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
