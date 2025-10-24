@extends('layouts.app')

@section('content')
<a href="{{ route('projects.index') }}" class="text-decoration-none">← Retour</a>
<h1 class="mt-3">{{ $project['title'] }}</h1>
<p class="text-secondary">{{ $project['description'] }}</p>

@if(!empty($project['images']))
  <div class="row g-3 my-2">
    @foreach($project['images'] as $img)
      <div class="col-6">
        <img src="{{ $img }}" class="img-fluid rounded" alt="screenshot">
      </div>
    @endforeach
  </div>
@endif

@if(!empty($project['tech']))
  <h5 class="mt-4">Stack</h5>
  <div class="d-flex gap-2 flex-wrap">
    @foreach($project['tech'] as $t)
      <span class="badge text-bg-dark border">{{ $t }}</span>
    @endforeach
  </div>
@endif
@endsection
