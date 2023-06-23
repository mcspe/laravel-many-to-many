@extends('layouts.app')

@section('content')
  <div class="ms-projects-container">
    @if (session('deleted'))
      <div class="alert alert-success my-3" role="alert">
        {{ session('deleted') }}
      </div>
    @endif
    <table class="table table-dark table-hover">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Titolo</th>
          <th scope="col">Tipologia</th>
          <th scope="col">Tecnologie</th>
          <th scope="col">Azioni</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($projects as $project)
          <tr>
            <th scope="row">{{ $project->id }}</th>
            <td>{{ ucwords($project->title) }}</td>
            <td>
              <span class="badge rounded-pill text-bg-primary">{{ $project->type?->name }}</span>
            </td>
            <td>
              @forelse ($project->technologies as $technology)
                <span class="badge rounded-pill text-bg-info">{{ $technology->name }}</span>
              @empty
                <span> - </span>
              @endforelse
            </td>
            <td>
              <a href="{{ route('admin.project.show', $project) }}" class="btn btn-secondary">
                <i class="fa-regular fa-eye"></i>
              </a>
              <a href="{{ route('admin.project.edit', $project) }}" class="btn btn-primary">
                <i class="fa-solid fa-pencil"></i>
              </a>
              @include('admin.partials.projectDelete')
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
