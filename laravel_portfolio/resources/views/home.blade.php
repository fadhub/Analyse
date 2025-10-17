@extends('layouts.app')

@section('content')
<section id="home" class="hero-section d-flex align-items-center justify-content-center flex-column text-center">
    <h1 class="mb-2">{{ $developer['nom'] }}</h1>
    <h2 class="mb-3">{{ $developer['role'] }}</h2>
    <p class="mt-3 text-dark w-75 mx-auto">{{ $developer['bio'] }}</p>
    <p class="mt-3 text-dark small d-flex align-items-center justify-content-center gap-2">
        <span>{{ $developer['email'] }}</span>
    </p>
</section>
@endsection
