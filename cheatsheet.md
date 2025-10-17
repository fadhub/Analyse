Checklist Live Coding Laravel (Projet Portfolio)

1. Créer le projet Laravel
composer create-project laravel/laravel portfolio
2️⃣ Créer le Layout Blade
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --primary: #ffffff;
            --accent: #0d6efd;
            --text-light: #ffffff;
            --text-dark: #111827;
            --background-dark: #f8f9fa;
            --background-light: #ffffff;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--background-dark);
            color: var(--text-dark);
        }

        .navbar {
            background-color: var(--primary);
            padding: 1rem 0;
        }

        .navbar-light .navbar-brand, .navbar-light .nav-link { color: var(--text-dark) !important; }
        .navbar-light .nav-link:hover { color: var(--accent) !important; }

        .hero-section {
            min-height: 70vh;
            background: var(--background-dark);
            padding-top: 100px;
            padding-bottom: 80px;
        }

        .hero-section h1 { font-size: 3.5rem; color: var(--text-dark); font-weight: 700; }
        .hero-section h2 { color: var(--text-dark); margin-top: 0.5rem; font-weight: 500; }
        .btn-primary { background-color: var(--accent); border-color: var(--accent); }
        .btn-primary:hover { background-color: transparent; border-color: var(--accent); color: var(--accent); }

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

    

    <footer class="text-center py-4 mt-5" style="background-color: var(--primary); color: #000;">
        &copy; 2025 - Portfolio Développeur
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

5️⃣ Créer le Service
Fichier : app/Services/DeveloperService.php

6. Créer le contrôleur
php artisan make:controller PortfolioController
7️⃣ Créer la Vue

Fichier : resources/views/home.blade.php
 7. Configurer la route
Route::get('/', [PortfolioController::class, 'index'])->name('home');
php artisan optimize:clear
composer dump-autoload
