@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>I miei progetti</h1>
        <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">
            Nuovo progetto
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-hover align-middle">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Titolo</th>
                    <th class="d-none d-sm-table-cell">Categoria</th>
                    <th class="d-none d-sm-table-cell">Tecnologie</th>
                    <th class="text-end">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($projects as $project)
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->title }}</td>
                        <td class="d-none d-sm-table-cell text-capitalize">{{ $project->category }}</td>
                        <td class="d-none d-sm-table-cell">{{ $project->technologies }}</td>
                        <td class="text-end">
                            <a href="{{ route('admin.projects.show', $project) }}" class="btn btn-sm btn-primary">
                                Dettagli
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted">Nessun progetto presente.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
