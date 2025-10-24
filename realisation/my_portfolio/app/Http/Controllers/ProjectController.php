<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProjectService;

class ProjectController extends Controller
{
    public function __construct(private ProjectService $projectService) {}

    public function index()
    {
        $projects = $this->projectService->all();
        return view('projects.index', compact('projects'));
    }

    public function show(string $title)
    {
        $project = $this->projectService->findBySlug($title);
        abort_if(!$project, 404);
        return view('projects.show', compact('project'));
    }
}
