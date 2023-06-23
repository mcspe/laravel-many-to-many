@extends('layouts.app')

@section('content')
  <div class="ms-project-card-title d-flex justify-content-between w-75 mb-3">
    <h2>{{ ucwords($project->title) }}</h2>
    <div class="ms-cta">
      <a href="{{ route('admin.project.edit', $project) }}" class="btn btn-primary ms-modify"><i class="fa-solid fa-pencil"></i></a>
      @include('admin.partials.projectDelete')
    </div>
  </div>
  <div class="ms-project-card-body d-flex gap-5 p3 w-75">
    <div class="ms-img-preview w-75">
      <img src="{{ asset('storage/' . $project->image_path) }}" alt="{{$project->title}}">
    </div>
    <div class="ms-card-info">
      <p>
        <span title="Type" class="badge rounded-pill text-bg-primary">{{ $project->type?->name }}</span>
        @forelse ($project->technologies as $technology)
          <span title="Technology" class="badge rounded-pill text-bg-info">{{ $technology->name }}</span>
        @empty
          <span> - </span>
        @endforelse
      </p>
      <p>
        <span class="ms-tag">Slug: </span>
        <span class="ms-info">{{ $project->slug }}</span>
      </p>
      <p>
        <span class="ms-tag">Image: </span>
        <span class="ms-info">{{ $project->image_path }}</span>
      </p>
      <p>
        <span class="ms-tag">Summary: </span>
        <p class="ms-info">
          {!! $project->summary !!}
        </p>
      </p>
      <p>
        <span class="ms-tag">Link: </span>
        <a href="{{ $project->link }}" target="_blank">{{ $project->link }}</a>
      </p>
    </div>

  </div>
@endsection
