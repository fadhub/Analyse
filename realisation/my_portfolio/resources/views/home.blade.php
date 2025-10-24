@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="hero" id="home">
  <div class="hero-content">
    <h1>Hi, I'm {{ $profile['name'] }}</h1>
    <h2>{{ $profile['title'] }}</h2>
    <p>{{ $profile['bio'] }}</p>
    <div class="social-links">
      <a href="#projects" class="btn-primary">Projects</a>

      @foreach($profile['socials'] as $s)
        @php($type = $s['type'])
        @if($type === 'github')
          <a href="{{ $s['url'] }}" target="_blank" class="social-icon github" title="GitHub" aria-label="GitHub">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M12 .5a12 12 0 00-3.79 23.4c.6.11.82-.26.82-.58v-2.03c-3.34.73-4.04-1.61-4.04-1.61-.55-1.4-1.35-1.77-1.35-1.77-1.1-.75.08-.74.08-.74 1.22.09 1.86 1.26 1.86 1.26 1.08 1.85 2.84 1.32 3.53 1.01.11-.78.42-1.32.76-1.62-2.66-.3-5.46-1.33-5.46-5.9 0-1.3.47-2.36 1.24-3.19-.12-.3-.54-1.52.12-3.17 0 0 1.01-.32 3.3 1.22a11.5 11.5 0 016 0c2.29-1.54 3.3-1.22 3.3-1.22.66 1.65.24 2.87.12 3.17.77.83 1.24 1.9 1.24 3.19 0 4.58-2.8 5.6-5.47 5.9.43.37.81 1.1.81 2.22v3.29c0 .32.21.7.82.58A12 12 0 0012 .5z" fill="#FFFFFF"/>
            </svg>
          </a>
        @elseif($type === 'linkedin')
          <a href="{{ $s['url'] }}" target="_blank" class="social-icon linkedin" title="LinkedIn" aria-label="LinkedIn">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <rect x="1" y="1" width="22" height="22" rx="6" fill="none" stroke="#2DA3FF" stroke-width="1.4"/>
              <path d="M7.5 10.5v7.5H5V10.5h2.5zM6.25 9.5a1.25 1.25 0 110-2.5 1.25 1.25 0 010 2.5zM12 10.5v1.25c.35-.6 1-1 1.8-1 2 0 2.5 1.25 2.5 3v4.25h-2.5v-3.75c0-.9-.3-1.5-1.25-1.5-.7 0-1.1.45-1.3.9-.05.12-.05.3-.05.47V18h-2.5v-7.5h2.5z" fill="#58A6FF"/>
            </svg>
          </a>
        @elseif($type === 'email')
          <a href="{{ $s['url'] }}" class="social-icon gmail" title="Gmail" aria-label="Gmail">
            <svg width="28" height="28" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <defs>
                <linearGradient id="g1" x1="0" x2="1" y1="0" y2="1">
                  <stop offset="0" stop-color="#EA4335"/>
                  <stop offset="0.5" stop-color="#FBBC05"/>
                  <stop offset="1" stop-color="#34A853"/>
                </linearGradient>
              </defs>
              <path d="M20.5 4h-17C2.67 4 2 4.67 2 5.5v13c0 .83.67 1.5 1.5 1.5h17c.83 0 1.5-.67 1.5-1.5v-13c0-.83-.67-1.5-1.5-1.5z" fill="rgba(255,255,255,0.02)"/>
              <path d="M3 6.5l8.5 6L20 6.5" stroke="url(#g1)" stroke-width="1.6" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M20 17V8.5l-7.5 5L5 8.5V17" fill="none" stroke="url(#g1)" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </a>
        @endif
      @endforeach
    </div>
  </div>
  <div class="hero-image">
    <img src="/images/me.png" alt="Profile photo" style="width:100%; max-width:320px; border-radius:50%; box-shadow:0 0 40px rgba(147,51,234,0.32); border:3px solid rgba(147,51,234,0.36); object-fit:cover;">
  </div>
  <!-- tech badges intentionally omitted as in provided file -->
</section>

<!-- About Section -->
<section class="about" id="about">
  <h1 class="section-title">About Me</h1>
  <div class="about-image">
    <img src="/images/me.png" alt="Portrait">
  </div>
  <div class="about-content">
    <h2>I'm {{ $profile['name'] }}</h2>
    <p>{{ $profile['bio'] }}</p>
    @foreach($profile['skills'] as $s)
      <div class="skill-card">
        <i class="fas fa-{{ $s['icon'] }}"></i>
        <div>
          <h3>{{ $s['name'] }}</h3>
        </div>
      </div>
    @endforeach
  </div>
</section>

<!-- Projects Section -->
<section class="projects" id="projects">
  <h1 class="section-title">My Projects</h1>
  <div class="projects-grid">
    @foreach($projects as $p)
      <div class="project-card">
        @php($firstImg = $p['images'][0] ?? null)
        <div class="project-image" @if($firstImg) style="background-image:url('{{ $firstImg }}'); background-size:cover; background-position:center;" @endif></div>
        <div class="project-content">
          <h3>{{ $p['title'] }}</h3>
          <p>{{ $p['excerpt'] }}</p>
          <div class="project-links">
            <a href="{{ route('projects.show', $p['slug']) }}" class="btn-secondary btn-demo">
              <i class="fas fa-info-circle"></i> Details
            </a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</section>

@endsection
