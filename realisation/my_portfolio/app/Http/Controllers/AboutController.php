<?php

namespace App\Http\Controllers;

use App\Services\DeveloperService;

class AboutController extends Controller
{
    public function __construct(private DeveloperService $developerService) {}

    public function index()
    {
        $profile = $this->developerService->getProfile();
        return view('about', compact('profile'));
    }
}
