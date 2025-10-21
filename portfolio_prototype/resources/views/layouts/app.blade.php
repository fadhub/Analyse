<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            /* Purple / magenta themed palette inspired by the provided design */
            --primary: #2b0b2f; /* deep purple base */
            --accent-1: #9b31ff; /* magenta/purple highlight */
            --accent-2: #ff6b9a; /* pink accent */
            --glow: rgba(155,49,255,0.18);
            --text-light: #f6f0ff;
            --text-dark: #efe7ff;
            --background-dark: #0b0710; /* very dark violet */
            --background-mid: #16081a;
            --background-light: #2b102b;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--background-dark);
            color: var(--text-dark);
        }

        .navbar {
            background: linear-gradient(180deg, rgba(27,6,27,0.9), transparent);
            padding: 1rem 0;
            border-bottom: 1px solid rgba(255,255,255,0.03);
        }

        .navbar-brand { color: var(--accent-1) !important; font-weight:700; }
        .nav-link { color: rgba(255,255,255,0.85) !important; }
        .nav-link:hover { color: var(--accent-2) !important; }

        .hero-section {
            min-height: 80vh;
            background: radial-gradient(1200px 400px at 75% 55%, rgba(155,49,255,0.12), transparent),
                        linear-gradient(180deg, var(--background-mid), var(--background-dark));
            padding-top: 120px;
            padding-bottom: 80px;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            right: 5%;
            top: 40%;
            width: 480px;
            height: 480px;
            background: radial-gradient(circle at center, rgba(155,49,255,0.18), transparent 40%);
            filter: blur(48px);
            transform: translateY(-50%);
            pointer-events: none;
        }

        .hero-section h1 { font-size: 4.5rem; color: var(--text-light); font-weight: 800; letter-spacing: -1px; }
        .hero-section h2 { color: var(--accent-1); margin-top: 0.6rem; font-weight: 700; font-size: 2rem; }
        /* CTA gradient button */
        .btn-primary {
            background: linear-gradient(90deg, var(--accent-1), var(--accent-2));
            border: none;
            color: var(--text-light);
            box-shadow: 0 10px 30px var(--glow);
        }
        .btn-primary:hover { opacity: 0.95; transform: translateY(-2px); }

        @media (max-width: 768px) {
            .hero-section h1 { font-size: 2.5rem; }
            .hero-section h2 { font-size: 1.5rem; }
        }
    </style>
</head>
<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">{{ $developer['nom'] ?? config('app.name') }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Accueil</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container-fluid">
        @yield('content')
    </main>

    <footer class="text-center py-4 mt-5" style="background-color: var(--primary); color: #000;">
        &copy; 2025 - Portfolio Développeur
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>