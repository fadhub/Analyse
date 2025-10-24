@extends('layouts.app')

@section('content')
<div class="row align-items-center g-4">
  <div class="col-md-6">
    <img src="/images/me.png" class="img-fluid rounded" alt="Portrait">
  </div>
  <div class="col-md-6">
    <h1 class="mb-3">About Me</h1>
    <p class="text-secondary">{{ $profile['bio'] }}</p>
    <ul class="mt-3">
      @foreach($profile['skills'] as $s)
        <li>{{ $s['name'] }}</li>
      @endforeach
    </ul>
  </div>
</div>
@endsection
