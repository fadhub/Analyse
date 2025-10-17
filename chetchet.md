Checklist Live Coding Laravel (Projet Portfolio)

1. Créer le projet Laravel
composer create-project laravel/laravel portfolio
4️⃣ Créer le Layout Blade
Fichier : resources/views/layouts/app.blade.php
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