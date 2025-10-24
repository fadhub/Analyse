<?php

namespace App\Http\Controllers;

use App\Services\DeveloperService;
use App\Services\ProjectService;

class HomeController extends Controller
{
    public function __construct(
        private DeveloperService $developerService,
        private ProjectService $projectService
    ) {}

    public function index()
    {
        $profile = $this->developerService->getProfile();
        $projects = $this->projectService->all();
        return view('home', compact('profile', 'projects'));
    }
}
