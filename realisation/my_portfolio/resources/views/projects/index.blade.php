@extends('layouts.app')

@section('content')
<h1 class="mb-4">Projects</h1>
<div class="row row-cols-1 row-cols-md-3 g-4">
  @foreach($projects as $p)
    <div class="col">
      <div class="card h-100">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">{{ $p['title'] }}</h5>
          <p class="card-text text-secondary">{{ $p['excerpt'] }}</p>
          <div class="mt-auto d-flex gap-2">
            <a class="btn btn-outline-light btn-sm" href="{{ route('projects.show', $p['slug']) }}">
              <i class="fas fa-info-circle"></i> Details
            </a>
          </div>
        </div>
      </div>
    </div>
  @endforeach
</div>
@endsection
